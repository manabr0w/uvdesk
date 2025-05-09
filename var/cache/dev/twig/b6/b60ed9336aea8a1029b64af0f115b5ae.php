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

/* @UVDeskCoreFramework/Privileges/createSupportPrivelege.html.twig */
class __TwigTemplate_df2d2b11457199b499b70d1162b2d712 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Privileges/createSupportPrivelege.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Privileges/createSupportPrivelege.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Privileges/createSupportPrivelege.html.twig", 1);
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

        yield "Add Privilege";
        
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
        yield "\t<div class=\"uv-inner-section\">
        ";
        // line 8
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 9
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Users";
        // line 10
        yield "
\t\t";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 11, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 11, $this->source); })())], "method", false, false, false, 11), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 11, $this->source); })())], "method", false, false, false, 11);
        yield "

\t\t<div class=\"uv-view ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13), "get", ["uv-asideView"], "method", false, false, false, 13))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Privilege"), "html", null, true);
        yield "</h1>
\t\t\t
            ";
        // line 17
        yield "\t\t\t<form method=\"post\" action=\"\" id=\"privilege-form\">
                ";
        // line 19
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"privilege_form[name]\" class=\"uv-field\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"privilege_form[description]\" class=\"uv-field\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        yield "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                ";
        // line 34
        yield "\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Privileges"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<span class=\"uv-field-info uv-margin-top-5\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose set of privileges which will be available to the agent."), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
\t\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilegeResources"]) || array_key_exists("supportPrivilegeResources", $context) ? $context["supportPrivilegeResources"] : (function () { throw new RuntimeError('Variable "supportPrivilegeResources" does not exist.', 48, $this->source); })()), "ticket", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["privilegeCode"] => $context["privilegeDescription"]) {
            // line 49
            yield "\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privilegeCode"], "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privilegeDescription"], "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['privilegeCode'], $context['privilegeDescription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
        // line 63
        yield "\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select All"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove All"), "html", null, true);
        yield "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        // line 69
        yield "\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
\t\t\t\t\t\t\t";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilegeResources"]) || array_key_exists("supportPrivilegeResources", $context) ? $context["supportPrivilegeResources"] : (function () { throw new RuntimeError('Variable "supportPrivilegeResources" does not exist.', 78, $this->source); })()), "advanced", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["privilegeCode"] => $context["privilegeDescription"]) {
            // line 79
            yield "\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privilegeCode"], "html", null, true);
            yield "\" ";
            if (((isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 82, $this->source); })()) && CoreExtension::inFilter($context["privilegeCode"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 82, $this->source); })()), "privileges", [], "any", false, false, false, 82)))) {
                yield "checked";
            }
            yield ">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privilegeDescription"], "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['privilegeCode'], $context['privilegeDescription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
        // line 93
        yield "\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select All"), "html", null, true);
        yield "</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove All"), "html", null, true);
        yield "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- CSRF token Field -->
                ";
        // line 101
        yield "                <!-- //CSRF token Field -->

\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"Save Changes\" type=\"submit\">
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        // line 110
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SupportPrivilegeModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'privilege_form[name]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^((?![!@#\$%^&*()<>]).)*\$',
\t\t\t\t\t\tmsg: \"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Privilege Name must have characters only"), "html", null, true);
        yield "\"
\t\t\t\t\t},{
\t\t\t\t\t\tmaxLength:50,
                        msg: \"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 50"), "html", null, true);
        yield "\"
\t\t\t\t\t}],
\t\t\t\t\t'privilege_form[description]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'privilege_form[privileges][]': {
                        fn: function() {
                            return !\$(\"input[name='privilege_form[privileges][]']:checked\").length ? true : false;
                        },
                        msg: \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar CreateSupportPrivilegeForm = Backbone.View.extend({
\t\t\t\tevents: {
\t\t\t\t\t'click .uv-btn' : \"savePrivilege\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
\t\t\t\t\t'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize: function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 148
        yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 148, $this->source); })());
        yield "');

\t\t    \t\tfor (var field in jsonContext) {
\t\t\t\t\t\tif (field == 'privileges') {
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, \"privilege_form[privileges][]\", jsonContext[field], 'input');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, \"privilege_form[\" + field + \"]\", jsonContext[field], 'input');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsavePrivilege: function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank').find('input').prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank').find('input').prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tvar createSupportPrivilegeForm = new CreateSupportPrivilegeForm({
\t\t\t\tel: \$(\"#privilege-form\"),
\t\t\t\tmodel: new SupportPrivilegeModel()
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
        return "@UVDeskCoreFramework/Privileges/createSupportPrivelege.html.twig";
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
        return array (  378 => 148,  361 => 134,  352 => 128,  345 => 124,  339 => 121,  333 => 118,  321 => 110,  308 => 109,  291 => 101,  283 => 95,  279 => 94,  276 => 93,  271 => 89,  261 => 85,  251 => 82,  246 => 79,  242 => 78,  233 => 72,  228 => 69,  222 => 65,  218 => 64,  215 => 63,  210 => 59,  200 => 55,  194 => 52,  189 => 49,  185 => 48,  176 => 42,  168 => 37,  164 => 36,  160 => 34,  153 => 29,  148 => 27,  140 => 22,  135 => 20,  132 => 19,  129 => 17,  124 => 14,  118 => 13,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Add Privilege{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Add Privilege'|trans }}</h1>
\t\t\t
            {# Create Support Privilege Form #}
\t\t\t<form method=\"post\" action=\"\" id=\"privilege-form\">
                {# Basic Details #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"privilege_form[name]\" class=\"uv-field\" value=\"{{ supportPrivilege.name }}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Description'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"privilege_form[description]\" class=\"uv-field\">{{ supportPrivilege.description }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
                {# Agent Resources #}
\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Agent Privileges'|trans }}</label>
\t\t\t\t\t\t<span class=\"uv-field-info uv-margin-top-5\">{{ 'Choose set of privileges which will be available to the agent.'|trans }}</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">{{ 'Tickets'|trans }}</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
\t\t\t\t\t\t\t{% for privilegeCode, privilegeDescription in supportPrivilegeResources.ticket %}
\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"{{ privilegeCode }}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ privilegeDescription }}</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    {# Mass Action #}
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">{{ 'Select All'|trans }}</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">{{ 'Remove All'|trans }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {# Advanced Resources #}
\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">{{ 'Advanced'|trans }}</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
\t\t\t\t\t\t\t{% for privilegeCode, privilegeDescription in supportPrivilegeResources.advanced %}
\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"{{ privilegeCode }}\" {% if supportPrivilege and privilegeCode in supportPrivilege.privileges %}checked{% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ privilegeDescription }}</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    {# Mass Action #}
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">{{ 'Select All'|trans }}</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">{{ 'Remove All'|trans }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- CSRF token Field -->
                {# <input type=\"hidden\" name=\"privilege_form[_token]\" value=\"{{ default_service.generateCsrfToken('privilege_form') }}\"/> #}
                <!-- //CSRF token Field -->

\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"Save Changes\" type=\"submit\">
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SupportPrivilegeModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'privilege_form[name]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^((?![!@#\$%^&*()<>]).)*\$',
\t\t\t\t\t\tmsg: \"{{ 'Privilege Name must have characters only'|trans }}\"
\t\t\t\t\t},{
\t\t\t\t\t\tmaxLength:50,
                        msg: \"{{ 'Maximum character length is 50'|trans }}\"
\t\t\t\t\t}],
\t\t\t\t\t'privilege_form[description]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},
\t\t\t\t\t'privilege_form[privileges][]': {
                        fn: function() {
                            return !\$(\"input[name='privilege_form[privileges][]']:checked\").length ? true : false;
                        },
                        msg: \"{{ 'This field is mandatory'|trans }}\"
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar CreateSupportPrivilegeForm = Backbone.View.extend({
\t\t\t\tevents: {
\t\t\t\t\t'click .uv-btn' : \"savePrivilege\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
\t\t\t\t\t'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize: function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');

\t\t    \t\tfor (var field in jsonContext) {
\t\t\t\t\t\tif (field == 'privileges') {
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, \"privilege_form[privileges][]\", jsonContext[field], 'input');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, \"privilege_form[\" + field + \"]\", jsonContext[field], 'input');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsavePrivilege: function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank').find('input').prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank').find('input').prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tvar createSupportPrivilegeForm = new CreateSupportPrivilegeForm({
\t\t\t\tel: \$(\"#privilege-form\"),
\t\t\t\tmodel: new SupportPrivilegeModel()
\t\t\t});\t
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/Privileges/createSupportPrivelege.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Privileges/createSupportPrivelege.html.twig");
    }
}
