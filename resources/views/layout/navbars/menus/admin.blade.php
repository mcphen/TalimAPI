<nav class="hk-nav hk-nav-light">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar" style="background-color:rgb(18, 27, 81) !important">
        <div class="navbar-nav-wrap">


            <ul class="navbar-nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.dashboard')}}" >
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Tableau de bord</span>
                    </a>

                </li>
            </ul>
            <hr class="nav-separator">
            <div class="nav-header">
                <span>Agences</span>
                <span>GA</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.agences')}}">
                        <span class="feather-icon"><i data-feather="settings"></i></span>
                        <span class="nav-link-text">Gestions des agences</span>
                    </a>

                </li>






            </ul>


            <hr class="nav-separator">
            <div class="nav-header">
                <span>PARAMETRAGE</span>
                <span>UI</span>
            </div>
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#pages_drp">
                        <span class="feather-icon"><i data-feather="settings"></i></span>
                        <span class="nav-link-text">Parametrage</span>
                    </a>
                    <ul id="pages_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.filieres')}}">Filieres</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.niveaux')}}">Niveaux</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.cycles')}}">Cycles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.pays')}}">Pays</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.villes')}}">Villes</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.services')}}">Services</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.roles')}}">Role</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>






            </ul>








        </div>
    </div>
</nav>
