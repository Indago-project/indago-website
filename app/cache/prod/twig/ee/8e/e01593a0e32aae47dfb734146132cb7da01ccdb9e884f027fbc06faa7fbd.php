<?php

/* IndagoCompteBundle::layout.html.twig */
class __TwigTemplate_ee8ee01593a0e32aae47dfb734146132cb7da01ccdb9e884f027fbc06faa7fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        $this->env->loadTemplate("IndagoGeneralBundle::includeCss.html.twig")->display($context);
    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        // line 6
        echo "        ";
        $this->env->loadTemplate("IndagoGeneralBundle::includeJs.html.twig")->display($context);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 13
        echo "    <div class=\"container-fluid\">
\t\t";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "    </div>
    
";
    }

    // line 10
    public function block_content_header($context, array $blocks = array())
    {
        // line 11
        echo "       ";
        $this->env->loadTemplate("IndagoCompteBundle::header.html.twig")->display($context);
        // line 12
        echo "    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "\t\t
\t\t";
    }

    public function getTemplateName()
    {
        return "IndagoCompteBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  81 => 14,  77 => 12,  74 => 11,  71 => 10,  65 => 17,  63 => 14,  60 => 13,  57 => 10,  54 => 9,  49 => 6,  46 => 5,  41 => 2,  34 => 9,  31 => 8,  26 => 4,  24 => 1,  38 => 1,  35 => 5,  29 => 5,);
    }
}
