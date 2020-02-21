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

/* facto.html.twig */
class __TwigTemplate_7dd0c01dc27a63404d29d21a64eace6c4a6e5fd488530a9d9f41845d3d853454 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facto.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Factorial</title>
    </head>
    <body>

    ";
        // line 10
        if ((isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    <h1>el resultado es ";
            echo twig_escape_filter($this->env, (isset($context["res"]) || array_key_exists("res", $context) ? $context["res"] : (function () { throw new RuntimeError('Variable "res" does not exist.', 11, $this->source); })()), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 13
            echo "    <h1>Error. Numero negativo</h1>
    ";
        }
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 13,  55 => 11,  53 => 10,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/base.html.twig #}
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Factorial</title>
    </head>
    <body>

    {% if res %}
    <h1>el resultado es {{ res }}</h1>
    {% else %}
    <h1>Error. Numero negativo</h1>
    {% endif %}
    </body>
</html>
", "facto.html.twig", "C:\\Users\\alumno\\PhpstormProjects\\my_project_name\\templates\\facto.html.twig");
    }
}
