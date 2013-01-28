<?php

/* CrystalRumbaBundle:Multimedia:listMultimedia.html.twig */
class __TwigTemplate_ba6f030a098e3ecbc512444713f7d451 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Multimedia"]) ? $context["Multimedia"] : $this->getContext($context, "Multimedia")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["multimedia"]) {
            // line 2
            echo "\t";
            if (($this->getAttribute((isset($context["multimedia"]) ? $context["multimedia"] : $this->getContext($context, "multimedia")), "type") == "video")) {
                // line 3
                echo "\t\t<iframe width=\"420\" height=\"315\" src=\"http://www.youtube.com/embed/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["multimedia"]) ? $context["multimedia"] : $this->getContext($context, "multimedia")), "content"), "html", null, true);
                echo "\" frameborder=\"0\" allowfullscreen></iframe>
\t";
            }
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 6
            echo "\tNo hay ni mierda
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['multimedia'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "CrystalRumbaBundle:Multimedia:listMultimedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  27 => 3,  24 => 2,  19 => 1,);
    }
}
