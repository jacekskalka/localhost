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
        return array (  78 => 12,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  455 => 177,  451 => 176,  447 => 175,  442 => 174,  438 => 173,  422 => 161,  413 => 154,  403 => 150,  399 => 149,  392 => 148,  388 => 147,  383 => 144,  375 => 137,  366 => 134,  360 => 133,  356 => 132,  352 => 130,  348 => 129,  341 => 124,  330 => 114,  326 => 111,  311 => 108,  304 => 106,  291 => 105,  288 => 104,  284 => 101,  269 => 98,  262 => 96,  249 => 95,  246 => 94,  238 => 88,  234 => 86,  226 => 84,  220 => 83,  215 => 82,  211 => 81,  205 => 78,  200 => 75,  196 => 72,  181 => 69,  174 => 67,  161 => 66,  158 => 65,  148 => 57,  144 => 56,  140 => 55,  134 => 52,  130 => 51,  126 => 50,  117 => 43,  112 => 39,  98 => 26,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  73 => 11,  67 => 13,  64 => 12,  58 => 9,  55 => 8,  52 => 7,  46 => 11,  41 => 4,  38 => 3,  32 => 2,);
    }
}
