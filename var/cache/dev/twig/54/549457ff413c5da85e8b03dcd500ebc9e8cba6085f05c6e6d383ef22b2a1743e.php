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

/* login.html.twig */
class __TwigTemplate_5479cd5df3c9438644b08204ea0e4a71bd405fb59527e61e4125c98d0b6bc006 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseAPP.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("baseAPP.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"col-md-1\"></div> 
    <form class=\"col-md-4 m-4\" method=\"post\">

    <h2>Formulario de Acceso</h2>
        ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageKey", [], "any", false, false, false, 11), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })()), "messageData", [], "any", false, false, false, 11), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14)) {
            // line 15
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 19
        echo "      <div class=\"form-group\">
            <label for=\"user\">Nombre Usuario</label>
            <input type=\"text\" class=\"form-control\" id=\"user\" placeholder=\"Usuario\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" name=\"email\">
          </div>
      <div class=\"form-group\">
            <label for=\"pass\">Contraseña</label>
            <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"password\" placeholder=\"Contraseña\">
          </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >
      <button type=\"submit\" class=\"btn btn-primary m-4\">Entrar</button>
      <button type=\"button\" class=\"btn btn-primary m-4\" onclick=\"loadRecoverPass()\">¿Olvido su contraseña?</button>
    </form>
    <div class=\"col-md-6 m-4\"> 
    <h3>¿No esta registrado?</h3> 
    <form id=\"register\" class=\"col-10\" method=\"post\">
          <div class=\"form-group\">
                <label for=\"userReg\">Nombre Usuario</label>
                <input type=\"text\" class=\"form-control\" id=\"userReg\" name=\"userReg\" placeholder=\"Usuario\">
              </div>
          <div class=\"form-group\">
                <label for=\"passReg\">Contraseña</label>
                <input type=\"password\" class=\"form-control\" id=\"passReg\" name=\"passReg\" placeholder=\"Contraseña\">
              </div>
          <div class=\"form-group\">
                <label for=\"passConfirmReg\">Confirmar Contraseña</label>
                <input type=\"password\" class=\"form-control\" id=\"passConfirmReg\" name=\"passConfirmReg\" placeholder=\"Contraseña\">
              </div>
          <div class=\"form-group\">
                <label for=\"emailReg\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"emailReg\" name=\"emailReg\" placeholder=\"xxx@domain.com\">
              </div>
          <button class=\"btn btn-primary m-2\"  onclick=\"return sendSignIt()\">Registrese!</button>
        </form>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 28,  122 => 21,  118 => 19,  110 => 16,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAPP.html.twig\" %}


{% block title %}Login{% endblock %}
{% block body %}
    <div class=\"col-md-1\"></div> 
    <form class=\"col-md-4 m-4\" method=\"post\">

    <h2>Formulario de Acceso</h2>
        {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}
      <div class=\"form-group\">
            <label for=\"user\">Nombre Usuario</label>
            <input type=\"text\" class=\"form-control\" id=\"user\" placeholder=\"Usuario\" value=\"{{ last_username }}\" name=\"email\">
          </div>
      <div class=\"form-group\">
            <label for=\"pass\">Contraseña</label>
            <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"password\" placeholder=\"Contraseña\">
          </div>
        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
      <button type=\"submit\" class=\"btn btn-primary m-4\">Entrar</button>
      <button type=\"button\" class=\"btn btn-primary m-4\" onclick=\"loadRecoverPass()\">¿Olvido su contraseña?</button>
    </form>
    <div class=\"col-md-6 m-4\"> 
    <h3>¿No esta registrado?</h3> 
    <form id=\"register\" class=\"col-10\" method=\"post\">
          <div class=\"form-group\">
                <label for=\"userReg\">Nombre Usuario</label>
                <input type=\"text\" class=\"form-control\" id=\"userReg\" name=\"userReg\" placeholder=\"Usuario\">
              </div>
          <div class=\"form-group\">
                <label for=\"passReg\">Contraseña</label>
                <input type=\"password\" class=\"form-control\" id=\"passReg\" name=\"passReg\" placeholder=\"Contraseña\">
              </div>
          <div class=\"form-group\">
                <label for=\"passConfirmReg\">Confirmar Contraseña</label>
                <input type=\"password\" class=\"form-control\" id=\"passConfirmReg\" name=\"passConfirmReg\" placeholder=\"Contraseña\">
              </div>
          <div class=\"form-group\">
                <label for=\"emailReg\">Email</label>
                <input type=\"email\" class=\"form-control\" id=\"emailReg\" name=\"emailReg\" placeholder=\"xxx@domain.com\">
              </div>
          <button class=\"btn btn-primary m-2\"  onclick=\"return sendSignIt()\">Registrese!</button>
        </form>
    </div>

{% endblock %}", "login.html.twig", "C:\\Users\\alumno\\PhpstormProjects\\my_project_name\\templates\\login.html.twig");
    }
}
