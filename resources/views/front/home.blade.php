@extends('layout.frontend')
@section('header')
    <!--Section-->
    <section class="sptb-2 sptb-tab">
        <div class="header-text mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 col-md-12">
                        <div class="text-white mb-7">
                            <a href="#" class="typewrite" data-period="2000" data-type='[ "Trouver votre formation" ]'>
                                <span class="wrap">Trouver votre formation</span>
                            </a>
                            <p class="fs-18">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration <br> in some form, by injected humour, or randomised words</p>
                        </div>
                        <div class="search-background bg-transparent typewrite-text">
                            <div class="row">
                                <div class="col-xl-10 col-lg-12 col-md-12">
                                    <div class="form row g-0 ">
                                        <div class="form-group col-xl-4 col-lg-3 col-md-12 select2-lg br-ts-7 br-bs-7 mb-0">
                                            <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                                                <optgroup label="Categories">
                                                    <option>Select filiere</option>
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
                                        <div class="form-group  col-xl-6 col-lg-6 col-md-12 mb-0">
                                            <input type="text" class="form-control input-xl br-0" placeholder="Search Formation...." data-min-length="1" list="courses" name="courses">
                                        </div>
                                        <div class="col-xl-2 col-lg-3 col-md-12 mb-0">
                                            <a href="javascript:void(0)" class="btn btn-xl btn-block btn-secondary br-ts-md-0 br-bs-md-0"><i class="fe fe-search"></i> Search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </section><!--/Section-->
@endsection
@section('content')

    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title d-md-flex">
                <div>
                    <h2>Nos Services</h2>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-light mt-3" href="javascript:void(0)"><i class="fe fe-arrow-right"></i> Voir plus</a>
                </div>
            </div>
            <div class="item-all-cat education-categories">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Pr??-inscription</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Nous vous aidons ?? faire le bon choix, parmi les nombreuses ??coles et universit??s existant en
                                    Afrique et en dehors du continent", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Bourses</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Nous travaillons en ??troite collaboration avec les universit??s et diff??rents organismes afin de vous
                                    obtenir des bourses d?????tudes pleines ou partiels.", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Stages</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Gr??ce ?? nos conventions sign??es avec diff??rentes entreprises, associations et institutions. Ces
                                    derniers nous octroient des offres de stages.", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Assistance de visa ??tudiant</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Une fois l???inscription obtenue, il vous faut donc pr??parer le voyage et cette pr??paration pour
                                    certains pays passe obligatoirement par l???obtention du visa.", 70, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Achat et R??servation de billet d???avion</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Dans le but de vous aider dans votre proc??dure pour une inscription ??
                                    l?????tranger.Nous avons
                                    sign??s une convention avec des agences de la place afin de vous garantir les
                                    meilleurs billets
                                    d???avion aux tarifs pr??f??rentiels.", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark mb-lg-0 item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">R??servation de logement ou H??tel</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Nous savons pertinemment que beaucoup d?????tudiant rencontre des difficult??s majeures dans la
                                    recherche du logement.", 70, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark mb-lg-0 item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Service d???orientation</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("L???accompagnement et l???orientation des lyc??ens dans leur projet d???orientation n??cessitent l???aide d???un
                                    conseiller d???orientation", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark mb-lg-0 item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Cours particuliers</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Nous mettons en place des cours particuliers pour les ??l??ves du lyc??e, et nous vous aidons ??
                                    pr??parer soigneusement votre ann??e scolaire,", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark mb-lg-0 item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Traduction</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("Nous mettons ?? votre disposition, un service de traduction multi langues avec des cabinets de
                                    traduction experts", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item-all-card text-dark item-hover-card p-6">
                            <a href="javascript:void(0)" class="absolute-link"></a>

                            <div class="item-all-text mt-3">
                                <h5 class="mb-0">Assurance Voyage</h5>
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit("L???assurance voyage vous permettra de vous couvrir contre les risques qui pourraient survenir
                                    durant votre s??jour ?? l?????tranger : accidents, maladies, d??c??s, pertes de bagages, etc???", 100, $end='...') }}</p>
                                <a class="btn-link" href="javascript:void(0)"><i class="fe fe-chevron-right"></i> Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-img">
                        <img src="../../assets/images/media/video.jpg" alt="img" class="cover-image br-7">
                        <a class="mt-6 d-block video-btn mx-auto" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#homeVideo"><i class="fa fa-play text-white"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video-section mt-8 ms-lg-5 pt-5">
                        <div class="">
                            <h2 class="mt-0 font-weight-bold">Qui sommes-nous? </h2>
                        </div>
                        <p class="lead leading-normal mt-4">TALIM est une start-up Tchadienne. Nous conseillons et orientions les ??tudiants et ??l??ves ?? travers
                            notre bureau de N???djamena et nos diff??rentes repr??sentations un peu partout en Afrique. Nous
                            aidons les ??tudiants qui veulent ??tudier ?? l?????tranger ?? avoir un projet professionnel coh??rent et
                            ad??quat. Nous savons que choisir une fili??re ou un m??tier n???est pas chose facile, c???est pourquoi
                            nous mettons tout en oeuvre pour accompagner les ??l??ves dans leur choix en proposant tous ces
                            services afin de faciliter la t??che aux ??l??ves et ??tudiants</p>
                        <a class="btn btn-primary text-white mt-3" href="javascript:void(0)"> <i class="fe fe-chevron-right"></i> Voir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--Section-->
    <section class="sptb bg-white">
        <div class="container">
            <div class="section-title">
                <h2>Actualites</h2>

            </div>
            <div class="row news">
                <div class="col-lg-4 col-md-12 col-xl-4">
                    <div class="card mb-xl-0 overflow-hidden">
                        <div class="item7-card-img">
                            <a href="{{route('front.news_detail','talim')}}"></a>
                            <img src="../../assets/images/media/0-5.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="card-body">
                            <a href="{{route('front.news_detail','talim')}}" class=""><h3 class="font-weight-semibold fs-16">Nemo enim ipsam voluptatem</h3></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xl-4">
                    <div class="card mb-xl-0 overflow-hidden">
                        <div class="item7-card-img">
                            <a href="{{route('front.news_detail','talim')}}"></a>
                            <img src="../../assets/images/media/0-6.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="card-body">
                            <a href="{{route('front.news_detail','talim')}}" class=""><h3 class="font-weight-semibold fs-18">Sed ut perspiciatis unde iste</h3></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-xl-4">
                    <div class="card mb-0 overflow-hidden">
                        <div class="item7-card-img">
                            <a href="{{route('front.news_detail','talim')}}"></a>
                            <img src="../../assets/images/media/0-9.jpg" alt="img" class="cover-image">
                        </div>
                        <div class="card-body">
                            <a href="{{route('front.news_detail','talim')}}" class=""><h3 class="font-weight-semibold fs-18">At vero eos et accusamus et iusto</h3></a>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Section-->


@endsection
