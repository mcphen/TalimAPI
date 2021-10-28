@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Bibliothèques'])
@endsection

@section('content')
    <section class="sptb position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5">
                    <h1 class="mb-4 font-weight-bold">Bibliothèques</h1>
                    <p class="leading-normal lead-1">Vous êtes à la recherche d’un livre ? Pas de panique veuillez remplir ce formulaire et nos
                        conseillers reviendront vers vous avec un devis.</p>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 col-xl-7 col-md-12 mx-auto">
                <div class="card mb-0 single-page customerpage contact">
                    <div class="card-body wrapper wrapper2 box-shadow-0">

                        <form id="" class="" tabindex="500">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="name">
                                        <label>Nom</label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="name">
                                        <label>Prenom</label>
                                        <input type="text" name="name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="mail">
                                        <label>Email</label>
                                        <input type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="name">
                                        <label>Tel</label>
                                        <input type="text" name="tel">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="mail">
                                        <label>Adresse</label>
                                        <input type="text" name="adresse">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="name">
                                        <label>Pays residence</label>
                                        <input type="text" name="pays">
                                    </div>
                                </div>
                            </div>


                            <div class="Message">
                                <label>Votre demande</label>
                                <textarea name="example-textarea-input" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class="submit">
                                <a href="javascript:void(0)" class="btn btn-primary">Soumettre</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>



@endsection
