<?php

/* CrystalRumbaBundle:Access:listAccess.html.twig */
class __TwigTemplate_52b78bb32e690b4485a471a606576e7a extends Twig_Template
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
        echo "<table cellpadding=\"0\" celspacing=\"0\">
<tr>
\t
\t<td>Usuario</<td>
\t<td>Contra</<td>
\t
</tr>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")));
        foreach ($context['_seq'] as $context["_key"] => $context["access"]) {
            // line 9
            echo "\t<tr>
\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")), "user"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")), "pass"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarAcceso", array("id" => $this->getAttribute((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")), "id"))), "html", null, true);
            echo "\"> modificar </a></td>
\t\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarAcceso", array("id" => $this->getAttribute((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")), "id"))), "html", null, true);
            echo "\" onClick=\"return alert('ola k ase');\">eliminar</a></td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 16
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Access:listAccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  47 => 13,  43 => 12,  39 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
