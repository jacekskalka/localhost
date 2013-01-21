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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
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

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
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
        return array (  69 => 11,  64 => 10,  59 => 6,  53 => 5,  47 => 12,  44 => 11,  42 => 10,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  264 => 100,  260 => 99,  256 => 98,  251 => 97,  247 => 96,  237 => 89,  234 => 87,  223 => 84,  216 => 82,  210 => 81,  207 => 80,  203 => 77,  192 => 74,  185 => 72,  179 => 71,  176 => 70,  172 => 67,  161 => 64,  154 => 62,  148 => 61,  145 => 60,  135 => 52,  131 => 51,  127 => 50,  121 => 47,  117 => 46,  113 => 45,  104 => 38,  99 => 34,  85 => 21,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  60 => 13,  54 => 8,  51 => 7,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
