<?php

/* base.html.twig */
class __TwigTemplate_b170a1adf17186c0d5877c72772663a0ff4fe155fffdb4717e2990bc70509ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'article' => array($this, 'block_article'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            .col-md-8, .col-sm-10 { line-height: 200px; }
            .col-md-12 { line-height: 80px; }
        </style>
    </head>
    <body>
    <div class=\"container2\">

        <header class=\"row\">
            <img class=\"img-responsive\" src=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/BlogBundle/images/IMG_1935.jpeg"), "html", null, true);
        echo " width=150% height=100% alt=\"test\">

        </header>
        </div>

    <nav class=\"navbar navbar-inverse\">
        <div class=\"container-fluid\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"> <a href=\"#\">Accueil</a> </li>

                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" href=\"#\">Récits de voyage<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Europe</a></li>
                            <li><a href=\"#\">Océanie</a></li>
                            <li><a href=\"#\">Asie</a></li>
                            <li><a href=\"#\">Amérique du Nord</a></li>
                            <li><a href=\"#\">Amérique du Sud</a></li>
                            <li><a href=\"#\">Afrique</a></li>
                        </ul>
                    </li>

                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" href=\"#\">Conseils<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Matériel</a></li>
                            <li><a href=\"#\">Visa</a></li>
                            <li><a href=\"#\">Asie</a></li>
                            <li><a href=\"#\">Questions</a></li>
                            <li><a href=\"#\">Contact</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" href=\"#\">Manipulation<b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Modifier</a></li>
                            <li><a href=\"#\">Ajouter</a></li>
                            <li><a href=\"#\">Supprimer</a></li>
                        </ul>
                    </li>
                </ul>
                <form class=\"navbar-form navbar-right inline-form\">
                    <div class=\"form-group\">
                        <input type=\"search\" class=\"input-sm form-control\" placeholder=\"Recherche\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-eye-open\"></span> Chercher</button>
                    </div>
                </form>
            </div>
        </nav>


        <div class=\"row\">

            <div class=\"col-sm-2\">
                <div class=\"row\">
                    <aside class=\"col-md-12\">

                    </aside>
                    <aside class=\"col-md-12\">

                    </aside>
                </div>
            </div>

            <section class=\"col-sm-10 col-md-8\">
            ";
        // line 86
        $this->displayBlock('article', $context, $blocks);
        // line 88
        echo "            </section>


            <div class=\"clearfix visible-sm-block\"></div>

            <div class=\"col-md-2\">
                <div class=\"row\">
                    <aside class=\"col-md-12\">

                    </aside>
                    <aside class=\"col-md-12\">

                    </aside>
                </div>
            </div>

        </div>

        <footer class=\"row\">
            <div class=\"col-md-12\">
                Benji-Mathilde Copyright - Tous droits réservés © 2015-2016
            </div>
        </footer>

        </div>

        ";
        // line 114
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"bootstrap/css/bootstrap.css\" rel=\"stylesheet\">
            <link href=\"bootstrap/css/tuto.css\" rel=\"stylesheet\">
            <script src=\"bootstrap/js/jquery.js\"></script>
            <script src=\"bootstrap/js/bootstrap.min.js\"></script>";
    }

    // line 86
    public function block_article($context, array $blocks = array())
    {
        // line 87
        echo "        ";
    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  178 => 114,  174 => 87,  171 => 86,  164 => 7,  161 => 6,  155 => 5,  149 => 115,  147 => 114,  119 => 88,  117 => 86,  49 => 21,  35 => 11,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="bootstrap/css/bootstrap.css" rel="stylesheet">*/
/*             <link href="bootstrap/css/tuto.css" rel="stylesheet">*/
/*             <script src="bootstrap/js/jquery.js"></script>*/
/*             <script src="bootstrap/js/bootstrap.min.js"></script>{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style type="text/css">*/
/*             .col-md-8, .col-sm-10 { line-height: 200px; }*/
/*             .col-md-12 { line-height: 80px; }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*     <div class="container2">*/
/* */
/*         <header class="row">*/
/*             <img class="img-responsive" src={{ asset('bundles/BlogBundle/images/IMG_1935.jpeg')}} width=150% height=100% alt="test">*/
/* */
/*         </header>*/
/*         </div>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*         <div class="container-fluid">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"> <a href="#">Accueil</a> </li>*/
/* */
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" href="#">Récits de voyage<b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Europe</a></li>*/
/*                             <li><a href="#">Océanie</a></li>*/
/*                             <li><a href="#">Asie</a></li>*/
/*                             <li><a href="#">Amérique du Nord</a></li>*/
/*                             <li><a href="#">Amérique du Sud</a></li>*/
/*                             <li><a href="#">Afrique</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" href="#">Conseils<b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Matériel</a></li>*/
/*                             <li><a href="#">Visa</a></li>*/
/*                             <li><a href="#">Asie</a></li>*/
/*                             <li><a href="#">Questions</a></li>*/
/*                             <li><a href="#">Contact</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="dropdown">*/
/*                         <a data-toggle="dropdown" href="#">Manipulation<b class="caret"></b></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Modifier</a></li>*/
/*                             <li><a href="#">Ajouter</a></li>*/
/*                             <li><a href="#">Supprimer</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <form class="navbar-form navbar-right inline-form">*/
/*                     <div class="form-group">*/
/*                         <input type="search" class="input-sm form-control" placeholder="Recherche">*/
/*                         <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </nav>*/
/* */
/* */
/*         <div class="row">*/
/* */
/*             <div class="col-sm-2">*/
/*                 <div class="row">*/
/*                     <aside class="col-md-12">*/
/* */
/*                     </aside>*/
/*                     <aside class="col-md-12">*/
/* */
/*                     </aside>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <section class="col-sm-10 col-md-8">*/
/*             {% block article %}*/
/*         {% endblock %}*/
/*             </section>*/
/* */
/* */
/*             <div class="clearfix visible-sm-block"></div>*/
/* */
/*             <div class="col-md-2">*/
/*                 <div class="row">*/
/*                     <aside class="col-md-12">*/
/* */
/*                     </aside>*/
/*                     <aside class="col-md-12">*/
/* */
/*                     </aside>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         <footer class="row">*/
/*             <div class="col-md-12">*/
/*                 Benji-Mathilde Copyright - Tous droits réservés © 2015-2016*/
/*             </div>*/
/*         </footer>*/
/* */
/*         </div>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
