<div class="tab-pane fade p-bottom-30" id="ofertas" role="tabpanel" aria-labelledby="faborite-listings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_saved_items_wrapper">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-list"></span>Ofertas de mis Empresas</h4>
                                <div class="nav_button">
                                    <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#addOferta_modal"><span class="la la-plus"></span>Agregar Oferta</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="table table-hover table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Opciones</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Fecha-inicio</th>
                                            <th>Fecha-fin</th>
                                            <th>Estado</th>
                                            <th>Empresa</th>
                                            <th>Imagen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ofertas as $oferta)
                                        <tr class="text-center">
                                            <td>
                                                @if ($oferta->status == '1') 
                                                <button type="button"  data-toggle="modal" data-target="#Category_update{{$oferta->id}}" class="btn btn-warning la la-pencil"></button> <button type="button" class="btn btn-danger la la-trash" data-toggle="modal" data-target="#Oferta-remove{{$oferta->id}}"></button>
                                                @else
                                                <button type="button"  data-toggle="modal" data-target="#Category_update{{$oferta->id}}" class="btn btn-warning la la-pencil"></button> <button type="button" class="btn btn-info la la-check" data-toggle="modal" data-target="#Oferta-remove{{$oferta->id}}"></button>
                                                @endif
                                            </td>
                                            <td>{!! $oferta->name !!}</td>
                                            <td>{!! $oferta->description !!}</td>
                                            <td>{!! $oferta->price !!}</td>   
                                            <td>{!! $oferta->start_date !!}</td>   
                                            <td>{!! $oferta->end_date!!}</td>                                            
                                            <td>@if ($oferta->status == '1') 
                                                <div class="atbd_listing_meta">
                                                    <span class="atbd_meta atbd_listing_rating mx-auto">Activo</span>
                                                </div>
                                                @else
                                                <div class="atbd_listing_meta">
                                                    <span class="atbd_meta atbd_badge_close mx-auto">Inactivo</span>
                                                </div>
                                                @endif
                                            </td> 
                                            <td>{!! $oferta->business_id!!}</td>   
                                            <td>{!! $oferta->business_id!!}</td>   
                                                                                     
                                        </tr>
                                        @include('usuarios.oferta_atributes.oferta_delete_modal')
                                        @include('usuarios.oferta_atributes.oferta_update_modal')
                                    @endforeach                               
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div>
                </div><!--  ends: .atbd_saved_items_wrapper -->
            </div><!-- ends: .col-lg-12 -->
        </div>
    </div>    
</div><!-- ends: .tab-pane -->
@include('usuarios.oferta_atributes.oferta_modal_register')

