<?php

/* BatistaBadelonBlogBundle:Article:ajouter.html.twig */
class __TwigTemplate_c7f9a62d9689454ad1caa10d67a473f011bb63955850068c377ca324665b25a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BatistaBadelonBlogBundle:Article:ajouter.html.twig", 1);
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
        $__internal_8226a5d6587b252127a40a41e6729c63165aaf6ea54ef612afecb885c98dedd3 = $this->env->getExtension("native_profiler");
        $__internal_8226a5d6587b252127a40a41e6729c63165aaf6ea54ef612afecb885c98dedd3->enter($__internal_8226a5d6587b252127a40a41e6729c63165aaf6ea54ef612afecb885c98dedd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatistaBadelonBlogBundle:Article:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8226a5d6587b252127a40a41e6729c63165aaf6ea54ef612afecb885c98dedd3->leave($__internal_8226a5d6587b252127a40a41e6729c63165aaf6ea54ef612afecb885c98dedd3_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_156bcff67d116b4b4fb8955bf45e24addbf74722db29b7256b85013c246919ba = $this->env->getExtension("native_profiler");
        $__internal_156bcff67d116b4b4fb8955bf45e24addbf74722db29b7256b85013c246919ba->enter($__internal_156bcff67d116b4b4fb8955bf45e24addbf74722db29b7256b85013c246919ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "
    <section class=\"col-sm-10 col-md-12\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script>
        function verify(){
            var i=0;

            var titre=document.getElementById(\"titre\");
            if(!titre.value.length) {
                alert(\"Vous devez mettre un titre à votre Article !\")
                titre.focus();
                i++;
            }
            var texte=document.getElementById(\"texte\");
            if(!texte.value.length) {
                alert(\"Vous devez mettre un texte à votre Article !\")
                texte.focus();
                i++;
            }
            var phrase=document.getElementById(\"phrase\");
            if(!phrase.value.length) {
                alert(\"Vous devez mettre une phrase d'accroche à votre Article !\")
                phrase.focus();
                i++;
            }
            var pays=document.getElementById(\"pays\");
            if(!pays.value.length) {
                alert(\"Vous devez mettre un pays à votre Article !\")
                pays.focus();
                i++;
            }
            var ville=document.getElementById(\"ville\");
            if(!ville.value.length) {
                alert(\"Vous devez mettre une ville à votre Article !\")
                ville.focus();
                i++;
            }
            if(i>0){
                return false;
            }
            else{

                return true;
            }


        }
    </script>
    <div class=\"panel panel-info\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title text-center\">Ajout d'un article</h3>
    </div>

    <div class=\"panel-body\">



<form onsubmit=\"return verify();\" action= \"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("batista_badelon_blog_form");
        echo "\"  method=\"POST\"   enctype=\"multipart/form-data\" >

    <div>
        <label for=\"titre\">Titre :</label>
        <input class=\"form-control\" type=\"text\" name=\"titre\" id=\"titre\"/>
    </div>
    <div>
        <label for=\"auteur\">Auteur : ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"hidden\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "\" Name=\"auteur\" id=\"auteur\" />
    </div>
    <div>
        <label for=\"images\">Image :</label>
        <input class=\"form-control\" type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"26214400\" />
        <input class=\"form-control\" accept=\"image/*\"type=\"file\" Name=\"images\" id=\"images\" />
    </div>
    <div>
        <label for=\"texte\">Texte :</label>
        <textarea class=\"form-control textarea\" maxlength=\"500000\"name=\"texte\" id=\"texte\"></textarea>
    </div>
    <div>
        <label for=\"phrase\">Phrase d'accroche :</label>
        <textarea class=\"form-control phrasearea\" maxlength=\"250\"name=\"phrase\" id=\"phrase\"></textarea>
    </div>

    <div>
        <label for=\"continent\">Continent :</label>
        <select name=\"continent\" id=\"continent\">
            <option value=\"europe\">Europe</option>
            <option value=\"oceanie\">Océanie</option>
            <option value=\"asie\">Asie</option>
            <option value=\"amnord\">Amérique du Nord</option>
            <option value=\"amsud\">Amérique du Sud</option>
            <option value=\"afrique\">Afrique</option>
        </select>
    </div>

    <div>
        <label for=\"pays\">Pays :</label>
        <input class=\"form-control\" name=\"pays\" id=\"pays\"></input>
    </div>


    <div>
        <label for=\"ville\">Ville :</label>
        <input class=\"form-control\" name=\"ville\" id=\"ville\"></input>
    </div>
    <div>
        <input class=\"form-control btn btn-primary btn-sm\"  type=\"submit\" value=\"Ajouter l'article\"></input>
    </div>

</form>
    </div>
    </div>
    ";
        
        $__internal_156bcff67d116b4b4fb8955bf45e24addbf74722db29b7256b85013c246919ba->leave($__internal_156bcff67d116b4b4fb8955bf45e24addbf74722db29b7256b85013c246919ba_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_628f425764b55586bf4510a1b86e6d51290c184afa279dd4c94a691b415c3722 = $this->env->getExtension("native_profiler");
        $__internal_628f425764b55586bf4510a1b86e6d51290c184afa279dd4c94a691b415c3722->enter($__internal_628f425764b55586bf4510a1b86e6d51290c184afa279dd4c94a691b415c3722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajout";
        
        $__internal_628f425764b55586bf4510a1b86e6d51290c184afa279dd4c94a691b415c3722->leave($__internal_628f425764b55586bf4510a1b86e6d51290c184afa279dd4c94a691b415c3722_prof);

    }

    public function getTemplateName()
    {
        return "BatistaBadelonBlogBundle:Article:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 6,  117 => 69,  113 => 68,  103 => 61,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block container %}*/
/* */
/*     <section class="col-sm-10 col-md-12">*/
/*     <title>{% block title %}Ajout{% endblock %}</title>*/
/*     <script>*/
/*         function verify(){*/
/*             var i=0;*/
/* */
/*             var titre=document.getElementById("titre");*/
/*             if(!titre.value.length) {*/
/*                 alert("Vous devez mettre un titre à votre Article !")*/
/*                 titre.focus();*/
/*                 i++;*/
/*             }*/
/*             var texte=document.getElementById("texte");*/
/*             if(!texte.value.length) {*/
/*                 alert("Vous devez mettre un texte à votre Article !")*/
/*                 texte.focus();*/
/*                 i++;*/
/*             }*/
/*             var phrase=document.getElementById("phrase");*/
/*             if(!phrase.value.length) {*/
/*                 alert("Vous devez mettre une phrase d'accroche à votre Article !")*/
/*                 phrase.focus();*/
/*                 i++;*/
/*             }*/
/*             var pays=document.getElementById("pays");*/
/*             if(!pays.value.length) {*/
/*                 alert("Vous devez mettre un pays à votre Article !")*/
/*                 pays.focus();*/
/*                 i++;*/
/*             }*/
/*             var ville=document.getElementById("ville");*/
/*             if(!ville.value.length) {*/
/*                 alert("Vous devez mettre une ville à votre Article !")*/
/*                 ville.focus();*/
/*                 i++;*/
/*             }*/
/*             if(i>0){*/
/*                 return false;*/
/*             }*/
/*             else{*/
/* */
/*                 return true;*/
/*             }*/
/* */
/* */
/*         }*/
/*     </script>*/
/*     <div class="panel panel-info">*/
/*     <div class="panel-heading">*/
/*         <h3 class="panel-title text-center">Ajout d'un article</h3>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/* */
/* */
/* */
/* <form onsubmit="return verify();" action= "{{path('batista_badelon_blog_form')}}"  method="POST"   enctype="multipart/form-data" >*/
/* */
/*     <div>*/
/*         <label for="titre">Titre :</label>*/
/*         <input class="form-control" type="text" name="titre" id="titre"/>*/
/*     </div>*/
/*     <div>*/
/*         <label for="auteur">Auteur : {{ app.user.username }}</label>*/
/*         <input class="form-control" type="hidden" value="{{ app.user.username }}" Name="auteur" id="auteur" />*/
/*     </div>*/
/*     <div>*/
/*         <label for="images">Image :</label>*/
/*         <input class="form-control" type="hidden" name="MAX_FILE_SIZE" value="26214400" />*/
/*         <input class="form-control" accept="image/*"type="file" Name="images" id="images" />*/
/*     </div>*/
/*     <div>*/
/*         <label for="texte">Texte :</label>*/
/*         <textarea class="form-control textarea" maxlength="500000"name="texte" id="texte"></textarea>*/
/*     </div>*/
/*     <div>*/
/*         <label for="phrase">Phrase d'accroche :</label>*/
/*         <textarea class="form-control phrasearea" maxlength="250"name="phrase" id="phrase"></textarea>*/
/*     </div>*/
/* */
/*     <div>*/
/*         <label for="continent">Continent :</label>*/
/*         <select name="continent" id="continent">*/
/*             <option value="europe">Europe</option>*/
/*             <option value="oceanie">Océanie</option>*/
/*             <option value="asie">Asie</option>*/
/*             <option value="amnord">Amérique du Nord</option>*/
/*             <option value="amsud">Amérique du Sud</option>*/
/*             <option value="afrique">Afrique</option>*/
/*         </select>*/
/*     </div>*/
/* */
/*     <div>*/
/*         <label for="pays">Pays :</label>*/
/*         <input class="form-control" name="pays" id="pays"></input>*/
/*     </div>*/
/* */
/* */
/*     <div>*/
/*         <label for="ville">Ville :</label>*/
/*         <input class="form-control" name="ville" id="ville"></input>*/
/*     </div>*/
/*     <div>*/
/*         <input class="form-control btn btn-primary btn-sm"  type="submit" value="Ajouter l'article"></input>*/
/*     </div>*/
/* */
/* </form>*/
/*     </div>*/
/*     </div>*/
/*     {% endblock %}*/
