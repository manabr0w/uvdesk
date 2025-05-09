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

/* @UVDeskMailbox/manageConfigurations.html.twig */
class __TwigTemplate_5c41f163df9faddc309b7807303b2724 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskMailbox/manageConfigurations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskMailbox/manageConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskMailbox/manageConfigurations.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox Settings"), "html", null, true);
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
\t</style>

\t<div class=\"uv-inner-section\">
\t\t";
        // line 30
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 31
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 32
        yield "
\t\t";
        // line 33
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 33, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 33, $this->source); })())], "method", false, false, false, 33), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 33, $this->source); })())], "method", false, false, false, 33);
        yield "

\t\t<div class=\"uv-view ";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "cookies", [], "any", false, false, false, 35) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "cookies", [], "any", false, false, false, 35), "get", ["uv-asideView"], "method", false, false, false, 35))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t";
        // line 36
        if ((array_key_exists("mailbox", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)))) {
            // line 37
            yield "\t\t\t\t<h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update Mailbox"), "html", null, true);
            yield "</h1>
\t\t\t";
        } else {
            // line 39
            yield "\t\t\t\t<h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Mailbox"), "html", null, true);
            yield "</h1>
\t\t\t";
        }
        // line 41
        yield "
            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"mailbox-settings-view\">
\t\t\t\t";
        // line 46
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t";
        // line 50
        if ((array_key_exists("mailbox", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)))) {
            // line 51
            yield "\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox ID - Leave blank to automatically create id"), "html", null, true);
            yield "\" />
\t\t\t\t\t\t";
        } else {
            // line 53
            yield "\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox ID - Leave blank to automatically create id"), "html", null, true);
            yield "\" />
\t\t\t\t\t\t";
        }
        // line 55
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 59
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t";
        // line 63
        if ((array_key_exists("mailbox", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63)))) {
            // line 64
            yield "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
            yield "\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox Name"), "html", null, true);
            yield "\" />
\t\t\t\t\t\t";
        } else {
            // line 66
            yield "\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox Name"), "html", null, true);
            yield "\" />
\t\t\t\t\t\t";
        }
        // line 68
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t";
        // line 72
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "isEnabled", [], "any", true, true, false, 75) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 75, $this->source); })()), "isEnabled", [], "any", false, false, false, 75) == true))) {
            // line 76
            yield "\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t";
        } else {
            // line 78
            yield "\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\">
\t\t\t\t\t\t\t";
        }
        // line 80
        yield "
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable Mailbox"), "html", null, true);
        yield "</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t";
        // line 89
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "isDeleted", [], "any", true, true, false, 92) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 92, $this->source); })()), "isDeleted", [], "any", false, false, false, 92) == true))) {
            // line 93
            yield "\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t";
        } else {
            // line 95
            yield "\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\">
\t\t\t\t\t\t\t";
        }
        // line 97
        yield "
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permanently delete from Inbox"), "html", null, true);
        yield "</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t";
        // line 108
        yield "\t\t\t\t<h3 class=\"section-heading\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Incoming Mail"), "html", null, true);
        yield "</h3>
\t\t\t\t<p class=\"section-description\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage how you wish to retrieve and process emails from your mailbox."), "html", null, true);
        yield "</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transport"), "html", null, true);
        yield "</label>

\t\t\t\t\t";
        // line 114
        if ((array_key_exists("mailbox", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 114, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 114)))) {
            // line 115
            yield "\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"mailboxIncomingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"gmail\" ";
            // line 117
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 117, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 117), "code", [], "any", false, false, false, 117) == "gmail")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gmail"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"imap\" ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 118, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 118), "code", [], "any", false, false, false, 118) == "imap")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IMAP"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"outlook\" ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 119, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 119), "code", [], "any", false, false, false, 119) == "outlook")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\" ";
            // line 120
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 120, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 120), "code", [], "any", false, false, false, 120) == "outlook_oauth")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook Modern Auth"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"yahoo\" ";
            // line 121
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 121, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 121), "code", [], "any", false, false, false, 121) == "yahoo")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yahoo"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
        } else {
            // line 124
            yield "\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"mailboxIncomingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\" selected>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"gmail\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gmail"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"imap\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IMAP"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"outlook\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook Modern Auth"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"yahoo\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yahoo"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
        }
        // line 133
        yield "\t\t\t\t</div>

\t\t\t\t<div class=\"imap-setting-references\"></div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t";
        // line 140
        yield "\t\t\t\t<h3 class=\"section-heading\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outgoing Mail"), "html", null, true);
        yield "</h3>
\t\t\t\t<p class=\"section-description\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage how you wish to send emails from your mailbox."), "html", null, true);
        yield "</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transport"), "html", null, true);
        yield "</label>

\t\t\t\t\t";
        // line 146
        if (array_key_exists("mailbox", $context)) {
            // line 147
            yield "\t\t\t\t\t\t<select name=\"smtp[transport]\" id=\"mailboxOutgoingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"outlook\" ";
            // line 149
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 149, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 149)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 149, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 149), "code", [], "any", false, false, false, 149) == "outlook"))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook"), "html", null, true);
            yield " </option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\" ";
            // line 150
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 150, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 150)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 150, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 150), "code", [], "any", false, false, false, 150) == "outlook_oauth"))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook Modern Auth"), "html", null, true);
            yield " </option>
\t\t\t\t\t\t\t<option value=\"swiftmailer_id\" ";
            // line 151
            if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 151, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 151)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 151, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 151), "code", [], "any", false, false, false, 151) == "swiftmailer_id"))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer"), "html", null, true);
            yield " </option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<div class=\"uv-element-block\" id='swiftMailerIdContainer' style=\"display:none;\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer ID"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t";
            // line 156
            if ((array_key_exists("swiftmailerConfigurations", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["swiftmailerConfigurations"]) || array_key_exists("swiftmailerConfigurations", $context) ? $context["swiftmailerConfigurations"] : (function () { throw new RuntimeError('Variable "swiftmailerConfigurations" does not exist.', 156, $this->source); })())))) {
                // line 157
                yield "\t\t\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t\t\t<option value=\"none\">";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t\t";
                // line 159
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["swiftmailerConfigurations"]) || array_key_exists("swiftmailerConfigurations", $context) ? $context["swiftmailerConfigurations"] : (function () { throw new RuntimeError('Variable "swiftmailerConfigurations" does not exist.', 159, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
                    // line 160
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    if (((array_key_exists("mailbox", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 160, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 160)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 160, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 160), "id", [], "any", false, false, false, 160) == CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 160)))) {
                        // line 161
                        yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 161), "html", null, true);
                        yield "\" selected>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 161), "html", null, true);
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 163
                        yield "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 163), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 163), "html", null, true);
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 165
                    yield "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['configuration'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                yield "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            } else {
                // line 168
                yield "\t\t\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t\t\t<option value=\"none\">";
                // line 169
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t";
            }
            // line 172
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 174
            yield "\t\t\t\t\t\t<select name=\"smtp[transport]\" id=\"mailboxOutgoingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\" selected>";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t<option value=\"outlook\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook"), "html", null, true);
            yield " </option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook Modern Auth"), "html", null, true);
            yield " </option>
\t\t\t\t\t\t\t<option value=\"swiftmailer_id\">";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t";
        }
        // line 181
        yield "\t\t\t\t</div>

\t\t\t\t<div class=\"smtp-setting-references\"></div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t";
        // line 187
        if ((array_key_exists("mailbox", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187)))) {
            // line 188
            yield "\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update Mailbox"), "html", null, true);
            yield "\" type=\"submit\">
\t\t\t\t";
        } else {
            // line 190
            yield "\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Mailbox"), "html", null, true);
            yield "\" type=\"submit\">
\t\t\t\t";
        }
        // line 192
        yield "\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 197
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

        // line 198
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<script id=\"default_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Host"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(host) != 'undefined' && host != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"<%- host %>\" placeholder=\"<%- host %>\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"\" placeholder=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("IMAP Host"), "html", null, true);
        yield "\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated Password"), "html", null, true);
        yield "\">
\t\t\t</div>
\t\t</div>
\t</script>

    <script id=\"gmail_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated Password"), "html", null, true);
        yield "\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script id=\"yahoo_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated Password"), "html", null, true);
        yield "\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script id=\"outlook_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("username@domain.com"), "html", null, true);
        yield "\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated Password"), "html", null, true);
        yield "\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script id=\"outlook_oauth_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>

            ";
        // line 304
        if ((array_key_exists("microsoftAccountCollection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftAccountCollection"]) || array_key_exists("microsoftAccountCollection", $context) ? $context["microsoftAccountCollection"] : (function () { throw new RuntimeError('Variable "microsoftAccountCollection" does not exist.', 304, $this->source); })())))) {
            // line 305
            yield "                <select name=\"imap[username]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No account selected</option>

                    ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["microsoftAccountCollection"]) || array_key_exists("microsoftAccountCollection", $context) ? $context["microsoftAccountCollection"] : (function () { throw new RuntimeError('Variable "microsoftAccountCollection" does not exist.', 308, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["microsoftAccount"]) {
                // line 309
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftAccount"], "id", [], "any", false, false, false, 309), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftAccount"], "email", [], "any", false, false, false, 309), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['microsoftAccount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 311
            yield "                </select>
            ";
        } else {
            // line 313
            yield "                <select name=\"imap[username]\" class=\"uv-select\" disabled>
                    <option selected>";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No microsoft account currently available"), "html", null, true);
            yield "</option>
                </select>
            ";
        }
        // line 317
        yield "
\t\t\t<p class=\"uv-field-info\" style=\"margin-top: unset;\">Select from one of the previously configured microsoft accounts.</p>
        </div>

\t\t<div class=\"uv-hr\"></div>

\t\t<div class=\"uv-element-block\">
            <p class=\"uv-field-label\" style=\"margin-bottom: 6px;\">";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Microsoft App"), "html", null, true);
        yield "</p>
\t\t\t<p class=\"uv-field-info\" style=\"font-style: normal; margin-top: unset;\">Continue by signing in through microsoft to add a new account.</p>

            ";
        // line 327
        if ((array_key_exists("microsoftAppCollection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftAppCollection"]) || array_key_exists("microsoftAppCollection", $context) ? $context["microsoftAppCollection"] : (function () { throw new RuntimeError('Variable "microsoftAppCollection" does not exist.', 327, $this->source); })())))) {
            // line 328
            yield "                <select id=\"imap-microsoftAppId\" name=\"imap[microsoftAppId]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No app selected</option>

                    ";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["microsoftAppCollection"]) || array_key_exists("microsoftAppCollection", $context) ? $context["microsoftAppCollection"] : (function () { throw new RuntimeError('Variable "microsoftAppCollection" does not exist.', 331, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["microsoftApp"]) {
                // line 332
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftApp"], "id", [], "any", false, false, false, 332), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftApp"], "name", [], "any", false, false, false, 332), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['microsoftApp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 334
            yield "                </select>

\t\t\t\t<button class=\"uv-btn continue-with-microsoft-app\" data-reference=\"imap-microsoftAppId\" style=\"background-color: #00a1f1;\">Continue with Microsoft</button>
            ";
        } else {
            // line 338
            yield "                <select id=\"imap-microsoftAppId\" name=\"imap[microsoftAppId]\" class=\"uv-select\" disabled>
                    <option selected>";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No configured microsoft app currently available"), "html", null, true);
            yield "</option>
                </select>

\t\t\t\t<a href=\"";
            // line 342
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings");
            yield "\" class=\"uv-btn\" style=\"background-color: #00a1f1;\">Manage Microsoft Apps</a>
            ";
        }
        // line 344
        yield "        </div>
\t</script>

    <script id=\"outlook_smtp_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 349
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"smtp[username]\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"smtp[username]\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 361
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"smtp[password]\" class=\"uv-field\" value=\"\" placeholder=\"Associated Password\" />
            </div>
        </div>
\t</script>

    <script id=\"outlook_oauth_smtp_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 371
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Username"), "html", null, true);
        yield "</label>

            ";
        // line 373
        if ((array_key_exists("microsoftAccountCollection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftAccountCollection"]) || array_key_exists("microsoftAccountCollection", $context) ? $context["microsoftAccountCollection"] : (function () { throw new RuntimeError('Variable "microsoftAccountCollection" does not exist.', 373, $this->source); })())))) {
            // line 374
            yield "                <select name=\"smtp[username]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No account selected</option>

                    ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["microsoftAccountCollection"]) || array_key_exists("microsoftAccountCollection", $context) ? $context["microsoftAccountCollection"] : (function () { throw new RuntimeError('Variable "microsoftAccountCollection" does not exist.', 377, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["microsoftAccount"]) {
                // line 378
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftAccount"], "id", [], "any", false, false, false, 378), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftAccount"], "email", [], "any", false, false, false, 378), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['microsoftAccount'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            yield "                </select>
            ";
        } else {
            // line 382
            yield "                <select name=\"smtp[username]\" class=\"uv-select\" disabled>
                    <option selected>";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No microsoft account currently available"), "html", null, true);
            yield "</option>
                </select>
            ";
        }
        // line 386
        yield "
\t\t\t<p class=\"uv-field-info\" style=\"margin-top: unset;\">Select from one of the previously configured microsoft accounts.</p>
        </div>

\t\t<div class=\"uv-hr\"></div>

        <div class=\"uv-element-block\">
\t\t\t<p class=\"uv-field-label\" style=\"margin-bottom: 6px;\">";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Microsoft App"), "html", null, true);
        yield "</p>
\t\t\t<p class=\"uv-field-info\" style=\"font-style: normal; margin-top: unset;\">Continue by signing in through microsoft to add a new account.</p>

            ";
        // line 396
        if ((array_key_exists("microsoftAppCollection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["microsoftAppCollection"]) || array_key_exists("microsoftAppCollection", $context) ? $context["microsoftAppCollection"] : (function () { throw new RuntimeError('Variable "microsoftAppCollection" does not exist.', 396, $this->source); })())))) {
            // line 397
            yield "                <select id=\"smtp-microsoftAppId\" name=\"smtp[microsoftAppId]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No app selected</option>

                    ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["microsoftAppCollection"]) || array_key_exists("microsoftAppCollection", $context) ? $context["microsoftAppCollection"] : (function () { throw new RuntimeError('Variable "microsoftAppCollection" does not exist.', 400, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["microsoftApp"]) {
                // line 401
                yield "                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftApp"], "id", [], "any", false, false, false, 401), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["microsoftApp"], "name", [], "any", false, false, false, 401), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['microsoftApp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
            yield "                </select>

\t\t\t\t<button class=\"uv-btn continue-with-microsoft-app\" data-reference=\"smtp-microsoftAppId\" style=\"background-color: #00a1f1;\" type=\"button\">Continue with Microsoft</button>
            ";
        } else {
            // line 407
            yield "                <select id=\"smtp-microsoftAppId\" name=\"smtp[microsoftAppId]\" class=\"uv-select\" disabled>
                    <option selected>";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No configured microsoft app currently available"), "html", null, true);
            yield "</option>
                </select>

\t\t\t\t<a href=\"";
            // line 411
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings");
            yield "\" class=\"uv-btn\" style=\"background-color: #00a1f1;\">Manage Microsoft Apps</a>
            ";
        }
        // line 413
        yield "        </div>
\t</script>

    <script id=\"swift_mailer_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<div id=\"swift_mailer\">
\t\t\t\t<label class=\"uv-field-label\">";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer ID"), "html", null, true);
        yield "</label>
\t\t\t\t";
        // line 420
        if ((array_key_exists("swiftmailerConfigurations", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["swiftmailerConfigurations"]) || array_key_exists("swiftmailerConfigurations", $context) ? $context["swiftmailerConfigurations"] : (function () { throw new RuntimeError('Variable "swiftmailerConfigurations" does not exist.', 420, $this->source); })())))) {
            // line 421
            yield "\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t<option value=\"none\">";
            // line 422
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            yield "</option>
\t\t\t\t\t\t";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["swiftmailerConfigurations"]) || array_key_exists("swiftmailerConfigurations", $context) ? $context["swiftmailerConfigurations"] : (function () { throw new RuntimeError('Variable "swiftmailerConfigurations" does not exist.', 423, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
                // line 424
                yield "\t\t\t\t\t\t\t";
                if (((array_key_exists("mailbox", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 424, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 424)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 424, $this->source); })()), "swiftmailerConfiguration", [], "any", false, false, false, 424), "id", [], "any", false, false, false, 424) == CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 424)))) {
                    // line 425
                    yield "\t\t\t\t\t\t\t\t<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 425), "html", null, true);
                    yield "\" selected>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 425), "html", null, true);
                    yield "</option>
\t\t\t\t\t\t\t";
                } else {
                    // line 427
                    yield "\t\t\t\t\t\t\t\t<option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 427), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["configuration"], "id", [], "any", false, false, false, 427), "html", null, true);
                    yield "</option>
\t\t\t\t\t\t\t";
                }
                // line 429
                yield "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['configuration'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 430
            yield "\t\t\t\t\t</select>
\t\t\t\t";
        } else {
            // line 432
            yield "\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t<option value=\"none\">";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
            yield "</option>
\t\t\t\t\t</select>
\t\t\t\t";
        }
        // line 436
        yield "\t\t\t</div>
\t\t</div>
\t</script>

\t<script type=\"text/javascript\">
\t\tlet microsoftAuthPlaceholderUri = \"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uvdesk_member_core_framework_integrations_microsoft_apps_add_account", ["appId" => "placeholder", "origin" => "helpdesk_member_mailbox_create_configuration"]), "html", null, true);
        yield "\";

\t\t\$(function () {
\t\t\tvar MailboxConfigurationModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please specify a valid name for your mailbox.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tswiftmailer_id: function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif ('swiftmailer_id' == outgoingEmailSettings.transport && (value == undefined || value == '' || value == 'none')) {
\t\t\t\t\t\t\treturn \"Please select a valid swift-mailer configuration.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"imap[transport]\": function(value) {
\t\t\t\t\t\tlet incomingEmailSettings = this.get('incoming');

                        if ('' == incomingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please select a valid Incoming mailer service\";
                            }
                        }
                    },
\t\t\t\t\t\"imap[host]\": function(value) {
                        if ('custom' == this.get('transport') || 'imap' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a valid host address.\";
                            }
                        }
                    },
                    \"imap[username]\": function(value) {
\t\t\t\t\t\tlet incomingEmailSettings = this.get('incoming');

\t\t\t\t\t\tif (incomingEmailSettings.transport != \"\" && incomingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ('outlook_oauth' != incomingEmailSettings.transport) {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please enter a valid email address\";
\t\t\t\t\t\t\t\t} else if (/^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/.test(value) == false) {
\t\t\t\t\t\t\t\t\treturn \"Please specify a valid email address\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please select from one of the available microsoft accounts\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
                    \"imap[password]\": function(value) {
\t\t\t\t\t\tlet incomingEmailSettings = this.get('incoming');

\t\t\t\t\t\tif (incomingEmailSettings.transport != \"\" && incomingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ((value == undefined || value == '') && this.attributes['imap[transport]'] != 'webhook' && this.attributes['imap[transport]'] != 'outlook_oauth') {
\t\t\t\t\t\t\t\treturn \"Please enter the associated account password.\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"smtp[transport]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

                        if ('' == outgoingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please select a valid Outgoing mailer service\";
                            }
                        }
                    },
\t\t\t\t\t\"smtp[host]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

                        if ('smtp' == outgoingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please enter your server host address\";
                            }
                        }
                    },
\t\t\t\t\t\"smtp[username]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif (outgoingEmailSettings.transport != \"\" && outgoingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ('outlook_oauth' != outgoingEmailSettings.transport) {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please enter a valid username\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please select from one of the available microsoft accounts\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"smtp[senderAddress]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif (outgoingEmailSettings.transport == \"default\") {
                            if (value != undefined && value != '') {
\t\t\t\t\t\t\t\tif (/^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/.test(value) == false) {
\t\t\t\t\t\t\t\t\treturn \"Please specify a valid email address\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
                    \"smtp[password]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif (outgoingEmailSettings.transport != \"\" && outgoingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ((value == undefined || value == '') && 'outlook_oauth' != outgoingEmailSettings.transport) {
\t\t\t\t\t\t\t\treturn \"Please enter the password associated with your email address\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
                    \"smtp[port]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

                        if ('smtp' == outgoingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please specify a port number to connect with your mail server\";
                            }
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar MailboxConfigurationView = Backbone.View.extend({
                default_imap_configuration_template: _.template(\$(\"#default_imap_configuration_template\").html()),
                gmail_imap_configuration_template: _.template(\$(\"#gmail_imap_configuration_template\").html()),
\t\t\t\tyahoo_imap_configuration_template: _.template(\$(\"#yahoo_imap_configuration_template\").html()),
\t\t\t\toutlook_imap_configuration_template: _.template(\$(\"#outlook_imap_configuration_template\").html()),
\t\t\t\toutlook_oauth_imap_configuration_template: _.template(\$(\"#outlook_oauth_imap_configuration_template\").html()),
                outlook_smtp_configuration_template: _.template(\$(\"#outlook_smtp_configuration_template\").html()),
                outlook_oauth_smtp_configuration_template: _.template(\$(\"#outlook_oauth_smtp_configuration_template\").html()),
                swift_mailer_configuration_template: _.template(\$(\"#swift_mailer_configuration_template\").html()),
\t\t\t\tevents: {
                    'change #mailboxIncomingTransportType': 'changeIncomingTransportType',
\t\t\t\t\t'change #mailboxOutgoingTransportType': 'changeOutgoingTransportType',
\t\t\t\t\t'click #saveConfigurationSettings' : \"submitConfigurationSettings\",
\t\t\t\t\t'click .continue-with-microsoft-app': \"continueWithMicrosoftApp\"
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);

                    this.renderIncomingTransportConfigurations();
\t\t\t\t\tthis.renderOutgoingTransportConfigurations();
\t\t\t\t},
                changeIncomingTransportType: function(e) {
\t\t\t\t\tlet transport = \$(e.target).val();
\t\t\t\t\tlet incomingEmailSettings = this.model.get('incoming');

\t\t\t\t\tincomingEmailSettings.transport = transport;
\t\t\t\t\tthis.model.set('incoming', incomingEmailSettings);

\t\t\t\t\tconsole.log('changeIncomingTransportType model:', incomingEmailSettings);

                    this.renderIncomingTransportConfigurations();
                },
\t\t\t\tchangeOutgoingTransportType: function(e) {
\t\t\t\t\tlet transport = \$(e.target).val();
\t\t\t\t\tlet outgoingEmailSettings = this.model.get('outgoing');

\t\t\t\t\toutgoingEmailSettings.transport = transport;
\t\t\t\t\tthis.model.set('outgoing', outgoingEmailSettings);

                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderOutgoingTransportConfigurations();
                },
\t\t\t\tcontinueWithMicrosoftApp: function(e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\tlet reference = \$(e.target).data('reference');
\t\t\t\t\tlet microsoftAppId = \$(\"#\" + reference).val();

\t\t\t\t\tif (microsoftAppId != \"\") {
\t\t\t\t\t\twindow.location.href = microsoftAuthPlaceholderUri.replace('placeholder', microsoftAppId);
\t\t\t\t\t} else {
\t\t\t\t\t\tconsole.log('select a valid microsoft app');
\t\t\t\t\t}
                },
                renderIncomingTransportConfigurations: function() {
\t\t\t\t\tlet incomingEmailSettings = this.model.get('incoming');

\t\t\t\t\tconsole.log('renderIncomingTransportConfigurations:', incomingEmailSettings);

                    switch (incomingEmailSettings.transport) {
                        case 'imap':
                            \$('.imap-setting-references').html(this.default_imap_configuration_template(incomingEmailSettings));
                            break;
                        case 'gmail':
                            \$('.imap-setting-references').html(this.gmail_imap_configuration_template(incomingEmailSettings));
                            break;
                        case 'yahoo':
                            \$('.imap-setting-references').html(this.yahoo_imap_configuration_template(incomingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'outlook':
                            \$('.imap-setting-references').html(this.outlook_imap_configuration_template(incomingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'outlook_oauth':
                            \$('.imap-setting-references').html(this.outlook_oauth_imap_configuration_template(incomingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'swiftmailer_id':
                            \$('.imap-setting-references').html(this.swift_mailer_configuration_template(incomingEmailSettings));
                            break;
                        default:
                            break;
                    }
                },
\t\t\t\trenderOutgoingTransportConfigurations: function() {
\t\t\t\t\tlet outgoingEmailSettings = this.model.get('outgoing');

                    switch (outgoingEmailSettings.transport) {
\t\t\t\t\t\tcase 'outlook':
                            \$('.smtp-setting-references').html(this.outlook_smtp_configuration_template(outgoingEmailSettings));
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase 'swiftmailer_id':
\t\t\t\t\t\t\t\$('#swiftMailerIdContainer').remove();
                            \$('.smtp-setting-references').html(this.swift_mailer_configuration_template(outgoingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'outlook_oauth':
                            \$('.smtp-setting-references').html(this.outlook_oauth_smtp_configuration_template(outgoingEmailSettings));
                            break;
                        default:
\t\t\t\t\t\t\t\$('.smtp-setting-references').html('')
                            break;
                    }
                },
                submitConfigurationSettings: function(e) {
                    e.preventDefault();

                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            ";
        // line 681
        if (array_key_exists("mailbox", $context)) {
            // line 682
            yield "\t\t\t\tnew MailboxConfigurationView({
\t\t\t\t\tel: \$(\"#mailbox-settings-view\"),
\t\t\t\t\tmodel: new MailboxConfigurationModel({
\t\t\t\t\t\tincoming: {
\t\t\t\t\t\t\ttransport: \"";
            // line 686
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "imapConfiguration", [], "any", false, true, false, 686), "code", [], "any", true, true, false, 686) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 686, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 686), "code", [], "any", false, false, false, 686)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 686, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 686), "code", [], "any", false, false, false, 686), "html", null, true)) : (""));
            yield "\",
\t\t\t\t\t\t\thost: \"";
            // line 687
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "imapConfiguration", [], "any", false, true, false, 687), "host", [], "any", true, true, false, 687) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 687, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 687), "host", [], "any", false, false, false, 687)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 687, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 687), "host", [], "any", false, false, false, 687), "html", null, true)) : (""));
            yield "\",
\t\t\t\t\t\t\tusername: \"";
            // line 688
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "imapConfiguration", [], "any", false, true, false, 688), "username", [], "any", true, true, false, 688) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 688, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 688), "username", [], "any", false, false, false, 688)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 688, $this->source); })()), "imapConfiguration", [], "any", false, false, false, 688), "username", [], "any", false, false, false, 688), "html", null, true)) : (""));
            yield "\",
\t\t\t\t\t\t},
\t\t\t\t\t\toutgoing: {
\t\t\t\t\t\t\ttransport: \"";
            // line 691
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "smtpConfiguration", [], "any", false, true, false, 691), "code", [], "any", true, true, false, 691) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 691, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 691), "code", [], "any", false, false, false, 691)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 691, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 691), "code", [], "any", false, false, false, 691), "html", null, true)) : (""));
            yield "\",
\t\t\t\t\t\t\thost: \"";
            // line 692
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "smtpConfiguration", [], "any", false, true, false, 692), "host", [], "any", true, true, false, 692) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 692, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 692), "host", [], "any", false, false, false, 692)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 692, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 692), "host", [], "any", false, false, false, 692), "html", null, true)) : (""));
            yield "\",
\t\t\t\t\t\t\tusername: \"";
            // line 693
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["mailbox"] ?? null), "smtpConfiguration", [], "any", false, true, false, 693), "username", [], "any", true, true, false, 693) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 693, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 693), "username", [], "any", false, false, false, 693)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mailbox"]) || array_key_exists("mailbox", $context) ? $context["mailbox"] : (function () { throw new RuntimeError('Variable "mailbox" does not exist.', 693, $this->source); })()), "smtpConfiguration", [], "any", false, false, false, 693), "username", [], "any", false, false, false, 693), "html", null, true)) : (""));
            yield "\",
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
            ";
        } else {
            // line 698
            yield "                new MailboxConfigurationView({
                    el: \$(\"#mailbox-settings-view\"),
                    model: new MailboxConfigurationModel({ incoming: { transport: '' }, outgoing: { transport: '' } })
                });
            ";
        }
        // line 703
        yield "\t\t});
\t</script>
\t
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t\tconst transportDropdown = document.getElementById('mailboxOutgoingTransportType');
\t\t\tconst swiftMailerContainer = document.getElementById('swiftMailerIdContainer');

\t\t\t// Function to toggle Swift Mailer field visibility
\t\t\tfunction toggleSwiftMailerField() {
\t\t\t\t// Check if the selected value matches 'swiftmailer_id'
\t\t\t\tif (transportDropdown.value === 'swiftmailer_id') {
\t\t\t\t\tswiftMailerContainer.style.display = 'block'; // Show container
\t\t\t\t} else {
\t\t\t\t\tswiftMailerContainer.style.display = 'none'; // Hide container
\t\t\t\t}
\t\t\t}

\t\t\ttoggleSwiftMailerField();

\t\t\ttransportDropdown.addEventListener('change', toggleSwiftMailerField);
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
        return "@UVDeskMailbox/manageConfigurations.html.twig";
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
        return array (  1333 => 703,  1326 => 698,  1318 => 693,  1314 => 692,  1310 => 691,  1304 => 688,  1300 => 687,  1296 => 686,  1290 => 682,  1288 => 681,  1045 => 441,  1038 => 436,  1032 => 433,  1029 => 432,  1025 => 430,  1019 => 429,  1011 => 427,  1003 => 425,  1000 => 424,  996 => 423,  992 => 422,  989 => 421,  987 => 420,  983 => 419,  975 => 413,  970 => 411,  964 => 408,  961 => 407,  955 => 403,  944 => 401,  940 => 400,  935 => 397,  933 => 396,  927 => 393,  918 => 386,  912 => 383,  909 => 382,  905 => 380,  894 => 378,  890 => 377,  885 => 374,  883 => 373,  878 => 371,  865 => 361,  850 => 349,  843 => 344,  838 => 342,  832 => 339,  829 => 338,  823 => 334,  812 => 332,  808 => 331,  803 => 328,  801 => 327,  795 => 324,  786 => 317,  780 => 314,  777 => 313,  773 => 311,  762 => 309,  758 => 308,  753 => 305,  751 => 304,  746 => 302,  736 => 295,  730 => 292,  721 => 286,  716 => 284,  709 => 280,  699 => 273,  693 => 270,  684 => 264,  679 => 262,  672 => 258,  662 => 251,  656 => 248,  647 => 242,  642 => 240,  635 => 236,  625 => 229,  619 => 226,  610 => 220,  605 => 218,  598 => 214,  589 => 208,  580 => 202,  572 => 198,  559 => 197,  545 => 192,  539 => 190,  533 => 188,  531 => 187,  523 => 181,  517 => 178,  513 => 177,  509 => 176,  505 => 175,  502 => 174,  498 => 172,  492 => 169,  489 => 168,  485 => 166,  479 => 165,  471 => 163,  463 => 161,  460 => 160,  456 => 159,  452 => 158,  449 => 157,  447 => 156,  443 => 155,  432 => 151,  424 => 150,  416 => 149,  412 => 148,  409 => 147,  407 => 146,  402 => 144,  396 => 141,  391 => 140,  383 => 133,  377 => 130,  373 => 129,  369 => 128,  365 => 127,  361 => 126,  357 => 125,  354 => 124,  344 => 121,  336 => 120,  328 => 119,  320 => 118,  312 => 117,  308 => 116,  305 => 115,  303 => 114,  298 => 112,  292 => 109,  287 => 108,  278 => 101,  272 => 97,  268 => 95,  264 => 93,  262 => 92,  257 => 89,  250 => 84,  244 => 80,  240 => 78,  236 => 76,  234 => 75,  229 => 72,  224 => 68,  218 => 66,  210 => 64,  208 => 63,  202 => 60,  199 => 59,  194 => 55,  188 => 53,  180 => 51,  178 => 50,  172 => 47,  169 => 46,  163 => 41,  157 => 39,  151 => 37,  149 => 36,  143 => 35,  138 => 33,  135 => 32,  132 => 31,  129 => 30,  106 => 8,  93 => 7,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Mailbox Settings'|trans }}
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
\t</style>

\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t{% if mailbox is defined and mailbox.id is not empty %}
\t\t\t\t<h1>{{ 'Update Mailbox'|trans }}</h1>
\t\t\t{% else %}
\t\t\t\t<h1>{{ 'Add Mailbox'|trans }}</h1>
\t\t\t{% endif %}

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"mailbox-settings-view\">
\t\t\t\t{# Mailer Id #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'ID'|trans }}</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t{% if mailbox is defined and mailbox.id is not empty %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"{{ mailbox.id }}\" placeholder=\"{{ 'Mailbox ID - Leave blank to automatically create id'|trans }}\" />
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"{{ 'Mailbox ID - Leave blank to automatically create id'|trans }}\" />
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{# Mailer Name #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t{% if mailbox is defined and mailbox.name is not empty %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ mailbox.name }}\" placeholder=\"{{ 'Mailbox Name'|trans }}\" />
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"\" placeholder=\"{{ 'Mailbox Name'|trans }}\" />
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t{# Status #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t{% if mailbox.isEnabled is defined and mailbox.isEnabled == true %}
\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Enable Mailbox'|trans }}</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t{# Default Mailbox #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t{% if mailbox.isDeleted is defined and mailbox.isDeleted == true %}
\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<input name=\"isDeleted\" type=\"checkbox\">
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Permanently delete from Inbox'|trans }}</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t{# IMAP Settings #}
\t\t\t\t<h3 class=\"section-heading\">{{ 'Incoming Mail'|trans }}</h3>
\t\t\t\t<p class=\"section-description\">{{ 'Manage how you wish to retrieve and process emails from your mailbox.'|trans }}</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Transport'|trans }}</label>

\t\t\t\t\t{% if mailbox is defined and mailbox.imapConfiguration is not empty %}
\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"mailboxIncomingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"gmail\" {% if mailbox.imapConfiguration.code == 'gmail' %}selected{% endif %}>{{ 'Gmail'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"imap\" {% if mailbox.imapConfiguration.code == 'imap' %}selected{% endif %}>{{ 'IMAP'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"outlook\" {% if mailbox.imapConfiguration.code == 'outlook' %}selected{% endif %}>{{ 'Outlook'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\" {% if mailbox.imapConfiguration.code == 'outlook_oauth' %}selected{% endif %}>{{ 'Outlook Modern Auth'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"yahoo\" {% if mailbox.imapConfiguration.code == 'yahoo' %}selected{% endif %}>{{ 'Yahoo'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<select name=\"imap[transport]\" id=\"mailboxIncomingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\" selected>{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"gmail\">{{ 'Gmail'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"imap\">{{ 'IMAP'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"outlook\">{{ 'Outlook'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\">{{ 'Outlook Modern Auth'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"yahoo\">{{ 'Yahoo'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"imap-setting-references\"></div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t{# SMTP Settings #}
\t\t\t\t<h3 class=\"section-heading\">{{ 'Outgoing Mail'|trans }}</h3>
\t\t\t\t<p class=\"section-description\">{{ 'Manage how you wish to send emails from your mailbox.'|trans }}</p>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Transport'|trans }}</label>

\t\t\t\t\t{% if mailbox is defined %}
\t\t\t\t\t\t<select name=\"smtp[transport]\" id=\"mailboxOutgoingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"outlook\" {% if mailbox.smtpConfiguration is not empty and mailbox.smtpConfiguration.code == 'outlook' %}selected{% endif %}>{{ 'Outlook'|trans }} </option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\" {% if mailbox.smtpConfiguration is not empty and mailbox.smtpConfiguration.code == 'outlook_oauth' %}selected{% endif %}>{{ 'Outlook Modern Auth'|trans }} </option>
\t\t\t\t\t\t\t<option value=\"swiftmailer_id\" {% if mailbox.swiftmailerConfiguration is not empty and mailbox.swiftmailerConfiguration.code == 'swiftmailer_id' %}selected{% endif %}>{{ 'Swift Mailer'|trans }} </option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<div class=\"uv-element-block\" id='swiftMailerIdContainer' style=\"display:none;\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Swift Mailer ID'|trans }}</label>
\t\t\t\t\t\t\t{% if swiftmailerConfigurations is defined and swiftmailerConfigurations is not empty %}
\t\t\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t\t\t<option value=\"none\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t\t\t{% for configuration in swiftmailerConfigurations %}
\t\t\t\t\t\t\t\t\t\t{% if mailbox is defined and mailbox.swiftmailerConfiguration and mailbox.swiftmailerConfiguration.id == configuration.id %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ configuration.id }}\" selected>{{ configuration.id }}</option>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{ configuration.id }}\">{{ configuration.id }}</option>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t\t\t\t<option value=\"none\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<select name=\"smtp[transport]\" id=\"mailboxOutgoingTransportType\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"\" selected>{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"outlook\">{{ 'Outlook'|trans }} </option>
\t\t\t\t\t\t\t<option value=\"outlook_oauth\">{{ 'Outlook Modern Auth'|trans }} </option>
\t\t\t\t\t\t\t<option value=\"swiftmailer_id\">{{ 'Swift Mailer'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"smtp-setting-references\"></div>

\t\t\t\t<div class=\"uv-hr\"></div>

\t\t\t\t{% if mailbox is defined and mailbox.id is not empty %}
\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"{{ 'Update Mailbox'|trans }}\" type=\"submit\">
\t\t\t\t{% else %}
\t\t\t\t\t<input id=\"saveConfigurationSettings\" class=\"uv-btn\" href=\"#\" value=\"{{ 'Create Mailbox'|trans }}\" type=\"submit\">
\t\t\t\t{% endif %}
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<script id=\"default_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Host'|trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(host) != 'undefined' && host != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"<%- host %>\" placeholder=\"<%- host %>\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[host]\" value=\"\" placeholder=\"{{'IMAP Host'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Username'|trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"{{'username@domain.com'|trans }}\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"{{'username@domain.com'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{'Password'|trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"{{'Associated Password'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</script>

    <script id=\"gmail_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Username' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"{{ 'username@domain.com'|trans }}\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"{{ 'username@domain.com'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Password' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"{{ 'Associated Password'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script id=\"yahoo_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Username' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"{{ 'username@domain.com'|trans }}\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"{{ 'username@domain.com'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Password' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"{{ 'Associated Password'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script id=\"outlook_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Username' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<% if (typeof(username) != 'undefined' && username != '') { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"<%- username %>\" placeholder=\"{{ 'username@domain.com'|trans }}\">
\t\t\t\t<% } else { %>
\t\t\t\t\t<input class=\"uv-field\" type=\"text\" name=\"imap[username]\" value=\"\" placeholder=\"{{ 'username@domain.com'|trans }}\">
                <% } %>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"uv-element-block\">
\t\t\t<label class=\"uv-field-label\">{{ 'Password' |trans }}</label>

\t\t\t<div class=\"uv-field-block\">
\t\t\t\t<input class=\"uv-field\" type=\"password\" name=\"imap[password]\" placeholder=\"{{ 'Associated Password'|trans }}\">
\t\t\t</div>
\t\t</div>
\t</script>

\t<script id=\"outlook_oauth_imap_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>

            {% if microsoftAccountCollection is defined and microsoftAccountCollection is not empty %}
                <select name=\"imap[username]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No account selected</option>

                    {% for microsoftAccount in microsoftAccountCollection %}
                        <option value=\"{{ microsoftAccount.id }}\">{{ microsoftAccount.email }}</option>
                    {% endfor %}
                </select>
            {% else %}
                <select name=\"imap[username]\" class=\"uv-select\" disabled>
                    <option selected>{{ 'No microsoft account currently available'|trans }}</option>
                </select>
            {% endif %}

\t\t\t<p class=\"uv-field-info\" style=\"margin-top: unset;\">Select from one of the previously configured microsoft accounts.</p>
        </div>

\t\t<div class=\"uv-hr\"></div>

\t\t<div class=\"uv-element-block\">
            <p class=\"uv-field-label\" style=\"margin-bottom: 6px;\">{{ 'Microsoft App'|trans }}</p>
\t\t\t<p class=\"uv-field-info\" style=\"font-style: normal; margin-top: unset;\">Continue by signing in through microsoft to add a new account.</p>

            {% if microsoftAppCollection is defined and microsoftAppCollection is not empty %}
                <select id=\"imap-microsoftAppId\" name=\"imap[microsoftAppId]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No app selected</option>

                    {% for microsoftApp in microsoftAppCollection %}
                        <option value=\"{{ microsoftApp.id }}\">{{ microsoftApp.name }}</option>
                    {% endfor %}
                </select>

\t\t\t\t<button class=\"uv-btn continue-with-microsoft-app\" data-reference=\"imap-microsoftAppId\" style=\"background-color: #00a1f1;\">Continue with Microsoft</button>
            {% else %}
                <select id=\"imap-microsoftAppId\" name=\"imap[microsoftAppId]\" class=\"uv-select\" disabled>
                    <option selected>{{ 'No configured microsoft app currently available'|trans }}</option>
                </select>

\t\t\t\t<a href=\"{{ path('uvdesk_member_core_framework_microsoft_apps_settings') }}\" class=\"uv-btn\" style=\"background-color: #00a1f1;\">Manage Microsoft Apps</a>
            {% endif %}
        </div>
\t</script>

    <script id=\"outlook_smtp_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Username'|trans }}</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"smtp[username]\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"smtp[username]\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"smtp[password]\" class=\"uv-field\" value=\"\" placeholder=\"Associated Password\" />
            </div>
        </div>
\t</script>

    <script id=\"outlook_oauth_smtp_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Username'|trans }}</label>

            {% if microsoftAccountCollection is defined and microsoftAccountCollection is not empty %}
                <select name=\"smtp[username]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No account selected</option>

                    {% for microsoftAccount in microsoftAccountCollection %}
                        <option value=\"{{ microsoftAccount.id }}\">{{ microsoftAccount.email }}</option>
                    {% endfor %}
                </select>
            {% else %}
                <select name=\"smtp[username]\" class=\"uv-select\" disabled>
                    <option selected>{{ 'No microsoft account currently available'|trans }}</option>
                </select>
            {% endif %}

\t\t\t<p class=\"uv-field-info\" style=\"margin-top: unset;\">Select from one of the previously configured microsoft accounts.</p>
        </div>

\t\t<div class=\"uv-hr\"></div>

        <div class=\"uv-element-block\">
\t\t\t<p class=\"uv-field-label\" style=\"margin-bottom: 6px;\">{{ 'Microsoft App'|trans }}</p>
\t\t\t<p class=\"uv-field-info\" style=\"font-style: normal; margin-top: unset;\">Continue by signing in through microsoft to add a new account.</p>

            {% if microsoftAppCollection is defined and microsoftAppCollection is not empty %}
                <select id=\"smtp-microsoftAppId\" name=\"smtp[microsoftAppId]\" class=\"uv-select\">
\t\t\t\t\t<option value=\"\" selected>No app selected</option>

                    {% for microsoftApp in microsoftAppCollection %}
                        <option value=\"{{ microsoftApp.id }}\">{{ microsoftApp.name }}</option>
                    {% endfor %}
                </select>

\t\t\t\t<button class=\"uv-btn continue-with-microsoft-app\" data-reference=\"smtp-microsoftAppId\" style=\"background-color: #00a1f1;\" type=\"button\">Continue with Microsoft</button>
            {% else %}
                <select id=\"smtp-microsoftAppId\" name=\"smtp[microsoftAppId]\" class=\"uv-select\" disabled>
                    <option selected>{{ 'No configured microsoft app currently available'|trans }}</option>
                </select>

\t\t\t\t<a href=\"{{ path('uvdesk_member_core_framework_microsoft_apps_settings') }}\" class=\"uv-btn\" style=\"background-color: #00a1f1;\">Manage Microsoft Apps</a>
            {% endif %}
        </div>
\t</script>

    <script id=\"swift_mailer_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t<div id=\"swift_mailer\">
\t\t\t\t<label class=\"uv-field-label\">{{ 'Swift Mailer ID'|trans }}</label>
\t\t\t\t{% if swiftmailerConfigurations is defined and swiftmailerConfigurations is not empty %}
\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t<option value=\"none\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t\t{% for configuration in swiftmailerConfigurations %}
\t\t\t\t\t\t\t{% if mailbox is defined and mailbox.swiftmailerConfiguration and mailbox.swiftmailerConfiguration.id == configuration.id %}
\t\t\t\t\t\t\t\t<option value=\"{{ configuration.id }}\" selected>{{ configuration.id }}</option>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<option value=\"{{ configuration.id }}\">{{ configuration.id }}</option>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t{% else %}
\t\t\t\t\t<select name=\"swiftmailer_id\" class=\"uv-select\">
\t\t\t\t\t\t<option value=\"none\">{{ 'None Selected'|trans }}</option>
\t\t\t\t\t</select>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</script>

\t<script type=\"text/javascript\">
\t\tlet microsoftAuthPlaceholderUri = \"{{ url('uvdesk_member_core_framework_integrations_microsoft_apps_add_account', { appId: 'placeholder', origin: 'helpdesk_member_mailbox_create_configuration' }) }}\";

\t\t\$(function () {
\t\t\tvar MailboxConfigurationModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please specify a valid name for your mailbox.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\tswiftmailer_id: function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif ('swiftmailer_id' == outgoingEmailSettings.transport && (value == undefined || value == '' || value == 'none')) {
\t\t\t\t\t\t\treturn \"Please select a valid swift-mailer configuration.\";
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"imap[transport]\": function(value) {
\t\t\t\t\t\tlet incomingEmailSettings = this.get('incoming');

                        if ('' == incomingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please select a valid Incoming mailer service\";
                            }
                        }
                    },
\t\t\t\t\t\"imap[host]\": function(value) {
                        if ('custom' == this.get('transport') || 'imap' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a valid host address.\";
                            }
                        }
                    },
                    \"imap[username]\": function(value) {
\t\t\t\t\t\tlet incomingEmailSettings = this.get('incoming');

\t\t\t\t\t\tif (incomingEmailSettings.transport != \"\" && incomingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ('outlook_oauth' != incomingEmailSettings.transport) {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please enter a valid email address\";
\t\t\t\t\t\t\t\t} else if (/^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/.test(value) == false) {
\t\t\t\t\t\t\t\t\treturn \"Please specify a valid email address\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please select from one of the available microsoft accounts\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
                    \"imap[password]\": function(value) {
\t\t\t\t\t\tlet incomingEmailSettings = this.get('incoming');

\t\t\t\t\t\tif (incomingEmailSettings.transport != \"\" && incomingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ((value == undefined || value == '') && this.attributes['imap[transport]'] != 'webhook' && this.attributes['imap[transport]'] != 'outlook_oauth') {
\t\t\t\t\t\t\t\treturn \"Please enter the associated account password.\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"smtp[transport]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

                        if ('' == outgoingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please select a valid Outgoing mailer service\";
                            }
                        }
                    },
\t\t\t\t\t\"smtp[host]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

                        if ('smtp' == outgoingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please enter your server host address\";
                            }
                        }
                    },
\t\t\t\t\t\"smtp[username]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif (outgoingEmailSettings.transport != \"\" && outgoingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ('outlook_oauth' != outgoingEmailSettings.transport) {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please enter a valid username\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\t\t\treturn \"Please select from one of the available microsoft accounts\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
\t\t\t\t\t\"smtp[senderAddress]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif (outgoingEmailSettings.transport == \"default\") {
                            if (value != undefined && value != '') {
\t\t\t\t\t\t\t\tif (/^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/.test(value) == false) {
\t\t\t\t\t\t\t\t\treturn \"Please specify a valid email address\";
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
                    \"smtp[password]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

\t\t\t\t\t\tif (outgoingEmailSettings.transport != \"\" && outgoingEmailSettings.transport != \"swiftmailer_id\") {
\t\t\t\t\t\t\tif ((value == undefined || value == '') && 'outlook_oauth' != outgoingEmailSettings.transport) {
\t\t\t\t\t\t\t\treturn \"Please enter the password associated with your email address\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    },
                    \"smtp[port]\": function(value) {
\t\t\t\t\t\tlet outgoingEmailSettings = this.get('outgoing');

                        if ('smtp' == outgoingEmailSettings.transport) {
                            if (value == undefined || value == '') {
                                return \"Please specify a port number to connect with your mail server\";
                            }
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar MailboxConfigurationView = Backbone.View.extend({
                default_imap_configuration_template: _.template(\$(\"#default_imap_configuration_template\").html()),
                gmail_imap_configuration_template: _.template(\$(\"#gmail_imap_configuration_template\").html()),
\t\t\t\tyahoo_imap_configuration_template: _.template(\$(\"#yahoo_imap_configuration_template\").html()),
\t\t\t\toutlook_imap_configuration_template: _.template(\$(\"#outlook_imap_configuration_template\").html()),
\t\t\t\toutlook_oauth_imap_configuration_template: _.template(\$(\"#outlook_oauth_imap_configuration_template\").html()),
                outlook_smtp_configuration_template: _.template(\$(\"#outlook_smtp_configuration_template\").html()),
                outlook_oauth_smtp_configuration_template: _.template(\$(\"#outlook_oauth_smtp_configuration_template\").html()),
                swift_mailer_configuration_template: _.template(\$(\"#swift_mailer_configuration_template\").html()),
\t\t\t\tevents: {
                    'change #mailboxIncomingTransportType': 'changeIncomingTransportType',
\t\t\t\t\t'change #mailboxOutgoingTransportType': 'changeOutgoingTransportType',
\t\t\t\t\t'click #saveConfigurationSettings' : \"submitConfigurationSettings\",
\t\t\t\t\t'click .continue-with-microsoft-app': \"continueWithMicrosoftApp\"
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);

                    this.renderIncomingTransportConfigurations();
\t\t\t\t\tthis.renderOutgoingTransportConfigurations();
\t\t\t\t},
                changeIncomingTransportType: function(e) {
\t\t\t\t\tlet transport = \$(e.target).val();
\t\t\t\t\tlet incomingEmailSettings = this.model.get('incoming');

\t\t\t\t\tincomingEmailSettings.transport = transport;
\t\t\t\t\tthis.model.set('incoming', incomingEmailSettings);

\t\t\t\t\tconsole.log('changeIncomingTransportType model:', incomingEmailSettings);

                    this.renderIncomingTransportConfigurations();
                },
\t\t\t\tchangeOutgoingTransportType: function(e) {
\t\t\t\t\tlet transport = \$(e.target).val();
\t\t\t\t\tlet outgoingEmailSettings = this.model.get('outgoing');

\t\t\t\t\toutgoingEmailSettings.transport = transport;
\t\t\t\t\tthis.model.set('outgoing', outgoingEmailSettings);

                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderOutgoingTransportConfigurations();
                },
\t\t\t\tcontinueWithMicrosoftApp: function(e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\tlet reference = \$(e.target).data('reference');
\t\t\t\t\tlet microsoftAppId = \$(\"#\" + reference).val();

\t\t\t\t\tif (microsoftAppId != \"\") {
\t\t\t\t\t\twindow.location.href = microsoftAuthPlaceholderUri.replace('placeholder', microsoftAppId);
\t\t\t\t\t} else {
\t\t\t\t\t\tconsole.log('select a valid microsoft app');
\t\t\t\t\t}
                },
                renderIncomingTransportConfigurations: function() {
\t\t\t\t\tlet incomingEmailSettings = this.model.get('incoming');

\t\t\t\t\tconsole.log('renderIncomingTransportConfigurations:', incomingEmailSettings);

                    switch (incomingEmailSettings.transport) {
                        case 'imap':
                            \$('.imap-setting-references').html(this.default_imap_configuration_template(incomingEmailSettings));
                            break;
                        case 'gmail':
                            \$('.imap-setting-references').html(this.gmail_imap_configuration_template(incomingEmailSettings));
                            break;
                        case 'yahoo':
                            \$('.imap-setting-references').html(this.yahoo_imap_configuration_template(incomingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'outlook':
                            \$('.imap-setting-references').html(this.outlook_imap_configuration_template(incomingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'outlook_oauth':
                            \$('.imap-setting-references').html(this.outlook_oauth_imap_configuration_template(incomingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'swiftmailer_id':
                            \$('.imap-setting-references').html(this.swift_mailer_configuration_template(incomingEmailSettings));
                            break;
                        default:
                            break;
                    }
                },
\t\t\t\trenderOutgoingTransportConfigurations: function() {
\t\t\t\t\tlet outgoingEmailSettings = this.model.get('outgoing');

                    switch (outgoingEmailSettings.transport) {
\t\t\t\t\t\tcase 'outlook':
                            \$('.smtp-setting-references').html(this.outlook_smtp_configuration_template(outgoingEmailSettings));
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase 'swiftmailer_id':
\t\t\t\t\t\t\t\$('#swiftMailerIdContainer').remove();
                            \$('.smtp-setting-references').html(this.swift_mailer_configuration_template(outgoingEmailSettings));
                            break;
\t\t\t\t\t\tcase 'outlook_oauth':
                            \$('.smtp-setting-references').html(this.outlook_oauth_smtp_configuration_template(outgoingEmailSettings));
                            break;
                        default:
\t\t\t\t\t\t\t\$('.smtp-setting-references').html('')
                            break;
                    }
                },
                submitConfigurationSettings: function(e) {
                    e.preventDefault();

                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            {% if mailbox is defined %}
\t\t\t\tnew MailboxConfigurationView({
\t\t\t\t\tel: \$(\"#mailbox-settings-view\"),
\t\t\t\t\tmodel: new MailboxConfigurationModel({
\t\t\t\t\t\tincoming: {
\t\t\t\t\t\t\ttransport: \"{{ mailbox.imapConfiguration.code is defined and mailbox.imapConfiguration.code is not empty ? mailbox.imapConfiguration.code : '' }}\",
\t\t\t\t\t\t\thost: \"{{ mailbox.imapConfiguration.host is defined and mailbox.imapConfiguration.host is not empty ? mailbox.imapConfiguration.host : '' }}\",
\t\t\t\t\t\t\tusername: \"{{ mailbox.imapConfiguration.username is defined and mailbox.imapConfiguration.username is not empty ? mailbox.imapConfiguration.username : '' }}\",
\t\t\t\t\t\t},
\t\t\t\t\t\toutgoing: {
\t\t\t\t\t\t\ttransport: \"{{ mailbox.smtpConfiguration.code is defined and mailbox.smtpConfiguration.code is not empty ? mailbox.smtpConfiguration.code : '' }}\",
\t\t\t\t\t\t\thost: \"{{ mailbox.smtpConfiguration.host is defined and mailbox.smtpConfiguration.host is not empty ? mailbox.smtpConfiguration.host : '' }}\",
\t\t\t\t\t\t\tusername: \"{{ mailbox.smtpConfiguration.username is defined and mailbox.smtpConfiguration.username is not empty ? mailbox.smtpConfiguration.username : '' }}\",
\t\t\t\t\t\t}
\t\t\t\t\t})
\t\t\t\t});
            {% else %}
                new MailboxConfigurationView({
                    el: \$(\"#mailbox-settings-view\"),
                    model: new MailboxConfigurationModel({ incoming: { transport: '' }, outgoing: { transport: '' } })
                });
            {% endif %}
\t\t});
\t</script>
\t
\t<script>
\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t\tconst transportDropdown = document.getElementById('mailboxOutgoingTransportType');
\t\t\tconst swiftMailerContainer = document.getElementById('swiftMailerIdContainer');

\t\t\t// Function to toggle Swift Mailer field visibility
\t\t\tfunction toggleSwiftMailerField() {
\t\t\t\t// Check if the selected value matches 'swiftmailer_id'
\t\t\t\tif (transportDropdown.value === 'swiftmailer_id') {
\t\t\t\t\tswiftMailerContainer.style.display = 'block'; // Show container
\t\t\t\t} else {
\t\t\t\t\tswiftMailerContainer.style.display = 'none'; // Hide container
\t\t\t\t}
\t\t\t}

\t\t\ttoggleSwiftMailerField();

\t\t\ttransportDropdown.addEventListener('change', toggleSwiftMailerField);
\t\t});
\t</script>
{% endblock %}
", "@UVDeskMailbox/manageConfigurations.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/mailbox-component/Resources/views/manageConfigurations.html.twig");
    }
}
