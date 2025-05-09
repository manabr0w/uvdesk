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

/* @UVDeskSupportCenter/Staff/Folders/listFolders.html.twig */
class __TwigTemplate_e8e9f7fa1d61c51a6d936ce3d8c520ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Folders/listFolders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Folders/listFolders.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Folders/listFolders.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folders"), "html", null, true);
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
\t\t.uv-folders input[type='radio'] {
\t\t\tdisplay: none;
\t\t}
\t\t.uv-inner-section .folder-list .uv-app-list-brick .uv-app-list-brick-lt{
    \t\t//background: none;
\t\t}
\t\t.uv-inner-section .folder-list .uv-app-list-brick .uv-app-list-brick-lt img{
    \t\theight: 90px;
\t\t\twidth: 100%;
\t\t}
\t\t.uv-inner-section .folder-list .uv-app-list-brick .uv-app-list-brick-lt.uv-without-img{
    \t\tbackground-image: linear-gradient(to right, #7c70f4 0%, #ba81f1 100%);
\t\t}
\t\t.uv-folders .uv-aside-brick div {
\t\t\tmargin-top: 15px;
\t\t}
\t\t.uv-folders p {
\t\t\tmargin: 3px 0px 3px 0px;
\t\t}
\t\t.uv-app-list-brick-lt.uv-without-img div {
\t\t\twidth: 90px;
\t\t\theight: 90px;
\t\t\tbackground-image: url(../../../bundles/webkuldefault/images/uvdesk-kb-sprite.svg);
\t\t\tbackground-position: 0px 0px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t\toverflow: hidden;
\t\t}
\t\t.uv-app-list-brick-lt.uv-without-img div{
\t\t\tbackground-position: -90px 0px;
\t\t}
\t\tdiv.uv-manage-gap{

\t\t}
\t\t.uv-app-list-brick-rt{
    \t\tword-break: break-word;
\t\t}
\t</style>

\t<div class=\"uv-inner-section\">
\t\t";
        // line 50
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 51
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\SupportCenterBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Knowledgebase";
        // line 52
        yield "
\t\t";
        // line 53
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 53, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 53, $this->source); })())], "method", false, false, false, 53), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 53, $this->source); })())], "method", false, false, false, 53);
        yield "

\t\t<div class=\"uv-view ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "cookies", [], "any", false, false, false, 55) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "cookies", [], "any", false, false, false, 55), "get", ["uv-asideView"], "method", false, false, false, 55))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folders"), "html", null, true);
        yield "
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <!--Sort by-->
                    <div class=\"uv-dropdown sort\">
                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
                            ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created At"), "html", null, true);
        yield "
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 68
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
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
                        </div>
                        <div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t<label>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--//Filter By Status-->
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_folder");
        yield "\" type=\"button\" class=\"uv-btn-action\" id=\"uv-add-folder\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Folder"), "html", null, true);
        yield "
\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
     
            <div class=\"uv-table uv-list-view\">
\t\t\t\t<div class=\"uv-app-screen\">
                    <div class=\"folder-list uv-app-list-channels\">
\t\t\t\t\t</div>
                </div>
\t\t\t\t<div class=\"navigation\"></div>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
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

        // line 118
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<!-- Sorting Template -->
\t<script id=\"entity_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 'a.dateAdded') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.dateAdded/<% if (sort == 'a.dateAdded') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.dateAdded\">
\t\t\t\t";
        // line 124
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        // line 125
        yield "\t\t\t\t<% if (sort == 'a.dateAdded') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.name/<% if (sort == 'a.name') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.name\">
\t\t\t\t";
        // line 133
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        // line 134
        yield "\t\t\t\t<% if (sort == 'a.name') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Folder list item template -->
\t<script id=\"entity_list_item_tmp\" type=\"text/template\">
\t\t<a href=\"<%- path.replace('replaceId', id) %>\">
\t\t\t<% if (solutionImage) { %>
\t\t\t\t<div class=\"uv-app-list-brick-lt\">
\t\t\t\t\t<img src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "scheme", [], "any", false, false, false, 147) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "httpHost", [], "any", false, false, false, 147)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= solutionImage %>\"/>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t<% } else { %>
\t\t\t\t<div class=\"uv-app-list-brick-lt uv-without-img\"><div></div></div>
\t\t\t<% } %>
\t\t</a>
        <div class=\"uv-app-list-brick-rt\">
            <p><a href=\"<%- path.replace('replaceId', id) %>\" data-target=\"uv-task-view\" <% if (name.length > 20) { %> data-toggle=\"tooltip\" data-placement=\"top\" title=\"<%- app.appView.sanitize(name) %>\" <% } %> ><%- name %></a></p>
\t\t    <p>
\t\t\t<% if (parseInt(categoriesCount)) { %><a href=\"<%- pathCategory.replace('replaceId', id) %>\">
\t\t\t<%- categoriesCount %> ";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        yield "</a> <% } else { %> <a href=\"<%- pathCategory.replace('replaceId', id) %>\">
\t\t\t<%- categoriesCount %> ";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        yield "</a><% } %> </p>
\t\t    <p>
\t\t\t\t<% if (parseInt(articleCount)){ %><a href=\"<%- pathArticle.replace('replaceId', id) %>\"><%- articleCount %> ";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
        yield "</a> <% }else{ %>
\t\t\t\t<span class=\"uv-text-danger uv-cursor delete-folder uv-pull-right\" data-id=\"<%- id %>\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete"), "html", null, true);
        yield "</span>
\t\t\t\t<a href=\"<%- pathArticle.replace('replaceId', id) %>\"><%- articleCount %> ";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
        yield "</a><% } %>
\t\t\t</p>
        </div>
    </script>
\t<!-- //Folder list item template -->

\t<script id=\"no_result_tmp\" type=\"text/template\">
        <div class=\"uv-app-screen\">
\t\t\t<div class=\"uv-app-splash\" style=\"text-align: center;\">
\t\t\t\t<img class=\"uv-app-splash-image\" src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/images/splash/knowledgebase-splash.png"), "html", null, true);
        yield "\" alt=\"Folders\">
\t\t\t\t<% if (!window.location.hash) { %>
\t\t\t\t\t<h2 class=\"uv-margin-top-10\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Knowledgebase Folder"), "html", null, true);
        yield "</h2>
\t\t\t\t\t<p>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You did not add any folder to your Knowledgebase yet, Create your first Folder and start adding Categories/Articles to make your customers help themselves."), "html", null, true);
        yield "</p>
\t\t\t\t<% } else { %>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You did not have any folder for current filter(s)."), "html", null, true);
        yield "
\t\t\t\t\t\t<a href=\"#\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear Filters"), "html", null, true);
        yield "</a>
\t\t\t\t\t</p>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_folder", ["folderId" => "replaceId"]);
        yield "\";
\t\tvar pathCategory = \"";
        // line 187
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_folder_categories_collection", ["solution" => "replaceId"]);
        yield "\";
\t\tvar pathArticle = \"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_folder_articles_collection", ["solution" => "replaceId"]);
        yield "\";
\t\tvar pathLayout = \"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_theme_xhr");
        yield "\";
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar FolderModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar FolderCollection = AppCollection.extend({
\t\t\t\tmodel : FolderModel,
\t\t\t\turl : \"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_folders_collection_xhr");
        yield "\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.results;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar folderListView = new FolderList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (folderCollection.length == 0 && app.pager.paginationData.current != \"0\")
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

\t\t\tvar FolderItem = Backbone.View.extend({
\t\t\t\ttagName : \"div\",
\t\t\t\tclassName : \"uv-app-list-brick\",
\t\t\t\ttemplate : _.template(\$(\"#entity_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-folder' : \"confirmRemove\",
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tconsole.log(this.model.toJSON());
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tfolderCollection.syncData();
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
        // line 262
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_folder_xhr");
        yield "/\"+this.model.get('id'),
\t\t\t\t\t\tmethod:\"delete\",
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t\t\t\tif (typeof(response.allowedToAdd) != 'undefined' && response.allowedToAdd) {
\t\t\t\t\t\t\t\t\$('#upgrade-plan-message').hide();
\t\t\t\t\t\t\t\t\$('#uv-add-folder').show();
\t\t\t\t\t\t\t}
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

\t\t\tvar FolderList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view div.folder-list\"),
\t\t\t\tnoResultTemplate : _.template(\$(\"#no_result_tmp\").html()),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\tthis.\$el.find(\".uv-app-list-brick\").remove();
\t\t\t\t\tvar isEmptyFlag = 0;
\t\t\t\t\tif (folderCollection.length) {
\t\t\t\t\t\tisEmptyFlag++;
\t\t\t\t\t\t_.each(folderCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderFolder(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t}

                    if (!isEmptyFlag) {
                        this.\$el.append(this.noResultTemplate())
                    }
\t\t\t\t},
\t\t\t\trenderFolder : function (item) {
\t\t\t\t\tvar folderItem = new FolderItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(folderItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'a.dateAdded',
\t\t\t\tsortText: \"";
        // line 317
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 318
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#entity_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar folderCollection = new FolderCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : folderCollection
\t\t\t});

\t\t\tvar PageView = Backbone.View.extend({
                el: '.uv-folders',
                events : {
\t\t\t\t\t\"change input[type='radio']\": 'layoutChanged'
                },
                layoutChanged: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    \$('.uv-layout-icon').removeClass('uv-layout-icon-active');

                    \$(\"label[for='\" + currentElement.attr('id') + \"']\").addClass('uv-layout-icon-active');

\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : pathLayout,
\t\t\t\t\t\ttype : 'POST',
\t\t\t\t\t\tdata: {\"layout\" : Backbone.\$(e.currentTarget).val(), \"actionType\": 'layoutUpdate'},
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif (xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
                        }
\t\t\t\t\t});
                },
            });

\t\t\tvar pageView = new PageView();

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterFolderByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tfolderCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tfolderCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterFolderByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tfolderCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tfolderCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tfolderCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 400
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 401
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
\t\t\t\t\tfolderCollection.filterParameters.search = query;
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
        return "@UVDeskSupportCenter/Staff/Folders/listFolders.html.twig";
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
        return array (  641 => 401,  637 => 400,  550 => 318,  546 => 317,  488 => 262,  422 => 199,  409 => 189,  405 => 188,  401 => 187,  397 => 186,  386 => 178,  382 => 177,  376 => 174,  372 => 173,  367 => 171,  355 => 162,  351 => 161,  347 => 160,  342 => 158,  338 => 157,  325 => 147,  310 => 134,  308 => 133,  298 => 125,  296 => 124,  286 => 118,  273 => 117,  246 => 100,  241 => 98,  235 => 95,  224 => 87,  220 => 86,  216 => 85,  211 => 83,  202 => 79,  188 => 68,  179 => 64,  169 => 57,  162 => 55,  157 => 53,  154 => 52,  151 => 51,  148 => 50,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Folders'|trans }}
{% endblock %}

{% block pageContent %}
\t<style>
\t\t.uv-folders input[type='radio'] {
\t\t\tdisplay: none;
\t\t}
\t\t.uv-inner-section .folder-list .uv-app-list-brick .uv-app-list-brick-lt{
    \t\t//background: none;
\t\t}
\t\t.uv-inner-section .folder-list .uv-app-list-brick .uv-app-list-brick-lt img{
    \t\theight: 90px;
\t\t\twidth: 100%;
\t\t}
\t\t.uv-inner-section .folder-list .uv-app-list-brick .uv-app-list-brick-lt.uv-without-img{
    \t\tbackground-image: linear-gradient(to right, #7c70f4 0%, #ba81f1 100%);
\t\t}
\t\t.uv-folders .uv-aside-brick div {
\t\t\tmargin-top: 15px;
\t\t}
\t\t.uv-folders p {
\t\t\tmargin: 3px 0px 3px 0px;
\t\t}
\t\t.uv-app-list-brick-lt.uv-without-img div {
\t\t\twidth: 90px;
\t\t\theight: 90px;
\t\t\tbackground-image: url(../../../bundles/webkuldefault/images/uvdesk-kb-sprite.svg);
\t\t\tbackground-position: 0px 0px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t\toverflow: hidden;
\t\t}
\t\t.uv-app-list-brick-lt.uv-without-img div{
\t\t\tbackground-position: -90px 0px;
\t\t}
\t\tdiv.uv-manage-gap{

\t\t}
\t\t.uv-app-list-brick-rt{
    \t\tword-break: break-word;
\t\t}
\t</style>

\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\SupportCenterBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Knowledgebase' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Folders'|trans }}
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
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">{{ 'Published'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">{{ 'Draft'|trans }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--//Filter By Status-->
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t
\t\t\t\t\t<a href=\"{{ path('helpdesk_member_knowledgebase_create_folder') }}\" type=\"button\" class=\"uv-btn-action\" id=\"uv-add-folder\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t{{ \"New Folder\"|trans }}
\t\t\t\t\t</a>
\t\t\t\t\t<!--// Add Button -->
\t\t\t\t</div>
            </div>
     
            <div class=\"uv-table uv-list-view\">
\t\t\t\t<div class=\"uv-app-screen\">
                    <div class=\"folder-list uv-app-list-channels\">
\t\t\t\t\t</div>
                </div>
\t\t\t\t<div class=\"navigation\"></div>
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<!-- Sorting Template -->
\t<script id=\"entity_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 'a.dateAdded') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.dateAdded/<% if (sort == 'a.dateAdded') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.dateAdded\">
\t\t\t\t{% trans %}Created At{% endtrans %}
\t\t\t\t<% if (sort == 'a.dateAdded') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.name/<% if (sort == 'a.name') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.name\">
\t\t\t\t{% trans %}Name{% endtrans %}
\t\t\t\t<% if (sort == 'a.name') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Folder list item template -->
\t<script id=\"entity_list_item_tmp\" type=\"text/template\">
\t\t<a href=\"<%- path.replace('replaceId', id) %>\">
\t\t\t<% if (solutionImage) { %>
\t\t\t\t<div class=\"uv-app-list-brick-lt\">
\t\t\t\t\t<img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= solutionImage %>\"/>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t<% } else { %>
\t\t\t\t<div class=\"uv-app-list-brick-lt uv-without-img\"><div></div></div>
\t\t\t<% } %>
\t\t</a>
        <div class=\"uv-app-list-brick-rt\">
            <p><a href=\"<%- path.replace('replaceId', id) %>\" data-target=\"uv-task-view\" <% if (name.length > 20) { %> data-toggle=\"tooltip\" data-placement=\"top\" title=\"<%- app.appView.sanitize(name) %>\" <% } %> ><%- name %></a></p>
\t\t    <p>
\t\t\t<% if (parseInt(categoriesCount)) { %><a href=\"<%- pathCategory.replace('replaceId', id) %>\">
\t\t\t<%- categoriesCount %> {{ 'Categories'|trans }}</a> <% } else { %> <a href=\"<%- pathCategory.replace('replaceId', id) %>\">
\t\t\t<%- categoriesCount %> {{ 'Categories'|trans }}</a><% } %> </p>
\t\t    <p>
\t\t\t\t<% if (parseInt(articleCount)){ %><a href=\"<%- pathArticle.replace('replaceId', id) %>\"><%- articleCount %> {{ 'Articles'|trans }}</a> <% }else{ %>
\t\t\t\t<span class=\"uv-text-danger uv-cursor delete-folder uv-pull-right\" data-id=\"<%- id %>\">{{ 'delete'|trans }}</span>
\t\t\t\t<a href=\"<%- pathArticle.replace('replaceId', id) %>\"><%- articleCount %> {{ 'Articles'|trans }}</a><% } %>
\t\t\t</p>
        </div>
    </script>
\t<!-- //Folder list item template -->

\t<script id=\"no_result_tmp\" type=\"text/template\">
        <div class=\"uv-app-screen\">
\t\t\t<div class=\"uv-app-splash\" style=\"text-align: center;\">
\t\t\t\t<img class=\"uv-app-splash-image\" src=\"{{ asset('bundles/uvdesksupportcenter/images/splash/knowledgebase-splash.png') }}\" alt=\"Folders\">
\t\t\t\t<% if (!window.location.hash) { %>
\t\t\t\t\t<h2 class=\"uv-margin-top-10\">{{\"Create Knowledgebase Folder\"|trans}}</h2>
\t\t\t\t\t<p>{{\"You did not add any folder to your Knowledgebase yet, Create your first Folder and start adding Categories/Articles to make your customers help themselves.\"|trans}}</p>
\t\t\t\t<% } else { %>
\t\t\t\t\t<p>
\t\t\t\t\t\t{{ \"You did not have any folder for current filter(s).\"|trans }}
\t\t\t\t\t\t<a href=\"#\">{{ 'Clear Filters'|trans }}</a>
\t\t\t\t\t</p>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('helpdesk_member_knowledgebase_update_folder', {'folderId': 'replaceId' }) }}\";
\t\tvar pathCategory = \"{{ path('helpdesk_member_knowledgebase_folder_categories_collection', {'solution': 'replaceId' }) }}\";
\t\tvar pathArticle = \"{{ path('helpdesk_member_knowledgebase_folder_articles_collection', {'solution': 'replaceId' }) }}\";
\t\tvar pathLayout = \"{{ path('helpdesk_member_knowledgebase_update_theme_xhr') }}\";
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar FolderModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar FolderCollection = AppCollection.extend({
\t\t\t\tmodel : FolderModel,
\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_folders_collection_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.results;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar folderListView = new FolderList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (folderCollection.length == 0 && app.pager.paginationData.current != \"0\")
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

\t\t\tvar FolderItem = Backbone.View.extend({
\t\t\t\ttagName : \"div\",
\t\t\t\tclassName : \"uv-app-list-brick\",
\t\t\t\ttemplate : _.template(\$(\"#entity_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-folder' : \"confirmRemove\",
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tconsole.log(this.model.toJSON());
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tfolderCollection.syncData();
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
\t\t\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_update_folder_xhr') }}/\"+this.model.get('id'),
\t\t\t\t\t\tmethod:\"delete\",
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t\t\t\tif (typeof(response.allowedToAdd) != 'undefined' && response.allowedToAdd) {
\t\t\t\t\t\t\t\t\$('#upgrade-plan-message').hide();
\t\t\t\t\t\t\t\t\$('#uv-add-folder').show();
\t\t\t\t\t\t\t}
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

\t\t\tvar FolderList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view div.folder-list\"),
\t\t\t\tnoResultTemplate : _.template(\$(\"#no_result_tmp\").html()),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\tthis.\$el.find(\".uv-app-list-brick\").remove();
\t\t\t\t\tvar isEmptyFlag = 0;
\t\t\t\t\tif (folderCollection.length) {
\t\t\t\t\t\tisEmptyFlag++;
\t\t\t\t\t\t_.each(folderCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderFolder(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t}

                    if (!isEmptyFlag) {
                        this.\$el.append(this.noResultTemplate())
                    }
\t\t\t\t},
\t\t\t\trenderFolder : function (item) {
\t\t\t\t\tvar folderItem = new FolderItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(folderItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'a.dateAdded',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Created At{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#entity_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar folderCollection = new FolderCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : folderCollection
\t\t\t});

\t\t\tvar PageView = Backbone.View.extend({
                el: '.uv-folders',
                events : {
\t\t\t\t\t\"change input[type='radio']\": 'layoutChanged'
                },
                layoutChanged: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    \$('.uv-layout-icon').removeClass('uv-layout-icon-active');

                    \$(\"label[for='\" + currentElement.attr('id') + \"']\").addClass('uv-layout-icon-active');

\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : pathLayout,
\t\t\t\t\t\ttype : 'POST',
\t\t\t\t\t\tdata: {\"layout\" : Backbone.\$(e.currentTarget).val(), \"actionType\": 'layoutUpdate'},
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\tif (xhr.responseJSON)
\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
                        }
\t\t\t\t\t});
                },
            });

\t\t\tvar pageView = new PageView();

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterFolderByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tfolderCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tfolderCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterFolderByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tfolderCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tfolderCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tfolderCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tfolderCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
\t\t\t\t\tfolderCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Staff/Folders/listFolders.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Folders/listFolders.html.twig");
    }
}
