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

/* room/show.html.twig */
class __TwigTemplate_e805175ebc381e372072125a78eb85588e0f9f0e7aecb2f59456171aa6e2b2da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "room/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "room/show.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 3, $this->source); })()), "summary", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 6, $this->source); })()), "summary", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacité</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 20, $this->source); })()), "capacity", [], "any", false, false, false, 20), "html", null, true);
        echo " personnes</td>
            </tr>
            <tr>
                <th>Superficie</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 24, $this->source); })()), "superficy", [], "any", false, false, false, 24), "html", null, true);
        echo " m^2</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), "html", null, true);
        echo "€</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 32, $this->source); })()), "address", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    
    <br>
    <h3>Région(s): </h3>
    
    ";
        // line 40
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 40, $this->source); })()), "regions", [], "any", false, false, false, 40), null))) {
            // line 41
            echo "    <p>Aucune région pour l'instant</p>
    ";
        } else {
            // line 43
            echo "    \t<table class=\"table table-borderless\">
    \t\t<tbody>
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 45, $this->source); })()), "regions", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 46
                echo "        \t\t<tr>
        \t\t\t<td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 47), "html", null, true);
                echo "<td>
        \t\t\t<td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class='btn btn-outline-info'>Voir la région</a>
        \t\t</tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        \t</tbody>
        </table>
    ";
        }
        // line 54
        echo "    
    
    <h3>Propriétaire :</h3>
    <ul>
    \t<li>Nom : ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 58, $this->source); })()), "owner", [], "any", false, false, false, 58), "familyName", [], "any", false, false, false, 58), "html", null, true);
        echo "</li>
    \t";
        // line 59
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 59, $this->source); })()), "owner", [], "any", false, false, false, 59), "firstName", [], "any", false, false, false, 59), null))) {
            // line 60
            echo "    \t<li>Prénom : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 60, $this->source); })()), "owner", [], "any", false, false, false, 60), "firstName", [], "any", false, false, false, 60), "html", null, true);
            echo "</li>
    \t";
        }
        // line 62
        echo "    \t";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 62, $this->source); })()), "owner", [], "any", false, false, false, 62), "country", [], "any", false, false, false, 62), null))) {
            // line 63
            echo "    \t<li>Code Pays : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 63, $this->source); })()), "owner", [], "any", false, false, false, 63), "country", [], "any", false, false, false, 63), "html", null, true);
            echo "</li>
    \t";
        }
        // line 65
        echo "    </ul>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
        echo "\" class='btn btn-outline-dark'>Retour à la liste</a>

    <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" class='btn btn-outline-secondary'>Editer</a>

    ";
        // line 71
        echo twig_include($this->env, $context, "room/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "room/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 71,  215 => 69,  210 => 67,  206 => 65,  200 => 63,  197 => 62,  191 => 60,  189 => 59,  185 => 58,  179 => 54,  174 => 51,  165 => 48,  161 => 47,  158 => 46,  154 => 45,  150 => 43,  146 => 41,  144 => 40,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ room.summary }}{% endblock %}

{% block main %}
    <h1>{{ room.summary }}</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ room.id }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ room.description }}</td>
            </tr>
            <tr>
                <th>Capacité</th>
                <td>{{ room.capacity }} personnes</td>
            </tr>
            <tr>
                <th>Superficie</th>
                <td>{{ room.superficy }} m^2</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ room.price }}€</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ room.address }}</td>
            </tr>
        </tbody>
    </table>
    
    <br>
    <h3>Région(s): </h3>
    
    {% if room.regions == null %}
    <p>Aucune région pour l'instant</p>
    {% else %}
    \t<table class=\"table table-borderless\">
    \t\t<tbody>
            {% for region in room.regions %}
        \t\t<tr>
        \t\t\t<td>{{ region.name }}<td>
        \t\t\t<td><a href=\"{{ path('region_show', {'id': region.id}) }}\" class='btn btn-outline-info'>Voir la région</a>
        \t\t</tr>
            {% endfor %}
        \t</tbody>
        </table>
    {% endif %}
    
    
    <h3>Propriétaire :</h3>
    <ul>
    \t<li>Nom : {{ room.owner.familyName }}</li>
    \t{% if room.owner.firstName != null %}
    \t<li>Prénom : {{ room.owner.firstName }}</li>
    \t{% endif %}
    \t{% if room.owner.country != null %}
    \t<li>Code Pays : {{ room.owner.country }}</li>
    \t{% endif %}
    </ul>

    <a href=\"{{ path('room_index') }}\" class='btn btn-outline-dark'>Retour à la liste</a>

    <a href=\"{{ path('room_edit', {'id': room.id}) }}\" class='btn btn-outline-secondary'>Editer</a>

    {{ include('room/_delete_form.html.twig') }}
{% endblock %}
", "room/show.html.twig", "/Users/alexandrelaferrere/Desktop/TSP/Cours/Informatique/CSC_4101/Projet/proj-agvoy/agvoy-app/templates/room/show.html.twig");
    }
}
