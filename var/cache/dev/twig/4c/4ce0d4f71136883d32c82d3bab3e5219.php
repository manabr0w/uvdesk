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

/* @UVDeskSupportCenter/Staff/MarketingModule/listModules.html.twig */
class __TwigTemplate_013e385b7fb35bc5119eb8c9aa0c3bfd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/MarketingModule/listModules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/MarketingModule/listModules.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/MarketingModule/listModules.html.twig", 1);
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
        yield "\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marketing Modules"), "html", null, true);
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
        yield "\t<div class=\"uv-inner-section\">
\t\t";
        // line 9
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 10
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\SupportCenterBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Knowledgebase";
        // line 11
        yield "
\t\t";
        // line 12
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 12, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 12, $this->source); })())], "method", false, false, false, 12), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 12, $this->source); })())], "method", false, false, false, 12);
        yield "

\t\t<div class=\"uv-view ";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "cookies", [], "any", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "cookies", [], "any", false, false, false, 14), "get", ["uv-asideView"], "method", false, false, false, 14))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marketing Modules"), "html", null, true);
        yield "
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <!--Sort by-->
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created At"), "html", null, true);
        yield "
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--Sort by-->

                    <!--Filter By Status-->
                    <div class=\"uv-dropdown filter-by-status\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--//Filter By Status-->
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t<a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_marketing_module");
        yield "\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Marketing Module"), "html", null, true);
        yield "
\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "</th>
                            <th>";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</th>
                            <th>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</th>
                            <th>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 73
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

    // line 84
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

        // line 85
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
<!-- Sorting Template -->
<script id=\"marketing_module_list_sorting_tmp\" type=\"text/template\">
\t<li class=\"<% if (sort == 'a.createdAt') { %>uv-drop-list-active<% } %>\">
\t\t<a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.createdAt/<% if (sort == 'a.createdAt') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.createdAt\">
\t\t\t";
        // line 90
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        // line 91
        yield "\t\t\t<% if (sort == 'a.createdAt') { %>
\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t<% } %>
\t\t</a>
\t</li>

\t<li class=\"<% if (sort == 'a.title') { %>uv-drop-list-active<% } %>\">
\t\t<a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.title/<% if (sort == 'a.title') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.title\">
\t\t\t";
        // line 99
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        // line 100
        yield "\t\t\t<% if (sort == 'a.title') { %>
\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t<% } %>
\t\t</a>
\t</li>
</script>
<!-- //Sorting Template -->

<!-- Marketing module item template -->
<script id=\"marketing_module_list_item_tmp\" type=\"text/template\">
    <td data-value=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "\">
        <%- title %>
    </td>
    <td data-value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "\">
        <%- group.name %>
    </td>
    <td data-value=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "\">
        <%- description %>
    </td>
    <td data-value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
        <% if (isActive) { %>
            <span class=\"uv-text-success\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</span>
        <% } else { %>
            <span class=\"uv-text-danger\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</span>
        <% } %>
    </td>
    <td data-value=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
        <a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-team\">
\t\t\t";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t</a>
        <div class=\"uv-btn-stroke delete-team\">
            ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
        </div>
    </td>
</script>

<script type=\"text/javascript\">
\tvar path = \"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_marketing_module", ["id" => "replaceId"]);
        yield "\";
    \$(function () {

\t\tvar globalMessageResponse = \"\";
\t\t
\t\tvar TeamModel = Backbone.Model.extend({
\t\t\tidAttribute : \"id\"
\t\t});

\t\tvar AnnouncementCollection = AppCollection.extend({
\t\t\tmodel : TeamModel,
\t\t\turl : \"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_marketing_module_xhr");
        yield "\",
\t\t\tfilterParameters : {
\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\"search\" : \"\"
\t\t\t},
\t\t\tparseRecords: function (resp, options) {
\t\t\t\treturn resp.groups;
\t\t\t},
\t\t\tsyncData : function() {
\t\t\t\tapp.appView.showLoader();
\t\t\t\tthis.fetch({
\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\treset: true,
\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\tvar teamListView = new marketingModuleList();
\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\tif (teamCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\telse {
\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t}
\t\t\t\t\t\tif (globalMessageResponse)
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t},
\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});

\t\tvar AnnouncementItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#marketing_module_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-team' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tteamCollection.syncData();
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
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_remove_marketing_module_xhr");
        yield "/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tteamCollection.syncData();
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif (xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t});

        var marketingModuleList = Backbone.View.extend({
            el : \$(\".uv-list-view table tbody\"),
            initialize : function() {
                this.render();
            },
            render : function () {
                this.\$el.find(\"tr\").remove();
                if (teamCollection.length) {
                    _.each(teamCollection.models, function (item) {
                        this.renderTeam(item);
                    }, this);
                } else {
                    this.\$el.append(\"<tr style='text-align: center;'><td colspan='5'>";
        // line 240
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
                }
            },
            renderTeam : function (item) {
                var teamItem = new AnnouncementItem({
                    model: item
                });
                this.\$el.append(teamItem.render().el);
            }
        });

\t\tvar Filter = app.Filter.extend({
\t\t\tdefaultSortIndex: 'a.createdAt',
\t\t\tsortText: \"";
        // line 253
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\tdefaultSortText: \"";
        // line 254
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\ttemplate : _.template(\$(\"#marketing_module_list_sorting_tmp\").html())
\t\t})

\t\tvar teamCollection = new AnnouncementCollection();

\t\tvar filter = new Filter({
\t\t\tcollection : teamCollection
\t\t});

\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterTeamByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tteamCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tteamCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterTeamByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tteamCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tteamCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tteamCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 299
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 300
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
\t\t\t\t\tteamCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t});
</script>

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
        return "@UVDeskSupportCenter/Staff/MarketingModule/listModules.html.twig";
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
        return array (  543 => 300,  539 => 299,  489 => 254,  485 => 253,  469 => 240,  434 => 208,  371 => 148,  357 => 137,  348 => 131,  342 => 128,  337 => 126,  331 => 123,  326 => 121,  321 => 119,  315 => 116,  309 => 113,  303 => 110,  291 => 100,  289 => 99,  279 => 91,  277 => 90,  269 => 85,  256 => 84,  234 => 73,  230 => 72,  226 => 71,  222 => 70,  218 => 69,  204 => 58,  199 => 56,  194 => 54,  183 => 46,  179 => 45,  175 => 44,  170 => 42,  161 => 38,  147 => 27,  138 => 23,  128 => 16,  121 => 14,  116 => 12,  113 => 11,  110 => 10,  108 => 9,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Marketing Modules'|trans }}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\SupportCenterBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Knowledgebase' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Marketing Modules'|trans }}
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <!--Sort by-->
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            {{ 'Sort By:'|trans }} {{ 'Created At'|trans }}
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>{{ 'Sort By'|trans }}</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--Sort by-->

                    <!--Filter By Status-->
                    <div class=\"uv-dropdown filter-by-status\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            {{ 'Status:'|trans }} {{ 'All'|trans }}
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">{{ 'All'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">{{ 'Active'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">{{ 'Disabled'|trans }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--//Filter By Status-->
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t<a href=\"{{ path('helpdesk_member_knowledgebase_create_marketing_module') }}\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t{{ \"New Marketing Module\"|trans }}
\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ \"Title\"|trans }}</th>
                            <th>{{ \"Group\"|trans }}</th>
                            <th>{{ \"Description\"|trans }}</th>
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
{{ parent() }}
<!-- Sorting Template -->
<script id=\"marketing_module_list_sorting_tmp\" type=\"text/template\">
\t<li class=\"<% if (sort == 'a.createdAt') { %>uv-drop-list-active<% } %>\">
\t\t<a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.createdAt/<% if (sort == 'a.createdAt') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.createdAt\">
\t\t\t{% trans %}Created At{% endtrans %}
\t\t\t<% if (sort == 'a.createdAt') { %>
\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t<% } %>
\t\t</a>
\t</li>

\t<li class=\"<% if (sort == 'a.title') { %>uv-drop-list-active<% } %>\">
\t\t<a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.title/<% if (sort == 'a.title') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.title\">
\t\t\t{% trans %}Name{% endtrans %}
\t\t\t<% if (sort == 'a.title') { %>
\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t<% } %>
\t\t</a>
\t</li>
</script>
<!-- //Sorting Template -->

<!-- Marketing module item template -->
<script id=\"marketing_module_list_item_tmp\" type=\"text/template\">
    <td data-value=\"{{ 'Title'|trans }}\">
        <%- title %>
    </td>
    <td data-value=\"{{ 'Group'|trans }}\">
        <%- group.name %>
    </td>
    <td data-value=\"{{ 'Description'|trans }}\">
        <%- description %>
    </td>
    <td data-value=\"{{ 'Status'|trans }}\">
        <% if (isActive) { %>
            <span class=\"uv-text-success\">{{ 'Active'|trans }}</span>
        <% } else { %>
            <span class=\"uv-text-danger\">{{ 'Disabled'|trans }}</span>
        <% } %>
    </td>
    <td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
        <a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-team\">
\t\t\t{{ \"Edit\"|trans }}
\t\t</a>
        <div class=\"uv-btn-stroke delete-team\">
            {{ \"Delete\"|trans }}
        </div>
    </td>
</script>

<script type=\"text/javascript\">
\tvar path = \"{{ path('helpdesk_member_knowledgebase_update_marketing_module', {'id': 'replaceId' }) }}\";
    \$(function () {

\t\tvar globalMessageResponse = \"\";
\t\t
\t\tvar TeamModel = Backbone.Model.extend({
\t\t\tidAttribute : \"id\"
\t\t});

\t\tvar AnnouncementCollection = AppCollection.extend({
\t\t\tmodel : TeamModel,
\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_marketing_module_xhr') }}\",
\t\t\tfilterParameters : {
\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\"search\" : \"\"
\t\t\t},
\t\t\tparseRecords: function (resp, options) {
\t\t\t\treturn resp.groups;
\t\t\t},
\t\t\tsyncData : function() {
\t\t\t\tapp.appView.showLoader();
\t\t\t\tthis.fetch({
\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\treset: true,
\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\tvar teamListView = new marketingModuleList();
\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\tif (teamCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\telse {
\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t}
\t\t\t\t\t\tif (globalMessageResponse)
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t},
\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t});

\t\tvar AnnouncementItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#marketing_module_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-team' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tteamCollection.syncData();
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
\t\t\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_remove_marketing_module_xhr') }}/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tteamCollection.syncData();
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif (xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t});

        var marketingModuleList = Backbone.View.extend({
            el : \$(\".uv-list-view table tbody\"),
            initialize : function() {
                this.render();
            },
            render : function () {
                this.\$el.find(\"tr\").remove();
                if (teamCollection.length) {
                    _.each(teamCollection.models, function (item) {
                        this.renderTeam(item);
                    }, this);
                } else {
                    this.\$el.append(\"<tr style='text-align: center;'><td colspan='5'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
                }
            },
            renderTeam : function (item) {
                var teamItem = new AnnouncementItem({
                    model: item
                });
                this.\$el.append(teamItem.render().el);
            }
        });

\t\tvar Filter = app.Filter.extend({
\t\t\tdefaultSortIndex: 'a.createdAt',
\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Created At{% endtrans %}\",
\t\t\ttemplate : _.template(\$(\"#marketing_module_list_sorting_tmp\").html())
\t\t})

\t\tvar teamCollection = new AnnouncementCollection();

\t\tvar filter = new Filter({
\t\t\tcollection : teamCollection
\t\t});

\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterTeamByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tteamCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tteamCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterTeamByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tteamCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tteamCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tteamCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tteamCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
\t\t\t\t\tteamCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t});
</script>

{% endblock %}", "@UVDeskSupportCenter/Staff/MarketingModule/listModules.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/MarketingModule/listModules.html.twig");
    }
}
