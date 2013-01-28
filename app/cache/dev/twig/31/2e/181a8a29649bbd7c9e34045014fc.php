<?php

/* CrystalRumbaBundle:Access:addAccess.html.twig */
class __TwigTemplate_312e181a8a29649bbd7c9e34045014fc extends Twig_Template
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
        echo "<form method=\"post\">
<table cellpadding=\"0\" cellspacing=\"0\" >
\t<tr>
\t\t<td>Usuario:</td><td><input type=\"text\" name=\"txtUser\" /></td>
\t</tr>
\t<tr>
\t\t<td>Password:</td><td><input type=\"text\" name=\"txtPass\" /></td>
\t</tr>
\t<tr>
\t\t<td><input type=\"submit\" name=\"btnAddAccess\" value=\"Guardar\"/></td>
\t</tr>
\t
</table>
</form>


";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Access:addAccess.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
