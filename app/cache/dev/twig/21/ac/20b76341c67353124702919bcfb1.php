<?php

/* CrystalRumbaBundle:Events:listEvent.html.twig */
class __TwigTemplate_21ac20b76341c67353124702919bcfb1 extends Twig_Template
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
        echo "
<table cellpadding=\"0\" celspacing=\"0\">
<tr>
\t<td>#</<td>
\t<td>Titulo</<td>
\t<td>Fecha</<td>
\t<td>Lugar</<td>
\t<td>Hora</<td>
\t<td>Descripci&oacute;n</<td>
</tr>
";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 12
            echo "\t<tr>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "place"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "time"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarEvento", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\"> modificar </a></td>
\t\t<td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarEventos", array("id" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"))), "html", null, true);
            echo "\" onClick=\"return alert('ola k ase');\">eliminar</a></td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 23
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Events:listEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
