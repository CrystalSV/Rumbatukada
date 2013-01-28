<?php

/* CrystalRumbaBundle:Access:updateAccess.html.twig */
class __TwigTemplate_e0f2c207517445531357596fd91b9d56 extends Twig_Template
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
\t\t<td>Usuario:</td><td><input type=\"text\" name=\"txtUser\"  value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")), "user"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Password:</td><td><input type=\"text\" name=\"txtPass\"  value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["access"]) ? $context["access"] : $this->getContext($context, "access")), "pass"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td><input type=\"submit\" name=\"btnupdateAccess\" value=\"Guardar\"/></td>
\t</tr>
\t
</table>
</form>


";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Access:updateAccess.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  24 => 4,  19 => 1,);
    }
}
