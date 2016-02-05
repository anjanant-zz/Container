<?php

/* ContainergenerateBundle:Default:gestionclient.html.twig */
class __TwigTemplate_c9db3d2bad89cdbf7670237d0d575f9e70834a054e65085caad692ffc42fe6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"Creative - Bootstrap 3 Responsive Admin Template\">
        <meta name=\"author\" content=\"GeeksLabs\">
        <meta name=\"keyword\" content=\"Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal\">
        <link rel=\"shortcut icon\" href=\"img/favicon.png\">

        <title>Gestion de TC </title>

        <!-- Bootstrap CSS --> 
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/orman.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/menu.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/pascal.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/default.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/jquery-ui-1.8.24.custom.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/nivo-slider.css"), "html", null, true);
        echo "\"/>
        
        <!-- bootstrap theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/bootstrap-theme.css"), "html", null, true);
        echo "\" />

        <!--external css-->
        <!-- font icon -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/elegant-icons-style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/sb-admin-2.css"), "html", null, true);
        echo "\" />

        <!-- Custom styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/css/style-responsive.css"), "html", null, true);
        echo "\" />
        <!-- javascripts -->
        <!-- javascripts -->
        <script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>


        <!-- bootstrap -->
        <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- nice scroll -->
        <script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>

        <!-- charts scripts -->

        <script type=\"text/javascript\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/jquery-knob/js/jquery.knob.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/owl.carousel.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery full calendar -->
        <script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/fullcalendar/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\"></script>

        <!--script for this page only-->
        <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/calendar-custom.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script>
        <!-- custom select -->
        <script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.customSelect.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/assets/chart-master/Chart.js"), "html", null, true);
        echo "\"></script>
        <!--custome script for all page-->
        <script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/scripts.js"), "html", null, true);
        echo "\"></script>

        <!-- custom script for this page-->
        <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/sparkline-chart.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/easy-pie-chart.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/xcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/gdp-data.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/morris.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/sparklines.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/charts.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>\t


        <script>

            //knob
            \$(function() {
                \$(\".knob\").knob({
                    'draw': function() {
                        \$(this.i).val(this.cv + '%')
                    }
                })
            });

            //carousel
            \$(document).ready(function() {
                \$(\"#owl-slider\").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true

                });
            });

            //custom select box

            \$(function() {
                \$('select.styled').customSelect();
            });

            /* ---------- Map ---------- */
            \$(function() {
                \$('#map').vectorMap({
                    map: 'world_mill_en',
                    series: {
                        regions: [{
                                values: gdpData,
                                scale: ['#000', '#000'],
                                normalizeFunction: 'polynomial'
                            }]
                    },
                    backgroundColor: '#eef3f7',
                    onLabelShow: function(e, el, code) {
                        el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                    }
                });
            });



        </script>




        <script>

            //knob
            \$(\".knob\").knob();

        </script>



        <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
        <!--[if lt IE 9]>
          <script src=\"js/html5shiv.js\"></script>
          <script src=\"js/respond.min.js\"></script>
          <script src=\"js/lte-ie7.js\"></script>
        <![endif]-->
    </head>

    <body>
        <!-- container section start -->
        <section id=\"container\" class=\"\">
            <!--header start-->
            <header class=\"header dark-bg\">
                <div class=\"toggle-nav\">
                    <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"><i class=\"icon_menu\"></i></div>
                </div>

                <!--logo start-->
                <a href=\"http://localhost/gestiondeTC/web/app_dev.php\" class=\"logo\"> GestionTC <span class=\"lite\">Admin</span></a>
                <!--logo end-->

                <div class=\"top-nav notification-row\">                
                    <!-- notificatoin dropdown start-->
                    <ul class=\"nav pull-right top-menu\">



                        <!-- user login dropdown start-->
                        <li class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                                <span class=\"profile-ava\">
                                    <img alt=\"\" src=\"img/avatar1_small.jpg\">
                                </span>
                                <span class=\"username\">Test</span>
                                <b class=\"caret\"></b>
                            </a>
                            <ul class=\"dropdown-menu extended logout\">
                                <div class=\"log-arrow-up\"></div>
                                <li class=\"eborder-top\">
                                    <a href=\"http://localhost/gestiondeTC/web/app_dev.php/profile\"><i class=\"icon_profile\"></i> Mon Profile</a>
                                </li>
                                <li>
                                    <a href=\"http://localhost/gestiondeTC/web/app_dev.php/profile/edit\"><i class=\"icon_mail_alt\"></i>Editter Profil</a>
                                </li>
                                <li>
                                    <a href=\"http://localhost/gestiondeTC/web/app_dev.php/logout\"><i class=\"icon_key_alt\"></i>Ajout Utilisateur</a>
                                </li>
                                <li>
                                    <a href=\"http://localhost/gestiondeTC/web/app_dev.php/register\"><i class=\"icon_key_alt\"></i> Log Out</a>
                                </li>
                                <li>
                                    <a href=\"documentation.html\"><i class=\"icon_key_alt\"></i> Documentation</a>
                                </li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->
                    </ul>
                    <!-- notificatoin dropdown end-->
                </div>
            </header>      
            <!--header end-->


            <!--sidebar start-->
            <aside>
                <div id=\"sidebar\"  class=\"nav-collapse \">
                    <!-- sidebar menu start-->
                    <ul class=\"sidebar-menu\">                
                        <li class=\"active\">
                            <a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php\">
                                <i class=\"icon_house_alt\"></i>
                                <span>Acceuil</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span>Transporteur</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/chauffeur\">Chauffeur</a></li>                          
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/categorietransporteur\">categorie transporteur</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/vehicule\">Vehicule</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/portecontainer\">Remorque</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/transporteur\">Transporteur</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/transporterrececoir\">Recep transporteur</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/transporterretirer\">Decais transporteur</a></li>

                            </ul
                        </li>       
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span>Contenneurs</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etat\">Etat TC</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/nature\">Nature</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/categorie\">Type TC</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/container\">containers</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php\">
                                <i class=\"icon_genius\"></i>
                                <span>Acceui</span>
                            </a>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_desktop\"></i>
                                <span>Verification</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">

                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/personnel\">Verificateur</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/nettoyage\">Nettoyage TC</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/descriptiondesavaries\">Remarque/avaries</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/verifier\">Resultats verification</a></li>

                            </ul>
                        </li>

                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_genius\"></i>
                                <span>Navire</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/voyage\">Voyage</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/navire\">Navire</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/importer\">Importer</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/exporter\">Exporter</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/transitaire\">Transitaire</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/recevoir\">Validation transitaire</a></li>



                            </ul>  
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_piechart\"></i>
                                <span>Stockage</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span> 
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/utilisateur\">Utilisateur</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/agence\">Agence</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/depot\">Depot</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/company\">Company</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/informer\">Informations company</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/sortir\">Sortir</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/entrer\">Entrer</a></li>
                            </ul>    
                        </li>  
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span>Etats</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">

                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsannuelle\">Etat annuelle</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmensuelle\">Etat mensuelle</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmsc\">Etat M-MSC</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmensuellemol\">Etat M-MOL</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmensuelle\">Etat M-divers</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmensuellemsc\">Etat J-MSC</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmol\">Etat J-MOL</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/etatsmensuelle\">Etat J-Divers</a></li>
                            </ul>
                        </li>
                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_document_alt\"></i>
                                <span>EIR</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/EIRr\">EIR(R)</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/EIRl\">EIR(L)</a></li>


                            </ul>
                        </li>

                        <li class=\"sub-menu\">
                            <a href=\"javascript:;\" class=\"\">
                                <i class=\"icon_documents_alt\"></i>
                                <span>Pages</span>
                                <span class=\"menu-arrow arrow_carrot-right\"></span>
                            </a>
                            <ul class=\"sub\">                          
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/profile\">Profile</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/login\"><span>Login Page</span></a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/blank\">Blank Page</a></li>
                                <li><a class=\"\" href=\"http://localhost/gestiondeTC/web/app_dev.php/chiffre\">404 Error</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->


            <!--formulaire start-->

            <div class=\"panel panel-default\">

                <div class=\"panel panel-primary\" style=\"margin-top: 50PX; width: 1400PX;\">
                    <div class=\"form1 col-lg-7 col-lg-offset-3\" style=\" position: fixed;\"> 
                       <div class=\"panel panel-heading\" style=\" margin-top: 20PX\"> GESTION DES CLIENTS</div> 
                    <br/><br/>
                    <div class=\"form2\">
                        
                        <div class=\"page-header\">
                            <b style=\"text-align:center\"><h5>NOUVEAU CLIENT</h5></b>
                        </div>
                        <form method=\"post\" enctype=\"multipart/form-data\" action=\"/mesupres/web/app_dev.php/SPAT/newAgent\" class=\"formulaire\" style=\"margin-left:10PX;\">

                            <div class=\"form3\">
                                <div class=\"panel panel-heading\">CLIENT ARMEMENT</div>
                                <table class=\"table\" style=\" background-color: #cccccc;\">                                    
                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_AgentSPAT_nom\" class=\"required\">COMPANY</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_AgentSPAT_nom\" name=\"page_spatbundle_etatagent[AgentSPAT][nom]\" required=\"required\" class=\"input\" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_AgentSPAT_prenom\">ADRESSE</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_AgentSPAT_prenom\" name=\"page_spatbundle_etatagent[AgentSPAT][prenom]\" class=\"input\" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_AgentSPAT_prenom\">EMAIL</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_AgentSPAT_prenom\" name=\"page_spatbundle_etatagent[AgentSPAT][prenom]\" class=\"input\" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_AgentSPAT_prenom\">TEL</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_AgentSPAT_prenom\" name=\"page_spatbundle_etatagent[AgentSPAT][prenom]\" class=\"input\" />
                                        </td>
                                    </tr>
                                     <tr>

                                    
                                        <td colspan=\"2\">
                                            <div class=\"panel-heading\">INFORMATIONS CLIENT</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_PosteSPAT_cadre_diplome\" class=\"required\">NOM CLIENT</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_PosteSPAT_cadre_attestation\" name=\"page_spatbundle_etatagent[PosteSPAT][cadre][attestation]\" class=\"input\" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_PosteSPAT_cadre_attestation\">ADRESSE</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_PosteSPAT_cadre_attestation\" name=\"page_spatbundle_etatagent[PosteSPAT][cadre][attestation]\" class=\"input\" />
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <label for=\"page_spatbundle_etatagent_PosteSPAT_cadre_categorie\" class=\"required\">TEL</label>
                                        </td>
                                        <td> <input type=\"text\" id=\"page_spatbundle_etatagent_PosteSPAT_cadre_attestation\" name=\"page_spatbundle_etatagent[PosteSPAT][cadre][attestation]\" class=\"input\" />
                                        </td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>                               
                                </table>
                            </div>
                            <input type=\"hidden\" id=\"page_spatbundle_etatagent__token\" name=\"page_spatbundle_etatagent[_token]\" value=\"Z-AWQlVNyFrFvEwoUXcJMjsnWpEKCUxJnQTmIqO5hIg\" />
                            <p align=\"center\">
                                <input action=\"action\" class=\"btn btn-default\" type=\"button\" value=\"ANNULER\" onclick=\"history.go(-1);\" />
                                <input type=\"submit\" class=\"btn btn-default\" value=\"ENREGISTRER\"/></p>

                        </form>
                        <div class=\"page-header\"></div>
                    </div>
                </div>
               </div>
            </div>



            <!-- formulaire end -->

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "ContainergenerateBundle:Default:gestionclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 83,  231 => 82,  227 => 81,  223 => 80,  219 => 79,  215 => 78,  211 => 77,  207 => 76,  203 => 75,  199 => 74,  195 => 73,  191 => 72,  185 => 69,  180 => 67,  176 => 66,  171 => 64,  167 => 63,  161 => 60,  157 => 59,  151 => 56,  147 => 55,  143 => 54,  138 => 52,  131 => 48,  127 => 47,  122 => 45,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  97 => 35,  93 => 34,  87 => 31,  83 => 30,  79 => 29,  72 => 25,  66 => 22,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
