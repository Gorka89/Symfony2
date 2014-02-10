<?php

/* MDWDemoBundle:Users:access.html.twig */
class __TwigTemplate_c8c929e593340969a8e67ac89392ec48171dffcbf37aa9288b52586e400a2672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::main.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'blockimage' => array($this, 'block_blockimage'),
            'content' => array($this, 'block_content'),
            'leftPanel' => array($this, 'block_leftPanel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Control Servicios";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/css/style2.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/css/queryLoader.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        // line 19
        echo "\t<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.7.2.min.js\">
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/js/queryLoader.js"), "html", null, true);
        echo "\"></script>
\t
\t<script type=\"text/javascript\">
\t
\t\tfunction loadexit(){
\t\t\tvar url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/modules/closesession.php"), "html", null, true);
        echo "\"
            \$.ajax({   
                type: \"POST\",
                url:url,
                data:{recoger:\"datorecibidopost\"},
                success: function(datos){       
                    \$('#content').html(datos);
                }
            });
        }
\t\t
\t\tfunction loadsupport(){
\t\t\tvar url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/modules/support.php"), "html", null, true);
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
\t\t
\t\t\$(document).ready(function(){
\t\t\t\$('#support').click(function(){
\t\t\t\t\t\$('#supportdiv').load('";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modules_list", array("id" => $this->getAttribute((isset($context["servicesname"]) ? $context["servicesname"] : $this->getContext($context, "servicesname")), 0, array(), "array"))), "html", null, true);
        echo "');
\t\t\t});
\t\t});
\t\t
\t\t
\t\t";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 58
            echo "\t\t\t
\t\t\t\$(document).ready(function(){
\t\t\t\t
\t\t\t\t\t\t\$('#id";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "').click(function(){
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 66
            echo "\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t
\t\t
\t\tfunction loaddivs(){
\t\t
\t\t\t";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 75
            echo "\t\t\t
\t\t\t\t\t";
            // line 76
            if (($this->getAttribute((isset($context["servicesname"]) ? $context["servicesname"] : $this->getContext($context, "servicesname")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array") == "landing")) {
                // line 77
                echo "\t\t\t
\t\t\t\t\t\t\t\t\$(\"div[id='";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "Description"), "html", null, true);
                echo "']\").load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("landing_service", array("id" => $this->getAttribute((isset($context["servicesname"]) ? $context["servicesname"] : $this->getContext($context, "servicesname")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"))), "html", null, true);
                echo "');\t\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            } elseif (($this->getAttribute((isset($context["servicesname"]) ? $context["servicesname"] : $this->getContext($context, "servicesname")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array") == "app")) {
                // line 81
                echo "\t\t\t\t\t
\t\t\t\t\t\t\$(\"div[id='";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "Description"), "html", null, true);
                echo "']\").load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modules_list", array("id" => $this->getAttribute((isset($context["modulesid"]) ? $context["modulesid"] : $this->getContext($context, "modulesid")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"))), "html", null, true);
                echo "');

\t\t\t\t\t\t
\t\t\t\t\t";
            } else {
                // line 86
                echo "\t\t\t\t\t
\t\t\t\t\t\t\$(\"div[id='";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "Description"), "html", null, true);
                echo "']\").load('";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("landing_service", array("id" => $this->getAttribute((isset($context["servicesname"]) ? $context["servicesname"] : $this->getContext($context, "servicesname")), $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0"), array(), "array"))), "html", null, true);
                echo "');
\t\t\t\t\t\t";
                // line 89
                echo "\t\t\t\t\t\t
\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t
\t\t
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t\t
\t\t}
\t\t
\t\tloaddivs();
\t\t


\t\t";
        // line 102
        echo "\t\t\$(document).ready(function() {

\t\t\t//alert('pre carggggaaaa');
\t\t\t\$('#accordion2').on('show hide', function() {
\t\t\t\t\$(this).css('height', 'auto');
\t\t\t});
\t\t\t\$('#accordion2').collapse({ parent: true, toggle: true }); 
\t\t\t
\t\t});
\t\t
\t\t\$('#accordion2').collapse().height('auto');
\t\t
\t\t
\t
\t</script>


";
    }

    // line 121
    public function block_blockimage($context, array $blocks = array())
    {
        // line 122
        echo "\t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/images/cabecera_formulario.png"), "html", null, true);
        echo "\"/>
";
    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
        // line 126
        echo "

<h1>Listado de Servicios</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Description</th>
    </tr>
    ";
        // line 134
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 135
            echo "    <tr>
        <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "Description"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "</table>

";
    }

    // line 145
    public function block_leftPanel($context, array $blocks = array())
    {
        // line 146
        echo "

<div class=\"accordion\" id=\"accordion2\">

";
        // line 150
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 151
            echo "
  <div class=\"accordion-group\">
    <div class=\"accordion-heading\">
      <a id=\"id";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "\">
        ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "Description"), "html", null, true);
            echo "
\t\t\t\t
      </a>
    </div>
    <div id=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id"), "html", null, true);
            echo "\" class=\"accordion-body collapse\">
      <div class=\"accordion-inner\">
\t\t<div id=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "Description"), "html", null, true);
            echo "\"></div>
      </div>
    </div>
  </div>
  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "  
  <div class=\"accordion-group\">
    <div class=\"accordion-heading\">
      <a id=\"support\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#suport\">
        <a href=\"#\" style='cursor: pointer;' onclick=\"loadsupport();\">LABEL_SUPPORT</a>
      </a>
    </div>
    <div id=\"suport\" class=\"accordion-body collapse\">
      <div class=\"accordion-inner\">
        <div id=\"supportdiv\"></div>
      </div>
    </div>
  </div>

  
  <div class=\"accordion-group\">
    <div class=\"accordion-heading\">
      <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#exit\">
        <a href=\"./login\" style='cursor: pointer;' onclick=\"loadexit();\">LABEL_EXIT</a>
      </a>
    </div>
    <div id=\"exit\" class=\"accordion-body collapse\">
      <div class=\"accordion-inner\">
        <div id=\"supportexit\"></div>
      </div>
    </div>
  </div>
  
</div>



";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Users:access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 167,  343 => 161,  338 => 159,  331 => 155,  325 => 154,  320 => 151,  316 => 150,  310 => 146,  307 => 145,  301 => 140,  292 => 137,  288 => 136,  285 => 135,  281 => 134,  271 => 126,  268 => 125,  261 => 122,  258 => 121,  237 => 102,  228 => 94,  212 => 91,  208 => 89,  202 => 87,  199 => 86,  190 => 82,  187 => 81,  179 => 78,  176 => 77,  174 => 76,  171 => 75,  154 => 74,  148 => 70,  139 => 66,  134 => 61,  129 => 58,  125 => 57,  117 => 52,  101 => 39,  86 => 27,  78 => 22,  74 => 21,  70 => 20,  67 => 19,  63 => 13,  60 => 12,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  39 => 5,  33 => 3,);
    }
}
