<?php

/* IntranetBundle:City:index.html.twig */
class __TwigTemplate_d6db5e655540d2238af845b996d0bbefd907b67b26fceaa520221543eaa91c3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetBundle::mainLayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <h1 class=\"page-title\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("City", array(), "messages");
        echo "</h1>
    <div class=\"btn-toolbar\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("city_new");
        echo "\" class=\"btn\"><i class=\"icon-plus\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("New city", array(), "messages");
        echo "</a>

        <div class=\"btn-group\">
        </div>
    </div>
    <div class=\"well\">


   ";
        // line 15
        $this->env->loadTemplate("IntranetBundle:City:indexTable.html.twig")->display($context);
        // line 16
        echo "
    </div>
    ";
        // line 18
        $this->env->loadTemplate("IntranetBundle::simplePaginatorBlock.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "IntranetBundle:City:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  52 => 16,  50 => 15,  37 => 7,  31 => 5,  28 => 4,);
    }
}
