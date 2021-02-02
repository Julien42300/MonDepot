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

/* serveur/form.html.twig */
class __TwigTemplate_81d9a1efcf6e49ece6abb9d9def5a9104e64f4f5926a632b9fae7768e607000a extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serveur/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "serveur/form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "serveur/form.html.twig", 1);
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

        echo "Formulaire d'inscription";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Bonjour ! ✅</h1>

    Bienvenue sur le formulaire d'inscription !
    
    <p>
    Veuillez remplir les champs pour créer votre compte :
    </p>

<form>
  <div class=\"form-group\">
    <label for=\"exampleInputLastame\">Nom</label>
    <input type=\"lastname\" class=\"form-control\" id=\"exampleInputLastname\" aria-describedby=\"lastnameHelp\" placeholder=\"Entrez votre nom\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputName\">Prénom</label>
    <input type=\"name\" class=\"form-control\" id=\"exampleInputName\" aria-describedby=\"nameHelp\" placeholder=\"Entrez votre prénom\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Adresse email</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Entrez votre email\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputLogin\">Identifiant</label>
    <input type=\"login\" class=\"form-control\" id=\"exampleInputLogin\" aria-describedby=\"loginHelp\" placeholder=\"Entrez votre identifiant\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Mot de passe</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Entrez votre mot de passe\">
  </div>
  <div class=\"form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
    <label class=\"form-check-label\" for=\"exampleCheck1\">Me tenir informé</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
</form>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "serveur/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formulaire d'inscription{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Bonjour ! ✅</h1>

    Bienvenue sur le formulaire d'inscription !
    
    <p>
    Veuillez remplir les champs pour créer votre compte :
    </p>

<form>
  <div class=\"form-group\">
    <label for=\"exampleInputLastame\">Nom</label>
    <input type=\"lastname\" class=\"form-control\" id=\"exampleInputLastname\" aria-describedby=\"lastnameHelp\" placeholder=\"Entrez votre nom\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputName\">Prénom</label>
    <input type=\"name\" class=\"form-control\" id=\"exampleInputName\" aria-describedby=\"nameHelp\" placeholder=\"Entrez votre prénom\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Adresse email</label>
    <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Entrez votre email\">
    <small id=\"emailHelp\" class=\"form-text text-muted\">We'll never share your email with anyone else.</small>
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputLogin\">Identifiant</label>
    <input type=\"login\" class=\"form-control\" id=\"exampleInputLogin\" aria-describedby=\"loginHelp\" placeholder=\"Entrez votre identifiant\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Mot de passe</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Entrez votre mot de passe\">
  </div>
  <div class=\"form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">
    <label class=\"form-check-label\" for=\"exampleCheck1\">Me tenir informé</label>
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button>
</form>

</div>
{% endblock %}
", "serveur/form.html.twig", "/home/ferrari/FServFerrari/templates/serveur/form.html.twig");
    }
}
