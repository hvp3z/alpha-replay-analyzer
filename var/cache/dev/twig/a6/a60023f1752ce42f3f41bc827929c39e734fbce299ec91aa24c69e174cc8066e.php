<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2b0ca155660c7f9727796fc68e4c6951a8af132f635ca1b874cae5eeefcee5a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_eb95d3193233cb75ff6b524c06800ba78a3224819dcb86cea320238f3d30677d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb95d3193233cb75ff6b524c06800ba78a3224819dcb86cea320238f3d30677d->enter($__internal_eb95d3193233cb75ff6b524c06800ba78a3224819dcb86cea320238f3d30677d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bf636ce362ec93d10bd4403a023678c2c02077cf84689850bb9b72200a17236d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf636ce362ec93d10bd4403a023678c2c02077cf84689850bb9b72200a17236d->enter($__internal_bf636ce362ec93d10bd4403a023678c2c02077cf84689850bb9b72200a17236d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb95d3193233cb75ff6b524c06800ba78a3224819dcb86cea320238f3d30677d->leave($__internal_eb95d3193233cb75ff6b524c06800ba78a3224819dcb86cea320238f3d30677d_prof);

        
        $__internal_bf636ce362ec93d10bd4403a023678c2c02077cf84689850bb9b72200a17236d->leave($__internal_bf636ce362ec93d10bd4403a023678c2c02077cf84689850bb9b72200a17236d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_739161ec94849cbd2e3567fd2db5962889aaad2f9c94a986e7bd8ac7af529844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739161ec94849cbd2e3567fd2db5962889aaad2f9c94a986e7bd8ac7af529844->enter($__internal_739161ec94849cbd2e3567fd2db5962889aaad2f9c94a986e7bd8ac7af529844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8282855f002112a3c32abfffce7bf5cdaaac28ce8a4d43fe53b2e84c572c48fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8282855f002112a3c32abfffce7bf5cdaaac28ce8a4d43fe53b2e84c572c48fc->enter($__internal_8282855f002112a3c32abfffce7bf5cdaaac28ce8a4d43fe53b2e84c572c48fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8282855f002112a3c32abfffce7bf5cdaaac28ce8a4d43fe53b2e84c572c48fc->leave($__internal_8282855f002112a3c32abfffce7bf5cdaaac28ce8a4d43fe53b2e84c572c48fc_prof);

        
        $__internal_739161ec94849cbd2e3567fd2db5962889aaad2f9c94a986e7bd8ac7af529844->leave($__internal_739161ec94849cbd2e3567fd2db5962889aaad2f9c94a986e7bd8ac7af529844_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f296748ca7d19bb13458aec7738594b6aa1ce32e15de7aea1380e6f15c1e30bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f296748ca7d19bb13458aec7738594b6aa1ce32e15de7aea1380e6f15c1e30bc->enter($__internal_f296748ca7d19bb13458aec7738594b6aa1ce32e15de7aea1380e6f15c1e30bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2d035cd5898d7ba2a6ec6aa49e5f0f08c6caebbe91255d509a29797bc3441762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d035cd5898d7ba2a6ec6aa49e5f0f08c6caebbe91255d509a29797bc3441762->enter($__internal_2d035cd5898d7ba2a6ec6aa49e5f0f08c6caebbe91255d509a29797bc3441762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2d035cd5898d7ba2a6ec6aa49e5f0f08c6caebbe91255d509a29797bc3441762->leave($__internal_2d035cd5898d7ba2a6ec6aa49e5f0f08c6caebbe91255d509a29797bc3441762_prof);

        
        $__internal_f296748ca7d19bb13458aec7738594b6aa1ce32e15de7aea1380e6f15c1e30bc->leave($__internal_f296748ca7d19bb13458aec7738594b6aa1ce32e15de7aea1380e6f15c1e30bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_019cc1dbbeadf4c63558d4cb4af1f9a484454bc1476dd2083ddae2507ab15dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019cc1dbbeadf4c63558d4cb4af1f9a484454bc1476dd2083ddae2507ab15dcb->enter($__internal_019cc1dbbeadf4c63558d4cb4af1f9a484454bc1476dd2083ddae2507ab15dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4db99d65a37ed06d7601fe4394e3ed8625886c04ea5540fd02d002e6bfe3e6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db99d65a37ed06d7601fe4394e3ed8625886c04ea5540fd02d002e6bfe3e6d9->enter($__internal_4db99d65a37ed06d7601fe4394e3ed8625886c04ea5540fd02d002e6bfe3e6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4db99d65a37ed06d7601fe4394e3ed8625886c04ea5540fd02d002e6bfe3e6d9->leave($__internal_4db99d65a37ed06d7601fe4394e3ed8625886c04ea5540fd02d002e6bfe3e6d9_prof);

        
        $__internal_019cc1dbbeadf4c63558d4cb4af1f9a484454bc1476dd2083ddae2507ab15dcb->leave($__internal_019cc1dbbeadf4c63558d4cb4af1f9a484454bc1476dd2083ddae2507ab15dcb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/replay-analyzer-v2/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
