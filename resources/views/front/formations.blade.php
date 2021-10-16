@extends('layout.frontend')
@section('header')
    <!--Section-->
    <div>
        <div class="sptb-1">
            <div class="header-text1 mb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-12 d-block mx-auto">
                            <div class="text-center text-white text-property">
                                <h1 class=""><span class="font-weight-bold">2000+</span> Best  Courses Available Here!</h1>
                            </div>
                            <div class="search-background bg-transparent">
                                <div class="form row g-0 ">
                                    <div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white">
                                        <input type="text" class="form-control input-xl br-te-md-0 br-be-md-0" id="text4" placeholder="Search Courses.....">
                                    </div>
                                    <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
                                        <input type="text" class="form-control input-xl br-md-0" id="text5" placeholder="Enter Location">
                                        <span><i class="fa fa-map-marker location-gps me-1"></i> </span>
                                    </div>
                                    <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg mb-0 bg-white">
                                        <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                            <optgroup label="Categories">
                                                <option>Select</option>
                                                <option value="1">IT</option>
                                                <option value="2">Language</option>
                                                <option value="3">Science</option>
                                                <option value="4">Health</option>
                                                <option value="5">Humanities</option>
                                                <option value="6">Business</option>
                                                <option value="7">Maths</option>
                                                <option value="8">Marketing</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                        <a href="javascript:void(0)" class="btn btn-xl btn-block btn-secondary br-ts-md-0 br-bs-md-0">Search Here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /header-text -->
        </div>
    </div><!--/Section-->
@endsection
@section('content')
    <!--Breadcrumb-->
    <div class="bg-white border-bottom">
        <div class="container">
            <div class="page-header">
                <h4 class="page-title">Classes list</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Classes list</li>
                </ol>
            </div>
        </div>
    </div>
    <!--/Breadcrumb-->

    <!--Section-->
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <!--Coursed lists-->
                    <div class="mb-lg-0">
                        <div class="">
                            <div class="item2-gl ">

                                <div class="tab-content item-list1">
                                    <div class="tab-pane active" id="tab-11">
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="page-details.html"></a>
                                                        <img src="../../assets/images/media/11.jpg" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart"></i></a>
                                                        <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <a href="page-details.html" class="bg-primary">Popular</a>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="page-details.html" class="text-default-dark"><h3 class="">Business Management Classes</h3></a>
                                                            <p class="mb-0 mt-1 lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                            <div class="mt-2 mb-2">
                                                                <ul class="icon-card-1">
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-briefcase me-1"></i> Business</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Stephanie</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>37 Lectures</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>45,000 students</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="">
                                                                <div class="rating-stars d-flex me-5">
                                                                    <h4 class="font-weight-semibold me-2">4.2</h4>
                                                                    <div class="star-ratings start-ratings-main clearfix me-3">
                                                                        <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                            <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4" selected>4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>(4,24,525)
                                                                </div>
                                                            </div>
                                                            <h4 class="font-weight-semibold mb-0 mt-4 mb-0 fs-20 text-dark"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offer</span></div>
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="page-details.html"></a>
                                                        <img src="../../assets/images/media/9.jpg" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <a href="page-details.html" class="bg-blue">High Rated</a>
                                                    </div>
                                                </div>
                                                <div class="card mb-0 border-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="page-details.html" class="text-default-dark"><h3 class="">Networking Classes</h3></a>
                                                            <p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                            <div class="mt-2 mb-2">
                                                                <ul class="icon-card-1">
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-cube me-1"></i> Networking</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Lauren</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>50 Lectures</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>75,030 students</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="">
                                                                <div class="rating-stars d-flex me-5">
                                                                    <h4 class="font-weight-semibold me-2">5.0</h4>
                                                                    <div class="star-ratings start-ratings-main clearfix me-3">
                                                                        <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                            <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4" >4</option>
                                                                                <option value="5" selected>5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>(12,00,525)
                                                                </div>
                                                            </div>
                                                            <h4 class="font-weight-semibold mb-0  mt-4 mb-0 fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$745.00<span class="strike-text ms-2 text-muted fs-16">$896.00</span></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card overflow-hidden">
                                            <div class="d-md-flex">
                                                <div class="item-card9-img">
                                                    <div class="item-card9-imgs">
                                                        <a href="page-details.html"></a>
                                                        <img src="../../assets/images/media/3.jpg" alt="img" class="cover-image">
                                                    </div>
                                                    <div class="item-card9-icons">
                                                        <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                        <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                    </div>
                                                    <div class="item-overly-trans">
                                                        <a href="page-details.html" class="bg-primary">Popular</a>
                                                    </div>
                                                </div>
                                                <div class="card border-0 mb-0">
                                                    <div class="card-body ">
                                                        <div class="item-card9">
                                                            <a href="page-details.html" class="text-default-dark"><h3 class="">Beautician Classes</h3></a>
                                                            <p class="mb-0 leading-tight">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                            <div class="mt-2 mb-2">
                                                                <ul class="icon-card-1">
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-paint-brush me-1"></i> Beautician</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Kimberly</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i>20 Lectures</span></li>
                                                                    <li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>35,500 students</span></li>
                                                                </ul>
                                                            </div>
                                                            <div class="">
                                                                <div class="rating-stars d-flex me-5">
                                                                    <h4 class="font-weight-semibold me-2">4.3</h4>
                                                                    <div class="star-ratings start-ratings-main clearfix me-3">
                                                                        <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                            <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4" selected>4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>(67,525)
                                                                </div>
                                                            </div>
                                                            <h4 class="font-weight-semibold mb-0  mt-4 mb-0 fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$149.00</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-xl-6">
                                                <div class="card overflow-hidden">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="page-details.html"></a>
                                                            <img src="../../assets/images/media/11.jpg" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                        </div>
                                                        <div class="item-overly-trans">
                                                            <a href="page-details.html" class="bg-primary">Popular</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <span class="item-card-badge"><i class="fa fa-briefcase me-1"></i> Business</span>
                                                            <a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Business Management</h3></a>
                                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <div class="rating-stars d-flex me-5">
                                                                <h4 class="font-weight-semibold me-2">4.2</h4>
                                                                <div class="star-ratings start-ratings-main clearfix me-3">
                                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4" selected>4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>(4,24,525)
                                                            </div>
                                                        </div>
                                                        <h4 class="font-weight-semibold fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$263.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-6">
                                                <div class="card overflow-hidden">
                                                    <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Offer</span></div>
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="page-details.html"></a>
                                                            <img src="../../assets/images/media/9.jpg" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                        </div>
                                                        <div class="item-overly-trans">
                                                            <a href="page-details.html" class="bg-primary">High Rated</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <span class="item-card-badge"><i class="fa fa-cube me-1"></i> Networking</span>
                                                            <a href="page-details.html" class="text-default-dark"><h3 class="mt-2 mb-2">Networking Classes</h3></a>
                                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <div class="rating-stars d-flex me-5">
                                                                <h4 class="font-weight-semibold me-2">5.0</h4>
                                                                <div class="star-ratings start-ratings-main clearfix me-3">
                                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5" selected>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>(12,00,525)
                                                            </div>
                                                        </div>
                                                        <h4 class="font-weight-semibold fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$745.00<span class="strike-text ms-2 text-muted fs-16">$896.00</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-6">
                                                <div class="card overflow-hidden">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="page-details.html"></a>
                                                            <img src="../../assets/images/media/8.jpg" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                        </div>
                                                        <div class="item-overly-trans">
                                                            <a href="page-details.html" class="bg-blue">Popular</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card9">
                                                            <span class="item-card-badge"><i class="fa fa-paint-brush me-1"></i> Beautician</span>
                                                            <a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Beautician Classes</h3></a>
                                                            <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <div class="rating-stars d-flex me-5">
                                                                <h4 class="font-weight-semibold me-2">4.3</h4>
                                                                <div class="star-ratings start-ratings-main clearfix me-3">
                                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4" selected>4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>(67,525)
                                                            </div>
                                                        </div>
                                                        <h4 class="font-weight-semibold fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$149.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-6">
                                                <div class="card overflow-hidden">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="page-details.html"></a>
                                                            <img src="../../assets/images/media/3.jpg" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <span class="item-card-badge"><i class="fa fa-music me-1"></i> Music</span>
                                                                <a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Guitar Classes</h3></a>
                                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <div class="rating-stars d-flex me-5">
                                                                <h4 class="font-weight-semibold me-2">4.9</h4>
                                                                <div class="star-ratings start-ratings-main clearfix me-3">
                                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4" selected>4</option>
                                                                            <option value="5">5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>(99,525)
                                                            </div>
                                                        </div>
                                                        <h4 class="font-weight-semibold fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$13.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-6">
                                                <div class="card overflow-hidden">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="page-details.html"></a>
                                                            <img src="../../assets/images/media/16.jpg" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                        </div>
                                                        <div class="item-overly-trans">
                                                            <a href="page-details.html" class="bg-blue">Popular</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <span class="item-card-badge"><i class="fa fa-camera me-1"></i> PhotoShop</span>
                                                                <a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">PhotoShop Design</h3></a>
                                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <div class="rating-stars d-flex me-5">
                                                                <h4 class="font-weight-semibold me-2">5.0</h4>
                                                                <div class="star-ratings start-ratings-main clearfix me-3">
                                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5" selected>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>(99,525)
                                                            </div>
                                                        </div>
                                                        <h4 class="font-weight-semibold fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>42.00</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-xl-6">
                                                <div class="card overflow-hidden">
                                                    <div class="item-card9-img">
                                                        <div class="item-card9-imgs">
                                                            <a href="page-details.html"></a>
                                                            <img src="../../assets/images/media/7.jpg" alt="img" class="cover-image">
                                                        </div>
                                                        <div class="item-card9-icons">
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
                                                            <a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
                                                        </div>
                                                        <div class="item-overly-trans">
                                                            <a href="page-details.html" class="bg-primary">Best Sales</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="item-card2">
                                                            <div class="item-card2-desc">
                                                                <span class="item-card-badge"><i class="fa fa-flask me-1"></i> DataScience</span>
                                                                <a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Data Science</h3></a>
                                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2 mb-2">
                                                            <div class="rating-stars d-flex me-5">
                                                                <h4 class="font-weight-semibold me-2">5.0</h4>
                                                                <div class="star-ratings start-ratings-main clearfix me-3">
                                                                    <div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
                                                                        <select class="example-fontawesome" name="rating" autocomplete="off">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4" >4</option>
                                                                            <option value="5" selected>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>(1,25,252)
                                                            </div>
                                                        </div>
                                                        <h4 class="font-weight-semibold fs-20 text-dark"><i class="fe fe-tag mt-0 text-muted fs-18 me-2"></i>$263.99</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="center-block text-center">
                                <ul class="pagination mb-5 mb-lg-0">
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
                    </div>
                    <!--/Coursed lists-->
                </div>


            </div>
        </div>
    </section><!--Section-->



@endsection
