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

/* @UVDeskCoreFramework/savedReplyForm.html.twig */
class __TwigTemplate_8b90342b8062ebc4428082549b0cf579 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/savedReplyForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/savedReplyForm.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/savedReplyForm.html.twig", 1);
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

        yield " 
    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Reply"), "html", null, true);
            yield "
\t";
        } else {
            // line 7
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Save Reply"), "html", null, true);
            yield "
\t";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "\t<div class=\"uv-inner-section\">
\t\t";
        // line 14
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 15
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Productivity";
        // line 16
        yield "
\t\t";
        // line 17
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 17, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 17, $this->source); })())], "method", false, false, false, 17), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 17, $this->source); })())], "method", false, false, false, 17);
        yield "
\t\t
\t\t<div class=\"uv-view ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "cookies", [], "any", false, false, false, 19) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "cookies", [], "any", false, false, false, 19), "get", ["uv-asideView"], "method", false, false, false, 19))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Reply"), "html", null, true);
            yield "
                ";
        } else {
            // line 24
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Save Reply"), "html", null, true);
            yield "
                ";
        }
        // line 26
        yield "\t\t\t</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"saved-reply-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved reply name"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 40, $this->source); })()), "isAccessAuthorized", ["ROLE_ADMIN"], "method", false, false, false, 40)) {
            // line 41
            yield "\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t<div class=\"uv-field-block\" id=\"group-filter\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tempGroups\" class=\"uv-field\" value=\"\" />
\t\t\t\t\t\t\t<input name=\"groups\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"group-filter-input\">
                            <span class=\"uv-field-info\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Share saved reply with user(s) in these group(s)"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t\t<ul class=\"\">
\t\t\t\t\t\t\t\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 52, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 53
                yield "\t\t\t\t\t\t\t\t\t\t\t<li data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 53), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 54), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "\t\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-filtered-tags\">
\t\t\t\t\t\t\t\t";
            // line 64
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 64, $this->source); })()), "getSupportGroups", [], "any", false, false, false, 64)) {
                // line 65
                yield "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 65, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 65));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 66
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "isActive", [], "any", false, false, false, 66)) {
                        // line 67
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 67), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 68), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 72
                    yield "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "\t\t\t\t\t\t\t\t";
            }
            // line 74
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Teams"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t<div class=\"uv-field-block\" id=\"team-filter\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tempTeams\" class=\"uv-field\" value=\"\" />
\t\t\t\t\t\t\t<input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"team-filter-input\">
                            <span class=\"uv-field-info\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Share saved reply with user(s) in these teams(s)"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            yield "</label>
\t\t\t\t\t\t\t\t\t<ul class=\"\">
\t\t\t\t\t\t\t\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 90, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 91
                yield "\t\t\t\t\t\t\t\t\t\t\t<li data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 91), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 92), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "\t\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-filtered-tags\">
\t\t\t\t\t\t\t\t";
            // line 102
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 102, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 102)) {
                // line 103
                yield "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 103, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 104
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "isActive", [], "any", false, false, false, 104)) {
                        // line 105
                        yield "\t\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 105), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 106
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 106), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    yield "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                yield "\t\t\t\t\t\t\t\t";
            }
            // line 112
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->
\t\t\t\t";
        }
        // line 117
        yield "\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-margin-right-15\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Body"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block uv-margin-top-5\">
\t\t\t\t\t\t<textarea id=\"message\" name=\"message\" class=\"uv-field\">
\t\t\t\t\t\t\t";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 122, $this->source); })()), "message", [], "any", false, false, false, 122), "html", null, true);
        yield "
\t\t\t\t\t\t</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info  uv-margin-top-5\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved reply Body"), "html", null, true);
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        // line 138
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t";
        // line 139
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskCoreFramework/Templates/tinyMCE.html.twig");
        yield "
    <script>
\t\tvar toolbarOptions = sfTinyMce.options.toolbar;
        sfTinyMce.init({
            // selector : 'textarea[name=\"message\"]',
\t\t\ttoolbar: toolbarOptions + ' | placeholders',
\t\t\tsetup: function (editor) {
\t\t\t\teditor.addButton('placeholders', {
\t\t\t\ttype: 'listbox',
\t\t\t\ttext: '";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placeholders"), "html", null, true);
        yield "',
\t\t\t\tonselect: function (e) {
\t\t\t\t\teditor.insertContent(this.value());
\t\t\t\t\tthis.text('";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placeholders"), "html", null, true);
        yield "');
\t\t\t\t},
\t\t\t\tvalues: [
\t\t\t\t\t";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_service"]) || array_key_exists("email_service", $context) ? $context["email_service"] : (function () { throw new RuntimeError('Variable "email_service" does not exist.', 154, $this->source); })()), "getEmailPlaceHolders", ["savedReply"], "method", false, false, false, 154));
        foreach ($context['_seq'] as $context["basekey"] => $context["placeholders"]) {
            // line 155
            yield "\t\t\t\t\t// { text: '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["basekey"])), "html", null, true);
            yield "' , menu: [
\t\t\t\t\t\t";
            // line 156
            if (is_iterable($context["placeholders"])) {
                // line 157
                yield "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["placeholders"]);
                foreach ($context['_seq'] as $context["fieldKey"] => $context["fieldPlaceholder"]) {
                    // line 158
                    yield "\t\t\t\t\t\t\t\t{ text: \"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["fieldPlaceholder"], "title", [], "any", false, false, false, 158);
                    yield "\", value: '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((("{%" . $context["basekey"]) . ".") . $context["fieldKey"]) . "%}"), "html", null, true);
                    yield "' },
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['fieldKey'], $context['fieldPlaceholder'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                yield "\t\t\t\t\t\t";
            }
            // line 161
            yield "\t\t\t\t\t// ]}, 
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['basekey'], $context['placeholders'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "\t\t\t\t],
\t\t\t\t});
\t\t\t},
        });
    </script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SavedReplyModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^(?!.*[!@#\$%^&*()<_+])',
\t\t\t\t\t\tmsg: \"";
        // line 178
        yield "Name must have characters only";
        yield "\"
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength:100,
\t\t\t\t\t\tmsg: \"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field contain maximum 100 characters."), "html", null, true);
        yield "\"
\t\t\t\t\t}],
\t\t\t\t}
\t\t\t});

\t\t\tvar SavedReplyForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveSavedReply\",
\t\t\t\t\t'blur input': 'formChanged',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    this.setAddedIds('#group-filter');
                    this.setAddedIds('#team-filter');
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 197
        yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 197, $this->source); })());
        yield "');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveSavedReply : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show();

                        if(!parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\")
                            this.setAddedIds(\"#\" + parent.attr('id'))
                        }
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove()
                    this.setAddedIds(\"#\" + parent.attr('id'))
                }
\t\t\t});

\t\t\tsavedReplyForm = new SavedReplyForm({
\t\t\t\tel : \$(\"#saved-reply-form\"),
\t\t\t\tmodel : new SavedReplyModel()
\t\t\t});\t
\t\t});
\t</script>
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
        return "@UVDeskCoreFramework/savedReplyForm.html.twig";
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
        return array (  525 => 197,  506 => 181,  500 => 178,  494 => 175,  480 => 163,  473 => 161,  470 => 160,  459 => 158,  454 => 157,  452 => 156,  447 => 155,  443 => 154,  437 => 151,  431 => 148,  419 => 139,  414 => 138,  401 => 137,  383 => 130,  375 => 125,  369 => 122,  363 => 119,  359 => 117,  352 => 112,  349 => 111,  343 => 110,  336 => 106,  331 => 105,  328 => 104,  323 => 103,  321 => 102,  312 => 96,  309 => 95,  300 => 92,  295 => 91,  291 => 90,  286 => 88,  280 => 85,  273 => 81,  264 => 74,  261 => 73,  255 => 72,  248 => 68,  243 => 67,  240 => 66,  235 => 65,  233 => 64,  224 => 58,  221 => 57,  212 => 54,  207 => 53,  203 => 52,  198 => 50,  192 => 47,  185 => 43,  181 => 41,  179 => 40,  172 => 36,  167 => 34,  162 => 32,  154 => 26,  148 => 24,  142 => 22,  140 => 21,  133 => 19,  128 => 17,  125 => 16,  122 => 15,  119 => 14,  116 => 12,  103 => 11,  88 => 7,  82 => 5,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
    {% if template.id %}
\t\t{{ 'Edit Saved Reply'|trans }}
\t{% else %}
\t\t{{ 'Add Save Reply'|trans }}
\t{% endif %}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Productivity' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{% if template.id %}
                    {{ 'Edit Saved Reply'|trans }}
                {% else %}
                    {{ 'Add Save Reply'|trans }}
                {% endif %}
\t\t\t</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"saved-reply-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ template.name }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">{{ \"Saved reply name\"|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t{% if user_service.isAccessAuthorized('ROLE_ADMIN') %}
\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Groups'|trans }}</label>
\t\t\t\t\t\t<div class=\"uv-field-block\" id=\"group-filter\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tempGroups\" class=\"uv-field\" value=\"\" />
\t\t\t\t\t\t\t<input name=\"groups\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"group-filter-input\">
                            <span class=\"uv-field-info\">{{ 'Share saved reply with user(s) in these group(s)'|trans }}</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Filter With'|trans }}</label>
\t\t\t\t\t\t\t\t\t<ul class=\"\">
\t\t\t\t\t\t\t\t\t\t{% for group in user_service.getSupportGroups() %}
\t\t\t\t\t\t\t\t\t\t\t<li data-id=\"{{group.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{group.name}}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t{{ 'No result found'|trans }}
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-filtered-tags\">
\t\t\t\t\t\t\t\t{% if template.getSupportGroups %}
\t\t\t\t\t\t\t\t\t{% for group in template.getSupportGroups() %}
\t\t\t\t\t\t\t\t\t\t{% if group.isActive %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{group.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ group.name }}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->

\t\t\t\t\t<!-- Field -->
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Teams'|trans }}</label>
\t\t\t\t\t\t<div class=\"uv-field-block\" id=\"team-filter\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tempTeams\" class=\"uv-field\" value=\"\" />
\t\t\t\t\t\t\t<input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"team-filter-input\">
                            <span class=\"uv-field-info\">{{ 'Share saved reply with user(s) in these teams(s)'|trans }}</span>
\t\t\t\t\t\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t\t\t\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t\t\t\t\t\t<label>{{ 'Filter With'|trans }}</label>
\t\t\t\t\t\t\t\t\t<ul class=\"\">
\t\t\t\t\t\t\t\t\t\t{% for team in user_service.getSupportTeams() %}
\t\t\t\t\t\t\t\t\t\t\t<li data-id=\"{{team.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{team.name}}
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<li class=\"uv-no-results\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t{{ 'No result found'|trans }}
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"uv-filtered-tags\">
\t\t\t\t\t\t\t\t{% if template.getSupportTeams() %}
\t\t\t\t\t\t\t\t\t{% for team in template.getSupportTeams() %}
\t\t\t\t\t\t\t\t\t\t{% if team.isActive %}
\t\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{team.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ team.name }}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- //Field -->
\t\t\t\t{% endif %}
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-margin-right-15\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Body'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block uv-margin-top-5\">
\t\t\t\t\t\t<textarea id=\"message\" name=\"message\" class=\"uv-field\">
\t\t\t\t\t\t\t{{ template.message }}
\t\t\t\t\t\t</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info  uv-margin-top-5\">{{ \"Saved reply Body\"|trans }}</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
{% endblock %}
{% block footer %}
\t{{ parent() }}
\t{{ include(\"@UVDeskCoreFramework/Templates/tinyMCE.html.twig\") }}
    <script>
\t\tvar toolbarOptions = sfTinyMce.options.toolbar;
        sfTinyMce.init({
            // selector : 'textarea[name=\"message\"]',
\t\t\ttoolbar: toolbarOptions + ' | placeholders',
\t\t\tsetup: function (editor) {
\t\t\t\teditor.addButton('placeholders', {
\t\t\t\ttype: 'listbox',
\t\t\t\ttext: '{{ \"Placeholders\"|trans }}',
\t\t\t\tonselect: function (e) {
\t\t\t\t\teditor.insertContent(this.value());
\t\t\t\t\tthis.text('{{ \"Placeholders\"|trans }}');
\t\t\t\t},
\t\t\t\tvalues: [
\t\t\t\t\t{% for basekey, placeholders in email_service.getEmailPlaceHolders('savedReply') %}
\t\t\t\t\t// { text: '{{ basekey | trans | title }}' , menu: [
\t\t\t\t\t\t{% if placeholders is iterable %}
\t\t\t\t\t\t\t{% for fieldKey, fieldPlaceholder in placeholders %}
\t\t\t\t\t\t\t\t{ text: \"{{ fieldPlaceholder.title|raw }}\", value: '{{ \"{%\" ~ basekey ~ \".\" ~ fieldKey ~ \"%}\"}}' },
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t// ]}, 
\t\t\t\t\t{% endfor %}
\t\t\t\t],
\t\t\t\t});
\t\t\t},
        });
    </script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SavedReplyModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}, {
\t\t\t\t\t\tpattern: '^(?!.*[!@#\$%^&*()<_+])',
\t\t\t\t\t\tmsg: \"{{ 'Name must have characters only' }}\"
\t\t\t\t\t}, {
\t\t\t\t\t\tmaxLength:100,
\t\t\t\t\t\tmsg: \"{{ 'This field contain maximum 100 characters.'|trans }}\"
\t\t\t\t\t}],
\t\t\t\t}
\t\t\t});

\t\t\tvar SavedReplyForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveSavedReply\",
\t\t\t\t\t'blur input': 'formChanged',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    this.setAddedIds('#group-filter');
                    this.setAddedIds('#team-filter');
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveSavedReply : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if(this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show();

                        if(!parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-small default' href='#' data-id='\" + id + \"'>\"+currentElement.text()+\"<span class='uv-icon-remove'></span></a>\")
                            this.setAddedIds(\"#\" + parent.attr('id'))
                        }
                    }
                },
                removeEntity: function(e) {
                    var parent = Backbone.\$(e.currentTarget).parents(\".uv-field-block\")
                    Backbone.\$(e.currentTarget).remove()
                    this.setAddedIds(\"#\" + parent.attr('id'))
                }
\t\t\t});

\t\t\tsavedReplyForm = new SavedReplyForm({
\t\t\t\tel : \$(\"#saved-reply-form\"),
\t\t\t\tmodel : new SavedReplyModel()
\t\t\t});\t
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/savedReplyForm.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/savedReplyForm.html.twig");
    }
}
