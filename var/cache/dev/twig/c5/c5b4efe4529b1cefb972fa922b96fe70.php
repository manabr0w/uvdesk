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

/* @UVDeskCoreFramework/Templates/attachment.html.twig */
class __TwigTemplate_261ab1a048808adbaeaf168e98361a3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/attachment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@UVDeskCoreFramework/Templates/attachment.html.twig"));

        // line 1
        yield "<style>
    input.attachment {
        display: none;
    }

    .uv-element-block .uv-added-attachment {
        color: #333333;
        margin: -14px 5px;
    }
</style>

<script type=\"text/javascript\">
    \$(function () {
        var FileView = Backbone.View.extend({
            fileCounter: 0,
            max_post_size: ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_post_size"]) || array_key_exists("max_post_size", $context) ? $context["max_post_size"] : (function () { throw new RuntimeError('Variable "max_post_size" does not exist.', 16, $this->source); })()), "html", null, true);
        yield ",
            max_file_uploads: ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["max_file_uploads"]) || array_key_exists("max_file_uploads", $context) ? $context["max_file_uploads"] : (function () { throw new RuntimeError('Variable "max_file_uploads" does not exist.', 17, $this->source); })()), "html", null, true);
        yield ",
            upload_max_filesize: ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["upload_max_filesize"]) || array_key_exists("upload_max_filesize", $context) ? $context["upload_max_filesize"] : (function () { throw new RuntimeError('Variable "upload_max_filesize" does not exist.', 18, $this->source); })()), "html", null, true);
        yield ",
            el: '.attachment-block',
            events : {
                'click .uv-file-label': 'createFileType',
                'change .attachment': 'selectFile',
                'click .uv-added-attachment span': 'removeFile',
                'click .uv-field-message': 'removeError',
            },
            createFileType: function(e) {
                this.removeError(e)
                var currentElement = Backbone.\$(e.currentTarget),
                    attachmentBlock = currentElement.parents('.attachment-block')
                if (attachmentBlock.children('.uv-added-attachment').length + 1 > this.max_file_uploads) {
                    attachmentBlock.append(this.getDefaultErrorMessage())
                    return;
                }
                this.fileCounter += 1;
                attachmentBlock.append('<div class=\"uv-added-attachment\" style=\"display: none\" id=\"file-' + this.fileCounter + '\"><div class=\"uv-attachment\"><input type=\"file\" name=\"attachments[]\" class=\"attachment\" multiple=\"multiple\"></div></div>')
                \$('#file-' + this.fileCounter).find('.attachment').trigger('click')
            },
            labelTemplate: _.template('<div data-name=\"<%- fileName %>\" class=\"uv-selected-attachment-item\"><span></span><label class=\"file-name\"><%- fileName %></label></div>'),
            selectFile: function(e) {
                var currentElement = Backbone.\$(e.currentTarget);
                var attachmentBlock = currentElement.parents(\".uv-added-attachment\");
                var isError = false;
                
                if (currentElement.length) {
                    files = currentElement[0].files; 

                    if (files.length) {
                        for (var i = 0; i < files.length; i++) {
                            var fileName = files[i].name;
                            if (files[i].size > this.upload_max_filesize) {
                                isError = true;
                                break;
                            }

                            // Validating Form Size
                            var formSize = 0
                            var formData = new FormData(currentElement.parents('form')[0])
                            
                            for (var pair of formData.entries()) {
                                if (pair[1] instanceof Blob) {
                                    formSize += pair[1].size
                                } else {
                                    formSize += pair[1].length
                                }
                            }

                            if (formSize > this.max_post_size) {
                                isError = true
                            }

                            attachmentBlock.append(this.labelTemplate({
                                'fileName': fileName
                            }));
                        }
                    }
                }
                
                if (isError) {
                    attachmentBlock.parents('.attachment-block').append(this.getDefaultErrorMessage())
                    attachmentBlock.remove()
                    return
                }

                attachmentBlock.show()
            },
            removeFile: function(e) {
                this.removeError(e);
                let el = \$(e.currentTarget).parent('.uv-selected-attachment-item');
                let inputEl = el.siblings('.uv-attachment').find('input');
                
                let fileCount = \$(\"input[name='attachments[]']\")[0].files.length;
                if (fileCount > 1) {
                    console.log(fileCount);
                    let fileName = el.data('name');
                    let files = inputEl[0].files; 
                    let dt = new DataTransfer();

                    for (let i = 0; i < files.length; i++) {
                        let file = files[i];
                        if (el.data('name') != files[i].name) {
                            dt.items.add(file);
                        }
                    }

                    \$(\"input[name='attachments[]']\")[0].files = dt.files;
                    el.remove();

                    if (\$(\"input[name='attachments[]']\")[0].files.length == 0) {
                        \$('.uv-added-attachment').remove();
                    }
                }

                Backbone.\$(e.currentTarget).parents('.uv-added-attachment').remove();
            },
            getDefaultErrorMessage: function() {
                return '<span class=\"uv-field-message\">You can send up to ' + Math.floor(this.upload_max_filesize/(1024*1024)) + ' MB in attachments. If you have more than one attachment, they can\\'t add up to more than ' + Math.floor(this.max_post_size/(1024*1024))  + ' MB and ' + this.max_file_uploads + ' attachments in total.</span>'
            },
            removeError: function(e) {
                Backbone.\$(e.currentTarget).parents('.attachment-block').find('.uv-field-message').remove()
            }   
        });
        
        var fileView = new FileView();
    });
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
        return "@UVDeskCoreFramework/Templates/attachment.html.twig";
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
        return array (  73 => 18,  69 => 17,  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>
    input.attachment {
        display: none;
    }

    .uv-element-block .uv-added-attachment {
        color: #333333;
        margin: -14px 5px;
    }
</style>

<script type=\"text/javascript\">
    \$(function () {
        var FileView = Backbone.View.extend({
            fileCounter: 0,
            max_post_size: {{ max_post_size }},
            max_file_uploads: {{ max_file_uploads }},
            upload_max_filesize: {{ upload_max_filesize }},
            el: '.attachment-block',
            events : {
                'click .uv-file-label': 'createFileType',
                'change .attachment': 'selectFile',
                'click .uv-added-attachment span': 'removeFile',
                'click .uv-field-message': 'removeError',
            },
            createFileType: function(e) {
                this.removeError(e)
                var currentElement = Backbone.\$(e.currentTarget),
                    attachmentBlock = currentElement.parents('.attachment-block')
                if (attachmentBlock.children('.uv-added-attachment').length + 1 > this.max_file_uploads) {
                    attachmentBlock.append(this.getDefaultErrorMessage())
                    return;
                }
                this.fileCounter += 1;
                attachmentBlock.append('<div class=\"uv-added-attachment\" style=\"display: none\" id=\"file-' + this.fileCounter + '\"><div class=\"uv-attachment\"><input type=\"file\" name=\"attachments[]\" class=\"attachment\" multiple=\"multiple\"></div></div>')
                \$('#file-' + this.fileCounter).find('.attachment').trigger('click')
            },
            labelTemplate: _.template('<div data-name=\"<%- fileName %>\" class=\"uv-selected-attachment-item\"><span></span><label class=\"file-name\"><%- fileName %></label></div>'),
            selectFile: function(e) {
                var currentElement = Backbone.\$(e.currentTarget);
                var attachmentBlock = currentElement.parents(\".uv-added-attachment\");
                var isError = false;
                
                if (currentElement.length) {
                    files = currentElement[0].files; 

                    if (files.length) {
                        for (var i = 0; i < files.length; i++) {
                            var fileName = files[i].name;
                            if (files[i].size > this.upload_max_filesize) {
                                isError = true;
                                break;
                            }

                            // Validating Form Size
                            var formSize = 0
                            var formData = new FormData(currentElement.parents('form')[0])
                            
                            for (var pair of formData.entries()) {
                                if (pair[1] instanceof Blob) {
                                    formSize += pair[1].size
                                } else {
                                    formSize += pair[1].length
                                }
                            }

                            if (formSize > this.max_post_size) {
                                isError = true
                            }

                            attachmentBlock.append(this.labelTemplate({
                                'fileName': fileName
                            }));
                        }
                    }
                }
                
                if (isError) {
                    attachmentBlock.parents('.attachment-block').append(this.getDefaultErrorMessage())
                    attachmentBlock.remove()
                    return
                }

                attachmentBlock.show()
            },
            removeFile: function(e) {
                this.removeError(e);
                let el = \$(e.currentTarget).parent('.uv-selected-attachment-item');
                let inputEl = el.siblings('.uv-attachment').find('input');
                
                let fileCount = \$(\"input[name='attachments[]']\")[0].files.length;
                if (fileCount > 1) {
                    console.log(fileCount);
                    let fileName = el.data('name');
                    let files = inputEl[0].files; 
                    let dt = new DataTransfer();

                    for (let i = 0; i < files.length; i++) {
                        let file = files[i];
                        if (el.data('name') != files[i].name) {
                            dt.items.add(file);
                        }
                    }

                    \$(\"input[name='attachments[]']\")[0].files = dt.files;
                    el.remove();

                    if (\$(\"input[name='attachments[]']\")[0].files.length == 0) {
                        \$('.uv-added-attachment').remove();
                    }
                }

                Backbone.\$(e.currentTarget).parents('.uv-added-attachment').remove();
            },
            getDefaultErrorMessage: function() {
                return '<span class=\"uv-field-message\">You can send up to ' + Math.floor(this.upload_max_filesize/(1024*1024)) + ' MB in attachments. If you have more than one attachment, they can\\'t add up to more than ' + Math.floor(this.max_post_size/(1024*1024))  + ' MB and ' + this.max_file_uploads + ' attachments in total.</span>'
            },
            removeError: function(e) {
                Backbone.\$(e.currentTarget).parents('.attachment-block').find('.uv-field-message').remove()
            }   
        });
        
        var fileView = new FileView();
    });
</script>", "@UVDeskCoreFramework/Templates/attachment.html.twig", "/home/maksim/Desktop/uvdesk/vendor/uvdesk/core-framework/Resources/views/Templates/attachment.html.twig");
    }
}
