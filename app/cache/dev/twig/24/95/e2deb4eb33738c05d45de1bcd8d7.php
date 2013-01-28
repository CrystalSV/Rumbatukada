<?php

/* CrystalRumbaBundle:Users:listUser.html.twig */
class __TwigTemplate_2495e2deb4eb33738c05d45de1bcd8d7 extends Twig_Template
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
        echo "<table cellpadding=\"0\" celspacing=\"0\">
<tr>
\t
\t<td>Usuario</<td>
\t<td>Contra</<td>
\t<td>Nombre</<td>
\t<td>Edad</<td>
\t<td>Email</<td>
\t<td>Facebook</<td>
\t<td>Twitter</<td>
\t<td>Foto</<td>
\t
</tr>
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "\t<tr>
\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "user"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pass"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "age"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "facebook"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "twitter"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modificarUsuario", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\"> modificar </a></td>
\t\t<td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("eliminarUsuario", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id"))), "html", null, true);
            echo "\" onClick=\"return alert('ola k ase');\">eliminar</a></td>
\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Users:listUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  77 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
