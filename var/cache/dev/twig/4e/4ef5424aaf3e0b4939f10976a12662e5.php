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

/* @UVDeskCoreFramework/Customers/listSupportCustomers.html.twig */
class __TwigTemplate_e5b043cdcc424a863db156322f451f7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Customers/listSupportCustomers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Customers/listSupportCustomers.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Customers/listSupportCustomers.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers"), "html", null, true);
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
\t\t\t<h1>
\t\t\t\t";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers"), "html", null, true);
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
                                    <li><a href=\"#\" data-id=\"starred\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--//Filter By Status-->
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t<a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_customer_account");
        yield "\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Customer"), "html", null, true);
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
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</th>
                            <th>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</th>
                            <th>";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open Tickets"), "html", null, true);
        yield "</th>
                            <th>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Source"), "html", null, true);
        yield "</th>
                            <th>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stared"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 77
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

    // line 89
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

        // line 90
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<!-- Sorting Template -->
\t<script id=\"customer_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'userInstance.createdAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/userInstance.createdAt/<% if(sort == 'userInstance.createdAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"userInstance.createdAt\">
\t\t\t\t";
        // line 96
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        // line 97
        yield "\t\t\t\t<% if(sort == 'userInstance.createdAt') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
\t\t\t\t";
        // line 105
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        // line 106
        yield "\t\t\t\t<% if(sort == 'name') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if(sort == 'a.email') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.email/<% if(sort == 'a.email') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.email\">
\t\t\t\t";
        // line 114
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email", [], "messages");
        // line 115
        yield "\t\t\t\t<% if(sort == 'a.email') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Customer list item template -->
\t<script id=\"customer_list_item_tmp\" type=\"text/template\">
\t\t <td data-value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "\">
\t\t\t<% if(smallThumbnail != null) { %>
\t\t\t\t<img src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "scheme", [], "any", false, false, false, 127) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "request", [], "any", false, false, false, 127), "httpHost", [], "any", false, false, false, 127)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= smallThumbnail.slice(1) %>\" alt=\"\"/>
\t\t\t<% } else { %>
\t\t\t\t<img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 129, $this->source); })())), "html", null, true);
        yield "\" alt=\"\"/>
\t\t\t<% } %>
            <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection");
        yield "#customer/<%= id %>\">
\t\t\t    <%- name %>
            </a>
\t\t</td>
\t\t<td data-value=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "\"><%- email %></td>
        <td data-value=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open Tickets"), "html", null, true);
        yield "\">
            <%= count %> ";
        // line 137
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Open Tickets", [], "messages");
        // line 138
        yield "        </td>
        <td data-value=\"";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Source"), "html", null, true);
        yield "\">
            <% if(source == 'website') { %>
\t\t\t\t<span class=\"uv-channel uv-channel-web\"></span>
\t\t\t<% } else if(source == 'email') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-email\"></span>
\t\t\t<% } else if(source == 'facebook') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-facebook\"></span>
\t\t\t<% } else if(source == 'twitter') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-twitter\"></span>
\t\t\t<% } else if(source == 'ebay') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-ebay\"></span>
\t\t\t<% } else if(source == 'disqus-engage') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-disqus-engage\"></span>
\t\t\t<% } else if(source == 'Magento 1') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-magento\"></span>
\t\t\t<% } else if(source == 'Magento 2') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-magento\"></span>
\t\t\t<% } else if(source == 'Wordpress') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-wordpress\"></span>
\t\t\t<% } else if(source == 'Opencart') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-opencart\"></span>
\t\t\t<% } else {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-web\"></span>
\t\t\t<% } %>
        </td>
\t\t<td data-value=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
\t\t\t<% if(isActive) { %>
            \t<span class=\"uv-text-success\">";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active"), "html", null, true);
        yield "</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled"), "html", null, true);
        yield "</span>
        \t<% } %>
\t\t</td>
        <td data-value=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stared"), "html", null, true);
        yield "\">
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %>\"></span>
        </td>
\t\t<td data-value=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-customer\">
\t\t\t\t";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-customer\">
\t\t\t\t";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Customer list item template -->

\t<script type=\"text/javascript\">
\t\t var path = \"";
        // line 186
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account", ["customerId" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar CustomerModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar CustomerCollection = AppCollection.extend({
\t\t\t\tmodel : CustomerModel,
\t\t\t\turl : \"";
        // line 197
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account_collection_xhr");
        yield "\",
\t\t\t\tfilterParameters : {
                    \"starred\" : \"\",
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.customers;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar customerListView = new CustomerList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (customerCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(globalMessageResponse)
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

\t\t\tvar CustomerItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#customer_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-customer' : \"confirmRemove\",
                    'click .uv-star' : \"updateStar\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tcustomerCollection.syncData();
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
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_remove_customer_account_xhr");
        yield "/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tcustomerCollection.syncData();
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
\t\t\t\t},
                updateStar : function(e) {
                    if(Backbone.\$(e.currentTarget).hasClass('uv-star-active'))
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    else
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');

                    this.model.save({id:this.model.id}, {
                        patch: true,
                       url : \"";
        // line 285
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_customer_xhr");
        yield "\",
                        success: function (model, response, options) {

                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
\t\t\t});

\t\t\tvar CustomerList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif(customerCollection.length) {
\t\t\t\t\t\t_.each(customerCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderCustomer(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='7'>";
        // line 309
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderCustomer : function (item) {
\t\t\t\t\tvar customerItem = new CustomerItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(customerItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'userInstance.createdAt',
\t\t\t\tsortText: \"";
        // line 322
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 323
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#customer_list_sorting_tmp\").html()),
\t\t\t\tfilterByStatus : function(e) {
\t\t\t\t\te.preventDefault()
\t\t\t\t\tthis.collection.reset();
\t\t\t\t\tthis.collection.state.currentPage = null;
\t\t\t\t\tthis.collection.setSorting(null, null, {full: false});
\t\t\t\t\tif(Backbone.\$(e.currentTarget).find('a').attr('data-id') != 'starred') {
\t\t\t\t\t\tthis.collection.filterParameters.starred = null;
\t\t\t\t\t\tthis.collection.filterParameters.isActive = Backbone.\$(e.currentTarget).find('a').attr('data-id');
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.collection.filterParameters.isActive = null;
\t\t\t\t\t\tthis.collection.filterParameters.starred = 1;
\t\t\t\t\t}
\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t},
\t\t\t})

\t\t\tvar customerCollection = new CustomerCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : customerCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterCustomerByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
                    'starred(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByStarred',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcustomerCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number, sortField, order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterCustomerByStatus: function(status, query, number, sortField, order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query, number, sortField, order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
                filterByStarred : function(query, number, sortField, order) {
                \tthis.resetParams('starred', query);
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
                },
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif(query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
                    if(status == \"starred\") {
                        customerCollection.filterParameters.starred = 1;
                        customerCollection.filterParameters.isActive = null;
                        \$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 392
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Starred", [], "messages");
        yield "\");
                    } else {
                        customerCollection.filterParameters.starred = null;
                        customerCollection.filterParameters.isActive = status;
                        var statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 396
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
                        \$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 397
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
                    }
\t\t\t\t\tcustomerCollection.filterParameters.search = query;
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
        return "@UVDeskCoreFramework/Customers/listSupportCustomers.html.twig";
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
        return array (  678 => 397,  674 => 396,  665 => 392,  591 => 323,  587 => 322,  571 => 309,  544 => 285,  515 => 259,  450 => 197,  436 => 186,  426 => 179,  420 => 176,  415 => 174,  409 => 171,  403 => 168,  398 => 166,  393 => 164,  365 => 139,  362 => 138,  360 => 137,  356 => 136,  352 => 135,  345 => 131,  340 => 129,  335 => 127,  330 => 125,  318 => 115,  316 => 114,  306 => 106,  304 => 105,  294 => 97,  292 => 96,  282 => 90,  269 => 89,  247 => 77,  243 => 76,  239 => 75,  235 => 74,  231 => 73,  227 => 72,  223 => 71,  209 => 60,  204 => 58,  199 => 56,  188 => 48,  184 => 47,  180 => 46,  176 => 45,  171 => 43,  162 => 39,  148 => 28,  139 => 24,  129 => 17,  122 => 15,  117 => 13,  114 => 12,  111 => 11,  108 => 10,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Customers'|trans }}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Customers'|trans }}
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
                                    <li><a href=\"#\" data-id=\"starred\">{{ 'Starred'|trans }}</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>
                    <!--//Filter By Status-->
                </div>
\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t<a href=\"{{path('helpdesk_member_create_customer_account')}}\" type=\"button\" class=\"uv-btn-action\">
\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t{{ \"New Customer\"|trans }}
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
                            <th>{{ \"Email\"|trans }}</th>
                            <th>{{ \"Open Tickets\"|trans }}</th>
                            <th>{{ \"Source\"|trans }}</th>
                            <th>{{ \"Status\"|trans }}</th>
                            <th>{{ \"Stared\"|trans }}</th>
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
\t<script id=\"customer_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'userInstance.createdAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/userInstance.createdAt/<% if(sort == 'userInstance.createdAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"userInstance.createdAt\">
\t\t\t\t{% trans %}Created At{% endtrans %}
\t\t\t\t<% if(sort == 'userInstance.createdAt') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if(sort == 'name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/name/<% if(sort == 'name') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"name\">
\t\t\t\t{% trans %}Name{% endtrans %}
\t\t\t\t<% if(sort == 'name') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if(sort == 'a.email') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/a.email/<% if(sort == 'a.email') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.email\">
\t\t\t\t{% trans %}Email{% endtrans %}
\t\t\t\t<% if(sort == 'a.email') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Customer list item template -->
\t<script id=\"customer_list_item_tmp\" type=\"text/template\">
\t\t <td data-value=\"{{ 'Name'|trans }}\">
\t\t\t<% if(smallThumbnail != null) { %>
\t\t\t\t<img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= smallThumbnail.slice(1) %>\" alt=\"\"/>
\t\t\t<% } else { %>
\t\t\t\t<img src=\"{{ asset(default_customer_image_path) }}\" alt=\"\"/>
\t\t\t<% } %>
            <a href=\"{{ path('helpdesk_member_ticket_collection') }}#customer/<%= id %>\">
\t\t\t    <%- name %>
            </a>
\t\t</td>
\t\t<td data-value=\"{{ 'Email'|trans }}\"><%- email %></td>
        <td data-value=\"{{ 'Open Tickets'|trans }}\">
            <%= count %> {% trans %}Open Tickets{% endtrans %}
        </td>
        <td data-value=\"{{ 'Source'|trans }}\">
            <% if(source == 'website') { %>
\t\t\t\t<span class=\"uv-channel uv-channel-web\"></span>
\t\t\t<% } else if(source == 'email') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-email\"></span>
\t\t\t<% } else if(source == 'facebook') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-facebook\"></span>
\t\t\t<% } else if(source == 'twitter') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-twitter\"></span>
\t\t\t<% } else if(source == 'ebay') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-ebay\"></span>
\t\t\t<% } else if(source == 'disqus-engage') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-disqus-engage\"></span>
\t\t\t<% } else if(source == 'Magento 1') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-magento\"></span>
\t\t\t<% } else if(source == 'Magento 2') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-magento\"></span>
\t\t\t<% } else if(source == 'Wordpress') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-wordpress\"></span>
\t\t\t<% } else if(source == 'Opencart') {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-opencart\"></span>
\t\t\t<% } else {  %>
\t\t\t\t<span class=\"uv-channel uv-channel-web\"></span>
\t\t\t<% } %>
        </td>
\t\t<td data-value=\"{{ 'Status'|trans }}\">
\t\t\t<% if(isActive) { %>
            \t<span class=\"uv-text-success\">{{ 'Active'|trans }}</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">{{ 'Disabled'|trans }}</span>
        \t<% } %>
\t\t</td>
        <td data-value=\"{{ 'Stared'|trans }}\">
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %>\"></span>
        </td>
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last\">
\t\t\t<a href=\"<%= path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-customer\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<div class=\"uv-btn-stroke delete-customer\">
\t\t\t\t{{ \"Delete\"|trans }}
\t\t\t</div>
\t\t</td>
    </script>
\t<!-- //Customer list item template -->

\t<script type=\"text/javascript\">
\t\t var path = \"{{ path('helpdesk_member_manage_customer_account', {'customerId': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar CustomerModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar CustomerCollection = AppCollection.extend({
\t\t\t\tmodel : CustomerModel,
\t\t\t\turl : \"{{ path('helpdesk_member_manage_customer_account_collection_xhr') }}\",
\t\t\t\tfilterParameters : {
                    \"starred\" : \"\",
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.customers;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar customerListView = new CustomerList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (customerCollection.length == 0 && app.pager.paginationData.current != \"0\")
\t\t\t\t\t\t\t\trouter.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\tapp.pager.render();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif(globalMessageResponse)
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

\t\t\tvar CustomerItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#customer_list_item_tmp\").html()),
\t\t\t\tevents : {
\t\t\t\t\t'click .delete-customer' : \"confirmRemove\",
                    'click .uv-star' : \"updateStar\"
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));
\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif(response.alertMessage != undefined) {
\t\t\t\t\t\tcustomerCollection.syncData();
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
\t\t\t\t\t\turl : \"{{ path('helpdesk_member_remove_customer_account_xhr') }}/\"+this.model.get('id'),
\t\t\t\t\t\tsuccess : function (model, response, options) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tglobalMessageResponse = response;
\t\t\t\t\t\t\tcustomerCollection.syncData();
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
\t\t\t\t},
                updateStar : function(e) {
                    if(Backbone.\$(e.currentTarget).hasClass('uv-star-active'))
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    else
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');

                    this.model.save({id:this.model.id}, {
                        patch: true,
                       url : \"{{ path('helpdesk_member_bookmark_customer_xhr') }}\",
                        success: function (model, response, options) {

                        },
                        error: function (model, xhr, options) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
\t\t\t});

\t\t\tvar CustomerList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif(customerCollection.length) {
\t\t\t\t\t\t_.each(customerCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderCustomer(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='7'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderCustomer : function (item) {
\t\t\t\t\tvar customerItem = new CustomerItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(customerItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'userInstance.createdAt',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Created At{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#customer_list_sorting_tmp\").html()),
\t\t\t\tfilterByStatus : function(e) {
\t\t\t\t\te.preventDefault()
\t\t\t\t\tthis.collection.reset();
\t\t\t\t\tthis.collection.state.currentPage = null;
\t\t\t\t\tthis.collection.setSorting(null, null, {full: false});
\t\t\t\t\tif(Backbone.\$(e.currentTarget).find('a').attr('data-id') != 'starred') {
\t\t\t\t\t\tthis.collection.filterParameters.starred = null;
\t\t\t\t\t\tthis.collection.filterParameters.isActive = Backbone.\$(e.currentTarget).find('a').attr('data-id');
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.collection.filterParameters.isActive = null;
\t\t\t\t\t\tthis.collection.filterParameters.starred = 1;
\t\t\t\t\t}
\t\t\t\t\tvar queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
\t\t\t\t\trouter.navigate(queryString, {trigger: true});
\t\t\t\t},
\t\t\t})

\t\t\tvar customerCollection = new CustomerCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : customerCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterCustomerByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
                    'starred(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByStarred',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcustomerCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number, sortField, order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterCustomerByStatus: function(status, query, number, sortField, order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query, number, sortField, order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
\t\t\t\t},
                filterByStarred : function(query, number, sortField, order) {
                \tthis.resetParams('starred', query);
\t\t\t\t\tcustomerCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField, order);
\t\t\t\t\tcustomerCollection.syncData();
                },
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif(query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
                    if(status == \"starred\") {
                        customerCollection.filterParameters.starred = 1;
                        customerCollection.filterParameters.isActive = null;
                        \$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} {% trans %}Starred{% endtrans %}\");
                    } else {
                        customerCollection.filterParameters.starred = null;
                        customerCollection.filterParameters.isActive = status;
                        var statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
                        \$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
                    }
\t\t\t\t\tcustomerCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/Customers/listSupportCustomers.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Customers/listSupportCustomers.html.twig");
    }
}
