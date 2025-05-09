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

/* @UVDeskSupportCenter/Templates/tinyMCE.html.twig */
class __TwigTemplate_5cd5b1c38ea1215d6f88b3ad85dd8597 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/tinyMCE.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskSupportCenter/Templates/tinyMCE.html.twig"));

        // line 1
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/tinymce/tinymce.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/uvdeskcoreframework/js/tinymce/themes/modern/theme.min.js"), "html", null, true);
        yield "\"></script>
<script scr=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script type=\"text/javascript\">

    var sfTinyMce = {
        tinymce : tinymce,
        options : {
            browser_spellcheck : true,
            selector: '.uv-view textarea',
            branding: false,
            relative_urls : false,
            remove_script_host : false,
            convert_urls: true,
            image_title: true,
            autoresize_max_height: 350,
            theme: 'modern',
            menubar: false,
            height: 150,
            toolbar: '| undo redo | bold italic forecolor | bullist numlist | link image',                                        
            spellchecker_languages: 'English=en',
            plugins: [
                'spellchecker  autolink lists link charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking table directionality',
                'emoticons template paste textcolor colorpicker textpattern codesample toc',
                'autoresize image imagetools',
                'mention',
            ],
            invalid_elements : 'script,style,input,textarea,form,onmouseover,onmouseout,onclick',
            // paste_as_text: true,
            paste_data_images: true,
            image_advtab: true,
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
                    //remove loading image
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
                    if (url = xhr.getResponseHeader('Location'))
                        window.location = url;

                    app.appView.hideLoader();
                    app.appView.renderResponseAlert(warningResponse);
                })
            ;
        },
    }

    function sendFile(files) {
        var data = new FormData();
        var nonEmptyFlag;
        \$.each(files, function(key, file){
            var patt = new RegExp(\"(image/)(?!tif)\");
            if (file.type && patt.test(file.type)) {
                data.append(\"attachments[]\", file);
                nonEmptyFlag = true;
            }
        });
        ";
        // line 136
        yield "    }

    function sendUrls(url) {
        ";
        // line 146
        yield "    }

    function removeFile(file) {
        ";
        // line 156
        yield "    }
    addTranslateButton = function(editor) {
        ";
        // line 187
        yield "    }
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
        return "@UVDeskSupportCenter/Templates/tinyMCE.html.twig";
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
        return array (  190 => 187,  186 => 156,  181 => 146,  176 => 136,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script src=\"{{ asset('bundles/uvdeskcoreframework/js/tinymce/tinymce.min.js') }}\"></script>
<script src=\"{{ asset('bundles/uvdeskcoreframework/js/tinymce/themes/modern/theme.min.js')}}\"></script>
<script scr=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script type=\"text/javascript\">

    var sfTinyMce = {
        tinymce : tinymce,
        options : {
            browser_spellcheck : true,
            selector: '.uv-view textarea',
            branding: false,
            relative_urls : false,
            remove_script_host : false,
            convert_urls: true,
            image_title: true,
            autoresize_max_height: 350,
            theme: 'modern',
            menubar: false,
            height: 150,
            toolbar: '| undo redo | bold italic forecolor | bullist numlist | link image',                                        
            spellchecker_languages: 'English=en',
            plugins: [
                'spellchecker  autolink lists link charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'media nonbreaking table directionality',
                'emoticons template paste textcolor colorpicker textpattern codesample toc',
                'autoresize image imagetools',
                'mention',
            ],
            invalid_elements : 'script,style,input,textarea,form,onmouseover,onmouseout,onclick',
            // paste_as_text: true,
            paste_data_images: true,
            image_advtab: true,
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
                    //remove loading image
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
                    if (url = xhr.getResponseHeader('Location'))
                        window.location = url;

                    app.appView.hideLoader();
                    app.appView.renderResponseAlert(warningResponse);
                })
            ;
        },
    }

    function sendFile(files) {
        var data = new FormData();
        var nonEmptyFlag;
        \$.each(files, function(key, file){
            var patt = new RegExp(\"(image/)(?!tif)\");
            if (file.type && patt.test(file.type)) {
                data.append(\"attachments[]\", file);
                nonEmptyFlag = true;
            }
        });
        {# var path = \"{{ '/customer/' in app.request.requestUri ? path('ajax_file_upload_customer') : path('ajax_file_upload') }}\";
        if (nonEmptyFlag) {
            return \$.ajax({
                    data: data,
                    type: \"POST\",
                    enctype: 'multipart/form-data',
                    url: path,
                    processData: false,
                    contentType: false,
                    cache: false,
                });
        } else {
            app.appView.renderResponseAlert({'alertClass': 'danger', 'alertMessage': '{{ \"Warning! Select valid image file.\"|trans }}' });
        } #}
    }

    function sendUrls(url) {
        {# var path = \"{{ '/customer/' in app.request.requestUri ? path('ajax_url_file_customer') : path('ajax_url_file') }}\";
        return \$.ajax({
                    data: {'url': url},
                    type: \"POST\",
                    url: path,
                    dataType: 'json'
                }); #}
    }

    function removeFile(file) {
        {# var path = \"{{ '/customer/' in app.request.requestUri ? path('ajax_file_remove_customer') : path('ajax_file_remove') }}\";
        return \$.ajax({
                    data: {'path': file},
                    type: \"POST\",
                    url: path,
                    dataType: 'json'
                }); #}
    }
    addTranslateButton = function(editor) {
        {# editor.addButton('translate', {
            type: 'listbox',
            title : 'selectContentAndTranslate',
            text: '{{ \"Translate\"|trans }}',
            onselect: function (e) {
                this.text('{{ \"Translate\"|trans }}');
                if (editor.selection.getContent({format : 'html'})) {
                    ajaxData = {
                        'lang': this.value(),
                        'content': editor.selection.getContent({format : 'html'}),
                    };
                    tinyMCE.activeEditor.setProgressState(true);
                } else {
                    editor.notificationManager.close();
                    editor.notificationManager.open({
                        text: '{{ \"Select text then select language to translate text.\"|trans }}',
                        type: 'info',
                        timeout: 3000,
                        closeButton: true
                    });
                }
            },
            values: [
                {% for value, text in application_service.getTranslationSupportedLanguages() %}
                    { text: '{{ text }}', value: '{{ value }}' },
                {% endfor %}
                { text: '“Powered by Yandex.Translate”', value: '', disabled: true },
            ],
        }); #}
    }
</script>", "@UVDeskSupportCenter/Templates/tinyMCE.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/support-center-bundle/Resources/views/Templates/tinyMCE.html.twig");
    }
}
