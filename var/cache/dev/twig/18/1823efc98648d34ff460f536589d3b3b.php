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

/* @UVDeskCoreFramework/ticketList.html.twig */
class __TwigTemplate_00c179d6185bbca85c9189ea8f5956b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticketList.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/ticketList.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/ticketList.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        
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
        yield "    <style>
        .uv-dropdown.asset-visibility li input {
            z-index: 100;
        }
        .uv-dropdown.asset-visibility ul li label {
            color: #333333;
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
            cursor: pointer;
            margin: auto;
        }
        .uv-table td a {
            color: #333333;
        }
        .uv-table.uv-list-view table tbody td.uv-width-100 {
            width: 100px !important;
        }
        .uv-table.uv-list-view td[data-index=\"agent\"] {
            white-space: nowrap;
        }
        .uv-view:not(.uv-stack-view) .uv-table td a {
            display: inline-block;
            width: 100%;
        }
        .uv-action-bar-col-lt.uv-width-100 {
            width: 100% !important;
        }
        #quick-view-modal .uv-view {
            padding: 0;
            overflow-y: visible;
            display: inline-block;
            position: relative;
        }
        #quick-view-modal .uv-view .uv-ticket-section {
            margin-top: 0;
        }
        #quick-view-modal .uv-ticket-head {
            border-top: 1px solid #d3d3d3;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #quick-view-modal .uv-ticket-strip {
            padding-bottom: 0;
        }
        #quick-view-modal .uv-ticket-strip .uv-btn-tag {
            margin-bottom: 0;
        }
        #quick-view-modal .quick-view-navigation {
            position: absolute;
            right: 50px;
            top: 9px;
        }
        #quick-view-modal .quick-view-navigation ~ a {
            width: calc(100% - 100px);
            display: inline-block;
        }
        #quick-view-modal .uv-btn-tag[disabled=\"disabled\"] {
            opacity: .4;
            cursor: not-allowed;
            border-color: #B1B1AE !important;
        }
        #quick-view-modal .uv-loader {
            transform: scale(0.5);
            top: 14px;
            right: 60px;
        }
        tr.unread {
            background: #f1f1f1;
        }
        .uv-table table tbody tr.not-assigned td {
            border-bottom: 1px solid #ffcacc;
        }
        @media screen and (max-width: 500px) {
            .uv-action-bar label {
                display: inline-block;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "    ";
        // line 89
        yield "    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\"></div>
    </div>

    <div class=\"uv-inner-section\">
        ";
        // line 95
        yield "        <div class=\"uv-aside\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "cookies", [], "any", false, false, false, 95) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "cookies", [], "any", false, false, false, 95), "get", ["uv-asideView"], "method", false, false, false, 95))) {
            yield " style=\"display: none;\" ";
        }
        yield " >
            <div class=\"uv-aside-default\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</h6>
                    </div>

                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard");
        yield "';\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                    </div>
                </div>

                <div class=\"uv-aside-nav\">
                    <ul>
                        ";
        // line 110
        yield "                        <ul class=\"predefined-label-list uv-aside-list\">
                            <li>
                                <a href=\"#\" class=\"uv-aside-active\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>

                                ";
        // line 115
        yield "                                <ul class=\"status-list\">
                                    <li>
                                        <a href=\"#\" data-id=\"1\" class=\"uv-aside-nav-active\"><span class=\"name\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"2\"><span class=\"name\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pending"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"6\"><span class=\"name\">";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Answered"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"3\"><span class=\"name\">";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Resolved"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"4\"><span class=\"name\">";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Closed"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"5\"><span class=\"name\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Spam"), "html", null, true);
        yield "</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#new\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#unassigned\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#notreplied\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#mine\">";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Tickets"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#starred\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#trashed\" style=\"border-bottom: none\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trashed"), "html", null, true);
        yield " <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                        </ul>

                        ";
        // line 157
        yield "                        <ul class=\"uv-aside-custom\"></ul>
                    </ul>
                </div>

                <a class=\"uv-btn-small add-new-label\" href=\"#\"><span class=\"uv-icon-add\"></span> ";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "</a>
            </div>

            <!-- Label add and edit -->
            <div class=\"uv-add-edit-label\" style=\"display: block\"></div>
        </div>

        ";
        // line 169
        yield "        <div class=\"uv-view ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "cookies", [], "any", false, false, false, 169) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "request", [], "any", false, false, false, 169), "cookies", [], "any", false, false, false, 169), "get", ["uv-asideView"], "method", false, false, false, 169))) {
            yield " uv-aside-view ";
        }
        yield "\">
            <h1>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</h1>

            ";
        // line 173
        yield "            <div class=\"uv-action-bar\">
                ";
        // line 175
        yield "                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\"><span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                ";
        // line 183
        yield "                <div class=\"uv-action-col-wrapper\">
                    ";
        // line 185
        yield "                    <div class=\"uv-action-bar-col-lt\">
                        <div class=\"filter\">
                            ";
        // line 188
        yield "                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By:"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Replied"), "html", null, true);
        yield "</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort By"), "html", null, true);
        yield "</label>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 200
        yield "                            <div class=\"uv-dropdown asset-visibility\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assets Visibility"), "html", null, true);
        yield "</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: 215px;\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Assets Visibility"), "html", null, true);
        yield "</label>

                                        <ul>
                                            ";
        // line 209
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"source\" name=\"assetVisibility[]\" value=\"source\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"source\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Channel/Source"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 221
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-name\" name=\"assetVisibility[]\" value=\"customer-name\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-name\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 233
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-email\" name=\"assetVisibility[]\" value=\"customer-email\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-email\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 245
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"timestamp\" name=\"assetVisibility[]\" value=\"timestamp\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"timestamp\">";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 257
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"group\" name=\"assetVisibility[]\" value=\"group\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"group\">";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 269
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"team\" name=\"assetVisibility[]\" value=\"team\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"team\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 281
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"type1\" name=\"assetVisibility[]\" value=\"type1\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"type1\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 293
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"replies\" name=\"assetVisibility[]\" value=\"replies\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"replies\">";
        // line 301
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "</label>
                                            </li>

                                            ";
        // line 305
        yield "                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"agent\" name=\"assetVisibility[]\" value=\"agent\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"agent\">";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 323
        yield "                    <div class=\"uv-action-bar-col-lt\" style=\"display: none\">
                        <!-- Mass action -->
                        <div class=\"mass-action\">
                            <div class=\"property-block\">
                                ";
        // line 328
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 328, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET"], "method", false, false, false, 328)) {
            // line 329
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                                ";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 340, $this->source); })()), "getAgentPartialDataCollection", [], "method", false, false, false, 340));
            foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
                // line 341
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 341), "html", null, true);
                yield "\">
                                                        ";
                // line 342
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 342) != null)) {
                    // line 343
                    yield "                                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "scheme", [], "any", false, false, false, 343) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 343, $this->source); })()), "request", [], "any", false, false, false, 343), "httpHost", [], "any", false, false, false, 343)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 343), "html", null, true);
                    yield "\"/>
                                                        ";
                } else {
                    // line 345
                    yield "                                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 345, $this->source); })())), "html", null, true);
                    yield "\" alt=\"\"/>
                                                        ";
                }
                // line 347
                yield "                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 347), "html", null, true);
                yield "
                                                    </li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 354
        yield "
                                ";
        // line 356
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 356, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 356)) {
            // line 357
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list group\" data-action=\"group\">
                                                ";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 368, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 368));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 369
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 369), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 369), "html", null, true);
                yield "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 371
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 375
        yield "
                                ";
        // line 377
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 377, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_ASSIGN_TICKET_GROUP"], "method", false, false, false, 377)) {
            // line 378
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 382
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list team\" data-action=\"team\">
                                                ";
            // line 389
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 389, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 389));
            foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
                // line 390
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 390), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 390), "html", null, true);
                yield "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 392
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 396
        yield "
                                ";
        // line 398
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 398, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_STATUS"], "method", false, false, false, 398)) {
            // line 399
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
            yield "</label>

                                                <ul class=\"status\" data-action=\"status\">
                                                    ";
            // line 406
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 406, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 407
                yield "                                                        <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 407), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 407)), "html", null, true);
                yield "</a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 409
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 414
        yield "
                                ";
        // line 416
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 416, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_TYPE"], "method", false, false, false, 416)) {
            // line 417
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
            yield "</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
            yield "\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list type\" data-action=\"type\">
                                                ";
            // line 428
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 428, $this->source); })()), "getTypes", [], "method", false, false, false, 428));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 429
                yield "                                                    <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 429), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 429), "html", null, true);
                yield "</a></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            yield "                                            </ul>
                                        </div>
                                    </div>
                                ";
        }
        // line 435
        yield "
                                ";
        // line 437
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 437, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_UPDATE_TICKET_PRIORITY"], "method", false, false, false, 437)) {
            // line 438
            yield "                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            yield "</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
            yield "</label>

                                                <ul class=\"priority\" data-action=\"priority\">
                                                    ";
            // line 445
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketPriorityCollection"]) || array_key_exists("ticketPriorityCollection", $context) ? $context["ticketPriorityCollection"] : (function () { throw new RuntimeError('Variable "ticketPriorityCollection" does not exist.', 445, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
                // line 446
                yield "                                                        <li data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 446), "html", null, true);
                yield "\"><a href=\"#\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "description", [], "any", false, false, false, 446)), "html", null, true);
                yield "</a></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['priority'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            yield "                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 453
        yield "
                                ";
        // line 455
        yield "                                <div class=\"uv-dropdown\">
                                    <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "</div>
                                    <div class=\"uv-dropdown-list uv-bottom-left\">
                                        <div class=\"uv-dropdown-container\">
                                            <label>";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "</label>

                                            <div class=\"uv-search-sm\">
                                                <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                            </div>
                                        </div>

                                        <ul class=\"uv-search-list label\" data-action=\"label\"></ul>
                                    </div>
                                </div>

                                ";
        // line 471
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 471, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 471)) {
            // line 472
            yield "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"trashed\" style=\"margin-left: 5px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
            yield "</a>
                                ";
        }
        // line 474
        yield "                            </div>

                            ";
        // line 477
        yield "                            <div class=\"trashed-block\" style=\"display: none\">
                                ";
        // line 479
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 479, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_RESTORE_TICKET"], "method", false, false, false, 479)) {
            // line 480
            yield "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-restore\" data-action=\"restore\" style=\"margin-left: 5px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore"), "html", null, true);
            yield "</a>
                                ";
        }
        // line 482
        yield "
                                ";
        // line 484
        yield "                                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 484, $this->source); })()), "isAccessAuthorized", ["ROLE_AGENT_DELETE_TICKET"], "method", false, false, false, 484)) {
            // line 485
            yield "                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete-forever\" data-action=\"delete\" style=\"margin-left: 5px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete Forever"), "html", null, true);
            yield "</a>
                                ";
        }
        // line 487
        yield "                            </div>
                        </div>
                    </div>

                    ";
        // line 492
        yield "                    <div class=\"uv-action-bar-col-rt\">
                        <!-- Search Tickets -->
                        <input type=\"text\" class=\"uv-search-inline\" placeholder=\"";
        // line 494
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        yield "\">

                        <!-- Extra Filters -->
                        <div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\" data-target=\"uv-filter-view\"><span class=\"uv-icon-filter\"></span>";
        // line 497
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter View"), "html", null, true);
        yield "</div>
                    </div>
                </div>
            </div>

            ";
        // line 503
        yield "            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                    <tr>
                        <th class=\"uv-width-140\"></th>
                        <th>";
        // line 508
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "</th>
                        <th class=\"uv-min-width-300\">";
        // line 509
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "</th>
                        <th data-index=\"customer-name\">";
        // line 510
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "</th>
                        <th data-index=\"customer-email\">";
        // line 511
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "</th>
                        <th data-index=\"timestamp\">";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "</th>
                        <th style =\"min-width:100px\" data-index=\"lastReply\">";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        yield "</th>
                        <th data-index=\"group\">";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</th>
                        <th data-index=\"team\">";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</th>
                        <th data-index=\"type1\">";
        // line 516
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</th>
                        <th data-index=\"replies\">";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "</th>
                        <th data-index=\"agent\">";
        // line 518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</th>
                    </tr>
                    </thead>

                    <tbody></tbody>
                </table>

                <div class=\"navigation\"></div>
            </div>
        </div>

        ";
        // line 530
        yield "        <div class=\"uv-filter-view\" id=\"uv-filter-view\">
            ";
        // line 532
        yield "            <div class=\"uv-filter-head\">
                <div class=\"uv-filter-title\">
                    <h6>";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tickets"), "html", null, true);
        yield "</h6>
                    <span>";
        // line 535
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save set of filters as a preset to stay more productive"), "html", null, true);
        yield "</span>
                </div>

                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\"><span></span></div>
            </div>

            ";
        // line 542
        yield "            <div class=\"uv-filter-paper\">
                ";
        // line 544
        yield "                <div class=\"uv-filter-options\">
                    <script>
                        var userFilters = {};
                    </script>

                    ";
        // line 550
        yield "                    <div class=\"uv-element-block\" style=\"border-bottom: 1px solid #D3D3D3; padding-bottom: 5px;\">
                        <label class=\"uv-field-label\">";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filters"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\">
                            <div class=\"uv-customize-wrapper\">
                                <select class=\"uv-select uv-select-70\" id=\"saved-filter\">
                                    ";
        // line 555
        $context["filters"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 555, $this->source); })()), "user", [], "any", false, false, false, 555), "agentInstance", [], "any", false, false, false, 555), "userSavedFilters", [], "any", false, false, false, 555);
        // line 556
        yield "                                    ";
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 556, $this->source); })()))) {
            // line 557
            yield "                                        <option value=\"\">-- Saved Filter --</option>
                                        ";
            // line 558
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 558, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["userFilter"]) {
                // line 559
                yield "                                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 559), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "name", [], "any", false, false, false, 559), "html", null, true);
                yield "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['userFilter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 561
            yield "                                    ";
        } else {
            // line 562
            yield "                                        <option value=\"\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No saved filter created"), "html", null, true);
            yield "</option>
                                    ";
        }
        // line 564
        yield "                                </select>
                                ";
        // line 565
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 565, $this->source); })()), "user", [], "any", false, false, false, 565), "agentInstance", [], "any", false, false, false, 565), "userSavedFilters", [], "any", false, false, false, 565));
        foreach ($context['_seq'] as $context["_key"] => $context["userFilter"]) {
            // line 566
            yield "                                    <script>
                                        ";
            // line 567
            $context["isDefault"] = 0;
            // line 568
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 568, $this->source); })()), "user", [], "any", false, false, false, 568), "agentInstance", [], "any", false, false, false, 568), "defaultFiltering", [], "any", false, false, false, 568) == CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 568))) {
                // line 569
                yield "                                        ";
                $context["isDefault"] = 1;
                // line 570
                yield "                                        ";
            }
            // line 571
            yield "                                        userFilters[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 571), "html", null, true);
            yield "] = ";
            yield json_encode(["id" => CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "id", [], "any", false, false, false, 571), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "name", [], "any", false, false, false, 571), "route" => CoreExtension::getAttribute($this->env, $this->source, $context["userFilter"], "route", [], "any", false, false, false, 571), "is_default" => (isset($context["isDefault"]) || array_key_exists("isDefault", $context) ? $context["isDefault"] : (function () { throw new RuntimeError('Variable "isDefault" does not exist.', 571, $this->source); })())]);
            yield ";
                                    </script>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['userFilter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        yield "                                <span class=\"uv-customize\" style=\"display: none\" data-toggle=\"tooltip\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Filter"), "html", null, true);
        yield "\"></span>
                            </div>
                        </div>
                    </div>

                    ";
        // line 579
        $context["filterContext"] = [];
        // line 580
        yield "                    ";
        // line 581
        yield "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 587
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    ";
        // line 590
        $context["options"] = [];
        // line 591
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 591, $this->source); })()), "getAgentsPartialDetails", [], "any", false, false, false, 591));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 592
            yield "                                        ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 592, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 592), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 592)]]);
            // line 593
            yield "                                        <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "id", [], "any", false, false, false, 593), "html", null, true);
            yield "\">
                                            ";
            // line 594
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 594) != null)) {
                // line 595
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 595, $this->source); })()), "request", [], "any", false, false, false, 595), "scheme", [], "any", false, false, false, 595) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 595, $this->source); })()), "request", [], "any", false, false, false, 595), "httpHost", [], "any", false, false, false, 595)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "smallThumbnail", [], "any", false, false, false, 595), "html", null, true);
                yield "\"/>
                                            ";
            } else {
                // line 597
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 597, $this->source); })())), "html", null, true);
                yield "\"/>
                                            ";
            }
            // line 599
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agent"], "name", [], "any", false, false, false, 599), "html", null, true);
            yield "
                                        </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['agent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        yield "                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 603
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                    </li>
                                    ";
        // line 605
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 605, $this->source); })()), ["agent" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 605, $this->source); })())]);
        // line 606
        yield "                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 613
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 618
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        ";
        // line 622
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        ";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                    </li>
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 634
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 641
        $context["options"] = [];
        // line 642
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 642, $this->source); })()), "getSupportGroups", [], "method", false, false, false, 642));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 643
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 643, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 643), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 643)]]);
            // line 644
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 644), "html", null, true);
            yield "\">
                                                ";
            // line 645
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 645), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 648
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 649
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 651
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 651, $this->source); })()), ["group" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 651, $this->source); })())]);
        // line 652
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 665
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 667
        $context["options"] = [];
        // line 668
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 668, $this->source); })()), "getSupportTeams", [], "method", false, false, false, 668));
        foreach ($context['_seq'] as $context["_key"] => $context["team"]) {
            // line 669
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 669, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 669), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 669)]]);
            // line 670
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "id", [], "any", false, false, false, 670), "html", null, true);
            yield "\">
                                                ";
            // line 671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["team"], "name", [], "any", false, false, false, 671), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['team'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 674
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 675
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 677
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 677, $this->source); })()), ["team" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 677, $this->source); })())]);
        // line 678
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 686
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 693
        $context["options"] = [];
        // line 694
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 694, $this->source); })()), "getTypes", [], "method", false, false, false, 694));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 695
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 695, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 695), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 695)]]);
            // line 696
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "id", [], "any", false, false, false, 696), "html", null, true);
            yield "\">
                                                ";
            // line 697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, false, 697), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['type'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 703
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 703, $this->source); })()), ["type" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 703, $this->source); })())]);
        // line 704
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 712
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 719
        $context["options"] = [];
        // line 720
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 720, $this->source); })()), "getPriorities", [], "method", false, false, false, 720));
        foreach ($context['_seq'] as $context["_key"] => $context["priority"]) {
            // line 721
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 721, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 721), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "code", [], "any", false, false, false, 721), "color" => CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "colorCode", [], "any", false, false, false, 721)]]);
            // line 722
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "id", [], "any", false, false, false, 722), "html", null, true);
            yield "\">
                                                ";
            // line 723
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["priority"], "code", [], "any", false, false, false, 723)), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['priority'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 726
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 727
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 729
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 729, $this->source); })()), ["priority" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 729, $this->source); })())]);
        // line 730
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 738
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tag"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"tag-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            ";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 749
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 758
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Source"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 763
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 765
        $context["options"] = [];
        // line 766
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 766, $this->source); })()), "getAllSources", [], "method", false, false, false, 766));
        foreach ($context['_seq'] as $context["key"] => $context["source"]) {
            // line 767
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 767, $this->source); })()), [["id" => $context["key"], "name" => $context["source"]]]);
            // line 768
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\">
                                                ";
            // line 769
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["source"]), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['source'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 772
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 773
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 775
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 775, $this->source); })()), ["source" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 775, $this->source); })())]);
        // line 776
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailbox"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"mailbox-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"mailbox\" id=\"mailbox-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>";
        // line 788
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter With"), "html", null, true);
        yield "</label>
                                    <ul class=\"\">
                                        ";
        // line 790
        $context["options"] = [];
        // line 791
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket_service"]) || array_key_exists("ticket_service", $context) ? $context["ticket_service"] : (function () { throw new RuntimeError('Variable "ticket_service" does not exist.', 791, $this->source); })()), "getAllMailboxes", [], "method", false, false, false, 791));
        foreach ($context['_seq'] as $context["_key"] => $context["mailbox"]) {
            // line 792
            yield "                                            ";
            $context["options"] = Twig\Extension\CoreExtension::merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 792, $this->source); })()), [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "email", [], "any", false, false, false, 792), "name" => CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "name", [], "any", false, false, false, 792)]]);
            // line 793
            yield "                                            <li data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "email", [], "any", false, false, false, 793), "html", null, true);
            yield "\">
                                                ";
            // line 794
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["mailbox"], "name", [], "any", false, false, false, 794)), "html", null, true);
            yield "
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mailbox'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 797
        yield "                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            ";
        // line 798
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No result found"), "html", null, true);
        yield "
                                        </li>
                                        ";
        // line 800
        $context["filterContext"] = Twig\Extension\CoreExtension::merge((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 800, $this->source); })()), ["mailbox" => (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 800, $this->source); })())]);
        // line 801
        yield "                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Before"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block range\" id=\"before-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"before\" id=\"before-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 816
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("After"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block range\" id=\"after-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"after\" id=\"after-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies less than"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"1\" data-filter-type=\"replies-less\" id=\"repliesLess-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 830
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies more than"), "html", null, true);
        yield "</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"0\" data-filter-type=\"replies-more\" id=\"repliesMore-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-action-buttons\">
                    </div>

                    ";
        // line 840
        yield "                    <a class=\"uv-btn-remove\" href=\"#\"><span class=\"uv-icon-discard\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear All"), "html", null, true);
        yield "</a>
                </div>

                ";
        // line 844
        yield "                <div class=\"uv-filter-edit\" style=\"display: none;\"></div>
            </div>

            <script type=\"text/javascript\">
                var filterContext = ";
        // line 848
        yield json_encode((isset($context["filterContext"]) || array_key_exists("filterContext", $context) ? $context["filterContext"] : (function () { throw new RuntimeError('Variable "filterContext" does not exist.', 848, $this->source); })()));
        yield "
            </script>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 854
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

        // line 855
        yield "    ";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    ";
        // line 858
        yield "    <script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'ticket.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.id/<% if(sort == 'ticket.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.id\">
                ";
        // line 861
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ticket Id", [], "messages");
        // line 862
        yield "                <% if(sort == 'ticket.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'ticket.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.updatedAt/<% if(sort == 'ticket.updatedAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.updatedAt\">
                ";
        // line 870
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Replied", [], "messages");
        // line 871
        yield "                <% if(sort == 'ticket.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'agentName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/agentName/<% if(sort == 'agentName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"agentName\">
                ";
        // line 879
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assign To", [], "messages");
        // line 880
        yield "                <% if(sort == 'agentName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerEmail') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerEmail/<% if(sort == 'customerEmail') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerEmail\">
                ";
        // line 888
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer Email", [], "messages");
        // line 889
        yield "                <% if(sort == 'customerEmail') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerName/<% if(sort == 'customerName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerName\">
                ";
        // line 897
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer Name", [], "messages");
        // line 898
        yield "                <% if(sort == 'customerName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>
    </script>

    ";
        // line 906
        yield "    <script id=\"ticket_status_list_tmp\" type=\"text/template\">
        <ul class=\"status-list\">
            ";
        // line 908
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ticketStatusCollection"]) || array_key_exists("ticketStatusCollection", $context) ? $context["ticketStatusCollection"] : (function () { throw new RuntimeError('Variable "ticketStatusCollection" does not exist.', 908, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 909
            yield "                <li>
                    <a href=\"#\" class=\"<% if(active == ";
            // line 910
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 910), "html", null, true);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 910) == 1)) {
                yield " || active == 0";
            }
            yield ") { %>uv-aside-nav-active<% } %>\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 910), "html", null, true);
            yield "\">
                        <span class=\"name\">";
            // line 911
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "description", [], "any", false, false, false, 911)), "html", null, true);
            yield "</span>
                        <span class=\"uv-flag-gray\">
                            <% if(status && status[1] != undefined) { %>
                                <%= status[";
            // line 914
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "id", [], "any", false, false, false, 914), "html", null, true);
            yield "] %>
                            <% } else { %>
                                0
                            <% } %>
                        </span>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 922
        yield "        </ul>
    </script>

    ";
        // line 926
        yield "    <script id=\"predefined_label_tmp\" type=\"text/template\">
        <li>
            <a href=\"#\" <% if (active == '') { %> class=\"uv-aside-active\" <% } %>>
            ";
        // line 929
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\"><%= labelDetails.predefind.all %></span>
            </a>
        </li>
        <li>
            <a href=\"#new\" <% if(active == 'new') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 935
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.new %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#unassigned\" <% if(active == 'unassigned') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 943
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAssigned"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.unassigned %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#notreplied\" <% if(active == 'notreplied') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 951
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UnAnswered"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.notreplied %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#mine\" <% if(active == 'mine') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 959
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My Tickets"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.mine %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#starred\" <% if(active == 'starred') { %> class=\"uv-aside-active\" <% } %> >
            ";
        // line 967
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Starred"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.starred %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#trashed\" <% if(active == 'trashed') { %> class=\"uv-aside-active\" <% } %>>
            ";
        // line 975
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Trashed"), "html", null, true);
        yield "
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.trashed %>
                </span>
            </a>
        </li>
    </script>

    ";
        // line 984
        yield "    <script id=\"custom_label_tmp\" type=\"text/template\">
        <a href=\"#label/<%= id %>\"  data-id=\"<%= id %>\">
            <%- name %>
            <span class=\"uv-flag-gray\" style=\"<% if(colorCode) { %>background-color:<%= colorCode %><% } %>\">
                <%= count %>
            </span>
        </a>
        <span class=\"uv-customize\" data-target=\"uv-task-view\" data-toggle=\"tooltip\" title=\"";
        // line 991
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Label"), "html", null, true);
        yield "\"></span>
    </script>

    ";
        // line 995
        yield "    <script id=\"add_edit_label_tmp\" type=\"text/template\">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <% if(id) { %>
                <h6>";
        // line 999
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Label"), "html", null, true);
        yield "</h6>
                <% } else { %>
                <h6>";
        // line 1001
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add Label"), "html", null, true);
        yield "</h6>
                <% } %>
            </div>
            <div class=\"uv-aside-back\" id=\"back-to-labels\">
                <span>";
        // line 1005
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
            </div>
        </div>
        <div class=\"uv-aside-option\" data-id=\"<%= id %>\">

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1011
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1018
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a Color"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <% colors = ['#337CFF','#FEBF00','#E5549F','#27B6BB','#FB8A3F','#43AF52'] %>
                    <% for(var colorTemp in colors) { %>
                    <span class=\"uv-color-block <% if(colorCode == colors[colorTemp]) { %>uv-color-active<% } %>\" data-color=\"<%- colors[colorTemp] %>\" style=\"background:<%- colors[colorTemp] %>\"></span>
                    <% } %>
                </div>
            </div>
            <div>
                <a class=\"uv-btn add-update-btn\" href=\"#\">
                    <% if(id) { %>
                    ";
        // line 1029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "
                    <% } else { %>
                    ";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        yield "
                    <% } %>
                </a>
            </div>
            <% if(id) { %>
            <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>";
        // line 1036
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Label"), "html", null, true);
        yield "</a>
            <% } %>
        </div>
    </script>

    ";
        // line 1042
        yield "    <script id=\"add_edit_saved_filter_tmp\" type=\"text/template\">
        <form>
            <div class=\"uv-filter-edit-head\">
                <div class=\"uv-filter-edit-title\">
                    <h6>
                        <% if(id) { %>
                        <input type=\"hidden\" name=\"id\" id=\"filter-id\" value=\"<%= id %>\"/>
                        ";
        // line 1049
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit Saved Filter"), "html", null, true);
        yield "
                        <% } else { %>
                        ";
        // line 1051
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New Saved Filter"), "html", null, true);
        yield "
                        <% } %>
                    </h6>
                </div>
                <div class=\"uv-filter-edit-back back-to-filter\">
                    <span>";
        // line 1056
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
        yield "</span>
                </div>
            </div>
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">";
        // line 1060
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        yield "</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field name\" name=\"name\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label>
                    <div class=\"uv-checkbox\">
                        <input type=\"checkbox\" name=\"is_default\" <% if(is_default) { %>checked<% } %> />
                        <span class=\"uv-checkbox-view\"></span>
                    </div>
                    <span class=\"uv-checkbox-label\">";
        // line 1072
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is Default"), "html", null, true);
        yield "</span>
                </label>
            </div>

            <div class=\"uv-filters-group\">
                <% _.each(filters, function(filter, key){ %>
                <div class=\"uv-element-block\" data-filter=\"<%= key %>\">
                    <label class=\"uv-field-label\"><%- filter.name %></label>
                    <div class=\"uv-field-block\">
                        <% _.each(filter.options, function(option){ %>
                        <a class=\"uv-btn-tag\" href=\"#\" data-id=\"<%= option.id %>\">
                            <%- option.name %>
                            <span class=\"uv-icon-remove-dark\"></span>
                        </a>
                        <% }); %>
                    </div>
                </div>
                <% }); %>

                <div class=\"uv-action-buttons\">
                    <% if(id) { %>
                    <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>";
        // line 1093
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove Saved Filter"), "html", null, true);
        yield "</a>
                    <% } %>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn <% if(id) { %>update-filter<% } else { %>save-filter<% } %>\" href=\"#\">
                    <% if(id) { %>
                    ";
        // line 1100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "
                    <% } else { %>
                    ";
        // line 1102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        yield "
                    <% } %>
                </a>
                <a class=\"uv-btn back-to-filter\" href=\"#\">";
        // line 1105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel"), "html", null, true);
        yield "</a>
            </div>
        </form>
    </script>

    ";
        // line 1111
        yield "    <script id=\"ticket_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <% if(previous) { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" data-id=\"<%= previous %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" disabled=\"disabled\">
                </span>
            <% } %>
            <% if(next) { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\"  data-id=\"<%= next %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\" disabled=\"disabled\">
                </span>
            <% } %>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <a href=\"<%= path %>\"><h2>";
        // line 1134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ticket Info"), "html", null, true);
        yield " #<%= id %></h2></a>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-strip\">
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                ";
        // line 1141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield " -
                            </span>
                            <span class=\"uv-margin-0\">
                                <%= formatedCreatedAt %>
                            </span>
                        </span>
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                ";
        // line 1149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By"), "html", null, true);
        yield " -
                            </span>
                            <%- createThread.user.name %>
                        </span>
                        <% if(agent) { %>
                        <span class=\"agent-info\" style=\"\">
                                <span class=\"uv-ticket-strip-label\">
                                    ";
        // line 1156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield " -
                                </span>
                                <span class=\"name\"><%- agent.name %></span>
                            </span>
                        <% } %>
                    </div>
                    <div class=\"uv-ticket-strip\">
                        <span class=\"uv-btn-tag\">
                            ";
        // line 1164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority"), "html", null, true);
        yield "
                            - <%- priority.description %>
                        </span>
                        <span class=\"uv-btn-tag\">
                            ";
        // line 1168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "
                            - <%- status.description %>
                        </span>
                        <% if(lastReplyAgentName) { %>
                        <span class=\"uv-btn-tag\">
                                ";
        // line 1173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Replied Agent"), "html", null, true);
        yield "
                                - <%- lastReplyAgentName.name.split(\" \")[0] %>
                            </span>
                        <% } %>
                    </div>
                </div>
                <div class=\"uv-ticket-head\">
                    <h1><%- subject %></h1>
                </div>

                <div class=\"uv-ticket-section\">
                    <div class=\"uv-ticket-main create\">
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= createThread.timestamp %>\" title=\"<%= createThread.formatedCreatedAt %>\"><%= createThread.formatedCreatedAt %></span>
                                - <%- createThread.user.name %>
                                <span class=\"uv-ticket-strip-label\">
                                    ";
        // line 1190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("created Ticket"), "html", null, true);
        yield "
                                </span>
                            </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (createThread.user.smallThumbnail != null) { %>
                                <img class='border' src=\"";
        // line 1196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1196, $this->source); })()), "request", [], "any", false, false, false, 1196), "scheme", [], "any", false, false, false, 1196) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1196, $this->source); })()), "request", [], "any", false, false, false, 1196), "httpHost", [], "any", false, false, false, 1196)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= createThread.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (createThread.createdBy == 'customer') { %>
                                    <img class='border' src=\"";
        // line 1199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1199, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } else { %>
                                    <img class='border' src=\"";
        // line 1201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1201, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(createThread.createdBy == 'customer') { %>
                            <a href=\"";
        // line 1207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(createThread.user) { %>
                                <a href=\"";
        // line 1210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        yield "/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- createThread.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= createThread.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(createThread.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
        // line 1226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(createThread.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(createThread.attachments.length >1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"";
        // line 1237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        yield "/<%= createThread.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% if(lastReply) { %>
                    <div class=\"uv-ticket-main\">
                        <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= lastReply.timestamp %>\" title=\"<%= lastReply.formatedCreatedAt %>\"><%= lastReply.formatedCreatedAt %></span>
                                    - <%- lastReply.user.name %>
                                    <span class=\"uv-ticket-strip-label\">
                                        ";
        // line 1254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("made last reply"), "html", null, true);
        yield "
                                    </span>
                                </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (lastReply.user.smallThumbnail != null) { %>
                                <img class='border' src=\"";
        // line 1260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1260, $this->source); })()), "request", [], "any", false, false, false, 1260), "scheme", [], "any", false, false, false, 1260) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1260, $this->source); })()), "request", [], "any", false, false, false, 1260), "httpHost", [], "any", false, false, false, 1260)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= lastReply.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (lastReply.createdBy == 'customer') { %>
                                    <img class='border' src=\"";
        // line 1263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 1263, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } else { %>
                                    <img class='border' src=\"";
        // line 1265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1265, $this->source); })())), "html", null, true);
        yield "\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(lastReply.createdBy == 'customer') { %>
                            <a href=\"";
        // line 1271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_manage_customer_account");
        yield "/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(lastReply.user) { %>
                                <a href=\"";
        // line 1274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_account");
        yield "/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- lastReply.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= lastReply.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(lastReply.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>";
        // line 1290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uploaded Files"), "html", null, true);
        yield "</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(lastReply.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(lastReply.attachments.length> 1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"";
        // line 1301
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_download_attachment_zip");
        yield "/<%= lastReply.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download (as .zip)"), "html", null, true);
        yield "</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    ";
        // line 1318
        yield "    <script id=\"ticket_list_item_tmp\" type=\"text/template\">
        <td class=\"uv-width-140 uv-no-content\">
            <span class=\"uv-list-ticket-priority\" style=\"<% if(priority) { %>background: <%=priority.colorCode %><% } %>;\"></span>
            <label class=\"uv-vertical-align uv-margin-right-5\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%= id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %> uv-margin-right-5\"></span>
            <span data-index=\"source\">
                <% if(source == 'email') {  %>
                    <span class=\"uv-channel uv-channel-email uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Email\"></span>
                <% } else if(source == 'facebook') {  %>
                    <span class=\"uv-channel uv-channel-facebook uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"></span>
                <% } else if(source == 'twitter') {  %>
                    <span class=\"uv-channel uv-channel-twitter uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"></span>
                <% } else if(source == 'binaka' || source == 'knock') {  %>
                    <span class=\"uv-channel uv-channel-binaka uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Binaka\"></span>
                <% } else if(source == 'api') { %>
                    <span class=\"uv-channel uv-channel-api uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"API\"></span>
                <% } else if(source == 'formbuilder') { %>
                    <span class=\"uv-channel uv-channel-form-builder uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Formbuilder\"></span>
\t\t\t\t<% } else if(source == 'disqus-engage') { %>
                    <span class=\"uv-channel uv-channel-disqus-engage uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Disqus\"></span>
\t\t\t\t<% } else if(source == 'ebay') { %>
                    <span class=\"uv-channel uv-channel-ebay uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ebay\"></span>
\t\t\t\t<% } else if(source == 'youtube') { %>
                    <span class=\"uv-channel uv-channel-youtube uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Youtube\"></span>
                <% } else { %>
                    <span class=\"uv-channel uv-channel-web uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<%- source %>\"></span>
                <% } %>

            </span>
            <span class=\"uv-quick-view-trigger\" data-id=\"<%= id %>\"></span>
        </td>
        <td data-value=\"";
        // line 1354
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID"), "html", null, true);
        yield "\" class=\"uv-width-100\">
            <a href=\"<%= path %>\">
                #<%= id %>
            </a>
        </td>
        <td data-value=\"";
        // line 1359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject"), "html", null, true);
        yield "\">
            <a href=\"<%= path %>\">
                <%- subject && subject.length <= 300 ? subject : subject.substr(0, 300) + '...'  %>
            </a>
        </td>
        <td data-value=\"";
        // line 1364
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Name"), "html", null, true);
        yield "\" data-index=\"customer-name\">
            <a href=\"<%= path %>\">
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"";
        // line 1369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer Email"), "html", null, true);
        yield "\" data-index=\"customer-email\">
            <a href=\"<%= path %>\">
                <%- customer.email %>
            </a>
        </td>
        <td data-value=\"";
        // line 1374
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Timestamp"), "html", null, true);
        yield "\" data-index=\"timestamp\">
            <a href=\"<%= path %>\" class=\"timeago\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                <%= formatedCreatedAt %>
            </a>
        </td>
        <td data-value=\"";
        // line 1379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Reply"), "html", null, true);
        yield "\" data-index=\"last-reply\">
            <% if(lastReplyTime) { %>
                <a href=\"<%= path %>\">
                    <%= lastReplyTime %>
                </a>
            <% } else { %>
                    ";
        // line 1385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
            <% } %>
        </td>
        <td data-value=\"";
        // line 1388
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group"), "html", null, true);
        yield "\" data-index=\"group\">
            <a href=\"<%= path %>\">
                <% if(group) { %>
                <%- group %>
                <% } else { %>
                ";
        // line 1393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Team"), "html", null, true);
        yield "\" data-index=\"team\">
            <a href=\"<%= path %>\">
                <% if(team) { %>
                <%- team %>
                <% } else { %>
                ";
        // line 1402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type"), "html", null, true);
        yield "\" data-index=\"type1\">
            <a href=\"<%= path %>\">
                <% if(type) { %>
                <%- type %>
                <% } else { %>
                ";
        // line 1411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
        <td data-value=\"";
        // line 1415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Replies"), "html", null, true);
        yield "\" data-index=\"replies\">
            <a href=\"<%= path %>\">
                <%= totalThreads %>
            </a>
        </td>
        <td data-value=\"";
        // line 1420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Agent"), "html", null, true);
        yield "\" data-index=\"agent\">
            <a href=\"<%= path %>\">
                <% if(agent) { %>
                <% if(agent.smallThumbnail != null) { %>
                <img src=\"";
        // line 1424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1424, $this->source); })()), "request", [], "any", false, false, false, 1424), "scheme", [], "any", false, false, false, 1424) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1424, $this->source); })()), "request", [], "any", false, false, false, 1424), "httpHost", [], "any", false, false, false, 1424)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "<%= agent.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                <img src=\"";
        // line 1426
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_agent_image_path"]) || array_key_exists("default_agent_image_path", $context) ? $context["default_agent_image_path"] : (function () { throw new RuntimeError('Variable "default_agent_image_path" does not exist.', 1426, $this->source); })())), "html", null, true);
        yield "\" alt=\"\"/>
                <% } %>
                <%- agent.name %>
                <% } else { %>
                ";
        // line 1430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unassigned"), "html", null, true);
        yield "
                <% } %>
            </a>
        </td>
    </script>

    <script type=\"text/javascript\">
        var isPageJustLoaded = true;
        var globalMessageResponse = \"\";
        var currentUserId = \"";
        // line 1439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 1439, $this->source); })()), "getCurrentUser", [], "method", false, false, false, 1439), "id", [], "any", false, false, false, 1439), "html", null, true);
        yield "\";
        var pathToTicket = \"";
        // line 1440
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket", ["ticketId" => "replaceId"]);
        yield "\";

        \$(() => {
            \$('#before-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            \$('#after-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                },
                urlRoot: \"";
        // line 1461
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_xhr");
        yield "\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    count: 0,
                },
                parse: function (resp, options) {
                    return JSON.parse(resp.label);
                },
                urlRoot: \"";
        // line 1473
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_label_xhr");
        yield "\"
            });

            // Ticket Quick View Model
            var TicketQuickViewModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                    isSynced: false
                }
            });

            // Side Filter Model
            var SideFilterModel = Backbone.Model.extend({
                updateModel: function(type,json) {
                    if(this.has(type)) {
                        context = this.get(type)

                        savedOptionsIds = [];
                        _.each(context, function (option) {
                            savedOptionsIds.push(parseInt(option.id))
                        })

                        if(jQuery.inArray(parseInt(json.id), savedOptionsIds) == -1) {
                            context.push(json);
                            this.set(type, context)
                        }
                    } else {
                        this.set(type, [json])
                    }
                },
                loadFilterOptions: function(data) {
                    var self = this;
                    \$.ajax({
                        url : \"";
        // line 1507
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_load_filter_options_xhr");
        yield "\",
                        type : 'POST',
                        data: data,
                        dataType : 'json',
                        success : function(response) {
                            _.each(response,function(filter,key) {
                                _.each(filter, function (item) {
                                    self.updateModel(key,item)
                                })
                            })
                            sideFilter.render();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.Collection.extend({
                model: LabelModel,
                isLabelExist: function(labelName, labelId) {
                    var flag = 1;
                    _.each(this.models, function (item) {
                        if(item.get('name').toUpperCase() == labelName.toUpperCase() && item.id != labelId)
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Ticket Collection
            var TicketCollection = AppCollection.extend({
                model: TicketModel,
                url: \"";
        // line 1543
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_xhr");
        yield "\",
                filterParameters: {
                    label: \"\",
                    new: \"\",
                    unassigned: \"\",
                    notreplied: \"\",
                    mine: \"\",
                    starred: \"\",
                    trashed: \"\",
                    label: \"\",
                    status: \"\",
                    search: \"\",
                    agent: \"\",
                    customer: \"\",
                    priority: \"\",
                    type: \"\",
                    group: \"\",
                    team: \"\",
                    tag: \"\",
                    mailbox : \"\",
                    source : \"\",
                    after: \"\",
                    before: \"\",
                    repliesLess: \"\",
                    repliesMore: \"\",
                },
                parseRecords: function (response, options) {
                    return response.tickets;
                },
                syncData: function() {
                    app.appView.showLoader();
                    \$('.select-all-checkbox').prop('checked', false);

                    this.fetch({
                        data: this.getValidParameters(),
                        reset: true,
                        success: function(model, response) {
                            ticketQuickViewCollection.reset()
                            app.appView.hideLoader();
                            var ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
                            var url = app.pager.paginationData.url;
                            if(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
                                router.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
                            else {
                                app.pager.render();
                                statusListDetails = response.tabs;
                                labelDetails = response.labels;
                                labelListView.render();
                            }

                            if (globalMessageResponse) {
                                app.appView.renderResponseAlert(globalMessageResponse);
                            }

                            globalMessageResponse = null;
                            sideFilter.backToFilter()
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                batchOperation: function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 1613
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_mass_action_xhr");
        yield "\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
            });

            // Ticket Quick View Collection
            var TicketQuickViewCollection = Backbone.Collection.extend({
                model: TicketQuickViewModel,
                isModelSynced: function(id) {
                    if (model = this.get(id)) {
                        if (parseInt(model.attributes.isSynced)) {
                            return model;
                        }
                    }

                    return false;
                },
                initialize: function() {
                    _.bindAll(this, 'getNextPrev', 'nextElement', 'previousElement');
                },
                getNextPrev : function(id) {
                    var data = {};
                    currentModel = ticketQuickViewCollection.get(id)
                    data['next'] = (model = this.nextElement(currentModel)) ? model.id : 0;
                    data['previous'] = (model = this.previousElement(currentModel)) ? model.id : 0;

                    return data;
                },
                nextElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if ((index + 1) === ticketQuickViewCollection.length)
                        return 0;

                    return ticketQuickViewCollection.at(index + 1);
                },
                previousElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if (index === 0 )
                        return 0;

                    return ticketQuickViewCollection.at(index - 1);
                }
            });

            // Filter
            var Filter = app.Filter.extend({
                defaultSortIndex: 'ticket.updatedAt',
                sortText: \"";
        // line 1679
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " \",
                defaultSortText: \"";
        // line 1680
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort By:", [], "messages");
        yield " ";
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last Replied", [], "messages");
        yield "\",
                template : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
                events : {
                    'keyup .uv-search-inline' : 'search',
                    'change .asset-visibility input[type=\"checkbox\"]': 'filterAssetsVisibility'
                },
                filterAssetsVisibilityOnLoad: function() {
                    if(localStorage.getItem('assets-visibility')) {
                        var assets = JSON.parse(localStorage.getItem('assets-visibility'));
                        \$.each(assets, function(asset, assetVal) {
                            if(assetVal) {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').show()
                                \$('#' + asset).prop('checked', true);
                            } else {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                                \$('#' + asset).prop('checked', false);
                            }
                        })
                    }
                },
                filterAssetsVisibility: function(e) {
                    var assets = {};
                    \$('.asset-visibility input').each(function() {
                        var asset = \$(this).val();
                        if(\$(this).is(':checked')) {
                            assets[asset] = 1;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').show()
                        } else {
                            assets[asset] = 0;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                        }
                    });

                    localStorage.setItem('assets-visibility', JSON.stringify(assets));
                },
                search : _.debounce(function(e) {
                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    this.collection.filterParameters.search = Backbone.\$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000)
            });

            // Side Filter View
            var SideFilter = Backbone.View.extend({
                el: \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                appliedFilterOptions: {},
                tempAppliedFilterOptions: {},
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                    'change .custom-filter' : 'filterByCustom',
                    'change #repliesLess-filter-input' : 'filterByRepliesLessThan',
                    'change #repliesMore-filter-input' : 'filterByRepliesMoreThan',
                    'keyup .search-custom, change .search-custom' : 'filterByCustom',
                    'click .new-saved-reply, .edit-saved-reply, .uv-filter-paper .uv-customize': 'addEditSavedReply',
                    'click .back-to-filter': 'backToFilter',
                    'click .uv-filter-edit .uv-btn-tag': 'removeSavedFilterOption',
                    'click .uv-filter-edit .save-filter, .uv-filter-edit .update-filter' : \"saveSavedFilter\",
                    'click .uv-filter-edit .uv-action-buttons .uv-btn-remove': 'removeSavedFilter'
                },
                loaderTemplate: _.template(\$(\"#loader-tmp\").html()),
                addEditSavedReplyTemplate: _.template(\$(\"#add_edit_saved_filter_tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};

                    _.each(ticketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','tag','label']) !== -1) {
                            if(filter != null && filter != '') {
                                filter = filter.split(',');

                                if(typeof fetchOptions[key] === 'undefined')
                                    fetchOptions[key] = [];

                                savedOptionsIds = [];
                                if(sideFilterModel.has(key)) {
                                    _.each(sideFilterModel.get(key), function (option) {
                                        savedOptionsIds.push(parseInt(option.id))
                                    })
                                }

                                _.each(filter, function (item) {
                                    if(jQuery.inArray(parseInt(item), savedOptionsIds) == -1) {
                                        fetchOptions[key].push(parseInt(item));
                                        self.isReadyFlag = 1;
                                    }
                                })
                            }
                        }
                    });

                    return fetchOptions;
                },
                render: function() {
                    fetchOptions = this.checkOptionAvailable();

                    if (this.isReadyFlag && !this.isRecurrsiveCalls) {
                        this.isReadyFlag = 0;
                        this.isRecurrsiveCalls = 1;
                        sideFilterModel.loadFilterOptions(fetchOptions)
                    } else {
                        var appliedFilterOptions = {};
                        \$('.uv-filtered-tags').html(\"\")
                        var self = this;
                        var displayFlag = 0;
                        _.each(ticketCollection.filterParameters, function (filter, key) {
                            if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');

                                    appliedFilterOptions[key] = {'name': key.charAt(0).toUpperCase() + key.slice(1)};
                                    appliedFilterOptions[key]['options'] = [];

                                    _.each(filter, function (value) {
                                        if (key == 'after' || key == 'before' || key == 'repliesLess' || key == 'repliesMore') {
                                            \$(\"#\" + key + \"-filter-input\").val(filter)
                                            appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                        } else {
                                            savedOptions = sideFilterModel.get(key)
                                            _.each(savedOptions, function (item) {
                                                if (item.id == value) {
                                                    appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});

                                                    parent = \$('#'+key+'-filter')
                                                    parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                    parent.find('input').val('')
                                                }
                                            })
                                        }
                                    });
                                }
                            } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"";
        // line 1823
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    var optionName = (key == 'mine') ? \"";
        // line 1825
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Assigned to me", [], "messages");
        yield "\" : key.charAt(0).toUpperCase() + key.slice(1);
                                    appliedFilterOptions[key]['options'].push({'id': key, 'name': optionName});
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"";
        // line 1829
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"";
        // line 1831
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "\"});
                                    }
                                }
                            } else if (key == 'label') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    var labelModel = labelCollection.get(filter);
                                    appliedFilterOptions[key] = {'name': \"";
        // line 1838
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    if (labelModel) {
                                        appliedFilterOptions[key]['options'] = [];
                                        appliedFilterOptions[key]['options'].push({'id': labelModel.attributes.id, 'name': labelModel.attributes.name});
                                    } else {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == filter) {
                                                appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});
                                            }
                                        });
                                    }
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"";
        // line 1853
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label"), "html", null, true);
        yield "\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"";
        // line 1855
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All"), "html", null, true);
        yield "\"});
                                    }
                                }
                            } else if (key == 'status') {
                                appliedFilterOptions[key] = {'name': \"";
        // line 1859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status"), "html", null, true);
        yield "\"};
                                appliedFilterOptions[key]['options'] = []
                                if (filter != null && filter != '' && filter != 1) {
                                    displayFlag = 1;
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': \$(\".status-list li a[data-id='\" + filter + \"'] .name\").text().trim()});
                                } else {
                                    appliedFilterOptions[key]['options'].push({'id': 1,'name': \"";
        // line 1865
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open"), "html", null, true);
        yield "\"});
                                }


                            } else if (key == 'search') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"";
        // line 1872
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Query"), "html", null, true);
        yield "\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                }
                            } else if(key == 'custom') {
                                if (filter != null && filter != '') {
                                    self.\$el.find('[data-filter=\"custom\"]').remove();

                                    displayFlag = 1;

                                    var realKey = key;
                                    var checkBoxStore = Array();
                                    var dataValueValueSeprator = '_';
                                    var columnSeperator = '|';

                                    var multiOptions = filter.split(columnSeperator);
                                    var multiKeyValue, multiKeyValueValue, ele, newEle;

                                    _.each(multiOptions, function(valueData, indexData) {
                                        if(!valueData)
                                            return;

                                        multiKeyValue = valueData.split(dataValueValueSeprator);

                                        multiKeyValueValue = multiKeyValue[1].split(',');

                                        eleSelector = '[data-value=\"' + multiKeyValue[0] + '\"]';
                                        ele = \$(eleSelector);

                                        if (ele[0].type == 'radio') {
                                            var dataValue = multiKeyValue[0];
                                            name = ele.parents('.uv-element-block:not(.radio)').find('label:first').text().trim()
                                            value =  \$(eleSelector + '[value=\"' + multiKeyValue[1] + '\"]').parent().next().text();

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'radio'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            appliedFilterOptions['z-'+dataValue]['options'].push({'id': multiKeyValue[1], 'name': value});
                                        } else if (ele[0].type == 'checkbox') {

                                            var dataValue = multiKeyValue[0];
                                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                                return;
                                            checkBoxStore.push(dataValue);

                                            name = ele.parents('.uv-element-block:not(.checkbox)').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'checkbox'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            var optionName, optionValue;
                                            _.each(multiKeyValueValue, function(value) {
                                                newEle = \$(eleSelector + '[value=\"' + value + '\"]')
                                                optionValue = dataValue + dataValueValueSeprator + newEle.val();
                                                optionName = newEle.parent().next().text();
                                                if(optionValue && optionName) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });
                                        } else if (ele[0].type == 'select-multiple') {
                                            var dataValue = multiKeyValue[0];
                                            filter = multiKeyValueValue;
                                            key = ele.attr('id');
                                            name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'select-multiple'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];

                                            _.each(filter, function (value) {
                                                var optionName;
                                                if(optionName = \$(\"#\"+key+\" option[value='\" + value + \"']\").text()) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });

                                        } else if (ele[0].type == 'text' || ele[0].type == 'number') {
                                            filter = multiKeyValue[1];
                                            if (filter != null && filter != '') {
                                                filter = filter.replace(/\\+/g,' ');
                                                displayFlag = 1;
                                                var dataValue = ele.attr('data-value');
                                                name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                                appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': ele[0].type};
                                                appliedFilterOptions['z-'+dataValue]['options'] = [];
                                                appliedFilterOptions['z-'+dataValue]['options'].push({'id': 1, 'name': filter});

                                            }

                                        }
                                    })
                                }
                            }
                            if('after' == key || 'before' == key || 'repliesLess' == key || 'repliesMore' == key) {
                                \$('#'+ key +'-filter-input').val(filter);
                            }
                        })

                        if (displayFlag) {
                            self.\$el.find('.uv-filter-options .uv-action-buttons').html(\"\")
                            if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '' && Backbone.history.getFragment() == userFilters[\$(\"#saved-filter\").val()]['route']) {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>";
        // line 1971
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        yield "</a>\").show();
                                \$('.uv-filter-paper .uv-customize').show()
                            } else {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn new-saved-reply' href='#'>";
        // line 1974
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New"), "html", null, true);
        yield "</a>\").show();
                                if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '') {
                                    self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>";
        // line 1976
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update"), "html", null, true);
        yield "</a>\").show();
                                    \$('.uv-filter-paper .uv-customize').show()
                                } else {
                                    \$('.uv-filter-paper .uv-customize').hide()
                                }
                            }
                        } else {
                            \$('.uv-filter-paper .uv-customize').hide()
                        }

                        this.appliedFilterOptions = appliedFilterOptions;
                        this.tempAppliedFilterOptions = jQuery.extend(true, {}, appliedFilterOptions);
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if (jQuery.inArray(filterType, ['customer', 'tag']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"";
        // line 2008
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Searching", [], "messages");
        yield " ...\")
                        if (self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"";
        // line 2013
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_collection_search_filter_options_xhr");
        yield "\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ticketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"";
        // line 2020
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if (currentElement.attr('data-filter-type') == 'customer') {
                                            var img = item.smallThumbnail ? \"";
        // line 2027
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2027, $this->source); })()), "request", [], "any", false, false, false, 2027), "scheme", [], "any", false, false, false, 2027) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2027, $this->source); })()), "request", [], "any", false, false, false, 2027), "httpHost", [], "any", false, false, false, 2027)) . $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("")), "html", null, true);
        yield "\"+item.smallThumbnail : \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["default_customer_image_path"]) || array_key_exists("default_customer_image_path", $context) ? $context["default_customer_image_path"] : (function () { throw new RuntimeError('Variable "default_customer_image_path" does not exist.', 2027, $this->source); })())), "html", null, true);
        yield "\";
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"' name='\" + item.name + \"' class='uv-dropdown-navigations-support-el' tabindex='0' style='display: flex; gap: 10px;'><div><img src='\" + img + \"' style='margin: unset;'/></div><div style='font-size: 14px;'><div style='width: 100%;'>\" +  item.name + \"</div><div style='width: 100%; max-width: 168px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>\" + item.email + \"</div></div></li>\")
                                        } else
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"";
        // line 2038
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\").show();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                }, 1000),

                applySavedFilter: function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    if (element.val() != \"\") {
                        var element = Backbone.\$(e.currentTarget);
                        router.navigate(userFilters[element.val()]['route'], {trigger: true});
                    } else {
                        router.navigate('', {trigger: true});
                    }
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);

                    if (currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if (filterType == \"customer\" || filterType == 'tag') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.attr('name')})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"";
        // line 2068
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type atleast 2 letters"), "html", null, true);
        yield "\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if (ticketCollection.filterParameters[filterType]) {
                                ids = ticketCollection.filterParameters[filterType].split(',')
                                if (jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }

                        parent.find('input').val('')
                        if (jQuery.inArray(filterType, ['agent', 'priority', 'type', 'group', 'team', 'mailbox', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if (flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.attr('name')+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    } else {
                        filterType = currentElement.attr('data-filter-type');
                        if (filterType == 'before' || filterType == \"after\") {
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = currentElement.val();
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()

                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ticketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()

                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    return ids.join();
                },
                filterByRepliesMoreThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesMore = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByRepliesLessThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesLess = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByCustom: _.debounce(function(e) {
                    var custom = '';
                    var checkBoxStore = Array();
                    var indexValueSeperator = '_';
                    var columnSeperator = '|';

                    Backbone.\$('.custom-filter').each(function() {
                        if (\$(this).context.type == 'radio' && \$(this).is(':checked')) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        } else if (\$(this).context.type == 'checkbox' && \$(this).is(':checked')) {
                            var checkboxValue = Array();
                            var dataValue = \$(this).attr('data-value');
                            if (\$.inArray(dataValue, checkBoxStore) >= 0)
                                return;
                            \$.each(\$('[data-value=\"'+ dataValue +'\"]:checked'), function() {
                                checkboxValue.push(\$(this).val());
                            });
                            checkBoxStore.push(dataValue);
                            custom += dataValue + indexValueSeperator + checkboxValue.join() + columnSeperator;
                        } else if (\$(this).context.type == 'select-multiple' && \$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val().join() + columnSeperator;
                        }
                    })

                    Backbone.\$('.search-custom').each(function(){
                        if (\$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        }
                    })

                    custom = custom.replace(/\\|\$/, '');

                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.custom = custom;
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000),
                backToFilter: function(e) {
                    if (e)
                        e.preventDefault()
                    this.\$el.find('.uv-filter-options').show()
                    this.\$el.find('.uv-filter-edit').hide()
                },
                addEditSavedReply: function(e) {
                    e.preventDefault()

                    var context = {};
                    this.tempAppliedFilterOptions = jQuery.extend(true, {}, this.appliedFilterOptions);
                    if (Backbone.\$(e.currentTarget).is('.new-saved-reply')) {
                        context = {'id': 0, 'name': '', 'is_default': 0, 'filters': this.tempAppliedFilterOptions};
                    } else {
                        context = userFilters[\$(\"#saved-filter\").val()];
                        context.filters = this.tempAppliedFilterOptions;
                        userFilters[\$(\"#saved-filter\").val()]
                    }
                    \$('.uv-filter-edit').html('')
                    \$('.uv-filter-edit').append(this.addEditSavedReplyTemplate(context));
                    this.\$el.find('.uv-filter-options').hide()
                    this.\$el.find('.uv-filter-edit').show()
                },
                removeSavedFilterOption: function(e) {
                    e.preventDefault()
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    var elementIndex = Backbone.\$(e.currentTarget).index();
                    var filterType = parent.attr('data-filter');
                    var filterId = Backbone.\$(e.currentTarget).attr('data-id');

                    delete this.tempAppliedFilterOptions[filterType]['options'][elementIndex]
                    Backbone.\$(e.currentTarget).remove()
                    if (!parent.find('.uv-btn-tag').length) {
                        parent.remove()
                        delete this.tempAppliedFilterOptions[filterType];
                    }
                    if (this.getSavedFilterRoute() == '') {
                        this.backToFilter();
                    }
                },
                saveSavedFilter: function(e) {
                    e.preventDefault()

                    if (Backbone.\$(e.currentTarget).hasClass('save-filter'))
                        this.saveFilterAjax('POST')
                    else {
                        this.saveFilterAjax('PUT')
                    }
                },
                saveFilterAjax: function(method) {
                    var inputElement = \$('.uv-filter-edit input.name');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    if (inputElement.val() != undefined && inputElement.val() == '') {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    } else {
                        var data = \$('.uv-filter-edit form').serializeObject();
                        data['route'] = this.getSavedFilterRoute();
                        app.appView.showLoader();
                        self = this;
                        \$.ajax({
                            url : \"";
        // line 2247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_filters_xhr");
        yield "\",
                            type : method,
                            data: data,
                            dataType : 'json',
                            success : function(response) {
                                app.appView.hideLoader();
                                userFilters[response.filter.id] = response.filter;
                                \$(\"#saved-filter\").html(\"<option value=''>-- ";
        // line 2254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filter"), "html", null, true);
        yield " --</option>\")
                                _.each(userFilters, function(filter, key) {
                                    if (response.filter.is_default && filter.id != response.filter.id)
                                        userFilters[key]['is_default'] = 0;

                                    var selected = '';
                                    if (response.filter.id == filter.id)
                                        selected = \"selected\";
                                    \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"' selected='\" + selected + \"''>\" + filter.name + \"</option>\")
                                })

                                \$(\"#saved-filter\").val(response.filter.id)
                                app.appView.renderResponseAlert(response);
                                self.render();
                                self.backToFilter();
                            },
                            error: function (xhr) {
                                app.appView.hideLoader();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    }
                },
                getSavedFilterRoute: function() {
                    var filterParameters = {};
                    temp = [];
                    _.each(this.tempAppliedFilterOptions, function (filter, key) {
                        if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                            var ids = [];
                            _.each(filter['options'], function (item) {
                                ids.push(item.id)
                            });
                            filterParameters[key] = ids.join(',')
                        } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                            filterParameters[key] = 1;
                        } else if (jQuery.inArray(key, ['label', 'status', 'search']) !== -1) {
                            _.each(filter['options'], function (item) {
                                filterParameters[key] = item.id;
                            });
                        } else {
                            custom = key.split(\"z-\")
                            tempKey = custom[1];
                            if (filter.type == 'text' || filter.type == 'number') {
                                _.each(filter['options'], function (item) {
                                    temp.push(tempKey + '_' + item.name)
                                });
                            } else if (filter.type == 'radio') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            } else if (filter.type == 'checkbox' || filter.type == 'select-multiple') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            }
                        }
                    })
                    if (temp.length)
                        filterParameters['custom'] = temp.join('|');

                    return app.appView.buildQuery(\$.param(filterParameters));
                },
                removeSavedFilter: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"";
        // line 2326
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_saved_filters_xhr");
        yield "/\" + \$(\"#saved-filter\").val(),
                        type : 'DELETE',
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            delete userFilters[\$(\"#saved-filter\").val()];

                            \$(\"#saved-filter\").html(\"<option value=''>-- ";
        // line 2333
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saved Filter"), "html", null, true);
        yield " --</option>\")
                            _.each(userFilters, function(filter, key) {
                                \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"'>\" + filter.name + \"</option>\")
                            })

                            \$(\"#saved-filter\").val('')
                            app.appView.renderResponseAlert(response);
                            self.render();
                            self.backToFilter();
                        },
                        error: function (xhr) {
                            app.appView.hideLoader();
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Item View
            var LabelItemView = Backbone.View.extend({
                tagName: 'li',
                className: 'uv-customize-wrapper',
                template: _.template(\$(\"#custom_label_tmp\").html()),
                events: {
                    'click .delete': 'confirmRemove',
                    'click .label-color.dropdown .fa-caret-down' : 'showUpdateLabelPopup'
                },
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (ticketCollection.filterParameters.label != '') {
                        if (ticketCollection.filterParameters.label == this.model.id) {
                            this.\$el.find('a').addClass('uv-aside-active');
                        }
                    }

                    return this;
                }
            });

            // Ticket List Item View
            var TicketItem = Backbone.View.extend({
                tagName: \"tr\",
                template: _.template(\$(\"#ticket_list_item_tmp\").html()),
                events: {
                    'click .uv-star': \"updateStar\",
                },
                render: function () {
                    this.model.set({
                        path: pathToTicket.replace('replaceId', this.model.attributes.id)
                    });
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (this.model.attributes.isAgentView != true) {
                        this.\$el.addClass('unread')
                    }

                    if (!this.model.attributes.agent) {
                        this.\$el.addClass('not-assigned')
                    }

                    return this;
                },
                updateStar: function(e) {
                    e.preventDefault();
                    if (Backbone.\$(e.currentTarget).hasClass('uv-star-active')) {
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    } else {
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');
                    }

                    this.model.save({
                        id: this.model.id
                    }, {
                        patch: true,
                        url: \"";
        // line 2409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_bookmark_ticket_xhr");
        yield "\",
                        success: function (model, response, options) {},
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location')) {
                                window.location = url;
                            }
                        }
                    });
                }
            });

            // Ticket List View
            var TicketList = Backbone.View.extend({
                el: \$(\".uv-table table\"),
                initialize: function() {
                    this.render();
                },
                events: {
                    'change .mass-action-checkbox' : 'showBulkOptions',
                },
                showBulkOptions: function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            count++;
                        }
                    });

                    if (count == \$('.mass-action-checkbox').length) {
                        \$('.select-all-checkbox').prop('checked', true);
                    } else {
                        \$('.select-all-checkbox').prop('checked', false);
                    }

                    if (count) {
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                        \$('.uv-action-bar .filter').parent().show();
                        \$('.uv-action-bar-col-rt').show();
                    }
                },
                render: function () {
                    this.\$el.find('tbody').html('');
                    if (ticketCollection.length) {
                        \$('.select-all-checkbox').prop( \"disabled\", false );
                        _.each(ticketCollection.models, function (item) {
                            ticketQuickViewCollection.add(new TicketQuickViewModel({id: item.id}))
                            this.renderTicket(item);
                        }, this);
                    } else {
                        \$('.select-all-checkbox').prop( \"disabled\", true );
                        this.\$el.find('tbody').append(\"<tr style='text-align: center;'><td colspan='11'>";
        // line 2463
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No Record Found", [], "messages");
        yield "</td></tr>\")
                    }

                    filter.filterAssetsVisibilityOnLoad()
                    app.appView.relativeTime()
                },
                renderTicket: function (item) {
                    var ticketItem = new TicketItem({
                        model: item
                    });

                    this.\$el.find('tbody').append(ticketItem.render().el);
                }
            });

            // Ticket Label List View
            var LabelListView = Backbone.View.extend({
                el: \$(\".uv-aside\"),
                template: _.template(\$(\"#predefined_label_tmp\").html()),
                statusTemplate: _.template(\$(\"#ticket_status_list_tmp\").html()),
                addEditLabelTemplate: _.template(\$(\"#add_edit_label_tmp\").html()),
                events: {
                    'click .status-list li a': \"filterByStatus\",
                    'click .add-new-label, .uv-customize': 'addEditLabel',
                    'click #back-to-labels': 'backToLabels',
                    'click .uv-color-block': 'setLabelColor',
                    'click .add-update-btn': 'saveLabel',
                    'click .uv-add-edit-label .uv-btn-remove': 'removeLabel'
                },
                render: function() {
                    var active = \"\";

                    if (ticketCollection.filterParameters.new != '') {
                        active = \"new\";
                    } else if (ticketCollection.filterParameters.unassigned != '') {
                        active = \"unassigned\";
                    } else if (ticketCollection.filterParameters.notreplied != '') {
                        active = \"notreplied\";
                    }

                    if (ticketCollection.filterParameters.mine != '') {
                        active = \"mine\";
                    } else if (ticketCollection.filterParameters.starred != '') {
                        active = \"starred\";
                    } else if (ticketCollection.filterParameters.trashed != '') {
                        active = \"trashed\";
                    } else if (ticketCollection.filterParameters.label != '') {
                        active = \"label\";
                    }

                    var data = {
                        'labelDetails' : labelDetails,
                        'active' : active
                    }
                    this.\$el.find('.predefined-label-list').html(this.template(data));

                    labelCollection.reset();
                    labelCollection.set(labelDetails.custom);
                    this.updateMassLabelList()
                },
                updateMassLabelList: function() {
                    this.\$el.find('.uv-aside-custom').html('');
                    var labelOptionHtml = \"\";
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabelItem(item);
                            labelOptionHtml = labelOptionHtml + \"<li data-index='\" + item.id + \"'><a href='#'>\" + item.attributes.name + \"</a></li>\";
                        }, this);
                    }
                    labelOptionHtml = labelOptionHtml ? labelOptionHtml : \"<li data-index='0'>";
        // line 2532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No Label Created"), "html", null, true);
        yield "</li>\";
                    \$(\".mass-action ul.label\").html(labelOptionHtml);
                    this.renderStatus();
                },
                renderLabelItem : function (item) {
                    var labelItem = new LabelItemView({
                        model: item
                    });
                    this.\$el.find('.uv-aside-custom').append(labelItem.render().el);
                },
                renderStatus : function() {
                    if (typeof ticketCollection.filterParameters.status == \"undefined\" || ticketCollection.filterParameters.status == null)
                        var active = 0;
                    else
                        var active = ticketCollection.filterParameters.status;

                    this.\$el.find('.uv-aside-active').parent().find('.status-list').remove()
                    this.\$el.find('.uv-aside-active').parent().append(this.statusTemplate({status : statusListDetails, active : active}));
                },
                filterByStatus : function(e) {
                    e.preventDefault()

                    ticketCollection.reset();
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.status = Backbone.\$(e.currentTarget).attr('data-id');
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                addEditLabel: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.hasClass('add-new-label'))
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate({id : 0, name : '', colorCode: ''}))
                    else
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate(labelCollection.get(currentElement.siblings('a').attr('data-id')).toJSON()))

                    \$('.uv-aside-default').hide()
                    \$('.uv-add-edit-label').show()
                },
                backToLabels: function(e) {
                    if (e)
                        e.preventDefault()
                    \$('.uv-aside-default').show()
                    \$('.uv-add-edit-label').hide()
                },
                setLabelColor: function(e) {
                    \$('.uv-color-block').removeClass('uv-color-active');
                    Backbone.\$(e.currentTarget).addClass('uv-color-active');
                },
                saveLabel : function(e) {
                    e.preventDefault()
                    var inputElement = \$('.uv-add-edit-label input');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    var labelName = app.appView.stripHTML(inputElement.val());
                    if (labelName == \"\") {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2592
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This field is mandatory"), "html", null, true);
        yield "</span>\");
                    } else {
                        var labelId = parseInt(\$('.uv-aside-option').attr('data-id'))

                        model = labelId ? labelCollection.get(labelId) : new LabelModel()
                        model.set({name: labelName, colorCode: \$('.uv-color-block.uv-color-active').attr('data-color')});
                        self = this;
                        var flag = labelCollection.isLabelExist(labelName, labelId);
                        if (flag) {
                            app.appView.showLoader();
                            model.save({}, {
                                success: function (model, response, options) {
                                    app.appView.hideLoader();
                                    if (response.alertClass == \"success\") {
                                        if (!labelId) {
                                            labelCollection.add(model);
                                        }
                                        self.updateMassLabelList()
                                        app.appView.renderResponseAlert(response);
                                    } else {
                                        inputElement.addClass('uv-field-error');
                                        inputElement.parent().after(\"<span class='uv-field-message'>\" + response.alertMessage + \"</span>\");
                                    }

                                    self.backToLabels();
                                },
                                error: function (model, xhr, options) {
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(warningResponse);
                                }
                            });
                        } else {
                            inputElement.parent().after(\"<span class='uv-field-message'>";
        // line 2626
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Label with same name already exist."), "html", null, true);
        yield "</span>\");
                        }
                    }
                },
                removeLabel: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    model = labelCollection.get(\$('.uv-aside-option').attr('data-id'))
                    model.destroy({
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.updateMassLabelList()
                            app.appView.renderResponseAlert(response);
                            self.backToLabels();
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(warningResponse);
                        }
                    });
                }
            });

            // Bulk Action View
            var BulkActionView = Backbone.View.extend({
                el: \$(\".mass-action\"),
                currentEvent: null,
                events: {
                    'click ul li, #mass-restore': 'massAction',
                    'click #mass-delete, #mass-delete-forever': 'confirmRemove',
                    'click #mass-restore': 'confirmRestore'
                },
                massAction: function(e) {
                    e.preventDefault();
                    if (!parseInt(Backbone.\$(e.currentTarget).attr('data-index')))
                        return;

                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"trashed\";
                    else if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete-forever\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                restoreItem: function(e) {
                    var data = {};
                    data['actionType'] = \"restored\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedTicketIds: function() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;
                    app.appView.openConfirmModal(this)
                },
                confirmRestore: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this, 'restoreItem')
                },
                hideBulkOptions : function() {
                    \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                    \$('.uv-action-bar .filter').parent().show();
                    \$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                },
                quickViewTemplate: _.template(\$(\"#ticket_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();
                    //\$(\"#quick-view-modal .uv-loader\").hide()
                    var currentElement = Backbone.\$(e.currentTarget);
                    ticketId = currentElement.attr('data-id');
                    if (ticketId) {
                        if(model = ticketQuickViewCollection.isModelSynced(ticketId)) {
                            this.renderQuickView(model.toJSON())
                        } else {
                            var self = this;
                            if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.showLoader();

                            if (ticketQuickViewCollection.get(ticketId)) {
                                navData = ticketQuickViewCollection.getNextPrev(ticketId);
                                requiredNext = (!navData.next && app.pager.paginationData.next) ? 1 : 0;
                                requiredPrev = (!navData.previous && app.pager.paginationData.previous) ? 1 : 0;
                            } else
                                requiredNext = requiredPrev = 1;

                            if (self.xhrReq)
                                self.xhrReq.abort();

                            \$(\"#quick-view-modal .uv-loader\").show()
                            self.xhrReq = \$.ajax({
                                url : \"";
        // line 2751
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_ticket_quick_view_xhr");
        yield "\",
                                type : 'GET',
                                data : {ticketId : ticketId, next: requiredNext, previous: requiredPrev},
                                dataType : 'json',
                                success : function(response) {
                                    self.xhrReq = 0;
                                    if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                        app.appView.hideLoader();

                                    if (response.next == undefined)
                                        response.next = navData.next
                                    if (response.previous == undefined)
                                        response.previous = navData.previous

                                    response.isSynced = 1
                                    response.path = pathToTicket.replace('replaceId', response.incrementId);

                                    if (ticketQuickViewCollection.get(ticketId))
                                        ticketQuickViewCollection.set(response,{remove: false})
                                    else
                                        ticketQuickViewCollection.add(new TicketQuickViewModel(response))

                                    self.renderQuickView(response)
                                },
                                error: function (xhr) {
                                    self.xhrReq = 0;
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                }
                            });
                        }
                    }
                },
                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                selectAll : function(e) {
                    if(Backbone.\$(e.currentTarget).is(':checked')) {
                        \$('.mass-action-checkbox').prop('checked', true);
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if(\$(this).is(':checked'))
                                count++;
                        });
                        if (count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
                            \$('.uv-action-bar .filter').parent().show();
                            \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                            \$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

            // Ticket Router
            Router = Backbone.Router.extend({
                routes: {
                    'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                    'status/:status(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByStatus',
                    'search/:query(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByQuery',
                    'agent/:agent(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAgent',
                    'customer/:customer(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustomer',
                    'priority/:priority(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByPriority',
                    'type/:type(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByType',
                    'group/:group(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByGroup',
                    'team/:team(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySubGroup',
                    'tag/:tag(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByTags',
                    'mailbox/:mailbox(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByMailbox',
                    'source/:source(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySource',
                    'after/:after(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAfter',
                    'before/:before(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByBefore',
                    'repliesLess/:repliesLess(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesLesserCount',
                    'repliesMore/:repliesMore(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesGreaterCount',
                    'custom/:custom(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustom',
                    'label/:labelId(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByLabel',
                    'new(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNew',
                    'unassigned(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterUnassigned',
                    'notreplied(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNotReplied',
                    'mine(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterMine',
                    'starred(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterstarred',
                    'trashed(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterTrashed',
                    '': 'initializeList'
                },
                initializeList : function() {
                    \$(\"#saved-filter\").val('');
                    this.resetParams('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                    this.fetch(null, null, null);
                },
                paginate : function(number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','', '');
                    this.fetch(number,sortField,order);
                },
                filterByLabel : function(labelId,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams(labelId,'','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNew : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('',1,'','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterUnassigned : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','',1,'','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNotReplied: function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','',1,'','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);

                },
                filterMine : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','',1,'','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterstarred : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','',1,'',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterTrashed : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','',1,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,custom);
                    this.fetch(number,sortField,order);
                },
                filterByStatus : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByQuery : function(query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','',query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAgent : function(agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','',agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustomer : function(customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','',customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByPriority : function(priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','',priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByType : function(type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','',type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByGroup : function(group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','',group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySubGroup : function(team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','',team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByTags : function(tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','',tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByMailbox : function(mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','',mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySource: function(source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','',source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAfter: function(after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','',after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByBefore: function(before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','',before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesLesserCount: function(repliesLess, repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesGreaterCount: function(repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','',repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustom : function(custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','',custom);
                    this.fetch(number,sortField,order);
                },
                fetch: function(number, sortField, order) {
                    ticketCollection.state.currentPage = number;
                    filter.sortCollection(sortField, order);
                    ticketCollection.syncData();
                },
                resetParams : function(labelId,newLabel,unassigned,notreplied,mine,starred,trashed,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom) {
                    _.each(userFilters, function(filter, index) {
                        if(Backbone.history.getFragment() == filter['route']) {
                            \$(\"#saved-filter\").val(index);
                        }
                    });

                    isPageJustLoaded = false;
                    if (query != null)
                        query = query.replace(/\\+/g,' ');
                    bulkAction.hideBulkOptions();
                    ticketCollection.filterParameters.label = labelId;
                    ticketCollection.filterParameters.new = newLabel;
                    ticketCollection.filterParameters.unassigned = unassigned;
                    ticketCollection.filterParameters.notreplied = notreplied;
                    ticketCollection.filterParameters.mine = mine;
                    ticketCollection.filterParameters.starred = starred;
                    ticketCollection.filterParameters.trashed = trashed;
                    ticketCollection.filterParameters.search = query;
                    \$(\".uv-search-inline\").val(query);
                    ticketCollection.filterParameters.status = status;
                    ticketCollection.filterParameters.agent = agent;
                    ticketCollection.filterParameters.customer = customer;
                    ticketCollection.filterParameters.priority = priority;
                    ticketCollection.filterParameters.type = type;
                    ticketCollection.filterParameters.group = group;
                    ticketCollection.filterParameters.team = team;
                    ticketCollection.filterParameters.tag = tag;
                    ticketCollection.filterParameters.mailbox = mailbox;
                    ticketCollection.filterParameters.source = source;
                    ticketCollection.filterParameters.after = after;
                    ticketCollection.filterParameters.before = before;
                    ticketCollection.filterParameters.repliesLess = repliesLess;
                    ticketCollection.filterParameters.repliesMore = repliesMore;

                    ticketCollection.filterParameters.custom = custom;
                    \$('.custom-fields').find('input[type=\"text\"]').val('');
                    \$('.custom-fields').find('select').val('');
                    \$('.custom-fields').find('input[type=\"radio\"]').prop('checked', false);
                    \$('.custom-fields').find('input[type=\"checkbox\"]').prop('checked', false);

                    if (custom) {
                        custom = custom.replace(/\\+/g,' ');

                        var indexValueSeperator = '_';
                        var columnSeperator = '|';

                        var multiOptions = custom.split(columnSeperator);
                        var multiKeyValue, multiKeyValueValue, ele;

                        _.each(multiOptions, function(valueData, indexData) {
                            if (!valueData)
                                return;

                            multiKeyValue = valueData.split(indexValueSeperator);

                            multiKeyValueValue = multiKeyValue[1].split(',');

                            ele = \$('[data-value=\"' + multiKeyValue[0] + '\"]');

                            if (ele[0].type == 'radio') {
                                \$('[data-value=\"' + multiKeyValue[0] + '\"][value=\"' + multiKeyValue[1] + '\"]').prop('checked', true);

                            } else if (ele[0].type == 'checkbox') {
                                _.each(ele, function(eleElements) {
                                    if (multiKeyValueValue.indexOf(eleElements.value) > -1) {
                                        \$(eleElements).prop('checked', true);
                                    }
                                });

                            } else if (ele[0].type == 'select-multiple') {
                                ele.val(multiKeyValueValue);

                            } else if (ele[0].type == 'text') {
                                ele.val(multiKeyValue[1]);
                            }
                        })

                    }

                    if (trashed) {
                        \$('.property-block').hide();
                        \$('.trashed-block').show();
                    } else {
                        \$('.property-block').show();
                        \$('.trashed-block').hide();
                    }

                    sideFilter.isRecurrsiveCalls = 0;
                    sideFilter.render();
                }
            });

            var router = new Router();
            var pageview = new PageView;
            var bulkAction = new BulkActionView();
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
            var ticketCollection = new TicketCollection();
            var ticketQuickViewCollection = new TicketQuickViewCollection();
            var labelCollection = new LabelCollection();
            var labelListView = new LabelListView()
            var filter = new Filter({collection : ticketCollection});

            Backbone.history.start({
                push_state:true
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
        return "@UVDeskCoreFramework/ticketList.html.twig";
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
        return array (  3959 => 2751,  3831 => 2626,  3794 => 2592,  3731 => 2532,  3659 => 2463,  3602 => 2409,  3523 => 2333,  3513 => 2326,  3438 => 2254,  3428 => 2247,  3418 => 2240,  3243 => 2068,  3210 => 2038,  3194 => 2027,  3184 => 2020,  3174 => 2013,  3166 => 2008,  3131 => 1976,  3126 => 1974,  3120 => 1971,  3018 => 1872,  3008 => 1865,  2999 => 1859,  2992 => 1855,  2987 => 1853,  2969 => 1838,  2959 => 1831,  2954 => 1829,  2947 => 1825,  2942 => 1823,  2794 => 1680,  2790 => 1679,  2721 => 1613,  2648 => 1543,  2609 => 1507,  2572 => 1473,  2557 => 1461,  2533 => 1440,  2529 => 1439,  2517 => 1430,  2510 => 1426,  2505 => 1424,  2498 => 1420,  2490 => 1415,  2483 => 1411,  2475 => 1406,  2468 => 1402,  2460 => 1397,  2453 => 1393,  2445 => 1388,  2439 => 1385,  2430 => 1379,  2422 => 1374,  2414 => 1369,  2406 => 1364,  2398 => 1359,  2390 => 1354,  2352 => 1318,  2331 => 1301,  2317 => 1290,  2298 => 1274,  2292 => 1271,  2283 => 1265,  2278 => 1263,  2272 => 1260,  2263 => 1254,  2241 => 1237,  2227 => 1226,  2208 => 1210,  2202 => 1207,  2193 => 1201,  2188 => 1199,  2182 => 1196,  2173 => 1190,  2153 => 1173,  2145 => 1168,  2138 => 1164,  2127 => 1156,  2117 => 1149,  2106 => 1141,  2096 => 1134,  2071 => 1111,  2063 => 1105,  2057 => 1102,  2052 => 1100,  2042 => 1093,  2018 => 1072,  2003 => 1060,  1996 => 1056,  1988 => 1051,  1983 => 1049,  1974 => 1042,  1966 => 1036,  1958 => 1031,  1953 => 1029,  1939 => 1018,  1929 => 1011,  1920 => 1005,  1913 => 1001,  1908 => 999,  1902 => 995,  1896 => 991,  1887 => 984,  1876 => 975,  1865 => 967,  1854 => 959,  1843 => 951,  1832 => 943,  1821 => 935,  1812 => 929,  1807 => 926,  1802 => 922,  1788 => 914,  1782 => 911,  1772 => 910,  1769 => 909,  1765 => 908,  1761 => 906,  1752 => 898,  1750 => 897,  1740 => 889,  1738 => 888,  1728 => 880,  1726 => 879,  1716 => 871,  1714 => 870,  1704 => 862,  1702 => 861,  1697 => 858,  1691 => 855,  1678 => 854,  1662 => 848,  1656 => 844,  1649 => 840,  1637 => 830,  1627 => 823,  1617 => 816,  1607 => 809,  1597 => 801,  1595 => 800,  1590 => 798,  1587 => 797,  1578 => 794,  1573 => 793,  1570 => 792,  1565 => 791,  1563 => 790,  1558 => 788,  1550 => 783,  1541 => 776,  1539 => 775,  1534 => 773,  1531 => 772,  1522 => 769,  1517 => 768,  1514 => 767,  1509 => 766,  1507 => 765,  1502 => 763,  1494 => 758,  1482 => 749,  1476 => 746,  1470 => 743,  1462 => 738,  1452 => 730,  1450 => 729,  1445 => 727,  1442 => 726,  1433 => 723,  1428 => 722,  1425 => 721,  1420 => 720,  1418 => 719,  1413 => 717,  1405 => 712,  1395 => 704,  1393 => 703,  1388 => 701,  1385 => 700,  1376 => 697,  1371 => 696,  1368 => 695,  1363 => 694,  1361 => 693,  1356 => 691,  1348 => 686,  1338 => 678,  1336 => 677,  1331 => 675,  1328 => 674,  1319 => 671,  1314 => 670,  1311 => 669,  1306 => 668,  1304 => 667,  1299 => 665,  1291 => 660,  1281 => 652,  1279 => 651,  1274 => 649,  1271 => 648,  1262 => 645,  1257 => 644,  1254 => 643,  1249 => 642,  1247 => 641,  1242 => 639,  1234 => 634,  1222 => 625,  1216 => 622,  1209 => 618,  1201 => 613,  1192 => 606,  1190 => 605,  1185 => 603,  1182 => 602,  1172 => 599,  1166 => 597,  1159 => 595,  1157 => 594,  1152 => 593,  1149 => 592,  1144 => 591,  1142 => 590,  1136 => 587,  1128 => 582,  1125 => 581,  1123 => 580,  1121 => 579,  1112 => 574,  1100 => 571,  1097 => 570,  1094 => 569,  1091 => 568,  1089 => 567,  1086 => 566,  1082 => 565,  1079 => 564,  1073 => 562,  1070 => 561,  1059 => 559,  1055 => 558,  1052 => 557,  1049 => 556,  1047 => 555,  1040 => 551,  1037 => 550,  1030 => 544,  1027 => 542,  1018 => 535,  1014 => 534,  1010 => 532,  1007 => 530,  993 => 518,  989 => 517,  985 => 516,  981 => 515,  977 => 514,  973 => 513,  969 => 512,  965 => 511,  961 => 510,  957 => 509,  953 => 508,  946 => 503,  938 => 497,  932 => 494,  928 => 492,  922 => 487,  916 => 485,  913 => 484,  910 => 482,  904 => 480,  901 => 479,  898 => 477,  894 => 474,  888 => 472,  885 => 471,  871 => 459,  865 => 456,  862 => 455,  859 => 453,  852 => 448,  841 => 446,  837 => 445,  831 => 442,  825 => 439,  822 => 438,  819 => 437,  816 => 435,  810 => 431,  799 => 429,  795 => 428,  787 => 423,  782 => 421,  776 => 418,  773 => 417,  770 => 416,  767 => 414,  760 => 409,  749 => 407,  745 => 406,  739 => 403,  733 => 400,  730 => 399,  727 => 398,  724 => 396,  718 => 392,  707 => 390,  703 => 389,  693 => 382,  687 => 379,  684 => 378,  681 => 377,  678 => 375,  672 => 371,  661 => 369,  657 => 368,  647 => 361,  641 => 358,  638 => 357,  635 => 356,  632 => 354,  626 => 350,  616 => 347,  610 => 345,  603 => 343,  601 => 342,  596 => 341,  592 => 340,  582 => 333,  576 => 330,  573 => 329,  570 => 328,  564 => 323,  552 => 313,  542 => 305,  536 => 301,  526 => 293,  520 => 289,  510 => 281,  504 => 277,  494 => 269,  488 => 265,  478 => 257,  472 => 253,  462 => 245,  456 => 241,  446 => 233,  440 => 229,  430 => 221,  424 => 217,  414 => 209,  408 => 205,  401 => 201,  398 => 200,  389 => 193,  380 => 189,  377 => 188,  373 => 185,  370 => 183,  361 => 175,  358 => 173,  353 => 170,  346 => 169,  336 => 161,  330 => 157,  323 => 152,  317 => 149,  311 => 146,  305 => 143,  299 => 140,  293 => 137,  285 => 132,  279 => 129,  273 => 126,  267 => 123,  261 => 120,  255 => 117,  251 => 115,  246 => 112,  242 => 110,  231 => 103,  224 => 99,  214 => 95,  207 => 89,  205 => 88,  192 => 87,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %}{{ 'Tickets'|trans }}{% endblock %}

{% block templateCSS %}
    <style>
        .uv-dropdown.asset-visibility li input {
            z-index: 100;
        }
        .uv-dropdown.asset-visibility ul li label {
            color: #333333;
            font-size: 17px;
            font-weight: 500;
            text-transform: capitalize;
            cursor: pointer;
            margin: auto;
        }
        .uv-table td a {
            color: #333333;
        }
        .uv-table.uv-list-view table tbody td.uv-width-100 {
            width: 100px !important;
        }
        .uv-table.uv-list-view td[data-index=\"agent\"] {
            white-space: nowrap;
        }
        .uv-view:not(.uv-stack-view) .uv-table td a {
            display: inline-block;
            width: 100%;
        }
        .uv-action-bar-col-lt.uv-width-100 {
            width: 100% !important;
        }
        #quick-view-modal .uv-view {
            padding: 0;
            overflow-y: visible;
            display: inline-block;
            position: relative;
        }
        #quick-view-modal .uv-view .uv-ticket-section {
            margin-top: 0;
        }
        #quick-view-modal .uv-ticket-head {
            border-top: 1px solid #d3d3d3;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #quick-view-modal .uv-ticket-strip {
            padding-bottom: 0;
        }
        #quick-view-modal .uv-ticket-strip .uv-btn-tag {
            margin-bottom: 0;
        }
        #quick-view-modal .quick-view-navigation {
            position: absolute;
            right: 50px;
            top: 9px;
        }
        #quick-view-modal .quick-view-navigation ~ a {
            width: calc(100% - 100px);
            display: inline-block;
        }
        #quick-view-modal .uv-btn-tag[disabled=\"disabled\"] {
            opacity: .4;
            cursor: not-allowed;
            border-color: #B1B1AE !important;
        }
        #quick-view-modal .uv-loader {
            transform: scale(0.5);
            top: 14px;
            right: 60px;
        }
        tr.unread {
            background: #f1f1f1;
        }
        .uv-table table tbody tr.not-assigned td {
            border-bottom: 1px solid #ffcacc;
        }
        @media screen and (max-width: 500px) {
            .uv-action-bar label {
                display: inline-block;
            }
        }
    </style>
{% endblock %}

{% block pageContent %}
    {# Quick View Popup #}
    <div class=\"uv-pop-up-overlay\" id=\"quick-view-modal\">
        <div class=\"uv-pop-up-box uv-pop-up-wide\"></div>
    </div>

    <div class=\"uv-inner-section\">
        {# Ticket Sidebar #}
        <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %} style=\"display: none;\" {% endif %} >
            <div class=\"uv-aside-default\">
                <div class=\"uv-aside-head\">
                    <div class=\"uv-aside-title\">
                        <h6>{{ 'Tickets'|trans }}</h6>
                    </div>

                    <div class=\"uv-aside-back\">
                        <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_dashboard\") }}';\">{{ 'Back'|trans }}</span>
                    </div>
                </div>

                <div class=\"uv-aside-nav\">
                    <ul>
                        {# Predefined Label List #}
                        <ul class=\"predefined-label-list uv-aside-list\">
                            <li>
                                <a href=\"#\" class=\"uv-aside-active\">{{ 'All'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>

                                {# Status ticket count list #}
                                <ul class=\"status-list\">
                                    <li>
                                        <a href=\"#\" data-id=\"1\" class=\"uv-aside-nav-active\"><span class=\"name\">{{ 'Open'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"2\"><span class=\"name\">{{ 'Pending'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"6\"><span class=\"name\">{{ 'Answered'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"3\"><span class=\"name\">{{ 'Resolved'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"4\"><span class=\"name\">{{ 'Closed'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-id=\"5\"><span class=\"name\">{{ 'Spam'|trans }}</span><span class=\"uv-flag-gray\">0</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href=\"#new\">{{ 'New'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#unassigned\">{{ 'UnAssigned'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#notreplied\">{{ 'UnAnswered'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#mine\">{{ 'My Tickets'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#starred\">{{ 'Starred'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                            <li>
                                <a href=\"#trashed\" style=\"border-bottom: none\">{{ 'Trashed'|trans }} <span class=\"uv-flag-gray uv-flag-dark\">0</span></a>
                            </li>
                        </ul>

                        {# Custom Label List #}
                        <ul class=\"uv-aside-custom\"></ul>
                    </ul>
                </div>

                <a class=\"uv-btn-small add-new-label\" href=\"#\"><span class=\"uv-icon-add\"></span> {{ 'Label'|trans }}</a>
            </div>

            <!-- Label add and edit -->
            <div class=\"uv-add-edit-label\" style=\"display: block\"></div>
        </div>

        {# Ticket List #}
        <div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %} uv-aside-view {% endif %}\">
            <h1>{{ 'Tickets'|trans }}</h1>

            {# Action Bar #}
            <div class=\"uv-action-bar\">
                {# Select all checkbox #}
                <div class=\"uv-action-select-wrapper\">
                    <label class=\"uv-vertical-align uv-margin-left-27\">
                        <div class=\"uv-checkbox\">
                            <input type=\"checkbox\" class=\"select-all-checkbox\"><span class=\"uv-checkbox-view\"></span>
                        </div>
                    </label>
                </div>
                {# Filter Options #}
                <div class=\"uv-action-col-wrapper\">
                    {# Ticket Sort | Asset Visibility #}
                    <div class=\"uv-action-bar-col-lt\">
                        <div class=\"filter\">
                            {# Sort By #}
                            <div class=\"uv-dropdown sort\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Sort By:'|trans }} {{ 'Last Replied'|trans }}</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Sort By'|trans }}</label>
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>

                            {# Assets Visibilities #}
                            <div class=\"uv-dropdown asset-visibility\">
                                <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Assets Visibility'|trans }}</div>

                                <div class=\"uv-dropdown-list uv-bottom-left\" style=\"width: 215px;\">
                                    <div class=\"uv-dropdown-container\">
                                        <label>{{ 'Assets Visibility'|trans }}</label>

                                        <ul>
                                            {# Ticket Source #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"source\" name=\"assetVisibility[]\" value=\"source\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"source\">{{ 'Channel/Source'|trans }}</label>
                                            </li>

                                            {# Ticket Customer Name #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-name\" name=\"assetVisibility[]\" value=\"customer-name\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-name\">{{ 'Customer Name'|trans }}</label>
                                            </li>

                                            {# Ticket Customer Email #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"customer-email\" name=\"assetVisibility[]\" value=\"customer-email\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"customer-email\">{{ 'Customer Email'|trans }}</label>
                                            </li>

                                            {# Ticket Timestamp #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"timestamp\" name=\"assetVisibility[]\" value=\"timestamp\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"timestamp\">{{ 'Timestamp'|trans }}</label>
                                            </li>

                                            {# Ticket Group #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"group\" name=\"assetVisibility[]\" value=\"group\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"group\">{{ 'Group'|trans }}</label>
                                            </li>

                                            {# Ticket Team #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"team\" name=\"assetVisibility[]\" value=\"team\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"team\">{{ 'Team'|trans }}</label>
                                            </li>

                                            {# Ticket Type #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"type1\" name=\"assetVisibility[]\" value=\"type1\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"type1\">{{ 'Type'|trans }}</label>
                                            </li>

                                            {# Ticket Replies #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"replies\" name=\"assetVisibility[]\" value=\"replies\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"replies\">{{ 'Replies'|trans }}</label>
                                            </li>

                                            {# Ticket Agent #}
                                            <li class=\"uv-dropdown-checkbox\">
                                                <label>
                                                    <div class=\"uv-checkbox\">
                                                        <input type=\"checkbox\" id=\"agent\" name=\"assetVisibility[]\" value=\"agent\" checked>
                                                        <span class=\"uv-checkbox-view uv-checkbox-dwn\"></span>
                                                    </div>
                                                </label>

                                                <label for=\"agent\">{{ 'Agent'|trans }}</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Ticket Mass Action #}
                    <div class=\"uv-action-bar-col-lt\" style=\"display: none\">
                        <!-- Mass action -->
                        <div class=\"mass-action\">
                            <div class=\"property-block\">
                                {# Update Assigned Support Agent #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Agent'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Agent'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-agents-list agent\" data-action=\"agent\">
                                                {% for agent in user_service.getAgentPartialDataCollection() %}
                                                    <li data-index=\"{{ agent.id }}\">
                                                        {% if agent.smallThumbnail != null %}
                                                            <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}{{ agent.smallThumbnail }}\"/>
                                                        {% else %}
                                                            <img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                                                        {% endif %}
                                                        {{ agent.name }}
                                                    </li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Assigned Support Group #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Group'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Group'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list group\" data-action=\"group\">
                                                {% for group in user_service.getSupportGroups() %}
                                                    <li data-index=\"{{ group.id }}\"><a href=\"#\">{{ group.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Assigned Support Team #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_ASSIGN_TICKET_GROUP') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Team'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Team'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list team\" data-action=\"team\">
                                                {% for team in user_service.getSupportTeams() %}
                                                    <li data-index=\"{{ team.id }}\"><a href=\"#\">{{ team.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Ticket Status #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_STATUS') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Status'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Status'|trans }}</label>

                                                <ul class=\"status\" data-action=\"status\">
                                                    {% for status in ticketStatusCollection %}
                                                        <li data-index=\"{{ status.id }}\"><a href=\"#\">{{ status.description|trans }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Ticket Type #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_TYPE') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Type'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Type'|trans }}</label>
                                                <div class=\"uv-search-sm\">
                                                    <input type=\"text\" class=\"uv-search-field\" placeholder=\"{{ 'Search'|trans }}\">
                                                </div>
                                            </div>

                                            <ul class=\"uv-search-list type\" data-action=\"type\">
                                                {% for type in ticket_service.getTypes()  %}
                                                    <li data-index=\"{{ type.id }}\"><a href=\"#\">{{ type.name }}</a></li>
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Priority #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_UPDATE_TICKET_PRIORITY') %}
                                    <div class=\"uv-dropdown\">
                                        <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Priority'|trans }}</div>
                                        <div class=\"uv-dropdown-list uv-bottom-left\">
                                            <div class=\"uv-dropdown-container\">
                                                <label>{{ 'Priority'|trans }}</label>

                                                <ul class=\"priority\" data-action=\"priority\">
                                                    {% for priority in ticketPriorityCollection %}
                                                        <li data-index=\"{{ priority.id }}\"><a href=\"#\">{{ priority.description|trans }}</a></li>
                                                    {% endfor %}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}

                                {# Update Label #}
                                <div class=\"uv-dropdown\">
                                    <div class=\"uv-dropdown-btn uv-vertical-align uv-margin-right-5\">{{ 'Label'|trans }}</div>
                                    <div class=\"uv-dropdown-list uv-bottom-left\">
                                        <div class=\"uv-dropdown-container\">
                                            <label>{{ 'Label'|trans }}</label>

                                            <div class=\"uv-search-sm\">
                                                <input type=\"text\" class=\"uv-search-field\" placeholder=\"Search\">
                                            </div>
                                        </div>

                                        <ul class=\"uv-search-list label\" data-action=\"label\"></ul>
                                    </div>
                                </div>

                                {# Trashe Tickets #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete\" data-action=\"trashed\" style=\"margin-left: 5px;\">{{ 'Delete'|trans }}</a>
                                {% endif %}
                            </div>

                            {# For Trashed Tickets #}
                            <div class=\"trashed-block\" style=\"display: none\">
                                {# Restore Tickets #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_RESTORE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-restore\" data-action=\"restore\" style=\"margin-left: 5px;\">{{ 'Restore'|trans }}</a>
                                {% endif %}

                                {# Delete Tickets Forever #}
                                {% if user_service.isAccessAuthorized('ROLE_AGENT_DELETE_TICKET') %}
                                    <a class=\"uv-btn-stroke uv-margin-right-5\" id=\"mass-delete-forever\" data-action=\"delete\" style=\"margin-left: 5px;\">{{ 'Delete Forever'|trans }}</a>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    {# Ticket Search | Filter Extras #}
                    <div class=\"uv-action-bar-col-rt\">
                        <!-- Search Tickets -->
                        <input type=\"text\" class=\"uv-search-inline\" placeholder=\"{{ 'Search'|trans }}\">

                        <!-- Extra Filters -->
                        <div class=\"uv-btn-stroke uv-margin-left-15 filter-view-trigger\" data-target=\"uv-filter-view\"><span class=\"uv-icon-filter\"></span>{{ 'Filter View'|trans }}</div>
                    </div>
                </div>
            </div>

            {# Ticket List #}
            <div class=\"uv-table uv-list-view\">
                <table>
                    <thead>
                    <tr>
                        <th class=\"uv-width-140\"></th>
                        <th>{{ 'ID'|trans }}</th>
                        <th class=\"uv-min-width-300\">{{ 'Subject'|trans }}</th>
                        <th data-index=\"customer-name\">{{ 'Customer Name'|trans }}</th>
                        <th data-index=\"customer-email\">{{ 'Customer Email'|trans }}</th>
                        <th data-index=\"timestamp\">{{ 'Timestamp'|trans }}</th>
                        <th style =\"min-width:100px\" data-index=\"lastReply\">{{ \"Last Reply\"|trans }}</th>
                        <th data-index=\"group\">{{ 'Group'|trans }}</th>
                        <th data-index=\"team\">{{ 'Team'|trans }}</th>
                        <th data-index=\"type1\">{{ 'Type'|trans }}</th>
                        <th data-index=\"replies\">{{ 'Replies'|trans }}</th>
                        <th data-index=\"agent\">{{ 'Agent'|trans }}</th>
                    </tr>
                    </thead>

                    <tbody></tbody>
                </table>

                <div class=\"navigation\"></div>
            </div>
        </div>

        {# Extra Filters #}
        <div class=\"uv-filter-view\" id=\"uv-filter-view\">
            {# Filter Head #}
            <div class=\"uv-filter-head\">
                <div class=\"uv-filter-title\">
                    <h6>{{ 'Tickets'|trans }}</h6>
                    <span>{{ 'Save set of filters as a preset to stay more productive'|trans }}</span>
                </div>

                <div class=\"uv-filter-toggle\" id=\"filter-close-trigger\"><span></span></div>
            </div>

            {# Filter Content #}
            <div class=\"uv-filter-paper\">
                {# Filters #}
                <div class=\"uv-filter-options\">
                    <script>
                        var userFilters = {};
                    </script>

                    {# Saved Filters #}
                    <div class=\"uv-element-block\" style=\"border-bottom: 1px solid #D3D3D3; padding-bottom: 5px;\">
                        <label class=\"uv-field-label\">{{ 'Saved Filters'|trans }}</label>
                        <div class=\"uv-field-block\">
                            <div class=\"uv-customize-wrapper\">
                                <select class=\"uv-select uv-select-70\" id=\"saved-filter\">
                                    {% set filters = app.user.agentInstance.userSavedFilters %}
                                    {% if filters|length %}
                                        <option value=\"\">-- Saved Filter --</option>
                                        {% for userFilter in filters %}
                                            <option value=\"{{userFilter.id}}\">{{userFilter.name}}</option>
                                        {% endfor %}
                                    {% else %}
                                        <option value=\"\">{{ 'No saved filter created'|trans }}</option>
                                    {% endif %}
                                </select>
                                {% for userFilter in app.user.agentInstance.userSavedFilters %}
                                    <script>
                                        {% set isDefault = 0 %}
                                        {% if app.user.agentInstance.defaultFiltering == userFilter.id %}
                                        {% set isDefault = 1 %}
                                        {% endif %}
                                        userFilters[{{userFilter.id}}] = {{ {'id': userFilter.id, 'name': userFilter.name, 'route': userFilter.route, 'is_default': isDefault}|json_encode|raw }};
                                    </script>
                                {% endfor %}
                                <span class=\"uv-customize\" style=\"display: none\" data-toggle=\"tooltip\" title=\"{{ 'Edit Saved Filter'|trans }}\"></span>
                            </div>
                        </div>
                    </div>

                    {% set filterContext = {} %}
                    {# agent #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Agent'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"agent-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"agent\" id=\"agent-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    {% set options = [] %}
                                    {% for agent in user_service.getAgentsPartialDetails %}
                                        {% set options = options|merge([{'id': agent.id, 'name': agent.name}]) %}
                                        <li data-id=\"{{agent.id}}\">
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
                                    {% set filterContext = filterContext|merge({'agent':options}) %}
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Customer'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"customer-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"customer\" id=\"customer-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                </div>
                                <ul class=\"uv-agents-list\">
                                    <li class=\"uv-filter-info\">
                                        {{ 'Type atleast 2 letters'|trans }}
                                    </li>
                                    <li class=\"uv-no-results\" style=\"display: none;\">
                                        {{ 'No result found'|trans }}
                                    </li>
                                </ul>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Group'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"group-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"group\" id=\"group-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for group in user_service.getSupportGroups() %}
                                            {% set options = options|merge([{'id': group.id, 'name': group.name}]) %}
                                            <li data-id=\"{{group.id}}\">
                                                {{group.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'group':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Team'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"team-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"team\" id=\"team-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for team in user_service.getSupportTeams() %}
                                            {% set options = options|merge([{'id': team.id, 'name': team.name}]) %}
                                            <li data-id=\"{{team.id}}\">
                                                {{team.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'team':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Type'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"type-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"type\" id=\"type-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for type in ticket_service.getTypes() %}
                                            {% set options = options|merge([{'id': type.id, 'name': type.name}]) %}
                                            <li data-id=\"{{type.id}}\">
                                                {{type.name}}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'type':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Priority'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"priority-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"priority\" id=\"priority-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for priority in ticket_service.getPriorities() %}
                                            {% set options = options|merge([{'id': priority.id, 'name': priority.code, 'color': priority.colorCode}]) %}
                                            <li data-id=\"{{priority.id}}\">
                                                {{ priority.code|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'priority':options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Tag'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"tag-filter\">
                            <input class=\"uv-field uv-dropdown-other\" type=\"text\" data-filter-type=\"tag\" id=\"tag-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        <li class=\"uv-filter-info\">
                                            {{ 'Type atleast 2 letters'|trans }}
                                        </li>
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Source'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"source-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"source\" id=\"source-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for key, source in ticket_service.getAllSources() %}
                                            {% set options = options|merge([{'id': key, 'name': source}]) %}
                                            <li data-id=\"{{key}}\">
                                                {{ source|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'source': options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Mailbox'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"mailbox-filter\">
                            <input class=\"uv-field uv-dropdown-other preloaded\" type=\"text\" data-filter-type=\"mailbox\" id=\"mailbox-filter-input\">
                            <div class=\"uv-dropdown-list uv-bottom-left\">
                                <div class=\"uv-dropdown-container\">
                                    <label>{{ 'Filter With'|trans }}</label>
                                    <ul class=\"\">
                                        {% set options = [] %}
                                        {% for mailbox in ticket_service.getAllMailboxes() %}
                                            {% set options = options|merge([{'id': mailbox.email, 'name': mailbox.name}]) %}
                                            <li data-id=\"{{mailbox.email}}\">
                                                {{ mailbox.name|trans }}
                                            </li>
                                        {% endfor %}
                                        <li class=\"uv-no-results\" style=\"display: none;\">
                                            {{ 'No result found'|trans }}
                                        </li>
                                        {% set filterContext = filterContext|merge({'mailbox': options}) %}
                                    </ul>
                                </div>
                            </div>
                            <div class=\"uv-filtered-tags\"></div>
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Before'|trans }}</label>
                        <div class=\"uv-field-block range\" id=\"before-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"before\" id=\"before-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'After'|trans }}</label>
                        <div class=\"uv-field-block range\" id=\"after-filter\">
                            <input class=\"uv-field uv-date-picker\" type=\"text\" data-filter-type=\"after\" id=\"after-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Replies less than'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"1\" data-filter-type=\"replies-less\" id=\"repliesLess-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Replies more than'|trans }}</label>
                        <div class=\"uv-field-block\" id=\"reply-filter\">
                            <input class=\"uv-field\" type=\"number\" min=\"0\" data-filter-type=\"replies-more\" id=\"repliesMore-filter-input\">
                        </div>
                    </div>

                    <div class=\"uv-action-buttons\">
                    </div>

                    {# Clear Filters #}
                    <a class=\"uv-btn-remove\" href=\"#\"><span class=\"uv-icon-discard\"></span> {{ 'Clear All'|trans }}</a>
                </div>

                {# Add|Edit Filter #}
                <div class=\"uv-filter-edit\" style=\"display: none;\"></div>
            </div>

            <script type=\"text/javascript\">
                var filterContext = {{ filterContext|json_encode|raw }}
            </script>
        </div>
    </div>
{% endblock %}

{% block footer %}
    {{ parent() }}

    {# Sort Ticket View Template #}
    <script id=\"ticket_list_sorting_tmp\" type=\"text/template\">
        <li class=\"<% if(sort == 'ticket.id') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.id/<% if(sort == 'ticket.id') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.id\">
                {% trans %}Ticket Id{% endtrans %}
                <% if(sort == 'ticket.id') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'ticket.updatedAt') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/ticket.updatedAt/<% if(sort == 'ticket.updatedAt') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"ticket.updatedAt\">
                {% trans %}Last Replied{% endtrans %}
                <% if(sort == 'ticket.updatedAt') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'agentName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/agentName/<% if(sort == 'agentName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"agentName\">
                {% trans %}Assign To{% endtrans %}
                <% if(sort == 'agentName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerEmail') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerEmail/<% if(sort == 'customerEmail') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerEmail\">
                {% trans %}Customer Email{% endtrans %}
                <% if(sort == 'customerEmail') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>

        <li class=\"<% if(sort == 'customerName') { %>uv-drop-list-active<% } %>\">
            <a href=\"#<% if(queryString != '') { %><%= queryString %>/<% } %><% if(page) { %>page/<%= page %><% } else { %>page/1<% } %>/sort/customerName/<% if(sort == 'customerName') { %><% if(direction) { %>direction/<%= direction %><% } else { %>direction/desc<% } %><% } else { %>direction/asc<% } %>\" data-field=\"customerName\">
                {% trans %}Customer Name{% endtrans %}
                <% if(sort == 'customerName') { %>
                <span class=\"uv-sorting <% if(direction == 'asc') { %> descend <% } else { %> ascend <% } %>\"></span>
                <% } %>
            </a>
        </li>
    </script>

    {# Ticket Status List Template #}
    <script id=\"ticket_status_list_tmp\" type=\"text/template\">
        <ul class=\"status-list\">
            {% for status in ticketStatusCollection %}
                <li>
                    <a href=\"#\" class=\"<% if(active == {{ status.id }} {% if status.id == 1 %} || active == 0{% endif %}) { %>uv-aside-nav-active<% } %>\" data-id=\"{{ status.id }}\">
                        <span class=\"name\">{{ status.description|trans }}</span>
                        <span class=\"uv-flag-gray\">
                            <% if(status && status[1] != undefined) { %>
                                <%= status[{{ status.id }}] %>
                            <% } else { %>
                                0
                            <% } %>
                        </span>
                    </a>
                </li>
            {% endfor %}
        </ul>
    </script>

    {# Default Ticket Label View Template #}
    <script id=\"predefined_label_tmp\" type=\"text/template\">
        <li>
            <a href=\"#\" <% if (active == '') { %> class=\"uv-aside-active\" <% } %>>
            {{ 'All'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\"><%= labelDetails.predefind.all %></span>
            </a>
        </li>
        <li>
            <a href=\"#new\" <% if(active == 'new') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'New'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.new %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#unassigned\" <% if(active == 'unassigned') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'UnAssigned'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.unassigned %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#notreplied\" <% if(active == 'notreplied') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'UnAnswered'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.notreplied %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#mine\" <% if(active == 'mine') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'My Tickets'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.mine %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#starred\" <% if(active == 'starred') { %> class=\"uv-aside-active\" <% } %> >
            {{ 'Starred'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.starred %>
                </span>
            </a>
        </li>
        <li>
            <a href=\"#trashed\" <% if(active == 'trashed') { %> class=\"uv-aside-active\" <% } %>>
            {{ 'Trashed'|trans }}
            <span class=\"uv-flag-gray uv-flag-dark\">
                    <%= labelDetails.predefind.trashed %>
                </span>
            </a>
        </li>
    </script>

    {# Custom Ticket Label View Template #}
    <script id=\"custom_label_tmp\" type=\"text/template\">
        <a href=\"#label/<%= id %>\"  data-id=\"<%= id %>\">
            <%- name %>
            <span class=\"uv-flag-gray\" style=\"<% if(colorCode) { %>background-color:<%= colorCode %><% } %>\">
                <%= count %>
            </span>
        </a>
        <span class=\"uv-customize\" data-target=\"uv-task-view\" data-toggle=\"tooltip\" title=\"{{ 'Edit Label'|trans }}\"></span>
    </script>

    {# Add|Edit Ticket Label View Template #}
    <script id=\"add_edit_label_tmp\" type=\"text/template\">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <% if(id) { %>
                <h6>{{ 'Edit Label'|trans }}</h6>
                <% } else { %>
                <h6>{{ 'Add Label'|trans }}</h6>
                <% } %>
            </div>
            <div class=\"uv-aside-back\" id=\"back-to-labels\">
                <span>{{ 'Back'|trans }}</span>
            </div>
        </div>
        <div class=\"uv-aside-option\" data-id=\"<%= id %>\">

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Choose a Color'|trans }}</label>
                <div class=\"uv-field-block\">
                    <% colors = ['#337CFF','#FEBF00','#E5549F','#27B6BB','#FB8A3F','#43AF52'] %>
                    <% for(var colorTemp in colors) { %>
                    <span class=\"uv-color-block <% if(colorCode == colors[colorTemp]) { %>uv-color-active<% } %>\" data-color=\"<%- colors[colorTemp] %>\" style=\"background:<%- colors[colorTemp] %>\"></span>
                    <% } %>
                </div>
            </div>
            <div>
                <a class=\"uv-btn add-update-btn\" href=\"#\">
                    <% if(id) { %>
                    {{ 'Update'|trans }}
                    <% } else { %>
                    {{ 'Create'|trans }}
                    <% } %>
                </a>
            </div>
            <% if(id) { %>
            <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>{{ 'Remove Label'|trans }}</a>
            <% } %>
        </div>
    </script>

    {# Add|Edit Saved Ticket Filter View Template #}
    <script id=\"add_edit_saved_filter_tmp\" type=\"text/template\">
        <form>
            <div class=\"uv-filter-edit-head\">
                <div class=\"uv-filter-edit-title\">
                    <h6>
                        <% if(id) { %>
                        <input type=\"hidden\" name=\"id\" id=\"filter-id\" value=\"<%= id %>\"/>
                        {{ 'Edit Saved Filter'|trans }}
                        <% } else { %>
                        {{ 'New Saved Filter'|trans }}
                        <% } %>
                    </h6>
                </div>
                <div class=\"uv-filter-edit-back back-to-filter\">
                    <span>{{ 'Back'|trans }}</span>
                </div>
            </div>
            <div class=\"uv-element-block\">
                <label class=\"uv-field-label\">{{ 'Name'|trans }}</label>
                <div class=\"uv-field-block\">
                    <input class=\"uv-field name\" name=\"name\" type=\"text\" value=\"<%- name %>\" />
                </div>
            </div>

            <div class=\"uv-element-block\">
                <label>
                    <div class=\"uv-checkbox\">
                        <input type=\"checkbox\" name=\"is_default\" <% if(is_default) { %>checked<% } %> />
                        <span class=\"uv-checkbox-view\"></span>
                    </div>
                    <span class=\"uv-checkbox-label\">{{ 'Is Default'|trans }}</span>
                </label>
            </div>

            <div class=\"uv-filters-group\">
                <% _.each(filters, function(filter, key){ %>
                <div class=\"uv-element-block\" data-filter=\"<%= key %>\">
                    <label class=\"uv-field-label\"><%- filter.name %></label>
                    <div class=\"uv-field-block\">
                        <% _.each(filter.options, function(option){ %>
                        <a class=\"uv-btn-tag\" href=\"#\" data-id=\"<%= option.id %>\">
                            <%- option.name %>
                            <span class=\"uv-icon-remove-dark\"></span>
                        </a>
                        <% }); %>
                    </div>
                </div>
                <% }); %>

                <div class=\"uv-action-buttons\">
                    <% if(id) { %>
                    <a class=\"uv-btn-remove\"><span class=\"uv-icon-discard\"></span>{{ 'Remove Saved Filter'|trans }}</a>
                    <% } %>
                </div>
            </div>
            <div class=\"uv-action-buttons\">
                <a class=\"uv-btn <% if(id) { %>update-filter<% } else { %>save-filter<% } %>\" href=\"#\">
                    <% if(id) { %>
                    {{ 'Update'|trans }}
                    <% } else { %>
                    {{ 'Create'|trans }}
                    <% } %>
                </a>
                <a class=\"uv-btn back-to-filter\" href=\"#\">{{ 'Cancel'|trans }}</a>
            </div>
        </form>
    </script>

    {# Quick View Ticket View Template #}
    <script id=\"ticket_quick_view_tmp\" type=\"text/template\">
        <div class=\"uv-pull-right quick-view-navigation\">
            <div class=\"uv-loader\" style=\"display: none\">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <% if(previous) { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" data-id=\"<%= previous %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-pre\" disabled=\"disabled\">
                </span>
            <% } %>
            <% if(next) { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\"  data-id=\"<%= next %>\">
                </span>
            <% } else { %>
            <span class=\"uv-btn-tag uv-icon-nav-nxt\" disabled=\"disabled\">
                </span>
            <% } %>
        </div>
        <span class=\"uv-pop-up-close\"></span>
        <a href=\"<%= path %>\"><h2>{{ 'Ticket Info'|trans }} #<%= id %></h2></a>
        <div class=\"uv-pop-up-body uv-inner-section\">
            <div class=\"uv-view\">
                <div class=\"uv-ticket-head\">
                    <div class=\"uv-ticket-strip\">
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                {{ 'Timestamp'|trans }} -
                            </span>
                            <span class=\"uv-margin-0\">
                                <%= formatedCreatedAt %>
                            </span>
                        </span>
                        <span>
                            <span class=\"uv-ticket-strip-label\">
                                {{ 'By'|trans }} -
                            </span>
                            <%- createThread.user.name %>
                        </span>
                        <% if(agent) { %>
                        <span class=\"agent-info\" style=\"\">
                                <span class=\"uv-ticket-strip-label\">
                                    {{ 'Agent'|trans }} -
                                </span>
                                <span class=\"name\"><%- agent.name %></span>
                            </span>
                        <% } %>
                    </div>
                    <div class=\"uv-ticket-strip\">
                        <span class=\"uv-btn-tag\">
                            {{ 'Priority'|trans }}
                            - <%- priority.description %>
                        </span>
                        <span class=\"uv-btn-tag\">
                            {{ 'Status'|trans }}
                            - <%- status.description %>
                        </span>
                        <% if(lastReplyAgentName) { %>
                        <span class=\"uv-btn-tag\">
                                {{ 'Last Replied Agent'|trans }}
                                - <%- lastReplyAgentName.name.split(\" \")[0] %>
                            </span>
                        <% } %>
                    </div>
                </div>
                <div class=\"uv-ticket-head\">
                    <h1><%- subject %></h1>
                </div>

                <div class=\"uv-ticket-section\">
                    <div class=\"uv-ticket-main create\">
                        <div class=\"uv-ticket-strip\">
                            <span>
                                <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= createThread.timestamp %>\" title=\"<%= createThread.formatedCreatedAt %>\"><%= createThread.formatedCreatedAt %></span>
                                - <%- createThread.user.name %>
                                <span class=\"uv-ticket-strip-label\">
                                    {{ 'created Ticket'|trans }}
                                </span>
                            </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (createThread.user.smallThumbnail != null) { %>
                                <img class='border' src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= createThread.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (createThread.createdBy == 'customer') { %>
                                    <img class='border' src=\"{{ asset(default_customer_image_path) }}\"/>
                                <% } else { %>
                                    <img class='border' src=\"{{ asset(default_agent_image_path) }}\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(createThread.createdBy == 'customer') { %>
                            <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(createThread.user) { %>
                                <a href=\"{{ path('helpdesk_member_account') }}/<%= createThread.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- createThread.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= createThread.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(createThread.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(createThread.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(createThread.attachments.length >1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%= createThread.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% if(lastReply) { %>
                    <div class=\"uv-ticket-main\">
                        <div class=\"uv-ticket-strip\">
                                <span>
                                    <span class=\"uv-margin-0 timeago\" data-timestamp=\"<%= lastReply.timestamp %>\" title=\"<%= lastReply.formatedCreatedAt %>\"><%= lastReply.formatedCreatedAt %></span>
                                    - <%- lastReply.user.name %>
                                    <span class=\"uv-ticket-strip-label\">
                                        {{ 'made last reply'|trans }}
                                    </span>
                                </span>
                        </div>
                        <div class=\"uv-ticket-main-lt\">
                            <% if (lastReply.user.smallThumbnail != null) { %>
                                <img class='border' src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= lastReply.user.smallThumbnail %>\"/>
                            <% } else { %>
                                <% if (lastReply.createdBy == 'customer') { %>
                                    <img class='border' src=\"{{ asset(default_customer_image_path) }}\"/>
                                <% } else { %>
                                    <img class='border' src=\"{{ asset(default_agent_image_path) }}\"/>
                                <% } %>
                            <% } %>
                        </div>
                        <div class=\"uv-ticket-main-rt\">
                            <% if(lastReply.createdBy == 'customer') { %>
                            <a href=\"{{ path('helpdesk_member_manage_customer_account') }}/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                <% } else { %>
                                <% if(lastReply.user) { %>
                                <a href=\"{{ path('helpdesk_member_account') }}/<%= lastReply.user.id %>\" class=\"uv-ticket-member-name\">
                                    <% } else { %>
                                    <a class=\"uv-ticket-member-name\">
                                        <% } %>
                                        <% } %>
                                        <%- lastReply.user.name %>
                                    </a>

                                    <div class=\"message\">
                                        <p>
                                            <%= lastReply.reply %>
                                        </p>
                                    </div>
                                    <!-- Attachment Block -->
                                    <% if(lastReply.attachments.length) { %>
                                    <div class=\"uv-ticket-uploads\">
                                        <h4>{{ 'Uploaded Files'|trans }}</h4>
                                        <div class=\"uv-ticket-uploads-strip\">
                                            <% _.each(lastReply.attachments, function(file) { %>
                                            <a href=\"<%-file.downloadURL %>\" target =\"_blank\" class=\"uv-ticket-uploads-brick uv-no-pointer-events\" data-toggle=\"tooltip\" title=\"<%- file.name %>\">
                                                <img src=\"<%-file.iconURL %>\" class=\"uv-auto-pointer-events\">
                                            </a>
                                            <% }) %>
                                        </div>
                                        <% if(lastReply.attachments.length> 1) { %>
                                        <div class=\"thread-attachments-zip pull-left\">
                                            <div class=\"uv-upload-actions\">
                                                <a href=\"{{ path('helpdesk_member_ticket_download_attachment_zip') }}/<%= lastReply.id %>\" target=\"_blank\"><span class=\"uv-icon-attachment\"></span> {{ 'Download (as .zip)'|trans }}</a>
                                            </div>
                                        </div>
                                        <% } %>

                                    </div>
                                    <% } %>
                                    <!-- //Attachment Block -->
                        </div>
                    </div>
                    <% } %>
                </div>
            </div>
        </div>
    </script>

    {# Ticket List Item View Template #}
    <script id=\"ticket_list_item_tmp\" type=\"text/template\">
        <td class=\"uv-width-140 uv-no-content\">
            <span class=\"uv-list-ticket-priority\" style=\"<% if(priority) { %>background: <%=priority.colorCode %><% } %>;\"></span>
            <label class=\"uv-vertical-align uv-margin-right-5\">
                <div class=\"uv-checkbox\">
                    <input type=\"checkbox\" class=\"mass-action-checkbox\" value=\"<%= id %>\"/>
                    <span class=\"uv-checkbox-view\"></span>
                </div>
            </label>
            <span class=\"uv-star <% if(isStarred) { %>uv-star-active<% } %> uv-margin-right-5\"></span>
            <span data-index=\"source\">
                <% if(source == 'email') {  %>
                    <span class=\"uv-channel uv-channel-email uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Email\"></span>
                <% } else if(source == 'facebook') {  %>
                    <span class=\"uv-channel uv-channel-facebook uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Facebook\"></span>
                <% } else if(source == 'twitter') {  %>
                    <span class=\"uv-channel uv-channel-twitter uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Twitter\"></span>
                <% } else if(source == 'binaka' || source == 'knock') {  %>
                    <span class=\"uv-channel uv-channel-binaka uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Binaka\"></span>
                <% } else if(source == 'api') { %>
                    <span class=\"uv-channel uv-channel-api uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"API\"></span>
                <% } else if(source == 'formbuilder') { %>
                    <span class=\"uv-channel uv-channel-form-builder uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Formbuilder\"></span>
\t\t\t\t<% } else if(source == 'disqus-engage') { %>
                    <span class=\"uv-channel uv-channel-disqus-engage uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Disqus\"></span>
\t\t\t\t<% } else if(source == 'ebay') { %>
                    <span class=\"uv-channel uv-channel-ebay uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Ebay\"></span>
\t\t\t\t<% } else if(source == 'youtube') { %>
                    <span class=\"uv-channel uv-channel-youtube uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Youtube\"></span>
                <% } else { %>
                    <span class=\"uv-channel uv-channel-web uv-margin-right-5\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"<%- source %>\"></span>
                <% } %>

            </span>
            <span class=\"uv-quick-view-trigger\" data-id=\"<%= id %>\"></span>
        </td>
        <td data-value=\"{{ 'ID'|trans }}\" class=\"uv-width-100\">
            <a href=\"<%= path %>\">
                #<%= id %>
            </a>
        </td>
        <td data-value=\"{{ 'Subject'|trans }}\">
            <a href=\"<%= path %>\">
                <%- subject && subject.length <= 300 ? subject : subject.substr(0, 300) + '...'  %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Name'|trans }}\" data-index=\"customer-name\">
            <a href=\"<%= path %>\">
                <%- customer.name %>
            </a>
        </td>
        <td data-value=\"{{ 'Customer Email'|trans }}\" data-index=\"customer-email\">
            <a href=\"<%= path %>\">
                <%- customer.email %>
            </a>
        </td>
        <td data-value=\"{{ 'Timestamp'|trans }}\" data-index=\"timestamp\">
            <a href=\"<%= path %>\" class=\"timeago\" data-timestamp=\"<%= timestamp %>\" title=\"<%= formatedCreatedAt %>\">
                <%= formatedCreatedAt %>
            </a>
        </td>
        <td data-value=\"{{ 'Last Reply'|trans }}\" data-index=\"last-reply\">
            <% if(lastReplyTime) { %>
                <a href=\"<%= path %>\">
                    <%= lastReplyTime %>
                </a>
            <% } else { %>
                    {{ 'N/A'|trans }}
            <% } %>
        </td>
        <td data-value=\"{{ 'Group'|trans }}\" data-index=\"group\">
            <a href=\"<%= path %>\">
                <% if(group) { %>
                <%- group %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Team'|trans }}\" data-index=\"team\">
            <a href=\"<%= path %>\">
                <% if(team) { %>
                <%- team %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Type'|trans }}\" data-index=\"type1\">
            <a href=\"<%= path %>\">
                <% if(type) { %>
                <%- type %>
                <% } else { %>
                {{ 'N/A'|trans }}
                <% } %>
            </a>
        </td>
        <td data-value=\"{{ 'Replies'|trans }}\" data-index=\"replies\">
            <a href=\"<%= path %>\">
                <%= totalThreads %>
            </a>
        </td>
        <td data-value=\"{{ 'Agent'|trans }}\" data-index=\"agent\">
            <a href=\"<%= path %>\">
                <% if(agent) { %>
                <% if(agent.smallThumbnail != null) { %>
                <img src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}<%= agent.smallThumbnail %>\" alt=\"\"/>
                <% } else { %>
                <img src=\"{{ asset(default_agent_image_path) }}\" alt=\"\"/>
                <% } %>
                <%- agent.name %>
                <% } else { %>
                {{ 'Unassigned'|trans }}
                <% } %>
            </a>
        </td>
    </script>

    <script type=\"text/javascript\">
        var isPageJustLoaded = true;
        var globalMessageResponse = \"\";
        var currentUserId = \"{{ user_service.getCurrentUser().id }}\";
        var pathToTicket = \"{{ path('helpdesk_member_ticket', {'ticketId': 'replaceId' }) }}\";

        \$(() => {
            \$('#before-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            \$('#after-filter-input').datetimepicker({
                format: 'DD-MM-YYYY',
                maxDate: 'now',
                useCurrent: false,
            });

            // Ticket Model
            var TicketModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                },
                urlRoot: \"{{ path('helpdesk_member_ticket_xhr') }}\"
            });

            // Ticket Label Model
            var LabelModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    count: 0,
                },
                parse: function (resp, options) {
                    return JSON.parse(resp.label);
                },
                urlRoot: \"{{ path('helpdesk_member_ticket_label_xhr') }}\"
            });

            // Ticket Quick View Model
            var TicketQuickViewModel = Backbone.Model.extend({
                idAttribute: \"id\",
                defaults: {
                    path: \"\",
                    isSynced: false
                }
            });

            // Side Filter Model
            var SideFilterModel = Backbone.Model.extend({
                updateModel: function(type,json) {
                    if(this.has(type)) {
                        context = this.get(type)

                        savedOptionsIds = [];
                        _.each(context, function (option) {
                            savedOptionsIds.push(parseInt(option.id))
                        })

                        if(jQuery.inArray(parseInt(json.id), savedOptionsIds) == -1) {
                            context.push(json);
                            this.set(type, context)
                        }
                    } else {
                        this.set(type, [json])
                    }
                },
                loadFilterOptions: function(data) {
                    var self = this;
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_ticket_collection_load_filter_options_xhr') }}\",
                        type : 'POST',
                        data: data,
                        dataType : 'json',
                        success : function(response) {
                            _.each(response,function(filter,key) {
                                _.each(filter, function (item) {
                                    self.updateModel(key,item)
                                })
                            })
                            sideFilter.render();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Collection
            var LabelCollection = Backbone.Collection.extend({
                model: LabelModel,
                isLabelExist: function(labelName, labelId) {
                    var flag = 1;
                    _.each(this.models, function (item) {
                        if(item.get('name').toUpperCase() == labelName.toUpperCase() && item.id != labelId)
                            flag = 0;
                    }, this);
                    return flag;
                }
            });

            // Ticket Collection
            var TicketCollection = AppCollection.extend({
                model: TicketModel,
                url: \"{{ path('helpdesk_member_ticket_collection_xhr') }}\",
                filterParameters: {
                    label: \"\",
                    new: \"\",
                    unassigned: \"\",
                    notreplied: \"\",
                    mine: \"\",
                    starred: \"\",
                    trashed: \"\",
                    label: \"\",
                    status: \"\",
                    search: \"\",
                    agent: \"\",
                    customer: \"\",
                    priority: \"\",
                    type: \"\",
                    group: \"\",
                    team: \"\",
                    tag: \"\",
                    mailbox : \"\",
                    source : \"\",
                    after: \"\",
                    before: \"\",
                    repliesLess: \"\",
                    repliesMore: \"\",
                },
                parseRecords: function (response, options) {
                    return response.tickets;
                },
                syncData: function() {
                    app.appView.showLoader();
                    \$('.select-all-checkbox').prop('checked', false);

                    this.fetch({
                        data: this.getValidParameters(),
                        reset: true,
                        success: function(model, response) {
                            ticketQuickViewCollection.reset()
                            app.appView.hideLoader();
                            var ticketListView = new TicketList();

                            app.pager.paginationData = response.pagination;
                            var url = app.pager.paginationData.url;
                            if(ticketCollection.length == 0 && app.pager.paginationData.current != \"0\")
                                router.navigate(url.replace('replacePage', app.pager.paginationData.last),{trigger: true});
                            else {
                                app.pager.render();
                                statusListDetails = response.tabs;
                                labelDetails = response.labels;
                                labelListView.render();
                            }

                            if (globalMessageResponse) {
                                app.appView.renderResponseAlert(globalMessageResponse);
                            }

                            globalMessageResponse = null;
                            sideFilter.backToFilter()
                        },
                        error: function (model, xhr, options) {
                            app.appView.hideLoader();
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                },
                batchOperation: function(data) {
                    var self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_ticket_collection_mass_action_xhr') }}\",
                        type : 'POST',
                        data : {data : data},
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            globalMessageResponse = response;
                            self.syncData();
                        },
                        error: function (xhr) {
                            if(url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            var response = warningResponse;
                            if(xhr.responseJSON)
                                response = xhr.responseJSON;

                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(response);
                            \$('.mass-action-checkbox').prop('checked', false);
                        }
                    });
                }
            });

            // Ticket Quick View Collection
            var TicketQuickViewCollection = Backbone.Collection.extend({
                model: TicketQuickViewModel,
                isModelSynced: function(id) {
                    if (model = this.get(id)) {
                        if (parseInt(model.attributes.isSynced)) {
                            return model;
                        }
                    }

                    return false;
                },
                initialize: function() {
                    _.bindAll(this, 'getNextPrev', 'nextElement', 'previousElement');
                },
                getNextPrev : function(id) {
                    var data = {};
                    currentModel = ticketQuickViewCollection.get(id)
                    data['next'] = (model = this.nextElement(currentModel)) ? model.id : 0;
                    data['previous'] = (model = this.previousElement(currentModel)) ? model.id : 0;

                    return data;
                },
                nextElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if ((index + 1) === ticketQuickViewCollection.length)
                        return 0;

                    return ticketQuickViewCollection.at(index + 1);
                },
                previousElement: function(model) {
                    var index = ticketQuickViewCollection.indexOf(model);
                    if (index === 0 )
                        return 0;

                    return ticketQuickViewCollection.at(index - 1);
                }
            });

            // Filter
            var Filter = app.Filter.extend({
                defaultSortIndex: 'ticket.updatedAt',
                sortText: \"{% trans %}Sort By:{% endtrans %} \",
                defaultSortText: \"{% trans %}Sort By:{% endtrans %} {% trans %}Last Replied{% endtrans %}\",
                template : _.template(\$(\"#ticket_list_sorting_tmp\").html()),
                events : {
                    'keyup .uv-search-inline' : 'search',
                    'change .asset-visibility input[type=\"checkbox\"]': 'filterAssetsVisibility'
                },
                filterAssetsVisibilityOnLoad: function() {
                    if(localStorage.getItem('assets-visibility')) {
                        var assets = JSON.parse(localStorage.getItem('assets-visibility'));
                        \$.each(assets, function(asset, assetVal) {
                            if(assetVal) {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').show()
                                \$('#' + asset).prop('checked', true);
                            } else {
                                \$('span[data-index=\"' + asset + '\"], td[data-index=\"' +asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                                \$('#' + asset).prop('checked', false);
                            }
                        })
                    }
                },
                filterAssetsVisibility: function(e) {
                    var assets = {};
                    \$('.asset-visibility input').each(function() {
                        var asset = \$(this).val();
                        if(\$(this).is(':checked')) {
                            assets[asset] = 1;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').show()
                        } else {
                            assets[asset] = 0;
                            \$('span[data-index=\"' + asset + '\"], td[data-index=\"' + asset + '\"], th[data-index=\"' + asset + '\"]').hide()
                        }
                    });

                    localStorage.setItem('assets-visibility', JSON.stringify(assets));
                },
                search : _.debounce(function(e) {
                    this.collection.reset();
                    this.collection.state.currentPage = null;
                    this.collection.filterParameters.search = Backbone.\$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(this.collection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000)
            });

            // Side Filter View
            var SideFilter = Backbone.View.extend({
                el: \$(\".uv-filter-view\"),
                isRecurrsiveCalls: 0,
                isReadyFlag: 0,
                appliedFilterOptions: {},
                tempAppliedFilterOptions: {},
                events: {
                    'change #saved-filter': 'applySavedFilter',
                    'input .uv-field-block input' : 'searchFilterOption',
                    'click .uv-dropdown-list li' : 'applyFilter',
                    'dp.change .range input': 'applyFilter',
                    'click .uv-filtered-tags .uv-btn-tag' : 'removeFilter',
                    'change .custom-filter' : 'filterByCustom',
                    'change #repliesLess-filter-input' : 'filterByRepliesLessThan',
                    'change #repliesMore-filter-input' : 'filterByRepliesMoreThan',
                    'keyup .search-custom, change .search-custom' : 'filterByCustom',
                    'click .new-saved-reply, .edit-saved-reply, .uv-filter-paper .uv-customize': 'addEditSavedReply',
                    'click .back-to-filter': 'backToFilter',
                    'click .uv-filter-edit .uv-btn-tag': 'removeSavedFilterOption',
                    'click .uv-filter-edit .save-filter, .uv-filter-edit .update-filter' : \"saveSavedFilter\",
                    'click .uv-filter-edit .uv-action-buttons .uv-btn-remove': 'removeSavedFilter'
                },
                loaderTemplate: _.template(\$(\"#loader-tmp\").html()),
                addEditSavedReplyTemplate: _.template(\$(\"#add_edit_saved_filter_tmp\").html()),
                checkOptionAvailable: function() {
                    this.isReadyFlag = 0;
                    var self = this;
                    var fetchOptions = {};

                    _.each(ticketCollection.filterParameters, function (filter,key) {
                        if(jQuery.inArray(key, ['customer','tag','label']) !== -1) {
                            if(filter != null && filter != '') {
                                filter = filter.split(',');

                                if(typeof fetchOptions[key] === 'undefined')
                                    fetchOptions[key] = [];

                                savedOptionsIds = [];
                                if(sideFilterModel.has(key)) {
                                    _.each(sideFilterModel.get(key), function (option) {
                                        savedOptionsIds.push(parseInt(option.id))
                                    })
                                }

                                _.each(filter, function (item) {
                                    if(jQuery.inArray(parseInt(item), savedOptionsIds) == -1) {
                                        fetchOptions[key].push(parseInt(item));
                                        self.isReadyFlag = 1;
                                    }
                                })
                            }
                        }
                    });

                    return fetchOptions;
                },
                render: function() {
                    fetchOptions = this.checkOptionAvailable();

                    if (this.isReadyFlag && !this.isRecurrsiveCalls) {
                        this.isReadyFlag = 0;
                        this.isRecurrsiveCalls = 1;
                        sideFilterModel.loadFilterOptions(fetchOptions)
                    } else {
                        var appliedFilterOptions = {};
                        \$('.uv-filtered-tags').html(\"\")
                        var self = this;
                        var displayFlag = 0;
                        _.each(ticketCollection.filterParameters, function (filter, key) {
                            if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    filter = filter.split(',');

                                    appliedFilterOptions[key] = {'name': key.charAt(0).toUpperCase() + key.slice(1)};
                                    appliedFilterOptions[key]['options'] = [];

                                    _.each(filter, function (value) {
                                        if (key == 'after' || key == 'before' || key == 'repliesLess' || key == 'repliesMore') {
                                            \$(\"#\" + key + \"-filter-input\").val(filter)
                                            appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                        } else {
                                            savedOptions = sideFilterModel.get(key)
                                            _.each(savedOptions, function (item) {
                                                if (item.id == value) {
                                                    appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});

                                                    parent = \$('#'+key+'-filter')
                                                    parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + item.id + \"'>\" + item.name + \"<span class='uv-icon-remove-dark'></span></a>\")
                                                    parent.find('input').val('')
                                                }
                                            })
                                        }
                                    });
                                }
                            } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"{{ 'Label'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    var optionName = (key == 'mine') ? \"{% trans %}Assigned to me{% endtrans %}\" : key.charAt(0).toUpperCase() + key.slice(1);
                                    appliedFilterOptions[key]['options'].push({'id': key, 'name': optionName});
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"{{ 'Label'|trans }}\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"{{ 'All'|trans }}\"});
                                    }
                                }
                            } else if (key == 'label') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    var labelModel = labelCollection.get(filter);
                                    appliedFilterOptions[key] = {'name': \"{{ 'Label'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    if (labelModel) {
                                        appliedFilterOptions[key]['options'] = [];
                                        appliedFilterOptions[key]['options'].push({'id': labelModel.attributes.id, 'name': labelModel.attributes.name});
                                    } else {
                                        savedOptions = sideFilterModel.get(key)
                                        _.each(savedOptions, function (item) {
                                            if(item.id == filter) {
                                                appliedFilterOptions[key]['options'].push({'id': item.id, 'name': item.name});
                                            }
                                        });
                                    }
                                } else {
                                    if (!ticketCollection.filterParameters.new && !ticketCollection.filterParameters.unassigned && !ticketCollection.filterParameters.notreplied && !ticketCollection.filterParameters.mine && !ticketCollection.filterParameters.starred && !ticketCollection.filterParameters.trashed &&! ticketCollection.filterParameters.label) {
                                        appliedFilterOptions['all'] = {'name': \"{{ 'Label'|trans }}\"};
                                        appliedFilterOptions['all']['options'] = [];
                                        appliedFilterOptions['all']['options'].push({'id': 1, 'name': \"{{ 'All'|trans }}\"});
                                    }
                                }
                            } else if (key == 'status') {
                                appliedFilterOptions[key] = {'name': \"{{ 'Status'|trans }}\"};
                                appliedFilterOptions[key]['options'] = []
                                if (filter != null && filter != '' && filter != 1) {
                                    displayFlag = 1;
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': \$(\".status-list li a[data-id='\" + filter + \"'] .name\").text().trim()});
                                } else {
                                    appliedFilterOptions[key]['options'].push({'id': 1,'name': \"{{ 'Open'|trans }}\"});
                                }


                            } else if (key == 'search') {
                                if (filter != null && filter != '') {
                                    displayFlag = 1;
                                    appliedFilterOptions[key] = {'name': \"{{ 'Search Query'|trans }}\"};
                                    appliedFilterOptions[key]['options'] = [];
                                    appliedFilterOptions[key]['options'].push({'id': filter, 'name': filter});
                                }
                            } else if(key == 'custom') {
                                if (filter != null && filter != '') {
                                    self.\$el.find('[data-filter=\"custom\"]').remove();

                                    displayFlag = 1;

                                    var realKey = key;
                                    var checkBoxStore = Array();
                                    var dataValueValueSeprator = '_';
                                    var columnSeperator = '|';

                                    var multiOptions = filter.split(columnSeperator);
                                    var multiKeyValue, multiKeyValueValue, ele, newEle;

                                    _.each(multiOptions, function(valueData, indexData) {
                                        if(!valueData)
                                            return;

                                        multiKeyValue = valueData.split(dataValueValueSeprator);

                                        multiKeyValueValue = multiKeyValue[1].split(',');

                                        eleSelector = '[data-value=\"' + multiKeyValue[0] + '\"]';
                                        ele = \$(eleSelector);

                                        if (ele[0].type == 'radio') {
                                            var dataValue = multiKeyValue[0];
                                            name = ele.parents('.uv-element-block:not(.radio)').find('label:first').text().trim()
                                            value =  \$(eleSelector + '[value=\"' + multiKeyValue[1] + '\"]').parent().next().text();

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'radio'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            appliedFilterOptions['z-'+dataValue]['options'].push({'id': multiKeyValue[1], 'name': value});
                                        } else if (ele[0].type == 'checkbox') {

                                            var dataValue = multiKeyValue[0];
                                            if(\$.inArray(dataValue, checkBoxStore) >= 0)
                                                return;
                                            checkBoxStore.push(dataValue);

                                            name = ele.parents('.uv-element-block:not(.checkbox)').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'checkbox'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];
                                            var optionName, optionValue;
                                            _.each(multiKeyValueValue, function(value) {
                                                newEle = \$(eleSelector + '[value=\"' + value + '\"]')
                                                optionValue = dataValue + dataValueValueSeprator + newEle.val();
                                                optionName = newEle.parent().next().text();
                                                if(optionValue && optionName) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });
                                        } else if (ele[0].type == 'select-multiple') {
                                            var dataValue = multiKeyValue[0];
                                            filter = multiKeyValueValue;
                                            key = ele.attr('id');
                                            name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                            appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': 'select-multiple'};
                                            appliedFilterOptions['z-'+dataValue]['options'] = [];

                                            _.each(filter, function (value) {
                                                var optionName;
                                                if(optionName = \$(\"#\"+key+\" option[value='\" + value + \"']\").text()) {
                                                    appliedFilterOptions['z-'+dataValue]['options'].push({'id': value, 'name': optionName});
                                                }
                                            });

                                        } else if (ele[0].type == 'text' || ele[0].type == 'number') {
                                            filter = multiKeyValue[1];
                                            if (filter != null && filter != '') {
                                                filter = filter.replace(/\\+/g,' ');
                                                displayFlag = 1;
                                                var dataValue = ele.attr('data-value');
                                                name = ele.parents('.uv-element-block').find('label:first').text().trim()

                                                appliedFilterOptions['z-'+dataValue] = {'name': name, 'type': ele[0].type};
                                                appliedFilterOptions['z-'+dataValue]['options'] = [];
                                                appliedFilterOptions['z-'+dataValue]['options'].push({'id': 1, 'name': filter});

                                            }

                                        }
                                    })
                                }
                            }
                            if('after' == key || 'before' == key || 'repliesLess' == key || 'repliesMore' == key) {
                                \$('#'+ key +'-filter-input').val(filter);
                            }
                        })

                        if (displayFlag) {
                            self.\$el.find('.uv-filter-options .uv-action-buttons').html(\"\")
                            if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '' && Backbone.history.getFragment() == userFilters[\$(\"#saved-filter\").val()]['route']) {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>{{ 'Edit'|trans }}</a>\").show();
                                \$('.uv-filter-paper .uv-customize').show()
                            } else {
                                self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn new-saved-reply' href='#'>{{ 'New'|trans }}</a>\").show();
                                if (\$(\"#saved-filter\").val() != null && \$(\"#saved-filter\").val() != '') {
                                    self.\$el.find('.uv-filter-options .uv-action-buttons').append(\"<a class='uv-btn edit-saved-reply' href='#'>{{ 'Update'|trans }}</a>\").show();
                                    \$('.uv-filter-paper .uv-customize').show()
                                } else {
                                    \$('.uv-filter-paper .uv-customize').hide()
                                }
                            }
                        } else {
                            \$('.uv-filter-paper .uv-customize').hide()
                        }

                        this.appliedFilterOptions = appliedFilterOptions;
                        this.tempAppliedFilterOptions = jQuery.extend(true, {}, appliedFilterOptions);
                    }
                },
                searchFilterOption: function(e) {
                    self = this;
                    currentElement = Backbone.\$(e.currentTarget);
                    dropdown = currentElement.siblings('.uv-dropdown-list');
                    var filterType =  currentElement.attr('data-filter-type');
                    if (jQuery.inArray(filterType, ['customer', 'tag']) !== -1) {
                        self.searchFilterXhr(currentElement);
                    }
                },
                searchFilterXhr: _.debounce(function(currentElement) {
                    var parent = currentElement.parent();
                    if (\$('.uv-dropdown-other.uv-dropdown-btn-active').parent().attr('id') != parent.attr('id'))
                        return;

                    parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                    parent.find(\".uv-filter-info\").show()
                    if (currentElement.val().length > 1) {
                        parent.append(this.loaderTemplate())
                        parent.find('.uv-filter-info').text(\"{% trans %}Searching{% endtrans %} ...\")
                        if (self.xhrReq)
                            self.xhrReq.abort();

                        self.xhrReq = \$.ajax({
                            url : \"{{ path('helpdesk_member_ticket_collection_search_filter_options_xhr') }}\",
                            type : 'GET',
                            data: {\"type\" : currentElement.attr('data-filter-type'), \"query\" : currentElement.val(), 'not' : ticketCollection.filterParameters[currentElement.attr('data-filter-type')]},
                            dataType : 'json',
                            success : function(response) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").hide();
                                if (response.length == 0) {
                                    parent.find('.uv-no-results').show()
                                } else {
                                    parent.find('.uv-no-results').hide();
                                    _.each(response, function(item) {
                                        if (currentElement.attr('data-filter-type') == 'customer') {
                                            var img = item.smallThumbnail ? \"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset('') }}\"+item.smallThumbnail : \"{{ asset(default_customer_image_path)}}\";
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"' name='\" + item.name + \"' class='uv-dropdown-navigations-support-el' tabindex='0' style='display: flex; gap: 10px;'><div><img src='\" + img + \"' style='margin: unset;'/></div><div style='font-size: 14px;'><div style='width: 100%;'>\" +  item.name + \"</div><div style='width: 100%; max-width: 168px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>\" + item.email + \"</div></div></li>\")
                                        } else
                                            parent.find('.uv-dropdown-list ul').append(\"<li data-id='\" + item.id + \"'>\" + item.name + \"</li>\")
                                    });
                                }
                            },
                            error: function (xhr) {
                                self.xhrReq = 0;
                                parent.find('.uv-loader').remove()
                                parent.find('.uv-no-results').hide();
                                parent.find('.uv-filter-info').text(\"{{ 'Type atleast 2 letters'|trans }}\").show();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    } else {
                        parent.find('.uv-no-results').hide();
                    }
                }, 1000),

                applySavedFilter: function(e) {
                    var element = Backbone.\$(e.currentTarget);
                    if (element.val() != \"\") {
                        var element = Backbone.\$(e.currentTarget);
                        router.navigate(userFilters[element.val()]['route'], {trigger: true});
                    } else {
                        router.navigate('', {trigger: true});
                    }
                },
                applyFilter: function(e) {
                    currentElement = Backbone.\$(e.currentTarget);

                    if (currentElement.attr(\"data-id\")) {
                        var flag = 1;
                        parent = currentElement.parents(\".uv-field-block\");
                        filterType = parent.find('input').attr('data-filter-type');

                        if (filterType == \"customer\" || filterType == 'tag') {
                            sideFilterModel.updateModel(filterType, {'id': currentElement.attr('data-id'), 'name': currentElement.attr('name')})
                            parent.find(\".uv-no-results\").hide()
                            parent.find(\".uv-filter-info\").show().text(\"{{ 'Type atleast 2 letters'|trans }}\")
                            parent.find(\"li:not(.uv-no-results, .uv-filter-info)\").remove();
                        } else {
                            if (ticketCollection.filterParameters[filterType]) {
                                ids = ticketCollection.filterParameters[filterType].split(',')
                                if (jQuery.inArray(currentElement.attr('data-id'), ids) !== -1)
                                    flag = 0;
                            }
                        }

                        parent.find('input').val('')
                        if (jQuery.inArray(filterType, ['agent', 'priority', 'type', 'group', 'team', 'mailbox', 'source']) !== -1) {
                            parent.find(\"li:not(.uv-no-results)\").show()
                        }
                        if (flag) {
                            parent.find('.uv-filtered-tags').append(\"<a class='uv-btn-tag' href='#' data-id='\" + currentElement.attr('data-id') + \"'>\"+currentElement.attr('name')+\"<span class='uv-icon-remove-dark'></span></a>\")
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = this.joinTagValues(parent.find(\".uv-filtered-tags\"));
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    } else {
                        filterType = currentElement.attr('data-filter-type');
                        if (filterType == 'before' || filterType == \"after\") {
                            ticketCollection.state.order = null;
                            ticketCollection.state.sortKey = null;
                            ticketCollection.state.currentPage = null;
                            ticketCollection.filterParameters[filterType] = currentElement.val();
                            var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                            router.navigate(queryString, {trigger: true});
                        }
                    }
                },
                removeFilter: function(e) {
                    e.preventDefault()

                    currentElement = Backbone.\$(e.currentTarget);
                    filterType = currentElement.parents('.uv-field-block').find('input').attr('data-filter-type')
                    var options = ticketCollection.filterParameters[filterType];
                    options = options.split(',');
                    var index = options.indexOf(currentElement.attr('data-id'));
                    options.splice(index, 1);
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters[filterType] = options.join(',');
                    currentElement.remove()

                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                joinTagValues: function(parent) {
                    var ids = new Array();
                    parent.find('.uv-btn-tag').each(function() {
                        ids.push(\$(this).attr('data-id'))
                    });

                    return ids.join();
                },
                filterByRepliesMoreThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesMore = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByRepliesLessThan: _.debounce(function(e) {
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.repliesLess = \$(e.target).val();
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, { trigger: true });
                }, 1000),
                filterByCustom: _.debounce(function(e) {
                    var custom = '';
                    var checkBoxStore = Array();
                    var indexValueSeperator = '_';
                    var columnSeperator = '|';

                    Backbone.\$('.custom-filter').each(function() {
                        if (\$(this).context.type == 'radio' && \$(this).is(':checked')) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        } else if (\$(this).context.type == 'checkbox' && \$(this).is(':checked')) {
                            var checkboxValue = Array();
                            var dataValue = \$(this).attr('data-value');
                            if (\$.inArray(dataValue, checkBoxStore) >= 0)
                                return;
                            \$.each(\$('[data-value=\"'+ dataValue +'\"]:checked'), function() {
                                checkboxValue.push(\$(this).val());
                            });
                            checkBoxStore.push(dataValue);
                            custom += dataValue + indexValueSeperator + checkboxValue.join() + columnSeperator;
                        } else if (\$(this).context.type == 'select-multiple' && \$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val().join() + columnSeperator;
                        }
                    })

                    Backbone.\$('.search-custom').each(function(){
                        if (\$(this).val()) {
                            custom += \$(this).attr('data-value') + indexValueSeperator + \$(this).val() + columnSeperator;
                        }
                    })

                    custom = custom.replace(/\\|\$/, '');

                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.custom = custom;
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString,{trigger: true});
                }, 1000),
                backToFilter: function(e) {
                    if (e)
                        e.preventDefault()
                    this.\$el.find('.uv-filter-options').show()
                    this.\$el.find('.uv-filter-edit').hide()
                },
                addEditSavedReply: function(e) {
                    e.preventDefault()

                    var context = {};
                    this.tempAppliedFilterOptions = jQuery.extend(true, {}, this.appliedFilterOptions);
                    if (Backbone.\$(e.currentTarget).is('.new-saved-reply')) {
                        context = {'id': 0, 'name': '', 'is_default': 0, 'filters': this.tempAppliedFilterOptions};
                    } else {
                        context = userFilters[\$(\"#saved-filter\").val()];
                        context.filters = this.tempAppliedFilterOptions;
                        userFilters[\$(\"#saved-filter\").val()]
                    }
                    \$('.uv-filter-edit').html('')
                    \$('.uv-filter-edit').append(this.addEditSavedReplyTemplate(context));
                    this.\$el.find('.uv-filter-options').hide()
                    this.\$el.find('.uv-filter-edit').show()
                },
                removeSavedFilterOption: function(e) {
                    e.preventDefault()
                    var parent = Backbone.\$(e.currentTarget).parents('.uv-element-block');
                    var elementIndex = Backbone.\$(e.currentTarget).index();
                    var filterType = parent.attr('data-filter');
                    var filterId = Backbone.\$(e.currentTarget).attr('data-id');

                    delete this.tempAppliedFilterOptions[filterType]['options'][elementIndex]
                    Backbone.\$(e.currentTarget).remove()
                    if (!parent.find('.uv-btn-tag').length) {
                        parent.remove()
                        delete this.tempAppliedFilterOptions[filterType];
                    }
                    if (this.getSavedFilterRoute() == '') {
                        this.backToFilter();
                    }
                },
                saveSavedFilter: function(e) {
                    e.preventDefault()

                    if (Backbone.\$(e.currentTarget).hasClass('save-filter'))
                        this.saveFilterAjax('POST')
                    else {
                        this.saveFilterAjax('PUT')
                    }
                },
                saveFilterAjax: function(method) {
                    var inputElement = \$('.uv-filter-edit input.name');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    if (inputElement.val() != undefined && inputElement.val() == '') {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    } else {
                        var data = \$('.uv-filter-edit form').serializeObject();
                        data['route'] = this.getSavedFilterRoute();
                        app.appView.showLoader();
                        self = this;
                        \$.ajax({
                            url : \"{{ path('helpdesk_member_saved_filters_xhr') }}\",
                            type : method,
                            data: data,
                            dataType : 'json',
                            success : function(response) {
                                app.appView.hideLoader();
                                userFilters[response.filter.id] = response.filter;
                                \$(\"#saved-filter\").html(\"<option value=''>-- {{ 'Saved Filter'|trans }} --</option>\")
                                _.each(userFilters, function(filter, key) {
                                    if (response.filter.is_default && filter.id != response.filter.id)
                                        userFilters[key]['is_default'] = 0;

                                    var selected = '';
                                    if (response.filter.id == filter.id)
                                        selected = \"selected\";
                                    \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"' selected='\" + selected + \"''>\" + filter.name + \"</option>\")
                                })

                                \$(\"#saved-filter\").val(response.filter.id)
                                app.appView.renderResponseAlert(response);
                                self.render();
                                self.backToFilter();
                            },
                            error: function (xhr) {
                                app.appView.hideLoader();
                                if (url = xhr.getResponseHeader('Location'))
                                    window.location = url;
                            }
                        });
                    }
                },
                getSavedFilterRoute: function() {
                    var filterParameters = {};
                    temp = [];
                    _.each(this.tempAppliedFilterOptions, function (filter, key) {
                        if (jQuery.inArray(key, ['customer', 'agent', 'priority', 'type', 'group', 'team', 'tag', 'mailbox', 'source', 'after', 'before', 'repliesLess', 'repliesMore']) !== -1) {
                            var ids = [];
                            _.each(filter['options'], function (item) {
                                ids.push(item.id)
                            });
                            filterParameters[key] = ids.join(',')
                        } else if (jQuery.inArray(key, ['new','unassigned','notreplied','mine','starred','trashed']) !== -1) {
                            filterParameters[key] = 1;
                        } else if (jQuery.inArray(key, ['label', 'status', 'search']) !== -1) {
                            _.each(filter['options'], function (item) {
                                filterParameters[key] = item.id;
                            });
                        } else {
                            custom = key.split(\"z-\")
                            tempKey = custom[1];
                            if (filter.type == 'text' || filter.type == 'number') {
                                _.each(filter['options'], function (item) {
                                    temp.push(tempKey + '_' + item.name)
                                });
                            } else if (filter.type == 'radio') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            } else if (filter.type == 'checkbox' || filter.type == 'select-multiple') {
                                var ids = [];
                                _.each(filter['options'], function (item) {
                                    ids.push(item.id)
                                });
                                temp.push(tempKey + '_' + ids.join(','))
                            }
                        }
                    })
                    if (temp.length)
                        filterParameters['custom'] = temp.join('|');

                    return app.appView.buildQuery(\$.param(filterParameters));
                },
                removeSavedFilter: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    \$.ajax({
                        url : \"{{ path('helpdesk_member_saved_filters_xhr') }}/\" + \$(\"#saved-filter\").val(),
                        type : 'DELETE',
                        dataType : 'json',
                        success : function(response) {
                            app.appView.hideLoader();
                            delete userFilters[\$(\"#saved-filter\").val()];

                            \$(\"#saved-filter\").html(\"<option value=''>-- {{ 'Saved Filter'|trans }} --</option>\")
                            _.each(userFilters, function(filter, key) {
                                \$(\"#saved-filter\").append(\"<option value='\" + filter.id + \"'>\" + filter.name + \"</option>\")
                            })

                            \$(\"#saved-filter\").val('')
                            app.appView.renderResponseAlert(response);
                            self.render();
                            self.backToFilter();
                        },
                        error: function (xhr) {
                            app.appView.hideLoader();
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                        }
                    });
                }
            });

            // Ticket Label Item View
            var LabelItemView = Backbone.View.extend({
                tagName: 'li',
                className: 'uv-customize-wrapper',
                template: _.template(\$(\"#custom_label_tmp\").html()),
                events: {
                    'click .delete': 'confirmRemove',
                    'click .label-color.dropdown .fa-caret-down' : 'showUpdateLabelPopup'
                },
                render: function() {
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (ticketCollection.filterParameters.label != '') {
                        if (ticketCollection.filterParameters.label == this.model.id) {
                            this.\$el.find('a').addClass('uv-aside-active');
                        }
                    }

                    return this;
                }
            });

            // Ticket List Item View
            var TicketItem = Backbone.View.extend({
                tagName: \"tr\",
                template: _.template(\$(\"#ticket_list_item_tmp\").html()),
                events: {
                    'click .uv-star': \"updateStar\",
                },
                render: function () {
                    this.model.set({
                        path: pathToTicket.replace('replaceId', this.model.attributes.id)
                    });
                    this.\$el.html(this.template(this.model.toJSON()));

                    if (this.model.attributes.isAgentView != true) {
                        this.\$el.addClass('unread')
                    }

                    if (!this.model.attributes.agent) {
                        this.\$el.addClass('not-assigned')
                    }

                    return this;
                },
                updateStar: function(e) {
                    e.preventDefault();
                    if (Backbone.\$(e.currentTarget).hasClass('uv-star-active')) {
                        Backbone.\$(e.currentTarget).removeClass('uv-star-active');
                    } else {
                        Backbone.\$(e.currentTarget).addClass('uv-star-active');
                    }

                    this.model.save({
                        id: this.model.id
                    }, {
                        patch: true,
                        url: \"{{ path('helpdesk_member_bookmark_ticket_xhr') }}\",
                        success: function (model, response, options) {},
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location')) {
                                window.location = url;
                            }
                        }
                    });
                }
            });

            // Ticket List View
            var TicketList = Backbone.View.extend({
                el: \$(\".uv-table table\"),
                initialize: function() {
                    this.render();
                },
                events: {
                    'change .mass-action-checkbox' : 'showBulkOptions',
                },
                showBulkOptions: function() {
                    var count = 0;
                    this.\$el.find('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            count++;
                        }
                    });

                    if (count == \$('.mass-action-checkbox').length) {
                        \$('.select-all-checkbox').prop('checked', true);
                    } else {
                        \$('.select-all-checkbox').prop('checked', false);
                    }

                    if (count) {
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                        \$('.uv-action-bar .filter').parent().show();
                        \$('.uv-action-bar-col-rt').show();
                    }
                },
                render: function () {
                    this.\$el.find('tbody').html('');
                    if (ticketCollection.length) {
                        \$('.select-all-checkbox').prop( \"disabled\", false );
                        _.each(ticketCollection.models, function (item) {
                            ticketQuickViewCollection.add(new TicketQuickViewModel({id: item.id}))
                            this.renderTicket(item);
                        }, this);
                    } else {
                        \$('.select-all-checkbox').prop( \"disabled\", true );
                        this.\$el.find('tbody').append(\"<tr style='text-align: center;'><td colspan='11'>{% trans %}No Record Found{% endtrans %}</td></tr>\")
                    }

                    filter.filterAssetsVisibilityOnLoad()
                    app.appView.relativeTime()
                },
                renderTicket: function (item) {
                    var ticketItem = new TicketItem({
                        model: item
                    });

                    this.\$el.find('tbody').append(ticketItem.render().el);
                }
            });

            // Ticket Label List View
            var LabelListView = Backbone.View.extend({
                el: \$(\".uv-aside\"),
                template: _.template(\$(\"#predefined_label_tmp\").html()),
                statusTemplate: _.template(\$(\"#ticket_status_list_tmp\").html()),
                addEditLabelTemplate: _.template(\$(\"#add_edit_label_tmp\").html()),
                events: {
                    'click .status-list li a': \"filterByStatus\",
                    'click .add-new-label, .uv-customize': 'addEditLabel',
                    'click #back-to-labels': 'backToLabels',
                    'click .uv-color-block': 'setLabelColor',
                    'click .add-update-btn': 'saveLabel',
                    'click .uv-add-edit-label .uv-btn-remove': 'removeLabel'
                },
                render: function() {
                    var active = \"\";

                    if (ticketCollection.filterParameters.new != '') {
                        active = \"new\";
                    } else if (ticketCollection.filterParameters.unassigned != '') {
                        active = \"unassigned\";
                    } else if (ticketCollection.filterParameters.notreplied != '') {
                        active = \"notreplied\";
                    }

                    if (ticketCollection.filterParameters.mine != '') {
                        active = \"mine\";
                    } else if (ticketCollection.filterParameters.starred != '') {
                        active = \"starred\";
                    } else if (ticketCollection.filterParameters.trashed != '') {
                        active = \"trashed\";
                    } else if (ticketCollection.filterParameters.label != '') {
                        active = \"label\";
                    }

                    var data = {
                        'labelDetails' : labelDetails,
                        'active' : active
                    }
                    this.\$el.find('.predefined-label-list').html(this.template(data));

                    labelCollection.reset();
                    labelCollection.set(labelDetails.custom);
                    this.updateMassLabelList()
                },
                updateMassLabelList: function() {
                    this.\$el.find('.uv-aside-custom').html('');
                    var labelOptionHtml = \"\";
                    if (labelCollection.length) {
                        _.each(labelCollection.models, function (item) {
                            this.renderLabelItem(item);
                            labelOptionHtml = labelOptionHtml + \"<li data-index='\" + item.id + \"'><a href='#'>\" + item.attributes.name + \"</a></li>\";
                        }, this);
                    }
                    labelOptionHtml = labelOptionHtml ? labelOptionHtml : \"<li data-index='0'>{{ 'No Label Created'|trans }}</li>\";
                    \$(\".mass-action ul.label\").html(labelOptionHtml);
                    this.renderStatus();
                },
                renderLabelItem : function (item) {
                    var labelItem = new LabelItemView({
                        model: item
                    });
                    this.\$el.find('.uv-aside-custom').append(labelItem.render().el);
                },
                renderStatus : function() {
                    if (typeof ticketCollection.filterParameters.status == \"undefined\" || ticketCollection.filterParameters.status == null)
                        var active = 0;
                    else
                        var active = ticketCollection.filterParameters.status;

                    this.\$el.find('.uv-aside-active').parent().find('.status-list').remove()
                    this.\$el.find('.uv-aside-active').parent().append(this.statusTemplate({status : statusListDetails, active : active}));
                },
                filterByStatus : function(e) {
                    e.preventDefault()

                    ticketCollection.reset();
                    ticketCollection.state.order = null;
                    ticketCollection.state.sortKey = null;
                    ticketCollection.state.currentPage = null;
                    ticketCollection.filterParameters.status = Backbone.\$(e.currentTarget).attr('data-id');
                    var queryString = app.appView.buildQuery(\$.param(ticketCollection.getValidParameters()));
                    router.navigate(queryString, {trigger: true});
                },
                addEditLabel: function(e) {
                    e.preventDefault()
                    currentElement = Backbone.\$(e.currentTarget);
                    if (currentElement.hasClass('add-new-label'))
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate({id : 0, name : '', colorCode: ''}))
                    else
                        \$('.uv-add-edit-label').html(this.addEditLabelTemplate(labelCollection.get(currentElement.siblings('a').attr('data-id')).toJSON()))

                    \$('.uv-aside-default').hide()
                    \$('.uv-add-edit-label').show()
                },
                backToLabels: function(e) {
                    if (e)
                        e.preventDefault()
                    \$('.uv-aside-default').show()
                    \$('.uv-add-edit-label').hide()
                },
                setLabelColor: function(e) {
                    \$('.uv-color-block').removeClass('uv-color-active');
                    Backbone.\$(e.currentTarget).addClass('uv-color-active');
                },
                saveLabel : function(e) {
                    e.preventDefault()
                    var inputElement = \$('.uv-add-edit-label input');
                    inputElement.removeClass('uv-field-error');
                    \$('.uv-field-message').remove()

                    var labelName = app.appView.stripHTML(inputElement.val());
                    if (labelName == \"\") {
                        inputElement.addClass('uv-field-error');
                        inputElement.parent().after(\"<span class='uv-field-message'>{{ 'This field is mandatory'|trans }}</span>\");
                    } else {
                        var labelId = parseInt(\$('.uv-aside-option').attr('data-id'))

                        model = labelId ? labelCollection.get(labelId) : new LabelModel()
                        model.set({name: labelName, colorCode: \$('.uv-color-block.uv-color-active').attr('data-color')});
                        self = this;
                        var flag = labelCollection.isLabelExist(labelName, labelId);
                        if (flag) {
                            app.appView.showLoader();
                            model.save({}, {
                                success: function (model, response, options) {
                                    app.appView.hideLoader();
                                    if (response.alertClass == \"success\") {
                                        if (!labelId) {
                                            labelCollection.add(model);
                                        }
                                        self.updateMassLabelList()
                                        app.appView.renderResponseAlert(response);
                                    } else {
                                        inputElement.addClass('uv-field-error');
                                        inputElement.parent().after(\"<span class='uv-field-message'>\" + response.alertMessage + \"</span>\");
                                    }

                                    self.backToLabels();
                                },
                                error: function (model, xhr, options) {
                                    if(url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                    app.appView.renderResponseAlert(warningResponse);
                                }
                            });
                        } else {
                            inputElement.parent().after(\"<span class='uv-field-message'>{{ 'Label with same name already exist.'|trans }}</span>\");
                        }
                    }
                },
                removeLabel: function(e) {
                    e.preventDefault()
                    self = this;
                    app.appView.showLoader();
                    model = labelCollection.get(\$('.uv-aside-option').attr('data-id'))
                    model.destroy({
                        success : function (model, response, options) {
                            app.appView.hideLoader();
                            self.updateMassLabelList()
                            app.appView.renderResponseAlert(response);
                            self.backToLabels();
                        },
                        error: function (model, xhr, options) {
                            if (url = xhr.getResponseHeader('Location'))
                                window.location = url;
                            app.appView.hideLoader();
                            app.appView.renderResponseAlert(warningResponse);
                        }
                    });
                }
            });

            // Bulk Action View
            var BulkActionView = Backbone.View.extend({
                el: \$(\".mass-action\"),
                currentEvent: null,
                events: {
                    'click ul li, #mass-restore': 'massAction',
                    'click #mass-delete, #mass-delete-forever': 'confirmRemove',
                    'click #mass-restore': 'confirmRestore'
                },
                massAction: function(e) {
                    e.preventDefault();
                    if (!parseInt(Backbone.\$(e.currentTarget).attr('data-index')))
                        return;

                    var data = {};
                    data['actionType'] = Backbone.\$(e.currentTarget).parents('ul').attr('data-action') ? Backbone.\$(e.currentTarget).parents('ul').attr('data-action') : Backbone.\$(e.currentTarget).attr('data-action');
                    data['targetId'] = Backbone.\$(e.currentTarget).attr('data-index');
                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                removeItem: function(e) {
                    var data = {};

                    if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete\"))
                        data['actionType'] = \"trashed\";
                    else if (Backbone.\$(this.currentEvent.currentTarget).is(\"#mass-delete-forever\"))
                        data['actionType'] = \"delete\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                restoreItem: function(e) {
                    var data = {};
                    data['actionType'] = \"restored\";

                    data['ids'] = this.getCheckedTicketIds();
                    ticketCollection.batchOperation(data);
                    this.hideBulkOptions();
                },
                getCheckedTicketIds: function() {
                    var ids = new Array();
                    \$('.mass-action-checkbox').each(function() {
                        if (\$(this).is(':checked')) {
                            ids.push(\$(this).val());
                        }
                    });

                    return ids;
                },
                confirmRemove: function(e) {
                    e.preventDefault();
                    this.currentEvent = e;
                    app.appView.openConfirmModal(this)
                },
                confirmRestore: function(e) {
                    e.preventDefault();
                    app.appView.openConfirmModal(this, 'restoreItem')
                },
                hideBulkOptions : function() {
                    \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                    \$('.uv-action-bar .filter').parent().show();
                    \$('.uv-action-bar-col-rt').show()
                }
            });

            var PageView = Backbone.View.extend({
                el: '.uv-paper',
                events : {
                    'change .select-all-checkbox' : 'selectAll',
                    'click .uv-quick-view-trigger, .quick-view-navigation .uv-btn-tag': 'navigateQuickView',
                },
                quickViewTemplate: _.template(\$(\"#ticket_quick_view_tmp\").html()),
                navigateQuickView : function(e) {
                    e.preventDefault();
                    //\$(\"#quick-view-modal .uv-loader\").hide()
                    var currentElement = Backbone.\$(e.currentTarget);
                    ticketId = currentElement.attr('data-id');
                    if (ticketId) {
                        if(model = ticketQuickViewCollection.isModelSynced(ticketId)) {
                            this.renderQuickView(model.toJSON())
                        } else {
                            var self = this;
                            if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                app.appView.showLoader();

                            if (ticketQuickViewCollection.get(ticketId)) {
                                navData = ticketQuickViewCollection.getNextPrev(ticketId);
                                requiredNext = (!navData.next && app.pager.paginationData.next) ? 1 : 0;
                                requiredPrev = (!navData.previous && app.pager.paginationData.previous) ? 1 : 0;
                            } else
                                requiredNext = requiredPrev = 1;

                            if (self.xhrReq)
                                self.xhrReq.abort();

                            \$(\"#quick-view-modal .uv-loader\").show()
                            self.xhrReq = \$.ajax({
                                url : \"{{ path('helpdesk_member_ticket_quick_view_xhr') }}\",
                                type : 'GET',
                                data : {ticketId : ticketId, next: requiredNext, previous: requiredPrev},
                                dataType : 'json',
                                success : function(response) {
                                    self.xhrReq = 0;
                                    if (currentElement.hasClass(\"uv-quick-view-trigger\"))
                                        app.appView.hideLoader();

                                    if (response.next == undefined)
                                        response.next = navData.next
                                    if (response.previous == undefined)
                                        response.previous = navData.previous

                                    response.isSynced = 1
                                    response.path = pathToTicket.replace('replaceId', response.incrementId);

                                    if (ticketQuickViewCollection.get(ticketId))
                                        ticketQuickViewCollection.set(response,{remove: false})
                                    else
                                        ticketQuickViewCollection.add(new TicketQuickViewModel(response))

                                    self.renderQuickView(response)
                                },
                                error: function (xhr) {
                                    self.xhrReq = 0;
                                    if (url = xhr.getResponseHeader('Location'))
                                        window.location = url;
                                    app.appView.hideLoader();
                                }
                            });
                        }
                    }
                },
                renderQuickView: function(response) {
                    \$('#quick-view-modal .uv-pop-up-box').html(this.quickViewTemplate(response));
                    app.appView.openModal('quick-view-modal')
                    \$('#quick-view-modal .message').find('img').removeAttr('crossorigin');

                    \$('#quick-view-modal .message').find('.uv-icon-ellipsis').remove();
                    \$('#quick-view-modal .message').find('.helpdesk_blockquote').eq(0).before(\"<span class='uv-icon-ellipsis uv-ellipsis-mirror'></span>\").hide();
                    app.appView.relativeTime();
                },
                selectAll : function(e) {
                    if(Backbone.\$(e.currentTarget).is(':checked')) {
                        \$('.mass-action-checkbox').prop('checked', true);
                        \$('.uv-action-bar .filter').parent().hide();
                        \$('.uv-action-bar .mass-action').parent().addClass(\"uv-width-100\").show();
                        \$('.uv-action-bar-col-rt').hide()
                    } else {
                        var count = 0;
                        \$('.mass-action-checkbox').each(function() {
                            if(\$(this).is(':checked'))
                                count++;
                        });
                        if (count == \$('.mass-action-checkbox').length) {
                            \$('.mass-action-checkbox').prop('checked', false);
                            \$('.uv-action-bar .filter').parent().show();
                            \$('.uv-action-bar .mass-action').parent().removeClass(\"uv-width-100\").hide();
                            \$('.uv-action-bar-col-rt').show()
                        }
                    }
                },
            });

            // Ticket Router
            Router = Backbone.Router.extend({
                routes: {
                    'page/:number(/sort/:sortField)(/direction/:order)' : 'paginate',
                    'status/:status(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByStatus',
                    'search/:query(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByQuery',
                    'agent/:agent(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAgent',
                    'customer/:customer(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustomer',
                    'priority/:priority(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByPriority',
                    'type/:type(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByType',
                    'group/:group(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByGroup',
                    'team/:team(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySubGroup',
                    'tag/:tag(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByTags',
                    'mailbox/:mailbox(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByMailbox',
                    'source/:source(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterBySource',
                    'after/:after(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByAfter',
                    'before/:before(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByBefore',
                    'repliesLess/:repliesLess(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesLesserCount',
                    'repliesMore/:repliesMore(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByRepliesGreaterCount',
                    'custom/:custom(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByCustom',
                    'label/:labelId(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterByLabel',
                    'new(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNew',
                    'unassigned(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterUnassigned',
                    'notreplied(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterNotReplied',
                    'mine(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterMine',
                    'starred(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterstarred',
                    'trashed(/status/:status)(/search/:query)(/agent/:agent)(/customer/:customer)(/priority/:priority)(/type/:type)(/group/:group)(/team/:team)(/tag/:tag)(/mailbox/:mailbox)(/source/:source)(/after/:after)(/before/:before)(/repliesLess/:repliesLess)(/repliesMore/:repliesMore)(/custom/:custom)(/page/:number)(/sort/:sortField)(/direction/:order)': 'filterTrashed',
                    '': 'initializeList'
                },
                initializeList : function() {
                    \$(\"#saved-filter\").val('');
                    this.resetParams('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
                    this.fetch(null, null, null);
                },
                paginate : function(number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','', '');
                    this.fetch(number,sortField,order);
                },
                filterByLabel : function(labelId,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams(labelId,'','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNew : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('',1,'','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterUnassigned : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','',1,'','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterNotReplied: function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','',1,'','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);

                },
                filterMine : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','',1,'','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterstarred : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','',1,'',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterTrashed : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','',1,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,custom);
                    this.fetch(number,sortField,order);
                },
                filterByStatus : function(status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','',status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByQuery : function(query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','',query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAgent : function(agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','',agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustomer : function(customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','',customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByPriority : function(priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','',priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByType : function(type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','',type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByGroup : function(group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','',group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySubGroup : function(team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','',team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByTags : function(tag,mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','',tag,mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByMailbox : function(mailbox,source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','',mailbox,source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterBySource: function(source,after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','',source,after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByAfter: function(after,before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','',after,before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByBefore: function(before,repliesLess,repliesMore,custom,number,sortField,order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','',before,repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesLesserCount: function(repliesLess, repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','',repliesLess,repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByRepliesGreaterCount: function(repliesMore, custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','',repliesMore,custom);
                    this.fetch(number,sortField,order);
                },
                filterByCustom : function(custom, number, sortField, order) {
                    this.resetParams('','','','','','','','','','','','','','','','','','','','','','',custom);
                    this.fetch(number,sortField,order);
                },
                fetch: function(number, sortField, order) {
                    ticketCollection.state.currentPage = number;
                    filter.sortCollection(sortField, order);
                    ticketCollection.syncData();
                },
                resetParams : function(labelId,newLabel,unassigned,notreplied,mine,starred,trashed,status,query,agent,customer,priority,type,group,team,tag,mailbox,source,after,before,repliesLess,repliesMore,custom) {
                    _.each(userFilters, function(filter, index) {
                        if(Backbone.history.getFragment() == filter['route']) {
                            \$(\"#saved-filter\").val(index);
                        }
                    });

                    isPageJustLoaded = false;
                    if (query != null)
                        query = query.replace(/\\+/g,' ');
                    bulkAction.hideBulkOptions();
                    ticketCollection.filterParameters.label = labelId;
                    ticketCollection.filterParameters.new = newLabel;
                    ticketCollection.filterParameters.unassigned = unassigned;
                    ticketCollection.filterParameters.notreplied = notreplied;
                    ticketCollection.filterParameters.mine = mine;
                    ticketCollection.filterParameters.starred = starred;
                    ticketCollection.filterParameters.trashed = trashed;
                    ticketCollection.filterParameters.search = query;
                    \$(\".uv-search-inline\").val(query);
                    ticketCollection.filterParameters.status = status;
                    ticketCollection.filterParameters.agent = agent;
                    ticketCollection.filterParameters.customer = customer;
                    ticketCollection.filterParameters.priority = priority;
                    ticketCollection.filterParameters.type = type;
                    ticketCollection.filterParameters.group = group;
                    ticketCollection.filterParameters.team = team;
                    ticketCollection.filterParameters.tag = tag;
                    ticketCollection.filterParameters.mailbox = mailbox;
                    ticketCollection.filterParameters.source = source;
                    ticketCollection.filterParameters.after = after;
                    ticketCollection.filterParameters.before = before;
                    ticketCollection.filterParameters.repliesLess = repliesLess;
                    ticketCollection.filterParameters.repliesMore = repliesMore;

                    ticketCollection.filterParameters.custom = custom;
                    \$('.custom-fields').find('input[type=\"text\"]').val('');
                    \$('.custom-fields').find('select').val('');
                    \$('.custom-fields').find('input[type=\"radio\"]').prop('checked', false);
                    \$('.custom-fields').find('input[type=\"checkbox\"]').prop('checked', false);

                    if (custom) {
                        custom = custom.replace(/\\+/g,' ');

                        var indexValueSeperator = '_';
                        var columnSeperator = '|';

                        var multiOptions = custom.split(columnSeperator);
                        var multiKeyValue, multiKeyValueValue, ele;

                        _.each(multiOptions, function(valueData, indexData) {
                            if (!valueData)
                                return;

                            multiKeyValue = valueData.split(indexValueSeperator);

                            multiKeyValueValue = multiKeyValue[1].split(',');

                            ele = \$('[data-value=\"' + multiKeyValue[0] + '\"]');

                            if (ele[0].type == 'radio') {
                                \$('[data-value=\"' + multiKeyValue[0] + '\"][value=\"' + multiKeyValue[1] + '\"]').prop('checked', true);

                            } else if (ele[0].type == 'checkbox') {
                                _.each(ele, function(eleElements) {
                                    if (multiKeyValueValue.indexOf(eleElements.value) > -1) {
                                        \$(eleElements).prop('checked', true);
                                    }
                                });

                            } else if (ele[0].type == 'select-multiple') {
                                ele.val(multiKeyValueValue);

                            } else if (ele[0].type == 'text') {
                                ele.val(multiKeyValue[1]);
                            }
                        })

                    }

                    if (trashed) {
                        \$('.property-block').hide();
                        \$('.trashed-block').show();
                    } else {
                        \$('.property-block').show();
                        \$('.trashed-block').hide();
                    }

                    sideFilter.isRecurrsiveCalls = 0;
                    sideFilter.render();
                }
            });

            var router = new Router();
            var pageview = new PageView;
            var bulkAction = new BulkActionView();
            var sideFilterModel = new SideFilterModel(filterContext)
            var sideFilter = new SideFilter();
            var ticketCollection = new TicketCollection();
            var ticketQuickViewCollection = new TicketQuickViewCollection();
            var labelCollection = new LabelCollection();
            var labelListView = new LabelListView()
            var filter = new Filter({collection : ticketCollection});

            Backbone.history.start({
                push_state:true
            });
        });
    </script>
{% endblock %}", "@UVDeskCoreFramework/ticketList.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/ticketList.html.twig");
    }
}
