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

/* @UVDeskCoreFramework/SwiftMailer/listConfigurations.html.twig */
class __TwigTemplate_b38d770425a90883b38d134a0b0c8e3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/SwiftMailer/listConfigurations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/SwiftMailer/listConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework/Templates/layout.html.twig", "@UVDeskCoreFramework/SwiftMailer/listConfigurations.html.twig", 1);
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

        yield "Swift Mailer";
        
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

\t\t.mailer-id {
\t\t\tfont-weight: 600;
\t\t\tborder: 1px solid #333;
\t\t\tbackground: #cecece;
\t\t\tpadding: 2px 4px 2px;
\t\t\tborder-radius: 2px;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "\t<div class=\"uv-inner-section\">
        ";
        // line 25
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 26
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 27
        yield "
\t\t";
        // line 28
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 28, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 28, $this->source); })())], "method", false, false, false, 28), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 28, $this->source); })())], "method", false, false, false, 28);
        yield "

\t\t<div class=\"uv-view ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "cookies", [], "any", false, false, false, 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "cookies", [], "any", false, false, false, 30), "get", ["uv-asideView"], "method", false, false, false, 30))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t<h1>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SwiftMailer Configurations"), "html", null, true);
        yield "</h1>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_swiftmailer_create_mailer_configuration");
        yield "\" type=\"button\" class=\"uv-btn-action\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Configuration"), "html", null, true);
        yield "</a>
\t\t\t\t</div>
            </div>

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "</th>
                            <th>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</th>
                            <th>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t<th>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
                </table>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
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

        // line 61
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t
\t<script type=\"text/template\" id=\"no_mailers_template\">
        <div class=\"uv-app-screen\">
            <div class=\"uv-app-splash\" style=\"text-align: center;\">
                <img class=\"uv-app-splash-image\" src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/splash/mailbox.png"), "html", null, true);
        yield "\" alt=\"Tasks\">
                <h2 class=\"uv-margin-top-10\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No swiftmailer configurations found"), "html", null, true);
        yield "</h2>
            </div>
        </div>\t
\t</script>

\t<script id=\"swiftmailer_configuration_item_template\" type=\"text/template\">
\t\t<td><span class=\"mailer-id\"><%- id %></span></td>
\t\t<td><%- email %></td>
\t\t<td><%- transport %></td>

\t\t<% if (isActive) { %>
\t\t\t<td><span class=\"uv-text-success\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enabled"), "html", null, true);
        yield "</span></td>
\t\t<% } else { %>
\t\t\t<td><span class=\"uv-text-danger\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</span></td>
\t\t<% } %>

\t\t<td data-value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-type\">
\t\t\t\t";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-type\">
\t\t\t\t";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</td>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_swiftmailer_update_mailer_configuration", ["id" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ConfigurationModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ConfigurationCollection = AppCollection.extend({
\t\t\t\tmodel: ConfigurationModel,
\t\t\t\turl: \"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_swiftmailer_load_configurations_xhr");
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
\t\t\t\t\t\tsuccess: function(model,response) {
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
\t\t\t\ttagName: \"tr\",
\t\t\t\ttemplate: _.template(\$(\"#swiftmailer_configuration_item_template\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .delete-type' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender: function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tconfirmRemove: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.openConfirmModal(this)
\t\t\t\t},
\t\t\t\tremoveItem: function (e) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tself = this;
\t\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_swiftmailer_remove_mailer_configuration_xhr");
        yield "?id=\"+this.model.id,
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
\t\t\t\tel: \$(\".uv-list-view table tbody\"),
\t\t\t\ttemplate: _.template(\$(\"#no_mailers_template\").html()),
\t\t\t\tinitialize : function(listItems) {
\t\t\t\t\tthis.render(listItems);
\t\t\t\t},
\t\t\t\trender : function (items) {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\t
\t\t\t\t\tif (items.length > 0) {
\t\t\t\t\t\t_.each(items, function (item) {
\t\t\t\t\t\t\tthis.renderType(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('.uv-table.uv-list-view').html(this.template());
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
        return "@UVDeskCoreFramework/SwiftMailer/listConfigurations.html.twig";
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
        return array (  364 => 159,  307 => 105,  293 => 94,  284 => 88,  278 => 85,  273 => 83,  267 => 80,  262 => 78,  248 => 67,  244 => 66,  235 => 61,  222 => 60,  201 => 49,  197 => 48,  193 => 47,  189 => 46,  185 => 45,  172 => 37,  165 => 33,  157 => 30,  152 => 28,  149 => 27,  146 => 26,  143 => 25,  140 => 23,  127 => 22,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework/Templates/layout.html.twig\" %}

{% block title %}Swift Mailer{% endblock %}

{% block templateCSS %}
    <style>
\t\t.uv-action-bar {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding-bottom: 10px;
\t\t}

\t\t.mailer-id {
\t\t\tfont-weight: 600;
\t\t\tborder: 1px solid #333;
\t\t\tbackground: #cecece;
\t\t\tpadding: 2px 4px 2px;
\t\t\tborder-radius: 2px;
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
                <div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t<h1>{{ 'SwiftMailer Configurations'|trans }}</h1>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<a href=\"{{ path('helpdesk_member_swiftmailer_create_mailer_configuration') }}\" type=\"button\" class=\"uv-btn-action\">{{ 'Create Configuration'|trans }}</a>
\t\t\t\t</div>
            </div>

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ 'ID'|trans }}</th>
                            <th>{{ 'Email'|trans }}</th>
                            <th>{{ 'Type'|trans }}</th>
\t\t\t\t\t\t\t<th>{{ 'Status'|trans }}</th>
                            <th class=\"uv-last\">{{ 'Action'|trans }}</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
                </table>
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
\t
\t<script type=\"text/template\" id=\"no_mailers_template\">
        <div class=\"uv-app-screen\">
            <div class=\"uv-app-splash\" style=\"text-align: center;\">
                <img class=\"uv-app-splash-image\" src=\"{{ asset('bundles/uvdeskcoreframework/images/splash/mailbox.png') }}\" alt=\"Tasks\">
                <h2 class=\"uv-margin-top-10\">{{ 'No swiftmailer configurations found'|trans }}</h2>
            </div>
        </div>\t
\t</script>

\t<script id=\"swiftmailer_configuration_item_template\" type=\"text/template\">
\t\t<td><span class=\"mailer-id\"><%- id %></span></td>
\t\t<td><%- email %></td>
\t\t<td><%- transport %></td>

\t\t<% if (isActive) { %>
\t\t\t<td><span class=\"uv-text-success\">{{ 'Enabled'|trans }}</span></td>
\t\t<% } else { %>
\t\t\t<td><span class=\"uv-text-danger\">{{ 'Disabled'|trans }}</span></td>
\t\t<% } %>

\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-type\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-type\">
\t\t\t\t{{ \"Delete\"|trans }}
\t\t\t</div>
\t\t</td>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('helpdesk_member_swiftmailer_update_mailer_configuration', {'id': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ConfigurationModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ConfigurationCollection = AppCollection.extend({
\t\t\t\tmodel: ConfigurationModel,
\t\t\t\turl: \"{{ path('helpdesk_member_swiftmailer_load_configurations_xhr') }}\",
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
\t\t\t\t\t\tsuccess: function(model,response) {
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
\t\t\t\ttagName: \"tr\",
\t\t\t\ttemplate: _.template(\$(\"#swiftmailer_configuration_item_template\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .delete-type' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender: function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tconfirmRemove: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.openConfirmModal(this)
\t\t\t\t},
\t\t\t\tremoveItem: function (e) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tself = this;
\t\t\t\t\t
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{ path('helpdesk_member_swiftmailer_remove_mailer_configuration_xhr') }}?id=\"+this.model.id,
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
\t\t\t\tel: \$(\".uv-list-view table tbody\"),
\t\t\t\ttemplate: _.template(\$(\"#no_mailers_template\").html()),
\t\t\t\tinitialize : function(listItems) {
\t\t\t\t\tthis.render(listItems);
\t\t\t\t},
\t\t\t\trender : function (items) {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\t
\t\t\t\t\tif (items.length > 0) {
\t\t\t\t\t\t_.each(items, function (item) {
\t\t\t\t\t\t\tthis.renderType(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('.uv-table.uv-list-view').html(this.template());
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
{% endblock %}", "@UVDeskCoreFramework/SwiftMailer/listConfigurations.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/SwiftMailer/listConfigurations.html.twig");
    }
}
