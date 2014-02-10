<?php

/* MDWDemoBundle:Users:vote.html.twig */
class __TwigTemplate_28735d94ab3f91a228bd5d7f3b6d04e572e207b46de11fca229abca8856859c3 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/js/jscolor.js"), "html", null, true);
        echo "\"></script>
<script>
    ";
        // line 4
        echo "
\tfunction initjscolor(){
\t\t
\t\tjscolor.init();
\t\t
\t}
\t
\tinitjscolor();
\t
</script>

<center>

<form name=\"alta\" method=\"get\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/modules/voteForm.php"), "html", null, true);
        echo "\">

<table border=\"0\" width=\"650\">

\t<tr>
\t\t<td width=\"250\"><strong>Pregunta*:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_question\" type=\"text\" id=\"web_question\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_question_color\" id=\"web_question_color\"></td>
\t</tr>
\t<tr>
\t\t<td width=\"250\"><strong>Opcion1:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_option1\" type=\"text\" id=\"web_option1\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_option1_color\" id=\"web_option1_color\"></td>
\t</tr>
\t<tr>
\t\t<td width=\"250\"><strong>Opcion2:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_option2\" type=\"text\" id=\"web_option2\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_option2_color\" id=\"web_option2_color\"></td>
\t</tr>
\t<tr>
\t\t<td width=\"250\"><strong>Opcion3:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_option3\" type=\"text\" id=\"web_option3\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_option3_color\" id=\"web_option3_color\"></td>
\t</tr>
\t<tr>
\t\t<td width=\"250\"><strong>Opcion4:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_option4\" type=\"text\" id=\"web_option4\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_option4_color\" id=\"web_option4_color\"></td>
\t</tr>
\t<tr>
\t\t<td width=\"250\"><strong>Opcion5:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_option5\" type=\"text\" id=\"web_option5\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_option5_color\" id=\"web_option5_color\"></td>
\t</tr>
\t<tr>
\t\t<td width=\"250\"><strong>Opcion6:</strong></span></td>
\t\t<td width=\"400\"><input name=\"web_option6\" type=\"text\" id=\"web_option6\" size=\"40\" value=\"\"></td>
\t\t<td width=\"400\"><input class=\"color\" name=\"web_option6_color\" id=\"web_option6_color\"></td>
\t</tr>
\t<tr>
\t\t<td colspan=\"2\"><center>
        \t\t<input name=\"web_action\" type=\"hidden\" id=\"web_action\" value=\"dkv\">
        \t\t<input name=\"apariencia\" type=\"hidden\" id=\"apariencia\" value=\"corteingles\">
        \t\t<input name=\"procedencia\" type=\"hidden\" id=\"procedencia\" value=\"1\">
        \t\t<input name=\"set_vote\" type=\"submit\" id=\"set_vote\" value=\"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Generar Menu Votacion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\"></center>
\t\t</td>
\t</tr>
</table>
\t\t\t\t\t  
</form>

</center>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Users:vote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 17,  25 => 4,  19 => 1,);
    }
}
