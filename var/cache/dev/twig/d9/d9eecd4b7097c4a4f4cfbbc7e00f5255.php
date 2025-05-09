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

/* @UVDeskCoreFramework/Privileges/updateSupportPrivelege.html.twig */
class __TwigTemplate_49dd1a6d00faad1036325fd5f65defc1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Privileges/updateSupportPrivelege.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Privileges/updateSupportPrivelege.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Privileges/updateSupportPrivelege.html.twig", 1);
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

        yield "Edit Privilege";
        
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
\t\t\t<h1>Edit Privilege</h1>
\t\t\t
            ";
        // line 17
        yield "\t\t\t<form method=\"post\" action=\"\" id=\"privilege-form\">
                ";
        // line 19
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Name</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"privilege_form[name]\" class=\"uv-field\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Description</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"privilege_form[description]\" class=\"uv-field\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        yield "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>

                ";
        // line 34
        yield "\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">Agent Privileges</label>
\t\t\t\t\t\t<span class=\"uv-field-info uv-margin-top-5\">Choose set of privileges which will be available to the agent.</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">Tickets</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilegeResources"]) || array_key_exists("supportPrivilegeResources", $context) ? $context["supportPrivilegeResources"] : (function () { throw new RuntimeError('Variable "supportPrivilegeResources" does not exist.', 48, $this->source); })()), "ticket", [], "any", false, false, false, 48));
        foreach ($context['_seq'] as $context["privelegeCode"] => $context["privelegeDescription"]) {
            // line 49
            yield "\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privelegeCode"], "html", null, true);
            yield "\" ";
            if (((isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 52, $this->source); })()) && CoreExtension::inFilter($context["privelegeCode"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 52, $this->source); })()), "privileges", [], "any", false, false, false, 52)))) {
                yield "checked";
            }
            yield ">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privelegeDescription"], "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['privelegeCode'], $context['privelegeDescription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">Select All</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">Remove All</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        // line 68
        yield "\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">Advanced</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
\t\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilegeResources"]) || array_key_exists("supportPrivilegeResources", $context) ? $context["supportPrivilegeResources"] : (function () { throw new RuntimeError('Variable "supportPrivilegeResources" does not exist.', 77, $this->source); })()), "advanced", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["privelegeCode"] => $context["privelegeDescription"]) {
            // line 78
            yield "\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privelegeCode"], "html", null, true);
            yield "\" ";
            if (((isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 81, $this->source); })()) && CoreExtension::inFilter($context["privelegeCode"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["supportPrivilege"]) || array_key_exists("supportPrivilege", $context) ? $context["supportPrivilege"] : (function () { throw new RuntimeError('Variable "supportPrivilege" does not exist.', 81, $this->source); })()), "privileges", [], "any", false, false, false, 81)))) {
                yield "checked";
            }
            yield ">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["privelegeDescription"], "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['privelegeCode'], $context['privelegeDescription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">Select All</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">Remove All</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- CSRF token Field -->
                ";
        // line 99
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

    // line 106
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

        // line 107
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
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^((?![!@#\$%^&*()<>]).)*\$',
\t\t\t\t\t\tmsg: \"";
        // line 117
        yield "Privilege Name must have characters only";
        yield "\"
\t\t\t\t\t},{
\t\t\t\t\t\tmaxLength:50,
                        msg: \"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 50"), "html", null, true);
        yield "\"
\t\t\t\t\t}],
\t\t\t\t\t'privilege_form[description]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'privilege_form[privileges][]': {
                        fn: function() {
                            return !\$(\"input[name='privilege_form[privileges][]']:checked\").length ? true : false;
                        },
                        msg: '";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar UpdateSupportPrivilegeForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"savePrivilege\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
\t\t\t\t\t'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 144
        yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 144, $this->source); })());
        yield "');
\t\t    \t\tfor (var field in jsonContext) {
\t\t\t\t\t\tif(field == 'privileges') {
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
\t\t\t\tsavePrivilege : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
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

\t\t\tvar privilegeForm = new UpdateSupportPrivilegeForm({
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
        return "@UVDeskCoreFramework/Privileges/updateSupportPrivelege.html.twig";
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
        return array (  344 => 144,  327 => 130,  318 => 124,  311 => 120,  305 => 117,  299 => 114,  288 => 107,  275 => 106,  258 => 99,  246 => 88,  236 => 84,  226 => 81,  221 => 78,  217 => 77,  206 => 68,  196 => 59,  186 => 55,  176 => 52,  171 => 49,  167 => 48,  151 => 34,  144 => 29,  134 => 22,  129 => 19,  126 => 17,  118 => 13,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Edit Privilege{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>Edit Privilege</h1>
\t\t\t
            {# Edit Support Privilege Form #}
\t\t\t<form method=\"post\" action=\"\" id=\"privilege-form\">
                {# Basic Details #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Name</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"privilege_form[name]\" class=\"uv-field\" value=\"{{ supportPrivilege.name }}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Description</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"privilege_form[description]\" class=\"uv-field\">{{ supportPrivilege.description }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>

                {# Agent Resources #}
\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">Agent Privileges</label>
\t\t\t\t\t\t<span class=\"uv-field-info uv-margin-top-5\">Choose set of privileges which will be available to the agent.</span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">Tickets</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                            {% for privelegeCode, privelegeDescription in supportPrivilegeResources.ticket %}
\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"{{ privelegeCode }}\" {% if supportPrivilege and privelegeCode in supportPrivilege.privileges %}checked{% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ privelegeDescription }}</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">Select All</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">Remove All</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
                {# Advanced Resources #}
\t\t\t\t<div class=\"uv-scroll-plank\">
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label uv-bold\">Advanced</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"uv-scroll-block\" id=\"beauty-scroll\">
\t\t\t\t\t\t\t{% for privelegeCode, privelegeDescription in supportPrivilegeResources.advanced %}
\t\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<input name=\"privilege_form[privileges][]\" type=\"checkbox\" value=\"{{ privelegeCode }}\" {% if supportPrivilege and privelegeCode in supportPrivilege.privileges %}checked{% endif %}>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ privelegeDescription }}</span>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<a href=\"#\" class=\"select\">Select All</a>
\t\t\t\t\t\t<a href=\"#\" class=\"deselect\">Remove All</a>
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
\t\t\t\t\t\tmsg: \"{{ 'Privilege Name must have characters only' }}\"
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
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar UpdateSupportPrivilegeForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"savePrivilege\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
\t\t\t\t\t'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
\t\t\t\t\t\tif(field == 'privileges') {
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
\t\t\t\tsavePrivilege : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
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

\t\t\tvar privilegeForm = new UpdateSupportPrivilegeForm({
\t\t\t\tel: \$(\"#privilege-form\"),
\t\t\t\tmodel: new SupportPrivilegeModel()
\t\t\t});\t
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/Privileges/updateSupportPrivelege.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Privileges/updateSupportPrivelege.html.twig");
    }
}
