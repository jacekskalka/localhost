<?php

/* InformacjeMainMainBundle:Default:index.html.twig */
class __TwigTemplate_af3acae9410cad0179317846bacfa9b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " Wiadomości ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/clock.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
";
    }

    // line 7
    public function block_scripts($context, array $blocks = array())
    {
        // line 8
        echo "
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" > </script>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div id=\"wrapper\">


<div id=\"header\" > 
  ";
        // line 18
        echo "<div id=\"clockHolder\" style=\"position:relative\"  >
\t<div class=\"rotatingWrapper\"><img id=\"hour\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/hour.png"), "html", null, true);
        echo "\" /></div>
\t<div class=\"rotatingWrapper\"><img id=\"min\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/minute.png"), "html", null, true);
        echo "\" /></div>
\t<div class=\"rotatingWrapper\"><img id=\"sec\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/second.png"), "html", null, true);
        echo "\" /></div>
\t<img id=\"clock\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/clock.png"), "html", null, true);
        echo "\" />
</div>
<img style=\"float:left; position:relative\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/co_nowego.png"), "html", null, true);
        echo "\" />
<div style = \"width:300px; float:left;margin-top:15px; position:relative\">
 ";
        // line 26
        echo " 
<script>
  (function() {
    var cx = '013821136593592237661:zkiwrjc0wuk';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox></gcse:searchbox>
</div>
<div class=\"spacer\" style=\"clear: both;\"></div> ";
        // line 39
        echo "</div>


";
        // line 43
        echo "<div id=\"header2\"> 
\t<div id=\"pogoda\">
\t<table id=\"pogoda_table\">
\t<tr>
\t<td>Teraz</td><td>Jutro</td><td>Po Jutrze</td>
\t<tr/>
\t<tr>
\t<td><img style=\"width:90px; height: 60px \" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 0, array(), "array"), "html", null, true);
        echo "\" /> </td>
\t<td><img style=\"width:90px; height: 60px\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 2, array(), "array"), "html", null, true);
        echo "\" /> </td>
\t<td><img style=\"width:90px; height: 60px\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 4, array(), "array"), "html", null, true);
        echo "\" /> </td>
\t</tr>
\t<tr>
\t<td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 1, array(), "array"), "html", null, true);
        echo "</td>
\t<td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 3, array(), "array"), "html", null, true);
        echo "</td>
\t<td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 5, array(), "array"), "html", null, true);
        echo "</td>
\t<tr/>
\t</table>
\t</div>
</div>

<div id=\"content\" style=\"clear:left\">
";
        // line 65
        echo "<div class=\"wiadomości\" ><h2>Wiadomości </h2>
<table class=\"tabela\">";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["wiadomości"]) ? $context["wiadomości"] : $this->getContext($context, "wiadomości"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["wiadomość"]) {
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 11)) {
                echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "path1"), "html", null, true);
                echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "header1"), "html", null, true);
                echo "
</a></td></tr>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wiadomość'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "</table></div>

";
        // line 75
        echo "<div id='carousel' style=\"float:left ; margin-bottom : 5px;\">
<h2>Rozmaitości </h2>
<div id='carousel_container'>
  <div id='left_scroll'><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/left.png"), "html", null, true);
        echo "\" /></div>
  <div id='carousel_inner'>
        <ul id='carousel_ul'>
\t\t";
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["rozmaitosci"]) ? $context["rozmaitosci"] : $this->getContext($context, "rozmaitosci"))));
        foreach ($context['_seq'] as $context["_key"] => $context["rozmaitosc"]) {
            // line 82
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["rozmaitosc"]) ? $context["rozmaitosc"] : $this->getContext($context, "rozmaitosc")), "id"))), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozmaitosc"]) ? $context["rozmaitosc"] : $this->getContext($context, "rozmaitosc")), "path1"), "html", null, true);
            echo "\" />
\t\t\t<span class=\"carousel_span\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozmaitosc"]) ? $context["rozmaitosc"] : $this->getContext($context, "rozmaitosc")), "header1"), "html", null, true);
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rozmaitosc'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 86
        echo "        </ul>
  </div>
  <div id='right_scroll'><img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/right.png"), "html", null, true);
        echo "\" /></div>
</div>
</div>

";
        // line 93
        echo "<div id=\"reklama\"> 
    <div >  REKLAMA </div>
    <div style=\"background-color: Maroon\" >  TANIO </div>
 </div>
";
        // line 98
        echo "<div class=\"wiadomości\" ><h2>Sport </h2>
<table class=\"tabela\">";
        // line 99
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["sporty"]) {
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 7)) {
                echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "path1"), "html", null, true);
                echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "header1"), "html", null, true);
                echo "
</a></td></tr>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sporty'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 105
        echo "</table></div>

";
        // line 108
        echo "<div class=\"wiadomości\" ><h2>Biznes </h2>
<table class=\"tabela\">";
        // line 109
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["biznes"]) ? $context["biznes"] : $this->getContext($context, "biznes"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["biznesy"]) {
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < 7)) {
                echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "path1"), "html", null, true);
                echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "header1"), "html", null, true);
                echo "
</a></td></tr>
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biznesy'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 115
        echo "</table></div>
 <div class=\"spacer\" style=\"clear: both;\"></div> 

";
        // line 119
        echo "<div id=\"rozrywka\" style=\"float:left; margin-top : 3px;\">
<h2> Rozrywka </h2>
<div id=\"s3slider\"  >
    <ul id=\"s3sliderContent\">
        
\t\t";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["rozrywka"]) ? $context["rozrywka"] : $this->getContext($context, "rozrywka"))));
        foreach ($context['_seq'] as $context["_key"] => $context["rozrywki"]) {
            // line 125
            echo "\t\t
\t\t<li class=\"s3sliderImage\">
\t\t\t<a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["rozrywki"]) ? $context["rozrywki"] : $this->getContext($context, "rozrywki")), "id"))), "html", null, true);
            echo "\">
            <img style=\"width:650px; height:361px\" src=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozrywki"]) ? $context["rozrywki"] : $this->getContext($context, "rozrywki")), "path1"), "html", null, true);
            echo "\">
            <span>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozrywki"]) ? $context["rozrywki"] : $this->getContext($context, "rozrywki")), "header1"), "html", null, true);
            echo "</span></a>
        </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rozrywki'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 132
        echo "        <div class=\"clear s3sliderImage\"></div>
    </ul>
</div>\t
</div>


";
        // line 139
        echo "<div id=\"cycle_plugin\" style=\"float:left; margin-top:3px; margin-left:3px; background: black;\" >
<h2>Najpopularniejsze </h2></br>
<div id=\"s3\" class=\"pics\" style=\"position: relative; float:left; color:white; background:black;\"> 
";
        // line 142
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popularne"]) ? $context["popularne"] : $this->getContext($context, "popularne")));
        foreach ($context['_seq'] as $context["_key"] => $context["popularny"]) {
            // line 143
            echo "    <div class=\"cycle\" style=\"background:black\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popularny"]) ? $context["popularny"] : $this->getContext($context, "popularny")), "path1"), "html", null, true);
            echo "\" width=\"200\" height=\"110\" />
\t<div style=\" padding:5px; background:black\">";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popularny"]) ? $context["popularny"] : $this->getContext($context, "popularny")), "header1"), "html", null, true);
            echo " </div>
\t<div style=\"clear:both; font-weight:bold; padding:5px;background:black\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popularny"]) ? $context["popularny"] : $this->getContext($context, "popularny")), "header2"), "html", null, true);
            echo "</div> 
\t
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popularny'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 149
        echo "</div> 
</div>


</div>

";
        // line 156
        echo "<div id=\"footer\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer.jpg"), "html", null, true);
        echo "'); 
width:1000px; height:300px; clear:both;\">
<table style=\"float:left\" ><th> Szukaj cen </th> <tr> <td> 
<a href=\"http://www.ceneo.pl\" style=\"float:left\"> <div id=\"ceneo\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Aukcje </th> <tr> <td> 
<a href=\"http://www.allegro.pl\" style=\"float:left\"> <div id=\"allegro\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Program </th> <tr> <td> 
<a href=\"www.telemagazyn.pl\" style=\"float:left\"> <div id=\"zapper\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Randka</th> <tr> <td> 
<a href=\"http://www.sympatia.pl\" style=\"float:left\"> <div id=\"sympatia\"/></div></a>
<a href=\"http://www.badoo.com\" style=\"float:left\"> <div id=\"badoo\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Gry</th> <tr> <td> 
<a href=\"http://www.kurnik.pl\" style=\"float:left\"> <div id=\"kurnik\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Torrenty</th> <tr> <td> 
<a href=\"http://www.thepiratebay.se\" style=\"float:left\"> <div id=\"pirate\"/></div></a>
<a href=\"http://www.kat.ph\" style=\"float:left\"> <div id=\"kat\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Video</th> <tr> <td> 
<a href=\"#\" style=\"float:left\"> <div id=\"liveleak\"/></div></a>
<a href=\"http://www.youtube.com/\" style=\"float:left\"> <div id=\"youtube\"/></div></a>
</td><tr/></table>

<table style=\"float:left\" ><th> Pogoda</th> <tr> <td> 
<a href=\"http://www.pogodynka.pl\" style=\"float:left\"> <div id=\"imgw\"/></div></a>
</td><tr/></table>

<table style=\"float:left;\" ><th style=\"width:115px\">  Podróże</th> <tr> <td> 
<a href=\"http://www.tripadvisor.com/\" style=\"float:left\"> <div id=\"advisor\"/></div></a>
</td><tr/></table>

</div>


<div >
<gcse:searchresults></gcse:searchresults> 
</div>


</div>
";
    }

    // line 207
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  ";
        // line 208
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryRotate.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/s3Slider.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cycle_plugin.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" > </script>
";
    }

    public function getTemplateName()
    {
        return "InformacjeMainMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 211,  485 => 210,  481 => 209,  476 => 208,  472 => 207,  416 => 156,  408 => 149,  398 => 145,  394 => 144,  387 => 143,  383 => 142,  378 => 139,  370 => 132,  361 => 129,  355 => 128,  351 => 127,  347 => 125,  343 => 124,  336 => 119,  331 => 115,  316 => 112,  309 => 110,  296 => 109,  293 => 108,  289 => 105,  274 => 102,  267 => 100,  254 => 99,  251 => 98,  245 => 93,  238 => 88,  234 => 86,  226 => 84,  220 => 83,  215 => 82,  211 => 81,  205 => 78,  200 => 75,  196 => 72,  181 => 69,  174 => 67,  161 => 66,  158 => 65,  148 => 57,  144 => 56,  140 => 55,  134 => 52,  130 => 51,  126 => 50,  117 => 43,  112 => 39,  98 => 26,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  73 => 18,  67 => 13,  64 => 12,  58 => 9,  55 => 8,  52 => 7,  46 => 5,  41 => 4,  38 => 3,  32 => 2,);
    }
}
