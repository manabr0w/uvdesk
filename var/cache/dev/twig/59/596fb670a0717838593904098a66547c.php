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

/* @UVDeskCoreFramework/Email/emailSettings.html.twig */
class __TwigTemplate_085723e65eff2ed48b680503321efd69 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Email/emailSettings.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Email/emailSettings.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Email/emailSettings.html.twig", 1);
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

        yield "Email Settings";
        
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
        yield "    <div class=\"uv-inner-section\">
        ";
        // line 8
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 9
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 10
        yield "
\t\t";
        // line 11
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 11, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 11, $this->source); })())], "method", false, false, false, 11), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 11, $this->source); })())], "method", false, false, false, 11);
        yield "

        <div class=\"uv-view\">
            <div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <h1>
                        ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Settings"), "html", null, true);
        yield "
                    </h1>
                </div>
            </div>
            <div id=\"email-settings\">
\t\t\t</div>
\t\t</div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    <script id=\"email-settings-form-tempplate\" type=\"text/template\">
        <form id=\"email-settings-form\">\t\t\t
            <!-- .fade-out-white -->
            <div style=\"width: 500px;max-width: 80%;\">
                <!-- .jelly-out -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email Id"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input class=\"uv-field\" type=\"text\" name=\"id\" value='<%= (typeof(id) !== \"undefined\") ? id : \"\" %>'>
                    </div>
                </div>
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <input class=\"uv-field\" type=\"text\" name=\"name\" value='<%= (typeof(name) !== \"undefined\") ? name : \"\" %>'>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose configuration for sending mails"), "html", null, true);
        yield "</label>
                    <div class=\"uv-field-block\">
                        <select name=\"smtp[transport]\" id=\"mailboxOutgoingTransportType\" class=\"uv-select\">
                            <option value=\"\" <% if (typeof(mailer_type) == \"undefined\" || mailer_type == \"\") { %>selected<% } %>>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("None Selected"), "html", null, true);
        yield "</option>
                            <option value=\"outlook\" <% if (mailer_type == \"outlook\") { %>selected<% } %>>";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook"), "html", null, true);
        yield "</option>
                            <option value=\"swiftmailer_id\" <% if (mailer_type == \"swiftmailer_id\") { %>selected<% } %>>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer"), "html", null, true);
        yield "</option>
                        </select>
                    </div>
                </div>

                <div class=\"smtp-setting-references\"></div>

                <div class=\"uv-pop-up-actions\">
                    <button type=\"submit\" class=\"uv-btn save-email-settings\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Proceed"), "html", null, true);
        yield "</button>
                </div>
            </div>
        </form>
    </script>

    <script id=\"swift_mailer_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t <label class=\"uv-field-label\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swiftmailer id (Select from drop down)"), "html", null, true);
        yield "</label>
            <div class=\"uv-field-block\">
                <select name=\"mailer_id\" class=\"uv-select\" type=\"text\" value='<%= (typeof(mailer_id) !== \"undefined\") ? mailer_id : \"\" %>'>
                    <% if (typeof(mailer_id) == \"undefined\") { %>
                        <option>Select swiftmailer</option>
                    <% } %>

                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["swiftmailers"]) || array_key_exists("swiftmailers", $context) ? $context["swiftmailers"] : (function () { throw new RuntimeError('Variable "swiftmailers" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["swiftmailer"]) {
            // line 78
            yield "                        <option <%= typeof(mailer_id) !== 'undefined'  && mailer_id == \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["swiftmailer"], "html", null, true);
            yield "\"? selected=\"selected\" : \"\" %>>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["swiftmailer"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['swiftmailer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                </select>
            </div>
\t\t</div>
\t</script>

    <script id=\"outlook_oauth_smtp_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t <label class=\"uv-field-label\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outlook standard (Select from drop down)"), "html", null, true);
        yield "</label>
            <div class=\"uv-field-block\">
                <select name=\"mailer_id\" class=\"uv-select\" type=\"text\" value='<%= (typeof(mailer_id) !== \"undefined\") ? mailer_id : \"\" %>'>
                    <% if (typeof(mailer_id) == \"undefined\") { %>
                        <option>Select outlook mailbox</option>
                    <% } %>

                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["outlooks"]) || array_key_exists("outlooks", $context) ? $context["outlooks"] : (function () { throw new RuntimeError('Variable "outlooks" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["outlook"]) {
            // line 95
            yield "                        <option <%= typeof(mailer_id) !== 'undefined' && mailer_id == \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["outlook"], "html", null, true);
            yield "\" ? selected=\"selected\" : \"\" %>>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["outlook"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['outlook'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                </select>
            </div>
\t\t</div>
\t</script>

    <script type=\"text/javascript\">
        var emailSettingsModel = Backbone.Model.extend({
            defaults: {
                'id': \"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_settings"]) || array_key_exists("email_settings", $context) ? $context["email_settings"] : (function () { throw new RuntimeError('Variable "email_settings" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105), "html", null, true);
        yield "\",
                'name': \"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_settings"]) || array_key_exists("email_settings", $context) ? $context["email_settings"] : (function () { throw new RuntimeError('Variable "email_settings" does not exist.', 106, $this->source); })()), "name", [], "any", false, false, false, 106), "html", null, true);
        yield "\",                
                'mailer_id': \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_settings"]) || array_key_exists("email_settings", $context) ? $context["email_settings"] : (function () { throw new RuntimeError('Variable "email_settings" does not exist.', 107, $this->source); })()), "mailer_id", [], "any", false, false, false, 107), "html", null, true);
        yield "\",
                'mailer_type': \"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_settings"]) || array_key_exists("email_settings", $context) ? $context["email_settings"] : (function () { throw new RuntimeError('Variable "email_settings" does not exist.', 108, $this->source); })()), "mailer_type", [], "any", false, false, false, 108), "html", null, true);
        yield "\",
            },
            validation: {
                'id': [
                    {
\t\t\t\t\t\tpattern: 'email',
\t\t\t\t\t\tmsg: '";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a valid e-mail id"), "html", null, true);
        yield "'
\t\t\t\t\t},
                ],
                \"smtp[transport]\": function(value) {
                    if ('' == value) {
                        if (value == undefined || value == '') {
                            return \"Please select one active mailbox transport for sending mails\";
                        }
                    }
                },
                'name': [
                    {
                        required: true,
\t\t\t\t\t\tmsg: '";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please enter a mailer id"), "html", null, true);
        yield "'
                    },
                ],
                \"mailer_id\": function (id) {
\t\t\t\t\tif (id == \"Select swiftmailer\" || id == \"Select outlook mailbox\" || id == \"Select outlook app mailbox\")
\t\t\t\t\t\treturn '";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please select an active mailbox or swift mailer id"), "html", null, true);
        yield "';
\t\t\t\t},
            }
        });

        var emailSettingsForm = Backbone.View.extend({
            el: '#email-settings',
            model: new emailSettingsModel(),
            email_settings_form_template: _.template(\$('#email-settings-form-tempplate').html()),
            outlook_smtp_configuration_template: _.template(\$(\"#outlook_oauth_smtp_configuration_template\").html()),
            swift_mailer_configuration_template: _.template(\$(\"#swift_mailer_configuration_template\").html()),
\t\t    events : {
\t\t    \t'click .save-email-settings' : 'saveEmailSettings',
                'change #mailboxOutgoingTransportType': 'changeOutgoingTransportType',
\t\t    },
            initialize: function () {
                this.render();
                const transport = '";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["email_settings"] ?? null), "mailer_type", [], "any", true, true, false, 149)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email_settings"]) || array_key_exists("email_settings", $context) ? $context["email_settings"] : (function () { throw new RuntimeError('Variable "email_settings" does not exist.', 149, $this->source); })()), "mailer_type", [], "any", false, false, false, 149), "")) : ("")), "html", null, true);
        yield "'; // Safely retrieve the transport type

                if (transport) {
                    this.renderOutgoingTransportConfigurations(transport, true); // Render based on transport type
                }
            },
            render: function () {
                this.\$el.html(this.email_settings_form_template(this.model.toJSON()));
            },
            changeOutgoingTransportType: function(e) {
                let transport = \$(e.target).val();

                transport == '' ? \$('.smtp-setting-references').hide() : \$('.smtp-setting-references').show();
                this.renderOutgoingTransportConfigurations(transport);
            },
            renderOutgoingTransportConfigurations: function (transport,isInialize = false) {
                let data = this.model.toJSON(); // Get the current model data
                
                switch (transport) {
                    case 'outlook':
                        \$('.smtp-setting-references').html(this.outlook_smtp_configuration_template(data));
                        break;
                    case 'swiftmailer_id':
                        \$('.smtp-setting-references').html(this.swift_mailer_configuration_template(data));
                        break;
                    default:
                        \$('.smtp-setting-references').html(''); // Clear if no valid transport
                        break;
                }
            },
            saveEmailSettings: function (event) {
                event.preventDefault();
                Backbone.Validation.bind(this);
                var data = this.\$el.find('#email-settings-form').serializeObject();

                this.model.set(data);
                if (this.model.isValid(true)) {
\t\t\t\t\tapp.appView.showLoader();
                    this.model.save({}, {
                        url: \"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_update_emails_settings_xhr");
        yield "\",
                        success: function (model, response, options) {
        \t\t\t\t\tapp.appView.hideLoader();
                            this.model.attributes = response.email_settings;
                            app.appView.renderResponseAlert(response);
                        }.bind(this),
                        error: function (model, response, options) {
        \t\t\t\t\tapp.appView.hideLoader();
                        }
                    });
                }
            }
        });

        new emailSettingsForm();
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
        return "@UVDeskCoreFramework/Email/emailSettings.html.twig";
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
        return array (  398 => 188,  356 => 149,  336 => 132,  328 => 127,  312 => 114,  303 => 108,  299 => 107,  295 => 106,  291 => 105,  281 => 97,  270 => 95,  266 => 94,  256 => 87,  247 => 80,  236 => 78,  232 => 77,  222 => 70,  211 => 62,  200 => 54,  196 => 53,  192 => 52,  186 => 49,  176 => 42,  167 => 36,  155 => 28,  142 => 27,  122 => 17,  113 => 11,  110 => 10,  107 => 9,  104 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}Email Settings{% endblock %}

{% block pageContent %}
    <div class=\"uv-inner-section\">
        {# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

        <div class=\"uv-view\">
            <div class=\"uv-action-bar\">
                <div class=\"uv-action-bar-col-lt\">
                    <h1>
                        {{ 'Email Settings'|trans }}
                    </h1>
                </div>
            </div>
            <div id=\"email-settings\">
\t\t\t</div>
\t\t</div>
    </div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

    <script id=\"email-settings-form-tempplate\" type=\"text/template\">
        <form id=\"email-settings-form\">\t\t\t
            <!-- .fade-out-white -->
            <div style=\"width: 500px;max-width: 80%;\">
                <!-- .jelly-out -->
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Email Id'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input class=\"uv-field\" type=\"text\" name=\"id\" value='<%= (typeof(id) !== \"undefined\") ? id : \"\" %>'>
                    </div>
                </div>
                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <input class=\"uv-field\" type=\"text\" name=\"name\" value='<%= (typeof(name) !== \"undefined\") ? name : \"\" %>'>
                    </div>
                </div>

                <div class=\"uv-element-block\">
                    <label class=\"uv-field-label\">{{ 'Choose configuration for sending mails'|trans }}</label>
                    <div class=\"uv-field-block\">
                        <select name=\"smtp[transport]\" id=\"mailboxOutgoingTransportType\" class=\"uv-select\">
                            <option value=\"\" <% if (typeof(mailer_type) == \"undefined\" || mailer_type == \"\") { %>selected<% } %>>{{ 'None Selected'|trans }}</option>
                            <option value=\"outlook\" <% if (mailer_type == \"outlook\") { %>selected<% } %>>{{ 'Outlook'|trans }}</option>
                            <option value=\"swiftmailer_id\" <% if (mailer_type == \"swiftmailer_id\") { %>selected<% } %>>{{ 'Swift Mailer'|trans }}</option>
                        </select>
                    </div>
                </div>

                <div class=\"smtp-setting-references\"></div>

                <div class=\"uv-pop-up-actions\">
                    <button type=\"submit\" class=\"uv-btn save-email-settings\">{{ 'Proceed'|trans }}</button>
                </div>
            </div>
        </form>
    </script>

    <script id=\"swift_mailer_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t <label class=\"uv-field-label\">{{ 'Swiftmailer id (Select from drop down)'|trans }}</label>
            <div class=\"uv-field-block\">
                <select name=\"mailer_id\" class=\"uv-select\" type=\"text\" value='<%= (typeof(mailer_id) !== \"undefined\") ? mailer_id : \"\" %>'>
                    <% if (typeof(mailer_id) == \"undefined\") { %>
                        <option>Select swiftmailer</option>
                    <% } %>

                    {% for swiftmailer in swiftmailers %}
                        <option <%= typeof(mailer_id) !== 'undefined'  && mailer_id == \"{{swiftmailer}}\"? selected=\"selected\" : \"\" %>>{{ swiftmailer }}</option>
                    {% endfor %}
                </select>
            </div>
\t\t</div>
\t</script>

    <script id=\"outlook_oauth_smtp_configuration_template\" type=\"text/template\">
        <div class=\"uv-element-block\">
\t\t\t <label class=\"uv-field-label\">{{ 'Outlook standard (Select from drop down)'|trans }}</label>
            <div class=\"uv-field-block\">
                <select name=\"mailer_id\" class=\"uv-select\" type=\"text\" value='<%= (typeof(mailer_id) !== \"undefined\") ? mailer_id : \"\" %>'>
                    <% if (typeof(mailer_id) == \"undefined\") { %>
                        <option>Select outlook mailbox</option>
                    <% } %>

                    {% for outlook in outlooks %}
                        <option <%= typeof(mailer_id) !== 'undefined' && mailer_id == \"{{outlook}}\" ? selected=\"selected\" : \"\" %>>{{ outlook }}</option>
                    {% endfor %}
                </select>
            </div>
\t\t</div>
\t</script>

    <script type=\"text/javascript\">
        var emailSettingsModel = Backbone.Model.extend({
            defaults: {
                'id': \"{{ email_settings.id }}\",
                'name': \"{{ email_settings.name }}\",                
                'mailer_id': \"{{ email_settings.mailer_id }}\",
                'mailer_type': \"{{ email_settings.mailer_type }}\",
            },
            validation: {
                'id': [
                    {
\t\t\t\t\t\tpattern: 'email',
\t\t\t\t\t\tmsg: '{{ \"Please enter a valid e-mail id\"|trans }}'
\t\t\t\t\t},
                ],
                \"smtp[transport]\": function(value) {
                    if ('' == value) {
                        if (value == undefined || value == '') {
                            return \"Please select one active mailbox transport for sending mails\";
                        }
                    }
                },
                'name': [
                    {
                        required: true,
\t\t\t\t\t\tmsg: '{{ \"Please enter a mailer id\"|trans }}'
                    },
                ],
                \"mailer_id\": function (id) {
\t\t\t\t\tif (id == \"Select swiftmailer\" || id == \"Select outlook mailbox\" || id == \"Select outlook app mailbox\")
\t\t\t\t\t\treturn '{{ \"Please select an active mailbox or swift mailer id\"|trans }}';
\t\t\t\t},
            }
        });

        var emailSettingsForm = Backbone.View.extend({
            el: '#email-settings',
            model: new emailSettingsModel(),
            email_settings_form_template: _.template(\$('#email-settings-form-tempplate').html()),
            outlook_smtp_configuration_template: _.template(\$(\"#outlook_oauth_smtp_configuration_template\").html()),
            swift_mailer_configuration_template: _.template(\$(\"#swift_mailer_configuration_template\").html()),
\t\t    events : {
\t\t    \t'click .save-email-settings' : 'saveEmailSettings',
                'change #mailboxOutgoingTransportType': 'changeOutgoingTransportType',
\t\t    },
            initialize: function () {
                this.render();
                const transport = '{{ email_settings.mailer_type|default(\"\") }}'; // Safely retrieve the transport type

                if (transport) {
                    this.renderOutgoingTransportConfigurations(transport, true); // Render based on transport type
                }
            },
            render: function () {
                this.\$el.html(this.email_settings_form_template(this.model.toJSON()));
            },
            changeOutgoingTransportType: function(e) {
                let transport = \$(e.target).val();

                transport == '' ? \$('.smtp-setting-references').hide() : \$('.smtp-setting-references').show();
                this.renderOutgoingTransportConfigurations(transport);
            },
            renderOutgoingTransportConfigurations: function (transport,isInialize = false) {
                let data = this.model.toJSON(); // Get the current model data
                
                switch (transport) {
                    case 'outlook':
                        \$('.smtp-setting-references').html(this.outlook_smtp_configuration_template(data));
                        break;
                    case 'swiftmailer_id':
                        \$('.smtp-setting-references').html(this.swift_mailer_configuration_template(data));
                        break;
                    default:
                        \$('.smtp-setting-references').html(''); // Clear if no valid transport
                        break;
                }
            },
            saveEmailSettings: function (event) {
                event.preventDefault();
                Backbone.Validation.bind(this);
                var data = this.\$el.find('#email-settings-form').serializeObject();

                this.model.set(data);
                if (this.model.isValid(true)) {
\t\t\t\t\tapp.appView.showLoader();
                    this.model.save({}, {
                        url: \"{{ path('helpdesk_member_update_emails_settings_xhr') }}\",
                        success: function (model, response, options) {
        \t\t\t\t\tapp.appView.hideLoader();
                            this.model.attributes = response.email_settings;
                            app.appView.renderResponseAlert(response);
                        }.bind(this),
                        error: function (model, response, options) {
        \t\t\t\t\tapp.appView.hideLoader();
                        }
                    });
                }
            }
        });

        new emailSettingsForm();
    </script>
{% endblock %}
", "@UVDeskCoreFramework/Email/emailSettings.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Email/emailSettings.html.twig");
    }
}
