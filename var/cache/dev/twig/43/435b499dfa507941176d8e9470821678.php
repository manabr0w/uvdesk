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

/* @UVDeskAutomation/Workflow/workflowList.html.twig */
class __TwigTemplate_94dfd5c7fe7ea39818501d4010307d1e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/workflowList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/workflowList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework/Templates/layout.html.twig", "@UVDeskAutomation/Workflow/workflowList.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Workflows"), "html", null, true);
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
\t \t.uv-icon-drag {
\t\t\tmargin: 0 10px 0 5px;
\t\t\tcursor: move;
\t \t}
\t </style>
\t<div class=\"uv-inner-section\">
\t\t";
        // line 16
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 17
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Productivity";
        // line 18
        yield "
\t\t";
        // line 19
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 19, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 19, $this->source); })())], "method", false, false, false, 19), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 19, $this->source); })())], "method", false, false, false, 19);
        yield "
\t\t
\t\t<div class=\"uv-view ";
        // line 21
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "cookies", [], "any", false, false, false, 21) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "cookies", [], "any", false, false, false, 21), "get", ["uv-asideView"], "method", false, false, false, 21))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Workflows"), "html", null, true);
        yield "
\t\t\t\t\t</h1>
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t
\t\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t<a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflows_addaction");
        yield "\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Workflow"), "html", null, true);
        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</th>
                            <th>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
\t\t\t\t<div class=\"navigation\"></div>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
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

        // line 59
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<!-- Workflow list item template -->
\t<script id=\"workflow_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "\">
\t\t\t<span class=\"uv-icon-drag\" title=\"Reorder\"></span>
\t\t\t<%- name %>
\t\t</td>
        <td data-value=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
\t\t\t<% if(status) { %>
            \t<span class=\"uv-text-success\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-workflow\" data-value=\"<%= id %>\">
\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-workflow\">
\t\t\t\t";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Workflow list item template -->
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t<script type=\"text/javascript\">
        var path = \"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflows_editaction", ["id" => "replaceId"]);
        yield "\";
\t\t
\t\t\$(function () {
\t\t\t\$('.uv-table.uv-list-view tbody').sortable();
\t\t\t\$('.uv-table.uv-list-view tbody').on(\"sortupdate\", function(event, ui){
\t\t\t\tvar data = {'orders': {}};
\t\t\t\t\$('.uv-table.uv-list-view tbody tr').each(function(key, value){
\t\t\t\t\tvar modelKey = \$(value).find('.edit-workflow').attr('data-value');
\t\t\t\t\tif(modelKey){
\t\t\t\t\t\tdata.orders[modelKey] = key+1;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tworkflowListView.updateSortOrder(data)
\t\t\t});

\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar WorkflowModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar WorkflowCollection = AppCollection.extend({
\t\t\t\tmodel : WorkflowModel,
\t\t\t\turl : \"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflowslist_xhr");
        yield "\",
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.workflows;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\treset: true,               
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tworkflowListView.render();

\t\t\t\t\t\t\tif(globalMessageResponse)
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} 
\t\t\t});

\t\t\tvar WorkflowItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#workflow_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-workflow' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tworkflowCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tconfirmRemove: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.openConfirmModal(this)
\t\t\t\t},
\t\t\t\tremoveItem : function (e) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tself = this;
\t\t\t\t\tthis.model.destroy({
\t\t\t\t\t\turl : \"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflows_xhraction");
        yield "/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tworkflowCollection.syncData();
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif(xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar WorkflowList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif(workflowCollection.length) {
\t\t\t\t\t\t_.each(workflowCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderWorkflow(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='3'>";
        // line 185
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderWorkflow : function (item) {
\t\t\t\t\tvar workflowItem = new WorkflowItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(workflowItem.render().el);
\t\t\t\t},
\t\t\t\tupdateSortOrder: function(data) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflows_xhraction");
        yield "\",
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif(xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar workflowListView = new WorkflowList();
\t\t\tvar workflowCollection = new WorkflowCollection();

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tworkflowCollection.syncData();
\t\t\t\t}
\t\t\t});     

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t}); \t
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
        return "@UVDeskAutomation/Workflow/workflowList.html.twig";
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
        return array (  384 => 197,  369 => 185,  337 => 156,  286 => 108,  260 => 85,  250 => 78,  244 => 75,  239 => 73,  233 => 70,  228 => 68,  223 => 66,  216 => 62,  209 => 59,  196 => 58,  174 => 46,  170 => 45,  166 => 44,  152 => 33,  147 => 31,  138 => 25,  129 => 21,  124 => 19,  121 => 18,  118 => 17,  115 => 16,  106 => 8,  93 => 7,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework/Templates/layout.html.twig\" %}

{% block title %} 
\t{{ 'Workflows'|trans }}
{% endblock %}

{% block pageContent %}
\t<style>
\t \t.uv-icon-drag {
\t\t\tmargin: 0 10px 0 5px;
\t\t\tcursor: move;
\t \t}
\t </style>
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Productivity' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t{{ 'Workflows'|trans }}
\t\t\t\t\t</h1>
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t
\t\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t<a href=\"{{ path('workflows_addaction') }}\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t{{ \"New Workflow\"|trans }}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ \"Name\"|trans }}</th>
                            <th>{{ \"Status\"|trans }}</th>
                            <th class=\"uv-last\">{{ \"Action\"|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
\t\t\t\t<div class=\"navigation\"></div>
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
\t<!-- Workflow list item template -->
\t<script id=\"workflow_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"{{ 'Name'|trans }}\">
\t\t\t<span class=\"uv-icon-drag\" title=\"Reorder\"></span>
\t\t\t<%- name %>
\t\t</td>
        <td data-value=\"{{ 'Status'|trans }}\">
\t\t\t<% if(status) { %>
            \t<span class=\"uv-text-success\">{{ 'Active'|trans }}</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">{{ 'Disabled'|trans }}</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-workflow\" data-value=\"<%= id %>\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-workflow\">
\t\t\t\t{{ \"Delete\"|trans }}
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Workflow list item template -->
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
\t<script type=\"text/javascript\">
        var path = \"{{ path('workflows_editaction', {'id': 'replaceId' }) }}\";
\t\t
\t\t\$(function () {
\t\t\t\$('.uv-table.uv-list-view tbody').sortable();
\t\t\t\$('.uv-table.uv-list-view tbody').on(\"sortupdate\", function(event, ui){
\t\t\t\tvar data = {'orders': {}};
\t\t\t\t\$('.uv-table.uv-list-view tbody tr').each(function(key, value){
\t\t\t\t\tvar modelKey = \$(value).find('.edit-workflow').attr('data-value');
\t\t\t\t\tif(modelKey){
\t\t\t\t\t\tdata.orders[modelKey] = key+1;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tworkflowListView.updateSortOrder(data)
\t\t\t});

\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar WorkflowModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar WorkflowCollection = AppCollection.extend({
\t\t\t\tmodel : WorkflowModel,
\t\t\t\turl : \"{{ path('workflowslist_xhr') }}\",
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.workflows;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\treset: true,               
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tworkflowListView.render();

\t\t\t\t\t\t\tif(globalMessageResponse)
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} 
\t\t\t});

\t\t\tvar WorkflowItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#workflow_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-workflow' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tworkflowCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tconfirmRemove: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tapp.appView.openConfirmModal(this)
\t\t\t\t},
\t\t\t\tremoveItem : function (e) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tself = this;
\t\t\t\t\tthis.model.destroy({
\t\t\t\t\t\turl : \"{{ path('workflows_xhraction') }}/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tworkflowCollection.syncData();
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif(xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar WorkflowList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif(workflowCollection.length) {
\t\t\t\t\t\t_.each(workflowCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderWorkflow(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='3'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderWorkflow : function (item) {
\t\t\t\t\tvar workflowItem = new WorkflowItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(workflowItem.render().el);
\t\t\t\t},
\t\t\t\tupdateSortOrder: function(data) {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: \"{{path('workflows_xhraction')}}\",
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tdata: data,
\t\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif(xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar workflowListView = new WorkflowList();
\t\t\tvar workflowCollection = new WorkflowCollection();

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tworkflowCollection.syncData();
\t\t\t\t}
\t\t\t});     

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t}); \t
\t</script>
{% endblock %}
", "@UVDeskAutomation/Workflow/workflowList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/Workflow/workflowList.html.twig");
    }
}
