@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'TALIM'])
@endsection
@section('content')

    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="d-block mx-auto col-lg-8 col-md-12">
                    <div class="card blog-detail">
                        <div class="card-body">
                            <div class="item7-card-img br-7 mb-5">
                                <img src="../../assets/images/media/0-1.jpg" alt="img" class="w-100">
                                <div class="item-card-text-bottom me-0">
                                    <h4 class="mb-0">Business</h4>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="text-dark"><h2 class="font-weight-semibold">Business Management</h2></a>
                            <div class="item7-card-desc d-md-flex mb-2 mt-3">
                                <a href="javascript:void(0)" class="font-weight-semibold fs-16"><i class="fe fe-calendar me-2 text-primary"></i>Nov-28-2018</a>
                                <a href="javascript:void(0)" class="font-weight-semibold fs-16"><i class="fe fe-user me-2 text-primary"></i>Nissy Sten</a>
                                <div class="ms-auto">
                                    <a href="javascript:void(0)" class="font-weight-semibold fs-16"><i class="fe fe-message-circle me-2 text-primary"></i>2 Comments</a>
                                </div>
                            </div>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Comments</h3>
                        </div>
                        <div class="card-body">
                            <div class="media mt-0 p-5 border br-7 review-media">
                                <div class="d-flex me-3">
                                    <a href="javascript:void(0)"><img class="media-object brround avatar-lg" alt="64x64" src="../../assets/images/users/male/25.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                        <span class="fs-14 float-md-end d-block d-md-flex">
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star-half-o text-yellow"></i>
											</span>
                                    </h4>
                                    <small class="text-muted fs-14">
                                        <i class="fa fa-clock-o"></i>  Reviewed 2 Hours Ago
                                    </small>
                                    <p class="font-13 fs-15 mb-2 mt-2">
                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                    </p>
                                    <div class="d-md-flex">
                                        <a href="javascript:void(0)" class="me-2 text-primary mt-1"><i class="fa fa-mail-reply me-2"></i>Reply</a>
                                        <div class="d-md-flex ms-auto my-auto">
                                            <span href="javascript:void(0)" class="me-2 mt-1">Recommended ?</span>
                                            <a href="#" class="me-2"><span class="btn btn-success btn-sm"><i class="fa fa-thumbs-o-up me-2"></i>Yes</span></a>
                                            <a href="#" class="me-2"><span class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down me-2"></i>No</span></a>
                                        </div>
                                    </div>
                                    <div class="media mt-5">
                                        <div class="d-flex me-3">
                                            <a href="javascript:void(0)"> <img class="media-object brround" alt="64x64" src="../../assets/images/users/female/2.jpg"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-1 font-weight-semibold">Rose Slater </h4>
                                            <small class="text-muted fs-14">
                                                <i class="fa fa-clock-o"></i>  Reviewed 1 Hours Ago
                                            </small>
                                            <p class="font-13  mb-2 mt-2">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris   commodo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
                                            </p>
                                            <a href="javascript:void(0)" class="me-2 text-primary"><i class="fa fa-mail-reply me-2"></i>Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media  mt-2 p-5 border br-7">
                                <div class="d-flex me-3">
                                    <a href="javascript:void(0)"><img class="media-object brround avatar-lg" alt="64x64" src="../../assets/images/users/male/15.jpg"> </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="mt-0 mb-1 font-weight-semibold">Edward
                                        <span class="fs-14 float-end ">
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star text-yellow"></i>
												<i class="fa fa-star-o text-yellow"></i>
											</span>
                                    </h4>
                                    <small class="text-muted fs-14">
                                        <i class="fa fa-clock-o"></i>  Reviewed 2 Hours Ago
                                    </small>
                                    <p class="font-13 fs-15 mb-2 mt-2">
                                        Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et  nostrud exercitation ullamco laboris   commodo consequat.
                                    </p>
                                    <div class="d-md-flex">
                                        <a href="javascript:void(0)" class="me-2 text-primary mt-1"><i class="fa fa-mail-reply me-2"></i>Reply</a>
                                        <div class="d-md-flex ms-auto my-auto">
                                            <span href="javascript:void(0)" class="me-2 mt-1">Recommended ?</span>
                                            <a href="#" class="me-2"><span class="btn btn-success btn-sm"><i class="fa fa-thumbs-o-up me-2"></i>Yes</span></a>
                                            <a href="#" class="me-2"><span class="btn btn-danger btn-sm"><i class="fa fa-thumbs-o-down me-2"></i>No</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Write Your Comments</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name1" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email Course address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Your Comment"></textarea>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
