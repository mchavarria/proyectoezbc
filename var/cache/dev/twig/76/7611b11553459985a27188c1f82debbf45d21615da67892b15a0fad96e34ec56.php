<?php

/* base.html.twig */
class __TwigTemplate_e33c699203791221c88d6a7f5e8d9b779f2aae0665ebbb4f0fd9719303432a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_504ac5eaba351ab3feb8ee64e010468296e6d20d877acb7f90e3c4cd150b6dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504ac5eaba351ab3feb8ee64e010468296e6d20d877acb7f90e3c4cd150b6dc0->enter($__internal_504ac5eaba351ab3feb8ee64e010468296e6d20d877acb7f90e3c4cd150b6dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_69f3bcd2d4506f1573920aeb9aec6d0aee2a3a7b549a23c811f4bc4ccb99fc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f3bcd2d4506f1573920aeb9aec6d0aee2a3a7b549a23c811f4bc4ccb99fc0e->enter($__internal_69f3bcd2d4506f1573920aeb9aec6d0aee2a3a7b549a23c811f4bc4ccb99fc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "
        <div class=\"container body-container\">
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </div>

        ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
        ";
        // line 147
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_504ac5eaba351ab3feb8ee64e010468296e6d20d877acb7f90e3c4cd150b6dc0->leave($__internal_504ac5eaba351ab3feb8ee64e010468296e6d20d877acb7f90e3c4cd150b6dc0_prof);

        
        $__internal_69f3bcd2d4506f1573920aeb9aec6d0aee2a3a7b549a23c811f4bc4ccb99fc0e->leave($__internal_69f3bcd2d4506f1573920aeb9aec6d0aee2a3a7b549a23c811f4bc4ccb99fc0e_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fe4a4a463a77ab13a1b8cd2fc272ec0e6f20bf2e0c088965d607e9b0969918a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe4a4a463a77ab13a1b8cd2fc272ec0e6f20bf2e0c088965d607e9b0969918a->enter($__internal_3fe4a4a463a77ab13a1b8cd2fc272ec0e6f20bf2e0c088965d607e9b0969918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f427fc9ee0f3a4deae2deec31eedb82e63724736275e14e2f96139720f9f32e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f427fc9ee0f3a4deae2deec31eedb82e63724736275e14e2f96139720f9f32e->enter($__internal_2f427fc9ee0f3a4deae2deec31eedb82e63724736275e14e2f96139720f9f32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_2f427fc9ee0f3a4deae2deec31eedb82e63724736275e14e2f96139720f9f32e->leave($__internal_2f427fc9ee0f3a4deae2deec31eedb82e63724736275e14e2f96139720f9f32e_prof);

        
        $__internal_3fe4a4a463a77ab13a1b8cd2fc272ec0e6f20bf2e0c088965d607e9b0969918a->leave($__internal_3fe4a4a463a77ab13a1b8cd2fc272ec0e6f20bf2e0c088965d607e9b0969918a_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47626df6f4222bd56adcf477391fdb3cfb93de300e8cdb1b4963d8ef09c55246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47626df6f4222bd56adcf477391fdb3cfb93de300e8cdb1b4963d8ef09c55246->enter($__internal_47626df6f4222bd56adcf477391fdb3cfb93de300e8cdb1b4963d8ef09c55246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_249d860efa341058b7ec2e0c18ef213e4c416618cb29d2a6fbe1618732374624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249d860efa341058b7ec2e0c18ef213e4c416618cb29d2a6fbe1618732374624->enter($__internal_249d860efa341058b7ec2e0c18ef213e4c416618cb29d2a6fbe1618732374624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_249d860efa341058b7ec2e0c18ef213e4c416618cb29d2a6fbe1618732374624->leave($__internal_249d860efa341058b7ec2e0c18ef213e4c416618cb29d2a6fbe1618732374624_prof);

        
        $__internal_47626df6f4222bd56adcf477391fdb3cfb93de300e8cdb1b4963d8ef09c55246->leave($__internal_47626df6f4222bd56adcf477391fdb3cfb93de300e8cdb1b4963d8ef09c55246_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b0cfb47d358dfc0884bd91d69e3e53ef8e46186d00a336746af8e52b587c81ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0cfb47d358dfc0884bd91d69e3e53ef8e46186d00a336746af8e52b587c81ea->enter($__internal_b0cfb47d358dfc0884bd91d69e3e53ef8e46186d00a336746af8e52b587c81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_9e64b76584e8c164875cd63c43fb9535b46abbd6202401be01a7d59159d8308d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e64b76584e8c164875cd63c43fb9535b46abbd6202401be01a7d59159d8308d->enter($__internal_9e64b76584e8c164875cd63c43fb9535b46abbd6202401be01a7d59159d8308d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_9e64b76584e8c164875cd63c43fb9535b46abbd6202401be01a7d59159d8308d->leave($__internal_9e64b76584e8c164875cd63c43fb9535b46abbd6202401be01a7d59159d8308d_prof);

        
        $__internal_b0cfb47d358dfc0884bd91d69e3e53ef8e46186d00a336746af8e52b587c81ea->leave($__internal_b0cfb47d358dfc0884bd91d69e3e53ef8e46186d00a336746af8e52b587c81ea_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_dcb0608e4b5e48165cefe8259ec2461be8ccf084991edbd02194911399228340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb0608e4b5e48165cefe8259ec2461be8ccf084991edbd02194911399228340->enter($__internal_dcb0608e4b5e48165cefe8259ec2461be8ccf084991edbd02194911399228340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3b95953ec7166f03ee5007ca8a4332a281e3c76bec15593aae86933f93c17e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b95953ec7166f03ee5007ca8a4332a281e3c76bec15593aae86933f93c17e8e->enter($__internal_3b95953ec7166f03ee5007ca8a4332a281e3c76bec15593aae86933f93c17e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 43
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 58
        echo "
                                ";
        // line 59
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "                                    <li>
                                        <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 66
        echo "
                                <li>
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_search");
        echo "\"> <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.search"), "html", null, true);
        echo "</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 79
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_3b95953ec7166f03ee5007ca8a4332a281e3c76bec15593aae86933f93c17e8e->leave($__internal_3b95953ec7166f03ee5007ca8a4332a281e3c76bec15593aae86933f93c17e8e_prof);

        
        $__internal_dcb0608e4b5e48165cefe8259ec2461be8ccf084991edbd02194911399228340->leave($__internal_dcb0608e4b5e48165cefe8259ec2461be8ccf084991edbd02194911399228340_prof);

    }

    // line 43
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_086d4f93628cc82b34d57e0627d3f5394e766a4c295c8de45e646bcefb77ee26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086d4f93628cc82b34d57e0627d3f5394e766a4c295c8de45e646bcefb77ee26->enter($__internal_086d4f93628cc82b34d57e0627d3f5394e766a4c295c8de45e646bcefb77ee26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_dd228f71f4c0fb9204c036b17a95073e683dfaf04a4a6fda39a9de2f5854a429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd228f71f4c0fb9204c036b17a95073e683dfaf04a4a6fda39a9de2f5854a429->enter($__internal_dd228f71f4c0fb9204c036b17a95073e683dfaf04a4a6fda39a9de2f5854a429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 44
        echo "                                    <li>
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                                        <li>
                                            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 57
        echo "                                ";
        
        $__internal_dd228f71f4c0fb9204c036b17a95073e683dfaf04a4a6fda39a9de2f5854a429->leave($__internal_dd228f71f4c0fb9204c036b17a95073e683dfaf04a4a6fda39a9de2f5854a429_prof);

        
        $__internal_086d4f93628cc82b34d57e0627d3f5394e766a4c295c8de45e646bcefb77ee26->leave($__internal_086d4f93628cc82b34d57e0627d3f5394e766a4c295c8de45e646bcefb77ee26_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_6857b529ea650e4a574988a79167e9f9cf34b431bc5fc13fb5133cd53202fa3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6857b529ea650e4a574988a79167e9f9cf34b431bc5fc13fb5133cd53202fa3d->enter($__internal_6857b529ea650e4a574988a79167e9f9cf34b431bc5fc13fb5133cd53202fa3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2a908c7dc1dcd034fb216befca1ffd1f4caaae5a105775630869560d7bedde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a908c7dc1dcd034fb216befca1ffd1f4caaae5a105775630869560d7bedde8->enter($__internal_c2a908c7dc1dcd034fb216befca1ffd1f4caaae5a105775630869560d7bedde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 94
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 107
        echo "                    </div>
                </div>
            ";
        
        $__internal_c2a908c7dc1dcd034fb216befca1ffd1f4caaae5a105775630869560d7bedde8->leave($__internal_c2a908c7dc1dcd034fb216befca1ffd1f4caaae5a105775630869560d7bedde8_prof);

        
        $__internal_6857b529ea650e4a574988a79167e9f9cf34b431bc5fc13fb5133cd53202fa3d->leave($__internal_6857b529ea650e4a574988a79167e9f9cf34b431bc5fc13fb5133cd53202fa3d_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_53af81d2342889839fb8eed28c2f3888d1f3194a9a641dd6a1c075ba08420571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53af81d2342889839fb8eed28c2f3888d1f3194a9a641dd6a1c075ba08420571->enter($__internal_53af81d2342889839fb8eed28c2f3888d1f3194a9a641dd6a1c075ba08420571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1a2bd81d1031d9c4892cc32f215dfe1466672de306371c95b91c4f682cdfec2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2bd81d1031d9c4892cc32f215dfe1466672de306371c95b91c4f682cdfec2c->enter($__internal_1a2bd81d1031d9c4892cc32f215dfe1466672de306371c95b91c4f682cdfec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1a2bd81d1031d9c4892cc32f215dfe1466672de306371c95b91c4f682cdfec2c->leave($__internal_1a2bd81d1031d9c4892cc32f215dfe1466672de306371c95b91c4f682cdfec2c_prof);

        
        $__internal_53af81d2342889839fb8eed28c2f3888d1f3194a9a641dd6a1c075ba08420571->leave($__internal_53af81d2342889839fb8eed28c2f3888d1f3194a9a641dd6a1c075ba08420571_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ed5fada83c2974c9662665b1942f32dc8d63a908386512ea6d94a7eb32d80a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5fada83c2974c9662665b1942f32dc8d63a908386512ea6d94a7eb32d80a77->enter($__internal_ed5fada83c2974c9662665b1942f32dc8d63a908386512ea6d94a7eb32d80a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_1011b67bc1a04e9e94e889ca08c66b13878a16f1375d02b1bf52b359edc31fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1011b67bc1a04e9e94e889ca08c66b13878a16f1375d02b1bf52b359edc31fda->enter($__internal_1011b67bc1a04e9e94e889ca08c66b13878a16f1375d02b1bf52b359edc31fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 104
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 105
        echo "
                        ";
        
        $__internal_1011b67bc1a04e9e94e889ca08c66b13878a16f1375d02b1bf52b359edc31fda->leave($__internal_1011b67bc1a04e9e94e889ca08c66b13878a16f1375d02b1bf52b359edc31fda_prof);

        
        $__internal_ed5fada83c2974c9662665b1942f32dc8d63a908386512ea6d94a7eb32d80a77->leave($__internal_ed5fada83c2974c9662665b1942f32dc8d63a908386512ea6d94a7eb32d80a77_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1fb879fb3b2c4a173908178c62cb5a57a8c423887cf57ef5ca68f89bfd741a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb879fb3b2c4a173908178c62cb5a57a8c423887cf57ef5ca68f89bfd741a7e->enter($__internal_1fb879fb3b2c4a173908178c62cb5a57a8c423887cf57ef5ca68f89bfd741a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_19796dd8230b4be29e4785af5d2b86c061ac2f38bb8c0c59283d19024895e046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19796dd8230b4be29e4785af5d2b86c061ac2f38bb8c0c59283d19024895e046->enter($__internal_19796dd8230b4be29e4785af5d2b86c061ac2f38bb8c0c59283d19024895e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_19796dd8230b4be29e4785af5d2b86c061ac2f38bb8c0c59283d19024895e046->leave($__internal_19796dd8230b4be29e4785af5d2b86c061ac2f38bb8c0c59283d19024895e046_prof);

        
        $__internal_1fb879fb3b2c4a173908178c62cb5a57a8c423887cf57ef5ca68f89bfd741a7e->leave($__internal_1fb879fb3b2c4a173908178c62cb5a57a8c423887cf57ef5ca68f89bfd741a7e_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6f7df963b5ccc1a95d8580bd6aed2865b32fdc480376a4e8c0a8a07b3ed308d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f7df963b5ccc1a95d8580bd6aed2865b32fdc480376a4e8c0a8a07b3ed308d->enter($__internal_a6f7df963b5ccc1a95d8580bd6aed2865b32fdc480376a4e8c0a8a07b3ed308d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e64aca8d8ab12ecead121b936c87b47e24591e20e973e947f3595e8083135d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64aca8d8ab12ecead121b936c87b47e24591e20e973e947f3595e8083135d21->enter($__internal_e64aca8d8ab12ecead121b936c87b47e24591e20e973e947f3595e8083135d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/common.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e64aca8d8ab12ecead121b936c87b47e24591e20e973e947f3595e8083135d21->leave($__internal_e64aca8d8ab12ecead121b936c87b47e24591e20e973e947f3595e8083135d21_prof);

        
        $__internal_a6f7df963b5ccc1a95d8580bd6aed2865b32fdc480376a4e8c0a8a07b3ed308d->leave($__internal_a6f7df963b5ccc1a95d8580bd6aed2865b32fdc480376a4e8c0a8a07b3ed308d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 141,  474 => 140,  469 => 139,  460 => 138,  431 => 118,  427 => 117,  421 => 113,  412 => 112,  401 => 105,  399 => 104,  397 => 101,  388 => 100,  371 => 96,  359 => 107,  357 => 100,  352 => 97,  350 => 96,  345 => 94,  341 => 92,  332 => 91,  322 => 57,  315 => 53,  311 => 52,  308 => 51,  306 => 50,  299 => 46,  295 => 45,  292 => 44,  283 => 43,  266 => 81,  249 => 79,  245 => 78,  239 => 75,  227 => 68,  223 => 66,  216 => 62,  212 => 61,  209 => 60,  207 => 59,  204 => 58,  202 => 43,  190 => 34,  180 => 27,  174 => 23,  165 => 22,  148 => 20,  135 => 14,  126 => 13,  108 => 11,  93 => 147,  90 => 143,  88 => 138,  85 => 137,  83 => 112,  79 => 110,  77 => 91,  73 => 89,  71 => 22,  66 => 20,  60 => 17,  57 => 16,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li>
                                    <a href=\"{{ path('blog_search') }}\"> <i class=\"fa fa-search\"></i> {{ 'menu.search'|trans }}</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{% else %}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('build/manifest.js') }}\"></script>
            <script src=\"{{ asset('build/js/common.js') }}\"></script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "/home/migue/Documents/dev/Proyecto/symfony-demo/app/Resources/views/base.html.twig");
    }
}
