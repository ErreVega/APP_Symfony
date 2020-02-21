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

/* msgRec.html.twig */
class __TwigTemplate_5ec610ae943ae9e4cceac999446c12fcbe017b1c12c1ed94cb3828a106d0d35c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "msgRec.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "msgRec.html.twig"));

        $this->parent = $this->loadTemplate("main.html.twig", "msgRec.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mis Mensajes ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div id=\"msg_table\" class=\"tabs-content\">
        <div class=\" row border-bottom p-1  \">
            <div class=\"col-1\">Fecha</div>
            <div class=\"col-1\">Hora</div>
            <div class=\"col-2\">Enviado Por</div>
            <div class=\"col\">Asunto</div>
        </div>


        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mails"]) || array_key_exists("mails", $context) ? $context["mails"] : (function () { throw new RuntimeError('Variable "mails" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mail"]) {
            // line 15
            echo "            <div class=\"hover row border-bottom p-1\" id=\"msg_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], 0, [], "array", false, false, false, 15), "msgid", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
                <div class=\"col-1\"> ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], 0, [], "array", false, false, false, 16), "date", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "  </div>
                <div class=\"col-1\"> ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], 0, [], "array", false, false, false, 17), "date", [], "any", false, false, false, 17), "h:i:s"), "html", null, true);
            echo "  </div>
                <div class=\"col-2\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], 0, [], "array", false, false, false, 18), "senderid", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo "  </div>
                <div class=\"col\"> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["mail"], 0, [], "array", false, false, false, 19), "subject", [], "any", false, false, false, 19), "html", null, true);
            echo "  </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    </div>


    row.setAttribute(\"onclick\", \"getMsgFull(\" + fetchedRow.msg_id + \")\")

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "msgRec.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 22,  120 => 19,  116 => 18,  112 => 17,  108 => 16,  103 => 15,  99 => 14,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"main.html.twig\" %}

{% block title %}Mis Mensajes {% endblock %}
{% block content %}
    <div id=\"msg_table\" class=\"tabs-content\">
        <div class=\" row border-bottom p-1  \">
            <div class=\"col-1\">Fecha</div>
            <div class=\"col-1\">Hora</div>
            <div class=\"col-2\">Enviado Por</div>
            <div class=\"col\">Asunto</div>
        </div>


        {% for mail in mails %}
            <div class=\"hover row border-bottom p-1\" id=\"msg_{{ mail[0].msgid }}\">
                <div class=\"col-1\"> {{ mail[0].date | date(\"d/m/Y\") }}  </div>
                <div class=\"col-1\"> {{ mail[0].date | date(\"h:i:s\") }}  </div>
                <div class=\"col-2\"> {{ mail[0].senderid.username  }}  </div>
                <div class=\"col\"> {{ mail[0].subject }}  </div>
            </div>
        {% endfor %}

    </div>


    row.setAttribute(\"onclick\", \"getMsgFull(\" + fetchedRow.msg_id + \")\")

{% endblock %}
", "msgRec.html.twig", "C:\\Users\\alumno\\PhpstormProjects\\my_project_name\\templates\\msgRec.html.twig");
    }
}
