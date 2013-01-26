<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_6f93a10e88bbd85e2e456ec76487ba7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\"/>
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  176 => 61,  170 => 60,  90 => 28,  188 => 67,  164 => 63,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  323 => 149,  316 => 145,  302 => 137,  288 => 129,  281 => 125,  259 => 109,  252 => 105,  228 => 89,  214 => 82,  206 => 78,  192 => 72,  182 => 64,  128 => 45,  125 => 44,  110 => 42,  113 => 40,  53 => 11,  97 => 45,  86 => 29,  77 => 24,  356 => 163,  352 => 107,  347 => 160,  344 => 105,  338 => 102,  326 => 100,  321 => 98,  317 => 97,  313 => 96,  309 => 141,  305 => 94,  294 => 92,  291 => 91,  283 => 89,  274 => 121,  266 => 84,  251 => 81,  244 => 79,  227 => 68,  190 => 55,  156 => 44,  62 => 16,  49 => 13,  391 => 172,  387 => 171,  383 => 170,  378 => 169,  374 => 168,  359 => 157,  342 => 142,  334 => 135,  325 => 150,  319 => 131,  315 => 129,  311 => 128,  304 => 123,  293 => 113,  278 => 87,  271 => 105,  265 => 104,  262 => 83,  258 => 82,  247 => 80,  240 => 76,  234 => 94,  231 => 69,  223 => 66,  219 => 85,  200 => 60,  174 => 67,  167 => 64,  161 => 66,  158 => 56,  148 => 58,  140 => 49,  134 => 54,  238 => 97,  226 => 65,  221 => 63,  217 => 83,  207 => 58,  203 => 77,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 44,  99 => 21,  87 => 34,  69 => 20,  56 => 13,  40 => 6,  23 => 1,  301 => 93,  295 => 133,  292 => 95,  289 => 110,  287 => 90,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 66,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 69,  185 => 68,  183 => 52,  177 => 58,  160 => 59,  112 => 39,  82 => 37,  65 => 23,  38 => 7,  144 => 56,  141 => 36,  135 => 47,  126 => 50,  109 => 42,  103 => 34,  67 => 23,  61 => 22,  47 => 11,  105 => 41,  93 => 31,  76 => 19,  72 => 22,  68 => 19,  27 => 3,  91 => 35,  84 => 25,  94 => 33,  88 => 41,  79 => 23,  59 => 13,  21 => 2,  44 => 10,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 60,  205 => 71,  201 => 83,  196 => 80,  194 => 56,  191 => 70,  189 => 75,  186 => 76,  180 => 72,  172 => 64,  159 => 45,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 35,  78 => 12,  75 => 23,  71 => 20,  58 => 14,  34 => 5,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  70 => 24,  63 => 16,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 39,  145 => 57,  139 => 50,  131 => 46,  123 => 33,  120 => 50,  115 => 44,  106 => 23,  101 => 36,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 9,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  37 => 5,  35 => 6,  32 => 5,  29 => 5,  184 => 70,  178 => 62,  171 => 66,  165 => 60,  162 => 57,  157 => 56,  153 => 62,  151 => 53,  143 => 56,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 45,  116 => 41,  111 => 36,  108 => 41,  102 => 34,  98 => 32,  95 => 31,  92 => 43,  89 => 29,  85 => 29,  81 => 24,  73 => 11,  64 => 12,  60 => 15,  57 => 16,  54 => 12,  51 => 13,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
