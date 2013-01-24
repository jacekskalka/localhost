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
        return array (  59 => 21,  50 => 15,  42 => 12,  32 => 6,  26 => 3,  19 => 1,  78 => 12,  73 => 11,  68 => 7,  57 => 5,  48 => 12,  46 => 14,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 2,  266 => 104,  262 => 102,  256 => 100,  251 => 98,  247 => 97,  237 => 90,  234 => 88,  223 => 85,  216 => 83,  210 => 82,  207 => 81,  203 => 78,  192 => 75,  185 => 73,  179 => 72,  176 => 71,  172 => 68,  161 => 65,  154 => 63,  148 => 62,  145 => 61,  135 => 53,  131 => 52,  127 => 51,  121 => 48,  117 => 47,  113 => 46,  104 => 39,  99 => 35,  85 => 22,  80 => 20,  75 => 18,  71 => 17,  67 => 16,  63 => 6,  60 => 14,  54 => 9,  51 => 13,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
