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

/* @UVDeskSupportCenter/Knowledgebase/popularArticle.html.twig */
class __TwigTemplate_8fd5be6d91968d67d7385f3932b5f681 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/popularArticle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/popularArticle.html.twig"));

        // line 1
        $context["popArticles"] = "";
        // line 2
        if ((isset($context["popArticles"]) || array_key_exists("popArticles", $context) ? $context["popArticles"] : (function () { throw new RuntimeError('Variable "popArticles" does not exist.', 2, $this->source); })())) {
            // line 3
            yield "    <div class=\"uv-paper-aside\">
        <aside>
            <h3>";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular Articles"), "html", null, true);
            yield "</h3>
            <ul>
                ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popArticles"]) || array_key_exists("popArticles", $context) ? $context["popArticles"] : (function () { throw new RuntimeError('Variable "popArticles" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["popArticle"]) {
                // line 8
                yield "                    <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "slug", [], "any", false, false, false, 8)]), "html", null, true);
                yield "\"> ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "stared", [], "any", false, false, false, 8)) {
                    yield "<span class=\"uv-icon-star uv-pre\"></span>";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "name", [], "any", false, false, false, 8), "html", null, true);
                yield "</a></li>
                    ";
                // line 10
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['popArticle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            yield "            </ul>
        </aside>
    </div>
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
        return "@UVDeskSupportCenter/Knowledgebase/popularArticle.html.twig";
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
        return array (  82 => 11,  76 => 10,  65 => 8,  61 => 7,  56 => 5,  52 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set popArticles = \"\"%}
{% if popArticles %}
    <div class=\"uv-paper-aside\">
        <aside>
            <h3>{{'Popular Articles'|trans}}</h3>
            <ul>
                {% for popArticle in popArticles %}
                    <li><a href=\"{{path('helpdesk_knowledgebase_read_slug_article', {'slug': popArticle.slug})}}\"> {% if popArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{ popArticle.name }}</a></li>
                    {#<li><a href=\"{{path('helpdesk_knowledgebase_read_article', {'article': popArticle.id})}}\"> {% if popArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{popArticle.name}}</a></li>#}
                {% endfor %}
            </ul>
        </aside>
    </div>
{% endif %}", "@UVDeskSupportCenter/Knowledgebase/popularArticle.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/popularArticle.html.twig");
    }
}
