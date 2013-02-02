<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_ecb4c026b7ab0b6a0fdf0144bfa991ed extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  26 => 3,  19 => 1,  78 => 12,  73 => 11,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 2,  523 => 238,  519 => 237,  515 => 236,  511 => 235,  506 => 234,  502 => 233,  468 => 202,  423 => 159,  415 => 152,  405 => 148,  401 => 147,  394 => 146,  390 => 145,  385 => 142,  377 => 135,  368 => 132,  362 => 131,  358 => 130,  354 => 128,  350 => 127,  343 => 122,  338 => 118,  323 => 115,  316 => 113,  303 => 112,  300 => 111,  296 => 108,  281 => 105,  274 => 103,  261 => 102,  258 => 101,  252 => 96,  245 => 91,  241 => 89,  233 => 87,  227 => 86,  222 => 85,  218 => 84,  212 => 81,  207 => 78,  203 => 75,  188 => 72,  181 => 70,  168 => 69,  165 => 68,  155 => 60,  151 => 59,  147 => 58,  141 => 55,  137 => 54,  133 => 53,  124 => 46,  119 => 42,  105 => 29,  100 => 27,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  80 => 21,  74 => 16,  71 => 15,  66 => 12,  62 => 10,  59 => 21,  56 => 8,  50 => 15,  46 => 14,  41 => 4,  38 => 3,  32 => 6,);
    }
}
