<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @User/Default/index.html.twig */
class __TwigTemplate_df58d0cb82e3d6c0d2661cb0080622e49b88fbe3b95df6f66c2135e72972f449 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'nav' => [$this, 'block_nav'],
            'container2' => [$this, 'block_container2'],
            'footer' => [$this, 'block_footer'],
            'javascrit' => [$this, 'block_javascrit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 1622
        echo "</html>

";
    }

    // line 1
    public function block_header($context, array $blocks = [])
    {
        // line 2
        echo "<!doctype html>
<html>

    <head>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/bootstrap.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link id=\"css-preset\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/presets/preset1.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!--Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->

        <!-- icons -->
        <link rel=\"icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/ico/favicon.ico"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/ico/apple-touch-icon-144-precomposed.html"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/ico/apple-touch-icon-114-precomposed.html"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/ico/apple-touch-icon-72-precomposed.html"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/ico/apple-touch-icon-57-precomposed.html"), "html", null, true);
        echo "\">

    </head><!--/head-->
";
    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        echo "Humanity | Bootstrap Responsive Onepage HTML Template ";
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        // line 42
        echo "    <body>
    <!-- Page Loader -->
    <div class=\"preloader\">
        <div id=\"loaderImage\"></div>
    </div>
    ";
        // line 47
        $this->displayBlock('nav', $context, $blocks);
        // line 95
        echo "    ";
        $this->displayBlock('container2', $context, $blocks);
        // line 1551
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 1579
        echo "    <!--/Preset Style Chooser-->
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

    <!--/#scripts-->
    ";
        // line 1599
        $this->displayBlock('javascrit', $context, $blocks);
        // line 1620
        echo "    </body>
";
    }

    // line 47
    public function block_nav($context, array $blocks = [])
    {
        // line 48
        echo "        <header id=\"navigation\">
            <div class=\"navbar main-nav navbar-expand-lg\" role=\"banner\">
                <div class=\"container\">
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"><i class=\"fa fa-align-justify\"></i></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/index.html"), "html", null, true);
        echo "\">
                        <h1><img class=\"img-fluid\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/logo.png"), "html", null, true);
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
    }

    // line 95
    public function block_container2($context, array $blocks = [])
    {
        // line 96
        echo "        <div id=\"tr-home\">
            <div id=\"main-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#main-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#main-carousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#main-carousel\" data-slide-to=\"2\"></li>
                    <li data-target=\"#main-carousel\" data-slide-to=\"3\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"item carousel-item active\" style=\"background-image: url(";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/home/1.jpg"), "html", null, true);
        echo ")\">
                        <div class=\"carousel-caption container\">
                            <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                            <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                            <a href=\"#who-we-are\" id=\"tohash\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                            <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                        </div>
                    </div>
                    <div class=\"item carousel-item\" style=\"background-image: url(";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/home/2.jpg"), "html", null, true);
        echo ")\">
                        <div class=\"carousel-caption container\">
                            <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                            <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                            <a href=\"#who-we-are\" id=\"tohash1\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                            <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                        </div>
                    </div>
                    <div class=\"item carousel-item\" style=\"background-image: url(";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/home/3.jpg"), "html", null, true);
        echo ")\">
                        <div class=\"carousel-caption container\">
                            <h1 class=\"animated rollIn\">Empower Children Dream</h1>
                            <p class=\"animated rollIn\">Vestibulum vitae urna quis eros convallis hendrerit. Sed magna magna, congue vel dapibus a, sagittis in enim.</p>
                            <a href=\"#who-we-are\" id=\"tohash2\" class=\"animated rollIn btn btn-primary\">Get Start</a>
                            <a href=\"https://www.youtube.com/watch?v=oAVtOmhQ5D4\" data-gallery=\"prettyPhoto\" class=\"watch-video\"><i class=\"fa fa-play\"></i> Watch Video</a>
                        </div>
                    </div>
                    <div class=\"item carousel-item\" style=\"background-image: url(";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/home/4.jpg"), "html", null, true);
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

        <div id=\"who-we-are\">
            <div class=\"container\">
                <div class=\"call-to-action\">
                    <div class=\"row\">
                        <div class=\"col-md-9\">
                            <h1>Join our Campaign!</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet donate so far: <span>\$30,00,000</span></p>
                        </div>
                        <div class=\"col-md-3\">
                            <a href=\"#\" class=\"pull-right btn btn-primary\">Donate Now</a>
                        </div>
                    </div>
                </div><!--/.call to action-->
                <div class=\"text-center who-we-are padding-bottom padding-top\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <img class=\"img-fluid\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/about/1.png"), "html", null, true);
        echo "\" alt=\"\" />
                            <h2>Our World</h2>
                            <p class=\"lead\">We are in 32 Countries</p>
                        </div>
                        <div class=\"col-md-4\">
                            <img class=\"img-fluid\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/about/2.png"), "html", null, true);
        echo "\" alt=\"\" />
                            <h2>Our Promise</h2>
                            <p class=\"lead\">59% Of all \$ goes to Programs</p>
                        </div>
                        <div class=\"col-md-4\">
                            <img class=\"img-fluid\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/about/3.png}"), "html", null, true);
        echo "\" alt=\"\" />
                            <h2>Our Reach</h2>
                            <p class=\"lead\">1198 Million Member</p>
                        </div>
                    </div>
                </div>
                <div class=\"our-details-tab padding-bottom\">
                    <div class=\"row\">
                        <div class=\"col-lg-6\">
                            <div id=\"about-carousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                                <div class=\"carousel-inner\">
                                    <div class=\"item carousel-item active\">
                                        <img class=\"img-fluid\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/about/p1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"item carousel-item\">
                                        <img class=\"img-fluid\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/about/p2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"item carousel-item\">
                                        <img class=\"img-fluid\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/about/p3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                </div>
                            </div><!--/#about-carousel-->
                        </div>
                        <div class=\"col-lg-6 tab-section\">
                            <!-- Nav tabs -->
                            <ul class=\"nav nav-tabs nav-justified\" role=\"tablist\">
                                <li><a class=\"active\" href=\"#story\" role=\"tab\" data-toggle=\"tab\">Our Story</a></li>
                                <li><a href=\"#mission\" role=\"tab\" data-toggle=\"tab\">Mission</a></li>
                                <li><a href=\"#activity\" role=\"tab\" data-toggle=\"tab\">Our Activity</a></li>
                                <li><a href=\"#faq\" role=\"tab\" data-toggle=\"tab\">FAQ</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class=\"tab-content\">
                                <div class=\"tab-pane fade in active show\" id=\"story\">
                                    <h4>Give the Life-changing Gift of Education in Citytown.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <p>I throw myself down among the tall grass by the trickling stream,</p>
                                </div>
                                <div class=\"tab-pane fade \" id=\"mission\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class=\"tab-pane fade \" id=\"activity\">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth,</p>
                                </div>
                                <div class=\"tab-pane fade \" id=\"faq\">
                                    <h4>Frequently asked questions -</h4>
                                    <ul>
                                        <li>Q: Lorem Ipsum is simply dummy text ?</li>
                                        <li>Ans: Lorem Ipsum is simply dummy text of the printing</li>
                                        <li>Q: When an unknown printer took ?</li>
                                        <li>Ans: Lorem Ipsum is simply dummy text of the printing and typesetting.</li>
                                        <li>Q: I lie close to the earth ?</li>
                                        <li>Ans: Lorem Ipsum is simply dummy text. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#who-we-are-->

        <div id=\"donations\" class=\"parallax-section\">
            <div class=\"padding-top padding-bottom container\">
                <div class=\"row\">
                    <div class=\"col-lg-5\">
                        <div class=\"donations\">
                            <h1>Donations</h1>
                            <p class=\"lead\">Building Stronger Kids with Better Food</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href=\"#\" class=\"btn btn-primary\">Donate/pay in your money</a>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"text-center overall-process\">
                            <div class=\"cycle-image\">
                                <img class=\"img-fluid\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cycle.png"), "html", null, true);
        echo "\" alt=\"\" />
                            </div>
                            <img class=\"img-fluid\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cycle-line.png"), "html", null, true);
        echo "\" alt=\"\" />
                            <div class=\"round-progress\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar progress-bar-striped active six-sec-ease-in-out\" role=\"progressbar\"  data-transition=\"26\"></div>
                                </div>
                            </div>
                            <div class=\"progress-info\">
                                <p>Overall Process</p>
                                <span class=\"lead\"><i class=\"fa fa-thumbs-o-up\"></i> Raised \$ 9800</span>
                                <span class=\"lead\"><i class=\"fa fa-flag-o\"></i> Goal \$ 98,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#donations-->

        <div id=\"cause-list\" class=\"padding-bottom\">
            <div class=\"container\">
                <div class=\"section-title\">
                    <h1>Cause List</h1>
                </div>
                <div id=\"cause-list-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    `\t\t\t\t<ol class=\"carousel-indicators\">
                        <li data-target=\"#cause-list-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#cause-list-carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#cause-list-carousel\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-one\">
                                        <img class=\"img-fluid\" src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Please Help Refugees</h2>
                                        <p><span>85%</span> Donated / <span>\$7,291</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-two\">
                                        <img class=\"img-fluid\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Children Hunger</h2>
                                        <p><span>25%</span> Donated / <span>\$7,891</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-three\">
                                        <img class=\"img-fluid\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Domestic violence</h2>
                                        <p><span>56%</span> Donated / <span>\$6,000</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-one\">
                                        <img class=\"img-fluid\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Please Help Refugees</h2>
                                        <p><span>85%</span> Donated / <span>\$7,291</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-two\">
                                        <img class=\"img-fluid\" src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Children Hunger</h2>
                                        <p><span>25%</span> Donated / <span>\$7,891</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-three\">
                                        <img class=\"img-fluid\" src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Domestic violence</h2>
                                        <p><span>56%</span> Donated / <span>\$6,000</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-one\">
                                        <img class=\"img-fluid\" src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Please Help Refugees</h2>
                                        <p><span>85%</span> Donated / <span>\$7,291</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-two\">
                                        <img class=\"img-fluid\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Children Hunger</h2>
                                        <p><span>25%</span> Donated / <span>\$7,891</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"list-image border-three\">
                                        <img class=\"img-fluid\" src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/cause-list/3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                    </div>
                                    <div class=\"list-info\">
                                        <h2>Domestic violence</h2>
                                        <p><span>56%</span> Donated / <span>\$6,000</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href=\"#\" class=\"btn btn-primary\">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#cause-list-->

        <div id=\"video-section\" class=\"parallax-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h1>How Can You Help!</h1>
                        <p class=\"lead\">Help for cause</p>
                        <!-- Nav tabs -->
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li><a href=\"#video\" class=\"btn btn-primary active\" role=\"tab\" data-toggle=\"tab\">Watch Video</a></li>
                            <li><a href=\"#mobilization\" class=\"btn btn-primary\" role=\"tab\" data-toggle=\"tab\">Mobilization</a></li>
                            <li><a href=\"#support\" class=\"btn btn-primary\" role=\"tab\" data-toggle=\"tab\">Support</a></li>
                        </ul>
                        <p>Aenean nonummy hendrerit mris. Phasellus porta. Fusce suscipit varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p>
                    </div>
                    <div class=\"col-md-6\">
                        <!-- Tab panes -->
                        <div class=\"tab-content\">
                            <div class=\"tab-pane fade in active show\" id=\"video\">
                                <div class=\"embed-responsive embed-responsive-4by3\">
                                    <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/29805267\"></iframe>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"mobilization\">
                                <img class=\"img-fluid\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/mobilization.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                            </div>
                            <div class=\"tab-pane fade\" id=\"support\">
                                <h1>How we support for refugees</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                                <ul>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Phasellus porta</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Fusce suscipit varius.</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Cum sociis natoque penatibus</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Nascetur ridiculus mus.</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Typi non habent claritatem</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Mirum est notare quam</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-angle-right\"></i> Eodem modo typi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#video-section-->

        <div id=\"recent-post\" class=\"padding-bottom padding-top-two\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-lg-3\">
                        <div class=\"section-title event-title\">
                            <h1>Events</h1>
                        </div>
                        <div id=\"event-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#event-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#event-carousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#event-carousel\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item carousel-item active\">
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Aug <span>01</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>Empowerment & Leadership</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>25</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>Our Children Matter</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>21</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>A Standard Post Format &  Solve it</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>17</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">12:00 am - 5:00 pm</p>
                                            <p>Care for Children</p>
                                        </div>
                                    </a>
                                </div><!--/.item-->
                                <div class=\"item carousel-item\">
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Aug <span>01</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>Empowerment & Leadership</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>27</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>Our Children Matter</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>24</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>A Standard Post Format &  Solve it</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>13</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">12:00 am - 5:00 pm</p>
                                            <p>Care for Children</p>
                                        </div>
                                    </a>
                                </div><!--/.item-->
                                <div class=\"item carousel-item\">
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Aug <span>16</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>Empowerment & Leadership</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>25</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>Our Children Matter</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>15</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">10:00 am - 12:00 am</p>
                                            <p>A Standard Post Format &  Solve it</p>
                                        </div>
                                    </a>
                                    <a href=\"#\" class=\"single-event\">
                                        <div class=\"pull-left event-date\">
                                            <p>Jul <span>17</span></p>
                                        </div>
                                        <div class=\"event-info\">
                                            <p class=\"event-time\">12:00 am - 5:00 pm</p>
                                            <p class=\"event-details\">Care for Children</p>
                                        </div>
                                    </a>
                                </div><!--/.item-->
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-lg-9\">
                        <div class=\"section-title\">
                            <h1>Most Recent Post</h1>
                        </div>
                        <div id=\"recent-post-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#recent-post-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#recent-post-carousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#recent-post-carousel\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item carousel-item active\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item-->
                                <div class=\"item carousel-item\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item-->
                                <div class=\"item carousel-item\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"single-post\">
                                                <div class=\"pull-left post-image\">
                                                    <a href=\"#\">
                                                        <img class=\"img-fluid\" src=\"";
        // line 766
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/recent-post/post2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                        <i class=\"fa fa-angle-right\"></i>
                                                    </a>
                                                </div>
                                                <div class=\"pull-right post-details\">
                                                    <p class=\"post-date\">03 Dec 2014</p>
                                                    <a href=\"#\"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#recent-post-->

        <div id=\"our-member\" class=\"padding-top-two padding-bottom-two\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8\">
                        <div class=\"section-title\">
                            <h1>Our Member</h1>
                        </div>
                        <div id=\"member-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#member-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#member-carousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#member-carousel\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item  active\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 806
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 874
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 908
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member7.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item -->
                                <div class=\"item carousel-item\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 980
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 997
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1014
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member4.jpg
"), "html", null, true);
        // line 1015
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1032
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1049
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member7.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1066
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item -->
                                <div class=\"item carousel-item\">
                                    <div class=\"row\">
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member7.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6 col-md-4 col-lg-3\">
                                            <div class=\"single-member\">
                                                <div class=\"member-image\">
                                                    <img class=\"img-fluid\" src=\"";
        // line 1206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/member/member1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                                    <div class=\"member-info\">
                                                        <p class=\"lead\">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item -->
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4\">
                        <div class=\"become-volunteer\">
                            <img class=\"img-fluid\" src=\"";
        // line 1227
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/logo-icon.png"), "html", null, true);
        echo "\" alt=\"\" />
                            <h1><span>Become a</span>Volunteer</h1>
                            <p>This last point is important because there are some who advocate for democracy only when they are out of power.</p>
                            <a href=\"#\" class=\"btn btn-default\">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#our-member-->

        <div id=\"photo-gallery\" class=\"padding-bottom-two\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/4.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/5.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/6.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1315
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/7.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/8.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/9.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/10.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/11.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1365
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-md-3 col-lg-2\">
                        <div class=\"single-photo\">
                            <div class=\"gallery-content\">
                                <img class=\"img-fluid\" src=\"";
        // line 1375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/12.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                                <div class=\"photo-info\">
                                    <a href=\"";
        // line 1377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/gallery/full/1.jpg"), "html", null, true);
        echo "\" data-gallery=\"prettyPhoto\"><i class=\"fa fa-camera\"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#Photo-Gallery-->

        <div id=\"our-partner\" class=\"padding-bottom\">
            <div class=\"container\">
                <div class=\"section-title\">
                    <h1>Our Member</h1>
                </div>
                <div id=\"partner-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#partner-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#partner-carousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#partner-carousel\" data-slide-to=\"2\"></li>
                    </ol>
                    <div class=\"carousel-inner\">
                        <div class=\"item carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/4.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/5.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/6.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\"src=\"";
        // line 1425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/4.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/5.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/6.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"item carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1456
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/4.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"col-sm-6 col-md-2\">
                                    <img class=\"img-fluid\" src=\"";
        // line 1462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/5.png"), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#our-partner-->

        <div id=\"word-for-humanity\" class=\"padding-top parallax-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-8 offset-md-2 text-center\">
                        <h1>Some Words For Humanity</h1>
                        <div id=\"humanity-carousel\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"item carousel-item active\">
                                    <img class=\"img-fluid img-circle\" src=\"";
        // line 1479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/partner1.png"), "html", null, true);
        echo "\" alt=\"\" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <p class=\"word-author\">Catherine Grace - America</p>
                                </div>
                                <div class=\"item carousel-item\">
                                    <img class=\"img-fluid img-circle\" src=\"";
        // line 1484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/partner2.png"), "html", null, true);
        echo "\" alt=\"\" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <p class=\"word-author\">Catherine Grace - America</p>
                                </div>
                                <div class=\"item carousel-item\">
                                    <img class=\"img-fluid img-circle\" src=\"";
        // line 1489
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/partner/partner3.png"), "html", null, true);
        echo "\" alt=\"\" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <p class=\"word-author\">Catherine Grace - America</p>
                                </div>
                            </div>
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#humanity-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#humanity-carousel\" data-slide-to=\"1\"></li>
                                <li data-target=\"#humanity-carousel\" data-slide-to=\"2\"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#word-for-humanity-->

        <div id=\"contact\">
            <div class=\"container\">
                <div class=\"section-title\">
                    <h1>Contact Us</h1>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-10 offset-md-1\">
                        <div class=\"row contact-details\">
                            <div class=\"col-md-4\">
                                <span><i class=\"fa fa-map-marker\"></i></span>
                                <p class=\"contact-info\">1234 Street Name, City Name</p>
                            </div>
                            <div class=\"col-md-4\">
                                <span><i class=\"fa fa-phone\"></i></span>
                                <p class=\"contact-info\">+(123) 456-7890 </p>
                            </div>
                            <div class=\"col-md-4\">
                                <span><i class=\"fa fa-envelope\"></i></span>
                                <a class=\"contact-info\" href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"294a46475d484a5d69415c444847405d50074a4644\">[email&#160;protected]</span></a>
                            </div>
                        </div>
                        <div class=\"contact-form\">
                            <form id=\"contact-form\" class=\"contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"row\">
                                    <div class=\"form-group col-md-6\">
                                        <input type=\"text\" name=\"name\" class=\"form-control\" required=\"required\" placeholder=\"Name\">
                                        <input type=\"text\" name=\"company\" class=\"form-control\" placeholder=\"Company\">
                                    </div>
                                    <div class=\"form-group col-md-6\">
                                        <input type=\"email\" name=\"email\" class=\"form-control\" required=\"required\" placeholder=\"Email Address\">
                                        <input type=\"url\" name=\"website\" class=\"form-control\"  placeholder=\"Website\">
                                    </div>
                                    <div class=\"form-group col\">
                                        <textarea name=\"message\" id=\"message\" required=\"required\" class=\"form-control\" rows=\"8\" placeholder=\"Message\"></textarea>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send Your Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#Contact-->
    ";
    }

    // line 1551
    public function block_footer($context, array $blocks = [])
    {
        // line 1552
        echo "        <footer id=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <a href=\"index.html\"><img class=\"img-fluid\" src=\"";
        // line 1556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/images/logo.png"), "html", null, true);
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
    ";
    }

    // line 1599
    public function block_javascrit($context, array $blocks = [])
    {
        // line 1600
        echo "        <script data-cfasync=\"false\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1601
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1602
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1603
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.parallax.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1606
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/jquery.nav.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1607
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/canvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1608
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/preloader_canvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 1609
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Front/js/main.js"), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "@User/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  2101 => 1609,  2097 => 1608,  2093 => 1607,  2089 => 1606,  2085 => 1605,  2081 => 1604,  2077 => 1603,  2073 => 1602,  2069 => 1601,  2062 => 1600,  2059 => 1599,  2032 => 1556,  2026 => 1552,  2023 => 1551,  1957 => 1489,  1949 => 1484,  1941 => 1479,  1921 => 1462,  1915 => 1459,  1909 => 1456,  1903 => 1453,  1897 => 1450,  1891 => 1447,  1881 => 1440,  1875 => 1437,  1869 => 1434,  1863 => 1431,  1857 => 1428,  1851 => 1425,  1841 => 1418,  1835 => 1415,  1829 => 1412,  1823 => 1409,  1817 => 1406,  1811 => 1403,  1782 => 1377,  1777 => 1375,  1764 => 1365,  1759 => 1363,  1746 => 1353,  1741 => 1351,  1728 => 1341,  1723 => 1339,  1710 => 1329,  1705 => 1327,  1692 => 1317,  1687 => 1315,  1674 => 1305,  1669 => 1303,  1656 => 1293,  1651 => 1291,  1638 => 1281,  1633 => 1279,  1620 => 1269,  1615 => 1267,  1602 => 1257,  1597 => 1255,  1584 => 1245,  1579 => 1243,  1560 => 1227,  1536 => 1206,  1516 => 1189,  1496 => 1172,  1476 => 1155,  1456 => 1138,  1436 => 1121,  1416 => 1104,  1396 => 1087,  1372 => 1066,  1352 => 1049,  1332 => 1032,  1313 => 1015,  1310 => 1014,  1290 => 997,  1270 => 980,  1250 => 963,  1230 => 946,  1206 => 925,  1186 => 908,  1166 => 891,  1146 => 874,  1126 => 857,  1106 => 840,  1086 => 823,  1066 => 806,  1023 => 766,  1004 => 750,  985 => 734,  966 => 718,  943 => 698,  924 => 682,  905 => 666,  886 => 650,  863 => 630,  844 => 614,  825 => 598,  806 => 582,  634 => 413,  592 => 374,  578 => 363,  564 => 352,  546 => 337,  532 => 326,  518 => 315,  500 => 300,  486 => 289,  472 => 278,  436 => 245,  431 => 243,  370 => 185,  364 => 182,  358 => 179,  343 => 167,  335 => 162,  327 => 157,  296 => 129,  285 => 121,  274 => 113,  263 => 105,  252 => 96,  249 => 95,  205 => 55,  201 => 54,  193 => 48,  190 => 47,  185 => 1620,  183 => 1599,  161 => 1579,  158 => 1551,  155 => 95,  153 => 47,  146 => 42,  143 => 41,  137 => 12,  129 => 37,  125 => 36,  121 => 35,  117 => 34,  113 => 33,  106 => 29,  102 => 28,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  62 => 12,  50 => 2,  47 => 1,  41 => 1622,  39 => 41,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@User/Default/index.html.twig", "C:\\xampp\\htdocs\\HandshakeWebSym\\src\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
