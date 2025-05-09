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

/* @UVDeskSupportCenter/Staff/Announcement/listAnnouncement.html.twig */
class __TwigTemplate_1595d2b91aef2581cca6d9aa7003c4c4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Announcement/listAnnouncement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Announcement/listAnnouncement.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Announcement/listAnnouncement.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marketing Announcement"), "html", null, true);
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
        // line 10
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 11
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\SupportCenterBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Knowledgebase";
        // line 12
        yield "
\t\t";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 13, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 13, $this->source); })())], "method", false, false, false, 13), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 13, $this->source); })())], "method", false, false, false, 13);
        yield "

\t\t<div class=\"uv-view ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "cookies", [], "any", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "cookies", [], "any", false, false, false, 15), "get", ["uv-asideView"], "method", false, false, false, 15))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marketing Announcement"), "html", null, true);
        yield "
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <!--Sort by-->
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created At"), "html", null, true);
        yield "
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 28
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
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">";
        // line 47
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
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t<a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_marketing_announcement");
        yield "\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Announcement"), "html", null, true);
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
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t<th>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</th>
                            <th>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advertisement"), "html", null, true);
        yield "</th>
                            <th>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 74
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

    // line 86
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

        // line 87
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<!-- Sorting Template -->
\t<script id=\"announcement_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 'a.createdAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.createdAt/<% if (sort == 'a.createdAt') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.createdAt\">
\t\t\t\t";
        // line 93
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        // line 94
        yield "\t\t\t\t<% if (sort == 'a.createdAt') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.title') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.title/<% if (sort == 'a.title') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.title\">
\t\t\t\t";
        // line 102
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        // line 103
        yield "\t\t\t\t<% if (sort == 'a.title') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Team list item template -->
\t<script id=\"announcement_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "\">
\t\t\t<%- title %>
\t\t</td>
\t\t<td data-value=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "\">
\t\t\t<%- group.name %>
\t\t</td>
\t\t<td data-value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advertisement"), "html", null, true);
        yield "\"><%- promoText %></td>
\t\t<td data-value=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
\t\t\t<% if (isActive) { %>
            \t<span class=\"uv-text-success\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-team\">
\t\t\t\t";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-team\">
\t\t\t\t";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Team list item template -->

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_marketing_announcement", ["announcementId" => "replaceId"]);
        yield "\";
        var deletePath = \"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_remove_marketing_announcement_xhr", ["announcementId" => "replaceId"]);
        yield "\";
\t\t
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar TeamModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar AnnouncementCollection = AppCollection.extend({
\t\t\t\tmodel : TeamModel,
\t\t\t\turl : \"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_marketing_announcement_xhr");
        yield "\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.groups;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar teamListView = new AnnouncementList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (teamCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (globalMessageResponse)
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar AnnouncementItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#announcement_list_item_tmp\").html()),
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
\t\t\t\t\t\turl: deletePath.replace('replaceId', this.model.get('id')),
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
\t\t\t});

\t\t\tvar AnnouncementList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif (teamCollection.length) {
\t\t\t\t\t\t_.each(teamCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTeam(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='5'>";
        // line 244
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTeam : function (item) {
\t\t\t\t\tvar teamItem = new AnnouncementItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(teamItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'a.createdAt',
\t\t\t\tsortText: \"";
        // line 257
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 258
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#announcement_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar teamCollection = new AnnouncementCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : teamCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
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
        // line 303
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 304
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
\t\t\t\t\tteamCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
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
        return "@UVDeskSupportCenter/Staff/Announcement/listAnnouncement.html.twig";
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
        return array (  547 => 304,  543 => 303,  493 => 258,  489 => 257,  473 => 244,  377 => 151,  363 => 140,  359 => 139,  349 => 132,  343 => 129,  338 => 127,  332 => 124,  327 => 122,  322 => 120,  318 => 119,  312 => 116,  306 => 113,  294 => 103,  292 => 102,  282 => 94,  280 => 93,  270 => 87,  257 => 86,  235 => 74,  231 => 73,  227 => 72,  223 => 71,  219 => 70,  205 => 59,  200 => 57,  195 => 55,  184 => 47,  180 => 46,  176 => 45,  171 => 43,  162 => 39,  148 => 28,  139 => 24,  129 => 17,  122 => 15,  117 => 13,  114 => 12,  111 => 11,  108 => 10,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Marketing Announcement'|trans }}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\SupportCenterBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Knowledgebase' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Marketing Announcement'|trans }}
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
\t\t\t\t\t<a href=\"{{ path('helpdesk_member_knowledgebase_create_marketing_announcement') }}\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t{{ \"New Announcement\"|trans }}
\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ \"Name\"|trans }}</th>
\t\t\t\t\t\t\t<th>{{ \"Group\"|trans }}</th>
                            <th>{{ \"Advertisement\"|trans }}</th>
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

\t<!-- Sorting Template -->
\t<script id=\"announcement_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 'a.createdAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.createdAt/<% if (sort == 'a.createdAt') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.createdAt\">
\t\t\t\t{% trans %}Created At{% endtrans %}
\t\t\t\t<% if (sort == 'a.createdAt') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.title') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%= queryString %>/<% } %><% if (page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.title/<% if (sort == 'a.title') { %><% if (direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.title\">
\t\t\t\t{% trans %}Name{% endtrans %}
\t\t\t\t<% if (sort == 'a.title') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Team list item template -->
\t<script id=\"announcement_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"{{ 'Name'|trans }}\">
\t\t\t<%- title %>
\t\t</td>
\t\t<td data-value=\"{{ 'Group'|trans }}\">
\t\t\t<%- group.name %>
\t\t</td>
\t\t<td data-value=\"{{ 'Advertisement'|trans }}\"><%- promoText %></td>
\t\t<td data-value=\"{{ 'Status'|trans }}\">
\t\t\t<% if (isActive) { %>
            \t<span class=\"uv-text-success\">{{ 'Active'|trans }}</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">{{ 'Disabled'|trans }}</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-team\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-team\">
\t\t\t\t{{ \"Delete\"|trans }}
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Team list item template -->

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('helpdesk_member_knowledgebase_update_marketing_announcement', {'announcementId': 'replaceId' }) }}\";
        var deletePath = \"{{ path('helpdesk_member_knowledgebase_remove_marketing_announcement_xhr', { 'announcementId': 'replaceId' }) }}\";
\t\t
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar TeamModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar AnnouncementCollection = AppCollection.extend({
\t\t\t\tmodel : TeamModel,
\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_marketing_announcement_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.groups;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar teamListView = new AnnouncementList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (teamCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (globalMessageResponse)
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(globalMessageResponse);
\t\t\t\t\t\t\tglobalMessageResponse = null;
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar AnnouncementItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#announcement_list_item_tmp\").html()),
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
\t\t\t\t\t\turl: deletePath.replace('replaceId', this.model.get('id')),
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
\t\t\t});

\t\t\tvar AnnouncementList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif (teamCollection.length) {
\t\t\t\t\t\t_.each(teamCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTeam(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='5'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTeam : function (item) {
\t\t\t\t\tvar teamItem = new AnnouncementItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(teamItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'a.createdAt',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Created At{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#announcement_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar teamCollection = new AnnouncementCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : teamCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
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
\t\t});
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Staff/Announcement/listAnnouncement.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Announcement/listAnnouncement.html.twig");
    }
}
