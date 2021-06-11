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

/* navbar/navbar.html.twig */
class __TwigTemplate_0d5fd10872d4734ed4c24294a671cebdb39e0b4f0b209e9f8e07bd6889df6871 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar/navbar.html.twig"));

        // line 1
        echo "<style>
    nav {
        width: var(--menu-width);
        display: flex;
        transform-style: preserve-3d;
        justify-content: space-evenly;
        position: relative;
        z-index: 2;
        margin: 0px auto;
        perspective: 2000px;
        flex-wrap: wrap;
        top: 3em;
    }

    nav .menu-item {
        color: white;
        font-weight: 600;
        transform-style: preserve-3d;
        flex-grow: 1;
        display: flex;
        flex-basis: var(--item-width);
        box-sizing: border-box;
        padding: 1em 1.5em;
        justify-content: center;
        perspective: 200px;
        letter-spacing: 0.5px;
        min-height: 7.5em;
    }

    nav .menu-text, nav .menu-text a {
        font-size: 1em;
        color: white;
        text-decoration: none;
        text-shadow: 0 1px 5px rgba(0,0,0,0.1);
        transition: color 0.1s ease-out;
        text-align: center;
    }

    nav .menu-text a:hover {
        color: rgba(255,255,255,0.5);
    }

    #sub-menu-holder {
        pointer-events: none;
        color: rgba(0,0,0,0.5);
        font-weight: normal;
        padding: 1em;
        position: absolute;
        transition: opacity 2 ease-out;
        transform: rotateX(-25deg) scale(1);
        transform-origin: 50% 7em 0em;
        opacity: 0;
        box-shadow: 0 2px 7px rgba(0,0,0,0.1), 0 2px 20px rgba(0,0,0,0.3);
        box-sizing: border-box;
        top: 3rem;
        border-radius: 10px;
        background: white;
        display: block;
        height: 300px;
        width: calc(var(--menu-width) * 1.5);
    }

    #sub-menu-container {
        position: absolute;
        z-index: -1;
        min-width: 100%;
        top: 2.5em;
        width: 100%;
    }

    nav .menu-item:hover ~ #sub-menu-container #sub-menu-holder {
        animation: clipPath 0.25s ease-out 1 forwards;        
        transition: clip-path 0.25s ease-out, left 0.15s ease-out, height 0.15s ease-out;
        opacity: 1;
        right: auto;
    }
    nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder,
    nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
        clip-path: inset(0 28.75em 0 0 round 10px);
        height: 14em;
    }

    nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder,
    nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
        clip-path: inset(0 15em 0 0 round 10px);
    }

    nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(-9em + -1px);
    }
    nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(-6.5em + -1px);
        height: 18.75em;
    }
    nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(2.75em + 1px);
        height: 24.5em;
    }
    nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(19em + 1px);
    }

    .menu-item .sub-menu {
        position: absolute;
        top: 7em;
        color: rgba(0,0,0,0.5);
        border-radius: 10px;
        min-width: 27.5em;
        pointer-events: none;
        box-sizing: border-box;
        z-index: 999;
        margin-left: -5em;
        clip-path: inset(0 10em 10em 15em);
        opacity: 0;
        font-weight: initial;
        padding: 1.5em;
        transition: all 0.25s ease-out, opacity 0.25s ease-in, margin-left 0.25s ease-out, clip-path 0.15s ease-out;
    }

    .menu-item .sub-menu.double {
        min-width: 41.25em;
        height: 18.75em;
        display: grid;
        grid-template-columns: 54% 50%;
    }
    .menu-item .sub-menu.triple {
        min-width: 41.25em;
        height: 25em;
        display: grid;
        padding: 1.5em 2.5em;
        grid-template-columns: 55% 45%;
    }
    .menu-item:hover .sub-menu {
        pointer-events: all;
        clip-path: inset(0 0 0 0);
    }

    .menu-text:after {
        transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.01s;
        opacity: 0;
        content: '';
        position: absolute;
        pointer-events: none;
        bottom: -5em;
        left: calc(50% - 10px);
        border-color: transparent transparent white transparent;
        border-width: 10px;
        border-style: solid;
    }
    .menu-item:hover .menu-text:after {
        bottom: 0.5em;
        opacity: 1;
        transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.15s;
    }
    .menu-item:hover .sub-menu {
        opacity: 1;
        margin-left: 0;
    }

    .menu-item:hover ~ #sub-menu-container #sub-menu-holder  {
        transition: transform 0.25s ease-out, opacity 0.25s ease-out, clip-path 0.25s ease-out;
    }

    @keyframes clipPath {
        0% {
            opacity: 0;
        }
        100% {
            transform: rotateX(0deg) scale(1);
            top: 4.5em;
            opacity: 1;        
        }
    }

    /* Menu specific */
    .menu-item .title {
        font-weight: 500;
        color: rgb(44 70 86);
        margin: 0 0 0.25em 0;
    }

    .menu-item .icon-box * {
        transition: all 0.1s ease-out;
        position: relative;
    }
    .menu-item .icon-box.space {
        margin-bottom: 1.25em;
    }
    .menu-item .icon-box.flat {height: 1.5em;margin-bottom: 0.5em;}
    .menu-item .icon, .menu-item .text {
        float: left;
        color: #9ea9af;
    }

    .menu-item .icon {
        color: rgb(44 70 86);
        font-size: 1.25em;
        margin: 0 1em 0 0;
    }
    .menu-item .icon-box {
        cursor: pointer;
    }
    .menu-item .icon-box {
        float: left;
        width: 100%;
        margin: 0;
        height: 4em;
        row-gap: 0;
        line-height: 1em;
    }

    .menu-item .icon-box .text i {
        clip-path: inset(0 100% 0 0);
        font-size: 0.75em;
        position: relative;
        top: -1px;
    }

    /* Base Icon Style */
    .icon-box.gb .icon i:before {
        background: linear-gradient(45deg, #0c86ef, #0cef9b);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        padding-left: 1px;
    }

    /* Define Icon Colors */
    .icon-box.gb.a .icon i:before {background-image: linear-gradient(45deg, #2ca7ff 35%, #31d078 75%);}
    .icon-box.gb.b .icon i:before {background-image: linear-gradient(45deg, #f32b2b 35%, #efbe0c 75%);}
    .icon-box.gb.c .icon i:before {background-image: linear-gradient(45deg, #7176ff 35%, #b26cea 75%);}
    .icon-box.gb.d .icon i:before {background-image: linear-gradient(45deg, #79c76f 35%, #bed09b 75%);}
    .icon-box.gb.e .icon i:before {background-image: linear-gradient(45deg, #6082ff 35%, #ff5dbe 75%);}
    .icon-box.gb.f .icon i:before {background-image: linear-gradient(45deg, #808080 35%, #bbbbbb 75%);}

    .menu-item .icon-box:hover .text i {
        clip-path: inset(0 0 0 0);
        transition: clip-path 0.1s ease-out;
    }

    .menu-item .icon-box:hover .icon, .menu-item .icon-box:hover .title, .menu-item .icon-box:hover .sub-text {
        color: rgb(89 110 123);
    }

    #sub-menu-bottom {
        background: #d4e3ea70;
        position: absolute;
        bottom: 0;
        opacity: 0;
        transition: all 0.25s ease-out, height 0.1s ease-out;
        left: 0;
        width: 100%;
        height: 5em;
    }
    nav .menu-item:nth-of-type(3).highlight:hover ~ #sub-menu-container #sub-menu-holder #sub-menu-bottom {
        height: 7.5em;
    }
    .bottom-container {
        grid-area: 4 / -3 / 4 / 3;
        padding-top: 1.5em;
        color: #3a5260;
        font-weight: 500;
    }

    .top-container {
        grid-area: 1 / -3 / 1 / 3;
        margin: 0 0 2em 0;
    }

    .bottom-container a {
        float: right;
        background: linear-gradient(90deg, #8ea4b166, #a3b5bf6b);
        padding: 0.5em 1em;
        border-radius: 100px;
        position: absolute;
        color: #2c4655bf;
        font-weight: bold;
        text-decoration: none;
        right: 1.5em;
        bottom: 1.5em;
    }

    .bottom-container a:hover {
        background: linear-gradient(90deg, #8ea4b136, #a3b5bf33);
    }

    .sub-menu h3 {
        font-size: 1em;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: rgb(44 70 86 / 68%);
        margin: 0.75em 0;
    }

    .sub-menu .box a {
        width: 100%;
        float: left;
        font-size: 1em;
        line-height: 1.75em;
        color: #7a8a94;
        text-decoration: none;
    }

    .sub-menu .box a:hover {
        color: rgb(44 70 86);
    }

    .box {
        margin: 0 0 3em 0;
    }

    .icon.big i {
        font-size: 1.25em;
        top: 0.2em;
    }
    nav .menu-item.highlight:hover ~ #sub-menu-container #sub-menu-holder #sub-menu-bottom { opacity: 1; }

    #info-box {
        position: absolute;
        bottom: 2em;
        right: 2em;
    }

    #info-box ul {
        list-style: none;
    }
    #info-box a {
        color: white;
        text-decoration: none;
        text-align: right;
        padding: 0.5em 0;
        transition: all 0.1s ease-out;
        display: block;
        text-transform: uppercase;
        font-size: 1.25em;
        font-weight: 900;
        letter-spacing: 1px;
    }
    #info-box a:hover {
        color: rgba(255,255,255,0.5);
    }
</style>

<script src=\"https://kit.fontawesome.com/628c8d2499.js\" crossorigin=\"anonymous\"></script>

<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
<nav id=\"menu\">
    <div class=\"menu-item\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/\">Accueil</a>
        </div>
    </div>
    <div class=\"menu-item\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/createcli\">Clients</a>
        </div>
    </div>
    <div class=\"menu-item highlight\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/createmat\">Matériels</a>
        </div>
    </div>
    <div class=\"menu-item highlight\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/create\">Liens</a>
        </div>
    </div>
    <div class=\"menu-item\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/stats\">Statistiques</a>
        </div>
    </div>
</nav>

<div id=\"info-box\">
    <ul>
        <li><a target=\"_top\" href=\"https://github.com/Daykem\">Mon GitHub</a></li>
    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    nav {
        width: var(--menu-width);
        display: flex;
        transform-style: preserve-3d;
        justify-content: space-evenly;
        position: relative;
        z-index: 2;
        margin: 0px auto;
        perspective: 2000px;
        flex-wrap: wrap;
        top: 3em;
    }

    nav .menu-item {
        color: white;
        font-weight: 600;
        transform-style: preserve-3d;
        flex-grow: 1;
        display: flex;
        flex-basis: var(--item-width);
        box-sizing: border-box;
        padding: 1em 1.5em;
        justify-content: center;
        perspective: 200px;
        letter-spacing: 0.5px;
        min-height: 7.5em;
    }

    nav .menu-text, nav .menu-text a {
        font-size: 1em;
        color: white;
        text-decoration: none;
        text-shadow: 0 1px 5px rgba(0,0,0,0.1);
        transition: color 0.1s ease-out;
        text-align: center;
    }

    nav .menu-text a:hover {
        color: rgba(255,255,255,0.5);
    }

    #sub-menu-holder {
        pointer-events: none;
        color: rgba(0,0,0,0.5);
        font-weight: normal;
        padding: 1em;
        position: absolute;
        transition: opacity 2 ease-out;
        transform: rotateX(-25deg) scale(1);
        transform-origin: 50% 7em 0em;
        opacity: 0;
        box-shadow: 0 2px 7px rgba(0,0,0,0.1), 0 2px 20px rgba(0,0,0,0.3);
        box-sizing: border-box;
        top: 3rem;
        border-radius: 10px;
        background: white;
        display: block;
        height: 300px;
        width: calc(var(--menu-width) * 1.5);
    }

    #sub-menu-container {
        position: absolute;
        z-index: -1;
        min-width: 100%;
        top: 2.5em;
        width: 100%;
    }

    nav .menu-item:hover ~ #sub-menu-container #sub-menu-holder {
        animation: clipPath 0.25s ease-out 1 forwards;        
        transition: clip-path 0.25s ease-out, left 0.15s ease-out, height 0.15s ease-out;
        opacity: 1;
        right: auto;
    }
    nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder,
    nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
        clip-path: inset(0 28.75em 0 0 round 10px);
        height: 14em;
    }

    nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder,
    nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
        clip-path: inset(0 15em 0 0 round 10px);
    }

    nav .menu-item:nth-of-type(1):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(-9em + -1px);
    }
    nav .menu-item:nth-of-type(2):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(-6.5em + -1px);
        height: 18.75em;
    }
    nav .menu-item:nth-of-type(3):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(2.75em + 1px);
        height: 24.5em;
    }
    nav .menu-item:nth-of-type(4):hover ~ #sub-menu-container #sub-menu-holder {
        left: calc(19em + 1px);
    }

    .menu-item .sub-menu {
        position: absolute;
        top: 7em;
        color: rgba(0,0,0,0.5);
        border-radius: 10px;
        min-width: 27.5em;
        pointer-events: none;
        box-sizing: border-box;
        z-index: 999;
        margin-left: -5em;
        clip-path: inset(0 10em 10em 15em);
        opacity: 0;
        font-weight: initial;
        padding: 1.5em;
        transition: all 0.25s ease-out, opacity 0.25s ease-in, margin-left 0.25s ease-out, clip-path 0.15s ease-out;
    }

    .menu-item .sub-menu.double {
        min-width: 41.25em;
        height: 18.75em;
        display: grid;
        grid-template-columns: 54% 50%;
    }
    .menu-item .sub-menu.triple {
        min-width: 41.25em;
        height: 25em;
        display: grid;
        padding: 1.5em 2.5em;
        grid-template-columns: 55% 45%;
    }
    .menu-item:hover .sub-menu {
        pointer-events: all;
        clip-path: inset(0 0 0 0);
    }

    .menu-text:after {
        transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.01s;
        opacity: 0;
        content: '';
        position: absolute;
        pointer-events: none;
        bottom: -5em;
        left: calc(50% - 10px);
        border-color: transparent transparent white transparent;
        border-width: 10px;
        border-style: solid;
    }
    .menu-item:hover .menu-text:after {
        bottom: 0.5em;
        opacity: 1;
        transition: bottom 0.25s ease-out, opacity 0.01s ease-out 0.15s;
    }
    .menu-item:hover .sub-menu {
        opacity: 1;
        margin-left: 0;
    }

    .menu-item:hover ~ #sub-menu-container #sub-menu-holder  {
        transition: transform 0.25s ease-out, opacity 0.25s ease-out, clip-path 0.25s ease-out;
    }

    @keyframes clipPath {
        0% {
            opacity: 0;
        }
        100% {
            transform: rotateX(0deg) scale(1);
            top: 4.5em;
            opacity: 1;        
        }
    }

    /* Menu specific */
    .menu-item .title {
        font-weight: 500;
        color: rgb(44 70 86);
        margin: 0 0 0.25em 0;
    }

    .menu-item .icon-box * {
        transition: all 0.1s ease-out;
        position: relative;
    }
    .menu-item .icon-box.space {
        margin-bottom: 1.25em;
    }
    .menu-item .icon-box.flat {height: 1.5em;margin-bottom: 0.5em;}
    .menu-item .icon, .menu-item .text {
        float: left;
        color: #9ea9af;
    }

    .menu-item .icon {
        color: rgb(44 70 86);
        font-size: 1.25em;
        margin: 0 1em 0 0;
    }
    .menu-item .icon-box {
        cursor: pointer;
    }
    .menu-item .icon-box {
        float: left;
        width: 100%;
        margin: 0;
        height: 4em;
        row-gap: 0;
        line-height: 1em;
    }

    .menu-item .icon-box .text i {
        clip-path: inset(0 100% 0 0);
        font-size: 0.75em;
        position: relative;
        top: -1px;
    }

    /* Base Icon Style */
    .icon-box.gb .icon i:before {
        background: linear-gradient(45deg, #0c86ef, #0cef9b);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        padding-left: 1px;
    }

    /* Define Icon Colors */
    .icon-box.gb.a .icon i:before {background-image: linear-gradient(45deg, #2ca7ff 35%, #31d078 75%);}
    .icon-box.gb.b .icon i:before {background-image: linear-gradient(45deg, #f32b2b 35%, #efbe0c 75%);}
    .icon-box.gb.c .icon i:before {background-image: linear-gradient(45deg, #7176ff 35%, #b26cea 75%);}
    .icon-box.gb.d .icon i:before {background-image: linear-gradient(45deg, #79c76f 35%, #bed09b 75%);}
    .icon-box.gb.e .icon i:before {background-image: linear-gradient(45deg, #6082ff 35%, #ff5dbe 75%);}
    .icon-box.gb.f .icon i:before {background-image: linear-gradient(45deg, #808080 35%, #bbbbbb 75%);}

    .menu-item .icon-box:hover .text i {
        clip-path: inset(0 0 0 0);
        transition: clip-path 0.1s ease-out;
    }

    .menu-item .icon-box:hover .icon, .menu-item .icon-box:hover .title, .menu-item .icon-box:hover .sub-text {
        color: rgb(89 110 123);
    }

    #sub-menu-bottom {
        background: #d4e3ea70;
        position: absolute;
        bottom: 0;
        opacity: 0;
        transition: all 0.25s ease-out, height 0.1s ease-out;
        left: 0;
        width: 100%;
        height: 5em;
    }
    nav .menu-item:nth-of-type(3).highlight:hover ~ #sub-menu-container #sub-menu-holder #sub-menu-bottom {
        height: 7.5em;
    }
    .bottom-container {
        grid-area: 4 / -3 / 4 / 3;
        padding-top: 1.5em;
        color: #3a5260;
        font-weight: 500;
    }

    .top-container {
        grid-area: 1 / -3 / 1 / 3;
        margin: 0 0 2em 0;
    }

    .bottom-container a {
        float: right;
        background: linear-gradient(90deg, #8ea4b166, #a3b5bf6b);
        padding: 0.5em 1em;
        border-radius: 100px;
        position: absolute;
        color: #2c4655bf;
        font-weight: bold;
        text-decoration: none;
        right: 1.5em;
        bottom: 1.5em;
    }

    .bottom-container a:hover {
        background: linear-gradient(90deg, #8ea4b136, #a3b5bf33);
    }

    .sub-menu h3 {
        font-size: 1em;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: rgb(44 70 86 / 68%);
        margin: 0.75em 0;
    }

    .sub-menu .box a {
        width: 100%;
        float: left;
        font-size: 1em;
        line-height: 1.75em;
        color: #7a8a94;
        text-decoration: none;
    }

    .sub-menu .box a:hover {
        color: rgb(44 70 86);
    }

    .box {
        margin: 0 0 3em 0;
    }

    .icon.big i {
        font-size: 1.25em;
        top: 0.2em;
    }
    nav .menu-item.highlight:hover ~ #sub-menu-container #sub-menu-holder #sub-menu-bottom { opacity: 1; }

    #info-box {
        position: absolute;
        bottom: 2em;
        right: 2em;
    }

    #info-box ul {
        list-style: none;
    }
    #info-box a {
        color: white;
        text-decoration: none;
        text-align: right;
        padding: 0.5em 0;
        transition: all 0.1s ease-out;
        display: block;
        text-transform: uppercase;
        font-size: 1.25em;
        font-weight: 900;
        letter-spacing: 1px;
    }
    #info-box a:hover {
        color: rgba(255,255,255,0.5);
    }
</style>

<script src=\"https://kit.fontawesome.com/628c8d2499.js\" crossorigin=\"anonymous\"></script>

<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"style.css\" type=\"text/css\" />
<nav id=\"menu\">
    <div class=\"menu-item\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/\">Accueil</a>
        </div>
    </div>
    <div class=\"menu-item\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/createcli\">Clients</a>
        </div>
    </div>
    <div class=\"menu-item highlight\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/createmat\">Matériels</a>
        </div>
    </div>
    <div class=\"menu-item highlight\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/create\">Liens</a>
        </div>
    </div>
    <div class=\"menu-item\">
        <div class=\"menu-text\">
            <a href=\"https://eukles-test.wip/stats\">Statistiques</a>
        </div>
    </div>
</nav>

<div id=\"info-box\">
    <ul>
        <li><a target=\"_top\" href=\"https://github.com/Daykem\">Mon GitHub</a></li>
    </ul>
</div>
", "navbar/navbar.html.twig", "/Users/tomrouvier/Tom/Test eukles/tmp/demo-test/templates/navbar/navbar.html.twig");
    }
}