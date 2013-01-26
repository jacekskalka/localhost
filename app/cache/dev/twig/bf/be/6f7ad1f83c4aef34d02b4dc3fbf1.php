<?php

/* WebProfilerBundle:Collector:events.html.twig */
class __TwigTemplate_bfbe6f7ad1f83c4aef34d02b4dc3fbf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_b5f6213647b1133ba8f322a774cfd7186ed002f9"] = $this;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/events.png"), "html", null, true);
        echo "\" alt=\"Events\" /></span>
    <strong>Events</strong>
</span>
";
    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Priority</th>
            <th>Listener</th>
        </tr>
        ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calledlisteners"));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 33
            echo "            <tr>
                <td><code>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "event"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "priority"), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 36
            echo $context["__internal_b5f6213647b1133ba8f322a774cfd7186ed002f9"]->getdisplay_listener((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")));
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 39
        echo "    </table>

    ";
        // line 41
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners")) {
            // line 42
            echo "        <h2>Not Called Listeners</h2>

        <table>
            <tr>
                <th>Event name</th>
                <th>Priority</th>
                <th>Listener</th>
            </tr>
            ";
            // line 50
            $context["listeners"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "notcalledlisteners");
            // line 51
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 52
                echo "                <tr>
                    <td><code>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "event"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"), "priority"), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 55
                echo $context["__internal_b5f6213647b1133ba8f322a774cfd7186ed002f9"]->getdisplay_listener($this->getAttribute((isset($context["listeners"]) ? $context["listeners"] : $this->getContext($context, "listeners")), (isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 58
            echo "        </table>
    ";
        }
    }

    // line 62
    public function getdisplay_listener($_listener = null)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $_listener,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 63
            echo "    ";
            if (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Closure")) {
                // line 64
                echo "        Closure
    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Function")) {
                // line 66
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 67
                echo "        ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "function"), "html", null, true);
                }
                // line 68
                echo "    ";
            } elseif (($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "type") == "Method")) {
                // line 69
                echo "        ";
                $context["link"] = $this->env->getExtension('code')->getFileLink($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "file"), $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "line"));
                // line 70
                echo "        ";
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "class"));
                echo "::";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["listener"]) ? $context["listener"] : $this->getContext($context, "listener")), "method"), "html", null, true);
                }
                // line 71
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  164 => 63,  343 => 159,  340 => 158,  335 => 157,  333 => 156,  323 => 149,  316 => 145,  302 => 137,  288 => 129,  281 => 125,  259 => 109,  252 => 105,  228 => 89,  214 => 82,  206 => 78,  192 => 72,  182 => 69,  128 => 45,  125 => 44,  110 => 42,  113 => 40,  53 => 11,  97 => 45,  86 => 28,  77 => 27,  356 => 163,  352 => 107,  347 => 160,  344 => 105,  338 => 102,  326 => 100,  321 => 98,  317 => 97,  313 => 96,  309 => 141,  305 => 94,  294 => 92,  291 => 91,  283 => 89,  274 => 121,  266 => 84,  251 => 81,  244 => 79,  227 => 68,  190 => 55,  156 => 44,  62 => 13,  49 => 13,  391 => 172,  387 => 171,  383 => 170,  378 => 169,  374 => 168,  359 => 157,  342 => 142,  334 => 135,  325 => 150,  319 => 131,  315 => 129,  311 => 128,  304 => 123,  293 => 113,  278 => 87,  271 => 105,  265 => 104,  262 => 83,  258 => 82,  247 => 80,  240 => 76,  234 => 94,  231 => 69,  223 => 66,  219 => 85,  200 => 60,  174 => 67,  167 => 64,  161 => 66,  158 => 56,  148 => 52,  140 => 49,  134 => 54,  238 => 97,  226 => 65,  221 => 63,  217 => 83,  207 => 58,  203 => 77,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 44,  99 => 21,  87 => 34,  69 => 20,  56 => 26,  40 => 6,  23 => 1,  301 => 93,  295 => 133,  292 => 95,  289 => 110,  287 => 90,  282 => 90,  276 => 86,  273 => 85,  270 => 85,  268 => 83,  263 => 80,  249 => 79,  245 => 101,  230 => 66,  222 => 73,  220 => 72,  215 => 70,  211 => 81,  204 => 71,  198 => 74,  185 => 68,  183 => 52,  177 => 58,  160 => 57,  112 => 39,  82 => 37,  65 => 23,  38 => 7,  144 => 56,  141 => 36,  135 => 47,  126 => 50,  109 => 42,  103 => 34,  67 => 23,  61 => 22,  47 => 9,  105 => 41,  93 => 31,  76 => 19,  72 => 22,  68 => 21,  27 => 3,  91 => 35,  84 => 33,  94 => 33,  88 => 41,  79 => 26,  59 => 13,  21 => 2,  44 => 10,  31 => 3,  28 => 3,  225 => 88,  216 => 90,  212 => 60,  205 => 63,  201 => 83,  196 => 80,  194 => 56,  191 => 70,  189 => 75,  186 => 76,  180 => 72,  172 => 64,  159 => 45,  154 => 54,  147 => 58,  132 => 32,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 39,  100 => 35,  78 => 12,  75 => 23,  71 => 19,  58 => 16,  34 => 6,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  70 => 24,  63 => 19,  46 => 12,  22 => 2,  163 => 63,  155 => 58,  152 => 49,  149 => 39,  145 => 46,  139 => 50,  131 => 46,  123 => 33,  120 => 50,  115 => 28,  106 => 23,  101 => 36,  96 => 21,  83 => 27,  80 => 32,  74 => 24,  66 => 19,  55 => 9,  52 => 14,  50 => 25,  43 => 11,  41 => 10,  37 => 5,  35 => 6,  32 => 5,  29 => 5,  184 => 70,  178 => 53,  171 => 66,  165 => 60,  162 => 57,  157 => 56,  153 => 62,  151 => 53,  143 => 40,  138 => 55,  136 => 50,  133 => 31,  130 => 53,  122 => 51,  119 => 43,  116 => 41,  111 => 36,  108 => 41,  102 => 47,  98 => 26,  95 => 36,  92 => 43,  89 => 29,  85 => 29,  81 => 31,  73 => 11,  64 => 12,  60 => 16,  57 => 12,  54 => 13,  51 => 12,  48 => 11,  45 => 8,  42 => 8,  39 => 4,  36 => 5,  33 => 4,  30 => 3,);
    }
}
