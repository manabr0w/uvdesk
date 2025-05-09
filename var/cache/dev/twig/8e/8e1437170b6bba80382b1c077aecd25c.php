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

/* @UVDeskCoreFramework/slaSnippet.html.twig */
class __TwigTemplate_7894a683aa8a4e36f94646e9595f38d5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/slaSnippet.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/slaSnippet.html.twig"));

        // line 1
        yield "<style>
    .uv-icon-resolve {
        background-position: -38px 18px;
    }
    .uv-icon-resolve-pending {
        background-position: -19px 18px;
    }
</style>

<script type=\"text/template\" id=\"sla-aside-temp\">
    <% if (typeof(responseTime) != 'undefined' && responseTime != '') { %>
        <div class=\"uv-aside-ticket-brick\">
            <h3>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Response Due"), "html", null, true);
        yield "</h3>
            <span class=\"uv-channel uv-icon-resolve <% if('undefined' != typeof(responseTimePassed) && responseTimePassed) print('uv-icon-resolve-pending') %>\"></span>
            <span><%- responseTime %></span>
        </div>
    <% } %>

    <% if (typeof(resolveTime) != 'undefined' && resolveTime != '') { %>
        <div class=\"uv-aside-ticket-brick\">
            <h3>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolution Due"), "html", null, true);
        yield "</h3>
            <span class=\"uv-channel uv-icon-resolve <% if('undefined' != typeof(resolveTimePassed) && resolveTimePassed) print('uv-icon-resolve-pending') %>\"></span>
            <span><%- resolveTime %></span>
        </div>
    <% } %>
</script>

<script>
    var SLA = Backbone.View.extend({
        el: '.uv-aside .uv-aside-ticket-block',
        template: _.template(\$('#sla-aside-temp').html()),
        syncData: function() {
            var url = '";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_sla_esclation_data_xhr");
        yield "'
            var self = this;

            \$.ajax({
                'url': url,
                success: function(response) {
                    self.render(response);
                },
                error: function(xhr) {
                    console.log('error: sla ajax not responded');
                },
            });
        },
        render: function(response) {
            this.\$el.append(this.template(response));
        },
    });

    \$(function() {
        var sla = new SLA();

        setTimeout(function() {
            sla.syncData();
        }, 1000);        
    });
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskCoreFramework/slaSnippet.html.twig";
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
        return array (  88 => 33,  73 => 21,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    .uv-icon-resolve {
        background-position: -38px 18px;
    }
    .uv-icon-resolve-pending {
        background-position: -19px 18px;
    }
</style>

<script type=\"text/template\" id=\"sla-aside-temp\">
    <% if (typeof(responseTime) != 'undefined' && responseTime != '') { %>
        <div class=\"uv-aside-ticket-brick\">
            <h3>{{ 'Response Due'|trans }}</h3>
            <span class=\"uv-channel uv-icon-resolve <% if('undefined' != typeof(responseTimePassed) && responseTimePassed) print('uv-icon-resolve-pending') %>\"></span>
            <span><%- responseTime %></span>
        </div>
    <% } %>

    <% if (typeof(resolveTime) != 'undefined' && resolveTime != '') { %>
        <div class=\"uv-aside-ticket-brick\">
            <h3>{{ 'Resolution Due'|trans }}</h3>
            <span class=\"uv-channel uv-icon-resolve <% if('undefined' != typeof(resolveTimePassed) && resolveTimePassed) print('uv-icon-resolve-pending') %>\"></span>
            <span><%- resolveTime %></span>
        </div>
    <% } %>
</script>

<script>
    var SLA = Backbone.View.extend({
        el: '.uv-aside .uv-aside-ticket-block',
        template: _.template(\$('#sla-aside-temp').html()),
        syncData: function() {
            var url = '{{ path(\"helpdesk_sla_esclation_data_xhr\") }}'
            var self = this;

            \$.ajax({
                'url': url,
                success: function(response) {
                    self.render(response);
                },
                error: function(xhr) {
                    console.log('error: sla ajax not responded');
                },
            });
        },
        render: function(response) {
            this.\$el.append(this.template(response));
        },
    });

    \$(function() {
        var sla = new SLA();

        setTimeout(function() {
            sla.syncData();
        }, 1000);        
    });
</script>", "@UVDeskCoreFramework/slaSnippet.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/slaSnippet.html.twig");
    }
}
