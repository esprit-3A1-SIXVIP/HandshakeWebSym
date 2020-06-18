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

/* @Evenement/Default/AjoutEvenement.html.twig */
class __TwigTemplate_56f3de391ed20be0209abff2c669733254c64dddac102a5b986eb64d6464bb52 extends \Twig\Template
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
            'container1' => [$this, 'block_container1'],
            'container3' => [$this, 'block_container3'],
            'container4' => [$this, 'block_container4'],
            'container5' => [$this, 'block_container5'],
            'container6' => [$this, 'block_container6'],
            'container7' => [$this, 'block_container7'],
            'container8' => [$this, 'block_container8'],
            'container9' => [$this, 'block_container9'],
            'container10' => [$this, 'block_container10'],
            'container11' => [$this, 'block_container11'],
            'container12' => [$this, 'block_container12'],
            'container2' => [$this, 'block_container2'],
            'footer' => [$this, 'block_footer'],
            'stylejavascrit' => [$this, 'block_stylejavascrit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Default/AjoutEvenement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Evenement/Default/AjoutEvenement.html.twig"));

        // line 1
        echo " 
<!doctype html>
<html>
";
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 5
        $this->displayBlock('header', $context, $blocks);
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 329
        echo "</html>

<script src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
<script>



var str = \$(\"#evenementbundle_evenement_dateEvenement\").val();



\$( \"#evenementbundle_evenement_dateEvenement\" ).keypress(function() {
  console.log( \"Handler for .keypress() called.\" );

   var str = \$(\"#evenementbundle_evenement_dateEvenement\").val();

console.log(str);
});




</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "<head>

        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Bootstrap Responsive Onepage HTML Template\">
        <meta name=\"author\" content=\"\">

        <title> ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <!--CSS-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link id=\"css-preset\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/presets/preset1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

        <!-- icons -->
        <link rel=\"icon\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-144-precomposed.html"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-114-precomposed.html"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-72-precomposed.html"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/ico/apple-touch-icon-57-precomposed.html"), "html", null, true);
        echo "\">

</head><!--/head-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
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

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<body>

";
        // line 45
        $this->displayBlock('nav', $context, $blocks);
        // line 104
        $this->displayBlock('container1', $context, $blocks);
        // line 150
        $this->displayBlock('container3', $context, $blocks);
        // line 154
        $this->displayBlock('container4', $context, $blocks);
        // line 157
        $this->displayBlock('container5', $context, $blocks);
        // line 160
        $this->displayBlock('container6', $context, $blocks);
        // line 163
        $this->displayBlock('container7', $context, $blocks);
        // line 241
        $this->displayBlock('container8', $context, $blocks);
        // line 244
        $this->displayBlock('container9', $context, $blocks);
        // line 247
        $this->displayBlock('container10', $context, $blocks);
        // line 250
        $this->displayBlock('container11', $context, $blocks);
        // line 253
        $this->displayBlock('container12', $context, $blocks);
        // line 256
        $this->displayBlock('container2', $context, $blocks);
        // line 258
        $this->displayBlock('footer', $context, $blocks);
        // line 305
        echo "<!--/#scripts-->
";
        // line 306
        $this->displayBlock('stylejavascrit', $context, $blocks);
        // line 327
        echo "</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 46
        echo "    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>
<header id=\"navigation\">
    <div class=\"navbar main-nav navbar-expand-lg\" role=\"banner\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><i class=\"fa fa-align-justify\"></i></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/index.html"), "html", null, true);
        echo "\">
                <h1><img class=\"img-fluid\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></h1>
            </a>
            <div class=\"top-bar\">
                <div class=\"dropdown language-dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\"><span class=\"change-text\">English </span><i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu language-change\">
                        <li><a href=\"#\">English </a></li>
                        <li><a href=\"#\">German </a></li>
                        <li><a href=\"#\">French </a></li>
                        <li><a href=\"#\">Spanish </a></li>
                    </ul>
                </div>
                <span class=\"contact-mail\"><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>
                        <span class=\"__cf_email__\" data-cfemail=\"adcec2c3d9ccced9edc5d8c0ccc3c4d9d483cec2c0\">[email&#160;protected]</span></a></span>
                <span><i class=\"fa fa-phone\"></i> (123) 456-7890</span>
                <div class=\"dropdown language-dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\"><span class=\"change-text\">Login </span><i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu language-change\">
                        <li><a href=\"login\">login </a></li>
                        <li><a href=\"register\">s'inscrire </a></li>

                    </ul>
                </div>
            </div>
            <nav id=\"navbarNav\" class=\"collapse navbar-collapse navbar-right justify-content-end\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#tr-home\"><span>Home</span></a></li>
                    <li><a href=\"#who-we-are\"><span>Who We Are</span></a></li>
                    <li><a href=\"#cause-list\"><span>Cause</span></a></li>
                    <li><a href=\"#recent-post\"><span>News & Blog</span></a></li>
                    <li><a href=\"#our-member\"><span>Volunteer</span></a></li>
                    <li><a href=\"#photo-gallery\"><span>Gallery</span></a></li>
                    <li><a href=\"#contact\"><span>Contact</span></a></li>
                </ul>
            </nav>
            <div class=\"search\">
                <form role=\"form\">
                    <i class=\"fa fa-search\"></i>
                    <div class=\"field-toggle\">
                        <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header><!--/#navigation-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_container1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container1"));

        // line 105
        echo "<div id=\"tr-home\">
    <div id=\"main-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#main-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#main-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#main-carousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#main-carousel\" data-slide-to=\"3\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"item carousel-item active\" style=\"background-image: url(";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/home/1.jpg"), "html", null, true);
        echo ")\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
            <div class=\"item carousel-item\" style=\"background-image: url(";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/home/2.jpg"), "html", null, true);
        echo ")\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash1\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
            <div class=\"item carousel-item\" style=\"background-image: url(";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/home/3.jpg"), "html", null, true);
        echo ")\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash2\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
            <div class=\"item carousel-item\" style=\"background-image: url(";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/images/home/4.jpg"), "html", null, true);
        echo ")\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash3\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
        </div>
    </div> <!--/#main-carousel-->
</div><!--/#carousel-wrapper-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_container3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container3"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container3"));

        // line 151
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 154
    public function block_container4($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container4"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container4"));

        // line 155
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_container5($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container5"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container5"));

        // line 158
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 160
    public function block_container6($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container6"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container6"));

        // line 161
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_container7($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container7"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container7"));

        // line 167
        echo "
<div id=\"contact\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2>Créer un évènement</h2>
        </div>
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                
                <div class=\"contact-form\">
                    <form id=\"contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"\">
                    ";
        // line 178
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                            <div class=\"form-group col-md-5\">
                              <!--  <input type=\"text\" name=\"descriptionEvenement\" class=\"form-control\" required=\"required\" placeholder=\"Nom de l'évènement\">
                                <input type=\"text\" name=\"lieuEvenement\" class=\"form-control\" placeholder=\"Lieu de l'évènement\">
                                <input type=\"text\" name=\"image\" class=\"form-control\" placeholder=\"Affiche de l'évènement\">-->
                                ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "title", [], "any", false, false, false, 184), 'label', ["label" => "Titre de l'évènement"]);
        echo "
                                ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "title", [], "any", false, false, false, 185), 'widget');
        echo "
                                ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 186), 'label', ["label" => "Lieu de l'évènement"]);
        echo "
                                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "lieuEvenement", [], "any", false, false, false, 187), 'widget');
        echo "
                                ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "prixEvenement", [], "any", false, false, false, 188), 'label', ["label" => "Prix de l'évènement"]);
        echo "
                                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "prixEvenement", [], "any", false, false, false, 189), 'widget');
        echo "
                                ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "image", [], "any", false, false, false, 190), 'label', ["label" => "Affiche de l'évènement"]);
        echo "
                                 ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "image", [], "any", false, false, false, 191), 'widget');
        echo "


                                ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "porteeEvenement", [], "any", false, false, false, 194), 'label', ["label" => "Description de l'évènement"]);
        echo "
                                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "porteeEvenement", [], "any", false, false, false, 195), 'widget');
        echo "



                              
                            </div>
                            <div class=\"form-group col-md-5\">
                                  <!--  
                                <input type=\"date\" name=\"dateEvenement\" class=\"form-control\" placeholder=\"Date de l'évènement\">
                                <input type=\"time\" name=\"heureEvenement\" class=\"form-control\" placeholder=\"Heure de l'évènement\">
                                <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"Code de l'évènement\">
                                -->
                                ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "start", [], "any", false, false, false, 207), 'label', ["label" => "Début de l'évènement"]);
        echo "
                                ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "start", [], "any", false, false, false, 208), 'widget');
        echo "
                                ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "end", [], "any", false, false, false, 209), 'label', ["label" => "Fin de lévènement"]);
        echo "
                                ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "end", [], "any", false, false, false, 210), 'widget');
        echo "
                                 ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "code", [], "any", false, false, false, 211), 'label', ["label" => "Code de l'évènement"]);
        echo "
                                 ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "code", [], "any", false, false, false, 212), 'widget');
        echo "
                               
                               

                       
                            </div>
                             <div class=\"form-group col\">
                               <!-- 
                              <textarea name=\"porteeEvenemente\" id=\"porteeEvenement\" required=\"required\" class=\"form-control\" rows=\"8\" placeholder=\"Description de l'évènement\"></textarea>
                                -->

                            </div>
                        </div>
                         
                        <div class=\"form-group \" >
                          <!-- 
                            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                             -->
                              ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "save", [], "any", false, false, false, 230), 'label', ["label" => "Creer évenement"]);
        echo "
                            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "save", [], "any", false, false, false, 231), 'widget');
        echo "
                        </div>
                        ";
        // line 233
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 241
    public function block_container8($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container8"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container8"));

        // line 242
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 244
    public function block_container9($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container9"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container9"));

        // line 245
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_container10($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container10"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container10"));

        // line 248
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 250
    public function block_container11($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container11"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container11"));

        // line 251
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 253
    public function block_container12($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container12"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container12"));

        // line 254
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
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

    // line 258
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 259
        echo "<footer id=\"footer\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <a href=\"index.html\"><img class=\"img-fluid\" src=\"";
        // line 263
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

    // line 306
    public function block_stylejavascrit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylejavascrit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylejavascrit"));

        // line 307
        echo "<script data-cfasync=\"false\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.parallax.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/js/preloader_canvas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
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
        return "@Evenement/Default/AjoutEvenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  918 => 316,  914 => 315,  910 => 314,  906 => 313,  902 => 312,  898 => 311,  894 => 310,  890 => 309,  886 => 308,  879 => 307,  869 => 306,  817 => 263,  811 => 259,  801 => 258,  783 => 256,  772 => 254,  762 => 253,  751 => 251,  741 => 250,  730 => 248,  720 => 247,  709 => 245,  699 => 244,  688 => 242,  678 => 241,  660 => 233,  655 => 231,  651 => 230,  630 => 212,  626 => 211,  622 => 210,  618 => 209,  614 => 208,  610 => 207,  595 => 195,  591 => 194,  585 => 191,  581 => 190,  577 => 189,  573 => 188,  569 => 187,  565 => 186,  561 => 185,  557 => 184,  548 => 178,  535 => 167,  525 => 163,  514 => 161,  504 => 160,  493 => 158,  483 => 157,  472 => 155,  462 => 154,  450 => 151,  440 => 150,  418 => 138,  407 => 130,  396 => 122,  385 => 114,  374 => 105,  364 => 104,  307 => 57,  303 => 56,  291 => 46,  281 => 45,  270 => 327,  268 => 306,  265 => 305,  263 => 258,  261 => 256,  259 => 253,  257 => 250,  255 => 247,  253 => 244,  251 => 241,  249 => 163,  247 => 160,  245 => 157,  243 => 154,  241 => 150,  239 => 104,  237 => 45,  233 => 43,  223 => 42,  204 => 13,  190 => 38,  186 => 37,  182 => 36,  178 => 35,  174 => 34,  167 => 30,  163 => 29,  153 => 22,  149 => 21,  145 => 20,  141 => 19,  137 => 18,  133 => 17,  129 => 16,  123 => 13,  114 => 6,  104 => 5,  72 => 329,  70 => 42,  68 => 5,  66 => 4,  61 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
<!doctype html>
<html>
{% form_theme form 'bootstrap_4_layout.html.twig' %}
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
<body>

{% block nav %}
    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>
<header id=\"navigation\">
    <div class=\"navbar main-nav navbar-expand-lg\" role=\"banner\">
        <div class=\"container\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"><i class=\"fa fa-align-justify\"></i></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ asset('Front/index.html')}}\">
                <h1><img class=\"img-fluid\" src=\"{{ asset('Front/images/logo.png')}}\" alt=\"logo\"></h1>
            </a>
            <div class=\"top-bar\">
                <div class=\"dropdown language-dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\"><span class=\"change-text\">English </span><i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu language-change\">
                        <li><a href=\"#\">English </a></li>
                        <li><a href=\"#\">German </a></li>
                        <li><a href=\"#\">French </a></li>
                        <li><a href=\"#\">Spanish </a></li>
                    </ul>
                </div>
                <span class=\"contact-mail\"><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>
                        <span class=\"__cf_email__\" data-cfemail=\"adcec2c3d9ccced9edc5d8c0ccc3c4d9d483cec2c0\">[email&#160;protected]</span></a></span>
                <span><i class=\"fa fa-phone\"></i> (123) 456-7890</span>
                <div class=\"dropdown language-dropdown\">
                    <a data-toggle=\"dropdown\" href=\"#\"><span class=\"change-text\">Login </span><i class=\"fa fa-angle-down\"></i></a>
                    <ul class=\"dropdown-menu language-change\">
                        <li><a href=\"login\">login </a></li>
                        <li><a href=\"register\">s'inscrire </a></li>

                    </ul>
                </div>
            </div>
            <nav id=\"navbarNav\" class=\"collapse navbar-collapse navbar-right justify-content-end\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#tr-home\"><span>Home</span></a></li>
                    <li><a href=\"#who-we-are\"><span>Who We Are</span></a></li>
                    <li><a href=\"#cause-list\"><span>Cause</span></a></li>
                    <li><a href=\"#recent-post\"><span>News & Blog</span></a></li>
                    <li><a href=\"#our-member\"><span>Volunteer</span></a></li>
                    <li><a href=\"#photo-gallery\"><span>Gallery</span></a></li>
                    <li><a href=\"#contact\"><span>Contact</span></a></li>
                </ul>
            </nav>
            <div class=\"search\">
                <form role=\"form\">
                    <i class=\"fa fa-search\"></i>
                    <div class=\"field-toggle\">
                        <input type=\"text\" class=\"search-form\" autocomplete=\"off\" placeholder=\"Search\">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header><!--/#navigation-->
{% endblock %}
{% block container1 %}
<div id=\"tr-home\">
    <div id=\"main-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#main-carousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#main-carousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#main-carousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#main-carousel\" data-slide-to=\"3\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"item carousel-item active\" style=\"background-image: url({{ asset('Front/images/home/1.jpg')}})\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
            <div class=\"item carousel-item\" style=\"background-image: url({{ asset('Front/images/home/2.jpg')}})\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash1\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
            <div class=\"item carousel-item\" style=\"background-image: url({{ asset('Front/images/home/3.jpg')}})\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash2\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
            <div class=\"item carousel-item\" style=\"background-image: url({{ asset('Front/images/home/4.jpg')}})\">
                <div class=\"carousel-caption container\">
                    <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                    <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                    <a href=\"#who-we-are\" id=\"tohash3\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                    <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                </div>
            </div>
        </div>
    </div> <!--/#main-carousel-->
</div><!--/#carousel-wrapper-->
{% endblock %}
{% block container3 %}


{% endblock %}
{% block container4 %}

{% endblock %}
{% block container5 %}

{% endblock %}
{% block container6 %}

{% endblock %}
{% block container7 %}
{# form_start(form) #}
{# form_widget(form) #}
{# form_end(form) #}

<div id=\"contact\">
    <div class=\"container\">
        <div class=\"section-title\">
            <h2>Créer un évènement</h2>
        </div>
        <div class=\"row\">
            <div class=\"col-md-10 offset-md-1\">
                
                <div class=\"contact-form\">
                    <form id=\"contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"\">
                    {{ form_start(form) }}
                        <div class=\"row\">
                            <div class=\"form-group col-md-5\">
                              <!--  <input type=\"text\" name=\"descriptionEvenement\" class=\"form-control\" required=\"required\" placeholder=\"Nom de l'évènement\">
                                <input type=\"text\" name=\"lieuEvenement\" class=\"form-control\" placeholder=\"Lieu de l'évènement\">
                                <input type=\"text\" name=\"image\" class=\"form-control\" placeholder=\"Affiche de l'évènement\">-->
                                {{ form_label(form.title,'Titre de l\\'évènement')}}
                                {{ form_widget(form.title)}}
                                {{ form_label(form.lieuEvenement,'Lieu de l\\'évènement') }}
                                {{ form_widget(form.lieuEvenement) }}
                                {{ form_label(form.prixEvenement,'Prix de l\\'évènement') }}
                                {{form_widget(form.prixEvenement) }}
                                {{  form_label(form.image,'Affiche de l\\'évènement') }}
                                 {{  form_widget(form.image) }}


                                {{ form_label(form.porteeEvenement,'Description de l\\'évènement') }}
                                {{ form_widget(form.porteeEvenement) }}



                              
                            </div>
                            <div class=\"form-group col-md-5\">
                                  <!--  
                                <input type=\"date\" name=\"dateEvenement\" class=\"form-control\" placeholder=\"Date de l'évènement\">
                                <input type=\"time\" name=\"heureEvenement\" class=\"form-control\" placeholder=\"Heure de l'évènement\">
                                <input type=\"text\" name=\"code\" class=\"form-control\" placeholder=\"Code de l'évènement\">
                                -->
                                {{ form_label(form.start,'Début de l\\'évènement')}}
                                {{ form_widget(form.start)}}
                                {{ form_label(form.end, 'Fin de l\\évènement')}}
                                {{ form_widget(form.end)}}
                                 {{ form_label(form.code,'Code de l\\'évènement') }}
                                 {{ form_widget(form.code) }}
                               
                               

                       
                            </div>
                             <div class=\"form-group col\">
                               <!-- 
                              <textarea name=\"porteeEvenemente\" id=\"porteeEvenement\" required=\"required\" class=\"form-control\" rows=\"8\" placeholder=\"Description de l'évènement\"></textarea>
                                -->

                            </div>
                        </div>
                         
                        <div class=\"form-group \" >
                          <!-- 
                            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
                             -->
                              {{ form_label(form.save, 'Creer évenement') }}
                            {{ form_widget(form.save) }}
                        </div>
                        {{ form_end(form) }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
{% block container8 %}

{% endblock %}
{% block container9 %}

{% endblock %}
{% block container10 %}

{% endblock %}
{% block container11 %}

{% endblock %}
{% block container12 %}

{% endblock %}
{% block container2 %}
{% endblock  %}
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
</body>
{% endblock %}
</html>

<script src=\"https://code.jquery.com/jquery-3.4.1.js\"></script>
<script>



var str = \$(\"#evenementbundle_evenement_dateEvenement\").val();



\$( \"#evenementbundle_evenement_dateEvenement\" ).keypress(function() {
  console.log( \"Handler for .keypress() called.\" );

   var str = \$(\"#evenementbundle_evenement_dateEvenement\").val();

console.log(str);
});




</script>", "@Evenement/Default/AjoutEvenement.html.twig", "C:\\wamp64\\www\\HandshakeWebSym\\src\\EvenementBundle\\Resources\\views\\Default\\AjoutEvenement.html.twig");
    }
}
