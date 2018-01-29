<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4522326ccca99d74112ce7d1e69da4e06fe81a47f51d8e608e4cb9709faf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d50e24329921acaeacc91c7c1769632d9be0ff7b64282ee9ae66e7ef8f16396d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50e24329921acaeacc91c7c1769632d9be0ff7b64282ee9ae66e7ef8f16396d->enter($__internal_d50e24329921acaeacc91c7c1769632d9be0ff7b64282ee9ae66e7ef8f16396d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fdb0c4d3ae183a11169364579c6a3c1fc7293a9477da83f9566b76dbe082a1ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb0c4d3ae183a11169364579c6a3c1fc7293a9477da83f9566b76dbe082a1ce->enter($__internal_fdb0c4d3ae183a11169364579c6a3c1fc7293a9477da83f9566b76dbe082a1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d50e24329921acaeacc91c7c1769632d9be0ff7b64282ee9ae66e7ef8f16396d->leave($__internal_d50e24329921acaeacc91c7c1769632d9be0ff7b64282ee9ae66e7ef8f16396d_prof);

        
        $__internal_fdb0c4d3ae183a11169364579c6a3c1fc7293a9477da83f9566b76dbe082a1ce->leave($__internal_fdb0c4d3ae183a11169364579c6a3c1fc7293a9477da83f9566b76dbe082a1ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_729b7a83074b2baa0e5f9d0923cb793ebde32f245399130a68ae3605dfbbb6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729b7a83074b2baa0e5f9d0923cb793ebde32f245399130a68ae3605dfbbb6ce->enter($__internal_729b7a83074b2baa0e5f9d0923cb793ebde32f245399130a68ae3605dfbbb6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_102d291cfae5aae0ab6f363faaa77a7dffe9393e3e4a4c124b70fe6eb61fec9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102d291cfae5aae0ab6f363faaa77a7dffe9393e3e4a4c124b70fe6eb61fec9e->enter($__internal_102d291cfae5aae0ab6f363faaa77a7dffe9393e3e4a4c124b70fe6eb61fec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_102d291cfae5aae0ab6f363faaa77a7dffe9393e3e4a4c124b70fe6eb61fec9e->leave($__internal_102d291cfae5aae0ab6f363faaa77a7dffe9393e3e4a4c124b70fe6eb61fec9e_prof);

        
        $__internal_729b7a83074b2baa0e5f9d0923cb793ebde32f245399130a68ae3605dfbbb6ce->leave($__internal_729b7a83074b2baa0e5f9d0923cb793ebde32f245399130a68ae3605dfbbb6ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/replay-analyzer-v2/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
