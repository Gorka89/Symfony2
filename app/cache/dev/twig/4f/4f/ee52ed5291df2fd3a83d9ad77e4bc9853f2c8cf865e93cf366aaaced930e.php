<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_4f4fee52ed5291df2fd3a83d9ad77e4bc9853f2c8cf865e93cf366aaaced930e extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

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
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

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
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  66 => 25,  32 => 6,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  131 => 24,  126 => 20,  123 => 19,  118 => 16,  113 => 15,  108 => 14,  104 => 25,  102 => 24,  98 => 22,  96 => 19,  90 => 16,  81 => 14,  71 => 8,  68 => 7,  62 => 24,  58 => 10,  56 => 7,  52 => 6,  49 => 5,  41 => 26,  35 => 11,  28 => 1,  350 => 162,  338 => 156,  333 => 154,  326 => 150,  320 => 149,  315 => 146,  311 => 145,  305 => 141,  302 => 140,  296 => 135,  287 => 132,  283 => 131,  280 => 130,  276 => 129,  267 => 122,  264 => 121,  257 => 118,  254 => 117,  235 => 100,  227 => 93,  211 => 90,  207 => 88,  201 => 86,  198 => 85,  190 => 82,  187 => 81,  179 => 78,  176 => 77,  174 => 76,  171 => 75,  154 => 74,  148 => 70,  139 => 66,  134 => 61,  129 => 58,  125 => 57,  117 => 52,  101 => 39,  86 => 15,  78 => 13,  74 => 21,  70 => 26,  67 => 19,  63 => 13,  60 => 12,  54 => 9,  50 => 15,  46 => 14,  42 => 12,  39 => 13,  33 => 4,);
    }
}
