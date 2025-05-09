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

/* @UVDeskSupportCenter/CustomerLogin/customer-login.html.twig */
class __TwigTemplate_f95462d9bbd13ea4357628ecd5f99f75 extends Template
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
            'ogtitle' => [$this, 'block_ogtitle'],
            'twtitle' => [$this, 'block_twtitle'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/CustomerLogin/customer-login.html.twig"));

        // line 9
        $context["recaptchaDetail"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptcha_service"]) || array_key_exists("recaptcha_service", $context) ? $context["recaptcha_service"] : (function () { throw new RuntimeError('Variable "recaptcha_service" does not exist.', 9, $this->source); })()), "getRecaptchaDetails", [], "method", false, false, false, 9);
        // line 1
        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/CustomerLogin/customer-login.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Login"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Login"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_twtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Login"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaDescription(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer.login.metaDescription", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaKeywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("customer.login.metaKeywords", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "    <style>
        .uv-login-form-actions, .uv-login-form-inline-actions {
            list-style: none;
        }
        .uv-paper-article .uv-paper-section ul {
            padding: unset !important;
        }
    </style>
    <div class=\"uv-paper-article uv-paper-form\">
        <div class=\"uv-paper-section\">
            <section>
                <h1>";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign In to %websitename%", ["%websitename%" => (("<span class=\"uv-brand\">" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23))) . "</span>")]);
        yield "</h1>
                <div class=\"uv-element-block\">
                    <p>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you have ever contacted our support previously, your account would have already been created."), "html", null, true);
        yield "</p>
                </div>


                <div id=\"login-form-container\" class=\"login-form-container\">
                    <form action=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_login");
        yield "\" method=\"post\" id=\"login-form\" class=\"login-form\"></form>
                </div>

                <div style=\"margin-top:20px\">
                    ";
        // line 34
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 34, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 34, $this->source); })()), "isActive", [], "any", false, false, false, 34) == true))) {
            // line 35
            yield "                        <div class=\"clearfix\"></div>
                        <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 36, $this->source); })()), "siteKey", [], "any", false, false, false, 36), "html", null, true);
            yield "\"></div>
                        <div class=\"clearfix\"></div>
                    ";
        } else {
            // line 39
            yield "                            <!-- Recaptcha will not support -->
                    ";
        }
        // line 41
        yield "                </div>
            </section>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
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

        // line 48
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
    ";
        // line 49
        if (((isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 49, $this->source); })()) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["recaptchaDetail"]) || array_key_exists("recaptchaDetail", $context) ? $context["recaptchaDetail"] : (function () { throw new RuntimeError('Variable "recaptchaDetail" does not exist.', 49, $this->source); })()), "isActive", [], "any", false, false, false, 49) == true))) {
            // line 50
            yield "        <script src='https://www.google.com/recaptcha/api.js'></script>
    ";
        }
        // line 52
        yield "
    <script id=\"customer-login-form-base-credentials-template\" type=\"text/template\">
        ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/CustomerLogin/customer-login-form-base-credentials-template.html.twig");
        yield "
    </script>

    <script id=\"customer-login-form-otp-credentials-template\" type=\"text/template\">
        ";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig");
        yield "
    </script>

    <script id=\"customer-login-form-original-credentials-template\" type=\"text/template\">
        ";
        // line 62
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig");
        yield "
    </script>

    <script type=\"text/javascript\">
        _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);
        
        \$(function () {
            let BaseCredentialsModel = Backbone.Model.extend({
                defaults: {
                    _username: null, 
                }, 
                validation: {
                    _username: [{
                        required: true, 
                        msg: 'Please enter a valid email address'
                    }, {
                        pattern: 'email', 
                        msg: 'Please enter a valid email address'
                    }]
                },
            });

            let OtpCredentialsModel = Backbone.Model.extend({
                defaults: { 
                    _username: null, 
                    otp: null, 
                }, 
                validation: {
                    _username: [{
                        required: true, 
                        msg: 'Please enter a valid email address'
                    }, {
                        pattern: 'email', 
                        msg: 'Please enter a valid email address'
                    }], 
                    otp: [{
                        required: true,
                        msg: '";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }]
                }
            });

            let OriginalCredentialsModel = Backbone.Model.extend({
                defaults: { 
                    _username: null, 
                    _password: null, 
                }, 
                validation: {
                    _username: [{
                        required: true, 
                        msg: 'Please enter a valid email address'
                    }, {
                        pattern: 'email', 
                        msg: 'Please enter a valid email address'
                    }], 
                    _password: [{
                        required: true,
                        msg: '";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    }, {
                        minLength: 8,
                        msg: '";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contains 8 Characters"), "html", null, true);
        yield "'
                    }]
                }
            });

            let LoginForm = Backbone.View.extend({
                baseLoginFormTemplate: _.template(\$('#customer-login-form-base-credentials-template').html()), 
                otpLoginFormTemplate: _.template(\$('#customer-login-form-otp-credentials-template').html()), 
                originalLoginFormTemplate: _.template(\$('#customer-login-form-original-credentials-template').html()), 
                events: {
                    'submit .login-form': 'submitForm', 
                    'click .uv-continue-with-pass': 'switchToOriginalCredentialsForm',
                    'blur input': 'formChanged',
                    'click #uv-resend-otp': 'resendOTP'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
                    
                    this.formEl = \$('#login-form');
                    this.render();
                },
                formChanged: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                render: function() {
                    if (typeof(this.model) != undefined && this.model != null) {
                        if (this.model instanceof BaseCredentialsModel) {
                            this.formEl.html(this.baseLoginFormTemplate(this.model.attributes));
                        } else if (this.model instanceof OtpCredentialsModel) {
                            this.formEl.html(this.otpLoginFormTemplate(this.model.attributes));
                        } else if (this.model instanceof OriginalCredentialsModel) {
                            this.formEl.html(this.originalLoginFormTemplate(this.model.attributes));
                        }
                    }
                }, 
                submitForm: function(e) {
                    let _this = this;
                    let formData = this.formEl.serializeArray();

                    formData.forEach(function (element) {
                        _this.model.set(element.name, element.value);
                    });

                    if (this.model.isValid(true)) {
                        if (this.model instanceof BaseCredentialsModel) {
                            e.preventDefault();
                            
                            \$('#email-submit').attr('disabled', 'disabled');
                            
                            \$.ajax({
                                url: \"";
        // line 173
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_front_customer_login_otp_generate");
        yield "\",
                                type: 'POST',
                                data: this.model.attributes,
                                dataType: 'json',
                                success: function(response) {
                                    app.appView.renderResponseAlert({
                                        alertClass: response.success ? 'success' : 'danger',
                                        alertMessage: response.message
                                    });
                                
                                    _this.model = new OtpCredentialsModel(_this.model.attributes);

                                    Backbone.Validation.bind(_this);

                                    _this.render();
                                },
                                error: function (xhr) {
                                    \$('#email-submit').removeAttr('disabled', 'disabled');
                                    
                                    let errorMessage = typeof(xhr.responseJSON.message) != undefined && xhr.responseJSON.message != null ? xhr.responseJSON.message : 'An unexpected error occurred. Please try again later.';
                                    
                                    app.appView.renderResponseAlert({
                                        alertClass: 'danger',
                                        alertMessage: errorMessage
                                    });
                                }
                            });
                        } else if (this.model instanceof OtpCredentialsModel) {
                            e.preventDefault();

                            \$('#uv-resend-otp').removeAttr(\"disabled\");

                            let formData = this.formEl.serializeObject();

                            \$.ajax({
                                url: \"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_front_customer_verify_otp_login");
        yield "\",
                                type: 'POST',
                                data: formData,
                                dataType: 'json',
                                success: function(response) {
                                    console.log(response);
                                    if (response.success) {
                                        window.location.href = \"";
        // line 215
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_ticket_collection");
        yield "\";
                                    } else {
                                        app.appView.renderResponseAlert({
                                            alertClass: 'danger',
                                            alertMessage: response.message
                                        });
                                    }
                                },
                                error: function (xhr) {
                                    let errorMessage = typeof(xhr.responseJSON.message) != undefined && xhr.responseJSON.message != null ? xhr.responseJSON.message : 'An unexpected error occurred while verify credentials. Please try again later.';

                                    app.appView.renderResponseAlert({
                                        alertClass: 'danger',
                                        alertMessage: errorMessage
                                    });
                                }
                            });
                        }
                    } else {
                        e.preventDefault();
                    }
                }, 
                resendOTP: function(e){
                    e.preventDefault();
                   
                    let formData = this.formEl.serializeObject();
                    formData.resendKey = 'resendOtp';
                    var self = this;

                    \$.ajax({
                        url: \"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_knowledgebase_front_customer_login_otp_generate");
        yield "\",
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            app.appView.renderResponseAlert({
                                alertClass: response.success ? 'success' : 'danger',
                                alertMessage: response.message
                            });
                        },
                        error: function (xhr) {
                            let errorMessage = typeof(xhr.responseJSON.message) != undefined && xhr.responseJSON.message != null ? xhr.responseJSON.message : 'An unexpected error occurred while processing this request. Please try again later.';

                            app.appView.renderResponseAlert({
                                alertClass: 'danger',
                                alertMessage: errorMessage
                            });
                        }
                    });
                },
                switchToOriginalCredentialsForm: function(e) {
                    e.preventDefault();
                    
                    this.model = new OriginalCredentialsModel(this.model.attributes);
                    Backbone.Validation.bind(this);
                    
                    this.render();
                }
            });

            let loginForm = new LoginForm({
                el: \$('#login-form-container'), 
                model: new BaseCredentialsModel()
            });
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
        return "@UVDeskSupportCenter/CustomerLogin/customer-login.html.twig";
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
        return array (  509 => 245,  476 => 215,  466 => 208,  428 => 173,  374 => 122,  368 => 119,  345 => 99,  305 => 62,  298 => 58,  291 => 54,  287 => 52,  283 => 50,  281 => 49,  276 => 48,  263 => 47,  248 => 41,  244 => 39,  238 => 36,  235 => 35,  233 => 34,  226 => 30,  218 => 25,  213 => 23,  200 => 12,  187 => 11,  164 => 7,  141 => 6,  118 => 5,  95 => 4,  72 => 3,  61 => 1,  59 => 9,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block title %}{{ 'Customer Login'|trans }}{% endblock %}
{% block ogtitle %}{{ 'Customer Login'|trans }}{% endblock %}
{% block twtitle %}{{ 'Customer Login'|trans }}{% endblock %}
{% block metaDescription %}{% trans %}customer.login.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}customer.login.metaKeywords{% endtrans %}{% endblock %}

{% set recaptchaDetail = recaptcha_service.getRecaptchaDetails() %}

{% block body %}
    <style>
        .uv-login-form-actions, .uv-login-form-inline-actions {
            list-style: none;
        }
        .uv-paper-article .uv-paper-section ul {
            padding: unset !important;
        }
    </style>
    <div class=\"uv-paper-article uv-paper-form\">
        <div class=\"uv-paper-section\">
            <section>
                <h1>{{ 'Sign In to %websitename%'|trans({ '%websitename%': '<span class=\"uv-brand\">' ~ websiteDetails.name|e ~ '</span>' })|raw }}</h1>
                <div class=\"uv-element-block\">
                    <p>{{ 'If you have ever contacted our support previously, your account would have already been created.'|trans }}</p>
                </div>


                <div id=\"login-form-container\" class=\"login-form-container\">
                    <form action=\"{{ path('helpdesk_customer_login')}}\" method=\"post\" id=\"login-form\" class=\"login-form\"></form>
                </div>

                <div style=\"margin-top:20px\">
                    {% if recaptchaDetail and recaptchaDetail.isActive == true %}
                        <div class=\"clearfix\"></div>
                        <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptchaDetail.siteKey }}\"></div>
                        <div class=\"clearfix\"></div>
                    {% else %}
                            <!-- Recaptcha will not support -->
                    {% endif %}
                </div>
            </section>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}
    {% if recaptchaDetail and recaptchaDetail.isActive == true %}
        <script src='https://www.google.com/recaptcha/api.js'></script>
    {% endif %}

    <script id=\"customer-login-form-base-credentials-template\" type=\"text/template\">
        {{ include('@UVDeskSupportCenter/CustomerLogin/customer-login-form-base-credentials-template.html.twig') }}
    </script>

    <script id=\"customer-login-form-otp-credentials-template\" type=\"text/template\">
        {{ include('@UVDeskSupportCenter/CustomerLogin/customer-login-form-otp-credentials-template.html.twig') }}
    </script>

    <script id=\"customer-login-form-original-credentials-template\" type=\"text/template\">
        {{ include('@UVDeskSupportCenter/CustomerLogin/customer-login-form-original-credentials-template.html.twig') }}
    </script>

    <script type=\"text/javascript\">
        _.extend(Backbone.Model.prototype, Backbone.Validation.mixin);
        
        \$(function () {
            let BaseCredentialsModel = Backbone.Model.extend({
                defaults: {
                    _username: null, 
                }, 
                validation: {
                    _username: [{
                        required: true, 
                        msg: 'Please enter a valid email address'
                    }, {
                        pattern: 'email', 
                        msg: 'Please enter a valid email address'
                    }]
                },
            });

            let OtpCredentialsModel = Backbone.Model.extend({
                defaults: { 
                    _username: null, 
                    otp: null, 
                }, 
                validation: {
                    _username: [{
                        required: true, 
                        msg: 'Please enter a valid email address'
                    }, {
                        pattern: 'email', 
                        msg: 'Please enter a valid email address'
                    }], 
                    otp: [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }]
                }
            });

            let OriginalCredentialsModel = Backbone.Model.extend({
                defaults: { 
                    _username: null, 
                    _password: null, 
                }, 
                validation: {
                    _username: [{
                        required: true, 
                        msg: 'Please enter a valid email address'
                    }, {
                        pattern: 'email', 
                        msg: 'Please enter a valid email address'
                    }], 
                    _password: [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                    }, {
                        minLength: 8,
                        msg: '{{ \"Password must contains 8 Characters\"|trans }}'
                    }]
                }
            });

            let LoginForm = Backbone.View.extend({
                baseLoginFormTemplate: _.template(\$('#customer-login-form-base-credentials-template').html()), 
                otpLoginFormTemplate: _.template(\$('#customer-login-form-otp-credentials-template').html()), 
                originalLoginFormTemplate: _.template(\$('#customer-login-form-original-credentials-template').html()), 
                events: {
                    'submit .login-form': 'submitForm', 
                    'click .uv-continue-with-pass': 'switchToOriginalCredentialsForm',
                    'blur input': 'formChanged',
                    'click #uv-resend-otp': 'resendOTP'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
                    
                    this.formEl = \$('#login-form');
                    this.render();
                },
                formChanged: function(e) {
                    this.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
                    this.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
                },
                render: function() {
                    if (typeof(this.model) != undefined && this.model != null) {
                        if (this.model instanceof BaseCredentialsModel) {
                            this.formEl.html(this.baseLoginFormTemplate(this.model.attributes));
                        } else if (this.model instanceof OtpCredentialsModel) {
                            this.formEl.html(this.otpLoginFormTemplate(this.model.attributes));
                        } else if (this.model instanceof OriginalCredentialsModel) {
                            this.formEl.html(this.originalLoginFormTemplate(this.model.attributes));
                        }
                    }
                }, 
                submitForm: function(e) {
                    let _this = this;
                    let formData = this.formEl.serializeArray();

                    formData.forEach(function (element) {
                        _this.model.set(element.name, element.value);
                    });

                    if (this.model.isValid(true)) {
                        if (this.model instanceof BaseCredentialsModel) {
                            e.preventDefault();
                            
                            \$('#email-submit').attr('disabled', 'disabled');
                            
                            \$.ajax({
                                url: \"{{ path('helpdesk_member_knowledgebase_front_customer_login_otp_generate') }}\",
                                type: 'POST',
                                data: this.model.attributes,
                                dataType: 'json',
                                success: function(response) {
                                    app.appView.renderResponseAlert({
                                        alertClass: response.success ? 'success' : 'danger',
                                        alertMessage: response.message
                                    });
                                
                                    _this.model = new OtpCredentialsModel(_this.model.attributes);

                                    Backbone.Validation.bind(_this);

                                    _this.render();
                                },
                                error: function (xhr) {
                                    \$('#email-submit').removeAttr('disabled', 'disabled');
                                    
                                    let errorMessage = typeof(xhr.responseJSON.message) != undefined && xhr.responseJSON.message != null ? xhr.responseJSON.message : 'An unexpected error occurred. Please try again later.';
                                    
                                    app.appView.renderResponseAlert({
                                        alertClass: 'danger',
                                        alertMessage: errorMessage
                                    });
                                }
                            });
                        } else if (this.model instanceof OtpCredentialsModel) {
                            e.preventDefault();

                            \$('#uv-resend-otp').removeAttr(\"disabled\");

                            let formData = this.formEl.serializeObject();

                            \$.ajax({
                                url: \"{{ path('helpdesk_member_knowledgebase_front_customer_verify_otp_login') }}\",
                                type: 'POST',
                                data: formData,
                                dataType: 'json',
                                success: function(response) {
                                    console.log(response);
                                    if (response.success) {
                                        window.location.href = \"{{ path('helpdesk_customer_ticket_collection') }}\";
                                    } else {
                                        app.appView.renderResponseAlert({
                                            alertClass: 'danger',
                                            alertMessage: response.message
                                        });
                                    }
                                },
                                error: function (xhr) {
                                    let errorMessage = typeof(xhr.responseJSON.message) != undefined && xhr.responseJSON.message != null ? xhr.responseJSON.message : 'An unexpected error occurred while verify credentials. Please try again later.';

                                    app.appView.renderResponseAlert({
                                        alertClass: 'danger',
                                        alertMessage: errorMessage
                                    });
                                }
                            });
                        }
                    } else {
                        e.preventDefault();
                    }
                }, 
                resendOTP: function(e){
                    e.preventDefault();
                   
                    let formData = this.formEl.serializeObject();
                    formData.resendKey = 'resendOtp';
                    var self = this;

                    \$.ajax({
                        url: \"{{ path('helpdesk_member_knowledgebase_front_customer_login_otp_generate') }}\",
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            app.appView.renderResponseAlert({
                                alertClass: response.success ? 'success' : 'danger',
                                alertMessage: response.message
                            });
                        },
                        error: function (xhr) {
                            let errorMessage = typeof(xhr.responseJSON.message) != undefined && xhr.responseJSON.message != null ? xhr.responseJSON.message : 'An unexpected error occurred while processing this request. Please try again later.';

                            app.appView.renderResponseAlert({
                                alertClass: 'danger',
                                alertMessage: errorMessage
                            });
                        }
                    });
                },
                switchToOriginalCredentialsForm: function(e) {
                    e.preventDefault();
                    
                    this.model = new OriginalCredentialsModel(this.model.attributes);
                    Backbone.Validation.bind(this);
                    
                    this.render();
                }
            });

            let loginForm = new LoginForm({
                el: \$('#login-form-container'), 
                model: new BaseCredentialsModel()
            });
        });
    </script>
{% endblock %}", "@UVDeskSupportCenter/CustomerLogin/customer-login.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/CustomerLogin/customer-login.html.twig");
    }
}
