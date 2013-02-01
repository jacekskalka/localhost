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
        return array (  378 => 91,  361 => 89,  355 => 88,  351 => 87,  348 => 86,  344 => 85,  339 => 84,  322 => 83,  310 => 73,  293 => 71,  283 => 69,  280 => 68,  271 => 66,  254 => 65,  228 => 56,  218 => 54,  206 => 51,  161 => 39,  148 => 36,  238 => 71,  226 => 65,  221 => 63,  217 => 62,  207 => 58,  203 => 57,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 37,  99 => 34,  87 => 32,  69 => 29,  56 => 17,  40 => 8,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 70,  282 => 90,  276 => 67,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 58,  230 => 66,  222 => 55,  220 => 72,  215 => 53,  211 => 52,  204 => 66,  198 => 63,  185 => 61,  183 => 52,  177 => 58,  160 => 57,  112 => 25,  82 => 20,  65 => 16,  38 => 6,  144 => 35,  141 => 41,  135 => 40,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 9,  105 => 35,  93 => 33,  76 => 22,  72 => 14,  68 => 7,  27 => 4,  91 => 20,  84 => 28,  94 => 39,  88 => 27,  79 => 23,  59 => 22,  21 => 2,  44 => 10,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 60,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 54,  189 => 50,  186 => 76,  180 => 72,  172 => 67,  159 => 44,  154 => 59,  147 => 42,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 12,  75 => 30,  71 => 19,  58 => 15,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 20,  63 => 6,  46 => 11,  22 => 2,  163 => 63,  155 => 38,  152 => 49,  149 => 51,  145 => 46,  139 => 34,  131 => 42,  123 => 38,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 25,  43 => 9,  41 => 7,  37 => 17,  35 => 5,  32 => 3,  29 => 2,  184 => 70,  178 => 41,  171 => 62,  165 => 45,  162 => 57,  157 => 56,  153 => 43,  151 => 37,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 33,  119 => 36,  116 => 35,  111 => 36,  108 => 37,  102 => 30,  98 => 22,  95 => 23,  92 => 28,  89 => 22,  85 => 21,  81 => 31,  73 => 11,  64 => 17,  60 => 23,  57 => 5,  54 => 14,  51 => 13,  48 => 12,  45 => 8,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 5,);
    }
}
