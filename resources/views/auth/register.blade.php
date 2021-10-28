@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Inscription'])

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
                                <h5 class="fs-25 font-weight-semibold">Inscription</h5>

                            </div>
                            <div class="single-page customerpage">
                                <div class="wrapper wrapper2 box-shadow-0">

                                    <form-register></form-register>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section><!--/Login-Section-->
@endsection
