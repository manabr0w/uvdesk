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

/* @UVDeskCoreFramework/tickets/quick-actions/saved-replies.html.twig */
class __TwigTemplate_8200294bc109b3b7ab109b11d48e5e1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/tickets/quick-actions/saved-replies.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/tickets/quick-actions/saved-replies.html.twig"));

        // line 1
        yield "<div class=\"uv-dropdown saved-reply\">
    <div class=\"uv-dropdown-btn\">";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Replies"), "html", null, true);
        yield "</div>
    <div class=\"uv-dropdown-list uv-top-left\" style=\"width:360px !important;\">
        <div class=\"uv-dropdown-container\">
            <label>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Replies"), "html", null, true);
        yield "</label>
            <ul id=\"listSavedReplies\">
                <input id=\"filterSavedreplies\" type=\"text\" class=\"uv-search-inline\" autofocus=\"autofocus\"  style=\"width:98%\">
                <li data-id=\"\">
                    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_replies");
        yield "\" target=\"_blank\" style=\"color: #2750C4\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("create new"), "html", null, true);
        yield "</a>
                </li>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 11, $this->source); })()), "getSavedReplies", [], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["savedReply"]) {
            // line 12
            yield "                    <li class=\"savedReplyData\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["savedReply"], "id", [], "any", false, false, false, 12), "html", null, true);
            yield "\">
                        ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["savedReply"], "name", [], "any", false, false, false, 13), "html", null, true);
            yield "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['savedReply'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskCoreFramework/tickets/quick-actions/saved-replies.html.twig";
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
        return array (  89 => 16,  80 => 13,  75 => 12,  71 => 11,  64 => 9,  57 => 5,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-dropdown saved-reply\">
    <div class=\"uv-dropdown-btn\">{{ 'Saved Replies'|trans }}</div>
    <div class=\"uv-dropdown-list uv-top-left\" style=\"width:360px !important;\">
        <div class=\"uv-dropdown-container\">
            <label>{{ 'Saved Replies'|trans }}</label>
            <ul id=\"listSavedReplies\">
                <input id=\"filterSavedreplies\" type=\"text\" class=\"uv-search-inline\" autofocus=\"autofocus\"  style=\"width:98%\">
                <li data-id=\"\">
                    <a href=\"{{ path('helpdesk_member_saved_replies') }}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'create new'|trans }}</a>
                </li>
                {% for savedReply in ticket_service.getSavedReplies() %}
                    <li class=\"savedReplyData\" data-id=\"{{ savedReply.id }}\">
                        {{ savedReply.name }}
                    </li>
                {% endfor %}
            </ul>
        </div>
    </div>
</div>
", "@UVDeskCoreFramework/tickets/quick-actions/saved-replies.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/tickets/quick-actions/saved-replies.html.twig");
    }
}
