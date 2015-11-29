<?php

/* ::base.html.twig */
class __TwigTemplate_dce70f10f2b6c8c70b05d41cad240be1849e2918e80771899cc75301d23745d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c96f425230551ba6185f6cf60b48ffbf67cc1c1ba82e479670bf3dd71a1de79 = $this->env->getExtension("native_profiler");
        $__internal_8c96f425230551ba6185f6cf60b48ffbf67cc1c1ba82e479670bf3dd71a1de79->enter($__internal_8c96f425230551ba6185f6cf60b48ffbf67cc1c1ba82e479670bf3dd71a1de79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>




    <head>

        <meta charset=\"UTF-8\" />

        <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo "
    </head>




    <body bgcolor=\"#929292\">";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 202
        echo "</body>

</html>
";
        
        $__internal_8c96f425230551ba6185f6cf60b48ffbf67cc1c1ba82e479670bf3dd71a1de79->leave($__internal_8c96f425230551ba6185f6cf60b48ffbf67cc1c1ba82e479670bf3dd71a1de79_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_de96a09612a6e2ac2a305f6b279b0491a0ca45408e6c1970bd20eb537c51b868 = $this->env->getExtension("native_profiler");
        $__internal_de96a09612a6e2ac2a305f6b279b0491a0ca45408e6c1970bd20eb537c51b868->enter($__internal_de96a09612a6e2ac2a305f6b279b0491a0ca45408e6c1970bd20eb537c51b868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_de96a09612a6e2ac2a305f6b279b0491a0ca45408e6c1970bd20eb537c51b868->leave($__internal_de96a09612a6e2ac2a305f6b279b0491a0ca45408e6c1970bd20eb537c51b868_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d0672d36181ab1b4f2e878ed553f7dd5a8c9ad6b90a3c8908730397d8a40775 = $this->env->getExtension("native_profiler");
        $__internal_8d0672d36181ab1b4f2e878ed553f7dd5a8c9ad6b90a3c8908730397d8a40775->enter($__internal_8d0672d36181ab1b4f2e878ed553f7dd5a8c9ad6b90a3c8908730397d8a40775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "            <!-- style et script utilise pour le blog -->
            <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo ">
            <script src=";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/js/jquery.isotope.js"), "html", null, true);
        echo "></script>
<style>.affix {

        z-index:10;
        top: 0;
        width: 100%;
    }

    .affix + .container-fluid {
        padding-top: 70px;
    }
    </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />




        ";
        
        $__internal_8d0672d36181ab1b4f2e878ed553f7dd5a8c9ad6b90a3c8908730397d8a40775->leave($__internal_8d0672d36181ab1b4f2e878ed553f7dd5a8c9ad6b90a3c8908730397d8a40775_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d6e798b4fd1466c6ab54483ea1c270b8f28096349663b584e6a239ffdd325fb = $this->env->getExtension("native_profiler");
        $__internal_0d6e798b4fd1466c6ab54483ea1c270b8f28096349663b584e6a239ffdd325fb->enter($__internal_0d6e798b4fd1466c6ab54483ea1c270b8f28096349663b584e6a239ffdd325fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "
        <div class=\"container2\">


            <header class=\"row\">
             <div class=\"ban\">
                <img class=\"img-responsive\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/ban.jpeg"), "html", null, true);
        echo "\" width=150% height=100% alt=\"ban\">
                    <p class=\"img-responsive bantext\">Blog de Voyage</p>
                    <p class=\"img-responsive bantext2\"><span class=\"space\"></span>par Mathilde BADELON & Benjamin BATISTA</p>
                </div>
            </header>


        <div data-spy=\"affix\" data-offset-top=\"300\">

            <nav class=\"navbar navbar-inverse\" id=\"nav\" > <!-- Debut de la bar de nav -->

                <div class=\"container\">
                    <!-- Debut des actions de la barre de navigation -->
                    <ul class=\"nav navbar-nav\">


                        <li class=\"";
        // line 66
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
            echo "active";
        }
        echo "\"> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Accueil</a> </li>

                        <li class=\"menu-item dropdown\">
                            <a data-toggle=\"dropdown\" >Choix par<b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"menu-item dropdown dropdown-submenu\"><a >Continent</a>
                                <ul class=\"dropdown-menu\">
                                <li><a id=\"continent\" href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("homepage", array("continent" => "europe"));
        echo "\">Europe</a></li>
                                <li><a id=\"continent\"  href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("homepage", array("continent" => "oceanie"));
        echo "\">Océanie</a></li>
                                <li><a id=\"continent\"  href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("homepage", array("continent" => "asie"));
        echo "\">Asie</a></li>
                                <li><a id=\"continent\"  href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("homepage", array("continent" => "amnord"));
        echo "\">Amérique du Nord</a></li>
                                <li><a id=\"continent\"  href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("homepage", array("continent" => "amsud"));
        echo "\">Amérique du Sud</a></li>
                                <li><a id=\"continent\"  href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("homepage", array("continent" => "afrique"));
        echo "\">Afrique</a></li>
                                </ul>
                                </li>
                                <li class=\"menu-item dropdown dropdown-submenu\"><a >Auteur</a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a id=\"auteur\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("homepage", array("auteur" => "benjamin"));
        echo "\">Benjamin</a></li>
                                        <li><a id=\"auteur\"  href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("homepage", array("auteur" => "mathilde"));
        echo "\">Mathilde</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class=\"";
        // line 90
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "batista_badelon_blog_carte")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("batista_badelon_blog_carte");
        echo "\">Carte</a></li>

                        ";
        // line 92
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 93
            echo "
                        <li class=\" btn-danger ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "batista_badelon_blog_ajouter")) {
                echo ":active focus";
            }
            echo "\"> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("batista_badelon_blog_ajouter");
            echo "\">Ajouter</a> </li>

                            <li class=\"welcome\">
                                ";
            // line 97
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == "Benjamin")) {
                // line 98
                echo "
                                    <img class=\"img-circle\" src=\"https://graph.facebook.com/1668541360/picture?type=small\"/>

                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 101
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()) == "Mathilde")) {
                // line 102
                echo "
                                    <img class=\"img-circle\" src=\"https://graph.facebook.com/100002226864039/picture?type=small\"/>

                                ";
            }
            // line 106
            echo "                                Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                            </li>
                        ";
        }
        // line 109
        echo "
                    </ul>
                    <!-- Fin des actions de la bar de navigation -->

                    <!-- Ajout du bouton de recherche et de conexion/deconexion -->
                    <form class=\"navbar-form navbar-right inline-form\">
                        <div class=\"form-group\">

                            <form method=\"GET\">
                            <input type=\"search\" id=search name=\"search\" class=\"input-sm form-control\" placeholder=\"Recherche\">
                            <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
                            </form>
                            ";
        // line 121
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 122
            echo "
                                <a href=\"";
            // line 123
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" role=\"button\" class=\"btn btn-danger btn-sm\"><span class=\"glyphicon glyphicon-log-out\"></span> Déconnexion</a>

                            ";
        } else {
            // line 126
            echo "
                                <a href=\"";
            // line 127
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" role=\"button\" class=\"btn btn-danger btn-sm\"><span class=\"glyphicon glyphicon-log-in\"></span> Connexion</a>

                            ";
        }
        // line 130
        echo "

                        </div>


                    </form>
                    <!-- Fin de l'ajou du bouton de recherche et de conexion/Deconexion -->

                </div>
            </nav> <!-- Fin de la bar de nav -->
            </div>





            <div class=\"row\"> <!-- Tout le contenu au centre de la page -->


                <!-- Espace pour centrer l'article -->
                <div class=\"col-sm-3\">
                    <div class=\"row\">
                        <aside class=\"col-md-12\">

                        </aside>
                        <aside class=\"col-md-12\">

                        </aside>
                    </div>
                </div>


                <!-- Article -->
                <section class=\" col-md-6\">

                    ";
        // line 165
        $this->displayBlock('container', $context, $blocks);
        // line 170
        echo "
                </section>
                <!-- Fin Article -->



            </div> <!-- Fin du contenu -->


            <!-- Pied de page avec ajout de bouton de partage Facebook et Twitter -->
            <nav class=\"footer\">
                <div class=\"container\">

                    <p class=\"pull-left\"> &copy; 2015 - BADELON Mathilde & BATISTA Benjamin</p>

                    <p class=\"pull-right\">

                        <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://projetblogdevoyage.free.fr\" data-text=\"Je partage ce site qui pourrait vous int&eacute;ressez  !\" data-via=\"Benjichoun\" data-lang=\"fr\">Tweeter</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

                        <iframe src=\"http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fprojetblogdevoyage.free.fr&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=30\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; height:20px;\" allowTransparency=\"true\"></iframe>

                    </p>

                </div>
            </nav> <!-- Fin du pied de page -->



        </div><!--Fermeture du container -->


    ";
        
        $__internal_0d6e798b4fd1466c6ab54483ea1c270b8f28096349663b584e6a239ffdd325fb->leave($__internal_0d6e798b4fd1466c6ab54483ea1c270b8f28096349663b584e6a239ffdd325fb_prof);

    }

    // line 165
    public function block_container($context, array $blocks = array())
    {
        $__internal_8dfb8bef9c3afaa9eca2bcf28d925ddcaab5cd9732a8bd097e78d793671b6941 = $this->env->getExtension("native_profiler");
        $__internal_8dfb8bef9c3afaa9eca2bcf28d925ddcaab5cd9732a8bd097e78d793671b6941->enter($__internal_8dfb8bef9c3afaa9eca2bcf28d925ddcaab5cd9732a8bd097e78d793671b6941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 166
        echo "
                        ";
        // line 167
        $this->loadTemplate("BatistaBadelonBlogBundle:Article:index.html.twig", "::base.html.twig", 167)->display($context);
        // line 168
        echo "
                    ";
        
        $__internal_8dfb8bef9c3afaa9eca2bcf28d925ddcaab5cd9732a8bd097e78d793671b6941->leave($__internal_8dfb8bef9c3afaa9eca2bcf28d925ddcaab5cd9732a8bd097e78d793671b6941_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  384 => 168,  382 => 167,  379 => 166,  373 => 165,  334 => 170,  332 => 165,  295 => 130,  289 => 127,  286 => 126,  280 => 123,  277 => 122,  275 => 121,  261 => 109,  254 => 106,  248 => 102,  246 => 101,  241 => 98,  239 => 97,  229 => 94,  226 => 93,  224 => 92,  215 => 90,  206 => 84,  202 => 83,  194 => 78,  190 => 77,  186 => 76,  182 => 75,  178 => 74,  174 => 73,  160 => 66,  141 => 50,  133 => 44,  127 => 43,  114 => 31,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  84 => 15,  78 => 14,  66 => 12,  56 => 202,  54 => 43,  46 => 37,  44 => 14,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/* */
/* */
/* */
/*     <head>*/
/* */
/*         <meta charset="UTF-8" />*/
/* */
/*         <title>{% block title %}Accueil{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <!-- style et script utilise pour le blog -->*/
/*             <link rel="stylesheet" href={{ asset('bootstrap/css/bootstrap.css') }}>*/
/*             <script src={{asset('bootstrap/js/jquery.js')}}></script>*/
/*             <script src={{asset('bootstrap/js/bootstrap.min.js')}}></script>*/
/*             <script src={{asset('bootstrap/js/jquery.isotope.js')}}></script>*/
/* <style>.affix {*/
/* */
/*         z-index:10;*/
/*         top: 0;*/
/*         width: 100%;*/
/*     }*/
/* */
/*     .affix + .container-fluid {*/
/*         padding-top: 70px;*/
/*     }*/
/*     </style>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />*/
/* */
/* */
/* */
/* */
/*         {% endblock %}*/
/* */
/*     </head>*/
/* */
/* */
/* */
/* */
/*     <body bgcolor="#929292">{% block body %}*/
/* */
/*         <div class="container2">*/
/* */
/* */
/*             <header class="row">*/
/*              <div class="ban">*/
/*                 <img class="img-responsive" src="{{ asset('img/ban.jpeg')}}" width=150% height=100% alt="ban">*/
/*                     <p class="img-responsive bantext">Blog de Voyage</p>*/
/*                     <p class="img-responsive bantext2"><span class="space"></span>par Mathilde BADELON & Benjamin BATISTA</p>*/
/*                 </div>*/
/*             </header>*/
/* */
/* */
/*         <div data-spy="affix" data-offset-top="300">*/
/* */
/*             <nav class="navbar navbar-inverse" id="nav" > <!-- Debut de la bar de nav -->*/
/* */
/*                 <div class="container">*/
/*                     <!-- Debut des actions de la barre de navigation -->*/
/*                     <ul class="nav navbar-nav">*/
/* */
/* */
/*                         <li class="{% if app.request.attributes.get('_route') == 'homepage' %}active{% endif %}"> <a href="{{path('homepage')}}">Accueil</a> </li>*/
/* */
/*                         <li class="menu-item dropdown">*/
/*                             <a data-toggle="dropdown" >Choix par<b class="caret"></b></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li class="menu-item dropdown dropdown-submenu"><a >Continent</a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                 <li><a id="continent" href="{{ path('homepage',{'continent':"europe"}) }}">Europe</a></li>*/
/*                                 <li><a id="continent"  href="{{ path('homepage',{'continent':"oceanie"}) }}">Océanie</a></li>*/
/*                                 <li><a id="continent"  href="{{ path('homepage',{'continent':"asie"}) }}">Asie</a></li>*/
/*                                 <li><a id="continent"  href="{{ path('homepage',{'continent':"amnord"}) }}">Amérique du Nord</a></li>*/
/*                                 <li><a id="continent"  href="{{ path('homepage',{'continent':"amsud"}) }}">Amérique du Sud</a></li>*/
/*                                 <li><a id="continent"  href="{{ path('homepage',{'continent':"afrique"}) }}">Afrique</a></li>*/
/*                                 </ul>*/
/*                                 </li>*/
/*                                 <li class="menu-item dropdown dropdown-submenu"><a >Auteur</a>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a id="auteur" href="{{ path('homepage',{'auteur':"benjamin"}) }}">Benjamin</a></li>*/
/*                                         <li><a id="auteur"  href="{{ path('homepage',{'auteur':"mathilde"}) }}">Mathilde</a></li>*/
/*                                     </ul>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="{% if app.request.attributes.get('_route') == 'batista_badelon_blog_carte' %}active{% endif %}"><a href="{{ path('batista_badelon_blog_carte') }}">Carte</a></li>*/
/* */
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*                         <li class=" btn-danger {% if app.request.attributes.get('_route') == 'batista_badelon_blog_ajouter' %}:active focus{% endif %}"> <a href="{{path('batista_badelon_blog_ajouter')}}">Ajouter</a> </li>*/
/* */
/*                             <li class="welcome">*/
/*                                 {% if  app.user.username  == "Benjamin" %}*/
/* */
/*                                     <img class="img-circle" src="https://graph.facebook.com/1668541360/picture?type=small"/>*/
/* */
/*                                 {% elseif app.user.username == "Mathilde" %}*/
/* */
/*                                     <img class="img-circle" src="https://graph.facebook.com/100002226864039/picture?type=small"/>*/
/* */
/*                                 {% endif %}*/
/*                                 Bienvenue {{app.user.username}}*/
/*                             </li>*/
/*                         {% endif %}*/
/* */
/*                     </ul>*/
/*                     <!-- Fin des actions de la bar de navigation -->*/
/* */
/*                     <!-- Ajout du bouton de recherche et de conexion/deconexion -->*/
/*                     <form class="navbar-form navbar-right inline-form">*/
/*                         <div class="form-group">*/
/* */
/*                             <form method="GET">*/
/*                             <input type="search" id=search name="search" class="input-sm form-control" placeholder="Recherche">*/
/*                             <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>*/
/*                             </form>*/
/*                             {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*                                 <a href="{{ path('logout') }}" role="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a>*/
/* */
/*                             {% else %}*/
/* */
/*                                 <a href="{{ path('login') }}" role="button" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-log-in"></span> Connexion</a>*/
/* */
/*                             {% endif %}*/
/* */
/* */
/*                         </div>*/
/* */
/* */
/*                     </form>*/
/*                     <!-- Fin de l'ajou du bouton de recherche et de conexion/Deconexion -->*/
/* */
/*                 </div>*/
/*             </nav> <!-- Fin de la bar de nav -->*/
/*             </div>*/
/* */
/* */
/* */
/* */
/* */
/*             <div class="row"> <!-- Tout le contenu au centre de la page -->*/
/* */
/* */
/*                 <!-- Espace pour centrer l'article -->*/
/*                 <div class="col-sm-3">*/
/*                     <div class="row">*/
/*                         <aside class="col-md-12">*/
/* */
/*                         </aside>*/
/*                         <aside class="col-md-12">*/
/* */
/*                         </aside>*/
/*                     </div>*/
/*                 </div>*/
/* */
/* */
/*                 <!-- Article -->*/
/*                 <section class=" col-md-6">*/
/* */
/*                     {% block container %}*/
/* */
/*                         {% include "BatistaBadelonBlogBundle:Article:index.html.twig" %}*/
/* */
/*                     {% endblock %}*/
/* */
/*                 </section>*/
/*                 <!-- Fin Article -->*/
/* */
/* */
/* */
/*             </div> <!-- Fin du contenu -->*/
/* */
/* */
/*             <!-- Pied de page avec ajout de bouton de partage Facebook et Twitter -->*/
/*             <nav class="footer">*/
/*                 <div class="container">*/
/* */
/*                     <p class="pull-left"> &copy; 2015 - BADELON Mathilde & BATISTA Benjamin</p>*/
/* */
/*                     <p class="pull-right">*/
/* */
/*                         <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://projetblogdevoyage.free.fr" data-text="Je partage ce site qui pourrait vous int&eacute;ressez  !" data-via="Benjichoun" data-lang="fr">Tweeter</a>*/
/*                         <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>*/
/* */
/*                         <iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fprojetblogdevoyage.free.fr&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=30" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:20px;" allowTransparency="true"></iframe>*/
/* */
/*                     </p>*/
/* */
/*                 </div>*/
/*             </nav> <!-- Fin du pied de page -->*/
/* */
/* */
/* */
/*         </div><!--Fermeture du container -->*/
/* */
/* */
/*     {% endblock %}</body>*/
/* */
/* </html>*/
/* */
