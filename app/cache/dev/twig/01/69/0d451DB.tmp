<?php

/* MDWDemoBundle:Users:index.html.twig */
class __TwigTemplate_01690d405b7b395754849c93aa64e9a2dee591c0dbe29f52276384f847af9fa6 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\"></script>
<script>

\tfunction loadstats(){

\t\t\tvar url=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("user_edit", array("id" => 1));
        // line 9
        echo "\"
            \$.ajax({   
                type: \"POST\",
                url:url,
                data:{recoger:\"datorecibidopost\"},
                success: function(datos){\t\t\t\t\t\t
                    \$('#content').html(datos);
                }
            });
    }
\t
\t
\t
\tfunction loadapp(name){

\t\t\tvar url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("module", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\"
\t\t\t
            \$.ajax({   
                type: \"POST\",
                url:url,
                data:{recoger:\"datorecibidopost\"},
                success: function(datos){\t\t\t\t\t\t
                    \$('#content').html(datos);
                }
            });
    }
\t


";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulesname"]) ? $context["modulesname"] : $this->getContext($context, "modulesname")));
        foreach ($context['_seq'] as $context["_key"] => $context["modulename"]) {
            // line 39
            echo "\t
\tdocument.getElementById(\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["modulename"]) ? $context["modulename"] : $this->getContext($context, "modulename")), "html", null, true);
            echo "\").addEventListener(\"click\", function() {
\t\tvar url=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("module", array("name" => (isset($context["modulename"]) ? $context["modulename"] : $this->getContext($context, "modulename")))), "html", null, true);
            echo "\"
\t\t\t
            \$.ajax({   
                type: \"POST\",
                url:url,
                data:{recoger:\"datorecibidopost\"},
                success: function(datos){\t\t\t\t\t\t
                    \$('#content').html(datos);
                }
            });
\t}, false);
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t
</script>



";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulesname"]) ? $context["modulesname"] : $this->getContext($context, "modulesname")));
        foreach ($context['_seq'] as $context["_key"] => $context["modulename"]) {
            // line 60
            echo "\t";
            // line 65
            echo "\t
\t<a id=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["modulename"]) ? $context["modulename"] : $this->getContext($context, "modulename")), "html", null, true);
            echo "\" href=\"#\" style='cursor: pointer;'>
\t\t";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["modulename"]) ? $context["modulename"] : $this->getContext($context, "modulename")), "html", null, true);
            echo "
\t</a><br>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulename'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Users:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 71,  112 => 67,  108 => 66,  105 => 65,  103 => 60,  99 => 59,  92 => 54,  73 => 41,  69 => 40,  66 => 39,  62 => 38,  45 => 24,  28 => 9,  26 => 6,  19 => 1,);
    }
}
