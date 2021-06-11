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

/* formulaire/index.html.twig */
class __TwigTemplate_8e12bb3486cd5999a6eba5ef18ed3277a2f7c5bb2aa11d8c46fcf26a5e0cf84a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/index.html.twig"));

        // line 1
        $this->loadTemplate("formulaire/template.html.twig", "formulaire/index.html.twig", 1)->display($context);
        // line 2
        echo "
    <body>
    ";
        // line 4
        $this->loadTemplate("navbar/navbar.html.twig", "formulaire/index.html.twig", 4)->display($context);
        // line 5
        echo "        <div class=\"login-box\">
            <h2>Liste des enregistrements</h2>
            <div class=\"user-box\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["lien"]);
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 9
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["client"]);
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 10
                echo "                    ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "getID", [], "method", false, false, false, 10), twig_get_attribute($this->env, $this->source, $context["lien"], "getClientId", [], "any", false, false, false, 10)))) {
                    // line 11
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["materiel"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                        // line 12
                        echo "                            ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["materiel"], "getID", [], "method", false, false, false, 12), twig_get_attribute($this->env, $this->source, $context["lien"], "getMaterielId", [], "method", false, false, false, 12)))) {
                            // line 13
                            echo "                                <div class=\"col-6-gauche\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getFirstname", [], "method", false, false, false, 13), "html", null, true);
                            echo "</div> 
                                <div class=\"col-6-droite\"> ";
                            // line 14
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "getName", [], "method", false, false, false, 14), "html", null, true);
                            echo " : ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["materiel"], "getCost", [], "method", false, false, false, 14), "html", null, true);
                            echo " </div>
                            ";
                        }
                        // line 16
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                    ";
                }
                // line 18
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  103 => 19,  97 => 18,  94 => 17,  88 => 16,  81 => 14,  76 => 13,  73 => 12,  68 => 11,  65 => 10,  60 => 9,  56 => 8,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('formulaire/template.html.twig') %}

    <body>
    {% include('navbar/navbar.html.twig') %}
        <div class=\"login-box\">
            <h2>Liste des enregistrements</h2>
            <div class=\"user-box\">
            {% for lien in lien %}
                {% for client in client %}
                    {% if (client.getID() == lien.getClientId) %}
                        {% for materiel in materiel %}
                            {% if (materiel.getID() == lien.getMaterielId()) %}
                                <div class=\"col-6-gauche\">{{ client.getFirstname() }}</div> 
                                <div class=\"col-6-droite\"> {{ materiel.getName() }} : {{ materiel.getCost() }} </div>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            </div>
        </div>
    </body>
</html>", "formulaire/index.html.twig", "/Users/tomrouvier/Tom/Test eukles/tmp/demo-test/templates/formulaire/index.html.twig");
    }
}
