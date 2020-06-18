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

/* form.html.twig */
class __TwigTemplate_42966b69c994fcedb00c230cc17dd2f33d451f3f1ef823f54dfb5bf4e3f83576 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
            'container2' => [$this, 'block_container2'],
            'footer' => [$this, 'block_footer'],
            'stylejavascrit' => [$this, 'block_stylejavascrit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form.html.twig"));

        // line 1
        echo "
<!doctype html>
<html>
";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 41
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Bootstrap Responsive Onepage HTML Template\">
    <meta name=\"author\" content=\"\">

    <title> ";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!--CSS-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"css-preset\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/presets/preset1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

    <!-- icons -->
    <link rel=\"icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/favicon.ico"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-144-precomposed.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-114-precomposed.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-72-precomposed.html"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-57-precomposed.html"), "html", null, true);
        echo "\">

</head><!--/head-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Humanity | Bootstrap Responsive Onepage HTML Template ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "
    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>

";
        // line 48
        $this->displayBlock('nav', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('container2', $context, $blocks);
        // line 58
        echo "

</div>
";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 108
        echo "<!--/#scripts-->
";
        // line 109
        $this->displayBlock('stylejavascrit', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 49
        echo "    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_container2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container2"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <a href=\"index.html\"><img class=\"img-fluid\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"copyright-text\">
                        <p>&copy; copyright 2014 by <a href=\"#\"> Humanity.</a> All rights reserved.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"footer-socials text-right\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

             <!--/Preset Style Chooser-->
    <div class=\"style-chooser\">
        <div class=\"style-chooser-inner\">
            <a href=\"#\" class=\"toggler\"><i class=\"fa fa-futbol-o fa-spin\"></i></a>
            <h4>Presets Color</h4>
            <ul class=\"clearfix\">
                <li class=\"preset1 active\" data-preset=\"1\"><a href=\"#\" data-color=\"preset1\"></a></li>
                <li class=\"preset2\" data-preset=\"2\"><a href=\"#\" data-color=\"preset2\"></a></li>
                <li class=\"preset3\" data-preset=\"3\"><a href=\"#\" data-color=\"preset3\"></a></li>
                <li class=\"preset4\" data-preset=\"4\"><a href=\"#\" data-color=\"preset4\"></a></li>
                <li class=\"preset5\" data-preset=\"5\"><a href=\"#\" data-color=\"preset5\"></a></li>
                <li class=\"preset6\" data-preset=\"6\"><a href=\"#\" data-color=\"preset6\"></a></li>
                <li class=\"preset7\" data-preset=\"7\"><a href=\"#\" data-color=\"preset7\"></a></li>
                <li class=\"preset8\" data-preset=\"8\"><a href=\"#\" data-color=\"preset8\"></a></li>
            </ul>
        </div>
    </div>
    <!--/End:Preset Style Chooser-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_stylejavascrit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylejavascrit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylejavascrit"));

        // line 110
        echo "<script data-cfasync=\"false\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.parallax.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/preloader_canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/main.js"), "html", null, true);
        echo "\"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-73239902-1', 'auto');
    ga('send', 'pageview');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  391 => 119,  387 => 118,  383 => 117,  379 => 116,  375 => 115,  371 => 114,  367 => 113,  363 => 112,  359 => 111,  352 => 110,  342 => 109,  290 => 66,  284 => 62,  274 => 61,  256 => 56,  241 => 49,  231 => 48,  221 => 109,  218 => 108,  216 => 61,  211 => 58,  209 => 56,  206 => 55,  204 => 48,  196 => 42,  186 => 41,  167 => 12,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  130 => 29,  126 => 28,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  86 => 12,  77 => 5,  67 => 4,  57 => 41,  55 => 4,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html>
{% block header %}
<head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Bootstrap Responsive Onepage HTML Template\">
    <meta name=\"author\" content=\"\">

    <title> {% block title %}Humanity | Bootstrap Responsive Onepage HTML Template {% endblock %}</title>

    <!--CSS-->
    <link href=\"{{ asset('Front/css/bootstrap.min.css') }}\"  rel=\"stylesheet\">
    <link href=\"{{ asset('Front/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Front/css/animate.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Front/css/prettyPhoto.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Front/css/main.css') }}\" rel=\"stylesheet\">
    <link id=\"css-preset\" href=\"{{ asset('Front/css/presets/preset1.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('Front/css/responsive.css') }}\" rel=\"stylesheet\">
    
    <!--Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src=\"{{ asset('Front/js/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('Front/js/respond.min.js') }}\"></script>
    <![endif]-->

    <!-- icons -->
    <link rel=\"icon\" href=\"{{ asset('Front/images/ico/favicon.ico')}}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('Front/images/ico/apple-touch-icon-144-precomposed.html') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('Front/images/ico/apple-touch-icon-114-precomposed.html') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('Front/images/ico/apple-touch-icon-72-precomposed.html') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"{{ asset('Front/images/ico/apple-touch-icon-57-precomposed.html') }}\">

</head><!--/head-->
{% endblock %}
{% block body %}

    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>

{% block nav %}
    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>

{% endblock %}

{%  block container2 %}
{% endblock %}


</div>
{% block footer %}
    <footer id=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <a href=\"index.html\"><img class=\"img-fluid\" src=\"{{ asset('Front/images/logo.png')}}\" alt=\"\" /></a>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"copyright-text\">
                        <p>&copy; copyright 2014 by <a href=\"#\"> Humanity.</a> All rights reserved.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"footer-socials text-right\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-vimeo-square\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-youtube\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

             <!--/Preset Style Chooser-->
    <div class=\"style-chooser\">
        <div class=\"style-chooser-inner\">
            <a href=\"#\" class=\"toggler\"><i class=\"fa fa-futbol-o fa-spin\"></i></a>
            <h4>Presets Color</h4>
            <ul class=\"clearfix\">
                <li class=\"preset1 active\" data-preset=\"1\"><a href=\"#\" data-color=\"preset1\"></a></li>
                <li class=\"preset2\" data-preset=\"2\"><a href=\"#\" data-color=\"preset2\"></a></li>
                <li class=\"preset3\" data-preset=\"3\"><a href=\"#\" data-color=\"preset3\"></a></li>
                <li class=\"preset4\" data-preset=\"4\"><a href=\"#\" data-color=\"preset4\"></a></li>
                <li class=\"preset5\" data-preset=\"5\"><a href=\"#\" data-color=\"preset5\"></a></li>
                <li class=\"preset6\" data-preset=\"6\"><a href=\"#\" data-color=\"preset6\"></a></li>
                <li class=\"preset7\" data-preset=\"7\"><a href=\"#\" data-color=\"preset7\"></a></li>
                <li class=\"preset8\" data-preset=\"8\"><a href=\"#\" data-color=\"preset8\"></a></li>
            </ul>
        </div>
    </div>
    <!--/End:Preset Style Chooser-->
{% endblock %}
<!--/#scripts-->
{% block stylejavascrit %}
<script data-cfasync=\"false\" src=\"{{ asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}\"></script><script src=\"{{ asset('Front/js/jquery.js')}}\"></script>
<script src=\"{{ asset('Front/js/popper.min.js')}}\"></script>
<script src=\"{{ asset('Front/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('Front/js/jquery.prettyPhoto.js')}}\"></script>
<script src=\"{{ asset('Front/js/jquery.parallax.js')}}\"></script>
<script src=\"{{ asset('Front/js/smoothscroll.js')}}\"></script>
<script src=\"{{ asset('Front/js/jquery.nav.js')}}\"></script>
<script src=\"{{ asset('Front/js/canvas.js')}}\"></script>
<script src=\"{{ asset('Front/js/preloader_canvas.js')}}\"></script>
<script src=\"{{ asset('Front/js/main.js')}}\"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-73239902-1', 'auto');
    ga('send', 'pageview');
</script>
{% endblock %}
{% endblock  %}
", "form.html.twig", "C:\\wamp64\\www\\HandshakeWebSym\\app\\Resources\\views\\form.html.twig");
    }
}
