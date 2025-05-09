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

/* @UVDeskCoreFramework/Reports/listAgentActivities.html.twig */
class __TwigTemplate_96c1e644677d1debc2be5f4fcd52227b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Reports/listAgentActivities.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Reports/listAgentActivities.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/Reports/listAgentActivities.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Activity"), "html", null, true);
        
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
        yield "\t<style>
\t\t.grid .tick {
\t\t\tstroke: #9F9F9F;
\t\t\topacity: .5 !important;
\t\t}
\t\t.tick text {
\t\t\tfont-size: 15px;
\t\t}
\t\t.uv-report-chart-col-rt .uv-pannel {
\t\t\tmin-height: 600px;
\t\t}
\t\t.uv-report-chart-col-rt .uv-pannel-body {
\t\t\tpadding: 0 0 0 20px;
\t\t}
\t\t.top-agent-list {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\tlist-style: none;
\t\t}
\t\t.top-agent-list li {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding: 14px 0;
\t\t}
\t\t.top-agent-list li:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\t.uv-agent-lt {
\t\t\tfloat: left;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.uv-agent-lt img {
\t\t\twidth: 40px;
\t\t\tborder-radius: 3px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t}
\t\t.uv-agent-rt {
\t\t\toverflow: hidden;
\t\t}
\t\tspan.uv-info span {
\t\t\twidth: 100%;
\t\t\tfloat: left;
\t\t}
\t\t.uv-rtl .agent-graph svg {
\t\t\tdirection: ltr;
\t\t}
\t\t.uv-paper .uv-element-block {
\t\t\tmargin: 10px 50px 10px 0px;
\t\t}
\t\t.uv-element-block {
\t\t\tfloat: right;
\t\t\twidth: unset;
\t\t}
        .uv-action-bar .uv-field-block.date {
            display: inline-block;
            margin-right: 8px;
        }
        .uv-action-bar label {
            font-size: 16px;
            vertical-align: middle;
            margin-right: 10px;
        }
        .uv-inner-section .uv-action-bar label{
            font-size: 15px;
        }
        @media screen and (min-width: 1100px) and (max-width: 1260px) {
            .uv-inner-section .uv-action-bar .uv-action-bar-col-lt, .uv-inner-section .uv-action-bar .uv-action-bar-col-rt {
                width: 55% !important;
            } 
        }
\t</style>
\t<div class=\"uv-inner-section\">
\t\t";
        // line 78
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 79
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Reports";
        // line 80
        yield "
\t\t";
        // line 81
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 81, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 81, $this->source); })())], "method", false, false, false, 81), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 81, $this->source); })())], "method", false, false, false, 81);
        yield "
\t\t
        <div id=\"agent-activities\" class=\"uv-view ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "cookies", [], "any", false, false, false, 83) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "cookies", [], "any", false, false, false, 83), "get", ["uv-asideView"], "method", false, false, false, 83))) {
            yield "uv-aside-view";
        }
        yield "\">
                ";
        // line 84
        $context["filterContext"] = [];
        // line 85
        yield "
                <h1>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Activity"), "html", null, true);
        yield " <span id=\"activity-count\"></span></h1>

                ";
        // line 89
        yield "                <div class=\"uv-element-block\">
                    <div class=\"uv-field-block\" id=\"agent-filter\">
                        <input class=\"uv-search-inline uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\" placeholder=\"Search Agent\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                            </div>

                            <ul class=\"uv-agents-list\">
                                ";
        // line 98
        $context["options"] = [];
        // line 99
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 100
            yield "                                    ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 100, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 100), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 100)]]);
            // line 101
            yield "                                    <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 101), "html", null, true);
            yield "\" class=\"agentId\">
                                        ";
            // line 102
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 102) != null)) {
                // line 103
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "scheme", [], "any", false, false, false, 103) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "httpHost", [], "any", false, false, false, 103)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 103), "html", null, true);
                yield "\"/>
                                        ";
            } else {
                // line 105
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 105, $this->source); })())), "html", null, true);
                yield "\"/> 
                                        ";
            }
            // line 107
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 107), "html", null, true);
            yield "
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    ";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                </li>
                                ";
        // line 114
        yield "                            </ul>
                        </div>

                        <div class=\"uv-filtered-tags\"></div>
                    </div>
                </div>

                ";
        // line 122
        yield "                <div class=\"uv-action-bar\">
                    <div class=\"uv-action-bar-col-lt\">
                        <label>";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Report From"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" class=\"uv-field uv-date-picker date date-from\" id=\"from\" value=\"\">
                        </div>
                        <label>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" class=\"uv-field uv-date-picker date date-to\"  id=\"to\" value=\"\">
                        </div>
                    </div>
                </div>

                <!-- Ticket list -->
                <div id=\"agent-activity-listings\" class=\"uv-table uv-list-view\">
                    <table>
                        <thead>
                            <tr>
                                <th class=\"uv-width-140\"></th>
                                <th>";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "</th>
                                <th class=\"uv-min-width-300\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</th>
                                <th data-index=\"customer-name\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "</th>
                                <th data-index=\"total-reply\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Replies"), "html", null, true);
        yield "</th>
                                <th data-index=\"last-reply\">";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent Last Reply"), "html", null, true);
        yield "</th>
                            </tr>
                        </thead>

                        <tbody class=\"list-items\" id=\"list-items\"></tbody>
                    </table>

                    <div class=\"navigation\"></div>
                </div>
                <!-- //Ticket list -->

                <script type=\"text/javascript\">
                    var filterContext = ";
        // line 157
        yield json_encode((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 157, $this->source); })()));
        yield "
                </script>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 164
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

        // line 165
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    <script id=\"agent-listing-template\" type=\"text/template\">
        <% if (collection.length <= 0) { %>
            <tr>
                <td colspan=\"7\" style=\"text-align: center;\">No results available</td>
            </tr>
        <% } else { %>
            <% collection.forEach(function(item) { %>
                <tr>
                    <td data-value=\"\">
                        <%= '<span class=\"uv-list-ticket-priority\" style=\"background:' + item.color + '\"></span>' %>
                    </td>
                    <td data-value=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Id"), "html", null, true);
        yield "\"><a href=\"<%- item.ticketURL %>\">#<%- item.ticketId %></a></td>
                    <td data-value=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "\"><%- item.subject %></td>
                    <td data-value=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "\"><%- item.customerName %></td>
                    <td data-value=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Reply"), "html", null, true);
        yield "\"><%- item.totalReply %></td>
                    <td data-value=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        yield "\"><%- item.lastReply %></td>
                </tr>
            <% }) %>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        \$(function () {
            var startGlobalDate = \"\";
            var endGlobalDate = \"\";
            var date = new Date();
            var currentMonth = date.getMonth();
            var currentDate = date.getDate();
            var currentYear = date.getFullYear();

            \$('.uv-action-bar .date').datetimepicker({
                maxDate: new Date(currentYear, currentMonth, currentDate),
                format: 'YYYY-MM-DD',
            }).on('dp.change', function(e) {
                \$('.date').removeClass('uv-field-error');
                var element = \$(e.currentTarget);
                var date = element.find('input').val();
            });

            var AgentActivityModel = Backbone.Model.extend({
                idAttribute : \"id\"
            });

            var AgentActivityCollection = AppCollection.extend({
                model: AgentActivityModel,
                url: \"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_agent_activity_xhr");
        yield "\",
                filterParameters : {
                    \"agent\" : '',
                    \"after\": \"\",
                    \"before\": \"\",
                },
                parse: function (resp, options) {
                    return resp.data;
                },
                initialize: function (params) {
                    this.activityView = new ActivityView({
                        collection: this
                    });
                },
                syncData : function() {
                  app.appView.showLoader();
                  var self = this;

                  this.fetch({
                      data: this.getValidParameters(),
                      reset: true,
                      success: function(collection, response, options) {
                          self.reset([]);

                          response.data.forEach(function (item) {
                              self.add(new AgentActivityModel(item));
                          })

                          app.appView.hideLoader();
                          app.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t  let activityCount = \$('#activity-count');
                          activityCount.html(`(\${app.pager.paginationData.totalCount})`);

                          if (self.length == 0 && app.pager.paginationData.current != \"0\") {
                              let url = app.pager.paginationData.url;
                              router.navigate(
                                  url.replace('replacePage', app.pager.paginationData.last),
                                  { trigger: true }
                              );
                          } else {
                              // Render records & pagination
                              app.pager.render();
                              self.activityView.renderRecords();
                          }
                      },
                      error: function (collection, xhr, options) {
                        console.log('sync failed:', collection, response, options);
                        if (url = xhr.getResponseHeader('Location')) {
                          window.location = url;
                        }
                      }
                  });
                },
                syncView: function () {
                    let queryParams = this.getValidParameters();

                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["agents"]) || array_key_exists("agents", $context) ? $context["agents"] : (function () { throw new RuntimeError('Variable "agents" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 270
            yield "                        if (\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 270), "html", null, true);
            yield "\" == queryParams.agent) {
                            \$('#agent-filter-input').val(\"";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 271), "html", null, true);
            yield "\")
                        }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        yield "
                    \$('#from').val(queryParams.after);
                    \$('#to').val(queryParams.before);
                }
            });

            var ActivityView = Backbone.View.extend({
                el: \$(\"#agent-activities\"),
                listing_template: _.template(\$(\"#agent-listing-template\").html()),
                events: {
                    'click .uv-dropdown-list li': 'applyFilter',
                    'keyup #agent-filter-input': 'initializeBack',
                    'dp.change input#from': 'initializeBack',
                    'dp.change input#to': 'initializeBack'
                },
                initializeBack: function(e) {
                     if (e.keyCode == 8 && \$('#agent-filter-input').val() == '' || e.type == \"dp\") {
                       if (new Date(\$(\".date-from\").val()) > new Date(\$(\".date-to\").val())) {
                            \$('.date').addClass('uv-field-error');
                            return;
                        }

                        agentActivityCollection.filterParameters.after = \$('#from').val();
                        agentActivityCollection.filterParameters.before = \$('#to').val();

                        if (e.keyCode == 8) {
                            agentActivityCollection.filterParameters.agent = null;
                        }
                        
                        agentActivityCollection.syncData();
                        agentActivityCollection.syncView();

                        agentActivityCollection.reset();
                        agentActivityCollection.state.currentPage = null;

                        let params = this.collection.getValidParameters();
                        var query = app.appView.buildQuery(\$.param(params));
                        router.navigate(query, { trigger: true });
                    }
                },
                initialize: function(params) {
                    this.renderRecords();
                },
                renderRecords: function() {
                    \$(\"#agent-activity-listings tbody\").html(this.listing_template({
                        collection: this.collection.toJSON()
                    }));
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);

                    if (currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if ((typeof(this.flag) == \"undefined\") && filterType == \"agent\") {
                            this.collection.filterParameters.agent = currentElement.attr('data-id');

                            \$('#agent-filter-input').val(currentElement.text().replace(/^\\s+|\\s+\$/g,''));
                        }
                    }

                    this.collection.filterParameters.after = \$('#from').val();
                    this.collection.filterParameters.before = \$('#to').val();

                    let params = this.collection.getValidParameters();
                    var query = app.appView.buildQuery(\$.param(params));

                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    router.navigate(query, { trigger: true });
                },
            });

            var agentActivityCollection = new AgentActivityCollection();

            Router = Backbone.Router.extend({
                routes: {
                    'agent/:agent(/after/:after)(/before/:before)(/page/:number)': 'paginate',
                    'after/:after(/before/:before)(/page/:number)': 'paginateData',
                    '': 'initial',     
                },
                initial: function() {
                    agentActivityCollection.filterParameters.after = \$('#from').val();
                    agentActivityCollection.filterParameters.before = \$('#to').val();
                    agentActivityCollection.filterParameters.agent  = null;

                    agentActivityCollection.syncData();
                    agentActivityCollection.syncView();

                    agentActivityCollection.reset();
                    agentActivityCollection.state.currentPage = null;
                },
                resetParams: function(agent, after, before) {
                    pageJustLoaded = false;
                    agentActivityCollection.state.currentPage = null;

                    agentActivityCollection.filterParameters.agent = agent;
                    agentActivityCollection.filterParameters.after = after;
                    agentActivityCollection.filterParameters.before = before;
                },
                resetData: function(after, before) {
                    pageJustLoaded = false;
                    agentActivityCollection.state.currentPage = null;

                    agentActivityCollection.filterParameters.agent = null;
                    agentActivityCollection.filterParameters.after = after;
                    agentActivityCollection.filterParameters.before = before;
                },
                paginate: function(agent, after, before, number) {
                    this.resetParams(agent, after, before);
                    agentActivityCollection.state.currentPage = number;
                    agentActivityCollection.syncData();
                    agentActivityCollection.syncView();

                    agentActivityCollection.filterParameters.agent = agent;
                },
                paginateData: function(after, before, number) {
                    this.resetData(after, before);
                    agentActivityCollection.state.currentPage = number;
                    agentActivityCollection.syncData();
                    agentActivityCollection.syncView();

                   agentActivityCollection.filterParameters.agent = null;
                },
            });

            var router = new Router({
                collection: agentActivityCollection
            });

            Backbone.history.start({ push_state: true });
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
        return "@UVDeskCoreFramework/Reports/listAgentActivities.html.twig";
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
        return array (  507 => 274,  498 => 271,  493 => 270,  489 => 269,  429 => 212,  396 => 182,  392 => 181,  388 => 180,  384 => 179,  380 => 178,  363 => 165,  350 => 164,  333 => 157,  318 => 145,  314 => 144,  310 => 143,  306 => 142,  302 => 141,  286 => 128,  279 => 124,  275 => 122,  266 => 114,  261 => 111,  258 => 110,  248 => 107,  242 => 105,  235 => 103,  233 => 102,  228 => 101,  225 => 100,  220 => 99,  218 => 98,  211 => 94,  204 => 89,  199 => 86,  196 => 85,  194 => 84,  188 => 83,  183 => 81,  180 => 80,  177 => 79,  175 => 78,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Agent Activity'|trans }}{% endblock %}

{% block pageContent %}
\t<style>
\t\t.grid .tick {
\t\t\tstroke: #9F9F9F;
\t\t\topacity: .5 !important;
\t\t}
\t\t.tick text {
\t\t\tfont-size: 15px;
\t\t}
\t\t.uv-report-chart-col-rt .uv-pannel {
\t\t\tmin-height: 600px;
\t\t}
\t\t.uv-report-chart-col-rt .uv-pannel-body {
\t\t\tpadding: 0 0 0 20px;
\t\t}
\t\t.top-agent-list {
\t\t\tmargin: 0;
\t\t\tpadding: 0;
\t\t\tlist-style: none;
\t\t}
\t\t.top-agent-list li {
\t\t\tborder-bottom: 1px solid #d3d3d3;
\t\t\tpadding: 14px 0;
\t\t}
\t\t.top-agent-list li:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\t.uv-agent-lt {
\t\t\tfloat: left;
\t\t\tmargin-right: 10px;
\t\t}
\t\t.uv-agent-lt img {
\t\t\twidth: 40px;
\t\t\tborder-radius: 3px;
\t\t\tdisplay: inline-block;
\t\t\tvertical-align: middle;
\t\t}
\t\t.uv-agent-rt {
\t\t\toverflow: hidden;
\t\t}
\t\tspan.uv-info span {
\t\t\twidth: 100%;
\t\t\tfloat: left;
\t\t}
\t\t.uv-rtl .agent-graph svg {
\t\t\tdirection: ltr;
\t\t}
\t\t.uv-paper .uv-element-block {
\t\t\tmargin: 10px 50px 10px 0px;
\t\t}
\t\t.uv-element-block {
\t\t\tfloat: right;
\t\t\twidth: unset;
\t\t}
        .uv-action-bar .uv-field-block.date {
            display: inline-block;
            margin-right: 8px;
        }
        .uv-action-bar label {
            font-size: 16px;
            vertical-align: middle;
            margin-right: 10px;
        }
        .uv-inner-section .uv-action-bar label{
            font-size: 15px;
        }
        @media screen and (min-width: 1100px) and (max-width: 1260px) {
            .uv-inner-section .uv-action-bar .uv-action-bar-col-lt, .uv-inner-section .uv-action-bar .uv-action-bar-col-rt {
                width: 55% !important;
            } 
        }
\t</style>
\t<div class=\"uv-inner-section\">
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Reports' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}
\t\t
        <div id=\"agent-activities\" class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
                {% set filterContext = {} %}

                <h1>{{ 'Agent Activity'|trans }} <span id=\"activity-count\"></span></h1>

                {# Filters - Agents #}
                <div class=\"uv-element-block\">
                    <div class=\"uv-field-block\" id=\"agent-filter\">
                        <input class=\"uv-search-inline uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\" placeholder=\"Search Agent\">
                        <div class=\"uv-dropdown-list uv-bottom-left\">
                            <div class=\"uv-dropdown-container\">
                                <label>{{ 'Filter With'|trans }}</label>
                            </div>

                            <ul class=\"uv-agents-list\">
                                {% set options = [] %}
                                {% for agent in agents %}
                                    {% set options = options|merge([{'id': agent.id, 'name': agent.name}]) %}
                                    <li data-id=\"{{agent.id}}\" class=\"agentId\">
                                        {% if agent.smallThumbnail != null %}
                                            <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agent.smallThumbnail }}\"/>
                                        {% else %}
                                            <img src=\"{{ asset(default_agent_image_path) }}\"/> 
                                        {% endif %}
                                        {{agent.name}}
                                    </li>
                                {% endfor %}
                                <li class=\"uv-no-results\" style=\"display: none;\">
                                    {{ 'No result found'|trans }}
                                </li>
                                {# {% set filterContext = filterContext|merge({'agent':options}) %} #}
                            </ul>
                        </div>

                        <div class=\"uv-filtered-tags\"></div>
                    </div>
                </div>

                {# Filters - Timestamp #}
                <div class=\"uv-action-bar\">
                    <div class=\"uv-action-bar-col-lt\">
                        <label>{{ 'Report From'|trans }}</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" class=\"uv-field uv-date-picker date date-from\" id=\"from\" value=\"\">
                        </div>
                        <label>{{ 'To'|trans }}</label>
                        <div class=\"uv-field-block date\">
                            <input type=\"text\" class=\"uv-field uv-date-picker date date-to\"  id=\"to\" value=\"\">
                        </div>
                    </div>
                </div>

                <!-- Ticket list -->
                <div id=\"agent-activity-listings\" class=\"uv-table uv-list-view\">
                    <table>
                        <thead>
                            <tr>
                                <th class=\"uv-width-140\"></th>
                                <th>{{ \"ID\"|trans }}</th>
                                <th class=\"uv-min-width-300\">{{ \"Subject\"|trans }}</th>
                                <th data-index=\"customer-name\">{{ \"Customer Name\"|trans }}</th>
                                <th data-index=\"total-reply\">{{ \"Total Replies\"|trans }}</th>
                                <th data-index=\"last-reply\">{{ \"Agent Last Reply\"|trans }}</th>
                            </tr>
                        </thead>

                        <tbody class=\"list-items\" id=\"list-items\"></tbody>
                    </table>

                    <div class=\"navigation\"></div>
                </div>
                <!-- //Ticket list -->

                <script type=\"text/javascript\">
                    var filterContext = {{filterContext|json_encode|raw}}
                </script>
            </div>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}

    <script id=\"agent-listing-template\" type=\"text/template\">
        <% if (collection.length <= 0) { %>
            <tr>
                <td colspan=\"7\" style=\"text-align: center;\">No results available</td>
            </tr>
        <% } else { %>
            <% collection.forEach(function(item) { %>
                <tr>
                    <td data-value=\"\">
                        <%= '<span class=\"uv-list-ticket-priority\" style=\"background:' + item.color + '\"></span>' %>
                    </td>
                    <td data-value=\"{{ 'Id'|trans }}\"><a href=\"<%- item.ticketURL %>\">#<%- item.ticketId %></a></td>
                    <td data-value=\"{{ 'Subject'|trans }}\"><%- item.subject %></td>
                    <td data-value=\"{{ 'Customer Name'|trans }}\"><%- item.customerName %></td>
                    <td data-value=\"{{ 'Total Reply'|trans }}\"><%- item.totalReply %></td>
                    <td data-value=\"{{ 'Last Reply'|trans }}\"><%- item.lastReply %></td>
                </tr>
            <% }) %>
        <% } %>
    </script>

    <script type=\"text/javascript\">
        \$(function () {
            var startGlobalDate = \"\";
            var endGlobalDate = \"\";
            var date = new Date();
            var currentMonth = date.getMonth();
            var currentDate = date.getDate();
            var currentYear = date.getFullYear();

            \$('.uv-action-bar .date').datetimepicker({
                maxDate: new Date(currentYear, currentMonth, currentDate),
                format: 'YYYY-MM-DD',
            }).on('dp.change', function(e) {
                \$('.date').removeClass('uv-field-error');
                var element = \$(e.currentTarget);
                var date = element.find('input').val();
            });

            var AgentActivityModel = Backbone.Model.extend({
                idAttribute : \"id\"
            });

            var AgentActivityCollection = AppCollection.extend({
                model: AgentActivityModel,
                url: \"{{ path('helpdesk_member_agent_activity_xhr') }}\",
                filterParameters : {
                    \"agent\" : '',
                    \"after\": \"\",
                    \"before\": \"\",
                },
                parse: function (resp, options) {
                    return resp.data;
                },
                initialize: function (params) {
                    this.activityView = new ActivityView({
                        collection: this
                    });
                },
                syncData : function() {
                  app.appView.showLoader();
                  var self = this;

                  this.fetch({
                      data: this.getValidParameters(),
                      reset: true,
                      success: function(collection, response, options) {
                          self.reset([]);

                          response.data.forEach(function (item) {
                              self.add(new AgentActivityModel(item));
                          })

                          app.appView.hideLoader();
                          app.pager.paginationData = response.pagination_data;

\t\t\t\t\t\t  let activityCount = \$('#activity-count');
                          activityCount.html(`(\${app.pager.paginationData.totalCount})`);

                          if (self.length == 0 && app.pager.paginationData.current != \"0\") {
                              let url = app.pager.paginationData.url;
                              router.navigate(
                                  url.replace('replacePage', app.pager.paginationData.last),
                                  { trigger: true }
                              );
                          } else {
                              // Render records & pagination
                              app.pager.render();
                              self.activityView.renderRecords();
                          }
                      },
                      error: function (collection, xhr, options) {
                        console.log('sync failed:', collection, response, options);
                        if (url = xhr.getResponseHeader('Location')) {
                          window.location = url;
                        }
                      }
                  });
                },
                syncView: function () {
                    let queryParams = this.getValidParameters();

                    {% for agent in agents %}
                        if (\"{{agent.id}}\" == queryParams.agent) {
                            \$('#agent-filter-input').val(\"{{agent.name}}\")
                        }
                    {% endfor %}

                    \$('#from').val(queryParams.after);
                    \$('#to').val(queryParams.before);
                }
            });

            var ActivityView = Backbone.View.extend({
                el: \$(\"#agent-activities\"),
                listing_template: _.template(\$(\"#agent-listing-template\").html()),
                events: {
                    'click .uv-dropdown-list li': 'applyFilter',
                    'keyup #agent-filter-input': 'initializeBack',
                    'dp.change input#from': 'initializeBack',
                    'dp.change input#to': 'initializeBack'
                },
                initializeBack: function(e) {
                     if (e.keyCode == 8 && \$('#agent-filter-input').val() == '' || e.type == \"dp\") {
                       if (new Date(\$(\".date-from\").val()) > new Date(\$(\".date-to\").val())) {
                            \$('.date').addClass('uv-field-error');
                            return;
                        }

                        agentActivityCollection.filterParameters.after = \$('#from').val();
                        agentActivityCollection.filterParameters.before = \$('#to').val();

                        if (e.keyCode == 8) {
                            agentActivityCollection.filterParameters.agent = null;
                        }
                        
                        agentActivityCollection.syncData();
                        agentActivityCollection.syncView();

                        agentActivityCollection.reset();
                        agentActivityCollection.state.currentPage = null;

                        let params = this.collection.getValidParameters();
                        var query = app.appView.buildQuery(\$.param(params));
                        router.navigate(query, { trigger: true });
                    }
                },
                initialize: function(params) {
                    this.renderRecords();
                },
                renderRecords: function() {
                    \$(\"#agent-activity-listings tbody\").html(this.listing_template({
                        collection: this.collection.toJSON()
                    }));
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);

                    if (currentElement.attr(\"data-id\")) {
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if ((typeof(this.flag) == \"undefined\") && filterType == \"agent\") {
                            this.collection.filterParameters.agent = currentElement.attr('data-id');

                            \$('#agent-filter-input').val(currentElement.text().replace(/^\\s+|\\s+\$/g,''));
                        }
                    }

                    this.collection.filterParameters.after = \$('#from').val();
                    this.collection.filterParameters.before = \$('#to').val();

                    let params = this.collection.getValidParameters();
                    var query = app.appView.buildQuery(\$.param(params));

                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    router.navigate(query, { trigger: true });
                },
            });

            var agentActivityCollection = new AgentActivityCollection();

            Router = Backbone.Router.extend({
                routes: {
                    'agent/:agent(/after/:after)(/before/:before)(/page/:number)': 'paginate',
                    'after/:after(/before/:before)(/page/:number)': 'paginateData',
                    '': 'initial',     
                },
                initial: function() {
                    agentActivityCollection.filterParameters.after = \$('#from').val();
                    agentActivityCollection.filterParameters.before = \$('#to').val();
                    agentActivityCollection.filterParameters.agent  = null;

                    agentActivityCollection.syncData();
                    agentActivityCollection.syncView();

                    agentActivityCollection.reset();
                    agentActivityCollection.state.currentPage = null;
                },
                resetParams: function(agent, after, before) {
                    pageJustLoaded = false;
                    agentActivityCollection.state.currentPage = null;

                    agentActivityCollection.filterParameters.agent = agent;
                    agentActivityCollection.filterParameters.after = after;
                    agentActivityCollection.filterParameters.before = before;
                },
                resetData: function(after, before) {
                    pageJustLoaded = false;
                    agentActivityCollection.state.currentPage = null;

                    agentActivityCollection.filterParameters.agent = null;
                    agentActivityCollection.filterParameters.after = after;
                    agentActivityCollection.filterParameters.before = before;
                },
                paginate: function(agent, after, before, number) {
                    this.resetParams(agent, after, before);
                    agentActivityCollection.state.currentPage = number;
                    agentActivityCollection.syncData();
                    agentActivityCollection.syncView();

                    agentActivityCollection.filterParameters.agent = agent;
                },
                paginateData: function(after, before, number) {
                    this.resetData(after, before);
                    agentActivityCollection.state.currentPage = number;
                    agentActivityCollection.syncData();
                    agentActivityCollection.syncView();

                   agentActivityCollection.filterParameters.agent = null;
                },
            });

            var router = new Router({
                collection: agentActivityCollection
            });

            Backbone.history.start({ push_state: true });
        });
    </script>
{% endblock %}
", "@UVDeskCoreFramework/Reports/listAgentActivities.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Reports/listAgentActivities.html.twig");
    }
}
