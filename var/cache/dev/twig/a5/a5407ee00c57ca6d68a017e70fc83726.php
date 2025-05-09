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

/* @UVDeskCoreFramework/Snippets/createMemberTicket.html.twig */
class __TwigTemplate_95e63224fcb02c11c3833face5eea7ed extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig"));

        // line 1
        yield "<style>
    .mce-path {
      \t\tdisplay: none !important;
\t}
</style>

";
        // line 7
        $context["isTicketViewPage"] = ("helpdesk_member_ticket" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", ["_route"], "method", false, false, false, 7));
        // line 8
        yield "
<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        yield "\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            ";
        // line 15
        yield "            ";
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 15, $this->source); })())) {
            // line 16
            yield "                ";
            // line 17
            yield "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
            yield "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer full name"), "html", null, true);
            yield "</span>
                </div>

                ";
            // line 26
            yield "                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
            yield "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer email address"), "html", null, true);
            yield "</span>
                </div>
            ";
        } else {
            // line 34
            yield "                ";
            // line 35
            yield "                <span class=\"uv-field-info\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket will be created with current ticket's customer"), "html", null, true);
            yield "</span>
            ";
        }
        // line 37
        yield "
            ";
        // line 39
        yield "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select type"), "html", null, true);
        yield "</option>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 44, $this->source); })()), "getTypes", [], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 45
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["post"] ?? null), "type", [], "any", true, true, false, 45) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 45)))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 45), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "                    </select>
                </div>
                <span class=\"uv-field-info\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose ticket type"), "html", null, true);
        yield "</span>
            </div>

            ";
        // line 54
        yield "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket subject"), "html", null, true);
        yield "</span>
            </div>

            ";
        // line 64
        yield "            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket\" type=\"text\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 67, $this->source); })()), "getAgentDraftReply", [], "method", false, false, false, 67), "html", null, true);
        yield "</textarea>
                </div>
                
                <span class=\"uv-field-info\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket query message"), "html", null, true);
        yield "</span>
            </div>

            ";
        // line 74
        yield "            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Attachment"), "html", null, true);
        yield "</span>
                </label>
            </div>

            ";
        // line 81
        yield "            ";
        $context["removeMe"] = [];
        // line 82
        yield "            ";
        if ((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 82, $this->source); })())) {
            // line 83
            yield "                <div class=\"custom-fields clearfix\">
                    ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["customField"]) {
                // line 85
                yield "                        <div class=\"uv-element-block input-group ";
                yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 85))) ? ("dependent") : (""));
                yield " ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 85));
                foreach ($context['_seq'] as $context["_key"] => $context["customFieldCustomFieldsDependency"]) {
                    yield " dependency";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldCustomFieldsDependency"], "id", [], "any", false, false, false, 85), "html", null, true);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['customFieldCustomFieldsDependency'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield "\" style=\"position: relative; ";
                yield ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldsDependency", [], "any", false, false, false, 85))) ? ("display: none;") : (""));
                yield "\">
                            <label class=\"uv-field-label\" for=\"for";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 86) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 86)), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 86), "html", null, true);
                yield "</label>
                            ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 87) == "text")) {
                    // line 88
                    yield "                                <div class=\"uv-field-block\">
                                    <input type=\"";
                    // line 89
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 89), "fieldtype", [], "array", true, true, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 89), "fieldtype", [], "array", false, false, false, 89), "html", null, true)) : ("text"));
                    yield "\" name=\"customFields[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 89), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" value=\"\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 89)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 89) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 89)), "html", null, true);
                    yield "\" placeholder=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "placeholder", [], "any", false, false, false, 89), "html", null, true);
                    yield "\">
                                </div>

                            ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 92
$context["customField"], "fieldType", [], "any", false, false, false, 92), ["date", "time", "datetime"])) {
                    // line 93
                    yield "                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field form-control create-ticket uv-date-picker ";
                    // line 94
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 94) == "time")) {
                        yield "time";
                    } else {
                        yield "calendar";
                    }
                    yield " uv-header-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "any", false, false, false, 94), "html", null, true);
                    yield "\" type=\"text\" name=\"customFields[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 94), "html", null, true);
                    yield "]\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 94)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 94) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 94)), "html", null, true);
                    yield "\" value=\"\">
                                </div>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 96
$context["customField"], "fieldType", [], "any", false, false, false, 96) == "textarea")) {
                    // line 97
                    yield "                                <div class=\"uv-field-block\">
                                    <textarea name=\"customFields[";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 98), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 98)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 98) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 98)), "html", null, true);
                    yield "\"></textarea>
                                </div>

                            ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 101
$context["customField"], "fieldType", [], "any", false, false, false, 101), ["file"])) {
                    // line 102
                    yield "                                <div class=\"uv-field-block\">
                                    <input type=\"file\" name=\"customFields[";
                    // line 103
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 103), "html", null, true);
                    yield "]\" class=\"uv-field create-ticket\" ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 103)) ? ("required") : (""));
                    yield " id=\"for";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 103) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 103)), "html", null, true);
                    yield "\">
                                </div>

                            ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 106
$context["customField"], "fieldType", [], "any", false, false, false, 106), ["select"])) {
                    // line 107
                    yield "                                ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 107))) {
                        // line 108
                        yield "                                    <div class=\"uv-field-block\">
                                        <select name=\"customFields[";
                        // line 109
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 109), "html", null, true);
                        yield "]\" class=\"uv-select create-ticket\" id=\"for";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 109) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 109)), "html", null, true);
                        yield "\" ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 109)) ? ("required") : (""));
                        yield ">
                                            <option value=\"\">";
                        // line 110
                        yield "Select option";
                        yield "</option>
                                            ";
                        // line 111
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 111));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 112
                            yield "                                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 112), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 112), "html", null, true);
                            yield "</option>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        yield "                                        </select>
                                    </div>
                                ";
                    } else {
                        // line 117
                        yield "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 118
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 118, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 118)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 118))]);
                        // line 119
                        yield "                                ";
                    }
                    // line 120
                    yield "
                            ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 121
$context["customField"], "fieldType", [], "any", false, false, false, 121), ["checkbox"])) {
                    // line 122
                    yield "                                ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 122))) {
                        // line 123
                        yield "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 123));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 124
                            yield "                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input type=\"checkbox\" name=\"customFields[";
                            // line 127
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 127), "html", null, true);
                            yield "][]\" value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 127), "html", null, true);
                            yield "\" id=\"for";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 127) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 127)), "html", null, true);
                            yield "\" class=\"create-ticket\"/>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for";
                            // line 130
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 130) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 130)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 130), "html", null, true);
                            yield "</span>
                                            </label>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        yield "                                ";
                    } else {
                        // line 135
                        yield "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 136
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 136, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 136)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 136))]);
                        // line 137
                        yield "                                ";
                    }
                    // line 138
                    yield "
                            ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["customField"], "fieldType", [], "any", false, false, false, 139), ["radio"])) {
                    // line 140
                    yield "                                ";
                    if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 140))) {
                        // line 141
                        yield "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "any", false, false, false, 141));
                        foreach ($context['_seq'] as $context["_key"] => $context["customFieldValues"]) {
                            // line 142
                            yield "                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-radio\">
                                                    <input type=\"radio\" name=\"customFields[";
                            // line 145
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 145), "html", null, true);
                            yield "]\" value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 145), "html", null, true);
                            yield "\" id=\"for";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 145) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 145)), "html", null, true);
                            yield "\" class=\"create-ticket\"/>
                                                    <span class=\"uv-radio-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for";
                            // line 148
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 148) . CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "id", [], "any", false, false, false, 148)), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customFieldValues"], "name", [], "any", false, false, false, 148), "html", null, true);
                            yield "</span>
                                            </label>
                                        </div>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['customFieldValues'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 152
                        yield "                                ";
                    } else {
                        // line 153
                        yield "                                    <!--Hide this beacause choices aren't available-->
                                    ";
                        // line 154
                        $context["removeMe"] = Twig\Extension\CoreExtension::merge((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 154, $this->source); })()), [(("for" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 154)) . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 154))]);
                        // line 155
                        yield "                                ";
                    }
                    // line 156
                    yield "
                            ";
                }
                // line 158
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["formErrors"] ?? null), (("customFields[" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 158)) . "]"), [], "array", true, true, false, 158)) {
                    // line 159
                    yield "                                <div class=\"text-danger\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formErrors"]) || array_key_exists("formErrors", $context) ? $context["formErrors"] : (function () { throw new RuntimeError('Variable "formErrors" does not exist.', 159, $this->source); })()), (("customFields[" . CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 159)) . "]"), [], "array", false, false, false, 159), "html", null, true);
                    yield "</div>
                            ";
                }
                // line 161
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['customField'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "                </div>
            ";
        }
        // line 165
        yield "
            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create Ticket"), "html", null, true);
        yield "</button>
            </div>
        </form>
    </div>
</div>

";
        // line 173
        if ( !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "request", [], "any", false, false, false, 173), "attributes", [], "any", false, false, false, 173), "get", ["_route"], "method", false, false, false, 173), ["helpdesk_member_ticket"])) {
            // line 174
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework\\Templates\\attachment.html.twig");
            yield "
";
        }
        // line 176
        yield "
";
        // line 177
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 177, $this->source); })()), "isFileExists", ["apps/uvdesk/form-component"], "method", false, false, false, 177)) {
            // line 178
            yield "<script>
    customFieldValidation = {};
    customHandler = function(value, attr, computedState) {
        if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible') && !\$('[name=\"'+ attr + '[]' + '\"]').parents('.uv-element-block').is(':visible')) {
            return false;
        } else {
            var ele = \$('[name=\"'+ attr + '\"]');
            ele = ele.length ? ele : \$('[name=\"'+ attr + '[]' + '\"]');
            if (ele[0].type == 'radio') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if (\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });

                return returnMe;
            } else if (ele[0].type == 'checkbox') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if (!\$('#create-ticket-form [name=\"'+ attr + '\"]').val()) {
                return true;
            }
        }
    };
    _.extend(Backbone.Validation.validators, {
        checkAllowedDomain: function(value, attr, customValue, model) {
            if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if (customValue && customValue.indexOf(domain) === -1) {
                return true; //return error
            }
        },
        checkRestrictedDomain: function(value, attr, customValue, model) {
            if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if (customValue && customValue.indexOf(domain) !== -1) {
                return true; //return error
            }
        },
        checkMaxFileSize: function(value, attr, customValue, model) {
            if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            fileInput = \$('input[name=\"' + attr + '\"]')[0] ? \$('input[name=\"' + attr + '\"]')[0] : \$('input[name=\"' + attr + '\"]');
            file = fileInput.files? fileInput.files[0] : '';
            fileSize = file ? file.size / 1024 : 0;
            maxSize = (customValue && parseInt(customValue)) ? parseInt(customValue) : 5120;
            
            if (fileSize > maxSize) {
                return true; //return error
            }
        },
        patternOrEmpty: function(value, attr, pattern, model) {
            defaultPatterns = Backbone.Validation.patterns;
            if (value && !value.toString().match(defaultPatterns[pattern] || pattern)) {
                return true; //error
            }
        },
      minOrEmpty: function(value, attr, minValue, model) {
        if (value && (value < minValue)) {
          return true; //error
        }
      },
      maxOrEmpty: function(value, attr, maxValue, model) {
        if (value && (value > maxValue)) {
          return true; //error
        }
      },
      patternCheck: function(value, attr, pattern, model) {
        if (value && !value.toString().match(pattern)) {
            return true; //error
        }
      },
    });
        ";
            // line 259
            if ((array_key_exists("headerCustomFields", $context) && (isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 259, $this->source); })()))) {
                // line 260
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headerCustomFields"]) || array_key_exists("headerCustomFields", $context) ? $context["headerCustomFields"] : (function () { throw new RuntimeError('Variable "headerCustomFields" does not exist.', 260, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 261
                    yield "                ";
                    $context["fieldtype"] = ((("text" != CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 261))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 261)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 261), "fieldtype", [], "array", true, true, false, 261)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 261), "fieldtype", [], "array", false, false, false, 261)) : ("text"))));
                    // line 262
                    yield "                    customFieldValidation['customFields[' + ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 262), "html", null, true);
                    yield " + ']'] = [
                    ";
                    // line 263
                    if (( !(CoreExtension::inFilter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 263, $this->source); })()), ["checkbox", "radio", "select"]) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "array", false, false, false, 263))) && CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 263))) {
                        // line 264
                        yield "                        {
                        fn : customHandler,
                        msg : '";
                        // line 266
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
                        yield "'
                    },
                    ";
                    }
                    // line 269
                    yield "                    ";
                    if (("number" == (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 269, $this->source); })()))) {
                        // line 270
                        yield "                        {
                            patternOrEmpty : 'number',
                            msg: '";
                        // line 272
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value is not valid number"), "html", null, true);
                        yield "',
                        },
                        ";
                        // line 274
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 274), "minNo", [], "array", false, false, false, 274)) {
                            yield " 
                            {
                                minOrEmpty: ";
                            // line 276
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 276), "minNo", [], "array", false, false, false, 276), "html", null, true);
                            yield ",
                                msg: '";
                            // line 277
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number greater than %min%", ["%min%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 277), "minNo", [], "array", false, false, false, 277)]), "html", null, true);
                            yield "',
                            },
                        ";
                        }
                        // line 280
                        yield "                        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 280), "maxNo", [], "array", false, false, false, 280)) {
                            yield " 
                        {
                            maxOrEmpty: ";
                            // line 282
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 282), "maxNo", [], "array", false, false, false, 282), "html", null, true);
                            yield ",
                            msg: '";
                            // line 283
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number smaller than %max%", ["%max%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 283), "maxNo", [], "array", false, false, false, 283)]), "html", null, true);
                            yield "',
                        },
                        ";
                        }
                        // line 286
                        yield "                    ";
                    } elseif (("email" == (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 286, $this->source); })()))) {
                        // line 287
                        yield "                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '";
                        // line 289
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Address is invalid"), "html", null, true);
                        yield "',
                        },
                        ";
                        // line 291
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 291), "allowedDomain", [], "array", false, false, false, 291)) {
                            // line 292
                            yield "                            {
                                checkAllowedDomain: \"";
                            // line 293
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 293), "allowedDomain", [], "array", false, false, false, 293), "html", null, true);
                            yield "\",
                                msg: '";
                            // line 294
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domain name should be in accepted domains"), "html", null, true);
                            yield "',
                            },
                        ";
                        }
                        // line 297
                        yield "                        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 297), "restrictedDomain", [], "array", false, false, false, 297)) {
                            // line 298
                            yield "                            {
                                checkRestrictedDomain: \"";
                            // line 299
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 299), "restrictedDomain", [], "array", false, false, false, 299), "html", null, true);
                            yield "\",
                                msg: '";
                            // line 300
                            yield "Domain name should not be in restricted domains";
                            yield "',
                            } ,
                        ";
                        }
                        // line 303
                        yield "                    ";
                    } elseif (("url" == (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 303, $this->source); })()))) {
                        // line 304
                        yield "                        {
                            patternOrEmpty: 'url',
                            msg: '";
                        // line 306
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
                        yield "',
                        } ,
                    ";
                    } elseif (("file" ==                     // line 308
(isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 308, $this->source); })()))) {
                        // line 309
                        yield "                        {
                            checkMaxFileSize: \"";
                        // line 310
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 310), "maxFileSize", [], "array", false, false, false, 310), "html", null, true);
                        yield "\",
                            msg: '";
                        // line 311
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file size should not exceed %value% KB", ["%value%" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 311), "maxFileSize", [], "array", true, true, false, 311) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 311), "maxFileSize", [], "array", false, false, false, 311)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 311), "maxFileSize", [], "array", false, false, false, 311)) : ("5120"))]), "html", null, true);
                        yield "',
                        } ,
                    ";
                    }
                    // line 314
                    yield "                    ";
                    if ((((!CoreExtension::inFilter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 314, $this->source); })()), ["checkbox", "radio", "select"])) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 314), "regex", [], "array", true, true, false, 314)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 314), "regex", [], "array", false, false, false, 314))) {
                        // line 315
                        yield "                        {
                            patternCheck: \"";
                        // line 316
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 316), "regex", [], "array", false, false, false, 316), "html", null, true);
                        yield "\",
                            msg: \"";
                        // line 317
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This Field Value is not Valid"), "html", null, true);
                        yield "\",
                        } ,
                    ";
                    }
                    // line 320
                    yield "                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['customField'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 323
                yield "        ";
            }
            // line 324
            yield "        ";
            if ((array_key_exists("CustomerCustomFields", $context) && (isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 324, $this->source); })()))) {
                // line 325
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["CustomerCustomFields"]) || array_key_exists("CustomerCustomFields", $context) ? $context["CustomerCustomFields"] : (function () { throw new RuntimeError('Variable "CustomerCustomFields" does not exist.', 325, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                    // line 326
                    yield "                ";
                    $context["fieldtype"] = ((("text" != CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 326))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "fieldType", [], "array", false, false, false, 326)) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 326), "fieldtype", [], "array", true, true, false, 326)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 326), "fieldtype", [], "array", false, false, false, 326)) : ("text"))));
                    // line 327
                    yield "                    customFieldValidation['customFields[' + ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "id", [], "any", false, false, false, 327), "html", null, true);
                    yield " + ']'] = [
                    ";
                    // line 328
                    if (( !(CoreExtension::inFilter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 328, $this->source); })()), ["checkbox", "radio", "select"]) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "customFieldValues", [], "array", false, false, false, 328))) && CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "required", [], "any", false, false, false, 328))) {
                        // line 329
                        yield "                        {
                        fn : customHandler,
                        msg : '";
                        // line 331
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
                        yield "'
                    },
                    ";
                    }
                    // line 334
                    yield "                    ";
                    if (("number" == (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 334, $this->source); })()))) {
                        // line 335
                        yield "                        {
                            patternOrEmpty : 'number',
                            msg: '";
                        // line 337
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value is not valid number"), "html", null, true);
                        yield "',
                        },
                        ";
                        // line 339
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 339), "minNo", [], "array", false, false, false, 339)) {
                            yield " 
                            {
                                minOrEmpty: ";
                            // line 341
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 341), "minNo", [], "array", false, false, false, 341), "html", null, true);
                            yield ",
                                msg: '";
                            // line 342
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number greater than %min%", ["%min%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 342), "minNo", [], "array", false, false, false, 342)]), "html", null, true);
                            yield "',
                            },
                        ";
                        }
                        // line 345
                        yield "                        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 345), "maxNo", [], "array", false, false, false, 345)) {
                            yield " 
                        {
                            maxOrEmpty: ";
                            // line 347
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 347), "maxNo", [], "array", false, false, false, 347), "html", null, true);
                            yield ",
                            msg: '";
                            // line 348
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide number smaller than %max%", ["%max%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 348), "maxNo", [], "array", false, false, false, 348)]), "html", null, true);
                            yield "',
                        },
                        ";
                        }
                        // line 351
                        yield "                    ";
                    } elseif (("email" == (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 351, $this->source); })()))) {
                        // line 352
                        yield "                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '";
                        // line 354
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Address is invalid"), "html", null, true);
                        yield "',
                        },
                        ";
                        // line 356
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 356), "allowedDomain", [], "array", false, false, false, 356)) {
                            // line 357
                            yield "                            {
                                checkAllowedDomain: \"";
                            // line 358
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 358), "allowedDomain", [], "array", false, false, false, 358), "html", null, true);
                            yield "\",
                                msg: '";
                            // line 359
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Domain name should be in accepted domains"), "html", null, true);
                            yield "',
                            },
                        ";
                        }
                        // line 362
                        yield "                        ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 362), "restrictedDomain", [], "array", false, false, false, 362)) {
                            // line 363
                            yield "                            {
                                checkRestrictedDomain: \"";
                            // line 364
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 364), "restrictedDomain", [], "array", false, false, false, 364), "html", null, true);
                            yield "\",
                                msg: '";
                            // line 365
                            yield "Domain name should not be in restricted domains";
                            yield "',
                            } ,
                        ";
                        }
                        // line 368
                        yield "                    ";
                    } elseif (("url" == (isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 368, $this->source); })()))) {
                        // line 369
                        yield "                        {
                            patternOrEmpty: 'url',
                            msg: '";
                        // line 371
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Provide a valid url(with protocol)"), "html", null, true);
                        yield "',
                        } ,
                    ";
                    } elseif (("file" ==                     // line 373
(isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 373, $this->source); })()))) {
                        // line 374
                        yield "                        {
                            checkMaxFileSize: \"";
                        // line 375
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 375), "maxFileSize", [], "array", false, false, false, 375), "html", null, true);
                        yield "\",
                            msg: '";
                        // line 376
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("file size should not exceed %value% KB", ["%value%" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 376), "maxFileSize", [], "array", true, true, false, 376) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 376), "maxFileSize", [], "array", false, false, false, 376)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 376), "maxFileSize", [], "array", false, false, false, 376)) : ("5120"))]), "html", null, true);
                        yield "',
                        } ,
                    ";
                    }
                    // line 379
                    yield "                    ";
                    if ((((!CoreExtension::inFilter((isset($context["fieldtype"]) || array_key_exists("fieldtype", $context) ? $context["fieldtype"] : (function () { throw new RuntimeError('Variable "fieldtype" does not exist.', 379, $this->source); })()), ["checkbox", "radio", "select"])) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, true, false, 379), "regex", [], "array", true, true, false, 379)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 379), "regex", [], "array", false, false, false, 379))) {
                        // line 380
                        yield "                        {
                            patternCheck: \"";
                        // line 381
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["customField"], "validation", [], "array", false, false, false, 381), "regex", [], "array", false, false, false, 381), "html", null, true);
                        yield "\",
                            msg: \"";
                        // line 382
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This Field Value is not Valid"), "html", null, true);
                        yield "\",
                        } ,
                    ";
                    }
                    // line 385
                    yield "                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['customField'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 388
                yield "        ";
            }
            // line 389
            yield "    var validationParameters = true;
</script>
";
        }
        // line 392
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/Templates/tinyMCE.html.twig");
        yield "

<script type=\"text/javascript\">
    \$(function () {
        if (typeof(customFieldValidation) == 'undefined') {
            customFieldValidation = {};
        }
        ";
        // line 399
        if (array_key_exists("removeMe", $context)) {
            // line 400
            yield "            \$.each(";
            yield json_encode((isset($context["removeMe"]) || array_key_exists("removeMe", $context) ? $context["removeMe"] : (function () { throw new RuntimeError('Variable "removeMe" does not exist.', 400, $this->source); })()));
            yield ", function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        ";
        }
        // line 404
        yield "
        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: _.extend(customFieldValidation, {
                ";
        // line 421
        if ( !(isset($context["isTicketViewPage"]) || array_key_exists("isTicketViewPage", $context) ? $context["isTicketViewPage"] : (function () { throw new RuntimeError('Variable "isTicketViewPage" does not exist.', 421, $this->source); })())) {
            // line 422
            yield "                    'name' : {
                        required : true,
                        msg : \"";
            // line 424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            yield "\"
                    },
                    'from' :
                    [{
                        required : true,
                        msg : \"";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
            yield "\"
                    },{
                        pattern : /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg : \"";
            // line 432
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
            yield "\"
                    }],
                ";
        }
        // line 435
        yield "                'type' : {
                    required : true,
                    msg : \"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
                },
                'subject' : {
                    required : true,
                    msg : \"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
                },
                'reply' : {
                    fn: function(value) {
                            if(!tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if(app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            return true;
                        },
                    msg : \"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
                },
            }),
            urlRoot : \"";
        // line 456
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_create_ticket");
        yield "\"
        });

        sfTinyMce.init({
            height: '155px',
\t\t\tselector : '#create-reply',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            },
\t\t\tplugins: [
            ],
\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t});

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('";
        // line 475
        yield ((array_key_exists("errors", $context)) ? ((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 475, $this->source); })())) : ("{}"));
        yield "');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'change #type': \"updateCustomFields\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanged',
                'change input[type=file].create-ticket': 'formChanged',
            },
            formChanged: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            },
            updateCustomFields: function (e) {
                const dependentFields = e.currentTarget.value;
                this.\$('.dependent').hide();
                this.\$('.dependency' + dependentFields).show();
            }
        });

        new CreateTicketForm();
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig";
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
        return array (  1055 => 475,  1033 => 456,  1027 => 453,  1012 => 441,  1005 => 437,  1001 => 435,  995 => 432,  989 => 429,  981 => 424,  977 => 422,  975 => 421,  956 => 404,  948 => 400,  946 => 399,  936 => 392,  931 => 389,  928 => 388,  920 => 385,  914 => 382,  910 => 381,  907 => 380,  904 => 379,  898 => 376,  894 => 375,  891 => 374,  889 => 373,  884 => 371,  880 => 369,  877 => 368,  871 => 365,  867 => 364,  864 => 363,  861 => 362,  855 => 359,  851 => 358,  848 => 357,  846 => 356,  841 => 354,  837 => 352,  834 => 351,  828 => 348,  824 => 347,  818 => 345,  812 => 342,  808 => 341,  803 => 339,  798 => 337,  794 => 335,  791 => 334,  785 => 331,  781 => 329,  779 => 328,  774 => 327,  771 => 326,  766 => 325,  763 => 324,  760 => 323,  752 => 320,  746 => 317,  742 => 316,  739 => 315,  736 => 314,  730 => 311,  726 => 310,  723 => 309,  721 => 308,  716 => 306,  712 => 304,  709 => 303,  703 => 300,  699 => 299,  696 => 298,  693 => 297,  687 => 294,  683 => 293,  680 => 292,  678 => 291,  673 => 289,  669 => 287,  666 => 286,  660 => 283,  656 => 282,  650 => 280,  644 => 277,  640 => 276,  635 => 274,  630 => 272,  626 => 270,  623 => 269,  617 => 266,  613 => 264,  611 => 263,  606 => 262,  603 => 261,  598 => 260,  596 => 259,  513 => 178,  511 => 177,  508 => 176,  502 => 174,  500 => 173,  491 => 167,  487 => 165,  483 => 163,  476 => 161,  470 => 159,  467 => 158,  463 => 156,  460 => 155,  458 => 154,  455 => 153,  452 => 152,  440 => 148,  430 => 145,  425 => 142,  420 => 141,  417 => 140,  415 => 139,  412 => 138,  409 => 137,  407 => 136,  404 => 135,  401 => 134,  389 => 130,  379 => 127,  374 => 124,  369 => 123,  366 => 122,  364 => 121,  361 => 120,  358 => 119,  356 => 118,  353 => 117,  348 => 114,  337 => 112,  333 => 111,  329 => 110,  321 => 109,  318 => 108,  315 => 107,  313 => 106,  303 => 103,  300 => 102,  298 => 101,  288 => 98,  285 => 97,  283 => 96,  266 => 94,  263 => 93,  261 => 92,  247 => 89,  244 => 88,  242 => 87,  236 => 86,  219 => 85,  215 => 84,  212 => 83,  209 => 82,  206 => 81,  199 => 76,  195 => 74,  189 => 70,  183 => 67,  178 => 65,  175 => 64,  169 => 60,  161 => 55,  158 => 54,  152 => 50,  148 => 48,  134 => 45,  130 => 44,  126 => 43,  120 => 40,  117 => 39,  114 => 37,  108 => 35,  106 => 34,  100 => 31,  93 => 27,  90 => 26,  84 => 22,  77 => 18,  74 => 17,  72 => 16,  69 => 15,  65 => 13,  58 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .mce-path {
      \t\tdisplay: none !important;
\t}
</style>

{% set isTicketViewPage = ('helpdesk_member_ticket' == app.request.attributes.get('_route')) %}

<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"create-ticket-modal\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2>Create Ticket</h2>
        <form action=\"{{ path('helpdesk_member_create_ticket') }}\" method=\"post\" id=\"create-ticket-form\" enctype=\"multipart/form-data\">
            {# Customer Details #}
            {% if not isTicketViewPage %}
                {# Name #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer full name'|trans }}</span>
                </div>

                {# Email #}
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"from\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                    </div>
                    <span class=\"uv-field-info\">{{ 'Customer email address'|trans }}</span>
                </div>
            {% else %}
                {# Retrieve customer details from the current ticket being visited #}
                <span class=\"uv-field-info\">{{ \"Ticket will be created with current ticket's customer\"|trans }}</span>
            {% endif %}

            {# Ticket Type #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                <div class=\"uv-field-block\">
                    <select name=\"type\" class=\"uv-select create-ticket\" id=\"type\">
                        <option value=\"\">{{ 'Select type'|trans }}</option>
                            {% for type in ticket_service.getTypes()  %}
                                <option value=\"{{ type.id }}\" {{ post.type is defined and post.type == type.id ? 'selected' : '' }}>{{ type.name }}
                                </option>
                            {% endfor %}
                    </select>
                </div>
                <span class=\"uv-field-info\">{{ 'Choose ticket type'|trans }}</span>
            </div>

            {# Ticket Subject #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Subject'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input name=\"subject\" class=\"uv-field create-ticket\" type=\"text\" value=\"\">
                </div>

                <span class=\"uv-field-info\">{{ 'Ticket subject'|trans }}</span>
            </div>

            {# Ticket Message #}
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Message'|trans }}</label>
                <div class=\"uv-field-block\">
                    <textarea name=\"reply\" id=\"create-reply\" class=\"uv-field create-ticket\" type=\"text\">{{ ticket_service.getAgentDraftReply() }}</textarea>
                </div>
                
                <span class=\"uv-field-info\">{{ 'Ticket query message'|trans }}</span>
            </div>

            {# Ticket Attachment #}
            <div class=\"uv-element-block attachment-block uv-no-error-success-icon\" id=\"uv-attachment-option\">
                <label>
                    <span class=\"uv-file-label\">{{ 'Add Attachment'|trans }}</span>
                </label>
            </div>

            {# CustomFields #}
            {% set removeMe = [] %}
            {% if headerCustomFields %}
                <div class=\"custom-fields clearfix\">
                    {% for key, customField in headerCustomFields %}
                        <div class=\"uv-element-block input-group {{ customField.customFieldsDependency|length ? 'dependent' : '' }} {% for customFieldCustomFieldsDependency in customField.customFieldsDependency %} dependency{{customFieldCustomFieldsDependency.id}}{% endfor %}\" style=\"position: relative; {{ customField.customFieldsDependency|length ? 'display: none;' : '' }}\">
                            <label class=\"uv-field-label\" for=\"for{{customField.name~customField.id}}\">{{ customField.name }}</label>
                            {% if customField.fieldType == 'text' %}
                                <div class=\"uv-field-block\">
                                    <input type=\"{{ customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] :'text' }}\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" value=\"\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" placeholder=\"{{customField.placeholder}}\">
                                </div>

                            {% elseif customField.fieldType in ['date', 'time', 'datetime'] %}
                                <div class=\"uv-field-block\">
                                    <input class=\"uv-field form-control create-ticket uv-date-picker {% if customField.fieldType == 'time' %}time{% else %}calendar{% endif %} uv-header-{{ customField.fieldType }}\" type=\"text\" name=\"customFields[{{customField.id}}]\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\" value=\"\">
                                </div>
                            {% elseif customField.fieldType == 'textarea' %}
                                <div class=\"uv-field-block\">
                                    <textarea name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\"></textarea>
                                </div>

                            {% elseif customField.fieldType in ['file'] %}
                                <div class=\"uv-field-block\">
                                    <input type=\"file\" name=\"customFields[{{customField.id}}]\" class=\"uv-field create-ticket\" {{ customField.required ? \"required\" : \"\" }} id=\"for{{customField.name~customField.id}}\">
                                </div>

                            {% elseif customField.fieldType in ['select'] %}
                                {% if customField.customFieldValues is not empty %}
                                    <div class=\"uv-field-block\">
                                        <select name=\"customFields[{{customField.id}}]\" class=\"uv-select create-ticket\" id=\"for{{customField.name~customField.id}}\" {{ customField.required ? \"required\" : \"\" }}>
                                            <option value=\"\">{{ 'Select option' }}</option>
                                            {% for customFieldValues in customField.customFieldValues %}
                                                <option value=\"{{customFieldValues.id}}\">{{customFieldValues.name}}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% elseif customField.fieldType in ['checkbox'] %}
                                {% if customField.customFieldValues is not empty %}
                                    {% for customFieldValues in customField.customFieldValues %}
                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input type=\"checkbox\" name=\"customFields[{{customField.id}}][]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% elseif customField.fieldType in ['radio'] %}
                                {% if customField.customFieldValues is not empty %}
                                    {% for customFieldValues in customField.customFieldValues %}
                                        <div class=\"uv-split-field\">
                                            <label>
                                                <div class=\"uv-radio\">
                                                    <input type=\"radio\" name=\"customFields[{{customField.id}}]\" value=\"{{customFieldValues.id}}\" id=\"for{{customFieldValues.name~customFieldValues.id}}\" class=\"create-ticket\"/>
                                                    <span class=\"uv-radio-view\"></span>
                                                </div>
                                                <span class=\"uv-radio-label\" for=\"for{{customFieldValues.name~customFieldValues.id}}\">{{ customFieldValues.name }}</span>
                                            </label>
                                        </div>
                                    {% endfor %}
                                {% else %}
                                    <!--Hide this beacause choices aren't available-->
                                    {% set removeMe = removeMe|merge([\"for\"~customField.name~customField.id]) %}
                                {% endif %}

                            {% endif %}
                            {% if formErrors['customFields['~customField.id~']'] is defined %}
                                <div class=\"text-danger\">{{formErrors['customFields['~customField.id~']']}}</div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            {% endif %}

            <div class=\"uv-element-block\">
                <button type=\"submit\" id=\"create-ticket-btn\" class=\"uv-btn\">{{ 'Create Ticket'|trans }}</button>
            </div>
        </form>
    </div>
</div>

{% if not(app.request.attributes.get('_route') in ['helpdesk_member_ticket']) %}
    {{ include('@UVDeskCoreFramework\\\\Templates\\\\attachment.html.twig') }}
{% endif %}

{% if user_service.isFileExists('apps/uvdesk/form-component') %}
<script>
    customFieldValidation = {};
    customHandler = function(value, attr, computedState) {
        if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible') && !\$('[name=\"'+ attr + '[]' + '\"]').parents('.uv-element-block').is(':visible')) {
            return false;
        } else {
            var ele = \$('[name=\"'+ attr + '\"]');
            ele = ele.length ? ele : \$('[name=\"'+ attr + '[]' + '\"]');
            if (ele[0].type == 'radio') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if (\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });

                return returnMe;
            } else if (ele[0].type == 'checkbox') {
                var returnMe = true;
                \$.each(ele, function(key, eleChild) {
                    if(\$(eleChild).is(':checked')) {
                        returnMe = false;
                    }
                });
                return returnMe;
            } else if (!\$('#create-ticket-form [name=\"'+ attr + '\"]').val()) {
                return true;
            }
        }
    };
    _.extend(Backbone.Validation.validators, {
        checkAllowedDomain: function(value, attr, customValue, model) {
            if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if (customValue && customValue.indexOf(domain) === -1) {
                return true; //return error
            }
        },
        checkRestrictedDomain: function(value, attr, customValue, model) {
            if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            domain = value.substring(value.indexOf(\"@\") + 1);
            if (customValue && customValue.indexOf(domain) !== -1) {
                return true; //return error
            }
        },
        checkMaxFileSize: function(value, attr, customValue, model) {
            if (!\$('[name=\"'+ attr + '\"]').parents('.uv-element-block').is(':visible'))
                return false;
            fileInput = \$('input[name=\"' + attr + '\"]')[0] ? \$('input[name=\"' + attr + '\"]')[0] : \$('input[name=\"' + attr + '\"]');
            file = fileInput.files? fileInput.files[0] : '';
            fileSize = file ? file.size / 1024 : 0;
            maxSize = (customValue && parseInt(customValue)) ? parseInt(customValue) : 5120;
            
            if (fileSize > maxSize) {
                return true; //return error
            }
        },
        patternOrEmpty: function(value, attr, pattern, model) {
            defaultPatterns = Backbone.Validation.patterns;
            if (value && !value.toString().match(defaultPatterns[pattern] || pattern)) {
                return true; //error
            }
        },
      minOrEmpty: function(value, attr, minValue, model) {
        if (value && (value < minValue)) {
          return true; //error
        }
      },
      maxOrEmpty: function(value, attr, maxValue, model) {
        if (value && (value > maxValue)) {
          return true; //error
        }
      },
      patternCheck: function(value, attr, pattern, model) {
        if (value && !value.toString().match(pattern)) {
            return true; //error
        }
      },
    });
        {% if headerCustomFields is defined and headerCustomFields %}
            {% for customField in headerCustomFields %}
                {% set fieldtype = ('text' != customField['fieldType']) ? customField['fieldType'] : (customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] : 'text') %}
                    customFieldValidation['customFields[' + {{ customField.id }} + ']'] = [
                    {% if not(fieldtype in ['checkbox', 'radio', 'select'] and customField['customFieldValues'] is empty) and customField.required %}
                        {
                        fn : customHandler,
                        msg : '{{ \"This field is mandatory\"|trans }}'
                    },
                    {% endif %}
                    {% if('number' == fieldtype) %}
                        {
                            patternOrEmpty : 'number',
                            msg: '{{ \"Value is not valid number\"|trans }}',
                        },
                        {% if customField['validation']['minNo'] %} 
                            {
                                minOrEmpty: {{ customField['validation']['minNo'] }},
                                msg: '{{ \"Provide number greater than %min%\"|trans({\"%min%\": customField[\"validation\"][\"minNo\"] }) }}',
                            },
                        {% endif %}
                        {% if customField['validation']['maxNo'] %} 
                        {
                            maxOrEmpty: {{ customField['validation']['maxNo'] }},
                            msg: '{{ \"Provide number smaller than %max%\"|trans({\"%max%\": customField[\"validation\"][\"maxNo\"] }) }}',
                        },
                        {% endif %}
                    {% elseif('email' == fieldtype) %}
                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '{{ \"Email Address is invalid\"|trans }}',
                        },
                        {% if customField['validation']['allowedDomain'] %}
                            {
                                checkAllowedDomain: \"{{ customField['validation']['allowedDomain'] }}\",
                                msg: '{{ \"Domain name should be in accepted domains\"|trans }}',
                            },
                        {% endif %}
                        {% if customField['validation']['restrictedDomain'] %}
                            {
                                checkRestrictedDomain: \"{{ customField['validation']['restrictedDomain'] }}\",
                                msg: '{{ \"Domain name should not be in restricted domains\" }}',
                            } ,
                        {% endif %}
                    {% elseif('url' == fieldtype) %}
                        {
                            patternOrEmpty: 'url',
                            msg: '{{ \"Provide a valid url(with protocol)\"|trans }}',
                        } ,
                    {% elseif('file' == fieldtype) %}
                        {
                            checkMaxFileSize: \"{{ customField['validation']['maxFileSize'] }}\",
                            msg: '{{ \"file size should not exceed %value% KB\"|trans({\"%value%\": customField[\"validation\"][\"maxFileSize\"] ?? \"5120\"}) }}',
                        } ,
                    {% endif %}
                    {% if (not (fieldtype in ['checkbox', 'radio', 'select'])) and customField['validation']['regex'] is defined and customField['validation']['regex'] %}
                        {
                            patternCheck: \"{{ customField['validation']['regex'] }}\",
                            msg: \"{{ 'This Field Value is not Valid'|trans }}\",
                        } ,
                    {% endif %}
                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            {% endfor %}
        {% endif %}
        {% if CustomerCustomFields is defined and CustomerCustomFields %}
            {% for customField in CustomerCustomFields %}
                {% set fieldtype = ('text' != customField['fieldType']) ? customField['fieldType'] : (customField['validation']['fieldtype'] is defined ? customField['validation']['fieldtype'] : 'text') %}
                    customFieldValidation['customFields[' + {{ customField.id }} + ']'] = [
                    {% if not(fieldtype in ['checkbox', 'radio', 'select'] and customField['customFieldValues'] is empty) and customField.required %}
                        {
                        fn : customHandler,
                        msg : '{{ \"This field is mandatory\"|trans }}'
                    },
                    {% endif %}
                    {% if('number' == fieldtype) %}
                        {
                            patternOrEmpty : 'number',
                            msg: '{{ \"Value is not valid number\"|trans }}',
                        },
                        {% if customField['validation']['minNo'] %} 
                            {
                                minOrEmpty: {{ customField['validation']['minNo'] }},
                                msg: '{{ \"Provide number greater than %min%\"|trans({\"%min%\": customField[\"validation\"][\"minNo\"] }) }}',
                            },
                        {% endif %}
                        {% if customField['validation']['maxNo'] %} 
                        {
                            maxOrEmpty: {{ customField['validation']['maxNo'] }},
                            msg: '{{ \"Provide number smaller than %max%\"|trans({\"%max%\": customField[\"validation\"][\"maxNo\"] }) }}',
                        },
                        {% endif %}
                    {% elseif('email' == fieldtype) %}
                        {
                            patternOrEmpty: /^((([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+(\\.([a-z]|\\d|[!#\\\$%&'\\*\\+\\-\\/=\\?\\^_`{\\|}~]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])+)*)|((\\x22)((((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(([\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x7f]|\\x21|[\\x23-\\x5b]|[\\x5d-\\x7e]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(\\\\([\\x01-\\x09\\x0b\\x0c\\x0d-\\x7f]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF]))))*(((\\x20|\\x09)*(\\x0d\\x0a))?(\\x20|\\x09)+)?(\\x22)))@((([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|\\d|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\\.)+(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])|(([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])([a-z]|\\d|-|\\.|_|~|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])*([a-z]|[\\u00A0-\\uD7FF\\uF900-\\uFDCF\\uFDF0-\\uFFEF])))\$/i,
                            msg: '{{ \"Email Address is invalid\"|trans }}',
                        },
                        {% if customField['validation']['allowedDomain'] %}
                            {
                                checkAllowedDomain: \"{{ customField['validation']['allowedDomain'] }}\",
                                msg: '{{ \"Domain name should be in accepted domains\"|trans }}',
                            },
                        {% endif %}
                        {% if customField['validation']['restrictedDomain'] %}
                            {
                                checkRestrictedDomain: \"{{ customField['validation']['restrictedDomain'] }}\",
                                msg: '{{ \"Domain name should not be in restricted domains\" }}',
                            } ,
                        {% endif %}
                    {% elseif('url' == fieldtype) %}
                        {
                            patternOrEmpty: 'url',
                            msg: '{{ \"Provide a valid url(with protocol)\"|trans }}',
                        } ,
                    {% elseif('file' == fieldtype) %}
                        {
                            checkMaxFileSize: \"{{ customField['validation']['maxFileSize'] }}\",
                            msg: '{{ \"file size should not exceed %value% KB\"|trans({\"%value%\": customField[\"validation\"][\"maxFileSize\"] ?? \"5120\"}) }}',
                        } ,
                    {% endif %}
                    {% if (not (fieldtype in ['checkbox', 'radio', 'select'])) and customField['validation']['regex'] is defined and customField['validation']['regex'] %}
                        {
                            patternCheck: \"{{ customField['validation']['regex'] }}\",
                            msg: \"{{ 'This Field Value is not Valid'|trans }}\",
                        } ,
                    {% endif %}
                ];
                Array.isArray(validationParameters) ? validationParameters.push(value) : false;
            {% endfor %}
        {% endif %}
    var validationParameters = true;
</script>
{% endif %}
{{ include(\"@UVDeskSupportCenter/Templates/tinyMCE.html.twig\") }}

<script type=\"text/javascript\">
    \$(function () {
        if (typeof(customFieldValidation) == 'undefined') {
            customFieldValidation = {};
        }
        {% if(removeMe is defined) %}
            \$.each({{ removeMe | json_encode |raw }}, function(key, value){
                \$('label[for=\"' + value + '\"]').parent().hide();
            });
        {% endif %}

        \$('.uv-header-date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
        \$('.uv-header-time').datetimepicker({
            format: 'LT',
        });
        \$('.uv-header-datetime').datetimepicker({
            format: 'YYYY-MM-DD H:m:s'
        });

        var CreateTicketModel = Backbone.Model.extend({
            idAttribute : \"id\",
            defaults : {
                path : \"\",
            },
            validation: _.extend(customFieldValidation, {
                {% if not isTicketViewPage %}
                    'name' : {
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },
                    'from' :
                    [{
                        required : true,
                        msg : \"{{ 'This field is mandatory'|trans }}\"
                    },{
                        pattern : /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg : \"{{ 'Email address is invalid'|trans }}\"
                    }],
                {% endif %}
                'type' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'subject' : {
                    required : true,
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
                'reply' : {
                    fn: function(value) {
                            if(!tinyMCE.get(\"uv-edit-create-thread\"))
                                return false;
                            var html = tinyMCE.get(\"uv-edit-create-thread\").getContent();
                            if(app.appView.stripHTML(html) != '') {
                                return false;
                            }
                            return true;
                        },
                    msg : \"{{ 'This field is mandatory'|trans }}\"
                },
            }),
            urlRoot : \"{{ path('helpdesk_member_create_ticket') }}\"
        });

        sfTinyMce.init({
            height: '155px',
\t\t\tselector : '#create-reply',
\t\t\timages_upload_url: \"\",
            setup: function(editor) {
            },
\t\t\tplugins: [
            ],
\t\t\ttoolbar: '| undo redo | bold italic forecolor ',
\t\t});

        var CreateTicketForm = Backbone.View.extend({
            el : \$(\"#create-ticket-modal #create-ticket-form\"),
            model: new CreateTicketModel(),
            initialize : function() {
                Backbone.Validation.bind(this);
                var jsonContext = JSON.parse('{{ errors is defined ? errors|raw : \"{}\"  }}');
                for (var field in jsonContext) {
                    Backbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
                }
            },
            events : {
                'click #create-ticket-btn': \"saveTicket\",
                'change #type': \"updateCustomFields\",
                'blur input.create-ticket:not(input[type=file]), textarea.create-ticket, select.create-ticket, checkbox.create-ticket': 'formChanged',
                'change input[type=file].create-ticket': 'formChanged',
            },
            formChanged: function(e) {
                this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
            },
            saveTicket: function (e) {
                e.preventDefault();
                var currentElement = Backbone.\$(e.currentTarget);
                var data = currentElement.closest('form').serializeObject();
                this.model = new CreateTicketModel();
                this.model.set(data);
                Backbone.Validation.bind(this);
                
                if (this.model.isValid(true)) {
                    \$('#create-ticket-form').submit();
                    \$('form').find('#create-ticket-btn').attr('disabled', 'disabled');
                }
            },
            updateCustomFields: function (e) {
                const dependentFields = e.currentTarget.value;
                this.\$('.dependent').hide();
                this.\$('.dependency' + dependentFields).show();
            }
        });

        new CreateTicketForm();
    });
</script>", "@UVDeskCoreFramework/Snippets/createMemberTicket.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Snippets/createMemberTicket.html.twig");
    }
}
