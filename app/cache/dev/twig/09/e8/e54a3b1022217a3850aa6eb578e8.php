<?php

/* CrystalRumbaBundle:Events:createEvent.html.twig */
class __TwigTemplate_09e8e54a3b1022217a3850aa6eb578e8 extends Twig_Template
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


<form method=\"post\">
<table class=\"listEvent\" cellpadding=\"0\" cellspacing=\"0\" >
\t<tr>
\t\t<td>Titulo:</td><td><input type=\"text\" name=\"txtTitle\" value=\"\"/></td>
\t</tr>
\t<tr>
\t\t<td>Fecha:</td><td><input type=\"text\" name=\"txtDate\" value=\"\"/></td>
\t</tr>
\t<tr>
\t\t<td>Lugar:</td><td><input type=\"text\" name=\"txtPlace\" value=\"\"/></td>
\t</tr>
\t<tr>
\t\t<td>Hora:</td><td><input type=\"text\" name=\"txtTime\" value=\"\"/></td>
\t</tr>
\t<tr>
\t\t<td>Descripci&oacute;n:</td><td><input type=\"text\" name=\"txtDescription\" value=\"\"/></td>
\t</tr>
\t<tr>
\t\t<td><input type=\"submit\" name=\"btnAddEvent\" value=\"A&ntilde;adir Evento\"/></td>
\t</tr>
\t
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Events:createEvent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
