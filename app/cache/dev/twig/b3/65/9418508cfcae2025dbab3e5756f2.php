<?php

/* CrystalRumbaBundle:News:addNew.html.twig */
class __TwigTemplate_b3659418508cfcae2025dbab3e5756f2 extends Twig_Template
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
\t<table>
\t\t<tr>
\t\t\t<td>Titulo de la noticia</td><td><input type=\"text\" name=\"txtTitle\" /></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Fecha de la noticia</td><td><input type=\"text\" name=\"txtDate\" /></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td>Contenido</td><td><textarea name=\"txtContent\"></textarea></td>
\t\t</tr>
\t\t<tr>
\t\t\t<td><input type=\"submit\" value=\"Agregar Noticia\" /></td>
\t\t</tr>
\t</table>
</form>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:News:addNew.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
