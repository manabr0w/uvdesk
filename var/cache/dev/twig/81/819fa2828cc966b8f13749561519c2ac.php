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

/* @UVDeskSupportCenter/Templates/footer.html.twig */
class __TwigTemplate_35ff97a8733dcec562d5d62750976d2e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/footer.html.twig"));

        // line 1
        yield "<div class=\"uv-container\">
\t<div class=\"uv-footer\">
\t\t<div class=\"uv-footer-wrapper\">
\t\t\t<div class=\"uv-footer-lt\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_knowledgebase_folder");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"uv-open-popup\" data-target=\"cookie-dialog-modal\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cookie Policy"), "html", null, true);
        yield "</a></li>
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 8, $this->source); })()), "footerLinks", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["footerLink"]) {
            // line 9
            yield "\t\t\t\t\t\t<li><a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["footerLink"], "url", [], "any", false, false, false, 9), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["footerLink"], "label", [], "any", false, false, false, 9), "html", null, true);
            yield "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['footerLink'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"uv-footer-rt\">
\t\t\t\t<!-- Google Translation  -->
\t\t\t\t<div id=\"google_translate_element\"></div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction googleTranslateElementInit() {
\t\t\t\t\t\t\tnew google.translate.TranslateElement({layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
\t\t\t\t\t\t\t\$(document).click(function(e) {
\t\t\t\t\t\t\t\tif (\$('.goog-te-menu-frame.skiptranslate').is(':visible') ) {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').addClass('uv-no-pointer-events');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').removeClass('uv-no-pointer-events');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\$('.goog-te-menu-frame.skiptranslate').contents()[0], window).find('body').bind(\"focusout\", function(e) {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').removeClass('uv-no-pointer-events');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t</script>

\t\t\t\t\t<script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\" async=\"async\"></script>
       \t\t\t\t<!-- Google Translation  -->
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"uv-footer-credit\" style=\"padding-bottom: 1.4em;\">
\t\t\t\t<span class=\"uv-credit-text\">";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Powered by %uvdesk%, an open-source project by %webkul%.", ["%uvdesk%" => "<a href=\"https://www.uvdesk.com/en/\" target=\"_blank\">Uvdesk</a>", "%webkul%" => "<a href=\"https://store.webkul.com/\" target=\"_blank\">Webkul</a>"]);
        yield "</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
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
        return "@UVDeskSupportCenter/Templates/footer.html.twig";
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
        return array (  110 => 39,  80 => 11,  69 => 9,  65 => 8,  61 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"uv-container\">
\t<div class=\"uv-footer\">
\t\t<div class=\"uv-footer-wrapper\">
\t\t\t<div class=\"uv-footer-lt\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('helpdesk_knowledgebase_folder') }}\">{{ 'Home'|trans }}</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"uv-open-popup\" data-target=\"cookie-dialog-modal\">{{ 'Cookie Policy'|trans }}</a></li>
\t\t\t\t\t{% for footerLink in websiteConfiguration.footerLinks %}
\t\t\t\t\t\t<li><a href=\"{{ footerLink.url }}\" target=\"_blank\">{{ footerLink.label }}</a></li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<div class=\"uv-footer-rt\">
\t\t\t\t<!-- Google Translation  -->
\t\t\t\t<div id=\"google_translate_element\"></div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tfunction googleTranslateElementInit() {
\t\t\t\t\t\t\tnew google.translate.TranslateElement({layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
\t\t\t\t\t\t\t\$(document).click(function(e) {
\t\t\t\t\t\t\t\tif (\$('.goog-te-menu-frame.skiptranslate').is(':visible') ) {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').addClass('uv-no-pointer-events');
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').removeClass('uv-no-pointer-events');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\$(\$('.goog-te-menu-frame.skiptranslate').contents()[0], window).find('body').bind(\"focusout\", function(e) {
\t\t\t\t\t\t\t\t\t\$('.skiptranslate.goog-te-gadget').removeClass('uv-no-pointer-events');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t</script>

\t\t\t\t\t<script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\" async=\"async\"></script>
       \t\t\t\t<!-- Google Translation  -->
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"uv-footer-credit\" style=\"padding-bottom: 1.4em;\">
\t\t\t\t<span class=\"uv-credit-text\">{{ 'Powered by %uvdesk%, an open-source project by %webkul%.'|trans({'%uvdesk%': '<a href=\"https://www.uvdesk.com/en/\" target=\"_blank\">Uvdesk</a>', '%webkul%': '<a href=\"https://store.webkul.com/\" target=\"_blank\">Webkul</a>'})|raw }}</span>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "@UVDeskSupportCenter/Templates/footer.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/footer.html.twig");
    }
}
