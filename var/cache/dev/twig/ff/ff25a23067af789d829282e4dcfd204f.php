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

/* @UVDeskSupportCenter/Knowledgebase/customerAccount.html.twig */
class __TwigTemplate_0e8a7b05eba637707a9ffb1d439af7b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/customerAccount.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/customerAccount.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/customerAccount.html.twig", 1);
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit Profile", [], "messages");
        
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit Profile", [], "messages");
        
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit Profile", [], "messages");
        
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
\t\t\t\t\t<li><a href=\"#\" for=\"profile\" class=\"uv-nav-tab-active\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile"), "html", null, true);
        yield "</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"uv-nav-bar-rt\">
\t\t\t\t<form method=\"get\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_front_article_search");
        yield "\">
\t\t\t\t\t<input name=\"s\" class=\"uv-nav-search\" type=\"text\" placeholder=\"";
        // line 17
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

    // line 24
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

        // line 25
        yield "    <style>
        .uv-nav-tab-view {
            display: none;
        }
        .uv-nav-tab-view.uv-nav-tab-view-active {
            display: block;
        }
        .uv-image-upload-wrapper {
            padding: 5px 0px 10px 0px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 5px;
            border: dashed 1px #B1B1AE;
            overflow: hidden;
            margin-right: 15px;
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .uv-image-upload-wrapper .uv-image-upload-brick input[type=\"file\"] {
            width: 100px;
            height: 100px;
            position: absolute;
            opacity: 0;
            z-index: 3;
        }
        .uv-image-upload-wrapper img {
            width: 100px;
            height: 100px;
            position: absolute;
            z-index: 2;
            border-radius: 5px;
            display: block;
            border: solid 2px #FFFFFF;
        }
        .uv-image-upload-wrapper img:not([src]) {
            display: none;
        }
        .uv-image-upload-wrapper .uv-image-upload-placeholder {
            position: absolute;
            width: 48px;
            height: 32px;
            left: 50%;
            top: 50%;
            margin-left: -24px;
            margin-top: -16px;
            z-index: 1;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-48 {
            width: 48px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-48 input[type=\"file\"] {
            width: 48px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-48 img {
            width: 48px;
            height: auto;
            }
        .uv-image-upload-wrapper .uv-image-upload-brick-200 {
            width: 200px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-200 input[type=\"file\"] {
            width: 200px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-200 img {
            width: 200px;
            height: auto;
        }
        .uv-image-upload-wrapper .uv-image-upload-placeholder svg path {
            fill: #7C70F4;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick:hover .uv-image-upload-placeholder svg path {
            fill: #BA81F1;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick .uv-image-upload-placeholder svg {
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .uv-image-upload-wrapper .uv-image-upload-brick:hover .uv-image-upload-placeholder svg {
            transform: translateY(-2px);
        }
        .uv-image-upload-wrapper .uv-image-info-brick {
            display: inline-block;
            vertical-align: middle;
            margin: 10px 0px;
        }
        .uv-image-upload-wrapper .uv-on-drag {
            transform: scale(1.08);
            border: dashed 1px #333333;
        }
        .uv-image-upload-wrapper .uv-on-drop-shadow {
            box-shadow: 0px 0px 4.75px 0.25px rgba(0, 0, 0, 0.05), 0px 8px 24px 0px rgba(0, 0, 0, 0.15);
        }
\t\t.accounts-panel {
\t\t\tborder: solid 1px #D3D3D3;
            padding: 15px 15px 5px 15px;
            border-radius: 3px;
            margin: 25px 0px;
\t\t}
\t\t.social-accounts-table {
\t\t\tmargin: 20px 0px 10px;
\t\t}
\t\t.social-accounts-table table {
\t\t\tborder: solid 1px #D3D3D3;
\t\t}
\t\t.social-accounts-table table > tbody > tr > td {
\t\t\tborder-bottom: dashed 1px #D3D3D3;
\t\t}
\t\t.social-accounts-table table > tbody > tr:last-child > td {
\t\t\tborder-bottom: unset;
\t\t}
\t\t.social-accounts-table .social-accounts-pta {
\t\t\ttext-align: right;
\t\t}
\t\t.social-accounts-table .social-accounts-pta > * {
\t\t\ttext-align: left;
\t\t}
\t\t.social-account-banner {
\t\t\tmin-width: 220px;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 3px;
\t\t\tborder-radius: 3px;
\t\t}
\t\t.social-account-banner > * {
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t}
\t\t.social-account-name {}
\t\t.social-account-img {
\t\t\twidth: 40px;
\t\t\theight: 40px;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tmargin-right: 10px;
\t\t}
    </style>
    <div class=\"uv-nav-tab-view uv-nav-tab-view-active\" id=\"profile\">
        <h1>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile"), "html", null, true);
        yield "</h1>
        ";
        // line 169
        $context["customerDetails"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 169, $this->source); })()), "getCustomerDetailsById", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 169, $this->source); })()), "id", [], "any", false, false, false, 169)], "method", false, false, false, 169);
        // line 170
        yield "        <!--Form-->
        <form method=\"post\" action=\"\" id=\"user-form\" enctype=\"multipart/form-data\">
            <!--Tab View-->
            <div class=\"uv-tab-view uv-tab-view-active\" id=\"profile\">
                <!-- Profile image -->
                <div class=\"uv-image-upload-wrapper\">
                    ";
        // line 176
        $context["isHaveImage"] = ((((isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 176, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 176, $this->source); })()), "profileImagePath", [], "any", false, false, false, 176))) ? (1) : (0));
        // line 177
        yield "                    <div class=\"uv-image-upload-brick ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 177, $this->source); })())) {
            yield "uv-on-drop-shadow";
        }
        yield "\" ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 177, $this->source); })())) {
            yield "style=\"border-color: transparent;\"";
        }
        yield ">
                        <input type=\"file\" name=\"user_form[profileImage]\" id=\"uv-upload-profile\">
                        <div class=\"uv-image-upload-placeholder\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                            <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                            </svg>
                        </div>
                        <img id=\"dynamic-image-upload\" ";
        // line 184
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 184, $this->source); })())) {
            yield "src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "scheme", [], "any", false, false, false, 184) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "httpHost", [], "any", false, false, false, 184)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 184, $this->source); })()), "profileImagePath", [], "any", false, false, false, 184), "html", null, true);
            yield "\"";
        }
        yield ">
                    </div>
                    <div class=\"uv-image-info-brick\">
                        <span class=\"uv-field-info\">";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format");
        yield "</span>
                    </div>
                </div>
                <!-- //Profile image -->
               
                ";
        // line 192
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 192, $this->source); })())) {
            yield " 
                    <div class=\"uv-element-block\"> 
                        <label>
                            <div class=\"uv-checkbox\">
                                <input name=\"removeImage\" id=\"removeImage\" type=\"checkbox\">
                                <span class=\"uv-checkbox-view\"></span>
                            </div><span class=\"uv-checkbox-label\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove profile picture"), "html", null, true);
            yield "</span>
                        </label>
                    </div>
                ";
        }
        // line 202
        yield "                
                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First Name"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[firstName]\" class=\"uv-field\" value=\"";
        // line 207
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 207, $this->source); })()), "firstName", [], "any", false, false, false, 207)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 207, $this->source); })()), "firstName", [], "any", false, false, false, 207), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 207, $this->source); })()), "firstName", [], "any", false, false, false, 207), "html", null, true)));
        yield "\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Name"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[lastName]\" class=\"uv-field\" value=\"";
        // line 216
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "lastName", [], "any", false, false, false, 216)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 216, $this->source); })()), "lastName", [], "any", false, false, false, 216), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 216, $this->source); })()), "lastName", [], "any", false, false, false, 216), "html", null, true)));
        yield "\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[email]\" class=\"uv-field\" value=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 225, $this->source); })()), "email", [], "any", false, false, false, 225), "html", null, true);
        yield "\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[contactNumber]\" class=\"uv-field\" value=\"";
        // line 234
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 234, $this->source); })()), "contactNumber", [], "any", false, false, false, 234)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 234, $this->source); })()), "contactNumber", [], "any", false, false, false, 234), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 234, $this->source); })()), "contactNumber", [], "any", false, false, false, 234), "html", null, true)));
        yield "\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timezone"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <select name=\"user_form[timezone]\" class=\"uv-select\">
                            ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 244, $this->source); })()), "getTimezones", [], "method", false, false, false, 244));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 245
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["timezone"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 245, $this->source); })()), "timezone", [], "any", false, false, false, 245) == $context["timezone"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["timezone"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "                        </select>
                    </div>
                    <span class=\"uv-field-info\">";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose your default timezone"), "html", null, true);
        yield "</span>
                </div>
                <!-- //Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Time Format"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <select name=\"user_form[timeformat]\" class=\"uv-select\">
                            ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 256, $this->source); })()), "getTimeFormats", [], "method", false, false, false, 256));
        foreach ($context['_seq'] as $context["key"] => $context["timeformat"]) {
            yield "   
                                <option value=\"";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 257, $this->source); })()), "timeformat", [], "any", false, false, false, 257) == $context["key"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["timeformat"], "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['timeformat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "                        </select>
                    </div>
                    <span class=\"uv-field-info\">";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose your default timeformat"), "html", null, true);
        yield "</span>
                </div>
                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input type=\"password\" name=\"user_form[password][first]\" class=\"uv-field\" value=\"\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input type=\"password\" name=\"user_form[password][second]\" class=\"uv-field\" value=\"\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- CSRF token Field -->
              
                <!-- //CSRF token Field -->

                <!--CTA-->
                <input class=\"uv-btn\" href=\"#\" value=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"submit\">
                <!--//CTA-->
            </div>
            <!--//Tab View-->

        </form>
        <!--//Form-->
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 297
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

        // line 298
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<script type=\"text/javascript\">
\t\t\$(function () {
            var AccountLinkModel = Backbone.Model.extend({
                validation: {
                    'merge_token': function(value) {
                        if (value != undefined && value !== '') {
                            if (value == this.attributes.presentToken) {
                                return \"";
        // line 306
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't merge an account with itself.", [], "messages");
        yield "\";
                            }
                        } else {
                            return '";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "';
                        }
                    },
                }
            });

\t\t\tvar UserModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'user_form[firstName]': {
                        required: true,
                        msg: '";
        // line 319
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
                    'user_form[lastName]': function(value) {
                        if (value != undefined && value !== '') {
                            [{
                                pattern: /^[A-Za-z][A-Za-z]*[\\sA-Za-z]*\$/,
                                msg: '";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have characters only"), "html", null, true);
        yield "'
                            }, {
                                maxLength:40,
                                msg: '";
        // line 328
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 40"), "html", null, true);
        yield "'
                            }]
                        }
                    },
                    'user_form[email]': [{
                        required: true,
                        msg: '";
        // line 334
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: 'email',
                        msg: '";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        yield "'
                    }],
                    'user_form[contactNumber]': function(value) {
                        if (value != undefined && value !== '') {
                            if (! value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return '";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact number is invalid"), "html", null, true);
        yield "';
                        }
                    },
                    'user_form[password][first]': [{
                        required: true,
                        msg: '";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                        }, {
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d)(?=.*[^\\w\\s]|.*_)[^\\s]{8,}\$/,
                        msg: '";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed)."), "html", null, true);
        yield "'
                    }],
                    'user_form[password][second]': {
                        equalTo: 'user_form[password][first]',
                        msg: '";
        // line 354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        yield "'
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar UserForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveUser\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    var jsonContext = {};
\t\t    \t\tfor (var field in jsonContext) {
                        if (field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"user_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"user_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}

                    \$('#notifications .uv-scroll-plank .uv-scroll-block').each(function() {
                        if (! \$(this).find('.uv-element-block').length) {
                            \$(this).parents('.uv-scroll-plank').remove()
                        }
                    })
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
                    var fieldName = Backbone.\$(e.currentTarget).attr('name');
                    if (fieldName == 'user_form[password][second]') {
                        if (\$(\"input[name='user_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if (\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        
                        if (fieldName == 'user_form[password][first]' && !\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'user_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveUser : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tvar userForm = new UserForm({
\t\t\t\tel : \$(\"#user-form\"),
\t\t\t\tmodel : new UserModel()
\t\t\t});

\t\t\tvar HelpdeskResourcesView = Backbone.View.extend({
\t            el: '.uv-view',
\t            events: {
\t                'click .initiate-backup': 'initiateBackup',
\t            },
\t            initiateBackup: function(e) {
\t                e.preventDefault();
\t                \$(e.target).attr('disabled', 'disabled');
\t                \$(e.target).closest('form').submit();
\t            },
\t        });

\t        var helpdeskResources = new HelpdeskResourcesView();
\t\t\t
            \$('.uv-nav-tab-label li a').on('click', function(e) {
                e.preventDefault();
                \$('.uv-nav-tab-label li a').removeClass('uv-nav-tab-active');
                \$(this).addClass('uv-nav-tab-active');
                \$('.uv-nav-tab-view').removeClass('uv-nav-tab-view-active')
                \$('#' + \$(this).attr('for')).addClass('uv-nav-tab-view-active')
            });
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
        return "@UVDeskSupportCenter/Knowledgebase/customerAccount.html.twig";
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
        return array (  699 => 354,  692 => 350,  686 => 347,  678 => 342,  670 => 337,  664 => 334,  655 => 328,  649 => 325,  640 => 319,  627 => 309,  621 => 306,  609 => 298,  596 => 297,  575 => 286,  560 => 274,  548 => 265,  541 => 261,  537 => 259,  523 => 257,  517 => 256,  511 => 253,  504 => 249,  500 => 247,  485 => 245,  481 => 244,  475 => 241,  465 => 234,  460 => 232,  450 => 225,  445 => 223,  435 => 216,  430 => 214,  420 => 207,  415 => 205,  410 => 202,  403 => 198,  394 => 192,  386 => 187,  375 => 184,  358 => 177,  356 => 176,  348 => 170,  346 => 169,  342 => 168,  197 => 25,  184 => 24,  167 => 17,  163 => 16,  156 => 12,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block title %}{% trans %}Edit Profile{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Edit Profile{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Edit Profile{% endtrans %}{% endblock %}

{% block tabHeader %}
\t<div class=\"uv-nav-bar uv-nav-tab\">
\t\t<div class=\"uv-container\">
\t\t\t<div class=\"uv-nav-bar-lt\">
\t\t\t\t<ul class=\"uv-nav-tab-label\">
\t\t\t\t\t<li><a href=\"#\" for=\"profile\" class=\"uv-nav-tab-active\">{{ 'Profile'|trans }}</a></li>
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
        .uv-nav-tab-view {
            display: none;
        }
        .uv-nav-tab-view.uv-nav-tab-view-active {
            display: block;
        }
        .uv-image-upload-wrapper {
            padding: 5px 0px 10px 0px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick {
            display: inline-block;
            vertical-align: middle;
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 5px;
            border: dashed 1px #B1B1AE;
            overflow: hidden;
            margin-right: 15px;
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .uv-image-upload-wrapper .uv-image-upload-brick input[type=\"file\"] {
            width: 100px;
            height: 100px;
            position: absolute;
            opacity: 0;
            z-index: 3;
        }
        .uv-image-upload-wrapper img {
            width: 100px;
            height: 100px;
            position: absolute;
            z-index: 2;
            border-radius: 5px;
            display: block;
            border: solid 2px #FFFFFF;
        }
        .uv-image-upload-wrapper img:not([src]) {
            display: none;
        }
        .uv-image-upload-wrapper .uv-image-upload-placeholder {
            position: absolute;
            width: 48px;
            height: 32px;
            left: 50%;
            top: 50%;
            margin-left: -24px;
            margin-top: -16px;
            z-index: 1;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-48 {
            width: 48px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-48 input[type=\"file\"] {
            width: 48px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-48 img {
            width: 48px;
            height: auto;
            }
        .uv-image-upload-wrapper .uv-image-upload-brick-200 {
            width: 200px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-200 input[type=\"file\"] {
            width: 200px;
            height: 48px;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick-200 img {
            width: 200px;
            height: auto;
        }
        .uv-image-upload-wrapper .uv-image-upload-placeholder svg path {
            fill: #7C70F4;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick:hover .uv-image-upload-placeholder svg path {
            fill: #BA81F1;
        }
        .uv-image-upload-wrapper .uv-image-upload-brick .uv-image-upload-placeholder svg {
            transition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .uv-image-upload-wrapper .uv-image-upload-brick:hover .uv-image-upload-placeholder svg {
            transform: translateY(-2px);
        }
        .uv-image-upload-wrapper .uv-image-info-brick {
            display: inline-block;
            vertical-align: middle;
            margin: 10px 0px;
        }
        .uv-image-upload-wrapper .uv-on-drag {
            transform: scale(1.08);
            border: dashed 1px #333333;
        }
        .uv-image-upload-wrapper .uv-on-drop-shadow {
            box-shadow: 0px 0px 4.75px 0.25px rgba(0, 0, 0, 0.05), 0px 8px 24px 0px rgba(0, 0, 0, 0.15);
        }
\t\t.accounts-panel {
\t\t\tborder: solid 1px #D3D3D3;
            padding: 15px 15px 5px 15px;
            border-radius: 3px;
            margin: 25px 0px;
\t\t}
\t\t.social-accounts-table {
\t\t\tmargin: 20px 0px 10px;
\t\t}
\t\t.social-accounts-table table {
\t\t\tborder: solid 1px #D3D3D3;
\t\t}
\t\t.social-accounts-table table > tbody > tr > td {
\t\t\tborder-bottom: dashed 1px #D3D3D3;
\t\t}
\t\t.social-accounts-table table > tbody > tr:last-child > td {
\t\t\tborder-bottom: unset;
\t\t}
\t\t.social-accounts-table .social-accounts-pta {
\t\t\ttext-align: right;
\t\t}
\t\t.social-accounts-table .social-accounts-pta > * {
\t\t\ttext-align: left;
\t\t}
\t\t.social-account-banner {
\t\t\tmin-width: 220px;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 3px;
\t\t\tborder-radius: 3px;
\t\t}
\t\t.social-account-banner > * {
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t}
\t\t.social-account-name {}
\t\t.social-account-img {
\t\t\twidth: 40px;
\t\t\theight: 40px;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tmargin-right: 10px;
\t\t}
    </style>
    <div class=\"uv-nav-tab-view uv-nav-tab-view-active\" id=\"profile\">
        <h1>{{ 'Profile'|trans }}</h1>
        {% set customerDetails = user_service.getCustomerDetailsById(user.id) %}
        <!--Form-->
        <form method=\"post\" action=\"\" id=\"user-form\" enctype=\"multipart/form-data\">
            <!--Tab View-->
            <div class=\"uv-tab-view uv-tab-view-active\" id=\"profile\">
                <!-- Profile image -->
                <div class=\"uv-image-upload-wrapper\">
                    {% set isHaveImage =  customerDetails and customerDetails.profileImagePath ? 1 : 0 %}
                    <div class=\"uv-image-upload-brick {% if isHaveImage %}uv-on-drop-shadow{% endif %}\" {% if isHaveImage %}style=\"border-color: transparent;\"{% endif %}>
                        <input type=\"file\" name=\"user_form[profileImage]\" id=\"uv-upload-profile\">
                        <div class=\"uv-image-upload-placeholder\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                            <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                            </svg>
                        </div>
                        <img id=\"dynamic-image-upload\" {% if isHaveImage %}src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ customerDetails.profileImagePath }}\"{% endif %}>
                    </div>
                    <div class=\"uv-image-info-brick\">
                        <span class=\"uv-field-info\">{{ 'Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format'|trans|raw }}</span>
                    </div>
                </div>
                <!-- //Profile image -->
               
                {% if isHaveImage %} 
                    <div class=\"uv-element-block\"> 
                        <label>
                            <div class=\"uv-checkbox\">
                                <input name=\"removeImage\" id=\"removeImage\" type=\"checkbox\">
                                <span class=\"uv-checkbox-view\"></span>
                            </div><span class=\"uv-checkbox-label\">{{ 'Remove profile picture'|trans }}</span>
                        </label>
                    </div>
                {% endif %}
                
                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'First Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[firstName]\" class=\"uv-field\" value=\"{{ user.firstName ?: customerDetails.firstName }}\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Last Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[lastName]\" class=\"uv-field\" value=\"{{ user.lastName ?:customerDetails.lastName }}\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[email]\" class=\"uv-field\" value=\"{{ user.email}}\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input type=\"text\" name=\"user_form[contactNumber]\" class=\"uv-field\" value=\"{{ customerDetails.contactNumber ?: customerDetails.contactNumber }}\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Timezone'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <select name=\"user_form[timezone]\" class=\"uv-select\">
                            {% for timezone in user_service.getTimezones() %}
                                <option value=\"{{ timezone }}\" {% if user.timezone == timezone %}selected{% endif %}>{{ timezone }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <span class=\"uv-field-info\">{{ \"Choose your default timezone\"|trans }}</span>
                </div>
                <!-- //Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Time Format'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <select name=\"user_form[timeformat]\" class=\"uv-select\">
                            {% for key, timeformat in uvdesk_service.getTimeFormats() %}   
                                <option value=\"{{ key }}\" {% if user.timeformat == key %}selected{% endif %}>{{ timeformat }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <span class=\"uv-field-info\">{{ \"Choose your default timeformat\"|trans }}</span>
                </div>
                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input type=\"password\" name=\"user_form[password][first]\" class=\"uv-field\" value=\"\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- Field -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Confirm Password'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input type=\"password\" name=\"user_form[password][second]\" class=\"uv-field\" value=\"\" />
                    </div>
                </div>
                <!-- //Field -->

                <!-- CSRF token Field -->
              
                <!-- //CSRF token Field -->

                <!--CTA-->
                <input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
                <!--//CTA-->
            </div>
            <!--//Tab View-->

        </form>
        <!--//Form-->
    </div>

{% endblock %}

{% block footer %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$(function () {
            var AccountLinkModel = Backbone.Model.extend({
                validation: {
                    'merge_token': function(value) {
                        if (value != undefined && value !== '') {
                            if (value == this.attributes.presentToken) {
                                return \"{% trans %}You can't merge an account with itself.{% endtrans %}\";
                            }
                        } else {
                            return '{{ \"This field is mandatory\"|trans }}';
                        }
                    },
                }
            });

\t\t\tvar UserModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'user_form[firstName]': {
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },
                    'user_form[lastName]': function(value) {
                        if (value != undefined && value !== '') {
                            [{
                                pattern: /^[A-Za-z][A-Za-z]*[\\sA-Za-z]*\$/,
                                msg: '{{ \"This field must have characters only\"|trans }}'
                            }, {
                                maxLength:40,
                                msg: '{{ \"Maximum character length is 40\"|trans }}'
                            }]
                        }
                    },
                    'user_form[email]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern: 'email',
                        msg: '{{ \"Email address is invalid\"|trans }}'
                    }],
                    'user_form[contactNumber]': function(value) {
                        if (value != undefined && value !== '') {
                            if (! value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return '{{ \"Contact number is invalid\"|trans }}';
                        }
                    },
                    'user_form[password][first]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                        }, {
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d)(?=.*[^\\w\\s]|.*_)[^\\s]{8,}\$/,
                        msg: '{{ \"Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed).\"|trans }}'
                    }],
                    'user_form[password][second]': {
                        equalTo: 'user_form[password][first]',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar UserForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveUser\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    var jsonContext = {};
\t\t    \t\tfor (var field in jsonContext) {
                        if (field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"user_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"user_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}

                    \$('#notifications .uv-scroll-plank .uv-scroll-block').each(function() {
                        if (! \$(this).find('.uv-element-block').length) {
                            \$(this).parents('.uv-scroll-plank').remove()
                        }
                    })
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
                    var fieldName = Backbone.\$(e.currentTarget).attr('name');
                    if (fieldName == 'user_form[password][second]') {
                        if (\$(\"input[name='user_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if (\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        
                        if (fieldName == 'user_form[password][first]' && !\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'user_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveUser : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tvar userForm = new UserForm({
\t\t\t\tel : \$(\"#user-form\"),
\t\t\t\tmodel : new UserModel()
\t\t\t});

\t\t\tvar HelpdeskResourcesView = Backbone.View.extend({
\t            el: '.uv-view',
\t            events: {
\t                'click .initiate-backup': 'initiateBackup',
\t            },
\t            initiateBackup: function(e) {
\t                e.preventDefault();
\t                \$(e.target).attr('disabled', 'disabled');
\t                \$(e.target).closest('form').submit();
\t            },
\t        });

\t        var helpdeskResources = new HelpdeskResourcesView();
\t\t\t
            \$('.uv-nav-tab-label li a').on('click', function(e) {
                e.preventDefault();
                \$('.uv-nav-tab-label li a').removeClass('uv-nav-tab-active');
                \$(this).addClass('uv-nav-tab-active');
                \$('.uv-nav-tab-view').removeClass('uv-nav-tab-view-active')
                \$('#' + \$(this).attr('for')).addClass('uv-nav-tab-view-active')
            });
\t\t});
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/customerAccount.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/customerAccount.html.twig");
    }
}
