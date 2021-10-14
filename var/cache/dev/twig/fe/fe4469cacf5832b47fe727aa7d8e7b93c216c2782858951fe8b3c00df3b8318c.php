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
class __TwigTemplate_2d17c290aacb1b6a52899b6d24f3cd93a9da5bbe4da30e6f4c6f26a170ad91bd extends Template
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
        \t<tr>
    \t\t\t<th>Image</th>
    \t\t\t<td><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 12, $this->source); })()), "imageFile"), "html", null, true);
        echo "\"/></td>
\t\t\t</tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Capacité</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 24, $this->source); })()), "capacity", [], "any", false, false, false, 24), "html", null, true);
        echo " personnes</td>
            </tr>
            <tr>
                <th>Superficie</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 28, $this->source); })()), "superficy", [], "any", false, false, false, 28), "html", null, true);
        echo " m^2</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32), "html", null, true);
        echo "€</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 36, $this->source); })()), "address", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
    
    <br>
    <h3>Région(s): </h3>
    
    ";
        // line 44
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 44, $this->source); })()), "regions", [], "any", false, false, false, 44), null))) {
            // line 45
            echo "    <p>Aucune région pour l'instant</p>
    ";
        } else {
            // line 47
            echo "    \t<table class=\"table table-borderless\">
    \t\t<tbody>
            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 49, $this->source); })()), "regions", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
                // line 50
                echo "        \t\t<tr>
        \t\t\t<td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "<td>
        \t\t\t<td><a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("region_show", ["id" => twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class='btn btn-outline-info'>Voir la région</a>
        \t\t</tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "        \t</tbody>
        </table>
    ";
        }
        // line 58
        echo "    
    
    <h3>Propriétaire :</h3>
    <ul>
    \t<li>Nom : ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 62, $this->source); })()), "owner", [], "any", false, false, false, 62), "familyName", [], "any", false, false, false, 62), "html", null, true);
        echo "</li>
    \t";
        // line 63
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 63, $this->source); })()), "owner", [], "any", false, false, false, 63), "firstName", [], "any", false, false, false, 63), null))) {
            // line 64
            echo "    \t<li>Prénom : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 64, $this->source); })()), "owner", [], "any", false, false, false, 64), "firstName", [], "any", false, false, false, 64), "html", null, true);
            echo "</li>
    \t";
        }
        // line 66
        echo "    \t";
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 66, $this->source); })()), "owner", [], "any", false, false, false, 66), "country", [], "any", false, false, false, 66), null))) {
            // line 67
            echo "    \t<li>Code Pays : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 67, $this->source); })()), "owner", [], "any", false, false, false, 67), "country", [], "any", false, false, false, 67), "html", null, true);
            echo "</li>
    \t";
        }
        // line 69
        echo "    </ul>
    
    ";
        // line 71
        $context["panier"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "session", [], "any", false, false, false, 71), "get", [0 => "panier"], "method", false, false, false, 71);
        // line 72
        echo "    ";
        if ($this->env->isDebug()) {
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 72, $this->source); })()));
        }
        // line 73
        echo "    <br>
    ";
        // line 74
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 74, $this->source); })()))) {
            // line 75
            echo "    <h3>Dans le panier : OUI </h3>
    ";
        } else {
            // line 77
            echo "    <h3>Dans le panier : NON </h3>
    ";
        }
        // line 79
        echo "    
    <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_mark", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\" class='btn btn-outline-warning'>";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 80, $this->source); })()))) {
            echo "Démarquer";
        } else {
            echo "Marquer";
        }
        echo "</a>
\t<br><br><br>
    <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_index");
        echo "\" class='btn btn-outline-dark'>Retour à la liste</a>
\t";
        // line 83
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 84
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["room"]) || array_key_exists("room", $context) ? $context["room"] : (function () { throw new RuntimeError('Variable "room" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\" class='btn btn-outline-secondary'>Editer</a>
    ";
            // line 85
            echo twig_include($this->env, $context, "room/_delete_form.html.twig");
            echo "
    ";
        }
        
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
        return array (  262 => 85,  257 => 84,  255 => 83,  251 => 82,  240 => 80,  237 => 79,  233 => 77,  229 => 75,  227 => 74,  224 => 73,  219 => 72,  217 => 71,  213 => 69,  207 => 67,  204 => 66,  198 => 64,  196 => 63,  192 => 62,  186 => 58,  181 => 55,  172 => 52,  168 => 51,  165 => 50,  161 => 49,  157 => 47,  153 => 45,  151 => 44,  140 => 36,  133 => 32,  126 => 28,  119 => 24,  112 => 20,  105 => 16,  98 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ room.summary }}{% endblock %}

{% block main %}
    <h1>{{ room.summary }}</h1>

    <table class=\"table\">
        <tbody>
        \t<tr>
    \t\t\t<th>Image</th>
    \t\t\t<td><img src=\"{{ vich_uploader_asset(room, 'imageFile') }}\"/></td>
\t\t\t</tr>
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
    
    {% set panier = app.session.get('panier') %}
    {% dump(panier) %}
    <br>
    {% if room.id in panier %}
    <h3>Dans le panier : OUI </h3>
    {% else %}
    <h3>Dans le panier : NON </h3>
    {% endif %}
    
    <a href=\"{{ path('room_mark', {'id': room.id}) }}\" class='btn btn-outline-warning'>{% if room.id in panier %}Démarquer{% else %}Marquer{% endif %}</a>
\t<br><br><br>
    <a href=\"{{ path('room_index') }}\" class='btn btn-outline-dark'>Retour à la liste</a>
\t{% if is_granted('ROLE_USER') %}
    <a href=\"{{ path('room_edit', {'id': room.id}) }}\" class='btn btn-outline-secondary'>Editer</a>
    {{ include('room/_delete_form.html.twig') }}
    {% endif %}
{% endblock %}
", "room/show.html.twig", "/Users/alexandrelaferrere/Desktop/TSP/Cours/Informatique/CSC_4101/Projet/proj-agvoy/agvoy-app/templates/room/show.html.twig");
    }
}
