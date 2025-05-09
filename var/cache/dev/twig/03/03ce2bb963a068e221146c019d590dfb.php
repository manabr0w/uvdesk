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

/* @UVDeskSupportCenter/Templates/pagination.html.twig */
class __TwigTemplate_12289ff07fd73b8c3154f93ce5409cac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/pagination.html.twig"));

        // line 1
        yield "<script id=\"pagination_tmp\" type=\"text/template\">
    <% if (pageCount > 1) { %>
        <div class=\"uv-pagination\">
            <% if (previous) { %>
                <a data-page=\"<%= previous %>\" href=\"<%= url.replace('replacePage', previous) %>\" id=\"previous\" class=\"uv-pagination-previous\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-previous\">
                </a>
            <% } %>

            <% if (startPage > 1) { %>
                <a data-page=\"1\" href=\"<%= url.replace('replacePage', 1) %>\">1</a>
                <% if (startPage == 3) { %>
                    <a data-page=\"2\" href=\"<%= url.replace('replacePage', 2) %>\">2</a>
                <% } else if (startPage != 2) { %>
                    <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                <% } %>
            <% } %>

            <% _.each(pagesInRange, function(page) { %>
                <% if (page != current) { %>
                    <a data-page=\"<%= page %>\" href=\"<%= url.replace('replacePage', page) %>\">
                        <%= page %>
                    </a>
                <% } else { %>
                    <a class=\"uv-page-active\"><%= page %></a>
                <% } %>
            <% }) %>

            <% if (pageCount > endPage) { %>
                <% if (pageCount > (endPage + 1) ) { %>
                    <% if (pageCount > (endPage + 2) ) { %>
                        <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                    <% } else { %>
                        <a data-page=\"<%= pageCount - 1 %>\" href=\"<%= url.replace('replacePage', pageCount - 1) %>\">
                            <%= pageCount - 1 %>
                        </a>
                    <% } %>
                <% } %>
                <a data-page=\"<%= pageCount %>\" href=\"<%= url.replace('replacePage', pageCount) %>\">
                    <%= pageCount %>
                </a>
            <% } %>

            <% if (next) { %>
                <a href=\"<%= url.replace('replacePage',next) %>\" data-page=\"<%= next %>\" id=\"next\" class=\"uv-pagination-next\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-next\">
                </a>
            <% } %>
        </div>
    <% } %>
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
        return "@UVDeskSupportCenter/Templates/pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script id=\"pagination_tmp\" type=\"text/template\">
    <% if (pageCount > 1) { %>
        <div class=\"uv-pagination\">
            <% if (previous) { %>
                <a data-page=\"<%= previous %>\" href=\"<%= url.replace('replacePage', previous) %>\" id=\"previous\" class=\"uv-pagination-previous\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-previous\">
                </a>
            <% } %>

            <% if (startPage > 1) { %>
                <a data-page=\"1\" href=\"<%= url.replace('replacePage', 1) %>\">1</a>
                <% if (startPage == 3) { %>
                    <a data-page=\"2\" href=\"<%= url.replace('replacePage', 2) %>\">2</a>
                <% } else if (startPage != 2) { %>
                    <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                <% } %>
            <% } %>

            <% _.each(pagesInRange, function(page) { %>
                <% if (page != current) { %>
                    <a data-page=\"<%= page %>\" href=\"<%= url.replace('replacePage', page) %>\">
                        <%= page %>
                    </a>
                <% } else { %>
                    <a class=\"uv-page-active\"><%= page %></a>
                <% } %>
            <% }) %>

            <% if (pageCount > endPage) { %>
                <% if (pageCount > (endPage + 1) ) { %>
                    <% if (pageCount > (endPage + 2) ) { %>
                        <a class=\"uv-page-active\" style=\"text-decoration: none\">&hellip;</a>
                    <% } else { %>
                        <a data-page=\"<%= pageCount - 1 %>\" href=\"<%= url.replace('replacePage', pageCount - 1) %>\">
                            <%= pageCount - 1 %>
                        </a>
                    <% } %>
                <% } %>
                <a data-page=\"<%= pageCount %>\" href=\"<%= url.replace('replacePage', pageCount) %>\">
                    <%= pageCount %>
                </a>
            <% } %>

            <% if (next) { %>
                <a href=\"<%= url.replace('replacePage',next) %>\" data-page=\"<%= next %>\" id=\"next\" class=\"uv-pagination-next\">
                </a>
            <% } else { %>
                <a class=\"uv-pagination-next\">
                </a>
            <% } %>
        </div>
    <% } %>
</script>
", "@UVDeskSupportCenter/Templates/pagination.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/pagination.html.twig");
    }
}
