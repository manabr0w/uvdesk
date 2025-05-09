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

/* @UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig */
class __TwigTemplate_f0c138176189da6c36e2f724f4e680de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_APPLY_WORKFLOW"], "method", false, false, false, 1)) {
            // line 2
            yield "    <div class=\"uv-dropdown\">
        <div class=\"uv-dropdown-btn\">";
            // line 3
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prepared Responses"), "html", null, true);
            yield "</div>
        <div class=\"uv-dropdown-list uv-top-left\">
            <div class=\"uv-dropdown-container prepared-responses\">
                <label>";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prepared Responses"), "html", null, true);
            yield "</label>
                <ul>
                    <li>
                        <a class=\"create-new\" href=\"";
            // line 9
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prepare_response_action");
            yield "\" target=\"_blank\" style=\"color: #2750C4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create New"), "html", null, true);
            yield "</a>
                    </li>
                    
                    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 12, $this->source); })()), "getManualWorkflow", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["preparedResponse"]) {
                // line 13
                yield "                        <li>
                            <a href=\"";
                // line 14
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_prepared_response_xhr");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ticketId"]) || array_key_exists("ticketId", $context) ? $context["ticketId"] : (function () { throw new RuntimeError('Variable "ticketId" does not exist.', 14, $this->source); })()), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preparedResponse"], "id", [], "any", false, false, false, 14), "html", null, true);
                yield "\">
                                ";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preparedResponse"], "name", [], "any", false, false, false, 15), "html", null, true);
                yield "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preparedResponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig";
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
        return array (  98 => 19,  88 => 15,  80 => 14,  77 => 13,  73 => 12,  65 => 9,  59 => 6,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if user_service.isAccessAuthorized('ROLE_AGENT_APPLY_WORKFLOW') %}
    <div class=\"uv-dropdown\">
        <div class=\"uv-dropdown-btn\">{{ 'Prepared Responses'|trans }}</div>
        <div class=\"uv-dropdown-list uv-top-left\">
            <div class=\"uv-dropdown-container prepared-responses\">
                <label>{{ 'Prepared Responses'|trans }}</label>
                <ul>
                    <li>
                        <a class=\"create-new\" href=\"{{path('prepare_response_action')}}\" target=\"_blank\" style=\"color: #2750C4\">{{ 'Create New'|trans }}</a>
                    </li>
                    
                    {% for preparedResponse in ticket_service.getManualWorkflow() %}
                        <li>
                            <a href=\"{{ path('helpdesk_member_ticket_prepared_response_xhr') }}/{{ ticketId }}/{{ preparedResponse.id }}\">
                                {{ preparedResponse.name }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
{% endif %}", "@UVDeskAutomation/tickets/quick-actions/prepared-responses.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/tickets/quick-actions/prepared-responses.html.twig");
    }
}
