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

/* @UVDeskSupportCenter/Themes/categoryView.html.twig */
class __TwigTemplate_d801e9793f6d4cd6c9a7a770b7995d18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/categoryView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/categoryView.html.twig"));

        // line 1
        yield "<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-head\">
\t\t<h1 class=\"uv-text-center\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse via Categories"), "html", null, true);
        yield "</h1>
\t\t<p class=\"uv-text-center uv-fixed-width\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for something specific? Choose a relevant category from below to explore possible solutions"), "html", null, true);
        yield "</p>
\t</div>
\t<div class=\"uv-kb-section-layout uv-kb-layout-category\">
\t\t";
        // line 7
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["solutions"] ?? null), "categories", [], "any", true, true, false, 7) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 7, $this->source); })()), "categories", [], "any", false, false, false, 7)))) {
            // line 8
            yield "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 8, $this->source); })()), "categories", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                yield "\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "articles", [], "any", true, true, false, 9) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 9)))) {
                    // line 10
                    yield "\t\t\t\t\t<div class=\"uv-kb-folder uv-kb-category\">
\t\t\t\t\t\t<p class=\"uv-category-heading\">";
                    // line 11
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 11), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t<p class=\"uv-folder-description\">";
                    // line 12
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 12), "html", null, true);
                    yield "</p>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "articles", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                        // line 16
                        yield "\t\t\t\t\t\t\t\t<li><a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 16)]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 16), "html", null, true);
                        yield "</a></li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    yield "\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<a href=\"";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_category", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                    yield "\" class=\"uv-btn-small\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all articles"), "html", null, true);
                    yield "</a>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 23
                yield "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "
\t\t\t<div style=\"text-align: center; margin-top: 30px;\">
\t\t\t\t<a href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_category_collection");
            yield "\" class=\"uv-btn\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all categories"), "html", null, true);
            yield "</a>
\t\t\t</div>
\t\t";
        } else {
            // line 29
            yield "\t\t\t<p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Categories Found!"), "html", null, true);
            yield "</p>
\t\t";
        }
        // line 31
        yield "\t</div>
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
        return "@UVDeskSupportCenter/Themes/categoryView.html.twig";
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
        return array (  136 => 31,  130 => 29,  122 => 26,  118 => 24,  112 => 23,  104 => 20,  100 => 18,  89 => 16,  85 => 15,  79 => 12,  75 => 11,  72 => 10,  69 => 9,  64 => 8,  62 => 7,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-head\">
\t\t<h1 class=\"uv-text-center\">{{ \"Browse via Categories\"|trans}}</h1>
\t\t<p class=\"uv-text-center uv-fixed-width\">{{ \"Looking for something specific? Choose a relevant category from below to explore possible solutions\"|trans}}</p>
\t</div>
\t<div class=\"uv-kb-section-layout uv-kb-layout-category\">
\t\t{% if solutions.categories is defined and solutions.categories is not empty %}
\t\t\t{% for category in solutions.categories %}
\t\t\t\t{% if category.articles is defined and category.articles is not empty %}
\t\t\t\t\t<div class=\"uv-kb-folder uv-kb-category\">
\t\t\t\t\t\t<p class=\"uv-category-heading\">{{ category.name }}</p>
\t\t\t\t\t\t<p class=\"uv-folder-description\">{{ category.description }}</p>

\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t{% for article in category.articles %}
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('helpdesk_knowledgebase_read_slug_article', {'slug': article.slug}) }}\">{{ article.name }}</a></li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>

\t\t\t\t\t\t<a href=\"{{ path('helpdesk_knowledgebase_category', {'category': category.id}) }}\" class=\"uv-btn-small\">{{ \"View all articles\"|trans }}</a>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t\t<div style=\"text-align: center; margin-top: 30px;\">
\t\t\t\t<a href=\"{{ path('helpdesk_knowledgebase_category_collection') }}\" class=\"uv-btn\">{{ \"View all categories\"|trans }}</a>
\t\t\t</div>
\t\t{% else %}
\t\t\t<p>{{ \"No Categories Found!\"|trans }}</p>
\t\t{% endif %}
\t</div>
</div>
", "@UVDeskSupportCenter/Themes/categoryView.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Themes/categoryView.html.twig");
    }
}
