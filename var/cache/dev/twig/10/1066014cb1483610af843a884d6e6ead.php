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

/* @UVDeskCoreFramework/Agents/listSupportAgents.html.twig */
class __TwigTemplate_79449345d6088e2c81f3c3572d9ef5c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Agents/listSupportAgents.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Agents/listSupportAgents.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Agents/listSupportAgents.html.twig", 1);
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

        yield "Agents";
        
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
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Users";
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
\t\t\t<h1>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agents"), "html", null, true);
        yield "</h1>
\t\t\t<div class=\"uv-action-bar\">
\t\t\t\t<div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t";
        // line 20
        yield "\t\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">Sort By: Created At</div>
\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul></ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 31
        yield "\t\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">Status: All</div>
\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">All</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">Active</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">Disabled</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t";
        // line 48
        yield "\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">

\t\t\t\t\t";
        // line 51
        yield "\t\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_account");
        yield "\" type=\"button\" class=\"uv-btn-action\"><span class=\"uv-icon-add\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Agent"), "html", null, true);
        yield "</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 56
        yield "\t\t\t<div class=\"uv-table uv-list-view\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t<th>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t<th>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t<th>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
\t\t\t\t\t\t<th class=\"uv-last\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody></tbody>
\t\t\t\t</table>

\t\t\t\t";
        // line 71
        yield "\t\t\t\t<div class=\"navigation\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        // line 78
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t";
        // line 81
        yield "\t<script id=\"agent_list_sorting_tmp\" type=\"text/template\">
\t\t<li class=\"<% if(sort == 'userInstance.createdAt') { %>uv-drop-list-active<% } %>\">
\t\t\t<a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/userInstance.createdAt/<% if(sort == 'userInstance.createdAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"userInstance.createdAt\">
\t\t\t\tCreated At
\t\t\t\t<% if(sort == 'userInstance.createdAt') { %>
\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"<% if(sort == 'user.firstName') { %>uv-drop-list-active<% } %>\">
\t\t\t<a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/user.firstName/<% if(sort == 'user.firstName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"user.firstName\">
\t\t\t\tName
\t\t\t\t<% if(sort == 'user.firstName') { %>
\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"<% if(sort == 'user.email') { %>uv-drop-list-active<% } %>\">
\t\t\t<a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/user.email/<% if(sort == 'user.email') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"user.email\">
\t\t\t\tEmail
\t\t\t\t<% if(sort == 'user.email') { %>
\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
\t\t</li>
\t</script>
\t";
        // line 108
        yield "\t<script id=\"agent_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"Name\">
\t\t\t<% if (smallThumbnail != null) { %>
\t\t\t<img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "scheme", [], "any", false, false, false, 111) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "httpHost", [], "any", false, false, false, 111)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= smallThumbnail.slice(1) %>\" alt=\"\"/>
\t\t\t<% } else { %>
\t\t\t<img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 113, $this->source); })())), "html", null, true);
        yield "\" alt=\"\"/>
\t\t\t<% } %>
\t\t\t<%- name %>
\t\t</td>
\t\t<td data-value=\"Email\"><%- email %></td>
\t\t<td data-value=\"Role\">
\t\t   <% if(role == \"Agent\") { %>
        \t\t";
        // line 120
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Agent", [], "messages");
        // line 121
        yield "         \t   <% } else if(role == \"Account Owner\"){ %>
\t\t\t";
        // line 122
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account Owner", [], "messages");
        // line 123
        yield "\t\t   <%}else if(role == \"Administrator\"){ %>
\t\t\t";
        // line 124
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrator", [], "messages");
        // line 125
        yield "\t\t   <% } %>
\t\t</td>
\t\t<td data-value=\"Status\">
\t\t\t<% if (isActive) { %>
\t\t\t<span class=\"uv-text-success\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</span>
\t\t\t<% } else { %>
\t\t\t<span class=\"uv-text-danger\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</span>
\t\t\t<% } %>
\t\t</td>
\t\t<td data-value=\"Action\" class=\"uv-last\">
\t\t\t<a href=\"<%- path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-agent\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "</a>
\t\t\t<% if (roleCode == \"ROLE_SUPER_ADMIN\") { %>
\t\t\t<div class=\"uv-btn-stroke\" disabled=\"disabled\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "</div>
\t\t\t<% } else { %>
\t\t\t<div class=\"uv-btn-stroke delete-agent\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "</div>
\t\t\t<% } %>
\t\t</td>
\t</script>

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account", ["agentId" => "replaceId"]);
        yield "\";
\t\tvar deletePath = \"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account_xhr", ["id" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar AgentModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar AgentCollection = AppCollection.extend({
\t\t\t\tmodel : AgentModel,
\t\t\t\turl : \"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account_collection_xhr");
        yield "\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.users;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar agentListView = new AgentList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif(agentCollection.length == 0 && app.pager.paginationData.current != \"0\")
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

\t\t\tvar AgentItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#agent_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-agent' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tagentCollection.syncData();
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
\t\t\t\t\t\t\tagentCollection.syncData();
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

\t\t\tvar AgentList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif(agentCollection.length) {
\t\t\t\t\t\t_.each(agentCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderAgent(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='5'>";
        // line 250
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderAgent : function (item) {
\t\t\t\t\tvar agentItem = new AgentItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(agentItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'userInstance.createdAt',
\t\t\t\tsortText: \"";
        // line 263
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 264
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#agent_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar agentCollection = new AgentCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : agentCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterAgentByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tagentCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tagentCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterAgentByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tagentCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tagentCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif(query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tagentCollection.filterParameters.isActive  = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 309
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 310
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
\t\t\t\t\tagentCollection.filterParameters.search = query;
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
        return "@UVDeskCoreFramework/Agents/listSupportAgents.html.twig";
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
        return array (  555 => 310,  551 => 309,  501 => 264,  497 => 263,  481 => 250,  385 => 157,  371 => 146,  367 => 145,  358 => 139,  353 => 137,  348 => 135,  341 => 131,  336 => 129,  330 => 125,  328 => 124,  325 => 123,  323 => 122,  320 => 121,  318 => 120,  308 => 113,  303 => 111,  298 => 108,  270 => 81,  264 => 78,  251 => 77,  236 => 71,  227 => 64,  223 => 63,  219 => 62,  215 => 61,  211 => 60,  205 => 56,  195 => 51,  189 => 48,  174 => 35,  168 => 31,  159 => 24,  153 => 20,  147 => 16,  141 => 15,  136 => 13,  133 => 12,  130 => 11,  127 => 10,  124 => 8,  111 => 7,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Agents{% endblock %}

{% block templateCSS %}{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Agents'|trans }}</h1>
\t\t\t<div class=\"uv-action-bar\">
\t\t\t\t<div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t{# Sort Agents #}
\t\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">Sort By: Created At</div>
\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>{{ 'Sort By'|trans }}</label>
\t\t\t\t\t\t\t\t<ul></ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# Filter Agents by Status #}
\t\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">Status: All</div>
\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">All</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">Active</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">Disabled</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t{# Search Agent #}
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">

\t\t\t\t\t{# Create New Agent #}
\t\t\t\t\t<a href=\"{{ path('helpdesk_member_create_account') }}\" type=\"button\" class=\"uv-btn-action\"><span class=\"uv-icon-add\"></span> {{ 'New Agent'|trans }}</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# Agent List #}
\t\t\t<div class=\"uv-table uv-list-view\">
\t\t\t\t<table>
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>{{ 'Name'|trans }}</th>
\t\t\t\t\t\t<th>{{ 'Email'|trans }}</th>
\t\t\t\t\t\t<th>{{ 'Role'|trans }}</th>
\t\t\t\t\t\t<th>{{ 'Status'|trans }}</th>
\t\t\t\t\t\t<th class=\"uv-last\">{{ 'Action'|trans }}</th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody></tbody>
\t\t\t\t</table>

\t\t\t\t{# pagination #}
\t\t\t\t<div class=\"navigation\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t{# Sorting Template #}
\t<script id=\"agent_list_sorting_tmp\" type=\"text/template\">
\t\t<li class=\"<% if(sort == 'userInstance.createdAt') { %>uv-drop-list-active<% } %>\">
\t\t\t<a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/userInstance.createdAt/<% if(sort == 'userInstance.createdAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"userInstance.createdAt\">
\t\t\t\tCreated At
\t\t\t\t<% if(sort == 'userInstance.createdAt') { %>
\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"<% if(sort == 'user.firstName') { %>uv-drop-list-active<% } %>\">
\t\t\t<a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/user.firstName/<% if(sort == 'user.firstName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"user.firstName\">
\t\t\t\tName
\t\t\t\t<% if(sort == 'user.firstName') { %>
\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"<% if(sort == 'user.email') { %>uv-drop-list-active<% } %>\">
\t\t\t<a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/user.email/<% if(sort == 'user.email') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"user.email\">
\t\t\t\tEmail
\t\t\t\t<% if(sort == 'user.email') { %>
\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
\t\t</li>
\t</script>
\t{# Type list item template #}
\t<script id=\"agent_list_item_tmp\" type=\"text/template\">
\t\t<td data-value=\"Name\">
\t\t\t<% if (smallThumbnail != null) { %>
\t\t\t<img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= smallThumbnail.slice(1) %>\" alt=\"\"/>
\t\t\t<% } else { %>
\t\t\t<img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
\t\t\t<% } %>
\t\t\t<%- name %>
\t\t</td>
\t\t<td data-value=\"Email\"><%- email %></td>
\t\t<td data-value=\"Role\">
\t\t   <% if(role == \"Agent\") { %>
        \t\t{% trans %} Agent {% endtrans %}
         \t   <% } else if(role == \"Account Owner\"){ %>
\t\t\t{% trans %} Account Owner {% endtrans %}
\t\t   <%}else if(role == \"Administrator\"){ %>
\t\t\t{% trans %} Administrator {% endtrans%}
\t\t   <% } %>
\t\t</td>
\t\t<td data-value=\"Status\">
\t\t\t<% if (isActive) { %>
\t\t\t<span class=\"uv-text-success\">{{ 'Active'|trans }}</span>
\t\t\t<% } else { %>
\t\t\t<span class=\"uv-text-danger\">{{ 'Disabled'|trans }}</span>
\t\t\t<% } %>
\t\t</td>
\t\t<td data-value=\"Action\" class=\"uv-last\">
\t\t\t<a href=\"<%- path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-agent\">{{ 'Edit'|trans }}</a>
\t\t\t<% if (roleCode == \"ROLE_SUPER_ADMIN\") { %>
\t\t\t<div class=\"uv-btn-stroke\" disabled=\"disabled\">{{ 'Delete'|trans }}</div>
\t\t\t<% } else { %>
\t\t\t<div class=\"uv-btn-stroke delete-agent\">{{ 'Delete'|trans }}</div>
\t\t\t<% } %>
\t\t</td>
\t</script>

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('helpdesk_member_account', { 'agentId': 'replaceId' }) }}\";
\t\tvar deletePath = \"{{ path('helpdesk_member_account_xhr', { 'id': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar AgentModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar AgentCollection = AppCollection.extend({
\t\t\t\tmodel : AgentModel,
\t\t\t\turl : \"{{ path('helpdesk_member_account_collection_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.users;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar agentListView = new AgentList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif(agentCollection.length == 0 && app.pager.paginationData.current != \"0\")
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

\t\t\tvar AgentItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#agent_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-agent' : \"confirmRemove\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tagentCollection.syncData();
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
\t\t\t\t\t\t\tagentCollection.syncData();
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

\t\t\tvar AgentList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif(agentCollection.length) {
\t\t\t\t\t\t_.each(agentCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderAgent(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='5'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderAgent : function (item) {
\t\t\t\t\tvar agentItem = new AgentItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(agentItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'userInstance.createdAt',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Created At{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#agent_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar agentCollection = new AgentCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : agentCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterAgentByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tagentCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tagentCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterAgentByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tagentCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tagentCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tagentCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif(query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tagentCollection.filterParameters.isActive  = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
\t\t\t\t\tagentCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/Agents/listSupportAgents.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Agents/listSupportAgents.html.twig");
    }
}
