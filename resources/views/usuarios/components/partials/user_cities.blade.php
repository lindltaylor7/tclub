<div class="tab-pane fade p-bottom-30" id="ciudad" role="tab-pane" aria-labelledby="ciudades">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_saved_items_wrapper">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-list"></span>Ciudades</h4>
                                <div class="nav_button">
                                    <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#RegisterCity_modal"><span class="la la-plus"></span>Agregar</a>
                                </div>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="table-responsive">
                                @if ($cities->isEmpty())
                                    <div>No hay registro de Ciudades</div>
                                @else
                                    <table class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Opciones</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Imagen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cities as $city)
                                            <tr class="text-center">
                                                <td>
                                                    <button href="#" type="button" class="btn btn-xs btn-warning la la-pencil" data-toggle="modal" data-target="#Update_city{{$city->id}}"></button> <button type="button" class="btn btn-xs btn-danger la la-trash" data-toggle="modal" data-target="#Delete_city{{$city->id}}" href="#"></button>
                                                </td>
                                                <td>{{ $city->name }}</td>
                                                <td>
                                                    @if ($city->status == '1') 
                                                        <div class="atbd_listing_meta">
                                                            <button class="mx-auto atbd_meta atbd_listing_rating" type="button" data-toggle="modal" data-target="#Inactive_modal{{$city->id}}" href="#">Activo</button>
                                                        </div>
                                                    @else
                                                        <div class="atbd_listing_meta">
                                                            <button class="mx-auto atbd_meta atbd_badge_close" type="button" data-toggle="modal" data-target="#Active_modal{{$city->id}}" href="#">Inactivo</button>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @foreach ($city->images as $image)
                                                    <img  widht="75" height="75" src="{{asset('storage/'.$image->url)}}" alt=""> 
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @include('usuarios.ciudad_atributes.edit_modal')
                                            @include('usuarios.ciudad_atributes.delete_modal')
                                            @include('usuarios.ciudad_atributes.inactive_modal')
                                            @include('usuarios.ciudad_atributes.active_modal')
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


@include('usuarios.ciudad_atributes.register_modal')