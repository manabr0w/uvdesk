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

/* @UVDeskApi/accessCredentialSettings.html.twig */
class __TwigTemplate_072e2c34296ef452fd9b4116e6bd47fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskApi/accessCredentialSettings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskApi/accessCredentialSettings.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskApi/accessCredentialSettings.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Api Access Credential Settings"), "html", null, true);
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
\t\t\t<h1>Create Access Credentials</h1>

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form id=\"access-credential-settings-view\" method=\"POST\" action=\"\">
\t\t\t\t";
        // line 42
        yield "\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Token Name:</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" placeholder=\"Enter Token Name\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">Enable Credentials</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<input type=\"submit\" class=\"uv-btn\" href=\"#\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Credentials"), "html", null, true);
        yield "\">
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar ApiCredentialSettingsModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please specify a valid name for your access credentials.\";
\t\t\t\t\t\t}
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar ApiCredentialSettingsView = Backbone.View.extend({
\t\t\t\tevents: {
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
\t\t\t\t},
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});
\t\t\t
\t\t\tnew ApiCredentialSettingsView({
\t\t\t\tel: \$(\"#access-credential-settings-view\"),
\t\t\t\tmodel: new ApiCredentialSettingsModel()
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
        return "@UVDeskApi/accessCredentialSettings.html.twig";
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
        return array (  204 => 68,  191 => 67,  175 => 61,  154 => 42,  143 => 35,  138 => 33,  135 => 32,  132 => 31,  129 => 30,  106 => 8,  93 => 7,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Api Access Credential Settings'|trans }}
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
\t\t\t<h1>Create Access Credentials</h1>

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form id=\"access-credential-settings-view\" method=\"POST\" action=\"\">
\t\t\t\t{# Token Name #}
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Token Name:</label>

\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" placeholder=\"Enter Token Name\" />
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label>
\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t<input name=\"isEnabled\" type=\"checkbox\" checked=\"\">
\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<span class=\"uv-checkbox-label\">Enable Credentials</span>
\t\t\t\t\t</label>
\t\t\t\t</div>

\t\t\t\t<input type=\"submit\" class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Credentials'|trans }}\">
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar ApiCredentialSettingsModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
\t\t\t\t\tname: function(value) {
\t\t\t\t\t\tif (value == undefined || value == '') {
\t\t\t\t\t\t\treturn \"Please specify a valid name for your access credentials.\";
\t\t\t\t\t\t}
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar ApiCredentialSettingsView = Backbone.View.extend({
\t\t\t\tevents: {
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
\t\t\t\t},
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});
\t\t\t
\t\t\tnew ApiCredentialSettingsView({
\t\t\t\tel: \$(\"#access-credential-settings-view\"),
\t\t\t\tmodel: new ApiCredentialSettingsModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskApi/accessCredentialSettings.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/api-bundle/Resources/views/accessCredentialSettings.html.twig");
    }
}
