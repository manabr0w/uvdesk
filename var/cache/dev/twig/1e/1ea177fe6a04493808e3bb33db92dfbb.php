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

/* @UVDeskSupportCenter/Staff/Articles/articleAddForm.html.twig */
class __TwigTemplate_e3d3e057bdf9d29639d1c6f0b16cf307 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Articles/articleAddForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/Articles/articleAddForm.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/Articles/articleAddForm.html.twig", 1);
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
\t</style>
\t<div class=\"uv-inner-section uv-article\">
\t\t";
        // line 18
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 19
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\SupportCenterBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Knowledgebase";
        // line 20
        yield "
\t\t";
        // line 21
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 21, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 21, $this->source); })())], "method", false, false, false, 21), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 21, $this->source); })())], "method", false, false, false, 21);
        yield "
\t\t
\t\t<div class=\"uv-view ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "cookies", [], "any", false, false, false, 23) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "cookies", [], "any", false, false, false, 23), "get", ["uv-asideView"], "method", false, false, false, 23))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<div class=\"uv-ticket-scroll-region uv-margin-0 ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "cookies", [], "any", false, false, false, 24) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "cookies", [], "any", false, false, false, 24), "get", ["uv-asideView"], "method", false, false, false, 24))) {
            yield "uv-aside-view-tv";
        }
        yield "\">
\t\t\t\t<div class=\"uv-ticket-action-bar\">
\t\t\t\t\t<div class=\"uv-ticket-action-bar-lt\">
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t\t<div class=\"uv-tabs\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li for=\"article-edit\" class=\"uv-tab-active\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Article"), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t\t<li for=\"article-seo\" style=\"display:inline-block;\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEO"), "html", null, true);
        yield "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-ticket-action-bar-rt\">
\t\t\t\t\t\t<div class=\"uv-action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-action update-btn\">
\t\t\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form -->
\t\t\t\t<form method=\"post\" action=\"\" id=\"article-form\" style=\"width: 97%;\">
\t\t\t\t\t<div class=\"uv-tab-view uv-tab-view-active\" id=\"article-edit\">
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field\" type=\"text\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block uv-element-block-textarea\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Content"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block uv-margin-top-5\">
\t\t\t\t\t\t\t\t<textarea name=\"content\" class=\"uv-field\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 62, $this->source); })()), "content", [], "any", false, false, false, 62), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-seo\">
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"slug\" class=\"uv-field\" type=\"text\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 73, $this->source); })()), "slug", [], "any", false, false, false, 73), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug is the url identity of this article."), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"metaTitle\" class=\"uv-field\" type=\"text\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 83, $this->source); })()), "metaTitle", [], "any", false, false, false, 83), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title tags and meta descriptions are bits of HTML code in the header of a web page. They help search engines understand the content on a page. A page's title tag and meta description are usually shown whenever that page appears in search engine results"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Keywords"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"keywords\" class=\"uv-field\" type=\"text\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 93, $this->source); })()), "keywords", [], "any", false, false, false, 93), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comma \",\" separated"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta Description"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<textarea name=\"metaDescription\" class=\"uv-field\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 103, $this->source); })()), "metaDescription", [], "any", false, false, false, 103), "html", null, true);
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<style>
\t\t.uv-inner-section.uv-article .uv-view .uv-ticket-action-bar{
\t\t\tmargin-top: 20px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
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

        // line 122
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ArticleForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn-action.update-btn' : \"saveArticle\",
\t\t\t\t\t'blur input': 'formChanged',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.articleId = \"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "attributes", [], "any", false, false, false, 134), "get", ["id"], "method", false, false, false, 134), "html", null, true);
        yield "\";
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveArticle: function (e) {
\t\t\t\t\te.preventDefault();
                    \$(\".uv-tabs li\").removeClass('uv-tab-error')
                    currentElement = Backbone.\$(e.currentTarget);
                    //this.model.clear();
\t\t\t\t\tlet formData = this.\$el.find('form#article-form').serializeObject();
\t\t\t        this.model.set(formData);
                    self = this;

\t\t\t\t\tvar contentNotHasError = this.validateForm(e);
                 
\t\t\t        if (this.model.isValid(true) && contentNotHasError) {
\t\t\t\t\t\tformData['ids'] = [this.articleId];
\t\t\t\t\t\tformData['actionType'] = 'articleSave';
\t\t\t\t\t\tformData['content'] = tinyMCE.get('content').getContent();
                   
\t\t\t\t\t\tthis.articleEntityUpdate(formData);
\t\t\t        } else {
\t\t\t\t\t\tconsole.log(\"fail\");

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

                    var html = tinyMCE.get(formType).getContent();
                    //var html = \$('#content').val();

\t\t\t\t\tconsole.log(\"message value : \",html);

                    if (app.appView.htmlText(html).trim().length != 0) {
\t\t\t\t\t\treturn true;
                    } else {
                        form.find('.uv-element-block-textarea').append(\"<span class='uv-field-message'>";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    }
                },
                addErrors: function(jsonContext) {
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
                },
\t\t\t\tarticleEntityUpdate : function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article_xhr");
        yield "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();

\t\t\t\t\t\t\tif (response.alertClass == \"success\") {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\tif (response.redirect)
\t\t\t\t\t\t\t\t\twindow.location = response.redirect;
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
\t\t\t});

            var ArticleModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: '";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain maximum 200 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^((?![\$%<]).)*\$',
\t\t\t\t\t\tmsg: '";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have valid characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'metaTitle': [{
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain mata title maximum 200 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'keywords': [{
\t\t\t\t\t\tmaxLength:200,
\t\t\t\t\t\tmsg: '";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain keywords maximum 200 characters only"), "html", null, true);
        yield "'
\t\t\t\t\t}],
\t\t\t\t\t'slug': function(val, attr, computed) {
\t\t\t\t\t\tvar elSlug = \$(\"[name=\" + attr + \"]\");
\t\t\t\t\t\tvar elSlugValue = '';
\t\t\t\t\t\telSlug.val(elSlugValue = app.appView.convertToSlug(val))
\t\t\t\t\t 
\t\t\t\t\t\tif (elSlugValue.trim() == '') {
\t\t\t\t\t\t\treturn '";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "';
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tif (elSlugValue.length > 100) {
\t\t\t\t\t\t\treturn '";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field slug contains maximum 100 characters only."), "html", null, true);
        yield "';
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t},
                urlRoot : \"";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_update_article_xhr");
        yield "\"
\t\t\t});

\t\t\tvar articleModel = new ArticleModel({
                id : \"\",
                name : \"\",
\t\t\t})

\t\t\tarticleForm = new ArticleForm({
                el: '.uv-paper',
\t\t\t\tmodel : articleModel
\t\t\t});
\t\t});
\t</script>

\t";
        // line 271
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        yield "
\t
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
        return "@UVDeskSupportCenter/Staff/Articles/articleAddForm.html.twig";
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
        return array (  498 => 271,  480 => 256,  473 => 252,  466 => 248,  455 => 240,  448 => 236,  441 => 232,  435 => 229,  429 => 226,  392 => 192,  377 => 180,  328 => 134,  312 => 122,  299 => 121,  271 => 103,  266 => 101,  257 => 95,  252 => 93,  247 => 91,  238 => 85,  233 => 83,  228 => 81,  219 => 75,  214 => 73,  209 => 71,  197 => 62,  192 => 60,  182 => 53,  177 => 51,  163 => 40,  151 => 31,  147 => 30,  136 => 24,  130 => 23,  125 => 21,  122 => 20,  119 => 19,  116 => 18,  105 => 8,  92 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
\t</style>
\t<div class=\"uv-inner-section uv-article\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\SupportCenterBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Knowledgebase' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<div class=\"uv-ticket-scroll-region uv-margin-0 {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view-tv{% endif %}\">
\t\t\t\t<div class=\"uv-ticket-action-bar\">
\t\t\t\t\t<div class=\"uv-ticket-action-bar-lt\">
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t\t<div class=\"uv-tabs\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li for=\"article-edit\" class=\"uv-tab-active\">{{ 'Article'|trans }}</li>
\t\t\t\t\t\t\t\t<li for=\"article-seo\" style=\"display:inline-block;\">{{ 'SEO'|trans }}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--Tabs-->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-ticket-action-bar-rt\">
\t\t\t\t\t\t<div class=\"uv-action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\" type=\"button\" class=\"uv-btn-action update-btn\">
\t\t\t\t\t\t\t\t{{'Save'|trans}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form -->
\t\t\t\t<form method=\"post\" action=\"\" id=\"article-form\" style=\"width: 97%;\">
\t\t\t\t\t<div class=\"uv-tab-view uv-tab-view-active\" id=\"article-edit\">
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Title'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field\" type=\"text\" value=\"{{ article.name }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block uv-element-block-textarea\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Content'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block uv-margin-top-5\">
\t\t\t\t\t\t\t\t<textarea name=\"content\" class=\"uv-field\">{{article.content}}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"uv-tab-view\" id=\"article-seo\">
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Slug'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"slug\" class=\"uv-field\" type=\"text\" value=\"{{ article.slug }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{'Slug is the url identity of this article.'|trans}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Meta Title'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"metaTitle\" class=\"uv-field\" type=\"text\" value=\"{{ article.metaTitle }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{\"Title tags and meta descriptions are bits of HTML code in the header of a web page. They help search engines understand the content on a page. A page's title tag and meta description are usually shown whenever that page appears in search engine results\"|trans}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Meta Keywords'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"keywords\" class=\"uv-field\" type=\"text\" value=\"{{ article.keywords }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{'comma \",\" separated'|trans}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Meta Description'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<textarea name=\"metaDescription\" class=\"uv-field\">{{article.metaDescription}}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>

\t<style>
\t\t.uv-inner-section.uv-article .uv-view .uv-ticket-action-bar{
\t\t\tmargin-top: 20px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t</style>
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar globalMessageResponse = \"\";

\t\t\tvar ArticleForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn-action.update-btn' : \"saveArticle\",
\t\t\t\t\t'blur input': 'formChanged',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tthis.articleId = \"{{app.request.attributes.get('id')}}\";
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveArticle: function (e) {
\t\t\t\t\te.preventDefault();
                    \$(\".uv-tabs li\").removeClass('uv-tab-error')
                    currentElement = Backbone.\$(e.currentTarget);
                    //this.model.clear();
\t\t\t\t\tlet formData = this.\$el.find('form#article-form').serializeObject();
\t\t\t        this.model.set(formData);
                    self = this;

\t\t\t\t\tvar contentNotHasError = this.validateForm(e);
                 
\t\t\t        if (this.model.isValid(true) && contentNotHasError) {
\t\t\t\t\t\tformData['ids'] = [this.articleId];
\t\t\t\t\t\tformData['actionType'] = 'articleSave';
\t\t\t\t\t\tformData['content'] = tinyMCE.get('content').getContent();
                   
\t\t\t\t\t\tthis.articleEntityUpdate(formData);
\t\t\t        } else {
\t\t\t\t\t\tconsole.log(\"fail\");

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

                    var html = tinyMCE.get(formType).getContent();
                    //var html = \$('#content').val();

\t\t\t\t\tconsole.log(\"message value : \",html);

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

\t\t\t\t\t\t\tif (response.alertClass == \"success\") {
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t\tif (response.redirect)
\t\t\t\t\t\t\t\t\twindow.location = response.redirect;
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
\t\t\t\t\t'metaTitle': [{
\t\t\t\t\t\tmaxLength: 200,
\t\t\t\t\t\tmsg: '{{ \"This field contain mata title maximum 200 characters only\"|trans }}'
\t\t\t\t\t}],
\t\t\t\t\t'keywords': [{
\t\t\t\t\t\tmaxLength:200,
\t\t\t\t\t\tmsg: '{{ \"This field contain keywords maximum 200 characters only\"|trans }}'
\t\t\t\t\t}],
\t\t\t\t\t'slug': function(val, attr, computed) {
\t\t\t\t\t\tvar elSlug = \$(\"[name=\" + attr + \"]\");
\t\t\t\t\t\tvar elSlugValue = '';
\t\t\t\t\t\telSlug.val(elSlugValue = app.appView.convertToSlug(val))
\t\t\t\t\t 
\t\t\t\t\t\tif (elSlugValue.trim() == '') {
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

\t\t\tvar articleModel = new ArticleModel({
                id : \"\",
                name : \"\",
\t\t\t})

\t\t\tarticleForm = new ArticleForm({
                el: '.uv-paper',
\t\t\t\tmodel : articleModel
\t\t\t});
\t\t});
\t</script>

\t{{ include('@UVDeskSupportCenter/Templates/tinyMCE.html.twig') }}
\t
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
{% endblock %}
", "@UVDeskSupportCenter/Staff/Articles/articleAddForm.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/Articles/articleAddForm.html.twig");
    }
}
