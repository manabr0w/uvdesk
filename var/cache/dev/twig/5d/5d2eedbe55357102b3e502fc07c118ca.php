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

/* @UVDeskSupportCenter/Knowledgebase/ticketView.html.twig */
class __TwigTemplate_ba88d57c215f215fd4850073df8507d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig", 1);
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

        yield "#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield "#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 4, $this->source); })()), "subject", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield "#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 5, $this->source); })()), "subject", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Requests"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 13, $this->source); })()), "ticketCreateOption", [], "any", false, false, false, 13)) {
            // line 14
            yield "                        <li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Ticket Request"), "html", null, true);
            yield "</a></li>
                    ";
        }
        // line 16
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_front_article_search");
        yield "\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"";
        // line 20
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

    // line 27
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

        // line 28
        yield "    <style>
        .uv-btn-tag {
            margin-right: 5px;
        }
        .uv-group-field {
            width: 80%;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-view .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .message {
            font-size: 15px;
        }
        .message img {
            max-width: 100%;
        }
        .uv-dropdown.reply .uv-dropdown-btn-active {
            border: none;
        }
        .uv-dropdown.reply .uv-dropdown-list {
            width: 220px;
            bottom: 47px;
        }

\t\t.uv-rtl .uv-top-left {
\t\t\tleft: unset;
\t\t}

\t\t.uv-rtl .uv-dropdown-list {
\t\t\ttext-align: right;
\t\t}

        .uv-action-buttons {
            margin: 10px 0px;
        }

        .uv-action-buttons .uv-btn:first-child {
            margin-left: 0px;
        }

\t\t.uv-rtl .uv-action-buttons .uv-btn:first-child {
\t\t\tmargin-left: 5px;
\t\t\tmargin-right: 0px;
\t\t}

        .uv-action-buttons .uv-btn {
            margin: 5px;
        }

        form #customFieldCollection .uv-field-error-icon, form #customFieldCollection .uv-field-success-icon {
            display: none;
        }

        .custom-field-field-display .uv-field-block {
            width: 100%;
            color: #333333;
            word-wrap: break-word;
        }

        .custom-field-field-display .uv-field-block span {
            display: inline;
        }
        .uv-submit-left-side {
            margin: 0!important;
            padding-right: 5px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
        }
\t\t.uv-rtl .uv-submit-left-side {
\t\t\tpadding-right: 10px;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
\t\t\tpadding-left: 5px;
\t\t\tborder-bottom-left-radius: 0;
            border-top-left-radius: 0;
\t\t}
        .uv-submit-right-side {
            margin: 0!important;
        }
        .no-left-padding {
            padding-left: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
        }
\t\t.uv-rtl .no-left-padding {
\t\t\tpadding-left: 10px;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
\t\t\tpadding-right: 0;
\t\t\tborder-bottom-right-radius: 0;
\t\t\tborder-top-right-radius: 0;
\t\t}
        .uv-btn-error {
            background-color: #FF5656!important;
        }
        .uv-pull-rightside {
            float: right;
            font-size: 15px;
            cursor: pointer;
        }
\t\t.uv-rtl .uv-pull-rightside {
            float: left;
        }
        .uv-print-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-image: url(\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-kb-sprite.svg"), "html", null, true);
        yield "\");
            background-position: -176px -91px;
            vertical-align: middle;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-kudo, .uv-aside-back, .uv-footer, .uv-ticket-main.uv-ticket-reply, .uv-nav-bar,input, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader,.uv-header,.uv-upload-actions,.uv-pull-rightside {
                display: none !important;
            }
        }
        blockquote {
            background: #f9f9f9;
            border-left: 4px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: \"\\201C\"\"\\201D\"\"\\2018\"\"\\2019\";
        }
        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 3em;
            line-height: 0.1em;
            margin-right: 0.05em;
            vertical-align: -0.4em;
        }
        blockquote p {                                                                                                   
            display: inline;
        }
        #item-list-modules{
            margin-top: 20px;
        }
        .uv-marketing-modules-wrapper {
            display: flex;
            align-items: center;
            border-radius: 3px;
            padding: 12px;
            position: relative;
        }
        .uv-marketing-modules-text {
            padding-left: 0.7rem;
            width: 100%;
        }
        .uv-marketing-modules-text-description {
            font-size: 15px;
            font-weight: 400;
            line-height: 18.86px;
            font-family: 'Source Sans Pro';
            max-height: 57px;
            text-transform: capitalize;
            overflow: hidden;
        }
        .uv-marketing-modules-img img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }
        .uv-marketing-modules-text {
            padding-left: 0.7rem;
            width: 100%;
        }
        .uv-marketing-modules-text-heading {
            font-family: 'Source Sans Pro';
            font-size: 17px;
            font-weight: 700;
            line-height: 21.37px;
            text-transform: capitalize;
        }
        .uv-marketing-modules-text-description {
            font-size: 15px;
            font-weight: 400;
            line-height: 18.86px;
            font-family: 'Source Sans Pro';
            max-height: 57px;
            text-transform: capitalize;
            overflow: hidden;
        }
        .uv-marketing-modules {
            padding: 0 !important;
            margin-top: 7px;
            border: none !important;
        }
    </style>

    ";
        // line 221
        $context["ticketAgent"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 221, $this->source); })()), "agent", [], "any", false, false, false, 221)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 221, $this->source); })()), "getAgentDetailById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 221, $this->source); })()), "agent", [], "any", false, false, false, 221), "id", [], "any", false, false, false, 221)], "method", false, false, false, 221)) : (null));
        // line 222
        yield "    ";
        $context["totalThreads"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 222, $this->source); })()), "getTicketTotalThreads", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 222, $this->source); })()), "id", [], "any", false, false, false, 222)], "method", false, false, false, 222);
        // line 223
        yield "    ";
        $context["customer"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 223, $this->source); })()), "getCustomerPartialDetailById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 223, $this->source); })()), "customer", [], "any", false, false, false, 223), "id", [], "any", false, false, false, 223)], "method", false, false, false, 223);
        // line 224
        yield "    ";
        $context["createThread"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 224, $this->source); })()), "getCreateReply", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 224, $this->source); })()), "id", [], "any", false, false, false, 224), "customer"], "method", false, false, false, 224);
        // line 225
        yield "    ";
        $context["currentUser"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 225, $this->source); })()), "getCustomerPartialDetailById", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 225, $this->source); })()), "user", [], "any", false, false, false, 225), "id", [], "any", false, false, false, 225)], "method", false, false, false, 225);
        // line 226
        yield "
    <div class=\"uv-thread\">
        <div class=\"uv-thread-lt\">
            <aside>
                <h6>";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Information"), "html", null, true);
        yield "</h6>
                <h6>";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield " #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 231, $this->source); })()), "id", [], "any", false, false, false, 231), "html", null, true);
        yield "</h6>
                <div class=\"uv-aside-brick\">
                    <h6>";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Replies"), "html", null, true);
        yield "</h6>
                    <span class=\"uv-icon-replies\"></span>
                    <span>";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalThreads"]) || array_key_exists("totalThreads", $context) ? $context["totalThreads"] : (function () { throw new RuntimeError('Variable "totalThreads" does not exist.', 235, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
                <div class=\"uv-aside-brick\">
                    <h6>";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "</h6>
                    <span class=\"uv-icon-timestamp\"></span>
                    <span>";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 240, $this->source); })()), "html", null, true);
        yield "</span>
                </div>

                <div class=\"uv-hr\"></div>
                ";
        // line 244
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 244, $this->source); })()), "customer", [], "any", false, false, false, 244) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 244, $this->source); })()), "user", [], "any", false, false, false, 244))) {
            // line 245
            yield "                    <div class=\"uv-aside-brick\">
                        <h6>";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer"), "html", null, true);
            yield "</h6>
                        <span>";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 247, $this->source); })()), "name", [], "any", false, false, false, 247), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 250
        yield "                ";
        if ((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 250, $this->source); })())) {
            // line 251
            yield "                    <div class=\"uv-aside-brick\">
                        <h6>";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</h6>
                        <span>";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 253, $this->source); })()), "name", [], "any", false, false, false, 253), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 256
        yield "                <div class=\"uv-aside-brick\">
                    <h6>";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</h6>
                    <span>";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 258, $this->source); })()), "status", [], "any", false, false, false, 258), "description", [], "any", false, false, false, 258)), "html", null, true);
        yield "</span>
                </div>
                ";
        // line 260
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 260, $this->source); })()), "type", [], "any", false, false, false, 260)) {
            // line 261
            yield "                    <div class=\"uv-aside-brick\">
                        <h6>";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</h6>
                        <span>";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 263, $this->source); })()), "type", [], "any", false, false, false, 263), "code", [], "any", false, false, false, 263), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 266
        yield "
                ";
        // line 267
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 267, $this->source); })()), "customer", [], "any", false, false, false, 267) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "user", [], "any", false, false, false, 267))) {
            // line 268
            yield "                    <div class=\"uv-hr\"></div>
                    <div class=\"uv-aside-brick collaborator-list-block\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
            yield "</label>
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type email to add"), "html", null, true);
            yield "\">
                            </div>
                        </div>
                        <div class=\"collaborator-list\" style=\"margin-top: 10px\">
                        </div>
                    </div>
                ";
        }
        // line 280
        yield "            </aside>

            ";
        // line 282
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 282, $this->source); })()), "isFileExists", ["apps/uvdesk/form-component"], "method", false, false, false, 282)) {
            // line 283
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 283, $this->source); })()), "getCustomFieldTemplateCustomer", [], "method", false, false, false, 283);
            yield "
            ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 284
(isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 284, $this->source); })()), "isFileExists", ["apps/uvdesk/custom-fields"], "method", false, false, false, 284)) {
            // line 285
            yield "                ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 285, $this->source); })()), "getCustomFieldTemplateCustomer", [], "method", false, false, false, 285);
            yield "
            ";
        }
        // line 287
        yield "
            <div id=\"item-list-modules\"></div>
        </div>
        <div class=\"uv-thread-rt\">
            <section>
                <div class=\"uv-ticket-view\">
                    <div class=\"uv-ticket-head\">
                        <h1>
                            ";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 295, $this->source); })()), "subject", [], "any", false, false, false, 295), "html", null, true);
        yield "
                            <span class=\"uv-pull-rightside uv-print-icon\" onclick=\"window.print()\"></span>
                        </h1>
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-ticket-strip-label\">";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield " -</span>
                                <span class=\"timeago\" data-timestamp=\"";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 301, $this->source); })()), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 301, $this->source); })()), "html", null, true);
        yield "\">
                                    ";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 302, $this->source); })()), "html", null, true);
        yield " 
                                </span>
                            </span>
                            <span>
                                <span class=\"uv-ticket-strip-label\">";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        yield " -</span>
                                ";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 307, $this->source); })()), "user", [], "any", false, false, false, 307), "name", [], "any", false, false, false, 307), "html", null, true);
        yield "
                            </span>
                            ";
        // line 309
        if ((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 309, $this->source); })())) {
            // line 310
            yield "                                <span>
                                    <span class=\"uv-ticket-strip-label\">";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield " -</span>
                                    ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 312, $this->source); })()), "name", [], "any", false, false, false, 312), "html", null, true);
            yield "
                                </span>
                            ";
        }
        // line 315
        yield "                        </div>
                    </div>

                    <div class=\"uv-tab-view\">
                        <div class=\"uv-ticket-section\">
                            <div class=\"uv-ticket-main create\">
                                <div class=\"uv-ticket-strip\">
                                    <span>
                                        <span class=\"timeago uv-margin-0\" data-timestamp=\"ticket.createdAt\" title=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 323, $this->source); })()), "html", null, true);
        yield "\">
                                            ";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["localizedCreateAtTime"]) || array_key_exists("localizedCreateAtTime", $context) ? $context["localizedCreateAtTime"] : (function () { throw new RuntimeError('Variable "localizedCreateAtTime" does not exist.', 324, $this->source); })()), "html", null, true);
        yield "
                                        </span>
                                        - ";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 326, $this->source); })()), "user", [], "any", false, false, false, 326), "name", [], "any", false, false, false, 326), "html", null, true);
        yield "
                                        <span class=\"uv-ticket-strip-label\">
                                        ";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        yield "
                                        ";
        // line 332
        yield "                                    </span>
                                </span>
                                </div>
                                <div class=\"uv-ticket-main-lt\">
                                   <img src=\"";
        // line 336
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 336, $this->source); })()), "user", [], "any", false, false, false, 336), "thumbnail", [], "any", false, false, false, 336)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 336, $this->source); })()), "request", [], "any", false, false, false, 336), "scheme", [], "any", false, false, false, 336) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 336, $this->source); })()), "request", [], "any", false, false, false, 336), "httpHost", [], "any", false, false, false, 336)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 336, $this->source); })()), "user", [], "any", false, false, false, 336), "thumbnail", [], "any", false, false, false, 336)), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 336, $this->source); })()), "createdBy", [], "any", false, false, false, 336) == "customer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 336, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 336, $this->source); })())), "html", null, true)))));
        yield "\">
                                </div>
                                <div class=\"uv-ticket-main-rt\">
                                    <span class=\"uv-ticket-member-name\">
                                        ";
        // line 340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 340, $this->source); })()), "user", [], "any", false, false, false, 340), "name", [], "any", false, false, false, 340), "html", null, true);
        yield "
                                    </span>

                                    <!-- Message Block -->
                                    <div class=\"message\">
                                        <p>
                                            ";
        // line 346
        if ((Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 346, $this->source); })()), "reply", [], "any", false, false, false, 346)) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 346, $this->source); })()), "reply", [], "any", false, false, false, 346))) {
            // line 347
            yield "                                                ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 347, $this->source); })()), "reply", [], "any", false, false, false, 347), "html", null, true));
            yield "
                                            ";
        } else {
            // line 349
            yield "                                                ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 349, $this->source); })()), "reply", [], "any", false, false, false, 349);
            yield "
                                            ";
        }
        // line 351
        yield "                                        </p>
                                    </div>
                                    <!-- //Message Block -->

                                    <!-- Attachment Block -->
                                    ";
        // line 356
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 356, $this->source); })()), "attachments", [], "any", false, false, false, 356))) {
            // line 357
            yield "                                        <div class=\"uv-ticket-uploads\">
                                            <h4>";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
            yield "</h4>
                                            <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                                                ";
            // line 360
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 360, $this->source); })()), "attachments", [], "any", false, false, false, 360));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 361
                yield "                                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "downloadURL", [], "any", false, false, false, 361), "html", null, true);
                yield "\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 361), "html", null, true);
                yield "\">
                                                        <img src=\"";
                // line 362
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "iconURL", [], "any", false, false, false, 362), "html", null, true);
                yield "\"  class=\"uv-auto-pointer-events\"/>
                                                    </a>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 365
            yield "                                            </div>
                                            ";
            // line 366
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 366, $this->source); })()), "attachments", [], "any", false, false, false, 366)) > 1)) {
                // line 367
                yield "                                                <div class=\"uv-upload-actions\">
                                                    <!-- <a href=\"#\"><span class=\"uv-icon-open-in-files\"></span>Open in Files</a> -->
                                                    <a href=\"";
                // line 369
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_download_ticket_attachment_zip");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createThread"]) || array_key_exists("createThread", $context) ? $context["createThread"] : (function () { throw new RuntimeError('Variable "createThread" does not exist.', 369, $this->source); })()), "id", [], "any", false, false, false, 369), "html", null, true);
                yield "\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
                yield "</a>
                                                </div>
                                            ";
            }
            // line 372
            yield "                                        </div>
                                    ";
        }
        // line 374
        yield "                                    <!-- //Attachment Block -->
                                </div>
                            </div>

                            <!-- uv-ticket-accordion-expanded uv-ticket-accordion-no-count-->
                            <div class=\"uv-ticket-accordion\">
                                <div class=\"uv-ticket-count-wrapper\">
                                    <span class=\"uv-ticket-count-stat\">";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalThreads"]) || array_key_exists("totalThreads", $context) ? $context["totalThreads"] : (function () { throw new RuntimeError('Variable "totalThreads" does not exist.', 381, $this->source); })()), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"uv-ticket-wrapper thread-list\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reply Form Block -->
                    <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                        <div class=\"uv-ticket-main-lt\">
                            <span class=\"uv-icon-ellipsis\"></span>
                            ";
        // line 393
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 393, $this->source); })()), "smallThumbnail", [], "any", false, false, false, 393)) {
            // line 394
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 394, $this->source); })()), "request", [], "any", false, false, false, 394), "scheme", [], "any", false, false, false, 394) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 394, $this->source); })()), "request", [], "any", false, false, false, 394), "httpHost", [], "any", false, false, false, 394)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 394, $this->source); })()), "smallThumbnail", [], "any", false, false, false, 394), "html", null, true);
            yield "\" />
                            ";
        } else {
            // line 396
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 396, $this->source); })())), "html", null, true);
            yield "\" />
                            ";
        }
        // line 398
        yield "                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <span class=\"uv-ticket-member-name\">";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 400, $this->source); })()), "name", [], "any", false, false, false, 400), "html", null, true);
        yield "</span>

                            <!-- Reply Tab View -->
                            <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 404
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_add_ticket_thread", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 404, $this->source); })()), "id", [], "any", false, false, false, 404)]), "html", null, true);
        yield "\" id=\"ticket-form\">
                                    <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                    <input class=\"reply-status\" name=\"status\" value=\"\" type=\"hidden\">
                                    <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                        <label class=\"uv-field-label\">";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        yield "</label>
                                        <div class=\"uv-field-block\">
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block cc-bcc\">
                                    ";
        // line 414
        if (((isset($context["isCollaborator"]) || array_key_exists("isCollaborator", $context) ? $context["isCollaborator"] : (function () { throw new RuntimeError('Variable "isCollaborator" does not exist.', 414, $this->source); })()) != true)) {
            // line 415
            yield "                                        <label>
                                            <div class=\"uv-checkbox\">
                                                <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                                <span class=\"uv-checkbox-view\"></span>
                                            </div>
                                            <span class=\"uv-checkbox-label\">";
            // line 420
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC/BCC"), "html", null, true);
            yield "</span>
                                        </label>
                                    ";
        }
        // line 423
        yield "                                        <div class=\"uv-field-block\" style=\"display: none\">
                                            <div class=\"uv-group\">
                                                <input class=\"uv-group-field\" type=\"text\">
                                                <select class=\"uv-group-select cc-bcc-select\">
                                                    <option value=\"bcc\">";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield "</option>
                                                    <option value=\"cc\">";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield "</option>
                                                </select>
                                            </div>
                                            <div class=\"cc-bcc-list\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        yield "</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"message\" id=\"reply-area\">";
        // line 439
        yield "</textarea>
                                        </div>
                                    </div>

                                    <!-- Field -->
                                    <div class=\"uv-element-block attachment-block\">
                                        <label>
                                            <span class=\"uv-file-label\">";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span>
                                        </label>
                                    </div>
                                    <!-- //Field -->

                                    <div class=\"uv-action-buttons\">
                                        <div id=\"reply-btn\" class=\"uv-btn uv-submit-left-side\">";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield "</div>
                                        <div class=\"uv-dropdown reply uv-submit-right-side\">
                                            <div class=\"uv-btn uv-dropdown-other no-left-padding\">
                                                <span class=\"uv-icon-down-light\"></span>
                                            </div>
                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield "</label>
                                                    <ul>
                                                        <li data-id=\"\">";
        // line 461
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        yield "</li>
                                                        <li class=\"confirm-close-ticket\" data-id=\"closed\">";
        // line 462
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
        yield "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- //Reply Tab View -->
                        </div>
                    </div>
                    <!-- Reply Form Block -->
                </div>
            </section>
        </div>
        </div>
    </div>

        <div class=\"uv-kudo\">
        <div class=\"uv-kudo-button\">
            <!--uv-kudo-button-active-->
            <div class=\"uv-kudo-icon\"></div>
            <span>";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rate Support"), "html", null, true);
        yield "</span>
        </div>

        <div class=\"uv-kudo-plank\">
            ";
        // line 488
        $context["count"] = 0;
        // line 489
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 489, $this->source); })()), "ratings", [], "any", false, false, false, 489));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 490
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "getCustomer", [], "any", false, false, false, 490), "id", [], "any", false, false, false, 490) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "user", [], "any", false, false, false, 490), "id", [], "any", false, false, false, 490))) {
                // line 491
                yield "                    ";
                $context["count"] = CoreExtension::getAttribute($this->env, $this->source, $context["rating"], "getStars", [], "any", false, false, false, 491);
                // line 492
                yield "                ";
            }
            // line 493
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rating'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        yield "            <div class=\"uv-kudo-response-wrapper\">
                <span class=\"uv-kudo-response uv-kudo-very-sad ";
        // line 495
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 495, $this->source); })()) == 1)) {
            yield "uv-kudo-done";
        }
        yield "\" data-id=\"1\"></span>
                <span class=\"uv-kudo-response uv-kudo-sad ";
        // line 496
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 496, $this->source); })()) == 2)) {
            yield "uv-kudo-done";
        }
        yield "\" data-id=\"2\"></span>
                <span class=\"uv-kudo-response uv-kudo-neutral ";
        // line 497
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 497, $this->source); })()) == 3)) {
            yield "uv-kudo-done";
        }
        yield "\" data-id=\"3\"></span>
                <span class=\"uv-kudo-response uv-kudo-happy ";
        // line 498
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 498, $this->source); })()) == 4)) {
            yield "uv-kudo-done";
        }
        yield "\" data-id=\"4\"></span>
                <span class=\"uv-kudo-response uv-kudo-very-happy  ";
        // line 499
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 499, $this->source); })()) == 5)) {
            yield "uv-kudo-done";
        }
        yield "\" data-id=\"5\"></span>
            </div>

            <span class=\"uv-kudo-message\">
                ";
        // line 503
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 503, $this->source); })()) == 1)) {
            // line 504
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am very Sad"), "html", null, true);
            yield "
                ";
        } elseif ((        // line 505
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 505, $this->source); })()) == 2)) {
            // line 506
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Sad"), "html", null, true);
            yield "
                ";
        } elseif ((        // line 507
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 507, $this->source); })()) == 3)) {
            // line 508
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Neutral"), "html", null, true);
            yield "
                ";
        } elseif ((        // line 509
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 509, $this->source); })()) == 4)) {
            // line 510
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Happy"), "html", null, true);
            yield "
                ";
        } elseif ((        // line 511
(isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 511, $this->source); })()) == 5)) {
            // line 512
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Very Happy"), "html", null, true);
            yield "
                ";
        }
        // line 514
        yield "            </span>
        </div>
    </div>

    <div class=\"uv-pop-up-overlay\" id=\"confirm-ticket-close-modal\" style=\"display: none;\">
        <div class=\"uv-pop-up-box uv-pop-up-slim\">
            <span class=\"uv-pop-up-close\"></span>
            <h2>";
        // line 521
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Close Ticket"), "html", null, true);
        yield "</h2>
            <p>";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure? You want to reply and close ticket."), "html", null, true);
        yield "</p>

            <div class=\"uv-pop-up-actions\">
                <a href=\"#\" class=\"uv-btn uv-btn-error\" id=\"confirmed-close-ticket\" data-id=\"closed\">";
        // line 525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
        yield "</a>
                <a href=\"#\" class=\"uv-btn cancel\">";
        // line 526
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 532
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

        // line 533
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    ";
        // line 534
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/attachment.html.twig");
        yield "

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <span class=\"timeago uv-margin-0\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                    <%= formatedCreatedAt %>
                </span>
                - <%- fullname %>
                <span class=\"uv-ticket-strip-label\">
                    ";
        // line 544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replied"), "html", null, true);
        yield "
                </span>
            </span>
            <% if (cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if (cc) { %>
                        <span><span class=\"uv-ticket-strip-label\">";
        // line 550
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield " -</span> <%- cc %></span>
                    <% } if (bcc) { %>
                        <span><span class=\"uv-ticket-strip-label\">";
        // line 552
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield " -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <% if (user && smallThumbnail != null) { %>
                <img src=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 559, $this->source); })()), "request", [], "any", false, false, false, 559), "scheme", [], "any", false, false, false, 559) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 559, $this->source); })()), "request", [], "any", false, false, false, 559), "httpHost", [], "any", false, false, false, 559)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= smallThumbnail.slice(1) %>\" />
            <% } else { %>
                <img src=\"<% if (userType == 'agent') { %> ";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 561, $this->source); })())), "html", null, true);
        yield " <% } else { %> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 561, $this->source); })())), "html", null, true);
        yield " <% } %>\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <span class=\"uv-ticket-member-name\">
                <%- fullname %>
            </span>
            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>
            <!-- //Message Block -->

            <!-- Attachment Block -->
            <% if (attachments.length) { %>
                <div class=\"uv-ticket-uploads\">
                    <h4>";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                    <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                        <% _.each(attachments, function(file) { %>
                            <a href=\"<%-file.downloadURL.replace(\"member\",\"customer\") %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                            </a>
                        <% }) %>
                    </div>

                    <% if (attachments.length > 1) { %>
                        <div class=\"thread-attachments-zip pull-left\">
                            <div class=\"uv-upload-actions\">
                                ";
        // line 590
        yield "                                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_download_ticket_attachment_zip");
        yield "/<%= id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                            </div>
                        </div>
                    <% } %>
                </div>
            <% } %>
            <!-- //Attachment Block -->
        </div>
    </script>

    <script type=\"text/javascript\">

        var ticketApp = {};
        \$(function () {
            
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 610
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: 'email',
                        msg: '";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        yield "'
                    }],
                },
            });

            var TicketView = Backbone.View.extend({
                el: \$('.uv-body'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-kudo-response-wrapper .uv-kudo-response': 'rateTicket',
                    'click .collaborator-list .uv-btn-tag': 'removeCcCollaborator',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field': 'addCcBccInput',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .uv-dropdown.reply .uv-dropdown-list li:not(.confirm-close-ticket)': 'validateForm',
                    'click #reply-btn': 'validateForm',
                    'click #confirmed-close-ticket': 'confirmedAction',
                    'click .confirm-close-ticket': 'confirmClose',
                },
                confirmClose: function(e) {
                    \$('#confirm-ticket-close-modal').show();
                },
                confirmedAction: function(e) {
                    \$('#confirm-ticket-close-modal').hide();
                    this.validateForm(e);
                },
                ratingText: {
                    '1' : \"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am very Sad"), "html", null, true);
        yield "\",
                    '2' : \"";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Sad"), "html", null, true);
        yield "\",
                    '3' : \"";
        // line 642
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Neutral"), "html", null, true);
        yield "\",
                    '4' : \"";
        // line 643
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Happy"), "html", null, true);
        yield "\",
                    '5' : \"";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("I am Very Happy"), "html", null, true);
        yield "\",
                },
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                rateTicket : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    var count = element.attr('data-id');
                    this.model.set('rating', count);

                    var self = this;
                    app.appView.showLoader()
                    this.model.save({}, {
                        url : \"";
        // line 655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_rate_ticket", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 655, $this->source); })()), "id", [], "any", false, false, false, 655)]), "html", null, true);
        yield "\",
                        success: function (model, response, options) {
                            app.appView.hideLoader()
                            if (response.alertClass == 'success') {
                                \$('.uv-kudo-response').removeClass('uv-kudo-done');
                                element.addClass('uv-kudo-done');
                                \$('.uv-kudo-message').text(self.ratingText[count])
                                \$('.uv-kudo-button').trigger('click')
                            } else {
                                app.appView.renderResponseAlert(response);
                            }
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                addCCCollaborators: function() {
                    if (collaboratorCollection.length) {
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                        collaboratorContainer.find('.uv-field-block').html('');
                        collaboratorContainer.show()
                        _.each(collaboratorCollection.models, function (item) {
                            var json = item.attributes;
                            collaboratorContainer.find('.uv-field-block').append(\"<span><input type='hidden' name='cccol[]' value='\" + json.email + \"'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + json.name + \"</a></span>\")
                        }, this);
                    }
                },
                removeCcCollaborator: function(e) {
                    e.preventDefault()
                    if (Backbone.\$(e.currentTarget).parent()[0]) {
                        Backbone.\$(e.currentTarget).parent()[0].removeChild(e.currentTarget);
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                    }

                    if (! collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                showCcBccBlock: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var currentTab = currentElement.parents('.uv-tab-view');
                    if (currentElement.is(':checked')) {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').show()
                    } else {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').hide()
                        currentTab.find('.uv-element-block .cc-bcc-list').html('')
                    }
                },
                addCcBccInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        type = currentTab.find('.cc-bcc-select option:selected').text()
                        if (! this.model.preValidate({name: 'email', email: email})) {
                            inputName = \$('.cc-bcc-select').val()
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                                currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                            }
                        }
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    form = \$('#ticket-form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"reply-area\").getContent();
                    if (app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        this.stopDraftSaveFlag = 1;

\t\t\t\t\t\tapp.appView.showLoader();
                        tinyMCE.activeEditor.uploadImages(function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tform.submit();
\t                        \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
\t                        \$('#reply-btn,#confirmed-close-ticket').attr('disabled', 'disabled');
                        });
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    }
                }
            });

            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_thread_collection_xhr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 762, $this->source); })()), "id", [], "any", false, false, false, 762)]), "html", null, true);
        yield "\",
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    app.appView.showLoader()
                    this.fetch({
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader()
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader()
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    this.\$el.addClass(\"thread-\" + this.model.id)

                    return this;
                }
            });

            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if (item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    this.\$el.find('img').removeAttr('crossorigin');
                    //viewerImages();
                    //convertForImages(this.\$el);
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime()
                }
            });

            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if (pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
                        var remain = pagination.totalCount - pagination.lastItemNumber;
                        \$('.uv-ticket-count-stat').text(remain)
                        \$('.uv-ticket-accordion').removeClass('uv-ticket-accordion-expanded').removeClass('uv-ticket-accordion-no-count')
                    } else {
                        \$('.uv-ticket-accordion').addClass('uv-ticket-accordion-expanded').addClass('uv-ticket-accordion-no-count')
                    }
                },
                loadMore: function() {
                    threadCollection.syncData();
                }
            });

            // Collaborator Code starts here
            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: 'email',
                        msg: '";
        // line 847
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        yield "'
                    }]
                },
                defaults : {
                    ticketId : ";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 851, $this->source); })()), "id", [], "any", false, false, false, 851), "html", null, true);
        yield ",
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"";
        // line 857
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_update_ticket_collaborators_xhr");
        yield "\"
            });

            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : 'removeItem'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if (response.alertMessage != undefined) {
                        collaboratorListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : this.model.attributes.ticketId },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                }
            });

            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass',
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';
                    if (collaboratorCollection.length) {
                        _.each(collaboratorCollection.models, function (item) {
                            this.renderCollaborator(item);
                        }, this);
                    }
                    ticketView.addCCCollaborators()
                },
                renderCollaborator : function (item) {
                    var collaborator = new CollaboratorItem({
                        model: item
                    });
                    this.\$el.find('.collaborator-list').append(collaborator.render().el);
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
                addCollaborator : function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                    var text = inputElement.val().trim();

                    if (e.which === 13 && text) {
                        this.model = new CollaboratorModel();
                        self = this;
                        this.model.set({email: text})

                        if (this.model.isValid(true)) {
                            app.appView.showLoader();
                            this.model.save({},{
                                success : function (model, response, options) {
                                    inputElement.val('');
                                    if (response.alertClass == \"success\") {
                                        collaboratorCollection.add(model);
                                    }
                                    self.render();
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(response);
                                },
                                error: function (model, xhr, options) {
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    var response = warningResponse;
                                    if (xhr.responseJSON)
                                        response = xhr.responseJSON;

                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(response);
                                }
                            });
                        } else {
                            inputElement.addClass('uv-field-error');
                            if (text)
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 973
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        yield "</span>\");
                        }
                    }
                }
            });
            // Collaborator Code ends here

            ticketModel = new TicketModel({
                id : \"";
        // line 981
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 981, $this->source); })()), "id", [], "any", false, false, false, 981), "html", null, true);
        yield "\",
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            var threadCollection = new ThreadCollection();
\t\t    var threadList = new ThreadList();
            var pagination = new Pagination();
            threadCollection.syncData();

            ";
        // line 993
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 993, $this->source); })()), "customer", [], "any", false, false, false, 993) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 993, $this->source); })()), "user", [], "any", false, false, false, 993))) {
            // line 994
            yield "                var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('";
            yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 994, $this->source); })()), "getTicketCollaborators", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 994, $this->source); })()), "id", [], "any", false, false, false, 994)], "method", false, false, false, 994));
            yield "'));
                var collaboratorListView = new CollaboratorList();
                collaboratorListView.render();
            ";
        }
        // line 998
        yield "        });
    </script>

    <script id=\"marketing_module_list_tmp\" type=\"text/template\">
        <a class=\"uv-marketing-modules-ancor\" href=\"<%- linkURL %>\" target=\"_blank\">
            <aside class=\"uv-marketing-modules\" style=\"border: 1px solid <%- borderColor %> !important; background-color: rgba(<%- borderColor.substr(4, borderColor.length-5) %>, 0.1) !important;\">
                <div class=\"uv-marketing-modules-wrapper\" >
                    <div class=\"uv-marketing-modules-img\">
                        <img src=\"<%- image %>\" alt=\"module image\">
                    </div>
                    <div class=\"uv-marketing-modules-text\">
                        <p class=\"uv-marketing-modules-text-heading\"><%- title %></p>
                        <p class=\"uv-marketing-modules-text-description\"><%- description %></p>
                    </div>

                </div>
            </aside>
        </a>
    </script>

    <script type=\"text/javascript\">
        \$(function() {
            // Model definition
            var ModuleModel = Backbone.Model.extend({
                idAttribute: \"id\",
            });

            // Collection definition
            var ModuleModelCollection = Backbone.Collection.extend({
                model: ModuleModel,
                url: '";
        // line 1028
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_front_marketing_modules_xhr");
        yield "',
                page: 1,
                limit: 3,
                ticketId: \"";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1031, $this->source); })()), "id", [], "any", false, false, false, 1031), "html", null, true);
        yield "\",
                parse: function(response) {
                    return response.modules;
                }
            });

            // Individual item view
            var ItemViewModule = Backbone.View.extend({
                template: _.template(\$(\"#marketing_module_list_tmp\").html()),
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                }
            });

            // List view
            var ItemListViewModule = Backbone.View.extend({
                el: '#item-list-modules',
                initialize: function() {
                    console.log('Initializing ItemListViewModule');
                    // Ensure collection is defined
                    if (!this.collection) {
                        console.error(\"Collection is not defined\");
                        return;
                    }
                    this.collection.on('sync', this.render, this);
                    this.collection.fetch({
                        data: { page: this.collection.page, limit: this.collection.limit, ticketId: this.collection.ticketId },
                    });
                },
                render: function() {
                    if (this.collection.length > 0) {
                        this.\$el.empty(); // Clear previous content
                        this.collection.each(function(item) {
                            var ItemModule = new ItemViewModule({ model: item });
                            this.\$el.append(ItemModule.render().el);
                        }, this);
                    }
                }
            });

            // Instantiate the collection
            var moduleCollection = new ModuleModelCollection();

            // Pass the collection to the view
            var itemsView = new ItemListViewModule({
                collection: moduleCollection
            });
        });

    </script>

    ";
        // line 1083
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        yield "

\t<script>
\t\tsfTinyMce.init({
            height: '250px',
\t\t\tselector : '.uv-ticket-reply textarea',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            }
\t\t});
\t</script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function(){
            var uvKudoButton = document.querySelector(\".uv-kudo-button\");
            var uvKudoIcon = document.querySelector(\".uv-kudo-icon\");
            var uvKudoPlank = document.querySelector(\".uv-kudo-plank\");
            var uvKudoMessage = document.querySelector(\".uv-kudo-message\");
            var uvKudoResponse = document.querySelector(\".uv-kudo-response\");

            uvKudoButton.addEventListener(\"click\", function(){
                uvKudoButton.classList.toggle(\"uv-kudo-button-active\");
                uvKudoPlank.classList.toggle(\"uv-kudo-plank-active\");
            });
        });
    </script>
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
        return "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig";
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
        return array (  1723 => 1083,  1668 => 1031,  1662 => 1028,  1630 => 998,  1622 => 994,  1620 => 993,  1605 => 981,  1594 => 973,  1475 => 857,  1466 => 851,  1459 => 847,  1453 => 844,  1368 => 762,  1349 => 746,  1255 => 655,  1241 => 644,  1237 => 643,  1233 => 642,  1229 => 641,  1225 => 640,  1195 => 613,  1189 => 610,  1163 => 590,  1148 => 577,  1127 => 561,  1122 => 559,  1112 => 552,  1107 => 550,  1098 => 544,  1085 => 534,  1080 => 533,  1067 => 532,  1051 => 526,  1047 => 525,  1041 => 522,  1037 => 521,  1028 => 514,  1022 => 512,  1020 => 511,  1015 => 510,  1013 => 509,  1008 => 508,  1006 => 507,  1001 => 506,  999 => 505,  994 => 504,  992 => 503,  983 => 499,  977 => 498,  971 => 497,  965 => 496,  959 => 495,  956 => 494,  950 => 493,  947 => 492,  944 => 491,  941 => 490,  936 => 489,  934 => 488,  927 => 484,  902 => 462,  898 => 461,  893 => 459,  883 => 452,  874 => 446,  865 => 439,  860 => 437,  848 => 428,  844 => 427,  838 => 423,  832 => 420,  825 => 415,  823 => 414,  814 => 408,  807 => 404,  800 => 400,  796 => 398,  790 => 396,  783 => 394,  781 => 393,  766 => 381,  757 => 374,  753 => 372,  743 => 369,  739 => 367,  737 => 366,  734 => 365,  725 => 362,  718 => 361,  714 => 360,  709 => 358,  706 => 357,  704 => 356,  697 => 351,  691 => 349,  685 => 347,  683 => 346,  674 => 340,  667 => 336,  661 => 332,  657 => 328,  652 => 326,  647 => 324,  643 => 323,  633 => 315,  627 => 312,  623 => 311,  620 => 310,  618 => 309,  613 => 307,  609 => 306,  602 => 302,  596 => 301,  592 => 300,  584 => 295,  574 => 287,  568 => 285,  566 => 284,  561 => 283,  559 => 282,  555 => 280,  545 => 273,  540 => 271,  535 => 268,  533 => 267,  530 => 266,  524 => 263,  520 => 262,  517 => 261,  515 => 260,  510 => 258,  506 => 257,  503 => 256,  497 => 253,  493 => 252,  490 => 251,  487 => 250,  481 => 247,  477 => 246,  474 => 245,  472 => 244,  465 => 240,  460 => 238,  454 => 235,  449 => 233,  442 => 231,  438 => 230,  432 => 226,  429 => 225,  426 => 224,  423 => 223,  420 => 222,  418 => 221,  332 => 138,  220 => 28,  207 => 27,  190 => 20,  186 => 19,  181 => 16,  173 => 14,  171 => 13,  165 => 12,  159 => 8,  146 => 7,  120 => 5,  94 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block title %}#{{ ticket.id }} {{ ticket.subject }}{% endblock %}
{% block ogtitle %}#{{ ticket.id }} {{ ticket.subject }}{% endblock %}
{% block twtitle %}#{{ ticket.id }} {{ ticket.subject }}{% endblock %}

{% block tabHeader %}
\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a href=\"{{ path('helpdesk_customer_ticket_collection') }}\">{{ 'Ticket Requests'|trans }}</a></li>
\t\t\t\t\t{% if websiteConfiguration.ticketCreateOption %}
                        <li><a href=\"{{ path('helpdesk_customer_create_ticket') }}\">{{ 'New Ticket Request'|trans }}</a></li>
                    {% endif %}
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
    <style>
        .uv-btn-tag {
            margin-right: 5px;
        }
        .uv-group-field {
            width: 80%;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-view .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .message {
            font-size: 15px;
        }
        .message img {
            max-width: 100%;
        }
        .uv-dropdown.reply .uv-dropdown-btn-active {
            border: none;
        }
        .uv-dropdown.reply .uv-dropdown-list {
            width: 220px;
            bottom: 47px;
        }

\t\t.uv-rtl .uv-top-left {
\t\t\tleft: unset;
\t\t}

\t\t.uv-rtl .uv-dropdown-list {
\t\t\ttext-align: right;
\t\t}

        .uv-action-buttons {
            margin: 10px 0px;
        }

        .uv-action-buttons .uv-btn:first-child {
            margin-left: 0px;
        }

\t\t.uv-rtl .uv-action-buttons .uv-btn:first-child {
\t\t\tmargin-left: 5px;
\t\t\tmargin-right: 0px;
\t\t}

        .uv-action-buttons .uv-btn {
            margin: 5px;
        }

        form #customFieldCollection .uv-field-error-icon, form #customFieldCollection .uv-field-success-icon {
            display: none;
        }

        .custom-field-field-display .uv-field-block {
            width: 100%;
            color: #333333;
            word-wrap: break-word;
        }

        .custom-field-field-display .uv-field-block span {
            display: inline;
        }
        .uv-submit-left-side {
            margin: 0!important;
            padding-right: 5px;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
        }
\t\t.uv-rtl .uv-submit-left-side {
\t\t\tpadding-right: 10px;
            border-bottom-right-radius: 3px;
            border-top-right-radius: 3px;
\t\t\tpadding-left: 5px;
\t\t\tborder-bottom-left-radius: 0;
            border-top-left-radius: 0;
\t\t}
        .uv-submit-right-side {
            margin: 0!important;
        }
        .no-left-padding {
            padding-left: 0;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
        }
\t\t.uv-rtl .no-left-padding {
\t\t\tpadding-left: 10px;
            border-bottom-left-radius: 3px;
            border-top-left-radius: 3px;
\t\t\tpadding-right: 0;
\t\t\tborder-bottom-right-radius: 0;
\t\t\tborder-top-right-radius: 0;
\t\t}
        .uv-btn-error {
            background-color: #FF5656!important;
        }
        .uv-pull-rightside {
            float: right;
            font-size: 15px;
            cursor: pointer;
        }
\t\t.uv-rtl .uv-pull-rightside {
            float: left;
        }
        .uv-print-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-kb-sprite.svg') }}\");
            background-position: -176px -91px;
            vertical-align: middle;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-kudo, .uv-aside-back, .uv-footer, .uv-ticket-main.uv-ticket-reply, .uv-nav-bar,input, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader,.uv-header,.uv-upload-actions,.uv-pull-rightside {
                display: none !important;
            }
        }
        blockquote {
            background: #f9f9f9;
            border-left: 4px solid #ccc;
            margin: 1.5em 10px;
            padding: 0.5em 10px;
            quotes: \"\\201C\"\"\\201D\"\"\\2018\"\"\\2019\";
        }
        blockquote:before {
            color: #ccc;
            content: open-quote;
            font-size: 3em;
            line-height: 0.1em;
            margin-right: 0.05em;
            vertical-align: -0.4em;
        }
        blockquote p {                                                                                                   
            display: inline;
        }
        #item-list-modules{
            margin-top: 20px;
        }
        .uv-marketing-modules-wrapper {
            display: flex;
            align-items: center;
            border-radius: 3px;
            padding: 12px;
            position: relative;
        }
        .uv-marketing-modules-text {
            padding-left: 0.7rem;
            width: 100%;
        }
        .uv-marketing-modules-text-description {
            font-size: 15px;
            font-weight: 400;
            line-height: 18.86px;
            font-family: 'Source Sans Pro';
            max-height: 57px;
            text-transform: capitalize;
            overflow: hidden;
        }
        .uv-marketing-modules-img img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }
        .uv-marketing-modules-text {
            padding-left: 0.7rem;
            width: 100%;
        }
        .uv-marketing-modules-text-heading {
            font-family: 'Source Sans Pro';
            font-size: 17px;
            font-weight: 700;
            line-height: 21.37px;
            text-transform: capitalize;
        }
        .uv-marketing-modules-text-description {
            font-size: 15px;
            font-weight: 400;
            line-height: 18.86px;
            font-family: 'Source Sans Pro';
            max-height: 57px;
            text-transform: capitalize;
            overflow: hidden;
        }
        .uv-marketing-modules {
            padding: 0 !important;
            margin-top: 7px;
            border: none !important;
        }
    </style>

    {% set ticketAgent = ticket.agent ? user_service.getAgentDetailById(ticket.agent.id) : null %}
    {% set totalThreads = ticket_service.getTicketTotalThreads(ticket.id) %}
    {% set customer = user_service.getCustomerPartialDetailById(ticket.customer.id)  %}
    {% set createThread = ticket_service.getCreateReply(ticket.id, 'customer') %}
    {% set currentUser = user_service.getCustomerPartialDetailById(app.user.id)  %}

    <div class=\"uv-thread\">
        <div class=\"uv-thread-lt\">
            <aside>
                <h6>{{ 'Ticket Information'|trans }}</h6>
                <h6>{{ 'Ticket Id'|trans }} #{{ ticket.id }}</h6>
                <div class=\"uv-aside-brick\">
                    <h6>{{ 'Total Replies'|trans }}</h6>
                    <span class=\"uv-icon-replies\"></span>
                    <span>{{ totalThreads }}</span>
                </div>
                <div class=\"uv-aside-brick\">
                    <h6>{{ 'Timestamp'|trans }}</h6>
                    <span class=\"uv-icon-timestamp\"></span>
                    <span>{{ localizedCreateAtTime }}</span>
                </div>

                <div class=\"uv-hr\"></div>
                {% if ticket.customer != app.user %}
                    <div class=\"uv-aside-brick\">
                        <h6>{{ 'Customer'|trans }}</h6>
                        <span>{{ customer.name }}</span>
                    </div>
                {% endif %}
                {% if ticketAgent %}
                    <div class=\"uv-aside-brick\">
                        <h6>{{ 'Agent'|trans }}</h6>
                        <span>{{ ticketAgent.name }}</span>
                    </div>
                {% endif %}
                <div class=\"uv-aside-brick\">
                    <h6>{{ 'Status'|trans }}</h6>
                    <span>{{ ticket.status.description|trans }}</span>
                </div>
                {% if ticket.type %}
                    <div class=\"uv-aside-brick\">
                        <h6>{{ 'Type'|trans }}</h6>
                        <span>{{ ticket.type.code }}</span>
                    </div>
                {% endif %}

                {% if ticket.customer == app.user %}
                    <div class=\"uv-hr\"></div>
                    <div class=\"uv-aside-brick collaborator-list-block\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"{{ 'Type email to add'|trans }}\">
                            </div>
                        </div>
                        <div class=\"collaborator-list\" style=\"margin-top: 10px\">
                        </div>
                    </div>
                {% endif %}
            </aside>

            {% if user_service.isFileExists('apps/uvdesk/form-component') %}
                {{ user_service.getCustomFieldTemplateCustomer() | raw }}
            {% elseif user_service.isFileExists('apps/uvdesk/custom-fields') %}
                {{ user_service.getCustomFieldTemplateCustomer() | raw }}
            {% endif %}

            <div id=\"item-list-modules\"></div>
        </div>
        <div class=\"uv-thread-rt\">
            <section>
                <div class=\"uv-ticket-view\">
                    <div class=\"uv-ticket-head\">
                        <h1>
                            {{ ticket.subject }}
                            <span class=\"uv-pull-rightside uv-print-icon\" onclick=\"window.print()\"></span>
                        </h1>
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-ticket-strip-label\">{{ 'Created'|trans }} -</span>
                                <span class=\"timeago\" data-timestamp=\"{{ localizedCreateAtTime }}\" title=\"{{ localizedCreateAtTime }}\">
                                    {{ localizedCreateAtTime }} 
                                </span>
                            </span>
                            <span>
                                <span class=\"uv-ticket-strip-label\">{{ 'By'|trans }} -</span>
                                {{ createThread.user.name }}
                            </span>
                            {% if ticketAgent %}
                                <span>
                                    <span class=\"uv-ticket-strip-label\">{{ 'Agent'|trans }} -</span>
                                    {{ ticketAgent.name }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"uv-tab-view\">
                        <div class=\"uv-ticket-section\">
                            <div class=\"uv-ticket-main create\">
                                <div class=\"uv-ticket-strip\">
                                    <span>
                                        <span class=\"timeago uv-margin-0\" data-timestamp=\"ticket.createdAt\" title=\"{{ localizedCreateAtTime }}\">
                                            {{ localizedCreateAtTime }}
                                        </span>
                                        - {{ createThread.user.name }}
                                        <span class=\"uv-ticket-strip-label\">
                                        {{ 'created Ticket'|trans }}
                                        {# {% if ticket.ipAddress %}
                                            ({{ 'IP'|trans }} -{{ ticket.ipAddress }})
                                        {% endif %} #}
                                    </span>
                                </span>
                                </div>
                                <div class=\"uv-ticket-main-lt\">
                                   <img src=\"{{ initialThread.user.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ (initialThread.user.thumbnail) : initialThread.createdBy == 'customer' ? asset(default_customer_image_path) : asset(default_agent_image_path) }}\">
                                </div>
                                <div class=\"uv-ticket-main-rt\">
                                    <span class=\"uv-ticket-member-name\">
                                        {{ createThread.user.name }}
                                    </span>

                                    <!-- Message Block -->
                                    <div class=\"message\">
                                        <p>
                                            {% if createThread.reply|striptags == createThread.reply %}
                                                {{ createThread.reply|nl2br }}
                                            {% else %}
                                                {{ createThread.reply|raw }}
                                            {% endif %}
                                        </p>
                                    </div>
                                    <!-- //Message Block -->

                                    <!-- Attachment Block -->
                                    {% if createThread.attachments|length %}
                                        <div class=\"uv-ticket-uploads\">
                                            <h4>{{ 'Uploaded Files'|trans }}</h4>
                                            <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                                                {% for attachment in createThread.attachments %}
                                                    <a href=\"{{ attachment.downloadURL }}\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"{{ attachment.name }}\">
                                                        <img src=\"{{ attachment.iconURL }}\"  class=\"uv-auto-pointer-events\"/>
                                                    </a>
                                                {% endfor %}
                                            </div>
                                            {% if createThread.attachments|length > 1 %}
                                                <div class=\"uv-upload-actions\">
                                                    <!-- <a href=\"#\"><span class=\"uv-icon-open-in-files\"></span>Open in Files</a> -->
                                                    <a href=\"{{ path('helpdesk_customer_download_ticket_attachment_zip') }}/{{createThread.id}}\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                                </div>
                                            {% endif %}
                                        </div>
                                    {% endif %}
                                    <!-- //Attachment Block -->
                                </div>
                            </div>

                            <!-- uv-ticket-accordion-expanded uv-ticket-accordion-no-count-->
                            <div class=\"uv-ticket-accordion\">
                                <div class=\"uv-ticket-count-wrapper\">
                                    <span class=\"uv-ticket-count-stat\">{{ totalThreads }}</span>
                                </div>
                                <div class=\"uv-ticket-wrapper thread-list\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Reply Form Block -->
                    <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                        <div class=\"uv-ticket-main-lt\">
                            <span class=\"uv-icon-ellipsis\"></span>
                            {% if currentUser.smallThumbnail %}
                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ currentUser.smallThumbnail }}\" />
                            {% else %}
                                <img src=\"{{ asset(default_customer_image_path) }}\" />
                            {% endif %}
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <span class=\"uv-ticket-member-name\">{{ currentUser.name }}</span>

                            <!-- Reply Tab View -->
                            <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_customer_add_ticket_thread', {'id': ticket.id }) }}\" id=\"ticket-form\">
                                    <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                    <input class=\"reply-status\" name=\"status\" value=\"\" type=\"hidden\">
                                    <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                        <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block cc-bcc\">
                                    {% if isCollaborator != true %}
                                        <label>
                                            <div class=\"uv-checkbox\">
                                                <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                                <span class=\"uv-checkbox-view\"></span>
                                            </div>
                                            <span class=\"uv-checkbox-label\">{{ 'CC/BCC'|trans }}</span>
                                        </label>
                                    {% endif %}
                                        <div class=\"uv-field-block\" style=\"display: none\">
                                            <div class=\"uv-group\">
                                                <input class=\"uv-group-field\" type=\"text\">
                                                <select class=\"uv-group-select cc-bcc-select\">
                                                    <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                    <option value=\"cc\">{{ 'CC'|trans }}</option>
                                                </select>
                                            </div>
                                            <div class=\"cc-bcc-list\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"message\" id=\"reply-area\">{# {{ ticket_service.getCustomerDraft(ticket.id, 'reply') }} #}</textarea>
                                        </div>
                                    </div>

                                    <!-- Field -->
                                    <div class=\"uv-element-block attachment-block\">
                                        <label>
                                            <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                                        </label>
                                    </div>
                                    <!-- //Field -->

                                    <div class=\"uv-action-buttons\">
                                        <div id=\"reply-btn\" class=\"uv-btn uv-submit-left-side\">{{ 'Reply'|trans }}</div>
                                        <div class=\"uv-dropdown reply uv-submit-right-side\">
                                            <div class=\"uv-btn uv-dropdown-other no-left-padding\">
                                                <span class=\"uv-icon-down-light\"></span>
                                            </div>
                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Reply'|trans }}</label>
                                                    <ul>
                                                        <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                        <li class=\"confirm-close-ticket\" data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- //Reply Tab View -->
                        </div>
                    </div>
                    <!-- Reply Form Block -->
                </div>
            </section>
        </div>
        </div>
    </div>

        <div class=\"uv-kudo\">
        <div class=\"uv-kudo-button\">
            <!--uv-kudo-button-active-->
            <div class=\"uv-kudo-icon\"></div>
            <span>{{ 'Rate Support'|trans }}</span>
        </div>

        <div class=\"uv-kudo-plank\">
            {% set count = 0 %}
            {% for rating in ticket.ratings %}
                {% if rating.getCustomer.id == app.user.id %}
                    {% set count = rating.getStars %}
                {% endif %}
            {% endfor %}
            <div class=\"uv-kudo-response-wrapper\">
                <span class=\"uv-kudo-response uv-kudo-very-sad {% if count == 1 %}uv-kudo-done{% endif %}\" data-id=\"1\"></span>
                <span class=\"uv-kudo-response uv-kudo-sad {% if count == 2 %}uv-kudo-done{% endif %}\" data-id=\"2\"></span>
                <span class=\"uv-kudo-response uv-kudo-neutral {% if count == 3 %}uv-kudo-done{% endif %}\" data-id=\"3\"></span>
                <span class=\"uv-kudo-response uv-kudo-happy {% if count == 4 %}uv-kudo-done{% endif %}\" data-id=\"4\"></span>
                <span class=\"uv-kudo-response uv-kudo-very-happy  {% if count == 5 %}uv-kudo-done{% endif %}\" data-id=\"5\"></span>
            </div>

            <span class=\"uv-kudo-message\">
                {% if count == 1 %}
                    {{ 'I am very Sad'|trans }}
                {% elseif count == 2 %}
                    {{ 'I am Sad'|trans }}
                {% elseif count == 3 %}
                    {{ 'I am Neutral'|trans }}
                {% elseif count == 4 %}
                    {{ 'I am Happy'|trans }}
                {% elseif count == 5 %}
                    {{ 'I am Very Happy'|trans }}
                {% endif %}
            </span>
        </div>
    </div>

    <div class=\"uv-pop-up-overlay\" id=\"confirm-ticket-close-modal\" style=\"display: none;\">
        <div class=\"uv-pop-up-box uv-pop-up-slim\">
            <span class=\"uv-pop-up-close\"></span>
            <h2>{{ 'Confirm Close Ticket'|trans }}</h2>
            <p>{{ 'Are you sure? You want to reply and close ticket.'|trans }}</p>

            <div class=\"uv-pop-up-actions\">
                <a href=\"#\" class=\"uv-btn uv-btn-error\" id=\"confirmed-close-ticket\" data-id=\"closed\">{{ 'Confirm'|trans }}</a>
                <a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}
    {{ include('@UVDeskCoreFramework/Templates/attachment.html.twig') }}

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <span class=\"timeago uv-margin-0\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                    <%= formatedCreatedAt %>
                </span>
                - <%- fullname %>
                <span class=\"uv-ticket-strip-label\">
                    {{ 'replied'|trans }}
                </span>
            </span>
            <% if (cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if (cc) { %>
                        <span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> <%- cc %></span>
                    <% } if (bcc) { %>
                        <span><span class=\"uv-ticket-strip-label\">{{ 'BCC'|trans }} -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <% if (user && smallThumbnail != null) { %>
                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= smallThumbnail.slice(1) %>\" />
            <% } else { %>
                <img src=\"<% if (userType == 'agent') { %> {{ asset(default_agent_image_path) }} <% } else { %> {{ asset(default_customer_image_path) }} <% } %>\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <span class=\"uv-ticket-member-name\">
                <%- fullname %>
            </span>
            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>
            <!-- //Message Block -->

            <!-- Attachment Block -->
            <% if (attachments.length) { %>
                <div class=\"uv-ticket-uploads\">
                    <h4>{{ 'Uploaded Files'|trans }}</h4>
                    <div class=\"uv-ticket-uploads-strip uv-viewer-images\">
                        <% _.each(attachments, function(file) { %>
                            <a href=\"<%-file.downloadURL.replace(\"member\",\"customer\") %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                            </a>
                        <% }) %>
                    </div>

                    <% if (attachments.length > 1) { %>
                        <div class=\"thread-attachments-zip pull-left\">
                            <div class=\"uv-upload-actions\">
                                {#<a href=\"#\"><span class=\"uv-icon-open-in-files\"></span>Open in Files</a>#}
                                <a href=\"{{ path('helpdesk_customer_download_ticket_attachment_zip') }}/<%= id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                            </div>
                        </div>
                    <% } %>
                </div>
            <% } %>
            <!-- //Attachment Block -->
        </div>
    </script>

    <script type=\"text/javascript\">

        var ticketApp = {};
        \$(function () {
            
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern: 'email',
                        msg: '{{ \"Please enter a valid email\"|trans }}'
                    }],
                },
            });

            var TicketView = Backbone.View.extend({
                el: \$('.uv-body'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-kudo-response-wrapper .uv-kudo-response': 'rateTicket',
                    'click .collaborator-list .uv-btn-tag': 'removeCcCollaborator',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field': 'addCcBccInput',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .uv-dropdown.reply .uv-dropdown-list li:not(.confirm-close-ticket)': 'validateForm',
                    'click #reply-btn': 'validateForm',
                    'click #confirmed-close-ticket': 'confirmedAction',
                    'click .confirm-close-ticket': 'confirmClose',
                },
                confirmClose: function(e) {
                    \$('#confirm-ticket-close-modal').show();
                },
                confirmedAction: function(e) {
                    \$('#confirm-ticket-close-modal').hide();
                    this.validateForm(e);
                },
                ratingText: {
                    '1' : \"{{ 'I am very Sad'|trans }}\",
                    '2' : \"{{ 'I am Sad'|trans }}\",
                    '3' : \"{{ 'I am Neutral'|trans }}\",
                    '4' : \"{{ 'I am Happy'|trans }}\",
                    '5' : \"{{ 'I am Very Happy'|trans }}\",
                },
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                rateTicket : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    var count = element.attr('data-id');
                    this.model.set('rating', count);

                    var self = this;
                    app.appView.showLoader()
                    this.model.save({}, {
                        url : \"{{ path('helpdesk_customer_rate_ticket', {'id': ticket.id}) }}\",
                        success: function (model, response, options) {
                            app.appView.hideLoader()
                            if (response.alertClass == 'success') {
                                \$('.uv-kudo-response').removeClass('uv-kudo-done');
                                element.addClass('uv-kudo-done');
                                \$('.uv-kudo-message').text(self.ratingText[count])
                                \$('.uv-kudo-button').trigger('click')
                            } else {
                                app.appView.renderResponseAlert(response);
                            }
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                addCCCollaborators: function() {
                    if (collaboratorCollection.length) {
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                        collaboratorContainer.find('.uv-field-block').html('');
                        collaboratorContainer.show()
                        _.each(collaboratorCollection.models, function (item) {
                            var json = item.attributes;
                            collaboratorContainer.find('.uv-field-block').append(\"<span><input type='hidden' name='cccol[]' value='\" + json.email + \"'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + json.name + \"</a></span>\")
                        }, this);
                    }
                },
                removeCcCollaborator: function(e) {
                    e.preventDefault()
                    if (Backbone.\$(e.currentTarget).parent()[0]) {
                        Backbone.\$(e.currentTarget).parent()[0].removeChild(e.currentTarget);
                        var collaboratorContainer = \$('.uv-element-block.collaborators');
                    }

                    if (! collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                showCcBccBlock: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var currentTab = currentElement.parents('.uv-tab-view');
                    if (currentElement.is(':checked')) {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').show()
                    } else {
                        currentTab.find('.uv-element-block.cc-bcc').find('.uv-field-block').hide()
                        currentTab.find('.uv-element-block .cc-bcc-list').html('')
                    }
                },
                addCcBccInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        type = currentTab.find('.cc-bcc-select option:selected').text()
                        if (! this.model.preValidate({name: 'email', email: email})) {
                            inputName = \$('.cc-bcc-select').val()
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                                currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                            }
                        }
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    form = \$('#ticket-form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"reply-area\").getContent();
                    if (app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        this.stopDraftSaveFlag = 1;

\t\t\t\t\t\tapp.appView.showLoader();
                        tinyMCE.activeEditor.uploadImages(function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tform.submit();
\t                        \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
\t                        \$('#reply-btn,#confirmed-close-ticket').attr('disabled', 'disabled');
                        });
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    }
                }
            });

            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"{{ path('helpdesk_customer_thread_collection_xhr', {'id': ticket.id}) }}\",
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    app.appView.showLoader()
                    this.fetch({
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader()
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader()
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    this.\$el.addClass(\"thread-\" + this.model.id)

                    return this;
                }
            });

            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if (item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    this.\$el.find('img').removeAttr('crossorigin');
                    //viewerImages();
                    //convertForImages(this.\$el);
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime()
                }
            });

            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if (pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
                        var remain = pagination.totalCount - pagination.lastItemNumber;
                        \$('.uv-ticket-count-stat').text(remain)
                        \$('.uv-ticket-accordion').removeClass('uv-ticket-accordion-expanded').removeClass('uv-ticket-accordion-no-count')
                    } else {
                        \$('.uv-ticket-accordion').addClass('uv-ticket-accordion-expanded').addClass('uv-ticket-accordion-no-count')
                    }
                },
                loadMore: function() {
                    threadCollection.syncData();
                }
            });

            // Collaborator Code starts here
            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern: 'email',
                        msg: '{{ \"Please enter a valid email\"|trans }}'
                    }]
                },
                defaults : {
                    ticketId : {{ ticket.id }},
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"{{ path('helpdesk_customer_update_ticket_collaborators_xhr') }}\"
            });

            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : 'removeItem'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if (response.alertMessage != undefined) {
                        collaboratorListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : this.model.attributes.ticketId },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                }
            });

            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass',
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';
                    if (collaboratorCollection.length) {
                        _.each(collaboratorCollection.models, function (item) {
                            this.renderCollaborator(item);
                        }, this);
                    }
                    ticketView.addCCCollaborators()
                },
                renderCollaborator : function (item) {
                    var collaborator = new CollaboratorItem({
                        model: item
                    });
                    this.\$el.find('.collaborator-list').append(collaborator.render().el);
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
                addCollaborator : function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                    var text = inputElement.val().trim();

                    if (e.which === 13 && text) {
                        this.model = new CollaboratorModel();
                        self = this;
                        this.model.set({email: text})

                        if (this.model.isValid(true)) {
                            app.appView.showLoader();
                            this.model.save({},{
                                success : function (model, response, options) {
                                    inputElement.val('');
                                    if (response.alertClass == \"success\") {
                                        collaboratorCollection.add(model);
                                    }
                                    self.render();
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(response);
                                },
                                error: function (model, xhr, options) {
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    var response = warningResponse;
                                    if (xhr.responseJSON)
                                        response = xhr.responseJSON;

                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(response);
                                }
                            });
                        } else {
                            inputElement.addClass('uv-field-error');
                            if (text)
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Email address is invalid'|trans }}</span>\");
                        }
                    }
                }
            });
            // Collaborator Code ends here

            ticketModel = new TicketModel({
                id : \"{{ ticket.id }}\",
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            var threadCollection = new ThreadCollection();
\t\t    var threadList = new ThreadList();
            var pagination = new Pagination();
            threadCollection.syncData();

            {% if ticket.customer == app.user %}
                var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('{{ ticket_service.getTicketCollaborators(ticket.id)|json_encode|raw }}'));
                var collaboratorListView = new CollaboratorList();
                collaboratorListView.render();
            {% endif %}
        });
    </script>

    <script id=\"marketing_module_list_tmp\" type=\"text/template\">
        <a class=\"uv-marketing-modules-ancor\" href=\"<%- linkURL %>\" target=\"_blank\">
            <aside class=\"uv-marketing-modules\" style=\"border: 1px solid <%- borderColor %> !important; background-color: rgba(<%- borderColor.substr(4, borderColor.length-5) %>, 0.1) !important;\">
                <div class=\"uv-marketing-modules-wrapper\" >
                    <div class=\"uv-marketing-modules-img\">
                        <img src=\"<%- image %>\" alt=\"module image\">
                    </div>
                    <div class=\"uv-marketing-modules-text\">
                        <p class=\"uv-marketing-modules-text-heading\"><%- title %></p>
                        <p class=\"uv-marketing-modules-text-description\"><%- description %></p>
                    </div>

                </div>
            </aside>
        </a>
    </script>

    <script type=\"text/javascript\">
        \$(function() {
            // Model definition
            var ModuleModel = Backbone.Model.extend({
                idAttribute: \"id\",
            });

            // Collection definition
            var ModuleModelCollection = Backbone.Collection.extend({
                model: ModuleModel,
                url: '{{ path(\"helpdesk_member_knowledgebase_front_marketing_modules_xhr\") }}',
                page: 1,
                limit: 3,
                ticketId: \"{{ ticket.id }}\",
                parse: function(response) {
                    return response.modules;
                }
            });

            // Individual item view
            var ItemViewModule = Backbone.View.extend({
                template: _.template(\$(\"#marketing_module_list_tmp\").html()),
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                }
            });

            // List view
            var ItemListViewModule = Backbone.View.extend({
                el: '#item-list-modules',
                initialize: function() {
                    console.log('Initializing ItemListViewModule');
                    // Ensure collection is defined
                    if (!this.collection) {
                        console.error(\"Collection is not defined\");
                        return;
                    }
                    this.collection.on('sync', this.render, this);
                    this.collection.fetch({
                        data: { page: this.collection.page, limit: this.collection.limit, ticketId: this.collection.ticketId },
                    });
                },
                render: function() {
                    if (this.collection.length > 0) {
                        this.\$el.empty(); // Clear previous content
                        this.collection.each(function(item) {
                            var ItemModule = new ItemViewModule({ model: item });
                            this.\$el.append(ItemModule.render().el);
                        }, this);
                    }
                }
            });

            // Instantiate the collection
            var moduleCollection = new ModuleModelCollection();

            // Pass the collection to the view
            var itemsView = new ItemListViewModule({
                collection: moduleCollection
            });
        });

    </script>

    {{ include(\"@UVDeskCoreFramework/Templates/tinyMCE.html.twig\") }}

\t<script>
\t\tsfTinyMce.init({
            height: '250px',
\t\t\tselector : '.uv-ticket-reply textarea',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            }
\t\t});
\t</script>

    <script>
        document.addEventListener(\"DOMContentLoaded\", function(){
            var uvKudoButton = document.querySelector(\".uv-kudo-button\");
            var uvKudoIcon = document.querySelector(\".uv-kudo-icon\");
            var uvKudoPlank = document.querySelector(\".uv-kudo-plank\");
            var uvKudoMessage = document.querySelector(\".uv-kudo-message\");
            var uvKudoResponse = document.querySelector(\".uv-kudo-response\");

            uvKudoButton.addEventListener(\"click\", function(){
                uvKudoButton.classList.toggle(\"uv-kudo-button-active\");
                uvKudoPlank.classList.toggle(\"uv-kudo-plank-active\");
            });
        });
    </script>
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/ticketView.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticketView.html.twig");
    }
}
