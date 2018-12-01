<?php

/* @App/AddressBook/addressBookList.html.twig */
class __TwigTemplate_5653c15c9d7b536350e23b8dab3dcb06d842725a78b2b6b9852bb4a8a389317e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/AddressBook/addressBookList.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/AddressBook/addressBookList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/AddressBook/addressBookList.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Addressbook";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .img-thumbnail{
            max-width: 70px;
        }

    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
    <div class=\"row\">

        <div class=\"col-md-4\"><h1>Addressbook</h1></div>
        <div class=\"col-md-5\"></div>
        <div class=\"col-md-3\"> <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("InsertEntry");
        echo "\"><h3>Add an entry  </h3></a></div>
    </div>

    </br>



    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->source); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 32
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                <strong>";
                // line 33
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</strong>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "

    <table class=\"table table-hover\">
    <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
        <th>Country</th>
        <th>Email</th>
        <th>Picture</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addressbooks"]) || array_key_exists("addressbooks", $context) ? $context["addressbooks"] : (function () { throw new Twig_Error_Runtime('Variable "addressbooks" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["addressbook"]) {
            // line 53
            echo "        <tr>
            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addressbook"], "firstname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addressbook"], "lastname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addressbook"], "city", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addressbook"], "country", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["addressbook"], "email", array()), "html", null, true);
            echo "</td>
            <td>
                ";
            // line 60
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["addressbook"], "picture", array()))) {
                // line 61
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["addressbook"], "picture", array()))), "html", null, true);
                echo "\" class=\"img-thumbnail\" >
                ";
            } else {
                // line 63
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.jpeg"), "html", null, true);
                echo "\" class=\"img-thumbnail\" >
                ";
            }
            // line 65
            echo "            </td>
            <td>
                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("EditEntry", array("id" => twig_get_attribute($this->env, $this->source, $context["addressbook"], "id", array()))), "html", null, true);
            echo "\"> <button class=\"btn btn-default\">Edit</button>  </a>
                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteEntry", array("id" => twig_get_attribute($this->env, $this->source, $context["addressbook"], "id", array()))), "html", null, true);
            echo "\"> <button class=\"btn btn-danger\">Delete</button>  </a>

            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addressbook'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
    </tbody>
    </table>



    ";
        // line 79
        if (((isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new Twig_Error_Runtime('Variable "maxPages" does not exist.', 79, $this->source); })()) > 1)) {
            // line 80
            echo "        <ul class=\"pagination pagination-sm\">

            <li ";
            // line 82
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 82, $this->source); })()) == 1)) ? ("class=\"disabled\"") : (""));
            echo ">
                <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListAddressBook", array("page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 83, $this->source); })()) - 1) < 1)) ? (1) : (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 83, $this->source); })()) - 1))))), "html", null, true);
            echo "\">«</a>
            </li>

            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new Twig_Error_Runtime('Variable "maxPages" does not exist.', 86, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 87
                echo "                <li ";
                echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 87, $this->source); })()) == $context["i"])) ? ("class=\"active\"") : (""));
                echo ">
                    <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListAddressBook", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "
            <li ";
            // line 92
            echo ((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 92, $this->source); })()) == (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new Twig_Error_Runtime('Variable "maxPages" does not exist.', 92, $this->source); })()))) ? ("class=\"disabled\"") : (""));
            echo ">
                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListAddressBook", array("page" => (((((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 93, $this->source); })()) + 1) <= (isset($context["maxPages"]) || array_key_exists("maxPages", $context) ? $context["maxPages"] : (function () { throw new Twig_Error_Runtime('Variable "maxPages" does not exist.', 93, $this->source); })()))) ? (((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 93, $this->source); })()) + 1)) : ((isset($context["thisPage"]) || array_key_exists("thisPage", $context) ? $context["thisPage"] : (function () { throw new Twig_Error_Runtime('Variable "thisPage" does not exist.', 93, $this->source); })()))))), "html", null, true);
            echo "\">»</a>
            </li>
        </ul>
    ";
        }
        // line 97
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/AddressBook/addressBookList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 97,  278 => 93,  274 => 92,  271 => 91,  260 => 88,  255 => 87,  251 => 86,  245 => 83,  241 => 82,  237 => 80,  235 => 79,  227 => 73,  216 => 68,  212 => 67,  208 => 65,  202 => 63,  196 => 61,  194 => 60,  189 => 58,  185 => 57,  181 => 56,  177 => 55,  173 => 54,  170 => 53,  166 => 52,  149 => 37,  143 => 36,  134 => 33,  129 => 32,  124 => 31,  120 => 30,  110 => 23,  103 => 18,  94 => 17,  73 => 6,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Addressbook{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .img-thumbnail{
            max-width: 70px;
        }

    </style>

{% endblock %}

{% block body %}

    <div class=\"row\">

        <div class=\"col-md-4\"><h1>Addressbook</h1></div>
        <div class=\"col-md-5\"></div>
        <div class=\"col-md-3\"> <a href=\"{{ path('InsertEntry') }}\"><h3>Add an entry  </h3></a></div>
    </div>

    </br>



    {% for label,  messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }}\">
                <strong>{{ message }}</strong>
            </div>
        {% endfor %}
    {% endfor %}


    <table class=\"table table-hover\">
    <thead>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>City</th>
        <th>Country</th>
        <th>Email</th>
        <th>Picture</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    {% for  addressbook in addressbooks %}
        <tr>
            <td>{{ addressbook.firstname }}</td>
            <td>{{ addressbook.lastname }}</td>
            <td>{{ addressbook.city }}</td>
            <td>{{ addressbook.country }}</td>
            <td>{{ addressbook.email }}</td>
            <td>
                {% if addressbook.picture is not empty %}
                    <img src=\"{{ asset('uploads/' ~ addressbook.picture) }}\" class=\"img-thumbnail\" >
                {% else %}
                    <img src=\"{{ asset('uploads/default.jpeg') }}\" class=\"img-thumbnail\" >
                {% endif %}
            </td>
            <td>
                <a href=\"{{ path('EditEntry', {'id':addressbook.id}) }}\"> <button class=\"btn btn-default\">Edit</button>  </a>
                <a href=\"{{ path('DeleteEntry', {'id':addressbook.id}) }}\"> <button class=\"btn btn-danger\">Delete</button>  </a>

            </td>
        </tr>
    {% endfor %}

    </tbody>
    </table>



    {% if maxPages > 1 %}
        <ul class=\"pagination pagination-sm\">

            <li {{ thisPage == 1 ? 'class=\"disabled\"' }}>
                <a href=\"{{ path('ListAddressBook', {'page': thisPage-1 < 1 ? 1 : thisPage-1}) }}\">«</a>
            </li>

            {% for i in 1..maxPages %}
                <li {{ thisPage == i ? 'class=\"active\"' }}>
                    <a href=\"{{ path('ListAddressBook', {'page': i}) }}\">{{ i }}</a>
                </li>
            {% endfor %}

            <li {{ thisPage == maxPages ? 'class=\"disabled\"' }}>
                <a href=\"{{ path('ListAddressBook', {'page': thisPage+1 <= maxPages ? thisPage+1 : thisPage}) }}\">»</a>
            </li>
        </ul>
    {% endif %}

{% endblock %}
", "@App/AddressBook/addressBookList.html.twig", "/home/kleidi/Documents/workspace/lillydoo_7.0/src/AppBundle/Resources/views/AddressBook/addressBookList.html.twig");
    }
}
