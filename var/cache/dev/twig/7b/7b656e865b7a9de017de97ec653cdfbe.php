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

/* @UVDeskAutomation/Workflow/actions.html.twig */
class __TwigTemplate_d40280381c0ef2d8c5a22f8492c65a33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/actions.html.twig"));

        // line 1
        yield "<script type=\"text/template\" id=\"action-add\">
\t<select class=\"uv-select uv-select-grouped select-action wfAction\" name=\"actions[<%- keyNo %>][type]\" style=\"width: 200px;\">
\t\t<option value=\"\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select an Action"), "html", null, true);
        yield "</option>
\t\t<% for(var key in actions){ %>
\t\t\t<option value=\"<%- key %>\" <%- typeof(type) != 'undefined' && type == key ? 'selected' : ''%>><%- actions[key] %></option>
\t\t<% } %>
\t</select>
\t<span class=\"apply-action\" style=\"display: inline-block; vertical-align: middle;\">
\t\t<a class=\"uv-btn-tag remove-action-tr\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></a>
\t</span>
\t<p class=\"uv-field-message\" style=\"display: none;\"></p>
</script>

<script type=\"text/template\" id=\"action-value-text\">
\t<textarea name=\"actions[<%- keyNo %>][value]\" id=\"textarea-note\" class=\"uv-field wfActionValue textarea-fix-action\" style=\"width: 200px;\"><%- (typeof(value) != 'undefined' && typeof(value) != 'object') ? value : ''%></textarea>
</script>

<script type=\"text/template\" id=\"action-value-select\">
\t<select name=\"actions[<%- keyNo %>][value]\" class=\"uv-select uv-select-grouped action-value wfAction\" style=\"width: 200px;\"><option>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading..."), "html", null, true);
        yield "</option></select>
</script>

<script type=\"text/template\" id=\"action-value-multi-select\">
\t<div class=\"uv-dropdown asset-visibility action-value-for wfActionMultiple\" name=\"actions[<%- keyNo %>][value][for][]\">
\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\" style=\"width: 200px;\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select Option"), "html", null, true);
        yield "</div>
\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t<ul></ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<select name=\"actions[<%- keyNo %>][value][value]\" class=\"uv-select uv-select-grouped action-value wfAction\" style=\"width: 200px;\"><option>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading..."), "html", null, true);
        yield "</option></select>
</script>

<script type=\"text/template\" id=\"action-value-select-multiple\">
\t<select name=\"actions[<%- keyNo %>][value][]\" class=\"uv-select uv-select-grouped action-value wfAction\" multiple=\"true\" style=\"width: 200px;\"><option>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading..."), "html", null, true);
        yield "</option></select>
</script>

<script type=\"text/template\" id=\"action-value-select-option\">
\t<option value=\"<%= id %>\" <%- (typeof(value) != 'undefined' && (typeof(value) === 'object' && value.indexOf(id.toString()) > -1)) ? 'selected' : (typeof(value) != 'undefined' && value == id ? 'selected' : '')%>>
\t<% if (name == \"Low\") { %>
\t\t";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Low"), "html", null, true);
        yield "
\t<% } else if (name == \"Medium\") { %>
\t\t";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Medium"), "html", null, true);
        yield "
\t<%} else if (name == \"High\") { %>
\t\t";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("High"), "html", null, true);
        yield "
\t<% } else if (name == \"Urgent\") { %>
\t\t";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Urgent"), "html", null, true);
        yield "
\t<% } else if (name == \"Open\") { %>
\t\t";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        yield "
\t<% } else if (name == \"Pending\") { %>
\t\t";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        yield "
\t<%} else if (name == \"Answered\") { %>
\t \t";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Answered"), "html", null, true);
        yield "
\t<% } else if (name == \"Closed\") { %>
\t\t";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Closed"), "html", null, true);
        yield "
\t<%} else if (name == \"Resolved\") { %>
\t\t";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolved"), "html", null, true);
        yield "
\t<% } else { %>
\t\t<%= name %>
\t<% } %></option>
</script>

<script type=\"text/template\" id=\"action-value-select-for-option\">
\t<li class=\"uv-dropdown-checkbox\">
        <label>
            <div class=\"uv-checkbox\">
                <input type=\"checkbox\" id=\"actions[<%- keyNo %>][value][for][<%- id.toString() %>]\" name=\"actions[<%- keyNo %>][value][for][]\" value=\"<%= id %>\" <%- (typeof(value) != 'undefined' && (typeof(value) === 'object' && value.indexOf(id.toString()) > -1)) ? 'checked' : (typeof(value) != 'undefined' && value == id ? 'checked' : '')%> >
                <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
            </div>
        </label>
        <label for=\"actions[<%- keyNo %>][value][for][<%- id.toString() %>]\" style=\"display: inline;\"><%= name %></label>
    </li>
</script>

<script type=\"text/javascript\">
\t\$('body').on('focusout', '#textarea-note', function(){
\t\tselection = this;
\t\toldContent = selection.value;
\t\tcursorPosition = \$(this).prop(\"selectionStart\");
\t\tforEditor = false;
\t\tforSubject = true;
\t});
\tvar sB = sB || {};
\tsB.actionRow = 0;
\tsB.JsonActions = JSON.parse(\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_automations"]) || array_key_exists("uvdesk_automations", $context) ? $context["uvdesk_automations"] : (function () { throw new RuntimeError('Variable "uvdesk_automations" does not exist.', 85, $this->source); })()), "getWorkflowActions", [(((array_key_exists("forcedActions", $context) && (isset($context["forcedActions"]) || array_key_exists("forcedActions", $context) ? $context["forcedActions"] : (function () { throw new RuntimeError('Variable "forcedActions" does not exist.', 85, $this->source); })()))) ? (true) : (false))], "method", false, false, false, 85)), "js"), "html", null, true);
        yield "\");
\tsB.ActionCollection = Backbone.Collection.extend({
\t    baseUrl: \"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_workflow_action_options_xhr");
        yield "\",
\t\tfetchResult: function(dataMatch, currentEvent) {
\t\t\tthis.url = this.baseUrl+'/'+dataMatch + (currentEvent ? ('/' + currentEvent) : '');
\t\t\tthis.reset();
\t\t\t
\t\t\treturn this.fetch();
\t\t},
\t});
\tsB.ActionSelectView = Backbone.View.extend({
\t\ttagName: 'div',
\t\tclassName: 'uv-field-block workflow-action',
\t\tactionTemplate: _.template(\$('#action-add').html()),
\t\tvalueTextTemplate: _.template(\$('#action-value-text').html()),
\t\tvalueSelectTemplate: _.template(\$('#action-value-select').html()),
\t\tvalueMultiSelectTemplate: _.template(\$('#action-value-multi-select').html()),
\t\tvalueSelectMultipleTemplate: _.template(\$('#action-value-select-multiple').html()),
\t\tvalueSelectOptionTemplate: _.template(\$('#action-value-select-option').html()),
\t\tvalueSelectForOptionTemplate: _.template(\$('#action-value-select-for-option').html()),
\t\tevents: {
\t\t\t'change .select-action': 'selectOption',
\t\t\t'click .remove-action-tr': 'removeTr'
\t\t},
\t\tinitialize: function() {
\t\t\tthis.keyNo = sB.actionRow;
\t\t\tsB.actionRow++;\t
\t\t},
\t\trender: function() {
\t\t\tthis.\$el.html(this.actionTemplate(_.extend(this.model, {'keyNo': this.keyNo, 'actions' : sB.JsonActions[(typeof(sB.PrevEvent) != 'undefined' && sB.PrevEvent) ? sB.PrevEvent : 'ticket']})));
\t\t\treturn this;
\t\t},
\t\tremoveTr: function(e) {
\t \t\tif (\$('.uv-field-block.workflow-action').length > 1) {
\t\t\t\tthis.remove();
\t\t \t\tsB.actionselectView.clearFirstTrSpan();
\t\t\t} else {
\t\t\t\t\$(this.el).find('.uv-field-message').html(\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is required"), "html", null, true);
        yield "\").fadeIn(0);
\t\t\t}
\t\t},
\t\tselectOption: function(e) {
\t\t\tif (this.disable) {
\t\t\t\treturn;
\t\t\t}
\t\t\tvar value = this.value = e.target.value;
\t\t\tif (typeof(sB.actionselectView) != 'undefined') {
\t\t\t\tsB.actionselectView.removeDuplicate(e);
\t\t\t}
\t\t\tthis.selectOpt = this.\$el.find('.wfAction');
\t\t\tthis.siblingValue = this.\$el.find('.apply-action');
\t\t\t// if(value == 'delete_ticket' || value == 'mark_spam')
\t\t\tthis.siblingValue.find('select, textarea, div').remove();
\t\t\tif (value == 'uvdesk.agent.add_note' || value == 'reply') {
\t\t\t\tthis.siblingValue.prepend(this.valueTextTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t} else if (value != 'uvdesk.ticket.delete' && value != 'uvdesk.ticket.mark_spam' && value != 'uvdesk.ticket.round_robin_ticket_assignment' && value) {
\t\t\t\tthis.selectOpt.prop('disabled', true);
\t\t\t\tthis.disable = true;
\t\t\t\tif (value == 'cc' || value == 'bcc') {
\t\t\t\t\tthis.siblingValue.prepend(this.valueSelectMultipleTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\t} else if (this.value == 'uvdesk.ticket.mail_group' || this.value == 'uvdesk.ticket.mail_team' || this.value == \"uvdesk.ticket.mail_agent\") {
\t\t\t\t\tthis.siblingValue.prepend(this.valueMultiSelectTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\t} else {
\t\t\t\t\tthis.siblingValue.prepend(this.valueSelectTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\t}
\t\t\t\tvar self = this;
\t\t\t\tsB.actionCollection.fetchResult(value, this.getCurrentEvent())
\t\t\t\t\t.done(function() {
\t\t\t\t\t\t\$(self.el).find('.action-value').find('option').remove();
\t\t\t\t\t\tself.addAll();
\t\t        \t})
\t\t        \t.fail(function(xhr) {
\t\t                if(url = xhr.getResponseHeader('Location'))
\t\t                    window.location = url;
\t\t            });
\t\t\t}
\t\t},
\t\tgetCurrentEvent: function() {
\t\t\treturn (\$('.wfEvents').eq(0).val() ? \$('.wfEvents').eq(0).val() : 'ticket');
\t\t},
\t\taddAll: function() {
\t\t\tif (this.value == 'uvdesk.ticket.mail_group' || this.value == 'uvdesk.ticket.mail_team' || this.value == \"uvdesk.ticket.mail_agent\")
\t\t\t\t_.each(sB.actionCollection.models, this.addOneMore, this);
\t\t\telse
\t\t\t\t_.each(sB.actionCollection.models, this.addOne, this);
\t\t\tthis.disable = false;
\t\t\tthis.selectOpt.prop('disabled', false);
\t\t},
\t\taddOne: function(newModel) {
\t\t\tif (typeof(this.model.value) == 'object')
\t\t\t\tthis.model.value = undefined;
\t\t\tvar sendThisModel = _.extend(this.model, newModel.attributes);
\t\t\tif (typeof(newModel.attributes.id) != 'undefined')
\t\t\t\tthis.siblingValue.find('.action-value').append(this.valueSelectOptionTemplate(sendThisModel));
\t\t},
\t\taddOneMore: function(models) {
\t\t\t_.each(models.attributes.partResults, function(newModel){
\t\t\t\tthis.siblingValue.find('.action-value-for').find('.uv-dropdown-container ul').append(this.valueSelectForOptionTemplate(_.extend({ 'value' : (typeof(this.model.value) != 'undefined' ? this.model.value.for : ''), 'keyNo': this.keyNo}, newModel)));
\t\t\t}, this);
\t\t\t_.each(models.attributes.templates, function(newModel){
\t\t\t\tthis.siblingValue.find('.action-value').append(this.valueSelectOptionTemplate(_.extend({ 'value' : (typeof(this.model.value) != 'undefined' ? this.model.value.value : '')}, newModel)));
\t\t\t}, this);
\t\t}
\t});
\tsB.ActionSelectViews = Backbone.View.extend({
\t\tel: '.uv-view',
\t\ttarget: \$('#actions .workflow-action-body'),
\t\tinitialize: function() {
\t\t\t";
        // line 192
        if (((isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 192, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 192, $this->source); })()), "actions", [], "any", false, false, false, 192))) {
            // line 193
            yield "\t\t\t\tthis.createActions(\$.parseJSON(\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 193, $this->source); })()), "actions", [], "any", false, false, false, 193)), "js"), "html", null, true);
            yield "\"));
\t\t\t";
        } else {
            // line 195
            yield "\t\t\t\tthis.addSelect({});
\t\t\t";
        }
        // line 197
        yield "\t        this.listenTo(sB.actionCollection, 'add', this.addOne);
\t\t\t";
        // line 198
        if ((array_key_exists("forcedActions", $context) && (isset($context["forcedActions"]) || array_key_exists("forcedActions", $context) ? $context["forcedActions"] : (function () { throw new RuntimeError('Variable "forcedActions" does not exist.', 198, $this->source); })()))) {
            // line 199
            yield "\t\t\t\tdIteration = 0;
\t\t\t\tdisableFieldFun = function() {
\t\t\t\t\tsetTimeout(function(e) {
\t\t\t\t\t\t\$('#actions input,#actions select,#actions textarea').attr('disabled', 'disabled');
\t\t\t\t\t\t\$('#actions .remove-action-tr').remove(); dIteration++;
\t\t\t\t\t\tif (dIteration < 5)
\t\t\t\t\t\t\tdisableFieldFun();
\t\t\t\t\t}, 500);
\t\t\t\t};
\t\t\t\t
\t\t\t\tdisableFieldFun();
\t\t\t";
        }
        // line 211
        yield "\t\t},
\t\tevents: {
\t\t\t'click #actions .btn-add': 'addSelect',
\t\t},
\t\tclearHtml: function() {
\t        this.target.html('');
\t\t\tthis.addSelect({});
\t\t},
\t\tcreateActions: function(actionPreviouslyAdded) {
\t\t\t_.each(actionPreviouslyAdded, this.addSelect, this);
\t\t},
\t\taddSelect: function(newModel) {
\t\t\tvar view = new sB.ActionSelectView({model: newModel});
\t        this.target.append(viewEl = view.render().el);
\t        this.\$(viewEl).find('.wfAction').trigger('change');
\t \t\tthis.clearFirstTrSpan();
\t\t},
\t\tremoveDuplicate: function(e) {
\t\t\t//remove already exits elements - select
\t\t    \$('.select-action').each(function() {
\t\t\t\tif (this.value == e.target.value)
\t\t\t\t\t\$(this).not(e.target).parents('tr').remove();
\t\t    });
\t \t\tthis.clearFirstTrSpan();
\t\t},
\t\tclearFirstTrSpan: function() {
\t \t\tthis.target.find('tr').eq(0).find('span.border-override').remove();
\t\t},
\t});
\tsB.actionCollection = new sB.ActionCollection();
\tsB.actionselectView = new sB.ActionSelectViews();
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
        return "@UVDeskAutomation/Workflow/actions.html.twig";
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
        return array (  323 => 211,  309 => 199,  307 => 198,  304 => 197,  300 => 195,  294 => 193,  292 => 192,  219 => 122,  181 => 87,  176 => 85,  145 => 57,  140 => 55,  135 => 53,  130 => 51,  125 => 49,  120 => 47,  115 => 45,  110 => 43,  105 => 41,  96 => 35,  89 => 31,  79 => 24,  71 => 19,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script type=\"text/template\" id=\"action-add\">
\t<select class=\"uv-select uv-select-grouped select-action wfAction\" name=\"actions[<%- keyNo %>][type]\" style=\"width: 200px;\">
\t\t<option value=\"\">{{ 'Select an Action'|trans }}</option>
\t\t<% for(var key in actions){ %>
\t\t\t<option value=\"<%- key %>\" <%- typeof(type) != 'undefined' && type == key ? 'selected' : ''%>><%- actions[key] %></option>
\t\t<% } %>
\t</select>
\t<span class=\"apply-action\" style=\"display: inline-block; vertical-align: middle;\">
\t\t<a class=\"uv-btn-tag remove-action-tr\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></a>
\t</span>
\t<p class=\"uv-field-message\" style=\"display: none;\"></p>
</script>

<script type=\"text/template\" id=\"action-value-text\">
\t<textarea name=\"actions[<%- keyNo %>][value]\" id=\"textarea-note\" class=\"uv-field wfActionValue textarea-fix-action\" style=\"width: 200px;\"><%- (typeof(value) != 'undefined' && typeof(value) != 'object') ? value : ''%></textarea>
</script>

<script type=\"text/template\" id=\"action-value-select\">
\t<select name=\"actions[<%- keyNo %>][value]\" class=\"uv-select uv-select-grouped action-value wfAction\" style=\"width: 200px;\"><option>{{ 'Loading...'|trans }}</option></select>
</script>

<script type=\"text/template\" id=\"action-value-multi-select\">
\t<div class=\"uv-dropdown asset-visibility action-value-for wfActionMultiple\" name=\"actions[<%- keyNo %>][value][for][]\">
\t\t<div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\" style=\"width: 200px;\">{{ 'Select Option'|trans }}</div>
\t\t<div class=\"uv-dropdown-list uv-bottom-left\">
\t\t\t<div class=\"uv-dropdown-container\">
\t\t\t\t<ul></ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<select name=\"actions[<%- keyNo %>][value][value]\" class=\"uv-select uv-select-grouped action-value wfAction\" style=\"width: 200px;\"><option>{{ 'Loading...'|trans }}</option></select>
</script>

<script type=\"text/template\" id=\"action-value-select-multiple\">
\t<select name=\"actions[<%- keyNo %>][value][]\" class=\"uv-select uv-select-grouped action-value wfAction\" multiple=\"true\" style=\"width: 200px;\"><option>{{ 'Loading...'|trans }}</option></select>
</script>

<script type=\"text/template\" id=\"action-value-select-option\">
\t<option value=\"<%= id %>\" <%- (typeof(value) != 'undefined' && (typeof(value) === 'object' && value.indexOf(id.toString()) > -1)) ? 'selected' : (typeof(value) != 'undefined' && value == id ? 'selected' : '')%>>
\t<% if (name == \"Low\") { %>
\t\t{{ \"Low\"|trans }}
\t<% } else if (name == \"Medium\") { %>
\t\t{{ \"Medium\"|trans }}
\t<%} else if (name == \"High\") { %>
\t\t{{ \"High\"|trans }}
\t<% } else if (name == \"Urgent\") { %>
\t\t{{ \"Urgent\"|trans }}
\t<% } else if (name == \"Open\") { %>
\t\t{{ \"Open\"|trans}}
\t<% } else if (name == \"Pending\") { %>
\t\t{{\"Pending\"|trans}}
\t<%} else if (name == \"Answered\") { %>
\t \t{{ \"Answered\"|trans}}
\t<% } else if (name == \"Closed\") { %>
\t\t{{ \"Closed\"|trans}}
\t<%} else if (name == \"Resolved\") { %>
\t\t{{ \"Resolved\"|trans }}
\t<% } else { %>
\t\t<%= name %>
\t<% } %></option>
</script>

<script type=\"text/template\" id=\"action-value-select-for-option\">
\t<li class=\"uv-dropdown-checkbox\">
        <label>
            <div class=\"uv-checkbox\">
                <input type=\"checkbox\" id=\"actions[<%- keyNo %>][value][for][<%- id.toString() %>]\" name=\"actions[<%- keyNo %>][value][for][]\" value=\"<%= id %>\" <%- (typeof(value) != 'undefined' && (typeof(value) === 'object' && value.indexOf(id.toString()) > -1)) ? 'checked' : (typeof(value) != 'undefined' && value == id ? 'checked' : '')%> >
                <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
            </div>
        </label>
        <label for=\"actions[<%- keyNo %>][value][for][<%- id.toString() %>]\" style=\"display: inline;\"><%= name %></label>
    </li>
</script>

<script type=\"text/javascript\">
\t\$('body').on('focusout', '#textarea-note', function(){
\t\tselection = this;
\t\toldContent = selection.value;
\t\tcursorPosition = \$(this).prop(\"selectionStart\");
\t\tforEditor = false;
\t\tforSubject = true;
\t});
\tvar sB = sB || {};
\tsB.actionRow = 0;
\tsB.JsonActions = JSON.parse(\"{{ uvdesk_automations.getWorkflowActions(forcedActions is defined and forcedActions ? true : false) | json_encode | e('js') }}\");
\tsB.ActionCollection = Backbone.Collection.extend({
\t    baseUrl: \"{{ path('helpdesk_member_workflow_action_options_xhr') }}\",
\t\tfetchResult: function(dataMatch, currentEvent) {
\t\t\tthis.url = this.baseUrl+'/'+dataMatch + (currentEvent ? ('/' + currentEvent) : '');
\t\t\tthis.reset();
\t\t\t
\t\t\treturn this.fetch();
\t\t},
\t});
\tsB.ActionSelectView = Backbone.View.extend({
\t\ttagName: 'div',
\t\tclassName: 'uv-field-block workflow-action',
\t\tactionTemplate: _.template(\$('#action-add').html()),
\t\tvalueTextTemplate: _.template(\$('#action-value-text').html()),
\t\tvalueSelectTemplate: _.template(\$('#action-value-select').html()),
\t\tvalueMultiSelectTemplate: _.template(\$('#action-value-multi-select').html()),
\t\tvalueSelectMultipleTemplate: _.template(\$('#action-value-select-multiple').html()),
\t\tvalueSelectOptionTemplate: _.template(\$('#action-value-select-option').html()),
\t\tvalueSelectForOptionTemplate: _.template(\$('#action-value-select-for-option').html()),
\t\tevents: {
\t\t\t'change .select-action': 'selectOption',
\t\t\t'click .remove-action-tr': 'removeTr'
\t\t},
\t\tinitialize: function() {
\t\t\tthis.keyNo = sB.actionRow;
\t\t\tsB.actionRow++;\t
\t\t},
\t\trender: function() {
\t\t\tthis.\$el.html(this.actionTemplate(_.extend(this.model, {'keyNo': this.keyNo, 'actions' : sB.JsonActions[(typeof(sB.PrevEvent) != 'undefined' && sB.PrevEvent) ? sB.PrevEvent : 'ticket']})));
\t\t\treturn this;
\t\t},
\t\tremoveTr: function(e) {
\t \t\tif (\$('.uv-field-block.workflow-action').length > 1) {
\t\t\t\tthis.remove();
\t\t \t\tsB.actionselectView.clearFirstTrSpan();
\t\t\t} else {
\t\t\t\t\$(this.el).find('.uv-field-message').html(\"{{ 'This field is required'|trans }}\").fadeIn(0);
\t\t\t}
\t\t},
\t\tselectOption: function(e) {
\t\t\tif (this.disable) {
\t\t\t\treturn;
\t\t\t}
\t\t\tvar value = this.value = e.target.value;
\t\t\tif (typeof(sB.actionselectView) != 'undefined') {
\t\t\t\tsB.actionselectView.removeDuplicate(e);
\t\t\t}
\t\t\tthis.selectOpt = this.\$el.find('.wfAction');
\t\t\tthis.siblingValue = this.\$el.find('.apply-action');
\t\t\t// if(value == 'delete_ticket' || value == 'mark_spam')
\t\t\tthis.siblingValue.find('select, textarea, div').remove();
\t\t\tif (value == 'uvdesk.agent.add_note' || value == 'reply') {
\t\t\t\tthis.siblingValue.prepend(this.valueTextTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t} else if (value != 'uvdesk.ticket.delete' && value != 'uvdesk.ticket.mark_spam' && value != 'uvdesk.ticket.round_robin_ticket_assignment' && value) {
\t\t\t\tthis.selectOpt.prop('disabled', true);
\t\t\t\tthis.disable = true;
\t\t\t\tif (value == 'cc' || value == 'bcc') {
\t\t\t\t\tthis.siblingValue.prepend(this.valueSelectMultipleTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\t} else if (this.value == 'uvdesk.ticket.mail_group' || this.value == 'uvdesk.ticket.mail_team' || this.value == \"uvdesk.ticket.mail_agent\") {
\t\t\t\t\tthis.siblingValue.prepend(this.valueMultiSelectTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\t} else {
\t\t\t\t\tthis.siblingValue.prepend(this.valueSelectTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\t}
\t\t\t\tvar self = this;
\t\t\t\tsB.actionCollection.fetchResult(value, this.getCurrentEvent())
\t\t\t\t\t.done(function() {
\t\t\t\t\t\t\$(self.el).find('.action-value').find('option').remove();
\t\t\t\t\t\tself.addAll();
\t\t        \t})
\t\t        \t.fail(function(xhr) {
\t\t                if(url = xhr.getResponseHeader('Location'))
\t\t                    window.location = url;
\t\t            });
\t\t\t}
\t\t},
\t\tgetCurrentEvent: function() {
\t\t\treturn (\$('.wfEvents').eq(0).val() ? \$('.wfEvents').eq(0).val() : 'ticket');
\t\t},
\t\taddAll: function() {
\t\t\tif (this.value == 'uvdesk.ticket.mail_group' || this.value == 'uvdesk.ticket.mail_team' || this.value == \"uvdesk.ticket.mail_agent\")
\t\t\t\t_.each(sB.actionCollection.models, this.addOneMore, this);
\t\t\telse
\t\t\t\t_.each(sB.actionCollection.models, this.addOne, this);
\t\t\tthis.disable = false;
\t\t\tthis.selectOpt.prop('disabled', false);
\t\t},
\t\taddOne: function(newModel) {
\t\t\tif (typeof(this.model.value) == 'object')
\t\t\t\tthis.model.value = undefined;
\t\t\tvar sendThisModel = _.extend(this.model, newModel.attributes);
\t\t\tif (typeof(newModel.attributes.id) != 'undefined')
\t\t\t\tthis.siblingValue.find('.action-value').append(this.valueSelectOptionTemplate(sendThisModel));
\t\t},
\t\taddOneMore: function(models) {
\t\t\t_.each(models.attributes.partResults, function(newModel){
\t\t\t\tthis.siblingValue.find('.action-value-for').find('.uv-dropdown-container ul').append(this.valueSelectForOptionTemplate(_.extend({ 'value' : (typeof(this.model.value) != 'undefined' ? this.model.value.for : ''), 'keyNo': this.keyNo}, newModel)));
\t\t\t}, this);
\t\t\t_.each(models.attributes.templates, function(newModel){
\t\t\t\tthis.siblingValue.find('.action-value').append(this.valueSelectOptionTemplate(_.extend({ 'value' : (typeof(this.model.value) != 'undefined' ? this.model.value.value : '')}, newModel)));
\t\t\t}, this);
\t\t}
\t});
\tsB.ActionSelectViews = Backbone.View.extend({
\t\tel: '.uv-view',
\t\ttarget: \$('#actions .workflow-action-body'),
\t\tinitialize: function() {
\t\t\t{% if formData and formData.actions %}
\t\t\t\tthis.createActions(\$.parseJSON(\"{{ formData.actions | json_encode | e('js') }}\"));
\t\t\t{% else %}
\t\t\t\tthis.addSelect({});
\t\t\t{% endif %}
\t        this.listenTo(sB.actionCollection, 'add', this.addOne);
\t\t\t{% if forcedActions is defined and forcedActions %}
\t\t\t\tdIteration = 0;
\t\t\t\tdisableFieldFun = function() {
\t\t\t\t\tsetTimeout(function(e) {
\t\t\t\t\t\t\$('#actions input,#actions select,#actions textarea').attr('disabled', 'disabled');
\t\t\t\t\t\t\$('#actions .remove-action-tr').remove(); dIteration++;
\t\t\t\t\t\tif (dIteration < 5)
\t\t\t\t\t\t\tdisableFieldFun();
\t\t\t\t\t}, 500);
\t\t\t\t};
\t\t\t\t
\t\t\t\tdisableFieldFun();
\t\t\t{% endif %}
\t\t},
\t\tevents: {
\t\t\t'click #actions .btn-add': 'addSelect',
\t\t},
\t\tclearHtml: function() {
\t        this.target.html('');
\t\t\tthis.addSelect({});
\t\t},
\t\tcreateActions: function(actionPreviouslyAdded) {
\t\t\t_.each(actionPreviouslyAdded, this.addSelect, this);
\t\t},
\t\taddSelect: function(newModel) {
\t\t\tvar view = new sB.ActionSelectView({model: newModel});
\t        this.target.append(viewEl = view.render().el);
\t        this.\$(viewEl).find('.wfAction').trigger('change');
\t \t\tthis.clearFirstTrSpan();
\t\t},
\t\tremoveDuplicate: function(e) {
\t\t\t//remove already exits elements - select
\t\t    \$('.select-action').each(function() {
\t\t\t\tif (this.value == e.target.value)
\t\t\t\t\t\$(this).not(e.target).parents('tr').remove();
\t\t    });
\t \t\tthis.clearFirstTrSpan();
\t\t},
\t\tclearFirstTrSpan: function() {
\t \t\tthis.target.find('tr').eq(0).find('span.border-override').remove();
\t\t},
\t});
\tsB.actionCollection = new sB.ActionCollection();
\tsB.actionselectView = new sB.ActionSelectViews();
</script>", "@UVDeskAutomation/Workflow/actions.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/Workflow/actions.html.twig");
    }
}
