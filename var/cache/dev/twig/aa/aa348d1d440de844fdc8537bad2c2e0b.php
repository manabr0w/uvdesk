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

/* @UVDeskSupportCenter/Staff/branding.html.twig */
class __TwigTemplate_132eb5ac3d97290f323c6343b870318e extends Template
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
            'title' => [$this, 'block_title'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/branding.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/branding.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/branding.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Branding"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 8
        yield "    <style>
        .uv-image-upload-brick {
            margin: 10px 0px;
        }
        .uv-color-field {
            color: #fff;
            width: 100px;
            text-transform: uppercase;
        }
        .uv-header-link-wrapper {
            padding-bottom: 20px;
        }
        .uv-footer-link-wrapper {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
        }
        .uv-knowledgebase-layout  {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
            margin-top: 20px;
        }
        .uv-knowledgebase-layout input[type='radio'] {
            display: none;
        }
        #links .uv-field-block input:first-child {
            width: 200px;
            margin-bottom: 0;
        }
        #links .remove-link {
            margin-left: 10px;
        }
\t\t.grammarly-fix-broadcast {
\t\t\tmax-width: 518px;
\t\t}
        #uv-reset-colors {
            float: right;
            cursor: pointer;
            position: relative;
            z-index:1 ;
        }
    </style>

\t<div class=\"uv-inner-section\">\t\t
\t\t";
        // line 52
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 53
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Branding";
        // line 54
        yield "
\t\t";
        // line 55
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 55, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 55, $this->source); })())], "method", false, false, false, 55), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 55, $this->source); })())], "method", false, false, false, 55);
        yield "

\t\t<div class=\"uv-view ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "cookies", [], "any", false, false, false, 57) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "cookies", [], "any", false, false, false, 57), "get", ["uv-asideView"], "method", false, false, false, 57))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Branding"), "html", null, true);
        yield "</h1>
\t\t\t<!--Tabs-->
\t\t\t<div class=\"uv-tabs\">
\t\t\t\t<ul>
\t\t\t\t\t<li for=\"general\" ";
        // line 62
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 62, $this->source); })()) == "general") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 62, $this->source); })()) == ""))) {
            yield "class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "html", null, true);
        yield "</li>
\t\t\t\t\t<li for=\"knowledgebase\" ";
        // line 63
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 63, $this->source); })()) == "knowledgebase")) {
            yield " class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledgebase"), "html", null, true);
        yield "</li>
                    <li for=\"time\" ";
        // line 64
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 64, $this->source); })()) == "time")) {
            yield "class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Time"), "html", null, true);
        yield "</li>
\t\t\t\t\t<li for=\"seo\" ";
        // line 65
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 65, $this->source); })()) == "seo")) {
            yield "class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEO"), "html", null, true);
        yield "</li>
                    ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 66, $this->source); })()), "isFileExists", ["apps/uvdesk/sla"], "method", false, false, false, 66)) {
            // line 67
            yield "                        <li for=\"business-hours\" ";
            if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 67, $this->source); })()) == "business-hours")) {
                yield "class=\"uv-tab-active\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Business Hours"), "html", null, true);
            yield "</li>
                    ";
        }
        // line 69
        yield "\t\t\t\t\t<li for=\"links\" ";
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 69, $this->source); })()) == "links")) {
            yield "class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Links"), "html", null, true);
        yield "</li>
                    <li for=\"advanced\" ";
        // line 70
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()) == "advanced")) {
            yield "class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced"), "html", null, true);
        yield "</li>
\t\t\t\t\t<li for=\"broadcasting\" ";
        // line 71
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()) == "broadcasting")) {
            yield "class=\"uv-tab-active\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Broadcast Message"), "html", null, true);
        yield "</li>                  
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Tabs-->

            <!--Tab View-->
\t\t\t<div class=\"uv-tab-view ";
        // line 77
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 77, $this->source); })()) == "business-hours")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"business-hours\">
\t\t\t\t<!--Form-->
\t\t\t\t<form method=\"post\" action=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "business-hours"]);
        yield "\" id=\"businessHoursSettingForm\">
                    <div class=\"uv-element-block\">
\t\t\t\t\t\t";
        // line 82
        yield "\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t<input name=\"status\" type=\"checkbox\"  ";
        // line 85
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 85, $this->source); })()), "businessHourStatus", [], "any", false, false, false, 85)) ? ("checked") : (""));
        yield ">
\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Business Hours is Active"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t                </div>
\t                <div class=\"business-hours\" style=\"margin-top: 20px; ";
        // line 92
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 92, $this->source); })()), "businessHourStatus", [], "any", false, false, false, 92)) ? ("") : ("display: none"));
        yield "\">
\t\t                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["days"]) || array_key_exists("days", $context) ? $context["days"] : (function () { throw new RuntimeError('Variable "days" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 94
            yield "\t\t                \t";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["business_hours"]) || array_key_exists("business_hours", $context) ? $context["business_hours"] : (function () { throw new RuntimeError('Variable "business_hours" does not exist.', 94, $this->source); })())) > 0)) {
                // line 95
                yield "\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"businessHours[";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "][is_active]\" type=\"checkbox\" ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["business_hours"] ?? null), $context["day"], [], "array", false, true, false, 98), "is_active", [], "array", true, true, false, 98)) {
                    yield " checked=\"\" ";
                }
                yield " >
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\" style=\"width: 140px;\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["day"]), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "][from]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["time_interval"]) || array_key_exists("time_interval", $context) ? $context["time_interval"] : (function () { throw new RuntimeError('Variable "time_interval" does not exist.', 104, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["time"]) {
                    // line 105
                    yield "\t\t\t\t\t\t\t\t        \t<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["business_hours"]) || array_key_exists("business_hours", $context) ? $context["business_hours"] : (function () { throw new RuntimeError('Variable "business_hours" does not exist.', 105, $this->source); })()), $context["day"], [], "array", false, false, false, 105), "from", [], "array", false, false, false, 105) == $context["key"])) {
                        yield " selected=\"selected\" ";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                    yield "</option>
\t\t\t\t\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['time'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "][to]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["time_interval"]) || array_key_exists("time_interval", $context) ? $context["time_interval"] : (function () { throw new RuntimeError('Variable "time_interval" does not exist.', 109, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["time"]) {
                    // line 110
                    yield "\t\t\t\t\t\t\t\t        \t<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["business_hours"]) || array_key_exists("business_hours", $context) ? $context["business_hours"] : (function () { throw new RuntimeError('Variable "business_hours" does not exist.', 110, $this->source); })()), $context["day"], [], "array", false, false, false, 110), "to", [], "array", false, false, false, 110) == $context["key"])) {
                        yield " selected=\"selected\" ";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                    yield "</option>
\t\t\t\t\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['time'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                yield "\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t</div>
\t\t                \t";
            } else {
                // line 115
                yield "\t\t                \t\t<div>
\t\t                \t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"businessHours[";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "][is_active]\" type=\"checkbox\" ";
                if ((($context["day"] != "Saturday") && ($context["day"] != "Sunday"))) {
                    yield " checked=\"checked\" ";
                }
                yield " >
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\" style=\"width: 200px;\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["day"]), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "][from]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        ";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["time_interval"]) || array_key_exists("time_interval", $context) ? $context["time_interval"] : (function () { throw new RuntimeError('Variable "time_interval" does not exist.', 124, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["time"]) {
                    // line 125
                    yield "\t\t\t\t\t\t\t\t        \t<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" ";
                    if (((($context["day"] != "Saturday") && ($context["day"] != "Sunday")) && ($context["key"] == "9:00"))) {
                        yield " selected=\"selected\" ";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                    yield "</option>
\t\t\t\t\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['time'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                yield "\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["day"], "html", null, true);
                yield "][to]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["time_interval"]) || array_key_exists("time_interval", $context) ? $context["time_interval"] : (function () { throw new RuntimeError('Variable "time_interval" does not exist.', 129, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["time"]) {
                    // line 130
                    yield "\t\t\t\t\t\t\t\t        \t<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" ";
                    if (((($context["day"] != "Saturday") && ($context["day"] != "Sunday")) && ($context["key"] == "18:00"))) {
                        yield " selected=\"selected\" ";
                    }
                    yield ">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["time"], "html", null, true);
                    yield "</option>
\t\t\t\t\t\t\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['time'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                yield "\t\t\t\t\t\t\t\t    </select>
\t\t                \t\t</div>
\t\t                \t";
            }
            // line 135
            yield "\t\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['day'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "\t                </div>

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
\t\t\t\t</form>
\t\t\t\t<!--//Form-->
\t\t\t</div>
\t\t\t<!--//Tab View-->

\t\t\t<!--Tab View-->
\t\t\t<div class=\"uv-tab-view ";
        // line 147
        if ((((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 147, $this->source); })()) == "general") || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 147, $this->source); })()) == ""))) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"general\">
\t\t\t\t<!--Form-->
\t\t\t\t<form method=\"post\" action=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "general"]);
        yield "\" id=\"generalSettingForm\" enctype=\"multipart/form-data\">
                    <!-- Image block -->
                    <div class=\"uv-image-upload-wrapper uv-no-error-success-icon\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Wide Logo"), "html", null, true);
        yield "</label>
                            <div class=\"uv-field-block\">
                                ";
        // line 155
        $context["isLogo"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 155, $this->source); })()), "logo", [], "any", false, false, false, 155)) ? (1) : (0));
        // line 156
        yield "                                <div class=\"uv-image-upload-brick uv-image-upload-brick-200 ";
        if ((isset($context["isLogo"]) || array_key_exists("isLogo", $context) ? $context["isLogo"] : (function () { throw new RuntimeError('Variable "isLogo" does not exist.', 156, $this->source); })())) {
            yield "uv-on-drop-shadow";
        }
        yield "\" ";
        if ((isset($context["isLogo"]) || array_key_exists("isLogo", $context) ? $context["isLogo"] : (function () { throw new RuntimeError('Variable "isLogo" does not exist.', 156, $this->source); })())) {
            yield "style=\"border-color: transparent;\"";
        }
        yield ">
                                    <input type=\"file\" name=\"website[logo]\" id=\"uv-upload-profile\" accept=\"image/*\">
                                    <div class=\"uv-image-upload-placeholder\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"32\" viewBox=\"0 0 48 32\">
                                            <path fill=\"#7c74f1\" fill-rule=\"evenodd\" d=\"M26.516,22.252H21.477V17.226h-3.75L24,11.031l6.269,6.195h-3.75v5.026ZM29.973,8.138A9.1,9.1,0,0,0,24,6.005a8.947,8.947,0,0,0-4.863,1.4,9.78,9.78,0,0,0-3.457,3.682A7.494,7.494,0,0,0,9,18.512a7.2,7.2,0,0,0,2.2,5.289,7.234,7.234,0,0,0,5.3,2.192H32.727A6.294,6.294,0,0,0,39,19.739,5.933,5.933,0,0,0,37.3,15.5a6.113,6.113,0,0,0-4.1-1.958A9.112,9.112,0,0,0,29.973,8.138Z\"/>
                                        </svg>
                                    </div>
                                    <img id=\"dynamic-image-upload\" ";
        // line 163
        if ((isset($context["isLogo"]) || array_key_exists("isLogo", $context) ? $context["isLogo"] : (function () { throw new RuntimeError('Variable "isLogo" does not exist.', 163, $this->source); })())) {
            yield " src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "request", [], "any", false, false, false, 163), "scheme", [], "any", false, false, false, 163) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "request", [], "any", false, false, false, 163), "httpHost", [], "any", false, false, false, 163)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 163, $this->source); })()), "logo", [], "any", false, false, false, 163), "html", null, true);
            yield "\" ";
        }
        yield ">

                                </div>
                                <div class=\"uv-image-info-brick\">
                                    <span class=\"uv-field-info\">";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload an Image (200px x 48px) in</br> PNG or JPG Format");
        yield "</span>
                                </div>
                            </div>
                            <span class=\"uv-field-info\">";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will be shown as Logo on Knowledgebase and Helpdesk"), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                    <!-- //Image block -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website Status"), "html", null, true);
        yield "</label>
                          <div class=\"uv-field-block\">
                            <div class=\"uv-checkbox uv-margin-top-5\">
                                <input type=\"checkbox\" name=\"website[status]\" style=\"cursor:pointer;\" ";
        // line 180
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 180, $this->source); })()), "status", [], "any", false, false, false, 180)) ? ("checked=\"checked\"") : (""));
        yield " >
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-field-info uv-margin-top-5\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable front end website and knowledgebase for customer(s)"), "html", null, true);
        yield "</span>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 191
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Brand Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[brandColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 193
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 193, $this->source); })()), "brandColor", [], "any", false, false, false, 193)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 193, $this->source); })()), "brandColor", [], "any", false, false, false, 193), "html", null, true)) : ("#7C70F4"));
        yield "\" style=\"background:";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 193, $this->source); })()), "brandColor", [], "any", false, false, false, 193)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 193, $this->source); })()), "brandColor", [], "any", false, false, false, 193), "html", null, true)) : ("#7C70F4"));
        yield "\" placeholder=\"#7C70F4\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->
                    
\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[name]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 202
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 202, $this->source); })()), "name", [], "any", false, false, false, 202)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 202, $this->source); })()), "name", [], "any", false, false, false, 202), "html", null, true)) : (""));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default Language (Optional)"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
                            <select name=\"defaultLocale\" class=\"uv-select\">
                                <option value=\"\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select default language"), "html", null, true);
        yield "</option>
                                ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 213, $this->source); })()), "getLocalesList", [], "method", false, false, false, 213));
        foreach ($context['_seq'] as $context["localeCode"] => $context["localeName"]) {
            // line 214
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["localeCode"], "html", null, true);
            yield "\" ";
            yield ((((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 214, $this->source); })()) == $context["localeCode"])) ? ("selected='selected'") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["localeName"], "html", null, true);
            yield "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['localeCode'], $context['localeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                            </select>
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn general-btn\" href=\"#\" value=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
\t\t\t\t</form>
\t\t\t\t<!--//Form-->
\t\t\t</div>
\t\t\t<!--//Tab View-->

\t\t\t<!--Tab View-->
            <div class=\"uv-tab-view ";
        // line 230
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 230, $this->source); })()) == "knowledgebase")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"knowledgebase\">
                <!--Form-->
\t\t\t\t<form method=\"post\" action=\"";
        // line 232
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "knowledgebase"]);
        yield "\" id=\"knowledgebaseForm\">
                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        <span  id=\"uv-reset-colors\" class=\"uv-icon-history\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use Default Colors"), "html", null, true);
        yield "\"></span>
                        ";
        // line 237
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page Background Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[pageBackgroundColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 239, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 239), "html", null, true);
        yield "\" style=\"background: ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 239, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 239)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 239, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 239), "html", null, true)) : ("#FFFFFF"));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 247
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header Background Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[headerBackgroundColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 249
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 249, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 249)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 249, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 249), "html", null, true)) : ("#FFFFFF"));
        yield "\" style=\"background: ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 249, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 249)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 249, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 249), "html", null, true)) : ("#FFFFFF"));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 257
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Banner Background Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[bannerBackgroundColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 259
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 259, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 259)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 259, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 259), "html", null, true)) : ("#70B5F4"));
        yield "\" style=\"background: ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 259, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 259)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 259, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 259), "html", null, true)) : ("#70B5F4"));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 267
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page Link Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[linkColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 269
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 269, $this->source); })()), "linkColor", [], "any", false, false, false, 269)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 269, $this->source); })()), "linkColor", [], "any", false, false, false, 269), "html", null, true)) : ("#C427A1"));
        yield "\" style=\"background: ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 269, $this->source); })()), "linkColor", [], "any", false, false, false, 269)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 269, $this->source); })()), "linkColor", [], "any", false, false, false, 269), "html", null, true)) : ("#C427A1"));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 277
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page Link Hover Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[linkHoverColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 279
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 279, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 279)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 279, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 279), "html", null, true)) : ("#2750C4"));
        yield "\" style=\"background: ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 279, $this->source); })()), "linkColor", [], "any", false, false, false, 279)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 279, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 279), "html", null, true)) : ("#2750C4"));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        ";
        // line 287
        yield "\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article Text Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[articleTextColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"";
        // line 289
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 289, $this->source); })()), "articleTextColor", [], "any", false, false, false, 289)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 289, $this->source); })()), "articleTextColor", [], "any", false, false, false, 289), "html", null, true)) : ("#333333"));
        yield "\" style=\"background: ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 289, $this->source); })()), "linkColor", [], "any", false, false, false, 289)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 289, $this->source); })()), "articleTextColor", [], "any", false, false, false, 289), "html", null, true)) : ("#333333"));
        yield "\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag Line"), "html", null, true);
        yield "</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[siteDescription]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 298
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 298, $this->source); })()), "siteDescription", [], "any", false, false, false, 298)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 298, $this->source); })()), "siteDescription", [], "any", false, false, false, 298), "html", null, true)) : (""));
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi! how can we help?"), "html", null, true);
        yield " \">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <div class=\"uv-knowledgebase-layout uv-no-error-success-icon\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Layout "), "html", null, true);
        yield "</label>
                            <div class=\"uv-layout-icon-wrapper\">
                                <label for=\"homepage-masonry\" class=\"uv-layout-icon uv-layout-grid ";
        // line 307
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 307, $this->source); })()), "homepageContent", [], "any", false, false, false, 307) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 307, $this->source); })()), "homepageContent", [], "any", false, false, false, 307) == "masonry"))) {
            yield "uv-layout-icon-active";
        }
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Masonry"), "html", null, true);
        yield "\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-masonry\" value=\"masonry\" ";
        // line 308
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 308, $this->source); })()), "homepageContent", [], "any", false, false, false, 308) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 308, $this->source); })()), "homepageContent", [], "any", false, false, false, 308) == "masonry"))) {
            yield "checked";
        }
        yield "/>

                                <label for=\"homepage-folder\" class=\"uv-layout-icon uv-layout-folder ";
        // line 310
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 310, $this->source); })()), "homepageContent", [], "any", false, false, false, 310) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 310, $this->source); })()), "homepageContent", [], "any", false, false, false, 310) == "folder"))) {
            yield "uv-layout-icon-active";
        }
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folder"), "html", null, true);
        yield "\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-folder\" value=\"folder\" ";
        // line 311
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 311, $this->source); })()), "homepageContent", [], "any", false, false, false, 311) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 311, $this->source); })()), "homepageContent", [], "any", false, false, false, 311) == "folder"))) {
            yield "checked";
        }
        yield "/>

                                <label for=\"homepage-category\" class=\"uv-layout-icon uv-layout-category ";
        // line 313
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 313, $this->source); })()), "homepageContent", [], "any", false, false, false, 313) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 313, $this->source); })()), "homepageContent", [], "any", false, false, false, 313) == "category"))) {
            yield "uv-layout-icon-active";
        }
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        yield "\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-category\" value=\"category\" ";
        // line 314
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 314, $this->source); })()), "homepageContent", [], "any", false, false, false, 314) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 314, $this->source); })()), "homepageContent", [], "any", false, false, false, 314) == "category"))) {
            yield "checked";
        }
        yield "/>

                                <label for=\"homepage-article\" class=\"uv-layout-icon uv-layout-article ";
        // line 316
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 316, $this->source); })()), "homepageContent", [], "any", false, false, false, 316) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 316, $this->source); })()), "homepageContent", [], "any", false, false, false, 316) == "article"))) {
            yield "uv-layout-icon-active";
        }
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular Article"), "html", null, true);
        yield "\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-article\" value=\"article\" ";
        // line 317
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 317, $this->source); })()), "homepageContent", [], "any", false, false, false, 317) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 317, $this->source); })()), "homepageContent", [], "any", false, false, false, 317) == "article"))) {
            yield "checked";
        }
        yield "/>
                            </div>
                        </div>

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[ticketCreateOption]\" type=\"checkbox\" ";
        // line 325
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 325, $this->source); })()), "ticketCreateOption", [], "any", false, false, false, 325)) ? ("checked=\"checked\"") : (""));
        yield " />
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Create Option"), "html", null, true);
        yield "</span>
                            </label>
                        </div>
\t\t\t\t\t    <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[loginRequiredToCreate]\" type=\"checkbox\" ";
        // line 337
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 337, $this->source); })()), "loginRequiredToCreate", [], "any", false, false, false, 337)) ? ("checked=\"checked\"") : (""));
        yield "/>
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login Required To Create Tickets"), "html", null, true);
        yield "</span>
                            </label>
                        </div>
\t\t\t\t\t    <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[removeCustomerLoginButton]\" type=\"checkbox\" value=\"1\" ";
        // line 349
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 349, $this->source); })()), "removeCustomerLoginButton", [], "any", false, false, false, 349)) ? ("checked=\"checked\"") : (""));
        yield " />
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Customer Login/Signin Button"), "html", null, true);
        yield "</span>
                            </label>
                        </div>
                        <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[disableCustomerLogin]\" type=\"checkbox\" value=\"1\" ";
        // line 361
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 361, $this->source); })()), "disableCustomerLogin", [], "any", false, false, false, 361)) ? ("checked=\"checked\"") : (""));
        yield " />
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">";
        // line 364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable Customer Login"), "html", null, true);
        yield "</span>
                            </label>
                        </div>
                        <!-- //Field -->
                    </div>

                    <!-- CSRF token Field -->
                    ";
        // line 372
        yield "                    <!-- //CSRF token Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn knowledgebase-btn\" href=\"#\" value=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
                </form>
\t\t\t</div>
\t\t\t<!--//Tab View-->

            <!--Tab View-->
            <div class=\"uv-tab-view ";
        // line 382
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 382, $this->source); })()) == "seo")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"seo\">
                <form method=\"post\" action=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "seo"]);
        yield "\" id=\"seoForm\">

\t\t\t\t\t<!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Description (Recommended)"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"metaDescription\" class=\"uv-field\">";
        // line 389
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 389, $this->source); })()), "metaDescription", [], "any", false, false, false, 389)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 389, $this->source); })()), "metaDescription", [], "any", false, false, false, 389), "html", null, true)) : (""));
        yield "</textarea>
                        </div>
                    </div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 396
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Keywords (Recommended)"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"metaKeywords\" class=\"uv-field\">";
        // line 398
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 398, $this->source); })()), "metaKeywords", [], "any", false, false, false, 398)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 398, $this->source); })()), "metaKeywords", [], "any", false, false, false, 398), "html", null, true)) : (""));
        yield "</textarea>
                        </div>
                    </div>
\t\t\t\t\t<!-- //Field -->

                    <!-- CSRF token Field -->
                    <input type=\"hidden\" name=\"_token\" value=\"\"/>
                    <!-- //CSRF token Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn seo-btn\" href=\"#\" value=\"";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
                </form>
\t\t\t</div>
\t\t\t<!--//Tab View-->

            <!--Tab View-->
            <div class=\"uv-tab-view ";
        // line 415
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 415, $this->source); })()) == "links")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"links\">
                <form method=\"post\" action=\"";
        // line 416
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "links"]);
        yield "\" id=\"linksForm\" class=\"uv-no-error-success-icon\">

                    <div class=\"uv-header-link-wrapper\">
                        <div class=\"links\">
                            ";
        // line 420
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 420, $this->source); })()), "headerLinks", [], "any", false, false, false, 420))) {
            // line 421
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 421, $this->source); })()), "headerLinks", [], "any", false, false, false, 421));
            foreach ($context['_seq'] as $context["key"] => $context["link"]) {
                // line 422
                yield "                                    <!-- Field -->
                                    <div class=\"uv-element-block\">
                                        <label class=\"uv-field-label\">";
                // line 424
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header Link"), "html", null, true);
                yield " #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</label>
                                        <div class=\"uv-field-block\">
                                            <input type=\"text\" class=\"uv-field\" name=\"headerLinks[";
                // line 426
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "][label]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 426), "html", null, true);
                yield "\"  placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
                yield "\"/>
                                            <input type=\"text\" class=\"uv-field\" name=\"headerLinks[";
                // line 427
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "][url]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 427), "html", null, true);
                yield "\"  placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL (with http:// or https://)"), "html", null, true);
                yield "\" />
                                            <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                        </div>
                                    </div>
                                    <!-- //Field -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 433
            yield "                            ";
        } else {
            // line 434
            yield "                                <!-- Field -->
                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header Link"), "html", null, true);
            yield " #1</label>
                                    <div class=\"uv-field-block\">
                                        <input type=\"text\" class=\"uv-field\" name=\"headerLinks[1][label]\" placeholder=\"";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
            yield "\" />
                                        <input type=\"text\" class=\"uv-field\" name=\"headerLinks[1][url]\" placeholder=\"";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL (with http:// or https://)"), "html", null, true);
            yield "\" />
                                        <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                    </div>
                                </div>
                                <!-- //Field -->
                            ";
        }
        // line 445
        yield "                        </div>

                        <a class=\"uv-btn-tag btn-add\" href=\"#\" data-type=\"header\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 448
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add More"), "html", null, true);
        yield "
                        </a>
                    </div>

                    <div class=\"uv-footer-link-wrapper\">
                        <div class=\"links\">
                            ";
        // line 454
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 454, $this->source); })()), "footerLinks", [], "any", false, false, false, 454))) {
            // line 455
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 455, $this->source); })()), "footerLinks", [], "any", false, false, false, 455));
            foreach ($context['_seq'] as $context["key"] => $context["link"]) {
                // line 456
                yield "                                    <!-- Field -->
                                    <div class=\"uv-element-block\">
                                        <label class=\"uv-field-label\">";
                // line 458
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Footer Link"), "html", null, true);
                yield " #";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "</label>
                                        <div class=\"uv-field-block\">
                                            <input type=\"text\" class=\"uv-field\" name=\"footerLinks[";
                // line 460
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "][label]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "label", [], "any", false, false, false, 460), "html", null, true);
                yield "\"  placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
                yield "\"/>
                                            <input type=\"text\" class=\"uv-field\" name=\"footerLinks[";
                // line 461
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "][url]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 461), "html", null, true);
                yield "\"  placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL (with http:// or https://)"), "html", null, true);
                yield "\" />
                                            <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                        </div>
                                    </div>
                                    <!-- //Field -->
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 467
            yield "                            ";
        } else {
            // line 468
            yield "                                <!-- Field -->
                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Footer Link"), "html", null, true);
            yield " #1</label>
                                    <div class=\"uv-field-block\">
                                        <input type=\"text\" class=\"uv-field\" name=\"footerLinks[1][label]\" placeholder=\"";
            // line 472
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
            yield "\" />
                                        <input type=\"text\" class=\"uv-field\" name=\"footerLinks[1][url]\" placeholder=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL (with http:// or https://)"), "html", null, true);
            yield "\" />
                                        <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                    </div>
                                </div>
                                <!-- //Field -->
                            ";
        }
        // line 479
        yield "
                        </div>

                        <a class=\"uv-btn-tag btn-add\" href=\"#\" data-type=\"footer\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add More"), "html", null, true);
        yield "
                        </a>
                    </div>

                    <!--CTA-->
                    <input class=\"uv-btn links-btn\" style=\"margin-top: 15px;\" href=\"#\" value=\"";
        // line 488
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
                    <!--//CTA-->
                </form>
            </div>
            <!--//Tab View-->


                <!--Tab View-->
                <div class=\"uv-tab-view ";
        // line 496
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 496, $this->source); })()) == "advanced")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"advanced\">
                    <form method=\"post\" action=\"";
        // line 497
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "advanced"]);
        yield "\" id=\"advancedForm\">
                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 500
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Custom CSS (Optional)"), "html", null, true);
        yield "</label>
                            <div class=\"uv-field-block\">
                                <textarea name=\"customCSS\" class=\"uv-field\">";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 502, $this->source); })()), "customCSS", [], "any", false, false, false, 502), "html", null, true);
        yield "</textarea>
                            </div>
                            <span class=\"uv-field-info\">";
        // line 504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will be add to the frontend knowledgebase only"), "html", null, true);
        yield "</span>
                        </div>
                        <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Custom Javascript (Optional)"), "html", null, true);
        yield "</label>
                            <div class=\"uv-field-block\">
                                <textarea name=\"script\" class=\"uv-field\">";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 512, $this->source); })()), "script", [], "any", false, false, false, 512), "html", null, true);
        yield "</textarea>
                            </div>
                            <span class=\"uv-field-info\">";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will be add to the frontend knowledgebase only"), "html", null, true);
        yield "</span>
                        </div>
                        <!-- //Field -->

                        <!-- CSRF token Field -->
                        <input type=\"hidden\" name=\"form[_token]\" value=\"";
        // line 519
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 519, $this->source); })()), "generateCsrfToken", ["form"], "method", false, false, false, 519), "html", null, true);
        yield "\"/>
                        <!-- //CSRF token Field -->

                        <!--CTA-->
                        <input class=\"uv-btn advanced-btn\" href=\"#\" value=\"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
                        <!--//CTA-->
                    </form>
                </div>
                <!--//Tab View-->
        
            <!--Tab View-->
            <div class=\"uv-tab-view ";
        // line 530
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 530, $this->source); })()) == "broadcasting")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"broadcasting\">
                ";
        // line 532
        yield "                <form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "broadcasting"]);
        yield "\" id=\"broadcastingForm\">
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Broadcast Message"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"broadcasting[message]\" class=\"uv-field grammarly-fix-broadcast\">";
        // line 537
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["broadcast"] ?? null), "message", [], "any", true, true, false, 537)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 537, $this->source); })()), "message", [], "any", false, false, false, 537), "html", null, true)) : (""));
        yield "</textarea>
                        </div>
                        <span class=\"uv-field-info\">";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Broadcast message content to show on helpdesk"), "html", null, true);
        yield "</span>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label>";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" name=\"broadcasting[from]\" class=\"uv-field datetime date-from uv-cal-icon\" value=\"";
        // line 547
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["broadcast"] ?? null), "from", [], "any", true, true, false, 547)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 547, $this->source); })()), "from", [], "any", false, false, false, 547), "html", null, true)) : (""));
        yield "\">
                        </div>
                        <label>";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" name=\"broadcasting[to]\" class=\"uv-field datetime date-to uv-cal-icon\" value=\"";
        // line 551
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["broadcast"] ?? null), "to", [], "any", true, true, false, 551)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 551, $this->source); })()), "to", [], "any", false, false, false, 551), "html", null, true)) : (""));
        yield "\">
                        </div>
                        <span class=\"uv-field-info\">";
        // line 553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Time duration between which message will be displayed(if applicable)"), "html", null, true);
        yield "</span>
                    </div>
                    <!-- //Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 557
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Broadcasting Status"), "html", null, true);
        yield "</label>
                        <div class=\"uv-element-block\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input type=\"checkbox\" name=\"broadcasting[isActive]\" value=\"";
        // line 561
        yield ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 561, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 561, $this->source); })()), "isActive", [], "any", false, false, false, 561))) ? (1) : (0));
        yield "\" ";
        yield ((( !Twig\Extension\CoreExtension::testEmpty((isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 561, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["broadcast"]) || array_key_exists("broadcast", $context) ? $context["broadcast"] : (function () { throw new RuntimeError('Variable "broadcast" does not exist.', 561, $this->source); })()), "isActive", [], "any", false, false, false, 561))) ? ("checked") : (""));
        yield ">
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">";
        // line 564
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Broadcasting is Active"), "html", null, true);
        yield "</span>
                            </label>
                        </div>
                    </div>
                    <!-- CSRF token Field -->
                    <input type=\"hidden\" name=\"form[_token]\" value=\"\"/>
                    <!-- //CSRF token Field -->

                    <!--CTA-->
                    <input class=\"uv-btn broadcasting-btn \" href=\"#\" value=\"";
        // line 573
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
                    <!--//CTA-->
                </form>
            </div>
            <!--//Tab View-->

            <!--Tab View-->
\t\t\t<div class=\"uv-tab-view ";
        // line 580
        if (((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 580, $this->source); })()) == "time")) {
            yield "uv-tab-view-active";
        }
        yield "\" id=\"time\">
\t\t\t\t<!--Form-->
                
\t\t\t\t<form method=\"post\" action=\"";
        // line 583
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_theme", ["type" => "time"]);
        yield "\" id=\"timeSettingForm\">
\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timezone"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t    <select name=\"form[timezone]\" class=\"uv-select\">
\t\t\t\t\t\t        ";
        // line 589
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 589, $this->source); })()), "getTimezones", [], "method", false, false, false, 589));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 590
            yield "\t\t\t\t\t\t        \t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["timezone"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 590, $this->source); })()), "timezone", [], "any", false, false, false, 590) == $context["timezone"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["timezone"], "html", null, true);
            yield "</option>
\t\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 592
        yield "\t\t\t\t\t\t    </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 594
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a default company timezone"), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date Time Format"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t    <select name=\"form[timeFormat]\" class=\"uv-select\">
\t\t\t\t\t\t        ";
        // line 603
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 603, $this->source); })()), "getTimeFormats", [], "method", false, false, false, 603));
        foreach ($context['_seq'] as $context["key"] => $context["timeFormat"]) {
            // line 604
            yield "\t\t\t\t\t\t        \t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteData"]) || array_key_exists("websiteData", $context) ? $context["websiteData"] : (function () { throw new RuntimeError('Variable "websiteData" does not exist.', 604, $this->source); })()), "timeFormat", [], "any", false, false, false, 604) == $context["key"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["timeFormat"], "html", null, true);
            yield "</option>
\t\t\t\t\t\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['timeFormat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 606
        yield "\t\t\t\t\t\t    </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a format to convert date to specified date time format"), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn timezone-btn\" href=\"#\" value=\"";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
\t\t\t\t</form>
\t\t\t\t<!--//Form-->
\t\t\t</div>
\t\t\t<!--//Tab View-->

\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 624
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 625
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js\"></script>

    <script>
        var currentDate = new Date();
        currentDate.setHours(0, 0, 0, 0);

        \$('.datetime').datetimepicker({
            format: 'YYYY-MM-DD H:mm:ss',
            minDate: currentDate
        });
    </script>
    
    <!-- Header Link template -->
\t<script id=\"header_link_tmp\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header Link"), "html", null, true);
        yield " #<%= count %></label>
            <div class=\"uv-field-block\">
                <input type=\"text\" class=\"uv-field\" name=\"headerLinks[<%= count %>][label]\" placeholder=\"";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\" />
                <input type=\"text\" class=\"uv-field\" name=\"headerLinks[<%= count %>][url]\" placeholder=\"";
        // line 645
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL (with http:// or https://)"), "html", null, true);
        yield "\" />
                <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
            </div>
        </div>
    </script>
    <!-- //Header Link template -->

    <!-- Footer Link template -->
\t<script id=\"footer_link_tmp\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Footer Link"), "html", null, true);
        yield " #<%= count %></label>
            <div class=\"uv-field-block\">
                <input type=\"text\" class=\"uv-field\" name=\"footerLinks[<%= count %>][label]\" placeholder=\"";
        // line 657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\" />
                <input type=\"text\" class=\"uv-field\" name=\"footerLinks[<%= count %>][url]\" placeholder=\"";
        // line 658
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("URL (with http:// or https://)"), "html", null, true);
        yield "\" />
                <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
            </div>
        </div>
    </script>
    <!-- //Footer Link template -->

\t<script type=\"text/javascript\">
\t\t\$(function () {
            \$('.uv-color-field').colorpicker({format: \"hex\"}).on('changeColor', function(ev) {
                \$(this).css('background', \$(this).val())
                textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                \$(this).css('color', textColor)
            });

\t\t\tvar BrandingModel = Backbone.Model.extend({
\t\t\t    validation: {
\t\t\t    \t'website[name]': {
\t\t\t\t      \trequired: true,
\t\t\t\t       \tmsg: '";
        // line 677
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t    },
\t\t\t    \t                  
                    'website[favicon]': [{
                            notEmptyFile: true,
                            msg: \"";
        // line 682
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An empty file is not allowed."), "html", null, true);
        yield "\",
                        }, {
                            sizeLimit: true,
                            msg: \"";
        // line 685
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size must not be greater than 200KB !!"), "html", null, true);
        yield "\",
                        }, {
                            imageFile: true,
                            msg: \"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload valid Image file (Only JPEG, JPG, PNG allowed)!!"), "html", null, true);
        yield "\",
                        }
                    ],
                    'website[logo]': [{
                            notEmptyFile: true,
                            msg: \"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An empty file is not allowed."), "html", null, true);
        yield "\",
                        }, {
                            sizeLimit: true,
                            msg: \"";
        // line 696
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size must not be greater than 200KB !!"), "html", null, true);
        yield "\",
                        }, {
                            imageFile: true,
                            msg: \"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload valid Image file (Only JPEG, JPG, PNG allowed)!!"), "html", null, true);
        yield "\",
                        }
                    ],
\t\t\t    }
\t\t\t});

            _.extend(Backbone.Validation.validators, {
                notEmptyFile: function(value, attr) {
                    var field = \$('input[name=\"' + attr + '\"]');
                    if (field.length && field[0].files && field[0].files.length ) {
                        var file = field[0].files[0];
                        if (file && 0 == file.size) {
                            return true; //error
                        }
                    }                    
                },
                sizeLimit: function(value, attr) {
                    var field = \$('input[name=\"' + attr + '\"]');
                    if (field.length && field[0].files && field[0].files.length ) {
                        var file = field[0].files[0];
                        if (file && file.size/1024 > 200) {
                            return true; //error                            
                        }
                    }                    
                },
                imageFile: function(value, attr) {
                    var field = \$('input[name=\"' + attr + '\"]');
                    if (field.length && field[0].files && field[0].files.length) {
                        var file = field[0].files[0];
                        // Check if the file type is valid
                        if (! ['image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
                            return true; // Invalid file type
                        }
                    }

                    return false; // Valid file type or no file selected
                }
            });

\t\t\tvar BrandingForm = Backbone.View.extend({
\t\t\t    events: {
\t\t\t    \t'click .general-btn': 'generalBrandingFormSubmit',
\t\t\t        'click .pending-response-btn': 'pendingResponseSettingFormSubmit',
                    'change input[type=\"checkbox\"][name=\"status\"]': 'toggleBusinessHours',
\t\t\t\t\t'click .uv-btn': 'disableButton',
                    'change input[type=\"file\"]': 'formChanged',
                    'change .convertToSlug': 'convertToSlug',
                    'click .uv-btn-tag.btn-add': 'addMoreLink',
                    'click .remove-link': 'removeLink',
                    \"change .uv-knowledgebase-layout input[type='radio']\": 'layoutChanged',
                    'click #uv-reset-colors': 'resetDefaultColors',
\t\t\t    },
                resetDefaultColors: function(e) {
                    var defaultColorArray = {
                        'pageBackgroundColor': '#FFFFFF',
                        'headerBackgroundColor': '#FFFFFF',
                        'bannerBackgroundColor': '#7C70F4',
                        'linkColor': '#2750C4',
                        'linkHoverColor': '#2750C4',
                        'articleTextColor': '#333333',
                        'brandColor': '#7C70F4',
                    };
                    \$(e.target).addClass('uv-icon-history-active');
                    setTimeout(function () { 
                        \$(e.target).removeClass('uv-icon-history-active');
                    }, 500);
                    \$.each(defaultColorArray, function(index, value) {
                        var selectedField = \$('input[name=\"website['+ index +']\"]');
                        selectedField.val(value);
                        selectedField.trigger('changeColor');
                    });
                },
                headerLinkTemplate : _.template(\$(\"#header_link_tmp\").html()),
                footerLinkTemplate : _.template(\$(\"#footer_link_tmp\").html()),
\t\t\t    initialize: function () {
                    \$('.uv-color-field').each(function() {
                        textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                        \$(this).css('color', textColor)
                    });

\t\t\t        Backbone.Validation.bind(this);\t\t      
\t\t\t    },
                toggleBusinessHours: function(e) {
\t\t\t\t\tif (e.currentTarget.checked) {
\t\t\t\t\t\$('.business-hours').fadeIn(0);
\t\t\t\t\t} else {
\t\t\t\t\t\$('.business-hours').fadeOut(0);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t    formChanged: function(e) {
                    if (!Backbone.\$(e.currentTarget).parents('.links').length) {
                        this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                        this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                    }
\t\t\t    },          
\t\t\t    generalBrandingFormSubmit: function (e) {
\t\t\t        e.preventDefault();
\t\t\t        this.model.set(\$('#generalSettingForm').serializeObject());
                        console.log(\"form_submited fail\");
                    
\t\t\t        if (this.model.isValid(true)) {
\t\t\t           \$(\"#generalSettingForm\").submit();
\t\t\t        }
\t\t\t    },
                generalBrandingLocalesUpdate: function (e) {
\t\t\t        e.preventDefault();
\t\t\t        this.model.set(\$('#generalSettingForm').serializeObject());
                        console.log(\"form_submited fail\");
                    
\t\t\t        if (this.model.isValid(true)) {

                       \t\$.ajax({
\t\t\t\t\t\t\turl: \"";
        // line 811
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_member_knowledgebase_update_locales");
        yield "\",
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: \$('#generalSettingForm').serializeObject(),
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\twindow.location.reload();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(response) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t        }
\t\t\t    },
\t\t\t    pendingResponseSettingFormSubmit: function (e) {
\t\t\t        e.preventDefault();
\t\t\t        this.model.set(\$('#pendingResponseSettingForm').serializeObject());
\t\t\t        if (this.model.isValid('website[pendingSince]')) {
\t\t\t\t\t\t\$('.pending-response-btn').attr('disabled', 'disabled');
\t\t\t            \$(\"#pendingResponseSettingForm\").submit();
\t\t\t        }
\t\t\t    },
\t\t\t\tdisableButton: function(e) {
\t\t\t\t\tvar form = Backbone.\$(e.currentTarget).parents('form');

\t\t\t\t\tif (form.attr('id') == 'businessHoursSettingForm' || form.attr('id') == 'seoForm' || form.attr('id') == 'advancedForm' || form.attr('id') == 'knowledgebaseForm') {
\t\t\t\t\t\tBackbone.\$(e.currentTarget).attr('disabled', 'disabled');
\t\t\t\t\t\tform.submit()
\t\t\t\t\t}
\t\t\t\t},
                convertToSlug: function(e) {
                    Backbone.\$(e.currentTarget).val(app.appView.convertToSlug(Backbone.\$(e.currentTarget).val()));
                },
                addMoreLink: function(e) {
                    e.preventDefault();

                    var currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.attr('data-type') == 'header') {
                        count = \$('.uv-header-link-wrapper .uv-element-block').length + 1;
                        \$('.uv-header-link-wrapper .links').append(this.headerLinkTemplate({'count' : count}))
                    } else {
                        count = \$('.uv-footer-link-wrapper .uv-element-block').length + 1;
                        \$('.uv-footer-link-wrapper .links').append(this.footerLinkTemplate({'count' : count}))
                    }
                },
                removeLink: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parents('.uv-element-block').remove()
                },
                layoutChanged: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    \$('.uv-layout-icon').removeClass('uv-layout-icon-active');

                    \$(\"label[for='\" + currentElement.attr('id') + \"']\").addClass('uv-layout-icon-active');
                }
\t\t\t});
            
            var brandingForm = new BrandingForm({
\t\t        el: 'form',
\t\t        model: new BrandingModel()
\t\t    });
            
            var BroadcastModel = Backbone.Model.extend({
\t\t\t    validation: {
\t\t\t    \t'broadcasting[message]': [{
\t\t\t\t      \trequired: true,
\t\t\t\t       \tmsg: '";
        // line 876
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t    },
                    {
\t\t\t\t\t\tmaxLength: 300,
\t\t\t\t\t\tmsg: '";
        // line 880
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field should contains maximum 300 characters."), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t    }
\t\t\t});

\t\t\tvar BroadcastForm = Backbone.View.extend({
                el: '#broadcastingForm',
\t\t\t    events: {
\t\t\t    \t'click .broadcasting-btn': 'broadcastingFormSubmit',
                    'change textarea': 'formChanged',
\t\t\t    },
                initialize: function() {
                    Backbone.Validation.bind(this);
                },
\t\t\t    formChanged: function(e) {
                    if (!Backbone.\$(e.currentTarget).parents('.links').length) {
                        this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                        this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                    }
\t\t\t    },
                broadcastingFormSubmit: function(e) {
\t\t\t\t\tvar form = Backbone.\$(e.currentTarget).closest('form')
                    if (form.attr('id') == 'broadcastingForm') {
                        data = form.serializeObject();
                        this.model.set(data);
                        if (this.model.isValid(true)) {
                            Backbone.\$(e.currentTarget).attr('disabled', 'disabled');
                            form.submit()
                        }
                    }
                }
\t\t    });

            var LinksModel = Backbone.Model.extend({
\t\t\t    validation: {
\t\t\t    }
\t\t\t});

\t\t\tvar LinksForm = Backbone.View.extend({
                el: '#linksForm',
                initialize: function() {
                    Backbone.Validation.bind(this);
                },                
                events: {
                    'click .links-btn': 'validateLinks',
                },
                validateLinks: function(e) {
                    e.preventDefault();
                    var data = \$('#linksForm').serializeObject();
                    var self = this; var valid = true;
                    \$.each(data, function(key, value) {
                        if (key.indexOf('[url]') != -1 && value && !value.match('^(http:\\/\\/www\\.|https:\\/\\/www\\.|http:\\/\\/|https:\\/\\/)[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}(:[0-9]{1,5})?(\\/.*)?\$')) {
    \t\t    \t\t\tBackbone.Validation.callbacks.invalid(self, key, '";
        // line 932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
        yield "', 'input');
                            valid = false;
                        } else {
    \t\t    \t\t\tBackbone.Validation.callbacks.valid(self, key, '";
        // line 935
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
        yield "', 'input');                            
                        }
                    });
                    if (valid) {
\t\t\t\t\t\t\$('.links-btn').attr('disabled', 'disabled');
\t\t\t            \$(\"#linksForm\").submit();
\t\t\t        }
                },                      
            });

            var TimezoneForm = Backbone.View.extend({
                el: '#timeSettingForm',
\t\t\t    events: {
\t\t\t    \t'click .timezone-btn': 'timezoneFormSubmit',
                    
\t\t\t    },
                timezoneFormSubmit: function(e) {
\t\t\t\t\tvar form = Backbone.\$(e.currentTarget).closest('form')
                    
                    if (form.attr('id') == 'timeSettingForm') {
                        data = form.serializeObject();
                        form.submit()
                    }
                }
\t\t    });

            var time = new TimezoneForm();

            var broadcastForm = new BroadcastForm({
                model: new BroadcastModel()
            });

\t\t\tvar linksForm = new LinksForm({
                model: new LinksModel()                
            });
        });
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Staff/branding.html.twig";
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
        return array (  1819 => 935,  1813 => 932,  1758 => 880,  1751 => 876,  1683 => 811,  1568 => 699,  1562 => 696,  1556 => 693,  1548 => 688,  1542 => 685,  1536 => 682,  1528 => 677,  1506 => 658,  1502 => 657,  1497 => 655,  1484 => 645,  1480 => 644,  1475 => 642,  1454 => 625,  1441 => 624,  1420 => 613,  1412 => 608,  1408 => 606,  1393 => 604,  1389 => 603,  1383 => 600,  1374 => 594,  1370 => 592,  1355 => 590,  1351 => 589,  1345 => 586,  1339 => 583,  1331 => 580,  1321 => 573,  1309 => 564,  1301 => 561,  1294 => 557,  1287 => 553,  1282 => 551,  1277 => 549,  1272 => 547,  1267 => 545,  1258 => 539,  1253 => 537,  1248 => 535,  1241 => 532,  1235 => 530,  1225 => 523,  1218 => 519,  1210 => 514,  1205 => 512,  1200 => 510,  1191 => 504,  1186 => 502,  1181 => 500,  1175 => 497,  1169 => 496,  1158 => 488,  1150 => 483,  1144 => 479,  1135 => 473,  1131 => 472,  1126 => 470,  1122 => 468,  1119 => 467,  1103 => 461,  1095 => 460,  1088 => 458,  1084 => 456,  1079 => 455,  1077 => 454,  1068 => 448,  1063 => 445,  1054 => 439,  1050 => 438,  1045 => 436,  1041 => 434,  1038 => 433,  1022 => 427,  1014 => 426,  1007 => 424,  1003 => 422,  998 => 421,  996 => 420,  989 => 416,  983 => 415,  973 => 408,  960 => 398,  955 => 396,  945 => 389,  940 => 387,  933 => 383,  927 => 382,  917 => 375,  912 => 372,  902 => 364,  896 => 361,  884 => 352,  878 => 349,  866 => 340,  860 => 337,  848 => 328,  842 => 325,  829 => 317,  821 => 316,  814 => 314,  806 => 313,  799 => 311,  791 => 310,  784 => 308,  776 => 307,  771 => 305,  759 => 298,  754 => 296,  742 => 289,  736 => 287,  724 => 279,  718 => 277,  706 => 269,  700 => 267,  688 => 259,  682 => 257,  670 => 249,  664 => 247,  652 => 239,  646 => 237,  642 => 235,  636 => 232,  629 => 230,  618 => 222,  610 => 216,  597 => 214,  593 => 213,  589 => 212,  583 => 209,  573 => 202,  568 => 200,  556 => 193,  550 => 191,  540 => 183,  534 => 180,  528 => 177,  518 => 170,  512 => 167,  500 => 163,  483 => 156,  481 => 155,  476 => 153,  469 => 149,  462 => 147,  451 => 139,  446 => 136,  440 => 135,  435 => 132,  420 => 130,  416 => 129,  412 => 128,  409 => 127,  394 => 125,  390 => 124,  386 => 123,  381 => 121,  371 => 118,  366 => 115,  361 => 112,  346 => 110,  342 => 109,  338 => 108,  335 => 107,  320 => 105,  316 => 104,  312 => 103,  307 => 101,  297 => 98,  292 => 95,  289 => 94,  285 => 93,  281 => 92,  274 => 88,  268 => 85,  263 => 82,  258 => 79,  251 => 77,  238 => 71,  230 => 70,  221 => 69,  211 => 67,  209 => 66,  201 => 65,  193 => 64,  185 => 63,  177 => 62,  170 => 58,  164 => 57,  159 => 55,  156 => 54,  153 => 53,  150 => 52,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Branding'|trans }}
{% endblock %}

{% block pageContent %}
    <style>
        .uv-image-upload-brick {
            margin: 10px 0px;
        }
        .uv-color-field {
            color: #fff;
            width: 100px;
            text-transform: uppercase;
        }
        .uv-header-link-wrapper {
            padding-bottom: 20px;
        }
        .uv-footer-link-wrapper {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
        }
        .uv-knowledgebase-layout  {
            border-top: solid 1px #D3D3D3;
            padding-top: 20px;
            margin-top: 20px;
        }
        .uv-knowledgebase-layout input[type='radio'] {
            display: none;
        }
        #links .uv-field-block input:first-child {
            width: 200px;
            margin-bottom: 0;
        }
        #links .remove-link {
            margin-left: 10px;
        }
\t\t.grammarly-fix-broadcast {
\t\t\tmax-width: 518px;
\t\t}
        #uv-reset-colors {
            float: right;
            cursor: pointer;
            position: relative;
            z-index:1 ;
        }
    </style>

\t<div class=\"uv-inner-section\">\t\t
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Branding' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Branding'|trans }}</h1>
\t\t\t<!--Tabs-->
\t\t\t<div class=\"uv-tabs\">
\t\t\t\t<ul>
\t\t\t\t\t<li for=\"general\" {% if type == 'general' or type == '' %}class=\"uv-tab-active\"{% endif %}>{{ 'General'|trans }}</li>
\t\t\t\t\t<li for=\"knowledgebase\" {% if type == 'knowledgebase' %} class=\"uv-tab-active\"{% endif %}>{{ 'Knowledgebase'|trans }}</li>
                    <li for=\"time\" {% if type == 'time' %}class=\"uv-tab-active\"{% endif %}>{{ 'Time'|trans }}</li>
\t\t\t\t\t<li for=\"seo\" {% if type == 'seo' %}class=\"uv-tab-active\"{% endif %}>{{ 'SEO'|trans }}</li>
                    {% if user_service.isFileExists('apps/uvdesk/sla') %}
                        <li for=\"business-hours\" {% if type == 'business-hours' %}class=\"uv-tab-active\"{% endif %}>{{ 'Business Hours'|trans }}</li>
                    {% endif %}
\t\t\t\t\t<li for=\"links\" {% if type == 'links' %}class=\"uv-tab-active\"{% endif %}>{{ 'Links'|trans }}</li>
                    <li for=\"advanced\" {% if type == 'advanced' %}class=\"uv-tab-active\"{% endif %}>{{ 'Advanced'|trans }}</li>
\t\t\t\t\t<li for=\"broadcasting\" {% if type == 'broadcasting' %}class=\"uv-tab-active\"{% endif %}>{{ 'Broadcast Message'|trans }}</li>                  
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!--Tabs-->

            <!--Tab View-->
\t\t\t<div class=\"uv-tab-view {% if type == 'business-hours' %}uv-tab-view-active{% endif %}\" id=\"business-hours\">
\t\t\t\t<!--Form-->
\t\t\t\t<form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'business-hours'}) }}\" id=\"businessHoursSettingForm\">
                    <div class=\"uv-element-block\">
\t\t\t\t\t\t{# <label class=\"uv-field-label\">{{ 'Business Hours Status'|trans }}</label> #}
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t<input name=\"status\" type=\"checkbox\"  {{ websiteData.businessHourStatus ? 'checked' : ''}}>
\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Business Hours is Active'|trans }}</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t                </div>
\t                <div class=\"business-hours\" style=\"margin-top: 20px; {{ websiteData.businessHourStatus ? '' : 'display: none'}}\">
\t\t                {% for day in days %}
\t\t                \t{% if business_hours|length > 0 %}
\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"businessHours[{{ day }}][is_active]\" type=\"checkbox\" {% if business_hours[day]['is_active'] is defined %} checked=\"\" {% endif %} >
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\" style=\"width: 140px;\">{{ day|trans }}</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[{{ day }}][from]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        {% for key,time in time_interval %}
\t\t\t\t\t\t\t\t        \t<option value=\"{{ key }}\" {% if business_hours[day]['from'] == key %} selected=\"selected\" {% endif %}>{{ time }}</option>
\t\t\t\t\t\t\t\t    \t{% endfor %}
\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[{{ day }}][to]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        {% for key,time in time_interval %}
\t\t\t\t\t\t\t\t        \t<option value=\"{{ key }}\" {% if business_hours[day]['to'] == key %} selected=\"selected\" {% endif %}>{{ time }}</option>
\t\t\t\t\t\t\t\t    \t{% endfor %}
\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t</div>
\t\t                \t{% else %}
\t\t                \t\t<div>
\t\t                \t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"businessHours[{{ day }}][is_active]\" type=\"checkbox\" {% if day != 'Saturday' and day != 'Sunday' %} checked=\"checked\" {% endif %} >
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\" style=\"width: 200px;\">{{ day|trans }}</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[{{ day }}][from]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        {% for key,time in time_interval %}
\t\t\t\t\t\t\t\t        \t<option value=\"{{ key }}\" {% if day != 'Saturday' and day != 'Sunday' and key == \"9:00\" %} selected=\"selected\" {% endif %}>{{ time }}</option>
\t\t\t\t\t\t\t\t    \t{% endfor %}
\t\t\t\t\t\t\t\t    </select>
\t\t\t\t\t\t\t\t    <select class=\"uv-select uv-select-grouped\" name=\"businessHours[{{ day }}][to]\" style=\"width: 300px;\">
\t\t\t\t\t\t\t\t        {% for key,time in time_interval %}
\t\t\t\t\t\t\t\t        \t<option value=\"{{ key }}\" {% if day != 'Saturday' and day != 'Sunday' and key == \"18:00\" %} selected=\"selected\" {% endif %}>{{ time }}</option>
\t\t\t\t\t\t\t\t    \t{% endfor %}
\t\t\t\t\t\t\t\t    </select>
\t\t                \t\t</div>
\t\t                \t{% endif %}
\t\t                {% endfor %}
\t                </div>

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
\t\t\t\t</form>
\t\t\t\t<!--//Form-->
\t\t\t</div>
\t\t\t<!--//Tab View-->

\t\t\t<!--Tab View-->
\t\t\t<div class=\"uv-tab-view {% if type == 'general' or type == '' %}uv-tab-view-active{% endif %}\" id=\"general\">
\t\t\t\t<!--Form-->
\t\t\t\t<form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'general'}) }}\" id=\"generalSettingForm\" enctype=\"multipart/form-data\">
                    <!-- Image block -->
                    <div class=\"uv-image-upload-wrapper uv-no-error-success-icon\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Wide Logo'|trans }}</label>
                            <div class=\"uv-field-block\">
                                {% set isLogo = websiteData.logo ? 1 : 0 %}
                                <div class=\"uv-image-upload-brick uv-image-upload-brick-200 {% if isLogo %}uv-on-drop-shadow{% endif %}\" {% if isLogo %}style=\"border-color: transparent;\"{% endif %}>
                                    <input type=\"file\" name=\"website[logo]\" id=\"uv-upload-profile\" accept=\"image/*\">
                                    <div class=\"uv-image-upload-placeholder\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"32\" viewBox=\"0 0 48 32\">
                                            <path fill=\"#7c74f1\" fill-rule=\"evenodd\" d=\"M26.516,22.252H21.477V17.226h-3.75L24,11.031l6.269,6.195h-3.75v5.026ZM29.973,8.138A9.1,9.1,0,0,0,24,6.005a8.947,8.947,0,0,0-4.863,1.4,9.78,9.78,0,0,0-3.457,3.682A7.494,7.494,0,0,0,9,18.512a7.2,7.2,0,0,0,2.2,5.289,7.234,7.234,0,0,0,5.3,2.192H32.727A6.294,6.294,0,0,0,39,19.739,5.933,5.933,0,0,0,37.3,15.5a6.113,6.113,0,0,0-4.1-1.958A9.112,9.112,0,0,0,29.973,8.138Z\"/>
                                        </svg>
                                    </div>
                                    <img id=\"dynamic-image-upload\" {% if isLogo %} src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ websiteData.logo }}\" {% endif %}>

                                </div>
                                <div class=\"uv-image-info-brick\">
                                    <span class=\"uv-field-info\">{{ 'Upload an Image (200px x 48px) in</br> PNG or JPG Format'|trans|raw }}</span>
                                </div>
                            </div>
                            <span class=\"uv-field-info\">{{ 'It will be shown as Logo on Knowledgebase and Helpdesk'|trans }}</span>
                        </div>
                    </div>
                    <!-- //Image block -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Website Status'|trans }}</label>
                          <div class=\"uv-field-block\">
                            <div class=\"uv-checkbox uv-margin-top-5\">
                                <input type=\"checkbox\" name=\"website[status]\" style=\"cursor:pointer;\" {{ configuration.status ? 'checked=\"checked\"' : '' }} >
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-field-info uv-margin-top-5\">{{ 'Enable front end website and knowledgebase for customer(s)'|trans }}</span>
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Brand Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[brandColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.brandColor ? configuration.brandColor : '#7C70F4'}}\" style=\"background:{{ configuration.brandColor ? configuration.brandColor : '#7C70F4'}}\" placeholder=\"#7C70F4\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->
                    
\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[name]\" class=\"uv-field\" type=\"text\" value=\"{{ websiteData.name ? websiteData.name : '' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Default Language (Optional)'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
                            <select name=\"defaultLocale\" class=\"uv-select\">
                                <option value=\"\">{{ 'Select default language'|trans }}</option>
                                {% for localeCode, localeName in uvdesk_service.getLocalesList() %}
                                    <option value=\"{{localeCode}}\" {{ locales == localeCode  ? \"selected='selected'\" : ''}}>{{ localeName }}</option>
                                {% endfor %}
                            </select>
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn general-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
\t\t\t\t</form>
\t\t\t\t<!--//Form-->
\t\t\t</div>
\t\t\t<!--//Tab View-->

\t\t\t<!--Tab View-->
            <div class=\"uv-tab-view {% if type == 'knowledgebase' %}uv-tab-view-active{% endif %}\" id=\"knowledgebase\">
                <!--Form-->
\t\t\t\t<form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'knowledgebase'}) }}\" id=\"knowledgebaseForm\">
                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        <span  id=\"uv-reset-colors\" class=\"uv-icon-history\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'Use Default Colors'|trans }}\"></span>
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Page Background Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[pageBackgroundColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.pageBackgroundColor}}\" style=\"background: {{ configuration.pageBackgroundColor ? configuration.pageBackgroundColor : '#FFFFFF' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Header Background Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[headerBackgroundColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.headerBackgroundColor ? configuration.headerBackgroundColor : '#FFFFFF' }}\" style=\"background: {{ configuration.pageBackgroundColor ? configuration.headerBackgroundColor : '#FFFFFF' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Banner Background Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[bannerBackgroundColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.bannerBackgroundColor ? configuration.bannerBackgroundColor : '#70B5F4' }}\" style=\"background: {{ configuration.bannerBackgroundColor ? configuration.bannerBackgroundColor : '#70B5F4' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Page Link Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[linkColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.linkColor  ? configuration.linkColor : '#C427A1' }}\" style=\"background: {{ configuration.linkColor  ? configuration.linkColor : '#C427A1' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Page Link Hover Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[linkHoverColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.linkHoverColor  ? configuration.linkHoverColor : '#2750C4' }}\" style=\"background: {{ configuration.linkColor  ? configuration.linkHoverColor : '#2750C4' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
                        {##564DA8#}
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Article Text Color'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[articleTextColor]\" class=\"uv-field uv-color-field\" type=\"text\" value=\"{{ configuration.articleTextColor  ? configuration.articleTextColor : '#333333' }}\" style=\"background: {{ configuration.linkColor  ? configuration.articleTextColor : '#333333' }}\">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t  \t<label class=\"uv-field-label\">{{ 'Tag Line'|trans }}</label>
\t\t\t\t\t  \t<div class=\"uv-field-block\">
\t\t\t\t\t    \t<input name=\"website[siteDescription]\" class=\"uv-field\" type=\"text\" value=\"{{ configuration.siteDescription ? configuration.siteDescription : '' }}\" placeholder=\"{{ 'Hi! how can we help?'|trans }} \">
\t\t\t\t\t  \t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

                    <div class=\"uv-knowledgebase-layout uv-no-error-success-icon\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Layout '|trans }}</label>
                            <div class=\"uv-layout-icon-wrapper\">
                                <label for=\"homepage-masonry\" class=\"uv-layout-icon uv-layout-grid {% if configuration.homepageContent and configuration.homepageContent == 'masonry' %}uv-layout-icon-active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ 'Masonry'|trans }}\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-masonry\" value=\"masonry\" {% if configuration.homepageContent and configuration.homepageContent == 'masonry' %}checked{% endif %}/>

                                <label for=\"homepage-folder\" class=\"uv-layout-icon uv-layout-folder {% if configuration.homepageContent and configuration.homepageContent == 'folder' %}uv-layout-icon-active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ 'Folder'|trans }}\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-folder\" value=\"folder\" {% if configuration.homepageContent and configuration.homepageContent == 'folder' %}checked{% endif %}/>

                                <label for=\"homepage-category\" class=\"uv-layout-icon uv-layout-category {% if configuration.homepageContent and configuration.homepageContent == 'category' %}uv-layout-icon-active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ 'Category'|trans }}\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-category\" value=\"category\" {% if configuration.homepageContent and configuration.homepageContent == 'category' %}checked{% endif %}/>

                                <label for=\"homepage-article\" class=\"uv-layout-icon uv-layout-article {% if configuration.homepageContent and configuration.homepageContent == 'article' %}uv-layout-icon-active{% endif %}\" data-toggle=\"tooltip\" title=\"{{ 'Popular Article'|trans }}\"></label>
                                <input name=\"website[homepageContent]\" type=\"radio\" id=\"homepage-article\" value=\"article\" {% if configuration.homepageContent and configuration.homepageContent == 'article' %}checked{% endif %}/>
                            </div>
                        </div>

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[ticketCreateOption]\" type=\"checkbox\" {{ configuration.ticketCreateOption ? 'checked=\"checked\"':\"\"}} />
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">{{ 'Ticket Create Option'|trans }}</span>
                            </label>
                        </div>
\t\t\t\t\t    <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[loginRequiredToCreate]\" type=\"checkbox\" {{ configuration.loginRequiredToCreate ? 'checked=\"checked\"':\"\"}}/>
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">{{ 'Login Required To Create Tickets'|trans }}</span>
                            </label>
                        </div>
\t\t\t\t\t    <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[removeCustomerLoginButton]\" type=\"checkbox\" value=\"1\" {{ configuration.removeCustomerLoginButton ? 'checked=\"checked\"':\"\"}} />
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">{{ 'Remove Customer Login/Signin Button'|trans }}</span>
                            </label>
                        </div>
                        <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\" style=\"margin: 20px 0\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input name=\"website[disableCustomerLogin]\" type=\"checkbox\" value=\"1\" {{ configuration.disableCustomerLogin ? 'checked=\"checked\"':\"\"}} />
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">{{ 'Disable Customer Login'|trans }}</span>
                            </label>
                        </div>
                        <!-- //Field -->
                    </div>

                    <!-- CSRF token Field -->
                    {# <input type=\"hidden\" name=\"website[_token]\" value=\"{{ uvdesk_service.generateCsrfToken('website') }}\"/> #}
                    <!-- //CSRF token Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn knowledgebase-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
                </form>
\t\t\t</div>
\t\t\t<!--//Tab View-->

            <!--Tab View-->
            <div class=\"uv-tab-view {% if type == 'seo' %}uv-tab-view-active{% endif %}\" id=\"seo\">
                <form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'seo'}) }}\" id=\"seoForm\">

\t\t\t\t\t<!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Meta Description (Recommended)'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"metaDescription\" class=\"uv-field\">{{configuration.metaDescription ? configuration.metaDescription : \"\" }}</textarea>
                        </div>
                    </div>
\t\t\t\t\t<!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Meta Keywords (Recommended)'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"metaKeywords\" class=\"uv-field\">{{ configuration.metaKeywords ? configuration.metaKeywords : \"\" }}</textarea>
                        </div>
                    </div>
\t\t\t\t\t<!-- //Field -->

                    <!-- CSRF token Field -->
                    <input type=\"hidden\" name=\"_token\" value=\"\"/>
                    <!-- //CSRF token Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn seo-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
                </form>
\t\t\t</div>
\t\t\t<!--//Tab View-->

            <!--Tab View-->
            <div class=\"uv-tab-view {% if type == 'links' %}uv-tab-view-active{% endif %}\" id=\"links\">
                <form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'links'}) }}\" id=\"linksForm\" class=\"uv-no-error-success-icon\">

                    <div class=\"uv-header-link-wrapper\">
                        <div class=\"links\">
                            {% if configuration.headerLinks|length %}
                                {% for key, link in configuration.headerLinks %}
                                    <!-- Field -->
                                    <div class=\"uv-element-block\">
                                        <label class=\"uv-field-label\">{{ 'Header Link'|trans }} #{{key}}</label>
                                        <div class=\"uv-field-block\">
                                            <input type=\"text\" class=\"uv-field\" name=\"headerLinks[{{key}}][label]\" value=\"{{ link.label }}\"  placeholder=\"{{ 'Label'|trans }}\"/>
                                            <input type=\"text\" class=\"uv-field\" name=\"headerLinks[{{key}}][url]\" value=\"{{ link.url }}\"  placeholder=\"{{ 'URL (with http:// or https://)'|trans }}\" />
                                            <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                        </div>
                                    </div>
                                    <!-- //Field -->
                                {% endfor %}
                            {% else %}
                                <!-- Field -->
                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">{{ 'Header Link'|trans }} #1</label>
                                    <div class=\"uv-field-block\">
                                        <input type=\"text\" class=\"uv-field\" name=\"headerLinks[1][label]\" placeholder=\"{{ 'Label'|trans }}\" />
                                        <input type=\"text\" class=\"uv-field\" name=\"headerLinks[1][url]\" placeholder=\"{{ 'URL (with http:// or https://)'|trans }}\" />
                                        <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                    </div>
                                </div>
                                <!-- //Field -->
                            {% endif %}
                        </div>

                        <a class=\"uv-btn-tag btn-add\" href=\"#\" data-type=\"header\">
                            <span class=\"uv-icon-add-dark\"></span> {{ 'Add More'|trans }}
                        </a>
                    </div>

                    <div class=\"uv-footer-link-wrapper\">
                        <div class=\"links\">
                            {% if configuration.footerLinks|length %}
                                {% for key, link in configuration.footerLinks %}
                                    <!-- Field -->
                                    <div class=\"uv-element-block\">
                                        <label class=\"uv-field-label\">{{ 'Footer Link'|trans }} #{{key}}</label>
                                        <div class=\"uv-field-block\">
                                            <input type=\"text\" class=\"uv-field\" name=\"footerLinks[{{key}}][label]\" value=\"{{ link.label }}\"  placeholder=\"{{ 'Label'|trans }}\"/>
                                            <input type=\"text\" class=\"uv-field\" name=\"footerLinks[{{key}}][url]\" value=\"{{ link.url }}\"  placeholder=\"{{ 'URL (with http:// or https://)'|trans }}\" />
                                            <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                        </div>
                                    </div>
                                    <!-- //Field -->
                                {% endfor %}
                            {% else %}
                                <!-- Field -->
                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">{{ 'Footer Link'|trans }} #1</label>
                                    <div class=\"uv-field-block\">
                                        <input type=\"text\" class=\"uv-field\" name=\"footerLinks[1][label]\" placeholder=\"{{ 'Label'|trans }}\" />
                                        <input type=\"text\" class=\"uv-field\" name=\"footerLinks[1][url]\" placeholder=\"{{ 'URL (with http:// or https://)'|trans }}\" />
                                        <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
                                    </div>
                                </div>
                                <!-- //Field -->
                            {% endif %}

                        </div>

                        <a class=\"uv-btn-tag btn-add\" href=\"#\" data-type=\"footer\">
                            <span class=\"uv-icon-add-dark\"></span> {{ 'Add More'|trans }}
                        </a>
                    </div>

                    <!--CTA-->
                    <input class=\"uv-btn links-btn\" style=\"margin-top: 15px;\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
                    <!--//CTA-->
                </form>
            </div>
            <!--//Tab View-->


                <!--Tab View-->
                <div class=\"uv-tab-view {% if type == 'advanced' %}uv-tab-view-active{% endif %}\" id=\"advanced\">
                    <form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'advanced'}) }}\" id=\"advancedForm\">
                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Custom CSS (Optional)'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <textarea name=\"customCSS\" class=\"uv-field\">{{ configuration.customCSS }}</textarea>
                            </div>
                            <span class=\"uv-field-info\">{{ 'It will be add to the frontend knowledgebase only'|trans }}</span>
                        </div>
                        <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Custom Javascript (Optional)'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <textarea name=\"script\" class=\"uv-field\">{{ configuration.script }}</textarea>
                            </div>
                            <span class=\"uv-field-info\">{{ 'It will be add to the frontend knowledgebase only'|trans }}</span>
                        </div>
                        <!-- //Field -->

                        <!-- CSRF token Field -->
                        <input type=\"hidden\" name=\"form[_token]\" value=\"{{ uvdesk_service.generateCsrfToken('form') }}\"/>
                        <!-- //CSRF token Field -->

                        <!--CTA-->
                        <input class=\"uv-btn advanced-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
                        <!--//CTA-->
                    </form>
                </div>
                <!--//Tab View-->
        
            <!--Tab View-->
            <div class=\"uv-tab-view {% if type == 'broadcasting' %}uv-tab-view-active{% endif %}\" id=\"broadcasting\">
                {# {% set broadcastMessage = website.broadcastMessage|json_decode %} #}
                <form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'broadcasting'}) }}\" id=\"broadcastingForm\">
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Broadcast Message'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"broadcasting[message]\" class=\"uv-field grammarly-fix-broadcast\">{{ broadcast.message is defined ? broadcast.message : '' }}</textarea>
                        </div>
                        <span class=\"uv-field-info\">{{ 'Broadcast message content to show on helpdesk'|trans }}</span>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label>{{ 'From'|trans }}</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" name=\"broadcasting[from]\" class=\"uv-field datetime date-from uv-cal-icon\" value=\"{{ broadcast.from is defined ? broadcast.from : '' }}\">
                        </div>
                        <label>{{ 'To'|trans }}</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" name=\"broadcasting[to]\" class=\"uv-field datetime date-to uv-cal-icon\" value=\"{{ broadcast.to is defined ? broadcast.to : '' }}\">
                        </div>
                        <span class=\"uv-field-info\">{{ 'Time duration between which message will be displayed(if applicable)'|trans }}</span>
                    </div>
                    <!-- //Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{'Broadcasting Status'|trans}}</label>
                        <div class=\"uv-element-block\">
                            <label>
                                <div class=\"uv-checkbox\">
                                    <input type=\"checkbox\" name=\"broadcasting[isActive]\" value=\"{{ broadcast is not empty and broadcast.isActive ? 1 : 0 }}\" {{ broadcast is not empty and broadcast.isActive ? 'checked' : '' }}>
                                    <span class=\"uv-checkbox-view\"></span>
                                </div>
                                <span class=\"uv-checkbox-label\">{{'Broadcasting is Active'|trans}}</span>
                            </label>
                        </div>
                    </div>
                    <!-- CSRF token Field -->
                    <input type=\"hidden\" name=\"form[_token]\" value=\"\"/>
                    <!-- //CSRF token Field -->

                    <!--CTA-->
                    <input class=\"uv-btn broadcasting-btn \" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
                    <!--//CTA-->
                </form>
            </div>
            <!--//Tab View-->

            <!--Tab View-->
\t\t\t<div class=\"uv-tab-view {% if type == 'time' %}uv-tab-view-active{% endif %}\" id=\"time\">
\t\t\t\t<!--Form-->
                
\t\t\t\t<form method=\"post\" action=\"{{ path('helpdesk_member_knowledgebase_theme', {'type': 'time'}) }}\" id=\"timeSettingForm\">
\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Timezone'|trans }}</label>
\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t    <select name=\"form[timezone]\" class=\"uv-select\">
\t\t\t\t\t\t        {% for timezone in uvdesk_service.getTimezones() %}
\t\t\t\t\t\t        \t<option value=\"{{ timezone }}\" {% if websiteData.timezone == timezone %}selected{% endif %}>{{ timezone }}</option>
\t\t\t\t\t\t    \t{% endfor %}
\t\t\t\t\t\t    </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"uv-field-info\">{{ \"Choose a default company timezone\"|trans }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Date Time Format'|trans }}</label>
\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t    <select name=\"form[timeFormat]\" class=\"uv-select\">
\t\t\t\t\t\t        {% for key, timeFormat in uvdesk_service.getTimeFormats() %}
\t\t\t\t\t\t        \t<option value=\"{{ key }}\" {% if websiteData.timeFormat == key %}selected{% endif %}>{{ timeFormat }}</option>
\t\t\t\t\t\t    \t{% endfor %}
\t\t\t\t\t\t    </select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose a format to convert date to specified date time format'|trans }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!--CTA-->
\t\t\t\t\t<input class=\"uv-btn timezone-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"button\">
\t\t\t\t\t<!--//CTA-->
\t\t\t\t</form>
\t\t\t\t<!--//Form-->
\t\t\t</div>
\t\t\t<!--//Tab View-->

\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css\">
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js\"></script>

    <script>
        var currentDate = new Date();
        currentDate.setHours(0, 0, 0, 0);

        \$('.datetime').datetimepicker({
            format: 'YYYY-MM-DD H:mm:ss',
            minDate: currentDate
        });
    </script>
    
    <!-- Header Link template -->
\t<script id=\"header_link_tmp\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Header Link'|trans }} #<%= count %></label>
            <div class=\"uv-field-block\">
                <input type=\"text\" class=\"uv-field\" name=\"headerLinks[<%= count %>][label]\" placeholder=\"{{ 'Label'|trans }}\" />
                <input type=\"text\" class=\"uv-field\" name=\"headerLinks[<%= count %>][url]\" placeholder=\"{{ 'URL (with http:// or https://)'|trans }}\" />
                <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
            </div>
        </div>
    </script>
    <!-- //Header Link template -->

    <!-- Footer Link template -->
\t<script id=\"footer_link_tmp\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Footer Link'|trans }} #<%= count %></label>
            <div class=\"uv-field-block\">
                <input type=\"text\" class=\"uv-field\" name=\"footerLinks[<%= count %>][label]\" placeholder=\"{{ 'Label'|trans }}\" />
                <input type=\"text\" class=\"uv-field\" name=\"footerLinks[<%= count %>][url]\" placeholder=\"{{ 'URL (with http:// or https://)'|trans }}\" />
                <a class=\"uv-btn-tag remove-link\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></span></a>
            </div>
        </div>
    </script>
    <!-- //Footer Link template -->

\t<script type=\"text/javascript\">
\t\t\$(function () {
            \$('.uv-color-field').colorpicker({format: \"hex\"}).on('changeColor', function(ev) {
                \$(this).css('background', \$(this).val())
                textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                \$(this).css('color', textColor)
            });

\t\t\tvar BrandingModel = Backbone.Model.extend({
\t\t\t    validation: {
\t\t\t    \t'website[name]': {
\t\t\t\t      \trequired: true,
\t\t\t\t       \tmsg: '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t    },
\t\t\t    \t                  
                    'website[favicon]': [{
                            notEmptyFile: true,
                            msg: \"{{ 'An empty file is not allowed.'|trans }}\",
                        }, {
                            sizeLimit: true,
                            msg: \"{{ 'File size must not be greater than 200KB !!'|trans }}\",
                        }, {
                            imageFile: true,
                            msg: \"{{ 'Please upload valid Image file (Only JPEG, JPG, PNG allowed)!!'|trans }}\",
                        }
                    ],
                    'website[logo]': [{
                            notEmptyFile: true,
                            msg: \"{{ 'An empty file is not allowed.'|trans }}\",
                        }, {
                            sizeLimit: true,
                            msg: \"{{ 'File size must not be greater than 200KB !!'|trans }}\",
                        }, {
                            imageFile: true,
                            msg: \"{{ 'Please upload valid Image file (Only JPEG, JPG, PNG allowed)!!'|trans }}\",
                        }
                    ],
\t\t\t    }
\t\t\t});

            _.extend(Backbone.Validation.validators, {
                notEmptyFile: function(value, attr) {
                    var field = \$('input[name=\"' + attr + '\"]');
                    if (field.length && field[0].files && field[0].files.length ) {
                        var file = field[0].files[0];
                        if (file && 0 == file.size) {
                            return true; //error
                        }
                    }                    
                },
                sizeLimit: function(value, attr) {
                    var field = \$('input[name=\"' + attr + '\"]');
                    if (field.length && field[0].files && field[0].files.length ) {
                        var file = field[0].files[0];
                        if (file && file.size/1024 > 200) {
                            return true; //error                            
                        }
                    }                    
                },
                imageFile: function(value, attr) {
                    var field = \$('input[name=\"' + attr + '\"]');
                    if (field.length && field[0].files && field[0].files.length) {
                        var file = field[0].files[0];
                        // Check if the file type is valid
                        if (! ['image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
                            return true; // Invalid file type
                        }
                    }

                    return false; // Valid file type or no file selected
                }
            });

\t\t\tvar BrandingForm = Backbone.View.extend({
\t\t\t    events: {
\t\t\t    \t'click .general-btn': 'generalBrandingFormSubmit',
\t\t\t        'click .pending-response-btn': 'pendingResponseSettingFormSubmit',
                    'change input[type=\"checkbox\"][name=\"status\"]': 'toggleBusinessHours',
\t\t\t\t\t'click .uv-btn': 'disableButton',
                    'change input[type=\"file\"]': 'formChanged',
                    'change .convertToSlug': 'convertToSlug',
                    'click .uv-btn-tag.btn-add': 'addMoreLink',
                    'click .remove-link': 'removeLink',
                    \"change .uv-knowledgebase-layout input[type='radio']\": 'layoutChanged',
                    'click #uv-reset-colors': 'resetDefaultColors',
\t\t\t    },
                resetDefaultColors: function(e) {
                    var defaultColorArray = {
                        'pageBackgroundColor': '#FFFFFF',
                        'headerBackgroundColor': '#FFFFFF',
                        'bannerBackgroundColor': '#7C70F4',
                        'linkColor': '#2750C4',
                        'linkHoverColor': '#2750C4',
                        'articleTextColor': '#333333',
                        'brandColor': '#7C70F4',
                    };
                    \$(e.target).addClass('uv-icon-history-active');
                    setTimeout(function () { 
                        \$(e.target).removeClass('uv-icon-history-active');
                    }, 500);
                    \$.each(defaultColorArray, function(index, value) {
                        var selectedField = \$('input[name=\"website['+ index +']\"]');
                        selectedField.val(value);
                        selectedField.trigger('changeColor');
                    });
                },
                headerLinkTemplate : _.template(\$(\"#header_link_tmp\").html()),
                footerLinkTemplate : _.template(\$(\"#footer_link_tmp\").html()),
\t\t\t    initialize: function () {
                    \$('.uv-color-field').each(function() {
                        textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                        \$(this).css('color', textColor)
                    });

\t\t\t        Backbone.Validation.bind(this);\t\t      
\t\t\t    },
                toggleBusinessHours: function(e) {
\t\t\t\t\tif (e.currentTarget.checked) {
\t\t\t\t\t\$('.business-hours').fadeIn(0);
\t\t\t\t\t} else {
\t\t\t\t\t\$('.business-hours').fadeOut(0);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t    formChanged: function(e) {
                    if (!Backbone.\$(e.currentTarget).parents('.links').length) {
                        this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                        this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                    }
\t\t\t    },          
\t\t\t    generalBrandingFormSubmit: function (e) {
\t\t\t        e.preventDefault();
\t\t\t        this.model.set(\$('#generalSettingForm').serializeObject());
                        console.log(\"form_submited fail\");
                    
\t\t\t        if (this.model.isValid(true)) {
\t\t\t           \$(\"#generalSettingForm\").submit();
\t\t\t        }
\t\t\t    },
                generalBrandingLocalesUpdate: function (e) {
\t\t\t        e.preventDefault();
\t\t\t        this.model.set(\$('#generalSettingForm').serializeObject());
                        console.log(\"form_submited fail\");
                    
\t\t\t        if (this.model.isValid(true)) {

                       \t\$.ajax({
\t\t\t\t\t\t\turl: \"{{ url('helpdesk_member_knowledgebase_update_locales') }}\",
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: \$('#generalSettingForm').serializeObject(),
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\twindow.location.reload();
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(response) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t        }
\t\t\t    },
\t\t\t    pendingResponseSettingFormSubmit: function (e) {
\t\t\t        e.preventDefault();
\t\t\t        this.model.set(\$('#pendingResponseSettingForm').serializeObject());
\t\t\t        if (this.model.isValid('website[pendingSince]')) {
\t\t\t\t\t\t\$('.pending-response-btn').attr('disabled', 'disabled');
\t\t\t            \$(\"#pendingResponseSettingForm\").submit();
\t\t\t        }
\t\t\t    },
\t\t\t\tdisableButton: function(e) {
\t\t\t\t\tvar form = Backbone.\$(e.currentTarget).parents('form');

\t\t\t\t\tif (form.attr('id') == 'businessHoursSettingForm' || form.attr('id') == 'seoForm' || form.attr('id') == 'advancedForm' || form.attr('id') == 'knowledgebaseForm') {
\t\t\t\t\t\tBackbone.\$(e.currentTarget).attr('disabled', 'disabled');
\t\t\t\t\t\tform.submit()
\t\t\t\t\t}
\t\t\t\t},
                convertToSlug: function(e) {
                    Backbone.\$(e.currentTarget).val(app.appView.convertToSlug(Backbone.\$(e.currentTarget).val()));
                },
                addMoreLink: function(e) {
                    e.preventDefault();

                    var currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.attr('data-type') == 'header') {
                        count = \$('.uv-header-link-wrapper .uv-element-block').length + 1;
                        \$('.uv-header-link-wrapper .links').append(this.headerLinkTemplate({'count' : count}))
                    } else {
                        count = \$('.uv-footer-link-wrapper .uv-element-block').length + 1;
                        \$('.uv-footer-link-wrapper .links').append(this.footerLinkTemplate({'count' : count}))
                    }
                },
                removeLink: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parents('.uv-element-block').remove()
                },
                layoutChanged: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    \$('.uv-layout-icon').removeClass('uv-layout-icon-active');

                    \$(\"label[for='\" + currentElement.attr('id') + \"']\").addClass('uv-layout-icon-active');
                }
\t\t\t});
            
            var brandingForm = new BrandingForm({
\t\t        el: 'form',
\t\t        model: new BrandingModel()
\t\t    });
            
            var BroadcastModel = Backbone.Model.extend({
\t\t\t    validation: {
\t\t\t    \t'broadcasting[message]': [{
\t\t\t\t      \trequired: true,
\t\t\t\t       \tmsg: '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t    },
                    {
\t\t\t\t\t\tmaxLength: 300,
\t\t\t\t\t\tmsg: '{{ \"This field should contains maximum 300 characters.\"|trans }}'
\t\t\t\t\t}],
\t\t\t    }
\t\t\t});

\t\t\tvar BroadcastForm = Backbone.View.extend({
                el: '#broadcastingForm',
\t\t\t    events: {
\t\t\t    \t'click .broadcasting-btn': 'broadcastingFormSubmit',
                    'change textarea': 'formChanged',
\t\t\t    },
                initialize: function() {
                    Backbone.Validation.bind(this);
                },
\t\t\t    formChanged: function(e) {
                    if (!Backbone.\$(e.currentTarget).parents('.links').length) {
                        this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                        this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                    }
\t\t\t    },
                broadcastingFormSubmit: function(e) {
\t\t\t\t\tvar form = Backbone.\$(e.currentTarget).closest('form')
                    if (form.attr('id') == 'broadcastingForm') {
                        data = form.serializeObject();
                        this.model.set(data);
                        if (this.model.isValid(true)) {
                            Backbone.\$(e.currentTarget).attr('disabled', 'disabled');
                            form.submit()
                        }
                    }
                }
\t\t    });

            var LinksModel = Backbone.Model.extend({
\t\t\t    validation: {
\t\t\t    }
\t\t\t});

\t\t\tvar LinksForm = Backbone.View.extend({
                el: '#linksForm',
                initialize: function() {
                    Backbone.Validation.bind(this);
                },                
                events: {
                    'click .links-btn': 'validateLinks',
                },
                validateLinks: function(e) {
                    e.preventDefault();
                    var data = \$('#linksForm').serializeObject();
                    var self = this; var valid = true;
                    \$.each(data, function(key, value) {
                        if (key.indexOf('[url]') != -1 && value && !value.match('^(http:\\/\\/www\\.|https:\\/\\/www\\.|http:\\/\\/|https:\\/\\/)[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}(:[0-9]{1,5})?(\\/.*)?\$')) {
    \t\t    \t\t\tBackbone.Validation.callbacks.invalid(self, key, '{{ \"Provide a valid url(with protocol)\"|trans }}', 'input');
                            valid = false;
                        } else {
    \t\t    \t\t\tBackbone.Validation.callbacks.valid(self, key, '{{ \"Provide a valid url(with protocol)\"|trans }}', 'input');                            
                        }
                    });
                    if (valid) {
\t\t\t\t\t\t\$('.links-btn').attr('disabled', 'disabled');
\t\t\t            \$(\"#linksForm\").submit();
\t\t\t        }
                },                      
            });

            var TimezoneForm = Backbone.View.extend({
                el: '#timeSettingForm',
\t\t\t    events: {
\t\t\t    \t'click .timezone-btn': 'timezoneFormSubmit',
                    
\t\t\t    },
                timezoneFormSubmit: function(e) {
\t\t\t\t\tvar form = Backbone.\$(e.currentTarget).closest('form')
                    
                    if (form.attr('id') == 'timeSettingForm') {
                        data = form.serializeObject();
                        form.submit()
                    }
                }
\t\t    });

            var time = new TimezoneForm();

            var broadcastForm = new BroadcastForm({
                model: new BroadcastModel()
            });

\t\t\tvar linksForm = new LinksForm({
                model: new LinksModel()                
            });
        });
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Staff/branding.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/branding.html.twig");
    }
}
