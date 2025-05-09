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

/* @UVDeskCoreFramework/Templates/layout.html.twig */
class __TwigTemplate_7094cf9a458278269b4f39904acddcdf extends Template
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
            'title' => [$this, 'block_title'],
            'templateCSS' => [$this, 'block_templateCSS'],
            'sidebar' => [$this, 'block_sidebar'],
            'pageWrapper' => [$this, 'block_pageWrapper'],
            'pageHeader' => [$this, 'block_pageHeader'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/layout.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        yield "\" />

        <!-- Stylesheets -->
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/css/_uikit.css"), "html", null, true);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/css/_custom.css"), "html", null, true);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        ";
        // line 15
        $context["websiteConfiguration"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 15, $this->source); })()), "getWebsiteConfiguration", ["knowledgebase"], "method", false, false, false, 15);
        // line 16
        yield "        ";
        $context["website"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 16, $this->source); })()), "getWebsiteDetails", ["helpdesk"], "method", false, false, false, 16);
        // line 17
        yield "
        ";
        // line 18
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/lightskin.html.twig");
        yield "

        <!-- Custom Stylesheets -->
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 21, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 21), "getDashboardTemplate", [], "method", false, false, false, 21), "getStylesheetResources", [], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 22
            yield "            <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["stylesheet"]), "html", null, true);
            yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stylesheet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        
        ";
        // line 25
        yield from $this->unwrap()->yieldBlock('templateCSS', $context, $blocks);
        // line 26
        yield "
        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/_dropdown.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/d3/6.2.0/d3.min.js\"></script>
        <script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/viewer.js"), "html", null, true);
        yield "\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>
    </head>

    ";
        // line 41
        $context["bodyClass"] = "";
        // line 42
        yield "    ";
        $context["bodySkinClass"] = "";
        // line 43
        yield "
    ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "locale", [], "any", false, false, false, 44) == "ar")) {
            // line 45
            yield "        ";
            $context["bodyClass"] = "uv-rtl";
            // line 46
            yield "    ";
        }
        // line 47
        yield "    
    <body class=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["bodySkinClass"]) || array_key_exists("bodySkinClass", $context) ? $context["bodySkinClass"] : (function () { throw new RuntimeError('Variable "bodySkinClass" does not exist.', 48, $this->source); })()) . " ") . (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 48, $this->source); })())), "html", null, true);
        yield "\">
        <div class=\"uv-notifications-wrapper\">
            <noscript>
                <div class=\"uv-notification page-load uv-error\">
                    <p>";
        // line 52
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your browser does not support JavaScript or You disabled JavaScript, Please enable those !", [], "messages");
        yield "</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>

            ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 57, $this->source); })()), "requestHeadersSent", [], "method", false, false, false, 57) == false)) {
            // line 58
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "get", ["success"], "method", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 59
                yield "                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 61
                yield $context["flashMessage"];
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                
                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "flashbag", [], "any", false, false, false, 65), "get", ["warning"], "method", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 66
                yield "                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 68
                yield $context["flashMessage"];
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "            ";
        }
        // line 72
        yield "        </div>

        <div class=\"uv-loader-view\">
            <div class=\"uv-loader\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-slim\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Action"), "html", null, true);
        yield "</h2>
                <p>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure? You want to perform this action."), "html", null, true);
        yield "</p>

                <div class=\"uv-pop-up-actions\">
                    <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
        yield "</a>
                    <a href=\"#\" class=\"uv-btn cancel\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
                </div>
            </div>
        </div>

        ";
        // line 95
        $context["currentUser"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 95, $this->source); })()), "getSessionUser", [], "method", false, false, false, 95);
        // line 96
        yield "        ";
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 96, $this->source); })())) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 96, $this->source); })()), "getAgentInstance", [], "method", false, false, false, 96)))) {
            // line 97
            yield "            ";
            $context["currentUserDetails"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 97, $this->source); })()), "getAgentInstance", [], "method", false, false, false, 97), "getPartialDetails", [], "method", false, false, false, 97);
            // line 98
            yield "        ";
        }
        // line 99
        yield "
        ";
        // line 100
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 105
        yield "
        ";
        // line 106
        yield from $this->unwrap()->yieldBlock('pageWrapper', $context, $blocks);
        // line 119
        yield "        
        ";
        // line 120
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 188
        yield "
        ";
        // line 190
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 190, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 190), "getDashboardTemplate", [], "method", false, false, false, 190), "getJavascriptResources", [], "method", false, false, false, 190));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 191
            yield "            <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["javascript"]), "html", null, true);
            yield "\" type=\"text/javascript\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['javascript'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        yield "HelpDesk";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        yield "            ";
        if ((array_key_exists("currentUser", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 101, $this->source); })())))) {
            // line 102
            yield "                ";
            yield from $this->loadTemplate("@UVDeskCoreFramework/Templates/sidebar.html.twig", "@UVDeskCoreFramework/Templates/layout.html.twig", 102)->unwrap()->yield($context);
            // line 103
            yield "            ";
        }
        // line 104
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 106
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        // line 107
        yield "            <div class=\"uv-paper\">
                ";
        // line 108
        yield from $this->unwrap()->yieldBlock('pageHeader', $context, $blocks);
        // line 111
        yield "
                <div class=\"uv-wrapper\">
                    <div class=\"uv-container\">
                        ";
        // line 114
        yield from $this->unwrap()->yieldBlock('pageContent', $context, $blocks);
        // line 115
        yield "                    </div>
                </div>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 109
        yield "                    ";
        yield from $this->loadTemplate("@UVDeskCoreFramework/Templates/header.html.twig", "@UVDeskCoreFramework/Templates/layout.html.twig", 109)->unwrap()->yield($context);
        // line 110
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
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

        // line 121
        yield "            <script>
                // Show loader by default
                document.addEventListener('DOMContentLoaded', function() {
                    // Ensure the loader is visible
                    document.querySelector('.uv-loader-view').style.display = 'block';
                });

                // Hide loader once the page is fully loaded
                window.onload = function() {
                    // Hide the loader
                    document.querySelector('.uv-loader-view').style.display = 'none';
                };
            </script>

            <script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/_common.js"), "html", null, true);
        yield "\"></script>
            ";
        // line 136
        yield from $this->loadTemplate("@UVDeskCoreFramework/Templates/pagination.html.twig", "@UVDeskCoreFramework/Templates/layout.html.twig", 136)->unwrap()->yield($context);
        // line 137
        yield "
            ";
        // line 139
        yield "            <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
                <div class=\"uv-pop-up-box uv-pop-up-slim\">
                    <span class=\"uv-pop-up-close\"></span>
                    <h2>";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Action"), "html", null, true);
        yield "</h2>
                    <p>";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure? You want to perform this action."), "html", null, true);
        yield "</p>

                    <div class=\"uv-pop-up-actions\">
                        <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm"), "html", null, true);
        yield "</a>
                        <a href=\"#\" class=\"uv-btn cancel\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
                    </div>
                </div>
            </div>

            ";
        // line 153
        yield "            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>

            ";
        // line 162
        yield "            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>

            ";
        // line 173
        yield "            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if(alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>

            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error : Something went wrong, please try again later"), "html", null, true);
        yield "',
                };
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
        return "@UVDeskCoreFramework/Templates/layout.html.twig";
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
        return array (  572 => 183,  560 => 173,  548 => 162,  538 => 153,  530 => 147,  526 => 146,  520 => 143,  516 => 142,  511 => 139,  508 => 137,  506 => 136,  502 => 135,  486 => 121,  473 => 120,  451 => 114,  440 => 110,  437 => 109,  424 => 108,  410 => 115,  408 => 114,  403 => 111,  401 => 108,  398 => 107,  385 => 106,  374 => 104,  371 => 103,  368 => 102,  365 => 101,  352 => 100,  330 => 25,  307 => 4,  295 => 193,  286 => 191,  281 => 190,  278 => 188,  276 => 120,  273 => 119,  271 => 106,  268 => 105,  266 => 100,  263 => 99,  260 => 98,  257 => 97,  254 => 96,  252 => 95,  244 => 90,  240 => 89,  234 => 86,  230 => 85,  215 => 72,  212 => 71,  203 => 68,  199 => 66,  195 => 65,  192 => 64,  183 => 61,  179 => 59,  174 => 58,  172 => 57,  164 => 52,  157 => 48,  154 => 47,  151 => 46,  148 => 45,  146 => 44,  143 => 43,  140 => 42,  138 => 41,  129 => 35,  124 => 33,  115 => 26,  113 => 25,  110 => 24,  101 => 22,  97 => 21,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  75 => 10,  71 => 9,  65 => 6,  60 => 4,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}HelpDesk{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16 32x32 48x48\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- Stylesheets -->
        <link href=\"{{ asset('bundles/uvdeskcoreframework/css/_uikit.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"{{ asset('bundles/uvdeskcoreframework/css/_custom.css') }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        <link href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\" type=\"text/css\" rel=\"stylesheet\">
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\">

        <!-- Custom CSS -->
        {% set websiteConfiguration = user_service.getWebsiteConfiguration('knowledgebase') %}
        {% set website = user_service.getWebsiteDetails('helpdesk') %}

        {{ include('@UVDeskCoreFramework/Templates/lightskin.html.twig') }}

        <!-- Custom Stylesheets -->
        {% for stylesheet in uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getDashboardTemplate().getStylesheetResources() %}
            <link href=\"{{ asset(stylesheet) }}\" type=\"text/css\" rel=\"stylesheet\" media=\"all\" />
        {% endfor %}
        
        {% block templateCSS %}{% endblock %}

        <!-- Scripts -->
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"{{ asset('bundles/uvdeskcoreframework/js/_dropdown.js') }}\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/d3/6.2.0/d3.min.js\"></script>
        <script src=\"{{ asset('bundles/uvdeskcoreframework/js/viewer.js') }}\"></script>
        <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>
    </head>

    {% set bodyClass = '' %}
    {% set bodySkinClass = '' %}

    {% if app.request.locale == \"ar\" %}
        {% set bodyClass = 'uv-rtl' %}
    {% endif %}
    
    <body class=\"{{ bodySkinClass ~ ' ' ~ bodyClass }}\">
        <div class=\"uv-notifications-wrapper\">
            <noscript>
                <div class=\"uv-notification page-load uv-error\">
                    <p>{% trans %}Your browser does not support JavaScript or You disabled JavaScript, Please enable those !{% endtrans %}</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>

            {% if uvdesk_service.requestHeadersSent() == false %}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
                
                {% for flashMessage in app.session.flashbag.get('warning') %}
                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
            {% endif %}
        </div>

        <div class=\"uv-loader-view\">
            <div class=\"uv-loader\">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
            <div class=\"uv-pop-up-box uv-pop-up-slim\">
                <span class=\"uv-pop-up-close\"></span>
                <h2>{{ 'Confirm Action'|trans }}</h2>
                <p>{{ 'Are you sure? You want to perform this action.'|trans }}</p>

                <div class=\"uv-pop-up-actions\">
                    <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">{{ 'Confirm'|trans }}</a>
                    <a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
                </div>
            </div>
        </div>

        {% set currentUser = user_service.getSessionUser() %}
        {% if currentUser is not empty and currentUser.getAgentInstance() is not empty %}
            {% set currentUserDetails = currentUser.getAgentInstance().getPartialDetails() %}
        {% endif %}

        {% block sidebar %}
            {% if currentUser is defined and currentUser is not empty %}
                {% include \"@UVDeskCoreFramework/Templates/sidebar.html.twig\" %}
            {% endif %}
        {% endblock %}

        {% block pageWrapper %}
            <div class=\"uv-paper\">
                {% block pageHeader %}
                    {% include \"@UVDeskCoreFramework/Templates/header.html.twig\" %}
                {% endblock %}

                <div class=\"uv-wrapper\">
                    <div class=\"uv-container\">
                        {% block pageContent %}{% endblock %}
                    </div>
                </div>
            </div>
        {% endblock %}
        
        {% block footer %}
            <script>
                // Show loader by default
                document.addEventListener('DOMContentLoaded', function() {
                    // Ensure the loader is visible
                    document.querySelector('.uv-loader-view').style.display = 'block';
                });

                // Hide loader once the page is fully loaded
                window.onload = function() {
                    // Hide the loader
                    document.querySelector('.uv-loader-view').style.display = 'none';
                };
            </script>

            <script src=\"{{ asset('bundles/uvdeskcoreframework/js/_common.js') }}\"></script>
            {% include \"@UVDeskCoreFramework/Templates/pagination.html.twig\" %}

            {# Confirm Action Dialog #}
            <div class=\"uv-pop-up-overlay\" id=\"confirm-modal\">
                <div class=\"uv-pop-up-box uv-pop-up-slim\">
                    <span class=\"uv-pop-up-close\"></span>
                    <h2>{{ 'Confirm Action'|trans }}</h2>
                    <p>{{ 'Are you sure? You want to perform this action.'|trans }}</p>

                    <div class=\"uv-pop-up-actions\">
                        <a href=\"#\" class=\"uv-btn uv-btn-error confirm\">{{ 'Confirm'|trans }}</a>
                        <a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
                    </div>
                </div>
            </div>

            {# Loader Template #}
            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>

            {# Full View Loader Template #}
            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>

            {# Notification Template #}
            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if(alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>

            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '{{ \"Error : Something went wrong, please try again later\"|trans }}',
                };
            </script>

        {% endblock %}

        {# Custom Javascript #}
        {% for javascript in uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getDashboardTemplate().getJavascriptResources() %}
            <script src=\"{{ asset(javascript) }}\" type=\"text/javascript\"></script>
        {% endfor %}
    </body>
</html>", "@UVDeskCoreFramework/Templates/layout.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/layout.html.twig");
    }
}
