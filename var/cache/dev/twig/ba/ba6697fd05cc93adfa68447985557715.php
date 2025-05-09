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

/* @UVDeskAutomation/Workflow/events.html.twig */
class __TwigTemplate_ca46a3f06a8e1ee657cefbd560e28483 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/events.html.twig"));

        // line 1
        $context["workflowAccess"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1, $this->source); })()), "isAccessAuthorized", ["workflows_addaction"], "method", false, false, false, 1);
        // line 2
        yield "
<script type=\"text/template\" id=\"event-add\">
\t<select class=\"uv-select uv-select-grouped select-event wfEvents\" name=\"events[<%- keyNo %>][event]\" <%- typeof(event) != 'undefined' && event ? \"disabled=disabled\" : '' %>  style=\"width: 300px;\">
\t\t<option value=\"\">";
        // line 5
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select an Event", [], "messages");
        yield "</option>
\t\t<% for(var key in events){ %>
\t\t\t<option value=\"<%= key %>\" <%- typeof(event) != 'undefined' && event == key ? 'selected' : '' %>><%= events[key] %></option>
\t\t<% } %>
\t</select>

\t<span class=\"apply-event\">
\t\t<a class=\"uv-btn-tag remove-event-select\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></a>
\t</span>

\t<p class=\"uv-field-message\" style=\"display: none;\"></p>
</script>

<script type=\"text/template\" id=\"event-value-select\">
\t<select class=\"uv-select uv-select-grouped wfEventTriggers\" name=\"events[<%- keyNo %>][trigger]\" style=\"width: 300px;\">
\t\t<% for (var key in triggers) { %>
\t\t\t<option value=\"<%= key %>\" <%- typeof(trigger) != 'undefined' && trigger == key ? 'selected' : '' %>><%= triggers[key] %></option>
\t\t<% } %>
\t</select>
</script>

<script type=\"text/javascript\">
\tvar workflowAccess = ";
        // line 27
        yield (((isset($context["workflowAccess"]) || array_key_exists("workflowAccess", $context) ? $context["workflowAccess"] : (function () { throw new RuntimeError('Variable "workflowAccess" does not exist.', 27, $this->source); })())) ? (1) : (0));
        yield ";

\tif(typeof(sB) == 'undefined'){
\t\tvar sB = {};
\t}

\tsB.eventRow = sB.PrevEvent = 0;
\tsB.JsonEvents = JSON.parse(\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_automations"]) || array_key_exists("uvdesk_automations", $context) ? $context["uvdesk_automations"] : (function () { throw new RuntimeError('Variable "uvdesk_automations" does not exist.', 34, $this->source); })()), "getWorkflowEvents", [], "method", false, false, false, 34)), "js"), "html", null, true);
        yield "\");
\tsB.MatchEvents = JSON.parse(\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_automations"]) || array_key_exists("uvdesk_automations", $context) ? $context["uvdesk_automations"] : (function () { throw new RuntimeError('Variable "uvdesk_automations" does not exist.', 35, $this->source); })()), "getWorkflowEventValues", [], "method", false, false, false, 35)), "js"), "html", null, true);
        yield "\");

\tsB.EventSelectView = Backbone.View.extend({
\t\ttagName: 'div',
\t\tclassName: 'uv-field-block workflow-event',
\t\teventTemplate: _.template(\$('#event-add').html()),
\t\tvalueSelectTemplate: _.template(\$('#event-value-select').html()),
\t\tevents: {
\t\t\t'change .select-event': 'selectOption',
\t\t\t'change .apply-event': 'selectValue',
\t\t\t'click .remove-event-select': 'removeSelect'
\t\t},
\t\tinitialize: function() {
\t\t\t(this.model == undefined || this.model.altKey != undefined) ? this.model = {'event': sB.PrevEvent ? sB.PrevEvent : 0} : false;
\t\t\tthis.keyNo = sB.eventRow;
\t\t\tsB.eventRow++;
\t\t},
\t\trender: function() {
\t\t\tthis.\$el.html(this.eventTemplate(_.extend(this.model, {'keyNo': this.keyNo, 'events': sB.JsonEvents})));
\t\t\treturn this;
\t\t},
\t\tremoveSelect: function(e) {
\t\t\tif (\$('.uv-field-block.workflow-event').length > 1) {
\t\t\t\tthis.remove();
\t\t\t\tthis.firstEnable();
\t\t\t} else {
\t\t\t\t\$(this.el).find('.uv-field-message').html(\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is required"), "html", null, true);
        yield "\").fadeIn(0);
\t\t\t}
\t\t},
\t\tselectOption: function(e) {
\t\t\tif (e.target.value != sB.PrevEvent) {
\t\t\t\t\$('#events').find('.workflow-event').not(this.\$el).remove();
\t\t\t\tsB.PrevEvent = e.target.value;
\t\t\t\tif (typeof(sB.ActionSelectViews) != 'undefined') {
\t\t\t\t\tsB.actionselectView.clearHtml();
\t\t\t\t}
\t\t\t\tif (typeof(sB.SelectViews) != 'undefined') {
\t\t\t\t\tsB.selectView.clearHtml();
\t\t\t\t}
\t\t\t}

\t\t\tthis.firstEnable();
\t\t\tvar value = sB.PrevEvent = e.target.value;
\t\t\tthis.updateButtonHref(value);
\t\t\tthis.siblingValue = this.\$el.find('.apply-event');
\t\t\tthis.siblingValue.find('.uv-select').remove();
\t\t\tthis.siblingValue.prepend(this.valueSelectTemplate(_.extend(this.model, {'triggers' : sB.MatchEvents[value], 'keyNo': this.keyNo})));
\t\t},
\t\tupdateButtonHref: function(value) {
\t\t\tif (value) {
\t\t\t\tif (value == 'customer' || value == 'agent') {
\t\t\t\t\t\$('#events').find('.btn-next').attr('href', '#actions');
\t\t\t\t\t\$('#actions').find('.btn-prev').attr('href', '#events');
\t\t\t\t} else {
\t\t\t\t\t\$('#events').find('.btn-next').attr('href', '#conditions');
\t\t\t\t\t\$('#actions').find('.btn-prev').attr('href', '#conditions');
\t\t\t\t}
\t\t\t}
\t\t},
\t\tfirstEnable: function() {
\t\t\tif (workflowAccess) {
\t\t\t\t\$('#events').find('.workflow-event').eq(0).find('.uv-select.wfEvents').attr('disabled', false);
\t\t\t}
\t\t},
\t\tselectValue: function(e) {
\t\t\tsB.eventselectView.removeduplicate(e);
\t\t\tthis.firstEnable();
\t\t}
\t});

\tsB.EventSelectViews = Backbone.View.extend({
\t\tel: '.uv-view',
\t\ttarget: \$('#events .workflow-event-body'),
\t\tinitialize: function(){
\t\t\t";
        // line 109
        if (((isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 109, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "events", [], "any", true, true, false, 109))) {
            // line 110
            yield "\t\t\t\tthis.createEvents(\$.parseJSON(\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 110, $this->source); })()), "events", [], "any", false, false, false, 110)), "js"), "html", null, true);
            yield "\"));
\t\t\t";
        } else {
            // line 112
            yield "\t\t\t\tthis.addSelect();
\t\t\t";
        }
        // line 114
        yield "\t\t},
\t\tevents: {
\t\t\t'click #events .btn-add': 'addSelect',
\t\t},
\t\tcreateEvents: function(eventPreviouslyAdded) {
\t\t\t_.each(eventPreviouslyAdded, this.addSelect, this);
\t\t},
\t\taddSelect: function(eventModel) {
\t\t\tvar view = new sB.EventSelectView({model: eventModel});
\t        this.target.append(viewEl = view.render().el); 
\t        // if (typeof(eventModel.type) == 'undefined' && typeof(eventModel.trigger) != 'undefined')
\t        \tthis.\$(viewEl).find('select.wfEvents').trigger('change');
\t\t},
\t\tremoveduplicate: function(e) {
\t\t\t// remove already exits elements - select
\t\t    \$('.apply-event select').each(function() {
\t\t\t\tif (this.value == e.target.value) {
\t\t\t\t\t\$(this).not(e.target).parents('tr').remove();
\t\t\t\t}
\t\t    })
\t\t},
\t});

\tsB.eventselectView = new sB.EventSelectViews();
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
        return "@UVDeskAutomation/Workflow/events.html.twig";
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
        return array (  186 => 114,  182 => 112,  176 => 110,  174 => 109,  123 => 61,  94 => 35,  90 => 34,  80 => 27,  55 => 5,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set workflowAccess = user_service.isAccessAuthorized('workflows_addaction') %}

<script type=\"text/template\" id=\"event-add\">
\t<select class=\"uv-select uv-select-grouped select-event wfEvents\" name=\"events[<%- keyNo %>][event]\" <%- typeof(event) != 'undefined' && event ? \"disabled=disabled\" : '' %>  style=\"width: 300px;\">
\t\t<option value=\"\">{% trans %}Select an Event{% endtrans %}</option>
\t\t<% for(var key in events){ %>
\t\t\t<option value=\"<%= key %>\" <%- typeof(event) != 'undefined' && event == key ? 'selected' : '' %>><%= events[key] %></option>
\t\t<% } %>
\t</select>

\t<span class=\"apply-event\">
\t\t<a class=\"uv-btn-tag remove-event-select\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></a>
\t</span>

\t<p class=\"uv-field-message\" style=\"display: none;\"></p>
</script>

<script type=\"text/template\" id=\"event-value-select\">
\t<select class=\"uv-select uv-select-grouped wfEventTriggers\" name=\"events[<%- keyNo %>][trigger]\" style=\"width: 300px;\">
\t\t<% for (var key in triggers) { %>
\t\t\t<option value=\"<%= key %>\" <%- typeof(trigger) != 'undefined' && trigger == key ? 'selected' : '' %>><%= triggers[key] %></option>
\t\t<% } %>
\t</select>
</script>

<script type=\"text/javascript\">
\tvar workflowAccess = {{ workflowAccess ? 1 : 0 }};

\tif(typeof(sB) == 'undefined'){
\t\tvar sB = {};
\t}

\tsB.eventRow = sB.PrevEvent = 0;
\tsB.JsonEvents = JSON.parse(\"{{ uvdesk_automations.getWorkflowEvents() | json_encode | e('js') }}\");
\tsB.MatchEvents = JSON.parse(\"{{ uvdesk_automations.getWorkflowEventValues() | json_encode | e('js') }}\");

\tsB.EventSelectView = Backbone.View.extend({
\t\ttagName: 'div',
\t\tclassName: 'uv-field-block workflow-event',
\t\teventTemplate: _.template(\$('#event-add').html()),
\t\tvalueSelectTemplate: _.template(\$('#event-value-select').html()),
\t\tevents: {
\t\t\t'change .select-event': 'selectOption',
\t\t\t'change .apply-event': 'selectValue',
\t\t\t'click .remove-event-select': 'removeSelect'
\t\t},
\t\tinitialize: function() {
\t\t\t(this.model == undefined || this.model.altKey != undefined) ? this.model = {'event': sB.PrevEvent ? sB.PrevEvent : 0} : false;
\t\t\tthis.keyNo = sB.eventRow;
\t\t\tsB.eventRow++;
\t\t},
\t\trender: function() {
\t\t\tthis.\$el.html(this.eventTemplate(_.extend(this.model, {'keyNo': this.keyNo, 'events': sB.JsonEvents})));
\t\t\treturn this;
\t\t},
\t\tremoveSelect: function(e) {
\t\t\tif (\$('.uv-field-block.workflow-event').length > 1) {
\t\t\t\tthis.remove();
\t\t\t\tthis.firstEnable();
\t\t\t} else {
\t\t\t\t\$(this.el).find('.uv-field-message').html(\"{{ 'This field is required'|trans }}\").fadeIn(0);
\t\t\t}
\t\t},
\t\tselectOption: function(e) {
\t\t\tif (e.target.value != sB.PrevEvent) {
\t\t\t\t\$('#events').find('.workflow-event').not(this.\$el).remove();
\t\t\t\tsB.PrevEvent = e.target.value;
\t\t\t\tif (typeof(sB.ActionSelectViews) != 'undefined') {
\t\t\t\t\tsB.actionselectView.clearHtml();
\t\t\t\t}
\t\t\t\tif (typeof(sB.SelectViews) != 'undefined') {
\t\t\t\t\tsB.selectView.clearHtml();
\t\t\t\t}
\t\t\t}

\t\t\tthis.firstEnable();
\t\t\tvar value = sB.PrevEvent = e.target.value;
\t\t\tthis.updateButtonHref(value);
\t\t\tthis.siblingValue = this.\$el.find('.apply-event');
\t\t\tthis.siblingValue.find('.uv-select').remove();
\t\t\tthis.siblingValue.prepend(this.valueSelectTemplate(_.extend(this.model, {'triggers' : sB.MatchEvents[value], 'keyNo': this.keyNo})));
\t\t},
\t\tupdateButtonHref: function(value) {
\t\t\tif (value) {
\t\t\t\tif (value == 'customer' || value == 'agent') {
\t\t\t\t\t\$('#events').find('.btn-next').attr('href', '#actions');
\t\t\t\t\t\$('#actions').find('.btn-prev').attr('href', '#events');
\t\t\t\t} else {
\t\t\t\t\t\$('#events').find('.btn-next').attr('href', '#conditions');
\t\t\t\t\t\$('#actions').find('.btn-prev').attr('href', '#conditions');
\t\t\t\t}
\t\t\t}
\t\t},
\t\tfirstEnable: function() {
\t\t\tif (workflowAccess) {
\t\t\t\t\$('#events').find('.workflow-event').eq(0).find('.uv-select.wfEvents').attr('disabled', false);
\t\t\t}
\t\t},
\t\tselectValue: function(e) {
\t\t\tsB.eventselectView.removeduplicate(e);
\t\t\tthis.firstEnable();
\t\t}
\t});

\tsB.EventSelectViews = Backbone.View.extend({
\t\tel: '.uv-view',
\t\ttarget: \$('#events .workflow-event-body'),
\t\tinitialize: function(){
\t\t\t{% if formData and formData.events is defined %}
\t\t\t\tthis.createEvents(\$.parseJSON(\"{{ formData.events | json_encode | e('js') }}\"));
\t\t\t{% else %}
\t\t\t\tthis.addSelect();
\t\t\t{% endif %}
\t\t},
\t\tevents: {
\t\t\t'click #events .btn-add': 'addSelect',
\t\t},
\t\tcreateEvents: function(eventPreviouslyAdded) {
\t\t\t_.each(eventPreviouslyAdded, this.addSelect, this);
\t\t},
\t\taddSelect: function(eventModel) {
\t\t\tvar view = new sB.EventSelectView({model: eventModel});
\t        this.target.append(viewEl = view.render().el); 
\t        // if (typeof(eventModel.type) == 'undefined' && typeof(eventModel.trigger) != 'undefined')
\t        \tthis.\$(viewEl).find('select.wfEvents').trigger('change');
\t\t},
\t\tremoveduplicate: function(e) {
\t\t\t// remove already exits elements - select
\t\t    \$('.apply-event select').each(function() {
\t\t\t\tif (this.value == e.target.value) {
\t\t\t\t\t\$(this).not(e.target).parents('tr').remove();
\t\t\t\t}
\t\t    })
\t\t},
\t});

\tsB.eventselectView = new sB.EventSelectViews();
</script>", "@UVDeskAutomation/Workflow/events.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/Workflow/events.html.twig");
    }
}
