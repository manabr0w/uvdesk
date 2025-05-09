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

/* @UVDeskCoreFramework/Customers/createSupportCustomer.html.twig */
class __TwigTemplate_f26c8b7cac2d4e98107c7d942aeb685e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Customers/createSupportCustomer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Customers/createSupportCustomer.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Customers/createSupportCustomer.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Customer"), "html", null, true);
        
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

\t\t<div class=\"uv-view ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "cookies", [], "any", false, false, false, 13), "get", ["uv-asideView"], "method", false, false, false, 13))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)) {
            // line 16
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Customer"), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 18
            yield "\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Customer"), "html", null, true);
            yield "
\t\t\t\t";
        }
        // line 20
        yield "\t\t\t</h1>
\t\t\t";
        // line 21
        $context["customerDetails"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 21, $this->source); })()), "getCustomerDetailsById", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)], "method", false, false, false, 21);
        // line 22
        yield "\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"customer-form\" enctype=\"multipart/form-data\">
\t\t\t\t<!-- Profile image -->
\t\t\t\t<div class=\"uv-image-upload-wrapper\" style=\"padding: 25px 0px 25px 0px;\">
\t\t\t\t\t";
        // line 26
        $context["isHaveImage"] = ((((isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 26, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 26, $this->source); })()), "profileImage", [], "any", false, false, false, 26))) ? (1) : (0));
        // line 27
        yield "\t\t\t\t\t<div class=\"uv-image-upload-brick ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 27, $this->source); })())) {
            yield "uv-on-drop-shadow";
        }
        yield "\" ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 27, $this->source); })())) {
            yield "style=\"border-color: transparent;\"";
        }
        yield ">
\t\t\t\t\t\t<input type=\"file\" name=\"customer_form[profileImage]\" id=\"uv-upload-profile\">
\t\t\t\t\t\t<div class=\"uv-image-upload-placeholder\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img id=\"dynamic-image-upload\" ";
        // line 34
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 34, $this->source); })())) {
            yield "src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 34, $this->source); })()), "profileImage", [], "any", false, false, false, 34), "html", null, true);
            yield "\"";
        }
        yield ">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-image-info-brick\">
\t\t\t\t\t\t<span class=\"uv-field-info\">";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format");
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Profile image -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[firstName]\" class=\"uv-field\" value=\"";
        // line 47
        yield (((isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 47, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 47, $this->source); })()), "firstName", [], "any", false, false, false, 47), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "firstName", [], "any", false, false, false, 47), "html", null, true)));
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Name"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[lastName]\" class=\"uv-field\" value=\"";
        // line 56
        yield (((isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 56, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 56, $this->source); })()), "lastName", [], "any", false, false, false, 56), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "lastName", [], "any", false, false, false, 56), "html", null, true)));
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[email]\" class=\"uv-field\" value=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Number"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[contactNumber]\" class=\"uv-field\" value=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                ";
        // line 79
        if (((isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 79, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["customerDetails"]) || array_key_exists("customerDetails", $context) ? $context["customerDetails"] : (function () { throw new RuntimeError('Variable "customerDetails" does not exist.', 79, $this->source); })()), "isVerified", [], "any", false, false, false, 79))) {
            // line 80
            yield "                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"customer_form[password][first]\" class=\"uv-field\" value=\"\" />
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
            yield "</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"customer_form[password][second]\" class=\"uv-field\" value=\"\" />
                        </div>
                    </div>
                    <!-- //Field -->
                ";
        }
        // line 98
        yield "
                <!-- Field -->
                <div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account Status"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customer_form[isActive]\" value=\"1\">
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account is Active"), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- CSRF token Field -->
\t\t\t\t\t";
        // line 116
        yield "\t\t\t\t<!-- //CSRF token Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 119
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

    // line 126
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

        // line 127
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar CustomerModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'customer_form[firstName]': [{
                        required: true,
                        msg: '";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: /^[\\p{L}]+\$/u,
                        msg: '";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have no space and characters only"), "html", null, true);
        yield "'
                    }, {
                        maxLength:40,
                        msg: '";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 40"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'customer_form[lastName]': function(value) {
                        if (value != undefined && value !== '') {
                            [{
                                pattern: /^[\\p{L}]+\$/u,
                                msg: '";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field must have no space and characters only"), "html", null, true);
        yield "'
                            }, {
                                maxLength:40,
                                msg: '";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 40"), "html", null, true);
        yield "'
                            }]
                        }
                    },
                    'customer_form[email]': [{
                        required: true,
                        msg: '";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email address is invalid"), "html", null, true);
        yield "'
                    }],
                    'customer_form[contactNumber]': function(value) {
                        if (value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return '";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact number is invalid"), "html", null, true);
        yield "';
                        }
                    },
\t\t\t\t\t'customer_form[password][first]' : function(value) {
                        if (value != undefined && value !== '') {
                            if(value.length < 8)
                               return '";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contains 8 Characters"), "html", null, true);
        yield "';
                        }
                    },
                    'customer_form[password][second]': {
                        equalTo: 'customer_form[password][first]',
                        msg: '";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        yield "'
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar CustomerForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveCustomer\",
\t\t\t\t\t'blur input, textarea': 'formChanged'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('";
        // line 186
        yield (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 186, $this->source); })());
        yield "');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tif (field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"customer_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"customer_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tvar fieldName = Backbone.\$(e.currentTarget).attr('name');
                    if (fieldName == 'customer_form[password][second]') {
                        if (\$(\"input[name='customer_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if (\$(\"input[name='customer_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        if (fieldName == 'customer_form[password][first]' && !\$(\"input[name='customer_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'customer_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveCustomer : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t}
\t\t\t});

\t\t\tcustomerForm = new CustomerForm({
\t\t\t\tel : \$(\"#customer-form\"),
\t\t\t\tmodel : new CustomerModel()
\t\t\t});
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
        return "@UVDeskCoreFramework/Customers/createSupportCustomer.html.twig";
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
        return array (  427 => 186,  412 => 174,  404 => 169,  395 => 163,  387 => 158,  381 => 155,  372 => 149,  366 => 146,  357 => 140,  351 => 137,  345 => 134,  334 => 127,  321 => 126,  303 => 119,  298 => 116,  288 => 108,  278 => 101,  273 => 98,  263 => 91,  251 => 82,  247 => 80,  245 => 79,  235 => 72,  225 => 65,  220 => 63,  210 => 56,  205 => 54,  195 => 47,  190 => 45,  180 => 38,  169 => 34,  152 => 27,  150 => 26,  144 => 22,  142 => 21,  139 => 20,  133 => 18,  127 => 16,  125 => 15,  118 => 13,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Add Customer'|trans }}{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Users' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{% if user.id %}
\t\t\t\t\t{{ 'Edit Customer'|trans }}
\t\t\t\t{% else %}
\t\t\t\t\t{{ 'Add Customer'|trans }}
\t\t\t\t{% endif %}
\t\t\t</h1>
\t\t\t{% set customerDetails = user_service.getCustomerDetailsById(user.id) %}
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"customer-form\" enctype=\"multipart/form-data\">
\t\t\t\t<!-- Profile image -->
\t\t\t\t<div class=\"uv-image-upload-wrapper\" style=\"padding: 25px 0px 25px 0px;\">
\t\t\t\t\t{% set isHaveImage =  customerDetails and customerDetails.profileImage ? 1 : 0 %}
\t\t\t\t\t<div class=\"uv-image-upload-brick {% if isHaveImage %}uv-on-drop-shadow{% endif %}\" {% if isHaveImage %}style=\"border-color: transparent;\"{% endif %}>
\t\t\t\t\t\t<input type=\"file\" name=\"customer_form[profileImage]\" id=\"uv-upload-profile\">
\t\t\t\t\t\t<div class=\"uv-image-upload-placeholder\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
\t\t\t\t\t\t\t<path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img id=\"dynamic-image-upload\" {% if isHaveImage %}src=\"{{ customerDetails.profileImage }}\"{% endif %}>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"uv-image-info-brick\">
\t\t\t\t\t\t<span class=\"uv-field-info\">{{ 'Upload a Profile Image (100px x 100px)<br> in PNG or JPG Format'|trans|raw }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Profile image -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'First Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[firstName]\" class=\"uv-field\" value=\"{{ customerDetails ? customerDetails.firstName : user.firstName }}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Last Name'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[lastName]\" class=\"uv-field\" value=\"{{ customerDetails ? customerDetails.lastName : user.lastName }}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[email]\" class=\"uv-field\" value=\"{{ user.email}}\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                <!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Contact Number'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"customer_form[contactNumber]\" class=\"uv-field\" value=\"\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

                {% if customerDetails and customerDetails.isVerified %}
                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"customer_form[password][first]\" class=\"uv-field\" value=\"\" />
                        </div>
                    </div>
                    <!-- //Field -->

                    <!-- Field -->
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Confirm Password'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <input type=\"password\" name=\"customer_form[password][second]\" class=\"uv-field\" value=\"\" />
                        </div>
                    </div>
                    <!-- //Field -->
                {% endif %}

                <!-- Field -->
                <div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Account Status'|trans }}</label>
\t\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<div class=\"uv-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"customer_form[isActive]\" value=\"1\">
\t\t\t\t\t\t\t\t<span class=\"uv-checkbox-view\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"uv-checkbox-label\">{{ 'Account is Active'|trans }}</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
                </div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- CSRF token Field -->
\t\t\t\t\t{# <input type=\"hidden\" name=\"customer_form[_token]\" value=\"{{ default_service.generateCsrfToken('customer_form') }}\"/> #}
\t\t\t\t<!-- //CSRF token Field -->

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
\t\t\tvar CustomerModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'customer_form[firstName]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern: /^[\\p{L}]+\$/u,
                        msg: '{{ \"This field must have no space and characters only\"|trans }}'
                    }, {
                        maxLength:40,
                        msg: '{{ \"Maximum character length is 40\"|trans }}'
                    }],
\t\t\t\t\t'customer_form[lastName]': function(value) {
                        if (value != undefined && value !== '') {
                            [{
                                pattern: /^[\\p{L}]+\$/u,
                                msg: '{{ \"This field must have no space and characters only\"|trans }}'
                            }, {
                                maxLength:40,
                                msg: '{{ \"Maximum character length is 40\"|trans }}'
                            }]
                        }
                    },
                    'customer_form[email]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                        msg: '{{ \"Email address is invalid\"|trans }}'
                    }],
                    'customer_form[contactNumber]': function(value) {
                        if (value != undefined && value !== '') {
                            if (!value.match('^\\\\s*(?:\\\\+?(\\\\d{1,3}))?[-. (]*(\\\\d{3})[-. )]*(\\\\d{3})[-. ]*(\\\\d{4})(?: *x(\\\\d+))?\\\\s*\$'))
                                return '{{ \"Contact number is invalid\"|trans }}';
                        }
                    },
\t\t\t\t\t'customer_form[password][first]' : function(value) {
                        if (value != undefined && value !== '') {
                            if(value.length < 8)
                               return '{{ \"Password must contains 8 Characters\" | trans}}';
                        }
                    },
                    'customer_form[password][second]': {
                        equalTo: 'customer_form[password][first]',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar CustomerForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn' : \"saveCustomer\",
\t\t\t\t\t'blur input, textarea': 'formChanged'
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = JSON.parse('{{ errors|raw }}');
\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tif (field == 'first') {
                            Backbone.Validation.callbacks.invalid(this, \"customer_form[password][\" + field + \"]\", jsonContext[field], 'input');
                        } else {
\t\t    \t\t\t    Backbone.Validation.callbacks.invalid(this, \"customer_form[\" + field + \"]\", jsonContext[field], 'input');
                        }
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tformChanged: function(e) {
\t\t\t    \tvar fieldName = Backbone.\$(e.currentTarget).attr('name');
                    if (fieldName == 'customer_form[password][second]') {
                        if (\$(\"input[name='customer_form[password][first]']\").val().length) {
                            this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                            this.model.isValid([fieldName])
                        } else {
                            if (\$(\"input[name='customer_form[password][second]']\").val().length) {
\t\t    \t\t\t        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                                this.model.isValid([fieldName])
                            } else {
\t\t    \t\t\t        Backbone.Validation.callbacks.valid(this, fieldName, 'input');
                            }
                        }
                    } else {
                        this.model.set(fieldName, Backbone.\$(e.currentTarget).val())
                        this.model.isValid([fieldName])
                        if (fieldName == 'customer_form[password][first]' && !\$(\"input[name='customer_form[password][second]']\").val().length) {
\t\t    \t\t\t    Backbone.Validation.callbacks.valid(this, 'customer_form[password][second]', 'input');
                        }
                    }
\t\t\t    },
\t\t\t\tsaveCustomer : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t        this.model.set(this.\$el.serializeObject());
\t\t\t        if (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t            this.\$el.submit();
\t\t\t        }
\t\t\t\t}
\t\t\t});

\t\t\tcustomerForm = new CustomerForm({
\t\t\t\tel : \$(\"#customer-form\"),
\t\t\t\tmodel : new CustomerModel()
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "@UVDeskCoreFramework/Customers/createSupportCustomer.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Customers/createSupportCustomer.html.twig");
    }
}
