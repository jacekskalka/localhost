<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_1fd8d3f2605ae6e2c8494743a1728e92 extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  173 => 85,  166 => 82,  156 => 77,  150 => 75,  370 => 156,  366 => 155,  352 => 149,  342 => 146,  330 => 140,  320 => 135,  314 => 131,  311 => 130,  306 => 128,  264 => 105,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  202 => 73,  193 => 68,  190 => 89,  107 => 27,  209 => 77,  176 => 61,  170 => 60,  174 => 58,  167 => 64,  164 => 63,  356 => 163,  347 => 160,  333 => 141,  325 => 138,  309 => 141,  302 => 137,  288 => 129,  259 => 109,  182 => 64,  158 => 56,  128 => 45,  125 => 44,  110 => 42,  113 => 40,  140 => 42,  97 => 23,  86 => 29,  49 => 13,  431 => 157,  427 => 156,  418 => 154,  410 => 151,  398 => 149,  388 => 160,  383 => 142,  379 => 158,  375 => 140,  371 => 139,  367 => 138,  363 => 137,  360 => 152,  357 => 151,  353 => 134,  349 => 133,  340 => 158,  335 => 157,  331 => 126,  327 => 139,  319 => 123,  315 => 122,  312 => 121,  308 => 129,  305 => 119,  285 => 108,  275 => 111,  269 => 104,  248 => 95,  242 => 94,  236 => 93,  214 => 82,  192 => 72,  169 => 56,  134 => 54,  90 => 41,  77 => 24,  53 => 11,  523 => 397,  519 => 237,  515 => 236,  511 => 235,  506 => 234,  502 => 233,  468 => 202,  423 => 155,  415 => 153,  405 => 148,  401 => 147,  394 => 146,  390 => 145,  385 => 159,  377 => 157,  368 => 132,  362 => 153,  358 => 130,  354 => 150,  350 => 127,  343 => 159,  338 => 118,  323 => 149,  316 => 145,  303 => 112,  300 => 111,  296 => 113,  281 => 125,  274 => 121,  261 => 102,  258 => 103,  252 => 138,  241 => 89,  233 => 87,  227 => 91,  188 => 66,  181 => 87,  168 => 69,  137 => 54,  124 => 46,  62 => 27,  378 => 91,  361 => 89,  355 => 88,  351 => 87,  348 => 86,  344 => 147,  339 => 145,  322 => 83,  310 => 73,  293 => 71,  283 => 69,  280 => 114,  271 => 66,  254 => 101,  228 => 87,  218 => 84,  206 => 78,  161 => 80,  148 => 74,  238 => 97,  226 => 86,  221 => 83,  217 => 83,  207 => 95,  203 => 77,  199 => 56,  195 => 55,  187 => 53,  179 => 51,  175 => 50,  129 => 39,  117 => 44,  99 => 34,  87 => 40,  69 => 20,  56 => 13,  40 => 6,  23 => 3,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 67,  273 => 110,  270 => 84,  268 => 107,  263 => 103,  249 => 79,  245 => 96,  230 => 92,  222 => 85,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 69,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 23,  38 => 18,  144 => 73,  141 => 55,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 14,  61 => 12,  47 => 21,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  27 => 3,  91 => 35,  84 => 25,  94 => 33,  88 => 20,  79 => 35,  59 => 13,  21 => 2,  44 => 20,  31 => 4,  28 => 3,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 71,  196 => 92,  194 => 62,  191 => 70,  189 => 64,  186 => 76,  180 => 72,  172 => 64,  159 => 44,  154 => 48,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 24,  78 => 12,  75 => 23,  71 => 20,  58 => 25,  34 => 8,  26 => 9,  24 => 1,  25 => 29,  19 => 1,  70 => 15,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 47,  152 => 49,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 35,  101 => 45,  96 => 21,  83 => 28,  80 => 32,  74 => 21,  66 => 19,  55 => 15,  52 => 14,  50 => 22,  43 => 11,  41 => 19,  37 => 5,  35 => 9,  32 => 6,  29 => 5,  184 => 88,  178 => 86,  171 => 84,  165 => 54,  162 => 53,  157 => 56,  153 => 62,  151 => 47,  143 => 43,  138 => 55,  136 => 50,  133 => 31,  130 => 39,  122 => 51,  119 => 57,  116 => 31,  111 => 36,  108 => 41,  102 => 34,  98 => 32,  95 => 43,  92 => 21,  89 => 29,  85 => 29,  81 => 24,  73 => 33,  64 => 18,  60 => 15,  57 => 16,  54 => 12,  51 => 16,  48 => 11,  45 => 13,  42 => 11,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}
