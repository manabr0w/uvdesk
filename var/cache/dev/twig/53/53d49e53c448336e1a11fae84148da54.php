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

/* @UVDeskSupportCenter/Themes/cookiePolicy.html.twig */
class __TwigTemplate_d8179e588d7e31a80bf79f80b946e6bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/cookiePolicy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/cookiePolicy.html.twig"));

        // line 1
        yield "<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"cookie-dialog-modal\" style=\"display:none;\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2 style=\"text-align: center; margin-bottom: 30px;\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cookie Usage Policy"), "html", null, true);
        yield "</h2>
        <div class=\"uv-element-block\" style=\"line-height: 1.8em;\">
            <p>";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some of our site pages utilize %cookies% and other tracking technologies. A %cookie% is a small text file that may be used, for example, to collect information about site activity. Some cookies and other technologies may serve to recall personal information previously indicated by a site user. You may block cookies, or delete existing cookies, by adjusting the appropriate setting on your browser. Please consult the %help% menu of your browser to learn how to do this. If you block or delete %cookies% you may find the usefulness of our site to be impaired.", ["%cookie%" => (("<em>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie")) . "</em>"), "%cookies%" => (("<em>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookies")) . "</em>"), "%help%" => (("<b>" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("HELP")) . "</b>")]);
        yield "</p>
            <p>";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To know more about how our privacy policy works, please %websiteLink%.", ["%websiteLink%" => (("<a href=\"https://www.uvdesk.com/en/privacy-policy/\" target=\"_blank\">" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("visit our website")) . "</a>")]);
        yield "</p>
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
        return "@UVDeskSupportCenter/Themes/cookiePolicy.html.twig";
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
        return array (  62 => 7,  58 => 6,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-pop-up-overlay uv-no-error-success-icon\" id=\"cookie-dialog-modal\" style=\"display:none;\">
    <div class=\"uv-pop-up-box uv-pop-up-wide\">
        <span class=\"uv-pop-up-close\"></span>
        <h2 style=\"text-align: center; margin-bottom: 30px;\">{{ 'Cookie Usage Policy'|trans }}</h2>
        <div class=\"uv-element-block\" style=\"line-height: 1.8em;\">
            <p>{{ 'Some of our site pages utilize %cookies% and other tracking technologies. A %cookie% is a small text file that may be used, for example, to collect information about site activity. Some cookies and other technologies may serve to recall personal information previously indicated by a site user. You may block cookies, or delete existing cookies, by adjusting the appropriate setting on your browser. Please consult the %help% menu of your browser to learn how to do this. If you block or delete %cookies% you may find the usefulness of our site to be impaired.'|trans({'%cookie%': '<em>' ~ 'cookie'|trans ~ '</em>', '%cookies%': '<em>' ~ 'cookies'|trans ~ '</em>', '%help%': '<b>' ~ 'HELP'|trans ~ '</b>'})|raw }}</p>
            <p>{{ \"To know more about how our privacy policy works, please %websiteLink%.\"|trans({'%websiteLink%': '<a href=\"https://www.uvdesk.com/en/privacy-policy/\" target=\"_blank\">' ~ 'visit our website'|trans ~ '</a>'})|raw }}</p>
        </div>
    </div>
</div>
", "@UVDeskSupportCenter/Themes/cookiePolicy.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Themes/cookiePolicy.html.twig");
    }
}
