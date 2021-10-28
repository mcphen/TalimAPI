@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Actualites'])
@endsection
@section('content')

    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                    <!--Coursed Lists-->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="ribbon ribbon-top-left"><span class="bg-danger">featured</span></div>
                                <div class="row g-0 blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img br-be-0 br-te-0">
                                            <a href="{{route('front.news_detail','talim')}}"></a>
                                            <img src="../../assets/images/media/14.jpg" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <a class="item-card-badge bg-primary text-white" data-bs-toggle="tooltip" data-bs-original-title="Business"><i class="fa fa-briefcase"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body pb-4 pt-4">
                                            <div class="mb-3">
                                                <a href="{{route('front.news_detail','talim')}}" class=""><h3 class="font-weight-semibold fs-16 mb-3">Itaque earum sapiente</h3></a>
                                                <p class="">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card">
                                <div class="row g-0 blog-list">
                                    <div class="col-xl-4 col-lg-12 col-md-12">
                                        <div class="item7-card-img br-be-0 br-te-0">
                                            <a href="{{route('front.news_detail','talim')}}"></a>
                                            <img src="../../assets/images/media/17.jpg" alt="img" class="cover-image">
                                            <div class="item7-card-text">
                                                <a class="item-card-badge bg-primary text-white" data-bs-toggle="tooltip" data-bs-original-title="Networking"><i class="fa fa-cube"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-12 col-md-12">
                                        <div class="card-body pb-4 pt-4">
                                            <div class="mb-3">
                                                <a href="{{route('front.news_detail','talim')}}" class=""><h3 class="font-weight-semibold fs-16 mb-3">Certain circumstances claims</h3></a>
                                                <p class="">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat,quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="center-block text-center">
                        <ul class="pagination mb-0">
                            <li class="page-item page-prev disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item page-next">
                                <a class="page-link" href="javascript:void(0)">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/Coursed Lists-->
            </div>
        </div>
    </section>

@endsection
