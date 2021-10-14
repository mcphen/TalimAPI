@extends('layout.backend')

@section('content')
    <!-- Breadcrumb -->
    <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="{{route('agence.dashboard')}}">Tableau de bord</a></li>
            <li class="breadcrumb-item">Gestions Formations</li>
            <li class="breadcrumb-item">Listes Formations</li>

        </ol>
    </nav>
    <!-- /Breadcrumb -->

    <!-- Container -->
    <div class="container">
        <!-- Title -->
        <div class="hk-pg-header mb-10">
            <div>
                <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="user"></i></span></span>Liste formations</h4>
            </div>
        </div>




        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <formations></formations>
                </section>
            </div>
        </div>
    </div>
@endsection
