<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_58efa056d0f066525a1d6a946adc7ad1f80036e5a0539a8d991b0f915682d6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b9bdbaae6216823031ab2cb328b3126b3d978940af08d3367991cbf420bb302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9bdbaae6216823031ab2cb328b3126b3d978940af08d3367991cbf420bb302->enter($__internal_8b9bdbaae6216823031ab2cb328b3126b3d978940af08d3367991cbf420bb302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7978ae53cecff259502d21af57d408b08652ba036a2ef5b9c8855fb7ee360260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7978ae53cecff259502d21af57d408b08652ba036a2ef5b9c8855fb7ee360260->enter($__internal_7978ae53cecff259502d21af57d408b08652ba036a2ef5b9c8855fb7ee360260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b9bdbaae6216823031ab2cb328b3126b3d978940af08d3367991cbf420bb302->leave($__internal_8b9bdbaae6216823031ab2cb328b3126b3d978940af08d3367991cbf420bb302_prof);

        
        $__internal_7978ae53cecff259502d21af57d408b08652ba036a2ef5b9c8855fb7ee360260->leave($__internal_7978ae53cecff259502d21af57d408b08652ba036a2ef5b9c8855fb7ee360260_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d60402469541fc6c01ba063c3a1ba2a8f2fe3da2d3ea44cef4eea41a3f8eee0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60402469541fc6c01ba063c3a1ba2a8f2fe3da2d3ea44cef4eea41a3f8eee0f->enter($__internal_d60402469541fc6c01ba063c3a1ba2a8f2fe3da2d3ea44cef4eea41a3f8eee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1cf9a3e8e07417e9f14a4083a426ff82abead30dfcb13015e538f84f4f8e106e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf9a3e8e07417e9f14a4083a426ff82abead30dfcb13015e538f84f4f8e106e->enter($__internal_1cf9a3e8e07417e9f14a4083a426ff82abead30dfcb13015e538f84f4f8e106e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1cf9a3e8e07417e9f14a4083a426ff82abead30dfcb13015e538f84f4f8e106e->leave($__internal_1cf9a3e8e07417e9f14a4083a426ff82abead30dfcb13015e538f84f4f8e106e_prof);

        
        $__internal_d60402469541fc6c01ba063c3a1ba2a8f2fe3da2d3ea44cef4eea41a3f8eee0f->leave($__internal_d60402469541fc6c01ba063c3a1ba2a8f2fe3da2d3ea44cef4eea41a3f8eee0f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_913f2ca7673d4eca3030c4457acf008c5b2bf59552451692ebb3fcc56868112d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913f2ca7673d4eca3030c4457acf008c5b2bf59552451692ebb3fcc56868112d->enter($__internal_913f2ca7673d4eca3030c4457acf008c5b2bf59552451692ebb3fcc56868112d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7904b68e6a08df8f90689b297cfcb3ea91a0c6ecf0b55dbbfe22f9f6f6c22bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7904b68e6a08df8f90689b297cfcb3ea91a0c6ecf0b55dbbfe22f9f6f6c22bd4->enter($__internal_7904b68e6a08df8f90689b297cfcb3ea91a0c6ecf0b55dbbfe22f9f6f6c22bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7904b68e6a08df8f90689b297cfcb3ea91a0c6ecf0b55dbbfe22f9f6f6c22bd4->leave($__internal_7904b68e6a08df8f90689b297cfcb3ea91a0c6ecf0b55dbbfe22f9f6f6c22bd4_prof);

        
        $__internal_913f2ca7673d4eca3030c4457acf008c5b2bf59552451692ebb3fcc56868112d->leave($__internal_913f2ca7673d4eca3030c4457acf008c5b2bf59552451692ebb3fcc56868112d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_799d23e6def2c0e03cc781bcc7128f3e5bcc7f9c0ecd1581bc297a4570743330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799d23e6def2c0e03cc781bcc7128f3e5bcc7f9c0ecd1581bc297a4570743330->enter($__internal_799d23e6def2c0e03cc781bcc7128f3e5bcc7f9c0ecd1581bc297a4570743330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee870e546c94227f0f907b3587fc0a5aa62556f38b546c2dd2acd22c2297b3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee870e546c94227f0f907b3587fc0a5aa62556f38b546c2dd2acd22c2297b3ac->enter($__internal_ee870e546c94227f0f907b3587fc0a5aa62556f38b546c2dd2acd22c2297b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_ee870e546c94227f0f907b3587fc0a5aa62556f38b546c2dd2acd22c2297b3ac->leave($__internal_ee870e546c94227f0f907b3587fc0a5aa62556f38b546c2dd2acd22c2297b3ac_prof);

        
        $__internal_799d23e6def2c0e03cc781bcc7128f3e5bcc7f9c0ecd1581bc297a4570743330->leave($__internal_799d23e6def2c0e03cc781bcc7128f3e5bcc7f9c0ecd1581bc297a4570743330_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/replay-analyzer-v2/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
