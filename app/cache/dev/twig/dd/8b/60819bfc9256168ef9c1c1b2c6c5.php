<?php

/* CrystalRumbaBundle:News:listNews.html.twig */
class __TwigTemplate_dd8b60819bfc9256168ef9c1c1b2c6c5 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["News"]) ? $context["News"] : $this->getContext($context, "News")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["New"]) {
            // line 2
            echo "
\t";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["New"]) ? $context["New"] : $this->getContext($context, "New")), "title"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarNoticia", array("id" => $this->getAttribute($this->getAttribute((isset($context["New"]) ? $context["New"] : $this->getContext($context, "New")), "idEvent"), "id"))), "html", null, true);
            echo "\">Eliminar</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarNoticia", array("id" => $this->getAttribute($this->getAttribute((isset($context["New"]) ? $context["New"] : $this->getContext($context, "New")), "idEvent"), "id"))), "html", null, true);
            echo "\">Modificar</a><br /> 
\t
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "\t
\tlol

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['New'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:News:listNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  27 => 3,  24 => 2,  19 => 1,);
    }
}
