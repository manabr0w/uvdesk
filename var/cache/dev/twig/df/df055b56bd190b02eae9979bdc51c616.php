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

/* @UVDeskSupportCenter/Staff/Articles/articleForm.html.twig */
class __TwigTemplate_2b99556ea21081d0cf677afc4d06f5fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Articles/articleForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Articles/articleForm.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Articles/articleForm.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article"), "html", null, true);
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
\t.uv-tab-error {
\t\tborder-bottom: 3px solid #FF5656 !important;
\t}
\t.mce-menu-item.mce-disabled .mce-text {
\t\tcolor: #333;
\t}
\t.uv-field-block .uv-dropdown-list.uv-top-left, .uv-field-block .uv-dropdown-list.uv-top-right{
    \t/*top: -90px;
\t\tbottom: auto;*/
\t}
\t.uv-vtop {
\t\tvertical-align: top;
\t}
\tdiv + .uv-no-translated-revision {
\t\tdisplay: none;
\t}
\t@media screen and (min-width: 1100px) {
\t\t.uv-inner-section .uv-view .uv-ticket-action-bar .uv-ticket-action-bar-lt {
\t\t\twidth: auto;
\t\t}
\t\t.uv-inner-section .uv-view .uv-ticket-action-bar .uv-ticket-action-bar-rt {
\t\t\twidth: auto;
\t\t\tfloat: right;
\t\t}
\t\t.uv-rtl .uv-inner-section .uv-view .uv-ticket-action-bar .uv-ticket-action-bar-rt {
\t\t\tfloat: left;
\t\t}
\t}
\t</style>

\t<div class=\"uv-inner-section uv-article\">
        <div class=\"uv-aside uv-category\" style=\"overflow-x: hidden;";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "cookies", [], "any", false, false, false, 40) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "request", [], "any", false, false, false, 40), "cookies", [], "any", false, false, false, 40), "get", ["uv-asideView"], "method", false, false, false, 40))) {
            yield "display: none;";
        }
        yield "\">
\t\t    <div class=\"uv-main-info-block\">
\t\t\t\t<div class=\"uv-aside-head\">
\t\t\t\t\t<div class=\"uv-aside-title\">
\t\t\t\t\t\t<h6>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article"), "html", null, true);
        yield "</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-aside-back\">
\t\t\t\t\t\t<span onclick=\"window.location = '";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "headers", [], "any", false, false, false, 47), "get", ["referer"], "method", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "headers", [], "any", false, false, false, 47), "get", ["referer"], "method", false, false, false, 47), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_article_collection")));
        yield "'\"> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Aside Brick-->
\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<!--Ticket Actions-->
\t\t\t\t<div class=\"uv-aside-ticket-actions\">

\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<div class=\"uv-field-block\" id=\"categoryUpdate\">
\t\t\t\t\t\t\t<input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"category-filter-input\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left uv-width-100\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"uv-agents-list\">
\t\t\t\t\t\t\t\t\t";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 68
            yield "\t\t\t\t\t\t\t\t\t\t<li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 69), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-filtered-tags\">
\t\t\t\t\t\t\t\t";
        // line 78
        if ((isset($context["articleCategory"]) || array_key_exists("articleCategory", $context) ? $context["articleCategory"] : (function () { throw new RuntimeError('Variable "articleCategory" does not exist.', 78, $this->source); })())) {
            // line 79
            yield "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articleCategory"]) || array_key_exists("articleCategory", $context) ? $context["articleCategory"] : (function () { throw new RuntimeError('Variable "articleCategory" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 80
                yield "\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 80), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 81), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "\t\t\t\t\t\t\t\t";
        }
        // line 86
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Aside Brick-->
\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<!--Ticket Actions-->
\t\t\t\t<div class=\"uv-aside-ticket-actions\">
\t\t\t\t\t<div class=\"uv-aside-select\">
\t\t\t\t\t\t<label class=\"uv-aside-select-label\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 100, $this->source); })()), "status", [], "any", false, false, false, 100), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t";
        // line 101
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 101, $this->source); })()), "status", [], "any", false, false, false, 101) == 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true)));
        yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t<ul class=\"status\" data-action=\"status\">
\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Draft"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-aside-select\">
\t\t\t\t\t\t<label class=\"uv-aside-select-label\">";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Make as Starred"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 118, $this->source); })()), "stared", [], "any", false, false, false, 118), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 119, $this->source); })()), "stared", [], "any", false, false, false, 119) == 1)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes"), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"), "html", null, true)));
        yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stared"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t<ul class=\"stared\" data-action=\"stared\">
\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Aside Brick-->
\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<!--Ticket Actions-->
\t\t\t\t<div class=\"uv-aside-ticket-actions\">
\t\t\t\t\t<div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"tagUpdate\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left uv-width-100\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
\t\t\t\t\t\t\t\t\t\t<li class=\"press-enter-to-add\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Press Enter to add"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t<div class=\"uv-filtered-tags tag\">
\t\t\t\t\t\t\t";
        // line 161
        if ((isset($context["articleTags"]) || array_key_exists("articleTags", $context) ? $context["articleTags"] : (function () { throw new RuntimeError('Variable "articleTags" does not exist.', 161, $this->source); })())) {
            // line 162
            yield "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articleTags"]) || array_key_exists("articleTags", $context) ? $context["articleTags"] : (function () { throw new RuntimeError('Variable "articleTags" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 163
                yield "\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-tag\" href=\"#\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 163), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-tag\"><span class=\"uv-icon-remove-dark-before\"></span>";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 164), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            yield "\t\t\t\t\t\t\t";
        }
        // line 168
        yield "\t\t\t\t\t\t</div>
                    </div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<span class=\"uv-text-danger uv-cursor delete-article\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Article"), "html", null, true);
        yield "
\t\t\t</div>

        </div>

\t\t<div class=\"uv-view ";
        // line 180
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "request", [], "any", false, false, false, 180), "cookies", [], "any", false, false, false, 180) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "request", [], "any", false, false, false, 180), "cookies", [], "any", false, false, false, 180), "get", ["uv-asideView"], "method", false, false, false, 180))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<div class=\"uv-ticket-scroll-region uv-margin-0 ";
        // line 181
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "request", [], "any", false, false, false, 181), "cookies", [], "any", false, false, false, 181) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "request", [], "any", false, false, false, 181), "cookies", [], "any", false, false, false, 181), "get", ["uv-asideView"], "method", false, false, false, 181))) {
            yield "uv-aside-view-tv";
        }
        yield "\">
\t\t\t\t<div class=\"uv-ticket-action-bar\">
\t\t\t\t\t<div class=\"uv-ticket-action-bar-lt\">
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t\t<div class=\"uv-tabs\" id=\"article-section-tab\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li for=\"article-edit\" class=\"uv-tab-active\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article"), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t\t<li for=\"article-seo\" style=\"display:inline-block;\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEO"), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t\t<li for=\"article-history\" style=\"display:inline-block;\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Revisions"), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t\t<li for=\"article-related\" class=\"article-other-info\" style=\"display:inline-block;\">";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Related Articles"), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-ticket-action-bar-rt\">

\t\t\t\t\t\t<span class=\"uv-action-buttons\">
\t\t\t\t\t\t\t<a href=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 199, $this->source); })()), "slug", [], "any", false, false, false, 199)]), "html", null, true);
        yield "\" target=\"_blank\" type=\"button\" class=\"uv-btn-action uv-margin-right-5 uv-button-preview\" ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 199, $this->source); })()), "status", [], "any", false, false, false, 199)) ? ("") : ("disabled=\"disabled\""));
        yield " id=\"preview-link\">
\t\t\t\t\t\t\t\t<span class=\"uv-icon-eye-light\"></span> ";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-action uv-margin-right-5\" id=\"preview-article\">
\t\t\t\t\t\t\t\t<span class=\"uv-icon-eye-light\"></span> ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-action update-btn\">
\t\t\t\t\t\t\t\t<span class=\"uv-icon-publish-light\"></span> ";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form -->
\t\t\t\t<form method=\"post\" action=\"\" id=\"article-form\" style=\"width: 97%;\">
\t\t\t\t\t<div id=\"original-article\" class=\"article-instances\">
\t\t\t\t\t\t<div class=\"uv-tab-view uv-tab-view-active\" id=\"article-edit\">
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field\" type=\"text\" value=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 222, $this->source); })()), "name", [], "any", false, false, false, 222), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block uv-element-block-textarea\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Content"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block uv-margin-top-5\">
\t\t\t\t\t\t\t\t\t<textarea name=\"content\" class=\"uv-field\">";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 231, $this->source); })()), "content", [], "any", false, false, false, 231), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-seo\">
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"slug\" class=\"uv-field\" type=\"text\" value=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 242, $this->source); })()), "slug", [], "any", false, false, false, 242), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug is the url identity of this article. We will help you to create valid slug at time of typing."), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"metaTitle\" class=\"uv-field\" type=\"text\" value=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 252, $this->source); })()), "metaTitle", [], "any", false, false, false, 252), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title tags and meta descriptions are bits of HTML code in the header of a web page. They help search engines understand the content on a page. A page's title tag and meta description are usually shown whenever that page appears in search engine results"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Keywords"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"keywords\" class=\"uv-field\" type=\"text\" value=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 262, $this->source); })()), "keywords", [], "any", false, false, false, 262), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comma \",\" separated"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Description"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<textarea name=\"metaDescription\" class=\"uv-field\">";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 272, $this->source); })()), "metaDescription", [], "any", false, false, false, 272), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-history\">
\t\t\t\t\t\t\t<div class=\"uv-table uv-list-view\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-related\">
\t\t\t\t\t\t\t<div class=\"uv-element-block \">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block related\">
\t\t\t\t\t\t\t\t\t<input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"related\" id=\"related-filter-input\">
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left uv-width-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t\t\t<label>";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"uv-filter-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Start typing few charactors and add set of relevant article from the list"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-table uv-list-view\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<style>
\t\t.uv-revision-parent {
\t\t\tmargin-bottom: 20px;
\t\t\twidth: 100%;
\t\t\toverflow: hidden;
\t\t}
\t\t.uv-revision-left {
\t\t\tdisplay: inline-block;
\t\t\twidth: 40px;
\t\t\theight: 100%;
\t\t\tposition: absolute;
\t\t}
\t\t.uv-revision-right {
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tmargin-left: 40px;
\t\t\tborder-bottom: solid 1px #D3D3D3;
\t\t\tpadding-bottom: 20px;
\t\t}
\t\t.uv-revision-right div {
\t\t\tmargin-bottom: 3px;
\t\t}
\t\t.uv-revision-right div:nth-child(1) {
\t\t\tcolor: #737373;
\t\t}
\t\t.uv-inner-section.uv-article .uv-view .uv-ticket-action-bar {
\t\t\tmargin-top: 20px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t\t.uv-related {
\t\t\twidth: 100%;
\t\t\tborder-top: solid 1px #D3D3D3;
\t\t\tpadding: 10px 0px;
\t\t}
\t\t#article-related a.uv-btn-stroke.remove {
\t\t\tpadding: 2px 4px;
    \t\tmargin-right: 4px;
\t\t}
\t\t.uv-pop-up-box {
\t\t\toverflow: hidden;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 356
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

        // line 357
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<script id=\"article_related_list_item_tmp\" type=\"text/template\">
\t\t<div class=\"uv-related\">
\t\t\t<a class=\"uv-btn-tag remove-event-select remove\" data-id=\"<%= id %>\" data-article-id=\"<%= articleId %>\" href=\"#\">
\t\t\t\t<span class=\"uv-icon-remove-dark-box\"></span>
\t\t\t</a>
\t\t\t<%- name %>
\t\t</div>
    </script>

\t<script id=\"article_history_list_item_tmp\" type=\"text/template\">
\t\t<div class=\"uv-revision-parent\">
\t\t\t<div class=\"uv-revision-left\">
\t\t\t\t<% if (isCurrent) { %>
\t\t\t\t\t<span class=\"uv-icon-history uv-icon-history-active\"></span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<span class=\"uv-icon-history\"></span>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t\t<div class=\"uv-revision-right\">
\t\t\t\t<div>";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Revision"), "html", null, true);
        yield " #<%= id %>
\t\t\t\t\t<% if (isCurrent) { %>
\t\t\t\t\t\t<span>(";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published"), "html", null, true);
        yield ")</span>
\t\t\t\t\t<% } %>
\t\t\t\t</div>
\t\t\t\t<div><%- name %> ";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("updated the article"), "html", null, true);
        yield " <span class=\"timeago\" data-timestamp=\"<%= dateAdded.timestamp %>\"> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("on"), "html", null, true);
        yield " <%= dateAdded.format %></span></div>
\t\t\t\t<div class=\"uv-action-buttons\">
\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-small history-preview\" data-id=\"<%= id %>\">
\t\t\t\t\t\t";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview"), "html", null, true);
        yield "
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-small <% if (hasContent && !isCurrent){ %>history-restore<% } %>\"  <% if (isCurrent || !hasContent){ %>disabled=\"disabled\" <% } %>>
\t\t\t\t\t\t<% if (isCurrent) { %>
\t\t\t\t\t\t\t";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restored"), "html", null, true);
        yield "
\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
        yield "
\t\t\t\t\t\t<% } %>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </script>

\t<script id=\"article_preview_html\" type=\"text/template\">
\t\t<div class=\"uv-pop-up-overlay\" id=\"preview-modal\" style=\"display:block;\">
\t\t\t<div class=\"uv-pop-up-box uv-pop-up-wide\">
\t\t\t\t<span class=\"uv-pop-up-close\"></span>
\t\t\t\t<div class=\"uv-html-preview\" style=\"margin-bottom: 30px;\">
\t\t\t\t</div>
\t\t\t\t<div class=\"uv-pop-up-actions\">
\t\t\t\t\t<a href=\"#\" class=\"uv-btn cancel\">";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        yield "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </script>

\t<script id=\"article_history_view_html\" type=\"text/template\">
\t\t<div class=\"uv-pop-up-overlay\" id=\"preview-modal\" style=\"display:block;\">
\t\t\t<div class=\"uv-pop-up-box uv-pop-up-wide\">
\t\t\t\t<span class=\"uv-pop-up-close\"></span>
\t\t\t\t<div class=\"uv-html-preview\">
\t\t\t\t</div>
\t\t\t\t<div class=\"uv-pop-up-actions\">
\t\t\t\t\t<a href=\"#\" class=\"uv-btn uv-btn-error restore\">";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
        yield "</a>
\t\t\t\t\t<a href=\"#\" class=\"uv-btn cancel\">";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path_history = \"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_revision_article", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 428, $this->source); })()), "id", [], "any", false, false, false, 428)]), "html", null, true);
        yield "\"
\t\tvar path_related = \"";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_related_article_xhr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 429, $this->source); })()), "id", [], "any", false, false, false, 429)]), "html", null, true);
        yield "\"

\t\t\$.fn.serializeFormObject = function () {
\t\t\tvar o = {};
\t\t\tvar outputCopy = o;
\t\t\tvar a = this.serializeArray();
\t\t\tvar regex = /(\\w+)+/g;
\t\t\t\$.each(a, function (index, item) {
\t\t\t\tvar keys = item.name.match(regex);
\t\t\t\tkeys.forEach(function (key, localIndex) {
\t\t\t\t\tif (!outputCopy.hasOwnProperty(key)) {
\t\t\t\t\t\toutputCopy[key] = {};
\t\t\t\t\t}
\t\t\t\t\tif (localIndex == keys.length - 1) {
\t\t\t\t\t\toutputCopy[key] = isNaN(item.value)|| item.value == '' || item.value == null  ? item.value : +item.value;
\t\t\t\t\t}
\t\t\t\t\toutputCopy = outputCopy[key];
\t\t\t\t});
\t\t\t\toutputCopy = o;
\t\t\t});

\t\t\treturn o;
\t\t};

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ArticleForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn-action.update-btn' : \"saveArticle\",
\t\t\t\t\t'blur input': 'formChanged',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity',
                    'click .uv-filtered-tags .uv-btn-tag': 'removeEntity',
\t\t\t\t\t'click .delete-article' : 'confirmRemove'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.articleId = \"";
        // line 466
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 466, $this->source); })()), "request", [], "any", false, false, false, 466), "attributes", [], "any", false, false, false, 466), "get", ["id"], "method", false, false, false, 466), "html", null, true);
        yield "\";
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t},
                addEntity: function(e) {
                    let currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                    \tvar coreParent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    \tvar parent = coreParent.find(\".uv-field-block\");
                        parent.find(\"li:not(.uv-no-results)\").show();

                        if (parent.hasClass('related')) {
\t\t\t\t\t\t\tlet parentTab = parent.parents('#article-related');

\t\t\t\t\t\t\tif (!parentTab.find(\".uv-list-view a[data-article-id='\" + id + \"']\").length) {
\t\t\t\t\t\t\t\tvar data = {};
\t\t\t\t\t\t\t\tdata['ids'] = [this.articleId];
\t\t\t\t\t\t\t\tdata['actionType'] = 'relatedUpdate'
\t\t\t\t\t\t\t\tdata['entityId'] = id;
\t\t\t\t\t\t\t\tdata['action'] = 'add';
\t\t\t\t\t\t\t\tthis.articleEntityUpdate(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tvar inputElement = Backbone.\$('#tag-filter-input');
\t\t\t\t\t\t\tinputElement.removeClass('uv-field-error');
\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').find('.uv-field-message').remove();

\t\t\t\t\t\t\tinputElement.val('');

\t\t\t\t\t\t\tif (! coreParent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
\t\t\t\t\t\t\t\tlet html = '';
\t\t\t\t\t\t\t\tif (parent[0].id == 'tagUpdate') {
\t\t\t\t\t\t\t\t\thtml = `
\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-tag\" href=\"#\" data-id=\"\${id}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-tag\"><span class=\"uv-icon-remove-dark-before\"></span>\${currentElement.text()}</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t`;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\thtml = \"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\";
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tcoreParent.find('.uv-filtered-tags').append(html)
\t\t\t\t\t\t\t\tvar data = {};
\t\t\t\t\t\t\t\tdata['ids'] = [this.articleId];
\t\t\t\t\t\t\t\tdata['actionType'] = parent[0].id;
\t\t\t\t\t\t\t\tdata['entityId'] = id;
\t\t\t\t\t\t\t\tdata['action'] = 'add';
\t\t\t\t\t\t\t\tthis.articleEntityUpdate(data);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag with same name already exist"), "html", null, true);
        yield "</span>\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block').find(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove();

\t\t\t\t\tvar data = {};
\t\t\t\t\tdata['ids'] = [this.articleId];
\t\t\t\t\tdata['actionType'] = parent[0].id;
\t\t\t\t\tdata['entityId'] = \$(e.currentTarget).attr(\"data-id\");
\t\t\t\t\tdata['action'] = 'remove';
\t\t\t\t\tthis.articleEntityUpdate(data);
                },
\t\t\t\tarticleEntityUpdate : function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 535
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article_xhr");
        yield "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tif (data['actionType'] == 'relatedUpdate') {
\t\t\t\t\t\t\t\tarticleRelatedCollection.syncData();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (response.alertClass == \"success\") {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\tself.addErrors(response.errors);
\t\t\t\t\t\t\t}
                        },
                        error: function (xhr) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveArticle: function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\t\$(\".uv-tabs li\").removeClass('uv-tab-error')
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
\t\t\t\t\tlet formData = this.\$el.find('form#article-form').serializeObject();
\t\t\t        this.model.set(formData);
                    self = this;
\t\t\t\t\tvar contentNotHasError = this.validateForm(e);

\t\t\t        if (this.model.isValid(true) && contentNotHasError) {
\t\t\t\t\t\tformData['ids'] = [this.articleId];
\t\t\t\t\t\tformData['actionType'] = 'articleUpdate';
\t\t\t\t\t\tformData['content'] = tinyMCE.get('content').getContent();
\t\t\t\t\t\t";
        // line 583
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 583, $this->source); })()), "getLocales", [], "method", false, false, false, 583));
        foreach ($context['_seq'] as $context["localeCode"] => $context["localeName"]) {
            // line 584
            yield "\t\t\t\t\t\t\tvar localeType = '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["localeCode"], "html", null, true);
            yield "';
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['localeCode'], $context['localeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 586
        yield "\t\t\t\t\t\tthis.articleEntityUpdate(formData);
\t\t\t        } else {
                        \$('.uv-field-message').each(function(e) {
                            \$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").addClass('uv-tab-error')
                        });
                    }
\t\t\t\t},
                validateForm : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    formType = 'content';
                    form = \$('#article-form');
                    form.find('.uv-field-message').remove()
                    var html = \$('.uv-field').text();
                    if (app.appView.htmlText(html).trim().length != 0) {
\t\t\t\t\t\treturn true;
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    }
                },
                addErrors: function(jsonContext) {
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;

                    app.appView.openConfirmModal(this)
                },
                removeItem: function(e) {
                    var data = {};

                    data['actionType'] = \"delete\";

                    data['ids'] = [\"";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 621, $this->source); })()), "id", [], "any", false, false, false, 621), "html", null, true);
        yield "\"];
\t\t\t\t\tthis.articleEntityUpdate(data);

\t\t\t\t\tsetTimeout(function(){
                    \twindow.location = '";
        // line 625
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 625, $this->source); })()), "request", [], "any", false, false, false, 625), "headers", [], "any", false, false, false, 625), "get", ["referer"], "method", false, false, false, 625)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 625, $this->source); })()), "request", [], "any", false, false, false, 625), "headers", [], "any", false, false, false, 625), "get", ["referer"], "method", false, false, false, 625), "html", null, true)) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_article_collection")));
        yield "';
\t\t\t\t\t}, 1000);
                },
\t\t\t});

\t\t\tvar ArticleFullView = Backbone.View.extend({
\t\t\t\tel: \$('body'),
\t\t\t\tpreviewTemplate : _.template(\$(\"#article_preview_html\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click #preview-link': 'previewArticle',
\t\t\t\t\t'click #preview-article': 'renderArticlePreview',
\t\t\t\t\t'click #article-locale li': 'closeDropdown',
\t\t\t\t},
\t\t\t\tpreviewArticle: function(e) {
\t\t\t\t\tvar target = \$(e.target).closest('.uv-button-preview');
\t\t\t\t\tvar isDisabled = target.attr('disabled') ? true : false;
\t\t\t\t\tvar lang = \$('#article-locale').attr('data-value');
\t\t\t\t\tif (lang && !isDisabled) {
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\tvar langSpecificUrl = target.attr('href').replace('";
        // line 644
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 644, $this->source); })()), "request", [], "any", false, false, false, 644), "locale", [], "any", false, false, false, 644), "html", null, true);
        yield "', lang);
\t\t\t\t\t\twindow.open(langSpecificUrl);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticlePreview: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar article_content = tinyMCE.get('content').getContent();
 \t\t\t\t\tarticle_content = article_content.replace(\"<ol>\", \"<ul>\");
\t\t\t\t\tarticle_content = article_content.replace(\"</ol>\", \"</ul>\");
\t\t\t\t\t
\t\t\t\t\t\$('body').append(this.previewTemplate());
\t\t\t\t\t\$('body').find('#preview-modal .uv-html-preview').html('<h1 style=\"margin-bottom: 30px;\">' + articlemodel.attributes.name + '</h1>' + article_content);
\t\t\t\t\t
\t\t\t\t\t//\$('body').find('#preview-modal .uv-html-preview').html('<h1 style=\"margin-bottom: 30px;\">' + articlemodel.attributes.name + '</h1>' + tinyMCE.activeEditor.getContent());
\t\t\t\t},
\t\t\t});

            var ArticleModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '";
        // line 668
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain maximum 200 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^((?![\$%<]).)*\$',
\t\t\t\t\t\tmsg: '";
        // line 671
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have valid characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'metaTitle':[{
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain meta title maximum 200 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'keywords':[{
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '";
        // line 679
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain keywords maximum 200 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'slug': function(val, attr, computed) {
\t\t\t\t\t\tvar elSlug = \$(\"[name=\" + attr + \"]\");
\t\t\t\t\t\tvar elSlugValue = '';
\t\t\t\t\t\telSlug.val(elSlugValue = app.appView.convertToSlug(val))
\t\t\t\t\t
\t\t\t\t\t\tif (elSlugValue.trim() == ''){
\t\t\t\t\t\t\treturn '";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "';
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tif (elSlugValue.length > 100) {
\t\t\t\t\t\t\treturn '";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field slug contains maximum 100 characters only."), "html", null, true);
        yield "';
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
                urlRoot : \"";
        // line 695
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article_xhr");
        yield "\"
\t\t\t});

\t\t\tvar articlemodel = new ArticleModel({
                id : \"";
        // line 699
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 699, $this->source); })()), "id", [], "any", false, false, false, 699), "html", null, true);
        yield "\",
                name : \"";
        // line 700
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 700, $this->source); })()), "name", [], "any", false, false, false, 700), ["
" => " ", "" => " "]), "html", null, true);
        yield "\",
                slug : \"";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 701, $this->source); })()), "slug", [], "any", false, false, false, 701), "html", null, true);
        yield "\",
\t\t\t\tstatus: \"";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 702, $this->source); })()), "status", [], "any", false, false, false, 702), "html", null, true);
        yield "\",
\t\t\t\tstared: \"";
        // line 703
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 703, $this->source); })()), "stared", [], "any", false, false, false, 703), "html", null, true);
        yield "\",
\t\t\t})

\t\t\tarticleForm = new ArticleForm({
                el: '.uv-paper',
\t\t\t\t//el : \$(\".uv-aside.uv-category\"),
\t\t\t\tmodel : articlemodel
\t\t\t});

\t\t\tvar articleFullView = new ArticleFullView();

            var ArticleHistoryModel = Backbone.Model.extend({
                urlRoot : path_history
\t\t\t});

\t\t\tvar ArticleHistoryCollection = AppCollection.extend({
\t\t\t\tmodel : ArticleHistoryModel,
\t\t\t\turl : path_history,
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.syncData();
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar articleHistoryListView = new ArticleHistoryList();

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

\t\t\tvar ArticleHistoryItem = Backbone.View.extend({
\t\t\t\ttagName : \"div\",
\t\t\t\ttemplate : _.template(\$(\"#article_history_list_item_tmp\").html()),
\t\t\t\tpreviewTemplate : _.template(\$(\"#article_history_view_html\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .history-preview' : \"preview\",
\t\t\t\t\t'click .history-restore' : \"restore\",
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tvar tinymceContent = `";
        // line 761
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 761, $this->source); })()), "content", [], "any", false, false, false, 761);
        yield "`;
\t\t\t\t\tthis.\$el.html(this.template(\$.extend(this.model.toJSON(), {
\t\t\t\t\t\tisCurrent: (this.model.attributes.content.trim() == tinymceContent ? true : false),
\t\t\t\t\t\thasContent: (this.model.attributes.content.trim().length ? true : false)
\t\t\t\t\t}) ));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tarticleHistoryCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tpreview: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\t\$('body').append(this.previewTemplate());

\t\t\t\t\tif (this.model.attributes.content.trim().length) {
\t\t\t\t\t\t\$('body').find('#preview-modal .uv-html-preview').html(this.model.attributes.content);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('body').find('#preview-modal .uv-html-preview').html(
\t\t\t\t\t\t\t`
\t\t\t\t\t\t\t\t<h2>";
        // line 784
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops"), "html", null, true);
        yield "</h2>
\t\t\t\t\t\t\t\t<p>";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sorry, there are nothing to display."), "html", null, true);
        yield "</p>
\t\t\t\t\t\t\t`
\t\t\t\t\t\t);
\t\t\t\t\t\t\$('body').find('#preview-modal .restore').attr('disabled', 'disabled');
\t\t\t\t\t\t\$('body').find('#preview-modal .uv-btn.uv-btn-error').removeClass('restore');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trestore: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\tformData = {};
\t\t\t\t\tformData['ids'] = ['";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 795, $this->source); })()), "id", [], "any", false, false, false, 795), "html", null, true);
        yield "'];
\t\t\t\t\tformData['actionType'] = 'contentUpdate';
\t\t\t\t\tformData['content'] = this.model.attributes.content;
\t\t\t\t\ttinyMCE.get('content').setContent(this.model.attributes.content)
\t\t\t\t\tarticleForm.articleEntityUpdate(formData);
\t\t\t\t\tarticleHistoryCollection.syncData();
\t\t\t\t}
\t\t\t});

\t\t\tvar ArticleHistoryList = Backbone.View.extend({
\t\t\t\tel : \$(\"#article-history .uv-list-view\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"div\").remove();
\t\t\t\t\tif (articleHistoryCollection.length) {
\t\t\t\t\t\t_.each(articleHistoryCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderArticle(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t\tapp.appView.relativeTime()
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<div class='uv-text-center'>";
        // line 817
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</div>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticle : function (item) {
\t\t\t\t\tvar articleHistoryItem = new ArticleHistoryItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(articleHistoryItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tarticleHistoryCollection = new ArticleHistoryCollection();

            var ArticleRelatedModel = Backbone.Model.extend({
                urlRoot : path_related
\t\t\t});

\t\t\tvar ArticleRelatedCollection = AppCollection.extend({
\t\t\t\tmodel : ArticleRelatedModel,
\t\t\t\turl : path_related,
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.syncData();
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar articleRelatedListView = new ArticleRelatedList();

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

\t\t\tvar ArticleRelatedItem = Backbone.View.extend({
\t\t\t\ttagName : \"div\",
\t\t\t\ttemplate : _.template(\$(\"#article_related_list_item_tmp\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .remove' : \"remove\",
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tremove: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\tlet formData = {};
\t\t\t\t\tformData['ids'] = [\"";
        // line 882
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 882, $this->source); })()), "id", [], "any", false, false, false, 882), "html", null, true);
        yield "\"];
\t\t\t\t\tformData['actionType'] = 'relatedUpdate';
\t\t\t\t\tformData['action'] = 'remove';
\t\t\t\t\tformData['entityId'] = this.model.id;
\t\t\t\t\tarticleForm.articleEntityUpdate(formData);

\t\t\t\t\t\$(e.target).parent().parent().remove();
\t\t\t\t}
\t\t\t});

\t\t\tvar ArticleRelatedList = Backbone.View.extend({
\t\t\t\tel : \$(\"#article-related .uv-list-view\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"div\").remove();
\t\t\t\t\tif (articleRelatedCollection.length) {
\t\t\t\t\t\t_.each(articleRelatedCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderArticle(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t\tapp.appView.relativeTime()
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<div>";
        // line 905
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</div>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticle : function (item) {
\t\t\t\t\tvar articleRelatedItem = new ArticleRelatedItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(articleRelatedItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tarticleRelatedCollection = new ArticleRelatedCollection();

\t\t\tvar TagList = Backbone.View.extend({
                el : \$(\"#tagUpdate\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                },
                addTag : function(e) {
\t\t\t\t\tvar inputElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tinputElement.removeClass('uv-field-error');
\t\t\t\t\tinputElement.parents('.uv-element-block').find('.uv-field-message').remove()
\t\t\t\t\tvar text = inputElement.val().trim();

\t\t\t\t\tif (e.which === 13 && text) {
\t\t\t\t\t\tif ((text.match(/^((?![!@#\$%^&*()<_+]).)*\$/))) {
\t\t\t\t\t\t\t\tif (text.length <= 25) {
\t\t\t\t\t\t\t\tlet existed = false;
\t\t\t\t\t\t\t\t\$('.uv-filtered-tags .uv-tag').each(function(key, el){
\t\t\t\t\t\t\t\t\tif (\$(el).text().toLowerCase() == text.toLowerCase())
\t\t\t\t\t\t\t\t\t\texisted = true;
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif (! existed) {
\t\t\t\t\t\t\t\t\tlet data = {};
\t\t\t\t\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\t\t\t\tdata['ids'] = [\"";
        // line 942
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 942, $this->source); })()), "id", [], "any", false, false, false, 942), "html", null, true);
        yield "\"];
\t\t\t\t\t\t\t\t\tdata['actionType'] = 'tagUpdate';
\t\t\t\t\t\t\t\t\tdata['entityId'] = \$(e.currentTarget).attr(\"data-id\");
\t\t\t\t\t\t\t\t\tdata['action'] = 'create';
\t\t\t\t\t\t\t\t\tdata['name'] = text;

\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\turl : \"";
        // line 949
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article_xhr");
        yield "\",
\t\t\t\t\t\t\t\t\t\ttype : 'POST',
\t\t\t\t\t\t\t\t\t\tdata : {data : data},
\t\t\t\t\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\t\t\t\t\tif (response.alertClass == \"success\") {
\t\t\t\t\t\t\t\t\t\t\t\tlet html = `
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-tag\" href=\"#\" data-id=\"\${response.tagId}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-tag\"><span class=\"uv-icon-remove-dark-before\"></span>\${response.tagName}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t`;
\t\t\t\t\t\t\t\t\t\t\t\t\$('.uv-filtered-tags.tag').append(html);
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tinputElement.val('');
\t\t\t\t\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\t\t\t\t\tif (xhr.responseJSON)
\t\t\t\t\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;

\t\t\t\t\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 980
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag with same name already exist"), "html", null, true);
        yield "</span>\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 984
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text length should be less than 25 characters"), "html", null, true);
        yield "</span>\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>";
        // line 988
        yield "Only character are allowed";
        yield "</span>\");
\t\t\t\t\t\t}
\t\t\t\t\t}
                },
            });

\t\t\tnew TagList({});

            var BodyView = Backbone.View.extend({
                el: 'body',
                events : {
\t\t\t\t\t'click #preview-modal .uv-pop-up-close' : \"removeModal\",
\t\t\t\t\t'click #preview-modal .uv-btn.cancel' : \"removeModal\",
\t\t\t\t\t'click #preview-modal .uv-btn.restore' : \"restore\",
\t\t\t\t},
\t\t\t\tremoveModal: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$(e.target).parents('#preview-modal').remove();
\t\t\t\t\t}, 500);
\t\t\t\t},
\t\t\t\trestore: function(e){
\t\t\t\t\te.preventDefault();

\t\t\t\t\tthis.removeModal(e);

\t\t\t\t\tformData = {};
\t\t\t\t\tformData['ids'] = ['";
        // line 1015
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 1015, $this->source); })()), "id", [], "any", false, false, false, 1015), "html", null, true);
        yield "'];
\t\t\t\t\tformData['actionType'] = 'contentUpdate';
\t\t\t\t\tformData['content'] = \$('#preview-modal .uv-html-preview').html();
\t\t\t\t\ttinyMCE.get('content').setContent(formData['content'])
\t\t\t\t\tarticleForm.articleEntityUpdate(formData);
\t\t\t\t\tarticleHistoryCollection.syncData();
\t\t\t\t},
\t\t\t\taddRelatedArticle: function(){
\t\t\t\t\tarticleRelatedCollection.syncData();
\t\t\t\t}
\t\t\t});
\t\t\tvar bodyView = new BodyView({});

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list:not(.uv-no-patch) li': 'editArticleProperty',
\t\t\t\t\t'input .uv-field-block input' : 'searchFilterOption',
                },
                editArticleProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
\t\t\t\t\tif (field == 'status') {
\t\t\t\t\t\tif (value == '1') {
\t\t\t\t\t\t\t\$('.uv-btn-action.uv-button-preview').removeAttr('disabled');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('.uv-btn-action.uv-button-preview').attr('disabled', 'disabled');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
                    if (uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
\t\t\t\t\t\tself = this;
                        this.model.save({ editType: field, value: value, id: self.model.id }, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if (xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');

                    if (jQuery.inArray(filterType, ['tag', 'related']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
\t\t\t\tloaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info, .press-enter-to-add)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    
\t\t\t\t\tif (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 1092
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        yield " ...\")
                        if (self.xhrReq)
                            self.xhrReq.abort();

\t\t\t\t\t\tlet filterType = currentElement.attr('data-filter-type');
\t\t\t\t\t\tlet path = (filterType == 'tag' ? \"";
        // line 1097
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_ticket_filter_options_xhr");
        yield "\" : \"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_article_collection_xhr");
        yield "\");
                        self.xhrReq = \$.ajax({
                            url : path,
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
\t\t\t\t\t\t\t\tif (parent.find('.uv-dropdown-list').length) {
\t\t\t\t\t\t\t\t\tparent.find('.uv-dropdown-list').show();
\t\t\t\t\t\t\t\t}
                                parent.find('.uv-filter-info').text(\"";
        // line 1109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").hide();

\t\t\t\t\t\t\t\tif (filterType == 'tag') {
\t\t\t\t\t\t\t\t\tif (response.length == 0) {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').show()
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').hide()
\t\t\t\t\t\t\t\t\t\tparent.find('.uv-no-results').hide();
\t\t\t\t\t\t\t\t\t\t_.each(response, function(item) {
\t\t\t\t\t\t\t\t\t\t\tparent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tif (response.results.length == 0) {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').hide()
\t\t\t\t\t\t\t\t\t\tparent.find('.uv-no-results').show()
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t_.each(response.results, function(item) {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').hide()
\t\t\t\t\t\t\t\t\t\tparent.find('.uv-no-results').hide();
\t\t\t\t\t\t\t\t\t\tif (item.id != ";
        // line 1129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 1129, $this->source); })()), "id", [], "any", false, false, false, 1129), "html", null, true);
        yield ")
\t\t\t\t\t\t\t\t\t\t\tparent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 1138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").show();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
\t\t\t\t\t\tparent.find('.uv-no-results').hide();
\t\t\t\t\t}
                },1000),
            });

\t\t\tvar pageView = new PageView({
\t\t\t\tmodel : articlemodel
\t\t\t});
\t\t});
\t</script>

\t";
        // line 1155
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        yield "

    <script>
\t\tvar toolbarOptions = sfTinyMce.options.toolbar;
        sfTinyMce.init({
\t\t\tselector: 'textarea[name*=\"content\"]',
\t\t\ttoolbar: toolbarOptions + ' | insert | styleselect | alignleft aligncenter alignright alignjustify | outdent indent | code | translate',
\t\t\tsetup: function (editor) {
                addTranslateButton(editor);
\t\t\t},
        });
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
        return "@UVDeskSupportCenter/Staff/Articles/articleForm.html.twig";
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
        return array (  1666 => 1155,  1646 => 1138,  1634 => 1129,  1611 => 1109,  1594 => 1097,  1586 => 1092,  1506 => 1015,  1476 => 988,  1469 => 984,  1462 => 980,  1428 => 949,  1418 => 942,  1378 => 905,  1352 => 882,  1284 => 817,  1259 => 795,  1246 => 785,  1242 => 784,  1216 => 761,  1155 => 703,  1151 => 702,  1147 => 701,  1142 => 700,  1138 => 699,  1131 => 695,  1124 => 691,  1117 => 687,  1106 => 679,  1099 => 675,  1092 => 671,  1086 => 668,  1080 => 665,  1056 => 644,  1034 => 625,  1027 => 621,  1005 => 602,  987 => 586,  978 => 584,  974 => 583,  923 => 535,  900 => 515,  848 => 466,  808 => 429,  804 => 428,  794 => 421,  790 => 420,  774 => 407,  756 => 392,  751 => 390,  744 => 386,  736 => 383,  730 => 380,  725 => 378,  700 => 357,  687 => 356,  623 => 302,  613 => 295,  607 => 292,  601 => 289,  593 => 284,  578 => 272,  573 => 270,  564 => 264,  559 => 262,  554 => 260,  545 => 254,  540 => 252,  535 => 250,  526 => 244,  521 => 242,  516 => 240,  504 => 231,  499 => 229,  489 => 222,  484 => 220,  469 => 208,  462 => 204,  455 => 200,  449 => 199,  437 => 190,  433 => 189,  429 => 188,  425 => 187,  414 => 181,  408 => 180,  400 => 175,  391 => 168,  388 => 167,  379 => 164,  374 => 163,  369 => 162,  367 => 161,  357 => 154,  351 => 151,  345 => 148,  339 => 145,  331 => 140,  314 => 126,  310 => 125,  305 => 123,  298 => 119,  294 => 118,  289 => 116,  278 => 108,  274 => 107,  269 => 105,  262 => 101,  258 => 100,  253 => 98,  239 => 86,  236 => 85,  226 => 81,  221 => 80,  216 => 79,  214 => 78,  206 => 73,  203 => 72,  194 => 69,  189 => 68,  185 => 67,  179 => 64,  171 => 59,  154 => 47,  148 => 44,  139 => 40,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}
\t{{ 'Article'|trans }}
{% endblock %}

{% block pageContent %}
\t<style>
\t.uv-tab-error {
\t\tborder-bottom: 3px solid #FF5656 !important;
\t}
\t.mce-menu-item.mce-disabled .mce-text {
\t\tcolor: #333;
\t}
\t.uv-field-block .uv-dropdown-list.uv-top-left, .uv-field-block .uv-dropdown-list.uv-top-right{
    \t/*top: -90px;
\t\tbottom: auto;*/
\t}
\t.uv-vtop {
\t\tvertical-align: top;
\t}
\tdiv + .uv-no-translated-revision {
\t\tdisplay: none;
\t}
\t@media screen and (min-width: 1100px) {
\t\t.uv-inner-section .uv-view .uv-ticket-action-bar .uv-ticket-action-bar-lt {
\t\t\twidth: auto;
\t\t}
\t\t.uv-inner-section .uv-view .uv-ticket-action-bar .uv-ticket-action-bar-rt {
\t\t\twidth: auto;
\t\t\tfloat: right;
\t\t}
\t\t.uv-rtl .uv-inner-section .uv-view .uv-ticket-action-bar .uv-ticket-action-bar-rt {
\t\t\tfloat: left;
\t\t}
\t}
\t</style>

\t<div class=\"uv-inner-section uv-article\">
        <div class=\"uv-aside uv-category\" style=\"overflow-x: hidden;{% if app.request.cookies and app.request.cookies.get('uv-asideView') %}display: none;{% endif %}\">
\t\t    <div class=\"uv-main-info-block\">
\t\t\t\t<div class=\"uv-aside-head\">
\t\t\t\t\t<div class=\"uv-aside-title\">
\t\t\t\t\t\t<h6>{{ 'Article'|trans }}</h6>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-aside-back\">
\t\t\t\t\t\t<span onclick=\"window.location = '{{ app.request.headers.get('referer') ? app.request.headers.get('referer') : path('helpdesk_member_knowledgebase_article_collection')}}'\"> {{ 'Back'|trans }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Aside Brick-->
\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<!--Ticket Actions-->
\t\t\t\t<div class=\"uv-aside-ticket-actions\">

\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Categories'|trans }}</label>
\t\t\t\t\t\t<div class=\"uv-field-block\" id=\"categoryUpdate\">
\t\t\t\t\t\t\t<input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"category-filter-input\">
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left uv-width-100\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Filter With'|trans }}</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"uv-agents-list\">
\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t<li data-id=\"{{category.id}}\">
\t\t\t\t\t\t\t\t\t\t\t{{category.name}}
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t{{ 'No result found'|trans }}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-filtered-tags\">
\t\t\t\t\t\t\t\t{% if articleCategory %}
\t\t\t\t\t\t\t\t\t{% for category in articleCategory %}
\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{ category.id }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ category.name }}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Aside Brick-->
\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<!--Ticket Actions-->
\t\t\t\t<div class=\"uv-aside-ticket-actions\">
\t\t\t\t\t<div class=\"uv-aside-select\">
\t\t\t\t\t\t<label class=\"uv-aside-select-label\">{{ 'Status'|trans }}</label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ article.status }}\">
\t\t\t\t\t\t\t\t{{ article.status == 1 ? 'Published'|trans : 'Draft'|trans  }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Status'|trans }}</label>
\t\t\t\t\t\t\t\t\t<ul class=\"status\" data-action=\"status\">
\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">{{ 'Published'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">{{ 'Draft'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-aside-select\">
\t\t\t\t\t\t<label class=\"uv-aside-select-label\">{{ 'Make as Starred'|trans }}</label>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"uv-aside-select-value uv-dropdown-other uv-aside-drop-icon\" data-id=\"{{ article.stared }}\">
\t\t\t\t\t\t\t\t{{ article.stared == 1 ? 'Yes'|trans : 'No'|trans  }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Stared'|trans }}</label>
\t\t\t\t\t\t\t\t\t<ul class=\"stared\" data-action=\"stared\">
\t\t\t\t\t\t\t\t\t\t<li data-index=\"1\"><a href=\"#\">{{ 'Yes'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t\t<li data-index=\"0\"><a href=\"#\">{{ 'No'|trans }}</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--Aside Brick-->
\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<!--Ticket Actions-->
\t\t\t\t<div class=\"uv-aside-ticket-actions\">
\t\t\t\t\t<div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tag'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"tagUpdate\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left uv-width-100\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            {{ 'Type atleast 2 letters'|trans }}
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
\t\t\t\t\t\t\t\t\t\t<li class=\"press-enter-to-add\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t{{ 'Press Enter to add'|trans }}
\t\t\t\t\t\t\t\t\t\t</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t<div class=\"uv-filtered-tags tag\">
\t\t\t\t\t\t\t{% if articleTags %}
\t\t\t\t\t\t\t\t{% for tag in articleTags %}
\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-tag\" href=\"#\" data-id=\"{{ tag.id }}\">
\t\t\t\t\t\t\t\t\t\t<span class=\"uv-tag\"><span class=\"uv-icon-remove-dark-before\"></span>{{ tag.name }}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
                    </div>

\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"uv-aside-brick\">
\t\t\t\t<span class=\"uv-text-danger uv-cursor delete-article\">{{ \"Delete Article\"|trans }}
\t\t\t</div>

        </div>

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<div class=\"uv-ticket-scroll-region uv-margin-0 {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view-tv{% endif %}\">
\t\t\t\t<div class=\"uv-ticket-action-bar\">
\t\t\t\t\t<div class=\"uv-ticket-action-bar-lt\">
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t\t<div class=\"uv-tabs\" id=\"article-section-tab\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li for=\"article-edit\" class=\"uv-tab-active\">{{ 'Article'|trans }}</li>
\t\t\t\t\t\t\t\t<li for=\"article-seo\" style=\"display:inline-block;\">{{ 'SEO'|trans }}</li>
\t\t\t\t\t\t\t\t<li for=\"article-history\" style=\"display:inline-block;\">{{ 'Revisions'|trans }}</li>
\t\t\t\t\t\t\t\t<li for=\"article-related\" class=\"article-other-info\" style=\"display:inline-block;\">{{ 'Related Articles'|trans }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-ticket-action-bar-rt\">

\t\t\t\t\t\t<span class=\"uv-action-buttons\">
\t\t\t\t\t\t\t<a href=\"{{path('helpdesk_knowledgebase_read_slug_article', {'slug': article.slug })}}\" target=\"_blank\" type=\"button\" class=\"uv-btn-action uv-margin-right-5 uv-button-preview\" {{ article.status ? '' : 'disabled=\"disabled\"'}} id=\"preview-link\">
\t\t\t\t\t\t\t\t<span class=\"uv-icon-eye-light\"></span> {{'View'|trans}}
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-action uv-margin-right-5\" id=\"preview-article\">
\t\t\t\t\t\t\t\t<span class=\"uv-icon-eye-light\"></span> {{'Preview'|trans}}
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-action update-btn\">
\t\t\t\t\t\t\t\t<span class=\"uv-icon-publish-light\"></span> {{'Update'|trans}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form -->
\t\t\t\t<form method=\"post\" action=\"\" id=\"article-form\" style=\"width: 97%;\">
\t\t\t\t\t<div id=\"original-article\" class=\"article-instances\">
\t\t\t\t\t\t<div class=\"uv-tab-view uv-tab-view-active\" id=\"article-edit\">
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Title'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field\" type=\"text\" value=\"{{ article.name }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block uv-element-block-textarea\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Content'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block uv-margin-top-5\">
\t\t\t\t\t\t\t\t\t<textarea name=\"content\" class=\"uv-field\">{{article.content}}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-seo\">
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Slug'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"slug\" class=\"uv-field\" type=\"text\" value=\"{{ article.slug }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{'Slug is the url identity of this article. We will help you to create valid slug at time of typing.'|trans}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Meta Title'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"metaTitle\" class=\"uv-field\" type=\"text\" value=\"{{ article.metaTitle }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{\"Title tags and meta descriptions are bits of HTML code in the header of a web page. They help search engines understand the content on a page. A page's title tag and meta description are usually shown whenever that page appears in search engine results\"|trans}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Meta Keywords'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"keywords\" class=\"uv-field\" type=\"text\" value=\"{{ article.keywords }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{'comma \",\" separated'|trans}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Meta Description'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<textarea name=\"metaDescription\" class=\"uv-field\">{{article.metaDescription}}</textarea>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-history\">
\t\t\t\t\t\t\t<div class=\"uv-table uv-list-view\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-related\">
\t\t\t\t\t\t\t<div class=\"uv-element-block \">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Article Title'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block related\">
\t\t\t\t\t\t\t\t\t<input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"related\" id=\"related-filter-input\">
\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left uv-width-100\">
\t\t\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t\t\t<label>{{ 'Filter With'|trans }}</label>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"uv-filter-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'Type atleast 2 letters'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ 'No result found'|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{'Start typing few charactors and add set of relevant article from the list'|trans}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-table uv-list-view\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<style>
\t\t.uv-revision-parent {
\t\t\tmargin-bottom: 20px;
\t\t\twidth: 100%;
\t\t\toverflow: hidden;
\t\t}
\t\t.uv-revision-left {
\t\t\tdisplay: inline-block;
\t\t\twidth: 40px;
\t\t\theight: 100%;
\t\t\tposition: absolute;
\t\t}
\t\t.uv-revision-right {
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tmargin-left: 40px;
\t\t\tborder-bottom: solid 1px #D3D3D3;
\t\t\tpadding-bottom: 20px;
\t\t}
\t\t.uv-revision-right div {
\t\t\tmargin-bottom: 3px;
\t\t}
\t\t.uv-revision-right div:nth-child(1) {
\t\t\tcolor: #737373;
\t\t}
\t\t.uv-inner-section.uv-article .uv-view .uv-ticket-action-bar {
\t\t\tmargin-top: 20px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t\t.uv-related {
\t\t\twidth: 100%;
\t\t\tborder-top: solid 1px #D3D3D3;
\t\t\tpadding: 10px 0px;
\t\t}
\t\t#article-related a.uv-btn-stroke.remove {
\t\t\tpadding: 2px 4px;
    \t\tmargin-right: 4px;
\t\t}
\t\t.uv-pop-up-box {
\t\t\toverflow: hidden;
\t\t}
\t</style>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<script id=\"article_related_list_item_tmp\" type=\"text/template\">
\t\t<div class=\"uv-related\">
\t\t\t<a class=\"uv-btn-tag remove-event-select remove\" data-id=\"<%= id %>\" data-article-id=\"<%= articleId %>\" href=\"#\">
\t\t\t\t<span class=\"uv-icon-remove-dark-box\"></span>
\t\t\t</a>
\t\t\t<%- name %>
\t\t</div>
    </script>

\t<script id=\"article_history_list_item_tmp\" type=\"text/template\">
\t\t<div class=\"uv-revision-parent\">
\t\t\t<div class=\"uv-revision-left\">
\t\t\t\t<% if (isCurrent) { %>
\t\t\t\t\t<span class=\"uv-icon-history uv-icon-history-active\"></span>
\t\t\t\t<% } else { %>
\t\t\t\t\t<span class=\"uv-icon-history\"></span>
\t\t\t\t<% } %>
\t\t\t</div>
\t\t\t<div class=\"uv-revision-right\">
\t\t\t\t<div>{{ \"Revision\"|trans }} #<%= id %>
\t\t\t\t\t<% if (isCurrent) { %>
\t\t\t\t\t\t<span>({{ \"Published\"|trans }})</span>
\t\t\t\t\t<% } %>
\t\t\t\t</div>
\t\t\t\t<div><%- name %> {{ \"updated the article\"|trans }} <span class=\"timeago\" data-timestamp=\"<%= dateAdded.timestamp %>\"> {{ \"on\"|trans }} <%= dateAdded.format %></span></div>
\t\t\t\t<div class=\"uv-action-buttons\">
\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-small history-preview\" data-id=\"<%= id %>\">
\t\t\t\t\t\t{{ \"Preview\"|trans }}
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-small <% if (hasContent && !isCurrent){ %>history-restore<% } %>\"  <% if (isCurrent || !hasContent){ %>disabled=\"disabled\" <% } %>>
\t\t\t\t\t\t<% if (isCurrent) { %>
\t\t\t\t\t\t\t{{ \"Restored\"|trans }}
\t\t\t\t\t\t<% } else { %>
\t\t\t\t\t\t\t{{ \"Restore\"|trans }}
\t\t\t\t\t\t<% } %>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </script>

\t<script id=\"article_preview_html\" type=\"text/template\">
\t\t<div class=\"uv-pop-up-overlay\" id=\"preview-modal\" style=\"display:block;\">
\t\t\t<div class=\"uv-pop-up-box uv-pop-up-wide\">
\t\t\t\t<span class=\"uv-pop-up-close\"></span>
\t\t\t\t<div class=\"uv-html-preview\" style=\"margin-bottom: 30px;\">
\t\t\t\t</div>
\t\t\t\t<div class=\"uv-pop-up-actions\">
\t\t\t\t\t<a href=\"#\" class=\"uv-btn cancel\">{{ 'Close'|trans }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </script>

\t<script id=\"article_history_view_html\" type=\"text/template\">
\t\t<div class=\"uv-pop-up-overlay\" id=\"preview-modal\" style=\"display:block;\">
\t\t\t<div class=\"uv-pop-up-box uv-pop-up-wide\">
\t\t\t\t<span class=\"uv-pop-up-close\"></span>
\t\t\t\t<div class=\"uv-html-preview\">
\t\t\t\t</div>
\t\t\t\t<div class=\"uv-pop-up-actions\">
\t\t\t\t\t<a href=\"#\" class=\"uv-btn uv-btn-error restore\">{{ 'Restore'|trans }}</a>
\t\t\t\t\t<a href=\"#\" class=\"uv-btn cancel\">{{ 'Cancel'|trans }}</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    </script>

\t<script type=\"text/javascript\">
\t\tvar path_history = \"{{ path('helpdesk_member_knowledgebase_revision_article', {'id': article.id }) }}\"
\t\tvar path_related = \"{{ path('helpdesk_member_knowledgebase_related_article_xhr', {'id': article.id }) }}\"

\t\t\$.fn.serializeFormObject = function () {
\t\t\tvar o = {};
\t\t\tvar outputCopy = o;
\t\t\tvar a = this.serializeArray();
\t\t\tvar regex = /(\\w+)+/g;
\t\t\t\$.each(a, function (index, item) {
\t\t\t\tvar keys = item.name.match(regex);
\t\t\t\tkeys.forEach(function (key, localIndex) {
\t\t\t\t\tif (!outputCopy.hasOwnProperty(key)) {
\t\t\t\t\t\toutputCopy[key] = {};
\t\t\t\t\t}
\t\t\t\t\tif (localIndex == keys.length - 1) {
\t\t\t\t\t\toutputCopy[key] = isNaN(item.value)|| item.value == '' || item.value == null  ? item.value : +item.value;
\t\t\t\t\t}
\t\t\t\t\toutputCopy = outputCopy[key];
\t\t\t\t});
\t\t\t\toutputCopy = o;
\t\t\t});

\t\t\treturn o;
\t\t};

\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ArticleForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn-action.update-btn' : \"saveArticle\",
\t\t\t\t\t'blur input': 'formChanged',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity',
                    'click .uv-filtered-tags .uv-btn-tag': 'removeEntity',
\t\t\t\t\t'click .delete-article' : 'confirmRemove'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.articleId = \"{{app.request.attributes.get('id')}}\";
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t},
                addEntity: function(e) {
                    let currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                    \tvar coreParent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    \tvar parent = coreParent.find(\".uv-field-block\");
                        parent.find(\"li:not(.uv-no-results)\").show();

                        if (parent.hasClass('related')) {
\t\t\t\t\t\t\tlet parentTab = parent.parents('#article-related');

\t\t\t\t\t\t\tif (!parentTab.find(\".uv-list-view a[data-article-id='\" + id + \"']\").length) {
\t\t\t\t\t\t\t\tvar data = {};
\t\t\t\t\t\t\t\tdata['ids'] = [this.articleId];
\t\t\t\t\t\t\t\tdata['actionType'] = 'relatedUpdate'
\t\t\t\t\t\t\t\tdata['entityId'] = id;
\t\t\t\t\t\t\t\tdata['action'] = 'add';
\t\t\t\t\t\t\t\tthis.articleEntityUpdate(data);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tvar inputElement = Backbone.\$('#tag-filter-input');
\t\t\t\t\t\t\tinputElement.removeClass('uv-field-error');
\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').find('.uv-field-message').remove();

\t\t\t\t\t\t\tinputElement.val('');

\t\t\t\t\t\t\tif (! coreParent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
\t\t\t\t\t\t\t\tlet html = '';
\t\t\t\t\t\t\t\tif (parent[0].id == 'tagUpdate') {
\t\t\t\t\t\t\t\t\thtml = `
\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-tag\" href=\"#\" data-id=\"\${id}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-tag\"><span class=\"uv-icon-remove-dark-before\"></span>\${currentElement.text()}</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t`;
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\thtml = \"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\";
\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\tcoreParent.find('.uv-filtered-tags').append(html)
\t\t\t\t\t\t\t\tvar data = {};
\t\t\t\t\t\t\t\tdata['ids'] = [this.articleId];
\t\t\t\t\t\t\t\tdata['actionType'] = parent[0].id;
\t\t\t\t\t\t\t\tdata['entityId'] = id;
\t\t\t\t\t\t\t\tdata['action'] = 'add';
\t\t\t\t\t\t\t\tthis.articleEntityUpdate(data);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Tag with same name already exist'|trans }}</span>\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block').find(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove();

\t\t\t\t\tvar data = {};
\t\t\t\t\tdata['ids'] = [this.articleId];
\t\t\t\t\tdata['actionType'] = parent[0].id;
\t\t\t\t\tdata['entityId'] = \$(e.currentTarget).attr(\"data-id\");
\t\t\t\t\tdata['action'] = 'remove';
\t\t\t\t\tthis.articleEntityUpdate(data);
                },
\t\t\t\tarticleEntityUpdate : function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_knowledgebase_update_article_xhr') }}\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tif (data['actionType'] == 'relatedUpdate') {
\t\t\t\t\t\t\t\tarticleRelatedCollection.syncData();
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (response.alertClass == \"success\") {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\tself.addErrors(response.errors);
\t\t\t\t\t\t\t}
                        },
                        error: function (xhr) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if (xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                        }
                    });
                },
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveArticle: function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\t\$(\".uv-tabs li\").removeClass('uv-tab-error')
                    currentElement = Backbone.\$(e.currentTarget);
                    this.model.clear();
\t\t\t\t\tlet formData = this.\$el.find('form#article-form').serializeObject();
\t\t\t        this.model.set(formData);
                    self = this;
\t\t\t\t\tvar contentNotHasError = this.validateForm(e);

\t\t\t        if (this.model.isValid(true) && contentNotHasError) {
\t\t\t\t\t\tformData['ids'] = [this.articleId];
\t\t\t\t\t\tformData['actionType'] = 'articleUpdate';
\t\t\t\t\t\tformData['content'] = tinyMCE.get('content').getContent();
\t\t\t\t\t\t{% for localeCode, localeName in uvdesk_service.getLocales() %}
\t\t\t\t\t\t\tvar localeType = '{{ localeCode }}';
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\tthis.articleEntityUpdate(formData);
\t\t\t        } else {
                        \$('.uv-field-message').each(function(e) {
                            \$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").addClass('uv-tab-error')
                        });
                    }
\t\t\t\t},
                validateForm : function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    formType = 'content';
                    form = \$('#article-form');
                    form.find('.uv-field-message').remove()
                    var html = \$('.uv-field').text();
                    if (app.appView.htmlText(html).trim().length != 0) {
\t\t\t\t\t\treturn true;
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    }
                },
                addErrors: function(jsonContext) {
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;

                    app.appView.openConfirmModal(this)
                },
                removeItem: function(e) {
                    var data = {};

                    data['actionType'] = \"delete\";

                    data['ids'] = [\"{{article.id}}\"];
\t\t\t\t\tthis.articleEntityUpdate(data);

\t\t\t\t\tsetTimeout(function(){
                    \twindow.location = '{{ app.request.headers.get('referer') ? app.request.headers.get('referer') : path('helpdesk_member_knowledgebase_article_collection')}}';
\t\t\t\t\t}, 1000);
                },
\t\t\t});

\t\t\tvar ArticleFullView = Backbone.View.extend({
\t\t\t\tel: \$('body'),
\t\t\t\tpreviewTemplate : _.template(\$(\"#article_preview_html\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click #preview-link': 'previewArticle',
\t\t\t\t\t'click #preview-article': 'renderArticlePreview',
\t\t\t\t\t'click #article-locale li': 'closeDropdown',
\t\t\t\t},
\t\t\t\tpreviewArticle: function(e) {
\t\t\t\t\tvar target = \$(e.target).closest('.uv-button-preview');
\t\t\t\t\tvar isDisabled = target.attr('disabled') ? true : false;
\t\t\t\t\tvar lang = \$('#article-locale').attr('data-value');
\t\t\t\t\tif (lang && !isDisabled) {
\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\tvar langSpecificUrl = target.attr('href').replace('{{ app.request.locale }}', lang);
\t\t\t\t\t\twindow.open(langSpecificUrl);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticlePreview: function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar article_content = tinyMCE.get('content').getContent();
 \t\t\t\t\tarticle_content = article_content.replace(\"<ol>\", \"<ul>\");
\t\t\t\t\tarticle_content = article_content.replace(\"</ol>\", \"</ul>\");
\t\t\t\t\t
\t\t\t\t\t\$('body').append(this.previewTemplate());
\t\t\t\t\t\$('body').find('#preview-modal .uv-html-preview').html('<h1 style=\"margin-bottom: 30px;\">' + articlemodel.attributes.name + '</h1>' + article_content);
\t\t\t\t\t
\t\t\t\t\t//\$('body').find('#preview-modal .uv-html-preview').html('<h1 style=\"margin-bottom: 30px;\">' + articlemodel.attributes.name + '</h1>' + tinyMCE.activeEditor.getContent());
\t\t\t\t},
\t\t\t});

            var ArticleModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '{{ \"This field contain maximum 200 characters only\"|trans }}'
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^((?![\$%<]).)*\$',
\t\t\t\t\t\tmsg: '{{ \"This field must have valid characters only\"|trans }}'
\t\t\t\t\t}],
\t\t\t\t\t'metaTitle':[{
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '{{ \"This field contain meta title maximum 200 characters only\"|trans }}'
\t\t\t\t\t}],
\t\t\t\t\t'keywords':[{
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '{{ \"This field contain keywords maximum 200 characters only\"|trans }}'
\t\t\t\t\t}],
\t\t\t\t\t'slug': function(val, attr, computed) {
\t\t\t\t\t\tvar elSlug = \$(\"[name=\" + attr + \"]\");
\t\t\t\t\t\tvar elSlugValue = '';
\t\t\t\t\t\telSlug.val(elSlugValue = app.appView.convertToSlug(val))
\t\t\t\t\t
\t\t\t\t\t\tif (elSlugValue.trim() == ''){
\t\t\t\t\t\t\treturn '{{ \"This field is mandatory\"|trans }}';
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tif (elSlugValue.length > 100) {
\t\t\t\t\t\t\treturn '{{ \"This field slug contains maximum 100 characters only.\"|trans }}';
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
                urlRoot : \"{{ path('helpdesk_member_knowledgebase_update_article_xhr') }}\"
\t\t\t});

\t\t\tvar articlemodel = new ArticleModel({
                id : \"{{ article.id }}\",
                name : \"{{ article.name|replace({\"\\n\":' ', \"\\r\":' '}) }}\",
                slug : \"{{ article.slug }}\",
\t\t\t\tstatus: \"{{ article.status }}\",
\t\t\t\tstared: \"{{ article.stared }}\",
\t\t\t})

\t\t\tarticleForm = new ArticleForm({
                el: '.uv-paper',
\t\t\t\t//el : \$(\".uv-aside.uv-category\"),
\t\t\t\tmodel : articlemodel
\t\t\t});

\t\t\tvar articleFullView = new ArticleFullView();

            var ArticleHistoryModel = Backbone.Model.extend({
                urlRoot : path_history
\t\t\t});

\t\t\tvar ArticleHistoryCollection = AppCollection.extend({
\t\t\t\tmodel : ArticleHistoryModel,
\t\t\t\turl : path_history,
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.syncData();
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar articleHistoryListView = new ArticleHistoryList();

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

\t\t\tvar ArticleHistoryItem = Backbone.View.extend({
\t\t\t\ttagName : \"div\",
\t\t\t\ttemplate : _.template(\$(\"#article_history_list_item_tmp\").html()),
\t\t\t\tpreviewTemplate : _.template(\$(\"#article_history_view_html\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .history-preview' : \"preview\",
\t\t\t\t\t'click .history-restore' : \"restore\",
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tvar tinymceContent = `{{ article.content|raw }}`;
\t\t\t\t\tthis.\$el.html(this.template(\$.extend(this.model.toJSON(), {
\t\t\t\t\t\tisCurrent: (this.model.attributes.content.trim() == tinymceContent ? true : false),
\t\t\t\t\t\thasContent: (this.model.attributes.content.trim().length ? true : false)
\t\t\t\t\t}) ));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tunrender : function(response) {
\t\t\t\t\tif (response.alertMessage != undefined) {
\t\t\t\t\t\tarticleHistoryCollection.syncData();
\t\t\t\t\t\tapp.appView.renderResponseAlert(response)
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tpreview: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\t\$('body').append(this.previewTemplate());

\t\t\t\t\tif (this.model.attributes.content.trim().length) {
\t\t\t\t\t\t\$('body').find('#preview-modal .uv-html-preview').html(this.model.attributes.content);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('body').find('#preview-modal .uv-html-preview').html(
\t\t\t\t\t\t\t`
\t\t\t\t\t\t\t\t<h2>{{'Oops'|trans}}</h2>
\t\t\t\t\t\t\t\t<p>{{'Sorry, there are nothing to display.'|trans}}</p>
\t\t\t\t\t\t\t`
\t\t\t\t\t\t);
\t\t\t\t\t\t\$('body').find('#preview-modal .restore').attr('disabled', 'disabled');
\t\t\t\t\t\t\$('body').find('#preview-modal .uv-btn.uv-btn-error').removeClass('restore');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trestore: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\tformData = {};
\t\t\t\t\tformData['ids'] = ['{{article.id}}'];
\t\t\t\t\tformData['actionType'] = 'contentUpdate';
\t\t\t\t\tformData['content'] = this.model.attributes.content;
\t\t\t\t\ttinyMCE.get('content').setContent(this.model.attributes.content)
\t\t\t\t\tarticleForm.articleEntityUpdate(formData);
\t\t\t\t\tarticleHistoryCollection.syncData();
\t\t\t\t}
\t\t\t});

\t\t\tvar ArticleHistoryList = Backbone.View.extend({
\t\t\t\tel : \$(\"#article-history .uv-list-view\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"div\").remove();
\t\t\t\t\tif (articleHistoryCollection.length) {
\t\t\t\t\t\t_.each(articleHistoryCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderArticle(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t\tapp.appView.relativeTime()
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<div class='uv-text-center'>{% trans %}No Record Found{% endtrans %}</div>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticle : function (item) {
\t\t\t\t\tvar articleHistoryItem = new ArticleHistoryItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(articleHistoryItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tarticleHistoryCollection = new ArticleHistoryCollection();

            var ArticleRelatedModel = Backbone.Model.extend({
                urlRoot : path_related
\t\t\t});

\t\t\tvar ArticleRelatedCollection = AppCollection.extend({
\t\t\t\tmodel : ArticleRelatedModel,
\t\t\t\turl : path_related,
\t\t\t\tfilterParameters : {
\t\t\t\t\t\"isActive\" : \"\",
\t\t\t\t\t\"search\" : \"\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.syncData();
\t\t\t\t},
\t\t\t\tparseRecords: function (resp, options) {
\t\t\t\t\treturn resp;
\t\t\t\t},
\t\t\t\tsyncData : function() {
\t\t\t\t\tapp.appView.showLoader();
\t\t\t\t\tthis.fetch({
\t\t\t\t\t\tdata : this.getValidParameters(),
\t\t\t\t\t\treset: true,
\t\t\t\t\t\tsuccess: function(model, response) {
\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\tvar articleRelatedListView = new ArticleRelatedList();

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

\t\t\tvar ArticleRelatedItem = Backbone.View.extend({
\t\t\t\ttagName : \"div\",
\t\t\t\ttemplate : _.template(\$(\"#article_related_list_item_tmp\").html()),
\t\t\t\tevents: {
\t\t\t\t\t'click .remove' : \"remove\",
\t\t\t\t},
\t\t\t\trender : function() {
\t\t\t\t\tthis.\$el.html(this.template(this.model.toJSON()));

\t\t\t\t\treturn this;
\t\t\t\t},
\t\t\t\tremove: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\tlet formData = {};
\t\t\t\t\tformData['ids'] = [\"{{article.id}}\"];
\t\t\t\t\tformData['actionType'] = 'relatedUpdate';
\t\t\t\t\tformData['action'] = 'remove';
\t\t\t\t\tformData['entityId'] = this.model.id;
\t\t\t\t\tarticleForm.articleEntityUpdate(formData);

\t\t\t\t\t\$(e.target).parent().parent().remove();
\t\t\t\t}
\t\t\t});

\t\t\tvar ArticleRelatedList = Backbone.View.extend({
\t\t\t\tel : \$(\"#article-related .uv-list-view\"),
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.render();
\t\t\t\t},
\t\t\t\trender : function () {
\t\t\t\t\tthis.\$el.find(\"div\").remove();
\t\t\t\t\tif (articleRelatedCollection.length) {
\t\t\t\t\t\t_.each(articleRelatedCollection.models, function (item) {
\t\t\t\t\t\t\tthis.renderArticle(item);
\t\t\t\t\t\t}, this);
\t\t\t\t\t\tapp.appView.relativeTime()
\t\t\t\t\t} else {
\t\t\t\t\t\tthis.\$el.append(\"<div>{% trans %}No Record Found{% endtrans %}</div>\")
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\trenderArticle : function (item) {
\t\t\t\t\tvar articleRelatedItem = new ArticleRelatedItem({
\t\t\t\t\t\tmodel: item
\t\t\t\t\t});
\t\t\t\t\tthis.\$el.append(articleRelatedItem.render().el);
\t\t\t\t}
\t\t\t});

\t\t\tarticleRelatedCollection = new ArticleRelatedCollection();

\t\t\tvar TagList = Backbone.View.extend({
                el : \$(\"#tagUpdate\"),
                events : {
                    'keypress .uv-field' : 'addTag',
                },
                addTag : function(e) {
\t\t\t\t\tvar inputElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tinputElement.removeClass('uv-field-error');
\t\t\t\t\tinputElement.parents('.uv-element-block').find('.uv-field-message').remove()
\t\t\t\t\tvar text = inputElement.val().trim();

\t\t\t\t\tif (e.which === 13 && text) {
\t\t\t\t\t\tif ((text.match(/^((?![!@#\$%^&*()<_+]).)*\$/))) {
\t\t\t\t\t\t\t\tif (text.length <= 25) {
\t\t\t\t\t\t\t\tlet existed = false;
\t\t\t\t\t\t\t\t\$('.uv-filtered-tags .uv-tag').each(function(key, el){
\t\t\t\t\t\t\t\t\tif (\$(el).text().toLowerCase() == text.toLowerCase())
\t\t\t\t\t\t\t\t\t\texisted = true;
\t\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tif (! existed) {
\t\t\t\t\t\t\t\t\tlet data = {};
\t\t\t\t\t\t\t\t\tapp.appView.showLoader();

\t\t\t\t\t\t\t\t\tdata['ids'] = [\"{{article.id}}\"];
\t\t\t\t\t\t\t\t\tdata['actionType'] = 'tagUpdate';
\t\t\t\t\t\t\t\t\tdata['entityId'] = \$(e.currentTarget).attr(\"data-id\");
\t\t\t\t\t\t\t\t\tdata['action'] = 'create';
\t\t\t\t\t\t\t\t\tdata['name'] = text;

\t\t\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\t\t\turl : \"{{ path('helpdesk_member_knowledgebase_update_article_xhr') }}\",
\t\t\t\t\t\t\t\t\t\ttype : 'POST',
\t\t\t\t\t\t\t\t\t\tdata : {data : data},
\t\t\t\t\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\t\t\t\t\tsuccess: function (response) {
\t\t\t\t\t\t\t\t\t\t\tif (response.alertClass == \"success\") {
\t\t\t\t\t\t\t\t\t\t\t\tlet html = `
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-tag\" href=\"#\" data-id=\"\${response.tagId}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-tag\"><span class=\"uv-icon-remove-dark-before\"></span>\${response.tagName}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t`;
\t\t\t\t\t\t\t\t\t\t\t\t\$('.uv-filtered-tags.tag').append(html);
\t\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t\tinputElement.val('');
\t\t\t\t\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t\terror: function (model, xhr, options) {
\t\t\t\t\t\t\t\t\t\t\tif (url = xhr.getResponseHeader('Location'))
\t\t\t\t\t\t\t\t\t\t\t\twindow.location = url;
\t\t\t\t\t\t\t\t\t\t\tvar response = warningResponse;
\t\t\t\t\t\t\t\t\t\t\tif (xhr.responseJSON)
\t\t\t\t\t\t\t\t\t\t\t\tresponse = xhr.responseJSON;

\t\t\t\t\t\t\t\t\t\t\tapp.appView.hideLoader();
\t\t\t\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Tag with same name already exist'|trans }}</span>\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Text length should be less than 25 characters'|trans }}</span>\");
\t\t\t\t\t\t\t}
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tinputElement.addClass('uv-field-error');
\t\t\t\t\t\t\tinputElement.parents('.uv-element-block').append(\"<span class='uv-field-message'>{{ 'Only character are allowed' }}</span>\");
\t\t\t\t\t\t}
\t\t\t\t\t}
                },
            });

\t\t\tnew TagList({});

            var BodyView = Backbone.View.extend({
                el: 'body',
                events : {
\t\t\t\t\t'click #preview-modal .uv-pop-up-close' : \"removeModal\",
\t\t\t\t\t'click #preview-modal .uv-btn.cancel' : \"removeModal\",
\t\t\t\t\t'click #preview-modal .uv-btn.restore' : \"restore\",
\t\t\t\t},
\t\t\t\tremoveModal: function(e){
\t\t\t\t\te.preventDefault();
\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\$(e.target).parents('#preview-modal').remove();
\t\t\t\t\t}, 500);
\t\t\t\t},
\t\t\t\trestore: function(e){
\t\t\t\t\te.preventDefault();

\t\t\t\t\tthis.removeModal(e);

\t\t\t\t\tformData = {};
\t\t\t\t\tformData['ids'] = ['{{article.id}}'];
\t\t\t\t\tformData['actionType'] = 'contentUpdate';
\t\t\t\t\tformData['content'] = \$('#preview-modal .uv-html-preview').html();
\t\t\t\t\ttinyMCE.get('content').setContent(formData['content'])
\t\t\t\t\tarticleForm.articleEntityUpdate(formData);
\t\t\t\t\tarticleHistoryCollection.syncData();
\t\t\t\t},
\t\t\t\taddRelatedArticle: function(){
\t\t\t\t\tarticleRelatedCollection.syncData();
\t\t\t\t}
\t\t\t});
\t\t\tvar bodyView = new BodyView({});

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'click .uv-aside-ticket-actions .uv-aside-select .uv-dropdown-list:not(.uv-no-patch) li': 'editArticleProperty',
\t\t\t\t\t'input .uv-field-block input' : 'searchFilterOption',
                },
                editArticleProperty: function(e) {
                    var currentElement = Backbone.\$(e.currentTarget);
                    var uvSelect = currentElement.parents('.uv-aside-select');
                    var field = currentElement.parent().attr('data-action');
                    var value = currentElement.attr('data-index');
\t\t\t\t\tif (field == 'status') {
\t\t\t\t\t\tif (value == '1') {
\t\t\t\t\t\t\t\$('.uv-btn-action.uv-button-preview').removeAttr('disabled');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('.uv-btn-action.uv-button-preview').attr('disabled', 'disabled');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
                    if (uvSelect.find('.uv-aside-select-value').attr('data-id') != value) {
                        var name = currentElement.text().trim();
                        app.appView.showLoader();
\t\t\t\t\t\tself = this;
                        this.model.save({ editType: field, value: value, id: self.model.id }, {
                            patch: true,
                            success: function (model, response, options) {
                                uvSelect.find('.uv-aside-select-value').attr('data-id', value).text(name)
                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            },
                            error: function (model, xhr, options) {
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                                var response = warningResponse;
                                if (xhr.responseJSON)
                                    response = xhr.responseJSON;

                                app.appView.hideLoader();
                                app.appView.renderResponseAlert(response);
                            }
                        });
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');

                    if (jQuery.inArray(filterType, ['tag', 'related']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
\t\t\t\tloaderTemplate : _.template(\$(\"#loader-tmp\").html()),
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info, .press-enter-to-add)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    
\t\t\t\t\tif (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if (self.xhrReq)
                            self.xhrReq.abort();

\t\t\t\t\t\tlet filterType = currentElement.attr('data-filter-type');
\t\t\t\t\t\tlet path = (filterType == 'tag' ? \"{{ path('search_ticket_filter_options_xhr') }}\" : \"{{ path('helpdesk_member_knowledgebase_article_collection_xhr') }}\");
                        self.xhrReq = \$.ajax({
                            url : path,
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val()},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
\t\t\t\t\t\t\t\tif (parent.find('.uv-dropdown-list').length) {
\t\t\t\t\t\t\t\t\tparent.find('.uv-dropdown-list').show();
\t\t\t\t\t\t\t\t}
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();

\t\t\t\t\t\t\t\tif (filterType == 'tag') {
\t\t\t\t\t\t\t\t\tif (response.length == 0) {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').show()
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').hide()
\t\t\t\t\t\t\t\t\t\tparent.find('.uv-no-results').hide();
\t\t\t\t\t\t\t\t\t\t_.each(response, function(item) {
\t\t\t\t\t\t\t\t\t\t\tparent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\tif (response.results.length == 0) {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').hide()
\t\t\t\t\t\t\t\t\t\tparent.find('.uv-no-results').show()
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t_.each(response.results, function(item) {
\t\t\t\t\t\t\t\t\t\tparent.find('.press-enter-to-add').hide()
\t\t\t\t\t\t\t\t\t\tparent.find('.uv-no-results').hide();
\t\t\t\t\t\t\t\t\t\tif (item.id != {{article.id}})
\t\t\t\t\t\t\t\t\t\t\tparent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").show();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
\t\t\t\t\t\tparent.find('.uv-no-results').hide();
\t\t\t\t\t}
                },1000),
            });

\t\t\tvar pageView = new PageView({
\t\t\t\tmodel : articlemodel
\t\t\t});
\t\t});
\t</script>

\t{{ include(\"@UVDeskSupportCenter/Templates/tinyMCE.html.twig\") }}

    <script>
\t\tvar toolbarOptions = sfTinyMce.options.toolbar;
        sfTinyMce.init({
\t\t\tselector: 'textarea[name*=\"content\"]',
\t\t\ttoolbar: toolbarOptions + ' | insert | styleselect | alignleft aligncenter alignright alignjustify | outdent indent | code | translate',
\t\t\tsetup: function (editor) {
                addTranslateButton(editor);
\t\t\t},
        });
    </script>
{% endblock %}", "@UVDeskSupportCenter/Staff/Articles/articleForm.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Articles/articleForm.html.twig");
    }
}
