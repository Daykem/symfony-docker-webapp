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

/* formulaire/stats.html.twig */
class __TwigTemplate_4f4824aa12b315b51617965571ef573fcb4716adb2055871413607dc48248d18 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/stats.html.twig"));

        // line 1
        $this->loadTemplate("formulaire/template.html.twig", "formulaire/stats.html.twig", 1)->display($context);
        // line 2
        echo "
<body>
";
        // line 4
        $this->loadTemplate("navbar/navbar.html.twig", "formulaire/stats.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"login-box\">
        <section class=\"section\">
            <h2>Statistiques clients</h2>
            <div class=\"user-box\">
            <table>
                <thead>
                    <th >Clients</th>
                    <th >Nombre de Materiel</th>
                    <th >Totaux vendu</th>
                </thead>
                <tbody>
                ";
        // line 17
        $context["max_number_materiel"] = 0;
        // line 18
        echo "                ";
        $context["max_total_cost"] = 0;
        // line 19
        echo "                ";
        $context["max_firstname"] = 0;
        // line 20
        echo "                ";
        $context["max_lastname"] = 0;
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["client"]);
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 22
            echo "                    ";
            $context["number_materiel"] = 0;
            // line 23
            echo "                    ";
            $context["total_cost"] = 0;
            // line 24
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["lien"]);
            foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
                // line 25
                echo "                        ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["client"], "getID", [], "method", false, false, false, 25), twig_get_attribute($this->env, $this->source, $context["lien"], "getClientId", [], "any", false, false, false, 25)))) {
                    // line 26
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["materiel"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                        // line 27
                        echo "                                ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["materiel"], "getID", [], "method", false, false, false, 27), twig_get_attribute($this->env, $this->source, $context["lien"], "getMaterielId", [], "method", false, false, false, 27)))) {
                            // line 28
                            echo "                                    ";
                            $context["number_materiel"] = ((isset($context["number_materiel"]) || array_key_exists("number_materiel", $context) ? $context["number_materiel"] : (function () { throw new RuntimeError('Variable "number_materiel" does not exist.', 28, $this->source); })()) + 1);
                            // line 29
                            echo "                                    ";
                            $context["total_cost"] = ((isset($context["total_cost"]) || array_key_exists("total_cost", $context) ? $context["total_cost"] : (function () { throw new RuntimeError('Variable "total_cost" does not exist.', 29, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["materiel"], "getCost", [], "method", false, false, false, 29));
                            // line 30
                            echo "                                ";
                        }
                        // line 31
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "                        ";
                }
                // line 33
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
                    ";
            // line 35
            if ((-1 === twig_compare((isset($context["max_total_cost"]) || array_key_exists("max_total_cost", $context) ? $context["max_total_cost"] : (function () { throw new RuntimeError('Variable "max_total_cost" does not exist.', 35, $this->source); })()), (isset($context["total_cost"]) || array_key_exists("total_cost", $context) ? $context["total_cost"] : (function () { throw new RuntimeError('Variable "total_cost" does not exist.', 35, $this->source); })())))) {
                // line 36
                echo "                        ";
                $context["max_number_materiel"] = (isset($context["number_materiel"]) || array_key_exists("number_materiel", $context) ? $context["number_materiel"] : (function () { throw new RuntimeError('Variable "number_materiel" does not exist.', 36, $this->source); })());
                // line 37
                echo "                        ";
                $context["max_total_cost"] = (isset($context["total_cost"]) || array_key_exists("total_cost", $context) ? $context["total_cost"] : (function () { throw new RuntimeError('Variable "total_cost" does not exist.', 37, $this->source); })());
                // line 38
                echo "                        ";
                $context["max_firstname"] = twig_get_attribute($this->env, $this->source, $context["client"], "getFirstname", [], "method", false, false, false, 38);
                // line 39
                echo "                        ";
                $context["max_lastname"] = twig_get_attribute($this->env, $this->source, $context["client"], "getLastname", [], "method", false, false, false, 39);
                // line 40
                echo "                    ";
            }
            // line 41
            echo "                    <tr>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getFirstname", [], "method", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["client"], "getLastname", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["number_materiel"]) || array_key_exists("number_materiel", $context) ? $context["number_materiel"] : (function () { throw new RuntimeError('Variable "number_materiel" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["total_cost"]) || array_key_exists("total_cost", $context) ? $context["total_cost"] : (function () { throw new RuntimeError('Variable "total_cost" does not exist.', 44, $this->source); })()), "html", null, true);
            echo "</td>
                </tr>
                    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                </tbody>
            </table>
            </div>
        </section>

        <section>
            <h2 class=\"\">Client le plus rentable</h2>
            <table>
                <thead>
                    <th >Clients</th>
                    <th >Nombre de Materiel</th>
                    <th >Totaux vendu</th>
                </thead>
                <tbody>
                    <tr>
                    <td>";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["max_firstname"]) || array_key_exists("max_firstname", $context) ? $context["max_firstname"] : (function () { throw new RuntimeError('Variable "max_firstname" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["max_lastname"]) || array_key_exists("max_lastname", $context) ? $context["max_lastname"] : (function () { throw new RuntimeError('Variable "max_lastname" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</td>
                    <td>";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["max_number_materiel"]) || array_key_exists("max_number_materiel", $context) ? $context["max_number_materiel"] : (function () { throw new RuntimeError('Variable "max_number_materiel" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "</td>
                    <td>";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["max_total_cost"]) || array_key_exists("max_total_cost", $context) ? $context["max_total_cost"] : (function () { throw new RuntimeError('Variable "max_total_cost" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "</td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 65,  193 => 64,  187 => 63,  170 => 48,  160 => 44,  156 => 43,  150 => 42,  147 => 41,  144 => 40,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  130 => 35,  127 => 34,  121 => 33,  118 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  100 => 27,  95 => 26,  92 => 25,  87 => 24,  84 => 23,  81 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  65 => 17,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('formulaire/template.html.twig') %}

<body>
{% include('navbar/navbar.html.twig') %}

    <div class=\"login-box\">
        <section class=\"section\">
            <h2>Statistiques clients</h2>
            <div class=\"user-box\">
            <table>
                <thead>
                    <th >Clients</th>
                    <th >Nombre de Materiel</th>
                    <th >Totaux vendu</th>
                </thead>
                <tbody>
                {% set max_number_materiel = 0 %}
                {% set max_total_cost = 0 %}
                {% set max_firstname = 0 %}
                {% set max_lastname = 0 %}
                {% for client in client %}
                    {% set number_materiel = 0 %}
                    {% set total_cost = 0 %}
                    {% for lien in lien %}
                        {% if (client.getID() == lien.getClientId) %}
                            {% for materiel in materiel %}
                                {% if (materiel.getID() == lien.getMaterielId()) %}
                                    {% set number_materiel = number_materiel + 1 %}
                                    {% set total_cost = total_cost + materiel.getCost() %}
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                    {% endfor %}

                    {% if (max_total_cost < total_cost) %}
                        {% set max_number_materiel = number_materiel %}
                        {% set max_total_cost = total_cost %}
                        {% set max_firstname = client.getFirstname() %}
                        {% set max_lastname = client.getLastname() %}
                    {% endif %}
                    <tr>
                        <td>{{ client.getFirstname() }} {{ client.getLastname() }}</td>
                        <td>{{ number_materiel }}</td>
                        <td>{{ total_cost }}</td>
                </tr>
                    
            {% endfor %}
                </tbody>
            </table>
            </div>
        </section>

        <section>
            <h2 class=\"\">Client le plus rentable</h2>
            <table>
                <thead>
                    <th >Clients</th>
                    <th >Nombre de Materiel</th>
                    <th >Totaux vendu</th>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ max_firstname }} {{ max_lastname }}</td>
                    <td>{{ max_number_materiel }}</td>
                    <td>{{ max_total_cost }}</td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>", "formulaire/stats.html.twig", "/Users/tomrouvier/Tom/Test eukles/tmp/demo-test/templates/formulaire/stats.html.twig");
    }
}
