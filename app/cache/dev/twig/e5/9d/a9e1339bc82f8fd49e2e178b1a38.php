<?php

/* CrystalRumbaBundle:Events:updateEvent.html.twig */
class __TwigTemplate_e59da9e1339bc82f8fd49e2e178b1a38 extends Twig_Template
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
\t\t<td>Titulo:</td><td><input type=\"text\" name=\"txtTitle\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Fecha:</td><td><input type=\"text\" name=\"txtDate\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Lugar:</td><td><input type=\"text\" name=\"txtPlace\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "place"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Hora:</td><td><input type=\"text\" name=\"txtTime\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "time"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td>Descripci&oacute;n:</td><td><input type=\"text\" name=\"txtDescription\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
        echo "\"/></td>
\t</tr>
\t<tr>
\t\t<td><input type=\"submit\" name=\"btnUpdateEvent\" value=\"Modificar Evento\"/></td>
\t</tr>
\t
</table>
</form>
";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Events:updateEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 16,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }
}
