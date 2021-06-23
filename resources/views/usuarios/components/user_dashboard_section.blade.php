<section class="dashboard-wrapper section-bg p-bottom-70">
    <div class="dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-nav-area">
                        <ul class="nav" id="dashboard-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings" role="tab" aria-controls="listings" aria-selected="true">Mis Empresas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mi perfil de usuario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#favorite" role="tab" aria-controls="favorite" aria-selected="false">Mis Ofertas</a>
                            </li>
                            @can('edit.cities')
                            <li class="nav-item">
                                <a class="nav-link" id="ciudades" data-toggle="tab" href="#ciudad" role="tab" aria-controls="ciudad" aria-selected="false">Ciudades</a>
                            </li>
                            @endcan
                            @can('edit.rubros')
                            <li class="nav-item">
                                <a class="nav-link" id="categorias" data-toggle="tab" href="#category" role="category" aria-controls="categoria" aria-selected="false">Categorias</a>
                            </li>
                            @endcan
                            @can('edit.empresas')
                            <li class="nav-item">
                                <a class="nav-link" id="empresas" data-toggle="tab" href="#all_business" role="all_business" aria-controls="empresa" aria-selected="false">Empresas</a>
                            </li>
                            @endcan
                            @can('edit.usuarios')
                            <li class="nav-item">
                                <a class="nav-link" id="usuarios" data-toggle="tab" href="#all_users" role="all_usuarios" aria-controls="usuario" aria-selected="false">Usuarios</a>
                            </li>
                            @endcan

                            @if (session('actualizar_ciudad'))
                                <script>
                                    alert("Actualización Completa");
                                </script>
                            @endif
                            @if (session('borrar_ciudad'))
                                <script>
                                    alert("Borrado Completo");
                                </script>
                            @endif
                            @if (session('ActualizacionC'))
                                <script>
                                    alert("Actualización de rubro exitoso");
                                </script>
                            @endif
                            @if (session('EliminarC'))
                                <script>
                                    alert("Rubro eliminado con exito");
                                </script>
                            @endif
                            @if (session('actualizar_empresa'))
                                <script>
                                    alert("Actualización Completa");
                                </script>
                            @endif
                        </ul>
                        <div class="nav_button">
                            <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#Registerb_modal"><span class="la la-plus"></span>Agregar Empresa</a>
                            <form style="display: inline" action="{{route('logout')}}" method="POST">
                                @csrf
                                <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" onclick="this.closest('form').submit()">Log Out</a>
                            </form>

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
        @include('usuarios.components.partials.user_categories')
        @include('usuarios.components.partials.user_all_business')
        @include('usuarios.components.partials.user_all_users')
    </div>
</section>
@include('empresas.components.register_modal')

