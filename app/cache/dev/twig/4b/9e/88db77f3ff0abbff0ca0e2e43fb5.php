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
        return array (  391 => 172,  387 => 171,  383 => 170,  378 => 169,  374 => 168,  359 => 157,  342 => 142,  334 => 135,  325 => 132,  319 => 131,  315 => 129,  311 => 128,  304 => 123,  293 => 113,  278 => 107,  271 => 105,  265 => 104,  262 => 103,  258 => 100,  247 => 97,  240 => 95,  234 => 94,  231 => 93,  223 => 87,  219 => 85,  200 => 81,  174 => 69,  167 => 67,  161 => 66,  158 => 65,  148 => 57,  140 => 55,  134 => 52,  238 => 71,  226 => 65,  221 => 63,  217 => 62,  207 => 58,  203 => 57,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 43,  99 => 34,  87 => 32,  69 => 29,  56 => 26,  40 => 9,  23 => 3,  301 => 100,  295 => 96,  292 => 95,  289 => 110,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 66,  222 => 73,  220 => 72,  215 => 70,  211 => 83,  204 => 82,  198 => 63,  185 => 72,  183 => 52,  177 => 58,  160 => 57,  112 => 39,  82 => 24,  65 => 16,  38 => 3,  144 => 56,  141 => 41,  135 => 40,  126 => 50,  109 => 41,  103 => 34,  67 => 13,  61 => 16,  47 => 9,  105 => 35,  93 => 24,  76 => 19,  72 => 14,  68 => 7,  27 => 4,  91 => 20,  84 => 21,  94 => 39,  88 => 22,  79 => 23,  59 => 22,  21 => 2,  44 => 10,  31 => 5,  28 => 3,  225 => 96,  216 => 90,  212 => 60,  205 => 84,  201 => 83,  196 => 80,  194 => 78,  191 => 54,  189 => 75,  186 => 76,  180 => 72,  172 => 67,  159 => 44,  154 => 59,  147 => 42,  132 => 48,  127 => 49,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 12,  75 => 30,  71 => 19,  58 => 9,  34 => 6,  26 => 6,  24 => 1,  25 => 3,  19 => 1,  70 => 20,  63 => 6,  46 => 11,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 38,  120 => 46,  115 => 39,  106 => 35,  101 => 36,  96 => 21,  83 => 18,  80 => 20,  74 => 16,  66 => 15,  55 => 8,  52 => 7,  50 => 25,  43 => 7,  41 => 4,  37 => 17,  35 => 5,  32 => 2,  29 => 4,  184 => 70,  178 => 71,  171 => 62,  165 => 45,  162 => 57,  157 => 56,  153 => 43,  151 => 52,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 51,  122 => 44,  119 => 36,  116 => 35,  111 => 36,  108 => 37,  102 => 30,  98 => 26,  95 => 34,  92 => 28,  89 => 19,  85 => 24,  81 => 31,  73 => 11,  64 => 12,  60 => 23,  57 => 5,  54 => 14,  51 => 13,  48 => 12,  45 => 8,  42 => 7,  39 => 8,  36 => 7,  33 => 4,  30 => 5,);
    }
}
