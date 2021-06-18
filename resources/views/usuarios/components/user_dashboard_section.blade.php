<section class="dashboard-wrapper section-bg p-bottom-70">
    <div class="dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-nav-area">
                        <ul class="nav" id="dashboard-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings" role="tab" aria-controls="listings" aria-selected="true">Mis empresas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mi perfil de usuario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#favorite" role="tab" aria-controls="favorite" aria-selected="false">Mis actividades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#city" role="tab" aria-controls="city" aria-selected="false">Ciudades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#category" role="tab" aria-controls="category" aria-selected="false">Categorias</a>
                            </li>
                        </ul>
                        <div class="nav_button">
                            <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#Registerb_modal"><span class="la la-plus"></span>Agregar</a>
                            <a href="" class="btn btn-xs btn-gradient btn-gradient-two">Log Out</a>
                        </div>
                    </div>
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </div><!-- ends: .dashboard-nav -->
    <div class="tab-content p-top-100" id="dashboard-tabs-content">
        @include('usuarios.components.partials.user_business')
        @include('usuarios.components.partials.user_profile')
        @include('usuarios.components.partials.user_activities')
        @include('usuarios.components.partials.user_cities')
    </div>
</section>
@include('empresas.components.register_modal')