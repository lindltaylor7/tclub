<div class="tab-pane fade p-bottom-30" id="favorite" role="tabpanel" aria-labelledby="faborite-listings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_saved_items_wrapper">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-list"></span>Mis Ofertas</h4>
                                
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="table-responsive">
                                @if ($offers->isEmpty())
                                    <div>No hay registro de Ofertas</div>
                                @else
                                    <table class="table">
                                        <thead>
                                            <tr class="text-center">
                                                <th scope="col">Opciones</th>
                                                <th scope="col">Oferta</th>
                                                <th scope="col">Empresa</th>
                                                <th scope="col">Descripción</th>
                                                <th scope="col">Fecha Inicial</th>
                                                <th scope="col">Fecha Final</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Imagen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($offers as $offer)
                                            <tr class="text-center">
                                                <td>
                                                    <button href="#" type="button" class="btn btn-xs btn-warning la la-pencil" data-toggle="modal" data-target="#Update_modal{{$offer->id}}"></button> <button type="button" class="btn btn-xs btn-danger la la-trash" data-toggle="modal" data-target="#Delete_modal{{$offer->id}}" href="#"></button>
                                                </td>
                                                <td>{{ $offer->name }}</td>
                                                <td>{{ $offer->business->name }}</td>
                                                <td>{{ $offer->description }}</td>
                                                <td>{{ $offer->start_date }}</td>
                                                <td>{{ $offer->end_date }}</td>
                                                <td>
                                                    @if ($offer->status == '1') 
                                                        <div class="atbd_listing_meta">
                                                            <button class="mx-auto atbd_meta atbd_listing_rating" type="button" data-toggle="modal" data-target="#Inactive_oferta{{$offer->id}}" href="#">Activo</button>
                                                        </div>
                                                    @else
                                                        <div class="atbd_listing_meta">
                                                            <button class="mx-auto atbd_meta atbd_badge_close" type="button" data-toggle="modal" data-target="#Active_oferta{{$offer->id}}" href="#">Inactivo</button>
                                                        </div>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @foreach ($offer->images as $image)
                                                    <img  widht="75px" height="75px" src="{{asset('storage/'.$image->url)}}" alt=""> 
                                                    @endforeach
                                                </td>
                                            </tr>
                                            @include('usuarios.oferta_atributes.edit_modal')
                                            @include('usuarios.oferta_atributes.delete_modal')
                                            @include('usuarios.oferta_atributes.inactive_modal')
                                        @include('usuarios.oferta_atributes.active_modal')
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
