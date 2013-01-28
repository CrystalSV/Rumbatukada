<?php

/* CrystalRumbaBundle:Users:addUser.html.twig */
class __TwigTemplate_45577269edf62e2f47f3dd3b49c3ea90 extends Twig_Template
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
\t\t<td>Nombre:</td><td><input type=\"text\" name=\"txtName\" /></td>
\t</tr>
\t<tr>
\t\t<td>Edad:</td><td><input type=\"text\" name=\"txtAge\" /></td>
\t</tr>
\t<tr>
\t\t<td>Email:</td><td><input type=\"text\" name=\"txtEmail\" /></td>
\t</tr>
\t<tr>
\t\t<td>Facebook:</td><td><input type=\"text\" name=\"txtFacebook\" /></td>
\t</tr>
\t<tr>
\t\t<td>Twitter:</td><td><input type=\"text\" name=\"txtTwitter\" /></td>
\t</tr>
\t<tr>
\t\t<td>Foto:</td><td><input type=\"text\" name=\"txtPicture\" /></td>
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
        return "CrystalRumbaBundle:Users:addUser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
