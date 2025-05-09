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

/* @UVDeskApi/accessCredentials.html.twig */
class __TwigTemplate_3374d79563ab481604425e064632b393 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskApi/accessCredentials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskApi/accessCredentials.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskApi/accessCredentials.html.twig", 1);
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

        yield "API Access Tokens";
        
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
\t\t.uv-inner-section .uv-action-bar {
\t\t\tborder-bottom: unset;
\t\t\tpadding: unset;
\t\t}

\t\t.api-settings-collection {
\t\t\tmargin: 10px 20px 0px 0px;
\t\t}

\t\t.api-settings-collection .uv-splash {
\t\t\ttext-align: center;
\t\t\tmargin: unset;
\t\t\tborder-top: 1px solid #ddd;
\t\t\tpadding-top: 40px;
\t\t}

\t\t.api-settings-collection .uv-splash .uv-splash-image {
\t\t\tmargin-top: 50px;
\t\t}

\t\t.api-settings-collection .uv-api-credentials-collection-item {
\t\t\tpadding: 20px 0px;
\t\t\tborder-bottom: 1px dashed #ccc;
\t\t}

\t\t.api-settings-collection p:first-child {
\t\t\tcolor: #757575;
\t\t\tfont-size: 15px;
\t\t\tline-height: 1.4em;
\t\t\tpadding-bottom: 20px;
\t\t\tborder-bottom: 1px dashed #ccc;
\t\t\tmargin: unset;
\t\t}

\t\t.uv-api-credentials-collection-item ul {
\t\t\tpadding: unset;
\t\t\tlist-style: none;
\t\t\tmargin: 0px 0px 20px 0px;
\t\t}

\t\t.uv-api-credentials-collection-item ul li {
\t\t\tfont-size: 15px;
\t\t\tline-height: 1.4em;
\t\t\tmargin-bottom: 4px;
\t\t}

\t\t.uv-api-credentials-collection-item ul li label {
\t\t\tcolor: #545454;
\t\t\tfont-weight: 700;
\t\t\twidth: 140px;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.uv-api-credentials-collection-item input[type=\"text\"] {
\t\t\tdisplay: block;
\t\t\tcolor: #6F6F6F;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 700;
\t\t\tline-height: 1.4em;
\t\t\tletter-spacing: 1px;
\t\t\ttext-overflow: ellipsis;
\t\t\twidth: 512px;
\t\t\tpadding: 8px 10px 6px;
\t\t\tbackground: #FAFAFA;
\t\t\tborder: dashed 1px #B1B1AE;
\t\t\tborder-radius: 4px;
\t\t\ttransition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
\t\t}

\t\t.uv-api-credentials-collection-item .uv-settings-buttons {
\t\t\tmargin: 20px 0px 0px;
\t\t}

\t\t.uv-api-credentials-collection-item .uv-settings-buttons button {
\t\t\tmargin: unset;
\t\t}
\t</style>

    <div class=\"uv-inner-section\">
        ";
        // line 87
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 88
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 89
        yield "
\t\t";
        // line 90
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 90, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 90, $this->source); })())], "method", false, false, false, 90), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 90, $this->source); })())], "method", false, false, false, 90);
        yield "

        <div class=\"uv-view ";
        // line 92
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "cookies", [], "any", false, false, false, 92) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "cookies", [], "any", false, false, false, 92), "get", ["uv-asideView"], "method", false, false, false, 92))) {
            yield "uv-aside-view";
        }
        yield "\">
            <div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<h1>API Access Tokens</h1>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_api_create_configuration");
        yield "\" type=\"button\" class=\"uv-btn-action\" style=\"margin: unset;\">+ Access Credentials</a>
\t\t\t\t</div>
            </div>

            <div id=\"api-settings-collection\" class=\"api-settings-collection\"></div>
\t\t</div>
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
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 109
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    <script type=\"text/template\" id=\"no-settings-template\">
\t\t<div class=\"uv-splash\">
\t\t\t<img class=\"uv-splash-image\" src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/splash/onboarding.png"), "html", null, true);
        yield "\" alt=\"Api Settings\">
\t\t\t<p>Create api access credentials to easily communicate with the uvdesk api now!</p>
\t\t</div>
\t</script>

    <script id=\"access-credential-item-template\" type=\"text/template\">
\t\t<div id=\"token-<%- id %>\">
\t\t\t<ul>
\t\t\t\t<li><label>Name:</label> <span><%- name %><span></li>

\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<li><label>Status:</label> <span style=\"color: #2ED04C;\">Enabled</span></li>
\t\t\t\t<% } else { %>
\t\t\t\t\t<li><label>Status:</label> <span style=\"color: #FF5656;\">Disabled</span></li>
\t\t\t\t<% } %>
\t\t\t\t
\t\t\t\t<li><label>Date Created:</label> <%- dateCreated %></li>
\t\t\t</ul>
\t\t\t
\t\t\t<div class=\"uv-element-block\" style=\"margin: unset;\">
\t\t\t\t<input type=\"text\" class=\"uv-api-token-input\" value=\"<%- token %>\" readonly >
\t\t\t</div>

\t\t\t<div class=\"uv-settings-buttons\">
\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<button type=\"button\" class=\"uv-btn-small disable-configuration\" style=\"background: #FF5656;\">Disable</button>
\t\t\t\t<% } else { %>
\t\t\t\t\t<button type=\"button\" class=\"uv-btn-small enable-configuration\" style=\"background: #2ED04C;\">Enable</button>
\t\t\t\t<% } %>

\t\t\t\t<button type=\"button\" class=\"uv-btn-small delete-configuration\" style=\"background: #FF5656;\">Delete Credentials</button>
\t\t\t\t<button type=\"button\" class=\"uv-btn-small configuration-copy-clipboard\" data-ref=\"<%- id %>\">Copy Access Token</button>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_api_update_configuration_xhr", ["id" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ConfigurationModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ConfigurationCollection = AppCollection.extend({
\t\t\t\tmodel: ConfigurationModel,
\t\t\t\turl: \"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_api_load_configurations_xhr");
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
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tdata: this.getValidParameters(),
\t\t\t\t\t\tsuccess: function(model,response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar configurationListView = new ConfigurationList(response);

\t\t\t\t\t\t\tif (globalMessageResponse) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location')) {
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationView = Backbone.View.extend({
\t\t\t\ttagName: \"div\",
\t\t\t\tclassName: \"uv-api-credentials-collection-item\",
\t\t\t\ttemplate: _.template(\$(\"#access-credential-item-template\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .enable-configuration' : \"enableConfiguration\",
\t\t\t\t\t'click .disable-configuration' : \"disableConfiguration\",
\t\t\t\t\t'click .delete-configuration' : \"confirmRemove\",
\t\t\t\t\t'click .configuration-copy-clipboard' : \"copyTokenToClipboard\"
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

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_api_update_configuration_xhr");
        yield "/\" + this.model.id,
\t\t\t\t\t\tdata: this.model,
\t\t\t\t\t\ttype: 'DELETE',
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
\t\t\t\tenableConfiguration: function (ev) {
\t\t\t\t\tthis.model.isEnabled = true;

\t\t\t\t\tconsole.log(this.model);

\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_api_update_configuration_xhr");
        yield "/\" + this.model.id,
\t\t\t\t\t\tdata: this.model,
\t\t\t\t\t\ttype: 'PATCH',
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\t
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
\t\t\t\tdisableConfiguration: function (ev) {
\t\t\t\t\tthis.model.isEnabled = false;

\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 283
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_api_update_configuration_xhr");
        yield "/\" + this.model.id,
\t\t\t\t\t\tdata: this.model,
\t\t\t\t\t\ttype: 'PATCH',
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\t
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
\t\t\t\tcopyTokenToClipboard: function (ev) {
\t\t\t\t\tlet targetId = 'token-' + \$(ev.currentTarget).data('ref');
\t\t\t\t\tlet el = \$('#' + targetId + ' .uv-api-token-input');
\t\t\t\t\tel.select();
\t\t\t\t\tdocument.execCommand(\"copy\");
\t\t\t\t\tconsole.log('copying token', el.val());
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationList = Backbone.View.extend({
\t\t\t\tel: \$(\".api-settings-collection\"),
\t\t\t\ttemplate: _.template(\$(\"#no-settings-template\").html()),
\t\t\t\tinitialize : function(listItems) {
\t\t\t\t\tthis.render(listItems);
\t\t\t\t},
\t\t\t\trender : function (items) {
\t\t\t\t\tthis.\$el.empty();
\t\t\t\t\t
\t\t\t\t\tif (items.length > 0) {
\t\t\t\t\t\tthis.\$el.append('<p>Manage your uvdesk api access credentials below:</p>');
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
        return "@UVDeskApi/accessCredentials.html.twig";
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
        return array (  434 => 283,  400 => 252,  364 => 219,  303 => 161,  289 => 150,  249 => 113,  241 => 109,  228 => 108,  209 => 99,  197 => 92,  192 => 90,  189 => 89,  186 => 88,  183 => 87,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}API Access Tokens{% endblock %}

{% block pageContent %}
\t<style>
\t\t.uv-inner-section .uv-action-bar {
\t\t\tborder-bottom: unset;
\t\t\tpadding: unset;
\t\t}

\t\t.api-settings-collection {
\t\t\tmargin: 10px 20px 0px 0px;
\t\t}

\t\t.api-settings-collection .uv-splash {
\t\t\ttext-align: center;
\t\t\tmargin: unset;
\t\t\tborder-top: 1px solid #ddd;
\t\t\tpadding-top: 40px;
\t\t}

\t\t.api-settings-collection .uv-splash .uv-splash-image {
\t\t\tmargin-top: 50px;
\t\t}

\t\t.api-settings-collection .uv-api-credentials-collection-item {
\t\t\tpadding: 20px 0px;
\t\t\tborder-bottom: 1px dashed #ccc;
\t\t}

\t\t.api-settings-collection p:first-child {
\t\t\tcolor: #757575;
\t\t\tfont-size: 15px;
\t\t\tline-height: 1.4em;
\t\t\tpadding-bottom: 20px;
\t\t\tborder-bottom: 1px dashed #ccc;
\t\t\tmargin: unset;
\t\t}

\t\t.uv-api-credentials-collection-item ul {
\t\t\tpadding: unset;
\t\t\tlist-style: none;
\t\t\tmargin: 0px 0px 20px 0px;
\t\t}

\t\t.uv-api-credentials-collection-item ul li {
\t\t\tfont-size: 15px;
\t\t\tline-height: 1.4em;
\t\t\tmargin-bottom: 4px;
\t\t}

\t\t.uv-api-credentials-collection-item ul li label {
\t\t\tcolor: #545454;
\t\t\tfont-weight: 700;
\t\t\twidth: 140px;
\t\t\tdisplay: inline-block;
\t\t}

\t\t.uv-api-credentials-collection-item input[type=\"text\"] {
\t\t\tdisplay: block;
\t\t\tcolor: #6F6F6F;
\t\t\tfont-size: 14px;
\t\t\tfont-weight: 700;
\t\t\tline-height: 1.4em;
\t\t\tletter-spacing: 1px;
\t\t\ttext-overflow: ellipsis;
\t\t\twidth: 512px;
\t\t\tpadding: 8px 10px 6px;
\t\t\tbackground: #FAFAFA;
\t\t\tborder: dashed 1px #B1B1AE;
\t\t\tborder-radius: 4px;
\t\t\ttransition: 0.2s cubic-bezier(0.4, 0, 0.2, 1);
\t\t}

\t\t.uv-api-credentials-collection-item .uv-settings-buttons {
\t\t\tmargin: 20px 0px 0px;
\t\t}

\t\t.uv-api-credentials-collection-item .uv-settings-buttons button {
\t\t\tmargin: unset;
\t\t}
\t</style>

    <div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
            <div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<h1>API Access Tokens</h1>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\" style=\"vertical-align: middle;\">
\t\t\t\t\t<a href=\"{{ path('uvdesk_api_create_configuration') }}\" type=\"button\" class=\"uv-btn-action\" style=\"margin: unset;\">+ Access Credentials</a>
\t\t\t\t</div>
            </div>

            <div id=\"api-settings-collection\" class=\"api-settings-collection\"></div>
\t\t</div>
    </div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

    <script type=\"text/template\" id=\"no-settings-template\">
\t\t<div class=\"uv-splash\">
\t\t\t<img class=\"uv-splash-image\" src=\"{{ asset('bundles/uvdeskcoreframework/images/splash/onboarding.png') }}\" alt=\"Api Settings\">
\t\t\t<p>Create api access credentials to easily communicate with the uvdesk api now!</p>
\t\t</div>
\t</script>

    <script id=\"access-credential-item-template\" type=\"text/template\">
\t\t<div id=\"token-<%- id %>\">
\t\t\t<ul>
\t\t\t\t<li><label>Name:</label> <span><%- name %><span></li>

\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<li><label>Status:</label> <span style=\"color: #2ED04C;\">Enabled</span></li>
\t\t\t\t<% } else { %>
\t\t\t\t\t<li><label>Status:</label> <span style=\"color: #FF5656;\">Disabled</span></li>
\t\t\t\t<% } %>
\t\t\t\t
\t\t\t\t<li><label>Date Created:</label> <%- dateCreated %></li>
\t\t\t</ul>
\t\t\t
\t\t\t<div class=\"uv-element-block\" style=\"margin: unset;\">
\t\t\t\t<input type=\"text\" class=\"uv-api-token-input\" value=\"<%- token %>\" readonly >
\t\t\t</div>

\t\t\t<div class=\"uv-settings-buttons\">
\t\t\t\t<% if (isEnabled) { %>
\t\t\t\t\t<button type=\"button\" class=\"uv-btn-small disable-configuration\" style=\"background: #FF5656;\">Disable</button>
\t\t\t\t<% } else { %>
\t\t\t\t\t<button type=\"button\" class=\"uv-btn-small enable-configuration\" style=\"background: #2ED04C;\">Enable</button>
\t\t\t\t<% } %>

\t\t\t\t<button type=\"button\" class=\"uv-btn-small delete-configuration\" style=\"background: #FF5656;\">Delete Credentials</button>
\t\t\t\t<button type=\"button\" class=\"uv-btn-small configuration-copy-clipboard\" data-ref=\"<%- id %>\">Copy Access Token</button>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('uvdesk_api_update_configuration_xhr', {'id': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ConfigurationModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ConfigurationCollection = AppCollection.extend({
\t\t\t\tmodel: ConfigurationModel,
\t\t\t\turl: \"{{ path('uvdesk_api_load_configurations_xhr') }}\",
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
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tdata: this.getValidParameters(),
\t\t\t\t\t\tsuccess: function(model,response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar configurationListView = new ConfigurationList(response);

\t\t\t\t\t\t\tif (globalMessageResponse) {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location')) {
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationView = Backbone.View.extend({
\t\t\t\ttagName: \"div\",
\t\t\t\tclassName: \"uv-api-credentials-collection-item\",
\t\t\t\ttemplate: _.template(\$(\"#access-credential-item-template\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .enable-configuration' : \"enableConfiguration\",
\t\t\t\t\t'click .disable-configuration' : \"disableConfiguration\",
\t\t\t\t\t'click .delete-configuration' : \"confirmRemove\",
\t\t\t\t\t'click .configuration-copy-clipboard' : \"copyTokenToClipboard\"
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

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{ path('uvdesk_api_update_configuration_xhr') }}/\" + this.model.id,
\t\t\t\t\t\tdata: this.model,
\t\t\t\t\t\ttype: 'DELETE',
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
\t\t\t\tenableConfiguration: function (ev) {
\t\t\t\t\tthis.model.isEnabled = true;

\t\t\t\t\tconsole.log(this.model);

\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{ path('uvdesk_api_update_configuration_xhr') }}/\" + this.model.id,
\t\t\t\t\t\tdata: this.model,
\t\t\t\t\t\ttype: 'PATCH',
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\t
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
\t\t\t\tdisableConfiguration: function (ev) {
\t\t\t\t\tthis.model.isEnabled = false;

\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{ path('uvdesk_api_update_configuration_xhr') }}/\" + this.model.id,
\t\t\t\t\t\tdata: this.model,
\t\t\t\t\t\ttype: 'PATCH',
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\t
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
\t\t\t\tcopyTokenToClipboard: function (ev) {
\t\t\t\t\tlet targetId = 'token-' + \$(ev.currentTarget).data('ref');
\t\t\t\t\tlet el = \$('#' + targetId + ' .uv-api-token-input');
\t\t\t\t\tel.select();
\t\t\t\t\tdocument.execCommand(\"copy\");
\t\t\t\t\tconsole.log('copying token', el.val());
\t\t\t\t}
\t\t\t});

\t\t\tvar ConfigurationList = Backbone.View.extend({
\t\t\t\tel: \$(\".api-settings-collection\"),
\t\t\t\ttemplate: _.template(\$(\"#no-settings-template\").html()),
\t\t\t\tinitialize : function(listItems) {
\t\t\t\t\tthis.render(listItems);
\t\t\t\t},
\t\t\t\trender : function (items) {
\t\t\t\t\tthis.\$el.empty();
\t\t\t\t\t
\t\t\t\t\tif (items.length > 0) {
\t\t\t\t\t\tthis.\$el.append('<p>Manage your uvdesk api access credentials below:</p>');
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
{% endblock %}", "@UVDeskApi/accessCredentials.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/api-bundle/Resources/views/accessCredentials.html.twig");
    }
}
