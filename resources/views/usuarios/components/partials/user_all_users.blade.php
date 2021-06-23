<div class="tab-pane fade p-bottom-30" id="all_users" role="tabpanel" aria-labelledby="usuario">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="atbd_saved_items_wrapper">
                        <div class="atbd_content_module">
                            <div class="atbd_content_module__tittle_area">
                                <div class="atbd_area_title">
                                    <h4><span class="la la-list"></span>Todos los Usuarios</h4>
                                </div>
                            </div>
                            <div class="atbdb_content_module_contents">
                                <div class="table table-hover table-responsive">
                                    @if ($usuarios->isEmpty())
                                    <div>No hay registro de Usuarios</div>
                                    @else
                                    <table class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Opciones</th>
                                                <th>Usuario</th>
                                                <th>Correo</th>
                                                <th>Teléfono</th>
                                                <th>Type</th>
                                                <th>Estado</th>
                                                <th>Imagen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($usuarios as $usuario)
                                            @if($usuario->id != $user->id)
                                            <tr class="text-center">
                                                <td>
                                                    <button type="button"  data-toggle="modal" data-target="#User_update{{$usuario->id}}" class="btn btn-xs btn-warning la la-pencil"></button> <button type="button" class="btn btn-xs btn-danger la la-trash" data-toggle="modal" data-target="#User-remove{{$usuario->id}}"></button>
                                                </td>
                                                <td>{{$usuario->name}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->phone}}</td>
                                                <td>@if ($usuario->type == 'Free')
                                                        <span class="atbd_meta atbd_listing_rating">Free</span>
                                                    @else
                                                        <span class="atbd_meta atbd_badge_close">Premiun</span>
                                                    @endif
                                                <td>@if ($usuario->status == '1') 
                                                    <div class="atbd_listing_meta">
                                                        <button class="mx-auto atbd_meta atbd_listing_rating" type="button" data-toggle="modal" data-target="#Inactive_usuario{{$usuario->id}}" href="#">Activo</button>
                                                    </div>
                                                    @else
                                                    <div class="atbd_listing_meta">
                                                        <button class="mx-auto atbd_meta atbd_badge_close" type="button" data-toggle="modal" data-target="#Active_usuario{{$usuario->id}}" href="#">Inactivo</button>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td class="text-center" >
                                                    @foreach ($usuario->images as $image)
                                                    <img  widht="75" height="75" src="{{asset('storage/'.$image->url)}}" alt=""> 
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @include('usuarios.usuario_atributes.usuario_delete_modal')
                                            @include('usuarios.usuario_atributes.usuario_update_modal')
                                            @include('usuarios.usuario_atributes.inactive_modal')
                                            @include('usuarios.usuario_atributes.active_modal')
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div><!-- ends: .atbdb_content_module_contents -->
                        </div>
                    </div><!--  ends: .atbd_saved_items_wrapper -->
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </div><!-- ends: .tab-pane -->