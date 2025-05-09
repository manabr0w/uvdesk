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

/* @UVDeskSupportCenter/Templates/layout.html.twig */
class __TwigTemplate_03a0ae140db177c2e3b366ff293ad252 extends Template
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
            'canonical' => [$this, 'block_canonical'],
            'title' => [$this, 'block_title'],
            'metaDescription' => [$this, 'block_metaDescription'],
            'metaKeywords' => [$this, 'block_metaKeywords'],
            'ogtitle' => [$this, 'block_ogtitle'],
            'ogcanonical' => [$this, 'block_ogcanonical'],
            'twtitle' => [$this, 'block_twtitle'],
            'head' => [$this, 'block_head'],
            'templateCSS' => [$this, 'block_templateCSS'],
            'header' => [$this, 'block_header'],
            'tabHeader' => [$this, 'block_tabHeader'],
            'wrapper' => [$this, 'block_wrapper'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/layout.html.twig"));

        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        yield "\">
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/css/knowledgebase.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css\">
        
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>

        
        <script src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/js/_common.js"), "html", null, true);
        yield "\"></script>
        <script src = \"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdesksupportcenter/js/uikit.front.js"), "html", null, true);
        yield "\"></script>
        <script src = \"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/dropdown.js"), "html", null, true);
        yield "\"></script>

        ";
        // line 20
        $context["websiteDetails"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 20, $this->source); })()), "getWebsiteDetails", ["knowledgebase"], "method", false, false, false, 20);
        // line 21
        yield "        ";
        $context["websiteConfiguration"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 21, $this->source); })()), "getWebsiteConfiguration", ["knowledgebase"], "method", false, false, false, 21);
        // line 22
        yield "        ";
        $context["themeTemplate"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user_service"]) || array_key_exists("user_service", $context) ? $context["user_service"] : (function () { throw new RuntimeError('Variable "user_service" does not exist.', 22, $this->source); })()), "getWebsiteView", [], "method", false, false, false, 22);
        // line 23
        yield "
        ";
        // line 24
        $context["canonical"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", ["REQUEST_SCHEME"], "method", false, false, false, 24) . "://") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", ["HTTP_HOST"], "method", false, false, false, 24)) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "server", [], "any", false, false, false, 24), "get", ["PATH_INFO"], "method", false, false, false, 24));
        // line 25
        yield "        <link rel=\"canonical\" href=\"";
        yield from $this->unwrap()->yieldBlock('canonical', $context, $blocks);
        yield "\">

        ";
        // line 27
        if (((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 27, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 27, $this->source); })()), "favicon", [], "any", false, false, false, 27))) {
            // line 28
            yield "            <link rel=\"icon\" sizes=\"16x16\" href=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 28, $this->source); })()), "favicon", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 28, $this->source); })()), "favicon", [], "any", false, false, false, 28), "html", null, true)) : (null));
            yield "\" />
        ";
        } else {
            // line 30
            yield "            <link rel=\"icon\" sizes=\"16x16\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
            yield "\" />
        ";
        }
        // line 32
        yield "
        ";
        // line 33
        if ((isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 33, $this->source); })())) {
            // line 34
            yield "            <title>";
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            yield "</title>
            ";
            // line 35
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 35, $this->source); })()), "metaDescription", [], "any", false, false, false, 35)) {
                // line 36
                yield "                <meta name=\"description\" content=\"";
                yield from $this->unwrap()->yieldBlock('metaDescription', $context, $blocks);
                yield "\"/>
            ";
            }
            // line 38
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 38, $this->source); })()), "metaKeywords", [], "any", false, false, false, 38)) {
                // line 39
                yield "                <meta name=\"keywords\" content=\"";
                yield from $this->unwrap()->yieldBlock('metaKeywords', $context, $blocks);
                yield "\"/>
            ";
            }
            // line 41
            yield "
            <meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getCharset(), "html", null, true);
            yield "\"/>
            <meta name=\"robots\" content=\"INDEX,FOLLOW\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

            <meta property=\"og:locale\" content=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "request", [], "any", false, false, false, 46), "getLocale", [], "method", false, false, false, 46), "html", null, true);
            yield "\" />
            <meta property=\"og:type\" content=\"article\" />
            <meta property=\"og:title\" content=\"";
            // line 48
            yield from $this->unwrap()->yieldBlock('ogtitle', $context, $blocks);
            yield "\" />
            <meta property=\"og:url\" content=\"";
            // line 49
            yield from $this->unwrap()->yieldBlock('ogcanonical', $context, $blocks);
            yield "\" />
            <meta property=\"og:site_name\" content=\"";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"), "html", null, true)));
            yield "\" />
            ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 51, $this->source); })()), "logo", [], "any", false, false, false, 51)) {
                // line 52
                yield "                <meta property=\"og:image\" content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 52, $this->source); })()), "logo", [], "any", false, false, false, 52), "html", null, true);
                yield "\" />
            ";
            }
            // line 54
            yield "            <meta name=\"twitter:card\" content=\"summary\" />
            <meta name=\"twitter:title\" content=\"";
            // line 55
            yield from $this->unwrap()->yieldBlock('twtitle', $context, $blocks);
            yield "\" />

            <link rel='dns-prefetch' href='//www.google.com' />
            <link rel='dns-prefetch' href='//fonts.googleapis.com' />
            <link rel='dns-prefetch' href='//fonts.gstatic.com' />
            <link rel='dns-prefetch' href='//cdn.uvdesk.com' />
        ";
        }
        // line 62
        yield "
        ";
        // line 63
        if ((isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 63, $this->source); })())) {
            // line 64
            yield "            ";
            yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
            // line 67
            yield "        ";
        }
        // line 68
        yield "
        ";
        // line 69
        if ((isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 69, $this->source); })())) {
            // line 70
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 70, $this->source); })()), "isDarkSkin", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 70, $this->source); })()), "brandColor", [], "any", false, false, false, 70)], "method", false, false, false, 70)) {
                // line 71
                yield "                ";
                yield from $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 71)->unwrap()->yield($context);
                // line 72
                yield "            ";
            } else {
                // line 73
                yield "                ";
                yield from $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 73)->unwrap()->yield($context);
                // line 74
                yield "            ";
            }
            // line 75
            yield "        ";
        }
        // line 76
        yield "
        ";
        // line 77
        yield from $this->unwrap()->yieldBlock('templateCSS', $context, $blocks);
        // line 78
        yield "    </head>

    ";
        // line 80
        $context["bodyClass"] = "";
        // line 81
        yield "    ";
        $context["bodySkinClass"] = "";
        // line 82
        yield "
    ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "request", [], "any", false, false, false, 83), "locale", [], "any", false, false, false, 83) == "ar")) {
            // line 84
            yield "        ";
            $context["bodyClass"] = "uv-rtl";
            // line 85
            yield "    ";
        }
        // line 86
        yield "
    <body class=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["bodySkinClass"]) || array_key_exists("bodySkinClass", $context) ? $context["bodySkinClass"] : (function () { throw new RuntimeError('Variable "bodySkinClass" does not exist.', 87, $this->source); })()) . " ") . (isset($context["bodyClass"]) || array_key_exists("bodyClass", $context) ? $context["bodyClass"] : (function () { throw new RuntimeError('Variable "bodyClass" does not exist.', 87, $this->source); })())), "html", null, true);
        yield "\">
        ";
        // line 88
        $context["broadcastMessage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 88, $this->source); })()), "getValidBroadcastMessage", [((CoreExtension::getAttribute($this->env, $this->source, ($context["websiteConfiguration"] ?? null), "broadcastMessage", [], "any", true, true, false, 88)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 88, $this->source); })()), "broadcastMessage", [], "any", false, false, false, 88)) : (""))], "method", false, false, false, 88);
        // line 89
        yield "        ";
        if ((isset($context["broadcastMessage"]) || array_key_exists("broadcastMessage", $context) ? $context["broadcastMessage"] : (function () { throw new RuntimeError('Variable "broadcastMessage" does not exist.', 89, $this->source); })())) {
            // line 90
            yield "            <div class=\"uv-kb-info\" id=\"uv-kb-info-broadcast\">
                <p>";
            // line 91
            yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["broadcastMessage"] ?? null), "message", [], "any", true, true, false, 91)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["broadcastMessage"]) || array_key_exists("broadcastMessage", $context) ? $context["broadcastMessage"] : (function () { throw new RuntimeError('Variable "broadcastMessage" does not exist.', 91, $this->source); })()), "message", [], "any", false, false, false, 91), "html", null, true)) : (""));
            yield "</p>
                <span class=\"uv-kb-info-remove\" onclick=\"document.getElementById('uv-kb-info-broadcast').remove()\"></span>
            </div>
        ";
        }
        // line 95
        yield "
        <div class=\"uv-notifications-wrapper\">
            ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["uvdesk_service"]) || array_key_exists("uvdesk_service", $context) ? $context["uvdesk_service"] : (function () { throw new RuntimeError('Variable "uvdesk_service" does not exist.', 97, $this->source); })()), "requestHeadersSent", [], "method", false, false, false, 97) == false)) {
            // line 98
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "flashbag", [], "any", false, false, false, 98), "get", ["success"], "method", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 99
                yield "                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 101
                yield $context["flashMessage"];
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "session", [], "any", false, false, false, 104), "flashbag", [], "any", false, false, false, 104), "get", ["warning"], "method", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 105
                yield "                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>";
                // line 107
                yield $context["flashMessage"];
                yield "</p>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "            ";
        }
        // line 111
        yield "            
            <noscript>
                <div class=\"uv-notification uv-error\">
                    <p>";
        // line 114
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your browser does not support JavaScript or You disabled JavaScript, Please enable those !", [], "messages");
        yield "</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>
        </div>


        ";
        // line 121
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 124
        yield "
        ";
        // line 125
        yield from $this->loadTemplate("@UVDeskSupportCenter/Templates/breadcrumbs.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 125)->unwrap()->yield($context);
        // line 126
        yield "
        ";
        // line 127
        yield from $this->unwrap()->yieldBlock('tabHeader', $context, $blocks);
        // line 129
        yield "        ";
        yield from $this->unwrap()->yieldBlock('wrapper', $context, $blocks);
        // line 157
        yield "
        ";
        // line 158
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 201
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_canonical(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "canonical"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 25, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"), "html", null, true)));
        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaDescription(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaDescription"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 36, $this->source); })()), "metaDescription", [], "any", false, false, false, 36), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_metaKeywords(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metaKeywords"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 39, $this->source); })()), "metaKeywords", [], "any", false, false, false, 39), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogtitle"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HelpDesk", [], "messages");
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 48, $this->source); })()), "name", [], "any", false, false, false, 48), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ogcanonical(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ogcanonical"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 49, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_twtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "twtitle"));

        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HelpDesk", [], "messages");
        yield " ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteDetails"]) || array_key_exists("websiteDetails", $context) ? $context["websiteDetails"] : (function () { throw new RuntimeError('Variable "websiteDetails" does not exist.', 55, $this->source); })()), "name", [], "any", false, false, false, 55), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Knowledge Base"), "html", null, true)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 65
        yield "                ";
        yield from $this->loadTemplate("@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 65)->unwrap()->yield($context);
        // line 66
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 77
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 122
        yield "            ";
        yield from $this->loadTemplate("@UVDeskSupportCenter/Templates/header.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 122)->unwrap()->yield($context);
        // line 123
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tabHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabHeader"));

        // line 128
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "wrapper"));

        // line 130
        yield "            <div class=\"uv-body\">
                <div class=\"uv-container\">
                    ";
        // line 132
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 154
        yield "                </div>   
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 133
        yield "                        ";
        if ((array_key_exists("websiteConfiguration", $context) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 133, $this->source); })()), "ticketCreateOption", [], "any", false, false, false, 133))) {
            // line 134
            yield "                            ";
            if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["websiteConfiguration"]) || array_key_exists("websiteConfiguration", $context) ? $context["websiteConfiguration"] : (function () { throw new RuntimeError('Variable "websiteConfiguration" does not exist.', 134, $this->source); })()), "loginRequiredToCreate", [], "any", false, false, false, 134) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134))) {
                // line 135
                yield "                                <div class=\"uv-cta-wrapper\">
                                    <div class=\"uv-cta-lt\">
                                        <svg
                                        xmlns=\"http://www.w3.org/2000/svg\"
                                        xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                        width=\"60px\" height=\"60px\">
                                        <path fill-rule=\"evenodd\"  fill=\"rgb(124, 116, 241)\"
                                        d=\"M57.000,12.000 L51.000,12.000 L50.984,38.993 L12.000,39.000 L12.000,45.000 C12.000,46.649 13.351,48.000 15.000,48.000 L48.000,48.000 L60.000,60.000 L60.000,15.000 C60.000,13.351 58.649,12.000 57.000,12.000 ZM45.000,30.000 L45.000,3.000 C45.000,1.351 43.649,0.000 42.000,0.000 L3.000,0.000 C1.351,0.000 -0.000,1.351 -0.000,3.000 L-0.000,45.000 L12.000,33.000 L42.000,33.000 C43.649,33.000 45.000,31.649 45.000,30.000 Z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"uv-cta-rt\">
                                        <h2>";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unable to find an answer?"), "html", null, true);
                yield "</h2>
                                        <p>";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Looking for anything specific article which resides in general queries? Just browse the various relevant folders and categories and then you will find the desired article."), "html", null, true);
                yield "</p>
                                        <a href=\"";
                // line 148
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("helpdesk_customer_create_ticket");
                yield "\" class=\"uv-btn uv-margin-top-15\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact Us"), "html", null, true);
                yield "</a>
                                    </div>
                                </div>
                            ";
            }
            // line 152
            yield "                        ";
        }
        yield " 
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 158
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

        // line 159
        yield "            ";
        yield from $this->loadTemplate("@UVDeskSupportCenter/Templates/footer.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 159)->unwrap()->yield($context);
        // line 160
        yield "
            ";
        // line 161
        yield from $this->loadTemplate("@UVDeskSupportCenter/Templates/pagination.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 161)->unwrap()->yield($context);
        // line 162
        yield "
            <!-- Loader Template-->
            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>
            <!-- Loader Template-->

            <!-- Full View Loader Template-->
            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>
            <!-- //Full View Loader Template-->

            <!-- Notification Template -->
            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if (alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>
            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error : Something went wrong, please try again later"), "html", null, true);
        yield "',
                };
            </script>

            ";
        // line 199
        yield from $this->loadTemplate("@UVDeskSupportCenter/Themes/cookiePolicy.html.twig", "@UVDeskSupportCenter/Templates/layout.html.twig", 199)->unwrap()->yield($context);
        // line 200
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@UVDeskSupportCenter/Templates/layout.html.twig";
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
        return array (  806 => 200,  804 => 199,  797 => 195,  762 => 162,  760 => 161,  757 => 160,  754 => 159,  741 => 158,  727 => 152,  718 => 148,  714 => 147,  710 => 146,  697 => 135,  694 => 134,  691 => 133,  678 => 132,  665 => 154,  663 => 132,  659 => 130,  646 => 129,  635 => 128,  622 => 127,  611 => 123,  608 => 122,  595 => 121,  573 => 77,  562 => 66,  559 => 65,  546 => 64,  521 => 55,  498 => 49,  473 => 48,  450 => 39,  427 => 36,  403 => 34,  380 => 25,  367 => 201,  365 => 158,  362 => 157,  359 => 129,  357 => 127,  354 => 126,  352 => 125,  349 => 124,  347 => 121,  337 => 114,  332 => 111,  329 => 110,  320 => 107,  316 => 105,  311 => 104,  302 => 101,  298 => 99,  293 => 98,  291 => 97,  287 => 95,  280 => 91,  277 => 90,  274 => 89,  272 => 88,  268 => 87,  265 => 86,  262 => 85,  259 => 84,  257 => 83,  254 => 82,  251 => 81,  249 => 80,  245 => 78,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  231 => 73,  228 => 72,  225 => 71,  222 => 70,  220 => 69,  217 => 68,  214 => 67,  211 => 64,  209 => 63,  206 => 62,  196 => 55,  193 => 54,  187 => 52,  185 => 51,  181 => 50,  177 => 49,  173 => 48,  168 => 46,  161 => 42,  158 => 41,  152 => 39,  149 => 38,  143 => 36,  141 => 35,  136 => 34,  134 => 33,  131 => 32,  125 => 30,  119 => 28,  117 => 27,  111 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  98 => 20,  93 => 18,  89 => 17,  85 => 16,  70 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"{{app.request.getLocale()}}\">
    <head>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/uvdesksupportcenter/css/knowledgebase.css') }}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css\">
        
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.1/underscore-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.validation/0.11.5/backbone-validation-min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/backbone.paginator/2.0.8/backbone.paginator.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js\"></script>\t
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js\"></script>

        
        <script src=\"{{ asset('bundles/uvdesksupportcenter/js/_common.js') }}\"></script>
        <script src = \"{{ asset('bundles/uvdesksupportcenter/js/uikit.front.js') }}\"></script>
        <script src = \"{{ asset('bundles/uvdeskcoreframework/js/dropdown.js') }}\"></script>

        {% set websiteDetails = user_service.getWebsiteDetails('knowledgebase') %}
        {% set websiteConfiguration = user_service.getWebsiteConfiguration('knowledgebase') %}
        {% set themeTemplate = user_service.getWebsiteView() %}

        {% set canonical = app.request.server.get('REQUEST_SCHEME')~'://'~app.request.server.get('HTTP_HOST')~app.request.server.get('PATH_INFO') %}
        <link rel=\"canonical\" href=\"{% block canonical %}{{canonical}}{% endblock %}\">

        {% if websiteDetails and (websiteDetails.favicon) %}
            <link rel=\"icon\" sizes=\"16x16\" href=\"{{websiteDetails.favicon ? websiteDetails.favicon : null}}\" />
        {% else %}
            <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
        {% endif %}

        {% if websiteDetails %}
            <title>{% block title %}{{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }} {% endblock %}</title>
            {% if websiteConfiguration.metaDescription %}
                <meta name=\"description\" content=\"{% block metaDescription %}{{ websiteConfiguration.metaDescription }}{% endblock %}\"/>
            {% endif %}
            {% if websiteConfiguration.metaKeywords %}
                <meta name=\"keywords\" content=\"{% block metaKeywords %}{{ websiteConfiguration.metaKeywords }}{% endblock %}\"/>
            {% endif %}

            <meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"{{ _charset }}\"/>
            <meta name=\"robots\" content=\"INDEX,FOLLOW\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

            <meta property=\"og:locale\" content=\"{{app.request.getLocale()}}\" />
            <meta property=\"og:type\" content=\"article\" />
            <meta property=\"og:title\" content=\"{% block ogtitle %}{% trans %}HelpDesk{% endtrans %} {{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }}{% endblock %}\" />
            <meta property=\"og:url\" content=\"{% block ogcanonical %}{{canonical}}{% endblock %}\" />
            <meta property=\"og:site_name\" content=\"{{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }}\" />
            {% if websiteDetails.logo %}
                <meta property=\"og:image\" content=\"{{ websiteDetails.logo }}\" />
            {% endif %}
            <meta name=\"twitter:card\" content=\"summary\" />
            <meta name=\"twitter:title\" content=\"{% block twtitle %}{% trans %}HelpDesk{% endtrans %} {{ websiteDetails.name ? websiteDetails.name : 'Knowledge Base'|trans }}{% endblock %}\" />

            <link rel='dns-prefetch' href='//www.google.com' />
            <link rel='dns-prefetch' href='//fonts.googleapis.com' />
            <link rel='dns-prefetch' href='//fonts.gstatic.com' />
            <link rel='dns-prefetch' href='//cdn.uvdesk.com' />
        {% endif %}

        {% if websiteConfiguration %}
            {% block head %}
                {% include \"@UVDeskSupportCenter/Knowledgebase/websiteSettings.html.twig\" %}
            {% endblock %}
        {% endif %}

        {% if websiteConfiguration %}
            {% if uvdesk_service.isDarkSkin(websiteConfiguration.brandColor) %}
                {% include '@UVDeskSupportCenter/Knowledgebase/darkSkin.html.twig' %}
            {% else %}
                {% include '@UVDeskSupportCenter/Knowledgebase/lightSkin.html.twig' %}
            {% endif %}
        {% endif %}

        {% block templateCSS %}{% endblock %}
    </head>

    {% set bodyClass = '' %}
    {% set bodySkinClass = '' %}

    {% if app.request.locale == \"ar\" %}
        {% set bodyClass = 'uv-rtl' %}
    {% endif %}

    <body class=\"{{ bodySkinClass ~ ' ' ~ bodyClass }}\">
        {% set broadcastMessage = uvdesk_service.getValidBroadcastMessage(websiteConfiguration.broadcastMessage is defined ? websiteConfiguration.broadcastMessage : '') %}
        {% if broadcastMessage %}
            <div class=\"uv-kb-info\" id=\"uv-kb-info-broadcast\">
                <p>{{ broadcastMessage.message is defined ? broadcastMessage.message : '' }}</p>
                <span class=\"uv-kb-info-remove\" onclick=\"document.getElementById('uv-kb-info-broadcast').remove()\"></span>
            </div>
        {% endif %}

        <div class=\"uv-notifications-wrapper\">
            {% if uvdesk_service.requestHeadersSent() == false %}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"uv-notification page-load uv-success\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('warning') %}
                    <div class=\"uv-notification page-load uv-error\">
                        <span class=\"uv-notification-close\"></span>
                        <p>{{ flashMessage|raw }}</p>
                    </div>
                {% endfor %}
            {% endif %}
            
            <noscript>
                <div class=\"uv-notification uv-error\">
                    <p>{% trans %}Your browser does not support JavaScript or You disabled JavaScript, Please enable those !{% endtrans %}</p>
                </div>
                <style>.uv-loader-view {display: none;}</style>
            </noscript>
        </div>


        {% block header %}
            {% include \"@UVDeskSupportCenter/Templates/header.html.twig\" %}
        {% endblock %}

        {% include \"@UVDeskSupportCenter/Templates/breadcrumbs.html.twig\" %}

        {% block tabHeader %}
        {% endblock %}
        {% block wrapper %}
            <div class=\"uv-body\">
                <div class=\"uv-container\">
                    {% block body %}
                        {% if websiteConfiguration is defined and websiteConfiguration.ticketCreateOption %}
                            {% if not websiteConfiguration.loginRequiredToCreate or app.user %}
                                <div class=\"uv-cta-wrapper\">
                                    <div class=\"uv-cta-lt\">
                                        <svg
                                        xmlns=\"http://www.w3.org/2000/svg\"
                                        xmlns:xlink=\"http://www.w3.org/1999/xlink\"
                                        width=\"60px\" height=\"60px\">
                                        <path fill-rule=\"evenodd\"  fill=\"rgb(124, 116, 241)\"
                                        d=\"M57.000,12.000 L51.000,12.000 L50.984,38.993 L12.000,39.000 L12.000,45.000 C12.000,46.649 13.351,48.000 15.000,48.000 L48.000,48.000 L60.000,60.000 L60.000,15.000 C60.000,13.351 58.649,12.000 57.000,12.000 ZM45.000,30.000 L45.000,3.000 C45.000,1.351 43.649,0.000 42.000,0.000 L3.000,0.000 C1.351,0.000 -0.000,1.351 -0.000,3.000 L-0.000,45.000 L12.000,33.000 L42.000,33.000 C43.649,33.000 45.000,31.649 45.000,30.000 Z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"uv-cta-rt\">
                                        <h2>{{\"Unable to find an answer?\"|trans}}</h2>
                                        <p>{{\"Looking for anything specific article which resides in general queries? Just browse the various relevant folders and categories and then you will find the desired article.\"|trans}}</p>
                                        <a href=\"{{ path('helpdesk_customer_create_ticket') }}\" class=\"uv-btn uv-margin-top-15\">{{'Contact Us'|trans}}</a>
                                    </div>
                                </div>
                            {% endif %}
                        {% endif %} 
                    {% endblock %}
                </div>   
            </div>
        {% endblock %}

        {% block footer %}
            {% include \"@UVDeskSupportCenter/Templates/footer.html.twig\" %}

            {% include \"@UVDeskSupportCenter/Templates/pagination.html.twig\" %}

            <!-- Loader Template-->
            <script type=\"text/template\" id=\"loader-tmp\">
                <div class=\"uv-loader\">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </script>
            <!-- Loader Template-->

            <!-- Full View Loader Template-->
            <script type=\"text/template\" id=\"full-view-loader\">
                <div class=\"uv-loader-view\">
                    <div class=\"uv-loader\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </script>
            <!-- //Full View Loader Template-->

            <!-- Notification Template -->
            <script type=\"text/template\" id=\"notification-template\">
                <div class=\"uv-notification <% if (alertClass == 'danger') { %>uv-error<% } else { %> <%= 'uv-' + alertClass %> <% } %>\">
                    <span class=\"uv-notification-close\"></span>
                    <p><%= alertMessage %> </p>
                </div>
            </script>
            <script type=\"text/javascript\">
                var warningResponse = {
                    'alertClass' : 'danger',
                    'alertMessage' : '{{ \"Error : Something went wrong, please try again later\"|trans }}',
                };
            </script>

            {% include('@UVDeskSupportCenter/Themes/cookiePolicy.html.twig') %}
        {% endblock %}
    </body>
</html>
", "@UVDeskSupportCenter/Templates/layout.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/layout.html.twig");
    }
}
