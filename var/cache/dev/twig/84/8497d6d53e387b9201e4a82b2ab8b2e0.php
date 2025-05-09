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

/* @UVDeskCoreFramework/Agents/updateSupportAgent.html.twig */
class __TwigTemplate_bca77a94c487996f004f7569a5a31faf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Agents/updateSupportAgent.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Agents/updateSupportAgent.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Agents/updateSupportAgent.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Agent"), "html", null, true);
        
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
        
        <style>
            .uv-element-block .uv-element-block {
                margin: 6px 0;
            }

            .uv-tab-error {
                border-bottom: 3px solid #FF5656 !important;
            }

            .uv-paper .uv-view .uv-element-block .uv-error-message {
                color: #FF5656;
            }

            .uv-new-tab-link {
                width: 8px;
                height: 20px;
                display: inline-block;
                background-image: url(../../../bundles/uvdeskcoreframework/images/uvdesk-sprite.svg);
                background-position: 44px -158px;
                margin: 5px 0 0 10px;
                float: right;
                vertical-align: top;
            }

            .uv-extra-info {
                font-weight: bold;
                margin-left: 6px;
                font-style: normal;
                cursor: help;
            }
        </style>
\t\t<div class=\"uv-view ";
        // line 44
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "cookies", [], "any", false, false, false, 44) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "cookies", [], "any", false, false, false, 44), "get", ["uv-asideView"], "method", false, false, false, 44))) {
            yield "uv-aside-view";
        }
        yield "\">
            <h1>
                ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)) {
            // line 47
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Agent"), "html", null, true);
            yield "
                ";
        } else {
            // line 49
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Agent"), "html", null, true);
            yield "
                ";
        }
        // line 51
        yield "            </h1>
            ";
        // line 52
        $context["userDetails"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 52, $this->source); })()), "getAgentDetailById", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)], "method", false, false, false, 52);
        // line 53
        yield "            <!-- Form -->
\t\t\t<form method=\"post\" action=\"\" id=\"user-form\" enctype=\"multipart/form-data\">

                <!--Tabs-->
                <div class=\"uv-tabs\">
                    <ul>
                        <li for=\"profile\" class=\"uv-tab-active\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("General"), "html", null, true);
        yield "</li>
                        <li for=\"groups\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
        yield "</li>
                    
                        ";
        // line 62
        if (("ROLE_SUPER_ADMIN" != (isset($context["instanceRole"]) || array_key_exists("instanceRole", $context) ? $context["instanceRole"] : (function () { throw new RuntimeError('Variable "instanceRole" does not exist.', 62, $this->source); })()))) {
            // line 63
            yield "                            <li for=\"permission\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permission"), "html", null, true);
            yield "</li>
                        ";
        }
        // line 65
        yield "                    </ul>
                </div>
                <!--Tabs-->

                <!--Tab View-->
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"profile\">
                    <!-- Profile image -->
                    <div class=\"uv-image-upload-wrapper\">
                        ";
        // line 73
        $context["isHaveImage"] = ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 73, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 73, $this->source); })()), "profileImagePath", [], "any", false, false, false, 73))) ? (1) : (0));
        // line 74
        yield "\t\t\t\t\t    <div class=\"uv-image-upload-brick ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 74, $this->source); })())) {
            yield "uv-on-drop-shadow";
        }
        yield "\" ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 74, $this->source); })())) {
            yield "style=\"border-color: transparent;\"";
        }
        yield ">
                            <input type=\"file\" name=\"user_form[profileImage]\" id=\"uv-upload-profile\">
                            <div class=\"uv-image-upload-placeholder\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                                <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                                </svg>
                            </div>
                            <img id=\"dynamic-image-upload\" ";
        // line 81
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 81, $this->source); })())) {
            yield "src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "scheme", [], "any", false, false, false, 81) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "request", [], "any", false, false, false, 81), "httpHost", [], "any", false, false, false, 81)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 81, $this->source); })()), "profileImagePath", [], "any", false, false, false, 81), "html", null, true);
            yield "\"";
        }
        yield ">
                        </div>
                        <div class=\"uv-image-info-brick\">
                            <span class=\"uv-field-info\">";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format");
        yield "</span>
                        </div>
                    </div>
                    <!-- //Profile image -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First Name"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <input name=\"user_form[firstName]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 93
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "firstName", [], "any", false, false, false, 93)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 93, $this->source); })()), "firstName", [], "any", false, false, false, 93), "html", null, true)) : ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 93, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 93, $this->source); })()), "firstName", [], "any", false, false, false, 93), "html", null, true)) : (""))));
        yield "\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Name"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <input name=\"user_form[lastName]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 102
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "lastName", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "lastName", [], "any", false, false, false, 102), "html", null, true)) : ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 102, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 102, $this->source); })()), "lastName", [], "any", false, false, false, 102), "html", null, true)) : (""))));
        yield "\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <input name=\"user_form[email]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "email", [], "any", false, false, false, 111), "html", null, true);
        yield "\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Designation"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                             <input name=\"user_form[designation]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 120
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 120, $this->source); })()), "designation", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 120, $this->source); })()), "designation", [], "any", false, false, false, 120), "html", null, true)) : ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 120, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 120, $this->source); })()), "designation", [], "any", false, false, false, 120), "html", null, true)) : (""))));
        yield "\">
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                             <input name=\"user_form[contactNumber]\" class=\"uv-field\" type=\"text\" value=\"";
        // line 127
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 127, $this->source); })()), "contactNumber", [], "any", false, false, false, 127)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 127, $this->source); })()), "contactNumber", [], "any", false, false, false, 127), "html", null, true)) : ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 127, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 127, $this->source); })()), "contactNumber", [], "any", false, false, false, 127), "html", null, true)) : (""))));
        yield "\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signature"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"user_form[signature]\" class=\"uv-field\">";
        // line 136
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 136, $this->source); })()), "signature", [], "any", false, false, false, 136)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 136, $this->source); })()), "signature", [], "any", false, false, false, 136), "html", null, true)) : ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 136, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 136, $this->source); })()), "signature", [], "any", false, false, false, 136), "html", null, true)) : (""))));
        yield "</textarea>
                        </div>
                        <span class=\"uv-field-info\">";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User signature will be append in the bottom of ticket reply box"), "html", null, true);
        yield "</span>
                    </div>
                    <!-- //Field -->

                    ";
        // line 142
        if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 142, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 142, $this->source); })()), "isVerified", [], "any", false, false, false, 142))) {
            // line 143
            yield "                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
            yield "</label>
                            <div class=\"uv-field-block\">
                                <input type=\"password\" name=\"user_form[password][first]\" class=\"uv-field\" value=\"\" />
                            </div>
                        </div>
                        <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
            yield "</label>
                            <div class=\"uv-field-block\">
                                <input type=\"password\" name=\"user_form[password][second]\" class=\"uv-field\" value=\"\" />
                            </div>
                        </div>
                        <!-- //Field -->
                    ";
        }
        // line 161
        yield "
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input type=\"checkbox\" name=\"user_form[isActive]\" value=\"";
        // line 166
        yield ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 166, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 166, $this->source); })()), "isActive", [], "any", false, false, false, 166))) ? (1) : (0));
        yield "\" ";
        yield ((((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 166, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 166, $this->source); })()), "isActive", [], "any", false, false, false, 166))) ? ("checked") : (""));
        yield ">
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account is Active"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                    <!-- //Field -->
                    
                </div>
                <!--//Tab View-->

                <!--Tab View-->
                <div class=\"uv-tab-view\" id=\"groups\">
                    ";
        // line 179
        $context["userGroups"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 179, $this->source); })()), "getUserGroupIds", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "id", [], "any", false, false, false, 179)], "method", false, false, false, 179);
        // line 180
        yield "                    <div class=\"uv-scroll-plank\">
                        <!-- Checkbox Block -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups"), "html", null, true);
        yield "</label>
                            <span class=\"uv-field-info uv-margin-top-5\">";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigning group(s) to user to view tickets regardless assignment."), "html", null, true);
        yield "</span>
                        </div>

                        <div>
                            <!--Block-->
                            <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                ";
        // line 190
        $context["groups"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 190, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 190);
        // line 191
        yield "                                ";
        if ((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 191, $this->source); })())) {
            // line 192
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 192, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 193
                yield "                                        <!-- / -->
                                        <div class=\"uv-element-block\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input name=\"user_form[groups][]\" type=\"checkbox\" value=\"";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 197), "html", null, true);
                yield "\" ";
                if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 197, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 197), (isset($context["userGroups"]) || array_key_exists("userGroups", $context) ? $context["userGroups"] : (function () { throw new RuntimeError('Variable "userGroups" does not exist.', 197, $this->source); })())))) {
                    yield "checked";
                }
                yield ">
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-checkbox-label\">";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 200), "html", null, true);
                yield "</span>
                                            </label>
                                        </div>
                                        <!-- /// -->
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            yield "                                ";
        } else {
            // line 206
            yield "                                    <div class=\"uv-element-block\">
                                        <a class=\"uv-error-message\" href=\"";
            // line 207
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_support_group_collection");
            yield "\" target=\"_blank\">";
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Group added, Please add Group(s) first !", [], "messages");
            yield "</a>
                                    </div>
                                ";
        }
        // line 210
        yield "                            </div>
                            <!--//Block-->

                        </div>
                        <div class=\"uv-element-block\">
                            <a href=\"#\" class=\"select\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select All"), "html", null, true);
        yield "</a>
                            <a href=\"#\" class=\"deselect\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove All"), "html", null, true);
        yield "</a>
                        </div>
                    </div>

                    ";
        // line 220
        $context["userSubGroups"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 220, $this->source); })()), "getUserSubGroupIds", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 220, $this->source); })()), "id", [], "any", false, false, false, 220)], "method", false, false, false, 220);
        // line 221
        yield "                    <div class=\"uv-scroll-plank\">
                        <!-- Checkbox Block -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Teams"), "html", null, true);
        yield "</label>
                            <span class=\"uv-field-info uv-margin-top-5\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assigning team(s) to user to view tickets regardless assignment."), "html", null, true);
        yield "</span>
                        </div>

                        <div>
                            <!--Block-->
                            <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                ";
        // line 231
        $context["teams"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 231, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 231);
        // line 232
        yield "                                ";
        if ((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 232, $this->source); })())) {
            // line 233
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["teams"]) || array_key_exists("teams", $context) ? $context["teams"] : (function () { throw new RuntimeError('Variable "teams" does not exist.', 233, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 234
                yield "                                        <!-- / -->
                                        <div class=\"uv-element-block\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input name=\"user_form[userSubGroup][]\" type=\"checkbox\" value=\"";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 238), "html", null, true);
                yield "\" ";
                if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 238, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 238), (isset($context["userSubGroups"]) || array_key_exists("userSubGroups", $context) ? $context["userSubGroups"] : (function () { throw new RuntimeError('Variable "userSubGroups" does not exist.', 238, $this->source); })())))) {
                    yield "checked";
                }
                yield ">
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-checkbox-label\">";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 241), "html", null, true);
                yield "</span>
                                            </label>
                                        </div>
                                        <!-- /// -->
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            yield "                                ";
        } else {
            // line 247
            yield "                                    <div class=\"uv-element-block\">
                                        <a href=\"";
            // line 248
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_support_team_collection");
            yield "\" target=\"_blank\">";
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Team added !", [], "messages");
            yield "</a>
                                    </div>
                                ";
        }
        // line 251
        yield "
                            </div>
                            <!--//Block-->

                        </div>
                        <div class=\"uv-element-block\">
                            <a href=\"#\" class=\"select\">";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select All"), "html", null, true);
        yield "</a>
                            <a href=\"#\" class=\"deselect\">";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove All"), "html", null, true);
        yield "</a>
                        </div>
                    </div>
                </div>
                <!--//Tab View-->

                <!--Tab View-->
                <div class=\"uv-tab-view\" id=\"permission\">
                    ";
        // line 266
        if (("ROLE_SUPER_ADMIN" != (isset($context["instanceRole"]) || array_key_exists("instanceRole", $context) ? $context["instanceRole"] : (function () { throw new RuntimeError('Variable "instanceRole" does not exist.', 266, $this->source); })()))) {
            // line 267
            yield "                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Role"), "html", null, true);
            yield "</label>
                            <div class=\"uv-field-block\">
                                <select name=\"user_form[role]\" class=\"uv-select\" id=\"user_form_role\" ";
            // line 271
            if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 271, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271)))) {
                yield "disabled=\"disabled\"";
            }
            yield ">
                                    <option value=\"ROLE_ADMIN\" ";
            // line 272
            if (CoreExtension::inFilter("ROLE_ADMIN", (isset($context["instanceRole"]) || array_key_exists("instanceRole", $context) ? $context["instanceRole"] : (function () { throw new RuntimeError('Variable "instanceRole" does not exist.', 272, $this->source); })()))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Administrator"), "html", null, true);
            yield "</option>
                                    <option value=\"ROLE_AGENT\" ";
            // line 273
            if (CoreExtension::inFilter("ROLE_AGENT", (isset($context["instanceRole"]) || array_key_exists("instanceRole", $context) ? $context["instanceRole"] : (function () { throw new RuntimeError('Variable "instanceRole" does not exist.', 273, $this->source); })()))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</option>
                                </select>
                            </div>
                            <span class=\"uv-field-info\">";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select agent role"), "html", null, true);
            yield "</span>
                        </div>
                        <!-- //Field -->
                        ";
            // line 279
            $context["userPrivilege"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 279, $this->source); })()), "getUserPrivilegeIds", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 279, $this->source); })()), "id", [], "any", false, false, false, 279)], "method", false, false, false, 279);
            // line 280
            yield "                        
                        <!-- Role dependent fields -->
                        <div class=\"role-dependent-fields\">
                            <div class=\"uv-scroll-plank\">
                                <!-- Checkbox Block -->
                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Privileges"), "html", null, true);
            yield "</label>
                                    <span class=\"uv-field-info uv-margin-top-5\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Privilege represents overall permissions in System."), "html", null, true);
            yield "</span>
                                </div>

                                ";
            // line 290
            $context["privileges"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 290, $this->source); })()), "getSupportPrivileges", [], "method", false, false, false, 290);
            // line 291
            yield "                                ";
            if ((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 291, $this->source); })())) {
                // line 292
                yield "                                    <div>
                                        <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                            ";
                // line 294
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["privileges"]) || array_key_exists("privileges", $context) ? $context["privileges"] : (function () { throw new RuntimeError('Variable "privileges" does not exist.', 294, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["privilege"]) {
                    // line 295
                    yield "                                                <!-- / -->
                                                <div class=\"uv-element-block\">
                                                    <label>
                                                        <div class=\"uv-checkbox\">
                                                            <input name=\"user_form[agentPrivilege][]\" type=\"checkbox\" value=\"";
                    // line 299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "id", [], "any", false, false, false, 299), "html", null, true);
                    yield "\" ";
                    if ((((isset($context["userPrivilege"]) || array_key_exists("userPrivilege", $context) ? $context["userPrivilege"] : (function () { throw new RuntimeError('Variable "userPrivilege" does not exist.', 299, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "id", [], "any", false, false, false, 299), (isset($context["userPrivilege"]) || array_key_exists("userPrivilege", $context) ? $context["userPrivilege"] : (function () { throw new RuntimeError('Variable "userPrivilege" does not exist.', 299, $this->source); })()))) || (CoreExtension::getAttribute($this->env, $this->source, ($context["userPrivilege"] ?? null), "id", [], "any", true, true, false, 299) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userPrivilege"]) || array_key_exists("userPrivilege", $context) ? $context["userPrivilege"] : (function () { throw new RuntimeError('Variable "userPrivilege" does not exist.', 299, $this->source); })()), "id", [], "any", false, false, false, 299) == CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "id", [], "any", false, false, false, 299))))) {
                        yield "checked";
                    }
                    yield ">
                                                            <span class=\"uv-checkbox-view\"></span>
                                                        </div>
                                                        <span class=\"uv-checkbox-label\">";
                    // line 302
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "name", [], "any", false, false, false, 302), "html", null, true);
                    yield "</span>
                                                    </label>
                                                    <a class=\"uv-new-tab-link\" href=\"";
                    // line 304
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_privilege", ["supportPrivilegeId" => CoreExtension::getAttribute($this->env, $this->source, $context["privilege"], "id", [], "any", false, false, false, 304)]), "html", null, true);
                    yield "\" target=\"_blank\"></a>
                                                </div>
                                                <!-- /// -->
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['privilege'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 308
                yield "                                        </div>
                                    </div>

                                    <div class=\"uv-element-block\">
                                        <a href=\"#\" class=\"select\">";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select All"), "html", null, true);
                yield "</a>
                                        <a href=\"#\" class=\"deselect\">";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove All"), "html", null, true);
                yield "</a>
                                    </div>
                                ";
            } else {
                // line 316
                yield "                                    <div>
                                        <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                            <div class=\"uv-element-block\">
                                                <input name=\"user_form[agentPrivilege][]\" type=\"hidden\" value=\"\">
                                                <a class=\"uv-error-message\" href=\"\" target=\"_blank\">";
                // line 320
                yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Privilege added, Please add Privilege(s) first !", [], "messages");
                yield "</a>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 325
            yield "\t\t\t\t\t\t\t</div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket View"), "html", null, true);
            yield "</label>
                                <span class=\"uv-field-info\">";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User can view tickets based on selected scope."), "html", null, true);
            yield "
                                    <span class=\"uv-extra-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If individual access then user can View assigned Ticket(s) only, If Team access then user can view all Ticket(s) in team(s) he belongs to and so on"), "html", null, true);
            yield "\">[?]</span>
                                </span>
                                <div class=\"uv-element-block\" style=\"margin-top: 10px;\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"1\" type=\"radio\" ";
            // line 335
            if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 335, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 335, $this->source); })()), "ticketAccessLevel", [], "any", false, false, false, 335) == 1))) {
                yield "checked";
            }
            yield ">
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Global Access"), "html", null, true);
            yield "</span>
                                    </label>
                                </div>
                                <div class=\"uv-element-block\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"2\" type=\"radio\" ";
            // line 344
            if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 344, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 344, $this->source); })()), "ticketAccessLevel", [], "any", false, false, false, 344) == 2))) {
                yield "checked";
            }
            yield ">
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group Access"), "html", null, true);
            yield "</span>
                                    </label>
                                </div>
                                <div class=\"uv-element-block\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"3\" type=\"radio\" ";
            // line 353
            if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 353, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 353, $this->source); })()), "ticketAccessLevel", [], "any", false, false, false, 353) == 3))) {
                yield "checked";
            }
            yield ">
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">";
            // line 356
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team Access"), "html", null, true);
            yield "</span>
                                    </label>
                                </div>
                                <div class=\"uv-element-block\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"4\" type=\"radio\" ";
            // line 362
            if (((isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 362, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["userDetails"]) || array_key_exists("userDetails", $context) ? $context["userDetails"] : (function () { throw new RuntimeError('Variable "userDetails" does not exist.', 362, $this->source); })()), "ticketAccessLevel", [], "any", false, false, false, 362) == 4))) {
                yield "checked";
            }
            yield ">
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Individual Access"), "html", null, true);
            yield "</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- //Role dependent fields -->
                    ";
        } else {
            // line 372
            yield "                        <input type=\"hidden\" name=\"user_form[role]\" value=\"ROLE_SUPER_ADMIN\">
                    ";
        }
        // line 374
        yield "                </div>
                <!--//Tab View-->

                <!-- CSRF token Field -->
                ";
        // line 379
        yield "                <!-- //CSRF token Field -->

                <!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"submit\">
\t\t\t\t<!--//CTA-->
            </form>
            <!-- //Form -->
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 389
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

        // line 390
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar UserModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'user_form[firstName]': [{
                        required: true,
                        msg: '";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: /^[\\p{L}]+\$/u,
                        msg: '";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have no space and characters only"), "html", null, true);
        yield "'
                    }, {
                        maxLength:40,
                        msg: '";
        // line 403
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 40"), "html", null, true);
        yield "'
                    }],
                    'user_form[lastName]': function(value) {
                        if (value != undefined && value !== '') {
                            [{
                                pattern: /^[\\p{L}]+\$/u,
                                msg: '";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have no space and characters only"), "html", null, true);
        yield "'
                            },{
                                maxLength:40,
                                msg: '";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 40"), "html", null, true);
        yield "'
                            }]
                        }
                    },
                    'user_form[email]': [{
                        required: true,
                        msg: '";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern:  /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is not a valid email address"), "html", null, true);
        yield "'
                    }],
                    'user_form[contactNumber]': function(value) {
                        if(value != undefined && value !== '') {
                            if(!value.match('^[0-9]*\$'))
                                return '";
        // line 426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must be a number"), "html", null, true);
        yield "';
                        }
                    },
                    'user_form[password][first]' : function(value) {
                        if(value != undefined && value !== '') {
                            if(value.length < 8)
                               return '";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contains 8 Characters"), "html", null, true);
        yield "';
                        }
                    },
                    'user_form[password][second]': {
                        equalTo: 'user_form[password][first]',
                        msg: '";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        yield "'
                    },
                    'user_form[groups][]': {
                        required: true,
                        msg: '";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
                    'user_form[agentPrivilege][]' : {
                        fn: function(value) {
                            if(\$(\"#user_form_role\").val() == 'ROLE_AGENT') {
                                if(!value)
                                    return true;
                            }

                            return false;
                        },
                        msg: '";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
                    'user_form[ticketView]': {
                        fn: function(value) {
                            if (\$(\"#user_form_role\").val() == 'ROLE_AGENT') {
                                if (!value)
                                    return true;
                            }

                            return false;
                        },
                        msg: '";
        // line 463
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar UserForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveUser\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'change input[name=\"user_form[isActive]\"]': 'formChanged',
                    'change #user_form_role': 'roleChanged',
                    'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 479
        yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 479, $this->source); })());
        yield "');
\t\t    \t\tfor (var field in jsonContext) {
                        if (field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"user_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"user_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}
                    ";
        // line 487
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 487, $this->source); })()), "id", [], "any", false, false, false, 487)) {
            // line 488
            yield "                        /* guess timezone and select that one */
                        var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone == 'Asia/Calcutta' ? 'Asia/Kolkata' : Intl.DateTimeFormat().resolvedOptions().timeZone;
                        if (timezone) {
                            var option = \$('select[name=\"user_form[timezone]\"]').find('option[value=\"'+ timezone +'\"]');
                            if (option.length) {
                                option.prop('selected', true);
                            }
                        }
                    ";
        }
        // line 497
        yield "\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tvar fieldName = Backbone.\$(e.currentTarget).attr('name');
                    \$(\".uv-tabs li.uv-tab-active\").removeClass('uv-tab-error')
                    if (fieldName == 'user_form[password][second]') {
                        if (\$(\"input[name='user_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if (\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        if (fieldName === 'user_form[isActive]') {
                            const val = Backbone.\$(e.currentTarget).prop('checked') ? \"1\" : \"0\";
                            Backbone.\$(e.currentTarget).val(val);
                        }
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        if(fieldName == 'user_form[password][first]' && !\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'user_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveUser : function (e) {
\t\t\t\t\te.preventDefault();
                    \$(\".uv-tabs li\").removeClass('uv-tab-error')
                    this.model.unset('user_form[groups][]', { silent: true });
                    this.model.unset('user_form[agentPrivilege][]', { silent: true });
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if (this.model.isValid(true)) {
                        if (\$(\"#user_form_role\").val() == 'ROLE_ADMIN') {
                            \$('input[name=\"user_form[agentPrivilege][]\"]').remove();
                            this.model.unset('user_form[agentPrivilege][]', { silent: true });
                        }
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        } else {
                        \$('.uv-field-message').each(function(e) {
                            \$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").addClass('uv-tab-error')

                            if(\$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").length ) {
                                \$('.uv-view').animate({
                                    scrollTop: 0
                                }, 'slow');
                            }
                        });
                    }
\t\t\t\t},
                roleChanged: function(e) {
                    if(\$(e.target).val() == 'ROLE_AGENT') {
\t\t            \t\$('.role-dependent-fields').show();
\t\t            } else {
\t\t            \t\$('.role-dependent-fields').hide();
\t\t            }
                },
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tuserForm = new UserForm({
\t\t\t\tel : \$(\"#user-form\"),
\t\t\t\tmodel : new UserModel()
\t\t\t});

            \$('#user_form_role').trigger('change');
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
        return "@UVDeskCoreFramework/Agents/updateSupportAgent.html.twig";
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
        return array (  1006 => 497,  995 => 488,  993 => 487,  982 => 479,  963 => 463,  949 => 452,  935 => 441,  928 => 437,  920 => 432,  911 => 426,  903 => 421,  897 => 418,  888 => 412,  882 => 409,  873 => 403,  867 => 400,  861 => 397,  850 => 390,  837 => 389,  819 => 382,  814 => 379,  808 => 374,  804 => 372,  794 => 365,  786 => 362,  777 => 356,  769 => 353,  760 => 347,  752 => 344,  743 => 338,  735 => 335,  727 => 330,  723 => 329,  719 => 328,  714 => 325,  706 => 320,  700 => 316,  694 => 313,  690 => 312,  684 => 308,  674 => 304,  669 => 302,  659 => 299,  653 => 295,  649 => 294,  645 => 292,  642 => 291,  640 => 290,  634 => 287,  630 => 286,  622 => 280,  620 => 279,  614 => 276,  604 => 273,  596 => 272,  590 => 271,  585 => 269,  581 => 267,  579 => 266,  568 => 258,  564 => 257,  556 => 251,  548 => 248,  545 => 247,  542 => 246,  531 => 241,  521 => 238,  515 => 234,  510 => 233,  507 => 232,  505 => 231,  496 => 225,  492 => 224,  487 => 221,  485 => 220,  478 => 216,  474 => 215,  467 => 210,  459 => 207,  456 => 206,  453 => 205,  442 => 200,  432 => 197,  426 => 193,  421 => 192,  418 => 191,  416 => 190,  407 => 184,  403 => 183,  398 => 180,  396 => 179,  383 => 169,  375 => 166,  368 => 161,  358 => 154,  346 => 145,  342 => 143,  340 => 142,  333 => 138,  328 => 136,  323 => 134,  313 => 127,  308 => 125,  300 => 120,  295 => 118,  285 => 111,  280 => 109,  270 => 102,  265 => 100,  255 => 93,  250 => 91,  240 => 84,  229 => 81,  212 => 74,  210 => 73,  200 => 65,  194 => 63,  192 => 62,  187 => 60,  183 => 59,  175 => 53,  173 => 52,  170 => 51,  164 => 49,  158 => 47,  156 => 46,  149 => 44,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Edit Agent'|trans }}{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
        
        <style>
            .uv-element-block .uv-element-block {
                margin: 6px 0;
            }

            .uv-tab-error {
                border-bottom: 3px solid #FF5656 !important;
            }

            .uv-paper .uv-view .uv-element-block .uv-error-message {
                color: #FF5656;
            }

            .uv-new-tab-link {
                width: 8px;
                height: 20px;
                display: inline-block;
                background-image: url(../../../bundles/uvdeskcoreframework/images/uvdesk-sprite.svg);
                background-position: 44px -158px;
                margin: 5px 0 0 10px;
                float: right;
                vertical-align: top;
            }

            .uv-extra-info {
                font-weight: bold;
                margin-left: 6px;
                font-style: normal;
                cursor: help;
            }
        </style>
\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
            <h1>
                {% if user.id %}
                    {{ 'Edit Agent'|trans }}
                {% else %}
                    {{ 'Add Agent'|trans }}
                {% endif %}
            </h1>
            {% set userDetails = user_service.getAgentDetailById(user.id) %}
            <!-- Form -->
\t\t\t<form method=\"post\" action=\"\" id=\"user-form\" enctype=\"multipart/form-data\">

                <!--Tabs-->
                <div class=\"uv-tabs\">
                    <ul>
                        <li for=\"profile\" class=\"uv-tab-active\">{{ 'General'|trans }}</li>
                        <li for=\"groups\">{{ 'Groups'|trans }}</li>
                    
                        {% if \"ROLE_SUPER_ADMIN\" != instanceRole %}
                            <li for=\"permission\">{{ 'Permission'|trans }}</li>
                        {% endif %}
                    </ul>
                </div>
                <!--Tabs-->

                <!--Tab View-->
                <div class=\"uv-tab-view uv-tab-view-active\" id=\"profile\">
                    <!-- Profile image -->
                    <div class=\"uv-image-upload-wrapper\">
                        {% set isHaveImage =  userDetails and userDetails.profileImagePath ? 1 : 0 %}
\t\t\t\t\t    <div class=\"uv-image-upload-brick {% if isHaveImage %}uv-on-drop-shadow{% endif %}\" {% if isHaveImage %}style=\"border-color: transparent;\"{% endif %}>
                            <input type=\"file\" name=\"user_form[profileImage]\" id=\"uv-upload-profile\">
                            <div class=\"uv-image-upload-placeholder\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                                <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                                </svg>
                            </div>
                            <img id=\"dynamic-image-upload\" {% if isHaveImage %}src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ userDetails.profileImagePath }}\"{% endif %}>
                        </div>
                        <div class=\"uv-image-info-brick\">
                            <span class=\"uv-field-info\">{{ 'Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format'|trans|raw }}</span>
                        </div>
                    </div>
                    <!-- //Profile image -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'First Name'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input name=\"user_form[firstName]\" class=\"uv-field\" type=\"text\" value=\"{{ user.firstName ?: (userDetails ? userDetails.firstName : '') }}\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Last Name'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input name=\"user_form[lastName]\" class=\"uv-field\" type=\"text\" value=\"{{ user.lastName ?: (userDetails ? userDetails.lastName : '') }}\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input name=\"user_form[email]\" class=\"uv-field\" type=\"text\" value=\"{{ user.email }}\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Designation'|trans }}</label>
                        <div class=\"uv-field-block\">
                             <input name=\"user_form[designation]\" class=\"uv-field\" type=\"text\" value=\"{{ userDetails.designation ?: (userDetails ? userDetails.designation : '') }}\">
                        </div>
                    </div>
                    
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
                        <div class=\"uv-field-block\">
                             <input name=\"user_form[contactNumber]\" class=\"uv-field\" type=\"text\" value=\"{{ userDetails.contactNumber ?: (userDetails ? userDetails.contactNumber : '') }}\">
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Signature'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <textarea name=\"user_form[signature]\" class=\"uv-field\">{{ userDetails.signature ?: (userDetails ? userDetails.signature : '') }}</textarea>
                        </div>
                        <span class=\"uv-field-info\">{{ 'User signature will be append in the bottom of ticket reply box'|trans }}</span>
                    </div>
                    <!-- //Field -->

                    {% if userDetails and userDetails.isVerified %}
                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <input type=\"password\" name=\"user_form[password][first]\" class=\"uv-field\" value=\"\" />
                            </div>
                        </div>
                        <!-- //Field -->

                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Confirm Password'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <input type=\"password\" name=\"user_form[password][second]\" class=\"uv-field\" value=\"\" />
                            </div>
                        </div>
                        <!-- //Field -->
                    {% endif %}

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                <input type=\"checkbox\" name=\"user_form[isActive]\" value=\"{{ userDetails and userDetails.isActive ? 1 : 0 }}\" {{ userDetails and userDetails.isActive ? 'checked' : '' }}>
                                <span class=\"uv-checkbox-view\"></span>
                            </div>
                            <span class=\"uv-checkbox-label\">{{ 'Account is Active'|trans }}</span>
                        </label>
                    </div>
                    <!-- //Field -->
                    
                </div>
                <!--//Tab View-->

                <!--Tab View-->
                <div class=\"uv-tab-view\" id=\"groups\">
                    {% set userGroups = user_service.getUserGroupIds(user.id) %}
                    <div class=\"uv-scroll-plank\">
                        <!-- Checkbox Block -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Groups'|trans }}</label>
                            <span class=\"uv-field-info uv-margin-top-5\">{{ 'Assigning group(s) to user to view tickets regardless assignment.'|trans }}</span>
                        </div>

                        <div>
                            <!--Block-->
                            <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                {% set groups = user_service.getSupportGroups() %}
                                {% if groups %}
                                    {% for group in groups %}
                                        <!-- / -->
                                        <div class=\"uv-element-block\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input name=\"user_form[groups][]\" type=\"checkbox\" value=\"{{ group.id }}\" {% if userDetails and group.id in userGroups %}checked{% endif %}>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-checkbox-label\">{{ group.name }}</span>
                                            </label>
                                        </div>
                                        <!-- /// -->
                                    {% endfor %}
                                {% else %}
                                    <div class=\"uv-element-block\">
                                        <a class=\"uv-error-message\" href=\"{{path('helpdesk_member_support_group_collection')}}\" target=\"_blank\">{% trans %}No Group added, Please add Group(s) first !{% endtrans %}</a>
                                    </div>
                                {% endif %}
                            </div>
                            <!--//Block-->

                        </div>
                        <div class=\"uv-element-block\">
                            <a href=\"#\" class=\"select\">{{ 'Select All'|trans }}</a>
                            <a href=\"#\" class=\"deselect\">{{ 'Remove All'|trans }}</a>
                        </div>
                    </div>

                    {% set userSubGroups = user_service.getUserSubGroupIds(user.id) %}
                    <div class=\"uv-scroll-plank\">
                        <!-- Checkbox Block -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Teams'|trans }}</label>
                            <span class=\"uv-field-info uv-margin-top-5\">{{ 'Assigning team(s) to user to view tickets regardless assignment.'|trans }}</span>
                        </div>

                        <div>
                            <!--Block-->
                            <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                {% set teams = user_service.getSupportTeams() %}
                                {% if teams %}
                                    {% for team in teams %}
                                        <!-- / -->
                                        <div class=\"uv-element-block\">
                                            <label>
                                                <div class=\"uv-checkbox\">
                                                    <input name=\"user_form[userSubGroup][]\" type=\"checkbox\" value=\"{{ team.id }}\" {% if userDetails and team.id in userSubGroups %}checked{% endif %}>
                                                    <span class=\"uv-checkbox-view\"></span>
                                                </div>
                                                <span class=\"uv-checkbox-label\">{{ team.name }}</span>
                                            </label>
                                        </div>
                                        <!-- /// -->
                                    {% endfor %}
                                {% else %}
                                    <div class=\"uv-element-block\">
                                        <a href=\"{{path('helpdesk_member_support_team_collection')}}\" target=\"_blank\">{% trans %}No Team added !{% endtrans %}</a>
                                    </div>
                                {% endif %}

                            </div>
                            <!--//Block-->

                        </div>
                        <div class=\"uv-element-block\">
                            <a href=\"#\" class=\"select\">{{ 'Select All'|trans }}</a>
                            <a href=\"#\" class=\"deselect\">{{ 'Remove All'|trans }}</a>
                        </div>
                    </div>
                </div>
                <!--//Tab View-->

                <!--Tab View-->
                <div class=\"uv-tab-view\" id=\"permission\">
                    {% if \"ROLE_SUPER_ADMIN\" != instanceRole %}
                        <!-- Field -->
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Role'|trans }}</label>
                            <div class=\"uv-field-block\">
                                <select name=\"user_form[role]\" class=\"uv-select\" id=\"user_form_role\" {% if user and user.id == app.user.id %}disabled=\"disabled\"{% endif %}>
                                    <option value=\"ROLE_ADMIN\" {% if \"ROLE_ADMIN\" in instanceRole %}selected{% endif %}>{{ 'Administrator'|trans }}</option>
                                    <option value=\"ROLE_AGENT\" {% if \"ROLE_AGENT\" in instanceRole %}selected{% endif %}>{{ 'Agent'|trans }}</option>
                                </select>
                            </div>
                            <span class=\"uv-field-info\">{{ \"Select agent role\"|trans }}</span>
                        </div>
                        <!-- //Field -->
                        {% set userPrivilege = user_service.getUserPrivilegeIds(user.id) %}
                        
                        <!-- Role dependent fields -->
                        <div class=\"role-dependent-fields\">
                            <div class=\"uv-scroll-plank\">
                                <!-- Checkbox Block -->
                                <div class=\"uv-element-block\">
                                    <label class=\"uv-field-label\">{{ 'Agent Privileges'|trans }}</label>
                                    <span class=\"uv-field-info uv-margin-top-5\">{{ 'Agent Privilege represents overall permissions in System.'|trans }}</span>
                                </div>

                                {% set privileges = user_service.getSupportPrivileges() %}
                                {% if privileges %}
                                    <div>
                                        <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                            {% for privilege in privileges %}
                                                <!-- / -->
                                                <div class=\"uv-element-block\">
                                                    <label>
                                                        <div class=\"uv-checkbox\">
                                                            <input name=\"user_form[agentPrivilege][]\" type=\"checkbox\" value=\"{{ privilege.id }}\" {% if userPrivilege and privilege.id in userPrivilege or (userPrivilege.id is defined and userPrivilege.id == privilege.id) %}checked{% endif %}>
                                                            <span class=\"uv-checkbox-view\"></span>
                                                        </div>
                                                        <span class=\"uv-checkbox-label\">{{ privilege.name }}</span>
                                                    </label>
                                                    <a class=\"uv-new-tab-link\" href=\"{{ path('helpdesk_member_update_privilege', {'supportPrivilegeId': privilege.id }) }}\" target=\"_blank\"></a>
                                                </div>
                                                <!-- /// -->
                                            {% endfor %}
                                        </div>
                                    </div>

                                    <div class=\"uv-element-block\">
                                        <a href=\"#\" class=\"select\">{{ 'Select All'|trans }}</a>
                                        <a href=\"#\" class=\"deselect\">{{ 'Remove All'|trans }}</a>
                                    </div>
                                {% else %}
                                    <div>
                                        <div class=\"uv-scroll-block\" id=\"beauty-scroll\">
                                            <div class=\"uv-element-block\">
                                                <input name=\"user_form[agentPrivilege][]\" type=\"hidden\" value=\"\">
                                                <a class=\"uv-error-message\" href=\"\" target=\"_blank\">{% trans %}No Privilege added, Please add Privilege(s) first !{% endtrans %}</a>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
\t\t\t\t\t\t\t</div>

                            <div class=\"uv-element-block\">
                                <label class=\"uv-field-label\">{{ 'Ticket View'|trans }}</label>
                                <span class=\"uv-field-info\">{{ 'User can view tickets based on selected scope.'|trans }}
                                    <span class=\"uv-extra-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ 'If individual access then user can View assigned Ticket(s) only, If Team access then user can view all Ticket(s) in team(s) he belongs to and so on'|trans }}\">[?]</span>
                                </span>
                                <div class=\"uv-element-block\" style=\"margin-top: 10px;\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"1\" type=\"radio\" {% if userDetails and userDetails.ticketAccessLevel == 1 %}checked{% endif %}>
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">{{ 'Global Access'|trans }}</span>
                                    </label>
                                </div>
                                <div class=\"uv-element-block\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"2\" type=\"radio\" {% if userDetails and userDetails.ticketAccessLevel == 2 %}checked{% endif %}>
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">{{ 'Group Access'|trans }}</span>
                                    </label>
                                </div>
                                <div class=\"uv-element-block\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"3\" type=\"radio\" {% if userDetails and userDetails.ticketAccessLevel == 3 %}checked{% endif %}>
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">{{ 'Team Access'|trans }}</span>
                                    </label>
                                </div>
                                <div class=\"uv-element-block\">
                                    <label>
                                        <div class=\"uv-radio\">
                                            <input name=\"user_form[ticketView]\" value=\"4\" type=\"radio\" {% if userDetails and userDetails.ticketAccessLevel == 4 %}checked{% endif %}>
                                            <span class=\"uv-radio-view\"></span>
                                        </div>
                                        <span class=\"uv-radio-label\">{{ 'Individual Access'|trans }}</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- //Role dependent fields -->
                    {% else %}
                        <input type=\"hidden\" name=\"user_form[role]\" value=\"ROLE_SUPER_ADMIN\">
                    {% endif %}
                </div>
                <!--//Tab View-->

                <!-- CSRF token Field -->
                {# <input type=\"hidden\" name=\"user_form[_token]\" value=\"{{ default_service.generateCsrfToken('user_form') }}\"/> #}
                <!-- //CSRF token Field -->

                <!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t\t<!--//CTA-->
            </form>
            <!-- //Form -->
\t\t</div>
\t</div>
{% endblock %}
{% block footer %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar UserModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'user_form[firstName]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\" | trans}}'
                    }, {
                        pattern: /^[\\p{L}]+\$/u,
                        msg: '{{ \"This field must have no space and characters only\" | trans}}'
                    }, {
                        maxLength:40,
                        msg: '{{ \"Maximum character length is 40\" | trans}}'
                    }],
                    'user_form[lastName]': function(value) {
                        if (value != undefined && value !== '') {
                            [{
                                pattern: /^[\\p{L}]+\$/u,
                                msg: '{{ \"This field must have no space and characters only\" | trans}}'
                            },{
                                maxLength:40,
                                msg: '{{ \"Maximum character length is 40\" | trans}}'
                            }]
                        }
                    },
                    'user_form[email]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern:  /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"This is not a valid email address\"|trans }}'
                    }],
                    'user_form[contactNumber]': function(value) {
                        if(value != undefined && value !== '') {
                            if(!value.match('^[0-9]*\$'))
                                return '{{ \"This field must be a number\"|trans }}';
                        }
                    },
                    'user_form[password][first]' : function(value) {
                        if(value != undefined && value !== '') {
                            if(value.length < 8)
                               return '{{ \"Password must contains 8 Characters\" | trans}}';
                        }
                    },
                    'user_form[password][second]': {
                        equalTo: 'user_form[password][first]',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    },
                    'user_form[groups][]': {
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },
                    'user_form[agentPrivilege][]' : {
                        fn: function(value) {
                            if(\$(\"#user_form_role\").val() == 'ROLE_AGENT') {
                                if(!value)
                                    return true;
                            }

                            return false;
                        },
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },
                    'user_form[ticketView]': {
                        fn: function(value) {
                            if (\$(\"#user_form_role\").val() == 'ROLE_AGENT') {
                                if (!value)
                                    return true;
                            }

                            return false;
                        },
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar UserForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveUser\",
\t\t\t\t\t'blur input, textarea': 'formChanged',
                    'change input[name=\"user_form[isActive]\"]': 'formChanged',
                    'change #user_form_role': 'roleChanged',
                    'click a.select': 'selectAll',
\t\t            'click a.deselect': 'deselectAll',
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
                        if (field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"user_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"user_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}
                    {% if not user.id %}
                        /* guess timezone and select that one */
                        var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone == 'Asia/Calcutta' ? 'Asia/Kolkata' : Intl.DateTimeFormat().resolvedOptions().timeZone;
                        if (timezone) {
                            var option = \$('select[name=\"user_form[timezone]\"]').find('option[value=\"'+ timezone +'\"]');
                            if (option.length) {
                                option.prop('selected', true);
                            }
                        }
                    {% endif %}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tvar fieldName = Backbone.\$(e.currentTarget).attr('name');
                    \$(\".uv-tabs li.uv-tab-active\").removeClass('uv-tab-error')
                    if (fieldName == 'user_form[password][second]') {
                        if (\$(\"input[name='user_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if (\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        if (fieldName === 'user_form[isActive]') {
                            const val = Backbone.\$(e.currentTarget).prop('checked') ? \"1\" : \"0\";
                            Backbone.\$(e.currentTarget).val(val);
                        }
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        if(fieldName == 'user_form[password][first]' && !\$(\"input[name='user_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'user_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveUser : function (e) {
\t\t\t\t\te.preventDefault();
                    \$(\".uv-tabs li\").removeClass('uv-tab-error')
                    this.model.unset('user_form[groups][]', { silent: true });
                    this.model.unset('user_form[agentPrivilege][]', { silent: true });
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if (this.model.isValid(true)) {
                        if (\$(\"#user_form_role\").val() == 'ROLE_ADMIN') {
                            \$('input[name=\"user_form[agentPrivilege][]\"]').remove();
                            this.model.unset('user_form[agentPrivilege][]', { silent: true });
                        }
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        } else {
                        \$('.uv-field-message').each(function(e) {
                            \$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").addClass('uv-tab-error')

                            if(\$(\".uv-tabs li[for='\" + \$(this).parents('.uv-tab-view').attr('id') + \"']:not(.uv-tab-active)\").length ) {
                                \$('.uv-view').animate({
                                    scrollTop: 0
                                }, 'slow');
                            }
                        });
                    }
\t\t\t\t},
                roleChanged: function(e) {
                    if(\$(e.target).val() == 'ROLE_AGENT') {
\t\t            \t\$('.role-dependent-fields').show();
\t\t            } else {
\t\t            \t\$('.role-dependent-fields').hide();
\t\t            }
                },
                selectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', true)
                },
                deselectAll: function (e) {
                    e.preventDefault();
                    this.\$(e.currentTarget).parents('.uv-scroll-plank')
                            .find('input')
                            .prop('checked', false);
\t\t        },
\t\t\t});

\t\t\tuserForm = new UserForm({
\t\t\t\tel : \$(\"#user-form\"),
\t\t\t\tmodel : new UserModel()
\t\t\t});

            \$('#user_form_role').trigger('change');
\t\t});
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/Agents/updateSupportAgent.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Agents/updateSupportAgent.html.twig");
    }
}
