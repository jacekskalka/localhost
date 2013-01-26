<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4d242c2085a8a98a04c84fedc3e9dc57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  164 => 63,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  323 => 149,  316 => 145,  302 => 137,  288 => 129,  281 => 125,  259 => 109,  252 => 105,  228 => 89,  214 => 82,  206 => 78,  192 => 72,  182 => 69,  128 => 45,  125 => 44,  110 => 42,  113 => 40,  53 => 11,  97 => 45,  86 => 29,  77 => 24,  356 => 163,  352 => 107,  347 => 160,  344 => 105,  338 => 102,  326 => 100,  321 => 98,  317 => 97,  313 => 96,  309 => 141,  305 => 94,  294 => 92,  291 => 91,  283 => 89,  274 => 121,  266 => 84,  251 => 81,  244 => 79,  227 => 68,  190 => 55,  156 => 44,  62 => 16,  49 => 13,  391 => 172,  387 => 171,  383 => 170,  378 => 169,  374 => 168,  359 => 157,  342 => 142,  334 => 135,  325 => 150,  319 => 131,  315 => 129,  311 => 128,  304 => 123,  293 => 113,  278 => 87,  271 => 105,  265 => 104,  262 => 83,  258 => 82,  247 => 80,  240 => 76,  234 => 94,  231 => 69,  223 => 66,  219 => 85,  200 => 60,  174 => 67,  167 => 64,  161 => 66,  158 => 56,  148 => 52,  140 => 49,  134 => 54,  238 => 97,  226 => 65,  221 => 63,  217 => 83,  207 => 58,  203 => 77,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 44,  99 => 21,  87 => 34,  69 => 20,  56 => 13,  40 => 6,  23 => 1,  301 => 93,  295 => 133,  292 => 95,  289 => 110,  287 => 90,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 66,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 74,  185 => 68,  183 => 52,  177 => 58,  160 => 57,  112 => 39,  82 => 37,  65 => 23,  38 => 5,  144 => 56,  141 => 36,  135 => 47,  126 => 50,  109 => 42,  103 => 34,  67 => 23,  61 => 22,  47 => 9,  105 => 41,  93 => 31,  76 => 19,  72 => 22,  68 => 20,  27 => 3,  91 => 35,  84 => 33,  94 => 33,  88 => 41,  79 => 26,  59 => 13,  21 => 2,  44 => 8,  31 => 3,  28 => 3,  225 => 88,  216 => 90,  212 => 60,  205 => 63,  201 => 83,  196 => 80,  194 => 56,  191 => 70,  189 => 75,  186 => 76,  180 => 72,  172 => 64,  159 => 45,  154 => 54,  147 => 58,  132 => 32,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 39,  100 => 35,  78 => 12,  75 => 23,  71 => 21,  58 => 14,  34 => 6,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  70 => 24,  63 => 19,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 39,  145 => 46,  139 => 50,  131 => 46,  123 => 33,  120 => 50,  115 => 28,  106 => 23,  101 => 36,  96 => 21,  83 => 28,  80 => 32,  74 => 24,  66 => 19,  55 => 9,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  37 => 5,  35 => 6,  32 => 5,  29 => 5,  184 => 70,  178 => 53,  171 => 66,  165 => 60,  162 => 57,  157 => 56,  153 => 62,  151 => 53,  143 => 40,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 36,  108 => 41,  102 => 47,  98 => 26,  95 => 36,  92 => 43,  89 => 29,  85 => 29,  81 => 31,  73 => 11,  64 => 12,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 4,  36 => 5,  33 => 4,  30 => 3,);
    }
}
