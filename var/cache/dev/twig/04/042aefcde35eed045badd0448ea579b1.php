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

/* @UVDeskSupportCenter/Knowledgebase/ticket.html.twig */
class __TwigTemplate_abe3d7b4dbcae2c4fcd748af84e2b737 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig"));

        // line 8
        $context["recaptchaDetail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 8, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 8);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create Ticket", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaDescription", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("create.ticket.metaKeywords", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t\t.mce-path {
      \t\tdisplay: none !important;
\t\t}
\t\t
\t\t.uv-element-block label.uv-field-label.required::after {
\t\t\tcontent: \"*\";
\t\t\tcolor: #FC6868;
\t\t\tfont-weight: 700;
\t\t\tdisplay: inline-block;
\t\t}
\t</style>

\t";
        // line 36
        $context["isTicketViewPage"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 36), "id", [], "any", true, true, false, 36)) ? (true) : (false));
        // line 37
        yield "\t
\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket Request"), "html", null, true);
        yield "</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        yield "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t";
        // line 45
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 45, $this->source); })())) {
            // line 46
            yield "\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "name", [], "any", true, true, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true)) : (""));
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your name"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
            // line 60
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "from", [], "any", true, true, false, 60)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 60, $this->source); })()), "from", [], "any", false, false, false, 60), "html", null, true)) : (""));
            yield "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your email"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        }
        // line 66
        yield "\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        yield "</option>

\t\t\t\t\t\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 73, $this->source); })()), "getTypes", [], "method", false, false, false, 73));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 74
            yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", true, true, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 74, $this->source); })()), "type", [], "any", false, false, false, 74) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 74)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 74), "html", null, true);
            yield "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"";
        // line 86
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "subject", [], "any", true, true, false, 86)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 86, $this->source); })()), "subject", [], "any", false, false, false, 86), "html", null, true)) : (""));
        yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        yield "</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">";
        // line 96
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "reply", [], "any", true, true, false, 96)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 96, $this->source); })()), "reply", [], "any", false, false, false, 96), "html", null, true)) : (""));
        yield "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t";
        // line 109
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 109, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 109, $this->source); })()), "isActive", [], "any", false, false, false, 109) == true))) {
            // line 110
            yield "\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 111, $this->source); })()), "siteKey", [], "any", false, false, false, 111), "html", null, true);
            yield "\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        ";
        } else {
            // line 114
            yield "                            <!-- Recaptcha will not support -->
                        ";
        }
        // line 116
        yield "
\t\t\t\t\t\t";
        // line 118
        yield "\t\t\t\t\t\t";
        $context["CustomerCustomFields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 118, $this->source); })()), "getCustomerCreateTicketCustomFieldSnippet", [], "method", false, false, false, 118);
        // line 119
        yield "\t\t\t\t\t\t";
        $context["removeMe"] = [];
        // line 120
        yield "\t\t\t\t\t\t";
        if ((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 120, $this->source); })())) {
            // line 121
            yield "\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 122, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 123
                yield "\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group ";
                yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 123))) ? ("dependent") : (""));
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 123));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    yield " dependency";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 123), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "\" style=\"position: relative; ";
                yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 123))) ? ("display: none;") : (""));
                yield "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 124) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 124)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 124), "html", null, true);
                yield "</label>
\t\t\t\t\t\t\t\t\t\t";
                // line 125
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 125) == "text")) {
                    // line 126
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"";
                    // line 127
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 127), "fieldtype", [], "array", true, true, false, 127)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 127), "fieldtype", [], "array", false, false, false, 127), "html", null, true)) : ("text"));
                    yield "\" name=\"customFields[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 127)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 127) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127)), "html", null, true);
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "placeholder", [], "any", false, false, false, 127), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 130
$context["customField"], "fieldType", [], "any", false, false, false, 130), ["date", "time", "datetime"])) {
                    // line 131
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 132
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 132) == "time")) {
                        yield "time";
                    } else {
                        yield "calendar";
                    }
                    yield " uv-header-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 132), "html", null, true);
                    yield "\" type=\"text\" name=\"customFields[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 132), "html", null, true);
                    yield "]\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 132)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 132) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 132)), "html", null, true);
                    yield "\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 134
$context["customField"], "fieldType", [], "any", false, false, false, 134) == "textarea")) {
                    // line 135
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 136)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 136) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136)), "html", null, true);
                    yield "\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["customField"], "fieldType", [], "any", false, false, false, 139), ["file"])) {
                    // line 140
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[";
                    // line 141
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 141), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 141)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 141) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 141)), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 144
$context["customField"], "fieldType", [], "any", false, false, false, 144), ["select"])) {
                    // line 145
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 145))) {
                        // line 146
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[";
                        // line 147
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 147), "html", null, true);
                        yield "]\" class=\"uv-select create-ticket\" id=\"for";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 147) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 147)), "html", null, true);
                        yield "\" ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 147)) ? ("required") : (""));
                        yield ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 148
                        yield "Select option";
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 149
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 149));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 150
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 150), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 150), "html", null, true);
                            yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 152
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 155
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 156
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 156, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 156)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 156))]);
                        // line 157
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 158
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 159
$context["customField"], "fieldType", [], "any", false, false, false, 159), ["checkbox"])) {
                    // line 160
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 160))) {
                        // line 161
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 161));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 162
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[";
                            // line 165
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 165), "html", null, true);
                            yield "][]\" value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 165), "html", null, true);
                            yield "\" id=\"for";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 165) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 165)), "html", null, true);
                            yield "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 168
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 168) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 168)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 168), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 172
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 173
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 174
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 174, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 174)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 174))]);
                        // line 175
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 176
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 177
$context["customField"], "fieldType", [], "any", false, false, false, 177), ["radio"])) {
                    // line 178
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 178))) {
                        // line 179
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 179));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 180
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[";
                            // line 183
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 183), "html", null, true);
                            yield "]\" value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 183), "html", null, true);
                            yield "\" id=\"for";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 183) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 183)), "html", null, true);
                            yield "\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for";
                            // line 186
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 186) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 186)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 186), "html", null, true);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 190
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 191
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 192
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 192, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 192)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 192))]);
                        // line 193
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 194
                    yield "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 196
                yield "\t\t\t\t\t\t\t\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 196)) . "]"), [], "array", true, true, false, 196)) {
                    // line 197
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 197, $this->source); })()), (("customFields[" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 197)) . "]"), [], "array", false, false, false, 197), "html", null, true);
                    yield "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 199
                yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['customField'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 203
        yield "
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        yield "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t";
        // line 213
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 213, $this->source); })()), "isFileExists", ["apps/uvdesk/form-component"], "method", false, false, false, 213)) {
            // line 214
            yield "\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig");
            yield " 
\t";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 215
(isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 215, $this->source); })()), "isFileExists", ["apps/uvdesk/custom-fields"], "method", false, false, false, 215)) {
            // line 216
            yield "\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@_uvdesk_extension_uvdesk_custom_fields/CustomFields/customFieldValidation.html.twig");
            yield " 
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 220
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

        // line 221
        yield "\t";
        $context["isTicketViewPage"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 221), "id", [], "any", true, true, false, 221)) ? (true) : (false));
        // line 222
        yield "\t
\t";
        // line 223
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

\t";
        // line 225
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 225, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 225, $this->source); })()), "isActive", [], "any", false, false, false, 225) == true))) {
            // line 226
            yield "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 228
        yield "
    ";
        // line 229
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        yield "
\t";
        // line 230
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/attachment.html.twig");
        yield "

\t<script type=\"text/javascript\">
\t\t";
        // line 233
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 233, $this->source); })()), "isFileExists", ["apps/uvdesk/form-component"], "method", false, false, false, 233) == false)) {
            // line 234
            yield "\t\t\tcustomFieldValidation = {};
\t\t";
        }
        // line 236
        yield "
\t\t\$(function () {
\t\t\tsfTinyMce.init({
\t\t\t\theight: '155px',
\t\t\t\tselector : '#create-reply',
\t\t\t\timages_upload_url: \"\",
\t\t\t\tsetup: function(editor) {
\t\t\t\t},
\t\t\t\tplugins: [
\t\t\t\t],
\t\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t\t});

\t\t\t";
        // line 249
        if (array_key_exists("removeMe", $context)) {
            // line 250
            yield "\t\t\t\t\$.each(";
            yield json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 250, $this->source); })()));
            yield ", function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t";
        }
        // line 254
        yield "
\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});

        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});

        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});

\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t";
        // line 273
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 273, $this->source); })())) {
            // line 274
            yield "\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            yield "'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            yield "'
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            yield "'
\t\t\t\t\t\t}],
\t\t\t\t\t";
        }
        // line 286
        yield "\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\tfn: function(value) {
\t\t\t\t\t\t\tvar content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
\t\t\t\t\t\t\t\t
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }

                            return true;
                        },
\t\t\t\t\t\tmsg : '";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
\t\t\t\t\t},
\t\t\t\t\t";
        // line 317
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 317, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 317, $this->source); })()), "isActive", [], "any", false, false, false, 317) == true))) {
            // line 318
            yield "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            yield "'
                        }
\t\t\t\t    ";
        }
        // line 328
        yield "\t\t\t\t}),
\t\t\t\turlRoot : \"";
        // line 329
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
        yield "\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 334
        yield ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 334, $this->source); })())) : ("{}"));
        yield "');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanged',
\t\t\t\t\t'change input[type=file]': 'formChanged',
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
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
        return "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig";
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
        return array (  909 => 334,  901 => 329,  898 => 328,  892 => 325,  883 => 318,  881 => 317,  876 => 315,  850 => 292,  843 => 288,  839 => 286,  833 => 283,  827 => 280,  820 => 276,  816 => 274,  814 => 273,  793 => 254,  785 => 250,  783 => 249,  768 => 236,  764 => 234,  762 => 233,  756 => 230,  752 => 229,  749 => 228,  745 => 226,  743 => 225,  738 => 223,  735 => 222,  732 => 221,  719 => 220,  704 => 216,  702 => 215,  697 => 214,  695 => 213,  684 => 205,  680 => 203,  676 => 201,  669 => 199,  663 => 197,  660 => 196,  656 => 194,  653 => 193,  651 => 192,  648 => 191,  645 => 190,  633 => 186,  623 => 183,  618 => 180,  613 => 179,  610 => 178,  608 => 177,  605 => 176,  602 => 175,  600 => 174,  597 => 173,  594 => 172,  582 => 168,  572 => 165,  567 => 162,  562 => 161,  559 => 160,  557 => 159,  554 => 158,  551 => 157,  549 => 156,  546 => 155,  541 => 152,  530 => 150,  526 => 149,  522 => 148,  514 => 147,  511 => 146,  508 => 145,  506 => 144,  496 => 141,  493 => 140,  491 => 139,  481 => 136,  478 => 135,  476 => 134,  459 => 132,  456 => 131,  454 => 130,  440 => 127,  437 => 126,  435 => 125,  429 => 124,  412 => 123,  408 => 122,  405 => 121,  402 => 120,  399 => 119,  396 => 118,  393 => 116,  389 => 114,  383 => 111,  380 => 110,  378 => 109,  371 => 105,  361 => 98,  356 => 96,  351 => 94,  342 => 88,  337 => 86,  332 => 84,  323 => 78,  319 => 76,  306 => 74,  302 => 73,  297 => 71,  291 => 68,  287 => 66,  280 => 62,  275 => 60,  270 => 58,  261 => 52,  256 => 50,  251 => 48,  247 => 46,  245 => 45,  241 => 44,  235 => 41,  229 => 37,  227 => 36,  200 => 11,  187 => 10,  164 => 6,  141 => 5,  118 => 4,  95 => 3,  72 => 2,  61 => 1,  59 => 8,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}
{% block title %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Create Ticket{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}create.ticket.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}create.ticket.metaKeywords{% endtrans %}{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block body %}
\t<style>
\t\t.uv-field{
\t\t\tpadding: 5px 10px;
\t\t}
\t\t.grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 158%;
\t\t}
\t\t.uv-field-success-icon {
\t\t\tdisplay: none !important;
\t\t}
\t\t.mce-path {
      \t\tdisplay: none !important;
\t\t}
\t\t
\t\t.uv-element-block label.uv-field-label.required::after {
\t\t\tcontent: \"*\";
\t\t\tcolor: #FC6868;
\t\t\tfont-weight: 700;
\t\t\tdisplay: inline-block;
\t\t}
\t</style>

\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t
\t<div class=\"uv-paper-article uv-paper-form\">
\t\t<div class=\"uv-paper-section\">
\t\t\t<section>
\t\t\t\t<h1>{{ 'Create Ticket Request'|trans }}</h1>

\t\t\t\t<div class=\"uv-form\">
\t\t\t\t\t<form action=\"{{ path('helpdesk_customer_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
\t\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Name'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.name is defined ? post.name : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your name'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Email'|trans }}</label>
\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t<input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.from is defined ? post.from : '' }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Enter your email'|trans }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Type'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select type'|trans }}</option>

\t\t\t\t\t\t\t\t\t{% for type in ticket_service.getTypes() %}
\t\t\t\t\t\t\t\t\t\t<option value=\"{{ type.id }}\" {{ post.type is defined and post.type == type.id ? 'selected' : '' }}>{{ type.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Subject'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t<input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"{{ post.subject is defined ? post.subject : '' }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<label class=\"uv-field-label required\">{{ 'Message'|trans }}</label>
\t\t\t\t\t\t\t<div class=\"uv-field-block grammarly-fix-message-container\">
\t\t\t\t\t\t\t\t<textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket grammarly-fix-message\" type=\"text\">{{ post.reply is defined ? post.reply : '' }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t\t<!-- Field -->
\t\t\t\t\t\t<div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- //Field -->
\t\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
                        {% else %}
                            <!-- Recaptcha will not support -->
                        {% endif %}

\t\t\t\t\t\t{# CustomFields #}
\t\t\t\t\t\t{% set CustomerCustomFields = ticket_service.getCustomerCreateTicketCustomFieldSnippet() %}
\t\t\t\t\t\t{% set removeMe = [] %}
\t\t\t\t\t\t{% if CustomerCustomFields %}
\t\t\t\t\t\t\t<div class=\"custom-fields clearfix\">
\t\t\t\t\t\t\t\t{% for key, customField in CustomerCustomFields %}
\t\t\t\t\t\t\t\t\t<div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
\t\t\t\t\t\t\t\t\t\t<label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
\t\t\t\t\t\t\t\t\t\t{% if customField.fieldType == 'text' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.placeholder}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType == 'textarea' %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['file'] %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['select'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">{{ 'Select option' }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['checkbox'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% elseif customField.fieldType in ['radio'] %}
\t\t\t\t\t\t\t\t\t\t\t{% if customField.customFieldValues is not empty %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for customFieldValues in customField.customFieldValues %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-split-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"uv-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<!--Hide this beacause choices aren't available-->
\t\t\t\t\t\t\t\t\t\t\t\t{% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if formErrors['customFields['~customField.id~']'] is defined %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</section>
\t\t</div>
\t</div>

\t{% if user_service.isFileExists('apps/uvdesk/form-component') %}
\t\t{{ include('@_uvdesk_extension_uvdesk_form_component/CustomFields/customFieldValidation.html.twig') }} 
\t{% elseif user_service.isFileExists('apps/uvdesk/custom-fields') %}
\t\t{{ include('@_uvdesk_extension_uvdesk_custom_fields/CustomFields/customFieldValidation.html.twig') }} 
\t{% endif %}
{% endblock %}

{% block footer %}
\t{% set isTicketViewPage = (app.user.id is defined ? true : false) %}
\t
\t{{ parent() }}

\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}

    {{ include(\"@UVDeskSupportCenter/Templates/tinyMCE.html.twig\") }}
\t{{ include('@UVDeskCoreFramework/Templates/attachment.html.twig') }}

\t<script type=\"text/javascript\">
\t\t{% if user_service.isFileExists('apps/uvdesk/form-component') == false %}
\t\t\tcustomFieldValidation = {};
\t\t{% endif %}

\t\t\$(function () {
\t\t\tsfTinyMce.init({
\t\t\t\theight: '155px',
\t\t\t\tselector : '#create-reply',
\t\t\t\timages_upload_url: \"\",
\t\t\t\tsetup: function(editor) {
\t\t\t\t},
\t\t\t\tplugins: [
\t\t\t\t],
\t\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t\t});

\t\t\t{% if (removeMe is defined) %}
\t\t\t\t\$.each({{ removeMe | json_encode |raw }}, function(key, value){
\t\t\t\t\t\$('label[for=\"' + value + '\"]').parent().hide();
\t\t\t\t});
\t\t\t{% endif %}

\t\t\t\$('.uv-header-date').datetimepicker({
            \tformat: 'YYYY-MM-DD',
        \t});

        \t\$('.uv-header-time').datetimepicker({
            \tformat: 'LT',
        \t});

        \t\$('.uv-header-datetime').datetimepicker({
            \tformat: 'YYYY-MM-DD H:m:s'
        \t});

\t\t\tvar CreateTicketModel = Backbone.Model.extend({
\t\t\t\tidAttribute : \"id\",
\t\t\t\tdefaults : {
\t\t\t\t\tpath : \"\",
\t\t\t\t},
\t\t\t\tvalidation: _.extend(customFieldValidation, {
\t\t\t\t\t{% if not isTicketViewPage %}
\t\t\t\t\t\t'name' : {
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t},
\t\t\t\t\t\t'from' :[{
\t\t\t\t\t\t\trequired : true,
\t\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t\t}, {
\t\t\t\t\t\t\tpattern : 'email',
\t\t\t\t\t\t\tmsg : '{{ \"Email address is invalid\"|trans }}'
\t\t\t\t\t\t}],
\t\t\t\t\t{% endif %}
\t\t\t\t\t'type' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'subject' : {
\t\t\t\t\t\trequired : true,
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t'reply' : {
\t\t\t\t\t\tfn: function(value) {
\t\t\t\t\t\t\tvar content = tinyMCE.activeEditor.getContent();
\t\t\t\t\t\t\tcontent = content.replace(/&nbsp;/g, '').replace(/<[^>]*>/g, '');

\t\t\t\t\t\t\tif (content.trim() == '') {
\t\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\treturn false;
\t\t\t\t\t\t\t}

                            if (! tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
\t\t\t\t\t\t\t\t
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if (app.appView.stripHTML(html) != '') {
                                return false;
                            }

                            return true;
                        },
\t\t\t\t\t\tmsg : '{{ \"This field is mandatory\"|trans }}'
\t\t\t\t\t},
\t\t\t\t\t{% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '{{ \"Please select CAPTCHA\"|trans }}'
                        }
\t\t\t\t    {% endif %}
\t\t\t\t}),
\t\t\t\turlRoot : \"{{ path('helpdesk_customer_create_ticket') }}\"
\t\t\t});
\t\t\tvar CreateTicketForm = Backbone.View.extend({
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
\t\t\t\t\tfor (var field in jsonContext) {
\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tevents : {
\t\t\t\t\t'click #create-ticket-btn' : \"saveTicket\",
\t\t\t\t\t'change #type' : \"updateCustomFields\",
\t\t\t\t\t'blur input:not(input[type=file]), textarea, select, checkbox': 'formChanged',
\t\t\t\t\t'change input[type=file]': 'formChanged',
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t\t\tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t\t\tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t\t},
\t\t\t\tsaveTicket : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar currentElement = Backbone.\$(e.currentTarget);
\t\t\t\t\tvar data = currentElement.closest('form').serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\t\$('#create-ticket-form').submit();
\t\t\t\t\t\t\$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tupdateCustomFields : function (e) {
\t\t\t\t\tvar dependentFields = e.currentTarget.value;
\t\t\t\t\tthis.\$('.dependent').hide();
\t\t\t\t\tthis.\$('.dependency' + dependentFields).show();
\t\t\t\t}
\t\t\t});
\t\t\tvar createticketForm = new CreateTicketForm({
\t\t\t\tel : \$(\"#create-ticket-form\"),
\t\t\t\tmodel : new CreateTicketModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskSupportCenter/Knowledgebase/ticket.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/ticket.html.twig");
    }
}
