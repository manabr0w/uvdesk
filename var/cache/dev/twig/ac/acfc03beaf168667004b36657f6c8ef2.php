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

/* @UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig */
class __TwigTemplate_bb0e28218c49e93867e990888a13e69b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig"));

        // line 1
        yield "<div class=\"uv-form\">
    <div class=\"uv-element-block\">
        <label class=\"uv-field-label\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
        <div class=\"uv-field-block\">
            <input class=\"uv-field\" type=\"email\" name=\"_username\" value=\"<%= _username %>\">
        </div>
    </div>

    <div class=\"uv-element-block\">
        <label class=\"uv-field-label\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>
        <div class=\"uv-field-block uv-relative\">
            <a class=\"uv-forgot-pwd\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_forgot_account_password");
        yield "\" tabIndex=\"-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot Password?"), "html", null, true);
        yield "</a>
            <input class=\"uv-field\" type=\"password\" name=\"_password\">
        </div>
    </div>
    
    <button class=\"uv-btn uv-submit-form\" id=\"uv-btn-with-pass\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign In"), "html", null, true);
        yield "</button>
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
        return "@UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig";
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
        return array (  77 => 17,  67 => 12,  62 => 10,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-form\">
    <div class=\"uv-element-block\">
        <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
        <div class=\"uv-field-block\">
            <input class=\"uv-field\" type=\"email\" name=\"_username\" value=\"<%= _username %>\">
        </div>
    </div>

    <div class=\"uv-element-block\">
        <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
        <div class=\"uv-field-block uv-relative\">
            <a class=\"uv-forgot-pwd\" href=\"{{ path('helpdesk_forgot_account_password') }}\" tabIndex=\"-1\">{{ 'Forgot Password?'|trans }}</a>
            <input class=\"uv-field\" type=\"password\" name=\"_password\">
        </div>
    </div>
    
    <button class=\"uv-btn uv-submit-form\" id=\"uv-btn-with-pass\">{{ 'Sign In'|trans }}</button>
</div>
", "@UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/CustomerLogin/customer-login-form-original-credentials-template.html.twig");
    }
}
