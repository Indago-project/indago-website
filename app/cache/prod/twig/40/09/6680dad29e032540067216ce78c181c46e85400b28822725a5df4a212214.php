<?php

/* IndagoCompteBundle::header.html.twig */
class __TwigTemplate_40096680dad29e032540067216ce78c181c46e85400b28822725a5df4a212214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        $this->displayBlock('content_header', $context, $blocks);
    }

    public function block_content_header($context, array $blocks = array())
    {
        // line 2
        echo " <div id=\"wrapper\">
      <!-- Sidebar -->
      <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" ";
        // line 13
        echo $this->env->getExtension('routing')->getPath("Indago_general_homepage");
        echo ">Indago</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
          <ul class=\"nav navbar-nav side-nav\">
            <li class=\"active\"><a href=\"index.html\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
            <li><a href=\"charts.html\"><i class=\"fa fa-bar-chart-o\"></i> Lire plutard</a></li>
            <li><a href=\"tables.html\"><i class=\"fa fa-table\"></i>Ajouter un site</a></li>
          \t<li><a href=\"tables.html\"><i class=\"fa fa-table\"></i>Toutes les news</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              \t<i class=\"fa fa-caret-square-o-down\"></i> Par site <b class=\"caret\"></b></a>
\t              <ul class=\"dropdown-menu\">
\t                \t";
        // line 28
        echo "\t              </ul>
            </li>
          </ul>

          <ul class=\"nav navbar-nav navbar-right navbar-user\">
          ";
        // line 34
        echo "           \t  <li class=\"dropdown user-dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Articles <b class=\"caret\"></b></a>
\t              <ul class=\"dropdown-menu\">
\t                <li><a href=\"#\"><i class=\"fa fa-user\"></i> Creer article</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Modifier un article</a></li>
\t                ";
        // line 40
        echo "\t              </ul>
            </li>
\t        ";
        // line 43
        echo "            <li>
              <a href=\"#\"><i class=\"fa fa-bell\"></i> Alerts <span class=\"badge\">3</span></a>
            </li>
             ";
        // line 47
        echo "\t            <li class=\"dropdown user-dropdown\">
\t              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Adaminisatrator <b class=\"caret\"></b></a>
\t              <ul class=\"dropdown-menu\">
\t                <li><a href=\"#\"><i class=\"fa fa-user\"></i> Profil</a></li>
\t                <li><a href=\"#\"><i class=\"fa fa-gear\"></i> Paramètres</a></li>
\t                <li class=\"divider\"></li>
\t                <li><a href=\"#\"><i class=\"fa fa-power-off\"></i> Se déconnecter</a></li>
\t                ";
        // line 55
        echo "\t              </ul>
           \t\t </li>
           \t\t";
        // line 58
        echo "          </ul>
        </div><!-- /.navbar-collapse -->
      </nav> 
  </div>
  </body>
</html>
 
 ";
    }

    public function getTemplateName()
    {
        return "IndagoCompteBundle::header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 58,  89 => 55,  80 => 47,  75 => 43,  71 => 40,  64 => 34,  57 => 28,  40 => 13,  27 => 2,  20 => 1,);
    }
}
