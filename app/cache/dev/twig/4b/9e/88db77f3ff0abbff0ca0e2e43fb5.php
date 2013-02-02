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
        return array (  78 => 12,  73 => 11,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  523 => 238,  519 => 237,  515 => 236,  511 => 235,  506 => 234,  502 => 233,  468 => 202,  423 => 159,  415 => 152,  405 => 148,  401 => 147,  394 => 146,  390 => 145,  385 => 142,  377 => 135,  368 => 132,  362 => 131,  358 => 130,  354 => 128,  350 => 127,  343 => 122,  338 => 118,  323 => 115,  316 => 113,  303 => 112,  300 => 111,  296 => 108,  281 => 105,  274 => 103,  261 => 102,  258 => 101,  252 => 96,  245 => 91,  241 => 89,  233 => 87,  227 => 86,  222 => 85,  218 => 84,  212 => 81,  207 => 78,  203 => 75,  188 => 72,  181 => 70,  168 => 69,  165 => 68,  155 => 60,  151 => 59,  147 => 58,  141 => 55,  137 => 54,  133 => 53,  124 => 46,  119 => 42,  105 => 29,  100 => 27,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  80 => 21,  74 => 16,  71 => 15,  66 => 12,  62 => 10,  59 => 9,  56 => 8,  50 => 6,  46 => 11,  41 => 4,  38 => 3,  32 => 2,);
    }
}
