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

/* @UVDeskSupportCenter/Staff/Articles/articleList.html.twig */
class __TwigTemplate_ff527525c9bc9d387f132735a262be0a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Articles/articleList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Articles/articleList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Articles/articleList.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
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
        <div class=\"uv-aside uv-article-view \" ";
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
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 28
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["solution"]) {
                // line 30
                yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"uv-cursor\"><span class=\"uv-icon-expand\"></span> <span class=\"uv-icon-folder\"></span> ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "name", [], "any", false, false, false, 31), "html", null, true);
                yield " <span class=\"uv-flag-gray\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "categories", [], "any", false, false, false, 31)), "html", null, true);
                yield "</span></a>
\t\t\t\t\t\t\t\t<ul class=\"uv-transition uv-no-height\">
\t\t\t\t\t\t\t\t\t";
                // line 33
                if (CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "categories", [], "any", false, false, false, 33)) {
                    // line 34
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["solution"], "categories", [], "any", false, false, false, 34));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 35
                        yield "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 39
                        yield "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    yield "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    yield "\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Categories Added"), "html", null, true);
                    yield "</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 46
                yield "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['solution'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            yield "\t\t\t\t\t";
        } else {
            // line 50
            yield "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"uv-aside-nav-active\" href=\"";
            // line 51
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_folder");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Folder"), "html", null, true);
            yield "</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 54
        yield "\t\t\t\t</ul>
            </div>
        </div>

\t\t<div class=\"uv-view ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "cookies", [], "any", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "cookies", [], "any", false, false, false, 58), "get", ["uv-asideView"], "method", false, false, false, 58))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All Articles"), "html", null, true);
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
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created At"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label> ";
        // line 83
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
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"uv-drop-list-active\"><a href=\"#\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"0\">";
        // line 102
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
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"status\" data-action=\"status\">
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">";
        // line 122
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
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- //Mass trashed -->
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Mass action -->
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">
\t\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t";
        // line 144
        yield "\t\t\t\t\t\t<a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_create_article");
        yield "\" type=\"button\" class=\"uv-btn-action\" id=\"uv-add-article\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Article"), "html", null, true);
        yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--// Add Button -->
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->
\t\t\t";
        // line 160
        yield "            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
\t\t\t\t\t\t\t<th style=\"width: 1px;\"></th>
                            <th>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "</th>
                            <th>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        yield "</th>
                            <th>";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article"), "html", null, true);
        yield "</th>
                            <th>";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewed"), "html", null, true);
        yield "</th>
                            <th>";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield "</th>
                            <th>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</th>
                            <th class=\"uv-last\">";
        // line 171
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

    // line 183
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

        // line 184
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<!-- Sorting Template -->
\t<script id=\"article_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if (sort == 'a.dateAdded') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.dateAdded/<% if (sort == 'a.dateAdded') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.dateAdded\">
\t\t\t\t";
        // line 190
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        // line 191
        yield "\t\t\t\t<% if (sort == 'a.dateAdded') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.name') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.name/<% if (sort == 'a.name') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.name\">
\t\t\t\t";
        // line 199
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "messages");
        // line 200
        yield "\t\t\t\t<% if (sort == 'a.name') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>

\t    <li class=\"<% if (sort == 'a.viewed') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.viewed/<% if (sort == 'a.viewed') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.viewed\">
\t\t\t\t";
        // line 208
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Viewed", [], "messages");
        // line 209
        yield "\t\t\t\t<% if (sort == 'a.viewed') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Article list item template -->
\t<script id=\"article_list_item_tmp\" type=\"text/template\">
\t\t<td>
            <label class=\"uv-vertical-align uv-margin-left-17\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%- id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
        </td>
\t\t<td data-value=\"";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "\">
\t\t\t<%- id %>
\t\t</td>
\t\t<td data-value=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        yield "\" class=\"uv-width-300\">
\t\t\t<% if (categories) { %>
\t\t\t\t<% _.each (categories, function(category, key) { %>
\t\t\t\t\t<% if (key > 0){ %>
\t\t\t\t\t\t/ 
\t\t\t\t\t<% } %>
\t\t\t\t\t<%- category.name %>
\t\t\t\t<% }) %>
\t\t\t<% } %>
\t\t</td>
\t\t<td data-value=\"";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article"), "html", null, true);
        yield "\"><%- name %></td>
\t\t<td data-value=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewed"), "html", null, true);
        yield "\"><%- viewed ? viewed : 0 %></td>
\t\t<td data-value=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Created"), "html", null, true);
        yield "\"><%- dateAdded %></td>
\t\t<td data-value=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\">
\t\t\t<% if (status) { %>
            \t<span class=\"uv-text-success\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield "</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action"), "html", null, true);
        yield "\" class=\"uv-last-170\">
\t\t\t<a href=\"<%- path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-article\">
\t\t\t\t";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "
\t\t\t</a>
\t\t\t<a class=\"uv-btn-stroke preview-article\" href=\"<%- pathPreview.replace('replaceId', slug) %>\" target=\"_blank\" <%- status ? '' : 'disabled=\"disabled\"' %>>
\t\t\t\t";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview"), "html", null, true);
        yield "
\t\t\t</a>
\t\t</td>
    </script>
\t<!-- //Article list item template -->

\t<script type=\"text/javascript\">
\t\tvar path = \"";
        // line 262
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article", ["id" => "replaceId"]);
        yield "\";
    \tvar pathPreview = \"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_slug_article", ["slug" => "replaceId"]);
        yield "\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ArticleModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ArticleCollection = AppCollection.extend({
\t\t\t\tmodel : ArticleModel,
\t\t\t\turl : \"";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_article_collection_xhr");
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
\t\t\t\t\t\t\tvar articleListView = new ArticleList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (articleCollection.length == 0 && app.pager.paginationData.current != \"0\")
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
\t\t\t\t},
                batchOperation : function(data) {
   \t\t\t\t\tif (! data.ids.length) return;

\t\t\t\t\tvar self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 314
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article_xhr");
        yield "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
\t\t\t\t\t\t\tif ('delete' == data.actionType) {
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

\t\t\tvar ArticleItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#article_list_item_tmp\").html()),
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});

\t\t\tvar ArticleList = Backbone.View.extend({
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
\t\t\t\t\t
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
\t\t\t\t\tif (articleCollection.length) {
\t\t\t\t\t\t_.each(articleCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderArticle(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='8'>";
        // line 394
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticle : function (item) {
\t\t\t\t\tvar articleItem = new ArticleItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(articleItem.render().el);
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
                    articleCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};
                    
                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedIds();
                    articleCollection.batchOperation(data);
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

\t\t\t\t\t\$('.select-all-checkbox').prop('checked', false)
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
\t\t\t\t\t\t\t
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
        // line 494
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
\t\t\t\tdefaultSortText: \"";
        // line 495
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created At", [], "messages");
        yield "\",
\t\t\t\ttemplate : _.template(\$(\"#article_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar articleCollection = new ArticleCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : articleCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterArticleByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tarticleCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tarticleCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterArticleByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tarticleCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tarticleCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tarticleCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"";
        // line 540
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All", [], "messages");
        yield "\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"";
        // line 541
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status:", [], "messages");
        yield " \" + statusText);
\t\t\t\t\tarticleCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});     

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});

\t\t\t\$('.uv-cursor').on('click', function(){
\t\t\t\t\$(this).find('span.uv-icon-expand')[0].classList.toggle('uv-icon-expand-active');

\t\t\t\tlet ele = \$(this).next('ul')[0];
\t\t\t\tele.style.height = ((ele.scrollHeight + 10) + 'px');
\t\t\t\tele.classList.toggle('uv-no-height');
\t\t\t})
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
        return "@UVDeskSupportCenter/Staff/Articles/articleList.html.twig";
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
        return array (  862 => 541,  858 => 540,  808 => 495,  804 => 494,  701 => 394,  618 => 314,  575 => 274,  561 => 263,  557 => 262,  547 => 255,  541 => 252,  536 => 250,  530 => 247,  525 => 245,  520 => 243,  516 => 242,  512 => 241,  508 => 240,  495 => 230,  489 => 227,  469 => 209,  467 => 208,  457 => 200,  455 => 199,  445 => 191,  443 => 190,  433 => 184,  420 => 183,  398 => 171,  394 => 170,  390 => 169,  386 => 168,  382 => 167,  378 => 166,  374 => 165,  367 => 160,  357 => 146,  351 => 144,  346 => 141,  333 => 131,  321 => 122,  317 => 121,  312 => 119,  306 => 116,  289 => 102,  285 => 101,  281 => 100,  276 => 98,  267 => 94,  253 => 83,  244 => 79,  222 => 60,  215 => 58,  209 => 54,  201 => 51,  198 => 50,  195 => 49,  187 => 46,  181 => 43,  178 => 42,  175 => 41,  168 => 39,  165 => 35,  160 => 34,  158 => 33,  151 => 31,  148 => 30,  143 => 29,  141 => 28,  130 => 22,  124 => 19,  116 => 16,  106 => 8,  93 => 7,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Articles'|trans }}
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
        <div class=\"uv-aside uv-article-view \" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %}>
            <div class=\"uv-aside-head\">
                <div class=\"uv-aside-title\">
                    <h6>{{ 'FOLDERS'|trans }}</h6>
                </div>
                <div class=\"uv-aside-back\">
                    <span onclick=\"window.location = '{{path('helpdesk_member_knowledgebase_folders_collection')}}'\"> {{ 'Back'|trans }}</span>
                </div>
            </div>

            <div class=\"uv-aside-nav\">
\t\t\t\t<ul>
\t\t\t\t\t{% if solutions|length %}
\t\t\t\t\t\t{% for solution in solutions %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"uv-cursor\"><span class=\"uv-icon-expand\"></span> <span class=\"uv-icon-folder\"></span> {{ solution.name }} <span class=\"uv-flag-gray\">{{solution.categories|length}}</span></a>
\t\t\t\t\t\t\t\t<ul class=\"uv-transition uv-no-height\">
\t\t\t\t\t\t\t\t\t{% if solution.categories %}
\t\t\t\t\t\t\t\t\t\t{% for category in solution.categories %}
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t{# <a class=\"\" href=\"{{path('helpdesk_member_knowledgebase_category_articles_collection', {'category': category.id} )}}\">{{ category.name }}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-flag-gray\">{{category.articleCount}}</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a>{{ 'No Categories Added'|trans}}</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"uv-aside-nav-active\" href=\"{{ path('helpdesk_member_knowledgebase_create_folder') }}\">{{ 'New Folder'|trans }}</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
            </div>
        </div>

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{{ 'All Articles'|trans }}
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
\t\t\t\t\t\t\t\t\t<label> {{ 'Sort By'|trans }}</label>
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
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\" data-id=\"1\">{{ 'Published'|trans }}</a></li>
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
\t\t\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">{{ 'Published'|trans }}</a></li>
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
\t\t\t\t
\t\t\t\t\t<div class=\"uv-action-bar-col-rt\">
\t\t\t\t\t\t<input type=\"text\" class=\"uv-search-inline uv-vertical-align uv-margin-right-15\" placeholder=\"{{ 'Search'|trans }}\">
\t\t\t\t\t\t<!-- Add Button -->
\t\t\t\t\t\t{# {% set resources = user_service.getCompanyLeftResources() %} #}
\t\t\t\t\t\t<a href=\"{{ path('helpdesk_member_knowledgebase_create_article') }}\" type=\"button\" class=\"uv-btn-action\" id=\"uv-add-article\">
\t\t\t\t\t\t\t<span class=\"uv-icon-add\"></span>
\t\t\t\t\t\t\t{{ \"New Article\"|trans }}
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!--// Add Button -->
\t\t\t\t\t</div>
\t\t\t\t</div>
            </div>
            <!--//Action Bar-->
\t\t\t{# {% set resources = user_service.getCompanyLeftResources() %}
\t\t\t{% if resources %}
\t\t\t\t<div class=\"uv-message-wrapper\" id=\"upgrade-plan-message\"  {% if not(resources and resources.articles.showAlert) %} style=\"display: none;\"{% endif %}>
\t\t\t\t\t<p>\t{{ resources.articles.alertMessage |  raw }}</p>
\t\t\t\t\t<a href=\"{{path('webkul_admin_subscription_plan')}}\" class=\"uv-btn-small\">{{ 'Upgrade Plan'|trans }}</a>
\t\t\t\t</div>
\t\t\t{% endif %} #}
            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                        <tr>
\t\t\t\t\t\t\t<th style=\"width: 1px;\"></th>
                            <th>{{ \"Id\"|trans }}</th>
                            <th>{{ \"Category\"|trans }}</th>
                            <th>{{ \"Article\"|trans }}</th>
                            <th>{{ \"Viewed\"|trans }}</th>
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
\t<script id=\"article_list_sorting_tmp\" type=\"text/template\">
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

\t    <li class=\"<% if (sort == 'a.viewed') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if (queryString != '') { %><%- queryString %>/<% } %><% if (page) { %>page/<%- page %><% } else { %>page/1<% } %>/sort/a.viewed/<% if (sort == 'a.viewed') { %><% if (direction) { %>direction/<%- direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"a.viewed\">
\t\t\t\t{% trans %}Viewed{% endtrans %}
\t\t\t\t<% if (sort == 'a.viewed') { %>
\t\t\t\t\t<span class=\"uv-sorting <% if (direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
\t\t\t\t<% } %>
\t\t\t</a>
        </li>
\t</script>
\t<!-- //Sorting Template -->

\t<!-- Article list item template -->
\t<script id=\"article_list_item_tmp\" type=\"text/template\">
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
\t\t<td data-value=\"{{ 'Category'|trans }}\" class=\"uv-width-300\">
\t\t\t<% if (categories) { %>
\t\t\t\t<% _.each (categories, function(category, key) { %>
\t\t\t\t\t<% if (key > 0){ %>
\t\t\t\t\t\t/ 
\t\t\t\t\t<% } %>
\t\t\t\t\t<%- category.name %>
\t\t\t\t<% }) %>
\t\t\t<% } %>
\t\t</td>
\t\t<td data-value=\"{{ 'Article'|trans }}\"><%- name %></td>
\t\t<td data-value=\"{{ 'Viewed'|trans }}\"><%- viewed ? viewed : 0 %></td>
\t\t<td data-value=\"{{ 'Created'|trans }}\"><%- dateAdded %></td>
\t\t<td data-value=\"{{ 'Status'|trans }}\">
\t\t\t<% if (status) { %>
            \t<span class=\"uv-text-success\">{{ 'Published'|trans }}</span>
            <% } else { %>
            \t<span class=\"uv-text-danger\">{{ 'Draft'|trans }}</span>
        \t<% } %>
\t\t</td>
\t\t<td data-value=\"{{ 'Action'|trans }}\" class=\"uv-last-170\">
\t\t\t<a href=\"<%- path.replace('replaceId', id) %>\" class=\"uv-btn-stroke edit-article\">
\t\t\t\t{{ \"Edit\"|trans }}
\t\t\t</a>
\t\t\t<a class=\"uv-btn-stroke preview-article\" href=\"<%- pathPreview.replace('replaceId', slug) %>\" target=\"_blank\" <%- status ? '' : 'disabled=\"disabled\"' %>>
\t\t\t\t{{ \"Preview\"|trans }}
\t\t\t</a>
\t\t</td>
    </script>
\t<!-- //Article list item template -->

\t<script type=\"text/javascript\">
\t\tvar path = \"{{ path('helpdesk_member_knowledgebase_update_article', {'id': 'replaceId' }) }}\";
    \tvar pathPreview = \"{{ path('helpdesk_knowledgebase_read_slug_article', {'slug': 'replaceId' }) }}\";

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ArticleModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\"
\t\t\t});

\t\t\tvar ArticleCollection = AppCollection.extend({
\t\t\t\tmodel : ArticleModel,
\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_article_collection_xhr') }}\",
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
\t\t\t\t\t\t\tvar articleListView = new ArticleList();
\t\t\t\t\t\t\tapp.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t\tvar url = app.pager.paginationData.url;
\t\t\t\t\t\t\tif (articleCollection.length == 0 && app.pager.paginationData.current != \"0\")
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
\t\t\t\t},
                batchOperation : function(data) {
   \t\t\t\t\tif (! data.ids.length) return;

\t\t\t\t\tvar self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_knowledgebase_update_article_xhr') }}\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
\t\t\t\t\t\t\tif ('delete' == data.actionType) {
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

\t\t\tvar ArticleItem = Backbone.View.extend({
\t\t\t\ttagName : \"tr\",
\t\t\t\ttemplate : _.template(\$(\"#article_list_item_tmp\").html()),
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t},
\t\t\t});

\t\t\tvar ArticleList = Backbone.View.extend({
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
\t\t\t\t\t
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
\t\t\t\t\tif (articleCollection.length) {
\t\t\t\t\t\t_.each(articleCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderArticle(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<tr style='text-align: center;'><td colspan='8'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticle : function (item) {
\t\t\t\t\tvar articleItem = new ArticleItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(articleItem.render().el);
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
                    articleCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};
                    
                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedIds();
                    articleCollection.batchOperation(data);
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

\t\t\t\t\t\$('.select-all-checkbox').prop('checked', false)
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
\t\t\t\t\t\t\t
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
\t\t\t\ttemplate : _.template(\$(\"#article_list_sorting_tmp\").html())
\t\t\t})

\t\t\tvar articleCollection = new ArticleCollection();

\t\t\tvar filter = new Filter({
\t\t\t\tcollection : articleCollection
\t\t\t});

\t\t\tRouter = Backbone.Router.extend({
\t\t\t\troutes: {
\t\t\t\t\t'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
\t\t\t\t\t'isActive/:status(/search/:query)(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterArticleByStatus',
\t\t\t\t\t'search/:query(/page/:number)(/sort/:sortField)(/direction/:order)' : 'filterByQuery',
\t\t\t\t\t'' : 'initializeList'
\t\t\t\t},
\t\t\t\tinitializeList : function() {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tarticleCollection.state.currentPage = null;
\t\t\t\t\tfilter.sortCollection();
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tpaginate : function(number,sortField,order) {
\t\t\t\t\tthis.resetParams('', '');
\t\t\t\t\tarticleCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterArticleByStatus: function(status,query,number,sortField,order) {
\t\t\t\t\tthis.resetParams(status,query);
\t\t\t\t\tarticleCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tfilterByQuery : function(query,number,sortField,order) {
\t\t\t\t\tthis.resetParams('',query);
\t\t\t\t\tarticleCollection.state.currentPage = number;
\t\t\t\t\tfilter.sortCollection(sortField,order);
\t\t\t\t\tarticleCollection.syncData();
\t\t\t\t},
\t\t\t\tresetParams : function(status, query) {
\t\t\t\t\tif (query != null)
\t\t\t\t\t\tquery = query.replace(/\\+/g,' ');
\t\t\t\t\tarticleCollection.filterParameters.isActive = status;
\t\t\t\t\tvar statusText = status ? \$(\".filter-by-status a[data-id='\" + status + \"']\").text() : \"{% trans %}All{% endtrans %}\";
\t\t\t\t\t\$(\".filter-by-status .uv-dropdown-btn\").text(\"{% trans %}Status:{% endtrans %} \" + statusText);
\t\t\t\t\tarticleCollection.filterParameters.search = query;
\t\t\t\t\t\$(\".uv-search-inline\").val(query);
\t\t\t\t}
\t\t\t});     

\t\t\trouter = new Router();
\t\t\tBackbone.history.start({push_state:true});

\t\t\t\$('.uv-cursor').on('click', function(){
\t\t\t\t\$(this).find('span.uv-icon-expand')[0].classList.toggle('uv-icon-expand-active');

\t\t\t\tlet ele = \$(this).next('ul')[0];
\t\t\t\tele.style.height = ((ele.scrollHeight + 10) + 'px');
\t\t\t\tele.classList.toggle('uv-no-height');
\t\t\t})
\t\t}); \t
\t</script>
{% endblock %}
", "@UVDeskSupportCenter/Staff/Articles/articleList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Articles/articleList.html.twig");
    }
}
