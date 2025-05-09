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

/* @UVDeskSupportCenter/Themes/folderView.html.twig */
class __TwigTemplate_d4291326ad901a8944747c812565351b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/folderView.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Themes/folderView.html.twig"));

        // line 1
        yield "<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-head\">
\t\t<h1 class=\"uv-text-center\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse via Folders"), "html", null, true);
        yield "</h1>
\t\t<p class=\"uv-text-center uv-fixed-width\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for something that is queried generally? Choose a relevant folder from below to explore possible solutions"), "html", null, true);
        yield "</p>
\t</div>
\t<div class=\"uv-kb-section-layout uv-kb-layout-folder\">
    \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["solutions"]) || array_key_exists("solutions", $context) ? $context["solutions"] : (function () { throw new RuntimeError('Variable "solutions" does not exist.', 7, $this->source); })()), "results", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
            // line 8
            yield "\t\t\t<!--Folder-->
\t\t\t<div class=\"uv-kb-folder\">
\t\t\t\t<div class=\"uv-kb-folder-lt\">
\t\t\t\t\t";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "solutionImage", [], "any", false, false, false, 11)) {
                // line 12
                yield "\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "scheme", [], "any", false, false, false, 12) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "httpHost", [], "any", false, false, false, 12)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "solutionImage", [], "any", false, false, false, 12), "html", null, true);
                yield "\">
\t\t\t\t\t";
            }
            // line 14
            yield "\t\t\t\t</div>
\t\t\t\t<div class=\"uv-kb-folder-rt\">
\t\t\t\t\t<p><span>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "</span></p>
\t\t\t\t\t<p><a href=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder", ["solution" => CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "categoriesCount", [], "any", false, false, false, 17), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            yield "</a></p>
\t\t\t\t\t<p><a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder_article_collection", ["solution" => CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["folder"], "articleCount", [], "any", false, false, false, 18), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Articles"), "html", null, true);
            yield "</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--//Folder-->
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['folder'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "\t</div>
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
        return "@UVDeskSupportCenter/Themes/folderView.html.twig";
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
        return array (  111 => 23,  96 => 18,  88 => 17,  84 => 16,  80 => 14,  73 => 12,  71 => 11,  66 => 8,  62 => 7,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-kb-section\">
\t<div class=\"uv-kb-section-head\">
\t\t<h1 class=\"uv-text-center\">{{ \"Browse via Folders\"|trans}}</h1>
\t\t<p class=\"uv-text-center uv-fixed-width\">{{ \"Looking for something that is queried generally? Choose a relevant folder from below to explore possible solutions\"|trans}}</p>
\t</div>
\t<div class=\"uv-kb-section-layout uv-kb-layout-folder\">
    \t{% for folder in solutions.results %}
\t\t\t<!--Folder-->
\t\t\t<div class=\"uv-kb-folder\">
\t\t\t\t<div class=\"uv-kb-folder-lt\">
\t\t\t\t\t{% if folder.solutionImage %}
\t\t\t\t\t\t<img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ folder.solutionImage }}\">
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"uv-kb-folder-rt\">
\t\t\t\t\t<p><span>{{folder.name}}</span></p>
\t\t\t\t\t<p><a href=\"{{ path('helpdesk_knowledgebase_folder', {'solution': folder.id}) }}\">{{folder.categoriesCount}} {{\"Categories\"|trans}}</a></p>
\t\t\t\t\t<p><a href=\"{{ path('helpdesk_knowledgebase_folder_article_collection', {'solution': folder.id}) }}\">{{folder.articleCount}} {{\"Articles\"|trans}}</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--//Folder-->
    \t{% endfor %}
\t</div>
</div>", "@UVDeskSupportCenter/Themes/folderView.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Themes/folderView.html.twig");
    }
}
