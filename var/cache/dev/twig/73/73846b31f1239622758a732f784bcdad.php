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

/* @UVDeskSupportCenter/Knowledgebase/ticketList.html.twig */
class __TwigTemplate_87a7c096a226a8b2923be5e2fbdab417 extends Template
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
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'tabHeader' => [$this, 'block_tabHeader'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_twtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tickets", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaDescription(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ticketlist.metaDescription", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaKeywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ticketlist.metaKeywords", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tabHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        // line 11
        yield "\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a class=\"uv-nav-tab-active\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Requests"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "ticketCreateOption", [], "any", true, true, false, 16) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 16, $this->source); })()), "ticketCreateOption", [], "any", false, false, false, 16))) {
            // line 17
            yield "\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Ticket Request"), "html", null, true);
            yield "</a></li>
\t\t\t\t\t";
        }
        // line 19
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_front_article_search");
        yield "\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        yield "\t<style>
\t\t.uv-table td a {
\t\t\tcolor: #333;
\t\t}
\t\t.announcement {
\t\t\tbackground-color:green;
\t\t\tmargin-bottom:10px; 
\t\t\tborder-radius:3px;
\t\t\theight: 48px; 
\t\t\tpadding: 10px;
\t\t}
\t\t.announcement_para {
\t\t\tcolor: #fff;
\t\t\tfloat: left;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 500;
\t\t\tfont-size: 16px;
\t\t\tline-height: 17px;
\t\t}
\t\t.announcement_remove {
\t\t\tborder-radius:50%; 
\t\t\tfloat:right; 
\t\t\tcursor:pointer;
\t\t\tborder: 2px solid #fff; 
\t\t\twidth: 26px; 
\t\t\tpadding-left: 7px; 
\t\t\tpadding-bottom: 3px;
\t\t}
\t\t.announcement_btn_rgt {
\t\t\tfloat: right;
\t\t\tfont-weight:bold;
\t\t\tbackground: #FFFFFF;
\t\t\tcursor: pointer;
\t\t\tcolor: #2B6BE3;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 3px; 
\t\t\tmargin-right: 36px;
\t\t}
\t\t.announcement_btn_left {
\t\t\tfloat: left;
\t\t\tbackground: #EFC556;
\t\t\tfont-weight:bold;
\t\t\tcursor: pointer;
\t\t\tfont: Source Sans Pro;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t\tmargin-right: 10px;
\t\t}
\t</style>
\t
\t<div class=\"uv-nav-tab-view\">
\t\t<h1>";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Requests"), "html", null, true);
        yield "</h1>
\t\t<div class=\"uv-action-view\">
\t\t\t<div class=\"uv-action-view-lt\">

\t\t\t\t<!--Sort by-->
\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--Sort by-->

\t\t\t\t<!--Filter By Status-->
\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t<div class=\"uv-dropdown-btn\">
\t\t\t\t\t\t";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\" data-id=\"\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 110, $this->source); })()), "getStatus", [], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 111
            yield "\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 111), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 111)), "html", null, true);
            yield "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--//Filter By Status-->
\t\t\t</div>
\t\t\t<div class=\"uv-action-view-rt\">
\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-search-inline-full\" placeholder=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Tickets"), "html", null, true);
        yield "\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--//Action Bar-->

\t<!-- Announcement Section-->
\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupAnnouncement"]) || array_key_exists("groupAnnouncement", $context) ? $context["groupAnnouncement"] : (function () { throw new RuntimeError('Variable "groupAnnouncement" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 128
            yield "\t\t<div class=\"announcement\" id= \"uv-kb-info-announcement_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "id", [], "any", false, false, false, 128), "html", null, true);
            yield "\">
\t\t\t<a class=\"announcement_btn_left\" style=\"background:";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "tagColor", [], "any", false, false, false, 129), "html", null, true);
            yield " !important; color:#333333 !important\" href=\"#\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "title", [], "any", false, false, false, 129), "html", null, true);
            yield "</a>
\t\t\t<p class=\"announcement_para\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "promoText", [], "any", false, false, false, 130), "html", null, true);
            yield "</p>
\t\t\t<a class =\"announcement_remove\" style=\"color: #fff !important;\" onclick=\"document.getElementById('uv-kb-info-announcement_";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "id", [], "any", false, false, false, 131), "html", null, true);
            yield "').remove()\">x</a>
\t\t\t<a class=\"announcement_btn_rgt\" target=\"_blank\" href=\"";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "linkUrl", [], "any", false, false, false, 132), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["announcement"], "linkText", [], "any", false, false, false, 132), "html", null, true);
            yield "</a>
\t\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['announcement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "\t<div class=\"uv-hl-ring\"></div>
\t<!-- Announcement Section-->

\t<div class=\"uv-table uv-list-view\">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield "</th>
\t\t\t\t\t<th>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</th>
\t\t\t\t\t<th>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
\t\t\t\t\t<th>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "</th>
\t\t\t\t\t<th class=\"uv-last\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"navigation\"></div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 156
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

        // line 157
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<!-- Sorting Template -->
\t<script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 't.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.id/<% if (sort == 't.id') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"t.id\">
                ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield "
            </a>
            <% if (sort == 't.id') { %>
                <span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
        <li class=\"<% if (sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/name/<% if (sort == 'name') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Name"), "html", null, true);
        yield "
            </a>
            <% if (sort == 'name') { %>
                <span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t\t<li class=\"<% if (sort == 't.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.updatedAt/<% if (sort == 't.updatedAt') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/asc<% } %><% } else { %>direction/desc<% } %>\" data-field=\"t.updatedAt\">
                ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Updated"), "html", null, true);
        yield "
            </a>
            <% if (sort == 't.updatedAt') { %>
                <span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<script id=\"ticket_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield "\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t#<%- id %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t<%- subject %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<% if (status.description == 'Open') { %>
\t\t\t\t   \t\t";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        yield "
\t\t\t\t<% } else if (status.description == 'Closed') { %>
\t\t\t\t\t\t";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Closed"), "html", null, true);
        yield "
\t\t\t\t<% } else if (status.description == 'Pending') { %>
\t\t\t\t\t\t";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        yield "
\t\t\t\t<% } else if (status.description == 'Answered') { %>
\t\t\t\t\t\t";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Answered"), "html", null, true);
        yield "
\t\t\t\t<% } else if (status.description == 'Resolved') { %>
\t\t\t\t\t\t";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolved"), "html", null, true);
        yield "
\t\t\t\t<% } else if (status.description == 'UnAnswered') { %>
\t\t\t\t\t\t";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        yield "
\t\t\t\t<% } else if (status.description == 'UnAssigned') { %>
\t\t\t\t\t\t";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        yield "
\t\t\t\t<% } %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<%= formatedCreatedAt %>
\t    \t</a>
        </td>
        <td data-value=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "\">
        \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t\t\t\t<%  if (agent) { %>
                    <% if (agent.smallThumbnail != null) { %>
                        <img class=\"uv-table-agent\" src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "scheme", [], "any", false, false, false, 229) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "httpHost", [], "any", false, false, false, 229)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%- agent.smallThumbnail %>\" alt=\"\"/>
                    <% } else { %>
                        <img class=\"uv-table-agent\" src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 231, $this->source); })())), "html", null, true);
        yield "\" alt=\"\"/>
                    <% } %>
                    <%- agent.firstName + ' ' + (agent.lastName == null ? '' : agent.lastName) %>
                <% } else { %>
                    ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unassigned"), "html", null, true);
        yield "
                <% } %>
        \t</a>
        </td>
    </script>

    <script type=\"text/javascript\">
\t\t\$(function() {
\t\t\tvar ticketPath = \"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket", ["id" => "replaceId"]);
        yield "\";
\t\t\tvar TicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketCollection = AppCollection.extend({
\t\t\t\tmodel : TicketModel,
\t\t\t\turl : \"";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection_xhr");
        yield "\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"status\" : \"\",
\t\t\t\t\t\"search\" : \"\",
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.tickets;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
\t\t\t\t\t\t\tapp.pager.url = response.pagination.url;
\t\t\t\t\t\t\tif (ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_item_tmp\").html()),
\t\t\t\trender : function () {
\t\t\t\t\tthis.model.set({path:ticketPath.replace('replaceId', this.model.attributes.id)})
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\tif (this.model.attributes.isCustomerView != true)
\t\t\t\t\t\tthis.\$el.addClass('unread')

\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\tif (ticketCollection.length) {
\t\t\t\t\t\t_.each(ticketCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTicket(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;float: none;'><td colspan='5'>";
        // line 312
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTicket : function (item) {
\t\t\t\t\tvar ticketItem = new TicketItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(ticketItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 't.id',
\t\t\t\tsortText: \"";
        // line 325
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 326
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket Id", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
\t\t\t\tfilterByStatus : function(e) {
\t\t\t\t\te.preventDefault()
\t\t\t\t\tthis.collection.reset();
\t\t\t\t\tthis.collection.state.currentPage = null;
\t\t\t\t\tthis.collection.setSorting(null, null, {full: false});
\t\t\t\t\tthis.collection.filterParameters.status = Backbone.\$(e.currentTarget).find('a').attr('data-id');
\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t},
\t\t\t})

\t\t\tvar ticketCollection = new TicketCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tel: \$('.uv-action-view'),
\t\t\t\tcollection : ticketCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t    \troutes: {
                \t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                \t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
                \t'status/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByStatus',
                \t'' : 'initializeList',
                \t'_=_' : 'initializeList',
                },
                initializeList : function() {
                \tthis.resetParams('','');
                \tthis.fetch(null, null, null);
                },
                paginate : function(number, sortField, order) {
                \tthis.resetParams('', '');
                \tthis.fetch(number, sortField, order);
                },
                filterByQuery : function(query, number, sortField, order) {
                \tif (query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, '');
                \tthis.fetch(number, sortField, order);
                },
                filterByStatus : function(status, query, number, sortField, order) {
                \tif (query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, status);

                \tthis.fetch(number, sortField, order);
                },
                fetch : function(number, sortField, order) {
                \tticketCollection.state.currentPage = number;
                \tfilter.sortCollection(sortField, order);
                \tticketCollection.syncData();
                },
                resetParams : function(query, status) {
                \tticketCollection.filterParameters.search = query;
                \t\$(\".uv-search-inline \").val(query);
                \tticketCollection.filterParameters.status = status;
                    var statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 386
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 387
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
                }
            });

\t\t\trouter = new Router();
            Backbone.history.start({push_state:true});
\t\t});
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
        return "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig";
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
        return array (  797 => 387,  793 => 386,  728 => 326,  724 => 325,  708 => 312,  646 => 253,  633 => 243,  622 => 235,  615 => 231,  610 => 229,  603 => 225,  595 => 220,  588 => 216,  583 => 214,  578 => 212,  573 => 210,  568 => 208,  563 => 206,  558 => 204,  552 => 201,  544 => 196,  536 => 191,  522 => 180,  510 => 171,  498 => 162,  489 => 157,  476 => 156,  456 => 146,  452 => 145,  448 => 144,  444 => 143,  440 => 142,  431 => 135,  420 => 132,  416 => 131,  412 => 130,  406 => 129,  401 => 128,  397 => 127,  387 => 120,  378 => 113,  367 => 111,  363 => 110,  359 => 109,  354 => 107,  345 => 103,  331 => 92,  322 => 88,  312 => 81,  259 => 30,  246 => 29,  229 => 23,  225 => 22,  220 => 19,  212 => 17,  210 => 16,  204 => 15,  198 => 11,  185 => 10,  162 => 8,  139 => 7,  116 => 6,  93 => 5,  70 => 4,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{# WebkulUVDeskSupportCenterBundle/Resources/views/Front/ticketList.html.twig #}
{% block title %}{% trans %}Tickets{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Tickets{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Tickets{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}ticketlist.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}ticketlist.metaKeywords{% endtrans %}{% endblock %}

{% block tabHeader %}
\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a class=\"uv-nav-tab-active\" href=\"{{ path('helpdesk_customer_ticket_collection') }}\">{{ 'Ticket Requests'|trans }}</a></li>
\t\t\t\t\t{% if websiteConfiguration.ticketCreateOption is defined and websiteConfiguration.ticketCreateOption %}
\t\t\t\t\t\t<li><a href=\"{{ path('helpdesk_customer_create_ticket') }}\">{{ 'New Ticket Request'|trans }}</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"{{path('helpdesk_customer_front_article_search')}}\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
{% block body %}
\t<style>
\t\t.uv-table td a {
\t\t\tcolor: #333;
\t\t}
\t\t.announcement {
\t\t\tbackground-color:green;
\t\t\tmargin-bottom:10px; 
\t\t\tborder-radius:3px;
\t\t\theight: 48px; 
\t\t\tpadding: 10px;
\t\t}
\t\t.announcement_para {
\t\t\tcolor: #fff;
\t\t\tfloat: left;
\t\t\tfont-style: normal;
\t\t\tfont-weight: 500;
\t\t\tfont-size: 16px;
\t\t\tline-height: 17px;
\t\t}
\t\t.announcement_remove {
\t\t\tborder-radius:50%; 
\t\t\tfloat:right; 
\t\t\tcursor:pointer;
\t\t\tborder: 2px solid #fff; 
\t\t\twidth: 26px; 
\t\t\tpadding-left: 7px; 
\t\t\tpadding-bottom: 3px;
\t\t}
\t\t.announcement_btn_rgt {
\t\t\tfloat: right;
\t\t\tfont-weight:bold;
\t\t\tbackground: #FFFFFF;
\t\t\tcursor: pointer;
\t\t\tcolor: #2B6BE3;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 3px; 
\t\t\tmargin-right: 36px;
\t\t}
\t\t.announcement_btn_left {
\t\t\tfloat: left;
\t\t\tbackground: #EFC556;
\t\t\tfont-weight:bold;
\t\t\tcursor: pointer;
\t\t\tfont: Source Sans Pro;
\t\t\tpadding: 4px;
\t\t\tborder-radius: 4px;
\t\t\tmargin-right: 10px;
\t\t}
\t</style>
\t
\t<div class=\"uv-nav-tab-view\">
\t\t<h1>{{ 'Ticket Requests'|trans }}</h1>
\t\t<div class=\"uv-action-view\">
\t\t\t<div class=\"uv-action-view-lt\">

\t\t\t\t<!--Sort by-->
\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t{{ 'Sort By:'|trans }} {{ 'Ticket Id'|trans }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>{{ 'Sort By'|trans }}</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--Sort by-->

\t\t\t\t<!--Filter By Status-->
\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t<div class=\"uv-dropdown-btn\">
\t\t\t\t\t\t{{ 'Status:'|trans }} {{ 'All'|trans }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\" data-id=\"\">{{ 'All'|trans }}</a></li>
\t\t\t\t\t\t\t\t{% for status in ticket_service.getStatus() %}
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"{{status.id}}\">{{ status.description|trans }}</a></li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--//Filter By Status-->
\t\t\t</div>
\t\t\t<div class=\"uv-action-view-rt\">
\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-search-inline-full\" placeholder=\"{{ 'Search Tickets'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--//Action Bar-->

\t<!-- Announcement Section-->
\t{% for announcement in groupAnnouncement %}
\t\t<div class=\"announcement\" id= \"uv-kb-info-announcement_{{ announcement.id }}\">
\t\t\t<a class=\"announcement_btn_left\" style=\"background:{{ announcement.tagColor }} !important; color:#333333 !important\" href=\"#\">{{ announcement.title }}</a>
\t\t\t<p class=\"announcement_para\">{{ announcement.promoText }}</p>
\t\t\t<a class =\"announcement_remove\" style=\"color: #fff !important;\" onclick=\"document.getElementById('uv-kb-info-announcement_{{ announcement.id }}').remove()\">x</a>
\t\t\t<a class=\"announcement_btn_rgt\" target=\"_blank\" href=\"{{ announcement.linkUrl }}\">{{ announcement.linkText }}</a>
\t\t</div>
    {% endfor %}
\t<div class=\"uv-hl-ring\"></div>
\t<!-- Announcement Section-->

\t<div class=\"uv-table uv-list-view\">
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>{{ \"Ticket Id\"|trans }}</th>
\t\t\t\t\t<th>{{ \"Subject\"|trans }}</th>
\t\t\t\t\t<th>{{ \"Status\"|trans }}</th>
\t\t\t\t\t<th>{{ \"Timestamp\"|trans }}</th>
\t\t\t\t\t<th class=\"uv-last\">{{ \"Agent\"|trans }}</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"navigation\"></div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
\t<!-- Sorting Template -->
\t<script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 't.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.id/<% if (sort == 't.id') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"t.id\">
                {{ 'Ticket Id'|trans }}
            </a>
            <% if (sort == 't.id') { %>
                <span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
        <li class=\"<% if (sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/name/<% if (sort == 'name') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                {{ 'Agent Name'|trans }}
            </a>
            <% if (sort == 'name') { %>
                <span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t\t<li class=\"<% if (sort == 't.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/t.updatedAt/<% if (sort == 't.updatedAt') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/asc<% } %><% } else { %>direction/desc<% } %>\" data-field=\"t.updatedAt\">
                {{ 'Last Updated'|trans }}
            </a>
            <% if (sort == 't.updatedAt') { %>
                <span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>

            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<script id=\"ticket_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"{{ 'Ticket Id'|trans }}\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t#<%- id %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Subject'|trans }}\">
\t       <a class=\"not-shiny\" href=\"<%- path %>\">
\t    \t\t<%- subject %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Status'|trans }}\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<% if (status.description == 'Open') { %>
\t\t\t\t   \t\t{{ 'Open'|trans }}
\t\t\t\t<% } else if (status.description == 'Closed') { %>
\t\t\t\t\t\t{{ 'Closed'|trans }}
\t\t\t\t<% } else if (status.description == 'Pending') { %>
\t\t\t\t\t\t{{ 'Pending'|trans }}
\t\t\t\t<% } else if (status.description == 'Answered') { %>
\t\t\t\t\t\t{{ 'Answered'|trans }}
\t\t\t\t<% } else if (status.description == 'Resolved') { %>
\t\t\t\t\t\t{{ 'Resolved'|trans }}
\t\t\t\t<% } else if (status.description == 'UnAnswered') { %>
\t\t\t\t\t\t{{ 'UnAnswered'|trans }}
\t\t\t\t<% } else if (status.description == 'UnAssigned') { %>
\t\t\t\t\t\t{{ 'UnAssigned'|trans }}
\t\t\t\t<% } %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Timestamp'|trans }}\">
\t       \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t       \t\t<%= formatedCreatedAt %>
\t    \t</a>
        </td>
        <td data-value=\"{{ 'Agent'|trans }}\">
        \t<a class=\"not-shiny\" href=\"<%- path %>\">
\t\t\t\t<%  if (agent) { %>
                    <% if (agent.smallThumbnail != null) { %>
                        <img class=\"uv-table-agent\" src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%- agent.smallThumbnail %>\" alt=\"\"/>
                    <% } else { %>
                        <img class=\"uv-table-agent\" src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                    <% } %>
                    <%- agent.firstName + ' ' + (agent.lastName == null ? '' : agent.lastName) %>
                <% } else { %>
                    {{ 'Unassigned'|trans }}
                <% } %>
        \t</a>
        </td>
    </script>

    <script type=\"text/javascript\">
\t\t\$(function() {
\t\t\tvar ticketPath = \"{{ path('helpdesk_customer_ticket', {'id': 'replaceId' }) }}\";
\t\t\tvar TicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketCollection = AppCollection.extend({
\t\t\t\tmodel : TicketModel,
\t\t\t\turl : \"{{ path('helpdesk_customer_ticket_collection_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"status\" : \"\",
\t\t\t\t\t\"search\" : \"\",
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.tickets;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
\t\t\t\t\t\t\tapp.pager.url = response.pagination.url;
\t\t\t\t\t\t\tif (ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_item_tmp\").html()),
\t\t\t\trender : function () {
\t\t\t\t\tthis.model.set({path:ticketPath.replace('replaceId', this.model.attributes.id)})
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\tif (this.model.attributes.isCustomerView != true)
\t\t\t\t\t\tthis.\$el.addClass('unread')

\t\t\t\t\treturn this;
\t\t\t\t}
\t\t\t});

\t\t\tvar TicketList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\tif (ticketCollection.length) {
\t\t\t\t\t\t_.each(ticketCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTicket(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;float: none;'><td colspan='5'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTicket : function (item) {
\t\t\t\t\tvar ticketItem = new TicketItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(ticketItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 't.id',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Ticket Id{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
\t\t\t\tfilterByStatus : function(e) {
\t\t\t\t\te.preventDefault()
\t\t\t\t\tthis.collection.reset();
\t\t\t\t\tthis.collection.state.currentPage = null;
\t\t\t\t\tthis.collection.setSorting(null, null, {full: false});
\t\t\t\t\tthis.collection.filterParameters.status = Backbone.\$(e.currentTarget).find('a').attr('data-id');
\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t},
\t\t\t})

\t\t\tvar ticketCollection = new TicketCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tel: \$('.uv-action-view'),
\t\t\t\tcollection : ticketCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t    \troutes: {
                \t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                \t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
                \t'status/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByStatus',
                \t'' : 'initializeList',
                \t'_=_' : 'initializeList',
                },
                initializeList : function() {
                \tthis.resetParams('','');
                \tthis.fetch(null, null, null);
                },
                paginate : function(number, sortField, order) {
                \tthis.resetParams('', '');
                \tthis.fetch(number, sortField, order);
                },
                filterByQuery : function(query, number, sortField, order) {
                \tif (query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, '');
                \tthis.fetch(number, sortField, order);
                },
                filterByStatus : function(status, query, number, sortField, order) {
                \tif (query != null)
                \t\tquery = query.replace(/\\+/g,' ');

                \tthis.resetParams(query, status);

                \tthis.fetch(number, sortField, order);
                },
                fetch : function(number, sortField, order) {
                \tticketCollection.state.currentPage = number;
                \tfilter.sortCollection(sortField, order);
                \tticketCollection.syncData();
                },
                resetParams : function(query, status) {
                \tticketCollection.filterParameters.search = query;
                \t\$(\".uv-search-inline \").val(query);
                \tticketCollection.filterParameters.status = status;
                    var statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
                }
            });

\t\t\trouter = new Router();
            Backbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/ticketList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticketList.html.twig");
    }
}
