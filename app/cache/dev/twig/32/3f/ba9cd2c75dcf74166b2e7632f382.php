<?php

/* CrystalRumbaBundle:Instruments:updateInstrument.html.twig */
class __TwigTemplate_323fba9cd2c75dcf74166b2e7632f382 extends Twig_Template
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
        echo "<form method=\"POST\">
\t<table>
\t\t<tr>
\t\t\t<td>Instrumento</td>
\t\t\t<td><input type=\"text\" name=\"txtName\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "name"), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Tipo</td>
\t\t\t<td><input type=\"text\" name=\"txtType\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["instrument"]) ? $context["instrument"] : $this->getContext($context, "instrument")), "type"), "html", null, true);
        echo "\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td><input type=\"submit\" name=\"btnAddInstrument\"/></td>
\t\t</tr>

\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Instruments:updateInstrument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,);
    }
}
