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

/* @UVDeskCoreFramework/Teams/updateSupportTeam.html.twig */
class __TwigTemplate_c1ad3f58f06d6e8be3b550e7fbee6179 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Teams/updateSupportTeam.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Teams/updateSupportTeam.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Teams/updateSupportTeam.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Team"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "\t<div class=\"uv-inner-section\">
\t\t";
        // line 8
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 9
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Users";
        // line 10
        yield "
\t\t";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 11, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 11, $this->source); })())], "method", false, false, false, 11), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 11, $this->source); })())], "method", false, false, false, 11);
        yield "
\t\t
\t\t<div class=\"uv-view ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13), "get", ["uv-asideView"], "method", false, false, false, 13))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Team"), "html", null, true);
        yield "</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"team-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"description\" class=\"uv-field\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
        yield "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"agent-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempUsers\" class=\"uv-field\" value=\"\" />
                        <input name=\"users\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"user-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                            </div>
                            <ul class=\"uv-agents-list\">
                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 47, $this->source); })()), "getAgentsPartialDetails", [], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 48
            yield "                                    <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
                                        ";
            // line 49
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 49) != null)) {
                // line 50
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "scheme", [], "any", false, false, false, 50) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "httpHost", [], "any", false, false, false, 50)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")) . CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 50)), "html", null, true);
                yield "\"/>
                                        ";
            } else {
                // line 52
                yield "                                            \t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 52, $this->source); })())), "html", null, true);
                yield "\" alt=\"\"/>
                                        ";
            }
            // line 54
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 54), "html", null, true);
            yield "
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                </li>
                            </ul>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            ";
        // line 63
        if ((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 63, $this->source); })())) {
            // line 64
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 64, $this->source); })()), "getUsersBySubGroupId", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)], "method", false, false, false, 64));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 65
                yield "                                    <a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 65), "html", null, true);
                yield "\">
                                        ";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 66), "html", null, true);
                yield "
                                        <span class=\"uv-icon-remove\"></span>
                                    </a>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                            ";
        }
        // line 71
        yield "                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"group-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempGroups\" class=\"uv-field\" value=\"\" />
                        <input name=\"groups\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"group-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                <ul class=\"\">
                                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 86, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 87
            yield "                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 87), "html", null, true);
            yield "\">
                                            ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 88), "html", null, true);
            yield "
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            ";
        // line 98
        if ((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 98, $this->source); })())) {
            // line 99
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 99, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 100
                yield "\t\t\t\t\t\t\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "isActive", [], "any", false, false, false, 100)) {
                    // line 101
                    yield "\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 101), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 102
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 102), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 106
                yield "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "                            ";
        }
        // line 108
        yield "                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
                <div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"isActive\" ";
        // line 119
        yield ((((isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 119, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["team"]) || array_key_exists("team", $context) ? $context["team"] : (function () { throw new RuntimeError('Variable "team" does not exist.', 119, $this->source); })()), "isActive", [], "any", false, false, false, 119))) ? ("checked") : (""));
        yield ">
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team is Active"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 129
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

    // line 136
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

        // line 137
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar TeamModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
                        required: true,
                        msg: \"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: \"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have characters only"), "html", null, true);
        yield "\"
                    }, {
\t\t\t\t\t\tmaxLength:50,
                        msg: \"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 50"), "html", null, true);
        yield "\"
\t\t\t\t\t}],
\t\t\t\t\t'description': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tvar TeamForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"saveTeam\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    this.setAddedIds('#agent-filter')
                    this.setAddedIds('#group-filter')
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 170
        yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 170, $this->source); })());
        yield "');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveTeam : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t\t\tif (this.model.isValid(true) && this.checkCustomValidation()) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t        } else {
\t\t\t\t\t\tthis.checkCustomValidation()
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcheckCustomValidation: function() {
\t\t\t\t\tvar isValid = 1;
\t\t\t\t\tif (!this.setAddedIds('#agent-filter').length || !this.setAddedIds('#group-filter').length) {
\t\t\t\t\t\tisValid = 0;
\t\t\t\t\t\tif (!this.setAddedIds('#agent-filter').length)
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, 'users', \"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\", 'input');
\t\t\t\t\t\tif (!this.setAddedIds('#group-filter').length)
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, 'groups', \"";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\", 'input');
\t\t\t\t\t}

\t\t\t\t\treturn isValid;
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))

\t\t\t\t\treturn ids;
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show()
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

\t\t\tteamForm = new TeamForm({
\t\t\t\tel : \$(\"#team-form\"),
\t\t\t\tmodel : new TeamModel()
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
        return "@UVDeskCoreFramework/Teams/updateSupportTeam.html.twig";
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
        return array (  475 => 196,  470 => 194,  443 => 170,  424 => 154,  417 => 150,  411 => 147,  405 => 144,  394 => 137,  381 => 136,  363 => 129,  353 => 122,  347 => 119,  340 => 115,  331 => 108,  328 => 107,  322 => 106,  315 => 102,  310 => 101,  307 => 100,  302 => 99,  300 => 98,  291 => 92,  288 => 91,  279 => 88,  274 => 87,  270 => 86,  265 => 84,  256 => 78,  247 => 71,  244 => 70,  234 => 66,  229 => 65,  224 => 64,  222 => 63,  214 => 58,  211 => 57,  201 => 54,  195 => 52,  189 => 50,  187 => 49,  182 => 48,  178 => 47,  172 => 44,  163 => 38,  153 => 31,  148 => 29,  138 => 22,  133 => 20,  124 => 14,  118 => 13,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Edit Team'|trans }}{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>{{ 'Edit Team'|trans }}</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"team-form\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"uv-field\" value=\"{{ team.name }}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Description'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"description\" class=\"uv-field\">{{ team.description }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Users'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"agent-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempUsers\" class=\"uv-field\" value=\"\" />
                        <input name=\"users\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"user-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Filter With'|trans }}</label>
                            </div>
                            <ul class=\"uv-agents-list\">
                                {% for agent in user_service.getAgentsPartialDetails() %}
                                    <li data-id=\"{{agent.id}}\">
                                        {% if agent.smallThumbnail != null %}
                                            <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') ~ agent.smallThumbnail }}\"/>
                                        {% else %}
                                            \t<img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                                        {% endif %}
                                        {{agent.name}}
                                    </li>
                                {% endfor %}
                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    {{ 'No result found'|trans }}
                                </li>
                            </ul>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            {% if team %}
                                {% for user in user_service.getUsersBySubGroupId(team.id) %}
                                    <a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{ user.id }}\">
                                        {{ user.name }}
                                        <span class=\"uv-icon-remove\"></span>
                                    </a>
                                {% endfor %}
                            {% endif %}
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Groups'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"group-filter\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"tempGroups\" class=\"uv-field\" value=\"\" />
                        <input name=\"groups\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"group-filter-input\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Filter With'|trans }}</label>
                                <ul class=\"\">
                                    {% for group in user_service.getSupportGroups() %}
                                        <li data-id=\"{{group.id}}\">
                                            {{group.name}}
                                        </li>
                                    {% endfor %}
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"uv-filtered-tags\">
                            {% if team %}
                                {% for group in team.getSupportGroups() %}
\t\t\t\t\t\t\t\t\t{% if group.isActive %}
\t\t\t\t\t\t\t\t\t\t<a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{group.id }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ group.name }}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"uv-icon-remove\"></span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
                                {% endfor %}
                            {% endif %}
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
                <div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Team Status'|trans }}</label>
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"isActive\" {{ team and team.isActive ? 'checked' : '' }}>
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Team is Active'|trans }}</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
                </div>
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
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar TeamModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'name': [{
                        required: true,
                        msg: \"{{ 'This field is mandatory'|trans }}\"
                    }, {
                        pattern: /^((?![!@#\$%^&*()<_+]).)*\$/,
                        msg: \"{{ 'This field must have characters only'|trans }}\"
                    }, {
\t\t\t\t\t\tmaxLength:50,
                        msg: \"{{ 'Maximum character length is 50'|trans }}\"
\t\t\t\t\t}],
\t\t\t\t\t'description': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tvar TeamForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"saveTeam\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'click .uv-dropdown-list li': 'addEntity',
                    'click .uv-filtered-tags .uv-btn-small': 'removeEntity'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
                    this.setAddedIds('#agent-filter')
                    this.setAddedIds('#group-filter')
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsaveTeam : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t\t\tif (this.model.isValid(true) && this.checkCustomValidation()) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t        } else {
\t\t\t\t\t\tthis.checkCustomValidation()
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tcheckCustomValidation: function() {
\t\t\t\t\tvar isValid = 1;
\t\t\t\t\tif (!this.setAddedIds('#agent-filter').length || !this.setAddedIds('#group-filter').length) {
\t\t\t\t\t\tisValid = 0;
\t\t\t\t\t\tif (!this.setAddedIds('#agent-filter').length)
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, 'users', \"{{ 'This field is mandatory'|trans }}\", 'input');
\t\t\t\t\t\tif (!this.setAddedIds('#group-filter').length)
\t\t\t\t\t\t\tBackbone.Validation.callbacks.invalid(this, 'groups', \"{{ 'This field is mandatory'|trans }}\", 'input');
\t\t\t\t\t}

\t\t\t\t\treturn isValid;
\t\t\t\t},
                setAddedIds: function(selector) {
                    var ids = [];
                    \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    \$(selector).find(\"input[type='hidden']\").val(ids.join(','))

\t\t\t\t\treturn ids;
                },
                addEntity: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);
                    if (id = currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        parent.find('input').val('')
                        parent.find(\"li:not(.uv-no-results)\").show()
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

\t\t\tteamForm = new TeamForm({
\t\t\t\tel : \$(\"#team-form\"),
\t\t\t\tmodel : new TeamModel()
\t\t\t});\t
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/Teams/updateSupportTeam.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Teams/updateSupportTeam.html.twig");
    }
}
