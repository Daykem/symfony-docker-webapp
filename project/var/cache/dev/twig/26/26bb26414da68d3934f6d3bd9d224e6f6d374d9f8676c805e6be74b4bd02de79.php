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

/* formulaire/createmat.html.twig */
class __TwigTemplate_909c7a1fa20e3cd7d5fae9951e5aa930bdd448eb2cdefb1f6a471e24bd0416b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/createmat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/createmat.html.twig"));

        // line 1
        $this->loadTemplate("formulaire/template.html.twig", "formulaire/createmat.html.twig", 1)->display($context);
        // line 2
        echo "
<body>
    ";
        // line 4
        $this->loadTemplate("navbar/navbar.html.twig", "formulaire/createmat.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"login-box\">
    <h2>Créer un nouveau materiel</h2>
    <form action=\"createmat\" method=\"POST\">
        <div class=\"user-box\">
            <input id=\"name\" type=\"text\" name=\"name\" required=\"\">
            <label for\"name\">Nom du matériel</label>
        </div>
        <div class=\"user-box\">
            <input id=\"cost\" type=\"number\" name=\"cost\" required=\"\" min=\"0\">
            <label for\"cost\">Prix</label>
        </div>
        ";
        // line 21
        echo "        <div class=\"send-box\">
            <input type=\"submit\" value=\"Enregistrer le nouveau materiel\">
        </div>

    </form>
    </div>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/createmat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('formulaire/template.html.twig') %}

<body>
    {% include('navbar/navbar.html.twig') %}

    <div class=\"login-box\">
    <h2>Créer un nouveau materiel</h2>
    <form action=\"createmat\" method=\"POST\">
        <div class=\"user-box\">
            <input id=\"name\" type=\"text\" name=\"name\" required=\"\">
            <label for\"name\">Nom du matériel</label>
        </div>
        <div class=\"user-box\">
            <input id=\"cost\" type=\"number\" name=\"cost\" required=\"\" min=\"0\">
            <label for\"cost\">Prix</label>
        </div>
        {# <div class=\"user-box\">
            <input type=\"checkbox\" id=\"state\" name=\"state\">
            <label for=\"state\">Vendu</label>
        </div> #}
        <div class=\"send-box\">
            <input type=\"submit\" value=\"Enregistrer le nouveau materiel\">
        </div>

    </form>
    </div>
</body>", "formulaire/createmat.html.twig", "/var/www/project/templates/formulaire/createmat.html.twig");
    }
}
