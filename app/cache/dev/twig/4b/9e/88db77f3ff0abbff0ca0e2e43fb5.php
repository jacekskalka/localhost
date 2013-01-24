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
        return array (  78 => 12,  73 => 11,  68 => 7,  57 => 5,  48 => 12,  46 => 11,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  266 => 104,  262 => 102,  256 => 100,  251 => 98,  247 => 97,  237 => 90,  234 => 88,  223 => 85,  216 => 83,  210 => 82,  207 => 81,  203 => 78,  192 => 75,  185 => 73,  179 => 72,  176 => 71,  172 => 68,  161 => 65,  154 => 63,  148 => 62,  145 => 61,  135 => 53,  131 => 52,  127 => 51,  121 => 48,  117 => 47,  113 => 46,  104 => 39,  99 => 35,  85 => 22,  80 => 20,  75 => 18,  71 => 17,  67 => 16,  63 => 6,  60 => 14,  54 => 9,  51 => 13,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
