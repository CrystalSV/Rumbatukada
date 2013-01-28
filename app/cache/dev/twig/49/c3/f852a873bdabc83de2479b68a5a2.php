<?php

/* CrystalRumbaBundle:Instruments:addInstrument.html.twig */
class __TwigTemplate_49c3f852a873bdabc83de2479b68a5a2 extends Twig_Template
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
\t\t\t<td><input type=\"text\" name=\"txtName\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Tipo</td>
\t\t\t<td><input type=\"text\" name=\"txtType\"/></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td><input type=\"submit\" name=\"btnAddInstrument\"/></td>
\t\t</tr>

\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Instruments:addInstrument.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
