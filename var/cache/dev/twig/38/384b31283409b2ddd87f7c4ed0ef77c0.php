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

/* @UVDeskSupportCenter/Templates/breadcrumbs.html.twig */
class __TwigTemplate_864a355a9c8677a3465797fe0799e851 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/breadcrumbs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/breadcrumbs.html.twig"));

        // line 1
        if (array_key_exists("breadcrumbs", $context)) {
            // line 2
            yield "    <form method=\"get\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_search");
            yield "\">
        <div class=\"uv-nav-bar\">
            <div class=\"uv-container\">
                <div class=\"uv-nav-bar-lt\">
                    <ul>
                        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
                // line 8
                yield "                            ";
                if (($context["key"] == (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 8, $this->source); })())) - 1))) {
                    // line 9
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "headers", [], "any", false, false, false, 9), "get", ["referer"], "method", false, false, false, 9) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "headers", [], "any", false, false, false, 9), "get", ["host"], "method", false, false, false, 9), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "headers", [], "any", false, false, false, 9), "get", ["referer"], "method", false, false, false, 9)))) {
                        // line 10
                        yield "                                    <li><a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "headers", [], "any", false, false, false, 10), "get", ["referer"], "method", false, false, false, 10), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prev"), "html", null, true);
                        yield "</a></li>
                                ";
                    }
                    // line 12
                    yield "                            ";
                }
                // line 13
                yield "                            <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 13), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "label", [], "any", false, false, false, 13), "html", null, true);
                yield "</a></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['breadcrumb'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "                    </ul>  
                </div>
                <div class=\"uv-nav-bar-rt\">
                    <input class=\"uv-nav-search\" name=\"s\" type=\"text\" placeholder=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search KnowledgeBase"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "query", [], "any", false, false, false, 18), "get", ["s"], "method", false, false, false, 18), "html", null, true);
            yield "\"> 
                </div>
            </div>
        </div>
    </form>
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
        return "@UVDeskSupportCenter/Templates/breadcrumbs.html.twig";
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
        return array (  96 => 18,  91 => 15,  80 => 13,  77 => 12,  69 => 10,  66 => 9,  63 => 8,  59 => 7,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if breadcrumbs is defined %}
    <form method=\"get\" action=\"{{ path('helpdesk_knowledgebase_search') }}\">
        <div class=\"uv-nav-bar\">
            <div class=\"uv-container\">
                <div class=\"uv-nav-bar-lt\">
                    <ul>
                        {% for key, breadcrumb in breadcrumbs %}
                            {% if key == (breadcrumbs|length - 1) %}
                                {% if app.request.headers.get('referer') and app.request.headers.get('host') in app.request.headers.get('referer') %}
                                    <li><a href=\"{{ app.request.headers.get('referer') }}\">{{ \"Prev\"|trans }}</a></li>
                                {% endif %}
                            {% endif %}
                            <li><a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.label }}</a></li>
                        {% endfor %}
                    </ul>  
                </div>
                <div class=\"uv-nav-bar-rt\">
                    <input class=\"uv-nav-search\" name=\"s\" type=\"text\" placeholder=\"{{ \"Search KnowledgeBase\"|trans }}\" value=\"{{ app.request.query.get('s') }}\"> 
                </div>
            </div>
        </div>
    </form>
{% endif %}", "@UVDeskSupportCenter/Templates/breadcrumbs.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/breadcrumbs.html.twig");
    }
}
