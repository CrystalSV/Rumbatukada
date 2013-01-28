<?php

/* CrystalRumbaBundle:Users:updateUser.html.twig */
class __TwigTemplate_02abe521062b4ed657bf0d50fb881498 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "user"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Password:</td><td><input type=\"text\" name=\"txtPass\"  value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pass"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Nombre:</td><td><input type=\"text\" name=\"txtName\"  value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Edad:</td><td><input type=\"text\" name=\"txtAge\"  value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "age"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Email:</td><td><input type=\"text\" name=\"txtEmail\"  value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Facebook:</td><td><input type=\"text\" name=\"txtFacebook\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Twitter:</td><td><input type=\"text\" name=\"txtTwitter\"  value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Foto:</td><td><input type=\"text\" name=\"txtPicture\"  value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture"), "html", null, true);
        echo "\"/></td>
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
        return "CrystalRumbaBundle:Users:updateUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  60 => 22,  54 => 19,  48 => 16,  42 => 13,  36 => 10,  30 => 7,  24 => 4,  19 => 1,);
    }
}
