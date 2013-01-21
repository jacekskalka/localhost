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
        return array (  73 => 11,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  273 => 103,  269 => 102,  266 => 101,  262 => 100,  252 => 93,  249 => 91,  238 => 88,  231 => 86,  225 => 85,  222 => 84,  218 => 81,  207 => 78,  200 => 76,  194 => 75,  191 => 74,  187 => 71,  176 => 68,  169 => 66,  163 => 65,  160 => 64,  150 => 56,  146 => 55,  142 => 54,  136 => 51,  132 => 50,  128 => 49,  119 => 42,  114 => 38,  100 => 25,  95 => 23,  90 => 21,  86 => 20,  82 => 19,  78 => 12,  75 => 17,  69 => 12,  66 => 11,  60 => 9,  55 => 8,  52 => 7,  46 => 11,  41 => 4,  38 => 3,  32 => 2,);
    }
}
