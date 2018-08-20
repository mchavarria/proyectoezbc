<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_86e6cc317312f638f46201af8204f40661b8b4129b2b0d01d7e229b6ef24c709 extends Twig_Template
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
        $__internal_5fa2cc178732f971057a068a4a97a7112d9385a5a3c7d33c891fcf580fcd5daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa2cc178732f971057a068a4a97a7112d9385a5a3c7d33c891fcf580fcd5daf->enter($__internal_5fa2cc178732f971057a068a4a97a7112d9385a5a3c7d33c891fcf580fcd5daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f21cce75f259362319579add0d9512fac156006558d490e6405c223160814f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f21cce75f259362319579add0d9512fac156006558d490e6405c223160814f4f->enter($__internal_f21cce75f259362319579add0d9512fac156006558d490e6405c223160814f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fa2cc178732f971057a068a4a97a7112d9385a5a3c7d33c891fcf580fcd5daf->leave($__internal_5fa2cc178732f971057a068a4a97a7112d9385a5a3c7d33c891fcf580fcd5daf_prof);

        
        $__internal_f21cce75f259362319579add0d9512fac156006558d490e6405c223160814f4f->leave($__internal_f21cce75f259362319579add0d9512fac156006558d490e6405c223160814f4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06c8d500a131ce626ba55f4aa1b744de10bbb77e482d6d341580fb088243e4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c8d500a131ce626ba55f4aa1b744de10bbb77e482d6d341580fb088243e4e4->enter($__internal_06c8d500a131ce626ba55f4aa1b744de10bbb77e482d6d341580fb088243e4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74a49c1b66dafe609adef7cab274ad5e8d1b001bc943f333c409358b5974584e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a49c1b66dafe609adef7cab274ad5e8d1b001bc943f333c409358b5974584e->enter($__internal_74a49c1b66dafe609adef7cab274ad5e8d1b001bc943f333c409358b5974584e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_74a49c1b66dafe609adef7cab274ad5e8d1b001bc943f333c409358b5974584e->leave($__internal_74a49c1b66dafe609adef7cab274ad5e8d1b001bc943f333c409358b5974584e_prof);

        
        $__internal_06c8d500a131ce626ba55f4aa1b744de10bbb77e482d6d341580fb088243e4e4->leave($__internal_06c8d500a131ce626ba55f4aa1b744de10bbb77e482d6d341580fb088243e4e4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_00f25230048903f55fd00fed2945298608e6dec8d5837d8bbcecdec45827483d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f25230048903f55fd00fed2945298608e6dec8d5837d8bbcecdec45827483d->enter($__internal_00f25230048903f55fd00fed2945298608e6dec8d5837d8bbcecdec45827483d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_44f148804ff4ecefbb92996b86164da550c61d8eac48c86dbc6bbd95ce5c67a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f148804ff4ecefbb92996b86164da550c61d8eac48c86dbc6bbd95ce5c67a4->enter($__internal_44f148804ff4ecefbb92996b86164da550c61d8eac48c86dbc6bbd95ce5c67a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_44f148804ff4ecefbb92996b86164da550c61d8eac48c86dbc6bbd95ce5c67a4->leave($__internal_44f148804ff4ecefbb92996b86164da550c61d8eac48c86dbc6bbd95ce5c67a4_prof);

        
        $__internal_00f25230048903f55fd00fed2945298608e6dec8d5837d8bbcecdec45827483d->leave($__internal_00f25230048903f55fd00fed2945298608e6dec8d5837d8bbcecdec45827483d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_292e788ac3bd2246ca4b23406c9f423c0b759785faf2e96a32ce3b0536d8306b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292e788ac3bd2246ca4b23406c9f423c0b759785faf2e96a32ce3b0536d8306b->enter($__internal_292e788ac3bd2246ca4b23406c9f423c0b759785faf2e96a32ce3b0536d8306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_89b186e29b5a34903de11410b68be8915dfe4ade4967ca4d8e7abfb0645e7950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b186e29b5a34903de11410b68be8915dfe4ade4967ca4d8e7abfb0645e7950->enter($__internal_89b186e29b5a34903de11410b68be8915dfe4ade4967ca4d8e7abfb0645e7950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_89b186e29b5a34903de11410b68be8915dfe4ade4967ca4d8e7abfb0645e7950->leave($__internal_89b186e29b5a34903de11410b68be8915dfe4ade4967ca4d8e7abfb0645e7950_prof);

        
        $__internal_292e788ac3bd2246ca4b23406c9f423c0b759785faf2e96a32ce3b0536d8306b->leave($__internal_292e788ac3bd2246ca4b23406c9f423c0b759785faf2e96a32ce3b0536d8306b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/exception.html.twig", "/home/migue/Documents/dev/Proyecto/symfony-demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
