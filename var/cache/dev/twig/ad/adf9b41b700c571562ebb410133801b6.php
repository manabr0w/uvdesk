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

/* @UVDeskAutomation/PreparedResponse/createPreparedResponse.html.twig */
class __TwigTemplate_b43c56a364b4a5cb8f003ef5167b4b40 extends Template
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
            'internalcss' => [$this, 'block_internalcss'],
            'pageContent' => [$this, 'block_pageContent'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskCoreFramework/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/PreparedResponse/createPreparedResponse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/PreparedResponse/createPreparedResponse.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework/Templates/layout.html.twig", "@UVDeskAutomation/PreparedResponse/createPreparedResponse.html.twig", 1);
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
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", ["id"], "method", false, false, false, 4)) {
            // line 5
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Prepared Response"), "html", null, true);
            yield "
    ";
        } else {
            // line 7
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Prepared Response"), "html", null, true);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_internalcss(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "internalcss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "internalcss"));

        // line 12
        yield "    @media(max-width: 767px) {
        #company-workflow > .steps {
            display: none;
        }
    }

    @media(max-width: 579px) {
        #company-workflow > h3 {
            margin-right: 80px;
        }

        #company-workflow > h3 > a {
            position: absolute;
            top: 0px;
            right: 10px;
        }
    }

    .has-error button.btn {
        border-color: #cc5965;
    }
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        // line 36
        yield "    <style>
        .workflow-conditions-body .workflow-condition:first-child .uv-workflow-hr-plank {
            display: none;
        }
    </style>
    <!-- Inner Section -->
    <div class=\"uv-inner-section\">
        ";
        // line 44
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 45
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Productivity";
        // line 46
        yield "
\t\t";
        // line 47
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 47, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 47, $this->source); })())], "method", false, false, false, 47), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 47, $this->source); })())], "method", false, false, false, 47);
        yield "

        <!-- View -->
        <div class=\"uv-view ";
        // line 50
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "cookies", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "cookies", [], "any", false, false, false, 50), "get", ["uv-asideView"], "method", false, false, false, 50))) {
            yield "uv-aside-view";
        }
        yield "\">
            <!-- Form -->
            ";
        // line 52
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "request", [], "any", false, false, false, 52), "get", ["id"], "method", false, false, false, 52))) {
            // line 53
            yield "                <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Prepared Response"), "html", null, true);
            yield "</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prepare_response_editaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", ["id"], "method", false, false, false, 54)]), "html", null, true);
            yield "\">
            ";
        } else {
            // line 56
            yield "                <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Prepared Response"), "html", null, true);
            yield "</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prepare_response_addaction");
            yield "\">
            ";
        }
        // line 59
        yield "                <!-- Prepared Response Description Section -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field\" type=\"text\" value=\"";
        // line 63
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "name", [], "any", true, true, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "html", null, true)) : (""));
        yield "\">
                        <p class=\"uv-field-message\">";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "name", [], "any", true, true, false, 64)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "html", null, true);
        }
        yield "</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <textarea name=\"description\" class=\"uv-field\">";
        // line 71
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "description", [], "any", true, true, false, 71)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), "html", null, true)) : (""));
        yield "</textarea>
                        <p class=\"uv-field-message\">";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "description", [], "any", true, true, false, 72)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        }
        yield "</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prepared Response Status"), "html", null, true);
        yield "</label>
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input name=\"status\" type=\"checkbox\" ";
        // line 81
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "status", [], "any", true, true, false, 81) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 81, $this->source); })()), "status", [], "any", false, false, false, 81) == "on"))) ? ("checked") : (""));
        yield ">
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prepared Response is Active"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                </div>
                ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 88, $this->source); })()), "isAccessAuthorized", ["ROLE_ADMIN"], "method", false, false, false, 88)) {
            // line 89
            yield "                    <div class=\"uv-hr\"></div>
                
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input type=\"hidden\" name=\"tempGroups\" class=\"uv-field\" value=\"\" />
                            <input name=\"groups\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"group-filter-input\" value=\"\">
                            <span class=\"uv-field-info\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Share prepared response with user(s) in these group(s)"), "html", null, true);
            yield "</span>
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            yield "</label>
                                    <ul class=\"\">
                                        ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 102, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 103
                yield "                                            <li data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 103), "html", null, true);
                yield "\">
                                                ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 104), "html", null, true);
                yield "
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            yield "
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\">
                                ";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "groups", [], "any", true, true, false, 114) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 114, $this->source); })()), "groups", [], "any", false, false, false, 114))) {
                // line 115
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 115, $this->source); })()), "groups", [], "any", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 116
                    yield "                                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "isActive", [], "any", false, false, false, 116)) {
                        // line 117
                        yield "                                            <a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 117), "html", null, true);
                        yield "\">
                                                ";
                        // line 118
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 118), "html", null, true);
                        yield "
                                                <span class=\"uv-icon-remove\"></span>
                                            </a>
                                        ";
                    }
                    // line 122
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                yield "                                ";
            }
            // line 124
            yield "                            </div>
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Teams"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input type=\"hidden\" name=\"tempTeams\" class=\"uv-field\" value=\"\" />
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"team-filter-input\">
                            <span class=\"uv-field-info\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Share prepared response with user(s) in these teams(s)"), "html", null, true);
            yield "</span>
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
            yield "</label>
                                    <ul class=\"\">
                                        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 140, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 141
                yield "                                            <li data-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 141), "html", null, true);
                yield "\">
                                                ";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 142), "html", null, true);
                yield "
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
            yield "
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\">
                                ";
            // line 152
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "teams", [], "any", true, true, false, 152) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 152, $this->source); })()), "teams", [], "any", false, false, false, 152))) {
                // line 153
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 153, $this->source); })()), "teams", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                    // line 154
                    yield "                                        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["team"], "isActive", [], "any", false, false, false, 154)) {
                        // line 155
                        yield "                                            <a class=\"uv-btn-small default\" href=\"#\" data-id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 155), "html", null, true);
                        yield "\">
                                                ";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 156), "html", null, true);
                        yield "
                                                <span class=\"uv-icon-remove\"></span>
                                            </a>
                                        ";
                    }
                    // line 160
                    yield "                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                yield "                                ";
            }
            // line 162
            yield "                            </div>
                        </div>
                    </div>
                    <!-- //Field --> 
                ";
        }
        // line 167
        yield "                <div class=\"uv-hr\"></div>
                <!-- // Prepared Response Description Section -->


                <!-- Prepared Response Actions Section -->
                <div id=\"actions\" class=\"uv-element-block uv-field-workflow\">
                    <label class=\"uv-field-label\">";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        yield "</label>
                    <span class=\"uv-field-info\">";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An action not only reduces the workload but also makes it quite easier for ticket automation"), "html", null, true);
        yield "</span>

                    <div class=\"workflow-action-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-add\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add More"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
                <!-- // Prepared Response Actions Section -->


                <!-- CTA -->
                ";
        // line 188
        yield "                <button type=\"submit\" name=\"submit\" class=\"uv-btn\" href=\"#\" ";
        if ((array_key_exists("forcedActions", $context) && (isset($context["forcedActions"]) || array_key_exists("forcedActions", $context) ? $context["forcedActions"] : (function () { throw new RuntimeError('Variable "forcedActions" does not exist.', 188, $this->source); })()))) {
            yield "disabled=\"disabled\" date-toggle=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You don't have premission to edit this Prepared response"), "html", null, true);
            yield " \" ";
        }
        yield " >";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "request", [], "any", false, false, false, 188), "get", ["id"], "method", false, false, false, 188))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Prepared Response"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Prepared Response"), "html", null, true);
        }
        yield "</button>
                <!-- // CTA -->
            </form>
            <!-- Form -->
        </div>
        <!-- // View -->
    </div>
    <!-- // Inner Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
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

        // line 199
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    <script type=\"text/javascript\">
        _.extend(Backbone.Validation.patterns, {
          stringPattern: /[a-z0-9]/i,
        });

        _.extend(Backbone.Validation.callbacks, {
            valid : function (view, attr, selector) {
                console.log(\$('[name=\"'+attr+'\"]').closest('.uv-field-block'));
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html('').fadeOut(0);
            },
            invalid : function (view, attr, error, selector) {
                console.log(\$('[name=\"'+attr+'\"]').closest('.uv-field-block'));
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html(error).fadeIn(0);
            }
        });

        if(typeof(sB) == 'undefined'){
          var sB = {};
        }

        sB.WorkflowCollection = Backbone.Collection.extend({
            baseUrl: \"";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_service_call");
        yield "\",
            fetchResult: function(dataMatch) {
            this.url = this.baseUrl;
            return this.fetch({ 'data' : {
                'service': 'email.service',
                'call': 'getEmailPlaceHolders',
                'options': { 'match': dataMatch },
            }});
        }});
        sB.workflowCollection = new sB.WorkflowCollection();

        sB.WorkflowModel = Backbone.Model.extend({
            validation: {
                name: {
                    required: true,
                    pattern: 'stringPattern',
                    msg: \"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid name."), "html", null, true);
        yield "\"
                },
            },
\t\t\t";
        // line 241
        if ( !(array_key_exists("forcedActions", $context) && (isset($context["forcedActions"]) || array_key_exists("forcedActions", $context) ? $context["forcedActions"] : (function () { throw new RuntimeError('Variable "forcedActions" does not exist.', 241, $this->source); })()))) {
            // line 242
            yield "                validateSelect: function(value, attr, computedState) {
                    var currentSelectValue = \$('select[name=\"'+ attr + '\"]').prev().find('.selected').length;
                    if (!value) {
                        return \"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select a value."), "html", null, true);
            yield "\";
                    }
                },
                validateSelectMultiple: function(value, attr, computedState) {
                    var currentSelectValue = \$('[name=\"'+ attr + '\"]').length;
                    if (!value) {
                        return \"";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select a value."), "html", null, true);
            yield "\";
                    }
                },
                validateSelectText: function(value, attr, computedState) {
                    if (!value) {
                        return \"";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please add a value."), "html", null, true);
            yield "\";
                    }
                }
\t\t\t";
        }
        // line 259
        yield "            
        });

        sB.WorkflowView = Backbone.View.extend({
            el: '.uv-view',
            initialize: function() {
                this.model = new sB.WorkflowModel();
                Backbone.Validation.bind(this);
                this.setAddedIds('#group-filter');
                this.setAddedIds('#team-filter');
            },
            events: {
                'submit form[name=\"form-workflow\"]': 'processWorkflow',
                'click .workflow-form .uv-dropdown-list li': 'addEntity',
                'click .workflow-form .uv-filtered-tags .uv-btn-small': 'removeEntity'                
            },
            processWorkflow: function(e) {
                this.model.set(this.\$el.find('form').serializeObject());

                var self = this;
                filterArray = ['name'];
                // Populate Filter Array - Events and Actions are required fields
                
                // Actions
                this.\$('.wfAction').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelect';
                });
                this.\$('.wfActionMultiple').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelectMultiple';
                });
                this.\$('.wfActionValue').each(function(key, value) {
                    if (\$(this).attr('name') == undefined) {
                        return;
                    }

                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelectText';
                });

                if (this.validateData(filterArray)) {
                    return true;
                } else {
                    e.preventDefault();
                }
            },
            validateData: function(filterArray) {
                return this.model.isValid(filterArray);
            },
            updateActive: function(e){
                this.\$('div.step-info').each(function() {
                    \$(this).addClass('active');
                    if (\$(this).attr('data-href') == self.\$(e.target).attr('href'))
                        return false;
                });
            },
            addEntity: function(e) {
                currentElement = Backbone.\$(e.currentTarget);
                if(id = currentElement.attr(\"data-id\")) {
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
            },
            setAddedIds: function(selector) {
                var ids = [];
                \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                    ids.push(\$(this).attr('data-id'))
                });

                \$(selector).find(\"input[type='hidden']\").val(ids.join(','))

                return ids;
            },            
        });
        sB.workflowView = new sB.WorkflowView();

        \$.fn.serializeObject = function () {
            \"use strict\";
            var a = {}, b = function (b, c) {
                var d = a[c.name];
                \"undefined\" != typeof d && d !== null ? \$.isArray(d) ? d.push(c.value) : a[c.name] = [d, c.value] : a[c.name] = c.value
            };
            return \$.each(this.serializeArray(), b), a
        };
    </script>
    
    ";
        // line 357
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskAutomation//PreparedResponse//actions.html.twig");
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
        return "@UVDeskAutomation/PreparedResponse/createPreparedResponse.html.twig";
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
        return array (  717 => 357,  617 => 259,  610 => 256,  602 => 251,  593 => 245,  588 => 242,  586 => 241,  580 => 238,  561 => 222,  534 => 199,  521 => 198,  490 => 188,  479 => 179,  471 => 174,  467 => 173,  459 => 167,  452 => 162,  449 => 161,  443 => 160,  436 => 156,  431 => 155,  428 => 154,  423 => 153,  421 => 152,  412 => 146,  409 => 145,  400 => 142,  395 => 141,  391 => 140,  386 => 138,  380 => 135,  373 => 131,  364 => 124,  361 => 123,  355 => 122,  348 => 118,  343 => 117,  340 => 116,  335 => 115,  333 => 114,  324 => 108,  321 => 107,  312 => 104,  307 => 103,  303 => 102,  298 => 100,  292 => 97,  285 => 93,  279 => 89,  277 => 88,  270 => 84,  264 => 81,  257 => 77,  247 => 72,  243 => 71,  238 => 69,  228 => 64,  224 => 63,  219 => 61,  215 => 59,  210 => 57,  205 => 56,  200 => 54,  195 => 53,  193 => 52,  186 => 50,  180 => 47,  177 => 46,  174 => 45,  171 => 44,  162 => 36,  149 => 35,  117 => 12,  104 => 11,  89 => 7,  83 => 5,  81 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework/Templates/layout.html.twig\" %}

{% block title %} 
    {% if app.request.get('id') %}
        {{ 'Edit Prepared Response' | trans }}
    {% else %}
        {{ 'Add Prepared Response' | trans }}
    {% endif %}
{% endblock %}

{% block internalcss %}
    @media(max-width: 767px) {
        #company-workflow > .steps {
            display: none;
        }
    }

    @media(max-width: 579px) {
        #company-workflow > h3 {
            margin-right: 80px;
        }

        #company-workflow > h3 > a {
            position: absolute;
            top: 0px;
            right: 10px;
        }
    }

    .has-error button.btn {
        border-color: #cc5965;
    }
{% endblock %}

{% block pageContent %}
    <style>
        .workflow-conditions-body .workflow-condition:first-child .uv-workflow-hr-plank {
            display: none;
        }
    </style>
    <!-- Inner Section -->
    <div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Productivity' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

        <!-- View -->
        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
            <!-- Form -->
            {% if app.request.get('id') is not empty %}
                <h1>{{ 'Edit Prepared Response'|trans }}</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"{{ path('prepare_response_editaction', {'id': app.request.get('id')}) }}\">
            {% else %}
                <h1>{{ 'New Prepared Response'|trans }}</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"{{ path('prepare_response_addaction') }}\">
            {% endif %}
                <!-- Prepared Response Description Section -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field\" type=\"text\" value=\"{{ formData.name is defined ? formData.name : '' }}\">
                        <p class=\"uv-field-message\">{% if error.name is defined %}{{ error.name }}{% endif %}</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Description'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <textarea name=\"description\" class=\"uv-field\">{{ formData.description is defined ? formData.description : '' }}</textarea>
                        <p class=\"uv-field-message\">{% if error.description is defined %}{{ error.description }}{% endif %}</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Prepared Response Status'|trans }}</label>
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input name=\"status\" type=\"checkbox\" {{ formData.status is defined and formData.status == 'on' ? 'checked' : '' }}>
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">{{ 'Prepared Response is Active'|trans }}</span>
                        </label>
                    </div>
                </div>
                {% if user_service.isAccessAuthorized('ROLE_ADMIN') %}
                    <div class=\"uv-hr\"></div>
                
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Groups'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input type=\"hidden\" name=\"tempGroups\" class=\"uv-field\" value=\"\" />
                            <input name=\"groups\" class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"group-filter-input\" value=\"\">
                            <span class=\"uv-field-info\">{{ 'Share prepared response with user(s) in these group(s)'|trans }}</span>
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
                                {% if formData.groups is defined and formData.groups %}
                                    {% for group in formData.groups %}
                                        {% if group.isActive %}
                                            <a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{group.id }}\">
                                                {{ group.name }}
                                                <span class=\"uv-icon-remove\"></span>
                                            </a>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Teams'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input type=\"hidden\" name=\"tempTeams\" class=\"uv-field\" value=\"\" />
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" id=\"team-filter-input\">
                            <span class=\"uv-field-info\">{{ 'Share prepared response with user(s) in these teams(s)'|trans }}</span>
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% for team in user_service.getSupportTeams() %}
                                            <li data-id=\"{{team.id}}\">
                                                {{team.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\">
                                {% if formData.teams is defined and formData.teams %}
                                    {% for team in formData.teams %}
                                        {% if team.isActive %}
                                            <a class=\"uv-btn-small default\" href=\"#\" data-id=\"{{team.id }}\">
                                                {{ team.name }}
                                                <span class=\"uv-icon-remove\"></span>
                                            </a>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <!-- //Field --> 
                {% endif %}
                <div class=\"uv-hr\"></div>
                <!-- // Prepared Response Description Section -->


                <!-- Prepared Response Actions Section -->
                <div id=\"actions\" class=\"uv-element-block uv-field-workflow\">
                    <label class=\"uv-field-label\">{{ 'Actions'|trans }}</label>
                    <span class=\"uv-field-info\">{{ 'An action not only reduces the workload but also makes it quite easier for ticket automation'|trans }}</span>

                    <div class=\"workflow-action-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-add\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> {{ 'Add More'|trans }}
                        </a>
                    </div>
                </div>
                <!-- // Prepared Response Actions Section -->


                <!-- CTA -->
                {# <input type=\"submit\" class=\"uv-btn\" href=\"#\" value=\"Save Prepared Response\"> #}
                <button type=\"submit\" name=\"submit\" class=\"uv-btn\" href=\"#\" {% if forcedActions is defined and forcedActions %}disabled=\"disabled\" date-toggle=\"tooltip\" title=\"{{ \"You don't have premission to edit this Prepared response\"|trans }} \" {% endif %} >{% if app.request.get('id') is not empty %}{{ 'Save Prepared Response'|trans }}{% else %}{{ 'Add Prepared Response'|trans }}{% endif %}</button>
                <!-- // CTA -->
            </form>
            <!-- Form -->
        </div>
        <!-- // View -->
    </div>
    <!-- // Inner Section -->
{% endblock %}

{% block footer %}
    {{ parent() }}

    <script type=\"text/javascript\">
        _.extend(Backbone.Validation.patterns, {
          stringPattern: /[a-z0-9]/i,
        });

        _.extend(Backbone.Validation.callbacks, {
            valid : function (view, attr, selector) {
                console.log(\$('[name=\"'+attr+'\"]').closest('.uv-field-block'));
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html('').fadeOut(0);
            },
            invalid : function (view, attr, error, selector) {
                console.log(\$('[name=\"'+attr+'\"]').closest('.uv-field-block'));
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html(error).fadeIn(0);
            }
        });

        if(typeof(sB) == 'undefined'){
          var sB = {};
        }

        sB.WorkflowCollection = Backbone.Collection.extend({
            baseUrl: \"{{ path('ajax_service_call') }}\",
            fetchResult: function(dataMatch) {
            this.url = this.baseUrl;
            return this.fetch({ 'data' : {
                'service': 'email.service',
                'call': 'getEmailPlaceHolders',
                'options': { 'match': dataMatch },
            }});
        }});
        sB.workflowCollection = new sB.WorkflowCollection();

        sB.WorkflowModel = Backbone.Model.extend({
            validation: {
                name: {
                    required: true,
                    pattern: 'stringPattern',
                    msg: \"{{ 'Please enter a valid name.'|trans }}\"
                },
            },
\t\t\t{% if not(forcedActions is defined and forcedActions) %}
                validateSelect: function(value, attr, computedState) {
                    var currentSelectValue = \$('select[name=\"'+ attr + '\"]').prev().find('.selected').length;
                    if (!value) {
                        return \"{{ 'Please select a value.'|trans }}\";
                    }
                },
                validateSelectMultiple: function(value, attr, computedState) {
                    var currentSelectValue = \$('[name=\"'+ attr + '\"]').length;
                    if (!value) {
                        return \"{{ 'Please select a value.'|trans }}\";
                    }
                },
                validateSelectText: function(value, attr, computedState) {
                    if (!value) {
                        return \"{{ 'Please add a value.'|trans }}\";
                    }
                }
\t\t\t{% endif %}            
        });

        sB.WorkflowView = Backbone.View.extend({
            el: '.uv-view',
            initialize: function() {
                this.model = new sB.WorkflowModel();
                Backbone.Validation.bind(this);
                this.setAddedIds('#group-filter');
                this.setAddedIds('#team-filter');
            },
            events: {
                'submit form[name=\"form-workflow\"]': 'processWorkflow',
                'click .workflow-form .uv-dropdown-list li': 'addEntity',
                'click .workflow-form .uv-filtered-tags .uv-btn-small': 'removeEntity'                
            },
            processWorkflow: function(e) {
                this.model.set(this.\$el.find('form').serializeObject());

                var self = this;
                filterArray = ['name'];
                // Populate Filter Array - Events and Actions are required fields
                
                // Actions
                this.\$('.wfAction').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelect';
                });
                this.\$('.wfActionMultiple').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelectMultiple';
                });
                this.\$('.wfActionValue').each(function(key, value) {
                    if (\$(this).attr('name') == undefined) {
                        return;
                    }

                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelectText';
                });

                if (this.validateData(filterArray)) {
                    return true;
                } else {
                    e.preventDefault();
                }
            },
            validateData: function(filterArray) {
                return this.model.isValid(filterArray);
            },
            updateActive: function(e){
                this.\$('div.step-info').each(function() {
                    \$(this).addClass('active');
                    if (\$(this).attr('data-href') == self.\$(e.target).attr('href'))
                        return false;
                });
            },
            addEntity: function(e) {
                currentElement = Backbone.\$(e.currentTarget);
                if(id = currentElement.attr(\"data-id\")) {
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
            },
            setAddedIds: function(selector) {
                var ids = [];
                \$(selector).find('.uv-filtered-tags .uv-btn-small').each(function() {
                    ids.push(\$(this).attr('data-id'))
                });

                \$(selector).find(\"input[type='hidden']\").val(ids.join(','))

                return ids;
            },            
        });
        sB.workflowView = new sB.WorkflowView();

        \$.fn.serializeObject = function () {
            \"use strict\";
            var a = {}, b = function (b, c) {
                var d = a[c.name];
                \"undefined\" != typeof d && d !== null ? \$.isArray(d) ? d.push(c.value) : a[c.name] = [d, c.value] : a[c.name] = c.value
            };
            return \$.each(this.serializeArray(), b), a
        };
    </script>
    
    {{ include('@UVDeskAutomation//PreparedResponse//actions.html.twig') }}
{% endblock %}", "@UVDeskAutomation/PreparedResponse/createPreparedResponse.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/PreparedResponse/createPreparedResponse.html.twig");
    }
}
