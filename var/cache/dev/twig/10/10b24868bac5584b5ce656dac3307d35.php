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

/* @UVDeskCoreFramework/Templates/search.html.twig */
class __TwigTemplate_79f9a0aa53d955ee3e834999b91c0d91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/search.html.twig"));

        // line 1
        yield "<div class=\"uv-search-wrapper uv-no-error-success-icon\">
\t<input placeholder=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\" class=\"uv-search-bar\" type=\"text\" name=\"\">
\t<div class=\"uv-search-result-wrapper\" id=\"beauty-scroll\">
\t\t<h6>Results</h6>

\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            yield "\t\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "routeName", [], "any", false, false, false, 7));
            yield "\">
\t\t\t\t<div class=\"uv-search-result-row\">
\t\t\t\t\t<div class=\"uv-brick-icon\">";
            // line 9
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 9);
            yield "</div>
\t\t\t\t\t<p>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10)), "html", null, true);
            yield "</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
\t\t<div class=\"uv-search-result-row uv-no-results\" style=\"display: none\">
\t\t\t<p>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "</p>
\t\t</div>
\t</div>
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
        return "@UVDeskCoreFramework/Templates/search.html.twig";
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
        return array (  86 => 16,  82 => 14,  72 => 10,  68 => 9,  62 => 7,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-search-wrapper uv-no-error-success-icon\">
\t<input placeholder=\"{{ 'Search'|trans }}\" class=\"uv-search-bar\" type=\"text\" name=\"\">
\t<div class=\"uv-search-result-wrapper\" id=\"beauty-scroll\">
\t\t<h6>Results</h6>

\t\t{% for item in collection %}
\t\t\t<a href=\"{{ path(item.routeName) }}\">
\t\t\t\t<div class=\"uv-search-result-row\">
\t\t\t\t\t<div class=\"uv-brick-icon\">{{ item.icon | raw }}</div>
\t\t\t\t\t<p>{{ item.title |trans }}</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t{% endfor %}

\t\t<div class=\"uv-search-result-row uv-no-results\" style=\"display: none\">
\t\t\t<p>{{ 'No result found'|trans }}</p>
\t\t</div>
\t</div>
</div>
", "@UVDeskCoreFramework/Templates/search.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/search.html.twig");
    }
}
