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

/* @UVDeskSupportCenter/Knowledgebase/resetPassword.html.twig */
class __TwigTemplate_2d0760f2d9e06974a881bd982462a84a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/resetPassword.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Knowledgebase/resetPassword.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskSupportCenter/Templates/layout.html.twig", "@UVDeskSupportCenter/Knowledgebase/resetPassword.html.twig", 1);
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account Validation", [], "messages");
        
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account Validation", [], "messages");
        
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account Validation", [], "messages");
        
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("account.validation.metaDescription", [], "messages");
        
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

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("account.validation.metaKeywords", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <div class=\"uv-paper-article uv-paper-form\">
        <div class=\"uv-paper-section\">
            <form action=\"\" method=\"post\" id=\"resetPasswordForm\">
                <section>
                    <h1>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset Password"), "html", null, true);
        yield "</h1>
                    <div class=\"uv-element-block\">
                        <p>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter your new password below to update your login credentials"), "html", null, true);
        yield "</p>
                    </div>

                    <div class=\"uv-form\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>
                            <div class=\"uv-field-block uv-relative\">
                                <input class=\"uv-field\" type=\"password\" name=\"password\">
                            </div>
                        </div>
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm Password"), "html", null, true);
        yield "</label>
                            <div class=\"uv-field-block uv-relative\">
                                <input class=\"uv-field\" type=\"password\" name=\"confirmPassword\">
                            </div>
                        </div>

                        <button class=\"uv-btn\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Password"), "html", null, true);
        yield "</button>
                    </div>
                </section>
            </form>
        </div>
       
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar ResetPasswordModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
                    'password': [{
                        required: true,
                        msg: '";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "'
                        }, {
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d)(?=.*[^\\w\\s]|.*_)[^\\s]{8,}\$/,
                        msg: '";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed)."), "html", null, true);
        yield "'
                    }],
                    'confirmPassword': {
                        equalTo: 'password',
                        msg: '";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The passwords does not match"), "html", null, true);
        yield "'
                    },
\t\t\t\t}
\t\t\t});

\t\t\tvar ResetPasswordForm = Backbone.View.extend({
                events: {
                    'blur input': 'formChanged',
                    'click .uv-btn': 'submit'
                },
                initialize: function () {
                    Backbone.Validation.bind(this);
\t\t\t\t\t";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 68)) {
            // line 69
            yield "                        app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 69, $this->source); })()), "messageKey", [], "any", false, false, false, 69), "html", null, true);
            yield "\"})
                    ";
        }
        // line 71
        yield "                },
                formChanged: function(e) {
\t\t\t    \tthis.model.set(Backbone.\$(e.currentTarget).attr('name'), Backbone.\$(e.currentTarget).val())
\t\t\t    \tthis.model.isValid([Backbone.\$(e.currentTarget).attr('name')])
\t\t\t    },
\t\t\t\tsubmit: function (e) {
\t\t\t\t\te.preventDefault()

\t\t\t\t\tvar data = this.\$el.serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif (this.model.isValid(true)) {
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
        return "@UVDeskSupportCenter/Knowledgebase/resetPassword.html.twig";
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
        return array (  313 => 71,  307 => 69,  305 => 68,  290 => 56,  283 => 52,  277 => 49,  266 => 42,  253 => 41,  234 => 33,  225 => 27,  216 => 21,  208 => 16,  203 => 14,  197 => 10,  184 => 9,  161 => 7,  138 => 6,  115 => 5,  92 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskSupportCenter/Templates/layout.html.twig\" %}

{% block title %}{% trans %}Account Validation{% endtrans %}{% endblock %}
{% block ogtitle %}{% trans %}Account Validation{% endtrans %}{% endblock %}
{% block twtitle %}{% trans %}Account Validation{% endtrans %}{% endblock %}
{% block metaDescription %}{% trans %}account.validation.metaDescription{% endtrans %}{% endblock %}
{% block metaKeywords %}{% trans %}account.validation.metaKeywords{% endtrans %}{% endblock %}

{% block body %}
    <div class=\"uv-paper-article uv-paper-form\">
        <div class=\"uv-paper-section\">
            <form action=\"\" method=\"post\" id=\"resetPasswordForm\">
                <section>
                    <h1>{{ 'Reset Password'|trans }}</h1>
                    <div class=\"uv-element-block\">
                        <p>{{ 'Enter your new password below to update your login credentials'|trans }}</p>
                    </div>

                    <div class=\"uv-form\">
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
                            <div class=\"uv-field-block uv-relative\">
                                <input class=\"uv-field\" type=\"password\" name=\"password\">
                            </div>
                        </div>
                        <div class=\"uv-element-block\">
                            <label class=\"uv-field-label\">{{ 'Confirm Password'|trans }}</label>
                            <div class=\"uv-field-block uv-relative\">
                                <input class=\"uv-field\" type=\"password\" name=\"confirmPassword\">
                            </div>
                        </div>

                        <button class=\"uv-btn\">{{ 'Save Password'|trans }}</button>
                    </div>
                </section>
            </form>
        </div>
       
    </div>
{% endblock %}
{% block footer %}
\t{{ parent() }}
\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar ResetPasswordModel = Backbone.Model.extend({
\t\t\t\tvalidation: {
                    'password': [{
                        required: true,
                        msg: '{{ \"This field is mandatory\"|trans }}'
                        }, {
                        pattern: /^(?=(.*[a-zA-Z].*){2,})(?=.*\\d)(?=.*[^\\w\\s]|.*_)[^\\s]{8,}\$/,
                        msg: '{{ \"Password must contain minimum 8 character length, at least two letters (not case sensitive), one number, one special character(space is not allowed).\"|trans }}'
                    }],
                    'confirmPassword': {
                        equalTo: 'password',
                        msg: '{{ \"The passwords does not match\"|trans }}'
                    },
\t\t\t\t}
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
\t\t\t\t\te.preventDefault()

\t\t\t\t\tvar data = this.\$el.serializeObject();
\t\t\t\t\tthis.model.set(data);
\t\t\t\t\tif (this.model.isValid(true)) {
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
{% endblock %}", "@UVDeskSupportCenter/Knowledgebase/resetPassword.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Knowledgebase/resetPassword.html.twig");
    }
}
