<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_acbd67d0f8d06dc034bc1db1eb99f1565f7cf75ddffab8aaa901af90ab850f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_365f646dd010d4b411cb4312163e5aaf182be1ffdc36da0c56f9c4eed1d406f6 = $this->env->getExtension("native_profiler");
        $__internal_365f646dd010d4b411cb4312163e5aaf182be1ffdc36da0c56f9c4eed1d406f6->enter($__internal_365f646dd010d4b411cb4312163e5aaf182be1ffdc36da0c56f9c4eed1d406f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365f646dd010d4b411cb4312163e5aaf182be1ffdc36da0c56f9c4eed1d406f6->leave($__internal_365f646dd010d4b411cb4312163e5aaf182be1ffdc36da0c56f9c4eed1d406f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_827fa8118457c19a9a2b16b5e861538ee3776822d81806d10213601b25ced4fa = $this->env->getExtension("native_profiler");
        $__internal_827fa8118457c19a9a2b16b5e861538ee3776822d81806d10213601b25ced4fa->enter($__internal_827fa8118457c19a9a2b16b5e861538ee3776822d81806d10213601b25ced4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_827fa8118457c19a9a2b16b5e861538ee3776822d81806d10213601b25ced4fa->leave($__internal_827fa8118457c19a9a2b16b5e861538ee3776822d81806d10213601b25ced4fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1baa4cde1f9bf3354458e36a7d911f45efec9bfc7ceb0f0858645574919abf00 = $this->env->getExtension("native_profiler");
        $__internal_1baa4cde1f9bf3354458e36a7d911f45efec9bfc7ceb0f0858645574919abf00->enter($__internal_1baa4cde1f9bf3354458e36a7d911f45efec9bfc7ceb0f0858645574919abf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1baa4cde1f9bf3354458e36a7d911f45efec9bfc7ceb0f0858645574919abf00->leave($__internal_1baa4cde1f9bf3354458e36a7d911f45efec9bfc7ceb0f0858645574919abf00_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7c55ab835ebaa7f62c19b777d52a6d9cd22f59e1c85ebf16b2f6463667d0431 = $this->env->getExtension("native_profiler");
        $__internal_a7c55ab835ebaa7f62c19b777d52a6d9cd22f59e1c85ebf16b2f6463667d0431->enter($__internal_a7c55ab835ebaa7f62c19b777d52a6d9cd22f59e1c85ebf16b2f6463667d0431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a7c55ab835ebaa7f62c19b777d52a6d9cd22f59e1c85ebf16b2f6463667d0431->leave($__internal_a7c55ab835ebaa7f62c19b777d52a6d9cd22f59e1c85ebf16b2f6463667d0431_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
