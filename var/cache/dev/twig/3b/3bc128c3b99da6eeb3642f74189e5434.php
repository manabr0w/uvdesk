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

/* @UVDeskSupportCenter/Knowledgebase/article.html.twig */
class __TwigTemplate_029b8e3b87f3fd0d8a7c2a168b4ebeeb extends Template
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
            'canonical' => [$this, 'block_canonical'],
            'ogcanonical' => [$this, 'block_ogcanonical'],
            'title' => [$this, 'block_title'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/article.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/article.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/article.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_canonical(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "slug", [], "any", false, false, false, 3)]), "html", null, true);
            yield " ";
        }
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogcanonical(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 4, $this->source); })()), "slug", [], "any", false, false, false, 4)]), "html", null, true);
            yield " ";
        }
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "metaTitle", [], "any", false, false, false, 6)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "metaTitle", [], "any", false, false, false, 6), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "metaTitle", [], "any", false, false, false, 7)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "metaTitle", [], "any", false, false, false, 7), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_twtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "metaTitle", [], "any", false, false, false, 8)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "metaTitle", [], "any", false, false, false, 8), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaDescription(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "metaDescription", [], "any", false, false, false, 9)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "metaDescription", [], "any", false, false, false, 9), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 9, $this->source); })()), "createConentToKeywords", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "content", [], "any", false, false, false, 9), 255, true], "method", false, false, false, 9), " "), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaKeywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "keywords", [], "any", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "keywords", [], "any", false, false, false, 10)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "keywords", [], "any", false, false, false, 10), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 10, $this->source); })()), "createConentToKeywords", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10)], "method", false, false, false, 10), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "\t<div class=\"uv-paper-article\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section style=\"word-wrap: break-word;\">
\t\t\t\t<h1 ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "stared", [], "any", false, false, false, 16)) {
            yield "class=\"uv-starred\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>
\t\t\t\t<p>";
        // line 17
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17);
        yield "</p>
\t\t\t\t<div class=\"uv-author\">
\t\t\t\t\t";
        // line 19
        if ((array_key_exists("articleAuthor", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 19, $this->source); })())))) {
            // line 20
            yield "\t\t\t\t\t\t<div class=\"uv-author-avatar\">
\t\t\t\t\t\t\t";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["articleAuthor"] ?? null), "user", [], "any", false, true, false, 21), "profileImage", [], "any", true, true, false, 21) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "profileImage", [], "any", false, false, false, 21))) {
                // line 22
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "profileImage", [], "any", false, false, false, 22), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t";
            } else {
                // line 24
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 24, $this->source); })())), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t";
            }
            // line 26
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uv-author-info\">
\t\t\t\t\t\t\t<p>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 28, $this->source); })()), "firstName", [], "any", false, false, false, 28)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleAuthor"]) || array_key_exists("articleAuthor", $context) ? $context["articleAuthor"] : (function () { throw new RuntimeError('Variable "articleAuthor" does not exist.', 28, $this->source); })()), "lastName", [], "any", false, false, false, 28)), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t<p><span>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published on"), "html", null, true);
            yield " -</span> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateAdded"]) || array_key_exists("dateAdded", $context) ? $context["dateAdded"] : (function () { throw new RuntimeError('Variable "dateAdded" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 32
        yield "\t\t\t\t</div>
\t\t\t</section>


\t\t\t";
        // line 36
        if ((array_key_exists("feedbacks", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 36, $this->source); })()), "enabled", [], "any", false, false, false, 36) == true))) {
            // line 37
            yield "\t\t\t\t<section id=\"feedbacks\" class=\"article-feedbacks\">
\t\t\t\t\t";
            // line 38
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 38, $this->source); })()), "submitted", [], "any", false, false, false, 38) == true)) {
                // line 39
                yield "\t\t\t\t\t\t<p>Thank you for your feedback!</p>
\t\t\t\t\t";
            }
            // line 41
            yield "\t\t\t\t</section>
\t\t\t";
        }
        // line 43
        yield "\t\t</div>

\t\t";
        // line 45
        yield from $this->loadTemplate("@UVDeskSupportCenter/Templates/sidepanel.html.twig", "@UVDeskSupportCenter/Knowledgebase/article.html.twig", 45)->unwrap()->yield($context);
        // line 46
        yield "\t</div>
\t";
        // line 47
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

        // line 51
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t";
        // line 54
        yield "\t";
        if (((array_key_exists("feedbacks", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 54, $this->source); })()), "enabled", [], "any", false, false, false, 54) == true)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 54, $this->source); })()), "submitted", [], "any", false, false, false, 54) == false))) {
            // line 55
            yield "\t\t<script id=\"article_feedback_template\" type=\"text/template\">
\t\t\t<p>Was this article helpful?</p>
\t\t\t<ul>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"positive\">Yes</li>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"negative\">No</li>
\t\t\t</ul>
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\tvar ArticleFeedback = Backbone.View.extend({
\t\t\t\t\tel: \$(\"#feedbacks\"),
\t\t\t\t\tfeedbacks: {positive: 0, negative: 0, collection: []},
\t\t\t\t\ttemplate: _.template(\$(\"#article_feedback_template\").html()),
\t\t\t\t\tevents: {
\t\t\t\t\t\t'click .article-badge-pta': 'ratingsPTA',
\t\t\t\t\t},
\t\t\t\t\tinitialize: function() {
\t\t\t\t\t\t";
            // line 73
            if ((array_key_exists("feedbacks", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 73, $this->source); })()), "article", [], "any", false, false, false, 73)))) {
                // line 74
                yield "\t\t\t\t\t\t\tthis.feedbacks = ";
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["feedbacks"]) || array_key_exists("feedbacks", $context) ? $context["feedbacks"] : (function () { throw new RuntimeError('Variable "feedbacks" does not exist.', 74, $this->source); })()), "article", [], "any", false, false, false, 74));
                yield ";
\t\t\t\t\t\t";
            }
            // line 76
            yield "
\t\t\t\t\t\tthis.render();
\t\t\t\t\t},
\t\t\t\t\trender: function() {
\t\t\t\t\t\tthis.\$el.html(this.template());
\t\t\t\t\t},
\t\t\t\t\tratingsPTA: function(e) {
\t\t\t\t\t\tvar self = this;
\t\t\t\t\t\tvar feedbackType = \$(e.currentTarget).data('feedback');

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: \"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("helpdesk_knowledgebase_rate_article", ["articleId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87)]), "html", null, true);
            yield "\",
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tfeedback: feedbackType,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(response) {
\t\t\t\t\t\t\t\tresponse = \$.parseJSON(response.responseText);

\t\t\t\t\t\t\t\t// app.appView.hideLoader();
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t});

\t\t\t\tvar articleFeedback = new ArticleFeedback();
\t\t\t});
\t\t</script>
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Knowledgebase/article.html.twig";
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
        return array (  418 => 87,  405 => 76,  399 => 74,  397 => 73,  377 => 55,  374 => 54,  368 => 51,  355 => 50,  342 => 47,  339 => 46,  337 => 45,  333 => 43,  329 => 41,  325 => 39,  323 => 38,  320 => 37,  318 => 36,  312 => 32,  304 => 29,  298 => 28,  294 => 26,  288 => 24,  282 => 22,  280 => 21,  277 => 20,  275 => 19,  270 => 17,  262 => 16,  257 => 13,  244 => 12,  221 => 10,  198 => 9,  175 => 8,  152 => 7,  129 => 6,  100 => 4,  71 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block canonical %} {% if article.slug %} {{ url('helpdesk_knowledgebase_read_slug_article', {'slug':article.slug }) }} {% endif %} {% endblock %}
{% block ogcanonical %} {% if article.slug %} {{ url('helpdesk_knowledgebase_read_slug_article', {'slug':article.slug }) }} {% endif %} {% endblock %}

{% block title %}{{ article.metaTitle ? article.metaTitle : article.name }}{% endblock %}
{% block ogtitle %}{{ article.metaTitle ? article.metaTitle : article.name }}{% endblock %}
{% block twtitle %}{{ article.metaTitle ? article.metaTitle : article.name }}{% endblock %}
{% block metaDescription %}{{ article.metaDescription ? article.metaDescription : uvdesk_service.createConentToKeywords(article.content, 255, true)|join(' ') }}{% endblock %}
{% block metaKeywords %}{{ article.keywords ?? uvdesk_service.createConentToKeywords(article.content) }}{% endblock %}

{% block body %}
\t<div class=\"uv-paper-article\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section style=\"word-wrap: break-word;\">
\t\t\t\t<h1 {% if article.stared %}class=\"uv-starred\"{% endif %}>{{ article.name }}</h1>
\t\t\t\t<p>{{ article.content |raw }}</p>
\t\t\t\t<div class=\"uv-author\">
\t\t\t\t\t{% if articleAuthor is defined and articleAuthor is not empty %}
\t\t\t\t\t\t<div class=\"uv-author-avatar\">
\t\t\t\t\t\t\t{% if articleAuthor.user.profileImage is defined and articleAuthor.user.profileImage %}
\t\t\t\t\t\t\t\t<img src=\"{{articleAuthor.user.profileImage}}\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset(default_customer_image_path) }}\">
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"uv-author-info\">
\t\t\t\t\t\t\t<p>{{ articleAuthor.firstName | capitalize }} {{ articleAuthor.lastName | capitalize }}</p>
\t\t\t\t\t\t\t<p><span>{{\"Published on\"|trans}} -</span> {{dateAdded}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</section>


\t\t\t{% if feedbacks is defined and feedbacks.enabled == true %}
\t\t\t\t<section id=\"feedbacks\" class=\"article-feedbacks\">
\t\t\t\t\t{% if feedbacks.submitted == true %}
\t\t\t\t\t\t<p>Thank you for your feedback!</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</section>
\t\t\t{% endif %}
\t\t</div>

\t\t{% include \"@UVDeskSupportCenter/Templates/sidepanel.html.twig\" %}
\t</div>
\t{{ parent() }}
{% endblock %}

{% block footer %}
\t{{ parent() }}

\t{# Article Feedbacks #}
\t{% if feedbacks is defined and feedbacks.enabled == true and feedbacks.submitted == false %}
\t\t<script id=\"article_feedback_template\" type=\"text/template\">
\t\t\t<p>Was this article helpful?</p>
\t\t\t<ul>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"positive\">Yes</li>
\t\t\t\t<li class=\"uv-btn-small article-badge-pta\" data-feedback=\"negative\">No</li>
\t\t\t</ul>
\t\t</script>

\t\t<script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\tvar ArticleFeedback = Backbone.View.extend({
\t\t\t\t\tel: \$(\"#feedbacks\"),
\t\t\t\t\tfeedbacks: {positive: 0, negative: 0, collection: []},
\t\t\t\t\ttemplate: _.template(\$(\"#article_feedback_template\").html()),
\t\t\t\t\tevents: {
\t\t\t\t\t\t'click .article-badge-pta': 'ratingsPTA',
\t\t\t\t\t},
\t\t\t\t\tinitialize: function() {
\t\t\t\t\t\t{% if feedbacks is defined and feedbacks.article is not empty %}
\t\t\t\t\t\t\tthis.feedbacks = {{ feedbacks.article|json_encode|raw }};
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\tthis.render();
\t\t\t\t\t},
\t\t\t\t\trender: function() {
\t\t\t\t\t\tthis.\$el.html(this.template());
\t\t\t\t\t},
\t\t\t\t\tratingsPTA: function(e) {
\t\t\t\t\t\tvar self = this;
\t\t\t\t\t\tvar feedbackType = \$(e.currentTarget).data('feedback');

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: \"{{ url('helpdesk_knowledgebase_rate_article', {'articleId': article.id}) }}\",
\t\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\t\tdata: {
\t\t\t\t\t\t\t\tfeedback: feedbackType,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tsuccess: function(response) {
\t\t\t\t\t\t\t\tthis.\$el.html('');
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(response) {
\t\t\t\t\t\t\t\tresponse = \$.parseJSON(response.responseText);

\t\t\t\t\t\t\t\t// app.appView.hideLoader();
\t\t\t\t\t\t\t\tapp.appView.renderResponseAlert(response);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t});

\t\t\t\tvar articleFeedback = new ArticleFeedback();
\t\t\t});
\t\t</script>
\t{% endif %}
{% endblock %}
", "@UVDeskSupportCenter/Knowledgebase/article.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/article.html.twig");
    }
}
