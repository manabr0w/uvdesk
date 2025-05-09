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

/* @UVDeskCoreFramework/templateForm.html.twig */
class __TwigTemplate_7464a8fec37b198e4a9526bf2a9de5a0 extends Template
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
        return "@UVDeskCoreFramework/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/templateForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/templateForm.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework/Templates/layout.html.twig", "@UVDeskCoreFramework/templateForm.html.twig", 1);
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
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Email Template"), "html", null, true);
            yield "
\t";
        } else {
            // line 7
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Email Template"), "html", null, true);
            yield "
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "\t<div class=\"uv-inner-section\">
\t\t";
        // line 14
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 15
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 16
        yield "
\t\t";
        // line 17
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 17, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 17, $this->source); })())], "method", false, false, false, 17), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 17, $this->source); })())], "method", false, false, false, 17);
        yield "
\t\t
\t\t<div class=\"uv-view ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "cookies", [], "any", false, false, false, 19) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "cookies", [], "any", false, false, false, 19), "get", ["uv-asideView"], "method", false, false, false, 19))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Email Template"), "html", null, true);
            yield "
                ";
        } else {
            // line 24
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Email Template"), "html", null, true);
            yield "
                ";
        }
        // line 26
        yield "\t\t\t</h1>

\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"template-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email template name"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<div class=\"uv-group uv-no-error-success-icon\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"subject-field\" name=\"subject\" class=\"uv-field uv-group-field\" value=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 45, $this->source); })()), "subject", [], "any", false, false, false, 45), "html", null, true);
        yield "\" />
\t\t\t\t\t\t\t<select id=\"subject-placeholders\" class=\"uv-group-select\" title=\"placeholders\" data-toggle=\"tooltip\" data-placement=\"top\">
\t\t\t\t\t\t\t\t<option value=\"\" selected>placeholders</option>
\t\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_service"]) || array_key_exists("email_service", $context) ? $context["email_service"] : (function () { throw new RuntimeError('Variable "email_service" does not exist.', 48, $this->source); })()), "getEmailPlaceHolders", ["template"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["basekey"] => $context["placeholders"]) {
            // line 49
            yield "\t\t\t\t\t\t\t\t\t";
            if (is_iterable($context["placeholders"])) {
                // line 50
                yield "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["placeholders"]);
                foreach ($context['_seq'] as $context["fieldKey"] => $context["fieldPlaceholder"]) {
                    // line 51
                    yield "\t\t\t\t\t\t\t\t\t\t\t<option value='";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("{%" . $context["basekey"]) . ".") . $context["fieldKey"]) . "%}"), "html", null, true);
                    yield "' data-group='";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["basekey"], "html", null, true);
                    yield "' class=\"mce-pitem mce-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["basekey"], "html", null, true);
                    yield "\" ";
                    if (((($context["basekey"] != "global") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 51, $this->source); })()), "templateType", [], "any", false, false, false, 51)) && ($context["basekey"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 51, $this->source); })()), "templateType", [], "any", false, false, false, 51)))) {
                        yield " style=\"display: none;\"";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["fieldPlaceholder"], "title", [], "any", false, false, false, 51);
                    yield "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['fieldKey'], $context['fieldPlaceholder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "\t\t\t\t\t\t\t\t\t";
            }
            // line 54
            yield "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['basekey'], $context['placeholders'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email template subject"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Template For"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"templateFor\" class=\"uv-select\" id=\"relatedTo\">
\t\t\t\t\t\t\t<option value=\"\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nothing Selected"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"ticket\" ";
        // line 68
        if (("ticket" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 68, $this->source); })()), "templateType", [], "any", false, false, false, 68))) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t\t<option value=\"user\" ";
        // line 69
        if (("user" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 69, $this->source); })()), "templateType", [], "any", false, false, false, 69))) {
            yield "selected";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User"), "html", null, true);
        yield "</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email template will be used for work related with selected option"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-margin-right-15\">
\t\t\t\t\t<label class=\"uv-field-label\" style=\"margin-bottom: 5px\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Body"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
                        <textarea id=\"message\" name=\"message\" class=\"uv-field\">
\t\t\t\t\t\t\t";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 81, $this->source); })()), "message", [], "any", false, false, false, 81), "html", null, true);
        yield "
\t\t\t\t\t\t</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email template body"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
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

    // line 96
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

        // line 97
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t";
        // line 98
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        yield "
\t
\t<script type=\"text/javascript\">
\t\tvar toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
\t\t\ttoolbar: toolbarOptions + ' | placeholders | code',
\t\t\tsetup: function (editor) {
\t\t\t\teditor.addButton('placeholders', {
\t\t\t\t\ttype: 'listbox',
\t\t\t\t\ttext: '";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placeholders"), "html", null, true);
        yield "',
\t\t\t\t\tonselect: function (e) {
\t\t\t\t\t\teditor.insertContent(this.value());
\t\t\t\t\t\tthis.text('";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placeholders"), "html", null, true);
        yield "');
\t\t\t\t\t},
\t\t\t\t\tvalues: [
\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_service"]) || array_key_exists("email_service", $context) ? $context["email_service"] : (function () { throw new RuntimeError('Variable "email_service" does not exist.', 114, $this->source); })()), "getEmailPlaceHolders", ["template"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["basekey"] => $context["placeholders"]) {
            // line 115
            yield "\t\t\t\t\t\t\t";
            if (is_iterable($context["placeholders"])) {
                // line 116
                yield "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["placeholders"]);
                foreach ($context['_seq'] as $context["fieldKey"] => $context["fieldPlaceholder"]) {
                    // line 117
                    yield "\t\t\t\t\t\t\t\t\t{ text: \"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["fieldPlaceholder"], "title", [], "any", false, false, false, 117);
                    yield "\", value: '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("{%" . $context["basekey"]) . ".") . $context["fieldKey"]) . "%}"), "html", null, true);
                    yield "', group: '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["basekey"], "html", null, true);
                    yield "'
\t\t\t\t\t\t\t\t\t";
                    // line 118
                    if (("global" != $context["basekey"])) {
                        // line 119
                        yield "\t\t\t\t\t\t\t\t\t\t, classes: 'pitem ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["basekey"], "html", null, true);
                        yield "' ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 119, $this->source); })()), "templateType", [], "any", false, false, false, 119) && ($context["basekey"] != CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 119, $this->source); })()), "templateType", [], "any", false, false, false, 119)))) {
                            yield ", hidden: true";
                        }
                        // line 120
                        yield "\t\t\t\t\t\t\t\t\t";
                    }
                    yield " },
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['fieldKey'], $context['fieldPlaceholder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                yield "\t\t\t\t\t\t\t";
            }
            // line 123
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['basekey'], $context['placeholders'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "\t\t\t\t\t],
\t\t\t\t});
\t\t\t},
        });

\t\t\$('#relatedTo').on('change', function(e) {
\t\t\tval = \$(e.target).val();
\t\t\tswitch(val) {
\t\t\t\tcase 'task':
\t\t\t\t\t\$('.mce-pitem').hide();
\t\t\t\t\t\$('.mce-task').show();
\t\t\t\t\tbreak;
\t\t\t\tcase 'user':
\t\t\t\t\t\$('.mce-pitem').hide();
\t\t\t\t\t\$('.mce-user').show();
\t\t\t\t\tbreak;
\t\t\t\tcase 'ticket':
\t\t\t\t\t\$('.mce-pitem').hide();
\t\t\t\t\t\$('.mce-ticket').show();
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\t\$('.mce-pitem').show();
\t\t\t}
\t\t});
\t\tvar oldContent, selection, cursorPosition;
\t\t\$('body').on('focusout', '#subject-field', function() {
\t\t\tselection = this;
\t\t\toldContent = selection.value;
\t\t\tcursorPosition = \$(this).prop(\"selectionStart\");
\t\t\tforEditor = false;
\t\t\tforSubject = true;
\t\t});
\t\t\$('#subject-placeholders').on('change', function(e) {
\t\t\ttoInsert = \$(e.target).val();
\t\t\t\$('#subject-placeholders option[selected]').removeAttr('selected');
\t\t\tif(toInsert && cursorPosition >=0 && forSubject){
\t\t\t\tvar newContent = oldContent.substring(0, cursorPosition) + toInsert + oldContent.substring(cursorPosition);
\t\t\t\tselection.value = newContent;
\t\t\t\tcursorPosition = cursorPosition + toInsert.length;
\t\t\t\toldContent = newContent;
\t\t\t} else if(toInsert) {
\t\t\t\t\$('#subject-field').val(\$('#subject-field').val() + toInsert);
\t\t\t}
\t\t});

\t\t\$(function () {
\t\t\tvar TemplateModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength: 100,
\t\t\t\t\t\tmsg: '";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain 100 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern:\"^[ a-zA-Z_0-9 ']*\$\",
\t\t\t\t\t\tmsg:'";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'subject': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength:100,
\t\t\t\t\t\tmsg: '";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain 100 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}]
\t\t\t\t}
\t\t\t});

\t\t\tvar TemplateForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveTemplate\",
\t\t\t\t\t'blur input': 'formChanged'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = {};
\t\t\t\t\t
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveTemplate : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t}
\t\t\t});

\t\t\ttemplateForm = new TemplateForm({
\t\t\t\tel : \$(\"#template-form\"),
\t\t\t\tmodel : new TemplateModel()
\t\t\t});
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
        return "@UVDeskCoreFramework/templateForm.html.twig";
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
        return array (  489 => 187,  483 => 184,  476 => 180,  470 => 177,  464 => 174,  412 => 124,  406 => 123,  403 => 122,  394 => 120,  387 => 119,  385 => 118,  376 => 117,  371 => 116,  368 => 115,  364 => 114,  358 => 111,  352 => 108,  339 => 98,  334 => 97,  321 => 96,  303 => 89,  295 => 84,  289 => 81,  283 => 78,  274 => 72,  264 => 69,  256 => 68,  252 => 67,  246 => 64,  237 => 58,  232 => 55,  226 => 54,  223 => 53,  204 => 51,  199 => 50,  196 => 49,  192 => 48,  186 => 45,  180 => 42,  171 => 36,  166 => 34,  161 => 32,  153 => 26,  147 => 24,  141 => 22,  139 => 21,  132 => 19,  127 => 17,  124 => 16,  121 => 15,  118 => 14,  115 => 12,  102 => 11,  87 => 7,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework/Templates/layout.html.twig\" %}

{% block title %}
    {% if template.id %}
\t\t{{ 'Edit Email Template'|trans }}
\t{% else %}
\t\t{{ 'Add Email Template'|trans }}
\t{% endif %}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{% if template.id %}
                    {{ 'Edit Email Template'|trans }}
                {% else %}
                    {{ 'Add Email Template'|trans }}
                {% endif %}
\t\t\t</h1>

\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"template-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ template.name }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ \"Email template name\"|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<div class=\"uv-group uv-no-error-success-icon\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"subject-field\" name=\"subject\" class=\"uv-field uv-group-field\" value=\"{{ template.subject }}\" />
\t\t\t\t\t\t\t<select id=\"subject-placeholders\" class=\"uv-group-select\" title=\"placeholders\" data-toggle=\"tooltip\" data-placement=\"top\">
\t\t\t\t\t\t\t\t<option value=\"\" selected>placeholders</option>
\t\t\t\t\t\t\t\t{% for basekey, placeholders in email_service.getEmailPlaceHolders('template') %}
\t\t\t\t\t\t\t\t\t{% if placeholders is iterable %}
\t\t\t\t\t\t\t\t\t\t{% for fieldKey, fieldPlaceholder in placeholders %}
\t\t\t\t\t\t\t\t\t\t\t<option value='{{ \"{%\" ~ basekey ~ \".\" ~ fieldKey ~ \"%}\"}}' data-group='{{ basekey }}' class=\"mce-pitem mce-{{ basekey }}\" {% if basekey != 'global' and template.templateType and (basekey != template.templateType) %} style=\"display: none;\"{% endif %}>{{ fieldPlaceholder.title|raw }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Email template subject'|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Template For'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"templateFor\" class=\"uv-select\" id=\"relatedTo\">
\t\t\t\t\t\t\t<option value=\"\">{{ 'Nothing Selected'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"ticket\" {% if 'ticket' == template.templateType %}selected{% endif %}>{{ 'Ticket'|trans }}</option>
\t\t\t\t\t\t\t<option value=\"user\" {% if 'user' == template.templateType %}selected{% endif %}>{{ 'User'|trans }}</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ \"email template will be used for work related with selected option\"|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-margin-right-15\">
\t\t\t\t\t<label class=\"uv-field-label\" style=\"margin-bottom: 5px\">{{ 'Body'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
                        <textarea id=\"message\" name=\"message\" class=\"uv-field\">
\t\t\t\t\t\t\t{{ template.message }}
\t\t\t\t\t\t</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Email template body'|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
{% endblock %}
{% block footer %}
\t{{ parent() }}
\t{{ include('@UVDeskCoreFramework/Templates/tinyMCE.html.twig') }}
\t
\t<script type=\"text/javascript\">
\t\tvar toolbarOptions = sfTinyMce.options.toolbar;

        sfTinyMce.init({
\t\t\ttoolbar: toolbarOptions + ' | placeholders | code',
\t\t\tsetup: function (editor) {
\t\t\t\teditor.addButton('placeholders', {
\t\t\t\t\ttype: 'listbox',
\t\t\t\t\ttext: '{{ \"Placeholders\"|trans }}',
\t\t\t\t\tonselect: function (e) {
\t\t\t\t\t\teditor.insertContent(this.value());
\t\t\t\t\t\tthis.text('{{ \"Placeholders\"|trans }}');
\t\t\t\t\t},
\t\t\t\t\tvalues: [
\t\t\t\t\t{% for basekey, placeholders in email_service.getEmailPlaceHolders('template') %}
\t\t\t\t\t\t\t{% if placeholders is iterable %}
\t\t\t\t\t\t\t\t{% for fieldKey, fieldPlaceholder in placeholders %}
\t\t\t\t\t\t\t\t\t{ text: \"{{ fieldPlaceholder.title|raw }}\", value: '{{ \"{%\" ~ basekey ~ \".\" ~ fieldKey ~ \"%}\"}}', group: '{{ basekey }}'
\t\t\t\t\t\t\t\t\t{% if 'global' != basekey  %}
\t\t\t\t\t\t\t\t\t\t, classes: 'pitem {{ basekey }}' {% if template.templateType and (basekey != template.templateType) %}, hidden: true{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %} },
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t],
\t\t\t\t});
\t\t\t},
        });

\t\t\$('#relatedTo').on('change', function(e) {
\t\t\tval = \$(e.target).val();
\t\t\tswitch(val) {
\t\t\t\tcase 'task':
\t\t\t\t\t\$('.mce-pitem').hide();
\t\t\t\t\t\$('.mce-task').show();
\t\t\t\t\tbreak;
\t\t\t\tcase 'user':
\t\t\t\t\t\$('.mce-pitem').hide();
\t\t\t\t\t\$('.mce-user').show();
\t\t\t\t\tbreak;
\t\t\t\tcase 'ticket':
\t\t\t\t\t\$('.mce-pitem').hide();
\t\t\t\t\t\$('.mce-ticket').show();
\t\t\t\t\tbreak;
\t\t\t\tdefault:
\t\t\t\t\t\$('.mce-pitem').show();
\t\t\t}
\t\t});
\t\tvar oldContent, selection, cursorPosition;
\t\t\$('body').on('focusout', '#subject-field', function() {
\t\t\tselection = this;
\t\t\toldContent = selection.value;
\t\t\tcursorPosition = \$(this).prop(\"selectionStart\");
\t\t\tforEditor = false;
\t\t\tforSubject = true;
\t\t});
\t\t\$('#subject-placeholders').on('change', function(e) {
\t\t\ttoInsert = \$(e.target).val();
\t\t\t\$('#subject-placeholders option[selected]').removeAttr('selected');
\t\t\tif(toInsert && cursorPosition >=0 && forSubject){
\t\t\t\tvar newContent = oldContent.substring(0, cursorPosition) + toInsert + oldContent.substring(cursorPosition);
\t\t\t\tselection.value = newContent;
\t\t\t\tcursorPosition = cursorPosition + toInsert.length;
\t\t\t\toldContent = newContent;
\t\t\t} else if(toInsert) {
\t\t\t\t\$('#subject-field').val(\$('#subject-field').val() + toInsert);
\t\t\t}
\t\t});

\t\t\$(function () {
\t\t\tvar TemplateModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '{{ \"This field is mandatory\" | trans}}'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength: 100,
\t\t\t\t\t\tmsg: '{{ \"This field contain 100 characters only\" | trans}}'
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern:\"^[ a-zA-Z_0-9 ']*\$\",
\t\t\t\t\t\tmsg:'{{ \"This field contain characters only\" | trans}}'
\t\t\t\t\t}],
\t\t\t\t\t'subject': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '{{ \"This field is mandatory\" | trans}}'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength:100,
\t\t\t\t\t\tmsg: '{{ \"This field contain 100 characters only\" | trans}}'
\t\t\t\t\t}]
\t\t\t\t}
\t\t\t});

\t\t\tvar TemplateForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveTemplate\",
\t\t\t\t\t'blur input': 'formChanged'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = {};
\t\t\t\t\t
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveTemplate : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t}
\t\t\t});

\t\t\ttemplateForm = new TemplateForm({
\t\t\t\tel : \$(\"#template-form\"),
\t\t\t\tmodel : new TemplateModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/templateForm.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/templateForm.html.twig");
    }
}
