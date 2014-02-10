<?php

/* MDWDemoBundle:Users:stats.html.twig */
class __TwigTemplate_93777e26a766777ac5461f7af9110d3e6427360ca8fe94bbf9111b029f94d79b extends Twig_Template
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
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>YepsuaSmarTwigBundle</title>

  ";
        // line 7
        $this->env->loadTemplate("YepsuaSmarTwigBundle::smartwigAssets.html.twig")->display($context);
        // line 8
        echo "
</head>       

     ";
        // line 11
        echo $this->env->getExtension('ui.addons')->componentRender((isset($context["plot"]) ? $context["plot"] : $this->getContext($context, "plot")));
        echo "  

</html>";
    }

    public function getTemplateName()
    {
        return "MDWDemoBundle:Users:stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  29 => 8,  27 => 7,  19 => 1,);
    }
}
