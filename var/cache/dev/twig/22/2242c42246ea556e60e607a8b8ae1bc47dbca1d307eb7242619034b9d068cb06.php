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

/* lucky/number.html.twig */
class __TwigTemplate_0727411d4518dc08129d150a58ca144e82b6bb0101ea6494ed854d7f65d8b0c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        // line 2
        echo "Hello, ";
        echo twig_escape_filter($this->env, (isset($context["the_name"]) || array_key_exists("the_name", $context) ? $context["the_name"] : (function () { throw new RuntimeError('Variable "the_name" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "
<h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["number"]) || array_key_exists("number", $context) ? $context["number"] : (function () { throw new RuntimeError('Variable "number" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</h1>
<h2>The binary version is ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["number_binary"]) || array_key_exists("number_binary", $context) ? $context["number_binary"] : (function () { throw new RuntimeError('Variable "number_binary" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h2>
<h2>The hexadecimal version is ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["number_hex"]) || array_key_exists("number_hex", $context) ? $context["number_hex"] : (function () { throw new RuntimeError('Variable "number_hex" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</h2>

binary
0 1

decimal
0 1 2 3 4 5 6 7 8 9 

hexadecimal
0 1 2 3 4 5 6 7 8 9 A B C D E F";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  52 => 4,  48 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/lucky/number.html.twig #}
Hello, {{the_name}}
<h1>Your lucky number is {{ number }}</h1>
<h2>The binary version is {{number_binary}}</h2>
<h2>The hexadecimal version is {{number_hex}}</h2>

binary
0 1

decimal
0 1 2 3 4 5 6 7 8 9 

hexadecimal
0 1 2 3 4 5 6 7 8 9 A B C D E F", "lucky/number.html.twig", "/Users/daniel/temp/bb/templates/lucky/number.html.twig");
    }
}
