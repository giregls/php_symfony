<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* restaurant/list.html.twig */
class __TwigTemplate_f280dd4923f92db498a3558b77c98314 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];
    private \Twig\Runtime\EscaperRuntime $escaper;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->escaper = $env->getRuntime('Twig\Runtime\EscaperRuntime');

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->parent ??= $this->load("base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/list.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    Restaurants
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "    <main>
        <h1>Restaurants</h1>
        <p>
            ";
        // line 11
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "                <a href=\"";
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_add");
            yield "\">Ajouter un restaurant</a>
                <a href=\"";
            // line 13
            yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_add");
            yield "\">Ajouter une ville</a>
            ";
        }
        // line 15
        yield "        </p>

        <form method=\"get\" action=\"";
        // line 17
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_list");
        yield "\">
            <label for=\"ville\">Filtrer par ville</label>
            <select id=\"ville\" name=\"ville\">
                <option value=\"\">Toutes les villes</option>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["villes"]) || array_key_exists("villes", $context) ? $context["villes"] : (function () { throw new RuntimeError('Variable "villes" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["currentVille"]) {
            // line 22
            yield "                    <option value=\"";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["currentVille"], "id", [], "any", false, false, false, 22), "html", null, true);
            yield "\"";
            if (((($tmp = (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22) == CoreExtension::getAttribute($this->env, $this->source, $context["currentVille"], "id", [], "any", false, false, false, 22)))) {
                yield " selected";
            }
            yield ">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["currentVille"], "nom", [], "any", false, false, false, 22), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currentVille'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 24
        yield "            </select>
            <button type=\"submit\">Filtrer</button>
        </form>

        ";
        // line 28
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "            <p>Aucun restaurant trouvé.</p>
        ";
        } else {
            // line 31
            yield "            <table>
                <caption>Restaurants enregistrés</caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Note</th>
                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 44
                yield "                        <tr>
                            <td><a href=\"";
                // line 45
                yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\">";
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "nom", [], "any", false, false, false, 45), "html", null, true);
                yield "</a></td>
                            <td>";
                // line 46
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "description", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
                            <td>";
                // line 47
                yield (string) (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "rating", [], "any", false, false, false, 47))) ? ($this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "rating", [], "any", false, false, false, 47) . "/5"), "html", null, true)) : ("Non noté"));
                yield "</td>
                            <td>
                                ";
                // line 49
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "ville", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                                    <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_restaurants", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "ville", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
                    yield "\">";
                    yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "ville", [], "any", false, false, false, 50), "nom", [], "any", false, false, false, 50), "html", null, true);
                    yield "</a>
                                ";
                } else {
                    // line 52
                    yield "                                    Non renseignée
                                ";
                }
                // line 54
                yield "                            </td>
                            <td>
                                ";
                // line 56
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "                                    <a href=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                    yield "\">Modifier</a>
                                ";
                }
                // line 59
                yield "                                ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                                    <form method=\"post\" action=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    yield "\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 61
                    yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_restaurant_" . CoreExtension::getAttribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 61))), "html", null, true);
                    yield "\">
                                        <button type=\"submit\">Supprimer</button>
                                    </form>
                                ";
                }
                // line 65
                yield "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['restaurant'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 68
            yield "                </tbody>
            </table>
        ";
        }
        // line 71
        yield "    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "restaurant/list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  258 => 71,  253 => 68,  244 => 65,  237 => 61,  232 => 60,  229 => 59,  223 => 57,  221 => 56,  217 => 54,  213 => 52,  205 => 50,  203 => 49,  198 => 47,  194 => 46,  188 => 45,  185 => 44,  181 => 43,  167 => 31,  163 => 29,  161 => 28,  155 => 24,  139 => 22,  135 => 21,  128 => 17,  124 => 15,  119 => 13,  114 => 12,  112 => 11,  107 => 8,  94 => 7,  82 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}
    Restaurants
{% endblock %}

{% block body %}
    <main>
        <h1>Restaurants</h1>
        <p>
            {% if is_granted(\x27ROLE_USER\x27) %}
                <a href=\"{{ path(\x27restaurant_add\x27) }}\">Ajouter un restaurant</a>
                <a href=\"{{ path(\x27ville_add\x27) }}\">Ajouter une ville</a>
            {% endif %}
        </p>

        <form method=\"get\" action=\"{{ path(\x27restaurant_list\x27) }}\">
            <label for=\"ville\">Filtrer par ville</label>
            <select id=\"ville\" name=\"ville\">
                <option value=\"\">Toutes les villes</option>
                {% for currentVille in villes %}
                    <option value=\"{{ currentVille.id }}\"{% if ville and ville.id == currentVille.id %} selected{% endif %}>{{ currentVille.nom }}</option>
                {% endfor %}
            </select>
            <button type=\"submit\">Filtrer</button>
        </form>

        {% if restaurants is empty %}
            <p>Aucun restaurant trouvé.</p>
        {% else %}
            <table>
                <caption>Restaurants enregistrés</caption>
                <thead>
                    <tr>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Note</th>
                        <th scope=\"col\">Ville</th>
                        <th scope=\"col\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for restaurant in restaurants %}
                        <tr>
                            <td><a href=\"{{ path(\x27restaurant_show\x27, {id: restaurant.id}) }}\">{{ restaurant.nom }}</a></td>
                            <td>{{ restaurant.description }}</td>
                            <td>{{ restaurant.rating is not null ? restaurant.rating ~ \x27/5\x27 : \x27Non noté\x27 }}</td>
                            <td>
                                {% if restaurant.ville %}
                                    <a href=\"{{ path(\x27ville_restaurants\x27, {id: restaurant.ville.id}) }}\">{{ restaurant.ville.nom }}</a>
                                {% else %}
                                    Non renseignée
                                {% endif %}
                            </td>
                            <td>
                                {% if is_granted(\x27ROLE_USER\x27) %}
                                    <a href=\"{{ path(\x27restaurant_edit\x27, {id: restaurant.id}) }}\">Modifier</a>
                                {% endif %}
                                {% if is_granted(\x27ROLE_ADMIN\x27) %}
                                    <form method=\"post\" action=\"{{ path(\x27restaurant_delete\x27, {id: restaurant.id}) }}\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete_restaurant_\x27 ~ restaurant.id) }}\">
                                        <button type=\"submit\">Supprimer</button>
                                    </form>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </main>
{% endblock %}
", "restaurant/list.html.twig", "/home/gireg/php_symfony/templates/restaurant/list.html.twig");
    }
}
