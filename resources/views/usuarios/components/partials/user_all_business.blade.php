<div class="tab-pane fade p-bottom-30" id="all_business" role="tabpanel" aria-labelledby="empresa">
    <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="atbd_saved_items_wrapper">
                        <div class="atbd_content_module">
                            <div class="atbd_content_module__tittle_area">
                                <div class="atbd_area_title">
                                    <h4><span class="la la-list"></span>Todas las Empresas</h4>
                                </div>
                            </div>
                            <div class="atbdb_content_module_contents">
                                <div class="table table-hover table-responsive">
                                    @if ($negocios->isEmpty())
                                    <div>No hay registro de Empresas</div>
                                    @else
                                    <table class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Opciones</th>
                                                <th>Empresa</th>
                                                <th>Usuario</th>
                                                <th>Dirección</th>
                                                <th>Rubro</th>
                                                <th>Estado</th>
                                                <th>Imagen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($negocios as $negocio)
                                            <tr class="text-center">
                                                <td>
                                                    <button type="button"  data-toggle="modal" data-target="#Business_update{{$negocio->id}}" class="btn btn-xs btn-warning la la-pencil"></button> <button type="button" class="btn btn-xs btn-danger la la-trash" data-toggle="modal" data-target="#Business-remove{{$negocio->id}}"></button>
                                                </td>
                                                <td>{{$negocio->name}}</td>
                                                <td>{{$negocio->user->name}}</td>
                                                <td>@foreach($negocio->addresses as $dir)
                                                        {{$dir->street . " " . $dir->number . " - " . $dir->district . ", " . $dir->city->name}}</p>
                                                    @endforeach
                                                </td>
                                                <td>@foreach($negocio->categories as $cat)
                                                    {{$cat->name}}
                                                    @endforeach
                                                </td>
                                                <td>@if ($negocio->status == '1') 
                                                    <div class="atbd_listing_meta">
                                                        <button class="mx-auto atbd_meta atbd_listing_rating" type="button" data-toggle="modal" data-target="#Inactive_empresa{{$negocio->id}}" href="#">Activo</button>
                                                    </div>
                                                    @else
                                                    <div class="atbd_listing_meta">
                                                        <button class="mx-auto atbd_meta atbd_badge_close" type="button" data-toggle="modal" data-target="#Active_empresa{{$negocio->id}}" href="#">Inactivo</button>
                                                    </div>
                                                    @endif
                                                </td>
                                                <td class="text-center" >
                                                    @foreach ($negocio->images as $image)
                                                    <img  widht="75" height="75" src="{{asset('storage/'.$image->url)}}" alt=""> 
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @include('usuarios.empresa_atributes.business_delete_modal')
                                            @include('usuarios.empresa_atributes.business_update_modal')
                                            @include('usuarios.empresa_atributes.inactive_modal')
                                            @include('usuarios.empresa_atributes.active_modal')
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