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

/* @UVDeskSupportCenter/Staff/Category/categoryList.html.twig */
class __TwigTemplate_fc7adf218d8f5a22d4a88e4fcf3cadce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Category/categoryList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Category/categoryList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Category/categoryList.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
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
\t\t@media only screen and (max-width: 900px) {
\t\t\t.uv-table.uv-list-view table tbody td.uv-last-170{
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t</style>
\t<div class=\"uv-inner-section\">
        <div class=\"uv-aside\" ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "cookies", [], "any", false, false, false, 16) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "cookies", [], "any", false, false, false, 16), "get", ["uv-asideView"], "method", false, false, false, 16))) {
            yield "style=\"display: none;\"";
        }
        yield ">
            <div class=\"uv-aside-head\">
                <div class=\"uv-aside-title\">
                    <h6>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("FOLDERS"), "html", null, true);
        yield "</h6>
                </div>
                <div class=\"uv-aside-back\">
                    <span onclick=\"window.location = '";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_folders_collection");
        yield "'\"> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                </div>
            </div>

            <div class=\"uv-aside-nav\">
                <ul>
\t\t\t\t\t";
        // line 28
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 28, $this->source); })()))) {
            yield "\t\t\t\t
\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["solution"]) {
                // line 30
                yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"\" href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_folder_categories_collection", ["solution" => CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\"><span class=\"uv-icon-folder\"></span> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "name", [], "any", false, false, false, 31), "html", null, true);
                yield " <span class=\"uv-flag-gray\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "categoriesCount", [], "any", false, false, false, 31), "html", null, true);
                yield "</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['solution'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "\t\t\t\t\t";
        } else {
            // line 35
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"uv-aside-nav-active\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_folder");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Folder"), "html", null, true);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 38
        yield "\t\t\t\t\t\t
                </ul>
            </div>
        </div>

\t\t<div class=\"uv-view ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "cookies", [], "any", false, false, false, 43) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "cookies", [], "any", false, false, false, 43), "get", ["uv-asideView"], "method", false, false, false, 43))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        yield "
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <!-- Select all checkbox -->
                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\">
                            <span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                <!-- //Select all checkbox -->

                <div class=\"uv-action-col-wrapper\">
\t\t\t\t\t<div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t\t<!--Sort by-->
\t\t\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t\t\t";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created At"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--Sort by-->

\t\t\t\t\t\t<!--Filter By Status-->
\t\t\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t\t\t";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--//Filter By Status-->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-action-bar-col-lt\" style=\"display: none\">
\t\t\t\t\t\t<!-- Mass action -->
\t\t\t\t\t\t<div class=\"mass-action\">
\t\t\t\t\t\t\t<div class=\"property-block\">
\t\t\t\t\t\t\t\t<!-- //Mass status update -->
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"status\" data-action=\"status\">
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Publish"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- //Mass status update -->

\t\t\t\t\t\t\t\t<!-- Mass trashed -->
\t\t\t\t\t\t\t\t<a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"delete\" style=\"margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- //Mass trashed -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Mass action -->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t";
        // line 129
        yield "\t\t\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_category");
        yield "\" type=\"button\" class=\"uv-btn-action\" id=\"uv-add-category\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Category"), "html", null, true);
        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--// Add Button -->
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->
\t\t\t";
        // line 144
        yield "            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th style=\"width: 1px;\"></th>
                            <th>";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "</th>
                            <th>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folder"), "html", null, true);
        yield "</th>
                            <th>";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        yield "</th>
                            <th>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
        yield "</th>
                            <th>";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield "</th>
                            <th>";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 155
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

    // line 167
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

        // line 168
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<!-- Sorting Template -->
\t<script id=\"category_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 'a.dateAdded') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.dateAdded/<% if (sort == 'a.dateAdded') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.dateAdded\">
\t\t\t\t";
        // line 174
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        // line 175
        yield "\t\t\t\t<% if (sort == 'a.dateAdded') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.name/<% if (sort == 'a.name') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.name\">
\t\t\t\t";
        // line 183
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        // line 184
        yield "\t\t\t\t<% if (sort == 'a.name') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.sortOrder') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.sortOrder/<% if (sort == 'a.sortOrder') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.sortOrder\">
\t\t\t\t";
        // line 192
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort Order", [], "messages");
        // line 193
        yield "\t\t\t\t<% if (sort == 'a.sortOrder') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Category list item template -->
\t<script id=\"category_list_item_tmp\" type=\"text/template\">
\t\t<td>
            <label class=\"uv-vertical-align uv-margin-left-17\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%- id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
        </td>
\t\t<td data-value=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "\">
\t\t\t<%- id %>
\t\t</td>
\t\t<td data-value=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Folder"), "html", null, true);
        yield "\">
\t\t\t<% if (solutions) { %>
\t\t\t\t<% _.each(solutions, function(solution, key){ %>
\t\t\t\t\t<% if (key > 0){ %>
\t\t\t\t\t\t/
\t\t\t\t\t<% } %>
          \t\t\t<%- solution.name %>
\t\t\t\t<% }) %>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        yield "\">
\t\t\t<%- name %>
\t\t</td>
\t\t<td data-value=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
        yield "\"><%- articleCount %></td>
\t\t<td data-value=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield "\"><%- dateAdded %></td>
\t\t<td data-value=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
\t\t\t<% if (status) { %>
            \t<span class=\"uv-text-success\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield "</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last-170\">
\t\t\t<a href=\"<%- path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-category\">
\t\t\t\t";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<a class=\"uv-btn-stroke preview-category\" href=\"<%- pathPreview.replace('replaceId', id) %>\" target=\"_blank\" <%- status ? '' : 'disabled=\"disabled\"' %>>
\t\t\t\t";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview"), "html", null, true);
        yield "
\t\t\t</a>
\t\t</td>
    </script>
\t<!-- //Category list item template -->

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_category", ["id" => "replaceId"]);
        yield "\";
\t\tvar pathPreview = \"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_category", ["category" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar CategoryModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar CategoryCollection = AppCollection.extend({
\t\t\t\tmodel : CategoryModel,
\t\t\t\turl : \"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_category_collection_xhr");
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
\t\t\t\t\t\$('.select-all-checkbox').prop('checked', false);
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar categoryListView = new CategoryList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (categoryCollection.length == 0 && app.pager.paginationData.current != \"0\")
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
\t\t\t\t} ,
                batchOperation : function(data) {
\t\t\t\t\tif (! data.ids.length) return;
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 300
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_category_xhr");
        yield "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
\t\t\t\t\t\t\tif (typeof(response.allowedToAdd) != 'undefined' && response.allowedToAdd) {
\t\t\t\t\t\t\t\t\$('#upgrade-plan-message').hide();
\t\t\t\t\t\t\t\t\$('#uv-add-article').show();
\t\t\t\t\t\t\t}
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
\t\t\t});

\t\t\tvar CategoryItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#category_list_item_tmp\").html()),
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tvar CategoryList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tevents: {
                    'change .mass-action-checkbox' : 'showBulkOptions'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
                showBulkOptions : function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked'))
                            count++;
                    });

                    if (count == \$('.mass-action-checkbox').length)
                        \$('.select-all-checkbox').prop('checked', true);
                    else
                        \$('.select-all-checkbox').prop('checked', false);

                    if (count) {
                        \$('.uv-action-bar-col-lt').eq(0).hide();
                        \$('.uv-action-bar-col-lt').eq(1).show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar-col-lt').eq(1).hide();
                        \$('.uv-action-bar-col-lt').eq(0).show();
                        \$('.uv-action-bar-col-rt').show()
                    }
                },
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif (categoryCollection.length) {
\t\t\t\t\t\t_.each(categoryCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderCategory(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='8'>";
        // line 381
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderCategory : function (item) {
\t\t\t\t\tvar categoryItem = new CategoryItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(categoryItem.render().el);
\t\t\t\t}
\t\t\t});

            var BulkActionView = Backbone.View.extend({
                el : \$(\".mass-action\"),
                currentEvent : null,
                events : {
                    'click ul li' : 'massAction',
                    'click #mass-delete' : 'confirmRemove'
                },
                massAction: function(e) {
                    e.preventDefault();
                    //if (!parseInt(Backbone.\$(e.currentTarget).attr('data-index'))) return;
                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedIds();
                    categoryCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedIds();
                    categoryCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedIds() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;

                    app.appView.openConfirmModal(this)
                },
                hideBulkOptions : function() {
\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(1).hide();
\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(0).show();
\t\t\t\t\t\$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                },
                selectAll : function(e) {
                    if (Backbone.\$(e.currentTarget).is(':checked')) {
\t\t\t\t\t\tif (\$('.mass-action-checkbox').length) {
\t\t\t\t\t\t\t\$('.mass-action-checkbox').prop('checked', true);

\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(0).hide();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(1).show();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-rt').hide()
\t\t\t\t\t\t} else
\t\t\t\t\t\t\tBackbone.\$(e.currentTarget).prop('checked', false)
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if (\$(this).is(':checked'))
                                count++;
                        });

                        if (count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(1).hide();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(0).show();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

\t\t\tvar pageView = new PageView();
            var bulkAction = new BulkActionView();

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'a.dateAdded',
\t\t\t\tsortText: \"";
        // line 479
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 480
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#category_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar categoryCollection = new CategoryCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : categoryCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterCategoryByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcategoryCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcategoryCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterCategoryByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tcategoryCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tcategoryCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tcategoryCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 525
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 526
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
\t\t\t\t\tcategoryCollection.filterParameters.search = query;
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
        return "@UVDeskSupportCenter/Staff/Category/categoryList.html.twig";
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
        return array (  833 => 526,  829 => 525,  779 => 480,  775 => 479,  674 => 381,  590 => 300,  547 => 260,  533 => 249,  529 => 248,  519 => 241,  513 => 238,  508 => 236,  502 => 233,  497 => 231,  492 => 229,  488 => 228,  484 => 227,  478 => 224,  465 => 214,  459 => 211,  439 => 193,  437 => 192,  427 => 184,  425 => 183,  415 => 175,  413 => 174,  403 => 168,  390 => 167,  368 => 155,  364 => 154,  360 => 153,  356 => 152,  352 => 151,  348 => 150,  344 => 149,  337 => 144,  327 => 131,  321 => 129,  316 => 126,  303 => 116,  291 => 107,  287 => 106,  282 => 104,  276 => 101,  259 => 87,  255 => 86,  251 => 85,  246 => 83,  237 => 79,  223 => 68,  214 => 64,  192 => 45,  185 => 43,  178 => 38,  170 => 36,  167 => 35,  164 => 34,  151 => 31,  148 => 30,  144 => 29,  140 => 28,  129 => 22,  123 => 19,  115 => 16,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Categories'|trans }}
{% endblock %}

{% block pageContent %}
\t<style>
\t\t@media only screen and (max-width: 900px) {
\t\t\t.uv-table.uv-list-view table tbody td.uv-last-170{
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t</style>
\t<div class=\"uv-inner-section\">
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %}>
            <div class=\"uv-aside-head\">
                <div class=\"uv-aside-title\">
                    <h6>{{ 'FOLDERS'|trans }}</h6>
                </div>
                <div class=\"uv-aside-back\">
                    <span onclick=\"window.location = '{{path('helpdesk_member_knowledgebase_folders_collection')}}'\"> {{ 'Back'|trans }}</span>
                </div>
            </div>

            <div class=\"uv-aside-nav\">
                <ul>
\t\t\t\t\t{% if solutions|length %}\t\t\t\t
\t\t\t\t\t\t{% for solution in solutions %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"\" href=\"{{path('helpdesk_member_knowledgebase_folder_categories_collection', {'solution': solution.id} )}}\"><span class=\"uv-icon-folder\"></span> {{ solution.name }} <span class=\"uv-flag-gray\">{{solution.categoriesCount}}</span></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"uv-aside-nav-active\" href=\"{{ path('helpdesk_member_knowledgebase_create_folder') }}\">{{ 'New Folder'|trans }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}\t\t\t\t\t\t
                </ul>
            </div>
        </div>

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'Categories'|trans }}
\t\t\t</h1>
\t\t\t<div class=\"uv-action-bar\">
                <!-- Select all checkbox -->
                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\">
                            <span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                <!-- //Select all checkbox -->

                <div class=\"uv-action-col-wrapper\">
\t\t\t\t\t<div class=\"uv-action-bar-col-lt\">
\t\t\t\t\t\t<!--Sort by-->
\t\t\t\t\t\t<div class=\"uv-dropdown sort\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t\t\t{{ 'Sort By:'|trans }} {{ 'Created At'|trans }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Sort By'|trans }}</label>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--Sort by-->

\t\t\t\t\t\t<!--Filter By Status-->
\t\t\t\t\t\t<div class=\"uv-dropdown filter-by-status\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">
\t\t\t\t\t\t\t\t{{ 'Status:'|trans }} {{ 'All'|trans }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">{{ 'All'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">{{ 'Publish'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">{{ 'Draft'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--//Filter By Status-->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-action-bar-col-lt\" style=\"display: none\">
\t\t\t\t\t\t<!-- Mass action -->
\t\t\t\t\t\t<div class=\"mass-action\">
\t\t\t\t\t\t\t<div class=\"property-block\">
\t\t\t\t\t\t\t\t<!-- //Mass status update -->
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown\">
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Status'|trans }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"status\" data-action=\"status\">
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">{{ 'Publish'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">{{ 'Draft'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- //Mass status update -->

\t\t\t\t\t\t\t\t<!-- Mass trashed -->
\t\t\t\t\t\t\t\t<a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"delete\" style=\"margin-left: 5px;\">
\t\t\t\t\t\t\t\t\t{{ 'Delete'|trans }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- //Mass trashed -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Mass action -->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t{# {% set resources = user_service.getCompanyLeftResources() %}\t\t\t\t\t\t #}
\t\t\t\t\t\t<a href=\"{{ path('helpdesk_member_knowledgebase_create_category') }}\" type=\"button\" class=\"uv-btn-action\" id=\"uv-add-category\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t{{ \"New Category\"|trans }}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--// Add Button -->
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->
\t\t\t{# {% if resources %}
\t\t\t\t<div class=\"uv-message-wrapper\" id=\"upgrade-plan-message\"  {% if not(resources and resources.categories.showAlert) %} style=\"display: none;\"{% endif %}>
\t\t\t\t\t<p>\t{{ resources.categories.alertMessage |  raw }}</p>
\t\t\t\t\t<a href=\"{{path('webkul_admin_subscription_plan')}}\" class=\"uv-btn-small\">{{ 'Upgrade Plan'|trans }}</a>
\t\t\t\t</div>
\t\t\t{% endif %} #}
            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
                            <th style=\"width: 1px;\"></th>
                            <th>{{ \"Id\"|trans }}</th>
                            <th>{{ \"Folder\"|trans }}</th>
                            <th>{{ \"Category\"|trans }}</th>
                            <th>{{ \"Articles\"|trans }}</th>
                            <th>{{ \"Created\"|trans }}</th>
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
\t<script id=\"category_list_sorting_tmp\" type=\"text/template\">
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

\t    <li class=\"<% if (sort == 'a.sortOrder') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.sortOrder/<% if (sort == 'a.sortOrder') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.sortOrder\">
\t\t\t\t{% trans %}Sort Order{% endtrans %}
\t\t\t\t<% if (sort == 'a.sortOrder') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Category list item template -->
\t<script id=\"category_list_item_tmp\" type=\"text/template\">
\t\t<td>
            <label class=\"uv-vertical-align uv-margin-left-17\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%- id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
        </td>
\t\t<td data-value=\"{{ 'Id'|trans }}\">
\t\t\t<%- id %>
\t\t</td>
\t\t<td data-value=\"{{ 'Folder'|trans }}\">
\t\t\t<% if (solutions) { %>
\t\t\t\t<% _.each(solutions, function(solution, key){ %>
\t\t\t\t\t<% if (key > 0){ %>
\t\t\t\t\t\t/
\t\t\t\t\t<% } %>
          \t\t\t<%- solution.name %>
\t\t\t\t<% }) %>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"{{ 'Category'|trans }}\">
\t\t\t<%- name %>
\t\t</td>
\t\t<td data-value=\"{{ 'Articles'|trans }}\"><%- articleCount %></td>
\t\t<td data-value=\"{{ 'Created'|trans }}\"><%- dateAdded %></td>
\t\t<td data-value=\"{{ 'Status'|trans }}\">
\t\t\t<% if (status) { %>
            \t<span class=\"uv-text-success\">{{ 'Published'|trans }}</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">{{ 'Draft'|trans }}</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last-170\">
\t\t\t<a href=\"<%- path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-category\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<a class=\"uv-btn-stroke preview-category\" href=\"<%- pathPreview.replace('replaceId', id) %>\" target=\"_blank\" <%- status ? '' : 'disabled=\"disabled\"' %>>
\t\t\t\t{{ \"Preview\"|trans }}
\t\t\t</a>
\t\t</td>
    </script>
\t<!-- //Category list item template -->

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('helpdesk_member_knowledgebase_update_category', {'id': 'replaceId' }) }}\";
\t\tvar pathPreview = \"{{ path('helpdesk_knowledgebase_category', {'category': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar CategoryModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar CategoryCollection = AppCollection.extend({
\t\t\t\tmodel : CategoryModel,
\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_category_collection_xhr') }}\",
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp.results;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\t\$('.select-all-checkbox').prop('checked', false);
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar categoryListView = new CategoryList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (categoryCollection.length == 0 && app.pager.paginationData.current != \"0\")
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
\t\t\t\t} ,
                batchOperation : function(data) {
\t\t\t\t\tif (! data.ids.length) return;
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_knowledgebase_update_category_xhr') }}\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
\t\t\t\t\t\t\tif (typeof(response.allowedToAdd) != 'undefined' && response.allowedToAdd) {
\t\t\t\t\t\t\t\t\$('#upgrade-plan-message').hide();
\t\t\t\t\t\t\t\t\$('#uv-add-article').show();
\t\t\t\t\t\t\t}
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
\t\t\t});

\t\t\tvar CategoryItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#category_list_item_tmp\").html()),
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tvar CategoryList = Backbone.View.extend({
\t\t\t\tel : \$(\".uv-list-view table tbody\"),
\t\t\t\tevents: {
                    'change .mass-action-checkbox' : 'showBulkOptions'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
                showBulkOptions : function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked'))
                            count++;
                    });

                    if (count == \$('.mass-action-checkbox').length)
                        \$('.select-all-checkbox').prop('checked', true);
                    else
                        \$('.select-all-checkbox').prop('checked', false);

                    if (count) {
                        \$('.uv-action-bar-col-lt').eq(0).hide();
                        \$('.uv-action-bar-col-lt').eq(1).show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar-col-lt').eq(1).hide();
                        \$('.uv-action-bar-col-lt').eq(0).show();
                        \$('.uv-action-bar-col-rt').show()
                    }
                },
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"tr\").remove();
\t\t\t\t\tif (categoryCollection.length) {
\t\t\t\t\t\t_.each(categoryCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderCategory(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='8'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderCategory : function (item) {
\t\t\t\t\tvar categoryItem = new CategoryItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(categoryItem.render().el);
\t\t\t\t}
\t\t\t});

            var BulkActionView = Backbone.View.extend({
                el : \$(\".mass-action\"),
                currentEvent : null,
                events : {
                    'click ul li' : 'massAction',
                    'click #mass-delete' : 'confirmRemove'
                },
                massAction: function(e) {
                    e.preventDefault();
                    //if (!parseInt(Backbone.\$(e.currentTarget).attr('data-index'))) return;
                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedIds();
                    categoryCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedIds();
                    categoryCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedIds() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;

                    app.appView.openConfirmModal(this)
                },
                hideBulkOptions : function() {
\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(1).hide();
\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(0).show();
\t\t\t\t\t\$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                },
                selectAll : function(e) {
                    if (Backbone.\$(e.currentTarget).is(':checked')) {
\t\t\t\t\t\tif (\$('.mass-action-checkbox').length) {
\t\t\t\t\t\t\t\$('.mass-action-checkbox').prop('checked', true);

\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(0).hide();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(1).show();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-rt').hide()
\t\t\t\t\t\t} else
\t\t\t\t\t\t\tBackbone.\$(e.currentTarget).prop('checked', false)
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if (\$(this).is(':checked'))
                                count++;
                        });

                        if (count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(1).hide();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-lt').eq(0).show();
\t\t\t\t\t\t\t\$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

\t\t\tvar pageView = new PageView();
            var bulkAction = new BulkActionView();

\t\t\tvar Filter = app.Filter.extend({
\t\t\t\tdefaultSortIndex: 'a.dateAdded',
\t\t\t\tsortText: \"{% trans %}Sort By:{% endtrans %} \",
\t\t\t\tdefaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Created At{% endtrans %}\",
\t\t\t\ttemplate : _.template(\$(\"#category_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar categoryCollection = new CategoryCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : categoryCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterCategoryByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcategoryCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tcategoryCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterCategoryByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tcategoryCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tcategoryCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tcategoryCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tcategoryCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
\t\t\t\t\tcategoryCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Staff/Category/categoryList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Category/categoryList.html.twig");
    }
}
