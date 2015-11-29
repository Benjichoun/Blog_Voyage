<?php

/* BatistaBadelonBlogBundle:Default:login.html.twig */
class __TwigTemplate_c7e758a3eccbed6d41347c1b3de2b6fc37e35c878326aa19a6101fcf5e5b46ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BatistaBadelonBlogBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3915fdc3dee95fedcf55f7529aef76326cad507f4b0b8307d0904565dba4ecba = $this->env->getExtension("native_profiler");
        $__internal_3915fdc3dee95fedcf55f7529aef76326cad507f4b0b8307d0904565dba4ecba->enter($__internal_3915fdc3dee95fedcf55f7529aef76326cad507f4b0b8307d0904565dba4ecba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatistaBadelonBlogBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3915fdc3dee95fedcf55f7529aef76326cad507f4b0b8307d0904565dba4ecba->leave($__internal_3915fdc3dee95fedcf55f7529aef76326cad507f4b0b8307d0904565dba4ecba_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_01c808c9b340b3b710478cf8073b6ed8380840bb1b7092231af2d9307311c3e1 = $this->env->getExtension("native_profiler");
        $__internal_01c808c9b340b3b710478cf8073b6ed8380840bb1b7092231af2d9307311c3e1->enter($__internal_01c808c9b340b3b710478cf8073b6ed8380840bb1b7092231af2d9307311c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "<section class=\"col-sm-10 col-md-12\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <div class=\"panel panel-info\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title text-center\">Connexion Administrateur</h3>
        </div>

        <div class=\"panel-body\">

        ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 16
        echo "
<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Pseudo:</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe:</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" />

    <button class=\"form-control btn btn-primary btn-sm\" type=\"submit\">Conexion</button>
</form>

        </div>
    </div>
";
        
        $__internal_01c808c9b340b3b710478cf8073b6ed8380840bb1b7092231af2d9307311c3e1->leave($__internal_01c808c9b340b3b710478cf8073b6ed8380840bb1b7092231af2d9307311c3e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebc90d9d519139cb5841ccb1b6eccdc9385a57532e6fab3176b1b45f1b39edf6 = $this->env->getExtension("native_profiler");
        $__internal_ebc90d9d519139cb5841ccb1b6eccdc9385a57532e6fab3176b1b45f1b39edf6->enter($__internal_ebc90d9d519139cb5841ccb1b6eccdc9385a57532e6fab3176b1b45f1b39edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_ebc90d9d519139cb5841ccb1b6eccdc9385a57532e6fab3176b1b45f1b39edf6->leave($__internal_ebc90d9d519139cb5841ccb1b6eccdc9385a57532e6fab3176b1b45f1b39edf6_prof);

    }

    public function getTemplateName()
    {
        return "BatistaBadelonBlogBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 5,  71 => 19,  66 => 17,  63 => 16,  57 => 14,  55 => 13,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block container %}*/
/* <section class="col-sm-10 col-md-12">*/
/*     <title>{% block title %}Connexion{% endblock %}</title>*/
/*     <div class="panel panel-info">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title text-center">Connexion Administrateur</h3>*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/* */
/*         {% if error %}*/
/*     <div>{{ error.message }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Pseudo:</label>*/
/*     <input class="form-control" type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Mot de passe:</label>*/
/*     <input class="form-control" type="password" id="password" name="_password" />*/
/* */
/*     <button class="form-control btn btn-primary btn-sm" type="submit">Conexion</button>*/
/* </form>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
