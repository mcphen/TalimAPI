@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Contact'])
@endsection
@section('content')

    <div class="sptb bg-white contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-white">
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-lg-0">
                                <div class="support-service mb-0  text-center bg-primary">
                                    <i class="fa fa-phone"></i>
                                    <h5>+68 872-627-9735</h5>
                                    <p>Free Support!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-lg-0">
                                <div class="support-service mb-0 text-center bg-secondary">
                                    <i class="fa fa-clock-o"></i>
                                    <h5>Mon-Sat(10:00-19:00)</h5>
                                    <p>Working Hours!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-lg-0">
                                <div class="support-service mb-0 text-center bg-success">
                                    <i class="fa fa-map-marker"></i>
                                    <h5>872 School-Street, TN 37072</h5>
                                    <p> New York, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-0">
                                <div class="support-service mb-0 text-center bg-orange">
                                    <i class="fa fa-envelope-o"></i>
                                    <h5>yourdomain@gmail.com</h5>
                                    <p>Support us!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-7 col-md-12 mx-auto">
                    <div class="card mb-0 single-page customerpage contact">
                        <div class="card-body wrapper wrapper2 box-shadow-0">
                            <div class="mb-6 text-dark">
                                <h5 class="fs-25 font-weight-semibold">Contact Us</h5>
                                <p class="fs-16">If you are going to use a passage of Lorem Ipsum</p>
                            </div>
                            <form id="" class="" tabindex="500">
                                <div class="name">
                                    <label>Name</label>
                                    <input type="text" name="name">
                                </div>
                                <div class="mail">
                                    <label>Mail or Username</label>
                                    <input type="email" name="mail">
                                </div>
                                <div class="Message">
                                    <label>Message</label>
                                    <textarea name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                                </div>
                                <div class="submit">
                                    <a href="javascript:void(0)" class="btn btn-primary">Send Message</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
