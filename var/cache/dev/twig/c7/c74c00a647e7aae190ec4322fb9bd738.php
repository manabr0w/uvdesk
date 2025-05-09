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

/* @UVDeskCoreFramework/resetPassword.html.twig */
class __TwigTemplate_ba55b0c2fa1459678ca1a5c945855eec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/resetPassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/resetPassword.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/resetPassword.html.twig", 1);
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

        yield "Reset Password";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
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

    // line 23
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

        // line 24
        yield "    <div class=\"uv-large-box-plank\">
\t\t<div class=\"uv-large-box-rt\">
\t\t\t<div class=\"uv-center-box uv-text-center\">
                <form action=\"\" method=\"post\" id=\"resetPasswordForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset Password"), "html", null, true);
        yield "</h1>
                        <p>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your new password below to update your login credentials"), "html", null, true);
        yield "</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
        yield "</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"confirmPassword\">
                                </div>
                            </div>

                            <button class=\"uv-btn\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Password"), "html", null, true);
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
        // line 56
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

    // line 63
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

        // line 64
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
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

\t\t\tvar ResetPasswordModel = Backbone.Model.extend({
                validation: {
                    'password': [{
                        required: true,
                        msg: '";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                        },{
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d)(?=.*[^\\w\\s]|.*_)[^\\s]{8,}\$/,
                        msg: '";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed)."), "html", null, true);
        yield "'
                    }],
                    'confirmPassword': [{
                        required: true,
                        msg: '";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                    },{
                        equalTo: 'password',
                        msg: '";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        yield "'
                    }]
                }
\t\t\t});

\t\t\tvar ResetPasswordForm = Backbone.View.extend({
                events: {
                    'blur input': 'formChanged',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);

\t\t\t\t\t";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 108)) {
            // line 109
            yield "                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 109, $this->source); })()), "messageKey", [], "any", false, false, false, 109), "html", null, true);
            yield "\"})
                    ";
        }
        // line 111
        yield "                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsubmit: function (e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\tvar data = this.\$el.serializeObject();
                    this.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)){
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t    var view = new ResetPasswordForm({
\t\t        el: '#resetPasswordForm',
\t\t        model: new ResetPasswordModel()
\t\t    });
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
        return "@UVDeskCoreFramework/resetPassword.html.twig";
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
        return array (  288 => 111,  282 => 109,  280 => 108,  264 => 95,  258 => 92,  251 => 88,  245 => 85,  220 => 64,  207 => 63,  190 => 56,  177 => 46,  168 => 40,  158 => 33,  152 => 30,  148 => 29,  141 => 24,  128 => 23,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Reset Password{% endblock %}

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
                <form action=\"\" method=\"post\" id=\"resetPasswordForm\">
                    <div class=\"uv-adjacent-center\">
                        <h1>{{ \"Reset Password\" |trans}}</h1>
                        <p>{{ \"Enter your new password below to update your login credentials\" |trans}}</p>
                        <div class=\"uv-adjacent-form\">
                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Password\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"password\">
                                </div>
                            </div>

                            <div class=\"uv-adjacent-element-block\">
                                <label>{{ \"Confirm Password\" |trans}}</label>
                                <div class=\"uv-max-field\">
                                    <input class=\"uv-field\" type=\"password\" name=\"confirmPassword\">
                                </div>
                            </div>

                            <button class=\"uv-btn\">{{ 'Save Password'|trans }}</button>
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

\t\t\tvar ResetPasswordModel = Backbone.Model.extend({
                validation: {
                    'password': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                        },{
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d)(?=.*[^\\w\\s]|.*_)[^\\s]{8,}\$/,
                        msg: '{{ \"Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed).\"|trans }}'
                    }],
                    'confirmPassword': [{
                        required: true,
                        msg: '{{\"This field is mandatory\"|trans }}'
                    },{
                        equalTo: 'password',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    }]
                }
\t\t\t});

\t\t\tvar ResetPasswordForm = Backbone.View.extend({
                events: {
                    'blur input': 'formChanged',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);

\t\t\t\t\t{% if error.messageKey is defined %}
                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': \"{{ error.messageKey }}\"})
                    {% endif %}
                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsubmit: function (e) {
\t\t\t\t\te.preventDefault();

\t\t\t\t\tvar data = this.\$el.serializeObject();
                    this.model.set(data);
\t\t\t\t\tif(this.model.isValid(true)){
\t\t\t\t\t\tthis.\$el.submit();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});

\t\t    var view = new ResetPasswordForm({
\t\t        el: '#resetPasswordForm',
\t\t        model: new ResetPasswordModel()
\t\t    });
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/resetPassword.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/resetPassword.html.twig");
    }
}
