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

/* @UVDeskCoreFramework/dashboard.html.twig */
class __TwigTemplate_afcbb6d9ce33ff6715950725a5961ff0 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'templateCSS' => [$this, 'block_templateCSS'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskCoreFramework//Templates//layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_templateCSS(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 6
        yield "    <style>
\t\t.uv-activity-wrapper {
\t\t\tmargin-top: 60px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\twidth: 80%;
\t\t\tfloat: left;
\t\t}
\t\tul.uv-activity-brick-wrapper {
\t\t\tlist-style: none;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li {
\t\t\twidth: 25%;
\t\t\tdisplay: inline-block;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t\tcolor: #fff;
\t\t}
\t\tul.uv-activity-brick-wrapper .uv-activity-brick {
\t\t\tborder-radius: 3px;
    \t\tpadding: 10px;
\t\t\ttext-align: center;
\t\t}
\t\tul.uv-activity-brick-wrapper li a {
\t\t\tcolor: #fff;
\t\t\tfont-size: 45px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li label {
\t\t\tfont-size: 18px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\t.uv-activity-chart-bottom-row .uv-pannel-body {
\t\t\theight: 450px;
\t\t}
\t\t.kudos-overview {
\t\t\twidth: 40%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t}
\t\t.recent-notification {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.completion-chart {
\t\t\twidth: 300px;
\t\t\tmargin: 0 auto;
\t\t}
\t\t.progress-meter .background {
\t\t\tfill: #EFEFEF;
\t\t}
\t\t.progress-meter text {
\t\t\tfont-size: 30px;
\t\t}
\t\t.kudos-overview .uv-pannel-body {
\t\t\ttext-align: center;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.kudos-overview .uv-pannel-body label {
\t\t\tmargin-top: 10px;
    \t\tdisplay: inline-block;
\t\t}
\t\t.recent-notification ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toverflow-y: auto;
\t\t\tmax-height: 400px !important;
\t\t}
\t\t.recent-notification .uv-pannel-body {
\t\t\tpadding: 0;
\t\t}
\t\t.recent-notification ul li {
\t\t\tcolor: #333333;
\t\t\tborder-bottom: solid 1px #D3D3D3;
\t\t\tpadding: 15px 20px;
\t\t}
\t\t.recent-notification ul li:first-child {
\t\t\tborder-top: none;
\t\t}
\t\t.recent-notification ul li:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\t.recent-notification ul li * {
\t\t\tdisplay: inline-block !important;
\t\t}
\t\t.recent-notification ul li .timeago {
\t\t\tcolor: #9E9E9E;
\t\t\tmargin-top: 5px;
\t\t\tfont-size: 13px;
\t\t}
\t\t.recent-notification label {
\t\t\ttext-align: center;
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tpadding-top: 15px;
\t\t\tborder-top: 1px solid #d3d3d3;
\t\t}
\t\t.recent-notification span.uv-notification-message {
\t\t\tfloat: left;
\t\t\twidth: 100%;
\t\t}
\t\t.kudos-count {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.kudos-count .uv-pannel-body {
\t\t\tpadding-top: 50px;
\t\t\toverflow-y: auto;
\t\t}
\t\t.kudos-count ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t}
\t\t.kudos-count ul li {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 15px 0;
\t\t}
\t\t.kudos-count ul li .uv-icon-kudos  {
\t\t\tvertical-align: middle;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\twidth: 20%;
\t\t\tfloat: left;
\t\t}
\t\t.uv-activity-chart-col-rt ul {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tlist-style: none;
\t\t}
\t\t.uv-activity-chart-col-rt ul li {
\t\t\tmargin-bottom: 10px
\t\t}
\t\t.uv-activity-chart-col-rt ul li span {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tcolor: #6f6f6f;
\t\t}
\t\t.uv-middle {
\t\t\tmargin: 0 auto;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 200px;
\t\t\ttext-align: center;
\t\t\twidth: 100%;
\t\t}
\t\t@media screen and (max-width: 1024px) {
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.kudos-overview {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.kudos-count {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.recent-notification {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 50%;
\t\t\t\tmargin: 10px 0;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 768px) {
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 467px) {
\t\t\t.completion-chart {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\tspan.uv-notification-message a:link, span.uv-notification-message a:visited, label a:link, label a:visited {
\t\t\tcolor: #2750C4;
\t\t\tfont-size: 15px;
\t\t}
\t\t.uv-mob-aside {
\t\t\tdisplay: none;
\t\t}
\t\t#btn-disclaimer {
  \t\t\tposition: fixed;
  \t\t\tright: 25px;
  \t\t\tbottom: 10px;
\t\t\tbackground: url(\"\");
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 216
        yield "    <div class=\"uv-area\">
        ";
        // line 217
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 217, $this->source); })()), "getRegisteredComponent", ["Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\Dashboard"], "method", false, false, false, 217), "getHomepageTemplate", [], "method", false, false, false, 217), "render", [], "method", false, false, false, 217);
        yield "

        <div class=\"uv-copyright\">
            <p style=\"margin: unset; font-size: 14px; line-height: 1.4em;\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Powered by"), "html", null, true);
        yield " <a href=\"https://www.uvdesk.com\" target=\"_blank\">Uvdesk</a></p>
\t\t\t<p style=\"color: #5a5a5a; margin: unset; font-size: 12px; line-height: 1.4em;\">Version ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uvdesk_version"]) || array_key_exists("uvdesk_version", $context) ? $context["uvdesk_version"] : (function () { throw new RuntimeError('Variable "uvdesk_version" does not exist.', 221, $this->source); })()), "html", null, true);
        yield "; Core Version ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uvdesk_core_version"]) || array_key_exists("uvdesk_core_version", $context) ? $context["uvdesk_core_version"] : (function () { throw new RuntimeError('Variable "uvdesk_core_version" does not exist.', 221, $this->source); })()), "html", null, true);
        yield "</p>
        </div>

\t\t<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
    \t\t<button type=\"submit\" class=\"btn btn-primary btn-md\" id=\"btn-disclaimer\" title=";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("clear cache"), "html", null, true);
        yield "><img src=\"https://api.iconify.design/mdi:delete-restore.svg?height=24\" aria-hidden=\"true\"></button>
  \t\t</div>
    </div>

<script>
\t\$('#btn-disclaimer').click(function(e){

    \t\$.ajax({
        \turl : \"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_cache_clear");
        yield "\",
        \tmethod: 'POST',
        \tdata: \"\",
        \tsuccess : function(response) {
\t\t\t\tapp.appView.renderResponseAlert(response);
        \t},
        \terror: function (xhr) {
            \tapp.appView.renderResponseAlert(xhr);
        \t}
    \t});
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 247
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 248
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskCoreFramework/dashboard.html.twig";
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
        return array (  403 => 248,  390 => 247,  366 => 233,  355 => 225,  346 => 221,  342 => 220,  336 => 217,  333 => 216,  320 => 215,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Dashboard{% endblock %}

{% block templateCSS %}
    <style>
\t\t.uv-activity-wrapper {
\t\t\tmargin-top: 60px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\twidth: 80%;
\t\t\tfloat: left;
\t\t}
\t\tul.uv-activity-brick-wrapper {
\t\t\tlist-style: none;
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li {
\t\t\twidth: 25%;
\t\t\tdisplay: inline-block;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t\tcolor: #fff;
\t\t}
\t\tul.uv-activity-brick-wrapper .uv-activity-brick {
\t\t\tborder-radius: 3px;
    \t\tpadding: 10px;
\t\t\ttext-align: center;
\t\t}
\t\tul.uv-activity-brick-wrapper li a {
\t\t\tcolor: #fff;
\t\t\tfont-size: 45px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\tul.uv-activity-brick-wrapper li label {
\t\t\tfont-size: 18px;
\t\t\twidth: 100%;
    \t\tdisplay: inline-block;
\t\t}
\t\t.uv-activity-chart-bottom-row .uv-pannel-body {
\t\t\theight: 450px;
\t\t}
\t\t.kudos-overview {
\t\t\twidth: 40%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t}
\t\t.recent-notification {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.completion-chart {
\t\t\twidth: 300px;
\t\t\tmargin: 0 auto;
\t\t}
\t\t.progress-meter .background {
\t\t\tfill: #EFEFEF;
\t\t}
\t\t.progress-meter text {
\t\t\tfont-size: 30px;
\t\t}
\t\t.kudos-overview .uv-pannel-body {
\t\t\ttext-align: center;
\t\t\tpadding-top: 50px;
\t\t}
\t\t.kudos-overview .uv-pannel-body label {
\t\t\tmargin-top: 10px;
    \t\tdisplay: inline-block;
\t\t}
\t\t.recent-notification ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\toverflow-y: auto;
\t\t\tmax-height: 400px !important;
\t\t}
\t\t.recent-notification .uv-pannel-body {
\t\t\tpadding: 0;
\t\t}
\t\t.recent-notification ul li {
\t\t\tcolor: #333333;
\t\t\tborder-bottom: solid 1px #D3D3D3;
\t\t\tpadding: 15px 20px;
\t\t}
\t\t.recent-notification ul li:first-child {
\t\t\tborder-top: none;
\t\t}
\t\t.recent-notification ul li:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\t.recent-notification ul li * {
\t\t\tdisplay: inline-block !important;
\t\t}
\t\t.recent-notification ul li .timeago {
\t\t\tcolor: #9E9E9E;
\t\t\tmargin-top: 5px;
\t\t\tfont-size: 13px;
\t\t}
\t\t.recent-notification label {
\t\t\ttext-align: center;
\t\t\tdisplay: inline-block;
\t\t\twidth: 100%;
\t\t\tpadding-top: 15px;
\t\t\tborder-top: 1px solid #d3d3d3;
\t\t}
\t\t.recent-notification span.uv-notification-message {
\t\t\tfloat: left;
\t\t\twidth: 100%;
\t\t}
\t\t.kudos-count {
\t\t\twidth: 30%;
\t\t\tfloat: left;
\t\t\tpadding-right: 10px;
\t\t\tpadding-left: 10px;
\t\t}
\t\t.kudos-count .uv-pannel-body {
\t\t\tpadding-top: 50px;
\t\t\toverflow-y: auto;
\t\t}
\t\t.kudos-count ul {
\t\t\tlist-style: none;
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t}
\t\t.kudos-count ul li {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tpadding: 15px 0;
\t\t}
\t\t.kudos-count ul li .uv-icon-kudos  {
\t\t\tvertical-align: middle;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\twidth: 20%;
\t\t\tfloat: left;
\t\t}
\t\t.uv-activity-chart-col-rt ul {
\t\t\tpadding: 0;
\t\t\tmargin: 0;
\t\t\tlist-style: none;
\t\t}
\t\t.uv-activity-chart-col-rt ul li {
\t\t\tmargin-bottom: 10px
\t\t}
\t\t.uv-activity-chart-col-rt ul li span {
\t\t\twidth: 100%;
\t\t\tdisplay: inline-block;
\t\t\tcolor: #6f6f6f;
\t\t}
\t\t.uv-middle {
\t\t\tmargin: 0 auto;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 200px;
\t\t\ttext-align: center;
\t\t\twidth: 100%;
\t\t}
\t\t@media screen and (max-width: 1024px) {
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-lt {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.uv-activity-wrapper .uv-activity-chart-col-rt {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t\t.kudos-overview {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.kudos-count {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\t.recent-notification {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 0;
\t\t\t}
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 50%;
\t\t\t\tmargin: 10px 0;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 768px) {
\t\t\tul.uv-activity-brick-wrapper li {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\t@media screen and (max-width: 467px) {
\t\t\t.completion-chart {
\t\t\t\twidth: 100%;
\t\t\t}
\t\t}
\t\tspan.uv-notification-message a:link, span.uv-notification-message a:visited, label a:link, label a:visited {
\t\t\tcolor: #2750C4;
\t\t\tfont-size: 15px;
\t\t}
\t\t.uv-mob-aside {
\t\t\tdisplay: none;
\t\t}
\t\t#btn-disclaimer {
  \t\t\tposition: fixed;
  \t\t\tright: 25px;
  \t\t\tbottom: 10px;
\t\t\tbackground: url(\"\");
\t\t}
\t</style>
{% endblock %}

{% block pageContent %}
    <div class=\"uv-area\">
        {{ uvdesk_extensibles.getRegisteredComponent('Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\Dashboard').getHomepageTemplate().render()|raw }}

        <div class=\"uv-copyright\">
            <p style=\"margin: unset; font-size: 14px; line-height: 1.4em;\">{{ 'Powered by'|trans }} <a href=\"https://www.uvdesk.com\" target=\"_blank\">Uvdesk</a></p>
\t\t\t<p style=\"color: #5a5a5a; margin: unset; font-size: 12px; line-height: 1.4em;\">Version {{ uvdesk_version }}; Core Version {{ uvdesk_core_version }}</p>
        </div>

\t\t<div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-6\">
    \t\t<button type=\"submit\" class=\"btn btn-primary btn-md\" id=\"btn-disclaimer\" title={{'clear cache'|trans }}><img src=\"https://api.iconify.design/mdi:delete-restore.svg?height=24\" aria-hidden=\"true\"></button>
  \t\t</div>
    </div>

<script>
\t\$('#btn-disclaimer').click(function(e){

    \t\$.ajax({
        \turl : \"{{ path('helpdesk_member_cache_clear') }}\",
        \tmethod: 'POST',
        \tdata: \"\",
        \tsuccess : function(response) {
\t\t\t\tapp.appView.renderResponseAlert(response);
        \t},
        \terror: function (xhr) {
            \tapp.appView.renderResponseAlert(xhr);
        \t}
    \t});
    });
</script>
{% endblock %}

{% block footer %}
    {{ parent() }}
{% endblock %}
", "@UVDeskCoreFramework/dashboard.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/dashboard.html.twig");
    }
}
