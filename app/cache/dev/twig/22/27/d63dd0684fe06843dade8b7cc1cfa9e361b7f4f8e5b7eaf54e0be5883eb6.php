<?php

/* MDWDemoBundle:Users:indexlanding.html.twig */
class __TwigTemplate_2227d63dd0684fe06843dade8b7cc1cfa9e361b7f4f8e5b7eaf54e0be5883eb6 extends Twig_Template
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
        // line 7
        echo $this->env->getExtension('routing')->getPath("load_graphic_stats");
        // line 10
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
\tfunction loadregisters(){
\t
\t\t\tvar url=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("load_pagination");
        // line 27
        echo "\"
            \$.ajax({   
                type: \"POST\",
                url:url,
                data:{recoger:\"datorecibidopost\"},
                success: function(datos){\t\t\t\t\t\t
                    \$('#content').html(datos);
                }
            });
\t\t
    }
\t
\t\$(\"#content\").on(\"click\",\".pagination span a\", function(){
\t\t\$(\"#content\").html('<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/images/ajax-loader.gif"), "html", null, true);
        echo "\"/>');
\t\t\$.get(\$(this).attr(\"href\"), function(data) {
\t\t\t\$('#content').html(data);
\t\t});
\t\treturn false;
\t});
\t
\tfunction loadexport(){
\t\t\tvar url=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("export_csv");
        // line 51
        echo "\"
            \$.ajax({   
                type: \"POST\",
                url:url,
                data:{recoger:\"datorecibidopost\"},
                success: function(datos){\t\t\t\t\t\t
                    ";
        // line 58
        echo "\t\t\t\t\t\$(\"#content\").html('<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/images/ajax-loader.gif"), "html", null, true);
        echo "\"/>');
\t\t\t\t\tprocessDatar(datos);
                }
            });
    }
\t
\tfunction processDatar(csvString){

\t\t\tvar uriContent = \"data:text/csv;charset=utf-8,\" + encodeURIComponent(csvString);
\t\t\tvar myWindow = window.open(uriContent);
\t\t\tmyWindow.focus();
\t}
\t\t

</script>


<a href=\"#\" style='cursor: pointer;' onclick=\"loadstats();\">load_stats</a><br>

<a href=\"#\" style='cursor: pointer;' onclick=\"loadregisters();\">load_registers</a><br>

<a href=\"#\" style='cursor: pointer;' onclick=\"loadexport();\">load_exportyehayeha</a><br>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Users:indexlanding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 58,  75 => 51,  73 => 48,  62 => 40,  47 => 27,  45 => 24,  29 => 10,  27 => 7,  19 => 1,);
    }
}
