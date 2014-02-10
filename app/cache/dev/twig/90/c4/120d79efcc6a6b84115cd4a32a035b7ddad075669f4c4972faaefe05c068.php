<?php

/* ::main.html.twig */
class __TwigTemplate_90c4120d79efcc6a6b84115cd4a32a035b7ddad075669f4c4972faaefe05c068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'blockimage' => array($this, 'block_blockimage'),
            'leftPanel' => array($this, 'block_leftPanel'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
\t";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<meta charset=\"UTF-8\" />
\t\t<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Servicios";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t\t <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/mdwdemo/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<div id=\"header\">";
        $this->displayBlock('blockimage', $context, $blocks);
        echo "</div>
\t\t<div id=\"leftpanel\">";
        // line 15
        $this->displayBlock('leftPanel', $context, $blocks);
        echo "</div>
        <div id=\"content\">";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t\t
        <div id=\"footer\">
            ";
        // line 19
        $this->displayBlock('footer', $context, $blocks);
        // line 22
        echo "        </div>
\t\t
\t\t";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "\t";
    }

    // line 14
    public function block_blockimage($context, array $blocks = array())
    {
    }

    // line 15
    public function block_leftPanel($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 19
    public function block_footer($context, array $blocks = array())
    {
        // line 20
        echo "                Footer
            ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 24,  126 => 20,  123 => 19,  118 => 16,  113 => 15,  108 => 14,  104 => 25,  102 => 24,  98 => 22,  96 => 19,  90 => 16,  86 => 15,  81 => 14,  78 => 13,  71 => 8,  68 => 7,  62 => 6,  58 => 10,  56 => 7,  52 => 6,  49 => 5,  46 => 4,  41 => 26,  39 => 13,  35 => 11,  33 => 4,  28 => 1,);
    }
}
