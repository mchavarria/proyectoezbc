<?php

/* default/homepage.html.twig */
class __TwigTemplate_8e29a75c3558feea5e2ac8293ac2406ebf86b065004a134ce4b0f851dda9c66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba50f680e2b79014168428bc161f30c6f0acc4ae70ba17454710feaffd959c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba50f680e2b79014168428bc161f30c6f0acc4ae70ba17454710feaffd959c52->enter($__internal_ba50f680e2b79014168428bc161f30c6f0acc4ae70ba17454710feaffd959c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_547b8638f4dd4315455ecca69eba5e4c09ca1db63096fd676dc8a1213cceb8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547b8638f4dd4315455ecca69eba5e4c09ca1db63096fd676dc8a1213cceb8af->enter($__internal_547b8638f4dd4315455ecca69eba5e4c09ca1db63096fd676dc8a1213cceb8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba50f680e2b79014168428bc161f30c6f0acc4ae70ba17454710feaffd959c52->leave($__internal_ba50f680e2b79014168428bc161f30c6f0acc4ae70ba17454710feaffd959c52_prof);

        
        $__internal_547b8638f4dd4315455ecca69eba5e4c09ca1db63096fd676dc8a1213cceb8af->leave($__internal_547b8638f4dd4315455ecca69eba5e4c09ca1db63096fd676dc8a1213cceb8af_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_649e13944ca03d8c2b113200ff7fdd9ae194c1dfd9b32202961e5f2308ef809e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649e13944ca03d8c2b113200ff7fdd9ae194c1dfd9b32202961e5f2308ef809e->enter($__internal_649e13944ca03d8c2b113200ff7fdd9ae194c1dfd9b32202961e5f2308ef809e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_aebb09646b2a19b98b8db5547dd4c3b3e5b06a8d9d53b3ca69cae9613b201ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebb09646b2a19b98b8db5547dd4c3b3e5b06a8d9d53b3ca69cae9613b201ece->enter($__internal_aebb09646b2a19b98b8db5547dd4c3b3e5b06a8d9d53b3ca69cae9613b201ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_aebb09646b2a19b98b8db5547dd4c3b3e5b06a8d9d53b3ca69cae9613b201ece->leave($__internal_aebb09646b2a19b98b8db5547dd4c3b3e5b06a8d9d53b3ca69cae9613b201ece_prof);

        
        $__internal_649e13944ca03d8c2b113200ff7fdd9ae194c1dfd9b32202961e5f2308ef809e->leave($__internal_649e13944ca03d8c2b113200ff7fdd9ae194c1dfd9b32202961e5f2308ef809e_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_f06eae82225716e5967fdde9f29ecfce8dd173dedf2f93588115ec7ffe045e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06eae82225716e5967fdde9f29ecfce8dd173dedf2f93588115ec7ffe045e8b->enter($__internal_f06eae82225716e5967fdde9f29ecfce8dd173dedf2f93588115ec7ffe045e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f3fd7bb423cbcfdaf8b53e7df6b7463c387df1106e86c9da59f479cedee7a70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fd7bb423cbcfdaf8b53e7df6b7463c387df1106e86c9da59f479cedee7a70a->enter($__internal_f3fd7bb423cbcfdaf8b53e7df6b7463c387df1106e86c9da59f479cedee7a70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_f3fd7bb423cbcfdaf8b53e7df6b7463c387df1106e86c9da59f479cedee7a70a->leave($__internal_f3fd7bb423cbcfdaf8b53e7df6b7463c387df1106e86c9da59f479cedee7a70a_prof);

        
        $__internal_f06eae82225716e5967fdde9f29ecfce8dd173dedf2f93588115ec7ffe045e8b->leave($__internal_f06eae82225716e5967fdde9f29ecfce8dd173dedf2f93588115ec7ffe045e8b_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_74373e221d40cff5177e3431f13af21ce5d2aed339ef2fa34adc4aaa72444544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74373e221d40cff5177e3431f13af21ce5d2aed339ef2fa34adc4aaa72444544->enter($__internal_74373e221d40cff5177e3431f13af21ce5d2aed339ef2fa34adc4aaa72444544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_eaa0b54e0305faaad9647f3eaa9cfd69d5ba9b7641acdc289de4dca257a2ceb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa0b54e0305faaad9647f3eaa9cfd69d5ba9b7641acdc289de4dca257a2ceb1->enter($__internal_eaa0b54e0305faaad9647f3eaa9cfd69d5ba9b7641acdc289de4dca257a2ceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_eaa0b54e0305faaad9647f3eaa9cfd69d5ba9b7641acdc289de4dca257a2ceb1->leave($__internal_eaa0b54e0305faaad9647f3eaa9cfd69d5ba9b7641acdc289de4dca257a2ceb1_prof);

        
        $__internal_74373e221d40cff5177e3431f13af21ce5d2aed339ef2fa34adc4aaa72444544->leave($__internal_74373e221d40cff5177e3431f13af21ce5d2aed339ef2fa34adc4aaa72444544_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc46ed7df2492fdc118f7e565b7288248c25b06d1ba2d4c24eafd3a91c1b202c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc46ed7df2492fdc118f7e565b7288248c25b06d1ba2d4c24eafd3a91c1b202c->enter($__internal_dc46ed7df2492fdc118f7e565b7288248c25b06d1ba2d4c24eafd3a91c1b202c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e39cc0e0ab68bc1aebd11a8e3f25ca4f8f7282519cb27cc02dca47b729e8b024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e39cc0e0ab68bc1aebd11a8e3f25ca4f8f7282519cb27cc02dca47b729e8b024->enter($__internal_e39cc0e0ab68bc1aebd11a8e3f25ca4f8f7282519cb27cc02dca47b729e8b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo "MIGUEE";
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_e39cc0e0ab68bc1aebd11a8e3f25ca4f8f7282519cb27cc02dca47b729e8b024->leave($__internal_e39cc0e0ab68bc1aebd11a8e3f25ca4f8f7282519cb27cc02dca47b729e8b024_prof);

        
        $__internal_dc46ed7df2492fdc118f7e565b7288248c25b06d1ba2d4c24eafd3a91c1b202c->leave($__internal_dc46ed7df2492fdc118f7e565b7288248c25b06d1ba2d4c24eafd3a91c1b202c_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  145 => 37,  139 => 34,  127 => 25,  123 => 24,  117 => 21,  107 => 14,  104 => 13,  95 => 12,  78 => 10,  61 => 9,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body_id 'homepage' %}

{#
    the homepage is a special page which displays neither a header nor a footer.
    this is done with the 'trick' of defining empty Twig blocks without any content
#}
{% block header %}{% endblock %}
{% block footer %}{% endblock %}

{% block body %}
    <div class=\"page-header\">
        <h1>{{ 'MIGUEE' }}</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_app'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('blog_index') }}\">
                        <i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'action.browse_app'|trans }}
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    {{ 'help.browse_admin'|trans|raw }}
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"{{ path('admin_index') }}\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'action.browse_admin'|trans }}
                    </a>
                </p>
            </div>
        </div>
    </div>
{% endblock %}
", "default/homepage.html.twig", "/home/migue/Documents/dev/Proyecto/symfony-demo/app/Resources/views/default/homepage.html.twig");
    }
}
