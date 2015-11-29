<?php

/* BatistaBadelonBlogBundle:Article:index.html.twig */
class __TwigTemplate_a4a4a888b7a195b5f63f69faacec0afe0365918ee6b4ac53eabed749fe4f687c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1847320dd4623878eb40997e14dd1b9fd7ad35d374ff2ff7ed532d56f1d5242e = $this->env->getExtension("native_profiler");
        $__internal_1847320dd4623878eb40997e14dd1b9fd7ad35d374ff2ff7ed532d56f1d5242e->enter($__internal_1847320dd4623878eb40997e14dd1b9fd7ad35d374ff2ff7ed532d56f1d5242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatistaBadelonBlogBundle:Article:index.html.twig"));

        // line 1
        echo "
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["AllArticle"]) ? $context["AllArticle"] : $this->getContext($context, "AllArticle")), true));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Article"]) {
            // line 3
            echo "
    ";
            // line 4
            $this->displayBlock('container', $context, $blocks);
            // line 109
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1847320dd4623878eb40997e14dd1b9fd7ad35d374ff2ff7ed532d56f1d5242e->leave($__internal_1847320dd4623878eb40997e14dd1b9fd7ad35d374ff2ff7ed532d56f1d5242e_prof);

    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        $__internal_35fbbbfa3da7b25586432425c9e4bfa7866012e4eab93aa64dfe1c98346b3cff = $this->env->getExtension("native_profiler");
        $__internal_35fbbbfa3da7b25586432425c9e4bfa7866012e4eab93aa64dfe1c98346b3cff->enter($__internal_35fbbbfa3da7b25586432425c9e4bfa7866012e4eab93aa64dfe1c98346b3cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "
        <script>
            function valider() {

              return confirm('Êtes-vous sur de vouloirs supprimer cet Article?');
            }
        </script>
    <div class=\"panel panel-info\">

         <div class=\"panel-heading\">

        <h3 class=\"panel-title text-center\"><font size=\"5\"><b></b>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getTitre", array()), "html", null, true);
        echo "</font></b> </h3>

         </div>

    <div class=\"panel-body top1\">

        ";
        // line 22
        if ( !(null === $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getImages", array()))) {
            // line 23
            echo "        <div class=\" food1\">
            <img class=\"center-block img-rounded\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/" . $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getImages", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getImages", array()), "html", null, true);
            echo "\">
        </div>
        ";
        }
        // line 27
        echo "
    </div>

         <div class=\"panel-footer\" >
             <p class=\"text-center texte\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getPhrase", array()), "html", null, true);
        echo "</p>
             <div>
                <button data-toggle=\"modal\" href=\"#info";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getID", array()), "html", null, true);
        echo "\" class=\"btn btn-primary\">Lire article</button>

             ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 36
            echo "
               <a  class=\"btn btn-danger btn-sm\" type=\"button\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batista_badelon_blog_modifier", array("id" => $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Modifier</a>

               <a  onclick=\"return valider();\" class=\"btn btn-danger btn-sm\" type=\"button\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("batista_badelon_blog_formulairesupp", array("id" => $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> Supprimer</a>

             ";
        }
        // line 42
        echo "

             <div>
                        <p class=\"text-right auteur\">

                            ";
        // line 47
        if (($this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getAuteur", array()) == "Benjamin")) {
            // line 48
            echo "
                                <a href=\"https://www.facebook.com/Benjichoun\" target=\"_blank\"><img class=\"img-circle\" src=\"https://graph.facebook.com/1668541360/picture?type=small\"/></a>

                            ";
        } elseif (($this->getAttribute(        // line 51
(isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getAuteur", array()) == "Mathilde")) {
            // line 52
            echo "
                                <a href=\"https://www.facebook.com/mathilde.badelon\" target=\"_blank\"><img class=\"img-circle\" src=\"https://graph.facebook.com/100002226864039/picture?type=small\"/></a>

                        ";
        }
        // line 56
        echo "
                        ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getAuteur", array()), "html", null, true);
        echo " - Posté le: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getDate", array()), "d/m/Y"), "html", null, true);
        echo "

                        </p>
                 </div>
             </div>

         </div>

                    <div class=\"modal\" id=\"info";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getId", array()), "html", null, true);
        echo "\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">

                                        <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
                                                <h4 class=\"modal-title text-center\">";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getTitre", array()), "html", null, true);
        echo "</h4>
                                        </div>

                                        <div class=\"modal-body\">

                                            ";
        // line 76
        if ( !(null === $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getImages", array()))) {
            // line 77
            echo "
                                                <img class=\"center-block img-rounded modal-title\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/" . $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getImages", array()))), "html", null, true);
            echo "\" width=\"80%\" height=\"80%\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getImages", array()), "html", null, true);
            echo "\">

                                            ";
        }
        // line 81
        echo "                                        </div>
                                        <div class=\"modal-content\">
                                              <p class=\"text-center modal-content\"> ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getTexte", array()), "html", null, true);
        echo "</p>

                                            <p class=\"modal-footer text-right\">

                                                ";
        // line 87
        if (($this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getAuteur", array()) == "Benjamin")) {
            // line 88
            echo "
                                                <a href=\"https://www.facebook.com/Benjichoun\" target=\"_blank\"><img class=\"img-circle\" src=\"https://graph.facebook.com/1668541360/picture?type=small\"/></a>

                                                ";
        } elseif (($this->getAttribute(        // line 91
(isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getAuteur", array()) == "Mathilde")) {
            // line 92
            echo "
                                                    <a href=\"https://www.facebook.com/mathilde.badelon\" target=\"_blank\"><img class=\"img-circle\" src=\"https://graph.facebook.com/100002226864039/picture?type=small\"/></a>

                                                ";
        }
        // line 96
        echo "
                                                ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getAuteur", array()), "html", null, true);
        echo " - Posté le: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["Article"]) ? $context["Article"] : $this->getContext($context, "Article")), "getDate", array()), "d/m/Y"), "html", null, true);
        echo "

                                            </p>

                                        </div>
                                </div>
                            </div>
                    </div>
    </div>


    ";
        
        $__internal_35fbbbfa3da7b25586432425c9e4bfa7866012e4eab93aa64dfe1c98346b3cff->leave($__internal_35fbbbfa3da7b25586432425c9e4bfa7866012e4eab93aa64dfe1c98346b3cff_prof);

    }

    public function getTemplateName()
    {
        return "BatistaBadelonBlogBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 97,  235 => 96,  229 => 92,  227 => 91,  222 => 88,  220 => 87,  213 => 83,  209 => 81,  201 => 78,  198 => 77,  196 => 76,  188 => 71,  179 => 65,  166 => 57,  163 => 56,  157 => 52,  155 => 51,  150 => 48,  148 => 47,  141 => 42,  135 => 39,  130 => 37,  127 => 36,  125 => 35,  120 => 33,  115 => 31,  109 => 27,  101 => 24,  98 => 23,  96 => 22,  87 => 16,  74 => 5,  68 => 4,  48 => 109,  46 => 4,  43 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/*     {% for Article in AllArticle|reverse(true) %}*/
/* */
/*     {% block container %}*/
/* */
/*         <script>*/
/*             function valider() {*/
/* */
/*               return confirm('Êtes-vous sur de vouloirs supprimer cet Article?');*/
/*             }*/
/*         </script>*/
/*     <div class="panel panel-info">*/
/* */
/*          <div class="panel-heading">*/
/* */
/*         <h3 class="panel-title text-center"><font size="5"><b></b>{{ Article.getTitre}}</font></b> </h3>*/
/* */
/*          </div>*/
/* */
/*     <div class="panel-body top1">*/
/* */
/*         {% if Article.getImages is not null %}*/
/*         <div class=" food1">*/
/*             <img class="center-block img-rounded" src="{{asset('img/'~Article.getImages )}}" alt="{{ Article.getImages }}">*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*          <div class="panel-footer" >*/
/*              <p class="text-center texte"> {{ Article.getPhrase }}</p>*/
/*              <div>*/
/*                 <button data-toggle="modal" href="#info{{ Article.getID }}" class="btn btn-primary">Lire article</button>*/
/* */
/*              {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*                <a  class="btn btn-danger btn-sm" type="button" href="{{ path('batista_badelon_blog_modifier',{'id':Article.getId}) }}"><span class="glyphicon glyphicon-edit"></span> Modifier</a>*/
/* */
/*                <a  onclick="return valider();" class="btn btn-danger btn-sm" type="button" href="{{ path('batista_badelon_blog_formulairesupp',{'id':Article.getId}) }}"><span class="glyphicon glyphicon-trash"></span> Supprimer</a>*/
/* */
/*              {% endif %}*/
/* */
/* */
/*              <div>*/
/*                         <p class="text-right auteur">*/
/* */
/*                             {% if  Article.getAuteur == "Benjamin" %}*/
/* */
/*                                 <a href="https://www.facebook.com/Benjichoun" target="_blank"><img class="img-circle" src="https://graph.facebook.com/1668541360/picture?type=small"/></a>*/
/* */
/*                             {% elseif  Article.getAuteur == "Mathilde" %}*/
/* */
/*                                 <a href="https://www.facebook.com/mathilde.badelon" target="_blank"><img class="img-circle" src="https://graph.facebook.com/100002226864039/picture?type=small"/></a>*/
/* */
/*                         {% endif %}*/
/* */
/*                         {{ Article.getAuteur }} - Posté le: {{ Article.getDate|date("d/m/Y") }}*/
/* */
/*                         </p>*/
/*                  </div>*/
/*              </div>*/
/* */
/*          </div>*/
/* */
/*                     <div class="modal" id="info{{ Article.getId }}">*/
/*                             <div class="modal-dialog">*/
/*                                 <div class="modal-content">*/
/* */
/*                                         <div class="modal-header">*/
/*                                                 <button type="button" class="close" data-dismiss="modal">x</button>*/
/*                                                 <h4 class="modal-title text-center">{{ Article.getTitre }}</h4>*/
/*                                         </div>*/
/* */
/*                                         <div class="modal-body">*/
/* */
/*                                             {% if Article.getImages is not null %}*/
/* */
/*                                                 <img class="center-block img-rounded modal-title" src="{{asset('img/'~Article.getImages )}}" width="80%" height="80%" alt="{{ Article.getImages }}">*/
/* */
/*                                             {% endif %}*/
/*                                         </div>*/
/*                                         <div class="modal-content">*/
/*                                               <p class="text-center modal-content"> {{ Article.getTexte }}</p>*/
/* */
/*                                             <p class="modal-footer text-right">*/
/* */
/*                                                 {% if  Article.getAuteur == "Benjamin" %}*/
/* */
/*                                                 <a href="https://www.facebook.com/Benjichoun" target="_blank"><img class="img-circle" src="https://graph.facebook.com/1668541360/picture?type=small"/></a>*/
/* */
/*                                                 {% elseif  Article.getAuteur == "Mathilde" %}*/
/* */
/*                                                     <a href="https://www.facebook.com/mathilde.badelon" target="_blank"><img class="img-circle" src="https://graph.facebook.com/100002226864039/picture?type=small"/></a>*/
/* */
/*                                                 {% endif %}*/
/* */
/*                                                 {{ Article.getAuteur }} - Posté le: {{ Article.getDate|date("d/m/Y") }}*/
/* */
/*                                             </p>*/
/* */
/*                                         </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                     </div>*/
/*     </div>*/
/* */
/* */
/*     {% endblock %}*/
/* */
/*     {% endfor %}*/
