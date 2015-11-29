<?php

/* BatistaBadelonBlogBundle:Article:modifier.html.twig */
class __TwigTemplate_3a91ecbbf53b4d813607055ad7615053f573eee18eabf80588f4848047ffffb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BatistaBadelonBlogBundle:Article:modifier.html.twig", 1);
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
        $__internal_e666675e3a470e0e53d356c5fcadb95fc8b4cb7f64a32da08fe98de8c22caeee = $this->env->getExtension("native_profiler");
        $__internal_e666675e3a470e0e53d356c5fcadb95fc8b4cb7f64a32da08fe98de8c22caeee->enter($__internal_e666675e3a470e0e53d356c5fcadb95fc8b4cb7f64a32da08fe98de8c22caeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatistaBadelonBlogBundle:Article:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e666675e3a470e0e53d356c5fcadb95fc8b4cb7f64a32da08fe98de8c22caeee->leave($__internal_e666675e3a470e0e53d356c5fcadb95fc8b4cb7f64a32da08fe98de8c22caeee_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_8d29ff1da48cd30cda1478abdae4d1bee7de6d33ab96b4b7a0d3aa370015c069 = $this->env->getExtension("native_profiler");
        $__internal_8d29ff1da48cd30cda1478abdae4d1bee7de6d33ab96b4b7a0d3aa370015c069->enter($__internal_8d29ff1da48cd30cda1478abdae4d1bee7de6d33ab96b4b7a0d3aa370015c069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <section class=\"col-sm-10 col-md-12\" xmlns=\"http://www.w3.org/1999/html\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title text-center\">Modification d'un article</h3>
    </div>

    <div class=\"panel-body\">



<form action= \"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("batista_badelon_blog_formulairemodif");
        echo "\"  method=\"POST\" enctype=\"multipart/form-data\" >

    <div>
        <label for=\"titre\">Titre :</label>
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTitre", array()), "html", null, true);
        echo "\" Name=\"titre\" id=\"titre\"/>
        <input type=\"hidden\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getId", array()), "html", null, true);
        echo "\" Name=\"id\" id=\"id\"/>
        <label for=\"auteur\">Auteur :</label>
        <input class=\"form-control\" type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getAuteur", array()), "html", null, true);
        echo "\" id=\"auteur\" />
</div>
        <div>
            <label for=\"images\">Image :</label>
            <input class=\"form-control\" type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"26214400\" />
            <input class=\"form-control\" accept=\"image/*\"type=\"file\" Name=\"images\" id=\"images\" />
        </div>
        <div>
        <label for=\"texte\">Texte :</label>
        <textarea class=\"form-control textarea\"maxlength=\"500000\" name=\"texte\" id=\"texte\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getTexte", array()), "html", null, true);
        echo "</textarea>
        </div>
    <div>
        <label for=\"phrase\">Phrase d'accroche :</label>
        <textarea class=\"form-control phrasearea\"maxlength=\"250\"  Name=\"phrase\" id=\"phrase\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getPhrase", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div>
        <label for=\"continent\">Continent :</label>
        <select name=\"continent\" id=\"continent\">
            <option ";
        // line 40
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getContinent", array()) == "europe")) {
            echo "selected=\"selected\"";
        }
        echo "\" value=\"europe\">Europe</option>
            <option ";
        // line 41
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getContinent", array()) == "oceanie")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"oceanie\">Océanie</option>
            <option ";
        // line 42
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getContinent", array()) == "asie")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"asie\">Asie</option>
            <option ";
        // line 43
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getContinent", array()) == "amnord")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"amnord\">Amérique du Nord</option>
            <option ";
        // line 44
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getContinent", array()) == "amsud")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"amsud\">Amérique du Sud</option>
            <option ";
        // line 45
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getContinent", array()) == "afrique")) {
            echo "selected=\"selected\"";
        }
        echo " value=\"afrique\">Afrique</option>
        </select>
        </div>
    <div>
        <label for=\"pays\">Pays :</label>
        <input class=\"form-control\"  value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getPays", array()), "html", null, true);
        echo "\" Name=\"pays\" id=\"pays\"/>
</div>
    <div>
        <label for=\"ville\">Ville :</label>
        <input class=\"form-control\"  value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "getVille", array()), "html", null, true);
        echo "\"Name=\"ville\" id=\"ville\"/>
</div>
    <div>
        <input  class=\"form-control btn btn-primary btn-sm\" type=\"submit\" value=\"Valider la modification\"/>
    </div>

</form>
    </div>
    </div>
    ";
        
        $__internal_8d29ff1da48cd30cda1478abdae4d1bee7de6d33ab96b4b7a0d3aa370015c069->leave($__internal_8d29ff1da48cd30cda1478abdae4d1bee7de6d33ab96b4b7a0d3aa370015c069_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_462ab8381e0f5202dfb590ac77247824905a558e008da5dc5628c710d5ddc207 = $this->env->getExtension("native_profiler");
        $__internal_462ab8381e0f5202dfb590ac77247824905a558e008da5dc5628c710d5ddc207->enter($__internal_462ab8381e0f5202dfb590ac77247824905a558e008da5dc5628c710d5ddc207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Modfier";
        
        $__internal_462ab8381e0f5202dfb590ac77247824905a558e008da5dc5628c710d5ddc207->leave($__internal_462ab8381e0f5202dfb590ac77247824905a558e008da5dc5628c710d5ddc207_prof);

    }

    public function getTemplateName()
    {
        return "BatistaBadelonBlogBundle:Article:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 5,  147 => 54,  140 => 50,  130 => 45,  124 => 44,  118 => 43,  112 => 42,  106 => 41,  100 => 40,  92 => 35,  85 => 31,  73 => 22,  68 => 20,  64 => 19,  57 => 15,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <section class="col-sm-10 col-md-12" xmlns="http://www.w3.org/1999/html">*/
/*     <title>{% block title %}Modfier{% endblock %}</title>*/
/*     <div class="panel panel-info">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title text-center">Modification d'un article</h3>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/* */
/* */
/* */
/* <form action= "{{path('batista_badelon_blog_formulairemodif')}}"  method="POST" enctype="multipart/form-data" >*/
/* */
/*     <div>*/
/*         <label for="titre">Titre :</label>*/
/*         <input class="form-control" type="text" value="{{ article.getTitre }}" Name="titre" id="titre"/>*/
/*         <input type="hidden" value="{{  article.getId }}" Name="id" id="id"/>*/
/*         <label for="auteur">Auteur :</label>*/
/*         <input class="form-control" type="text" value="{{ article.getAuteur }}" id="auteur" />*/
/* </div>*/
/*         <div>*/
/*             <label for="images">Image :</label>*/
/*             <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="26214400" />*/
/*             <input class="form-control" accept="image/*"type="file" Name="images" id="images" />*/
/*         </div>*/
/*         <div>*/
/*         <label for="texte">Texte :</label>*/
/*         <textarea class="form-control textarea"maxlength="500000" name="texte" id="texte">{{ article.getTexte }}</textarea>*/
/*         </div>*/
/*     <div>*/
/*         <label for="phrase">Phrase d'accroche :</label>*/
/*         <textarea class="form-control phrasearea"maxlength="250"  Name="phrase" id="phrase">{{ article.getPhrase }}</textarea>*/
/*         </div>*/
/*         <div>*/
/*         <label for="continent">Continent :</label>*/
/*         <select name="continent" id="continent">*/
/*             <option {% if article.getContinent == "europe" %}selected="selected"{% endif %}" value="europe">Europe</option>*/
/*             <option {% if article.getContinent == "oceanie" %}selected="selected"{% endif %} value="oceanie">Océanie</option>*/
/*             <option {% if article.getContinent == "asie" %}selected="selected"{% endif %} value="asie">Asie</option>*/
/*             <option {% if article.getContinent == "amnord" %}selected="selected"{% endif %} value="amnord">Amérique du Nord</option>*/
/*             <option {% if article.getContinent == "amsud" %}selected="selected"{% endif %} value="amsud">Amérique du Sud</option>*/
/*             <option {% if article.getContinent == "afrique" %}selected="selected"{% endif %} value="afrique">Afrique</option>*/
/*         </select>*/
/*         </div>*/
/*     <div>*/
/*         <label for="pays">Pays :</label>*/
/*         <input class="form-control"  value="{{ article.getPays }}" Name="pays" id="pays"/>*/
/* </div>*/
/*     <div>*/
/*         <label for="ville">Ville :</label>*/
/*         <input class="form-control"  value="{{ article.getVille }}"Name="ville" id="ville"/>*/
/* </div>*/
/*     <div>*/
/*         <input  class="form-control btn btn-primary btn-sm" type="submit" value="Valider la modification"/>*/
/*     </div>*/
/* */
/* </form>*/
/*     </div>*/
/*     </div>*/
/*     {% endblock %}*/
