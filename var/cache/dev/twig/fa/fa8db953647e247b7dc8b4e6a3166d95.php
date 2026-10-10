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

/* restaurant/show.html.twig */
class __TwigTemplate_fb4435a7c60fdbd5f230539073731577 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/show.html.twig"));

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
        yield "    ";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        yield "
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
        yield "    <h1>";
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
    <p>Description : ";
        // line 9
        yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        yield "</p>
    <p>Note : ";
        // line 10
        yield (string) (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 10, $this->source); })()), "rating", [], "any", false, false, false, 10))) ? ($this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 10, $this->source); })()), "rating", [], "any", false, false, false, 10) . "/5"), "html", null, true)) : ("Non noté"));
        yield "</p>
    <p>
        Ville :
        ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 13, $this->source); })()), "ville", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "            <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_restaurants", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 14, $this->source); })()), "ville", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
            yield "\">";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 14, $this->source); })()), "ville", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
            yield ", ";
            yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 14, $this->source); })()), "ville", [], "any", false, false, false, 14), "pays", [], "any", false, false, false, 14), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 16
            yield "            Non renseignée
        ";
        }
        // line 18
        yield "    </p>

    <p>
        <a href=\"";
        // line 21
        yield (string) $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_list");
        yield "\">Retour à la liste</a>
        ";
        // line 22
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "            <a href=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\">Modifier</a>
            <a href=\"";
            // line 24
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\">Ajouter un commentaire</a>
        ";
        }
        // line 26
        yield "    </p>

    ";
        // line 28
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "        <form method=\"post\" action=\"";
            yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restaurant_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 30
            yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_restaurant_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30))), "html", null, true);
            yield "\">
            <button type=\"submit\">Supprimer le restaurant</button>
        </form>
    ";
        }
        // line 34
        yield "
    <h2>Commentaires</h2>
    ";
        // line 36
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 36, $this->source); })()), "commentaires", [], "any", false, false, false, 36))) {
            // line 37
            yield "        <p>Aucun commentaire.</p>
    ";
        } else {
            // line 39
            yield "        <ul>
            ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["restaurant"]) || array_key_exists("restaurant", $context) ? $context["restaurant"] : (function () { throw new RuntimeError('Variable "restaurant" does not exist.', 40, $this->source); })()), "commentaires", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 41
                yield "                <li>
                    <p>";
                // line 42
                yield (string) $this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
                    <p>Note : ";
                // line 43
                yield (string) (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "rating", [], "any", false, false, false, 43))) ? ($this->escaper->escape((CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "rating", [], "any", false, false, false, 43) . "/5"), "html", null, true)) : ("Non noté"));
                yield "</p>
                    <p>Date : ";
                // line 44
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dateCreation", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dateCreation", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true)) : ("Non renseignée"));
                yield "</p>
                    <p>Auteur : ";
                // line 45
                yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->escaper->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45), "html", null, true)) : ("Inconnu"));
                yield "</p>
                    ";
                // line 46
                if (((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "auteur", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46))))) {
                    // line 47
                    yield "                        <form method=\"post\" action=\"";
                    yield (string) $this->escaper->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    yield "\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 48
                    yield (string) $this->escaper->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_comment_" . CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 48))), "html", null, true);
                    yield "\">
                            <button type=\"submit\">Supprimer le commentaire</button>
                        </form>
                    ";
                }
                // line 52
                yield "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 54
            yield "        </ul>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "restaurant/show.html.twig";
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
        return array (  237 => 54,  229 => 52,  222 => 48,  217 => 47,  215 => 46,  211 => 45,  207 => 44,  203 => 43,  199 => 42,  196 => 41,  192 => 40,  189 => 39,  185 => 37,  183 => 36,  179 => 34,  172 => 30,  167 => 29,  165 => 28,  161 => 26,  156 => 24,  151 => 23,  149 => 22,  145 => 21,  140 => 18,  136 => 16,  126 => 14,  124 => 13,  118 => 10,  114 => 9,  109 => 8,  96 => 7,  82 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \x27base.html.twig\x27 %}

{% block title %}
    {{ restaurant.nom }}
{% endblock %}

{% block body %}
    <h1>{{ restaurant.nom }}</h1>
    <p>Description : {{ restaurant.description }}</p>
    <p>Note : {{ restaurant.rating is not null ? restaurant.rating ~ \x27/5\x27 : \x27Non noté\x27 }}</p>
    <p>
        Ville :
        {% if restaurant.ville %}
            <a href=\"{{ path(\x27ville_restaurants\x27, {id: restaurant.ville.id}) }}\">{{ restaurant.ville.nom }}, {{ restaurant.ville.pays }}</a>
        {% else %}
            Non renseignée
        {% endif %}
    </p>

    <p>
        <a href=\"{{ path(\x27restaurant_list\x27) }}\">Retour à la liste</a>
        {% if is_granted(\x27ROLE_USER\x27) %}
            <a href=\"{{ path(\x27restaurant_edit\x27, {id: restaurant.id}) }}\">Modifier</a>
            <a href=\"{{ path(\x27comment_add\x27, {id: restaurant.id}) }}\">Ajouter un commentaire</a>
        {% endif %}
    </p>

    {% if is_granted(\x27ROLE_ADMIN\x27) %}
        <form method=\"post\" action=\"{{ path(\x27restaurant_delete\x27, {id: restaurant.id}) }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete_restaurant_\x27 ~ restaurant.id) }}\">
            <button type=\"submit\">Supprimer le restaurant</button>
        </form>
    {% endif %}

    <h2>Commentaires</h2>
    {% if restaurant.commentaires is empty %}
        <p>Aucun commentaire.</p>
    {% else %}
        <ul>
            {% for commentaire in restaurant.commentaires %}
                <li>
                    <p>{{ commentaire.contenu }}</p>
                    <p>Note : {{ commentaire.rating is not null ? commentaire.rating ~ \x27/5\x27 : \x27Non noté\x27 }}</p>
                    <p>Date : {{ commentaire.dateCreation ? commentaire.dateCreation|date(\x27Y-m-d H:i\x27) : \x27Non renseignée\x27 }}</p>
                    <p>Auteur : {{ commentaire.auteur ? commentaire.auteur.email : \x27Inconnu\x27 }}</p>
                    {% if is_granted(\x27ROLE_ADMIN\x27) or (app.user and commentaire.auteur and app.user.id == commentaire.auteur.id) %}
                        <form method=\"post\" action=\"{{ path(\x27comment_delete\x27, {id: commentaire.id}) }}\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token(\x27delete_comment_\x27 ~ commentaire.id) }}\">
                            <button type=\"submit\">Supprimer le commentaire</button>
                        </form>
                    {% endif %}
                </li>
            {% endfor %}
        </ul>
    {% endif %}
{% endblock %}
", "restaurant/show.html.twig", "/home/gireg/php_symfony/templates/restaurant/show.html.twig");
    }
}
