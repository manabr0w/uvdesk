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

/* @UVDeskSupportCenter/Staff/MarketingModule/marketingModuleForm.html.twig */
class __TwigTemplate_5f6d2f18335f44a81badf123ff1d80d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/MarketingModule/marketingModuleForm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Staff/MarketingModule/marketingModuleForm.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskSupportCenter/Staff/MarketingModule/marketingModuleForm.html.twig", 1);
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Marketing Module"), "html", null, true);
            yield "
\t";
        } else {
            // line 7
            yield "\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Marketing Module"), "html", null, true);
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
        yield "\t<style>
\t\t.uv-color-field {
\t\t\tcolor: #fff;
\t\t\twidth: 100px;
\t\t\ttext-transform: uppercase;
\t\t}
\t\t.colorpicker-saturation, .colorpicker-hue, .colorpicker-alpha{
\t\t\tdisplay: none !important;
\t\t}
\t</style>
\t<div class=\"uv-inner-section\">
\t\t";
        // line 24
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 25
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\SupportCenterBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Knowledgebase";
        // line 26
        yield "
\t\t";
        // line 27
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 27, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 27, $this->source); })())], "method", false, false, false, 27), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 27, $this->source); })())], "method", false, false, false, 27);
        yield "

\t\t<div class=\"uv-view ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "cookies", [], "any", false, false, false, 29) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "cookies", [], "any", false, false, false, 29), "get", ["uv-asideView"], "method", false, false, false, 29))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t<h1>
\t\t\t\t";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)) {
            // line 32
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Marketing Module"), "html", null, true);
            yield "
                ";
        } else {
            // line 34
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Marketing Module"), "html", null, true);
            yield "
                ";
        }
        // line 36
        yield "\t\t\t</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"marketing-module-form\" enctype=\"multipart/form-data\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"marketingModule_form[title]\" class=\"uv-field\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        yield "</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"marketingModule_form[description]\" class=\"uv-field\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), "html", null, true);
        yield "</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Border-Color</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"pickr-container\">
\t\t\t\t\t\t<button id=\"pickr-btn\" style=\"background: ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 64, $this->source); })()), "borderColor", [], "any", false, false, false, 64), "html", null, true);
        yield ";\"></button>
\t\t\t\t\t\t<input 
\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\tid=\"color-code-input\" 
\t\t\t\t\t\t\tname=\"marketingModule_form[borderColor]\" 
\t\t\t\t\t\t\tclass=\"uv-field uv-color-field\" 
\t\t\t\t\t\t\tvalue=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 70, $this->source); })()), "borderColor", [], "any", false, false, false, 70), "html", null, true);
        yield "\" 
\t\t\t\t\t\t/>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">Marketing module border color</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->
\t\t\t\t
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Link URL</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"marketingModule_form[linkURL]\" class=\"uv-field\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 81, $this->source); })()), "linkURL", [], "any", false, false, false, 81), "html", null, true);
        yield "\" placeholder=\"https://example.com/\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- Field -->

                <div class=\"uv-element-block uv-no-error-success-icon\">
                    <label class=\"uv-field-label\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Marketing Module Image"), "html", null, true);
        yield "</label>
                    <!-- Profile image -->
                    <div class=\"uv-image-upload-wrapper\" style=\"padding: 10px 0px 10px 0px; border:none;\">
                      ";
        // line 91
        $context["isHaveImage"] = ((((isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 91, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 91, $this->source); })()), "image", [], "any", false, false, false, 91))) ? (1) : (0));
        // line 92
        yield "                      <div class=\"uv-image-upload-brick ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 92, $this->source); })())) {
            yield "uv-on-drop-shadow";
        }
        yield "\" ";
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 92, $this->source); })())) {
            yield "style=\"border-color: transparent;\"";
        }
        yield ">
                        <input type=\"file\" name=\"marketingModule_image\" id=\"uv-upload-profile\" accept=\"image/*\" size=\"3000\">
                        <input id=\"image_exist\" type=\"hidden\" name=\"image_exist\" value=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 94, $this->source); })()), "html", null, true);
        yield "\"/>
                        <div class=\"uv-image-upload-placeholder\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                          <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                          </svg>
                        </div>
                        <img id=\"dynamic-image-upload\" ";
        // line 100
        if ((isset($context["isHaveImage"]) || array_key_exists("isHaveImage", $context) ? $context["isHaveImage"] : (function () { throw new RuntimeError('Variable "isHaveImage" does not exist.', 100, $this->source); })())) {
            yield "src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100), "html", null, true);
            yield "\"";
        }
        yield ">
                      </div>
                    </div>
                    <span class=\"uv-field-info\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An image is worth a thousands words and makes folder more accessible"), "html", null, true);
        yield "</span>
                </div>

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Status</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"marketingModule_form[status]\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 111, $this->source); })()), "isActive", [], "any", false, false, false, 111) == "1")) {
            yield "selected";
        }
        yield ">Publish</option>
\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 112
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 112, $this->source); })()), "isActive", [], "any", false, false, false, 112) == "0")) {
            yield "selected";
        }
        yield ">Draft</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">Choose a status</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Groups</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"marketingModule_form[group]\" class=\"uv-select\">
\t\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 124, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 125
            yield "\t\t\t\t\t\t\t\t";
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125))) {
                // line 126
                yield "\t\t\t\t\t\t\t\t\t<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 126), "html", null, true);
                yield "\" 
\t\t\t\t\t\t\t\t\t";
                // line 127
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 127, $this->source); })()), "group", [], "any", false, false, false, 127), "id", [], "any", false, false, false, 127) == CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 127))) {
                    yield "selected";
                }
                // line 128
                yield "\t\t\t\t\t\t\t\t\t>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 128), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t";
            } else {
                // line 130
                yield "\t\t\t\t\t\t\t\t\t<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 130), "html", null, true);
                yield "\"
\t\t\t\t\t\t\t\t\t>";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 131), "html", null, true);
                yield "</option>
\t\t\t\t\t\t\t\t";
            }
            // line 133
            yield "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">Choose a group</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save marketing Module"), "html", null, true);
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

    // line 149
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

        // line 150
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css\" />
\t<script src=\"https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js\"></script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar marketingModuleModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'marketingModule_form[title]':[{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},{
                        maxLength: 25,
                        msg: '";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 25"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'marketingModule_form[description]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},{
                        maxLength: 80,
                        msg: '";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maximum character length is 80"), "html", null, true);
        yield "'
                    }],
\t\t\t\t\t'marketingModule_form[borderColor]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'marketingModule_form[group]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'marketingModule_image': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t},
\t\t\t\t\t'marketingModule_form[linkURL]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tvar AnnouncementForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"savePromotion\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = '';

\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tsavePromotion : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tlet imageExist = this.\$el.find('#image_exist').val();
\t\t\t\t\tlet fileFieldValue = this.\$el.find('#uv-upload-profile').val();
\t\t\t\t\tlet serializedObject = this.\$el.serializeObject();
\t\t\t\t\t
\t\t\t\t\tif (fileFieldValue) {
\t\t\t\t\t\tserializedObject.marketingModule_image = fileFieldValue;
\t\t\t\t\t} else if (imageExist == '1') {
\t\t\t\t\t\tserializedObject.marketingModule_image = 'exist';
\t\t\t\t\t}

\t\t\t\t\tthis.model.set(serializedObject);

\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t        }
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

                        if (!parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
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

\t\t\tannouncementForm = new AnnouncementForm({
\t\t\t\tel : \$(\"#marketing-module-form\"),
\t\t\t\tmodel : new marketingModuleModel()
\t\t\t});\t
\t\t});
\t</script>

\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t\tconst pickr = Pickr.create({
\t\t\t\tel: \"#pickr-btn\",
\t\t\t\ttheme: \"classic\",
\t\t\t\tdefault: \"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["marketingModule"]) || array_key_exists("marketingModule", $context) ? $context["marketingModule"] : (function () { throw new RuntimeError('Variable "marketingModule" does not exist.', 265, $this->source); })()), "borderColor", [], "any", false, false, false, 265), "html", null, true);
        yield "\",
\t\t\t\tswatches: [\"#FFA500\",\"#0284C7\",\"#16A34A\",\"#E11D48\",],
\t\t\t\tcomponents: {
\t\t\t\t\tpreview: true,
\t\t\t\t\topacity: false,
\t\t\t\t\thue: true,
\t\t\t\t\tinteraction: {
\t\t\t\t\t\thex: true,
\t\t\t\t\t\tinput: true,
\t\t\t\t\t\tsave: true
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tconst colorInput = document.getElementById(\"color-code-input\");

\t\t\tpickr.on(\"save\", (color) => {
\t\t\t\tconst selectedColor = color.toHEXA().toString();
\t\t\t\tcolorInput.value = selectedColor;
\t\t\t\tpickr.hide();
\t\t\t\tcolorInput.style.background = selectedColor;
\t\t\t});

\t\t\tcolorInput.addEventListener(\"input\", () => {
\t\t\t\tpickr.setColor(colorInput.value);
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
        return "@UVDeskSupportCenter/Staff/MarketingModule/marketingModuleForm.html.twig";
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
        return array (  533 => 265,  452 => 187,  445 => 183,  438 => 179,  431 => 175,  424 => 171,  418 => 168,  411 => 164,  405 => 161,  390 => 150,  377 => 149,  359 => 141,  350 => 134,  344 => 133,  339 => 131,  334 => 130,  328 => 128,  324 => 127,  319 => 126,  316 => 125,  312 => 124,  295 => 112,  289 => 111,  278 => 103,  268 => 100,  259 => 94,  247 => 92,  245 => 91,  239 => 88,  229 => 81,  215 => 70,  206 => 64,  193 => 54,  188 => 52,  177 => 44,  172 => 42,  164 => 36,  158 => 34,  152 => 32,  150 => 31,  143 => 29,  138 => 27,  135 => 26,  132 => 25,  129 => 24,  116 => 12,  103 => 11,  88 => 7,  82 => 5,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
    {% if marketingModule.id %}
\t\t{{ 'Edit Marketing Module'|trans }}
\t{% else %}
\t\t{{ 'Add Marketing Module'|trans }}
\t{% endif %}
{% endblock %}

{% block pageContent %}
\t<style>
\t\t.uv-color-field {
\t\t\tcolor: #fff;
\t\t\twidth: 100px;
\t\t\ttext-transform: uppercase;
\t\t}
\t\t.colorpicker-saturation, .colorpicker-hue, .colorpicker-alpha{
\t\t\tdisplay: none !important;
\t\t}
\t</style>
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\SupportCenterBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Knowledgebase' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t<h1>
\t\t\t\t{% if marketingModule.id %}
                    {{ 'Edit Marketing Module'|trans }}
                {% else %}
                    {{ 'Add Marketing Module'|trans }}
                {% endif %}
\t\t\t</h1>
\t\t\t
\t\t\t<!--Form-->
\t\t\t<form method=\"post\" action=\"\" id=\"marketing-module-form\" enctype=\"multipart/form-data\">
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Title'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"marketingModule_form[title]\" class=\"uv-field\" value=\"{{ marketingModule.title }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">{{ 'Description'|trans }}</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<textarea name=\"marketingModule_form[description]\" class=\"uv-field\">{{ marketingModule.description }}</textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Border-Color</label>
\t\t\t\t\t<div class=\"uv-field-block\" id=\"pickr-container\">
\t\t\t\t\t\t<button id=\"pickr-btn\" style=\"background: {{ marketingModule.borderColor }};\"></button>
\t\t\t\t\t\t<input 
\t\t\t\t\t\t\ttype=\"text\"
\t\t\t\t\t\t\tid=\"color-code-input\" 
\t\t\t\t\t\t\tname=\"marketingModule_form[borderColor]\" 
\t\t\t\t\t\t\tclass=\"uv-field uv-color-field\" 
\t\t\t\t\t\t\tvalue=\"{{ marketingModule.borderColor }}\" 
\t\t\t\t\t\t/>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">Marketing module border color</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->
\t\t\t\t
\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Link URL</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<input type=\"text\" name=\"marketingModule_form[linkURL]\" class=\"uv-field\" value=\"{{ marketingModule.linkURL }}\" placeholder=\"https://example.com/\" />
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\"></span>
\t\t\t\t</div>
\t\t\t\t<!-- Field -->

                <div class=\"uv-element-block uv-no-error-success-icon\">
                    <label class=\"uv-field-label\">{{ 'Marketing Module Image'|trans }}</label>
                    <!-- Profile image -->
                    <div class=\"uv-image-upload-wrapper\" style=\"padding: 10px 0px 10px 0px; border:none;\">
                      {% set isHaveImage =  marketingModule  and marketingModule.image ? 1 : 0 %}
                      <div class=\"uv-image-upload-brick {% if isHaveImage %}uv-on-drop-shadow{% endif %}\" {% if isHaveImage %}style=\"border-color: transparent;\"{% endif %}>
                        <input type=\"file\" name=\"marketingModule_image\" id=\"uv-upload-profile\" accept=\"image/*\" size=\"3000\">
                        <input id=\"image_exist\" type=\"hidden\" name=\"image_exist\" value=\"{{isHaveImage}}\"/>
                        <div class=\"uv-image-upload-placeholder\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"48px\" height=\"32px\">
                          <path fill-rule=\"evenodd\" d=\"M28.026,26.003 L19.964,26.003 L19.964,17.962 L13.964,17.962 L23.995,8.050 L34.025,17.962 L28.026,17.962 L28.026,26.003 ZM33.557,3.421 C30.806,1.146 27.619,0.008 23.995,0.008 C21.182,0.008 18.588,0.756 16.214,2.252 C13.838,3.749 11.996,5.712 10.683,8.143 C7.683,8.456 5.152,9.749 3.090,12.024 C1.027,14.300 -0.004,16.965 -0.004,20.019 C-0.004,23.324 1.168,26.144 3.512,28.481 C5.855,30.819 8.682,31.988 11.996,31.988 L37.963,31.988 C40.712,31.988 43.072,31.006 45.040,29.042 C47.009,27.079 47.993,24.726 47.993,21.983 C47.993,19.364 47.087,17.106 45.275,15.203 C43.461,13.302 41.275,12.258 38.713,12.071 C38.024,8.580 36.306,5.698 33.557,3.421 Z\"></path>
                          </svg>
                        </div>
                        <img id=\"dynamic-image-upload\" {% if isHaveImage %}src=\"{{ marketingModule.image }}\"{% endif %}>
                      </div>
                    </div>
                    <span class=\"uv-field-info\">{{ 'An image is worth a thousands words and makes folder more accessible'|trans }}</span>
                </div>

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Status</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"marketingModule_form[status]\" class=\"uv-select\">
\t\t\t\t\t\t\t<option value=\"1\" {% if marketingModule.isActive == \"1\" %}selected{% endif %}>Publish</option>
\t\t\t\t\t\t\t<option value=\"0\" {% if marketingModule.isActive == \"0\" %}selected{% endif %}>Draft</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">Choose a status</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!-- Field -->
\t\t\t\t<div class=\"uv-element-block\">
\t\t\t\t\t<label class=\"uv-field-label\">Groups</label>
\t\t\t\t\t<div class=\"uv-field-block\">
\t\t\t\t\t\t<select name=\"marketingModule_form[group]\" class=\"uv-select\">
\t\t\t\t\t\t\t{% for group in user_service.getSupportGroups() %}
\t\t\t\t\t\t\t\t{% if marketingModule.id is not null %}
\t\t\t\t\t\t\t\t\t<option value=\"{{group.id}}\" 
\t\t\t\t\t\t\t\t\t{% if (marketingModule.group.id == group.id) %}selected{% endif %}
\t\t\t\t\t\t\t\t\t>{{group.name}}</option>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<option value=\"{{group.id}}\"
\t\t\t\t\t\t\t\t\t>{{group.name}}</option>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"uv-field-info\">Choose a group</span>
\t\t\t\t</div>
\t\t\t\t<!-- //Field -->

\t\t\t\t<!--CTA-->
\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save marketing Module'|trans }}\" type=\"submit\">
\t\t\t\t<!--//CTA-->
\t\t\t</form>
\t\t\t<!--//Form-->
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}
\t
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css\" />
\t<script src=\"https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js\"></script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar marketingModuleModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
\t\t\t\t\t'marketingModule_form[title]':[{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},{
                        maxLength: 25,
                        msg: '{{ \"Maximum character length is 25\" | trans}}'
                    }],
\t\t\t\t\t'marketingModule_form[description]': [{
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},{
                        maxLength: 80,
                        msg: '{{ \"Maximum character length is 80\" | trans}}'
                    }],
\t\t\t\t\t'marketingModule_form[borderColor]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},
\t\t\t\t\t'marketingModule_form[group]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},
\t\t\t\t\t'marketingModule_image': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t},
\t\t\t\t\t'marketingModule_form[linkURL]': {
\t\t\t\t\t\trequired: true,
\t\t\t\t\t\tmsg: \"{{ 'This field is mandatory'|trans }}\"
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tvar AnnouncementForm = Backbone.View.extend({
\t\t\t\tevents : {
\t\t\t\t\t'click .uv-btn': \"savePromotion\"
\t\t\t\t},
\t\t\t\tinitialize : function() {
\t\t\t\t\tBackbone.Validation.bind(this);
\t\t\t\t\tvar jsonContext = '';

\t\t    \t\tfor (var field in jsonContext) {
\t\t    \t\t\tBackbone.Validation.callbacks.invalid(this, field, jsonContext[field], 'input');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tsavePromotion : function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tlet imageExist = this.\$el.find('#image_exist').val();
\t\t\t\t\tlet fileFieldValue = this.\$el.find('#uv-upload-profile').val();
\t\t\t\t\tlet serializedObject = this.\$el.serializeObject();
\t\t\t\t\t
\t\t\t\t\tif (fileFieldValue) {
\t\t\t\t\t\tserializedObject.marketingModule_image = fileFieldValue;
\t\t\t\t\t} else if (imageExist == '1') {
\t\t\t\t\t\tserializedObject.marketingModule_image = 'exist';
\t\t\t\t\t}

\t\t\t\t\tthis.model.set(serializedObject);

\t\t\t\t\tif (this.model.isValid(true)) {
\t\t\t\t\t\tthis.\$el.find('.uv-btn').attr('disabled', 'disabled');
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t        }
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

                        if (!parent.find(\".uv-filtered-tags a[data-id='\" + id + \"']\").length) {
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

\t\t\tannouncementForm = new AnnouncementForm({
\t\t\t\tel : \$(\"#marketing-module-form\"),
\t\t\t\tmodel : new marketingModuleModel()
\t\t\t});\t
\t\t});
\t</script>

\t<script>
\t\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\t\tconst pickr = Pickr.create({
\t\t\t\tel: \"#pickr-btn\",
\t\t\t\ttheme: \"classic\",
\t\t\t\tdefault: \"{{ marketingModule.borderColor }}\",
\t\t\t\tswatches: [\"#FFA500\",\"#0284C7\",\"#16A34A\",\"#E11D48\",],
\t\t\t\tcomponents: {
\t\t\t\t\tpreview: true,
\t\t\t\t\topacity: false,
\t\t\t\t\thue: true,
\t\t\t\t\tinteraction: {
\t\t\t\t\t\thex: true,
\t\t\t\t\t\tinput: true,
\t\t\t\t\t\tsave: true
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t\tconst colorInput = document.getElementById(\"color-code-input\");

\t\t\tpickr.on(\"save\", (color) => {
\t\t\t\tconst selectedColor = color.toHEXA().toString();
\t\t\t\tcolorInput.value = selectedColor;
\t\t\t\tpickr.hide();
\t\t\t\tcolorInput.style.background = selectedColor;
\t\t\t});

\t\t\tcolorInput.addEventListener(\"input\", () => {
\t\t\t\tpickr.setColor(colorInput.value);
\t\t\t});
\t\t});
\t</script>
{% endblock %}", "@UVDeskSupportCenter/Staff/MarketingModule/marketingModuleForm.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Staff/MarketingModule/marketingModuleForm.html.twig");
    }
}
