<?php

/* InformacjeMainMainBundle:Default:strona.html.twig */
class __TwigTemplate_30048fddf1ec4a19164091622b834d80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : null), "header1"), "html", null, true);
        echo "  ";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/strona.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /> 
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"wrapper\">
<h1> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : null), "header2"), "html", null, true);
        echo " </h1>

";
        // line 12
        echo "\t\t";
        // line 13
        echo "<div id=\"galeria\">
<table><tr>
<td><a href=\"#\" id=\"prev\" ><img class=\"arrow\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/db_left_arrow.png"), "html", null, true);
        echo "\"/></a></td>
<td>
<ul id=\"small_list\" style=\"list-style : none\">
";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["files"]) ? $context["files"] : null)) - 1)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "<li class=\"li_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" style=\"float:left; padding : 5px; ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index") > 5)) {
                echo " display : none; ";
            }
            echo "  \">

<div style=\"width:60px;height:40px ;background-image:url('";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["files"]) ? $context["files"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "html", null, true);
            echo "');
background-size:contain;background-position:center;background-repeat:no-repeat;\"> &nbsp; </div>
";
            // line 23
            echo " 

</li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "</ul>
</td>
<td><a href=\"#\" id=\"next\"><img class=\"arrow\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/db_right_arrow.png"), "html", null, true);
        echo "\"/></a></td>
</tr></table>
\t\t";
        // line 32
        echo "<table><tr>
<td><a id=\"prev_big\" href=\"#\"><img class=\"arrow\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/left_arrow.png"), "html", null, true);
        echo "\"/></a> <td>
<td>

<div id=\"big\" style=\"width:440px;height:350px ;background-image:url('";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["files"]) ? $context["files"] : null), 0, array(), "array"), "html", null, true);
        echo "');
background-size:contain;background-position:center;background-repeat:no-repeat;\"> &nbsp; </div>
";
        // line 39
        echo "<td>
<td><a id=\"next_big\" href=\"#\"><img class=\"arrow\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/right_arrow.png"), "html", null, true);
        echo "\"/></a> <td>
</tr></table>
</div>

";
        // line 45
        echo "<div id=\"header3\">
<h4> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : null), "header3"), "html", null, true);
        echo " </h4>
</div>
<div id=\"content\" > 
<p> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : null), "content"), "html", null, true);
        echo " </p>
</div>

";
        // line 53
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "komentarz"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "komentarz"), 'errors');
        echo " </br>  
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "podpis"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "podpis"), 'errors');
        echo " </br>  
";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
<input type=\"submit\" />
</form>
";
        // line 61
        echo " <div class=\"skomentuj2\" style=\"display:none;  position: fixed; top: 30%; left: 30%;background : #CCE1FC; padding: 20px;border:1px solid black\"> 
 <em>Twoja odpowiedź : </em> <em class=\"zamknij\" style=\"float:right\"> Zamknij </em>
 </br>
 <form class=\"form2\" action=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_komentarz", array("slug" => $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : null), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "komentarz"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "komentarz"), 'errors');
        echo " </br>  
";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "podpis"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : null), "podpis"), 'errors');
        echo " </br>  
";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'rest');
        echo "
";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : null), 'errors');
        echo "
<input type=\"submit\" />
</form></div>



";
        // line 75
        echo "<hr/>


";
        // line 78
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["komentarze"]) ? $context["komentarze"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["komentarz"]) {
            // line 79
            echo "<div class=\"komentarz\"> <i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "podpis"), "html", null, true);
            echo "</i> | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "czas"), "date"), "html", null, true);
            echo " 
<em style=\"float:right\"> ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "minus"), "html", null, true);
            echo " </em>
<em style=\"display:none\" > ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "id"), "html", null, true);
            echo " </em>
<img class=\"minus\" style=\"width:20px;float:right;\" src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/thumb_down.png"), "html", null, true);
            echo "\"/></a>
<img class=\"plus\" style=\"width:20px;float:right;\" src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/thumb_up.png"), "html", null, true);
            echo "\"/></a>
<em style=\"float:right\"> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "plus"), "html", null, true);
            echo " </em>
 <hr/> ";
            // line 85
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "komentarz"), "html", null, true));
            echo " </br> </div> 
 <em class=\"odpowiedz\" style=\"margin-left:510px; color:white; background-color:red\"> Odpowiedz </em> 
 <em style=\"display:none\" > ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : null), "id"), "html", null, true);
            echo " </em>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['komentarz'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 89
        echo "
</div>
";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/galeria.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/komentarze.js"), "html", null, true);
        echo "\" > </script>
";
    }

    public function getTemplateName()
    {
        return "InformacjeMainMainBundle:Default:strona.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 95,  301 => 94,  296 => 93,  293 => 92,  287 => 89,  279 => 87,  274 => 85,  270 => 84,  266 => 83,  262 => 82,  258 => 81,  254 => 80,  247 => 79,  243 => 78,  238 => 75,  229 => 68,  225 => 67,  219 => 66,  213 => 65,  207 => 64,  202 => 61,  196 => 57,  192 => 56,  186 => 55,  180 => 54,  173 => 53,  167 => 49,  161 => 46,  158 => 45,  151 => 40,  148 => 39,  141 => 36,  135 => 33,  132 => 32,  127 => 29,  123 => 27,  106 => 23,  99 => 21,  89 => 19,  72 => 18,  66 => 15,  62 => 13,  60 => 12,  55 => 9,  52 => 8,  49 => 7,  42 => 5,  39 => 4,  31 => 3,);
    }
}
