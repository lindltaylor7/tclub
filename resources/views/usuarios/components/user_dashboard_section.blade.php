<section class="dashboard-wrapper section-bg p-bottom-70">
    <div class="dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-nav-area">
                        <ul class="nav" id="dashboard-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings"
                                    role="tab" aria-controls="listings" aria-selected="true">Mis Empresas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Mi perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#favorite" role="tab"
                                    aria-controls="favorite" aria-selected="false">Mis Ofertas</a>
                            </li>
                            @can('edit.cities')
                            <li class="nav-item">
                                <a class="nav-link" id="ciudades" data-toggle="tab" href="#ciudad" role="tab"
                                    aria-controls="ciudad" aria-selected="false">Ciudades</a>
                            </li>
                            @endcan
                            @can('edit.rubros')
                            <li class="nav-item">
                                <a class="nav-link" id="categorias" data-toggle="tab" href="#category" role="category"
                                    aria-controls="categoria" aria-selected="false">Rubros</a>
                            </li>
                            @endcan
                            @can('edit.empresas')
                            <li class="nav-item">
                                <a class="nav-link" id="empresas" data-toggle="tab" href="#all_business"
                                    role="all_business" aria-controls="empresa" aria-selected="false">Empresas</a>
                            </li>
                            @endcan
                            @can('edit.ofertas_usuario')
                            <li class="nav-item">
                                <a class="nav-link" id="ofertas_usuario" data-toggle="tab" href="#offers_user"
                                    role="offers_user" aria-controls="ofertas" aria-selected="false">Ofertas</a>
                            </li>
                            @endcan
                            @can('edit.usuarios')
                            <li class="nav-item">
                                <a class="nav-link" id="usuarios" data-toggle="tab" href="#all_users"
                                    role="all_usuarios" aria-controls="usuario" aria-selected="false">Usuarios</a>
                            </li>
                            @endcan


                            @if (session('crear_ciudad'))
                            <script>
                                alert("Ciudad creada con éxito");
                                $(function () {
                                    $('#ciudades').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('actualizar_ciudad'))
                            <script>
                                alert("Ciudad actualziada con éxito");
                                $(function () {
                                    $('#ciudades').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('borrar_ciudad'))
                            <script>
                                alert("Ciudad eliminada con éxito")
                                $(function () {
                                    $('#ciudades').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('Activar_ciudad'))
                            <script>
                                alert("Ciudad activada con éxito")
                                $(function () {
                                    $('#ciudades').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('Desactivar_ciudad'))
                            <script>
                                alert("Ciudad desactivada con éxito")
                                $(function () {
                                    $('#ciudades').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('AgregarC'))
                            <script>
                                alert("Rubro creado con éxito")
                                $(function () {
                                    $('#categorias').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('ActualizacionC'))
                            <script>
                                alert("Rubro acualidado con éxito")
                                $(function () {
                                    $('#categorias').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('EliminarC'))
                            <script>
                                alert("Rubro eliminado con éxito")
                                $(function () {
                                    $('#categorias').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('ActivarC'))
                            <script>
                                alert("Rubro activado con éxito")
                                $(function () {
                                    $('#categorias').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('DesactivarC'))
                            <script>
                                alert("Rubro descativado con éxito")
                                $(function () {
                                    $('#categorias').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('AgregarO'))
                            <script>
                                alert("Oferta creada con éxito")
                                $(function () {
                                    $('#faborite-listings').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('ActualizarO'))
                            <script>
                                alert("Oferta actializada con éxito")
                                $(function () {
                                    $('#faborite-listings').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('EliminarO'))
                            <script>
                                alert("Oferta eliminada con éxito")
                                $(function () {
                                    $('#faborite-listings').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('ActivarO'))
                            <script>
                                alert("Oferta activada con éxito")
                                $(function () {
                                    $('#faborite-listings').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('DesactivarO'))
                            <script>
                                alert("Oferta desactivada con éxito")
                                $(function () {
                                    $('#faborite-listings').tab('show')
                                })
                            </script>
                            @endif

                           

                            @if (session('ActualizarOAdmin'))
                            <script>
                                alert("Oferta actializada con éxito")
                                $(function () {
                                    $('#ofertas_usuario').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('EliminarOAdmin'))
                            <script>
                                alert("Oferta eliminada con éxito")
                                $(function () {
                                    $('#ofertas_usuario').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('ActivarOAdmin'))
                            <script>
                                alert("Oferta activada con éxito")
                                $(function () {
                                    $('#ofertas_usuario').tab('show')
                                })
                            </script>
                            @endif
                            @if (session('DesactivarOAdmin'))
                            <script>
                                alert("Oferta desactivada con éxito")
                                $(function () {
                                    $('#ofertas_usuario').tab('show')
                                })
                            </script>
                            @endif


                            @if (session('ActualizarUsuario'))
                            <script>
                                alert("Perfil Actualizado con éxito")
                                $(function () {
                                    $('#profile-tab').tab('show')
                                })
                            </script>
                            @endif


                            @if (session('ActualizarUsuario_admin'))
                            <script>
                                alert("Usuario Actualizado con éxito")
                                $(function () {
                                    $('#usuarios').tab('show')
                                })
                            </script>
                            @endif

                            @if (session('borrar_usuario'))
                            <script>
                                alert("Perfil Actualizado con éxito")
                                $(function () {
                                    $('#usuarios').tab('show')
                                })
                            </script>
                            @endif


                            @if (session('ActivarUsuario'))
                            <script>
                                alert("Usuario Activado con éxito")
                                $(function () {
                                    $('#usuarios').tab('show')
                                })
                            </script>
                            @endif @if (session('DesactivarUsuario'))
                            <script>
                                alert("Usuario desactivado con éxito")
                                $(function () {
                                    $('#usuarios').tab('show')
                                })
                            </script>
                            @endif



                            @if (session('borrar_empresa_admin'))
                            <script>
                                alert("Empresa Eliminada con éxito")
                                $(function () {
                                    $('#empresas').tab('show')
                                })
                            </script>
                            @endif 
                            @if (session('actualizar_empresa_admin'))
                            <script>
                                alert("Empresa Actualizada con éxito")
                                $(function () {
                                    $('#empresas').tab('show')
                                })
                            </script>
                            @endif 

                            @if (session('ActivarEmpresa'))
                            <script>
                                alert("Empresa Activada con éxito")
                                $(function () {
                                    $('#empresas').tab('show')
                                })
                            </script>
                            @endif 
                            
                            @if (session('DesactivarEmpresa'))
                            <script>
                                alert("Empresa desactivada con éxito")
                                $(function () {
                                    $('#empresas').tab('show')
                                })
                            </script>
                            @endif














                            
                        </ul>
                        <div class="nav_button">
                            <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal"
                                data-target="#Registerb_modal"><span class="la la-plus"></span>Agregar Empresa</a>
                            <form style="display: inline" action="{{route('logout')}}" method="POST">
                                @csrf
                                <a href="#" class="btn btn-xs btn-gradient btn-gradient-two"
                                    onclick="this.closest('form').submit()">Log Out</a>
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
        @include('usuarios.components.partials.ofertas_usuario')
    </div>
</section>
@include('empresas.components.register_modal')
