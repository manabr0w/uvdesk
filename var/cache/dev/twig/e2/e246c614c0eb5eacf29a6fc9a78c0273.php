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

/* @UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig */
class __TwigTemplate_715d4e6884d1f0320dbd71a1e8b28082 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig"));

        $this->parent = $this->loadTemplate("@UVDeskCoreFramework//Templates//layout.html.twig", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig", 1);
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

        yield " 
\t";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Swift Mailer Settings"), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "\t<div class=\"uv-inner-section\">
\t\t";
        // line 10
        yield "\t\t";
        $context["asideTemplate"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\Dashboard\\AsideTemplate";
        // line 11
        yield "\t\t";
        $context["asideSidebarReference"] = "Webkul\\UVDesk\\CoreFrameworkBundle\\UIComponents\\Dashboard\\Panel\\Sidebars\\Settings";
        // line 12
        yield "
\t\t";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_extensibles"]) || array_key_exists("uvdesk_extensibles", $context) ? $context["uvdesk_extensibles"] : (function () { throw new RuntimeError('Variable "uvdesk_extensibles" does not exist.', 13, $this->source); })()), "getRegisteredComponent", [(isset($context["asideTemplate"]) || array_key_exists("asideTemplate", $context) ? $context["asideTemplate"] : (function () { throw new RuntimeError('Variable "asideTemplate" does not exist.', 13, $this->source); })())], "method", false, false, false, 13), "renderSidebar", [(isset($context["asideSidebarReference"]) || array_key_exists("asideSidebarReference", $context) ? $context["asideSidebarReference"] : (function () { throw new RuntimeError('Variable "asideSidebarReference" does not exist.', 13, $this->source); })())], "method", false, false, false, 13);
        yield "

\t\t<div class=\"uv-view ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "cookies", [], "any", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "cookies", [], "any", false, false, false, 15), "get", ["uv-asideView"], "method", false, false, false, 15))) {
            yield "uv-aside-view";
        }
        yield "\">
\t\t\t";
        // line 16
        if ((array_key_exists("configuration", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)))) {
            // line 17
            yield "                <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update configuration"), "html", null, true);
            yield "</h1>
            ";
        } else {
            // line 19
            yield "                <h1>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add configuration"), "html", null, true);
            yield "</h1>
            ";
        }
        // line 21
        yield "
            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"swiftmailer-settings-view\">
                <div class=\"swiftmailer-setting-type\">
                    ";
        // line 27
        yield "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailer ID"), "html", null, true);
        yield "</label>

                        <div class=\"uv-field-block\">
                            ";
        // line 31
        if ((array_key_exists("configuration", $context) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)))) {
            // line 32
            yield "                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailer ID - Leave blank to automatically create id"), "html", null, true);
            yield "\" />
                            ";
        } else {
            // line 34
            yield "                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mailer ID - Leave blank to automatically create id"), "html", null, true);
            yield "\" />
                            ";
        }
        // line 36
        yield "                        </div>
                    </div>

                    ";
        // line 40
        yield "                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Transport Type"), "html", null, true);
        yield "</label>

                        ";
        // line 43
        if ((array_key_exists("configuration", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 43, $this->source); })())))) {
            // line 44
            yield "                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 45, $this->source); })()), "transport", [], "any", false, false, false, 45) == "smtp")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP"), "html", null, true);
            yield "</option>
                                <option value=\"gmail\" ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 46, $this->source); })()), "transport", [], "any", false, false, false, 46) == "gmail")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gmail"), "html", null, true);
            yield "</option>
                                <option value=\"yahoo\" ";
            // line 47
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 47, $this->source); })()), "transport", [], "any", false, false, false, 47) == "yahoo")) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yahoo"), "html", null, true);
            yield " </option>
                            </select>
                        ";
        } else {
            // line 50
            yield "                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" selected>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP"), "html", null, true);
            yield "</option>
                                <option value=\"gmail\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gmail"), "html", null, true);
            yield "</option>
                                <option value=\"yahoo\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yahoo"), "html", null, true);
            yield "</option>
                            </select>
                        ";
        }
        // line 56
        yield "                    </div>

                    ";
        // line 59
        yield "                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["configuration"] ?? null), "deliveryStatus", [], "any", true, true, false, 62) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 62, $this->source); })()), "deliveryStatus", [], "any", false, false, false, 62) == true))) {
            // line 63
            yield "                                    <input name=\"deliveryStatus\" type=\"checkbox\" checked=\"\">
                                ";
        } else {
            // line 65
            yield "                                    <input name=\"deliveryStatus\" type=\"checkbox\">
                                ";
        }
        // line 67
        yield "
                                <span class=\"uv-checkbox-view\"></span>
                            </div>

                            <span class=\"uv-checkbox-label\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable Delivery"), "html", null, true);
        yield "</span>
                        </label>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>

                <div class=\"swiftmailer-transport-setting-references\">

                </div>

\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save Changes"), "html", null, true);
        yield "\" type=\"submit\">
\t\t\t</form>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 88
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

        // line 89
        yield "\t";
        yield from $this->yieldParentBlock("footer", $context, $blocks);
        yield "

    <script id=\"swft_conf_template_gmail\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_yahoo\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_custom\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server"), "html", null, true);
        yield "</label>

            <div class=\"uv-field-block\">
                <% if (typeof(host) != 'undefined' && host != '') { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"<%- host %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Port"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(port) != 'undefined' && port != '') { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"<%- port %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"465\" />
                <% } %>
            </div>
        </div>

        ";
        // line 181
        yield "
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Encryption Mode"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <select name=\"encryptionMode\" class=\"uv-select\">
                    <option value=\"ssl\" 
                        <% if (typeof(encryption) == 'undefined' || encryption == 'ssl') { print('selected'); } %>
                    >";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ssl"), "html", null, true);
        yield "</option>
                    <option value=\"tls\" 
                        <% if (typeof(encryption) != 'undefined' && encryption == 'tls') { print('selected'); } %>
                    >";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tls"), "html", null, true);
        yield "</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Authentication Mode"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <select name=\"authenticationMode\" class=\"uv-select\">
                    <option value=\"login\"
                        <% if (typeof(authentication) == 'undefined' || authentication == 'login') { print('selected'); } %>
                    >";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login"), "html", null, true);
        yield "</option>
                    <option value=\"plain\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'plain') { print('selected'); } %>
                    >";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Plain"), "html", null, true);
        yield "</option>
                    <option value=\"cram-md5\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'cram-md5') { print('selected'); } %>
                    >";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cram-MD5"), "html", null, true);
        yield "</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sender Address"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(senderAddress) != 'undefined' && senderAddress != '') { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"<%- senderAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery Address"), "html", null, true);
        yield "</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(deliveryAddress) != 'undefined' && deliveryAddress != '') { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"<%- deliveryAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SwiftMailerSettingsModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
                    username: [
                        {
                            required: true,
                            msg: '";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please specify a valid email address"), "html", null, true);
        yield "'
                        },
                        {
                            pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                            msg: '";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please specify a valid email address"), "html", null, true);
        yield "'
                        }
                    ],
                    password: function(value) {
                        if (value == undefined || value == '') {
                            return \"Please enter the password associated with your email address\";
                        }
                    },
                    host: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please enter your server host address\";
                            }
                        }
                    },
                    port: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a port number to connect with your mail server\";
                            }
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar SwiftMailerSettingsView = Backbone.View.extend({
                swft_conf_template_custom: _.template(\$(\"#swft_conf_template_custom\").html()),
                swft_conf_template_gmail: _.template(\$(\"#swft_conf_template_gmail\").html()),
                swft_conf_template_yahoo: _.template(\$(\"#swft_conf_template_yahoo\").html()),
\t\t\t\tevents: {
                    'change #cta-swiftmailer-transport': 'ctaTransportType',
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
                    this.renderTransportConfigurations();
\t\t\t\t},
                ctaTransportType: function(e) {
                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderTransportConfigurations();
                },
                renderTransportConfigurations: function() {
                    switch (this.model.get('transport')) {
                        case 'smtp':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_custom(this.model.attributes));
                            break;
                        case 'gmail':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_gmail(this.model.attributes));
                            break;
                        case 'yahoo':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_yahoo(this.model.attributes));
                            break;
                        default:
                            break;
                    }
                },
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            ";
        // line 321
        if ((array_key_exists("configuration", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 321, $this->source); })())))) {
            // line 322
            yield "                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel(\$.parseJSON('";
            // line 324
            yield json_encode((isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new RuntimeError('Variable "configuration" does not exist.', 324, $this->source); })()));
            yield "'))
                });\t
            ";
        } else {
            // line 327
            yield "                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel({ transport: 'smtp' })
                });\t
            ";
        }
        // line 332
        yield "\t\t});
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
        return "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig";
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
        return array (  617 => 332,  610 => 327,  604 => 324,  600 => 322,  598 => 321,  526 => 252,  519 => 248,  496 => 228,  481 => 216,  472 => 210,  466 => 207,  460 => 204,  451 => 198,  442 => 192,  436 => 189,  427 => 183,  423 => 181,  409 => 169,  398 => 161,  383 => 149,  368 => 137,  355 => 127,  340 => 115,  327 => 105,  312 => 93,  304 => 89,  291 => 88,  275 => 82,  261 => 71,  255 => 67,  251 => 65,  247 => 63,  245 => 62,  240 => 59,  236 => 56,  230 => 53,  226 => 52,  222 => 51,  219 => 50,  209 => 47,  201 => 46,  193 => 45,  190 => 44,  188 => 43,  183 => 41,  180 => 40,  175 => 36,  169 => 34,  161 => 32,  159 => 31,  153 => 28,  150 => 27,  143 => 21,  137 => 19,  131 => 17,  129 => 16,  123 => 15,  118 => 13,  115 => 12,  112 => 11,  109 => 10,  106 => 8,  93 => 7,  80 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"@UVDeskCoreFramework//Templates//layout.html.twig\" %}

{% block title %} 
\t{{ 'Swift Mailer Settings'|trans }}
{% endblock %}

{% block pageContent %}
\t<div class=\"uv-inner-section\">
\t\t{# Append Panel Aside #}
\t\t{% set asideTemplate = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\Dashboard\\\\AsideTemplate' %}
\t\t{% set asideSidebarReference = 'Webkul\\\\UVDesk\\\\CoreFrameworkBundle\\\\UIComponents\\\\Dashboard\\\\Panel\\\\Sidebars\\\\Settings' %}

\t\t{{ uvdesk_extensibles.getRegisteredComponent(asideTemplate).renderSidebar(asideSidebarReference) | raw }}

\t\t<div class=\"uv-view {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}uv-aside-view{% endif %}\">
\t\t\t{% if configuration is defined and configuration.id is not empty %}
                <h1>{{ 'Update configuration'|trans }}</h1>
            {% else %}
                <h1>{{ 'Add configuration'|trans }}</h1>
            {% endif %}

            <div class=\"uv-hr\"></div>
\t\t\t
\t\t\t<form method=\"post\" action=\"\" id=\"swiftmailer-settings-view\">
                <div class=\"swiftmailer-setting-type\">
                    {# Mailer Id #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Mailer ID'|trans }}</label>

                        <div class=\"uv-field-block\">
                            {% if configuration is defined and configuration.id is not empty %}
                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"{{ configuration.id }}\" placeholder=\"{{ 'Mailer ID - Leave blank to automatically create id'|trans }}\" />
                            {% else %}
                                <input type=\"text\" name=\"id\" class=\"uv-field\" value=\"\" placeholder=\"{{ 'Mailer ID - Leave blank to automatically create id'|trans }}\" />
                            {% endif %}
                        </div>
                    </div>

                    {# Transport Type #}
                    <div class=\"uv-element-block\">
                        <label class=\"uv-field-label\">{{ 'Transport Type'|trans }}</label>

                        {% if configuration is defined and configuration is not empty %}
                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" {% if configuration.transport == 'smtp' %}selected{% endif %}>{{ 'SMTP'|trans }}</option>
                                <option value=\"gmail\" {% if configuration.transport == 'gmail' %}selected{% endif %}>{{ 'Gmail'|trans }}</option>
                                <option value=\"yahoo\" {% if configuration.transport == 'yahoo' %}selected{% endif %}>{{ 'Yahoo'|trans }} </option>
                            </select>
                        {% else %}
                            <select name=\"transport\" id=\"cta-swiftmailer-transport\" class=\"uv-select\">
                                <option value=\"smtp\" selected>{{ 'SMTP'|trans }}</option>
                                <option value=\"gmail\">{{ 'Gmail'|trans }}</option>
                                <option value=\"yahoo\">{{ 'Yahoo'|trans }}</option>
                            </select>
                        {% endif %}
                    </div>

                    {# Delivery Status #}
                    <div class=\"uv-element-block\">
                        <label>
                            <div class=\"uv-checkbox\">
                                {% if configuration.deliveryStatus is defined and configuration.deliveryStatus == true %}
                                    <input name=\"deliveryStatus\" type=\"checkbox\" checked=\"\">
                                {% else %}
                                    <input name=\"deliveryStatus\" type=\"checkbox\">
                                {% endif %}

                                <span class=\"uv-checkbox-view\"></span>
                            </div>

                            <span class=\"uv-checkbox-label\">{{ 'Enable Delivery'|trans }}</span>
                        </label>
                    </div>
                </div>

                <div class=\"uv-hr\"></div>

                <div class=\"swiftmailer-transport-setting-references\">

                </div>

\t\t\t\t<input class=\"uv-btn\" href=\"#\" value=\"{{ 'Save Changes'|trans }}\" type=\"submit\">
\t\t\t</form>
\t\t</div>
\t</div>
{% endblock %}

{% block footer %}
\t{{ parent() }}

    <script id=\"swft_conf_template_gmail\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_yahoo\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>

            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>

            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>
\t</script>

    <script id=\"swft_conf_template_custom\" type=\"text/template\">
        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Server'|trans }}</label>

            <div class=\"uv-field-block\">
                <% if (typeof(host) != 'undefined' && host != '') { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"<%- host %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"host\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Email'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(username) != 'undefined' && username != '') { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"<%- username %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"username\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Password'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <input type=\"password\" name=\"password\" class=\"uv-field\" value=\"\" />
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Port'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(port) != 'undefined' && port != '') { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"<%- port %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"port\" class=\"uv-field\" value=\"465\" />
                <% } %>
            </div>
        </div>

        {# Optional Fields #}

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Encryption Mode'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <select name=\"encryptionMode\" class=\"uv-select\">
                    <option value=\"ssl\" 
                        <% if (typeof(encryption) == 'undefined' || encryption == 'ssl') { print('selected'); } %>
                    >{{ 'ssl'|trans }}</option>
                    <option value=\"tls\" 
                        <% if (typeof(encryption) != 'undefined' && encryption == 'tls') { print('selected'); } %>
                    >{{ 'tls'|trans }}</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Authentication Mode'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <select name=\"authenticationMode\" class=\"uv-select\">
                    <option value=\"login\"
                        <% if (typeof(authentication) == 'undefined' || authentication == 'login') { print('selected'); } %>
                    >{{ 'login'|trans }}</option>
                    <option value=\"plain\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'plain') { print('selected'); } %>
                    >{{ 'Plain'|trans }}</option>
                    <option value=\"cram-md5\"
                        <% if (typeof(authentication) != 'undefined' && authentication == 'cram-md5') { print('selected'); } %>
                    >{{ 'Cram-MD5'|trans }}</option>
                </select>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Sender Address'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(senderAddress) != 'undefined' && senderAddress != '') { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"<%- senderAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"senderAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>

        <div class=\"uv-element-block\">
            <label class=\"uv-field-label\">{{ 'Delivery Address'|trans }}</label>
            
            <div class=\"uv-field-block\">
                <% if (typeof(deliveryAddress) != 'undefined' && deliveryAddress != '') { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"<%- deliveryAddress %>\" />
                <% } else { %>
                    <input type=\"text\" name=\"deliveryAddress\" class=\"uv-field\" value=\"\" />
                <% } %>
            </div>
        </div>
\t</script>

\t<script type=\"text/javascript\">
\t\t\$(function () {
\t\t\tvar SwiftMailerSettingsModel = Backbone.Model.extend({
                idAttribute: \"id\",
                validation: {
                    username: [
                        {
                            required: true,
                            msg: '{{ \"Please specify a valid email address\"|trans }}'
                        },
                        {
                            pattern: /^[a-zA-Z0-9.!#\$%&'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*\$/,
                            msg: '{{ \"Please specify a valid email address\"|trans }}'
                        }
                    ],
                    password: function(value) {
                        if (value == undefined || value == '') {
                            return \"Please enter the password associated with your email address\";
                        }
                    },
                    host: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please enter your server host address\";
                            }
                        }
                    },
                    port: function(value) {
                        if ('smtp' == this.get('transport')) {
                            if (value == undefined || value == '') {
                                return \"Please specify a port number to connect with your mail server\";
                            }
                        }
                    }
\t\t\t\t}
\t\t\t});

\t\t\tvar SwiftMailerSettingsView = Backbone.View.extend({
                swft_conf_template_custom: _.template(\$(\"#swft_conf_template_custom\").html()),
                swft_conf_template_gmail: _.template(\$(\"#swft_conf_template_gmail\").html()),
                swft_conf_template_yahoo: _.template(\$(\"#swft_conf_template_yahoo\").html()),
\t\t\t\tevents: {
                    'change #cta-swiftmailer-transport': 'ctaTransportType',
\t\t\t\t\t'click .uv-btn' : \"validateSubmission\",
\t\t\t\t},
\t\t\t\tinitialize: function() {
                    Backbone.Validation.bind(this);
                    this.renderTransportConfigurations();
\t\t\t\t},
                ctaTransportType: function(e) {
                    if (true) {
                        this.model.set('transport', \$(e.target).val());
                    }

                    this.renderTransportConfigurations();
                },
                renderTransportConfigurations: function() {
                    switch (this.model.get('transport')) {
                        case 'smtp':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_custom(this.model.attributes));
                            break;
                        case 'gmail':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_gmail(this.model.attributes));
                            break;
                        case 'yahoo':
                            \$('.swiftmailer-transport-setting-references').html(this.swft_conf_template_yahoo(this.model.attributes));
                            break;
                        default:
                            break;
                    }
                },
                validateSubmission: function(e) {
                    e.preventDefault();
                    this.model.set(this.\$el.serializeObject());

\t\t\t        if (this.model.isValid(true)) {
\t\t\t            this.\$el.submit();
\t\t\t        }
                }
\t\t\t});

            {% if configuration is defined and configuration is not empty %}
                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel(\$.parseJSON('{{ configuration|json_encode|raw }}'))
                });\t
            {% else %}
                new SwiftMailerSettingsView({
                    el: \$(\"#swiftmailer-settings-view\"),
                    model: new SwiftMailerSettingsModel({ transport: 'smtp' })
                });\t
            {% endif %}
\t\t});
\t</script>
{% endblock %}", "@UVDeskCoreFramework/SwiftMailer/manageConfigurations.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/SwiftMailer/manageConfigurations.html.twig");
    }
}
