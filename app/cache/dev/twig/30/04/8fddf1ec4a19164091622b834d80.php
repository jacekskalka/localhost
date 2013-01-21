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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "header1"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "header2"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["files"]) ? $context["files"] : $this->getContext($context, "files"))) - 1)));
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index"), "html", null, true);
            echo "\" style=\"float:left; padding : 5px; ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 5)) {
                echo " display : none; ";
            }
            echo "  \">

<div style=\"width:60px;height:40px ;background-image:url('";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")), 0, array(), "array"), "html", null, true);
        echo "');
background-size:contain;background-position:center;background-repeat:no-repeat;\"> &nbsp; </div>
<td>
<td><a id=\"next_big\" href=\"#\"><img class=\"arrow\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/right_arrow.png"), "html", null, true);
        echo "\"/></a> <td>
</tr></table>
</div>

";
        // line 44
        echo "<div id=\"header3\">
<h4> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "header3"), "html", null, true);
        echo " </h4>
</div>
<div id=\"content\" > 
<p> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "content"), "html", null, true);
        echo " </p>
</div>

";
        // line 52
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "komentarz"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "komentarz"), 'errors');
        echo " </br>  
";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "podpis"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "podpis"), 'errors');
        echo " </br>  
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
<input type=\"submit\" />
</form>
";
        // line 60
        echo " <div class=\"skomentuj2\" style=\"display:none;  position: fixed; top: 30%; left: 30%;background : #CCE1FC; padding: 20px;border:1px solid black\"> 
 <em>Twoja odpowiedź : </em> <em class=\"zamknij\" style=\"float:right\"> Zamknij </em>
 </br>
 <form class=\"form2\" action=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("informacje_main_main_default_strona", array("slug" => $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "komentarz"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "komentarz"), 'errors');
        echo " </br>  
";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "podpis"), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "podpis"), 'errors');
        echo " </br> 
";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), "hidden"), 'widget');
        echo " 
";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'rest');
        echo "
";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form2"]) ? $context["form2"] : $this->getContext($context, "form2")), 'errors');
        echo "
<input type=\"submit\" />
</form></div>



";
        // line 76
        echo "<hr/>

";
        // line 79
        echo "
";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["komentarze"]) ? $context["komentarze"] : $this->getContext($context, "komentarze")));
        foreach ($context['_seq'] as $context["_key"] => $context["komentarz"]) {
            // line 81
            echo "<div class=\"komentarz\"> <i> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "podpis"), "html", null, true);
            echo "</i> | ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "czas"), "date"), "html", null, true);
            echo " 
<em style=\"float:right\"> ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "minus"), "html", null, true);
            echo " </em>
<em style=\"display:none\" > ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "id"), "html", null, true);
            echo " </em>
<img class=\"minus\" style=\"width:20px;float:right;\" src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/thumb_down.png"), "html", null, true);
            echo "\"/></a>
<img class=\"plus\" style=\"width:20px;float:right;\" src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/thumb_up.png"), "html", null, true);
            echo "\"/></a>
<em style=\"float:right\"> ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "plus"), "html", null, true);
            echo " </em>
 <hr/> ";
            // line 87
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "komentarz"), "html", null, true));
            echo " </br> </div> 
 <em class=\"odpowiedz\" style=\"margin-left:10px; color:white; background-color:green; float:left\"> Odpowiedz </em> 
 <em style=\"display:none\" > ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "id"), "html", null, true);
            echo " </em>
\t";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["komentarze2"]) ? $context["komentarze2"] : $this->getContext($context, "komentarze2")));
            foreach ($context['_seq'] as $context["_key"] => $context["komentarz2"]) {
                // line 91
                echo "\t\t";
                if (($this->getAttribute($this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "parent"), "id") == $this->getAttribute((isset($context["komentarz"]) ? $context["komentarz"] : $this->getContext($context, "komentarz")), "id"))) {
                    // line 92
                    echo "\t\t<div class=\"komentarz2\"> <i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "podpis"), "html", null, true);
                    echo "</i> | ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "czas"), "date"), "html", null, true);
                    echo " 
\t\t<em style=\"float:right\"> ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "minus"), "html", null, true);
                    echo " </em>
\t\t<em style=\"display:none\" > ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "id"), "html", null, true);
                    echo " </em>
\t\t<img class=\"minus\" style=\"width:20px;float:right;\" src=\"";
                    // line 95
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/thumb_down.png"), "html", null, true);
                    echo "\"/></a>
\t\t<img class=\"plus\" style=\"width:20px;float:right;\" src=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/thumb_up.png"), "html", null, true);
                    echo "\"/></a>
\t\t<em style=\"float:right\"> ";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "plus"), "html", null, true);
                    echo " </em>
        <hr/> ";
                    // line 98
                    echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["komentarz2"]) ? $context["komentarz2"] : $this->getContext($context, "komentarz2")), "komentarz"), "html", null, true));
                    echo " </br> </div> 
\t\t";
                }
                // line 100
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['komentarz2'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            echo "\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['komentarz'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 102
        echo "
</div>
";
    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        // line 106
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/galeria.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 108
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
        return array (  356 => 108,  352 => 107,  347 => 106,  344 => 105,  338 => 102,  326 => 100,  321 => 98,  317 => 97,  313 => 96,  309 => 95,  305 => 94,  301 => 93,  294 => 92,  291 => 91,  287 => 90,  283 => 89,  278 => 87,  274 => 86,  270 => 85,  266 => 84,  262 => 83,  258 => 82,  251 => 81,  247 => 80,  244 => 79,  240 => 76,  231 => 69,  227 => 68,  223 => 66,  217 => 65,  211 => 64,  205 => 63,  200 => 60,  194 => 56,  190 => 55,  184 => 54,  178 => 53,  171 => 52,  165 => 48,  159 => 45,  156 => 44,  149 => 39,  141 => 36,  135 => 33,  132 => 32,  127 => 29,  123 => 27,  106 => 23,  99 => 21,  89 => 19,  72 => 18,  66 => 15,  62 => 13,  60 => 12,  55 => 9,  52 => 8,  49 => 7,  42 => 5,  39 => 4,  31 => 3,);
    }
}
