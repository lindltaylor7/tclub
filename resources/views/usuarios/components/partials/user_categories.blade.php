<div class="tab-pane fade p-bottom-30" id="category" role="tabpanel" aria-labelledby="faborite-listings">
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_saved_items_wrapper">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-list"></span>Rubros</h4>
                                <div class="nav_button">
                                    <a href="#" class="btn btn-xs btn-gradient btn-gradient-two" data-toggle="modal" data-target="#addCategory_modal"><span class="la la-plus"></span>Agregar</a>
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
                                            <th>Icono</th>
                                            <th>Estado</th>
                                            <th>Imagen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categorias as $categoria)
                                        <tr class="text-center">
                                            <td>
                                                @if ($categoria->status == '1') 
                                                <button type="button"  data-toggle="modal" data-target="#Category_update{{$categoria->id}}" class="btn btn-warning la la-pencil"></button> <button type="button" class="btn btn-danger la la-trash" data-toggle="modal" data-target="#Category-remove{{$categoria->id}}"></button>
                                                @else
                                                <button type="button"  data-toggle="modal" data-target="#Category_update{{$categoria->id}}" class="btn btn-warning la la-pencil"></button> <button type="button" class="btn btn-info la la-check" data-toggle="modal" data-target="#Category-remove{{$categoria->id}}"></button>
                                                @endif
                                            </td>
                                            <td>{!! $categoria->name !!}</td>
                                            <td><span class="{{$categoria->icon}}"></span></td>
                                            
                                            <td>@if ($categoria->status == '1') 
                                                <div class="atbd_listing_meta">
                                                    <span class="atbd_meta atbd_listing_rating mx-auto">Activo</span>
                                                </div>
                                                @else
                                                <div class="atbd_listing_meta">
                                                    <span class="atbd_meta atbd_badge_close mx-auto">Inactivo</span>
                                                </div>
                                                @endif
                                            </td>
                                            <td class="text-center" >
                                                @foreach ($categoria->images as $image)
                                                <img  widht="75" height="75" src="{{asset('storage/'.$image->url)}}" alt=""> 
                                                @endforeach                                    
                                            </td>
                                        </tr>
                                        @include('usuarios.rubro_atributes.rubro_delete_modal')
                                        @include('usuarios.rubro_atributes.rubro_update_modal')
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
@include('usuarios.rubro_atributes.category_modal_register')
