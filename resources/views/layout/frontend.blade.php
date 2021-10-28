<!doctype html>
<html lang="en">


<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content=" Edomi - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords" content="html , html dir ,  website template, bootstrap 5  template,  bootstrap template, admin panel template , admin panel , html5 , academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

    <!-- Favicon -->
    <link rel="icon" href="#" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="#" />

    <!-- Title -->
    <title> TALIM AFRIQUE</title>

    <!-- Bootstrap css -->
    <link href="{{url('/')}}/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{url('/')}}/assets/css/style.css" rel="stylesheet" />

    <!-- Font-awesome  css -->
    <link href="{{url('/')}}/assets/css/icons.css" rel="stylesheet"/>

    <!--Select2 css -->
    <link href="{{url('/')}}/assets/plugins/select2/select2.css" rel="stylesheet" />



    <!-- Owl Theme css-->
    <link href="{{url('/')}}/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />




    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">





    <!-- Color Skin css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{url('/')}}/assets/color-skins/color.css" />

</head>

<body>

<div id="app">
    <!--Loader-->
    <div id="global-loader">
        <img src="https://spruko.com/demo/edomi/Edomi/assets/images/loader.svg" class="loader-img" alt="img">
    </div><!--/Loader-->

    <!--Topbar-->
    <div class="header-main" >

        <div class="top-bar top-bar-light">
            <div class="container">
                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-sm-12 col-12">
                        <div class="top-bar-end">
                            <ul class="custom">
                                @auth

                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><i class="fe fe-home me-1"></i><span> Tableau de bord<i class="fe fe-chevron-down  ms-1"></i></span></a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <a href="mydash.html" class="dropdown-item">
                                                <i class="dropdown-icon icon icon-user"></i> My Profile
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="dropdown-icon icon icon-speech"></i> Inbox
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="dropdown-icon icon icon-bell"></i> Notifications
                                            </a>
                                            <a href="mydash.html" class="dropdown-item">
                                                <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0)">
                                                <i class="dropdown-icon icon icon-power"></i> Log out
                                            </a>
                                        </div>
                                    </li>
                                @endauth

                                @guest

                                    <li>
                                        <a href="{{route('register')}}" class="text-dark"><i class="fe fe-user me-1"></i> <span>S'inscrire</span></a>
                                    </li>
                                    <li>
                                        <a href="{{route('login')}}" class="text-dark"><i class="fe fe-log-in me-1"></i> <span>Se Connecter</span></a>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Section-->
        <div class="cover-image bg-background-1" data-bs-image-src="{{url('/')}}/assets/images/banners/banner1.jpg">

            <!--Topbar-->
            <div class="header-main">
                <!-- Mobile Header -->
                <div class="sticky">
                    <div class="horizontal-header clearfix ">
                        <div class="container">
                            <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                            <span class="smllogo"><img src="{{url('/')}}/assets/images/brand/logo1.png" width="120" alt="img"/></span>
                            <span class="smllogo-white"><img src="{{url('/')}}/assets/images/brand/logo.png" width="120" alt="img"/></span>
                            <a href="tel:245-6325-3256" class="callusbtn"><i class="icon icon-phone" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Mobile Header -->

                <!--Horizontal-main -->
                <div class="horizontal-main header-style1 bg-dark-transparent clearfix p-0 pt-4">
                    <div class="horizontal-mainwrapper container clearfix">
                        <div class="desktoplogo">
                            <a href="{{route('home')}}"><img src="{{url('/')}}/assets/images/brand/logo-white.png" style="height: 50px" alt="img" >
                                <img src="../../assets/images/brand/logo.png" class="header-brand-img header-white" alt="logo">
                            </a>
                        </div>
                        <div class="desktoplogo-1"  style="padding: 0px !important;">
                            <a href="{{route('home')}}"><img src="{{url('/')}}/assets/images/brand/logo.png" alt="img" style="height: 50px"></a>
                        </div>
                        <nav class="horizontalMenu clearfix d-md-flex">
                            <ul class="horizontalMenu-list">
                                <li aria-haspopup="true"><a href="{{route('home')}}">Accueil</a>

                                </li>
                                <li aria-haspopup="true"><a href="javascript:void(0)">Services <span class="fe fe-chevron-down"></span></a>
                                    <ul class="sub-menu">
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Pré-inscription</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Bourses</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Stages</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Assistance de visa étudiant</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Assurance Voyage</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Achat et Réservation de billet d’avion</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Réservation de logement ou Hôtel</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Service d’orientation</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Cours particuliers</a></li>
                                        <li aria-haspopup="true"><a href="javascript:void(0)">Traduction</a></li>
                                    </ul>
                                </li>
                                <li aria-haspopup="true"><a href="{{route('front.formations')}}">Formations</a></li>
                                <li aria-haspopup="true"><a href="{{route('front.bibliotheques')}}">Bibliothèques</a></li>
                                <li aria-haspopup="true"><a href="{{route('front.talimeur')}}">Répertorier votre formation</a></li>
                            <!--    <li aria-haspopup="true"><a href="{{route('front.news')}}">Actualites</a></li>-->


                                <li aria-haspopup="true"><a href="{{route('front.contacts')}}"> Contact</a></li>
                                @guest
                                <li aria-haspopup="true" class="p-0 mt-1">
                                    <span><a class="btn btn-primary" href="{{route('login')}}">Se connecter</a></span>
                                </li>


                                @endguest

                            </ul>
                        </nav>
                    </div>
                </div>            </div><!--/Horizontal-main -->

            @yield('header')
        </div>
    </div>

    <div >
        @yield('content')
    </div>
</div>







<!--Footer Section-->
<footer class="bg-dark">
    <div class="footer-main footer-main1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-5 col-md-12">
                            <img src="{{url('/')}}/assets/images/brand/logo-white.png" class="w-auto border-0" alt="img">


                        </div>

                        <div class="col-lg-7 col-md-12">
                            <h6 class="font-weight-normal text-white">Infos</h6>
                            <ul class="list-unstyled mb-0 mt-4">
                                <li>
                                    <a href="javascript:void(0)">Avenue Mobutu
                                        -N’DJAMENA TCHAD</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">BP: 5017</a></li>
                                <li>
                                    <a href="javascript:void(0)">+23562 10 57 50 </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">+23591 92 53 80</a>
                                </li>
                                <li>
                                    Lundi-Vendredi <br>
                                    08h- 12h – 13h30-16h30
                                </li>
                            </ul>
                        </div>



                    </div>
                </div>

                <div class="col-lg-7">
                    <h6 class="font-weight-normal text-white text-center">Services</h6>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">

                            <ul class="list-unstyled mb-5 mb-lg-0">
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Pré-inscription</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Bourses</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Stages</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Assistance de visa étudiant</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Assurance Voyage</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">

                            <ul class="list-unstyled mb-lg-0 mb-5">
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Réservation de logement ou Hôtel</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Service d’orientation</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Cours particuliers</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Traduction</a></li>
                                <li><a href="javascript:;"><i class="fe fe-chevron-right"></i> Devenir TALIM</a></li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="py-3 bg-dark">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 col-sm-12  mt-2 mb-2 text-center text-white">
                    Copyright © 2021 - All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer Section-->

<!-- Back to top -->
<a href="#top" id="back-to-top" ><i class="fa fa-long-arrow-up"></i></a>
<script src="{{asset('js/app.js')}}"></script>
<!-- JQuery js-->
<script src="{{url('/')}}/assets/js/jquery.min.js"></script>

<!-- Bootstrap js -->
<script src="{{url('/')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{url('/')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>




<!--Owl Carousel js -->
<script src="{{url('/')}}/assets/plugins/owl-carousel/owl.carousel.js"></script>

<!--Horizontal Menu js-->
<script src="{{url('/')}}/assets/plugins/horizontal-menu/horizontal-menu.js"></script>

<!--JQuery TouchSwipe js-->
<script src="{{url('/')}}/assets/js/jquery.touchSwipe.min.js"></script>



<!-- sticky js-->
<script src="{{url('/')}}/assets/js/sticky.js"></script>



<!--Select2 js -->
<script src="{{url('/')}}/assets/plugins/select2/select2.full.min.js"></script>
<script src="{{url('/')}}/assets/js/select2.js"></script>



<!-- Scripts js-->
<script src="{{url('/')}}/assets/js/owl-carousel.js"></script>

<!-- Custom js-->
<script src="{{url('/')}}/assets/js/custom.js"></script>

</body>

<!-- Mirrored from spruko.com/demo/edomi/Edomi/LTR/Html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Oct 2021 12:12:29 GMT -->
</html>
