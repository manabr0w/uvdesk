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

/* @UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig */
class __TwigTemplate_b33bbd282bdb7b8bef8ce047074ed16a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig"));

        // line 1
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 1, $this->source); })()), "favicon", [], "any", false, false, false, 1)) {
            // line 2
            yield "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 2, $this->source); })()), "favicon", [], "any", false, false, false, 2), "html", null, true);
            yield "\" />
";
        } else {
            // line 4
            yield "\t<link rel=\"icon\" sizes=\"16x16\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
            yield "\" />
";
        }
        // line 6
        yield "
<style>
\t";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 8, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 8)) {
            // line 9
            yield "\t\tbody {
\t\t\tbackground: ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 10, $this->source); })()), "pageBackgroundColor", [], "any", false, false, false, 10), "html", null, true);
            yield ";
\t\t}
\t";
        }
        // line 13
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 13, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 13)) {
            // line 14
            yield "\t\t.uv-header {
\t\t\tbackground-color: ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 15, $this->source); })()), "headerBackgroundColor", [], "any", false, false, false, 15), "html", null, true);
            yield ";
\t\t}
\t";
        }
        // line 18
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 18, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 18)) {
            // line 19
            yield "\t\t.uv-hero {
\t\t\tbackground-color: ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 20, $this->source); })()), "bannerBackgroundColor", [], "any", false, false, false, 20), "html", null, true);
            yield ";
\t\t}
\t";
        }
        // line 23
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 23, $this->source); })()), "linkColor", [], "any", false, false, false, 23)) {
            // line 24
            yield "\t\ta:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 25, $this->source); })()), "linkColor", [], "any", false, false, false, 25), "html", null, true);
            yield " !important;
\t\t}
\t";
        }
        // line 28
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 28, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 28)) {
            // line 29
            yield "\t\ta:hover:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 30, $this->source); })()), "linkHoverColor", [], "any", false, false, false, 30), "html", null, true);
            yield " !important;
\t\t}
\t";
        }
        // line 33
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 33, $this->source); })()), "articleTextColor", [], "any", false, false, false, 33)) {
            // line 34
            yield "\t\t.uv-editor p {
\t\t\tcolor: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 35, $this->source); })()), "articleTextColor", [], "any", false, false, false, 35), "html", null, true);
            yield ";
\t\t}
\t";
        }
        // line 38
        yield "</style>
";
        // line 39
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 39, $this->source); })()), "customCSS", [], "any", false, false, false, 39)) {
            // line 40
            yield "\t<style>
\t\t";
            // line 41
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 41, $this->source); })()), "customCSS", [], "any", false, false, false, 41);
            yield "
\t</style>
";
        }
        // line 44
        yield "
";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 45, $this->source); })()), "script", [], "any", false, false, false, 45)) {
            // line 46
            yield "\t";
            if ((CoreExtension::inFilter("<script", CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 46, $this->source); })()), "script", [], "any", false, false, false, 46)) && CoreExtension::inFilter("</script>", CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 46, $this->source); })()), "script", [], "any", false, false, false, 46)))) {
                // line 47
                yield "\t\t";
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 47, $this->source); })()), "script", [], "any", false, false, false, 47);
                yield "
\t";
            } else {
                // line 49
                yield "\t\t<script type=\"text/javascript\">
\t\t\t";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 50, $this->source); })()), "script", [], "any", false, false, false, 50);
                yield "
\t\t</script>
\t";
            }
            // line 52
            yield "\t\t\t
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
        return "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig";
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
        return array (  174 => 52,  168 => 50,  165 => 49,  159 => 47,  156 => 46,  154 => 45,  151 => 44,  145 => 41,  142 => 40,  140 => 39,  137 => 38,  131 => 35,  128 => 34,  125 => 33,  119 => 30,  116 => 29,  113 => 28,  107 => 25,  104 => 24,  101 => 23,  95 => 20,  92 => 19,  89 => 18,  83 => 15,  80 => 14,  77 => 13,  71 => 10,  68 => 9,  66 => 8,  62 => 6,  56 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if websiteDetails.favicon %}
    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ websiteDetails.favicon }}\" />
{% else %}
\t<link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
{% endif %}

<style>
\t{% if websiteConfiguration.pageBackgroundColor %}
\t\tbody {
\t\t\tbackground: {{websiteConfiguration.pageBackgroundColor}};
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.headerBackgroundColor %}
\t\t.uv-header {
\t\t\tbackground-color: {{websiteConfiguration.headerBackgroundColor}};
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.bannerBackgroundColor %}
\t\t.uv-hero {
\t\t\tbackground-color: {{websiteConfiguration.bannerBackgroundColor}};
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.linkColor %}
\t\ta:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: {{websiteConfiguration.linkColor}} !important;
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.linkHoverColor %}
\t\ta:hover:not(.uv-btn):not(.uv-btn-small):not(.uv-table td a) {
\t\t\tcolor: {{websiteConfiguration.linkHoverColor}} !important;
\t\t}
\t{% endif %}
\t{% if websiteConfiguration.articleTextColor %}
\t\t.uv-editor p {
\t\t\tcolor: {{websiteConfiguration.articleTextColor}};
\t\t}
\t{% endif %}
</style>
{% if websiteConfiguration.customCSS %}
\t<style>
\t\t{{ websiteConfiguration.customCSS|raw }}
\t</style>
{% endif %}

{% if websiteConfiguration.script %}
\t{% if '<script' in websiteConfiguration.script and '</script>' in websiteConfiguration.script %}
\t\t{{ websiteConfiguration.script|raw }}
\t{% else %}
\t\t<script type=\"text/javascript\">
\t\t\t{{ websiteConfiguration.script|raw }}
\t\t</script>
\t{% endif %}\t\t\t
{% endif %}", "@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/websiteSettings.html.twig");
    }
}
