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

/* @UVDeskSupportCenter/Themes/articleView.html.twig */
class __TwigTemplate_a9ade39f2c41d4fdf564d65f2e8e6936 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/articleView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/articleView.html.twig"));

        // line 1
        yield "<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-layout uv-kb-layout-article\">
\t\t<div class=\"uv-kb-folder\">
\t\t\t<h2>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular Articles"), "html", null, true);
        yield "</h2>
\t\t\t<p>";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here are some of the most popular articles, which helped number of users to get their queries and questions resolved."), "html", null, true);
        yield "</p>
\t\t\t<ul>
    \t\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popArticles"]) || array_key_exists("popArticles", $context) ? $context["popArticles"] : (function () { throw new RuntimeError('Variable "popArticles" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["popArticle"]) {
            // line 8
            yield "\t\t\t\t\t<li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_article", ["article" => CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            yield "\"> ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "stared", [], "any", false, false, false, 8)) {
                yield "<span class=\"uv-icon-star uv-pre\"></span>";
            }
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "name", [], "any", false, false, false, 8), "html", null, true);
            yield "</a></li>
    \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['popArticle'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "\t\t\t</ul>
\t\t</div>
\t</div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Themes/articleView.html.twig";
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
        return array (  81 => 10,  66 => 8,  62 => 7,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-layout uv-kb-layout-article\">
\t\t<div class=\"uv-kb-folder\">
\t\t\t<h2>{{\"Popular Articles\"|trans}}</h2>
\t\t\t<p>{{\"Here are some of the most popular articles, which helped number of users to get their queries and questions resolved.\"|trans}}</p>
\t\t\t<ul>
    \t\t\t{% for popArticle in popArticles %}
\t\t\t\t\t<li><a href=\"{{path('helpdesk_knowledgebase_read_article', {'article': popArticle.id})}}\"> {% if popArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{ popArticle.name }}</a></li>
    \t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</div>", "@UVDeskSupportCenter/Themes/articleView.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Themes/articleView.html.twig");
    }
}
