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

/* @UVDeskCoreFramework/Templates/sidebar.html.twig */
class __TwigTemplate_38844e03564b986cbbd9560440cb5adf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/sidebar.html.twig"));

        // line 1
        yield "<style>
    .uv-sidebar:not(.uv-sidebar-active) .uv-language .lang-wrapper {
        width: 300px;
        text-align: center;
        transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .uv-sidebar ul.uv-menubar.uv-language{
        position: fixed;
        bottom: 0px;
    }
    
    .uv-sidebar.uv-sidebar-active ul.uv-menubar.uv-language li a{
        width: 58px;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language li a{
        max-width: 100%;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language li a:hover, .uv-sidebar ul.uv-menubar.uv-language li .uv-item-active{
        color: #9E9E9E !important;
        border-left: 3px solid transparent;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language a.uv-cursor{
        padding: 25px 27px;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language .uv-profile.uv-dropdown-other{
        margin: -25px -27px;
        padding: 17px 18px;
    }

    .uv-wrapper-padding  {
        padding-left: 300px !important;
    }

    @media screen and (min-width: 1400px) {
        .uv-sidebar .uv-soft-top a.uv-logo {
            display: none;
            margin: 10px 7px;
        }

        .uv-sidebar .uv-soft-top .uv-hamburger {
            display: block;
            margin: 24px 20px;
        }
    }

    @media only screen and (max-width: 900px) {
        .uv-sidebar ul.uv-menubar.uv-language li a {
            width: 58px;
        }
    }
</style>

";
        // line 58
        if ((null == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "cookies", [], "any", false, false, false, 58), "get", ["uv-sidebar-status"], "method", false, false, false, 58))) {
            // line 59
            yield "\t<script type=\"text/javascript\">
\t\tdocument.addEventListener(\"DOMContentLoaded\", function(e) {
\t\t\twindow.dispatchEvent(new Event('resize'));
\t\t    var uvView = document.querySelector(\".uv-view\");
\t\t\tif(uvView && uvView.offsetWidth <= 1340) {
\t\t\t\tdocument.cookie = \"uv-sidebar-status=1; expires=Wed, 01 Jan 2020 00:00:00 GMT;path=/\";
\t\t\t}
\t\t});
\t</script>
";
        }
        // line 69
        yield "
<div class=\"uv-sidebar ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "cookies", [], "any", false, false, false, 70), "get", ["uv-sidebar-status"], "method", false, false, false, 70)) {
            yield "uv-sidebar-active";
        }
        yield "\">
\t<div style=\"overflow: hidden;\">
\t\t<div class=\"uv-soft-top\">
\t\t\t<a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard");
        yield "\" class=\"uv-logo\">
\t\t\t\t<img src=\"\" alt=\"Logo\" width=\"123\" height=\"48\">
\t\t\t</a>

\t\t\t<span class=\"uv-hamburger\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"20px\" height=\"14px\">
                    <path fill-rule=\"evenodd\"  fill=\"rgb(158, 158, 158)\" d=\"M19.000,2.000 L6.000,2.000 C5.448,2.000 5.000,1.552 5.000,1.000 C5.000,0.448 5.448,-0.000 6.000,-0.000 L19.000,-0.000 C19.552,-0.000 20.000,0.448 20.000,1.000 C20.000,1.552 19.552,2.000 19.000,2.000 ZM20.000,7.000 C20.000,7.552 19.552,8.000 19.000,8.000 L1.000,8.000 C0.448,8.000 0.000,7.552 0.000,7.000 C0.000,6.448 0.448,6.000 1.000,6.000 L19.000,6.000 C19.552,6.000 20.000,6.448 20.000,7.000 ZM3.000,12.000 L15.000,12.000 C15.552,12.000 16.000,12.448 16.000,13.000 C16.000,13.552 15.552,14.000 15.000,14.000 L3.000,14.000 C2.448,14.000 2.000,13.552 2.000,13.000 C2.000,12.448 2.448,12.000 3.000,12.000 Z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</div>
\t</div>

\t<ul class=\"uv-menubar\">
\t\t";
        // line 87
        yield "        ";
        $context["route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "request", [], "any", false, false, false, 87), "attributes", [], "any", false, false, false, 87), "get", ["_route"], "method", false, false, false, 87);
        // line 88
        yield "        
\t\t";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 89, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 89), "getNavigationTemplate", [], "method", false, false, false, 89), "render", [], "method", false, false, false, 89);
        yield "
\t</ul>

    <ul class=\"uv-menubar uv-language\">
\t    ";
        // line 94
        yield "\t\t<li>
\t\t\t<a class=\"uv-cursor\">
\t\t\t\t<span style=\"position: relative\">
\t\t\t\t\t<div class=\"uv-profile uv-dropdown-other\">
\t\t\t\t\t\t<span class=\"uv-icon uv-skin-svg\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
\t\t\t\t\t\t\t\txmlns:xlink=\"http://www.w3.org/1999/xlink\"
\t\t\t\t\t\t\t\twidth=\"20px\" height=\"20px\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"  fill=\"rgb(158, 158, 158)\"
\t\t\t\t\t\t\t\td=\"M13.076,5.199 L11.543,3.000 L14.505,3.000 L13.076,5.199 ZM12.000,12.000 L12.000,8.763 L13.105,7.061 L15.161,10.010 L16.001,9.395 L13.717,6.119 L15.744,3.000 L17.000,3.000 L17.000,2.000 L15.174,2.000 L15.161,1.990 L15.154,2.000 L13.000,2.000 L13.000,1.000 L12.000,1.000 L12.000,2.000 L10.846,2.000 L10.839,1.990 L10.826,2.000 L9.000,2.000 L9.000,3.000 L10.275,3.000 L12.464,6.141 L11.906,7.000 L7.000,7.000 L7.000,-0.000 L19.000,-0.000 L19.000,12.000 L12.000,12.000 ZM11.000,8.394 L10.999,8.395 L11.000,8.396 L11.000,19.000 L-0.000,19.000 L-0.000,8.000 L11.000,8.000 L11.000,8.394 ZM6.288,9.992 L4.773,9.992 L2.005,16.994 L3.458,16.994 L4.208,15.017 L6.842,15.017 L7.587,16.994 L9.014,16.994 L6.288,9.992 ZM5.538,11.205 C5.555,11.266 5.872,12.215 6.488,14.052 L4.557,14.052 L5.538,11.205 ZM15.000,13.000 L17.000,13.000 L17.000,16.025 L15.000,18.000 C15.000,18.000 14.983,18.000 14.951,18.000 C14.564,18.000 12.000,18.000 12.000,18.000 L12.000,16.000 L15.000,16.000 L15.000,13.000 Z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"uv-menu-item\">
\t\t\t\t\t\t\t<span class=\"\" style=\"color: #BABABA;font-weight: normal;\">";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language"), "html", null, true);
        yield ": </span>
\t\t\t\t\t\t\t<span style=\"text-transform:capitalize;color: black;font-weight: normal;\">";
        // line 108
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["uvdesk_service"] ?? null), "getLocales", [], "method", false, true, false, 108), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "locale", [], "any", false, false, false, 108), [], "array", true, true, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 108, $this->source); })()), "getLocales", [], "method", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "locale", [], "any", false, false, false, 108), [], "array", false, false, false, 108), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "locale", [], "any", false, false, false, 108), "html", null, true)));
        yield "</span>
\t\t\t\t\t\t\t<span aria-hidden=\"true\" style=\"color: rgb(155, 155, 155);\">▼</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 115, $this->source); })()), "getLocales", [], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["localeCode"] => $context["localeName"]) {
            // line 116
            yield "\t\t\t\t\t\t\t\t\t<li data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 116, $this->source); })()), "getLocaleUrl", [$context["localeCode"]], "method", false, false, false, 116), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "request", [], "any", false, false, false, 116), "locale", [], "any", false, false, false, 116) == $context["localeCode"])) {
                yield "class=\"uv-active\"";
            }
            yield " onclick=\"window.location = this.getAttribute('data-value')\">
\t\t\t\t\t\t\t\t\t\t";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["localeName"], "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['localeCode'], $context['localeName'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>

<script type=\"text/javascript\">
    document.addEventListener(\"DOMContentLoaded\", function() {
        fetch('";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("uvdesk_community_tracker_cache_image");
        yield "')
            .then(response => response.json())
            .then(data => {
                const logoImg = document.querySelector('.uv-logo img');
                if (logoImg) {
                    // Set the image source to the URL provided by the server
                    logoImg.src = data;
                }
            })
            .catch(error => console.error('Error fetching the image path:', error));
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
        return "@UVDeskCoreFramework/Templates/sidebar.html.twig";
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
        return array (  225 => 131,  212 => 120,  203 => 117,  194 => 116,  190 => 115,  180 => 108,  176 => 107,  161 => 94,  154 => 89,  151 => 88,  148 => 87,  132 => 73,  124 => 70,  121 => 69,  109 => 59,  107 => 58,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .uv-sidebar:not(.uv-sidebar-active) .uv-language .lang-wrapper {
        width: 300px;
        text-align: center;
        transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .uv-sidebar ul.uv-menubar.uv-language{
        position: fixed;
        bottom: 0px;
    }
    
    .uv-sidebar.uv-sidebar-active ul.uv-menubar.uv-language li a{
        width: 58px;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language li a{
        max-width: 100%;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language li a:hover, .uv-sidebar ul.uv-menubar.uv-language li .uv-item-active{
        color: #9E9E9E !important;
        border-left: 3px solid transparent;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language a.uv-cursor{
        padding: 25px 27px;
    }
    
    .uv-sidebar ul.uv-menubar.uv-language .uv-profile.uv-dropdown-other{
        margin: -25px -27px;
        padding: 17px 18px;
    }

    .uv-wrapper-padding  {
        padding-left: 300px !important;
    }

    @media screen and (min-width: 1400px) {
        .uv-sidebar .uv-soft-top a.uv-logo {
            display: none;
            margin: 10px 7px;
        }

        .uv-sidebar .uv-soft-top .uv-hamburger {
            display: block;
            margin: 24px 20px;
        }
    }

    @media only screen and (max-width: 900px) {
        .uv-sidebar ul.uv-menubar.uv-language li a {
            width: 58px;
        }
    }
</style>

{% if null == app.request.cookies.get('uv-sidebar-status') %}
\t<script type=\"text/javascript\">
\t\tdocument.addEventListener(\"DOMContentLoaded\", function(e) {
\t\t\twindow.dispatchEvent(new Event('resize'));
\t\t    var uvView = document.querySelector(\".uv-view\");
\t\t\tif(uvView && uvView.offsetWidth <= 1340) {
\t\t\t\tdocument.cookie = \"uv-sidebar-status=1; expires=Wed, 01 Jan 2020 00:00:00 GMT;path=/\";
\t\t\t}
\t\t});
\t</script>
{% endif %}

<div class=\"uv-sidebar {% if app.request.cookies.get('uv-sidebar-status') %}uv-sidebar-active{% endif %}\">
\t<div style=\"overflow: hidden;\">
\t\t<div class=\"uv-soft-top\">
\t\t\t<a href=\"{{ path('helpdesk_member_dashboard') }}\" class=\"uv-logo\">
\t\t\t\t<img src=\"\" alt=\"Logo\" width=\"123\" height=\"48\">
\t\t\t</a>

\t\t\t<span class=\"uv-hamburger\">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"20px\" height=\"14px\">
                    <path fill-rule=\"evenodd\"  fill=\"rgb(158, 158, 158)\" d=\"M19.000,2.000 L6.000,2.000 C5.448,2.000 5.000,1.552 5.000,1.000 C5.000,0.448 5.448,-0.000 6.000,-0.000 L19.000,-0.000 C19.552,-0.000 20.000,0.448 20.000,1.000 C20.000,1.552 19.552,2.000 19.000,2.000 ZM20.000,7.000 C20.000,7.552 19.552,8.000 19.000,8.000 L1.000,8.000 C0.448,8.000 0.000,7.552 0.000,7.000 C0.000,6.448 0.448,6.000 1.000,6.000 L19.000,6.000 C19.552,6.000 20.000,6.448 20.000,7.000 ZM3.000,12.000 L15.000,12.000 C15.552,12.000 16.000,12.448 16.000,13.000 C16.000,13.552 15.552,14.000 15.000,14.000 L3.000,14.000 C2.448,14.000 2.000,13.552 2.000,13.000 C2.000,12.448 2.448,12.000 3.000,12.000 Z\"/>
\t\t\t\t</svg>
\t\t\t</span>
\t\t</div>
\t</div>

\t<ul class=\"uv-menubar\">
\t\t{# Sidebar Navigation #}
        {% set route = app.request.attributes.get('_route') %}
        
\t\t{{ uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getNavigationTemplate().render()|raw }}
\t</ul>

    <ul class=\"uv-menubar uv-language\">
\t    {# Sidebar Quike-langauge-select-option #}
\t\t<li>
\t\t\t<a class=\"uv-cursor\">
\t\t\t\t<span style=\"position: relative\">
\t\t\t\t\t<div class=\"uv-profile uv-dropdown-other\">
\t\t\t\t\t\t<span class=\"uv-icon uv-skin-svg\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\"
\t\t\t\t\t\t\t\txmlns:xlink=\"http://www.w3.org/1999/xlink\"
\t\t\t\t\t\t\t\twidth=\"20px\" height=\"20px\">
\t\t\t\t\t\t\t\t<path fill-rule=\"evenodd\"  fill=\"rgb(158, 158, 158)\"
\t\t\t\t\t\t\t\td=\"M13.076,5.199 L11.543,3.000 L14.505,3.000 L13.076,5.199 ZM12.000,12.000 L12.000,8.763 L13.105,7.061 L15.161,10.010 L16.001,9.395 L13.717,6.119 L15.744,3.000 L17.000,3.000 L17.000,2.000 L15.174,2.000 L15.161,1.990 L15.154,2.000 L13.000,2.000 L13.000,1.000 L12.000,1.000 L12.000,2.000 L10.846,2.000 L10.839,1.990 L10.826,2.000 L9.000,2.000 L9.000,3.000 L10.275,3.000 L12.464,6.141 L11.906,7.000 L7.000,7.000 L7.000,-0.000 L19.000,-0.000 L19.000,12.000 L12.000,12.000 ZM11.000,8.394 L10.999,8.395 L11.000,8.396 L11.000,19.000 L-0.000,19.000 L-0.000,8.000 L11.000,8.000 L11.000,8.394 ZM6.288,9.992 L4.773,9.992 L2.005,16.994 L3.458,16.994 L4.208,15.017 L6.842,15.017 L7.587,16.994 L9.014,16.994 L6.288,9.992 ZM5.538,11.205 C5.555,11.266 5.872,12.215 6.488,14.052 L4.557,14.052 L5.538,11.205 ZM15.000,13.000 L17.000,13.000 L17.000,16.025 L15.000,18.000 C15.000,18.000 14.983,18.000 14.951,18.000 C14.564,18.000 12.000,18.000 12.000,18.000 L12.000,16.000 L15.000,16.000 L15.000,13.000 Z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"uv-menu-item\">
\t\t\t\t\t\t\t<span class=\"\" style=\"color: #BABABA;font-weight: normal;\">{{ 'Language'|trans }}: </span>
\t\t\t\t\t\t\t<span style=\"text-transform:capitalize;color: black;font-weight: normal;\">{{ uvdesk_service.getLocales()[app.request.locale] is defined ? uvdesk_service.getLocales()[app.request.locale] : app.request.locale }}</span>
\t\t\t\t\t\t\t<span aria-hidden=\"true\" style=\"color: rgb(155, 155, 155);\">▼</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for localeCode, localeName in uvdesk_service.getLocales() %}
\t\t\t\t\t\t\t\t\t<li data-value=\"{{ uvdesk_service.getLocaleUrl(localeCode) }}\" {% if app.request.locale == localeCode %}class=\"uv-active\"{% endif %} onclick=\"window.location = this.getAttribute('data-value')\">
\t\t\t\t\t\t\t\t\t\t{{ localeName }}
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t</ul>
</div>

<script type=\"text/javascript\">
    document.addEventListener(\"DOMContentLoaded\", function() {
        fetch('{{ path(\"uvdesk_community_tracker_cache_image\") }}')
            .then(response => response.json())
            .then(data => {
                const logoImg = document.querySelector('.uv-logo img');
                if (logoImg) {
                    // Set the image source to the URL provided by the server
                    logoImg.src = data;
                }
            })
            .catch(error => console.error('Error fetching the image path:', error));
    });
</script>", "@UVDeskCoreFramework/Templates/sidebar.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/sidebar.html.twig");
    }
}
