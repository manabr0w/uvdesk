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

/* @UVDeskCoreFramework/forgotPassword.html.twig */
class __TwigTemplate_a56a72050aa18f2edaf2836fc1cafc3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/forgotPassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/forgotPassword.html.twig"));

        // line 5
        $context["recaptchaDetail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 5, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 5);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/forgotPassword.html.twig", 1);
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

        yield "Forgot Password";
        
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
        yield "    <style>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forgot Password"), "html", null, true);
        yield "</h1>
                        <div class=\"uv-element-block\">
                            <p>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your email address and we will send you an email with instructions to update your login credentials."), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"email\" name=\"forgot_password_form[email]\">
                                </div>
                            </div>
                            <div class=\"uv-adjacent-element-block\">
                                ";
        // line 43
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 43, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 43, $this->source); })()), "isActive", [], "any", false, false, false, 43) == true))) {
            // line 44
            yield "                                    <div class=\"clearfix\"></div>
                                    <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 45, $this->source); })()), "siteKey", [], "any", false, false, false, 45), "html", null, true);
            yield "\"></div>
                                    <div class=\"clearfix\"></div>
                                ";
        } else {
            // line 48
            yield "                                    <!-- Recaptcha will not support -->
                                ";
        }
        // line 50
        yield "                            </div>
                            <button class=\"uv-btn\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send Mail"), "html", null, true);
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
        // line 61
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

    // line 68
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

        // line 69
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    
    ";
        // line 71
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 71, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 71, $this->source); })()), "isActive", [], "any", false, false, false, 71) == true))) {
            // line 72
            yield "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 74
        yield "
    <script type=\"text/javascript\">
\t\t\$(function () {
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
                    'forgot_password_form[email]': [{
                        required: true,
                        msg: '";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        pattern: 'email',
                        msg: '";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is not a valid email address"), "html", null, true);
        yield "'
                    }],
                    ";
        // line 100
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 100, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 100, $this->source); })()), "isActive", [], "any", false, false, false, 100) == true))) {
            // line 101
            yield "                        'g-recaptcha-response' : {
                            fn: function(value) {
                                if (grecaptcha.getResponse().length > 0)
                                    return false;
                                else
                                    return true;
                            },
                            msg : '";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select CAPTCHA"), "html", null, true);
            yield "'
                        }
\t\t\t\t    ";
        }
        // line 111
        yield "                }
            });

            var LoginForm = Backbone.View.extend({
\t\t        el: 'form',
                events: {
                    'blur input': 'formChanged',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    this.model = new LoginModel();
                    Backbone.Validation.bind(this);
                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
                submit: function (e) {
                    e.preventDefault();
                    var data = this.\$el.serializeObject();

                    this.model.set(data);
                    if(this.model.isValid(true)){
                        this.\$el.submit();
                    }
                }
            });

\t\t    new LoginForm();
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
        return "@UVDeskCoreFramework/forgotPassword.html.twig";
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
        return array (  296 => 111,  290 => 108,  281 => 101,  279 => 100,  274 => 98,  268 => 95,  245 => 74,  241 => 72,  239 => 71,  233 => 69,  220 => 68,  203 => 61,  190 => 51,  187 => 50,  183 => 48,  177 => 45,  174 => 44,  172 => 43,  163 => 37,  156 => 33,  151 => 31,  144 => 26,  131 => 25,  105 => 8,  92 => 7,  69 => 3,  58 => 1,  56 => 5,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Forgot Password{% endblock %}

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
                        <h1>{{ \"Forgot Password\" |trans}}</h1>
                        <div class=\"uv-element-block\">
                            <p>{{ \"Enter your email address and we will send you an email with instructions to update your login credentials.\" |trans}}</p>
                        </div>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Email\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"email\" name=\"forgot_password_form[email]\">
                                </div>
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
                            <button class=\"uv-btn\">{{ 'Send Mail'|trans }}</button>
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
\t\t\$(function () {
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
                    'forgot_password_form[email]': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    },{
                        pattern: 'email',
                        msg: '{{ \"This is not a valid email address\"|trans }}'
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
\t\t        el: 'form',
                events: {
                    'blur input': 'formChanged',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    this.model = new LoginModel();
                    Backbone.Validation.bind(this);
                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
                submit: function (e) {
                    e.preventDefault();
                    var data = this.\$el.serializeObject();

                    this.model.set(data);
                    if(this.model.isValid(true)){
                        this.\$el.submit();
                    }
                }
            });

\t\t    new LoginForm();
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/forgotPassword.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/forgotPassword.html.twig");
    }
}
