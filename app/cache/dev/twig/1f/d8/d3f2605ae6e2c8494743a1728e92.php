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
        return array (  59 => 21,  50 => 15,  42 => 12,  32 => 6,  26 => 3,  19 => 1,  78 => 12,  73 => 11,  68 => 7,  57 => 5,  48 => 12,  46 => 14,  39 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 2,  266 => 104,  262 => 102,  256 => 100,  251 => 98,  247 => 97,  237 => 90,  234 => 88,  223 => 85,  216 => 83,  210 => 82,  207 => 81,  203 => 78,  192 => 75,  185 => 73,  179 => 72,  176 => 71,  172 => 68,  161 => 65,  154 => 63,  148 => 62,  145 => 61,  135 => 53,  131 => 52,  127 => 51,  121 => 48,  117 => 47,  113 => 46,  104 => 39,  99 => 35,  85 => 22,  80 => 20,  75 => 18,  71 => 17,  67 => 16,  63 => 6,  60 => 14,  54 => 9,  51 => 13,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
