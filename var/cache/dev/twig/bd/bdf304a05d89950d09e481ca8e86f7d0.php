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

/* @UVDeskCoreFramework/ticket.html.twig */
class __TwigTemplate_de03f304de6281d7253a8b550007f67c extends Template
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
            'templateCSS' => [$this, 'block_templateCSS'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticket.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/ticket.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "subject", [], "any", false, false, false, 3)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_templateCSS(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 6
        yield "    <style>
        .uv-aside-ticket-labels.label-list-block .uv-btn-label {
            cursor: pointer;
        }
        .uv-main-info-update-block .uv-element-block {
            margin: 10px 0px !important;
        }
        .uv-tab-ellipsis {
            position: relative;
        }
        .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .uv-element-block.cc-bcc .uv-dropdown-container {
            padding: 10px 20px 10px 20px;
        }
        .uv-action-buttons .uv-dropdown-list ul li {
            padding: 5px 0px !important;
        }
        .uv-action-buttons{
            margin-bottom: 40px !important;
        }
        .uv-ticket-reply .uv-element-block-textarea, .thread-edit-container .uv-element-block-textarea {
            width: 100% !important;
            max-width: 100% !important;
        }
        .thread-edit-container .uv-field-message {
            color: #FF5656 !important;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-reply .uv-element-block-textarea .uv-field-message, .thread-edit-container .uv-element-block-textarea .uv-field-message {
            margin-top: 15px;
        }
        .thread-edit-container {
            margin-top: 10px;
        }
        .uv-ticket-viewer-bar{
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 0px;
        }
        .uv-ticket-viewer-bar.active {
            height: 50px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #f97278;
        }
        .uv-ticket-viewer-single {
            display: inline-block;
            margin-right: 5px;
        }
        .uv-ticket-viewer-single img {
            width: 40px;
            border-radius: 3px;
            display: inline-block;
            vertical-align: middle;
        }
        .uv-ticket-viewer-single.uv-first {
            width: 40px;
            height: 40px;
            background-image: linear-gradient(to right, #f97278 0%, #f181bf 100%);
            text-align: center;
            vertical-align: top;
            line-height: 30px;
            border-radius: 20px;
        }
        .uv-ticket-viewer-close {
            position: absolute;
            top: 0px;
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            text-align: center;
            line-height: 35px;
            border-radius: 2px;
            opacity: .6;
            text-indent: 6px;
        }
        .uv-ticket-viewer-list {
            display: inline;
        }
        span.viewer-firstletter.img-thumbnail {
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px dotted;
            border-radius: 4px;
            line-height: 35px;
        }
        .uv-ticket-viewer-close {
            display:none;
        }
        .uv-ticket-viewer-single:hover .uv-ticket-viewer-close {
            display: block;
        }
        .uv-hide{
            display: none;
        }
        .uv-info {
            background: #7C70F4;
        }
        .uv-ticket-viewer-list .uv-icon-eye-light{
            animation: jelly 0.8s infinite alternate ease-in-out;
        }
        .uv-aside-brick .uv-loader {
            position: absolute;
            transform: scale(0.5);
            top: 22px;
            right: 45px;
        }
        .uv-app-glyph-customfields {
            width: 20px;
            height: 20px;
            background-position: center center;
            background-repeat: no-repeat;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0px 5px 10px;
            background-image: url(\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/app-glyph-custom.svg"), "html", null, true);
        yield "\");
        }
        .uv-no-threads {
            padding: 80px 20px;
            text-align: center;
        }
        .uv-ticket-strip-label {
            position: relative;
        }
        input.input-copy-thread-link {
            position: absolute;
            bottom: 10px;
            width: 400px;
        }
        .uv-ticket-action-bar-fixed {
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 999;
        }
        .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            position: fixed;
            right: 0px;
            margin-top: 10px;
        }
        .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
            margin-top: 70px;
        }
        .uv-ticket-main {
            word-wrap: break-word;
        }
        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
        }
        .uv-icon-pin {
            width: 18px;
            height: 18px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-sprite.svg"), "html", null, true);
        yield "\");
            background-position: 0px -396px;
            transition: transform .15s;
            transform: scale(1);
        }
        .uv-icon-pinned {
            background-position: -19px -396px;
        }
        .uv-header-fix{
            display: inline-block;
            margin: 0px 10px 0px 5px;
        }
        .uv-header-fix + .uv-tabs {
            display: inline-block;
        }
        .uv-ticket-section span.uv-mail-status {
            width: 16px;
            height: 16px;
            background: url('../../../../../bundles/webkuldefault/images/mail-status.png');
            cursor: help;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-processed {
            background-position: 0 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-open,.uv-ticket-section .uv-mail-status.uv-mail-delivered,.uv-ticket-section .uv-mail-status.uv-mail-click {
            background-position: -38px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-spam,.uv-ticket-section .uv-mail-status.uv-mail-deferred,.uv-ticket-section .uv-mail-spamreport {
            background-position: -55px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-bounce,.uv-ticket-section .uv-mail-status.uv-mail-dropped {
            background-position: -73px 0;
        }
        @media only screen and (max-width: 1480px) {
            .uv-inner-section .uv-view .uv-ticket-action-bar-fixed.uv-ticket-action-bar .uv-ticket-action-bar-rt{
                width: auto;
            }
        }
        @media only screen and (max-width: 1300px) {
            .uv-header-fix{
                margin: 0px 10px 0px 10px;
            }
        }

        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-lt{
                width: 70%;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                width: 21%;
                padding-right: 33px;
            }
            .uv-header-fix {
                display: none;
            }
        }

        .uv-inner-section .uv-view .uv-ticket-scroll-region {
            margin-bottom: 0px;
        }

        .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            width: 21%;
            padding-right: 33px;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-sidebar, .uv-aside>.uv-aside-brick, .uv-aside-back, .uv-ticket-fixed-region, .uv-ticket-main.uv-ticket-reply, .uv-upload-actions, .uv-filter-view, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader, .uv-navbar,.uv-ticket-count-wrapper {
                display: none !important;
            }
            .uv-ticket-scroll-region {
                overflow: visible;
                margin-bottom: 0 !important;
            }
            .uv-paper {
                padding-left: 0px !important; /* uv-view */
            }
            .uv-wrapper {
                left: 0 !important;
                margin: 0 !important;
            }
            .uv-inner-section .uv-view .uv-ticket-scroll-region  .uv-ticket-main-rt {
                width: 80%;
            }
            .uv-paper,.uv-view ,.uv-ticket-scroll-region, .uv-wrapper {
                position: initial !important;
            }
        }

        .uv-ticket-action-bar-rt .app-glyph {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .uv-ticket-action-bar-rt .app-glyph:last-child {
            margin-right: 0px;
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

        .uv-dropdown-list ul li {
            padding : 8px 0px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .uv-aside-select.search .uv-dropdown-list.uv-bottom-left, .uv-aside-select .uv-dropdown-list.uv-bottom-right {
            top: 25px;
            width: 100%;
        }

        .uv-aside-select.search .uv-dropdown-list ul {
            padding: 0px 10px;
        }

        .uv-aside-select.search .uv-dropdown-container {
            padding: 8px 10px 4px;
            overflow-y: auto;
            max-height: 280px;
            border-bottom: solid 1px #D3D3D3;
        }

        .uv-aside-select.search .uv-dropdown-list ul.uv-agents-list li {
            border-bottom: solid 1px #D3D3D3;
            border-top:0px;
        }

        .uv-search-inline {
            width: 100%;
        }

        .uv-dropdown-list ul.uv-search-list li:first-child {
            border-top: none;
        }

        .uv-search-sm input.uv-search-field { 
           border: solid 1px #B1B1AE;
           border-radius: 3px;
           color: #333333;
           font-size: 15px;
           box-sizing: border-box;
           padding: 7px 10px 9px 33px;
           width: 100%;
        }
        
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 363
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

        // line 364
        yield "
    <div class=\"uv-inner-section\">
        ";
        // line 367
        yield "        <div class=\"uv-aside\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "cookies", [], "any", false, false, false, 367) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 367, $this->source); })()), "request", [], "any", false, false, false, 367), "cookies", [], "any", false, false, false, 367), "get", ["uv-asideView"], "method", false, false, false, 367))) {
            yield "style=\"display: none;\"";
        }
        yield " >
            <div class=\"uv-main-info-block\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket"), "html", null, true);
        yield " #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 371, $this->source); })()), "id", [], "any", false, false, false, 371), "html", null, true);
        yield "</h6>
                    </div>
                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
        // line 374
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
        yield "';\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                    </div>
                </div>

                ";
        // line 379
        yield "                <div class=\"uv-aside-brick\">
                    ";
        // line 381
        yield "                    <div class=\"uv-aside-customer-block\">
                        <h3>";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Information"), "html", null, true);
        yield "</h3>
                        <div class=\"uv-aside-avatar\">
                            ";
        // line 384
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 384, $this->source); })()), "thumbnail", [], "any", false, false, false, 384)) {
            // line 385
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "request", [], "any", false, false, false, 385), "scheme", [], "any", false, false, false, 385) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 385, $this->source); })()), "request", [], "any", false, false, false, 385), "httpHost", [], "any", false, false, false, 385)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 385, $this->source); })()), "thumbnail", [], "any", false, false, false, 385), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 387
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 387, $this->source); })())), "html", null, true);
            yield "\">
                            ";
        }
        // line 389
        yield "                        </div>

                        <div class=\"uv-aside-customer-info\">
                            <span>";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 392, $this->source); })()), "name", [], "any", false, false, false, 392), "html", null, true);
        yield "</span>
                            <span>";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 393, $this->source); })()), "email", [], "any", false, false, false, 393), "html", null, true);
        yield "</span>
                            ";
        // line 394
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 394, $this->source); })()), "contactNumber", [], "any", false, false, false, 394)) {
            // line 395
            yield "                                <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 395, $this->source); })()), "contactNumber", [], "any", false, false, false, 395), "html", null, true);
            yield "</span>
                            ";
        }
        // line 397
        yield "
                            ";
        // line 398
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 398, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_CUSTOMER"], "method", false, false, false, 398)) {
            // line 399
            yield "                                <span class=\"uv-customize\" data-toggle=\"tooltip\" title=\"Edit Customer Information\"></span>
                            ";
        }
        // line 401
        yield "                        </div>
                    </div>

                    ";
        // line 405
        yield "                    <div class=\"uv-aside-ticket-block\">
                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Replies"), "html", null, true);
        yield "</h3>
                            <span class=\"uv-icon-replies\"></span> <span>";
        // line 408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReplies"]) || array_key_exists("totalReplies", $context) ? $context["totalReplies"] : (function () { throw new RuntimeError('Variable "totalReplies" does not exist.', 408, $this->source); })()), "html", null, true);
        yield "</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TimeStamp"), "html", null, true);
        yield "</h3>
                            <span class=\"uv-icon-timestamp\"></span> <span>";
        // line 413
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 413, $this->source); })()), "timeZoneConverter", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 413, $this->source); })()), "createdAt", [], "any", false, false, false, 413)], "method", false, false, false, 413), "html", null, true);
        yield "</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Channel"), "html", null, true);
        yield "</h3>
                            ";
        // line 418
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 418, $this->source); })()), "source", [], "any", false, false, false, 418) == "email")) {
            // line 419
            yield "                                <span class=\"uv-icon-channel uv-channel-email\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 420
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 420, $this->source); })()), "source", [], "any", false, false, false, 420) == "formbuilder")) {
            // line 421
            yield "                                <span class=\"uv-icon-channel uv-channel-form\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Formbuilder"), "html", null, true);
            yield "</span>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 422
(isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 422, $this->source); })()), "source", [], "any", false, false, false, 422) == "api")) {
            // line 423
            yield "                                <span class=\"uv-icon-channel uv-channel-api\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Api"), "html", null, true);
            yield "</span>
                            ";
        } else {
            // line 425
            yield "                                <span class=\"uv-icon-channel uv-channel-web\"></span> <span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website"), "html", null, true);
            yield "</span>
                            ";
        }
        // line 427
        yield "                        </div>

                        ";
        // line 429
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 429, $this->source); })()), "isFileExists", ["apps/uvdesk/sla"], "method", false, false, false, 429)) {
            // line 430
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework\\slaSnippet.html.twig");
            yield "
                        ";
        }
        // line 432
        yield "                    </div>
                </div>
            </div>

            ";
        // line 437
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 437, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_CUSTOMER"], "method", false, false, false, 437)) {
            // line 438
            yield "                <div class=\"uv-main-info-update-block uv-no-error-success-icon\" style=\"display: none\">
                    <div class=\"uv-aside-head\">
                        <div class=\"uv-aside-title\"><h6>";
            // line 440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Customer"), "html", null, true);
            yield "</h6></div>
                        <div class=\"uv-aside-back\"><span>";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
            yield "</span></div>
                    </div>

                    <div class=\"uv-aside-brick\">
                        <form method=\"post\">
                            <input class=\"uv-field\" name=\"id\" type=\"hidden\" value=\"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 446, $this->source); })()), "id", [], "any", false, false, false, 446), "html", null, true);
            yield "\">

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            yield "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"name\" type=\"text\" value=\"";
            // line 451
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 451, $this->source); })()), "name", [], "any", false, false, false, 451), "html", null, true);
            yield "\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"email\" type=\"text\" value=\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 458, $this->source); })()), "email", [], "any", false, false, false, 458), "html", null, true);
            yield "\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 463
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
            yield "</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"contactNumber\" type=\"text\" value=\"";
            // line 465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 465, $this->source); })()), "contactNumber", [], "any", false, false, false, 465), "html", null, true);
            yield "\">
                                </div>
                            </div>

                            <div class=\"uv-action-buttons\">
                                <a class=\"uv-btn update-btn\" href=\"#\">";
            // line 470
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
            yield "</a>
                                <a class=\"uv-btn cancel-btn\" href=\"#\">";
            // line 471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
            yield "</a>
                            </div>

                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 474
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["csrf_token_generator"]) || array_key_exists("csrf_token_generator", $context) ? $context["csrf_token_generator"] : (function () { throw new RuntimeError('Variable "csrf_token_generator" does not exist.', 474, $this->source); })()), "refreshToken", [""], "method", false, false, false, 474), "html", null, true);
            yield "\"/>
                        </form>
                    </div>
                </div>
            ";
        }
        // line 479
        yield "
            ";
        // line 481
        yield "            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-actions\">
                    ";
        // line 484
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 485
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 487
        $context["agentName"] = (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 487, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 487, $this->source); })()), "name", [], "any", false, false, false, 487)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned")));
        // line 488
        yield "                            ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 488, $this->source); })()), "isTrashed", [], "any", false, false, false, 488) == false) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 488, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET"], "method", false, false, false, 488))) {
            // line 489
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 489, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 489, $this->source); })()), "id", [], "any", false, false, false, 489), "html", null, true)) : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["agentName"]) || array_key_exists("agentName", $context) ? $context["agentName"] : (function () { throw new RuntimeError('Variable "agentName" does not exist.', 489, $this->source); })()), "html", null, true);
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                        ";
            // line 499
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 499, $this->source); })()), "getAgentPartialDataCollection", [], "method", false, false, false, 499));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 500
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 500), "html", null, true);
                yield "\">
                                                <img src=\"";
                // line 501
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 501) != null)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "request", [], "any", false, false, false, 501), "scheme", [], "any", false, false, false, 501) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 501, $this->source); })()), "request", [], "any", false, false, false, 501), "httpHost", [], "any", false, false, false, 501)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 501)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 501, $this->source); })())), "html", null, true)));
                yield "\"/> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 501), "html", null, true);
                yield "
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 504
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 507
            yield "                                <span class=\"uv-aside-select-value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["agentName"]) || array_key_exists("agentName", $context) ? $context["agentName"] : (function () { throw new RuntimeError('Variable "agentName" does not exist.', 507, $this->source); })()), "html", null, true);
            yield "</span>
                            ";
        }
        // line 509
        yield "                        </div>
                    </div>

                    ";
        // line 513
        yield "                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "</label>
                        <div>
                            <span class=\"uv-list-ticket-priority\" style=\"background: ";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 516, $this->source); })()), "priority", [], "any", false, false, false, 516), "colorCode", [], "any", false, false, false, 516), "html", null, true);
        yield "\"></span>
                            ";
        // line 517
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 517, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_PRIORITY"], "method", false, false, false, 517)) {
            // line 518
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 518, $this->source); })()), "priority", [], "any", false, false, false, 518), "id", [], "any", false, false, false, 518), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 518, $this->source); })()), "priority", [], "any", false, false, false, 518), "description", [], "any", false, false, false, 518)), "html", null, true);
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 521
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            yield "</label>
                                        <ul class=\"priority\" data-action=\"priority\">
                                            ";
            // line 523
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketPriorityCollection"]) || array_key_exists("ticketPriorityCollection", $context) ? $context["ticketPriorityCollection"] : (function () { throw new RuntimeError('Variable "ticketPriorityCollection" does not exist.', 523, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 524
                yield "                                                <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 524), "html", null, true);
                yield "\" data-color=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 524), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 524)), "html", null, true);
                yield "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['priority'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 526
            yield "                                        </ul>
                                    </div>
                                </div>
                            ";
        } else {
            // line 530
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 531, $this->source); })()), "priority", [], "any", false, false, false, 531), "description", [], "any", false, false, false, 531)), "html", null, true);
            yield "
                                </span>
                            ";
        }
        // line 534
        yield "                        </div>
                    </div>

                    ";
        // line 538
        yield "                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">";
        // line 539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 541
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 541, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 541)) {
            // line 542
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 542, $this->source); })()), "status", [], "any", false, false, false, 542), "id", [], "any", false, false, false, 542), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 542, $this->source); })()), "status", [], "any", false, false, false, 542), "description", [], "any", false, false, false, 542)), "html", null, true);
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 545
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            yield "</label>
                                        <ul class=\"status\" data-action=\"status\">
                                            ";
            // line 547
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 547, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 548
                yield "                                                <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 548), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 548)), "html", null, true);
                yield "</a></li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 550
            yield "                                        </ul>
                                    </div>
                                </div>
                            ";
        } else {
            // line 554
            yield "                                <span class=\"uv-aside-select-value\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 554, $this->source); })()), "status", [], "any", false, false, false, 554), "description", [], "any", false, false, false, 554)), "html", null, true);
            yield "</span>
                            ";
        }
        // line 556
        yield "                        </div>
                    </div>

                    ";
        // line 560
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 561
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 563
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 563, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_TYPE"], "method", false, false, false, 563)) {
            // line 564
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 564, $this->source); })()), "type", [], "any", false, false, false, 564)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 564, $this->source); })()), "type", [], "any", false, false, false, 564), "id", [], "any", false, false, false, 564), "html", null, true)) : ("-- --"));
            yield "\">";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 564, $this->source); })()), "type", [], "any", false, false, false, 564)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 564, $this->source); })()), "type", [], "any", false, false, false, 564), "code", [], "any", false, false, false, 564), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 567
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 569
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list type\" data-action=\"type\">
                                        ";
            // line 574
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 574, $this->source); })()), "getTypes", [], "method", false, false, false, 574));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 575
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 575), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 575), "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 577
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 580
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 581
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 581, $this->source); })()), "type", [], "any", false, false, false, 581)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 581, $this->source); })()), "type", [], "any", false, false, false, 581), "code", [], "any", false, false, false, 581), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                            ";
        }
        // line 584
        yield "                        </div>
                    </div>

                    ";
        // line 588
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 589
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 591
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 591, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 591)) {
            // line 592
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 592, $this->source); })()), "supportGroup", [], "any", false, false, false, 592)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 592, $this->source); })()), "supportGroup", [], "any", false, false, false, 592), "id", [], "any", false, false, false, 592), "html", null, true)) : ("-- --"));
            yield "\">
                                    ";
            // line 593
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 593, $this->source); })()), "supportGroup", [], "any", false, false, false, 593)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 593, $this->source); })()), "supportGroup", [], "any", false, false, false, 593), "name", [], "any", false, false, false, 593), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list group\" data-action=\"group\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 603
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            yield "</a></li>

                                        ";
            // line 605
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["supportGroupCollection"]) || array_key_exists("supportGroupCollection", $context) ? $context["supportGroupCollection"] : (function () { throw new RuntimeError('Variable "supportGroupCollection" does not exist.', 605, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 606
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 606), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 606), "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 608
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 611
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 612
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 612, $this->source); })()), "supportGroup", [], "any", false, false, false, 612)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 612, $this->source); })()), "supportGroup", [], "any", false, false, false, 612), "name", [], "any", false, false, false, 612), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                            ";
        }
        // line 615
        yield "                        </div>
                    </div>

                    ";
        // line 619
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 620
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</label>
                        <div>
                            ";
        // line 622
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 622, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 622)) {
            // line 623
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 623, $this->source); })()), "supportTeam", [], "any", false, false, false, 623)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 623, $this->source); })()), "supportTeam", [], "any", false, false, false, 623), "id", [], "any", false, false, false, 623), "html", null, true)) : ("-- --"));
            yield "\">
                                    ";
            // line 624
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 624, $this->source); })()), "supportTeam", [], "any", false, false, false, 624)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 624, $this->source); })()), "supportTeam", [], "any", false, false, false, 624), "name", [], "any", false, false, false, 624), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 628
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"";
            // line 630
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list team\" data-action=\"team\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 634
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            yield "</a></li>
                                        ";
            // line 635
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["supportTeamCollection"]) || array_key_exists("supportTeamCollection", $context) ? $context["supportTeamCollection"] : (function () { throw new RuntimeError('Variable "supportTeamCollection" does not exist.', 635, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 636
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 636), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 636), "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 638
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 641
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 642
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 642, $this->source); })()), "supportTeam", [], "any", false, false, false, 642)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 642, $this->source); })()), "supportTeam", [], "any", false, false, false, 642), "name", [], "any", false, false, false, 642), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
            yield "
                                </span>
                            ";
        }
        // line 645
        yield "                        </div>
                    </div>

                    ";
        // line 649
        yield "                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">";
        // line 650
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
        yield "</label>

                        <div class=\"auto_focus\">
                            ";
        // line 653
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 653, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_COUNTRY"], "method", false, false, false, 653)) {
            // line 654
            yield "                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 654, $this->source); })()), "country", [], "any", false, false, false, 654)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 654, $this->source); })()), "country", [], "any", false, false, false, 654), "html", null, true)) : ("-- --"));
            yield "\">
                                    ";
            // line 655
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 655, $this->source); })()), "getCountries", [], "method", false, false, false, 655));
            foreach ($context['_seq'] as $context["key"] => $context["selectedCountry"]) {
                // line 656
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 656, $this->source); })()), "country", [], "any", false, false, false, 656) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 656, $this->source); })()), "country", [], "any", false, false, false, 656) == $context["key"]))) {
                    // line 657
                    yield "                                           ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selectedCountry"], "html", null, true);
                    yield "
                                        ";
                }
                // line 659
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['selectedCountry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 660
            yield "
                                    ";
            // line 661
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 661, $this->source); })()), "country", [], "any", false, false, false, 661) == "") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 661, $this->source); })()), "country", [], "any", false, false, false, 661) == null))) {
                // line 662
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
                yield "
                                    ";
            }
            // line 664
            yield "                                </span>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 668
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
            yield "</label>

                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list country\" data-action=\"country\">
                                        <li data-index=\"\"><a href=\"#\">";
            // line 676
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
            yield "</a></li>

                                        ";
            // line 678
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 678, $this->source); })()), "getCountries", [], "method", false, false, false, 678));
            foreach ($context['_seq'] as $context["key"] => $context["country"]) {
                // line 679
                yield "                                            <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["country"], "html", null, true);
                yield "</a></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['country'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 681
            yield "                                    </ul>
                                </div>
                            ";
        } else {
            // line 684
            yield "                                <span class=\"uv-aside-select-value\">
                                    ";
            // line 685
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 685, $this->source); })()), "getCountries", [], "method", false, false, false, 685));
            foreach ($context['_seq'] as $context["key"] => $context["selectedCountry"]) {
                // line 686
                yield "                                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 686, $this->source); })()), "country", [], "any", false, false, false, 686) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 686, $this->source); })()), "country", [], "any", false, false, false, 686) == $context["key"]))) {
                    // line 687
                    yield "                                           ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["selectedCountry"], "html", null, true);
                    yield "
                                        ";
                }
                // line 689
                yield "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['selectedCountry'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 690
            yield "
                                    ";
            // line 691
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 691, $this->source); })()), "country", [], "any", false, false, false, 691) == "") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 691, $this->source); })()), "country", [], "any", false, false, false, 691) == null))) {
                // line 692
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true);
                yield "
                                    ";
            }
            // line 694
            yield "                                </span>
                            ";
        }
        // line 696
        yield "                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 702
        yield "            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-labels label-list-block\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Labels"), "html", null, true);
        yield "</label>

                        <div class=\"uv-field-block\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-type=\"label\">
                            <div class=\"uv-dropdown-list uv-top-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        <span class=\"uv-filter-info\">";
        // line 713
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "</span>
                                        <span class=\"uv-no-results\" style=\"display: none;\">";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"label-list\"></div>
                </div>
            </div>

            ";
        // line 726
        yield "            <div class=\"uv-aside-brick collaborator-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        yield "</label>

                        ";
        // line 731
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 731, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 731)) {
            // line 732
            yield "                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"";
            // line 733
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type email to add"), "html", null, true);
            yield "\">
                            </div>
                        ";
        }
        // line 736
        yield "                    </div>
                    <div class=\"collaborator-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>

            ";
        // line 742
        yield "            <div class=\"uv-aside-brick tag-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 745
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
        yield "</label>

                        ";
        // line 747
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 747, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_TAG"], "method", false, false, false, 747)) {
            // line 748
            yield "                            <div class=\"uv-field-block\">
                                <input class=\"uv-field uv-dropdown-other\" name=\"tag-name\" type=\"text\" data-type=\"tag\" value=\"\">
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
            // line 752
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            yield "</label>
                                        <ul class=\"\">
                                            <span class=\"uv-filter-info\">";
            // line 754
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
            yield "</span>
                                            <span class=\"uv-no-results\" style=\"display: none;\">";
            // line 755
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            yield "</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        }
        // line 761
        yield "                    </div>

                    <div class=\"tag-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>
        </div>

        <div class=\"uv-view ";
        // line 768
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 768, $this->source); })()), "request", [], "any", false, false, false, 768), "cookies", [], "any", false, false, false, 768) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 768, $this->source); })()), "request", [], "any", false, false, false, 768), "cookies", [], "any", false, false, false, 768), "get", ["uv-asideView"], "method", false, false, false, 768))) {
            yield "uv-aside-view";
        }
        yield "\" >
            <div class=\"uv-ticket-scroll-region ";
        // line 769
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 769, $this->source); })()), "request", [], "any", false, false, false, 769), "cookies", [], "any", false, false, false, 769) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 769, $this->source); })()), "request", [], "any", false, false, false, 769), "cookies", [], "any", false, false, false, 769), "get", ["uv-asideView"], "method", false, false, false, 769))) {
            yield "uv-aside-view-tv";
        }
        yield "\" >
                ";
        // line 771
        yield "                <div class=\"uv-ticket-action-bar\">
                    <div class=\"uv-ticket-action-bar-lt\">
                        <div class=\"uv-header-fix\"><a href=\"#\" class=\"uv-icon-pin\"></a></div>

                        ";
        // line 776
        yield "                        <div class=\"uv-tabs\">
                            <ul>
                                ";
        // line 779
        yield "                                <li for=\"default\" data-type=\"all\" class=\"uv-tab-active\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All Threads"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"reply\">";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"forward\">";
        // line 781
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forwards"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"note\">";
        // line 782
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notes"), "html", null, true);
        yield "</li>
                                <li for=\"default\" data-type=\"pinned\">";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pinned"), "html", null, true);
        yield "</li>

                                ";
        // line 786
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 786, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 786) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 786, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 786))) {
            // line 787
            yield "                                    <li class=\"uv-tab-ellipsis uv-ticket-action\">
                                        <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>

                                        <div class=\"uv-dropdown-list uv-bottom-right\">
                                            <div class=\"uv-dropdown-container\">
                                                <ul class=\"priority\" data-action=\"priority\">
                                                    ";
            // line 793
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 793, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 793)) {
                // line 794
                yield "                                                        <li data-action=\"edit\" class=\"uv-open-popup\" data-target=\"edit-ticket-modal\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Ticket"), "html", null, true);
                yield "</li>
                                                    ";
            }
            // line 796
            yield "
                                                    <li data-action=\"print\">";
            // line 797
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Print Ticket"), "html", null, true);
            yield "</li>

                                                    ";
            // line 799
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 799, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 799)) {
                // line 800
                yield "                                                        <li data-action=\"spam\" data-index=\"6\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as Spam"), "html", null, true);
                yield "</li>
                                                        <li data-action=\"closed\" data-index=\"5\">";
                // line 801
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark as Closed"), "html", null, true);
                yield "</li>
                                                    ";
            }
            // line 803
            yield "
                                                    ";
            // line 804
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 804, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 804)) {
                // line 805
                yield "                                                        <li data-action=\"delete\" class=\"uv-text-danger\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Ticket"), "html", null, true);
                yield "</li>
                                                    ";
            }
            // line 807
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                ";
        }
        // line 812
        yield "                            </ul>
                        </div>
                    </div>

                    <div class=\"uv-ticket-action-bar-rt\">
                        ";
        // line 817
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 817, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\WidgetCollection"], "method", false, false, false, 817), "embedSideFilterIcons", [], "method", false, false, false, 817);
        yield "
                    </div>
                </div>

                ";
        // line 822
        yield "                <div class=\"uv-ticket-viewer-bar\">
                    <div class=\"uv-ticket-viewer-list\">
                        <div class=\"uv-ticket-viewer-single uv-first\" title=\"Currently active agents on ticket...\">
                            <span class=\"uv-icon-eye-light\"></span>
                        </div>
                    </div>
                </div>

                ";
        // line 831
        yield "                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-head-lt\">
                        <span class=\"uv-star-large ";
        // line 833
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 833, $this->source); })()), "isStarred", [], "any", false, false, false, 833)) ? ("uv-star-active") : (""));
        yield " uv-star uv-margin-right-5\"></span>
                    </div>

                    <div class=\"uv-ticket-head-rt\">
                        <h1>";
        // line 837
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 837, $this->source); })()), "subject", [], "any", false, false, false, 837), "html", null, true);
        yield "</h1>
                    </div>
                </div>

                <div class=\"uv-ticket-strip\">
                    <span>
                        <span class=\"uv-ticket-strip-label\">";
        // line 843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield " - </span>
                        <span class=\"timeago uv-margin-0\" data-timestamp=\"";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 844, $this->source); })()), "createdAt", [], "any", false, false, false, 844), "getTimestamp", [], "method", false, false, false, 844), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 844, $this->source); })()), "createdAt", [], "any", false, false, false, 844), "format", ["d-m-Y h:ia"], "method", false, false, false, 844), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 844, $this->source); })()), "timeZoneConverter", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 844, $this->source); })()), "createdAt", [], "any", false, false, false, 844)], "method", false, false, false, 844), "html", null, true);
        yield "</span>
                    </span>

                    <span>
                        <span class=\"uv-ticket-strip-label\">";
        // line 848
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        yield " - </span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 848, $this->source); })()), "user", [], "any", false, false, false, 848), "name", [], "any", false, false, false, 848), "html", null, true);
        yield "
                        ";
        // line 849
        if ((isset($context["totalCustomerTickets"]) || array_key_exists("totalCustomerTickets", $context) ? $context["totalCustomerTickets"] : (function () { throw new RuntimeError('Variable "totalCustomerTickets" does not exist.', 849, $this->source); })())) {
            // line 850
            yield "                            (<a id=\"more-tickets-btn\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
            yield "#customer/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 850, $this->source); })()), "id", [], "any", false, false, false, 850), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("count more tickets", ["count" => (isset($context["totalCustomerTickets"]) || array_key_exists("totalCustomerTickets", $context) ? $context["totalCustomerTickets"] : (function () { throw new RuntimeError('Variable "totalCustomerTickets" does not exist.', 850, $this->source); })())]), "html", null, true);
            yield "</a>)
                        ";
        }
        // line 852
        yield "                    </span>

                    <span class=\"agent-info\" style=\"";
        // line 854
        yield (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 854, $this->source); })())) ? ("") : ("display: none"));
        yield "\">
                        <span class=\"uv-ticket-strip-label\">";
        // line 855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield " - </span>
                        <span class=\"name\">";
        // line 856
        yield (((isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 856, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 856, $this->source); })()), "name", [], "any", false, false, false, 856), "html", null, true)) : (""));
        yield "</span>
                    </span>
                </div>

                ";
        // line 861
        yield "                <div class=\"uv-tab-view uv-tab-view-active\" id=\"default\">
                    <div class=\"uv-ticket-section\">
                        <div class=\"uv-ticket-main create\">
                            <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"timeago uv-margin-0\" data-timestamp=\"";
        // line 866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 866, $this->source); })()), "createdAt", [], "any", false, false, false, 866), "getTimestamp", [], "method", false, false, false, 866), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 866, $this->source); })()), "createdAt", [], "any", false, false, false, 866), "format", ["d-m-Y h:ia"], "method", false, false, false, 866), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 866, $this->source); })()), "timeZoneConverter", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 866, $this->source); })()), "createdAt", [], "any", false, false, false, 866)], "method", false, false, false, 866), "html", null, true);
        yield "</span>
                                    - ";
        // line 867
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 867, $this->source); })()), "user", [], "any", false, false, false, 867), "name", [], "any", false, false, false, 867), "html", null, true);
        yield " <span class=\"uv-ticket-strip-label\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        yield "</span>
                                </span>
                                ";
        // line 869
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 869, $this->source); })()), "cc", [], "any", false, false, false, 869) != "")) {
            // line 870
            yield "\t\t\t\t\t\t\t\t\t<div class=\"uv-ticket-strip\">
\t\t\t\t\t\t\t\t\t\t<span><span class=\"uv-ticket-strip-label\">";
            // line 871
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
            yield " -</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 871, $this->source); })()), "cc", [], "any", false, false, false, 871), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 873
        yield "      
                            </div>

                            <div class=\"uv-ticket-main-lt\">
                               <img src=\"";
        // line 877
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 877, $this->source); })()), "user", [], "any", false, false, false, 877), "thumbnail", [], "any", false, false, false, 877)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 877, $this->source); })()), "request", [], "any", false, false, false, 877), "scheme", [], "any", false, false, false, 877) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 877, $this->source); })()), "request", [], "any", false, false, false, 877), "httpHost", [], "any", false, false, false, 877)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 877, $this->source); })()), "user", [], "any", false, false, false, 877), "thumbnail", [], "any", false, false, false, 877)), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 877, $this->source); })()), "createdBy", [], "any", false, false, false, 877) == "customer")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 877, $this->source); })())), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 877, $this->source); })())), "html", null, true)))));
        yield "\">
                            </div>

                            <div class=\"uv-ticket-main-rt\">
                                ";
        // line 881
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 881, $this->source); })()), "createdBy", [], "any", false, false, false, 881) == "customer")) {
            // line 882
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 882, $this->source); })()), "user", [], "any", false, false, false, 882), "id", [], "any", false, false, false, 882), "html", null, true);
            yield "\" class=\"uv-ticket-member-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 882, $this->source); })()), "user", [], "any", false, false, false, 882), "name", [], "any", false, false, false, 882), "html", null, true);
            yield "</a>
                                ";
        } else {
            // line 884
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 884, $this->source); })()), "user", [], "any", false, false, false, 884)) {
                // line 885
                yield "                                        <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 885, $this->source); })()), "user", [], "any", false, false, false, 885), "id", [], "any", false, false, false, 885), "html", null, true);
                yield "\" class=\"uv-ticket-member-name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 885, $this->source); })()), "user", [], "any", false, false, false, 885), "name", [], "any", false, false, false, 885), "html", null, true);
                yield "</a>
                                    ";
            } else {
                // line 887
                yield "                                        <a class=\"uv-ticket-member-name\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 887, $this->source); })()), "user", [], "any", false, false, false, 887), "name", [], "any", false, false, false, 887), "html", null, true);
                yield "</a>
                                    ";
            }
            // line 889
            yield "                                ";
        }
        // line 890
        yield "
                                ";
        // line 892
        yield "                                <div class=\"message\">
                                    <p>
                                        ";
        // line 894
        if ((Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 894, $this->source); })()), "message", [], "any", false, false, false, 894)) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 894, $this->source); })()), "message", [], "any", false, false, false, 894))) {
            // line 895
            yield "                                            ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 895, $this->source); })()), "message", [], "any", false, false, false, 895), "html", null, true));
            yield "
                                        ";
        } else {
            // line 897
            yield "                                            ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 897, $this->source); })()), "message", [], "any", false, false, false, 897);
            yield "
                                        ";
        }
        // line 899
        yield "                                    </p>
                                </div>

                                ";
        // line 903
        yield "                                ";
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 903, $this->source); })()), "attachments", [], "any", false, false, false, 903))) {
            // line 904
            yield "                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
            // line 905
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
            yield "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            ";
            // line 907
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 907, $this->source); })()), "attachments", [], "any", false, false, false, 907));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 908
                yield "                                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "downloadURL", [], "any", false, false, false, 908), "html", null, true);
                yield "\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "name", [], "any", false, false, false, 908), "html", null, true);
                yield "\">
                                                    <img src=\"";
                // line 909
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "iconURL", [], "any", false, false, false, 909), "html", null, true);
                yield "\"  class=\"uv-auto-pointer-events\"/>
                                                </a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 912
            yield "                                        </div>

                                        ";
            // line 914
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 914, $this->source); })()), "attachments", [], "any", false, false, false, 914)) > 1)) {
                // line 915
                yield "                                            <div class=\"uv-upload-actions\">
                                                <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"";
                // line 916
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 916, $this->source); })()), "id", [], "any", false, false, false, 916), "html", null, true);
                yield "\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open in Files"), "html", null, true);
                yield "</a>
                                                ";
                // line 917
                if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 917, $this->source); })()), "attachments", [], "any", false, false, false, 917))) {
                    // line 918
                    yield "                                                    <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 918, $this->source); })()), "id", [], "any", false, false, false, 918), "html", null, true);
                    yield "\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> Download (as .zip)</a>
                                                ";
                }
                // line 920
                yield "                                            </div>
                                        ";
            }
            // line 922
            yield "                                    </div>
                                ";
        }
        // line 924
        yield "                            </div>
                        </div>

                        <div class=\"uv-ticket-accordion\">
                            <div class=\"uv-ticket-count-wrapper\">
                                <span class=\"uv-ticket-count-stat\">";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReplies"]) || array_key_exists("totalReplies", $context) ? $context["totalReplies"] : (function () { throw new RuntimeError('Variable "totalReplies" does not exist.', 929, $this->source); })()), "html", null, true);
        yield "</span>
                            </div>

                            <div class=\"uv-ticket-wrapper thread-list\"></div>
                        </div>
                    </div>
                </div>

                ";
        // line 938
        yield "                <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                    <div class=\"uv-ticket-main-lt\">
                        <span class=\"uv-icon-ellipsis\"></span>
                        <img src=\"";
        // line 941
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 941, $this->source); })()), "thumbnail", [], "any", false, false, false, 941)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 941, $this->source); })()), "request", [], "any", false, false, false, 941), "scheme", [], "any", false, false, false, 941) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 941, $this->source); })()), "request", [], "any", false, false, false, 941), "httpHost", [], "any", false, false, false, 941)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 941, $this->source); })()), "thumbnail", [], "any", false, false, false, 941)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 941, $this->source); })())), "html", null, true)));
        yield "\" />
                    </div>

                    <div class=\"uv-ticket-main-rt\">
                        <span class=\"uv-ticket-member-name\">";
        // line 945
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUserDetails"]) || array_key_exists("currentUserDetails", $context) ? $context["currentUserDetails"] : (function () { throw new RuntimeError('Variable "currentUserDetails" does not exist.', 945, $this->source); })()), "name", [], "any", false, false, false, 945), "html", null, true);
        yield "</span>
                        <div class=\"uv-tabs\">
                            <ul>
                                <li for=\"reply\" class=\"uv-tab-active\">";
        // line 948
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield "</li>
                                <li for=\"forward\">";
        // line 949
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        yield "</li>
                                ";
        // line 950
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 950, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_NOTE"], "method", false, false, false, 950)) {
            // line 951
            yield "                                    <li for='note'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note"), "html", null, true);
            yield "</li>
                                ";
        }
        // line 953
        yield "                            </ul>
                        </div>

                        ";
        // line 957
        yield "                        <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 958
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 958, $this->source); })()), "id", [], "any", false, false, false, 958)]), "html", null, true);
        yield "\">
                                <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" ";
        // line 960
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 960, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 960)) {
            yield "class=\"reply-status\"";
        }
        yield ">
                                <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                    <label class=\"uv-field-label\">";
        // line 962
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collaborators"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\"></div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>

                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
        // line 980
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                                                </div>

                                                <ul class=\"uv-agents-list\">
                                                    ";
        // line 984
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 984, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 984));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 985
            yield "                                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 985), "html", null, true);
            yield "\">
                                                            <img src=\"";
            // line 986
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 986)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 986, $this->source); })()), "request", [], "any", false, false, false, 986), "scheme", [], "any", false, false, false, 986) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 986, $this->source); })()), "request", [], "any", false, false, false, 986), "httpHost", [], "any", false, false, false, 986)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 986)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 986, $this->source); })())), "html", null, true)));
            yield "\"/> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 986), "html", null, true);
            yield "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 989
        yield "
                                                    <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 990
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">";
        // line 994
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield "</option>
                                                <option value=\"cc\">";
        // line 995
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield "</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">";
        // line 1004
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"reply-area\">";
        // line 1006
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1006, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1006), "html", null, true);
        yield "</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label>
                                        <span class=\"uv-file-label\">";
        // line 1012
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span>
                                    </label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
        // line 1019
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1022
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
        yield "</label>
                                                <ul>
                                                    <li data-value=\"stay\">";
        // line 1024
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</li>
                                                    <li data-value=\"redirect\">";
        // line 1025
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-dropdown reply\">
                                        <div class=\"uv-btn uv-dropdown-other\">";
        // line 1032
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield " <span class=\"uv-icon-down-light\"></span></div>
                                        <div class=\"uv-dropdown-list uv-top-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1035
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
        yield "</label>
                                                <ul>
                                                    <li data-id=\"\">";
        // line 1037
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
        yield "</li>
                                                    ";
        // line 1038
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1038, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1038)) {
            // line 1039
            yield "                                                        <li data-id=\"open\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Open"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"pending\">";
            // line 1040
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Pending"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"answered\">";
            // line 1041
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Answered"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"resolved\">";
            // line 1042
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Resolved"), "html", null, true);
            yield "</li>
                                                        <li data-id=\"closed\">";
            // line 1043
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
            yield "</li>
                                                    ";
        }
        // line 1045
        yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        ";
        // line 1054
        yield "                        <div class=\"uv-tab-view\" id=\"forward\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
        // line 1055
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1055, $this->source); })()), "id", [], "any", false, false, false, 1055)]), "html", null, true);
        yield "\">
                                <input name=\"threadType\" value=\"forward\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" ";
        // line 1057
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1057, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1057)) {
            yield "class=\"reply-status\"";
        }
        yield ">

                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">";
        // line 1060
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field\" type=\"text\" name=\"subject\">
                                    </div>
                                </div>

                                <div class=\"uv-element-block to\">
                                    <label class=\"uv-field-label\">";
        // line 1067
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field uv-dropdown-other preloaded uv-to-message uv-manual-enter\" type=\"text\">

                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1073
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                                            </div>

                                            <ul class=\"uv-agents-list\">
                                                ";
        // line 1077
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1077, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1077));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1078
            yield "                                                    <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1078), "html", null, true);
            yield "\">
                                                        <img src=\"";
            // line 1079
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1079)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1079, $this->source); })()), "request", [], "any", false, false, false, 1079), "scheme", [], "any", false, false, false, 1079) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1079, $this->source); })()), "request", [], "any", false, false, false, 1079), "httpHost", [], "any", false, false, false, 1079)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1079)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1079, $this->source); })())), "html", null, true)));
            yield "\"/> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1079), "html", null, true);
            yield "
                                                    </li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1082
        yield "
                                                <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1083
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</li>
                                            </ul>
                                        </div>

                                        <div class=\"to-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>
                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\"><label>";
        // line 1103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label></div>

                                                <ul class=\"uv-agents-list\">
                                                    ";
        // line 1106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1106, $this->source); })()), "getAgentPartialDataCollection", [], "any", false, false, false, 1106));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 1107
            yield "                                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "email", [], "any", false, false, false, 1107), "html", null, true);
            yield "\">
                                                            <img src=\"";
            // line 1108
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1108, $this->source); })()), "request", [], "any", false, false, false, 1108), "scheme", [], "any", false, false, false, 1108) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1108, $this->source); })()), "request", [], "any", false, false, false, 1108), "httpHost", [], "any", false, false, false, 1108)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 1108)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1108, $this->source); })())), "html", null, true)));
            yield "\"/> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 1108), "html", null, true);
            yield "
                                                        </li>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1111
        yield "
                                                    <li class=\"uv-no-results\" style=\"display: none;\">";
        // line 1112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">";
        // line 1116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield "</option>
                                                <option value=\"cc\">";
        // line 1117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield "</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">";
        // line 1126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
        yield "</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"forward-area\">";
        // line 1128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1128, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1128), "html", null, true);
        yield "</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label><span class=\"uv-file-label\">";
        // line 1133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span></label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
        // line 1139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
        // line 1142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
        yield "</label>
                                                <ul>
                                                    <li data-value=\"stay\">";
        // line 1144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
        yield "</li>
                                                    <li data-value=\"redirect\">";
        // line 1145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
        yield "</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-btn forward\">";
        // line 1151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        yield "</div>
                                </div>
                            </form>
                        </div>

                        ";
        // line 1157
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1157, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_NOTE"], "method", false, false, false, 1157)) {
            // line 1158
            yield "                            <div class=\"uv-tab-view\" id=\"note\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"";
            // line 1159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_add_ticket_thread", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1159, $this->source); })()), "id", [], "any", false, false, false, 1159)]), "html", null, true);
            yield "\">
                                    <input name=\"threadType\" value=\"note\" type=\"hidden\">
                                    <input name=\"status\" value=\"\" type=\"hidden\" ";
            // line 1161
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1161, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1161)) {
                yield "class=\"reply-status\"";
            }
            yield ">

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">";
            // line 1164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write a reply"), "html", null, true);
            yield "</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"reply\" id=\"note-area\">";
            // line 1166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 1166, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 1166), "html", null, true);
            yield "</textarea>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block attachment-block\">
                                        <label><span class=\"uv-file-label\">";
            // line 1171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
            yield "</span></label>
                                    </div>

                                    <div class=\"uv-action-buttons\">
                                        <div class=\"uv-dropdown next-view\">
                                            <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                            <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">";
            // line 1177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
            yield "</div>
                                            <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
            // line 1180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After Reply"), "html", null, true);
            yield "</label>
                                                    <ul>
                                                        <li data-value=\"stay\">";
            // line 1182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stay on ticket"), "html", null, true);
            yield "</li>
                                                        <li data-value=\"redirect\">";
            // line 1183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirect to list"), "html", null, true);
            yield "</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"uv-dropdown reply\">
                                            <div class=\"uv-btn uv-dropdown-other\">";
            // line 1190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
            yield "<span class=\"uv-icon-down-light\"></span></div>

                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>";
            // line 1194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Note"), "html", null, true);
            yield "</label>
                                                    <ul>
                                                        <li data-id=\"\">";
            // line 1196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit"), "html", null, true);
            yield "</li>
                                                        ";
            // line 1197
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1197, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 1197)) {
                // line 1198
                yield "                                                            <li data-id=\"open\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Open"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"pending\">";
                // line 1199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Pending"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"answered\">";
                // line 1200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Answered"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"resolved\">";
                // line 1201
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Resolved"), "html", null, true);
                yield "</li>
                                                            <li data-id=\"closed\">";
                // line 1202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Submit And Closed"), "html", null, true);
                yield "</li>
                                                        ";
            }
            // line 1204
            yield "                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        ";
        }
        // line 1212
        yield "                    </div>
                </div>
            </div>

            <!-- Bottom Action Block -->
            <div class=\"uv-ticket-fixed-region\">
                <div class=\"uv-ticket-fixed-region-lt\">
                    ";
        // line 1219
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1219, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\QuickActionButtonCollection"], "method", false, false, false, 1219), "injectTemplates", [], "method", false, false, false, 1219);
        yield "

                    ";
        // line 1241
        yield "
                    ";
        // line 1265
        yield "                </div>

                <div class=\"uv-ticket-fixed-region-rt\"></div>
            </div>
            <!-- //Bottom Action Block -->
        </div>
    </div>

    ";
        // line 1274
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1274, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_TICKET"], "method", false, false, false, 1274)) {
            // line 1275
            yield "        <div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"edit-ticket-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-wide\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>";
            // line 1278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Ticket"), "html", null, true);
            yield "</h2>

                ";
            // line 1281
            yield "                <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_details_xhr", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1281, $this->source); })()), "id", [], "any", false, false, false, 1281)]), "html", null, true);
            yield "\" id=\"edit-ticket-form\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 1283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"subject\" class=\"uv-field\" value=\"";
            // line 1285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1285, $this->source); })()), "subject", [], "any", false, false, false, 1285), "html", null, true);
            yield "\" />
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 1290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reply"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\">
                            ";
            // line 1292
            if ((Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1292, $this->source); })()), "message", [], "any", false, false, false, 1292)) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1292, $this->source); })()), "message", [], "any", false, false, false, 1292))) {
                // line 1293
                yield "                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">";
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1293, $this->source); })()), "message", [], "any", false, false, false, 1293), "html", null, true));
                yield "</textarea>
                            %} ";
            } else {
                // line 1295
                yield "                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["initialThread"]) || array_key_exists("initialThread", $context) ? $context["initialThread"] : (function () { throw new RuntimeError('Variable "initialThread" does not exist.', 1295, $this->source); })()), "message", [], "any", false, false, false, 1295);
                yield "</textarea>
                            ";
            }
            // line 1297
            yield "                        </div>
                    </div>

                    <div class=\"uv-pop-up-actions\">
                        <input class=\"uv-btn update\" href=\"#\" value=\"Update\" type=\"submit\">
                        <input class=\"uv-btn cancel\" href=\"#\" value=\"Discard\" type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    ";
        }
        // line 1308
        yield "
    ";
        // line 1309
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 1309, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Tickets\\WidgetCollection"], "method", false, false, false, 1309), "embedSideFilterContent", [], "method", false, false, false, 1309);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1312
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

        // line 1313
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        // line 1315
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
        yield "
    ";
        // line 1316
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        yield "

    <script id=\"thread_list_empty_tmp\" type=\"text/template\">
        <div class=\"uv-no-threads\">";
        // line 1319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nothing interesting here..."), "html", null, true);
        yield "</div>
    </script>

    <script> 
        \$(document).ready(function() {
            \$(\"#filterSavedreplies\").on(\"keyup\", function() {
                if (this.value.length && this.value.length != '') {
                    var that = this;
                    \$(\"#listSavedReplies li\").hide().filter(function() {
                        return \$(this).html().toLowerCase().indexOf(that.value.toLowerCase()) !== -1;
                    }).show();
                } else {
                    \$(\"#listSavedReplies li\").show()
                }
            });

            \$(\".uv-dropdown-btn\").click(function(event) {
                setTimeout(function() {
                    \$(\".uv-search-inline\").focus();
                }, 100);
            });
        });
    </script>

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <% if(typeof(mailStatus) != 'undefined' && mailStatus) { %>
                    <a href=\"https://support.uvdesk.com/en/blog/uvdesk-ticket-delivery-status\" target=\"_blank\">
                        <span class=\"uv-mail-status uv-mail-<%- mailStatus.split(',')[0] %>\" <% if(mailStatus !== 'pending') { %>data-toggle=\"tooltip\" data-placement=\"right\" title=\"";
        // line 1348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail status:"), "html", null, true);
        yield " <%- mailStatus.split(',')[0] %> <% if(mailStatus.split(',').length > 1) { print('Reason:' + mailStatus.split(',')[1] ); } %> \"<% } %> ></span>
            </a>
            <% } %>
            <span class=\"timeago uv-margin-0\" data-timestamp=\"<%- timestamp %>\" title=\"<%- formatedCreatedAt %>\">
                    <%- formatedCreatedAt %>
                </span>
            - <%- fullname %>
            <span class=\"uv-ticket-strip-label\">
                <% if(threadType == 'reply') { %>
                    ";
        // line 1357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("replied"), "html", null, true);
        yield "
                <% } else if(threadType == 'note') { %>
                    ";
        // line 1359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("added note"), "html", null, true);
        yield "
                <% } else if(threadType == 'forward') { %>
                    ";
        // line 1361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("forwarded"), "html", null, true);
        yield "
                <% } %>
                - <a href=\"#thread/<%- id %>\" id=\"thread<%- id %>\" class=\"copy-thread-link\">#<%- id %></a>
                </span>
            </span>

            <% if((replyTo && threadType ==  'forward') || cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if(replyTo && threadType ==  'forward') { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("TO"), "html", null, true);
        yield " -</span> <%- replyTo %></span>
                    <% } if(cc) { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1372
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("CC"), "html", null, true);
        yield " -</span> <%- cc %></span>
                    <% } if(bcc) { %>
                    <span><span class=\"uv-ticket-strip-label\">";
        // line 1374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("BCC"), "html", null, true);
        yield " -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>

        <div class=\"uv-ticket-strip uv-margin-top-5\" <% if(!bookmark && !isLocked) { %>style=\"display: none\"<% } %> >
            <span <% if(!bookmark) { %>style=\"display: none\"<% } %> >
                    <span class=\"uv-icon-pinned\"></span>
                    ";
        // line 1383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pinned"), "html", null, true);
        yield "
                    </span>
            <span <% if(!isLocked) { %>style=\"display: none\"<% } %> >
                <span class=\"uv-icon-locked\"></span>
                ";
        // line 1387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Locked"), "html", null, true);
        yield "
            </span>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <span class=\"uv-thread-action\">
                <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>
                <div class=\"uv-dropdown-list uv-bottom-left\">
                    <div class=\"uv-dropdown-container\">
                        <ul>
                            ";
        // line 1396
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1396, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_EDIT_THREAD_NOTE"], "method", false, false, false, 1396)) {
            // line 1397
            yield "                                <% if (userType != 'system' && userType != 'System') { %>
                                    <li data-action=\"edit\">";
            // line 1398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Thread"), "html", null, true);
            yield "</li>
                                <% } %>
                            ";
        }
        // line 1401
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1401, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_THREAD_NOTE"], "method", false, false, false, 1401)) {
            // line 1402
            yield "                                <li data-action=\"delete\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Thread"), "html", null, true);
            yield "</li>
                            ";
        }
        // line 1404
        yield "                            <li data-action=\"forward\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward"), "html", null, true);
        yield "</li>
                            <% if(bookmark) { %>
                                <li data-action=\"pin\" data-id=\"1\">";
        // line 1406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpin Thread"), "html", null, true);
        yield "</li>
                            <% } else { %>
                                <li data-action=\"pin\" data-id=\"0\">";
        // line 1408
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pin Thread"), "html", null, true);
        yield "</li>
                            <% } %>
                            <% if(threadType != 'note') { %>
                                ";
        // line 1411
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1411, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_MANAGE_LOCK_AND_UNLOCK_THREAD"], "method", false, false, false, 1411)) {
            // line 1412
            yield "                                    <% if(isLocked) { %>
                                        <li data-action=\"lock\" data-id=\"1\">";
            // line 1413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlock Thread"), "html", null, true);
            yield "</li>
                                    <% } else { %>
                                        <li data-action=\"lock\" data-id=\"0\">";
            // line 1415
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lock Thread"), "html", null, true);
            yield "</li>
                                    <% } %>
                                ";
        }
        // line 1418
        yield "                            <% } %>
                            <li style=\"display: none;\" data-action=\"translate\">";
        // line 1419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Translate Thread"), "html", null, true);
        yield "</li>
                        </ul>
                    </div>
                </div>
            </span>
            <span class=\"p-relative\">
                
            </span>
            <% if (userType != 'system' && userType != 'System') { %>
                <% if(user && user.smallThumbnail != null) { %>
                    <img src=\"";
        // line 1429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1429, $this->source); })()), "request", [], "any", false, false, false, 1429), "scheme", [], "any", false, false, false, 1429) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1429, $this->source); })()), "request", [], "any", false, false, false, 1429), "httpHost", [], "any", false, false, false, 1429)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%- user.smallThumbnail %>\" />
                <% } else { %>
                    <img src=\"<% if(userType == 'agent') { %> ";
        // line 1431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1431, $this->source); })())), "html", null, true);
        yield " <% } else { %> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1431, $this->source); })())), "html", null, true);
        yield " <% } %>\" />
                <% } %>
            <% } else { %>
                <img src=\"";
        // line 1434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_helpdesk_image_path"]) || array_key_exists("default_helpdesk_image_path", $context) ? $context["default_helpdesk_image_path"] : (function () { throw new RuntimeError('Variable "default_helpdesk_image_path" does not exist.', 1434, $this->source); })())), "html", null, true);
        yield "\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <% if(userType == 'customer') { %>
                <a <% if(user) { %>href=\"";
        // line 1439
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else if(userType == 'agent') { %>
                <a <% if(user) { %>href=\"";
        // line 1443
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        yield "/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else { %>
                <span class=\"uv-ticket-member-name\">
                    <%- fullname %>
                </span>
            <% } %>

            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
            <div class=\"uv-ticket-uploads\">
                <h4>";
        // line 1460
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                <div class=\"uv-ticket-uploads-strip\">
                    <% _.each(attachments, function(file) { %>
                    <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                        <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                    </a>
                    <% }) %>
                </div>

                <% if (attachments.length > 1) { %>
                <div class=\"thread-attachments-zip pull-left\">
                    <div class=\"uv-upload-actions\">
                        <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"<%- id %>\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>";
        // line 1472
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open in Files"), "html", null, true);
        yield "</a>
                        <% if(attachments.length > 0) { %>
                        <a href=\"";
        // line 1474
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        yield "/<%- id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                        <% } %>
                    </div>
                </div>
                <% } %>

            </div>
            <% } %>
        </div>
    </script>

    <script id=\"edit_thread_tmp\" type=\"text/template\">
        <div class=\"thread-edit-container\">
            <div class=\"uv-element-block uv-element-block-textarea\">
                <div class=\"uv-field-block\">
                    <textarea id=\"uv-edit-thread\">
                    </textarea>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn cancel-edit\" type=\"button\">";
        // line 1494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
                <a class=\"uv-btn saveThread\" type=\"button\" style=\"margin-right: 10px;\">";
        // line 1495
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "</a>
            </div>
        </div>
    </script>

    <script id=\"ticket_quick_navigation_tmp\" type=\"text/template\">
        <% if(prev) { %>
            <a class=\"uv-btn-stroke\" href=\"";
        // line 1502
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        yield "/<%- prev %>\">
                <span class=\"uv-icon-previous\"></span>
                ";
        // line 1504
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous Ticket"), "html", null, true);
        yield "
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                <span class=\"uv-icon-previous\"></span>
                ";
        // line 1509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous Ticket"), "html", null, true);
        yield "
            </a>
        <% } %>

        <% if(next) { %>
            <a class=\"uv-btn-stroke\" href=\"";
        // line 1514
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket");
        yield "/<%- next %>\">
                ";
        // line 1515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next Ticket"), "html", null, true);
        yield "
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                ";
        // line 1520
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next Ticket"), "html", null, true);
        yield "
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        uvdesk = {
            ticket: {}
        };

        var ticketApp = {};

        viewerImages = function() {
            if (typeof(\$().viewer == 'function')) {
                \$('.uv-ticket-uploads .uv-ticket-uploads-strip').viewer({
                    'url': 'data-url',
                    'downloadBase': \"";
        // line 1537
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment");
        yield "\",
                    'download': 'data-download',
                });
            }
        };

        \$(function () {
            var threadIds = [];
            viewerImages();

            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                urlRoot : \"";
        // line 1552
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_attributes_xhr");
        yield "\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 1556
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: 'Please enter a valid email'
                    }],
                    'subject' : {
                        required : true,
                        msg : '";
        // line 1563
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
                    'reply' : {
                        fn: function(value) {
                            var content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            
                            return true;
                        },
                        msg : '";
        // line 1585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }
                },
            });

            // Thread Model
            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            // Customer Model
            var CustomerModel = Backbone.Model.extend({
                validation: {
                    'name': [{
                        required: true,
                        msg: '";
        // line 1604
        yield "This field is mandatory";
        yield "'
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: '";
        // line 1607
        yield "This field must have characters only";
        yield "'
                    }],
                    'email': [{
                        required: true,
                        msg: '";
        // line 1611
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 1614
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        yield "'
                    }],
                    'contactNumber': function(value) {
                        if(value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return 'Contact number is invalid';
                        }
                    }
                },
                urlRoot : \"";
        // line 1623
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "\"
            });

            // Ticket Collaborator Model
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '";
        // line 1632
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 1635
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid email"), "html", null, true);
        yield "'
                    }]
                },
                defaults : {
                    ticketId : ";
        // line 1639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1639, $this->source); })()), "id", [], "any", false, false, false, 1639), "html", null, true);
        yield ",
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"";
        // line 1645
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_manage_collaborators_xhr");
        yield "\"
            });

            // Ticket Tag Model
            var TagModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : ";
        // line 1652
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1652, $this->source); })()), "id", [], "any", false, false, false, 1652), "html", null, true);
        yield "
                },
                parse: function (resp, options) {
                    return resp.tag;
                },
                urlRoot : \"";
        // line 1657
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_create_tag_xhr");
        yield "\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : ";
        // line 1664
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1664, $this->source); })()), "id", [], "any", false, false, false, 1664), "html", null, true);
        yield "
                },
                parse: function (resp, options) {
                    return resp.label;
                },
                urlRoot : \"";
        // line 1669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_add_label_xhr");
        yield "\"
            });

            // Ticket Thread Collection
            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"";
        // line 1676
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_collection_xhr", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1676, $this->source); })()), "id", [], "any", false, false, false, 1676)]), "html", null, true);
        yield "\",
                firstScrollCheck: false,
                threadRequestedId: false,
                template : \$(\"#thread_list_empty_tmp\").html(),
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    type = \$(\".uv-ticket-action-bar-lt .uv-tabs .uv-tab-active\").attr('data-type')
                    var self = this;
                    var data = {
                        threadType: type
                    };

                    if(this.threadRequestedId)
                        data.threadRequestedId = this.threadRequestedId;

                    app.appView.showLoader()
                    this.fetch({
                        data : data,
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader();
                            self.threadRequestedId = false;
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                            if(response.pagination.totalCount <= 0){
                                this.\$('.uv-ticket-wrapper.thread-list').html(self.template);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    }).done(function(){
                        viewerImages();
                        if(!self.firstScrollCheck){
                            self.firstScrollCheck = true;
                            var fragment = Backbone.history.fragment.trim();
                            if(fragment == '') {
                                router.scrollPage('#reply');
                            } else
                                router.scrollPage('#' + fragment.replace('thread/', 'thread'));
                        }
                    });
                }
            });

            // Ticket Collaborator Collection
            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            // Ticket Tag Collection
            var TagCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isTagExist : function(name) {
                    var flag = 1;
                    _.each(tagCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);

                    return flag;
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isLabelExist : function(name) {
                    var flag = 1;
                    _.each(labelCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Customer Form View
            var CustomerForm = Backbone.View.extend({
                events : {
                    'click .uv-btn.update-btn' : \"saveCustomer\",
                    'blur input': 'formChanged',
                    'click .cancel-btn': 'backToInfo',
                    'click .uv-aside-back': 'backToInfo'
                },
                initialize : function() {
                    Backbone.Validation.bind(this);
                },
                formChanged: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                saveCustomer: function (e) {
                    e.preventDefault();
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
                    this.model.set(this.\$el.find('form').serializeObject());
                    self = this;
                    if (this.model.isValid(true)) {
                        app.appView.showLoader();
                        currentElement.attr('disabled', 'disabled');
                        this.model.save({}, {
                            success: function (model, response, options) {
                                app.appView.hideLoader();
                                currentElement.removeAttr(\"disabled\");
                                if (response.alertClass == \"success\") {
                                    app.appView.renderResponseAlert(response);
                                    \$('.uv-aside-customer-info').html(\"<span>\" + self.model.attributes.name + \"</span><span>\" + self.model.attributes.email + \"</span><span>\" + self.model.attributes.contactNumber + \"</span><span class='uv-customize'></span>\")
                                    self.backToInfo();
                                } else if (response.errors) {
                                    self.addErrors(JSON.parse(response.errors));
                                } else if (response.alertMessage) {
                                    app.appView.renderResponseAlert(response);
                                }
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(warningResponse);
                            }
                        });
                    }
                },
                addErrors: function(jsonContext) {
                    for (var field in jsonContext) {
                        Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                    }
                },
                backToInfo: function(e) {
                    if (e)
                        e.preventDefault()

                    \$('.uv-main-info-update-block').hide()
                    \$('.uv-main-info-block').show()
                },
            });

            // Ticket View
            var TicketView = Backbone.View.extend({
                el: \$('.uv-wrapper'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"spam\"], .uv-ticket-action .uv-dropdown-list li[data-action=\"closed\"]': 'markSpamAndClosed',
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list li': 'editTicketProperty',
                    'click .uv-aside-customer-info .uv-customize': 'showCustomerUpdateBlock',
                    'click .uv-ticket-head .uv-star-large': 'updateStar',
                    'click .uv-ticket-action-bar .uv-tabs li': 'filterThread',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-element-block.collaborators .uv-btn-tag': 'removeCcCollaborator',
                    'keypress .uv-element-block.to .uv-dropdown-other': 'addToInput',
                    'click .uv-element-block.to .uv-dropdown-list li': 'addTo',
                    'click .to-list .uv-btn-tag': 'removeTo',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other': 'addCcBccInput',
                    'click .uv-element-block.cc-bcc .uv-dropdown-list li': 'addCcBcc',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .next-view .uv-dropdown-list li': 'setNextView',
                    'click .uv-dropdown.reply .uv-dropdown-list li, .uv-btn.forward': 'validateForm',
                    'click #edit-ticket-modal .uv-btn.update': 'updateTicket',
                    'click .message .uv-icon-ellipsis': 'showReplyQuote',
                    'input .uv-aside-brick .uv-field.uv-dropdown-other': 'searchFilterXhr',
                    'click .uv-dropdown-container.prepared-responses a:not(.create-new)': 'confirmPreparedResponses',

                    'click .uv-header-fix': 'fixheader',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"print\"]': 'printTicket',
                    'blur .uv-manual-enter': 'enterManualAdd',
                },
                ticketNavigationTemplate : _.template(\$(\"#ticket_quick_navigation_tmp\").html()),
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                targetPreparedResponseUrl: '',
                initialize: function() {
                    Backbone.Validation.bind(this);
                    InitTinyMce('#uv-edit-create-thread');
                    \$('.uv-ticket-fixed-region .uv-ticket-fixed-region-rt').html(this.ticketNavigationTemplate(ticketNavigation))
                    var threadTab = localStorage.getItem(\"threadTab\");
                    if (threadTab){
                        \$('.uv-ticket-action-bar-lt .uv-tabs li').removeClass('uv-tab-active');
                        \$('.uv-ticket-action-bar-lt .uv-tabs [data-type=\"' + threadTab + '\"]').addClass('uv-tab-active');
                    }
                    nextView = localStorage.getItem(\"nextView\");
                    if (nextView) {
                        \$(\".next-view input\").val(nextView)
                        \$(\".next-view .uv-dropdown-btn\").text(\$(\"#reply .next-view .uv-dropdown-list li[data-value='\" + nextView + \"']\").text())
                    }
                    if (!localStorage.getItem('ticketTour')) {
                        \$('.uv-ticket-tour').show()
                    }
                    this.fixHeaderInit();
                },
                printTicket: function(e) {
                    window.print();
                },
                enterManualAdd: function(e) {
                    var target = \$(e.target);
                    if (target.val()) {
                        var e = \$.Event(\"keypress\");
                        e.which = 13; //choose the one you want
                        target.trigger(e);
                    }
                },
                fixheader: function(e){
                    e.preventDefault();
                    var header = localStorage.getItem(\"fixHeader\");
                    header = !(header == 'true');
                    localStorage.setItem(\"fixHeader\", header);
                    this.fixHeaderInit();
                },
                fixHeaderInit: function(){
                    var header = localStorage.getItem(\"fixHeader\");
                    if (header == 'true') {
                        \$('a.uv-icon-pin').addClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').addClass('uv-ticket-action-bar-fixed');
                    } else {
                        \$('a.uv-icon-pin').removeClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').removeClass('uv-ticket-action-bar-fixed');
                    }
                },
                markSpamAndClosed: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var value = currentElement.attr('data-index');
                    \$(\".uv-aside-select .uv-dropdown-list ul.status li[data-index='\" + value + \"']\").trigger('click')
                },
                editTicketProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
                    if(uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
                        this.model.save({attribute: field, value: value, id: this.model.id}, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                if (field == 'priority') {
                                    uvSelect.find('.uv-list-ticket-priority').attr('style', 'background:' + currentElement.attr('data-color'));
                                } else if (field == 'agent') {
                                    \$('.uv-ticket-strip .agent-info').show()
                                    \$('.uv-ticket-strip .agent-info .name').text(name)
                                }
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
                    }
                },
                showCustomerUpdateBlock: function() {
                    \$('.uv-main-info-update-block').show()
                    \$('.uv-main-info-block').hide()
                },
                updateStar: function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    currentElement.toggleClass('uv-star-active')
                    this.model.save({id: this.model.id}, {
                        patch: true,
                        url : \"";
        // line 1948
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_ticket_xhr");
        yield "\",
                        success: function (model, response, options) {
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                filterThread: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(type = currentElement.attr('data-type')) {
                        localStorage.setItem(\"threadTab\", type);
                        if (type != 'all')
                            \$('.uv-ticket-main.create').hide()
                        else
                            \$('.uv-ticket-main.create').show()
                        \$('.uv-ticket-wrapper.thread-list').html('')
                        models = []
                        threadCollection.each(function(model) {
                            models.push(model)
                        })
                        total = threadCollection.models.length;
                        count = 0;
                        if (total) {
                            _.each(models, function (model) {
                                threadCollection.remove(model)
                                count++;
                                if(total == count) {
                                    threadCollection.reset()
                                    threadCollection.state.currentPage = 1;
                                    threadCollection.syncData()
                                }
                            });
                        } else {
                            threadCollection.reset()
                            threadCollection.state.currentPage = 1;
                            threadCollection.syncData()
                        }
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    if (this.model.attributes.isTrashed)
                        window.location.href = \"";
        // line 1994
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_delete_ticket", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1994, $this->source); })()), "id", [], "any", false, false, false, 1994)]), "html", null, true);
        yield "\";
                    else
                        window.location.href = \"";
        // line 1996
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_trash_ticket", ["ticketId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 1996, $this->source); })()), "id", [], "any", false, false, false, 1996)]), "html", null, true);
        yield "\";
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
                    Backbone.\$(e.currentTarget).parent().remove();
                    var collaboratorContainer = \$('.uv-element-block.collaborators');
                    if (!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                addToInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        if (!this.model.preValidate({name: 'email', email: email})) {
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                                currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addTo: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                        currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                    }
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
                        if (!this.model.preValidate({name: 'email', email: email})) {
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
                addCcBcc: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    type = currentTab.find('.cc-bcc-select option:selected').text()
                    inputName = currentTab.find('.cc-bcc-select').val()
                    if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                        currentTab.find('.uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other').val('').trigger('input')
                        currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                setNextView: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var nextView = currentElement.attr('data-value');
                    localStorage.setItem(\"nextView\", nextView);
                    \$(\".next-view input\").val(nextView)
                    \$(\".next-view .uv-dropdown-btn\").text(currentElement.text())
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    formType = element.parents('.uv-tab-view.uv-tab-view-active').attr('id');
                    form = element.parents('form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(formType + \"-area\").getContent();
                    if (app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        if (formType == 'forward') {
                            if (!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>";
        // line 2100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\")
                            } else {
                                this.stopDraftSaveFlag = 1;

                                app.appView.showLoader();
                                tinyMCE.activeEditor.uploadImages(function(response) {
                                    app.appView.hideLoader();

                                    form.submit();
                                    \$('.uv-btn.forward').attr('disabled', 'disabled');
                                });
                            }
                        } else {
                            this.stopDraftSaveFlag = 1;
                            if (localStorage) {
                                localStorage.setItem(\"threadTab\", \"all\");
                            }

                            app.appView.showLoader();
                            tinyMCE.activeEditor.uploadImages(function(response) {
                                app.appView.hideLoader();

                                form.submit();
                                \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
                            });
                        }
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 2127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                        if (formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>";
        // line 2130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\")
                            }
                        }
                    }
                },
                updateTicket: function(e) {
                    e.preventDefault();
                    this.model.set(\$('#edit-ticket-modal form').serializeObject());
                    if (this.model.isValid(['subject', 'reply'])) {
                        \$('#edit-ticket-modal form').find('.uv-btn').attr('disabled', 'disabled');
                        \$('#edit-ticket-modal form').submit();
                    }
                },
                showReplyQuote: function(e) {
                    Backbone.\$(e.currentTarget).next().toggle();
                },
                searchFilterXhr: _.debounce(function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;
                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 2155
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        yield " ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 2160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_search_filter_options");
        yield "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-type'), \"query\": currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 2167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show();
                                    parent.find('.uv-no-results').disabled = true;
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 2182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").show();

                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                },1000)
            });

            // Ticket Thread View
            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                editThreadTemplate : _.template(\$(\"#edit_thread_tmp\").html()),
                events : {
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"pin\"]': 'pinThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"mark\"]': 'markForTask',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"forward\"]' : 'forwardThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"edit\"]' : 'editThread',
                    'click .uv-btn.cancel-edit' : 'cancelEdit',
                    'click .uv-btn.saveThread' : 'updateThread',
                    'click .copy-thread-link' : 'copyThreadLink',
                    'blur .input-copy-thread-link': 'removeCopyThreadLink'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    this.\$el.addClass(\"thread-\" + this.model.id)
                    if (this.model.attributes.threadType == 'note')
                        this.\$el.addClass('uv-ticket-note')
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        var self = this;
                        ";
        // line 2224
        yield "                        threadCollection.models = threadCollection.models.filter(thread => {
                            if(thread.id == self.model.id) {
                                return false;
                            }

                            return true;
                        });
                        this.remove();
                        threadCollection.syncData();
                        app.appView.renderResponseAlert(response);
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    self = this;
                    var index = threadIds.indexOf(this.model.id);
                    if (index > -1)
                        threadIds.splice(index, 1);
                    app.appView.showLoader();
                    this.model.destroy({
                        url : \"";
        // line 2246
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        yield "/\" + this.model.id,
                        data : { 'ticketId' : ticketModel.attributes.id },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                lockAndUnlockThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var isLocked = 0;
                    if(this.model.get('isLocked')) {
                        this.model.set('isLocked', 0);
                        currentElement.attr('data-id', isLocked).text(\"";
        // line 2270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Lock Thread"), "html", null, true);
        yield "\");
                    } else {
                        isLocked = 1;
                        this.model.set('isLocked', 1);
                        currentElement.attr('data-id', isLocked).text(\"";
        // line 2274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlock Thread"), "html", null, true);
        yield "\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        isLocked: isLocked,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'lock'
                    }, {
                        patch: true,
                        url : \"";
        // line 2284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        yield "/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                pinThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var bookmark = 0;
                    if(this.model.get('bookmark')) {
                        this.model.set('bookmark', 0);
                        currentElement.attr('data-id', bookmark).text(\"";
        // line 2308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pin Thread"), "html", null, true);
        yield "\");
                    } else {
                        bookmark = 1;
                        this.model.set('bookmark', 1);
                        currentElement.attr('data-id', bookmark).text(\"";
        // line 2312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unpin Thread"), "html", null, true);
        yield "\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        bookmark: bookmark,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'bookmark'
                    }, {
                        patch: true,
                        url : \"";
        // line 2322
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_xhr");
        yield "/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                forwardThread : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    tinymce.get('forward-area').setContent(this.model.attributes.reply);
                    \$('#forward-area').parent().find('img').removeAttr('crossorigin');
                    \$(\".uv-tabs li[for='forward']\").trigger('click');

                    \$('.uv-ticket-scroll-region').animate({
                        scrollTop: \$('#default').outerHeight()
                    }, 'slow');
                },
                cancelEdit : function(e) {
                    this.initEditThread();
                    tinymce.get('uv-edit-thread').destroy()
                },
                editThread : function(e) {
                    \$('.thread-edit-container .cancel-edit').trigger('click');
                    this.initEditThread();
                    this.\$el.find('.message').hide().after(this.editThreadTemplate());
                    this.\$el.find('.uv-ticket-uploads').hide()

                    InitTinyMce('#uv-edit-thread');
                    tinymce.get('uv-edit-thread').setContent(this.model.attributes.reply);
                    this.\$el.find('img').removeAttr('crossorigin');
                },
                initEditThread: function() {
                    \$('.thread-edit-container').remove();
                    messageElement = this.\$el.find('.message');
                    messageElement.show();
                    this.\$el.find('.uv-ticket-uploads').show()
                },
                updateThread : function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    parent = currentElement.parents('.thread-edit-container')
                    parent.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"uv-edit-thread\").getContent();
                    if(app.appView.stripHTML(html) != '') {
                        var self = this;
                        currentElement.attr(\"disabled\", \"disabled\");
                        this.model.set('reply', html);
                        app.appView.showLoader()
                        this.model.save({}, {
                            url : \"";
        // line 2383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_thread_update_xhr");
        yield "/\" + this.model.id,
                            success : function (model, response, options) {
                                app.appView.hideLoader()
                                messageElement = self.\$el.find('.message');
                                if(response.alertClass == 'success') {
                                    messageElement.html(self.model.attributes.reply).show();
                                    messageElement.find('.uv-icon-ellipsis').remove();
                                    messageElement.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                                }

                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;
                                app.appView.hideLoader()
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    } else {
                        this.\$el.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 2410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    }
                },
                toggleCreateTaskBar : function() {
                    if(threadIds.length) {
                        \$(\"#uv-task-view\").css('right', '0px');
                        \$(\"#uv-task-view .uv-create-task\").show()
                        \$(\"#uv-task-view .uv-task-list\").hide()
                    } else {
                        \$(\"#uv-task-view\").css('right', '-300px');
                        \$(\"#uv-task-view .uv-create-task\").hide()
                        \$(\"#uv-task-view .uv-task-list\").show()
                    }
                },
                copyThreadLink: function(e){
                    _.delay(function(){
                        \$(e.currentTarget).before('<input type=\"text\" class=\"input-copy-thread-link uv-field\" value=\"' + window.location.href + '\"/>');
                        \$(e.currentTarget).prev().focus().select();
                    }, 100);
                },
                removeCopyThreadLink: function(e){
                    \$(e.currentTarget).remove();
                },
                toggleThreadPropertyIcon: function(e) {
                    if(jQuery.inArray(this.model.id, threadIds) !== -1 || this.model.get('bookmark') || this.model.get('isLocked')) {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').show()
                    } else {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').hide()
                    }

                    if(jQuery.inArray(this.model.id, threadIds) !== -1)
                        this.\$el.find('.uv-icon-marked-task').parent().show()
                    else
                        this.\$el.find('.uv-icon-marked-task').parent().hide()

                    if(this.model.get('bookmark'))
                        this.\$el.find('.uv-icon-pinned').parent().show()
                    else
                        this.\$el.find('.uv-icon-pinned').parent().hide()

                    if(this.model.get('isLocked'))
                        this.\$el.find('.uv-icon-locked').parent().show()
                    else
                        this.\$el.find('.uv-icon-locked').parent().hide()
                }
            });

            // Ticket Thread List
            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if(item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    //emojifyRun();
                    this.\$el.find('img').removeAttr('crossorigin');
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime();
                }
            });

            // Ticket Pagination View
            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if(pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
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

            // Ticket collaborator Item View
            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"";
        // line 2503
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2503, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_COLLABORATOR_FROM_TICKET"], "method", false, false, false, 2503)) {
            yield "<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>";
        } else {
            yield "<span class='uv-tag-delete'><%- name %></span>";
        }
        yield "\"),
                events : {
                    'click .uv-tag' : 'confirmRemove'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    ";
        // line 2517
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2517, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2517)) {
            // line 2518
            yield "                        self = this;
                        app.appView.showLoader();
                        this.model.destroy({
                            data : { 'ticketId' : this.model.attributes.ticketId },
                            success : function (model, response, options) {
                                app.appView.hideLoader();
                                self.\$el.remove();
                                self.unrender(response);
                            },
                            error: function (model, xhr, options) {
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    ";
        }
        // line 2539
        yield "                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    ";
        // line 2542
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2542, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2542)) {
            // line 2543
            yield "                        app.appView.openConfirmModal(this);
                    ";
        }
        // line 2545
        yield "                }
            });

            // Ticket Collaborator View
            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass'
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';

                    if(collaboratorCollection.length) {
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
                    ";
        // line 2582
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2582, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET"], "method", false, false, false, 2582)) {
            // line 2583
            yield "                        var inputElement = Backbone.\$(e.currentTarget);
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                        var text = inputElement.val().trim();

                        if (e.which === 13 && text) {
                            this.model = new CollaboratorModel();
                            self = this;
                            this.model.set({email: text})

                            if(this.model.isValid(true)) {
                                app.appView.showLoader();
                                this.model.save({},{
                                    success : function (model, response, options) {
                                        inputElement.val('');
                                        if(response.alertClass == \"success\") {
                                            collaboratorCollection.add(model);
                                        }
                                        self.render();
                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                if(text)
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 2619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            yield "</span>\");
                            }
                        }
                    ";
        }
        // line 2623
        yield "                }
            });


            // Ticket Tag Item View
            var TagItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-tag\",
                template : _.template(\"<span class='uv-tag'>";
        // line 2631
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2631, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 2631)) {
            yield "<span class='uv-icon-remove-dark-before'></span>";
        }
        yield "<%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        tagListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    ";
        // line 2647
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2647, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 2647)) {
            // line 2648
            yield "                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : ticketModel.id } ,
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                    ";
        }
        // line 2669
        yield "                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    ";
        // line 2672
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2672, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 2672)) {
            // line 2673
            yield "                        app.appView.openConfirmModal(this)
                    ";
        }
        // line 2675
        yield "                }
            });

            // Ticket Tag View
            var TagList = Backbone.View.extend({
                el : \$(\".tag-list-block\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addTag'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".tag-list\").html('');
                    if (tagCollection.length) {
                        _.each(tagCollection.models, function (item) {
                            this.renderTag(item);
                        }, this);
                    }
                },
                renderTag : function (item) {
                    var tag = new TagItem({
                        model: item
                    });
                    this.\$el.find('.tag-list').append(tag.render().el);
                },
                addTag : function(e) {
                    ";
        // line 2702
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 2702, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ADD_TAG"], "method", false, false, false, 2702)) {
            // line 2703
            yield "                        var currentElement = Backbone.\$(e.currentTarget);
                        if (currentElement.is('li')) {
                            var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                            var text = currentElement.text().trim();
                        } else {
                            var inputElement = currentElement;
                            var text = inputElement.val().trim();
                        }
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                        if (currentElement.is('li') || (e.which === 13 && text)) {
                            if (text.length <= 20) {
                                if (tagCollection.isTagExist(text)) {
                                    var self = this;
                                    inputElement.val('');
                                    this.model = new TagModel();
                                    this.model.set({name:text});
                                    self = this;

                                    app.appView.showLoader();
                                    this.model.save({}, {
                                        success: function (model, response, options) {
                                            inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                            inputElement.parent().find(\".uv-no-results\").show()
                                            if (!currentElement.is('li')) {
                                                inputElement.trigger('click')
                                            }
                                            if (response.alertClass == \"success\") {
                                                tagCollection.add(model);
                                                self.render();
                                            }

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
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 2752
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag with same name already exist"), "html", null, true);
            yield "</span>\");
                                }
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
            // line 2756
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 20 charactors"), "html", null, true);
            yield "</span>\");
                            }
                        }
                    ";
        }
        // line 2760
        yield "                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Label Item View
            var LabelItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-label\",
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if (response.alertMessage != undefined) {
                        labelListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    self = this;
                    app.appView.showLoader();

                    this.model.destroy({
                        url : \"";
        // line 2792
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_attributes_xhr");
        yield "\",
                        data : { attribute :'label', 'ticketId': ticketModel.id, 'labelId': this.model.get('id') },
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
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this)
                }
            });

            // Ticket Label View
            var LabelList = Backbone.View.extend({
                el: \$(\".label-list-block\"),
                events: {
                    'keypress .uv-field' : 'addLabel',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addLabel'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".label-list\").html('');
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabel(item);
                        }, this);
                    }
                },
                renderLabel : function (item) {
                    var label = new LabelItem({
                        model: item
                    });
                    lavelItem = label.render().el;
                    \$(lavelItem).attr('style', 'background:' + item.attributes.color)
                    this.\$el.find('.label-list').append(lavelItem);
                },
                addLabel : function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.is('li')) {
                        var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                        var text = currentElement.text().trim();
                    } else {
                        var inputElement = currentElement;
                        var text = inputElement.val().trim();
                    }
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                    if (currentElement.is('li') || (e.which === 13 && text)) {
                        if (text.length <= 20) {
                            if (labelCollection.isLabelExist(text)) {
                                var self = this;
                                inputElement.val('');
                                this.model = new LabelModel();
                                this.model.set({name:text});
                                self = this;

                                app.appView.showLoader();
                                this.model.save({}, {
                                    success: function (model, response, options) {
                                        inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                        inputElement.parent().find(\".uv-no-results\").show()
                                        if (!currentElement.is('li')) {
                                            inputElement.trigger('click')
                                        }
                                        if (response.alertClass == \"success\") {
                                            labelCollection.add(model);
                                            self.render();
                                        }

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
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 2892
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label with same name already exist"), "html", null, true);
        yield "</span>\");
                            }
                        } else {
                            inputElement.addClass('uv-field-error');
                            inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 2896
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 20 charactors"), "html", null, true);
        yield "</span>\");
                        }
                    }
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Router
            var Router = Backbone.Router.extend({
                routes: {
                    'thread/:thread' : 'threadRequestedId'
                },
                threadRequestedId: function(thread){
                    threadCollection.threadRequestedId = thread;
                },
                scrollPage : function(divId) {
                    if (\$(divId).length){
                        \$('li a[href=\"'+divId+'\"]').trigger('click');
                        \$('.uv-ticket-scroll-region').animate({
                            scrollTop: \$(divId).offset().top
                        }, 'slow');
                    } else if (divId == '#') { //scroll to last thread added
                        if (threadCollection.fullCollection.length)
                            this.scrollPage('#thread' + threadCollection.fullCollection.at(0).id);
                    }
                }
            });

            var customerForm = new CustomerForm({
                el : \$(\".uv-main-info-update-block\"),
                model : new CustomerModel()
            });

            var ticketNavigation = \$.parseJSON('";
        // line 2933
        yield json_encode((isset($context["ticketNavigationIteration"]) || array_key_exists("ticketNavigationIteration", $context) ? $context["ticketNavigationIteration"] : (function () { throw new RuntimeError('Variable "ticketNavigationIteration" does not exist.', 2933, $this->source); })()));
        yield "');

            var ticketModel = new TicketModel({
                id : \"";
        // line 2936
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2936, $this->source); })()), "id", [], "any", false, false, false, 2936), "html", null, true);
        yield "\",
                status : \"";
        // line 2937
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2937, $this->source); })()), "status", [], "any", false, false, false, 2937), "id", [], "any", false, false, false, 2937), "html", null, true);
        yield "\",
                priority : \"";
        // line 2938
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2938, $this->source); })()), "priority", [], "any", false, false, false, 2938), "id", [], "any", false, false, false, 2938), "html", null, true);
        yield "\",
                group : \"";
        // line 2939
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2939, $this->source); })()), "supportGroup", [], "any", false, false, false, 2939)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2939, $this->source); })()), "supportGroup", [], "any", false, false, false, 2939), "id", [], "any", false, false, false, 2939), "html", null, true)) : (""));
        yield "\",
                subGroup : \"";
        // line 2940
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2940, $this->source); })()), "supportTeam", [], "any", false, false, false, 2940)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2940, $this->source); })()), "supportTeam", [], "any", false, false, false, 2940), "id", [], "any", false, false, false, 2940), "html", null, true)) : (""));
        yield "\",
                agent : \"\",
                profileImage : \"\",
                isTrashed : \"";
        // line 2943
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2943, $this->source); })()), "isTrashed", [], "any", false, false, false, 2943), "html", null, true);
        yield "\"
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            uvdesk.ticket.model = ticketModel;

            threadCollection = new ThreadCollection();
            var threadList = new ThreadList();
            var pagination = new Pagination();

            var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('";
        // line 2956
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 2956, $this->source); })()), "getTicketCollaborators", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2956, $this->source); })()), "id", [], "any", false, false, false, 2956)], "method", false, false, false, 2956));
        yield "'));
            var collaboratorList = new CollaboratorList();
            collaboratorList.render();

            var tagCollection = new TagCollection(\$.parseJSON('";
        // line 2960
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 2960, $this->source); })()), "getTicketTagsById", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2960, $this->source); })()), "id", [], "any", false, false, false, 2960)], "method", false, false, false, 2960));
        yield "'));
            var tagListView = new TagList();
            tagListView.render();

            var labelCollection = new LabelCollection(\$.parseJSON('";
        // line 2964
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 2964, $this->source); })()), "getTicketLabels", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 2964, $this->source); })()), "id", [], "any", false, false, false, 2964)], "method", false, false, false, 2964));
        yield "'));
            var labelListView = new LabelList();
            labelListView.render();

            var router = new Router();
            Backbone.history.start({push_state:true});

            threadCollection.syncData();
        });
    </script>

    <script>
        var sfTinyMceNew = \$.extend({}, sfTinyMce);
        var toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
            selector : '.uv-ticket-reply textarea',
            toolbar: toolbarOptions + ' | translate',
            mentions : getMentions(),
            images_upload_url: \"\",
            setup: function(editor) {
                editor.on('keydown', function(e) { /** for pageup, pagedown keys **/
                    if(e.keyCode == 34 || e.keyCode == 33){
                        e.preventDefault();
                    }
                });
                addTranslateButton(editor);
            }
        });

        function InitTinyMce(selector) {
            let sfTinyMceNew2 = \$.extend({}, sfTinyMceNew);
            sfTinyMceNew2.init({
                selector : selector,
                mentions : getMentions(),
                setup: function(editor) {
                    addTranslateButton(editor);
                }
            });
        }

        function getMentions(){
            return {
                delimiter: ['#'],
                items: 15,
                source: function(){
                    return [
                        {
                            name : \"";
        // line 3012
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Id"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3013
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3013, $this->source); })()), "id", [], "any", false, false, false, 3013), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3016
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3017
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3017, $this->source); })()), "subject", [], "any", false, false, false, 3017), ["
" => " ", "" => " "]), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3021
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3021, $this->source); })()), "status", [], "any", false, false, false, 3021), "description", [], "any", false, false, false, 3021), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3024
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3025
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3025, $this->source); })()), "priority", [], "any", false, false, false, 3025), "description", [], "any", false, false, false, 3025)), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3028
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3029
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3029, $this->source); })()), "type", [], "any", false, false, false, 3029)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3029, $this->source); })()), "type", [], "any", false, false, false, 3029), "description", [], "any", false, false, false, 3029), ["
" => " ", "" => " "]), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3032
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3033
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3033, $this->source); })()), "supportGroup", [], "any", false, false, false, 3033)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3033, $this->source); })()), "supportGroup", [], "any", false, false, false, 3033), "description", [], "any", false, false, false, 3033), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3036
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3037
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3037, $this->source); })()), "supportTeam", [], "any", false, false, false, 3037)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3037, $this->source); })()), "supportTeam", [], "any", false, false, false, 3037), "description", [], "any", false, false, false, 3037), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3040
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3041
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3041, $this->source); })()), "name", [], "any", false, false, false, 3041), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3044
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3045
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 3045, $this->source); })()), "email", [], "any", false, false, false, 3045), "html", null, true);
        yield "\",
                        },
                        {
                            name : \"";
        // line 3048
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Name"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3049
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticketAgent"] ?? null), "name", [], "any", true, true, false, 3049)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 3049, $this->source); })()), "name", [], "any", false, false, false, 3049), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        },
                        {
                            name : \"";
        // line 3052
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Email"), "html", null, true);
        yield "\",
                            value : \"";
        // line 3053
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["ticketAgent"] ?? null), "email", [], "any", true, true, false, 3053)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketAgent"]) || array_key_exists("ticketAgent", $context) ? $context["ticketAgent"] : (function () { throw new RuntimeError('Variable "ticketAgent" does not exist.', 3053, $this->source); })()), "email", [], "any", false, false, false, 3053), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Assigned"), "html", null, true)));
        yield "\",
                        }
                    ];
                },
                insert: function(item) {
                    return '<span>' + item.value + '</span>';
                }
            };
        }
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
        return "@UVDeskCoreFramework/ticket.html.twig";
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
        return array (  4571 => 3053,  4567 => 3052,  4561 => 3049,  4557 => 3048,  4551 => 3045,  4547 => 3044,  4541 => 3041,  4537 => 3040,  4531 => 3037,  4527 => 3036,  4521 => 3033,  4517 => 3032,  4510 => 3029,  4506 => 3028,  4500 => 3025,  4496 => 3024,  4490 => 3021,  4486 => 3020,  4479 => 3017,  4475 => 3016,  4469 => 3013,  4465 => 3012,  4414 => 2964,  4407 => 2960,  4400 => 2956,  4384 => 2943,  4378 => 2940,  4374 => 2939,  4370 => 2938,  4366 => 2937,  4362 => 2936,  4356 => 2933,  4316 => 2896,  4309 => 2892,  4206 => 2792,  4172 => 2760,  4165 => 2756,  4158 => 2752,  4107 => 2703,  4105 => 2702,  4076 => 2675,  4072 => 2673,  4070 => 2672,  4065 => 2669,  4042 => 2648,  4040 => 2647,  4019 => 2631,  4009 => 2623,  4002 => 2619,  3964 => 2583,  3962 => 2582,  3923 => 2545,  3919 => 2543,  3917 => 2542,  3912 => 2539,  3889 => 2518,  3887 => 2517,  3866 => 2503,  3770 => 2410,  3740 => 2383,  3676 => 2322,  3663 => 2312,  3656 => 2308,  3629 => 2284,  3616 => 2274,  3609 => 2270,  3582 => 2246,  3558 => 2224,  3514 => 2182,  3496 => 2167,  3486 => 2160,  3478 => 2155,  3450 => 2130,  3444 => 2127,  3414 => 2100,  3307 => 1996,  3302 => 1994,  3253 => 1948,  2978 => 1676,  2968 => 1669,  2960 => 1664,  2950 => 1657,  2942 => 1652,  2932 => 1645,  2923 => 1639,  2916 => 1635,  2910 => 1632,  2898 => 1623,  2886 => 1614,  2880 => 1611,  2873 => 1607,  2867 => 1604,  2845 => 1585,  2820 => 1563,  2810 => 1556,  2803 => 1552,  2785 => 1537,  2765 => 1520,  2757 => 1515,  2753 => 1514,  2745 => 1509,  2737 => 1504,  2732 => 1502,  2722 => 1495,  2718 => 1494,  2693 => 1474,  2688 => 1472,  2673 => 1460,  2653 => 1443,  2646 => 1439,  2638 => 1434,  2630 => 1431,  2625 => 1429,  2612 => 1419,  2609 => 1418,  2603 => 1415,  2598 => 1413,  2595 => 1412,  2593 => 1411,  2587 => 1408,  2582 => 1406,  2576 => 1404,  2570 => 1402,  2567 => 1401,  2561 => 1398,  2558 => 1397,  2556 => 1396,  2544 => 1387,  2537 => 1383,  2525 => 1374,  2520 => 1372,  2515 => 1370,  2503 => 1361,  2498 => 1359,  2493 => 1357,  2481 => 1348,  2449 => 1319,  2443 => 1316,  2439 => 1315,  2433 => 1313,  2420 => 1312,  2407 => 1309,  2404 => 1308,  2391 => 1297,  2385 => 1295,  2379 => 1293,  2377 => 1292,  2372 => 1290,  2364 => 1285,  2359 => 1283,  2353 => 1281,  2348 => 1278,  2343 => 1275,  2340 => 1274,  2330 => 1265,  2327 => 1241,  2322 => 1219,  2313 => 1212,  2303 => 1204,  2298 => 1202,  2294 => 1201,  2290 => 1200,  2286 => 1199,  2281 => 1198,  2279 => 1197,  2275 => 1196,  2270 => 1194,  2263 => 1190,  2253 => 1183,  2249 => 1182,  2244 => 1180,  2238 => 1177,  2229 => 1171,  2221 => 1166,  2216 => 1164,  2208 => 1161,  2203 => 1159,  2200 => 1158,  2197 => 1157,  2189 => 1151,  2180 => 1145,  2176 => 1144,  2171 => 1142,  2165 => 1139,  2156 => 1133,  2148 => 1128,  2143 => 1126,  2131 => 1117,  2127 => 1116,  2120 => 1112,  2117 => 1111,  2106 => 1108,  2101 => 1107,  2097 => 1106,  2091 => 1103,  2068 => 1083,  2065 => 1082,  2054 => 1079,  2049 => 1078,  2045 => 1077,  2038 => 1073,  2029 => 1067,  2019 => 1060,  2011 => 1057,  2006 => 1055,  2003 => 1054,  1993 => 1045,  1988 => 1043,  1984 => 1042,  1980 => 1041,  1976 => 1040,  1971 => 1039,  1969 => 1038,  1965 => 1037,  1960 => 1035,  1954 => 1032,  1944 => 1025,  1940 => 1024,  1935 => 1022,  1929 => 1019,  1919 => 1012,  1910 => 1006,  1905 => 1004,  1893 => 995,  1889 => 994,  1882 => 990,  1879 => 989,  1868 => 986,  1863 => 985,  1859 => 984,  1852 => 980,  1831 => 962,  1824 => 960,  1819 => 958,  1816 => 957,  1811 => 953,  1805 => 951,  1803 => 950,  1799 => 949,  1795 => 948,  1789 => 945,  1782 => 941,  1777 => 938,  1766 => 929,  1759 => 924,  1755 => 922,  1751 => 920,  1743 => 918,  1741 => 917,  1735 => 916,  1732 => 915,  1730 => 914,  1726 => 912,  1717 => 909,  1710 => 908,  1706 => 907,  1701 => 905,  1698 => 904,  1695 => 903,  1690 => 899,  1684 => 897,  1678 => 895,  1676 => 894,  1672 => 892,  1669 => 890,  1666 => 889,  1660 => 887,  1650 => 885,  1647 => 884,  1637 => 882,  1635 => 881,  1628 => 877,  1622 => 873,  1614 => 871,  1611 => 870,  1609 => 869,  1602 => 867,  1594 => 866,  1587 => 861,  1580 => 856,  1576 => 855,  1572 => 854,  1568 => 852,  1558 => 850,  1556 => 849,  1550 => 848,  1539 => 844,  1535 => 843,  1526 => 837,  1519 => 833,  1515 => 831,  1505 => 822,  1498 => 817,  1491 => 812,  1484 => 807,  1478 => 805,  1476 => 804,  1473 => 803,  1468 => 801,  1463 => 800,  1461 => 799,  1456 => 797,  1453 => 796,  1447 => 794,  1445 => 793,  1437 => 787,  1434 => 786,  1429 => 783,  1425 => 782,  1421 => 781,  1417 => 780,  1412 => 779,  1408 => 776,  1402 => 771,  1396 => 769,  1390 => 768,  1381 => 761,  1372 => 755,  1368 => 754,  1363 => 752,  1357 => 748,  1355 => 747,  1350 => 745,  1345 => 742,  1338 => 736,  1332 => 733,  1329 => 732,  1327 => 731,  1322 => 729,  1317 => 726,  1303 => 714,  1299 => 713,  1294 => 711,  1285 => 705,  1280 => 702,  1273 => 696,  1269 => 694,  1263 => 692,  1261 => 691,  1258 => 690,  1252 => 689,  1246 => 687,  1243 => 686,  1239 => 685,  1236 => 684,  1231 => 681,  1220 => 679,  1216 => 678,  1211 => 676,  1200 => 668,  1194 => 664,  1188 => 662,  1186 => 661,  1183 => 660,  1177 => 659,  1171 => 657,  1168 => 656,  1164 => 655,  1159 => 654,  1157 => 653,  1151 => 650,  1148 => 649,  1143 => 645,  1137 => 642,  1134 => 641,  1129 => 638,  1118 => 636,  1114 => 635,  1110 => 634,  1103 => 630,  1098 => 628,  1091 => 624,  1086 => 623,  1084 => 622,  1079 => 620,  1076 => 619,  1071 => 615,  1065 => 612,  1062 => 611,  1057 => 608,  1046 => 606,  1042 => 605,  1037 => 603,  1030 => 599,  1025 => 597,  1018 => 593,  1013 => 592,  1011 => 591,  1006 => 589,  1003 => 588,  998 => 584,  992 => 581,  989 => 580,  984 => 577,  973 => 575,  969 => 574,  961 => 569,  956 => 567,  947 => 564,  945 => 563,  940 => 561,  937 => 560,  932 => 556,  926 => 554,  920 => 550,  909 => 548,  905 => 547,  900 => 545,  891 => 542,  889 => 541,  884 => 539,  881 => 538,  876 => 534,  870 => 531,  867 => 530,  861 => 526,  848 => 524,  844 => 523,  839 => 521,  830 => 518,  828 => 517,  824 => 516,  819 => 514,  816 => 513,  811 => 509,  805 => 507,  800 => 504,  789 => 501,  784 => 500,  780 => 499,  772 => 494,  767 => 492,  758 => 489,  755 => 488,  753 => 487,  748 => 485,  745 => 484,  741 => 481,  738 => 479,  730 => 474,  724 => 471,  720 => 470,  712 => 465,  707 => 463,  699 => 458,  694 => 456,  686 => 451,  681 => 449,  675 => 446,  667 => 441,  663 => 440,  659 => 438,  656 => 437,  650 => 432,  644 => 430,  642 => 429,  638 => 427,  632 => 425,  626 => 423,  624 => 422,  619 => 421,  617 => 420,  612 => 419,  610 => 418,  606 => 417,  599 => 413,  595 => 412,  588 => 408,  584 => 407,  580 => 405,  575 => 401,  571 => 399,  569 => 398,  566 => 397,  560 => 395,  558 => 394,  554 => 393,  550 => 392,  545 => 389,  539 => 387,  532 => 385,  530 => 384,  525 => 382,  522 => 381,  519 => 379,  510 => 374,  502 => 371,  492 => 367,  488 => 364,  475 => 363,  278 => 177,  228 => 130,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ '#' ~ ticket.id ~ ' ' ~ ticket.subject }}{% endblock %}

{% block templateCSS %}
    <style>
        .uv-aside-ticket-labels.label-list-block .uv-btn-label {
            cursor: pointer;
        }
        .uv-main-info-update-block .uv-element-block {
            margin: 10px 0px !important;
        }
        .uv-tab-ellipsis {
            position: relative;
        }
        .uv-inner-section .uv-view .uv-ticket-section .uv-ticket-accordion .uv-ticket-wrapper {
            display: block;
        }
        .uv-element-block.cc-bcc .uv-dropdown-container {
            padding: 10px 20px 10px 20px;
        }
        .uv-action-buttons .uv-dropdown-list ul li {
            padding: 5px 0px !important;
        }
        .uv-action-buttons{
            margin-bottom: 40px !important;
        }
        .uv-ticket-reply .uv-element-block-textarea, .thread-edit-container .uv-element-block-textarea {
            width: 100% !important;
            max-width: 100% !important;
        }
        .thread-edit-container .uv-field-message {
            color: #FF5656 !important;
        }
        .uv-element-block .mce-tinymce {
            margin-top: 10px;
        }
        .uv-ticket-reply .uv-element-block-textarea .uv-field-message, .thread-edit-container .uv-element-block-textarea .uv-field-message {
            margin-top: 15px;
        }
        .thread-edit-container {
            margin-top: 10px;
        }
        .uv-ticket-viewer-bar{
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            height: 0px;
        }
        .uv-ticket-viewer-bar.active {
            height: 50px;
            margin-bottom: 10px;
            border-bottom: 1px dotted #f97278;
        }
        .uv-ticket-viewer-single {
            display: inline-block;
            margin-right: 5px;
        }
        .uv-ticket-viewer-single img {
            width: 40px;
            border-radius: 3px;
            display: inline-block;
            vertical-align: middle;
        }
        .uv-ticket-viewer-single.uv-first {
            width: 40px;
            height: 40px;
            background-image: linear-gradient(to right, #f97278 0%, #f181bf 100%);
            text-align: center;
            vertical-align: top;
            line-height: 30px;
            border-radius: 20px;
        }
        .uv-ticket-viewer-close {
            position: absolute;
            top: 0px;
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            text-align: center;
            line-height: 35px;
            border-radius: 2px;
            opacity: .6;
            text-indent: 6px;
        }
        .uv-ticket-viewer-list {
            display: inline;
        }
        span.viewer-firstletter.img-thumbnail {
            width: 40px;
            height: 40px;
            display: block;
            text-align: center;
            font-size: 20px;
            font-style: italic;
            border: 1px dotted;
            border-radius: 4px;
            line-height: 35px;
        }
        .uv-ticket-viewer-close {
            display:none;
        }
        .uv-ticket-viewer-single:hover .uv-ticket-viewer-close {
            display: block;
        }
        .uv-hide{
            display: none;
        }
        .uv-info {
            background: #7C70F4;
        }
        .uv-ticket-viewer-list .uv-icon-eye-light{
            animation: jelly 0.8s infinite alternate ease-in-out;
        }
        .uv-aside-brick .uv-loader {
            position: absolute;
            transform: scale(0.5);
            top: 22px;
            right: 45px;
        }
        .uv-app-glyph-customfields {
            width: 20px;
            height: 20px;
            background-position: center center;
            background-repeat: no-repeat;
            cursor: pointer;
            display: inline-block;
            vertical-align: middle;
            margin: 5px 0px 5px 10px;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/app-glyph-custom.svg') }}\");
        }
        .uv-no-threads {
            padding: 80px 20px;
            text-align: center;
        }
        .uv-ticket-strip-label {
            position: relative;
        }
        input.input-copy-thread-link {
            position: absolute;
            bottom: 10px;
            width: 400px;
        }
        .uv-ticket-action-bar-fixed {
            position: fixed;
            width: 100%;
            background: #fff;
            z-index: 999;
        }
        .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            position: fixed;
            right: 0px;
            margin-top: 10px;
        }
        .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
            margin-top: 70px;
        }
        .uv-ticket-main {
            word-wrap: break-word;
        }
        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
        }
        .uv-icon-pin {
            width: 18px;
            height: 18px;
            display: inline-block;
            vertical-align: middle;
            background-image: url(\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-sprite.svg') }}\");
            background-position: 0px -396px;
            transition: transform .15s;
            transform: scale(1);
        }
        .uv-icon-pinned {
            background-position: -19px -396px;
        }
        .uv-header-fix{
            display: inline-block;
            margin: 0px 10px 0px 5px;
        }
        .uv-header-fix + .uv-tabs {
            display: inline-block;
        }
        .uv-ticket-section span.uv-mail-status {
            width: 16px;
            height: 16px;
            background: url('../../../../../bundles/webkuldefault/images/mail-status.png');
            cursor: help;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-processed {
            background-position: 0 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-open,.uv-ticket-section .uv-mail-status.uv-mail-delivered,.uv-ticket-section .uv-mail-status.uv-mail-click {
            background-position: -38px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-spam,.uv-ticket-section .uv-mail-status.uv-mail-deferred,.uv-ticket-section .uv-mail-spamreport {
            background-position: -55px 0;
        }
        .uv-ticket-section .uv-mail-status.uv-mail-bounce,.uv-ticket-section .uv-mail-status.uv-mail-dropped {
            background-position: -73px 0;
        }
        @media only screen and (max-width: 1480px) {
            .uv-inner-section .uv-view .uv-ticket-action-bar-fixed.uv-ticket-action-bar .uv-ticket-action-bar-rt{
                width: auto;
            }
        }
        @media only screen and (max-width: 1300px) {
            .uv-header-fix{
                margin: 0px 10px 0px 10px;
            }
        }

        @media only screen and (max-width: 900px) {
            .uv-ticket-action-bar-fixed{
                position: relative;
            }
            .uv-ticket-action-bar-fixed + .uv-ticket-viewer-bar {
                margin-top: 0px;
            }
            .uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                position: relative;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-lt{
                width: 70%;
            }
            .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
                width: 21%;
                padding-right: 33px;
            }
            .uv-header-fix {
                display: none;
            }
        }

        .uv-inner-section .uv-view .uv-ticket-scroll-region {
            margin-bottom: 0px;
        }

        .uv-inner-section .uv-view .uv-ticket-action-bar.uv-ticket-action-bar-fixed .uv-ticket-action-bar-rt {
            width: 21%;
            padding-right: 33px;
        }
        @media print {
            .uv-navbar,.uv-ticket-action-bar, .uv-sidebar, .uv-aside>.uv-aside-brick, .uv-aside-back, .uv-ticket-fixed-region, .uv-ticket-main.uv-ticket-reply, .uv-upload-actions, .uv-filter-view, .uv-dropdown-list>.uv-dropdown-container,.uv-notifications-wrapper,.uv-pop-up-overlay,.uv-loader-view, .uv-loader, .uv-navbar,.uv-ticket-count-wrapper {
                display: none !important;
            }
            .uv-ticket-scroll-region {
                overflow: visible;
                margin-bottom: 0 !important;
            }
            .uv-paper {
                padding-left: 0px !important; /* uv-view */
            }
            .uv-wrapper {
                left: 0 !important;
                margin: 0 !important;
            }
            .uv-inner-section .uv-view .uv-ticket-scroll-region  .uv-ticket-main-rt {
                width: 80%;
            }
            .uv-paper,.uv-view ,.uv-ticket-scroll-region, .uv-wrapper {
                position: initial !important;
            }
        }

        .uv-ticket-action-bar-rt .app-glyph {
            display: inline-block;
            vertical-align: middle;
            margin-right: 10px;
            cursor: pointer;
            height: 20px;
            width: 20px;
        }

        .uv-ticket-action-bar-rt .app-glyph:last-child {
            margin-right: 0px;
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

        .uv-dropdown-list ul li {
            padding : 8px 0px !important;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        }

        .uv-aside-select.search .uv-dropdown-list.uv-bottom-left, .uv-aside-select .uv-dropdown-list.uv-bottom-right {
            top: 25px;
            width: 100%;
        }

        .uv-aside-select.search .uv-dropdown-list ul {
            padding: 0px 10px;
        }

        .uv-aside-select.search .uv-dropdown-container {
            padding: 8px 10px 4px;
            overflow-y: auto;
            max-height: 280px;
            border-bottom: solid 1px #D3D3D3;
        }

        .uv-aside-select.search .uv-dropdown-list ul.uv-agents-list li {
            border-bottom: solid 1px #D3D3D3;
            border-top:0px;
        }

        .uv-search-inline {
            width: 100%;
        }

        .uv-dropdown-list ul.uv-search-list li:first-child {
            border-top: none;
        }

        .uv-search-sm input.uv-search-field { 
           border: solid 1px #B1B1AE;
           border-radius: 3px;
           color: #333333;
           font-size: 15px;
           box-sizing: border-box;
           padding: 7px 10px 9px 33px;
           width: 100%;
        }
        
    </style>
{% endblock %}
{% block pageContent %}

    <div class=\"uv-inner-section\">
        {# Ticket Sidebar #}
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %} >
            <div class=\"uv-main-info-block\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>{{ 'Ticket'|trans }} #{{ ticket.id }}</h6>
                    </div>
                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_ticket_collection\") }}';\">{{ 'Back'|trans }}</span>
                    </div>
                </div>

                {# Ticket Information #}
                <div class=\"uv-aside-brick\">
                    {# Customer Details #}
                    <div class=\"uv-aside-customer-block\">
                        <h3>{{ 'Customer Information'|trans }}</h3>
                        <div class=\"uv-aside-avatar\">
                            {% if customer.thumbnail %}
                                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ customer.thumbnail }}\">
                            {% else %}
                                <img src=\"{{ asset(default_customer_image_path) }}\">
                            {% endif %}
                        </div>

                        <div class=\"uv-aside-customer-info\">
                            <span>{{ customer.name }}</span>
                            <span>{{ customer.email }}</span>
                            {% if customer.contactNumber %}
                                <span>{{ customer.contactNumber }}</span>
                            {% endif %}

                            {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_CUSTOMER') %}
                                <span class=\"uv-customize\" data-toggle=\"tooltip\" title=\"Edit Customer Information\"></span>
                            {% endif %}
                        </div>
                    </div>

                    {# Ticket Details #}
                    <div class=\"uv-aside-ticket-block\">
                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'Total Replies'|trans }}</h3>
                            <span class=\"uv-icon-replies\"></span> <span>{{ totalReplies }}</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'TimeStamp'|trans }}</h3>
                            <span class=\"uv-icon-timestamp\"></span> <span>{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                        </div>

                        <div class=\"uv-aside-ticket-brick\">
                            <h3>{{ 'Channel'|trans }}</h3>
                            {% if ticket.source == 'email' %}
                                <span class=\"uv-icon-channel uv-channel-email\"></span> <span>{{ 'Email'|trans }}</span>
                            {% elseif ticket.source == 'formbuilder' %}
                                <span class=\"uv-icon-channel uv-channel-form\"></span> <span>{{ 'Formbuilder'|trans }}</span>
                            {% elseif ticket.source == 'api' %}
                                <span class=\"uv-icon-channel uv-channel-api\"></span> <span>{{ 'Api'|trans }}</span>
                            {% else %}
                                <span class=\"uv-icon-channel uv-channel-web\"></span> <span>{{ 'Website'|trans }}</span>
                            {% endif %}
                        </div>

                        {% if user_service.isFileExists('apps/uvdesk/sla') %}
                            {{ include('@UVDeskCoreFramework\\\\slaSnippet.html.twig') }}
                        {% endif %}
                    </div>
                </div>
            </div>

            {# Edit Customer Info #}
            {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_CUSTOMER') %}
                <div class=\"uv-main-info-update-block uv-no-error-success-icon\" style=\"display: none\">
                    <div class=\"uv-aside-head\">
                        <div class=\"uv-aside-title\"><h6>{{ 'Edit Customer'|trans }}</h6></div>
                        <div class=\"uv-aside-back\"><span>{{ 'Back'|trans }}</span></div>
                    </div>

                    <div class=\"uv-aside-brick\">
                        <form method=\"post\">
                            <input class=\"uv-field\" name=\"id\" type=\"hidden\" value=\"{{ customer.id }}\">

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"name\" type=\"text\" value=\"{{ customer.name }}\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"email\" type=\"text\" value=\"{{ customer.email }}\">
                                </div>
                            </div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field\" name=\"contactNumber\" type=\"text\" value=\"{{ customer.contactNumber }}\">
                                </div>
                            </div>

                            <div class=\"uv-action-buttons\">
                                <a class=\"uv-btn update-btn\" href=\"#\">{{ 'Update'|trans }}</a>
                                <a class=\"uv-btn cancel-btn\" href=\"#\">{{ 'Cancel'|trans }}</a>
                            </div>

                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token_generator.refreshToken('') }}\"/>
                        </form>
                    </div>
                </div>
            {% endif %}

            {# Edit Ticket #}
            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-actions\">
                    {# Update Ticket Agent #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Agent'|trans }}</label>
                        <div>
                            {% set agentName = ticketAgent ? ticketAgent.name : 'Not Assigned'|trans %}
                            {% if ticket.isTrashed == false and user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticketAgent ? ticketAgent.id : '' }}\">{{ agentName }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Agent'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                        {% for agent in user_service.getAgentPartialDataCollection() %}
                                            <li data-index=\"{{ agent.id }}\">
                                                <img src=\"{{ agent.smallThumbnail != null ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{ agent.name }}
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">{{ agentName }}</span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Priority #}
                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">{{ 'Priority'|trans }}</label>
                        <div>
                            <span class=\"uv-list-ticket-priority\" style=\"background: {{ ticket.priority.colorCode }}\"></span>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_PRIORITY') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.priority.id }}\">{{ ticket.priority.description|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Priority'|trans }}</label>
                                        <ul class=\"priority\" data-action=\"priority\">
                                            {% for priority in ticketPriorityCollection %}
                                                <li data-index=\"{{ priority.id }}\" data-color=\"{{ priority.colorCode }}\"><a href=\"#\">{{ priority.description|trans }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.priority.description|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Status #}
                    <div class=\"uv-aside-select\">
                        <label class=\"uv-aside-select-label\">{{ 'Status'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.status.id }}\">{{ ticket.status.description|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Status'|trans }}</label>
                                        <ul class=\"status\" data-action=\"status\">
                                            {% for status in ticketStatusCollection %}
                                                <li data-index=\"{{ status.id }}\"><a href=\"#\">{{ status.description|trans }}</a></li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">{{ ticket.status.description|trans }}</span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Type #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Type'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_TYPE') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.type ? ticket.type.id : '-- --' }}\">{{ ticket.type ? ticket.type.code : 'Not Assigned'|trans }}</span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Type'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list type\" data-action=\"type\">
                                        {% for type in ticket_service.getTypes()  %}
                                            <li data-index=\"{{ type.id }}\"><a href=\"#\">{{ type.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.type ? ticket.type.code : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Support Group #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Group'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.supportGroup ? ticket.supportGroup.id : '-- --' }}\">
                                    {{ ticket.supportGroup ? ticket.supportGroup.name : 'Not Assigned'|trans }}
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Group'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list group\" data-action=\"group\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>

                                        {% for group in supportGroupCollection %}
                                            <li data-index=\"{{ group.id }}\"><a href=\"#\">{{ group.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.supportGroup ? ticket.supportGroup.name : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Update Ticket Support Team #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Team'|trans }}</label>
                        <div>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.supportTeam ? ticket.supportTeam.id : '-- --' }}\">
                                    {{ ticket.supportTeam ? ticket.supportTeam.name : 'Not Assigned'|trans }}
                                </span>
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Team'|trans }}</label>
                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">
                                        </div>
                                    </div>
                                    <ul class=\"uv-search-list team\" data-action=\"team\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>
                                        {% for team in supportTeamCollection %}
                                            <li data-index=\"{{ team.id }}\"><a href=\"#\">{{ team.name }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {{ ticket.supportTeam ? ticket.supportTeam.name : 'Not Assigned'|trans }}
                                </span>
                            {% endif %}
                        </div>
                    </div>

                    {# Assigned Country #}
                    <div class=\"uv-aside-select search\">
                        <label class=\"uv-aside-select-label\">{{ 'Country'|trans }}</label>

                        <div class=\"auto_focus\">
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_COUNTRY') %}
                                <span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ ticket.country ? ticket.country : '-- --' }}\">
                                    {% for key, selectedCountry in user_service.getCountries() %}
                                        {% if (ticket.country) and (ticket.country == key) %}
                                           {{ selectedCountry }}
                                        {% endif %}
                                    {% endfor %}

                                    {% if (ticket.country == '') or (ticket.country == null) %}
                                        {{ 'Not Assigned'|trans }}
                                    {% endif %}
                                </span>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Country'|trans }}</label>

                                        <div class=\"uv-search-sm\">
                                            <input type=\"text\" class=\"uv-search-field uv-search-inline\">
                                        </div>
                                    </div>

                                    <ul class=\"uv-search-list country\" data-action=\"country\">
                                        <li data-index=\"\"><a href=\"#\">{{ 'Not Assigned'|trans }}</a></li>

                                        {% for key, country in user_service.getCountries() %}
                                            <li data-index=\"{{ key }}\"><a href=\"#\">{{ country }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            {% else %}
                                <span class=\"uv-aside-select-value\">
                                    {% for key, selectedCountry in user_service.getCountries() %}
                                        {% if (ticket.country) and (ticket.country == key) %}
                                           {{ selectedCountry }}
                                        {% endif %}
                                    {% endfor %}

                                    {% if (ticket.country == '') or (ticket.country == null) %}
                                        {{ 'Not Assigned'|trans }}
                                    {% endif %}
                                </span>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            {# Ticket Labels #}
            <div class=\"uv-aside-brick\">
                <div class=\"uv-aside-ticket-labels label-list-block\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Labels'|trans }}</label>

                        <div class=\"uv-field-block\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-type=\"label\">
                            <div class=\"uv-dropdown-list uv-top-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <span class=\"uv-filter-info\">{{ 'Type atleast 2 letters'|trans }}</span>
                                        <span class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</span>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"label-list\"></div>
                </div>
            </div>

            {# Ticket Collaborators #}
            <div class=\"uv-aside-brick collaborator-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>

                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field\" type=\"text\" name=\"email\" type=\"text\" value=\"\" placeholder=\"{{ 'Type email to add'|trans }}\">
                            </div>
                        {% endif %}
                    </div>
                    <div class=\"collaborator-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>

            {# Ticket Tags #}
            <div class=\"uv-aside-brick tag-list-block\">
                <div class=\"uv-aside-ticket-labels\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tags'|trans }}</label>

                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_TAG') %}
                            <div class=\"uv-field-block\">
                                <input class=\"uv-field uv-dropdown-other\" name=\"tag-name\" type=\"text\" data-type=\"tag\" value=\"\">
                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Filter With'|trans }}</label>
                                        <ul class=\"\">
                                            <span class=\"uv-filter-info\">{{ 'Type atleast 2 letters'|trans }}</span>
                                            <span class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</span>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"tag-list\" style=\"margin-top: 10px\"></div>
                </div>
            </div>
        </div>

        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\" >
            <div class=\"uv-ticket-scroll-region {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view-tv{% endif %}\" >
                {# Ticket Header CTA #}
                <div class=\"uv-ticket-action-bar\">
                    <div class=\"uv-ticket-action-bar-lt\">
                        <div class=\"uv-header-fix\"><a href=\"#\" class=\"uv-icon-pin\"></a></div>

                        {# Thread Actions #}
                        <div class=\"uv-tabs\">
                            <ul>
                                {# Filter Threads #}
                                <li for=\"default\" data-type=\"all\" class=\"uv-tab-active\">{{ 'All Threads'|trans }}</li>
                                <li for=\"default\" data-type=\"reply\">{{ 'Replies'|trans }}</li>
                                <li for=\"default\" data-type=\"forward\">{{ 'Forwards'|trans }}</li>
                                <li for=\"default\" data-type=\"note\">{{ 'Notes'|trans }}</li>
                                <li for=\"default\" data-type=\"pinned\">{{ 'Pinned'|trans }}</li>

                                {# Update Threads #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') or user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <li class=\"uv-tab-ellipsis uv-ticket-action\">
                                        <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>

                                        <div class=\"uv-dropdown-list uv-bottom-right\">
                                            <div class=\"uv-dropdown-container\">
                                                <ul class=\"priority\" data-action=\"priority\">
                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') %}
                                                        <li data-action=\"edit\" class=\"uv-open-popup\" data-target=\"edit-ticket-modal\">{{ 'Edit Ticket'|trans }}</li>
                                                    {% endif %}

                                                    <li data-action=\"print\">{{ 'Print Ticket'|trans }}</li>

                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                        <li data-action=\"spam\" data-index=\"6\">{{ 'Mark as Spam'|trans }}</li>
                                                        <li data-action=\"closed\" data-index=\"5\">{{ 'Mark as Closed'|trans }}</li>
                                                    {% endif %}

                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                                        <li data-action=\"delete\" class=\"uv-text-danger\">{{ 'Delete Ticket'|trans }}</li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                {% endif %}
                            </ul>
                        </div>
                    </div>

                    <div class=\"uv-ticket-action-bar-rt\">
                        {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\WidgetCollection\").embedSideFilterIcons()|raw }}
                    </div>
                </div>

                {# Ticket Active Users #}
                <div class=\"uv-ticket-viewer-bar\">
                    <div class=\"uv-ticket-viewer-list\">
                        <div class=\"uv-ticket-viewer-single uv-first\" title=\"Currently active agents on ticket...\">
                            <span class=\"uv-icon-eye-light\"></span>
                        </div>
                    </div>
                </div>

                {# Ticket Header #}
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-head-lt\">
                        <span class=\"uv-star-large {{ ticket.isStarred ? 'uv-star-active' : '' }} uv-star uv-margin-right-5\"></span>
                    </div>

                    <div class=\"uv-ticket-head-rt\">
                        <h1>{{ ticket.subject }}</h1>
                    </div>
                </div>

                <div class=\"uv-ticket-strip\">
                    <span>
                        <span class=\"uv-ticket-strip-label\">{{ 'Created'|trans }} - </span>
                        <span class=\"timeago uv-margin-0\" data-timestamp=\"{{ ticket.createdAt.getTimestamp() }}\" title=\"{{ ticket.createdAt.format('d-m-Y h:ia') }}\">{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                    </span>

                    <span>
                        <span class=\"uv-ticket-strip-label\">{{ 'By'|trans }} - </span> {{ initialThread.user.name }}
                        {% if totalCustomerTickets %}
                            (<a id=\"more-tickets-btn\" href=\"{{ path('helpdesk_member_ticket_collection') }}#customer/{{customer.id}}\" target=\"_blank\">{{ 'count more tickets'|trans({'count': totalCustomerTickets}) }}</a>)
                        {% endif %}
                    </span>

                    <span class=\"agent-info\" style=\"{{ ticketAgent ? '' : 'display: none' }}\">
                        <span class=\"uv-ticket-strip-label\">{{ 'Agent'|trans }} - </span>
                        <span class=\"name\">{{ ticketAgent ? ticketAgent.name : '' }}</span>
                    </span>
                </div>

                {# Thread Tab View #}
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"default\">
                    <div class=\"uv-ticket-section\">
                        <div class=\"uv-ticket-main create\">
                            <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"timeago uv-margin-0\" data-timestamp=\"{{ ticket.createdAt.getTimestamp() }}\" title=\"{{ ticket.createdAt.format('d-m-Y h:ia') }}\">{{ ticket_service.timeZoneConverter(ticket.createdAt) }}</span>
                                    - {{ initialThread.user.name }} <span class=\"uv-ticket-strip-label\">{{ 'created Ticket'|trans }}</span>
                                </span>
                                {% if initialThread.cc != '' %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-ticket-strip\">
\t\t\t\t\t\t\t\t\t\t<span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> {{ initialThread.cc }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}      
                            </div>

                            <div class=\"uv-ticket-main-lt\">
                               <img src=\"{{ initialThread.user.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ (initialThread.user.thumbnail) : initialThread.createdBy == 'customer' ? asset(default_customer_image_path) : asset(default_agent_image_path) }}\">
                            </div>

                            <div class=\"uv-ticket-main-rt\">
                                {% if initialThread.createdBy == 'customer' %}
                                    <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/{{ initialThread.user.id}}\" class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                {% else %}
                                    {% if initialThread.user %}
                                        <a href=\"{{ path('helpdesk_member_account') }}/{{ initialThread.user.id}}\" class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                    {% else %}
                                        <a class=\"uv-ticket-member-name\">{{ initialThread.user.name }}</a>
                                    {% endif %}
                                {% endif %}

                                {# Ticket Message #}
                                <div class=\"message\">
                                    <p>
                                        {% if initialThread.message|striptags == initialThread.message %}
                                            {{ initialThread.message|nl2br }}
                                        {% else %}
                                            {{ initialThread.message|raw }}
                                        {% endif %}
                                    </p>
                                </div>

                                {# Ticket Attachments #}
                                {% if initialThread.attachments|length %}
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            {% for attachment in initialThread.attachments %}
                                                <a href=\"{{ attachment.downloadURL }}\" target = \"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"{{ attachment.name }}\">
                                                    <img src=\"{{ attachment.iconURL }}\"  class=\"uv-auto-pointer-events\"/>
                                                </a>
                                            {% endfor %}
                                        </div>

                                        {% if initialThread.attachments|length > 1 %}
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"{{ initialThread.id }}\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>{{ 'Open in Files'|trans }}</a>
                                                {% if initialThread.attachments|length %}
                                                    <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/{{ initialThread.id }}\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> Download (as .zip)</a>
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        <div class=\"uv-ticket-accordion\">
                            <div class=\"uv-ticket-count-wrapper\">
                                <span class=\"uv-ticket-count-stat\">{{ totalReplies }}</span>
                            </div>

                            <div class=\"uv-ticket-wrapper thread-list\"></div>
                        </div>
                    </div>
                </div>

                {# Reply Ticket View #}
                <div class=\"uv-ticket-main uv-ticket-reply uv-no-error-success-icon\">
                    <div class=\"uv-ticket-main-lt\">
                        <span class=\"uv-icon-ellipsis\"></span>
                        <img src=\"{{ currentUserDetails.thumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ currentUserDetails.thumbnail : asset(default_agent_image_path) }}\" />
                    </div>

                    <div class=\"uv-ticket-main-rt\">
                        <span class=\"uv-ticket-member-name\">{{ currentUserDetails.name }}</span>
                        <div class=\"uv-tabs\">
                            <ul>
                                <li for=\"reply\" class=\"uv-tab-active\">{{ 'Reply'|trans }}</li>
                                <li for=\"forward\">{{ 'Forward'|trans }}</li>
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_NOTE') %}
                                    <li for='note'>{{ 'Note'|trans }}</li>
                                {% endif %}
                            </ul>
                        </div>

                        {# Ticket Thread | Add Reply #}
                        <div class=\"uv-tab-view uv-tab-view-active\" id=\"reply\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                <input name=\"threadType\" value=\"reply\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>
                                <div class=\"uv-element-block collaborators\" style=\"display: none\">
                                    <label class=\"uv-field-label\">{{ 'Collaborators'|trans }}</label>
                                    <div class=\"uv-field-block\"></div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>

                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Agent'|trans }}</label>
                                                </div>

                                                <ul class=\"uv-agents-list\">
                                                    {% for agent in user_service.getAgentPartialDataCollection %}
                                                        <li data-id=\"{{ agent.email }}\">
                                                            <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                        </li>
                                                    {% endfor %}

                                                    <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                <option value=\"cc\">{{ 'CC'|trans }}</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"reply-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label>
                                        <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                                    </label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'After Reply'|trans }}</label>
                                                <ul>
                                                    <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                    <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-dropdown reply\">
                                        <div class=\"uv-btn uv-dropdown-other\">{{ 'Reply'|trans }} <span class=\"uv-icon-down-light\"></span></div>
                                        <div class=\"uv-dropdown-list uv-top-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Reply'|trans }}</label>
                                                <ul>
                                                    <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                    {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                        <li data-id=\"open\">{{ 'Submit And Open'|trans }}</li>
                                                        <li data-id=\"pending\">{{ 'Submit And Pending'|trans }}</li>
                                                        <li data-id=\"answered\">{{ 'Submit And Answered'|trans }}</li>
                                                        <li data-id=\"resolved\">{{ 'Submit And Resolved'|trans }}</li>
                                                        <li data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                    {% endif %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        {# Ticket Thread | Forward Thread #}
                        <div class=\"uv-tab-view\" id=\"forward\">
                            <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                <input name=\"threadType\" value=\"forward\" type=\"hidden\">
                                <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>

                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field\" type=\"text\" name=\"subject\">
                                    </div>
                                </div>

                                <div class=\"uv-element-block to\">
                                    <label class=\"uv-field-label\">{{ 'To'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <input class=\"uv-field uv-dropdown-other preloaded uv-to-message uv-manual-enter\" type=\"text\">

                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Agent'|trans }}</label>
                                            </div>

                                            <ul class=\"uv-agents-list\">
                                                {% for agent in user_service.getAgentPartialDataCollection %}
                                                    <li data-id=\"{{ agent.email }}\">
                                                        <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                    </li>
                                                {% endfor %}

                                                <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                            </ul>
                                        </div>

                                        <div class=\"to-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block cc-bcc\">
                                    <label>
                                        <div class=\"uv-checkbox\">
                                            <input type=\"checkbox\" class=\"cc-bcc-toggle\">
                                            <span class=\"uv-checkbox-view\"></span>
                                        </div>
                                        <span class=\"uv-checkbox-label\">CC/BCC</span>
                                    </label>
                                    <div class=\"uv-field-block\" style=\"display: none\">
                                        <div class=\"uv-group\">
                                            <input class=\"uv-group-field uv-dropdown-other preloaded uv-manual-enter\" type=\"text\">
                                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                                <div class=\"uv-dropdown-container\"><label>{{ 'Agent'|trans }}</label></div>

                                                <ul class=\"uv-agents-list\">
                                                    {% for agent in user_service.getAgentPartialDataCollection %}
                                                        <li data-id=\"{{ agent.email }}\">
                                                            <img src=\"{{ agent.smallThumbnail ? app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail : asset(default_agent_image_path) }}\"/> {{agent.name}}
                                                        </li>
                                                    {% endfor %}

                                                    <li class=\"uv-no-results\" style=\"display: none;\">{{ 'No result found'|trans }}</li>
                                                </ul>
                                            </div>
                                            <select class=\"uv-group-select cc-bcc-select\">
                                                <option value=\"bcc\">{{ 'BCC'|trans }}</option>
                                                <option value=\"cc\">{{ 'CC'|trans }}</option>
                                            </select>
                                        </div>

                                        <div class=\"cc-bcc-list\"></div>
                                    </div>
                                </div>

                                <div class=\"uv-element-block uv-element-block-textarea\">
                                    <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                    <div class=\"uv-field-block\">
                                        <textarea class=\"uv-field\" name=\"reply\" id=\"forward-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                    </div>
                                </div>

                                <div class=\"uv-element-block attachment-block\">
                                    <label><span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span></label>
                                </div>

                                <div class=\"uv-action-buttons\">
                                    <div class=\"uv-dropdown next-view\">
                                        <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                        <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'After Reply'|trans }}</label>
                                                <ul>
                                                    <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                    <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"uv-btn forward\">{{ 'Forward'|trans }}</div>
                                </div>
                            </form>
                        </div>

                        {# Ticket Thread | Add Note #}
                        {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_NOTE') %}
                            <div class=\"uv-tab-view\" id=\"note\">
                                <form enctype=\"multipart/form-data\" method=\"post\" action=\"{{ path('helpdesk_member_add_ticket_thread', {'ticketId': ticket.id }) }}\">
                                    <input name=\"threadType\" value=\"note\" type=\"hidden\">
                                    <input name=\"status\" value=\"\" type=\"hidden\" {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}class=\"reply-status\"{% endif %}>

                                    <div class=\"uv-element-block uv-element-block-textarea\">
                                        <label class=\"uv-field-label\">{{ 'Write a reply'|trans }}</label>
                                        <div class=\"uv-field-block\">
                                            <textarea class=\"uv-field\" name=\"reply\" id=\"note-area\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block attachment-block\">
                                        <label><span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span></label>
                                    </div>

                                    <div class=\"uv-action-buttons\">
                                        <div class=\"uv-dropdown next-view\">
                                            <input type=\"hidden\" name=\"nextView\" value=\"stay\"/>
                                            <div class=\"uv-dropdown-btn\" style=\"padding: 9px 27px 9px 10px;\">{{ 'Stay on ticket'|trans }}</div>
                                            <div class=\"uv-dropdown-list uv-top-left\" style=\"opacity: 1;\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'After Reply'|trans }}</label>
                                                    <ul>
                                                        <li data-value=\"stay\">{{ 'Stay on ticket'|trans }}</li>
                                                        <li data-value=\"redirect\">{{ 'Redirect to list'|trans }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"uv-dropdown reply\">
                                            <div class=\"uv-btn uv-dropdown-other\">{{ 'Reply'|trans}}<span class=\"uv-icon-down-light\"></span></div>

                                            <div class=\"uv-dropdown-list uv-top-left\">
                                                <div class=\"uv-dropdown-container\">
                                                    <label>{{ 'Add Note'|trans }}</label>
                                                    <ul>
                                                        <li data-id=\"\">{{ 'Submit'|trans }}</li>
                                                        {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                                            <li data-id=\"open\">{{ 'Submit And Open'|trans }}</li>
                                                            <li data-id=\"pending\">{{ 'Submit And Pending'|trans }}</li>
                                                            <li data-id=\"answered\">{{ 'Submit And Answered'|trans }}</li>
                                                            <li data-id=\"resolved\">{{ 'Submit And Resolved'|trans }}</li>
                                                            <li data-id=\"closed\">{{ 'Submit And Closed'|trans }}</li>
                                                        {% endif %}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>

            <!-- Bottom Action Block -->
            <div class=\"uv-ticket-fixed-region\">
                <div class=\"uv-ticket-fixed-region-lt\">
                    {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\QuickActionButtonCollection\").injectTemplates()|raw }}

                    {# <!-- Saved Replied-->
                    <div class=\"uv-dropdown saved-reply\">
                        <div class=\"uv-dropdown-btn\">{{ 'Saved Replies'|trans }}</div>
                        <div class=\"uv-dropdown-list uv-top-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Saved Replies'|trans }}</label>
                                <ul>
                                    <li data-id=\"\">
                                        <a href=\"{{ path('helpdesk_member_saved_replies') }}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'Create New'|trans }}</a>
                                    </li>
                                    {% for savedReply in ticket_service.getSavedReplies() %}
                                        <li data-id=\"{{ savedReply.id }}\">
                                            {{ savedReply.name }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //Saved Replied--> #}

                    {# <!--Code-->
                    <div class=\"uv-dropdown\">
                        <div class=\"uv-dropdown-btn\">{{ 'Prepared Responses'|trans }}</div>
                        <div class=\"uv-dropdown-list uv-top-left\">
                        <div class=\"uv-dropdown-container prepared-responses\">
                            <label>{{ 'Prepared Responses'|trans }}</label>
                            <ul>
                                <li>
                                    <a class=\"create-new\" href=\"{{path('prepare_response_action')}}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'Create New'|trans }}</a>
                                </li>
                                {% set preparedResponses = ticket_service.getManualWorkflow() %}
                                {% for workflow in preparedResponses %}
                                    <li>
                                        <a href=\"{{ path('helpdesk_member_ticket_prepared_response_xhr') }}/{{ ticket.id }}/{{ workflow.id }}\">
                                            {{ workflow.name }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!--//Code--> #}
                </div>

                <div class=\"uv-ticket-fixed-region-rt\"></div>
            </div>
            <!-- //Bottom Action Block -->
        </div>
    </div>

    {# Edit Ticket #}
    {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_TICKET') %}
        <div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"edit-ticket-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-wide\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>{{ 'Edit Ticket'|trans }}</h2>

                {# Edit Ticket Form #}
                <form method=\"post\" action=\"{{ path('helpdesk_member_update_ticket_details_xhr', {'ticketId': ticket.id}) }}\" id=\"edit-ticket-form\">
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"text\" name=\"subject\" class=\"uv-field\" value=\"{{ ticket.subject }}\" />
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Reply'|trans }}</label>
                        <div class=\"uv-field-block\">
                            {% if initialThread.message|striptags == initialThread.message %}
                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">{{ initialThread.message|nl2br }}</textarea>
                            %} {% else %}
                                <textarea name=\"reply\" id=\"uv-edit-create-thread\" class=\"uv-field\">{{ initialThread.message|raw }}</textarea>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"uv-pop-up-actions\">
                        <input class=\"uv-btn update\" href=\"#\" value=\"Update\" type=\"submit\">
                        <input class=\"uv-btn cancel\" href=\"#\" value=\"Discard\" type=\"button\">
                    </div>
                </form>
            </div>
        </div>
    {% endif %}

    {{ uvdesk_extensibles.getRegisteredComponent(\"Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Tickets\\\\WidgetCollection\").embedSideFilterContent()|raw }}
{% endblock %}

{% block footer %}
    {{ parent() }}

    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
    {{ include(\"@UVDeskCoreFramework/Templates/tinyMCE.html.twig\") }}

    <script id=\"thread_list_empty_tmp\" type=\"text/template\">
        <div class=\"uv-no-threads\">{{ 'Nothing interesting here...'|trans }}</div>
    </script>

    <script> 
        \$(document).ready(function() {
            \$(\"#filterSavedreplies\").on(\"keyup\", function() {
                if (this.value.length && this.value.length != '') {
                    var that = this;
                    \$(\"#listSavedReplies li\").hide().filter(function() {
                        return \$(this).html().toLowerCase().indexOf(that.value.toLowerCase()) !== -1;
                    }).show();
                } else {
                    \$(\"#listSavedReplies li\").show()
                }
            });

            \$(\".uv-dropdown-btn\").click(function(event) {
                setTimeout(function() {
                    \$(\".uv-search-inline\").focus();
                }, 100);
            });
        });
    </script>

    <script id=\"thread_list_item_tmp\" type=\"text/template\">
        <div class=\"uv-ticket-strip\">
            <span>
                <% if(typeof(mailStatus) != 'undefined' && mailStatus) { %>
                    <a href=\"https://support.uvdesk.com/en/blog/uvdesk-ticket-delivery-status\" target=\"_blank\">
                        <span class=\"uv-mail-status uv-mail-<%- mailStatus.split(',')[0] %>\" <% if(mailStatus !== 'pending') { %>data-toggle=\"tooltip\" data-placement=\"right\" title=\"{{ 'Mail status:'|trans }} <%- mailStatus.split(',')[0] %> <% if(mailStatus.split(',').length > 1) { print('Reason:' + mailStatus.split(',')[1] ); } %> \"<% } %> ></span>
            </a>
            <% } %>
            <span class=\"timeago uv-margin-0\" data-timestamp=\"<%- timestamp %>\" title=\"<%- formatedCreatedAt %>\">
                    <%- formatedCreatedAt %>
                </span>
            - <%- fullname %>
            <span class=\"uv-ticket-strip-label\">
                <% if(threadType == 'reply') { %>
                    {{ 'replied'|trans }}
                <% } else if(threadType == 'note') { %>
                    {{ 'added note'|trans }}
                <% } else if(threadType == 'forward') { %>
                    {{ 'forwarded'|trans }}
                <% } %>
                - <a href=\"#thread/<%- id %>\" id=\"thread<%- id %>\" class=\"copy-thread-link\">#<%- id %></a>
                </span>
            </span>

            <% if((replyTo && threadType ==  'forward') || cc || bcc) { %>
                <div class=\"uv-ticket-strip\">
                    <% if(replyTo && threadType ==  'forward') { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'TO'|trans }} -</span> <%- replyTo %></span>
                    <% } if(cc) { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'CC'|trans }} -</span> <%- cc %></span>
                    <% } if(bcc) { %>
                    <span><span class=\"uv-ticket-strip-label\">{{ 'BCC'|trans }} -</span> <%- bcc %></span>
                    <% } %>
                </div>
            <% } %>
        </div>

        <div class=\"uv-ticket-strip uv-margin-top-5\" <% if(!bookmark && !isLocked) { %>style=\"display: none\"<% } %> >
            <span <% if(!bookmark) { %>style=\"display: none\"<% } %> >
                    <span class=\"uv-icon-pinned\"></span>
                    {{ 'Pinned'|trans }}
                    </span>
            <span <% if(!isLocked) { %>style=\"display: none\"<% } %> >
                <span class=\"uv-icon-locked\"></span>
                {{ 'Locked'|trans }}
            </span>
        </div>
        <div class=\"uv-ticket-main-lt\">
            <span class=\"uv-thread-action\">
                <span class=\"uv-icon-ellipsis uv-dropdown-other\"></span>
                <div class=\"uv-dropdown-list uv-bottom-left\">
                    <div class=\"uv-dropdown-container\">
                        <ul>
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_EDIT_THREAD_NOTE') %}
                                <% if (userType != 'system' && userType != 'System') { %>
                                    <li data-action=\"edit\">{{ 'Edit Thread'|trans }}</li>
                                <% } %>
                            {% endif %}
                            {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_THREAD_NOTE') %}
                                <li data-action=\"delete\">{{ 'Delete Thread'|trans }}</li>
                            {% endif %}
                            <li data-action=\"forward\">{{ 'Forward'|trans }}</li>
                            <% if(bookmark) { %>
                                <li data-action=\"pin\" data-id=\"1\">{{ 'Unpin Thread'|trans }}</li>
                            <% } else { %>
                                <li data-action=\"pin\" data-id=\"0\">{{ 'Pin Thread'|trans }}</li>
                            <% } %>
                            <% if(threadType != 'note') { %>
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_MANAGE_LOCK_AND_UNLOCK_THREAD') %}
                                    <% if(isLocked) { %>
                                        <li data-action=\"lock\" data-id=\"1\">{{ 'Unlock Thread'|trans }}</li>
                                    <% } else { %>
                                        <li data-action=\"lock\" data-id=\"0\">{{ 'Lock Thread'|trans }}</li>
                                    <% } %>
                                {% endif %}
                            <% } %>
                            <li style=\"display: none;\" data-action=\"translate\">{{ 'Translate Thread'|trans }}</li>
                        </ul>
                    </div>
                </div>
            </span>
            <span class=\"p-relative\">
                
            </span>
            <% if (userType != 'system' && userType != 'System') { %>
                <% if(user && user.smallThumbnail != null) { %>
                    <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%- user.smallThumbnail %>\" />
                <% } else { %>
                    <img src=\"<% if(userType == 'agent') { %> {{ asset(default_agent_image_path) }} <% } else { %> {{ asset(default_customer_image_path) }} <% } %>\" />
                <% } %>
            <% } else { %>
                <img src=\"{{ asset(default_helpdesk_image_path) }}\" />
            <% } %>
        </div>
        <div class=\"uv-ticket-main-rt\">
            <% if(userType == 'customer') { %>
                <a <% if(user) { %>href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else if(userType == 'agent') { %>
                <a <% if(user) { %>href=\"{{ path('helpdesk_member_account') }}/<%- user.id %>\"<% } %> class=\"uv-ticket-member-name\">
                <%- fullname %>
                </a>
            <% } else { %>
                <span class=\"uv-ticket-member-name\">
                    <%- fullname %>
                </span>
            <% } %>

            <!-- Message Block -->
            <div class=\"message\">
                <%= reply %>
            </div>

            <!-- Attachment Block -->
            <% if(attachments.length) { %>
            <div class=\"uv-ticket-uploads\">
                <h4>{{ 'Uploaded Files'|trans }}</h4>
                <div class=\"uv-ticket-uploads-strip\">
                    <% _.each(attachments, function(file) { %>
                    <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                        <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                    </a>
                    <% }) %>
                </div>

                <% if (attachments.length > 1) { %>
                <div class=\"thread-attachments-zip pull-left\">
                    <div class=\"uv-upload-actions\">
                        <a href=\"#\" class=\"uv-open-in-files\" data-thread=\"<%- id %>\" style=\"display: none\"><span class=\"uv-icon-open-in-files\"></span>{{ 'Open in Files'|trans }}</a>
                        <% if(attachments.length > 0) { %>
                        <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%- id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                        <% } %>
                    </div>
                </div>
                <% } %>

            </div>
            <% } %>
        </div>
    </script>

    <script id=\"edit_thread_tmp\" type=\"text/template\">
        <div class=\"thread-edit-container\">
            <div class=\"uv-element-block uv-element-block-textarea\">
                <div class=\"uv-field-block\">
                    <textarea id=\"uv-edit-thread\">
                    </textarea>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn cancel-edit\" type=\"button\">{{ 'Cancel'|trans }}</a>
                <a class=\"uv-btn saveThread\" type=\"button\" style=\"margin-right: 10px;\">{{ 'Update'|trans }}</a>
            </div>
        </div>
    </script>

    <script id=\"ticket_quick_navigation_tmp\" type=\"text/template\">
        <% if(prev) { %>
            <a class=\"uv-btn-stroke\" href=\"{{ path('helpdesk_member_ticket') }}/<%- prev %>\">
                <span class=\"uv-icon-previous\"></span>
                {{ 'Previous Ticket'|trans }}
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                <span class=\"uv-icon-previous\"></span>
                {{ 'Previous Ticket'|trans }}
            </a>
        <% } %>

        <% if(next) { %>
            <a class=\"uv-btn-stroke\" href=\"{{ path('helpdesk_member_ticket') }}/<%- next %>\">
                {{ 'Next Ticket'|trans }}
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } else { %>
            <a class=\"uv-btn-stroke\" disabled=\"disabled\">
                {{ 'Next Ticket'|trans }}
                <span class=\"uv-icon-next\"></span>
            </a>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        uvdesk = {
            ticket: {}
        };

        var ticketApp = {};

        viewerImages = function() {
            if (typeof(\$().viewer == 'function')) {
                \$('.uv-ticket-uploads .uv-ticket-uploads-strip').viewer({
                    'url': 'data-url',
                    'downloadBase': \"{{ path('helpdesk_member_ticket_download_attachment') }}\",
                    'download': 'data-download',
                });
            }
        };

        \$(function () {
            var threadIds = [];
            viewerImages();

            _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute : \"id\",
                urlRoot : \"{{ path('helpdesk_member_update_ticket_attributes_xhr') }}\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: 'Please enter a valid email'
                    }],
                    'subject' : {
                        required : true,
                        msg : '{{ \"This field is mandatory\" | trans}}'
                    },
                    'reply' : {
                        fn: function(value) {
                            var content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            
                            return true;
                        },
                        msg : '{{ \"This field is mandatory\" | trans}}'
                    }
                },
            });

            // Thread Model
            var ThreadModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    hasTask : 0,
                    task: null
                }
            });

            // Customer Model
            var CustomerModel = Backbone.Model.extend({
                validation: {
                    'name': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" }}'
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: '{{ \"This field must have characters only\"}}'
                    }],
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Email address is invalid\" | trans}}'
                    }],
                    'contactNumber': function(value) {
                        if(value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return 'Contact number is invalid';
                        }
                    }
                },
                urlRoot : \"{{ path('helpdesk_member_manage_customer_account') }}\"
            });

            // Ticket Collaborator Model
            var CollaboratorModel = Backbone.Model.extend({
                idAttribute : \"id\",
                validation: {
                    'email': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    },{
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Please enter a valid email\" | trans}}'
                    }]
                },
                defaults : {
                    ticketId : {{ ticket.id }},
                    email: ''
                },
                parse: function (resp, options) {
                    return resp.collaborator;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_manage_collaborators_xhr') }}\"
            });

            // Ticket Tag Model
            var TagModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : {{ ticket.id }}
                },
                parse: function (resp, options) {
                    return resp.tag;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_create_tag_xhr') }}\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute : \"id\",
                defaults : {
                    ticketId : {{ ticket.id }}
                },
                parse: function (resp, options) {
                    return resp.label;
                },
                urlRoot : \"{{ path('helpdesk_member_ticket_add_label_xhr') }}\"
            });

            // Ticket Thread Collection
            var ThreadCollection = AppCollection.extend({
                model : ThreadModel,
                mode: \"infinite\",
                url : \"{{ path('helpdesk_member_thread_collection_xhr', {'ticketId': ticket.id}) }}\",
                firstScrollCheck: false,
                threadRequestedId: false,
                template : \$(\"#thread_list_empty_tmp\").html(),
                parseRecords: function (resp, options) {
                    return resp.threads;
                },
                syncData : function() {
                    type = \$(\".uv-ticket-action-bar-lt .uv-tabs .uv-tab-active\").attr('data-type')
                    var self = this;
                    var data = {
                        threadType: type
                    };

                    if(this.threadRequestedId)
                        data.threadRequestedId = this.threadRequestedId;

                    app.appView.showLoader()
                    this.fetch({
                        data : data,
                        remove: false,
                        success: function(model, response) {
                            app.appView.hideLoader();
                            self.threadRequestedId = false;
                            pagination.renderPagination(response.pagination);
                            threadCollection.state.currentPage = parseInt(response.pagination.current) + 1;
                            if(response.pagination.totalCount <= 0){
                                this.\$('.uv-ticket-wrapper.thread-list').html(self.template);
                            }
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    }).done(function(){
                        viewerImages();
                        if(!self.firstScrollCheck){
                            self.firstScrollCheck = true;
                            var fragment = Backbone.history.fragment.trim();
                            if(fragment == '') {
                                router.scrollPage('#reply');
                            } else
                                router.scrollPage('#' + fragment.replace('thread/', 'thread'));
                        }
                    });
                }
            });

            // Ticket Collaborator Collection
            var CollaboratorCollection = Backbone.PageableCollection.extend({
                model : CollaboratorModel
            });

            // Ticket Tag Collection
            var TagCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isTagExist : function(name) {
                    var flag = 1;
                    _.each(tagCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);

                    return flag;
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.PageableCollection.extend({
                model : TagModel,
                isLabelExist : function(name) {
                    var flag = 1;
                    _.each(labelCollection.models, function (item) {
                        if(item.get('name').toUpperCase() == name.toUpperCase())
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Customer Form View
            var CustomerForm = Backbone.View.extend({
                events : {
                    'click .uv-btn.update-btn' : \"saveCustomer\",
                    'blur input': 'formChanged',
                    'click .cancel-btn': 'backToInfo',
                    'click .uv-aside-back': 'backToInfo'
                },
                initialize : function() {
                    Backbone.Validation.bind(this);
                },
                formChanged: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                saveCustomer: function (e) {
                    e.preventDefault();
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
                    this.model.set(this.\$el.find('form').serializeObject());
                    self = this;
                    if (this.model.isValid(true)) {
                        app.appView.showLoader();
                        currentElement.attr('disabled', 'disabled');
                        this.model.save({}, {
                            success: function (model, response, options) {
                                app.appView.hideLoader();
                                currentElement.removeAttr(\"disabled\");
                                if (response.alertClass == \"success\") {
                                    app.appView.renderResponseAlert(response);
                                    \$('.uv-aside-customer-info').html(\"<span>\" + self.model.attributes.name + \"</span><span>\" + self.model.attributes.email + \"</span><span>\" + self.model.attributes.contactNumber + \"</span><span class='uv-customize'></span>\")
                                    self.backToInfo();
                                } else if (response.errors) {
                                    self.addErrors(JSON.parse(response.errors));
                                } else if (response.alertMessage) {
                                    app.appView.renderResponseAlert(response);
                                }
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(warningResponse);
                            }
                        });
                    }
                },
                addErrors: function(jsonContext) {
                    for (var field in jsonContext) {
                        Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                    }
                },
                backToInfo: function(e) {
                    if (e)
                        e.preventDefault()

                    \$('.uv-main-info-update-block').hide()
                    \$('.uv-main-info-block').show()
                },
            });

            // Ticket View
            var TicketView = Backbone.View.extend({
                el: \$('.uv-wrapper'),
                stopDraftSaveFlag: 0,
                events: {
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"spam\"], .uv-ticket-action .uv-dropdown-list li[data-action=\"closed\"]': 'markSpamAndClosed',
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list li': 'editTicketProperty',
                    'click .uv-aside-customer-info .uv-customize': 'showCustomerUpdateBlock',
                    'click .uv-ticket-head .uv-star-large': 'updateStar',
                    'click .uv-ticket-action-bar .uv-tabs li': 'filterThread',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-element-block.collaborators .uv-btn-tag': 'removeCcCollaborator',
                    'keypress .uv-element-block.to .uv-dropdown-other': 'addToInput',
                    'click .uv-element-block.to .uv-dropdown-list li': 'addTo',
                    'click .to-list .uv-btn-tag': 'removeTo',
                    'change .uv-element-block.cc-bcc .cc-bcc-toggle': 'showCcBccBlock',
                    'keypress .uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other': 'addCcBccInput',
                    'click .uv-element-block.cc-bcc .uv-dropdown-list li': 'addCcBcc',
                    'click .cc-bcc-list .uv-btn-tag, .to-list .uv-btn-tag': 'removeEmail',
                    'click .next-view .uv-dropdown-list li': 'setNextView',
                    'click .uv-dropdown.reply .uv-dropdown-list li, .uv-btn.forward': 'validateForm',
                    'click #edit-ticket-modal .uv-btn.update': 'updateTicket',
                    'click .message .uv-icon-ellipsis': 'showReplyQuote',
                    'input .uv-aside-brick .uv-field.uv-dropdown-other': 'searchFilterXhr',
                    'click .uv-dropdown-container.prepared-responses a:not(.create-new)': 'confirmPreparedResponses',

                    'click .uv-header-fix': 'fixheader',
                    'click .uv-ticket-action .uv-dropdown-list li[data-action=\"print\"]': 'printTicket',
                    'blur .uv-manual-enter': 'enterManualAdd',
                },
                ticketNavigationTemplate : _.template(\$(\"#ticket_quick_navigation_tmp\").html()),
                loaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                targetPreparedResponseUrl: '',
                initialize: function() {
                    Backbone.Validation.bind(this);
                    InitTinyMce('#uv-edit-create-thread');
                    \$('.uv-ticket-fixed-region .uv-ticket-fixed-region-rt').html(this.ticketNavigationTemplate(ticketNavigation))
                    var threadTab = localStorage.getItem(\"threadTab\");
                    if (threadTab){
                        \$('.uv-ticket-action-bar-lt .uv-tabs li').removeClass('uv-tab-active');
                        \$('.uv-ticket-action-bar-lt .uv-tabs [data-type=\"' + threadTab + '\"]').addClass('uv-tab-active');
                    }
                    nextView = localStorage.getItem(\"nextView\");
                    if (nextView) {
                        \$(\".next-view input\").val(nextView)
                        \$(\".next-view .uv-dropdown-btn\").text(\$(\"#reply .next-view .uv-dropdown-list li[data-value='\" + nextView + \"']\").text())
                    }
                    if (!localStorage.getItem('ticketTour')) {
                        \$('.uv-ticket-tour').show()
                    }
                    this.fixHeaderInit();
                },
                printTicket: function(e) {
                    window.print();
                },
                enterManualAdd: function(e) {
                    var target = \$(e.target);
                    if (target.val()) {
                        var e = \$.Event(\"keypress\");
                        e.which = 13; //choose the one you want
                        target.trigger(e);
                    }
                },
                fixheader: function(e){
                    e.preventDefault();
                    var header = localStorage.getItem(\"fixHeader\");
                    header = !(header == 'true');
                    localStorage.setItem(\"fixHeader\", header);
                    this.fixHeaderInit();
                },
                fixHeaderInit: function(){
                    var header = localStorage.getItem(\"fixHeader\");
                    if (header == 'true') {
                        \$('a.uv-icon-pin').addClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').addClass('uv-ticket-action-bar-fixed');
                    } else {
                        \$('a.uv-icon-pin').removeClass('uv-icon-pinned');
                        \$('.uv-ticket-action-bar').removeClass('uv-ticket-action-bar-fixed');
                    }
                },
                markSpamAndClosed: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var value = currentElement.attr('data-index');
                    \$(\".uv-aside-select .uv-dropdown-list ul.status li[data-index='\" + value + \"']\").trigger('click')
                },
                editTicketProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
                    if(uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
                        this.model.save({attribute: field, value: value, id: this.model.id}, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                if (field == 'priority') {
                                    uvSelect.find('.uv-list-ticket-priority').attr('style', 'background:' + currentElement.attr('data-color'));
                                } else if (field == 'agent') {
                                    \$('.uv-ticket-strip .agent-info').show()
                                    \$('.uv-ticket-strip .agent-info .name').text(name)
                                }
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
                    }
                },
                showCustomerUpdateBlock: function() {
                    \$('.uv-main-info-update-block').show()
                    \$('.uv-main-info-block').hide()
                },
                updateStar: function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    currentElement.toggleClass('uv-star-active')
                    this.model.save({id: this.model.id}, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_bookmark_ticket_xhr') }}\",
                        success: function (model, response, options) {
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                filterThread: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if(type = currentElement.attr('data-type')) {
                        localStorage.setItem(\"threadTab\", type);
                        if (type != 'all')
                            \$('.uv-ticket-main.create').hide()
                        else
                            \$('.uv-ticket-main.create').show()
                        \$('.uv-ticket-wrapper.thread-list').html('')
                        models = []
                        threadCollection.each(function(model) {
                            models.push(model)
                        })
                        total = threadCollection.models.length;
                        count = 0;
                        if (total) {
                            _.each(models, function (model) {
                                threadCollection.remove(model)
                                count++;
                                if(total == count) {
                                    threadCollection.reset()
                                    threadCollection.state.currentPage = 1;
                                    threadCollection.syncData()
                                }
                            });
                        } else {
                            threadCollection.reset()
                            threadCollection.state.currentPage = 1;
                            threadCollection.syncData()
                        }
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    if (this.model.attributes.isTrashed)
                        window.location.href = \"{{ path('helpdesk_member_delete_ticket', {'ticketId': ticket.id}) }}\";
                    else
                        window.location.href = \"{{ path('helpdesk_member_trash_ticket', {'ticketId': ticket.id}) }}\";
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
                    Backbone.\$(e.currentTarget).parent().remove();
                    var collaboratorContainer = \$('.uv-element-block.collaborators');
                    if (!collaboratorContainer.find('.uv-btn-tag').length)
                        collaboratorContainer.hide()
                },
                addToInput: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    var currentTab = inputElement.parents('.uv-tab-view');
                    var email = inputElement.val().trim();
                    if (e.which === 13 && email) {
                        e.preventDefault()
                        if (!this.model.preValidate({name: 'email', email: email})) {
                            inputElement.val('').trigger('input')
                            inputElement.removeClass('uv-dropdown-btn-active')
                            inputElement.siblings('.uv-dropdown-list').hide()
                            if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                                currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                            }
                        }
                    }
                },
                addTo: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    if (!currentTab.find(\".to-list input[value='\" + email + \"'].to\").length) {
                        currentTab.find('.to-list').append(\"<span><input type='hidden' name='to[]' value='\" + email + \"' class='to'/><a class='uv-btn-tag' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \"</span></a></span>\")
                    }
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
                        if (!this.model.preValidate({name: 'email', email: email})) {
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
                addCcBcc: function(e) {
                    var currentTab = Backbone.\$(e.currentTarget).parents('.uv-tab-view');
                    var email =  Backbone.\$(e.currentTarget).attr('data-id');
                    type = currentTab.find('.cc-bcc-select option:selected').text()
                    inputName = currentTab.find('.cc-bcc-select').val()
                    if (!currentTab.find(\".cc-bcc-list input[value='\" + email + \"'].\" + inputName).length) {
                        currentTab.find('.uv-element-block.cc-bcc .uv-group-field.uv-dropdown-other').val('').trigger('input')
                        currentTab.find('.cc-bcc-list').append(\"<span><input type='hidden' name='\" + inputName + \"[]' value='\" + email + \"' class='\" + inputName + \"'/><a class=uv-btn-tag uv-lowercase' href='#'><span class='uv-icon-remove-dark-before'></span>\" + email + \" : <span class='uv-uppercase'>\" + type + \"</span></a></span>\")
                    }
                },
                removeEmail: function(e) {
                    e.preventDefault()
                    Backbone.\$(e.currentTarget).parent().remove();
                },
                setNextView: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var nextView = currentElement.attr('data-value');
                    localStorage.setItem(\"nextView\", nextView);
                    \$(\".next-view input\").val(nextView)
                    \$(\".next-view .uv-dropdown-btn\").text(currentElement.text())
                },
                validateForm : function(e) {
                    e.preventDefault();
                    var element = Backbone.\$(e.currentTarget);
                    formType = element.parents('.uv-tab-view.uv-tab-view-active').attr('id');
                    form = element.parents('form');
                    form.find('.reply-status').val(element.attr('data-id'));
                    form.find('.uv-field-message').remove()

                    var html = tinyMCE.get(formType + \"-area\").getContent();
                    if (app.appView.htmlText(html) != '' || -1 != html.indexOf('<img')) {
                        if (formType == 'forward') {
                            if (!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\")
                            } else {
                                this.stopDraftSaveFlag = 1;

                                app.appView.showLoader();
                                tinyMCE.activeEditor.uploadImages(function(response) {
                                    app.appView.hideLoader();

                                    form.submit();
                                    \$('.uv-btn.forward').attr('disabled', 'disabled');
                                });
                            }
                        } else {
                            this.stopDraftSaveFlag = 1;
                            if (localStorage) {
                                localStorage.setItem(\"threadTab\", \"all\");
                            }

                            app.appView.showLoader();
                            tinyMCE.activeEditor.uploadImages(function(response) {
                                app.appView.hideLoader();

                                form.submit();
                                \$('.uv-dropdown.reply').find('.uv-btn').attr('disabled', 'disabled');
                            });
                        }
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                        if (formType == 'forward') {
                            if(!form.find(\".to-list input.to\").length) {
                                \$('.uv-element-block.to').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\")
                            }
                        }
                    }
                },
                updateTicket: function(e) {
                    e.preventDefault();
                    this.model.set(\$('#edit-ticket-modal form').serializeObject());
                    if (this.model.isValid(['subject', 'reply'])) {
                        \$('#edit-ticket-modal form').find('.uv-btn').attr('disabled', 'disabled');
                        \$('#edit-ticket-modal form').submit();
                    }
                },
                showReplyQuote: function(e) {
                    Backbone.\$(e.currentTarget).next().toggle();
                },
                searchFilterXhr: _.debounce(function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;
                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if(self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"{{ path('helpdesk_member_ticket_search_filter_options') }}\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-type'), \"query\": currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show();
                                    parent.find('.uv-no-results').disabled = true;
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").show();

                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                },1000)
            });

            // Ticket Thread View
            var ThreadItem = Backbone.View.extend({
                tagName : \"div\",
                className : \"uv-ticket-main\",
                template : _.template(\$(\"#thread_list_item_tmp\").html()),
                editThreadTemplate : _.template(\$(\"#edit_thread_tmp\").html()),
                events : {
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"delete\"]': 'confirmRemove',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"lock\"]': 'lockAndUnlockThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"pin\"]': 'pinThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"mark\"]': 'markForTask',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"forward\"]' : 'forwardThread',
                    'click .uv-thread-action .uv-dropdown-list li[data-action=\"edit\"]' : 'editThread',
                    'click .uv-btn.cancel-edit' : 'cancelEdit',
                    'click .uv-btn.saveThread' : 'updateThread',
                    'click .copy-thread-link' : 'copyThreadLink',
                    'blur .input-copy-thread-link': 'removeCopyThreadLink'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    this.\$el.addClass(\"thread-\" + this.model.id)
                    if (this.model.attributes.threadType == 'note')
                        this.\$el.addClass('uv-ticket-note')
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        var self = this;
                        {# threadCollection.models.remove(this.model); #}
                        threadCollection.models = threadCollection.models.filter(thread => {
                            if(thread.id == self.model.id) {
                                return false;
                            }

                            return true;
                        });
                        this.remove();
                        threadCollection.syncData();
                        app.appView.renderResponseAlert(response);
                    }
                },
                confirmRemove: function(e) {
                    app.appView.openConfirmModal(this);
                },
                removeItem : function() {
                    self = this;
                    var index = threadIds.indexOf(this.model.id);
                    if (index > -1)
                        threadIds.splice(index, 1);
                    app.appView.showLoader();
                    this.model.destroy({
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        data : { 'ticketId' : ticketModel.attributes.id },
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                lockAndUnlockThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var isLocked = 0;
                    if(this.model.get('isLocked')) {
                        this.model.set('isLocked', 0);
                        currentElement.attr('data-id', isLocked).text(\"{{ 'Lock Thread'|trans }}\");
                    } else {
                        isLocked = 1;
                        this.model.set('isLocked', 1);
                        currentElement.attr('data-id', isLocked).text(\"{{ 'Unlock Thread'|trans }}\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        isLocked: isLocked,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'lock'
                    }, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                pinThread :function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    var bookmark = 0;
                    if(this.model.get('bookmark')) {
                        this.model.set('bookmark', 0);
                        currentElement.attr('data-id', bookmark).text(\"{{ 'Pin Thread'|trans }}\");
                    } else {
                        bookmark = 1;
                        this.model.set('bookmark', 1);
                        currentElement.attr('data-id', bookmark).text(\"{{ 'Unpin Thread'|trans }}\");
                    }
                    app.appView.showLoader();
                    this.model.save({
                        bookmark: bookmark,
                        id: this.model.id,
                        ticketId: ticketModel.attributes.id,
                        updateType: 'bookmark'
                    }, {
                        patch: true,
                        url : \"{{ path('helpdesk_member_thread_xhr') }}/\" + this.model.id,
                        success : function (model, response, options) {
                            self.toggleThreadPropertyIcon()
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
                forwardThread : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    tinymce.get('forward-area').setContent(this.model.attributes.reply);
                    \$('#forward-area').parent().find('img').removeAttr('crossorigin');
                    \$(\".uv-tabs li[for='forward']\").trigger('click');

                    \$('.uv-ticket-scroll-region').animate({
                        scrollTop: \$('#default').outerHeight()
                    }, 'slow');
                },
                cancelEdit : function(e) {
                    this.initEditThread();
                    tinymce.get('uv-edit-thread').destroy()
                },
                editThread : function(e) {
                    \$('.thread-edit-container .cancel-edit').trigger('click');
                    this.initEditThread();
                    this.\$el.find('.message').hide().after(this.editThreadTemplate());
                    this.\$el.find('.uv-ticket-uploads').hide()

                    InitTinyMce('#uv-edit-thread');
                    tinymce.get('uv-edit-thread').setContent(this.model.attributes.reply);
                    this.\$el.find('img').removeAttr('crossorigin');
                },
                initEditThread: function() {
                    \$('.thread-edit-container').remove();
                    messageElement = this.\$el.find('.message');
                    messageElement.show();
                    this.\$el.find('.uv-ticket-uploads').show()
                },
                updateThread : function(e) {
                    e.preventDefault();
                    var currentElement = Backbone.\$(e.currentTarget);
                    parent = currentElement.parents('.thread-edit-container')
                    parent.find('.uv-field-message').remove()

                    var html = tinyMCE.get(\"uv-edit-thread\").getContent();
                    if(app.appView.stripHTML(html) != '') {
                        var self = this;
                        currentElement.attr(\"disabled\", \"disabled\");
                        this.model.set('reply', html);
                        app.appView.showLoader()
                        this.model.save({}, {
                            url : \"{{ path('helpdesk_member_thread_update_xhr') }}/\" + this.model.id,
                            success : function (model, response, options) {
                                app.appView.hideLoader()
                                messageElement = self.\$el.find('.message');
                                if(response.alertClass == 'success') {
                                    messageElement.html(self.model.attributes.reply).show();
                                    messageElement.find('.uv-icon-ellipsis').remove();
                                    messageElement.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                                }

                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                self.initEditThread();
                                tinymce.get('uv-edit-thread').destroy()
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;
                                app.appView.hideLoader()
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    } else {
                        this.\$el.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    }
                },
                toggleCreateTaskBar : function() {
                    if(threadIds.length) {
                        \$(\"#uv-task-view\").css('right', '0px');
                        \$(\"#uv-task-view .uv-create-task\").show()
                        \$(\"#uv-task-view .uv-task-list\").hide()
                    } else {
                        \$(\"#uv-task-view\").css('right', '-300px');
                        \$(\"#uv-task-view .uv-create-task\").hide()
                        \$(\"#uv-task-view .uv-task-list\").show()
                    }
                },
                copyThreadLink: function(e){
                    _.delay(function(){
                        \$(e.currentTarget).before('<input type=\"text\" class=\"input-copy-thread-link uv-field\" value=\"' + window.location.href + '\"/>');
                        \$(e.currentTarget).prev().focus().select();
                    }, 100);
                },
                removeCopyThreadLink: function(e){
                    \$(e.currentTarget).remove();
                },
                toggleThreadPropertyIcon: function(e) {
                    if(jQuery.inArray(this.model.id, threadIds) !== -1 || this.model.get('bookmark') || this.model.get('isLocked')) {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').show()
                    } else {
                        this.\$el.find('.uv-icon-pinned').parents('.uv-ticket-strip').hide()
                    }

                    if(jQuery.inArray(this.model.id, threadIds) !== -1)
                        this.\$el.find('.uv-icon-marked-task').parent().show()
                    else
                        this.\$el.find('.uv-icon-marked-task').parent().hide()

                    if(this.model.get('bookmark'))
                        this.\$el.find('.uv-icon-pinned').parent().show()
                    else
                        this.\$el.find('.uv-icon-pinned').parent().hide()

                    if(this.model.get('isLocked'))
                        this.\$el.find('.uv-icon-locked').parent().show()
                    else
                        this.\$el.find('.uv-icon-locked').parent().hide()
                }
            });

            // Ticket Thread List
            var ThreadList = Backbone.View.extend({
                el : \$(\".thread-list\"),
                initialize : function() {
                    this.listenTo(threadCollection.fullCollection, \"add\", this.renderThread);
                },
                renderThread : function (item) {
                    var threadItem = new ThreadItem({
                        model: item
                    });
                    if(item.id < threadCollection.fullCollection.at(0).id)
                        this.\$el.prepend(threadItem.render().el);
                    else
                        this.\$el.append(threadItem.render().el);
                    threadItem.\$el.find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    //emojifyRun();
                    this.\$el.find('img').removeAttr('crossorigin');
                    this.\$el.find('div.message a').attr('target', '_blank');
                    app.appView.relativeTime();
                }
            });

            // Ticket Pagination View
            var Pagination = Backbone.View.extend({
                el: \$('.uv-ticket-accordion'),
                events: {
                    'click .uv-ticket-count-stat': 'loadMore',
                },
                renderPagination: function(pagination) {
                    if(pagination.totalCount - pagination.lastItemNumber > 0 && pagination.lastItemNumber > 0) {
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

            // Ticket collaborator Item View
            var CollaboratorItem = Backbone.View.extend({
                tagName : \"a\",
                className: 'uv-btn-tag',
                template : _.template(\"{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_COLLABORATOR_FROM_TICKET') %}<span class='uv-tag'><span class='uv-icon-remove-dark-before'></span><%- name %></span>{% else %}<span class='uv-tag-delete'><%- name %></span>{% endif %}\"),
                events : {
                    'click .uv-tag' : 'confirmRemove'
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));
                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem: function() {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
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
                                if(url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if(xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    {% endif %}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        app.appView.openConfirmModal(this);
                    {% endif %}
                }
            });

            // Ticket Collaborator View
            var CollaboratorList = Backbone.View.extend({
                el : \$(\".collaborator-list-block\"),
                events : {
                    'keypress .uv-field' : 'addCollaborator',
                    'focusout .uv-field' : 'removeErrorClass'
                },
                initialize : function() {
                    //Backbone.Validation.bind(this);
                },
                render : function() {
                    this.\$el.find(\".collaborator-list\").html('');
                    var self = this;
                    collaboratorOptionHtml = '';

                    if(collaboratorCollection.length) {
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
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_COLLABORATOR_TO_TICKET') %}
                        var inputElement = Backbone.\$(e.currentTarget);
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                        var text = inputElement.val().trim();

                        if (e.which === 13 && text) {
                            this.model = new CollaboratorModel();
                            self = this;
                            this.model.set({email: text})

                            if(this.model.isValid(true)) {
                                app.appView.showLoader();
                                this.model.save({},{
                                    success : function (model, response, options) {
                                        inputElement.val('');
                                        if(response.alertClass == \"success\") {
                                            collaboratorCollection.add(model);
                                        }
                                        self.render();
                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    },
                                    error: function (model, xhr, options) {
                                        if(url = xhr.getResponseHeader('Location'))
                                            window.location = url;
                                        var response = warningResponse;
                                        if(xhr.responseJSON)
                                            response = xhr.responseJSON;

                                        app.appView.hideLoader();
                                        app.appView.renderResponseAlert(response);
                                    }
                                });
                            } else {
                                inputElement.addClass('uv-field-error');
                                if(text)
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Email address is invalid'|trans }}</span>\");
                            }
                        }
                    {% endif %}
                }
            });


            // Ticket Tag Item View
            var TagItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-tag\",
                template : _.template(\"<span class='uv-tag'>{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}<span class='uv-icon-remove-dark-before'></span>{% endif %}<%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if(response.alertMessage != undefined) {
                        tagListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
                    self = this;
                    app.appView.showLoader();
                    this.model.destroy({
                        data : { 'ticketId' : ticketModel.id } ,
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.\$el.remove();
                            self.unrender(response);
                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                    {% endif %}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
                        app.appView.openConfirmModal(this)
                    {% endif %}
                }
            });

            // Ticket Tag View
            var TagList = Backbone.View.extend({
                el : \$(\".tag-list-block\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addTag'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".tag-list\").html('');
                    if (tagCollection.length) {
                        _.each(tagCollection.models, function (item) {
                            this.renderTag(item);
                        }, this);
                    }
                },
                renderTag : function (item) {
                    var tag = new TagItem({
                        model: item
                    });
                    this.\$el.find('.tag-list').append(tag.render().el);
                },
                addTag : function(e) {
                    {% if user_service.isAccessAuthorized('ROLE_AGENT_ADD_TAG') %}
                        var currentElement = Backbone.\$(e.currentTarget);
                        if (currentElement.is('li')) {
                            var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                            var text = currentElement.text().trim();
                        } else {
                            var inputElement = currentElement;
                            var text = inputElement.val().trim();
                        }
                        inputElement.removeClass('uv-field-error');
                        inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                        if (currentElement.is('li') || (e.which === 13 && text)) {
                            if (text.length <= 20) {
                                if (tagCollection.isTagExist(text)) {
                                    var self = this;
                                    inputElement.val('');
                                    this.model = new TagModel();
                                    this.model.set({name:text});
                                    self = this;

                                    app.appView.showLoader();
                                    this.model.save({}, {
                                        success: function (model, response, options) {
                                            inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                            inputElement.parent().find(\".uv-no-results\").show()
                                            if (!currentElement.is('li')) {
                                                inputElement.trigger('click')
                                            }
                                            if (response.alertClass == \"success\") {
                                                tagCollection.add(model);
                                                self.render();
                                            }

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
                                    inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Tag with same name already exist'|trans }}</span>\");
                                }
                            } else {
                                inputElement.addClass('uv-field-error');
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 20 charactors'|trans }}</span>\");
                            }
                        }
                    {% endif %}
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Label Item View
            var LabelItem = Backbone.View.extend({
                tagName : \"a\",
                className : \"uv-btn-label\",
                template : _.template(\"<span class='uv-tag'><span class='uv-icon-remove-before'></span><%- name %></span>\"),
                events : {
                    'click .uv-tag' : \"confirmRemove\"
                },
                render : function () {
                    this.\$el.html(this.template(this.model.toJSON()));

                    return this;
                },
                unrender : function(response) {
                    if (response.alertMessage != undefined) {
                        labelListView.render();
                        app.appView.renderResponseAlert(response);
                    }
                },
                removeItem : function () {
                    self = this;
                    app.appView.showLoader();

                    this.model.destroy({
                        url : \"{{ path('helpdesk_member_update_ticket_attributes_xhr') }}\",
                        data : { attribute :'label', 'ticketId': ticketModel.id, 'labelId': this.model.get('id') },
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
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this)
                }
            });

            // Ticket Label View
            var LabelList = Backbone.View.extend({
                el: \$(\".label-list-block\"),
                events: {
                    'keypress .uv-field' : 'addLabel',
                    'focusout .uv-field' : 'removeErrorClass',
                    'click .uv-dropdown-list li': 'addLabel'
                },
                render : function() {
                    var self = this;
                    this.\$el.find(\".label-list\").html('');
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabel(item);
                        }, this);
                    }
                },
                renderLabel : function (item) {
                    var label = new LabelItem({
                        model: item
                    });
                    lavelItem = label.render().el;
                    \$(lavelItem).attr('style', 'background:' + item.attributes.color)
                    this.\$el.find('.label-list').append(lavelItem);
                },
                addLabel : function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.is('li')) {
                        var inputElement = currentElement.parents('.uv-field-block').find('.uv-dropdown-other');
                        var text = currentElement.text().trim();
                    } else {
                        var inputElement = currentElement;
                        var text = inputElement.val().trim();
                    }
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()

                    if (currentElement.is('li') || (e.which === 13 && text)) {
                        if (text.length <= 20) {
                            if (labelCollection.isLabelExist(text)) {
                                var self = this;
                                inputElement.val('');
                                this.model = new LabelModel();
                                this.model.set({name:text});
                                self = this;

                                app.appView.showLoader();
                                this.model.save({}, {
                                    success: function (model, response, options) {
                                        inputElement.parent().find(\"li:not(.uv-no-results)\").remove()
                                        inputElement.parent().find(\".uv-no-results\").show()
                                        if (!currentElement.is('li')) {
                                            inputElement.trigger('click')
                                        }
                                        if (response.alertClass == \"success\") {
                                            labelCollection.add(model);
                                            self.render();
                                        }

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
                                inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Label with same name already exist'|trans }}</span>\");
                            }
                        } else {
                            inputElement.addClass('uv-field-error');
                            inputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 20 charactors'|trans }}</span>\");
                        }
                    }
                },
                removeErrorClass: function(e) {
                    var inputElement = Backbone.\$(e.currentTarget);
                    inputElement.removeClass('uv-field-error');
                    inputElement.parents('.uv-element-block').find('.uv-field-message').remove()
                },
            });

            // Ticket Router
            var Router = Backbone.Router.extend({
                routes: {
                    'thread/:thread' : 'threadRequestedId'
                },
                threadRequestedId: function(thread){
                    threadCollection.threadRequestedId = thread;
                },
                scrollPage : function(divId) {
                    if (\$(divId).length){
                        \$('li a[href=\"'+divId+'\"]').trigger('click');
                        \$('.uv-ticket-scroll-region').animate({
                            scrollTop: \$(divId).offset().top
                        }, 'slow');
                    } else if (divId == '#') { //scroll to last thread added
                        if (threadCollection.fullCollection.length)
                            this.scrollPage('#thread' + threadCollection.fullCollection.at(0).id);
                    }
                }
            });

            var customerForm = new CustomerForm({
                el : \$(\".uv-main-info-update-block\"),
                model : new CustomerModel()
            });

            var ticketNavigation = \$.parseJSON('{{ ticketNavigationIteration|json_encode|raw }}');

            var ticketModel = new TicketModel({
                id : \"{{ ticket.id }}\",
                status : \"{{ ticket.status.id }}\",
                priority : \"{{ ticket.priority.id }}\",
                group : \"{{ ticket.supportGroup ? ticket.supportGroup.id : '' }}\",
                subGroup : \"{{ ticket.supportTeam ? ticket.supportTeam.id : '' }}\",
                agent : \"\",
                profileImage : \"\",
                isTrashed : \"{{ ticket.isTrashed }}\"
            });

            ticketApp.ticketView = ticketView = new TicketView({
                model: ticketModel
            });

            uvdesk.ticket.model = ticketModel;

            threadCollection = new ThreadCollection();
            var threadList = new ThreadList();
            var pagination = new Pagination();

            var collaboratorCollection = new CollaboratorCollection(\$.parseJSON('{{ ticket_service.getTicketCollaborators(ticket.id)|json_encode|raw }}'));
            var collaboratorList = new CollaboratorList();
            collaboratorList.render();

            var tagCollection = new TagCollection(\$.parseJSON('{{ ticket_service.getTicketTagsById(ticket.id)|json_encode|raw }}'));
            var tagListView = new TagList();
            tagListView.render();

            var labelCollection = new LabelCollection(\$.parseJSON('{{ ticket_service.getTicketLabels(ticket.id)|json_encode|raw }}'));
            var labelListView = new LabelList();
            labelListView.render();

            var router = new Router();
            Backbone.history.start({push_state:true});

            threadCollection.syncData();
        });
    </script>

    <script>
        var sfTinyMceNew = \$.extend({}, sfTinyMce);
        var toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
            selector : '.uv-ticket-reply textarea',
            toolbar: toolbarOptions + ' | translate',
            mentions : getMentions(),
            images_upload_url: \"\",
            setup: function(editor) {
                editor.on('keydown', function(e) { /** for pageup, pagedown keys **/
                    if(e.keyCode == 34 || e.keyCode == 33){
                        e.preventDefault();
                    }
                });
                addTranslateButton(editor);
            }
        });

        function InitTinyMce(selector) {
            let sfTinyMceNew2 = \$.extend({}, sfTinyMceNew);
            sfTinyMceNew2.init({
                selector : selector,
                mentions : getMentions(),
                setup: function(editor) {
                    addTranslateButton(editor);
                }
            });
        }

        function getMentions(){
            return {
                delimiter: ['#'],
                items: 15,
                source: function(){
                    return [
                        {
                            name : \"{{ 'Ticket Id'|trans }}\",
                            value : \"{{ ticket.id }}\",
                        },
                        {
                            name : \"{{ 'Subject'|trans }}\",
                            value : \"{{ ticket.subject|replace({\"\\n\":' ', \"\\r\":' '}) }}\",
                        },
                        {
                            name : \"{{ 'Status'|trans }}\",
                            value : \"{{ ticket.status.description }}\",
                        },
                        {
                            name : \"{{ 'Priority'|trans }}\",
                            value : \"{{ ticket.priority.description|trans }}\",
                        },
                        {
                            name : \"{{ 'Type'|trans }}\",
                            value : \"{{ ticket.type ? ticket.type.description|replace({\"\\n\":' ', \"\\r\":' '}) : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Group'|trans }}\",
                            value : \"{{ ticket.supportGroup ? ticket.supportGroup.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Team'|trans }}\",
                            value : \"{{ ticket.supportTeam ? ticket.supportTeam.description : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Customer Name'|trans }}\",
                            value : \"{{ customer.name }}\",
                        },
                        {
                            name : \"{{ 'Customer Email'|trans }}\",
                            value : \"{{ customer.email }}\",
                        },
                        {
                            name : \"{{ 'Agent Name'|trans }}\",
                            value : \"{{ ticketAgent.name is defined ? ticketAgent.name : 'Not Assigned'|trans }}\",
                        },
                        {
                            name : \"{{ 'Agent Email'|trans }}\",
                            value : \"{{ ticketAgent.email is defined ? ticketAgent.email : 'Not Assigned'|trans }}\",
                        }
                    ];
                },
                insert: function(item) {
                    return '<span>' + item.value + '</span>';
                }
            };
        }
    </script>
{% endblock %}
", "@UVDeskCoreFramework/ticket.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/ticket.html.twig");
    }
}
