@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Connexion'])

@endsection
@section('content')

    <!--Login-Section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="col-lg-8 col-xl-8 col-md-8 d-block mx-auto">
                    <div class="card">
                        <div class="card-body p-6">
                            <div class="mb-6">
                                <h5 class="fs-25 font-weight-semibold">Login</h5>
                                <p class="fs-16">If you are going to use a passage of Lorem Ipsum</p>
                            </div>
                            <div class="single-page customerpage">
                                <div class="wrapper wrapper2 box-shadow-0">

                                        <form-login></form-login>
                                        <div class="d-flex mb-0">
                                            <p class="mb-0"><a href="forgot.html" >Forgot Password</a></p>
                                            <p class="text-dark mb-0 ms-auto">Don't have account?<a href="register.html" class="text-primary ms-1">Signup</a></p>
                                        </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/Login-Section-->
@endsection
