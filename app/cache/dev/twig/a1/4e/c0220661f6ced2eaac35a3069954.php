<?php

/* WebProfilerBundle:Profiler:toolbar.html.twig */
class __TwigTemplate_a14ec0220661f6ced2eaac35a3069954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- START of Symfony2 Web Debug Toolbar -->
";
        // line 2
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 3
            echo "    ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")), "floatable" => true)));
            // line 4
            echo "    <div style=\"clear: both; height: 38px;\"></div>
";
        }
        // line 6
        echo "
<div class=\"sf-toolbarreset\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) ? $context["templates"] : $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "renderblock", array(0 => "toolbar", 1 => array("collector" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "getcollector", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "profiler_url" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "token" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "token"), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
            // line 15
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "
    ";
        // line 18
        if (("normal" != (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 19
            echo "        <a class=\"hide-button\" title=\"Close Toolbar\" onclick=\"
            var p = this.parentNode;
            p.style.display = 'none';
            (p.previousElementSibling || p.previousSibling).style.display = 'none';
        \"></a>
    ";
        }
        // line 25
        echo "</div>
<!-- END of Symfony2 Web Debug Toolbar -->
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  150 => 75,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  254 => 101,  202 => 73,  193 => 68,  169 => 56,  107 => 27,  209 => 77,  176 => 61,  170 => 60,  90 => 41,  188 => 66,  164 => 63,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  323 => 149,  316 => 145,  302 => 137,  288 => 129,  281 => 125,  259 => 109,  252 => 138,  228 => 87,  214 => 82,  206 => 78,  192 => 72,  182 => 64,  128 => 45,  125 => 44,  110 => 42,  113 => 40,  53 => 38,  97 => 23,  86 => 29,  77 => 18,  356 => 163,  352 => 149,  347 => 160,  344 => 147,  338 => 102,  326 => 100,  321 => 98,  317 => 97,  313 => 96,  309 => 141,  305 => 94,  294 => 92,  291 => 91,  283 => 89,  274 => 121,  266 => 84,  251 => 81,  244 => 79,  227 => 68,  190 => 89,  156 => 77,  62 => 25,  49 => 17,  391 => 172,  387 => 171,  383 => 170,  378 => 169,  374 => 168,  359 => 157,  342 => 146,  334 => 135,  325 => 138,  319 => 131,  315 => 129,  311 => 130,  304 => 123,  293 => 113,  278 => 87,  271 => 105,  265 => 104,  262 => 83,  258 => 103,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  223 => 66,  219 => 85,  200 => 60,  174 => 58,  167 => 64,  161 => 80,  158 => 56,  148 => 74,  140 => 42,  134 => 54,  238 => 97,  226 => 86,  221 => 83,  217 => 83,  207 => 95,  203 => 77,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 44,  99 => 21,  87 => 40,  69 => 20,  56 => 15,  40 => 6,  23 => 3,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 85,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 66,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 23,  38 => 18,  144 => 73,  141 => 36,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 21,  61 => 18,  47 => 21,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 4,  91 => 28,  84 => 27,  94 => 33,  88 => 20,  79 => 35,  59 => 13,  21 => 2,  44 => 11,  31 => 6,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 56,  191 => 70,  189 => 75,  186 => 76,  180 => 72,  172 => 64,  159 => 45,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 24,  78 => 26,  75 => 24,  71 => 23,  58 => 25,  34 => 8,  26 => 9,  24 => 3,  25 => 29,  19 => 1,  70 => 13,  63 => 21,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 49,  149 => 39,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 23,  101 => 33,  96 => 21,  83 => 28,  80 => 32,  74 => 25,  66 => 19,  55 => 15,  52 => 18,  50 => 18,  43 => 11,  41 => 12,  37 => 7,  35 => 8,  32 => 4,  29 => 6,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 31,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 36,  108 => 41,  102 => 34,  98 => 32,  95 => 34,  92 => 21,  89 => 28,  85 => 29,  81 => 24,  73 => 33,  64 => 11,  60 => 15,  57 => 20,  54 => 19,  51 => 37,  48 => 11,  45 => 13,  42 => 15,  39 => 9,  36 => 9,  33 => 10,  30 => 7,);
    }
}
