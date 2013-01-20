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
        return array (  69 => 11,  64 => 10,  59 => 6,  53 => 5,  47 => 12,  44 => 11,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  264 => 79,  260 => 78,  255 => 77,  252 => 76,  246 => 73,  238 => 71,  234 => 70,  230 => 69,  226 => 68,  222 => 67,  218 => 66,  211 => 65,  207 => 64,  202 => 61,  196 => 57,  192 => 56,  186 => 55,  180 => 54,  173 => 53,  167 => 49,  161 => 46,  158 => 45,  151 => 40,  148 => 39,  141 => 36,  135 => 33,  132 => 32,  127 => 29,  123 => 27,  106 => 23,  99 => 21,  89 => 19,  72 => 18,  66 => 15,  62 => 13,  60 => 12,  55 => 9,  52 => 8,  49 => 7,  42 => 10,  39 => 4,  31 => 3,);
    }
}
