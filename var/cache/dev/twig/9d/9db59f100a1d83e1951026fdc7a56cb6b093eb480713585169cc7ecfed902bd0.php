<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9212f84190a16cf438c66f641aa212351c6443c661d282e86a72133a6253f9ba extends Twig_Template
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
        $__internal_68877a498a197fec70b2bc73d2d6d5a54d06f064a357041ef37a38189bb34d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68877a498a197fec70b2bc73d2d6d5a54d06f064a357041ef37a38189bb34d3c->enter($__internal_68877a498a197fec70b2bc73d2d6d5a54d06f064a357041ef37a38189bb34d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_24cedfae98752c12030c96a1fedceec5e4fc00808fc9412e55a14fc7b94be29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cedfae98752c12030c96a1fedceec5e4fc00808fc9412e55a14fc7b94be29e->enter($__internal_24cedfae98752c12030c96a1fedceec5e4fc00808fc9412e55a14fc7b94be29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68877a498a197fec70b2bc73d2d6d5a54d06f064a357041ef37a38189bb34d3c->leave($__internal_68877a498a197fec70b2bc73d2d6d5a54d06f064a357041ef37a38189bb34d3c_prof);

        
        $__internal_24cedfae98752c12030c96a1fedceec5e4fc00808fc9412e55a14fc7b94be29e->leave($__internal_24cedfae98752c12030c96a1fedceec5e4fc00808fc9412e55a14fc7b94be29e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90569763e184a75a59614bbc319056a31e3c5d7337add81a37746ab8a80af030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90569763e184a75a59614bbc319056a31e3c5d7337add81a37746ab8a80af030->enter($__internal_90569763e184a75a59614bbc319056a31e3c5d7337add81a37746ab8a80af030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_65c937b343f400e59393185d4bc4b7372a1940b0dcca3af5113ae85f950d6746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65c937b343f400e59393185d4bc4b7372a1940b0dcca3af5113ae85f950d6746->enter($__internal_65c937b343f400e59393185d4bc4b7372a1940b0dcca3af5113ae85f950d6746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_65c937b343f400e59393185d4bc4b7372a1940b0dcca3af5113ae85f950d6746->leave($__internal_65c937b343f400e59393185d4bc4b7372a1940b0dcca3af5113ae85f950d6746_prof);

        
        $__internal_90569763e184a75a59614bbc319056a31e3c5d7337add81a37746ab8a80af030->leave($__internal_90569763e184a75a59614bbc319056a31e3c5d7337add81a37746ab8a80af030_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/ajax.html.twig", "/home/migue/Documents/dev/Proyecto/symfony-demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
