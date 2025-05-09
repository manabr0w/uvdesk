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

/* @UVDeskAutomation/Workflow/conditions.html.twig */
class __TwigTemplate_307d809058e7edafdce624394214df68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/conditions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskAutomation/Workflow/conditions.html.twig"));

        // line 1
        yield "<script type=\"text/template\" id=\"select-add\">
\t<% if (typeof(operation) != 'undefined' && operation == '||') { %>
\t\t<div class=\"uv-workflow-hr-plank\">
\t        <div class=\"uv-workflow-hr-or\">
\t            <span class=\"uv-workflow-or\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or"), "html", null, true);
        yield "</span>
\t        </div>
\t    </div>
\t\t<input type=\"hidden\" name=\"conditions[<%- keyNo %>][operation]\" value=\"||\">
\t<% } else if (typeof(operation) != 'undefined' && operation == '&&') { %>
\t\t<div class=\"uv-workflow-hr-plank\">
\t        <div class=\"uv-workflow-hr-and\">
\t            <span class=\"uv-workflow-and\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("and"), "html", null, true);
        yield "</span>
\t        </div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"conditions[<%- keyNo %>][operation]\" value=\"&&\">
\t<% } %>

\t<select class=\"uv-select uv-select-grouped select-condition wfCondition\" name=\"conditions[<%- keyNo %>][type]\" style=\"width: 200px;\">
\t\t<option value=\"\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select a Condition"), "html", null, true);
        yield "</option>
\t\t<% for(var key in conditions) { %>
\t\t\t<optgroup label=\"<%-key%>\">
\t\t\t\t<% for (var key2 in conditions[key]) { %>
\t\t\t\t\t<option value=\"<%-conditions[key][key2].value%>\" data-match=\"<%-conditions[key][key2].match%>\" <%- typeof(type) != 'undefined' && type == conditions[key][key2].value ? 'selected' : ''%>><%- conditions[key][key2].lable %></option>
\t\t\t\t<% } %>
\t\t\t</optgroup>
\t\t<% } %>
\t</select>

\t<span class=\"select-match\">
    </span>

    <span class=\"values\" style=\"display: inline-block;\">
\t\t<a class=\"uv-btn-tag remove-tr\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></a>
\t</span>
\t<p class=\"uv-field-message\" style=\"display: none;\"></p>
</script>

<script type=\"text/template\" id=\"match-add\">
\t<select class=\"uv-select uv-select-grouped wfConditionMatch\" name=\"conditions[<%- keyNo %>][match]\" style=\"width: 200px;\">
\t\t<% for(var key in matchArray){ %>
\t\t\t<option value=\"<%= matchArray[key].value %>\" <%- typeof(match) != 'undefined' && match == matchArray[key].value ? 'selected' : ''%>><%= matchArray[key].lable %></option>
\t\t<% } %>
\t</select>
</script>

<script type=\"text/template\" id=\"value-text\">
\t<% if (typeof(addDate) != 'undefined' && addDate) { %>
\t\t<span class=\"date value-container\">
\t        <input name=\"conditions[<%- keyNo %>][value]\" type=\"text\" class=\"uv-field form-control uv-date-picker date wfConditionValue\" data-date-format=\"<%- fieldType == 'time' ? 'LT' : (fieldType == 'datetime' ? 'YYYY-MM-DD H:m:s' : 'YYYY-MM-DD') %>\" value=\"<%- typeof(value) != 'undefined' ? value : '' %>\" style=\"width: 200px;\">
\t        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span>
\t    </span>
\t<% } else { %>
\t\t<span class=\"value-container\">
\t\t\t<input type=\"text\" name=\"conditions[<%- keyNo %>][value]\" class=\"uv-field wfConditionValue\" value=\"<%- typeof(value) != 'undefined' ? value : ''%>\" style=\"width: 200px;\" />
\t\t</span>
\t<% } %>
</script>

<script type=\"text/template\" id=\"value-select\">
\t<select class=\"uv-select uv-select-grouped select-value wfConditionValue\" name=\"conditions[<%- keyNo %>][value]\" style=\"width: 200px;\">
\t\t<option>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading..."), "html", null, true);
        yield "</option>
\t</select>
</script>

<script type=\"text/template\" id=\"value-select-option\">
\t<option value=\"<%= id %>\" <%- typeof(value) != 'undefined' && value == id ? 'selected' : ''%>><%= name %></option>
</script>

<script type=\"text/javascript\">
\tif (typeof(sB) == 'undefined') {
\t\tvar sB = {};
\t}

\tsB.conditionRow = 0;
\tsB.JsonConditions = JSON.parse(\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_automations"]) || array_key_exists("uvdesk_automations", $context) ? $context["uvdesk_automations"] : (function () { throw new RuntimeError('Variable "uvdesk_automations" does not exist.', 75, $this->source); })()), "getWorkflowConditions", [], "method", false, false, false, 75)), "js"), "html", null, true);
        yield "\");
\tsB.MatchConditions = JSON.parse(\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_automations"]) || array_key_exists("uvdesk_automations", $context) ? $context["uvdesk_automations"] : (function () { throw new RuntimeError('Variable "uvdesk_automations" does not exist.', 76, $this->source); })()), "getWorkflowMatchConditions", [], "method", false, false, false, 76)), "js"), "html", null, true);
        yield "\");

\tsB.Collection = Backbone.Collection.extend({
\t    baseUrl: \"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_workflow_condition_options_xhr");
        yield "\",
\t\tfetchResult: function(dataMatch) {
\t\t\tthis.url = this.baseUrl + '/' + dataMatch;
\t        return this.fetch();
\t\t},
\t});

\tsB.SelectView = Backbone.View.extend({
\t\ttagName: 'div',
\t\tclassName: 'uv-field-block workflow-condition',
\t\tselectTemplate: _.template(\$('#select-add').html()),
\t\tmatchTemplate: _.template(\$('#match-add').html()),
\t\tvalueTextTemplate: _.template(\$('#value-text').html()),
\t\tvalueSelectTemplate: _.template(\$('#value-select').html()),
\t\tvalueSelectOptionTemplate: _.template(\$('#value-select-option').html()),
\t\tevents: {
\t\t\t'change .select-condition': 'selectMatch',
\t\t\t'click .remove-tr': 'removeTr'
\t\t},
\t\tinitialize: function() {
\t\t\tthis.disable = false;
\t\t\tthis.keyNo = sB.conditionRow;
\t\t\tsB.conditionRow++;
\t\t},
\t\trender: function() {
\t\t\tvar objKey = ((typeof(sB.PrevEvent) != 'undefined' && sB.PrevEvent) ? sB.PrevEvent : 'ticket');
\t\t\tthis.\$el.html(this.selectTemplate(_.extend(this.model, {'keyNo': this.keyNo, 'conditions': sB.JsonConditions[objKey]})));

\t\t\tif (objKey == 'ticket' || objKey == 'task' || objKey == 'email') {
\t\t\t\t\$('#conditions').prev('.uv-hr').fadeIn(10);
\t\t\t\t\$('#conditions').fadeIn(10);
\t\t\t} else {
\t\t\t\t\$('#conditions').prev('.uv-hr').fadeOut(10);
\t\t\t\t\$('#conditions').fadeOut(10);
\t\t\t\tthis.\$el.empty();
\t\t\t}

\t\t\treturn this;
\t\t},
\t\tremoveTr: function(e) {
\t\t\tthis.remove();
\t \t\tsB.selectView.clearFirstTrSpan();
\t\t},
\t\tselectMatch: function(e) {
\t\t\tif (this.disable) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar dataMatch = \$(e.target).find('option').eq(e.target.selectedIndex).attr('data-match');
\t\t\tthis.selectOpt = this.\$el.find('.wfCondition');
\t\t\tthis.siblingMatch = this.\$el.find('.select-match');
\t\t\tthis.siblingValue = this.\$el.find('.values');
\t\t\tthis.siblingMatch.find('.uv-select').remove();
\t\t\tthis.siblingMatch.prepend(this.matchTemplate(_.extend(this.model, {'matchArray' : sB.MatchConditions[dataMatch], 'keyNo': this.keyNo})));
\t\t\tthis.siblingValue.find('.value-container, .uv-select, .form-group, .form-control, .input-group.date').remove();
\t\t\tif (dataMatch == 'string' || dataMatch == 'email' || dataMatch == 'number') {
\t\t\t\tthis.siblingValue.prepend(this.valueTextTemplate(_.extend(this.model, {'addDate' : false, 'keyNo': this.keyNo})));
\t\t\t} else if (dataMatch == 'date' || dataMatch == 'datetime' || dataMatch == 'time') {
\t\t\t\tthis.siblingValue.prepend(this.valueTextTemplate(_.extend(this.model, {'addDate' : true, 'fieldType': dataMatch, 'keyNo': this.keyNo})));
\t\t\t\tthis.datePicker();
\t\t\t} else if (dataMatch == 'select') {
\t\t\t\tthis.selectOpt.prop('disabled', true);
\t\t\t\tthis.disable = true;
\t\t\t\tthis.siblingValue.prepend(this.valueSelectTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\tvar self = this;
\t\t\t\tsB.collection.fetchResult(e.target.value)
\t\t\t\t\t.done(function(){
\t\t\t\t\t\t\$(self.el).find('.select-value').find('option').remove();
\t\t\t\t\t\tself.addAll();
\t\t\t        })
\t\t\t        .fail(function(xhr) {
\t\t                if(url = xhr.getResponseHeader('Location'))
\t\t                    window.location = url;
\t\t            });
\t\t\t}
\t\t},
\t\taddAll: function() {
\t\t\t_.each(sB.collection.models, this.addOne, this);
\t\t\tthis.disable = false;
\t\t\tthis.selectOpt.prop('disabled', false);
\t\t},
\t\taddOne: function(newModel) {
\t\t\tthis.siblingValue.find('.select-value').append(this.valueSelectOptionTemplate(_.extend(this.model, newModel.attributes)));
\t\t},
\t\tdatePicker: function() {
\t\t\t\$('#conditions .date, #conditions .datetime, #conditions .time').datetimepicker();
\t\t}
\t});

\tsB.SelectViews = Backbone.View.extend({
\t\tel: '.uv-view',
\t\ttarget: \$('#conditions .workflow-conditions-body'),
\t\tinitialize: function() {
\t\t\t";
        // line 172
        if (((isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 172, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "events", [], "any", true, true, false, 172))) {
            // line 173
            yield "\t\t\t\tvar eventData = \$.parseJSON(\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 173, $this->source); })()), "events", [], "any", false, false, false, 173)), "js"), "html", null, true);
            yield "\");
\t\t\t";
        } else {
            // line 175
            yield "\t\t\t\tvar eventData = {};
\t\t\t";
        }
        // line 177
        yield "\t\t\tif (eventData.length > 0) {
\t\t\t\tif (eventData[0].event == 'ticket' || eventData[0].event == 'task') {
\t\t\t\t\t\$('#conditions').prev('.uv-hr').fadeIn(10);
\t\t\t\t\t\$('#conditions').fadeIn(10);
\t\t\t\t}
\t\t\t}
\t\t\t";
        // line 183
        if (((isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 183, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, ($context["formData"] ?? null), "conditions", [], "any", true, true, false, 183))) {
            // line 184
            yield "\t\t\t\tthis.createConditions(\$.parseJSON(\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 184, $this->source); })()), "conditions", [], "any", false, false, false, 184)), "js"), "html", null, true);
            yield "\"));
\t\t\t";
        } else {
            // line 186
            yield "\t\t\t\tthis.addSelectOr();
\t\t\t";
        }
        // line 188
        yield "
\t \t\tthis.clearFirstTrSpan();
\t        // this.listenTo(sB.collection, 'add', this.addOne);
\t\t},
\t\tevents: {
\t\t\t'click .btn-and': 'addSelectAnd',
\t\t\t'click .btn-or': 'addSelectOr',
\t\t},
\t\tcreateConditions: function(conditionPreviouslyAdded) {
\t\t\t_.each(conditionPreviouslyAdded, this.addSelect, this);
\t\t},
\t\taddSelectAnd: function(e) {
\t\t\tthis.model = {'operation' : '&&'};
\t\t\tthis.addSelect(this.model);
\t\t},
\t\taddSelectOr: function(e) {
\t\t\tthis.model = {'operation' : '||'};
\t\t\tthis.addSelect(this.model);
\t\t},
\t\taddSelect: function(newModel) {
\t\t\tvar view = new sB.SelectView({model: newModel});
\t        this.target.append(viewEl = view.render().el);
\t        this.\$(viewEl).find('.wfCondition').trigger('change');
\t\t},
\t\tclearHtml: function() {
\t        this.target.html('');
\t\t\tthis.model = {'operation' : '&&'};
\t\t\tthis.addSelect(this.model);
\t \t\tthis.clearFirstTrSpan();
\t\t},
\t\tclearFirstTrSpan: function() {
\t \t\tvar target = this.target.find('tr').eq(0);
\t \t\ttarget.find('.uv-workflow-and, input[type=\"hidden\"]').remove();
\t \t\ttarget.find('.uv-workflow-hr-or').html('');
\t\t},
\t\tdatePicker: function() {
\t\t\t\$('.date').datetimepicker({
\t            format: 'YYYY-MM-DD',
\t\t\t});
\t\t}
\t});

\tsB.collection = new sB.Collection();
\tsB.selectView = new sB.SelectViews();
\tsB.selectView.datePicker();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskAutomation/Workflow/conditions.html.twig";
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
        return array (  274 => 188,  270 => 186,  264 => 184,  262 => 183,  254 => 177,  250 => 175,  244 => 173,  242 => 172,  146 => 79,  140 => 76,  136 => 75,  119 => 61,  74 => 19,  64 => 12,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script type=\"text/template\" id=\"select-add\">
\t<% if (typeof(operation) != 'undefined' && operation == '||') { %>
\t\t<div class=\"uv-workflow-hr-plank\">
\t        <div class=\"uv-workflow-hr-or\">
\t            <span class=\"uv-workflow-or\">{{ 'or'|trans }}</span>
\t        </div>
\t    </div>
\t\t<input type=\"hidden\" name=\"conditions[<%- keyNo %>][operation]\" value=\"||\">
\t<% } else if (typeof(operation) != 'undefined' && operation == '&&') { %>
\t\t<div class=\"uv-workflow-hr-plank\">
\t        <div class=\"uv-workflow-hr-and\">
\t            <span class=\"uv-workflow-and\">{{ 'and'|trans }}</span>
\t        </div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"conditions[<%- keyNo %>][operation]\" value=\"&&\">
\t<% } %>

\t<select class=\"uv-select uv-select-grouped select-condition wfCondition\" name=\"conditions[<%- keyNo %>][type]\" style=\"width: 200px;\">
\t\t<option value=\"\">{{ 'Select a Condition'|trans }}</option>
\t\t<% for(var key in conditions) { %>
\t\t\t<optgroup label=\"<%-key%>\">
\t\t\t\t<% for (var key2 in conditions[key]) { %>
\t\t\t\t\t<option value=\"<%-conditions[key][key2].value%>\" data-match=\"<%-conditions[key][key2].match%>\" <%- typeof(type) != 'undefined' && type == conditions[key][key2].value ? 'selected' : ''%>><%- conditions[key][key2].lable %></option>
\t\t\t\t<% } %>
\t\t\t</optgroup>
\t\t<% } %>
\t</select>

\t<span class=\"select-match\">
    </span>

    <span class=\"values\" style=\"display: inline-block;\">
\t\t<a class=\"uv-btn-tag remove-tr\" href=\"#\"><span class=\"uv-icon-remove-dark-box\"></a>
\t</span>
\t<p class=\"uv-field-message\" style=\"display: none;\"></p>
</script>

<script type=\"text/template\" id=\"match-add\">
\t<select class=\"uv-select uv-select-grouped wfConditionMatch\" name=\"conditions[<%- keyNo %>][match]\" style=\"width: 200px;\">
\t\t<% for(var key in matchArray){ %>
\t\t\t<option value=\"<%= matchArray[key].value %>\" <%- typeof(match) != 'undefined' && match == matchArray[key].value ? 'selected' : ''%>><%= matchArray[key].lable %></option>
\t\t<% } %>
\t</select>
</script>

<script type=\"text/template\" id=\"value-text\">
\t<% if (typeof(addDate) != 'undefined' && addDate) { %>
\t\t<span class=\"date value-container\">
\t        <input name=\"conditions[<%- keyNo %>][value]\" type=\"text\" class=\"uv-field form-control uv-date-picker date wfConditionValue\" data-date-format=\"<%- fieldType == 'time' ? 'LT' : (fieldType == 'datetime' ? 'YYYY-MM-DD H:m:s' : 'YYYY-MM-DD') %>\" value=\"<%- typeof(value) != 'undefined' ? value : '' %>\" style=\"width: 200px;\">
\t        <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span>
\t    </span>
\t<% } else { %>
\t\t<span class=\"value-container\">
\t\t\t<input type=\"text\" name=\"conditions[<%- keyNo %>][value]\" class=\"uv-field wfConditionValue\" value=\"<%- typeof(value) != 'undefined' ? value : ''%>\" style=\"width: 200px;\" />
\t\t</span>
\t<% } %>
</script>

<script type=\"text/template\" id=\"value-select\">
\t<select class=\"uv-select uv-select-grouped select-value wfConditionValue\" name=\"conditions[<%- keyNo %>][value]\" style=\"width: 200px;\">
\t\t<option>{{ 'Loading...'|trans }}</option>
\t</select>
</script>

<script type=\"text/template\" id=\"value-select-option\">
\t<option value=\"<%= id %>\" <%- typeof(value) != 'undefined' && value == id ? 'selected' : ''%>><%= name %></option>
</script>

<script type=\"text/javascript\">
\tif (typeof(sB) == 'undefined') {
\t\tvar sB = {};
\t}

\tsB.conditionRow = 0;
\tsB.JsonConditions = JSON.parse(\"{{ uvdesk_automations.getWorkflowConditions() | json_encode | e('js') }}\");
\tsB.MatchConditions = JSON.parse(\"{{ uvdesk_automations.getWorkflowMatchConditions() | json_encode | e('js') }}\");

\tsB.Collection = Backbone.Collection.extend({
\t    baseUrl: \"{{ path('helpdesk_member_workflow_condition_options_xhr') }}\",
\t\tfetchResult: function(dataMatch) {
\t\t\tthis.url = this.baseUrl + '/' + dataMatch;
\t        return this.fetch();
\t\t},
\t});

\tsB.SelectView = Backbone.View.extend({
\t\ttagName: 'div',
\t\tclassName: 'uv-field-block workflow-condition',
\t\tselectTemplate: _.template(\$('#select-add').html()),
\t\tmatchTemplate: _.template(\$('#match-add').html()),
\t\tvalueTextTemplate: _.template(\$('#value-text').html()),
\t\tvalueSelectTemplate: _.template(\$('#value-select').html()),
\t\tvalueSelectOptionTemplate: _.template(\$('#value-select-option').html()),
\t\tevents: {
\t\t\t'change .select-condition': 'selectMatch',
\t\t\t'click .remove-tr': 'removeTr'
\t\t},
\t\tinitialize: function() {
\t\t\tthis.disable = false;
\t\t\tthis.keyNo = sB.conditionRow;
\t\t\tsB.conditionRow++;
\t\t},
\t\trender: function() {
\t\t\tvar objKey = ((typeof(sB.PrevEvent) != 'undefined' && sB.PrevEvent) ? sB.PrevEvent : 'ticket');
\t\t\tthis.\$el.html(this.selectTemplate(_.extend(this.model, {'keyNo': this.keyNo, 'conditions': sB.JsonConditions[objKey]})));

\t\t\tif (objKey == 'ticket' || objKey == 'task' || objKey == 'email') {
\t\t\t\t\$('#conditions').prev('.uv-hr').fadeIn(10);
\t\t\t\t\$('#conditions').fadeIn(10);
\t\t\t} else {
\t\t\t\t\$('#conditions').prev('.uv-hr').fadeOut(10);
\t\t\t\t\$('#conditions').fadeOut(10);
\t\t\t\tthis.\$el.empty();
\t\t\t}

\t\t\treturn this;
\t\t},
\t\tremoveTr: function(e) {
\t\t\tthis.remove();
\t \t\tsB.selectView.clearFirstTrSpan();
\t\t},
\t\tselectMatch: function(e) {
\t\t\tif (this.disable) {
\t\t\t\treturn;
\t\t\t}

\t\t\tvar dataMatch = \$(e.target).find('option').eq(e.target.selectedIndex).attr('data-match');
\t\t\tthis.selectOpt = this.\$el.find('.wfCondition');
\t\t\tthis.siblingMatch = this.\$el.find('.select-match');
\t\t\tthis.siblingValue = this.\$el.find('.values');
\t\t\tthis.siblingMatch.find('.uv-select').remove();
\t\t\tthis.siblingMatch.prepend(this.matchTemplate(_.extend(this.model, {'matchArray' : sB.MatchConditions[dataMatch], 'keyNo': this.keyNo})));
\t\t\tthis.siblingValue.find('.value-container, .uv-select, .form-group, .form-control, .input-group.date').remove();
\t\t\tif (dataMatch == 'string' || dataMatch == 'email' || dataMatch == 'number') {
\t\t\t\tthis.siblingValue.prepend(this.valueTextTemplate(_.extend(this.model, {'addDate' : false, 'keyNo': this.keyNo})));
\t\t\t} else if (dataMatch == 'date' || dataMatch == 'datetime' || dataMatch == 'time') {
\t\t\t\tthis.siblingValue.prepend(this.valueTextTemplate(_.extend(this.model, {'addDate' : true, 'fieldType': dataMatch, 'keyNo': this.keyNo})));
\t\t\t\tthis.datePicker();
\t\t\t} else if (dataMatch == 'select') {
\t\t\t\tthis.selectOpt.prop('disabled', true);
\t\t\t\tthis.disable = true;
\t\t\t\tthis.siblingValue.prepend(this.valueSelectTemplate(_.extend(this.model, {'keyNo': this.keyNo})));
\t\t\t\tvar self = this;
\t\t\t\tsB.collection.fetchResult(e.target.value)
\t\t\t\t\t.done(function(){
\t\t\t\t\t\t\$(self.el).find('.select-value').find('option').remove();
\t\t\t\t\t\tself.addAll();
\t\t\t        })
\t\t\t        .fail(function(xhr) {
\t\t                if(url = xhr.getResponseHeader('Location'))
\t\t                    window.location = url;
\t\t            });
\t\t\t}
\t\t},
\t\taddAll: function() {
\t\t\t_.each(sB.collection.models, this.addOne, this);
\t\t\tthis.disable = false;
\t\t\tthis.selectOpt.prop('disabled', false);
\t\t},
\t\taddOne: function(newModel) {
\t\t\tthis.siblingValue.find('.select-value').append(this.valueSelectOptionTemplate(_.extend(this.model, newModel.attributes)));
\t\t},
\t\tdatePicker: function() {
\t\t\t\$('#conditions .date, #conditions .datetime, #conditions .time').datetimepicker();
\t\t}
\t});

\tsB.SelectViews = Backbone.View.extend({
\t\tel: '.uv-view',
\t\ttarget: \$('#conditions .workflow-conditions-body'),
\t\tinitialize: function() {
\t\t\t{% if formData and formData.events is defined %}
\t\t\t\tvar eventData = \$.parseJSON(\"{{ formData.events | json_encode | e('js') }}\");
\t\t\t{% else %}
\t\t\t\tvar eventData = {};
\t\t\t{% endif %}
\t\t\tif (eventData.length > 0) {
\t\t\t\tif (eventData[0].event == 'ticket' || eventData[0].event == 'task') {
\t\t\t\t\t\$('#conditions').prev('.uv-hr').fadeIn(10);
\t\t\t\t\t\$('#conditions').fadeIn(10);
\t\t\t\t}
\t\t\t}
\t\t\t{% if formData and formData.conditions is defined %}
\t\t\t\tthis.createConditions(\$.parseJSON(\"{{ formData.conditions | json_encode | e('js') }}\"));
\t\t\t{% else %}
\t\t\t\tthis.addSelectOr();
\t\t\t{% endif %}

\t \t\tthis.clearFirstTrSpan();
\t        // this.listenTo(sB.collection, 'add', this.addOne);
\t\t},
\t\tevents: {
\t\t\t'click .btn-and': 'addSelectAnd',
\t\t\t'click .btn-or': 'addSelectOr',
\t\t},
\t\tcreateConditions: function(conditionPreviouslyAdded) {
\t\t\t_.each(conditionPreviouslyAdded, this.addSelect, this);
\t\t},
\t\taddSelectAnd: function(e) {
\t\t\tthis.model = {'operation' : '&&'};
\t\t\tthis.addSelect(this.model);
\t\t},
\t\taddSelectOr: function(e) {
\t\t\tthis.model = {'operation' : '||'};
\t\t\tthis.addSelect(this.model);
\t\t},
\t\taddSelect: function(newModel) {
\t\t\tvar view = new sB.SelectView({model: newModel});
\t        this.target.append(viewEl = view.render().el);
\t        this.\$(viewEl).find('.wfCondition').trigger('change');
\t\t},
\t\tclearHtml: function() {
\t        this.target.html('');
\t\t\tthis.model = {'operation' : '&&'};
\t\t\tthis.addSelect(this.model);
\t \t\tthis.clearFirstTrSpan();
\t\t},
\t\tclearFirstTrSpan: function() {
\t \t\tvar target = this.target.find('tr').eq(0);
\t \t\ttarget.find('.uv-workflow-and, input[type=\"hidden\"]').remove();
\t \t\ttarget.find('.uv-workflow-hr-or').html('');
\t\t},
\t\tdatePicker: function() {
\t\t\t\$('.date').datetimepicker({
\t            format: 'YYYY-MM-DD',
\t\t\t});
\t\t}
\t});

\tsB.collection = new sB.Collection();
\tsB.selectView = new sB.SelectViews();
\tsB.selectView.datePicker();
</script>
", "@UVDeskAutomation/Workflow/conditions.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/automation-bundle/Resources/views/Workflow/conditions.html.twig");
    }
}
