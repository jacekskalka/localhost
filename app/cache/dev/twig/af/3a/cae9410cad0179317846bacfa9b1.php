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
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"wrapper\">


<div id=\"header\" > 
\t\t ";
        // line 13
        echo "<div id=\"clockHolder\" style=\"position:relative\"  >
\t<div class=\"rotatingWrapper\"><img id=\"hour\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/hour.png"), "html", null, true);
        echo "\" /></div>
\t<div class=\"rotatingWrapper\"><img id=\"min\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/minute.png"), "html", null, true);
        echo "\" /></div>
\t<div class=\"rotatingWrapper\"><img id=\"sec\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/second.png"), "html", null, true);
        echo "\" /></div>
\t<img id=\"clock\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("clock/clock.png"), "html", null, true);
        echo "\" />
</div>
<img style=\"float:left; position:relative\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/co_nowego.png"), "html", null, true);
        echo "\" />
<div style = \"width:300px; float:left;margin-top:15px; position:relative\">
 ";
        // line 21
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
        // line 34
        echo "</div>

<div id=\"content\" style=\"clear:left\">
";
        // line 38
        echo "<div class=\"wiadomości\" ><h2>Wiadomości </h2>
<table class=\"tabela\">";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["wiadomości"]) ? $context["wiadomości"] : $this->getContext($context, "wiadomości"))));
        foreach ($context['_seq'] as $context["_key"] => $context["wiadomość"]) {
            echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wiadomość"]) ? $context["wiadomość"] : $this->getContext($context, "wiadomość")), "path1"), "html", null, true);
            echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
            // line 42
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
        // line 45
        echo "</table></div>

";
        // line 48
        echo "<div class=\"wiadomości\" ><h2>Sport </h2>
<table class=\"tabela\">";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["sport"]) ? $context["sport"] : $this->getContext($context, "sport"))));
        foreach ($context['_seq'] as $context["_key"] => $context["sporty"]) {
            echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sporty"]) ? $context["sporty"] : $this->getContext($context, "sporty")), "path1"), "html", null, true);
            echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
            // line 52
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
        // line 55
        echo "</table></div>

";
        // line 58
        echo "<div class=\"wiadomości\" ><h2>Biznes </h2>
<table class=\"tabela\">";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["biznes"]) ? $context["biznes"] : $this->getContext($context, "biznes"))));
        foreach ($context['_seq'] as $context["_key"] => $context["biznesy"]) {
            echo "<tr>
<td style=\"width:80px; height:50px;\"><div id=\"mini\" style=\"width:70px;height:45px; background-image: url('";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads/documents"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["biznesy"]) ? $context["biznesy"] : $this->getContext($context, "biznesy")), "path1"), "html", null, true);
            echo "') ; 
background-size:contain; background-repeat: no-repeat; background-position : center  \" > &nbsp;</div> </td>
<td style=\"width:200px; height:50px;\"><a href=\"";
            // line 62
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
        // line 65
        echo "</table></div>
<div class=\"spacer\" style=\"clear: both;\"></div> ";
        // line 67
        echo "</div>



<div id=\"footer\"><gcse:searchresults></gcse:searchresults> </div>
</div>
";
    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  ";
        // line 75
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jqueryRotate.js"), "html", null, true);
        echo "\" > </script>
<script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/clock.js"), "html", null, true);
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
        return array (  219 => 77,  215 => 76,  210 => 75,  206 => 74,  196 => 67,  193 => 65,  182 => 62,  175 => 60,  169 => 59,  166 => 58,  162 => 55,  151 => 52,  144 => 50,  138 => 49,  135 => 48,  131 => 45,  120 => 42,  113 => 40,  107 => 39,  104 => 38,  99 => 34,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  60 => 13,  54 => 8,  51 => 7,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
