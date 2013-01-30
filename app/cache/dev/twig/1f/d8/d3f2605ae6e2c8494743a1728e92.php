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
        return array (  59 => 21,  50 => 15,  42 => 12,  26 => 3,  19 => 1,  78 => 12,  68 => 7,  63 => 6,  57 => 5,  51 => 13,  48 => 12,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 2,  455 => 177,  451 => 176,  447 => 175,  442 => 174,  438 => 173,  422 => 161,  413 => 154,  403 => 150,  399 => 149,  392 => 148,  388 => 147,  383 => 144,  375 => 137,  366 => 134,  360 => 133,  356 => 132,  352 => 130,  348 => 129,  341 => 124,  330 => 114,  326 => 111,  311 => 108,  304 => 106,  291 => 105,  288 => 104,  284 => 101,  269 => 98,  262 => 96,  249 => 95,  246 => 94,  238 => 88,  234 => 86,  226 => 84,  220 => 83,  215 => 82,  211 => 81,  205 => 78,  200 => 75,  196 => 72,  181 => 69,  174 => 67,  161 => 66,  158 => 65,  148 => 57,  144 => 56,  140 => 55,  134 => 52,  130 => 51,  126 => 50,  117 => 43,  112 => 39,  98 => 26,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  73 => 11,  67 => 13,  64 => 12,  58 => 9,  55 => 8,  52 => 7,  46 => 14,  41 => 4,  38 => 3,  32 => 6,);
    }
}
