@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_search')
@endsection
@section('content')
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Informatique Genie Logiciel</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Formation</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Informatique Genie Logiciel</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <!--Coursed Description-->
                    <div class="card overflow-hidden">
                        <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Best Seller</span>
                        </div>
                        <div class="card-body pb-0">
                            <a href="javascript:void(0)" class="text-dark"><h2 class="font-weight-semibold mb-0">Advanced Web Develpment</h2></a>
                            <p class="lead-1">Php Developement</p>
                            <div class="product-slider">
                                <ul class="list-unstyled video-list-thumbs">
                                    <li class="mb-0">
                                        <a data-bs-toggle="modal" data-bs-target="#homeVideo" class="class-video p-0">
                                            <img src="../../assets/images/media/0-13.jpg" alt="img" class="img-responsive  border br-7">
                                            <span class="fa fa-play-circle text-white class-icon"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="item-card-text-bottom">
                                <h4 class="mb-0">20% off</h4>
                            </div>
                        </div>
                        <div class="row details-1">
                            <div class="col-xl-4 col-lg-4 col-md-4 ">
                                <div class="card mb-0 border-0 shadow-none">
                                    <div class="card-body d-flex pb-0 pb-md-5">
                                        <img src="../../assets/images/users/female/20.jpg" class="brround d-none d-md-flex avatar-md me-3" alt="user">
                                        <div>
                                            <span class="icons fs-16 font-weight-semibold text-dark">Agence</span>
                                            <a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"><span class=" d-block">Jacob Smith</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="card mb-0 border-0 shadow-none">
                                    <div class="card-body pb-0 pb-md-5">
                                        <div>
                                            <span class="icons fs-16 font-weight-semibold text-dark">Category</span>
                                            <a href="javascript:void(0)" class="icons h4 font-weight-semibold text-dark"><span class=" d-block">Development</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Description</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-4 description">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <!--Right Side Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="../../assets/images/media/0-12.jpg" alt="img" class="img-responsive  border br-7">
                            <div class="mt-4 mb-4 text-center">
                                <div class="mb-2">
										<span class="font-weight-semibold h2 text-default-dark mb-0">$135

										</span>
                                </div>
                             </div>
                            <div class="">
                                <a href="javascript:void(0)" class="btn btn-block btn-primary mb-3 mb-xl-0"><span>Add to Cart</span><i class="fe fe-shopping-cart mt-1 ms-2 fs-14"></i></a>
                                <a href="javascript:void(0)" class="btn btn-block btn-secondary mb-3 mb-xl-0"><span>Enroll Now</span> <i class="fe fe-arrow-right mt-1 ms-2 fs-14"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Agence</h3>
                        </div>
                        <div class="card-body  item-user">
                            <div class="profile-pic mb-0">
                                <img src="../../assets/images/users/female/20.jpg" class="brround avatar-xxl" alt="user">
                                <div>
                                    <a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-bold">Jacob Smith</h4></a>
                                    <span class="lead fs-16">Member Since November 2008</span>
                                    <div class=" item-user-icons mt-3">
                                        <a href="javascript:void(0)" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
                                        <a href="javascript:void(0)" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                        <a href="javascript:void(0)" class="google-bg"><i class="fa fa-google"></i></a>
                                        <a href="javascript:void(0)" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body item-user">
                            <h4 class="mb-4">Contact Info</h4>
                            <div>
                                <h6 class="mb-3"><span class="font-weight-semibold"><i class="fe fe-map-pin me-2 mb-2"></i></span><a href="javascript:void(0)" class="text-body"> 7981 Aspen Ave. Hammonton,  USA</a></h6>
                                <h6 class="mb-3"><span class="font-weight-semibold"><i class="fe fe-mail me-2 mb-2"></i></span><a href="javascript:void(0)" class="text-body"> smith@gmail.com</a></h6>
                                <h6 class="mb-3"><span class="font-weight-semibold"><i class="fe fe-phone me-2  mb-2"></i></span><a href="javascript:void(0)" class="text-body"> 0-235-657-24587</a></h6>
                                <h6 class="mb-0"><span class="font-weight-semibold"><i class="fe fe-link me-2 "></i></span><a href="javascript:void(0)" class="text-body">http://abcd.com/</a></h6>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-start">
                                <a href="javascript:void(0)" class="btn  btn-primary mb-2 mb-xl-0"><i class="fa fa-envelope"></i> Chat</a>
                                <a href="javascript:void(0)" class="btn btn-secondary mb-2 mb-xl-0" data-bs-toggle="modal" data-bs-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
                                <a href="javascript:void(0)" class="btn  btn-danger mb-2 mb-xl-0"><i class="fa fa-share"></i> Share</a>
                            </div>
                        </div>
                    </div>

                </div>
                <!--Right Side Content-->
            </div>
        </div>
    </section>



@endsection
