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

/* @Swiftmailer/Collector/icon.svg */
class __TwigTemplate_393be21fc0b651e52e7d4d351d04096e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Swiftmailer/Collector/icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Swiftmailer/Collector/icon.svg"));

        // line 1
        yield "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M22,4.9C22,3.9,21.1,3,20.1,3H3.9C2.9,3,2,3.9,2,4.9v13.1C2,19.1,2.9,20,3.9,20h16.1c1.1,0,1.9-0.9,1.9-1.9V4.9z M8.3,14.1l-3.1,3.1c-0.2,0.2-0.5,0.3-0.7,0.3S4,17.4,3.8,17.2c-0.4-0.4-0.4-1,0-1.4l3.1-3.1c0.4-0.4,1-0.4,1.4,0S8.7,13.7,8.3,14.1z M20.4,17.2c-0.2,0.2-0.5,0.3-0.7,0.3s-0.5-0.1-0.7-0.3l-3.1-3.1c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l3.1,3.1C20.8,16.2,20.8,16.8,20.4,17.2z M20.4,7.2l-7.6,7.6c-0.2,0.2-0.5,0.3-0.7,0.3s-0.5-0.1-0.7-0.3L3.8,7.2c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l6.9,6.9L19,5.8c0.4-0.4,1-0.4,1.4,0S20.8,6.8,20.4,7.2z\"/>
</svg>
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
        return "@Swiftmailer/Collector/icon.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M22,4.9C22,3.9,21.1,3,20.1,3H3.9C2.9,3,2,3.9,2,4.9v13.1C2,19.1,2.9,20,3.9,20h16.1c1.1,0,1.9-0.9,1.9-1.9V4.9z M8.3,14.1l-3.1,3.1c-0.2,0.2-0.5,0.3-0.7,0.3S4,17.4,3.8,17.2c-0.4-0.4-0.4-1,0-1.4l3.1-3.1c0.4-0.4,1-0.4,1.4,0S8.7,13.7,8.3,14.1z M20.4,17.2c-0.2,0.2-0.5,0.3-0.7,0.3s-0.5-0.1-0.7-0.3l-3.1-3.1c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l3.1,3.1C20.8,16.2,20.8,16.8,20.4,17.2z M20.4,7.2l-7.6,7.6c-0.2,0.2-0.5,0.3-0.7,0.3s-0.5-0.1-0.7-0.3L3.8,7.2c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l6.9,6.9L19,5.8c0.4-0.4,1-0.4,1.4,0S20.8,6.8,20.4,7.2z\"/>
</svg>
", "@Swiftmailer/Collector/icon.svg", "/home/maksim/Desktop/uvdesk/vendor/symfony/swiftmailer-bundle/Resources/views/Collector/icon.svg");
    }
}
