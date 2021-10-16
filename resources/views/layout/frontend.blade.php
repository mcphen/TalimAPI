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
    <title> Edomi - Online Education & Learning Courses HTML CSS Responsive Template</title>

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
                            <a href="{{route('home')}}"><img src="{{url('/')}}/assets/images/brand/logo1.png" alt="img">
                                <img src="../../assets/images/brand/logo.png" class="header-brand-img header-white" alt="logo">
                            </a>
                        </div>
                        <div class="desktoplogo-1">
                            <a href="{{route('home')}}"><img src="{{url('/')}}/assets/images/brand/logo.png" alt="img"></a>
                        </div>
                        <nav class="horizontalMenu clearfix d-md-flex">
                            <ul class="horizontalMenu-list">
                                <li aria-haspopup="true"><a href="{{route('home')}}">Accueil</a>

                                </li>
                                <li aria-haspopup="true"><a href="{{route('front.agences')}}">Nos agences </a></li>
                                <li aria-haspopup="true"><a href="{{route('front.formations')}}">Nos formations</a></li>
                                <li aria-haspopup="true"><a href="{{route('front.news')}}">Actualites</a></li>


                                <li aria-haspopup="true"><a href="{{route('front.contacts')}}"> Contact</a></li>

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
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <img src="{{url('/')}}/assets/images/brand/logo-white.png" class="w-auto border-0" alt="img">
                            <ul class="list-unstyled mb-0 mt-4">
                                <li>
                                    <a href="javascript:void(0)">Second stret, New York, NY 10012, US</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">info@example.com, info@edomi.com</a></li>
                                <li>
                                    <a href="javascript:void(0)">+ 01 234 567 88</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">+ 01 234 567 89</a>
                                </li>
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
