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

/* formulaire/createcli.html.twig */
class __TwigTemplate_5bc7465845de9e3486730b5494b93878c44e4638ad74d8ff8037fc8321abf4c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/createcli.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/createcli.html.twig"));

        // line 1
        $this->loadTemplate("formulaire/template.html.twig", "formulaire/createcli.html.twig", 1)->display($context);
        // line 2
        echo "
<body>
    ";
        // line 4
        $this->loadTemplate("navbar/navbar.html.twig", "formulaire/createcli.html.twig", 4)->display($context);
        // line 5
        echo "
    <div class=\"login-box\">
    <h2>Créer un nouveau clients</h2>
    <form action=\"createcli\" method=\"POST\">
        <div class=\"user-box\">
            <input id=\"firstname\" type=\"text\" name=\"firstname\" required=\"\">
            <label for\"firstname\">Prénom</label>
        </div>
        <div class=\"user-box\">
            <input id=\"lastname\" type=\"text\" name=\"lastname\" required=\"\">
            <label for\"lastname\">Nom</label>
        </div>
        <div class=\"send-box\">
            <input type=\"submit\" value=\"Enregistrer le nouveau client\">
        </div>

    </form>
    </div>
</body>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/createcli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include('formulaire/template.html.twig') %}

<body>
    {% include('navbar/navbar.html.twig') %}

    <div class=\"login-box\">
    <h2>Créer un nouveau clients</h2>
    <form action=\"createcli\" method=\"POST\">
        <div class=\"user-box\">
            <input id=\"firstname\" type=\"text\" name=\"firstname\" required=\"\">
            <label for\"firstname\">Prénom</label>
        </div>
        <div class=\"user-box\">
            <input id=\"lastname\" type=\"text\" name=\"lastname\" required=\"\">
            <label for\"lastname\">Nom</label>
        </div>
        <div class=\"send-box\">
            <input type=\"submit\" value=\"Enregistrer le nouveau client\">
        </div>

    </form>
    </div>
</body>", "formulaire/createcli.html.twig", "/var/www/project/templates/formulaire/createcli.html.twig");
    }
}
