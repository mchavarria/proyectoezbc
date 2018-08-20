<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_46f9f92fed8ee71fdaa365198ccb54bc99605779eb6a56f7322c9ad98a92d667 extends Twig_Template
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
        $__internal_bbc530b0e8b0f068af00b1c7b17b09cc75e3a9be8dbecaca9afab769e8119a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc530b0e8b0f068af00b1c7b17b09cc75e3a9be8dbecaca9afab769e8119a02->enter($__internal_bbc530b0e8b0f068af00b1c7b17b09cc75e3a9be8dbecaca9afab769e8119a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5c7b68ae0e21e2af80f0d35cb784d7ba5bc20c4789ee43a682932b346776465a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7b68ae0e21e2af80f0d35cb784d7ba5bc20c4789ee43a682932b346776465a->enter($__internal_5c7b68ae0e21e2af80f0d35cb784d7ba5bc20c4789ee43a682932b346776465a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc530b0e8b0f068af00b1c7b17b09cc75e3a9be8dbecaca9afab769e8119a02->leave($__internal_bbc530b0e8b0f068af00b1c7b17b09cc75e3a9be8dbecaca9afab769e8119a02_prof);

        
        $__internal_5c7b68ae0e21e2af80f0d35cb784d7ba5bc20c4789ee43a682932b346776465a->leave($__internal_5c7b68ae0e21e2af80f0d35cb784d7ba5bc20c4789ee43a682932b346776465a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7228eb0d912a3545d14d86af0420f3d983e7a276f4a580a39e02ebc3dc82f8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7228eb0d912a3545d14d86af0420f3d983e7a276f4a580a39e02ebc3dc82f8d5->enter($__internal_7228eb0d912a3545d14d86af0420f3d983e7a276f4a580a39e02ebc3dc82f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0fa965497820a5cd60d15a0359bbfbcfdce4b1667b049f6af4eb0525db125fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fa965497820a5cd60d15a0359bbfbcfdce4b1667b049f6af4eb0525db125fd->enter($__internal_c0fa965497820a5cd60d15a0359bbfbcfdce4b1667b049f6af4eb0525db125fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c0fa965497820a5cd60d15a0359bbfbcfdce4b1667b049f6af4eb0525db125fd->leave($__internal_c0fa965497820a5cd60d15a0359bbfbcfdce4b1667b049f6af4eb0525db125fd_prof);

        
        $__internal_7228eb0d912a3545d14d86af0420f3d983e7a276f4a580a39e02ebc3dc82f8d5->leave($__internal_7228eb0d912a3545d14d86af0420f3d983e7a276f4a580a39e02ebc3dc82f8d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7539e4cd59c926d6e814311ef852b769e9e8085cb48a6a63bf274b8a2bb35c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7539e4cd59c926d6e814311ef852b769e9e8085cb48a6a63bf274b8a2bb35c20->enter($__internal_7539e4cd59c926d6e814311ef852b769e9e8085cb48a6a63bf274b8a2bb35c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0abcbb5459249a62afed06c1dada67a85b3b6fc6a1e06b626f583faee78bd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0abcbb5459249a62afed06c1dada67a85b3b6fc6a1e06b626f583faee78bd1d->enter($__internal_c0abcbb5459249a62afed06c1dada67a85b3b6fc6a1e06b626f583faee78bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0abcbb5459249a62afed06c1dada67a85b3b6fc6a1e06b626f583faee78bd1d->leave($__internal_c0abcbb5459249a62afed06c1dada67a85b3b6fc6a1e06b626f583faee78bd1d_prof);

        
        $__internal_7539e4cd59c926d6e814311ef852b769e9e8085cb48a6a63bf274b8a2bb35c20->leave($__internal_7539e4cd59c926d6e814311ef852b769e9e8085cb48a6a63bf274b8a2bb35c20_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7885bbd4424d7cbaadb48be4a8767805f5ca48a684c1662a540016246f6da097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7885bbd4424d7cbaadb48be4a8767805f5ca48a684c1662a540016246f6da097->enter($__internal_7885bbd4424d7cbaadb48be4a8767805f5ca48a684c1662a540016246f6da097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bffcf9039bb5e02c95f6b8ea58ac86197fae82a5b84c0b31b635718dd8ebe409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bffcf9039bb5e02c95f6b8ea58ac86197fae82a5b84c0b31b635718dd8ebe409->enter($__internal_bffcf9039bb5e02c95f6b8ea58ac86197fae82a5b84c0b31b635718dd8ebe409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bffcf9039bb5e02c95f6b8ea58ac86197fae82a5b84c0b31b635718dd8ebe409->leave($__internal_bffcf9039bb5e02c95f6b8ea58ac86197fae82a5b84c0b31b635718dd8ebe409_prof);

        
        $__internal_7885bbd4424d7cbaadb48be4a8767805f5ca48a684c1662a540016246f6da097->leave($__internal_7885bbd4424d7cbaadb48be4a8767805f5ca48a684c1662a540016246f6da097_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "/home/migue/Documents/dev/Proyecto/symfony-demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
