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

/* @UVDeskSupportCenter/Staff/Announcement/announcementForm.html.twig */
class __TwigTemplate_d5fd9c243b3ac97873e899f8970da572 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Announcement/announcementForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Announcement/announcementForm.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Announcement/announcementForm.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marketing Announcement"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "\t<style>
\t\t.uv-color-field {
\t\t\tcolor: #fff;
\t\t\twidth: 100px;
\t\t\ttext-transform: uppercase;
\t\t}
\t</style>
\t<div class=\"uv-inner-section\">
        ";
        // line 15
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 16
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\SupportCenterBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Knowledgebase";
        // line 17
        yield "
\t\t";
        // line 18
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 18, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 18, $this->source); })())], "method", false, false, false, 18), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 18, $this->source); })())], "method", false, false, false, 18);
        yield "
\t\t
\t\t<div class=\"uv-view ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "cookies", [], "any", false, false, false, 20) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "cookies", [], "any", false, false, false, 20), "get", ["uv-asideView"], "method", false, false, false, 20))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)) {
            // line 23
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Announcement"), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 25
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Announcement"), "html", null, true);
            yield "
\t\t\t\t";
        }
        // line 27
        yield "\t\t\t</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"announcement-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[title]\" class=\"uv-field\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promo Text"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"announcement_form[promotext]\" class=\"uv-field\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 45, $this->source); })()), "promoText", [], "any", false, false, false, 45), "html", null, true);
        yield "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Promo Tag"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"announcement_form[promotag]\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"new\" ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 56, $this->source); })()), "promotag", [], "any", false, false, false, 56) == "new")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"update\" ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 57, $this->source); })()), "promotag", [], "any", false, false, false, 57) == "update")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"offer\" ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 58, $this->source); })()), "promotag", [], "any", false, false, false, 58) == "offer")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Offer"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a promo tag"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag-Color"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[tagColor]\" class=\"uv-field uv-color-field\" value=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 69, $this->source); })()), "tagColor", [], "any", false, false, false, 69), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag background color"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Link Text"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[linkText]\" class=\"uv-field\" value=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 79, $this->source); })()), "linkText", [], "any", false, false, false, 79), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Link URL"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[linkURL]\" class=\"uv-field\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 89, $this->source); })()), "linkURL", [], "any", false, false, false, 89), "html", null, true);
        yield "\" placeholder=\"https://example.com/\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"announcement_form[status]\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 100, $this->source); })()), "isActive", [], "any", false, false, false, 100) == "1")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 101
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 101, $this->source); })()), "isActive", [], "any", false, false, false, 101) == "0")) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a status"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"announcement_form[group]\" class=\"uv-select\">
\t\t\t\t\t\t\t";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 113, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 114
            yield "\t\t\t\t\t\t\t\t";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114))) {
                // line 115
                yield "\t\t\t\t\t\t\t\t\t<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 115), "html", null, true);
                yield "\" 
\t\t\t\t\t\t\t\t\t";
                // line 116
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["announcement"]) || array_key_exists("announcement", $context) ? $context["announcement"] : (function () { throw new RuntimeError('Variable "announcement" does not exist.', 116, $this->source); })()), "group", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116) == CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 116))) {
                    yield "selected";
                }
                // line 117
                yield "\t\t\t\t\t\t\t\t\t>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 117), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 119
                yield "\t\t\t\t\t\t\t\t\t<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 119), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t\t>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 120), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 122
            yield "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a group"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Advertisement"), "html", null, true);
        yield "\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
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

        // line 139
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css\">
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js\"></script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('.uv-color-field').colorpicker({format: \"hex\"}).on('changeColor', function(ev) {
                \$(this).css('background', \$(this).val())
                textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                \$(this).css('color', textColor)
            });
\t\t\tvar AnnouncementModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'announcement_form[title]':[{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},{
                         maxLength: 16,
                        msg: '";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 16"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'announcement_form[promotext]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}, {
                        maxLength: 80,
                        msg: '";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 80"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'announcement_form[promotag]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'announcement_form[linkText]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}, {
                        maxLength: 16,
                        msg: '";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 16"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'announcement_form[linkURL]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}, {
                        pattern: '^(http:\\/\\/www\\.|https:\\/\\/www\\.|http:\\/\\/|https:\\/\\/)[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}(:[0-9]{1,5})?(\\/.*)?\$',
\t\t\t\t\t\tmsg: '";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'announcement_form[status]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'announcement_form[group]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\tvar AnnouncementForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"savePromotion\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\t\$('.uv-color-field').each(function() {
                        textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                        \$(this).css('color', textColor)
                    });
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = '';
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tsavePromotion : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t        }
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });
                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))
\t\t\t\t\treturn ids;
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show()
                        if (! parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\")
                            this.setAddedIds(\"#\" + parent.attr('id'))
                        }
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove()
                    this.setAddedIds(\"#\" + parent.attr('id'))
                }
\t\t\t});

\t\t\tannouncementForm = new AnnouncementForm({
\t\t\t\tel : \$(\"#announcement-form\"),
\t\t\t\tmodel : new AnnouncementModel()
\t\t\t});\t
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
        return "@UVDeskSupportCenter/Staff/Announcement/announcementForm.html.twig";
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
        return array (  483 => 190,  476 => 186,  469 => 182,  463 => 179,  456 => 175,  450 => 172,  443 => 168,  436 => 164,  430 => 161,  423 => 157,  417 => 154,  398 => 139,  385 => 138,  367 => 130,  359 => 125,  355 => 123,  349 => 122,  344 => 120,  339 => 119,  333 => 117,  329 => 116,  324 => 115,  321 => 114,  317 => 113,  311 => 110,  302 => 104,  292 => 101,  284 => 100,  278 => 97,  267 => 89,  262 => 87,  251 => 79,  246 => 77,  237 => 71,  232 => 69,  227 => 67,  218 => 61,  208 => 58,  200 => 57,  192 => 56,  186 => 53,  175 => 45,  170 => 43,  159 => 35,  154 => 33,  146 => 27,  140 => 25,  134 => 23,  132 => 22,  125 => 20,  120 => 18,  117 => 17,  114 => 16,  111 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Marketing Announcement'|trans }}{% endblock %}

{% block pageContent %}
\t<style>
\t\t.uv-color-field {
\t\t\tcolor: #fff;
\t\t\twidth: 100px;
\t\t\ttext-transform: uppercase;
\t\t}
\t</style>
\t<div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\SupportCenterBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Knowledgebase' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{% if announcement.id %}
\t\t\t\t\t{{ 'Edit Announcement'|trans }}
\t\t\t\t{% else %}
\t\t\t\t\t{{ 'Add Announcement'|trans }}
\t\t\t\t{% endif %}
\t\t\t</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"announcement-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Title'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[title]\" class=\"uv-field\" value=\"{{ announcement.title }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Promo Text'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"announcement_form[promotext]\" class=\"uv-field\">{{ announcement.promoText }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Promo Tag'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"announcement_form[promotag]\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"new\" {% if announcement.promotag == \"new\" %}selected{% endif %}>{{ 'New'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"update\" {% if announcement.promotag == \"update\" %}selected{% endif %}>{{ 'Update'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"offer\" {% if announcement.promotag == \"offer\" %}selected{% endif %}>{{ 'Offer'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose a promo tag'|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Tag-Color'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[tagColor]\" class=\"uv-field uv-color-field\" value=\"{{ announcement.tagColor }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Tag background color'|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Link Text'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[linkText]\" class=\"uv-field\" value=\"{{ announcement.linkText }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Link URL'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"announcement_form[linkURL]\" class=\"uv-field\" value=\"{{ announcement.linkURL }}\" placeholder=\"https://example.com/\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Status'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"announcement_form[status]\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"1\" {% if announcement.isActive == \"1\" %}selected{% endif %}>{{ 'Publish'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"0\" {% if announcement.isActive == \"0\" %}selected{% endif %}>{{ 'Draft'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose a status'|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Groups'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"announcement_form[group]\" class=\"uv-select\">
\t\t\t\t\t\t\t{% for group in user_service.getSupportGroups() %}
\t\t\t\t\t\t\t\t{% if announcement.id is not null %}
\t\t\t\t\t\t\t\t\t<option value=\"{{group.id}}\" 
\t\t\t\t\t\t\t\t\t{% if (announcement.group.id == group.id) %}selected{% endif %}
\t\t\t\t\t\t\t\t\t>{{group.name}}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{group.id}}\"
\t\t\t\t\t\t\t\t\t>{{group.name}}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose a group'|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Advertisement'|trans }}\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/css/bootstrap-colorpicker.min.css\">
\t<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.0/js/bootstrap-colorpicker.min.js\"></script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\t\$('.uv-color-field').colorpicker({format: \"hex\"}).on('changeColor', function(ev) {
                \$(this).css('background', \$(this).val())
                textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                \$(this).css('color', textColor)
            });
\t\t\tvar AnnouncementModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'announcement_form[title]':[{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},{
                         maxLength: 16,
                        msg: '{{ \"Maximum character length is 16\" | trans}}'
                    }],
\t\t\t\t\t'announcement_form[promotext]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}, {
                        maxLength: 80,
                        msg: '{{ \"Maximum character length is 80\" | trans}}'
                    }],
\t\t\t\t\t'announcement_form[promotag]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},
\t\t\t\t\t'announcement_form[linkText]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}, {
                        maxLength: 16,
                        msg: '{{ \"Maximum character length is 16\" | trans}}'
                    }],
\t\t\t\t\t'announcement_form[linkURL]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}, {
                        pattern: '^(http:\\/\\/www\\.|https:\\/\\/www\\.|http:\\/\\/|https:\\/\\/)[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}(:[0-9]{1,5})?(\\/.*)?\$',
\t\t\t\t\t\tmsg: '{{ \"Provide a valid url(with protocol)\"| trans}}'
                    }],
\t\t\t\t\t'announcement_form[status]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},
\t\t\t\t\t'announcement_form[group]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t\tvar AnnouncementForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"savePromotion\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\t\$('.uv-color-field').each(function() {
                        textColor = app.appView.getTextColorBasedBackground(\$(this).val());
                        \$(this).css('color', textColor)
                    });
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = '';
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tsavePromotion : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t        }
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });
                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))
\t\t\t\t\treturn ids;
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show()
                        if (! parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\")
                            this.setAddedIds(\"#\" + parent.attr('id'))
                        }
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove()
                    this.setAddedIds(\"#\" + parent.attr('id'))
                }
\t\t\t});

\t\t\tannouncementForm = new AnnouncementForm({
\t\t\t\tel : \$(\"#announcement-form\"),
\t\t\t\tmodel : new AnnouncementModel()
\t\t\t});\t
\t\t});
\t</script>
{% endblock %}", "@UVDeskSupportCenter/Staff/Announcement/announcementForm.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Announcement/announcementForm.html.twig");
    }
}
