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

/* @UVDeskCoreFramework/login.html.twig */
class __TwigTemplate_3255028cdd0728bffad6d0c420ab8bd2 extends Template
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
            'templateCSS' => [$this, 'block_templateCSS'],
            'pageWrapper' => [$this, 'block_pageWrapper'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/login.html.twig"));

        // line 5
        $context["recaptchaDetail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 5, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 5);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/login.html.twig", 1);
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

        yield "Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_templateCSS(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "templateCSS"));

        // line 8
        yield "<style>
    #loginForm h1 {
        font-size: 28px;
        color: #6F6F6F;
        font-weight: 600;
        margin: 0px 0px 10px 0px;
    }

    .forgot-password-cta {
        position: absolute;
        font-size: 15px !important;
        right: 0px;
        top: 0px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageWrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageWrapper"));

        // line 26
        yield "    <div class=\"uv-large-box-plank\">
\t\t<div class=\"uv-large-box-rt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
                <form action=\"\" method=\"post\" id=\"loginForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Log in to your"), "html", null, true);
        yield " <span class=\"uv-brand\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["website"]) || array_key_exists("website", $context) ? $context["website"] : (function () { throw new RuntimeError('Variable "website" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
        yield "</span></h1>
                        <p>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your credentials below to gain access to your helpdesk account."), "html", null, true);
        yield "</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
                                <div class=\"uv-max-field\">
                                    <input type=\"email\" name=\"_username\">
                                </div>
                            </div>
                            <div class=\"uv-adjacent-element-block\" style=\"position: relative;\">
                                <label>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>
                                <div class=\"uv-max-field\">
                                    <a class=\"forgot-password-cta\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_forgot_account_password");
        yield "\" tabindex=\"-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot Password?"), "html", null, true);
        yield "</a>
                                    <input type=\"password\"  name=\"_password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>
                                    <div class=\"uv-checkbox\">
                                        <input type=\"checkbox\" name=\"_remember_me\" checked>
                                        <span class=\"uv-checkbox-view\"></span>
                                    </div>
                                    <span class=\"uv-checkbox-label\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Keep me logged in"), "html", null, true);
        yield "</span>
                                </label>
                            </div>
                            <div class=\"uv-adjacent-element-block\">
                                ";
        // line 58
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 58, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 58, $this->source); })()), "isActive", [], "any", false, false, false, 58) == true))) {
            // line 59
            yield "                                    <div class=\"clearfix\"></div>
                                    <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 60, $this->source); })()), "siteKey", [], "any", false, false, false, 60), "html", null, true);
            yield "\"></div>
                                    <div class=\"clearfix\"></div>
                                ";
        } else {
            // line 63
            yield "                                    <!-- Recaptcha will not support -->
                                ";
        }
        // line 65
        yield "                            </div>
                            <button class=\"uv-btn\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign In"), "html", null, true);
        yield "</button>
                        </div>
                    </div>
                </div>
            </form>
\t\t</div>

\t\t<div class=\"uv-large-box-lt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
\t\t\t\t<a href=\"https://www.uvdesk.com\">
                    <img alt=\"UVdesk\" title=\"UVdesk\" src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/images/uvdesk-logo-symbol.svg"), "html", null, true);
        yield "\">
\t\t\t\t</a>
            </div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        // line 86
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 86, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 86, $this->source); })()), "isActive", [], "any", false, false, false, 86) == true))) {
            // line 87
            yield "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 89
        yield "
    <script type=\"text/javascript\">
        \$(function () {
             _.extend(Backbone.Validation.callbacks, {
                valid : function (view, attr, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.removeClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                },
                invalid : function (view, attr, error, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.addClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                    \$el.parents('.uv-adjacent-element-block').append(\"<span class='uv-field-message'>\" + error + \"</span>\");
                }
            });

            var LoginModel = Backbone.Model.extend({
                validation: {
                    '_username': [{
                        required: true,
                        msg: '";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        pattern: 'email',
                        msg: '";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is not a valid email address"), "html", null, true);
        yield "'
                    }],
                    '_password': [{
                        required: true,
                        msg: '";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        minLength: 8,
                        msg: '";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contains 8 Characters"), "html", null, true);
        yield "'
                    }],
                    ";
        // line 122
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 122, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 122, $this->source); })()), "isActive", [], "any", false, false, false, 122) == true))) {
            // line 123
            yield "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            yield "'
                        }
\t\t\t\t    ";
        }
        // line 133
        yield "                }
            });

            var LoginForm = Backbone.View.extend({
                events: {
                    'click .uv-btn': 'submit',
                    'blur input': 'formChanged'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
                    ";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 143)) {
            // line 144
            yield "                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 144, $this->source); })()), "messageKey", [], "any", false, false, false, 144)), "html", null, true);
            yield "'})
                    ";
        }
        // line 146
        yield "                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
                submit: function (e) {
                    e.preventDefault();

                    var data = this.\$el.serializeObject();
                    this.model.set(data);
                    if (this.model.isValid(true)) {
                        this.\$el.submit();
                    }
                }
            });

            var Login = new LoginForm({
\t\t        el: \$('#loginForm'),
\t\t        model: new LoginModel()
\t\t    });
        });
    </script>
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
        return "@UVDeskCoreFramework/login.html.twig";
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
        return array (  357 => 146,  351 => 144,  349 => 143,  337 => 133,  331 => 130,  322 => 123,  320 => 122,  315 => 120,  309 => 117,  302 => 113,  296 => 110,  273 => 89,  269 => 87,  267 => 86,  261 => 84,  248 => 83,  231 => 76,  218 => 66,  215 => 65,  211 => 63,  205 => 60,  202 => 59,  200 => 58,  193 => 54,  177 => 43,  172 => 41,  163 => 35,  157 => 32,  151 => 31,  144 => 26,  131 => 25,  105 => 8,  92 => 7,  69 => 3,  58 => 1,  56 => 5,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Login{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block templateCSS %}
<style>
    #loginForm h1 {
        font-size: 28px;
        color: #6F6F6F;
        font-weight: 600;
        margin: 0px 0px 10px 0px;
    }

    .forgot-password-cta {
        position: absolute;
        font-size: 15px !important;
        right: 0px;
        top: 0px;
    }
</style>
{% endblock %}

{% block pageWrapper %}
    <div class=\"uv-large-box-plank\">
\t\t<div class=\"uv-large-box-rt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
                <form action=\"\" method=\"post\" id=\"loginForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>{{ \"Log in to your\"|trans }} <span class=\"uv-brand\">{{ website.name }}</span></h1>
                        <p>{{ \"Enter your credentials below to gain access to your helpdesk account.\"|trans }}</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Email\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input type=\"email\" name=\"_username\">
                                </div>
                            </div>
                            <div class=\"uv-adjacent-element-block\" style=\"position: relative;\">
                                <label>{{ \"Password\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <a class=\"forgot-password-cta\" href=\"{{ path('helpdesk_forgot_account_password') }}\" tabindex=\"-1\">{{ \"Forgot Password?\" |trans}}</a>
                                    <input type=\"password\"  name=\"_password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>
                                    <div class=\"uv-checkbox\">
                                        <input type=\"checkbox\" name=\"_remember_me\" checked>
                                        <span class=\"uv-checkbox-view\"></span>
                                    </div>
                                    <span class=\"uv-checkbox-label\">{{ \"Keep me logged in\" |trans}}</span>
                                </label>
                            </div>
                            <div class=\"uv-adjacent-element-block\">
                                {% if recaptchaDetail and recaptchaDetail.isActive == true %}
                                    <div class=\"clearfix\"></div>
                                    <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
                                    <div class=\"clearfix\"></div>
                                {% else %}
                                    <!-- Recaptcha will not support -->
                                {% endif %}
                            </div>
                            <button class=\"uv-btn\">{{ 'Sign In'|trans }}</button>
                        </div>
                    </div>
                </div>
            </form>
\t\t</div>

\t\t<div class=\"uv-large-box-lt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
\t\t\t\t<a href=\"https://www.uvdesk.com\">
                    <img alt=\"UVdesk\" title=\"UVdesk\" src=\"{{ asset('bundles/uvdeskcoreframework/images/uvdesk-logo-symbol.svg') }}\">
\t\t\t\t</a>
            </div>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
    {{ parent() }}

    {% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}

    <script type=\"text/javascript\">
        \$(function () {
             _.extend(Backbone.Validation.callbacks, {
                valid : function (view, attr, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.removeClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                },
                invalid : function (view, attr, error, selector) {
                    var \$el = view.\$('[name=\"' + attr + '\"]');
                    \$el.addClass('uv-field-error');
                    \$el.parents('.uv-adjacent-element-block').find('.uv-field-message').remove();
                    \$el.parents('.uv-adjacent-element-block').append(\"<span class='uv-field-message'>\" + error + \"</span>\");
                }
            });

            var LoginModel = Backbone.Model.extend({
                validation: {
                    '_username': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        pattern: 'email',
                        msg: '{{ \"This is not a valid email address\"|trans }}'
                    }],
                    '_password': [{
                        required: true,
                        msg: '{{\"This field is mandatory\"|trans }}'
                    }, {
                        minLength: 8,
                        msg: '{{\"Password must contains 8 Characters\"|trans }}'
                    }],
                    {% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '{{ \"Please select CAPTCHA\"|trans }}'
                        }
\t\t\t\t    {% endif %}
                }
            });

            var LoginForm = Backbone.View.extend({
                events: {
                    'click .uv-btn': 'submit',
                    'blur input': 'formChanged'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
                    {% if error.messageKey is defined %}
                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': '{{ error.messageKey|trans}}'})
                    {% endif %}
                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
                submit: function (e) {
                    e.preventDefault();

                    var data = this.\$el.serializeObject();
                    this.model.set(data);
                    if (this.model.isValid(true)) {
                        this.\$el.submit();
                    }
                }
            });

            var Login = new LoginForm({
\t\t        el: \$('#loginForm'),
\t\t        model: new LoginModel()
\t\t    });
        });
    </script>
{% endblock %}
", "@UVDeskCoreFramework/login.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/login.html.twig");
    }
}
