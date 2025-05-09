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

/* @UVDeskCoreFramework/savedRepliesList.html.twig */
class __TwigTemplate_0ca9a43a2b10697b7e5ba8e3d24b954a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/savedRepliesList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/savedRepliesList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/savedRepliesList.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Replies"), "html", null, true);
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
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Productivity";
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Replies"), "html", null, true);
        yield "
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\" style=\"width: 50%\">
                    <!--Sort by-->
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
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
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\" style=\"width: 50%\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t<a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_saved_replies");
        yield "\" type=\"button\" class=\"uv-btn-action uv-margin-left-10\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Saved Reply"), "html", null, true);
        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 53
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

    // line 65
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

        // line 66
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<!-- Sorting Template -->
\t<script id=\"saved_reply_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'sr.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/sr.id/<% if(sort == 'sr.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"sr.id\">
                ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "
            </a>
            <% if(sort == 'sr.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'sr.name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/sr.name/<% if(sort == 'sr.name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"sr.name\">
                ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "
            </a>
            <% if(sort == 'sr.name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Save Reply list item template -->
\t<script id=\"saved_reply_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "\"><%- name %></td>
\t\t<td data-value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-saved-reply\">
\t\t\t\t";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-saved-reply\">
\t\t\t\t";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Save Reply list item template -->

\t<script type=\"text/javascript\">
        var path = \"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_saved_replies", ["template" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar SavedReplyModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar SavedReplyCollection = AppCollection.extend({
\t\t\t\tmodel : SavedReplyModel,
\t\t\t\turl : \"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_replies_xhr");
        yield "\",
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.savedReplies;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar savedReplyListView = new SavedReplyList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif(savedReplyCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
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

\t\t\tvar SavedReplyItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#saved_reply_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-saved-reply' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tsavedReplyCollection.syncData();
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
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_replies_xhr");
        yield "/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif(xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar SavedReplyList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();

\t\t\t\t\tif (savedReplyCollection.length) {
\t\t\t\t\t\tlet savedReplyReferenceIds = ";
        // line 200
        yield json_encode((isset($context["savedReplyReferenceIds"]) || array_key_exists("savedReplyReferenceIds", $context) ? $context["savedReplyReferenceIds"] : (function () { throw new RuntimeError('Variable "savedReplyReferenceIds" does not exist.', 200, $this->source); })()));
        yield ";

\t\t\t\t\t\t_.each(savedReplyCollection.models, function (item) {
\t\t\t\t\t\t\tfor(var i=0; i < savedReplyReferenceIds.length; i++) {
\t\t\t\t\t\t\t\tif (item.id == savedReplyReferenceIds[i]) {
\t\t\t\t\t\t\t\t\tthis.renderSavedReply(item);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='3'>";
        // line 210
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderSavedReply : function (item) {
\t\t\t\t\tvar savedReplyItem = new SavedReplyItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(savedReplyItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'sr.id',
\t\t\t\tsortText: \"";
        // line 223
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 224
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Id", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#saved_reply_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar savedReplyCollection = new SavedReplyCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : savedReplyCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\tsavedReplyCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\tsavedReplyCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(query);
\t\t\t\t\tsavedReplyCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(query) {
\t\t\t\t\tif(query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tsavedReplyCollection.filterParameters.search = query;
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
        return "@UVDeskCoreFramework/savedRepliesList.html.twig";
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
        return array (  421 => 224,  417 => 223,  401 => 210,  388 => 200,  356 => 171,  297 => 115,  283 => 104,  273 => 97,  267 => 94,  262 => 92,  258 => 91,  244 => 80,  233 => 72,  223 => 66,  210 => 65,  188 => 53,  184 => 52,  170 => 41,  165 => 39,  160 => 37,  148 => 28,  139 => 24,  129 => 17,  122 => 15,  117 => 13,  114 => 12,  111 => 11,  108 => 10,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Saved Replies'|trans }}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Productivity' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Saved Replies'|trans }}
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\" style=\"width: 50%\">
                    <!--Sort by-->
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            {{ 'Sort By:'|trans }} {{ 'Id'|trans }}
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
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\" style=\"width: 50%\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t<a href=\"{{ path('helpdesk_member_create_saved_replies') }}\" type=\"button\" class=\"uv-btn-action uv-margin-left-10\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t{{ \"New Saved Reply\"|trans }}
\t\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->

            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th>{{ \"Name\"|trans }}</th>
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
\t<script id=\"saved_reply_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'sr.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/sr.id/<% if(sort == 'sr.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"sr.id\">
                {{ 'Id'|trans }}
            </a>
            <% if(sort == 'sr.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
        <li class=\"<% if(sort == 'sr.name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/sr.name/<% if(sort == 'sr.name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"sr.name\">
                {{ 'Name'|trans }}
            </a>
            <% if(sort == 'sr.name') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
            <% } %>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Save Reply list item template -->
\t<script id=\"saved_reply_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"{{ 'Name'|trans }}\"><%- name %></td>
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-saved-reply\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-saved-reply\">
\t\t\t\t{{ \"Delete\"|trans }}
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Save Reply list item template -->

\t<script type=\"text/javascript\">
        var path = \"{{ path('helpdesk_member_update_saved_replies', {'template': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar SavedReplyModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar SavedReplyCollection = AppCollection.extend({
\t\t\t\tmodel : SavedReplyModel,
\t\t\t\turl : \"{{ path('helpdesk_member_saved_replies_xhr') }}\",
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.savedReplies;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar savedReplyListView = new SavedReplyList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif(savedReplyCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
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

\t\t\tvar SavedReplyItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#saved_reply_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-saved-reply' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tsavedReplyCollection.syncData();
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
\t\t\t\t\t\turl : \"{{ path('helpdesk_member_saved_replies_xhr') }}/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif(url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif(xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;

\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\tvar SavedReplyList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();

\t\t\t\t\tif (savedReplyCollection.length) {
\t\t\t\t\t\tlet savedReplyReferenceIds = {{ savedReplyReferenceIds|json_encode|raw}};

\t\t\t\t\t\t_.each(savedReplyCollection.models, function (item) {
\t\t\t\t\t\t\tfor(var i=0; i < savedReplyReferenceIds.length; i++) {
\t\t\t\t\t\t\t\tif (item.id == savedReplyReferenceIds[i]) {
\t\t\t\t\t\t\t\t\tthis.renderSavedReply(item);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='3'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderSavedReply : function (item) {
\t\t\t\t\tvar savedReplyItem = new SavedReplyItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(savedReplyItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'sr.id',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Id{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#saved_reply_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar savedReplyCollection = new SavedReplyCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : savedReplyCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\tsavedReplyCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('');
\t\t\t\t\tsavedReplyCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(query);
\t\t\t\t\tsavedReplyCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tsavedReplyCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(query) {
\t\t\t\t\tif(query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tsavedReplyCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/savedRepliesList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/savedRepliesList.html.twig");
    }
}
