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

/* @UVDeskCoreFramework/Templates/aside.html.twig */
class __TwigTemplate_66c67f90baa14314bfd1fd6c3dc749a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/aside.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/aside.html.twig"));

        // line 1
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["sidebar"] ?? null), "collection", [], "any", true, true, false, 1) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 1, $this->source); })()), "collection", [], "any", false, false, false, 1)))) {
            // line 2
            yield "    <div class=\"uv-aside\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "cookies", [], "any", false, false, false, 2) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "cookies", [], "any", false, false, false, 2), "get", ["uv-asideView"], "method", false, false, false, 2))) {
                yield "style=\"display: none;\"";
            }
            yield ">
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\"><h6>";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4)), "html", null, true);
            yield "</h6></div>
            <div class=\"uv-aside-back\">
                <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '";
            // line 6
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_member_dashboard");
            yield "';\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back"), "html", null, true);
            yield "</span>
            </div>
        </div>

        <div class=\"uv-aside-nav\">
            <ul>
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sidebar"]) || array_key_exists("sidebar", $context) ? $context["sidebar"] : (function () { throw new RuntimeError('Variable "sidebar" does not exist.', 12, $this->source); })()), "collection", [], "any", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 13
                yield "                    <li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "routeName", [], "any", false, false, false, 13));
                yield "\" class=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 13)) ? ("uv-aside-nav-active") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13)), "html", null, true);
                yield "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "            </ul>
        </div>
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskCoreFramework/Templates/aside.html.twig";
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
        return array (  91 => 15,  78 => 13,  74 => 12,  63 => 6,  58 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if sidebar.collection is defined and sidebar.collection is not empty %}
    <div class=\"uv-aside\" {% if app.request.cookies and app.request.cookies.get('uv-asideView') %}style=\"display: none;\"{% endif %}>
        <div class=\"uv-aside-head\">
            <div class=\"uv-aside-title\"><h6>{{ sidebar.title|trans }}</h6></div>
            <div class=\"uv-aside-back\">
                <span onclick=\"history.length > 1 ? history.go(-1) : window.location = '{{ path(\"helpdesk_member_dashboard\") }}';\"> {{ 'Back'|trans }}</span>
            </div>
        </div>

        <div class=\"uv-aside-nav\">
            <ul>
                {% for item in sidebar.collection %}
                    <li><a href=\"{{ path(item.routeName) }}\" class=\"{{ item.isActive ? 'uv-aside-nav-active' : '' }}\">{{ item.title|raw|trans }}</a></li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}", "@UVDeskCoreFramework/Templates/aside.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/aside.html.twig");
    }
}
