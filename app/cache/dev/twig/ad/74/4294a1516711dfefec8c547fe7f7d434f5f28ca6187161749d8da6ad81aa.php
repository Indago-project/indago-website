<?php

/* IndagoCompteBundle:Default:index.html.twig */
class __TwigTemplate_ad744294a1516711dfefec8c547fe7f7d434f5f28ca6187161749d8da6ad81aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IndagoCompteBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IndagoCompteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Ingago-Site";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "IndagoCompteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
