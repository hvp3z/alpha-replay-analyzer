<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96d2e6e52be9e163f80a3694840aeea9d7b50a8dbb848b35db9887a911267a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d759214337db7eb87d9ff2d4f006370c2acdf4d35b548865f2fd0c9684cd5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d759214337db7eb87d9ff2d4f006370c2acdf4d35b548865f2fd0c9684cd5c8->enter($__internal_6d759214337db7eb87d9ff2d4f006370c2acdf4d35b548865f2fd0c9684cd5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_3fd53967b283a1d8f89fb81599c3afc063acfcedeefe6c67acc73b5d7f2db227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd53967b283a1d8f89fb81599c3afc063acfcedeefe6c67acc73b5d7f2db227->enter($__internal_3fd53967b283a1d8f89fb81599c3afc063acfcedeefe6c67acc73b5d7f2db227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d759214337db7eb87d9ff2d4f006370c2acdf4d35b548865f2fd0c9684cd5c8->leave($__internal_6d759214337db7eb87d9ff2d4f006370c2acdf4d35b548865f2fd0c9684cd5c8_prof);

        
        $__internal_3fd53967b283a1d8f89fb81599c3afc063acfcedeefe6c67acc73b5d7f2db227->leave($__internal_3fd53967b283a1d8f89fb81599c3afc063acfcedeefe6c67acc73b5d7f2db227_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8970f18ea882a03b77157ff6c7418ddb910adf4cf051e41afba6871363457894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8970f18ea882a03b77157ff6c7418ddb910adf4cf051e41afba6871363457894->enter($__internal_8970f18ea882a03b77157ff6c7418ddb910adf4cf051e41afba6871363457894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c22ba8ccce9a760125f861e5bec8c2da442a1752596d4dbec943ea7912677643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c22ba8ccce9a760125f861e5bec8c2da442a1752596d4dbec943ea7912677643->enter($__internal_c22ba8ccce9a760125f861e5bec8c2da442a1752596d4dbec943ea7912677643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c22ba8ccce9a760125f861e5bec8c2da442a1752596d4dbec943ea7912677643->leave($__internal_c22ba8ccce9a760125f861e5bec8c2da442a1752596d4dbec943ea7912677643_prof);

        
        $__internal_8970f18ea882a03b77157ff6c7418ddb910adf4cf051e41afba6871363457894->leave($__internal_8970f18ea882a03b77157ff6c7418ddb910adf4cf051e41afba6871363457894_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_acd98a73abf68011db0acb0043212cc8db3f3239d8a46f6378145ab86971c04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acd98a73abf68011db0acb0043212cc8db3f3239d8a46f6378145ab86971c04b->enter($__internal_acd98a73abf68011db0acb0043212cc8db3f3239d8a46f6378145ab86971c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_50f19def77bbcd4828c794364140737f13adf67486c773c94939fd0823d09dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f19def77bbcd4828c794364140737f13adf67486c773c94939fd0823d09dce->enter($__internal_50f19def77bbcd4828c794364140737f13adf67486c773c94939fd0823d09dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_50f19def77bbcd4828c794364140737f13adf67486c773c94939fd0823d09dce->leave($__internal_50f19def77bbcd4828c794364140737f13adf67486c773c94939fd0823d09dce_prof);

        
        $__internal_acd98a73abf68011db0acb0043212cc8db3f3239d8a46f6378145ab86971c04b->leave($__internal_acd98a73abf68011db0acb0043212cc8db3f3239d8a46f6378145ab86971c04b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_36a579319d35f8369a9c1d55c3146afc02d8f90ac4de23070380fef477299c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a579319d35f8369a9c1d55c3146afc02d8f90ac4de23070380fef477299c03->enter($__internal_36a579319d35f8369a9c1d55c3146afc02d8f90ac4de23070380fef477299c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1881e2c11ce4f0628d34d545c83ce1a36d05144230d15b2e1229599cdfb87735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1881e2c11ce4f0628d34d545c83ce1a36d05144230d15b2e1229599cdfb87735->enter($__internal_1881e2c11ce4f0628d34d545c83ce1a36d05144230d15b2e1229599cdfb87735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_1881e2c11ce4f0628d34d545c83ce1a36d05144230d15b2e1229599cdfb87735->leave($__internal_1881e2c11ce4f0628d34d545c83ce1a36d05144230d15b2e1229599cdfb87735_prof);

        
        $__internal_36a579319d35f8369a9c1d55c3146afc02d8f90ac4de23070380fef477299c03->leave($__internal_36a579319d35f8369a9c1d55c3146afc02d8f90ac4de23070380fef477299c03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/replay-analyzer-v2/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
