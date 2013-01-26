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
        foreach ($context['_seq'] as $context["_key"] => $context["wiadomość"]) {
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wiadomość'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 72
        echo "</table></div>

";
        // line 75
        echo "<div id='carousel' style=\"float:left ; margin-bottom : 10px;\">
<h2>Z ostatniej chwili </h2>
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
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport"))));
        foreach ($context['_seq'] as $context["_key"] => $context["sporty"]) {
            // line 82
            echo "            <li><a href='#'><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "path1"), "html", null, true);
            echo "\" />
\t\t\t<span class=\"carousel_span\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "header1"), "html", null, true);
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sporty'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 85
        echo "        </ul>
  </div>
  <div id='right_scroll'><img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/right.png"), "html", null, true);
        echo "\" /></div>
</div>
</div>


";
        // line 93
        echo "<div class=\"wiadomości\" ><h2>Sport </h2>
<table class=\"tabela\">";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport"))));
        foreach ($context['_seq'] as $context["_key"] => $context["sporty"]) {
            echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "path1"), "html", null, true);
            echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "header1"), "html", null, true);
            echo "
</a></td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sporty'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 100
        echo "</table></div>

";
        // line 103
        echo "<div class=\"wiadomości\" ><h2>Biznes </h2>
<table class=\"tabela\">";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["biznes"]) ? $context["biznes"] : $this->getContext($context, "biznes"))));
        foreach ($context['_seq'] as $context["_key"] => $context["biznesy"]) {
            echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "path1"), "html", null, true);
            echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "header1"), "html", null, true);
            echo "
</a></td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['biznesy'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 110
        echo "</table></div>

";
        // line 113
        echo "<div id=\"reklama\"> 
    <div >  REKLAMA </div>
    <div style=\"background-color: Maroon\" >  TANIO </div>
 </div>

 <div class=\"spacer\" style=\"clear: both;\"></div> 



";
        // line 123
        echo "<div id=\"rozrywka\" style=\"float:left; margin-top : 3px;\">
<h2> Rozrywka </h2>
<div id=\"s3slider\"  >
    <ul id=\"s3sliderContent\">
        
\t\t";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport"))));
        foreach ($context['_seq'] as $context["_key"] => $context["sporty"]) {
            // line 129
            echo "\t\t
\t\t<li class=\"s3sliderImage\">
            <img style=\"width:650px; height:430px\" src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "path1"), "html", null, true);
            echo "\">
            <span>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "header1"), "html", null, true);
            echo "</span>
        </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sporty'], $context['_parent'], $context['loop']);
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
<div id=\"s3\" class=\"pics\" style=\"position: relative; float:left\"> 
    <div class=\"cycle\"> <img src=\"images/beach1.jpg\" width=\"200\" height=\"200\" />gdfgdf </div>
    <div class=\"cycle\"> <img src=\"images/beach2.jpg\" width=\"200\" height=\"200\" /> gfdgdf</div>
    <div class=\"cycle\"> <img src=\"images/beach3.jpg\" width=\"200\" height=\"200\" />fgdf </div>
    <div class=\"cycle\"> <img src=\"images/beach3.jpg\" width=\"200\" height=\"200\" />fgdf </div>
    <div class=\"cycle\"> <img src=\"images/beach3.jpg\" width=\"200\" height=\"200\" />fgdf </div>
</div> 
</div>


</div>


<div style=\"background-image:url('";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/footer.jpg"), "html", null, true);
        echo "'); width:1000px; height:300px; float:left\">
</div>


<div id=\"footer\">
<gcse:searchresults></gcse:searchresults> 
</div>


</div>
";
    }

    // line 168
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  ";
        // line 169
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryRotate.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/s3Slider.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/cycle_plugin.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 172
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
        return array (  391 => 172,  387 => 171,  383 => 170,  378 => 169,  374 => 168,  359 => 157,  342 => 142,  334 => 135,  325 => 132,  319 => 131,  315 => 129,  311 => 128,  304 => 123,  293 => 113,  278 => 107,  271 => 105,  265 => 104,  262 => 103,  258 => 100,  247 => 97,  240 => 95,  234 => 94,  231 => 93,  223 => 87,  219 => 85,  200 => 81,  174 => 69,  167 => 67,  161 => 66,  158 => 65,  148 => 57,  140 => 55,  134 => 52,  238 => 71,  226 => 65,  221 => 63,  217 => 62,  207 => 58,  203 => 57,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 43,  99 => 34,  87 => 32,  69 => 29,  56 => 26,  40 => 9,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 110,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 66,  222 => 73,  220 => 72,  215 => 70,  211 => 83,  204 => 82,  198 => 63,  185 => 72,  183 => 52,  177 => 58,  160 => 57,  112 => 39,  82 => 24,  65 => 16,  38 => 3,  144 => 56,  141 => 41,  135 => 40,  126 => 50,  109 => 41,  103 => 34,  67 => 13,  61 => 16,  47 => 9,  105 => 35,  93 => 24,  76 => 19,  72 => 14,  68 => 12,  27 => 4,  91 => 20,  84 => 21,  94 => 39,  88 => 22,  79 => 23,  59 => 22,  21 => 2,  44 => 10,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 60,  205 => 84,  201 => 83,  196 => 80,  194 => 78,  191 => 54,  189 => 75,  186 => 76,  180 => 72,  172 => 67,  159 => 44,  154 => 59,  147 => 42,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 30,  71 => 19,  58 => 9,  34 => 11,  26 => 6,  24 => 3,  25 => 3,  19 => 1,  70 => 20,  63 => 28,  46 => 5,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 38,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 20,  74 => 16,  66 => 15,  55 => 8,  52 => 7,  50 => 25,  43 => 7,  41 => 4,  37 => 17,  35 => 5,  32 => 2,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 45,  162 => 57,  157 => 56,  153 => 43,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 51,  122 => 44,  119 => 36,  116 => 35,  111 => 36,  108 => 37,  102 => 30,  98 => 26,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 31,  73 => 18,  64 => 12,  60 => 23,  57 => 14,  54 => 14,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 8,  33 => 4,  30 => 7,);
    }
}
