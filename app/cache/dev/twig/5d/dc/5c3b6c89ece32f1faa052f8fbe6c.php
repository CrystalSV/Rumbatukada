<?php

/* CrystalRumbaBundle:Instruments:listInstrument.html.twig */
class __TwigTemplate_5ddc5c3b6c89ece32f1faa052f8fbe6c extends Twig_Template
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
        echo "<table>
\t<tr>
\t\t<td>#</td>
\t\t<td>Instrumento</td>
\t\t<td>Tipo</td>
\t\t<td>Act</td>
\t\t<td>Del</td>
\t</tr>
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")));
        foreach ($context['_seq'] as $context["_key"] => $context["instrument"]) {
            // line 10
            echo "\t<tr>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "id"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "name"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "type"), "html", null, true);
            echo "</td>
\t\t<td> <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarInstrumento", array("id" => $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "id"))), "html", null, true);
            echo "\">M<a/> </td>
\t\t<td> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarInstrumento", array("id" => $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "id"))), "html", null, true);
            echo "\">E</a> </td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['instrument'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</table>


";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Instruments:listInstrument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
