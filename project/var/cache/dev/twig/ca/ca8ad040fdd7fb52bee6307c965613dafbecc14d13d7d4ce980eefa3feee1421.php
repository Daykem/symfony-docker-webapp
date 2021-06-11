<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* formulaire/create.html.twig */
class __TwigTemplate_88abfde4b2fd3131ef356e2de5e407e9e3f6acdeef28a54d96ceb00c238efe96 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/create.html.twig"));

        // line 1
        $this->loadTemplate("formulaire/template.html.twig", "formulaire/create.html.twig", 1)->display($context);
        // line 2
        echo "
<body>
    ";
        // line 4
        $this->loadTemplate("navbar/navbar.html.twig", "formulaire/create.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"login-box\">
    <h2>Lier un materiel à un client</h2>
    <form action=\"create\" method=\"POST\">
        <div class=\"select mb-10\">
            <select id=\"client_id\" type=\"select\" name=\"client_id\" required=\"\">
               <option selected disabled>Selectionnez votre client</option>
               ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "                     <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "firstname", [], "any", false, false, false, 13), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "lastname", [], "any", false, false, false, 13), "html", null, true);
            echo "</option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </select>
        </div>
        <div class=\"select mb-10\">
            <select id=\"materiel_id\" type=\"select\" name=\"materiel_id\" required=\"\">
               <option selected disabled>Selectionnez le materiel</option>
               ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 21
            echo "                     <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "cost", [], "any", false, false, false, 21), "html", null, true);
            echo "</option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </select>
        </div>
        <div class=\"send-box mt-10\">
            <input type=\"submit\" value=\"Lier le materiel au client\">
        </div>

    </form>
    </div>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  88 => 21,  84 => 20,  77 => 15,  64 => 13,  60 => 12,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('formulaire/template.html.twig') %}

<body>
    {% include('navbar/navbar.html.twig') %}

    <div class=\"login-box\">
    <h2>Lier un materiel à un client</h2>
    <form action=\"create\" method=\"POST\">
        <div class=\"select mb-10\">
            <select id=\"client_id\" type=\"select\" name=\"client_id\" required=\"\">
               <option selected disabled>Selectionnez votre client</option>
               {% for c in client %}
                     <option value=\"{{ c.id }}\">{{ c.firstname }} {{ c.lastname }}</option>
               {% endfor %}
            </select>
        </div>
        <div class=\"select mb-10\">
            <select id=\"materiel_id\" type=\"select\" name=\"materiel_id\" required=\"\">
               <option selected disabled>Selectionnez le materiel</option>
               {% for m in materiel %}
                     <option value=\"{{ m.id }}\">{{ m.name }} {{ m.cost }}</option>
               {% endfor %}
            </select>
        </div>
        <div class=\"send-box mt-10\">
            <input type=\"submit\" value=\"Lier le materiel au client\">
        </div>

    </form>
    </div>
</body>", "formulaire/create.html.twig", "/Users/tomrouvier/Tom/Test eukles/tmp/demo-test/templates/formulaire/create.html.twig");
    }
}
