<?php

/* BatistaBadelonBlogBundle:Article:carte.html.twig */
class __TwigTemplate_85ffb568fe25c5b7fa7bf0b55ece8d5e6384c053a64c11dd84506aa89a75102c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BatistaBadelonBlogBundle:Article:carte.html.twig", 1);
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
        $__internal_9e6349774d9ce5f9eeda6f4297bd96b42abc6a813f272a134de04656e1a6597b = $this->env->getExtension("native_profiler");
        $__internal_9e6349774d9ce5f9eeda6f4297bd96b42abc6a813f272a134de04656e1a6597b->enter($__internal_9e6349774d9ce5f9eeda6f4297bd96b42abc6a813f272a134de04656e1a6597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BatistaBadelonBlogBundle:Article:carte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6349774d9ce5f9eeda6f4297bd96b42abc6a813f272a134de04656e1a6597b->leave($__internal_9e6349774d9ce5f9eeda6f4297bd96b42abc6a813f272a134de04656e1a6597b_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_05ea7a7cf19fdd35db06e34e1657d95e141927ccd8cc9ac2bc72daeb4c859872 = $this->env->getExtension("native_profiler");
        $__internal_05ea7a7cf19fdd35db06e34e1657d95e141927ccd8cc9ac2bc72daeb4c859872->enter($__internal_05ea7a7cf19fdd35db06e34e1657d95e141927ccd8cc9ac2bc72daeb4c859872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<script
src=\"http://maps.googleapis.com/maps/api/js\">
</script>

<script>
function initialize() {
  var myCenter=new google.maps.LatLng(51.508742,-0.120850);
  var mapProp = {
    center:myCenter,
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };


  var map=new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
  var allMyMarkers = [];
  geocoder = new google.maps.Geocoder();
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllArticle"]) ? $context["AllArticle"] : $this->getContext($context, "AllArticle")));
        foreach ($context['_seq'] as $context["_key"] => $context["Article"]) {
            // line 23
            echo "  function Geocode(address,id,title,phrase,image) {
    geocoder.geocode({
      'address': address
    }, function(results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        var result = results[0].geometry.location;
        // Create our info window content

        var infoWindowContent =
                '<h1>'+title+'</h1>'+
                '<div>'+phrase+'</div>'+
               // '<img class=\"center-block img-rounded modal-title\" src=\"'+image+'\" width=\"80%\" height=\"80%\" >'+

          '<button data-toggle=\"modal\" href=\"#info'+id+'\" class=\"btn btn-primary\">Lire article</button>';

        // Initialise the inforWindow
        var image= {
          url: \"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/favicon.ico"), "html", null, true);
            echo "\", // url
          scaledSize: new google.maps.Size(80, 80), // scaled size

        };

        var infoWindow = new google.maps.InfoWindow({
          content: infoWindowContent
        });
        var marker = new google.maps.Marker({
          position: result,
          map: map,
          icon: image
        });
        marker.set(\"id\", id);
        google.maps.event.addListener(marker, 'click', function() {
          infoWindow.open(map, marker);
        });
      } else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
        setTimeout(function() {
          Geocode(address);
        }, 200);
      } else {
        alert(\"Geocode was not successful for the following reason:\"
                + status);
      }
    });
  }


  Geocode('";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getVille", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getPays", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getId", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getTitre", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getPhrase", array()), "html", null, true);
            echo "','";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getImages", array()), "html", null, true);
            echo "');

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "


  function myClick(id){
    for(var i=0;i<allMyMarkers.length;i++){
      alert(allMyMarkers[i].id);
      if(allMyMarkers[i].id === id){
        google.maps.event.trigger(allMyMarkers[i], 'click');

        break;
      }
    }




  }
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

  <div class=\"panel panel-info\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title text-center\">Carte des articles</h3>
    </div>

    <div class=\"panel-body\">
<div id=\"googleMap\" class=\"center-block\" style=\"width:600px;height:500px;\"></div>
  ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AllArticle"]) ? $context["AllArticle"] : $this->getContext($context, "AllArticle")));
        foreach ($context['_seq'] as $context["_key"] => $context["Article"]) {
            // line 101
            echo "
    <div class=\"modal\" id=\"info";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getId", array()), "html", null, true);
            echo "\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">

          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">x</button>
            <h4 class=\"modal-title\">";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getTitre", array()), "html", null, true);
            echo "</h4>
          </div>

          <div class=\"modal-body\">

            ";
            // line 113
            if ( !(null === $this->getAttribute($context["Article"], "getImages", array()))) {
                // line 114
                echo "
              <img class=\"center-block img-rounded modal-title\" src=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/" . $this->getAttribute($context["Article"], "getImages", array()))), "html", null, true);
                echo "\" width=\"80%\" height=\"80%\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getImages", array()), "html", null, true);
                echo "\">

            ";
            }
            // line 118
            echo "          </div>
          <div class=\"modal-content\">
            <p class=\"text-center modal-content\"> ";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getTexte", array()), "html", null, true);
            echo "</p>

            <p class=\"modal-footer text-right\">

              ";
            // line 124
            if (($this->getAttribute($context["Article"], "getAuteur", array()) == "Benjamin")) {
                // line 125
                echo "
                <a href=\"https://www.facebook.com/Benjichoun\" target=\"_blank\"><img class=\"img-circle\" src=\"https://graph.facebook.com/1668541360/picture?type=small\"/></a>

              ";
            } elseif (($this->getAttribute(            // line 128
$context["Article"], "getAuteur", array()) == "Mathilde")) {
                // line 129
                echo "
                <a href=\"https://www.facebook.com/mathilde.badelon\" target=\"_blank\"><img class=\"img-circle\" src=\"https://graph.facebook.com/100002226864039/picture?type=small\"/></a>

              ";
            }
            // line 133
            echo "
              ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["Article"], "getAuteur", array()), "html", null, true);
            echo " - Posté le: ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["Article"], "getDate", array()), "d/m/Y"), "html", null, true);
            echo "

            </p>

          </div>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "      </div>
    </div>
  ";
        
        $__internal_05ea7a7cf19fdd35db06e34e1657d95e141927ccd8cc9ac2bc72daeb4c859872->leave($__internal_05ea7a7cf19fdd35db06e34e1657d95e141927ccd8cc9ac2bc72daeb4c859872_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dc0cf2b81f9246876158b760ac2e33aea0a4a701417b74a8faecebd107fdabd = $this->env->getExtension("native_profiler");
        $__internal_5dc0cf2b81f9246876158b760ac2e33aea0a4a701417b74a8faecebd107fdabd->enter($__internal_5dc0cf2b81f9246876158b760ac2e33aea0a4a701417b74a8faecebd107fdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carte";
        
        $__internal_5dc0cf2b81f9246876158b760ac2e33aea0a4a701417b74a8faecebd107fdabd->leave($__internal_5dc0cf2b81f9246876158b760ac2e33aea0a4a701417b74a8faecebd107fdabd_prof);

    }

    public function getTemplateName()
    {
        return "BatistaBadelonBlogBundle:Article:carte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 4,  250 => 143,  233 => 134,  230 => 133,  224 => 129,  222 => 128,  217 => 125,  215 => 124,  208 => 120,  204 => 118,  196 => 115,  193 => 114,  191 => 113,  183 => 108,  174 => 102,  171 => 101,  167 => 100,  137 => 72,  118 => 69,  86 => 40,  67 => 23,  63 => 22,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block container %}*/
/*   <title>{% block title %}Carte{% endblock %}</title>*/
/* <script*/
/* src="http://maps.googleapis.com/maps/api/js">*/
/* </script>*/
/* */
/* <script>*/
/* function initialize() {*/
/*   var myCenter=new google.maps.LatLng(51.508742,-0.120850);*/
/*   var mapProp = {*/
/*     center:myCenter,*/
/*     zoom:5,*/
/*     mapTypeId:google.maps.MapTypeId.ROADMAP*/
/*   };*/
/* */
/* */
/*   var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/*   var allMyMarkers = [];*/
/*   geocoder = new google.maps.Geocoder();*/
/*   {% for Article in AllArticle %}*/
/*   function Geocode(address,id,title,phrase,image) {*/
/*     geocoder.geocode({*/
/*       'address': address*/
/*     }, function(results, status) {*/
/*       if (status === google.maps.GeocoderStatus.OK) {*/
/*         var result = results[0].geometry.location;*/
/*         // Create our info window content*/
/* */
/*         var infoWindowContent =*/
/*                 '<h1>'+title+'</h1>'+*/
/*                 '<div>'+phrase+'</div>'+*/
/*                // '<img class="center-block img-rounded modal-title" src="'+image+'" width="80%" height="80%" >'+*/
/* */
/*           '<button data-toggle="modal" href="#info'+id+'" class="btn btn-primary">Lire article</button>';*/
/* */
/*         // Initialise the inforWindow*/
/*         var image= {*/
/*           url: "{{ asset('img/favicon.ico') }}", // url*/
/*           scaledSize: new google.maps.Size(80, 80), // scaled size*/
/* */
/*         };*/
/* */
/*         var infoWindow = new google.maps.InfoWindow({*/
/*           content: infoWindowContent*/
/*         });*/
/*         var marker = new google.maps.Marker({*/
/*           position: result,*/
/*           map: map,*/
/*           icon: image*/
/*         });*/
/*         marker.set("id", id);*/
/*         google.maps.event.addListener(marker, 'click', function() {*/
/*           infoWindow.open(map, marker);*/
/*         });*/
/*       } else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {*/
/*         setTimeout(function() {*/
/*           Geocode(address);*/
/*         }, 200);*/
/*       } else {*/
/*         alert("Geocode was not successful for the following reason:"*/
/*                 + status);*/
/*       }*/
/*     });*/
/*   }*/
/* */
/* */
/*   Geocode('{{ Article.getVille }},{{ Article.getPays }}','{{ Article.getId }}','{{ Article.getTitre }}','{{ Article.getPhrase }}','{{ Article.getImages }}');*/
/* */
/*   {% endfor %}*/
/* */
/* */
/* */
/*   function myClick(id){*/
/*     for(var i=0;i<allMyMarkers.length;i++){*/
/*       alert(allMyMarkers[i].id);*/
/*       if(allMyMarkers[i].id === id){*/
/*         google.maps.event.trigger(allMyMarkers[i], 'click');*/
/* */
/*         break;*/
/*       }*/
/*     }*/
/* */
/* */
/* */
/* */
/*   }*/
/* }*/
/* google.maps.event.addDomListener(window, 'load', initialize);*/
/* </script>*/
/* */
/*   <div class="panel panel-info">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title text-center">Carte des articles</h3>*/
/*     </div>*/
/* */
/*     <div class="panel-body">*/
/* <div id="googleMap" class="center-block" style="width:600px;height:500px;"></div>*/
/*   {% for Article in AllArticle %}*/
/* */
/*     <div class="modal" id="info{{ Article.getId }}">*/
/*       <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/* */
/*           <div class="modal-header">*/
/*             <button type="button" class="close" data-dismiss="modal">x</button>*/
/*             <h4 class="modal-title">{{ Article.getTitre }}</h4>*/
/*           </div>*/
/* */
/*           <div class="modal-body">*/
/* */
/*             {% if Article.getImages is not null %}*/
/* */
/*               <img class="center-block img-rounded modal-title" src="{{asset('img/'~Article.getImages )}}" width="80%" height="80%" alt="{{ Article.getImages }}">*/
/* */
/*             {% endif %}*/
/*           </div>*/
/*           <div class="modal-content">*/
/*             <p class="text-center modal-content"> {{ Article.getTexte }}</p>*/
/* */
/*             <p class="modal-footer text-right">*/
/* */
/*               {% if  Article.getAuteur == "Benjamin" %}*/
/* */
/*                 <a href="https://www.facebook.com/Benjichoun" target="_blank"><img class="img-circle" src="https://graph.facebook.com/1668541360/picture?type=small"/></a>*/
/* */
/*               {% elseif  Article.getAuteur == "Mathilde" %}*/
/* */
/*                 <a href="https://www.facebook.com/mathilde.badelon" target="_blank"><img class="img-circle" src="https://graph.facebook.com/100002226864039/picture?type=small"/></a>*/
/* */
/*               {% endif %}*/
/* */
/*               {{ Article.getAuteur }} - Posté le: {{ Article.getDate|date("d/m/Y") }}*/
/* */
/*             </p>*/
/* */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   {% endblock %}*/
