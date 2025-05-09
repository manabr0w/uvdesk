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

/* @UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig */
class __TwigTemplate_2ce13dc5e2bd3cf2be3fb8043c2a2fed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig"));

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
        <div style=\"display: flex; align-items: center;\">
            <p style=\"flex: 1; margin: unset;\">
                <label class=\"uv-field-label\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OTP"), "html", null, true);
        yield "</label>
            </p>

            <ul class=\"uv-login-form-inline-actions\" style=\"margin: unset;\">
                <li><a id=\"uv-resend-otp\" class=\"uv-resend-otp\"  style=\"color: #2750c4; padding: unset; background: unset; border: unset; cursor:pointer\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resend OTP"), "html", null, true);
        yield "</a></li>
            </ul>
        </div>

        <div class=\"uv-field-block uv-relative\">
            <input class=\"uv-field\" type=\"text\" name=\"otp\" style=\"margin-bottom: unset;\">
        </div>
    </div>
  
    <button class=\"uv-btn uv-submit-form\" id=\"uv-btn-with-pass\">";
        // line 25
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
        return "@UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig";
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
        return array (  83 => 25,  71 => 16,  64 => 12,  52 => 3,  48 => 1,);
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
        <div style=\"display: flex; align-items: center;\">
            <p style=\"flex: 1; margin: unset;\">
                <label class=\"uv-field-label\">{{ 'OTP'|trans }}</label>
            </p>

            <ul class=\"uv-login-form-inline-actions\" style=\"margin: unset;\">
                <li><a id=\"uv-resend-otp\" class=\"uv-resend-otp\"  style=\"color: #2750c4; padding: unset; background: unset; border: unset; cursor:pointer\">{{ 'Resend OTP'|trans }}</a></li>
            </ul>
        </div>

        <div class=\"uv-field-block uv-relative\">
            <input class=\"uv-field\" type=\"text\" name=\"otp\" style=\"margin-bottom: unset;\">
        </div>
    </div>
  
    <button class=\"uv-btn uv-submit-form\" id=\"uv-btn-with-pass\">{{ 'Sign In'|trans }}</button>
</div>
", "@UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/CustomerLogin/customer-login-form-otp-credentials-template.html.twig");
    }
}
