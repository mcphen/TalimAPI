<template>

    <section class="sptb bg-white" id="formation_id">
        <div class="container">
            <div class="section-title d-md-flex">
                <div>
                    <h2>Latest Classes</h2>
                    <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <div class="ms-auto">
                    <a class="btn btn-light mt-3" href="javascript:void(0)"><i class="fe fe-arrow-right"></i> View More</a>
                </div>
            </div>

            <VueSlickCarousel v-bind="settings">
                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="card mb-0">
                        <div class="item-card7-img">
                            <div class="item-card7-imgs br-bs-0 br-be-0">
                                <a href="page-details.html"></a>
                                <img :src="'/assets/images/media/2.jpg'" alt="img" class="cover-image">
                                <div class="item-tag">
                                    <h4  class="mb-0">$398.99</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="item-card7-desc">
                                <div class="item-card7-text mb-3">
                                    <a href="page-details.html" class="text-dark"><h4 class="mb-2">Coding Classes</h4></a>
                                </div>
                                <p class="mb-1">At vero eos et accusamus et iusto odio dignissimos ducimus </p>
                                <div class="d-flex mb-0">
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
                                    </div>
                                    <span class="">875 reviews</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <a href="javascript:void(0)" class="icons mt-1"><i class="fe fe-clock me-1"></i> 22h 33m class</a>
                                <div class="ms-auto d-flex">
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-heart"></i></a>
                                    <a class="viewmore-btn-icon mx-1" href="javascript:void(0)"><i class="fe fe-share-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </VueSlickCarousel>


        </div>
    </section>


</template>

<script>
export default {
    name: "Formation",
    data(){
        return{
            settings:{
                "dots": true,
                "focusOnSelect": true,
                "infinite": true,
                "speed": 500,
                "slidesToShow": 3,
                "slidesToScroll": 3,
                "touchThreshold": 5
            },
            livres :[]
        }
    },
}
</script>

<style scoped>
#formation_id{
    height: fit-content;
}

.item{
    padding: 10px;
}
</style>
