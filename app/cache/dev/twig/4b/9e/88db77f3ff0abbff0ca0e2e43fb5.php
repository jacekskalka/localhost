<?php

/* ::base.html.twig */
class __TwigTemplate_4b9e88db77f3ff0abbff0ca0e2e43fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts' => array($this, 'block_scripts'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('scripts', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Informacje";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_scripts($context, array $blocks = array())
    {
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  489 => 211,  485 => 210,  481 => 209,  476 => 208,  472 => 207,  416 => 156,  408 => 149,  398 => 145,  394 => 144,  387 => 143,  383 => 142,  378 => 139,  370 => 132,  361 => 129,  355 => 128,  351 => 127,  347 => 125,  343 => 124,  336 => 119,  331 => 115,  316 => 112,  309 => 110,  296 => 109,  293 => 108,  289 => 105,  274 => 102,  267 => 100,  254 => 99,  251 => 98,  245 => 93,  238 => 88,  234 => 86,  226 => 84,  220 => 83,  215 => 82,  211 => 81,  205 => 78,  200 => 75,  196 => 72,  181 => 69,  174 => 67,  161 => 66,  158 => 65,  148 => 57,  144 => 56,  140 => 55,  134 => 52,  130 => 51,  126 => 50,  117 => 43,  112 => 39,  98 => 26,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  73 => 11,  67 => 13,  64 => 12,  58 => 9,  55 => 8,  52 => 7,  46 => 11,  41 => 4,  38 => 3,  32 => 2,);
    }
}
