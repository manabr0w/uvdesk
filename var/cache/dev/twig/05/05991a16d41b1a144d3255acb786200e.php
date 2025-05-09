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

/* @UVDeskCoreFramework/MicrosoftApps/manageConfigurations.html.twig */
class __TwigTemplate_ce57c96cef2a336f8ca2298ecde5c7da extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/MicrosoftApps/manageConfigurations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/MicrosoftApps/manageConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/MicrosoftApps/manageConfigurations.html.twig", 1);
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

        yield " 
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Microsoft App Settings"), "html", null, true);
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
        yield "\t<style>
\t\t.section-heading {
\t\t\tfont-size: 16px;
\t\t\tmargin: 0px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.section-description {
\t\t\tcolor: #6F6F6F;
\t\t\tmargin-top: unset !important;
\t\t\tmargin-bottom: 20px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.uv-element-block .uv-field-message {
\t\t\tfont-style: normal;
\t\t\tmargin: 0px 0px 20px 0px;
\t\t}

\t\t.section-info ul > ul {
\t\t\tmargin-bottom: 1.4rem;
\t\t}

\t\t.section-info ul > ul:last-child {
\t\t}

\t\t.section-info ul li {
\t\t\tmargin-bottom: 6px;
\t\t}

\t\t.section-info ul li:last-child {
\t\t\tmargin-bottom: unset;
\t\t}
\t</style>

\t<div class=\"uv-inner-section\">
\t\t";
        // line 45
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 46
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 47
        yield "
\t\t";
        // line 48
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 48, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 48, $this->source); })())], "method", false, false, false, 48), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 48, $this->source); })())], "method", false, false, false, 48);
        yield "

\t\t<div class=\"uv-view ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "cookies", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "cookies", [], "any", false, false, false, 50), "get", ["uv-asideView"], "method", false, false, false, 50))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t";
        // line 51
        if ((array_key_exists("microsoftApp", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 51, $this->source); })())))) {
            // line 52
            yield "\t\t\t\t<h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Microsoft app settings"), "html", null, true);
            yield "</h1>
\t\t\t";
        } else {
            // line 54
            yield "\t\t\t\t<h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a Microsoft app"), "html", null, true);
            yield "</h1>
\t\t\t";
        }
        // line 56
        yield "
            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"app-settings-view\">
\t\t\t\t";
        // line 61
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t";
        // line 65
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["microsoftApp"] ?? null), "name", [], "any", true, true, false, 65) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65)))) {
            // line 66
            yield "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), "html", null, true);
            yield "\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("App Name"), "html", null, true);
            yield "\" />
\t\t\t\t\t\t";
        } else {
            // line 68
            yield "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("App Name"), "html", null, true);
            yield "\" />
\t\t\t\t\t\t";
        }
        // line 70
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 74
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["microsoftApp"] ?? null), "isEnabled", [], "any", true, true, false, 77) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 77, $this->source); })()), "isEnabled", [], "any", false, false, false, 77) == true))) {
            // line 78
            yield "\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t";
        } else {
            // line 80
            yield "\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"checked\">
\t\t\t\t\t\t\t";
        }
        // line 82
        yield "
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enabled"), "html", null, true);
        yield "</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["microsoftApp"] ?? null), "isVerified", [], "any", true, true, false, 90)) {
            // line 91
            yield "\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t";
            // line 92
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 92, $this->source); })()), "isVerified", [], "any", false, false, false, 92) == true)) {
                // line 93
                yield "\t\t\t\t\t\t\t<span style=\"font-size: 15px; color: #2ED04C; border: 1px solid #2ED04C; display: inline-block; padding: 2px 7px 3px 7px; margin: 10px 0 2px; border-radius: 3px;\">Verified</span>
\t\t\t\t\t\t";
            } else {
                // line 95
                yield "\t\t\t\t\t\t\t<span style=\"font-size: 15px; color: #FF5656; border: 1px solid #FF5656; display: inline-block; padding: 2px 7px 3px 7px; margin: 10px 0 2px; border-radius: 3px;\">Unverified</span>
\t\t\t\t\t\t";
            }
            // line 97
            yield "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 99
        yield "
\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t";
        // line 103
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tenant Id"), "html", null, true);
        yield "</label>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"tenantId\" value=\"";
        // line 107
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["microsoftApp"] ?? null), "tenantId", [], "any", true, true, false, 107) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 107, $this->source); })()), "tenantId", [], "any", false, false, false, 107)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 107, $this->source); })()), "tenantId", [], "any", false, false, false, 107), "html", null, true)) : (""));
        yield "\" placeholder=\"Tenant Id\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client Id"), "html", null, true);
        yield "</label>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"clientId\" value=\"";
        // line 115
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["microsoftApp"] ?? null), "clientId", [], "any", true, true, false, 115) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 115, $this->source); })()), "clientId", [], "any", false, false, false, 115)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 115, $this->source); })()), "clientId", [], "any", false, false, false, 115), "html", null, true)) : (""));
        yield "\" placeholder=\"Client Id\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client Secret"), "html", null, true);
        yield "</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"clientSecret\" value=\"\" placeholder=\"Client Secret\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 127
        if (((array_key_exists("microsoftApp", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 127, $this->source); })()))) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127)))) {
            // line 128
            yield "\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update App"), "html", null, true);
            yield "\" type=\"submit\">
\t\t\t\t";
        } else {
            // line 130
            yield "\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add App"), "html", null, true);
            yield "\" type=\"submit\">
\t\t\t\t";
        }
        // line 132
        yield "
\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t<div class=\"section-info\" style=\"font-size: 14px;\">
\t\t\t\t\t<h3>Guide on creating a new app in Azure Active Directory:</h3>
\t\t\t\t\t
\t\t\t\t\t<p style=\"font-size: 14px;\">To add a new Microsoft App to your azure active directory, follow the steps as given below:</p>

\t\t\t\t\t<ul style=\"margin: 0px 20px 0px 0px;\">
\t\t\t\t\t\t<li>Go to Azure Active Directory -> App registerations</li>
\t\t\t\t\t\t<li>Create a New Registeration</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Enter your app details as following:</li>
\t\t\t\t\t\t\t<li>App Name: Enter an app name to easily help you identify its purpose</li>
\t\t\t\t\t\t\t<li>Supported Account Types: Select whichever option works the best for you (Recommended: Accounts in any organizational directory and personal Microsoft accounts)</li>
\t\t\t\t\t\t\t<li>Redirect URI:</li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Select Platform: Web</li>
\t\t\t\t\t\t\t\t<li>Enter the following redirect uri: ";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirectEndpoint"]) || array_key_exists("redirectEndpoint", $context) ? $context["redirectEndpoint"] : (function () { throw new RuntimeError('Variable "redirectEndpoint" does not exist.', 150, $this->source); })()), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li>Proceed to create your application</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Once your app has been created, in your app overview section, continue with adding a client credential by clicking on \"Add a certificate or secret\"</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Create a new client secret</li>
\t\t\t\t\t\t\t<li>Enter a description as per your preference to help identify the purpose of this client secret</li>
\t\t\t\t\t\t\t<li>Choose an expiration time as per your preference</li>
\t\t\t\t\t\t\t<li>Proceed to add your client secret</li>
\t\t\t\t\t\t\t<li>Copy the client secret value which will be needed later and cannot be viewed again</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Navigate to API permissions</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Click on \"Add a permission\" to add a new api permission. Add the following delegated permissions by selecting Microsoft APIs > Microsoft Graph > Delegate Permissions</li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>offline_access</li>
\t\t\t\t\t\t\t\t<li>openid</li>
\t\t\t\t\t\t\t\t<li>profile</li>
\t\t\t\t\t\t\t\t<li>User.Read</li>
\t\t\t\t\t\t\t\t<li>IMAP.AccessAsUser.All</li>
\t\t\t\t\t\t\t\t<li>SMTP.Send</li>
\t\t\t\t\t\t\t\t<li>POP.AccessAsUser.All</li>
\t\t\t\t\t\t\t\t<li>Mail.Read</li>
\t\t\t\t\t\t\t\t<li>Mail.ReadBasic</li>
\t\t\t\t\t\t\t\t<li>Mail.Send</li>
\t\t\t\t\t\t\t\t<li>Mail.Send.Shared</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Navigate to your app overview section</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Copy the Application (Client) Id</li>
\t\t\t\t\t\t\t<li>Copy the Directory (Tenant) Id</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Enter your client id, tenant id, and client secret in settings above as required.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 196
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

        // line 197
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar MicrosoftAppConfigurationModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please enter a valid name for your app.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\ttenantId: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please enter a valid tenant id.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tclientId: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please enter a valid client id.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tclientSecret: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please enter a valid client secret.\";
\t\t\t\t\t\t}
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar MicrosoftAppConfigurationView = Backbone.View.extend({
\t\t\t\tevents: {
\t\t\t\t\t'click #saveConfigurationSettings' : \"submitConfigurationSettings\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
\t\t\t\t},
                submitConfigurationSettings: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            ";
        // line 244
        if ((array_key_exists("microsoftApp", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 244, $this->source); })())))) {
            // line 245
            yield "\t\t\t\tnew MicrosoftAppConfigurationView({
\t\t\t\t\tel: \$(\"#app-settings-view\"),
\t\t\t\t\tmodel: new MicrosoftAppConfigurationModel({
\t\t\t\t\t\tname: \"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 248, $this->source); })()), "name", [], "any", false, false, false, 248), "html", null, true);
            yield "\",
\t\t\t\t\t\ttenantId: \"";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 249, $this->source); })()), "tenantId", [], "any", false, false, false, 249), "html", null, true);
            yield "\",
\t\t\t\t\t\tclientId: \"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 250, $this->source); })()), "clientId", [], "any", false, false, false, 250), "html", null, true);
            yield "\",
\t\t\t\t\t\tclientSecret: \"";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["microsoftApp"]) || array_key_exists("microsoftApp", $context) ? $context["microsoftApp"] : (function () { throw new RuntimeError('Variable "microsoftApp" does not exist.', 251, $this->source); })()), "clientSecret", [], "any", false, false, false, 251), "html", null, true);
            yield "\",
\t\t\t\t\t})
\t\t\t\t});
            ";
        } else {
            // line 255
            yield "                new MicrosoftAppConfigurationView({
                    el: \$(\"#app-settings-view\"),
                    model: new MicrosoftAppConfigurationModel({})
                });
            ";
        }
        // line 260
        yield "\t\t});
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
        return "@UVDeskCoreFramework/MicrosoftApps/manageConfigurations.html.twig";
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
        return array (  494 => 260,  487 => 255,  480 => 251,  476 => 250,  472 => 249,  468 => 248,  463 => 245,  461 => 244,  410 => 197,  397 => 196,  341 => 150,  321 => 132,  315 => 130,  309 => 128,  307 => 127,  297 => 120,  289 => 115,  283 => 112,  275 => 107,  269 => 104,  266 => 103,  261 => 99,  257 => 97,  253 => 95,  249 => 93,  247 => 92,  244 => 91,  242 => 90,  235 => 86,  229 => 82,  225 => 80,  221 => 78,  219 => 77,  214 => 74,  209 => 70,  203 => 68,  195 => 66,  193 => 65,  187 => 62,  184 => 61,  178 => 56,  172 => 54,  166 => 52,  164 => 51,  158 => 50,  153 => 48,  150 => 47,  147 => 46,  144 => 45,  106 => 8,  93 => 7,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Microsoft App Settings'|trans }}
{% endblock %}

{% block pageContent %}
\t<style>
\t\t.section-heading {
\t\t\tfont-size: 16px;
\t\t\tmargin: 0px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.section-description {
\t\t\tcolor: #6F6F6F;
\t\t\tmargin-top: unset !important;
\t\t\tmargin-bottom: 20px;
\t\t\tline-height: 1.4em;
\t\t}

\t\t.uv-element-block .uv-field-message {
\t\t\tfont-style: normal;
\t\t\tmargin: 0px 0px 20px 0px;
\t\t}

\t\t.section-info ul > ul {
\t\t\tmargin-bottom: 1.4rem;
\t\t}

\t\t.section-info ul > ul:last-child {
\t\t}

\t\t.section-info ul li {
\t\t\tmargin-bottom: 6px;
\t\t}

\t\t.section-info ul li:last-child {
\t\t\tmargin-bottom: unset;
\t\t}
\t</style>

\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t{% if microsoftApp is defined and microsoftApp is not empty %}
\t\t\t\t<h1>{{ 'Microsoft app settings'|trans }}</h1>
\t\t\t{% else %}
\t\t\t\t<h1>{{ 'Add a Microsoft app'|trans }}</h1>
\t\t\t{% endif %}

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"app-settings-view\">
\t\t\t\t{# App Name #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t{% if microsoftApp.name is defined and microsoftApp.name is not empty %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ microsoftApp.name }}\" placeholder=\"{{ 'App Name'|trans }}\" />
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"\" placeholder=\"{{ 'App Name'|trans }}\" />
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{# App Status #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t{% if microsoftApp.isEnabled is defined and microsoftApp.isEnabled == true %}
\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"checked\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Enabled'|trans }}</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t{% if microsoftApp.isVerified is defined %}
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t{% if microsoftApp.isVerified == true %}
\t\t\t\t\t\t\t<span style=\"font-size: 15px; color: #2ED04C; border: 1px solid #2ED04C; display: inline-block; padding: 2px 7px 3px 7px; margin: 10px 0 2px; border-radius: 3px;\">Verified</span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<span style=\"font-size: 15px; color: #FF5656; border: 1px solid #FF5656; display: inline-block; padding: 2px 7px 3px 7px; margin: 10px 0 2px; border-radius: 3px;\">Unverified</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t{# App Settings #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Tenant Id'|trans }}</label>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"tenantId\" value=\"{{ microsoftApp.tenantId is defined and microsoftApp.tenantId is not empty ? microsoftApp.tenantId : '' }}\" placeholder=\"Tenant Id\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Client Id'|trans }}</label>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"clientId\" value=\"{{ microsoftApp.clientId is defined and microsoftApp.clientId is not empty ? microsoftApp.clientId : '' }}\" placeholder=\"Client Id\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{'Client Secret'|trans }}</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"clientSecret\" value=\"\" placeholder=\"Client Secret\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{% if microsoftApp is defined and microsoftApp is not empty and microsoftApp.id is not empty %}
\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"{{ 'Update App'|trans }}\" type=\"submit\">
\t\t\t\t{% else %}
\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"{{ 'Add App'|trans }}\" type=\"submit\">
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t<div class=\"section-info\" style=\"font-size: 14px;\">
\t\t\t\t\t<h3>Guide on creating a new app in Azure Active Directory:</h3>
\t\t\t\t\t
\t\t\t\t\t<p style=\"font-size: 14px;\">To add a new Microsoft App to your azure active directory, follow the steps as given below:</p>

\t\t\t\t\t<ul style=\"margin: 0px 20px 0px 0px;\">
\t\t\t\t\t\t<li>Go to Azure Active Directory -> App registerations</li>
\t\t\t\t\t\t<li>Create a New Registeration</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Enter your app details as following:</li>
\t\t\t\t\t\t\t<li>App Name: Enter an app name to easily help you identify its purpose</li>
\t\t\t\t\t\t\t<li>Supported Account Types: Select whichever option works the best for you (Recommended: Accounts in any organizational directory and personal Microsoft accounts)</li>
\t\t\t\t\t\t\t<li>Redirect URI:</li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Select Platform: Web</li>
\t\t\t\t\t\t\t\t<li>Enter the following redirect uri: {{ redirectEndpoint }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li>Proceed to create your application</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Once your app has been created, in your app overview section, continue with adding a client credential by clicking on \"Add a certificate or secret\"</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Create a new client secret</li>
\t\t\t\t\t\t\t<li>Enter a description as per your preference to help identify the purpose of this client secret</li>
\t\t\t\t\t\t\t<li>Choose an expiration time as per your preference</li>
\t\t\t\t\t\t\t<li>Proceed to add your client secret</li>
\t\t\t\t\t\t\t<li>Copy the client secret value which will be needed later and cannot be viewed again</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Navigate to API permissions</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Click on \"Add a permission\" to add a new api permission. Add the following delegated permissions by selecting Microsoft APIs > Microsoft Graph > Delegate Permissions</li>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>offline_access</li>
\t\t\t\t\t\t\t\t<li>openid</li>
\t\t\t\t\t\t\t\t<li>profile</li>
\t\t\t\t\t\t\t\t<li>User.Read</li>
\t\t\t\t\t\t\t\t<li>IMAP.AccessAsUser.All</li>
\t\t\t\t\t\t\t\t<li>SMTP.Send</li>
\t\t\t\t\t\t\t\t<li>POP.AccessAsUser.All</li>
\t\t\t\t\t\t\t\t<li>Mail.Read</li>
\t\t\t\t\t\t\t\t<li>Mail.ReadBasic</li>
\t\t\t\t\t\t\t\t<li>Mail.Send</li>
\t\t\t\t\t\t\t\t<li>Mail.Send.Shared</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Navigate to your app overview section</li>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li>Copy the Application (Client) Id</li>
\t\t\t\t\t\t\t<li>Copy the Directory (Tenant) Id</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<li>Enter your client id, tenant id, and client secret in settings above as required.</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar MicrosoftAppConfigurationModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please enter a valid name for your app.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\ttenantId: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please enter a valid tenant id.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tclientId: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please enter a valid client id.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tclientSecret: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '' || value == 'none') {
\t\t\t\t\t\t\treturn \"Please enter a valid client secret.\";
\t\t\t\t\t\t}
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar MicrosoftAppConfigurationView = Backbone.View.extend({
\t\t\t\tevents: {
\t\t\t\t\t'click #saveConfigurationSettings' : \"submitConfigurationSettings\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
\t\t\t\t},
                submitConfigurationSettings: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            {% if microsoftApp is defined and microsoftApp is not empty %}
\t\t\t\tnew MicrosoftAppConfigurationView({
\t\t\t\t\tel: \$(\"#app-settings-view\"),
\t\t\t\t\tmodel: new MicrosoftAppConfigurationModel({
\t\t\t\t\t\tname: \"{{ microsoftApp.name }}\",
\t\t\t\t\t\ttenantId: \"{{ microsoftApp.tenantId }}\",
\t\t\t\t\t\tclientId: \"{{ microsoftApp.clientId }}\",
\t\t\t\t\t\tclientSecret: \"{{ microsoftApp.clientSecret }}\",
\t\t\t\t\t})
\t\t\t\t});
            {% else %}
                new MicrosoftAppConfigurationView({
                    el: \$(\"#app-settings-view\"),
                    model: new MicrosoftAppConfigurationModel({})
                });
            {% endif %}
\t\t});
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/MicrosoftApps/manageConfigurations.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/MicrosoftApps/manageConfigurations.html.twig");
    }
}
