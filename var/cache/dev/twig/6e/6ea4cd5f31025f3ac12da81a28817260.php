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

/* @UVDeskCoreFramework/supportTagList.html.twig */
class __TwigTemplate_20be0e8b82de9e5e4c277d63c19c5963 extends Template
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
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/supportTagList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/supportTagList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/supportTagList.html.twig", 1);
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

        yield "Ticket Tags";
        
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
\t    .first {
\t\t\twidth: 380px;
\t\t}
\t\t.first.edit {
\t\t\tpadding: 5px 10px;
\t\t }
\t\t.first .left-part, .first.edit input {
\t\t\tdisplay: block;
\t\t}
\t\t.first input, .first.edit .left-part {
\t\t\tdisplay: none;
\t\t}
\t\t.uv-action-bar {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding-bottom: 10px;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        // line 27
        yield "\t<div class=\"uv-inner-section\">
        ";
        // line 29
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 30
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Productivity";
        // line 31
        yield "
\t\t";
        // line 32
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 32, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 32, $this->source); })())], "method", false, false, false, 32), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 32, $this->source); })())], "method", false, false, false, 32);
        yield "
        
\t\t<div class=\"uv-view ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "cookies", [], "any", false, false, false, 34) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "cookies", [], "any", false, false, false, 34), "get", ["uv-asideView"], "method", false, false, false, 34))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
        yield "</h1>
            
\t\t\t";
        // line 38
        yield "\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t";
        // line 41
        yield "                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " Id</div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul></ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t</div>
            </div>

            ";
        // line 58
        yield "            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Code"), "html", null, true);
        yield "</th>
                            <th>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Ticket(s)"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t\t";
        // line 64
        if ((array_key_exists("articlesEnabled", $context) && ((isset($context["articlesEnabled"]) || array_key_exists("articlesEnabled", $context) ? $context["articlesEnabled"] : (function () { throw new RuntimeError('Variable "articlesEnabled" does not exist.', 64, $this->source); })()) == true))) {
            // line 65
            yield "\t\t\t\t\t\t\t\t<th>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Article(s)"), "html", null, true);
            yield "</th>
\t\t\t\t\t\t\t";
        }
        // line 67
        yield "                            <th class=\"uv-last\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
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

    // line 80
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

        // line 81
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        // line 84
        yield "\t<script id=\"tag_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/id/<% if(sort == 'id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"id\">
                ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "
            </a>
            <% if(sort == 'sid') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "
            </a>
            <% if(sort == 'name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'totalTickets') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/totalTickets/<% if(sort == 'totalTickets') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"totalTickets\">
                ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Count"), "html", null, true);
        yield "
            </a>
            <% if(sort == 'totalTickets') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t</script>

    ";
        // line 112
        yield "\t<script id=\"tag_list_item_tmp\" type=\"text/template\">
\t\t<td class=\"first\" data-value=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "\">
            <span class=\"left-part\">
\t\t\t\t<%= _.escape(name) %>
\t\t\t</span>
\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"<%= _.escape(name) %>\"/>
        </td>
        <td data-value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "\">
\t\t\t<a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
        yield "#tag/<%= id %>\">
\t\t\t\t<%= ticketCount %>
\t\t\t</a>
\t\t</td>
\t\t";
        // line 124
        if ((array_key_exists("articlesEnabled", $context) && ((isset($context["articlesEnabled"]) || array_key_exists("articlesEnabled", $context) ? $context["articlesEnabled"] : (function () { throw new RuntimeError('Variable "articlesEnabled" does not exist.', 124, $this->source); })()) == true))) {
            // line 125
            yield "\t\t\t<td data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            yield "\">
\t\t\t\t<% if (typeof articleCount != 'undefined') { %>
\t\t\t\t\t<a href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_article_collection");
            yield "#search/tag:<%= name %>\">
\t\t\t\t\t\t<%= articleCount %>
\t\t\t\t\t</a>
\t\t\t\t<% } else { %>
\t\t\t\t\t-
\t\t\t\t<% } %>
\t\t\t</td>
\t\t";
        }
        // line 135
        yield "\t\t<td data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
\t\t\t";
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 136, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TAG"], "method", false, false, false, 136)) {
            // line 137
            yield "\t\t\t\t<div class=\"uv-btn-stroke delete-tag\">
\t\t\t";
        } else {
            // line 139
            yield "\t\t\t\t<div class=\"uv-btn-stroke\" disabled=\"disabled\">
\t\t\t";
        }
        // line 141
        yield "\t\t\t\t";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</td>
    </script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar TagModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar TagCollection = AppCollection.extend({
\t\t\t\tmodel : TagModel,
\t\t\t\turl : \"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_tag_collection_xhr");
        yield "\",
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.tags;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar tagListView = new TagList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (tagCollection.length == 0 && app.pager.paginationData.current != \"0\")
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
            var targetCell = \"\";
\t\t\tvar TagItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#tag_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-tag' : \"confirmRemove\",
                    'click .first' : 'editCell'
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\ttagCollection.syncData();
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
        // line 213
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_remove_ticket_tag_xhr");
        yield "/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\ttagCollection.syncData();
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
\t\t\t\t},
                editCell : function(e) {
                    e.stopPropagation();
                    if (targetCell != \"\")
                        targetCell.updateTag();

                    targetCell = this;
                    Backbone.\$(e.currentTarget).addClass('edit');
                },
                updateTag : function() {
                    \$('td.first').removeClass('edit');
                    var element = targetCell.\$el.find('td.first');
                    var spamText = element.find('span').text().trim();
                    var inputText = element.find('input').val().trim();

                    if (inputText == \"\" || inputText.length > 20) {
                        element.find('input').val(spamText)
                    } else {
                        if (inputText != spamText) {
                            element.find('span').eq(0).text(inputText)
                            targetCell.model.set('name',inputText);
                            targetCell.model.save({}, {
                                url : \"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_ticket_tag_xhr");
        yield "/\"+targetCell.model.id,
                                success : function (model, response, options) {
                                    \$('td.first').removeClass('edit');
                                },
                                error: function (model, xhr, options) {
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.renderResponseAlert(response);
                                }
                            });
                        }
                    }
                    targetCell = \"\";
                }
\t\t\t});

\t\t\tBackbone.\$('body').on('click', function() {
\t\t\t\tif (targetCell != \"\") {
\t\t\t\t\ttargetCell.updateTag();
\t\t\t\t}
\t\t\t});

\t\t\tvar TagList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif (tagCollection.length) {
\t\t\t\t\t\t_.each(tagCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTag(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='4'>";
        // line 286
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTag : function (item) {
\t\t\t\t\tvar tagItem = new TagItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(tagItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'sr.id',
\t\t\t\tsortText: \"";
        // line 299
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 300
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#tag_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar tagCollection = new TagCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : tagCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\ttagCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\ttagCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number, sortField, order) {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\ttagCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\ttagCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query, number, sortField, order) {
\t\t\t\t\tthis.resetParams(query);
\t\t\t\t\ttagCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\ttagCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\ttagCollection.filterParameters.search = query;
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
        return "@UVDeskCoreFramework/supportTagList.html.twig";
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
        return array (  541 => 300,  537 => 299,  521 => 286,  484 => 252,  442 => 213,  382 => 156,  363 => 141,  359 => 139,  355 => 137,  353 => 136,  348 => 135,  337 => 127,  331 => 125,  329 => 124,  322 => 120,  318 => 119,  309 => 113,  306 => 112,  295 => 103,  284 => 95,  273 => 87,  268 => 84,  262 => 81,  249 => 80,  225 => 67,  219 => 65,  217 => 64,  213 => 63,  209 => 62,  203 => 58,  196 => 53,  185 => 45,  179 => 42,  176 => 41,  172 => 38,  167 => 35,  161 => 34,  156 => 32,  153 => 31,  150 => 30,  147 => 29,  144 => 27,  131 => 26,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Ticket Tags{% endblock %}

{% block templateCSS %}
    <style>
\t    .first {
\t\t\twidth: 380px;
\t\t}
\t\t.first.edit {
\t\t\tpadding: 5px 10px;
\t\t }
\t\t.first .left-part, .first.edit input {
\t\t\tdisplay: block;
\t\t}
\t\t.first input, .first.edit .left-part {
\t\t\tdisplay: none;
\t\t}
\t\t.uv-action-bar {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding-bottom: 10px;
\t\t}
\t</style>
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Productivity' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
        
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Tags'|trans }}</h1>
            
\t\t\t{# Ticket Tag Action Handler #}
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t{# Sort Ticket Tag #}
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Sort By:'|trans }} Id</div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>{{ 'Sort By'|trans }}</label>
\t\t\t\t\t\t\t\t<ul></ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                </div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t</div>
            </div>

            {# Ticket Tag Table #}
            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ 'Code'|trans }}</th>
                            <th>{{ 'Total Ticket(s)'|trans }}</th>
\t\t\t\t\t\t\t{% if articlesEnabled is defined and articlesEnabled == true %}
\t\t\t\t\t\t\t\t<th>{{ 'Total Article(s)'|trans }}</th>
\t\t\t\t\t\t\t{% endif %}
                            <th class=\"uv-last\">{{ 'Action'|trans }}</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
                </table>

\t\t\t\t<div class=\"navigation\"></div>
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

    {# Ticket Tag Sorting Template #}
\t<script id=\"tag_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/id/<% if(sort == 'id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"id\">
                {{ 'Id'|trans }}
            </a>
            <% if(sort == 'sid') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
                {{ 'Name'|trans }}
            </a>
            <% if(sort == 'name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'totalTickets') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/totalTickets/<% if(sort == 'totalTickets') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"totalTickets\">
                {{ 'Ticket Count'|trans }}
            </a>
            <% if(sort == 'totalTickets') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t</script>

    {# Ticket Tag List Item #}
\t<script id=\"tag_list_item_tmp\" type=\"text/template\">
\t\t<td class=\"first\" data-value=\"{{ 'Name'|trans }}\">
            <span class=\"left-part\">
\t\t\t\t<%= _.escape(name) %>
\t\t\t</span>
\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"<%= _.escape(name) %>\"/>
        </td>
        <td data-value=\"{{ 'Name'|trans }}\">
\t\t\t<a href=\"{{ path('helpdesk_member_ticket_collection') }}#tag/<%= id %>\">
\t\t\t\t<%= ticketCount %>
\t\t\t</a>
\t\t</td>
\t\t{% if articlesEnabled is defined and articlesEnabled == true %}
\t\t\t<td data-value=\"{{ 'Name'|trans }}\">
\t\t\t\t<% if (typeof articleCount != 'undefined') { %>
\t\t\t\t\t<a href=\"{{ path('helpdesk_member_knowledgebase_article_collection') }}#search/tag:<%= name %>\">
\t\t\t\t\t\t<%= articleCount %>
\t\t\t\t\t</a>
\t\t\t\t<% } else { %>
\t\t\t\t\t-
\t\t\t\t<% } %>
\t\t\t</td>
\t\t{% endif %}
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
\t\t\t{% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TAG') %}
\t\t\t\t<div class=\"uv-btn-stroke delete-tag\">
\t\t\t{% else %}
\t\t\t\t<div class=\"uv-btn-stroke\" disabled=\"disabled\">
\t\t\t{% endif %}
\t\t\t\t{{ \"Delete\"|trans }}
\t\t\t</div>
\t\t</td>
    </script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar TagModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar TagCollection = AppCollection.extend({
\t\t\t\tmodel : TagModel,
\t\t\t\turl : \"{{ path('helpdesk_member_ticket_tag_collection_xhr') }}\",
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.tags;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar tagListView = new TagList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (tagCollection.length == 0 && app.pager.paginationData.current != \"0\")
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
            var targetCell = \"\";
\t\t\tvar TagItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#tag_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-tag' : \"confirmRemove\",
                    'click .first' : 'editCell'
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\ttagCollection.syncData();
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
\t\t\t\t\t\turl : \"{{ path('helpdesk_member_remove_ticket_tag_xhr') }}/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\ttagCollection.syncData();
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
\t\t\t\t},
                editCell : function(e) {
                    e.stopPropagation();
                    if (targetCell != \"\")
                        targetCell.updateTag();

                    targetCell = this;
                    Backbone.\$(e.currentTarget).addClass('edit');
                },
                updateTag : function() {
                    \$('td.first').removeClass('edit');
                    var element = targetCell.\$el.find('td.first');
                    var spamText = element.find('span').text().trim();
                    var inputText = element.find('input').val().trim();

                    if (inputText == \"\" || inputText.length > 20) {
                        element.find('input').val(spamText)
                    } else {
                        if (inputText != spamText) {
                            element.find('span').eq(0).text(inputText)
                            targetCell.model.set('name',inputText);
                            targetCell.model.save({}, {
                                url : \"{{ path('helpdesk_member_update_ticket_tag_xhr') }}/\"+targetCell.model.id,
                                success : function (model, response, options) {
                                    \$('td.first').removeClass('edit');
                                },
                                error: function (model, xhr, options) {
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.renderResponseAlert(response);
                                }
                            });
                        }
                    }
                    targetCell = \"\";
                }
\t\t\t});

\t\t\tBackbone.\$('body').on('click', function() {
\t\t\t\tif (targetCell != \"\") {
\t\t\t\t\ttargetCell.updateTag();
\t\t\t\t}
\t\t\t});

\t\t\tvar TagList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif (tagCollection.length) {
\t\t\t\t\t\t_.each(tagCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderTag(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='4'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderTag : function (item) {
\t\t\t\t\tvar tagItem = new TagItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(tagItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'sr.id',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Id{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#tag_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar tagCollection = new TagCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : tagCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\ttagCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\ttagCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number, sortField, order) {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\ttagCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\ttagCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query, number, sortField, order) {
\t\t\t\t\tthis.resetParams(query);
\t\t\t\t\ttagCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\ttagCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\ttagCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/supportTagList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/supportTagList.html.twig");
    }
}
