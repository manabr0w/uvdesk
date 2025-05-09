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

/* @UVDeskCoreFramework/Templates/tinyMCE.html.twig */
class __TwigTemplate_b96740fec472e05c12f7a9d34185b85b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/tinyMCE.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/tinyMCE.html.twig"));

        // line 1
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "\"></script>

<script type=\"text/javascript\">
    var sfTinyMce = {
        tinymce : tinymce,
        options : {
            browser_spellcheck : true,
            selector: '.uv-view textarea',
            branding: false,
            relative_urls : false,
            remove_script_host : false,
            image_title: true,
            autoresize_max_height: 350,
            theme: 'modern',
            menubar: false,
            height: 150,
            toolbar: 'undo redo | bold italic | forecolor | bullist | numlist | link | spellchecker | code | image | styleselect',
            spellchecker_languages: 'English=en',
            plugins: [
                'spellchecker advlist autolink lists link charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking table directionality',
                'emoticons template paste textcolor colorpicker textpattern codesample toc',
                'autoresize image imagetools',
                'mention',
            ],
            invalid_elements : 'script,style,iframe,input,textarea,form,onmouseover,onmouseout,onclick',
            paste_data_images: true,
            mentions : {
                source: function(){
                    return [];
                },
            },
        },
        init : function (options){
            if (typeof(options.setup) === 'function') {
                let optionsSetup = options.setup;
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                    optionsSetup(editor);
                }

                delete options.setup;
            } else {
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                }

                delete options.setup;
            }

            this.options = \$.extend({}, this.options, options)
            window.tinymce.dom.Event.domLoaded = true;
            tinymce.init(this.options);
        },
        html : function(selector, html){
            tinymce.get(selector).setContent(html);
        },
        initImageUpload : function(editor) {
            // create input and insert in the DOM
            var inp = \$('<input id=\"tinymce-uploader\" type=\"file\" name=\"pic\" accept=\"image/*\" style=\"display:none\">');
            \$(editor.getElement()).parent().append(inp);

            // add the image upload button to the editor toolbar
            editor.addButton('imageupload', {
                text: '',
                icon: 'image',
                onclick: function(e) { // when toolbar button is clicked, open file select modal
                    inp.trigger('click');
                }
            });

            // when a file is selected, upload it to the server
            inp.on(\"change\", function(e){
                sfTinyMce.uploadFile(\$(this), editor);
            });
        },
        uploadFile : function(input, editor) {
            sendFile(input.get(0).files).done(function(json){
                    // remove loading image
                    if (json['error'] != '') {
                        var response = {
                            'alertClass' : 'danger',
                            'alertMessage' : json['error'],
                        };
                        app.appView.hideLoader();
                        app.appView.renderResponseAlert(response);
                    } else if (json['fileNames']) {
                        \$.each(json['fileNames'], function(key, path){
                            editor.insertContent('<img class=\"content-img\" src=\"' + path + '\"/>');
                        });
                    }
                    if (json.location != undefined)
                        window.location = json.location;
                })
                .fail(function(xhr) {
                    if(url = xhr.getResponseHeader('Location'))
                        window.location = url;

                    app.appView.hideLoader();
                    app.appView.renderResponseAlert(warningResponse);
                })
            ;
        },
    }

    function sendFile(files) {
        
    }

    function sendUrls(url) {
        
    }

    function removeFile(file) {
        
    }
    addTranslateButton = function(editor) {
        
    }
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
        return "@UVDeskCoreFramework/Templates/tinyMCE.html.twig";
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
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script src=\"{{ asset('bundles/uvdeskcoreframework/js/tinymce/tinymce.min.js') }}\"></script>

<script type=\"text/javascript\">
    var sfTinyMce = {
        tinymce : tinymce,
        options : {
            browser_spellcheck : true,
            selector: '.uv-view textarea',
            branding: false,
            relative_urls : false,
            remove_script_host : false,
            image_title: true,
            autoresize_max_height: 350,
            theme: 'modern',
            menubar: false,
            height: 150,
            toolbar: 'undo redo | bold italic | forecolor | bullist | numlist | link | spellchecker | code | image | styleselect',
            spellchecker_languages: 'English=en',
            plugins: [
                'spellchecker advlist autolink lists link charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking table directionality',
                'emoticons template paste textcolor colorpicker textpattern codesample toc',
                'autoresize image imagetools',
                'mention',
            ],
            invalid_elements : 'script,style,iframe,input,textarea,form,onmouseover,onmouseout,onclick',
            paste_data_images: true,
            mentions : {
                source: function(){
                    return [];
                },
            },
        },
        init : function (options){
            if (typeof(options.setup) === 'function') {
                let optionsSetup = options.setup;
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                    optionsSetup(editor);
                }

                delete options.setup;
            } else {
                this.options.setup = function(editor){
                    sfTinyMce.initImageUpload(editor);
                }

                delete options.setup;
            }

            this.options = \$.extend({}, this.options, options)
            window.tinymce.dom.Event.domLoaded = true;
            tinymce.init(this.options);
        },
        html : function(selector, html){
            tinymce.get(selector).setContent(html);
        },
        initImageUpload : function(editor) {
            // create input and insert in the DOM
            var inp = \$('<input id=\"tinymce-uploader\" type=\"file\" name=\"pic\" accept=\"image/*\" style=\"display:none\">');
            \$(editor.getElement()).parent().append(inp);

            // add the image upload button to the editor toolbar
            editor.addButton('imageupload', {
                text: '',
                icon: 'image',
                onclick: function(e) { // when toolbar button is clicked, open file select modal
                    inp.trigger('click');
                }
            });

            // when a file is selected, upload it to the server
            inp.on(\"change\", function(e){
                sfTinyMce.uploadFile(\$(this), editor);
            });
        },
        uploadFile : function(input, editor) {
            sendFile(input.get(0).files).done(function(json){
                    // remove loading image
                    if (json['error'] != '') {
                        var response = {
                            'alertClass' : 'danger',
                            'alertMessage' : json['error'],
                        };
                        app.appView.hideLoader();
                        app.appView.renderResponseAlert(response);
                    } else if (json['fileNames']) {
                        \$.each(json['fileNames'], function(key, path){
                            editor.insertContent('<img class=\"content-img\" src=\"' + path + '\"/>');
                        });
                    }
                    if (json.location != undefined)
                        window.location = json.location;
                })
                .fail(function(xhr) {
                    if(url = xhr.getResponseHeader('Location'))
                        window.location = url;

                    app.appView.hideLoader();
                    app.appView.renderResponseAlert(warningResponse);
                })
            ;
        },
    }

    function sendFile(files) {
        
    }

    function sendUrls(url) {
        
    }

    function removeFile(file) {
        
    }
    addTranslateButton = function(editor) {
        
    }
</script>", "@UVDeskCoreFramework/Templates/tinyMCE.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/tinyMCE.html.twig");
    }
}
