<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>TOSANDENI</title>
    <meta name="description" content="" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('/')}}/back/dist/img/logo.png">
    <link rel="icon" href="{{url('/')}}/back/dist/img/logo.png" type="image/x-icon">

    <!-- Morris Charts CSS -->
    <link href="{{url('/')}}/back/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- vector map CSS -->
    <link href="{{url('/')}}/back/vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toastr CSS -->
    <link href="{{url('/')}}/back/vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">


    <!-- Data Table CSS -->
    <link href="{{url('/')}}/back/vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('/')}}/back/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />



    <!-- jquery-steps css -->
    <link rel="stylesheet" href="{{url('/')}}/back/vendors/jquery-steps/demo/css/jquery.steps.css">

    <!-- Toggles CSS -->
    <link href="{{url('/')}}/back/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/back/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{url('/')}}/back/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">



    <style>
        .attention{
            font-weight: bold;
            color: red;
        }
    </style>





</head>

<body >
<!-- Preloader -->
<div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<!-- /Preloader -->



<!-- HK Wrapper -->
<div class="hk-wrapper hk-vertical-nav" id="app">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
        <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
        <a class="navbar-brand" href="#">
            <img class="brand-img" src="{{url('/')}}/front/images/logo/logo.png" alt="brand" width="35px" />
        </a>
        <ul class="navbar-nav hk-navbar-content">

            <li class="nav-item dropdown dropdown-authentication">
                <form method="POST" action="#">
                    @csrf
                    <a href="#">
                        {{ __('Deconnexion') }}
                    </a>
                </form>
            </li>
        </ul>
    </nav>

    <!-- /Top Navbar -->

    <!-- Vertical Nav -->
    @if(auth()->user()->role_id==1)
        @include('layout.navbars.menus.admin')
    @else

        @include('layout.navbars.menus.agence')
    @endif

    <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
    <!-- /Vertical Nav -->



    <!-- Main Content -->
    <div class="hk-pg-wrapper" >
        <div >

            @yield('content')

        </div>



    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->
<script src="{{asset('js/app.js')}}"></script>

<!-- jQuery -->
<script src="{{url('/')}}/back/vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('/')}}/back/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="{{url('/')}}/back/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="{{url('/')}}/back/dist/js/jquery.slimscroll.js"></script>




@yield('dataTable')


<!-- FeatherIcons JavaScript -->
<script src="{{url('/')}}/back/dist/js/feather.min.js"></script>

<!-- Fancy Dropdown JS -->
<script src="{{url('/')}}/back/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- Init JavaScript -->
<script src="{{url('/')}}/back/dist/js/init.js"></script>











<script>
    $(document).ready(function() {
        $('#fermertout').click(function(){
            $('#exampleModal').modal('hide');
            $('.modal-backdrop').remove();
        })
    })

</script>


</body>

</html>





