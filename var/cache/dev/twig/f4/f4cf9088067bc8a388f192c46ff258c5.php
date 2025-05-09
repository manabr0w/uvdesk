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

/* @UVDeskSupportCenter/Templates/sidepanel.html.twig */
class __TwigTemplate_30392b0cebc390943c13f3dd473abd68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/sidepanel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/sidepanel.html.twig"));

        // line 1
        yield "<div class=\"uv-paper-aside\">
    ";
        // line 2
        if ((array_key_exists("popArticles", $context) && (isset($context["popArticles"]) || array_key_exists("popArticles", $context) ? $context["popArticles"] : (function () { throw new RuntimeError('Variable "popArticles" does not exist.', 2, $this->source); })()))) {
            // line 3
            yield "        <aside>
            <h3>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular Articles"), "html", null, true);
            yield "</h3>
            <ul>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popArticles"]) || array_key_exists("popArticles", $context) ? $context["popArticles"] : (function () { throw new RuntimeError('Variable "popArticles" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["popArticle"]) {
                // line 7
                yield "                    <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "slug", [], "any", false, false, false, 7)]), "html", null, true);
                yield "\"> ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "stared", [], "any", false, false, false, 7)) {
                    yield "<span class=\"uv-icon-star uv-pre\"></span>";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["popArticle"], "name", [], "any", false, false, false, 7), "html", null, true);
                yield "</a></li>
                    ";
                // line 9
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['popArticle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            yield "            </ul>
        </aside>
    ";
        }
        // line 13
        yield "    
    ";
        // line 14
        if ((array_key_exists("relatedArticles", $context) && (isset($context["relatedArticles"]) || array_key_exists("relatedArticles", $context) ? $context["relatedArticles"] : (function () { throw new RuntimeError('Variable "relatedArticles" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "        <aside class=\"uv-margin-top-30\">
            <h3>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Related Articles"), "html", null, true);
            yield "</h3>
            <ul>
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["relatedArticles"]) || array_key_exists("relatedArticles", $context) ? $context["relatedArticles"] : (function () { throw new RuntimeError('Variable "relatedArticles" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["relatedArticle"]) {
                // line 19
                yield "                    <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_read_slug_article", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["relatedArticle"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                yield "\"> ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["relatedArticle"], "stared", [], "any", false, false, false, 19)) {
                    yield "<span class=\"uv-icon-star uv-pre\"></span>";
                }
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["relatedArticle"], "name", [], "any", false, false, false, 19), "html", null, true);
                yield "</a></li>
                    ";
                // line 21
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['relatedArticle'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "            </ul>
        </aside>
    ";
        }
        // line 25
        yield "

    ";
        // line 27
        if ((array_key_exists("articleTags", $context) && (isset($context["articleTags"]) || array_key_exists("articleTags", $context) ? $context["articleTags"] : (function () { throw new RuntimeError('Variable "articleTags" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "        <aside class=\"uv-margin-top-30\">
            <h3>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
            yield "</h3>
            <div class=\"uv-tags\">
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articleTags"]) || array_key_exists("articleTags", $context) ? $context["articleTags"] : (function () { throw new RuntimeError('Variable "articleTags" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 32
                yield "                    <span><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_tag", ["tag" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 32), "name" => ""]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 32), "html", null, true);
                yield "</a></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "            </div>
        </aside>
    ";
        }
        // line 37
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Templates/sidepanel.html.twig";
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
        return array (  160 => 37,  155 => 34,  144 => 32,  140 => 31,  135 => 29,  132 => 28,  130 => 27,  126 => 25,  121 => 22,  115 => 21,  104 => 19,  100 => 18,  95 => 16,  92 => 15,  90 => 14,  87 => 13,  82 => 10,  76 => 9,  65 => 7,  61 => 6,  56 => 4,  53 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-paper-aside\">
    {% if popArticles is defined and popArticles %}
        <aside>
            <h3>{{'Popular Articles'|trans}}</h3>
            <ul>
                {% for popArticle in popArticles %}
                    <li><a href=\"{{path('helpdesk_knowledgebase_read_slug_article', {'slug': popArticle.slug})}}\"> {% if popArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{ popArticle.name }}</a></li>
                    {#<li><a href=\"{{path('helpdesk_knowledgebase_read_article', {'article': popArticle.id})}}\"> {% if popArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{popArticle.name}}</a></li>#}
                {% endfor %}
            </ul>
        </aside>
    {% endif %}
    
    {% if relatedArticles is defined and relatedArticles %}
        <aside class=\"uv-margin-top-30\">
            <h3>{{'Related Articles'|trans}}</h3>
            <ul>
                {% for relatedArticle in relatedArticles %}
                    <li><a href=\"{{path('helpdesk_knowledgebase_read_slug_article', {'slug': relatedArticle.slug})}}\"> {% if relatedArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{ relatedArticle.name }}</a></li>
                    {#<li><a href=\"{{path('helpdesk_knowledgebase_read_article', {'article': relatedArticle.articleId})}}\"> {% if relatedArticle.stared %}<span class=\"uv-icon-star uv-pre\"></span>{% endif %} {{relatedArticle.name}}</a></li>#}
                {% endfor %}
            </ul>
        </aside>
    {% endif %}


    {% if articleTags is defined and articleTags %}
        <aside class=\"uv-margin-top-30\">
            <h3>{{'Tags'|trans}}</h3>
            <div class=\"uv-tags\">
                {% for tag in articleTags %}
                    <span><a href=\"{{ path('helpdesk_knowledgebase_tag', {'tag': tag.id, 'name': ''}) }}\">{{ tag.name }}</a></span>
                {% endfor %}
            </div>
        </aside>
    {% endif %}
</div>", "@UVDeskSupportCenter/Templates/sidepanel.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/sidepanel.html.twig");
    }
}
