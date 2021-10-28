@extends('layout.frontend')
@section('header')
    @include('layout.headers.header_front',['name'=>'Devenir TALIM'])
@endsection

@section('content')
    <section class="sptb position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center mb-5">
                    <h1 class="mb-4 font-weight-bold">Devenir TALIM</h1>

                    <p class="leading-normal  fs-16">
                        Devenir représentant de TALIM, vous permet de représenter officiellement l’entreprise dans le
                        pays dans lequel vous êtes. Vous aurez pour mission de communiquer pour le compte de
                        l’entreprise, assurer la promotion des services auprès des lycéens, étudiants et divers partenaires.
                        Faire de la prospection, la planification et la prise de rendez-vous avec des étudiants et
                        professionnels.
                    </p>

                    <p class="leading-normal  fs-16">
                        Ce rôle est avant tout flexibilité avec vos études et vous garanti une indépendance financière.
                        Vous travaillez à temps partiel et à votre rythme tout en remplissant les objectifs fixés par
                        l’entreprise.
                    </p>

                    <p class="leading-normal  fs-16">
                        Vous serez entièrement formés, que ce soit aux techniques de vente ou de communication, mais
                        aussi aux besoins et consignes spécifiques de TALIM
                    </p>

                    <p class="leading-normal  fs-16">
                        Enfin, la rémunération se fait uniquement sur commission, ce qui veut dire que plus vous avez de
                        succès auprès des lycéens, étudiants, et formations supérieurs… plus vos revenus seront importants
                        et sans limites. Néanmoins, vous devez aimer être en contact avec les gens, être optimiste et
                        patient(e) avoir envie d’apprendre être sérieux, rigoureux et surtout être organisé(e) dans la
                        gestion du travail.
                    </p>

                </div>

            </div>
        </div>
        <div class="container">
            <div class="col-lg-12 col-xl-12 col-md-12 mx-auto">
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
