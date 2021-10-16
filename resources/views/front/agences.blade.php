@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Agences'])
@endsection
@section('content')

    <section class="sptb Category">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 col-md-3">
                            <a href="javascript:void(0)" class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../../assets/images/media/21.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="font-weight-semibold">Agence 1</h4>
                                            <span class="font-weight-bold text-white-80"><strong class="fs-18 font-weight-bold text-white">1856</strong> Formations</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                            <a href="javascript:void(0)" class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../../assets/images/media/24.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="font-weight-semibold">Agence 2</h4>
                                            <span class="font-weight-bold text-white-80"><strong class="fs-18 font-weight-bold text-white">1256</strong> Formations</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                            <a href="javascript:void(0)" class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden mb-xl-0">
                                        <div class="card-img">
                                            <img src="../../assets/images/media/22.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h4 class="font-weight-semibold">Agence 3</h4>
                                            <span class="font-weight-bold text-white-80"><strong class="fs-18 font-weight-bold text-white">656</strong> Formations</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-3 col-md-3">
                            <a href="javascript:void(0)" class="item-card overflow-hidden">
                                <div class="item-card-desc">
                                    <div class="card text-center overflow-hidden">
                                        <div class="card-img">
                                            <img src="../../assets/images/media/14.jpg" alt="img" class="cover-image">
                                        </div>
                                        <div class="item-card-text">
                                            <h3 class="font-weight-semibold fs-30">Agence 4</h3>
                                            <span class="font-weight-bold text-white-80"><strong class="fs-18 font-weight-bold text-white">875</strong> Formations</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
