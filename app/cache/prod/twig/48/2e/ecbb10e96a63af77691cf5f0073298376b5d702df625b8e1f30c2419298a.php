<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_482eecbb10e96a63af77691cf5f0073298376b5d702df625b8e1f30c2419298a extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  87 => 20,  55 => 13,  25 => 3,  21 => 2,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  86 => 28,  69 => 25,  62 => 23,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  44 => 10,  22 => 2,  33 => 10,  30 => 3,  95 => 58,  91 => 31,  82 => 47,  73 => 40,  66 => 15,  59 => 28,  20 => 1,  40 => 8,  36 => 7,  32 => 12,  28 => 3,  51 => 15,  47 => 12,  43 => 8,  39 => 6,  27 => 4,  19 => 1,  84 => 15,  81 => 14,  77 => 43,  74 => 11,  71 => 10,  65 => 17,  63 => 14,  60 => 13,  57 => 16,  54 => 21,  49 => 19,  46 => 7,  41 => 9,  34 => 9,  31 => 5,  26 => 5,  24 => 4,  38 => 13,  35 => 4,  29 => 5,);
    }
}
