<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e0f02a76a09bfe4bf2cf92c20cf699909424920e26d9a9d6d430c521b504bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c72ccaae6ff525e3a9d91fe155b17dfa96df4ba666747e92a35c66e8180fa138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72ccaae6ff525e3a9d91fe155b17dfa96df4ba666747e92a35c66e8180fa138->enter($__internal_c72ccaae6ff525e3a9d91fe155b17dfa96df4ba666747e92a35c66e8180fa138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8b9bcf9d42339d34b0fb654339728bcaf40e4a2e80ff1f0dd9729c9c992c2eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9bcf9d42339d34b0fb654339728bcaf40e4a2e80ff1f0dd9729c9c992c2eda->enter($__internal_8b9bcf9d42339d34b0fb654339728bcaf40e4a2e80ff1f0dd9729c9c992c2eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_c72ccaae6ff525e3a9d91fe155b17dfa96df4ba666747e92a35c66e8180fa138->leave($__internal_c72ccaae6ff525e3a9d91fe155b17dfa96df4ba666747e92a35c66e8180fa138_prof);

        
        $__internal_8b9bcf9d42339d34b0fb654339728bcaf40e4a2e80ff1f0dd9729c9c992c2eda->leave($__internal_8b9bcf9d42339d34b0fb654339728bcaf40e4a2e80ff1f0dd9729c9c992c2eda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_796663494be1e8a7db70fd0ffa95b29a94c26666d1b3283ceb1ea5b8ae3439c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796663494be1e8a7db70fd0ffa95b29a94c26666d1b3283ceb1ea5b8ae3439c4->enter($__internal_796663494be1e8a7db70fd0ffa95b29a94c26666d1b3283ceb1ea5b8ae3439c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3f60003a4284df0b662e7fbfd0b8ed0d7adfa3567ffcb9c2e4e303a89e16b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f60003a4284df0b662e7fbfd0b8ed0d7adfa3567ffcb9c2e4e303a89e16b9b->enter($__internal_f3f60003a4284df0b662e7fbfd0b8ed0d7adfa3567ffcb9c2e4e303a89e16b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f3f60003a4284df0b662e7fbfd0b8ed0d7adfa3567ffcb9c2e4e303a89e16b9b->leave($__internal_f3f60003a4284df0b662e7fbfd0b8ed0d7adfa3567ffcb9c2e4e303a89e16b9b_prof);

        
        $__internal_796663494be1e8a7db70fd0ffa95b29a94c26666d1b3283ceb1ea5b8ae3439c4->leave($__internal_796663494be1e8a7db70fd0ffa95b29a94c26666d1b3283ceb1ea5b8ae3439c4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef33622ab13277aa8990e1c97d3135484f638d97ac74778da3f3a8eba40e9a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef33622ab13277aa8990e1c97d3135484f638d97ac74778da3f3a8eba40e9a41->enter($__internal_ef33622ab13277aa8990e1c97d3135484f638d97ac74778da3f3a8eba40e9a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c92bf0282f910561d721d8c93845bf1c6c6ef522fc64993a037a14d2e880800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c92bf0282f910561d721d8c93845bf1c6c6ef522fc64993a037a14d2e880800->enter($__internal_3c92bf0282f910561d721d8c93845bf1c6c6ef522fc64993a037a14d2e880800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3c92bf0282f910561d721d8c93845bf1c6c6ef522fc64993a037a14d2e880800->leave($__internal_3c92bf0282f910561d721d8c93845bf1c6c6ef522fc64993a037a14d2e880800_prof);

        
        $__internal_ef33622ab13277aa8990e1c97d3135484f638d97ac74778da3f3a8eba40e9a41->leave($__internal_ef33622ab13277aa8990e1c97d3135484f638d97ac74778da3f3a8eba40e9a41_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_79f4a8715b577ee1446cc2c53a0fa51c8a6c428312695c33ed8dda58d7780c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f4a8715b577ee1446cc2c53a0fa51c8a6c428312695c33ed8dda58d7780c97->enter($__internal_79f4a8715b577ee1446cc2c53a0fa51c8a6c428312695c33ed8dda58d7780c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa78132d7d0f365af4590529eb282b101e24eec05cb4334cb6d41a9d8bd6c226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa78132d7d0f365af4590529eb282b101e24eec05cb4334cb6d41a9d8bd6c226->enter($__internal_aa78132d7d0f365af4590529eb282b101e24eec05cb4334cb6d41a9d8bd6c226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa78132d7d0f365af4590529eb282b101e24eec05cb4334cb6d41a9d8bd6c226->leave($__internal_aa78132d7d0f365af4590529eb282b101e24eec05cb4334cb6d41a9d8bd6c226_prof);

        
        $__internal_79f4a8715b577ee1446cc2c53a0fa51c8a6c428312695c33ed8dda58d7780c97->leave($__internal_79f4a8715b577ee1446cc2c53a0fa51c8a6c428312695c33ed8dda58d7780c97_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/replay-analyzer-v2/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
