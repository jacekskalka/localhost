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
        return array (  42 => 12,  26 => 3,  19 => 1,  78 => 12,  73 => 11,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 2,  523 => 238,  519 => 237,  515 => 236,  511 => 235,  506 => 234,  502 => 233,  468 => 202,  423 => 159,  415 => 152,  405 => 148,  401 => 147,  394 => 146,  390 => 145,  385 => 142,  377 => 135,  368 => 132,  362 => 131,  358 => 130,  354 => 128,  350 => 127,  343 => 122,  338 => 118,  323 => 115,  316 => 113,  303 => 112,  300 => 111,  296 => 108,  281 => 105,  274 => 103,  261 => 102,  258 => 101,  252 => 96,  245 => 91,  241 => 89,  233 => 87,  227 => 86,  222 => 85,  218 => 84,  212 => 81,  207 => 78,  203 => 75,  188 => 72,  181 => 70,  168 => 69,  165 => 68,  155 => 60,  151 => 59,  147 => 58,  141 => 55,  137 => 54,  133 => 53,  124 => 46,  119 => 42,  105 => 29,  100 => 27,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  80 => 21,  74 => 16,  71 => 15,  66 => 12,  62 => 10,  59 => 21,  56 => 8,  50 => 15,  46 => 14,  41 => 4,  38 => 3,  32 => 6,);
    }
}
