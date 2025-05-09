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

/* @UVDeskSupportCenter/CustomerLogin/customer-login-otp-verification-email.html.twig */
class __TwigTemplate_24d1430ba25132ce903d4a19b643313e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login-otp-verification-email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login-otp-verification-email.html.twig"));

        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
    <body style=\"font-family: sans-serif; line-height:24px; background-image: none;\">
        <div style=\"background-color:#887bf6; height:6px; \"></div>
        ";
        // line 5
        if ((isset($context["helpdeskLogo"]) || array_key_exists("helpdeskLogo", $context) ? $context["helpdeskLogo"] : (function () { throw new RuntimeError('Variable "helpdeskLogo" does not exist.', 5, $this->source); })())) {
            // line 6
            yield "            <img src= ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["helpdeskLogo"]) || array_key_exists("helpdeskLogo", $context) ? $context["helpdeskLogo"] : (function () { throw new RuntimeError('Variable "helpdeskLogo" does not exist.', 6, $this->source); })()), "html", null, true);
            yield " style=\"margin:20px 0;\" alt=\"header-image\">
        ";
        }
        // line 8
        yield "
        <p>Hello ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 9, $this->source); })()), "html", null, true);
        yield ", you're almost there! To login into your account, please use the OTP below:</p>

        <p>
            <span style=\"font-size: 24px; letter-spacing: 6px;\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["verificationCode"]) || array_key_exists("verificationCode", $context) ? $context["verificationCode"] : (function () { throw new RuntimeError('Variable "verificationCode" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "</span>
        </p>
        
        <p style=\"margin-top: 30px;\">
            If you have any concerns regarding this e-mail, feel free to reach out to us <a href=\"mailto:";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["helpdeskMail"]) || array_key_exists("helpdeskMail", $context) ? $context["helpdeskMail"] : (function () { throw new RuntimeError('Variable "helpdeskMail" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" target=\"_blank\" style=\"text-decoration:none; color:#7c70f4\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["helpdeskName"]) || array_key_exists("helpdeskName", $context) ? $context["helpdeskName"] : (function () { throw new RuntimeError('Variable "helpdeskName" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</a>.
        </p>

        <p>
            With Regards, 
        </p>
        <p>
            <strong>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["helpdeskName"]) || array_key_exists("helpdeskName", $context) ? $context["helpdeskName"] : (function () { throw new RuntimeError('Variable "helpdeskName" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "</strong>
        </p>
    </body>
</html>
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
        return "@UVDeskSupportCenter/CustomerLogin/customer-login-otp-verification-email.html.twig";
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
        return array (  90 => 23,  78 => 16,  71 => 12,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
    <body style=\"font-family: sans-serif; line-height:24px; background-image: none;\">
        <div style=\"background-color:#887bf6; height:6px; \"></div>
        {% if helpdeskLogo %}
            <img src= {{ helpdeskLogo }} style=\"margin:20px 0;\" alt=\"header-image\">
        {% endif %}

        <p>Hello {{ name }}, you're almost there! To login into your account, please use the OTP below:</p>

        <p>
            <span style=\"font-size: 24px; letter-spacing: 6px;\">{{ verificationCode }}</span>
        </p>
        
        <p style=\"margin-top: 30px;\">
            If you have any concerns regarding this e-mail, feel free to reach out to us <a href=\"mailto:{{ helpdeskMail }}\" target=\"_blank\" style=\"text-decoration:none; color:#7c70f4\">{{ helpdeskName }}</a>.
        </p>

        <p>
            With Regards, 
        </p>
        <p>
            <strong>{{ helpdeskName }}</strong>
        </p>
    </body>
</html>
", "@UVDeskSupportCenter/CustomerLogin/customer-login-otp-verification-email.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/CustomerLogin/customer-login-otp-verification-email.html.twig");
    }
}
