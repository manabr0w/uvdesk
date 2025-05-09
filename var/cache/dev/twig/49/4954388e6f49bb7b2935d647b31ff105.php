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

/* @UVDeskCoreFramework/MicrosoftApps/listConfigurations.html.twig */
class __TwigTemplate_b16e5cc96383d100f3481fdbb25a887f extends Template
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
        return "@UVDeskCoreFramework/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/MicrosoftApps/listConfigurations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/MicrosoftApps/listConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework/Templates/layout.html.twig", "@UVDeskCoreFramework/MicrosoftApps/listConfigurations.html.twig", 1);
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

        yield "Microsoft Apps";
        
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
\t\t.uv-action-bar {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding-bottom: 10px;
\t\t}

\t\t.uv-app-list-brick {
\t\t\twidth: 310px;
\t\t\tmax-width: 100%;
\t\t\tfont-size: 0;
\t\t\tmargin: 15px 20px 0px 0px;
\t\t\tdisplay: inline-block;
\t\t\tborder-radius: 3px;
\t\t\tborder: solid 1px #7C70F4;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-lt {
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t\twidth: 35%;
\t\t\theight: 100%;
\t\t\ttext-align: center;
\t\t\tbackground-color: #7C70F4;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-lt span {
\t\t\tfont-size: 24px;
\t\t\tcolor: #FFFFFF;
\t\t\tpadding: 24px 0px;
\t\t\tdisplay: inline-block;
\t\t\tline-height: 40px;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt {
\t\t\twidth: 65%;
\t\t\tpadding: 10px 15px 9px 15px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt p {
\t\t\twidth: 100%;
\t\t\tmargin: 0px;
\t\t\tmargin-bottom: 3px;
\t\t\toverflow: hidden;
\t\t\twhite-space: nowrap;
\t\t\ttext-overflow: ellipsis;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt span.uv-app-list-flag-active {
\t\t\tfont-size: 15px;
\t\t\tcolor: #FFFFFF;
\t\t\tbackground-color: #2ED04C;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 0px 7px 1px 7px;
\t\t\tmargin-bottom: 2px;
\t\t\tborder-radius: 3px;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt span.uv-app-list-flag-inactive {
\t\t\tfont-size: 15px;
\t\t\tcolor: #FFFFFF;
\t\t\tbackground-color: #FF5656;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 0px 7px 1px 7px;
\t\t\tmargin-bottom: 2px;
\t\t\tborder-radius: 3px;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt a:link,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:focus,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:hover,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:active,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:visited {
\t\t\tfont-size: 15px;
\t\t\tcolor: #2750C4;
\t\t\tmargin-right: 10px;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt a.uv-delete {
\t\t\tcolor: #FF5656;
\t\t}

\t\t";
        // line 96
        yield "
\t\t.uv-custom-btn {
\t\t\tcursor: pointer;
\t\t\tbackground: unset;
\t\t\tborder: unset;
\t\t\tmargin-right: 10px;
\t\t\tpadding: unset;
\t\t\tfont-size: 15px;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
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

        // line 109
        yield "\t<div class=\"uv-inner-section\">
        ";
        // line 111
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 112
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 113
        yield "
\t\t";
        // line 114
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 114, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 114, $this->source); })())], "method", false, false, false, 114), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 114, $this->source); })())], "method", false, false, false, 114);
        yield "

\t\t<div class=\"uv-view ";
        // line 116
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "cookies", [], "any", false, false, false, 116) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "cookies", [], "any", false, false, false, 116), "get", ["uv-asideView"], "method", false, false, false, 116))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<h1>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Microsoft Apps"), "html", null, true);
        yield "</h1>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings_create_configuration");
        yield "\" type=\"button\" class=\"uv-btn-action\" style=\"margin: unset;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New App"), "html", null, true);
        yield "</a>
\t\t\t\t</div>
            </div>

            <div id=\"mailbox-collection\" class=\"mailbox-collection uv-app-list-channels\">
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 133
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

        // line 134
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t
\t<script type=\"text/template\" id=\"no_configurations_template\">
        <div class=\"uv-app-screen\">
            <div class=\"uv-app-splash\" style=\"text-align: center;\">
                <img class=\"uv-app-splash-image\" src=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/splash/mailbox.png"), "html", null, true);
        yield "\" alt=\"Tasks\">
                <h2 class=\"uv-margin-top-10\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No microsoft apps found"), "html", null, true);
        yield "</h2>
            </div>
        </div>\t
\t</script>

\t<script id=\"app_configuration_item_template\" type=\"text/template\">
\t\t<div class=\"uv-app-list-brick-rt\" title=\"<%- id %>\" style=\"width: 100%;\">
\t\t\t<p style=\"line-height: 1.4em; margin: unset; margin-bottom: 4px;\">
\t\t\t\t<span style=\"font-weight: 700; text-transform: uppercase;\"><%- name %></span>
\t\t\t</p>
\t\t\t
\t\t\t<p style=\"line-height: 1.4em; margin-bottom: 10px;\">
\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-active\">Enabled</span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-inactive\">Disabled</span>
\t\t\t\t<% } %>

                <% if (isVerified) { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-active\">Verified</span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-inactive\">Unverified</span>
\t\t\t\t<% } %>
\t\t\t</p>

\t\t\t<div class=\"uv-app-list-actions\" style=\"display: flex; align-items: center; margin-top: 1.6rem;\">
\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<button class=\"uv-custom-btn toggle-microsoft-app-status\" data-status=\"disable\" style=\"color: #e00d0d;\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable"), "html", null, true);
        yield "</button>
\t\t\t\t<% } else { %>
\t\t\t\t\t<button class=\"uv-custom-btn toggle-microsoft-app-status\" data-status=\"enable\" style=\"color: #2750C4;\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable"), "html", null, true);
        yield "</button>
\t\t\t\t<% } %>

\t\t\t\t<a href=\"";
        // line 172
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings_update_configuration", ["id" => ""]);
        yield "/<%- id %>\" class=\"uv-custom-btn\">
\t\t\t\t\t";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t\t</a>

\t\t\t\t<button class=\"uv-custom-btn delete-microsoft-app\" style=\"color: #e00d0d;\">";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "</button>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 182
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings_update_configuration", ["id" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ConfigurationModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ConfigurationCollection = AppCollection.extend({
\t\t\t\tmodel: ConfigurationModel,
\t\t\t\turl: \"";
        // line 193
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings_load_configurations_xhr");
        yield "\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.types;
\t\t\t\t},
\t\t\t\tinitialize: function() {
\t\t\t\t\tthis.syncData();
\t\t\t\t},
\t\t\t\tsyncData: function() {
\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata: this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar configurationListView = new ConfigurationList(response);

\t\t\t\t\t\t\tif (globalMessageResponse) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationView = Backbone.View.extend({
\t\t\t\ttagName: \"div\",
\t\t\t\tclassName: \"uv-app-list-brick\",
\t\t\t\ttemplate: _.template(\$(\"#app_configuration_item_template\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .delete-microsoft-app': \"deleteMicrosoftApp\", 
\t\t\t\t\t'click .toggle-microsoft-app-status': \"toggleMicrosoftAppStatus\"
\t\t\t\t},
\t\t\t\trender: function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tdeleteMicrosoftApp: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.openConfirmModal(this)
\t\t\t\t},
\t\t\t\ttoggleMicrosoftAppStatus: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\tlet status = \$(e.target).data('status');

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 251
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings_toggle_configuration_status");
        yield "/\" + this.model.id, 
\t\t\t\t\t\tdata: { status: status }, 
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tconfigurationCollection.syncData();
\t\t\t\t\t\t}, 
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location')) {
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif (xhr.responseJSON) {
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\tremoveItem: function (e) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tself = this;
\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 279
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_member_core_framework_microsoft_apps_settings_remove_configuration");
        yield "/\" + this.model.id,
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tconfigurationCollection.syncData();
\t\t\t\t\t\t}, 
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location')) {
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif (xhr.responseJSON) {
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationList = Backbone.View.extend({
\t\t\t\tel: \$(\".mailbox-collection\"),
\t\t\t\ttemplate: _.template(\$(\"#no_configurations_template\").html()),
\t\t\t\tinitialize : function(listItems) {
\t\t\t\t\tthis.render(listItems);
\t\t\t\t},
\t\t\t\trender : function (items) {
\t\t\t\t\tthis.\$el.find(\"div\").remove();
\t\t\t\t\t
\t\t\t\t\tif (items.length > 0) {
\t\t\t\t\t\t_.each(items, function (item) {
\t\t\t\t\t\t\tthis.renderType(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.html(this.template());
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderType : function (item) {
\t\t\t\t\tvar configuration = new ConfigurationView({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});

\t\t\t\t\tthis.\$el.append(configuration.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar configurationCollection = new ConfigurationCollection();
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
        return "@UVDeskCoreFramework/MicrosoftApps/listConfigurations.html.twig";
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
        return array (  468 => 279,  437 => 251,  376 => 193,  362 => 182,  353 => 176,  347 => 173,  343 => 172,  337 => 169,  332 => 167,  302 => 140,  298 => 139,  289 => 134,  276 => 133,  254 => 123,  247 => 119,  239 => 116,  234 => 114,  231 => 113,  228 => 112,  225 => 111,  222 => 109,  209 => 108,  188 => 96,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework/Templates/layout.html.twig\" %}

{% block title %}Microsoft Apps{% endblock %}

{% block templateCSS %}
    <style>
\t\t.uv-action-bar {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding-bottom: 10px;
\t\t}

\t\t.uv-app-list-brick {
\t\t\twidth: 310px;
\t\t\tmax-width: 100%;
\t\t\tfont-size: 0;
\t\t\tmargin: 15px 20px 0px 0px;
\t\t\tdisplay: inline-block;
\t\t\tborder-radius: 3px;
\t\t\tborder: solid 1px #7C70F4;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-lt {
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t\twidth: 35%;
\t\t\theight: 100%;
\t\t\ttext-align: center;
\t\t\tbackground-color: #7C70F4;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-lt span {
\t\t\tfont-size: 24px;
\t\t\tcolor: #FFFFFF;
\t\t\tpadding: 24px 0px;
\t\t\tdisplay: inline-block;
\t\t\tline-height: 40px;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt {
\t\t\twidth: 65%;
\t\t\tpadding: 10px 15px 9px 15px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt p {
\t\t\twidth: 100%;
\t\t\tmargin: 0px;
\t\t\tmargin-bottom: 3px;
\t\t\toverflow: hidden;
\t\t\twhite-space: nowrap;
\t\t\ttext-overflow: ellipsis;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt span.uv-app-list-flag-active {
\t\t\tfont-size: 15px;
\t\t\tcolor: #FFFFFF;
\t\t\tbackground-color: #2ED04C;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 0px 7px 1px 7px;
\t\t\tmargin-bottom: 2px;
\t\t\tborder-radius: 3px;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt span.uv-app-list-flag-inactive {
\t\t\tfont-size: 15px;
\t\t\tcolor: #FFFFFF;
\t\t\tbackground-color: #FF5656;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 0px 7px 1px 7px;
\t\t\tmargin-bottom: 2px;
\t\t\tborder-radius: 3px;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt a:link,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:focus,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:hover,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:active,
\t\t.uv-app-list-brick .uv-app-list-brick-rt a:visited {
\t\t\tfont-size: 15px;
\t\t\tcolor: #2750C4;
\t\t\tmargin-right: 10px;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.uv-app-list-brick .uv-app-list-brick-rt a.uv-delete {
\t\t\tcolor: #FF5656;
\t\t}

\t\t{# .uv-app-list-brick-template {
\t\t\twidth: 100%;
\t\t\tpadding: 10px 15px 9px 15px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t} #}

\t\t.uv-custom-btn {
\t\t\tcursor: pointer;
\t\t\tbackground: unset;
\t\t\tborder: unset;
\t\t\tmargin-right: 10px;
\t\t\tpadding: unset;
\t\t\tfont-size: 15px;
\t\t}
\t</style>
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<h1>{{ 'Microsoft Apps'|trans }}</h1>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<a href=\"{{ path('uvdesk_member_core_framework_microsoft_apps_settings_create_configuration') }}\" type=\"button\" class=\"uv-btn-action\" style=\"margin: unset;\">{{ 'New App'|trans }}</a>
\t\t\t\t</div>
            </div>

            <div id=\"mailbox-collection\" class=\"mailbox-collection uv-app-list-channels\">
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
\t
\t<script type=\"text/template\" id=\"no_configurations_template\">
        <div class=\"uv-app-screen\">
            <div class=\"uv-app-splash\" style=\"text-align: center;\">
                <img class=\"uv-app-splash-image\" src=\"{{ asset('bundles/uvdeskcoreframework/images/splash/mailbox.png') }}\" alt=\"Tasks\">
                <h2 class=\"uv-margin-top-10\">{{ 'No microsoft apps found'|trans }}</h2>
            </div>
        </div>\t
\t</script>

\t<script id=\"app_configuration_item_template\" type=\"text/template\">
\t\t<div class=\"uv-app-list-brick-rt\" title=\"<%- id %>\" style=\"width: 100%;\">
\t\t\t<p style=\"line-height: 1.4em; margin: unset; margin-bottom: 4px;\">
\t\t\t\t<span style=\"font-weight: 700; text-transform: uppercase;\"><%- name %></span>
\t\t\t</p>
\t\t\t
\t\t\t<p style=\"line-height: 1.4em; margin-bottom: 10px;\">
\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-active\">Enabled</span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-inactive\">Disabled</span>
\t\t\t\t<% } %>

                <% if (isVerified) { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-active\">Verified</span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<span class=\"uv-app-list-flag-inactive\">Unverified</span>
\t\t\t\t<% } %>
\t\t\t</p>

\t\t\t<div class=\"uv-app-list-actions\" style=\"display: flex; align-items: center; margin-top: 1.6rem;\">
\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<button class=\"uv-custom-btn toggle-microsoft-app-status\" data-status=\"disable\" style=\"color: #e00d0d;\">{{ \"Disable\"|trans }}</button>
\t\t\t\t<% } else { %>
\t\t\t\t\t<button class=\"uv-custom-btn toggle-microsoft-app-status\" data-status=\"enable\" style=\"color: #2750C4;\">{{ \"Enable\"|trans }}</button>
\t\t\t\t<% } %>

\t\t\t\t<a href=\"{{ path('uvdesk_member_core_framework_microsoft_apps_settings_update_configuration', {'id': '' }) }}/<%- id %>\" class=\"uv-custom-btn\">
\t\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t\t</a>

\t\t\t\t<button class=\"uv-custom-btn delete-microsoft-app\" style=\"color: #e00d0d;\">{{ \"Delete\"|trans }}</button>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('uvdesk_member_core_framework_microsoft_apps_settings_update_configuration', {'id': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ConfigurationModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ConfigurationCollection = AppCollection.extend({
\t\t\t\tmodel: ConfigurationModel,
\t\t\t\turl: \"{{ path('uvdesk_member_core_framework_microsoft_apps_settings_load_configurations_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.types;
\t\t\t\t},
\t\t\t\tinitialize: function() {
\t\t\t\t\tthis.syncData();
\t\t\t\t},
\t\t\t\tsyncData: function() {
\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata: this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar configurationListView = new ConfigurationList(response);

\t\t\t\t\t\t\tif (globalMessageResponse) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationView = Backbone.View.extend({
\t\t\t\ttagName: \"div\",
\t\t\t\tclassName: \"uv-app-list-brick\",
\t\t\t\ttemplate: _.template(\$(\"#app_configuration_item_template\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .delete-microsoft-app': \"deleteMicrosoftApp\", 
\t\t\t\t\t'click .toggle-microsoft-app-status': \"toggleMicrosoftAppStatus\"
\t\t\t\t},
\t\t\t\trender: function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tdeleteMicrosoftApp: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.openConfirmModal(this)
\t\t\t\t},
\t\t\t\ttoggleMicrosoftAppStatus: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\tlet status = \$(e.target).data('status');

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{ path('uvdesk_member_core_framework_microsoft_apps_settings_toggle_configuration_status') }}/\" + this.model.id, 
\t\t\t\t\t\tdata: { status: status }, 
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tconfigurationCollection.syncData();
\t\t\t\t\t\t}, 
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location')) {
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif (xhr.responseJSON) {
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\tremoveItem: function (e) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tself = this;
\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{ path('uvdesk_member_core_framework_microsoft_apps_settings_remove_configuration') }}/\" + this.model.id,
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tconfigurationCollection.syncData();
\t\t\t\t\t\t}, 
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location')) {
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif (xhr.responseJSON) {
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationList = Backbone.View.extend({
\t\t\t\tel: \$(\".mailbox-collection\"),
\t\t\t\ttemplate: _.template(\$(\"#no_configurations_template\").html()),
\t\t\t\tinitialize : function(listItems) {
\t\t\t\t\tthis.render(listItems);
\t\t\t\t},
\t\t\t\trender : function (items) {
\t\t\t\t\tthis.\$el.find(\"div\").remove();
\t\t\t\t\t
\t\t\t\t\tif (items.length > 0) {
\t\t\t\t\t\t_.each(items, function (item) {
\t\t\t\t\t\t\tthis.renderType(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.html(this.template());
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderType : function (item) {
\t\t\t\t\tvar configuration = new ConfigurationView({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});

\t\t\t\t\tthis.\$el.append(configuration.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar configurationCollection = new ConfigurationCollection();
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/MicrosoftApps/listConfigurations.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/MicrosoftApps/listConfigurations.html.twig");
    }
}
