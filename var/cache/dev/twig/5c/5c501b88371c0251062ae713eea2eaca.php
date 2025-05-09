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

/* @UVDeskSupportCenter/Templates/solutionLeftSidebar.html.twig */
class __TwigTemplate_2162ee48f05f7e9ff45ba924e3c30994 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/solutionLeftSidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/solutionLeftSidebar.html.twig"));

        // line 2
        yield "<div class=\"uv-aside\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "cookies", [], "any", false, false, false, 2) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "cookies", [], "any", false, false, false, 2), "get", ["uv-asideView"], "method", false, false, false, 2))) {
            yield "style=\"display: none;\"";
        }
        yield ">
    ";
        // line 3
        $context["sidebarLinks"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_service"]) || array_key_exists("default_service", $context) ? $context["default_service"] : (function () { throw new RuntimeError('Variable "default_service" does not exist.', 3, $this->source); })()), "getLeftSidebarRoutes", [], "method", false, false, false, 3);
        // line 4
        yield "    ";
        if ((isset($context["sidebarLinks"]) || array_key_exists("sidebarLinks", $context) ? $context["sidebarLinks"] : (function () { throw new RuntimeError('Variable "sidebarLinks" does not exist.', 4, $this->source); })())) {
            // line 5
            yield "        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <h6>";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sidebarLinks"]) || array_key_exists("sidebarLinks", $context) ? $context["sidebarLinks"] : (function () { throw new RuntimeError('Variable "sidebarLinks" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
            yield "</h6>
            </div>
            <div class=\"uv-aside-back\">
                <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
            // line 10
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_action");
            yield "';\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
            yield "</span>
            </div>
        </div>

        <div class=\"uv-aside-nav\">
            <ul>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sidebarLinks"]) || array_key_exists("sidebarLinks", $context) ? $context["sidebarLinks"] : (function () { throw new RuntimeError('Variable "sidebarLinks" does not exist.', 16, $this->source); })()), "items", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                yield "                    <li>
                        <a class=\"";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "class", [], "any", false, false, false, 18), "html", null, true);
                yield "\" ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("href=" . CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 18)), "html", null, true)) : (false));
                yield " ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attr", [], "any", true, true, false, 18)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attr", [], "any", false, false, false, 18), "html", null, true);
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 18);
                yield "</a>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            </ul>
        </div>
    ";
        }
        // line 24
        yield "</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Templates/solutionLeftSidebar.html.twig";
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
        return array (  110 => 24,  105 => 21,  88 => 18,  85 => 17,  81 => 16,  70 => 10,  64 => 7,  60 => 5,  57 => 4,  55 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# app/Resources/views/form/leftsiderbar.html.twig #}
<div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %}>
    {% set sidebarLinks = default_service.getLeftSidebarRoutes() %}
    {% if sidebarLinks%}
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\">
                <h6>{{ sidebarLinks.title }}</h6>
            </div>
            <div class=\"uv-aside-back\">
                <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"dashboard_action\") }}';\"> {{ 'Back'|trans }}</span>
            </div>
        </div>

        <div class=\"uv-aside-nav\">
            <ul>
                {% for item in sidebarLinks.items %}
                    <li>
                        <a class=\"{{ item.class }}\" {{ item.link ? 'href='~item.link : false }} {% if item.attr is defined %}{{item.attr}}{% endif %}>{{ item.title|raw }}</a>
                    </li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}
</div>", "@UVDeskSupportCenter/Templates/solutionLeftSidebar.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/solutionLeftSidebar.html.twig");
    }
}
