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

/* @UVDeskAutomation/Workflow/createWorkflow.html.twig */
class __TwigTemplate_609ab26d397d4ae19f362d52cebfc14a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/createWorkflow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/createWorkflow.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework/Templates/layout.html.twig", "@UVDeskAutomation/Workflow/createWorkflow.html.twig", 1);
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

        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "get", ["id"], "method", false, false, false, 4)) {
            // line 5
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Workflow"), "html", null, true);
            yield "
    ";
        } else {
            // line 7
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Workflow"), "html", null, true);
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
        .grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 120%;
\t\t}
        .textarea-fix-action {
            max-width: 500px !important;
        }
    </style>
    <!-- Inner Section -->
    <div class=\"uv-inner-section\">
        ";
        // line 53
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 54
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Productivity";
        // line 55
        yield "
\t\t";
        // line 56
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 56, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 56, $this->source); })())], "method", false, false, false, 56), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 56, $this->source); })())], "method", false, false, false, 56);
        yield "
        
        <!-- View -->
        <div class=\"uv-view ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "cookies", [], "any", false, false, false, 59) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "cookies", [], "any", false, false, false, 59), "get", ["uv-asideView"], "method", false, false, false, 59))) {
            yield "uv-aside-view";
        }
        yield "\">
            <!-- Form -->
            ";
        // line 61
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "get", ["id"], "method", false, false, false, 61))) {
            // line 62
            yield "                <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Workflow"), "html", null, true);
            yield "</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflows_editaction", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "get", ["id"], "method", false, false, false, 63)]), "html", null, true);
            yield "\">
            ";
        } else {
            // line 65
            yield "                <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Workflow"), "html", null, true);
            yield "</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("workflows_addaction");
            yield "\">
            ";
        }
        // line 68
        yield "                <!-- Workflow Description Section -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field\" type=\"text\" value=\"";
        // line 72
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "name", [], "any", true, true, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true)) : (""));
        yield "\">
                        <p class=\"uv-field-message\">";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "name", [], "any", true, true, false, 73)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
        }
        yield "</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block grammarly-fix-message-container\">
                        <textarea name=\"description\" class=\"uv-field grammarly-fix-message\">";
        // line 80
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "description", [], "any", true, true, false, 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true)) : (""));
        yield "</textarea>
                        <p class=\"uv-field-message\">";
        // line 81
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "description", [], "any", true, true, false, 81)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
        }
        yield "</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Workflow Status"), "html", null, true);
        yield "</label>
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input name=\"status\" type=\"checkbox\" ";
        // line 90
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "status", [], "any", true, true, false, 90) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 90, $this->source); })()), "status", [], "any", false, false, false, 90) == "on"))) ? ("checked") : (""));
        yield ">
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Workflow is Active"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>
                <!-- // Workflow Description Section -->


                <!-- Workflow Events Section -->
                <div id=\"events\" class=\"uv-field-workflow\">
                    <label class=\"uv-field-label\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Events"), "html", null, true);
        yield "</label>
                    <span class=\"uv-field-info\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An event automatically triggers to check conditions and perform a respective pre-defined set of actions"), "html", null, true);
        yield "</span>

                    <div class=\"workflow-event-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-add\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add More"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>
                <!-- // Workflow Events Section -->

                <!-- Workflow Conditions Section -->
                <div id=\"conditions\" class=\"uv-field-workflow\" >
                    <label class=\"uv-field-label\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Conditions"), "html", null, true);
        yield "</label>
                    <span class=\"uv-field-info\">";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Conditions are set of rules which checks for specific scenarios and are triggered on specific occasions"), "html", null, true);
        yield "</span>

                    <div class=\"workflow-conditions-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-or\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OR"), "html", null, true);
        yield "
                        </a>
                        <a class=\"uv-btn-tag btn-and\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("AND"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
                <!-- // Workflow Conditions Section -->
                <div class=\"uv-hr\"></div>
                


                <!-- Workflow Actions Section -->
                <div id=\"actions\" class=\"uv-element-block uv-field-workflow\">
                    <label class=\"uv-field-label\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        yield "</label>
                    <span class=\"uv-field-info\">";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An action not only reduces the workload but also makes it quite easier for ticket automation"), "html", null, true);
        yield "</span>

                    <div class=\"workflow-action-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-add\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> ";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add More"), "html", null, true);
        yield "
                        </a>
                    </div>
                </div>
                <!-- // Workflow Actions Section -->

                <!-- CTA -->
                ";
        // line 154
        yield "                <button type=\"submit\" name=\"submit\" class=\"uv-btn\" href=\"#\">";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "get", ["id"], "method", false, false, false, 154))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Workflow"), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Workflow"), "html", null, true);
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

    // line 164
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

        // line 165
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    <script type=\"text/javascript\">
        _.extend(Backbone.Validation.patterns, {
          stringPattern: /[a-z0-9]/i,
        });

        _.extend(Backbone.Validation.callbacks, {
            valid : function (view, attr, selector) {
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html('').fadeOut(0);
            },
            invalid : function (view, attr, error, selector) {
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html(error).fadeIn(0);
            }
        });

        if(typeof(sB) == 'undefined'){
          var sB = {};
        }

        sB.WorkflowCollection = Backbone.Collection.extend({
            baseUrl: \"";
        // line 186
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
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid name."), "html", null, true);
        yield "\"
                },
            },
            validateSelect: function(value, attr, computedState) {
                var currentSelectValue = \$('select[name=\"'+ attr + '\"]').find(':selected').length;
                if (!value) {
                    return \"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select a value."), "html", null, true);
        yield "\";
                }
            },
            validateSelectMultiple: function(value, attr, computedState) {
                var currentSelectValue = \$('[name=\"'+ attr + '\"]').length;
                if (!value) {
                    return \"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select a value."), "html", null, true);
        yield "\";
                }
            },
            validateSelectText: function(value, attr, computedState) {
                if (!value) {
                    return \"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please add a value."), "html", null, true);
        yield "\";
                }
            }
        });

        sB.WorkflowView = Backbone.View.extend({
            el: '.uv-view',
            initialize: function() {
                this.model = new sB.WorkflowModel();
                Backbone.Validation.bind(this);
            },
            events: {
                'submit form[name=\"form-workflow\"]': 'processWorkflow',
            },
            processWorkflow: function(e) {
                var disabledCollection = this.\$el.find('form').find('[disabled]');
                if (\$(disabledCollection).length > 0) {
                    \$.each(\$(disabledCollection), function(index, nodeElement) {
                        \$(nodeElement).removeAttr('disabled');
                    });
                }

                this.model.set(this.\$el.find('form').serializeObject());

                var self = this;
                filterArray = ['name'];
                // Populate Filter Array - Events and Actions are required fields

                // Event
                this.\$('.wfEvents').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelect';
                });
                this.\$('.wfEventTriggers').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelect';
                });

                // Conditions
                if (\$(\"[name='events[0][event]']\").val() == 'ticket' || \$(\"[name='events[0][event]']\").val() == 'task') {
                    this.\$('.wfCondition').each(function(key, value) {
                        filterArray.push(\$(value).attr('name'));
                        self.model.validation[\$(value).attr('name')] = 'validateSelect';
                    });
                    this.\$('.wfConditionMatch').each(function(key, value) {
                        filterArray.push(\$(value).attr('name'));
                        self.model.validation[\$(value).attr('name')] = 'validateSelect';
                    });
                    this.\$('.wfConditionValue').each(function(key, value) {
                        if (\$(this).attr('name') == undefined) {
                            return;
                        }
                        filterArray.push(\$(value).attr('name'));
                        self.model.validation[\$(value).attr('name')] = 'validateSelectText';
                    });
                }

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
                    if (\$(disabledCollection).length > 0) {
                        \$.each(\$(disabledCollection), function(index, nodeElement) {
                            \$(nodeElement).attr('disabled', 'disabled');
                        });
                    }
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
            }
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
        // line 328
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskAutomation//Workflow//events.html.twig");
        yield "
    ";
        // line 329
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskAutomation//Workflow//conditions.html.twig");
        yield "
    ";
        // line 330
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskAutomation//Workflow//actions.html.twig");
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
        return "@UVDeskAutomation/Workflow/createWorkflow.html.twig";
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
        return array (  599 => 330,  595 => 329,  591 => 328,  479 => 219,  471 => 214,  462 => 208,  453 => 202,  434 => 186,  409 => 165,  396 => 164,  371 => 154,  361 => 146,  353 => 141,  349 => 140,  335 => 129,  329 => 126,  321 => 121,  317 => 120,  304 => 110,  296 => 105,  292 => 104,  278 => 93,  272 => 90,  265 => 86,  255 => 81,  251 => 80,  246 => 78,  236 => 73,  232 => 72,  227 => 70,  223 => 68,  218 => 66,  213 => 65,  208 => 63,  203 => 62,  201 => 61,  194 => 59,  188 => 56,  185 => 55,  182 => 54,  179 => 53,  161 => 36,  148 => 35,  116 => 12,  103 => 11,  88 => 7,  82 => 5,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework/Templates/layout.html.twig\" %}

{% block title %}
    {% if app.request.get('id') %}
        {{ 'Edit Workflow' | trans }}
    {% else %}
        {{ 'Add Workflow' | trans }}
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
        .grammarly-fix-message-container {
\t\t\toverflow: visible !important;
\t\t}
\t\t.grammarly-fix-message {
\t\t\tmax-width: 120%;
\t\t}
        .textarea-fix-action {
            max-width: 500px !important;
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
                <h1>{{ 'Edit Workflow'|trans }}</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"{{ path('workflows_editaction', {'id': app.request.get('id')}) }}\">
            {% else %}
                <h1>{{ 'New Workflow'|trans }}</h1>
                <form class=\"workflow-form\" name=\"form-workflow\" method=\"POST\" action=\"{{ path('workflows_addaction') }}\">
            {% endif %}
                <!-- Workflow Description Section -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input name=\"name\" class=\"uv-field\" type=\"text\" value=\"{{ formData.name is defined ? formData.name : '' }}\">
                        <p class=\"uv-field-message\">{% if error.name is defined %}{{ error.name }}{% endif %}</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Description'|trans }}</label>
                    <div class=\"uv-field-block grammarly-fix-message-container\">
                        <textarea name=\"description\" class=\"uv-field grammarly-fix-message\">{{ formData.description is defined ? formData.description : '' }}</textarea>
                        <p class=\"uv-field-message\">{% if error.description is defined %}{{ error.description }}{% endif %}</p>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Workflow Status'|trans }}</label>
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input name=\"status\" type=\"checkbox\" {{ formData.status is defined and formData.status == 'on' ? 'checked' : '' }}>
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">{{ 'Workflow is Active'|trans }}</span>
                        </label>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>
                <!-- // Workflow Description Section -->


                <!-- Workflow Events Section -->
                <div id=\"events\" class=\"uv-field-workflow\">
                    <label class=\"uv-field-label\">{{ 'Events'|trans }}</label>
                    <span class=\"uv-field-info\">{{ \"An event automatically triggers to check conditions and perform a respective pre-defined set of actions\"|trans }}</span>

                    <div class=\"workflow-event-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-add\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> {{'Add More'|trans}}
                        </a>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>
                <!-- // Workflow Events Section -->

                <!-- Workflow Conditions Section -->
                <div id=\"conditions\" class=\"uv-field-workflow\" >
                    <label class=\"uv-field-label\">{{ 'Conditions'|trans }}</label>
                    <span class=\"uv-field-info\">{{ 'Conditions are set of rules which checks for specific scenarios and are triggered on specific occasions'|trans }}</span>

                    <div class=\"workflow-conditions-body\"></div>
                    <div class=\"uv-workflow-buttons\">
                        <a class=\"uv-btn-tag btn-or\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> {{ 'OR'|trans }}
                        </a>
                        <a class=\"uv-btn-tag btn-and\" href=\"#\">
                            <span class=\"uv-icon-add-dark\"></span> {{ 'AND'|trans }}
                        </a>
                    </div>
                </div>
                <!-- // Workflow Conditions Section -->
                <div class=\"uv-hr\"></div>
                


                <!-- Workflow Actions Section -->
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
                <!-- // Workflow Actions Section -->

                <!-- CTA -->
                {# <input type=\"submit\" class=\"uv-btn\" href=\"#\" value=\"Save Workflow\"> #}
                <button type=\"submit\" name=\"submit\" class=\"uv-btn\" href=\"#\">{% if app.request.get('id') is not empty %}{{ 'Save Workflow'|trans }}{% else %}{{ 'Add Workflow'|trans }}{% endif %}</button>
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
                \$('[name=\"'+attr+'\"]').closest('.uv-field-block').find('.uv-field-message').html('').fadeOut(0);
            },
            invalid : function (view, attr, error, selector) {
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
            validateSelect: function(value, attr, computedState) {
                var currentSelectValue = \$('select[name=\"'+ attr + '\"]').find(':selected').length;
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
        });

        sB.WorkflowView = Backbone.View.extend({
            el: '.uv-view',
            initialize: function() {
                this.model = new sB.WorkflowModel();
                Backbone.Validation.bind(this);
            },
            events: {
                'submit form[name=\"form-workflow\"]': 'processWorkflow',
            },
            processWorkflow: function(e) {
                var disabledCollection = this.\$el.find('form').find('[disabled]');
                if (\$(disabledCollection).length > 0) {
                    \$.each(\$(disabledCollection), function(index, nodeElement) {
                        \$(nodeElement).removeAttr('disabled');
                    });
                }

                this.model.set(this.\$el.find('form').serializeObject());

                var self = this;
                filterArray = ['name'];
                // Populate Filter Array - Events and Actions are required fields

                // Event
                this.\$('.wfEvents').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelect';
                });
                this.\$('.wfEventTriggers').each(function(key, value) {
                    filterArray.push(\$(value).attr('name'));
                    self.model.validation[\$(value).attr('name')] = 'validateSelect';
                });

                // Conditions
                if (\$(\"[name='events[0][event]']\").val() == 'ticket' || \$(\"[name='events[0][event]']\").val() == 'task') {
                    this.\$('.wfCondition').each(function(key, value) {
                        filterArray.push(\$(value).attr('name'));
                        self.model.validation[\$(value).attr('name')] = 'validateSelect';
                    });
                    this.\$('.wfConditionMatch').each(function(key, value) {
                        filterArray.push(\$(value).attr('name'));
                        self.model.validation[\$(value).attr('name')] = 'validateSelect';
                    });
                    this.\$('.wfConditionValue').each(function(key, value) {
                        if (\$(this).attr('name') == undefined) {
                            return;
                        }
                        filterArray.push(\$(value).attr('name'));
                        self.model.validation[\$(value).attr('name')] = 'validateSelectText';
                    });
                }

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
                    if (\$(disabledCollection).length > 0) {
                        \$.each(\$(disabledCollection), function(index, nodeElement) {
                            \$(nodeElement).attr('disabled', 'disabled');
                        });
                    }
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
            }
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

    {{ include('@UVDeskAutomation//Workflow//events.html.twig') }}
    {{ include('@UVDeskAutomation//Workflow//conditions.html.twig') }}
    {{ include('@UVDeskAutomation//Workflow//actions.html.twig') }}

{% endblock %}
", "@UVDeskAutomation/Workflow/createWorkflow.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/Workflow/createWorkflow.html.twig");
    }
}
