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
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sorgolla/skins/tango/skin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
";
    }

    // line 8
    public function block_scripts($context, array $blocks = array())
    {
        // line 9
        echo "
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" > </script>
";
        // line 12
        echo "
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<div id=\"wrapper\">


<div id=\"header\" > 
  ";
        // line 21
        echo "<div id=\"clockHolder\" style=\"position:relative\"  >
\t<div class=\"rotatingWrapper\"><img id=\"hour\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/hour.png"), "html", null, true);
        echo "\" /></div>
\t<div class=\"rotatingWrapper\"><img id=\"min\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/minute.png"), "html", null, true);
        echo "\" /></div>
\t<div class=\"rotatingWrapper\"><img id=\"sec\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/second.png"), "html", null, true);
        echo "\" /></div>
\t<img id=\"clock\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/clock.png"), "html", null, true);
        echo "\" />
</div>
<img style=\"float:left; position:relative\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/co_nowego.png"), "html", null, true);
        echo "\" />
<div style = \"width:300px; float:left;margin-top:15px; position:relative\">
 ";
        // line 29
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
        // line 42
        echo "</div>


";
        // line 46
        echo "<div id=\"header2\"> 
\t<div id=\"pogoda\">
\t<table id=\"pogoda_table\">
\t<tr>
\t<td>Teraz</td><td>Jutro</td><td>Po Jutrze</td>
\t<tr/>
\t<tr>
\t<td><img style=\"width:90px; height: 60px \" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 0, array(), "array"), "html", null, true);
        echo "\" /> </td>
\t<td><img style=\"width:90px; height: 60px\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 2, array(), "array"), "html", null, true);
        echo "\" /> </td>
\t<td><img style=\"width:90px; height: 60px\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 4, array(), "array"), "html", null, true);
        echo "\" /> </td>
\t</tr>
\t<tr>
\t<td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 1, array(), "array"), "html", null, true);
        echo "</td>
\t<td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 3, array(), "array"), "html", null, true);
        echo "</td>
\t<td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pogoda"]) ? $context["pogoda"] : $this->getContext($context, "pogoda")), 5, array(), "array"), "html", null, true);
        echo "</td>
\t<tr/>
\t</table>
\t</div>
</div>

<div id=\"content\" style=\"clear:left\">
";
        // line 68
        echo "<div class=\"wiadomości\" ><h2>Wiadomości </h2>
<table class=\"tabela\">";
        // line 69
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
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "path1"), "html", null, true);
                echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
                // line 72
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
        // line 75
        echo "</table></div>

";
        // line 78
        echo "<div id='carousel' style=\"float:left ; margin-bottom : 5px;\">
<h2>Rozmaitości </h2>
<div id='carousel_container'>
  <div id='left_scroll'><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/left.png"), "html", null, true);
        echo "\" /></div>
  <div id='carousel_inner'>
        <ul id='carousel_ul'>
\t\t";
        // line 84
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["rozmaitosci"]) ? $context["rozmaitosci"] : $this->getContext($context, "rozmaitosci"))));
        foreach ($context['_seq'] as $context["_key"] => $context["rozmaitosc"]) {
            // line 85
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["rozmaitosc"]) ? $context["rozmaitosc"] : $this->getContext($context, "rozmaitosc")), "id"))), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozmaitosc"]) ? $context["rozmaitosc"] : $this->getContext($context, "rozmaitosc")), "path1"), "html", null, true);
            echo "\" />
\t\t\t<span class=\"carousel_span\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozmaitosc"]) ? $context["rozmaitosc"] : $this->getContext($context, "rozmaitosc")), "header1"), "html", null, true);
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rozmaitosc'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "        </ul>
  </div>
  <div id='right_scroll'><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/right.png"), "html", null, true);
        echo "\" /></div>
</div>
</div>

";
        // line 96
        echo "<div id=\"reklama\"> 
    <div >  REKLAMA </div>
    <div style=\"background-color: Maroon\" >  TANIO </div>
 </div>
";
        // line 101
        echo "<div class=\"wiadomości\" ><h2>Sport </h2>
<table class=\"tabela\">";
        // line 102
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
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "path1"), "html", null, true);
                echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
                // line 105
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
        // line 108
        echo "</table></div>

";
        // line 111
        echo "<div class=\"wiadomości\" ><h2>Biznes </h2>
<table class=\"tabela\">";
        // line 112
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
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "path1"), "html", null, true);
                echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
                // line 115
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
        // line 118
        echo "</table></div>
 <div class=\"spacer\" style=\"clear: both;\"></div> 

";
        // line 122
        echo "<div id=\"rozrywka\" style=\"float:left; margin-top : 3px;\">
<h2> Rozrywka </h2>
<div id=\"s3slider\"  >
    <ul id=\"s3sliderContent\">
        
\t\t";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["rozrywka"]) ? $context["rozrywka"] : $this->getContext($context, "rozrywka"))));
        foreach ($context['_seq'] as $context["_key"] => $context["rozrywki"]) {
            // line 128
            echo "\t\t
\t\t<li class=\"s3sliderImage\">
\t\t\t<a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["rozrywki"]) ? $context["rozrywki"] : $this->getContext($context, "rozrywki")), "id"))), "html", null, true);
            echo "\">
            <img style=\"width:650px; height:361px\" src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozrywki"]) ? $context["rozrywki"] : $this->getContext($context, "rozrywki")), "path1"), "html", null, true);
            echo "\">
            <span>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rozrywki"]) ? $context["rozrywki"] : $this->getContext($context, "rozrywki")), "header1"), "html", null, true);
            echo "</span></a>
        </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rozrywki'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 135
        echo "        <div class=\"clear s3sliderImage\"></div>
    </ul>
</div>\t
</div>


";
        // line 142
        echo "<div id=\"cycle_plugin\" style=\"float:left; margin-top:3px; margin-left:3px; background: black;\" >
<h2>Najpopularniejsze </h2></br>
<div id=\"s3\" class=\"pics\" style=\"position: relative; float:left; color:white; background:black;\"> 
";
        // line 145
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popularne"]) ? $context["popularne"] : $this->getContext($context, "popularne")));
        foreach ($context['_seq'] as $context["_key"] => $context["popularny"]) {
            // line 146
            echo "    <div class=\"cycle\" style=\"background:black\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popularny"]) ? $context["popularny"] : $this->getContext($context, "popularny")), "path1"), "html", null, true);
            echo "\" width=\"200\" height=\"110\" />
\t<div style=\" padding:5px; background:black\">";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popularny"]) ? $context["popularny"] : $this->getContext($context, "popularny")), "header1"), "html", null, true);
            echo " </div>
\t<div style=\"clear:both; font-weight:bold; padding:5px;background:black\">";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["popularny"]) ? $context["popularny"] : $this->getContext($context, "popularny")), "header2"), "html", null, true);
            echo "</div> 
\t
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popularny'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 152
        echo "</div> 
</div>


</div>

";
        // line 159
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

<div class=\"spacer\" style=\"clear: both;\"></div> ";
        // line 202
        echo "
<div class=\"jcarousel-skin-tango\">
  <div class=\"jcarousel-container\" style=\"width:920px; background:none; border:none;\">
    <div class=\"jcarousel-clip\" style=\"width:890px;; height:160px\">

<ul id=\"mycarousel\" class=\"jcarousel-skin-tango\" style=\"height: 300px;\">
<li class=\"jcarousel-item-1\" style=\"width:220px;height:150px\"><iframe width=\"220\" height=\"150\" src=\"http://www.youtube.com/embed/tw76EhR-qoo\" frameborder=\"0\" allowfullscreen></iframe></li>
<li class=\"jcarousel-item-2\" style=\"width:220px;height:150px\"><iframe width=\"220\" height=\"150\" src=\"http://www.youtube.com/embed/6UGvwmT0P9k\" frameborder=\"0\" allowfullscreen></iframe></li>
<li class=\"jcarousel-item-3\" style=\"width:220px;height:150px\"><iframe width=\"220\" height=\"150\" src=\"http://www.youtube.com/embed/S29heEskC18\" frameborder=\"0\" allowfullscreen></iframe></li>
<li class=\"jcarousel-item-4\" style=\"width:220px;height:150px\"><iframe width=\"220\" height=\"150\" src=\"http://www.youtube.com/embed/tw76EhR-qoo\" frameborder=\"0\" allowfullscreen></iframe></li>
<li class=\"jcarousel-item-5\" style=\"width:220px;height:150px\"><iframe width=\"220\" height=\"150\" src=\"http://www.youtube.com/embed/tw76EhR-qoo\" frameborder=\"0\" allowfullscreen></iframe></li>
</ul>

    </div>
  </div>
</div>





</div>


<div >
<gcse:searchresults></gcse:searchresults> 
</div>


</div>
";
    }

    // line 233
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  ";
        // line 234
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryRotate.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/s3Slider.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cycle_plugin.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sorgolla/lib/jquery.jcarousel.min.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 238
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
        return array (  523 => 238,  519 => 237,  515 => 236,  511 => 235,  506 => 234,  502 => 233,  468 => 202,  423 => 159,  415 => 152,  405 => 148,  401 => 147,  394 => 146,  390 => 145,  385 => 142,  377 => 135,  368 => 132,  362 => 131,  358 => 130,  354 => 128,  350 => 127,  343 => 122,  338 => 118,  323 => 115,  316 => 113,  303 => 112,  300 => 111,  296 => 108,  281 => 105,  274 => 103,  261 => 102,  258 => 101,  252 => 96,  241 => 89,  233 => 87,  227 => 86,  188 => 72,  181 => 70,  168 => 69,  137 => 54,  124 => 46,  62 => 10,  378 => 91,  361 => 89,  355 => 88,  351 => 87,  348 => 86,  344 => 85,  339 => 84,  322 => 83,  310 => 73,  293 => 71,  283 => 69,  280 => 68,  271 => 66,  254 => 65,  228 => 56,  218 => 84,  206 => 51,  161 => 39,  148 => 36,  238 => 71,  226 => 65,  221 => 63,  217 => 62,  207 => 78,  203 => 75,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 37,  99 => 34,  87 => 23,  69 => 29,  56 => 8,  40 => 8,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 70,  282 => 90,  276 => 67,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 91,  230 => 66,  222 => 85,  220 => 72,  215 => 53,  211 => 52,  204 => 66,  198 => 63,  185 => 61,  183 => 52,  177 => 58,  160 => 57,  112 => 25,  82 => 20,  65 => 16,  38 => 3,  144 => 35,  141 => 55,  135 => 40,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 29,  93 => 33,  76 => 22,  72 => 14,  68 => 7,  27 => 4,  91 => 24,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 9,  21 => 2,  44 => 10,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 81,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 54,  189 => 50,  186 => 76,  180 => 72,  172 => 67,  159 => 44,  154 => 59,  147 => 58,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 27,  78 => 12,  75 => 30,  71 => 15,  58 => 15,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 20,  63 => 6,  46 => 5,  22 => 2,  163 => 63,  155 => 60,  152 => 49,  149 => 51,  145 => 46,  139 => 34,  131 => 42,  123 => 38,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 22,  80 => 21,  74 => 16,  66 => 12,  55 => 15,  52 => 15,  50 => 6,  43 => 9,  41 => 4,  37 => 17,  35 => 5,  32 => 2,  29 => 2,  184 => 70,  178 => 41,  171 => 62,  165 => 68,  162 => 57,  157 => 56,  153 => 43,  151 => 59,  143 => 54,  138 => 51,  136 => 50,  133 => 53,  130 => 47,  122 => 33,  119 => 42,  116 => 35,  111 => 36,  108 => 37,  102 => 30,  98 => 22,  95 => 25,  92 => 28,  89 => 22,  85 => 21,  81 => 31,  73 => 11,  64 => 17,  60 => 23,  57 => 5,  54 => 14,  51 => 13,  48 => 12,  45 => 8,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 5,);
    }
}
