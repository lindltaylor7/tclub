<div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="all-listings">
    <div class="container">
        <div class="row">
            @foreach ($businesses as $businesse)
            @if($businesse->status == 1)
            <div class="col-lg-4 col-sm-6">
                <div class="atbd_single_listing atbd_listing_card">
                    <article class="atbd_single_listing_wrapper ">
                        <figure class="atbd_listing_thumbnail_area">
                            <div class="atbd_listing_image">
                                @foreach ($businesse->images as $image)
                                <a href=""><img style="width: 350px; height: 220px; object-fit: cover;" src="{{asset('storage/'.$image->url)}}" alt="listing image"></a>
                                @endforeach
                            </div>
                            <figcaption class="atbd_thumbnail_overlay_content">
                                <div class="atbd_upper_badge">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Update_imagen{{$businesse->id}}">Cambiar Imagen</button>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="atbd_listing_info">
                            <div class="atbd_content_upper">
                                <div class="atbd_dashboard_tittle_metas">
                                    <h4 class="atbd_listing_title">
                                        <a href="{{route('empresa.show',$businesse->id)}}">{{$businesse->name}}</a>
                                    </h4>

                                @include('usuarios.empresa_atributes.business_addresses_modal')
                                @include('usuarios.empresa_atributes.business_offers_modal')
                                @include('usuarios.empresa_atributes.business_socials_modal')

                                </div><!-- ends: .atbd_dashboard_tittle_metas -->
                                <div class="atbd_card_action">
                                    <div class="atbd_listing_meta">
                                        <span class="atbd_meta atbd_listing_rating">5<i class="la la-star"></i></span>
                                    </div><!-- ends: .atbd listing meta -->
                                    <div class="db_btn_area">
                                        <div class="dropup edit_listing">
                                            <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atributos</a>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_addresses_modal{{$businesse->id}}"><span class="la la-edit color-primary"></span>Agregar Dirección</a>
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#edit_redsocial_update{{$businesse->id}}"><span class="la la-edit color-primary"></span>Agregar Redes Sociales</a>
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_offers_modal{{$businesse->id}}"><span class="la la-edit color-primary"></span>Agregar Ofertas</a>

                                            </div>
                                        </div>
                                        <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#BusinessRemove{{$businesse->id}}">Delete</a>
                                    </div>
                                    <!--ends .db_btn_area-->
                                </div>
                            </div><!-- end .atbd_content_upper -->
                            <div class="atbd_listing_info">
                                <div class="atbd_content_upper">
                                    <div class="atbd_listing_data_list">
                                        <ul>



                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    @foreach($businesse->addresses as $direccion)
                                                    <li>
                                                        <p><a  data-toggle="modal" data-target="#edit_address_modal{{$businesse->id}}"         ><span class="la la-map-marker"></span></a>{{$direccion->street . " " . $direccion->number . " - " . $direccion->district . ", " . $direccion->city->name}}</p>
                                                        </p>
                                                    </li>
                                                    @include('usuarios.empresa_atributes.edit_address_modal')
                                                    @endforeach

                                                    <li>
                                                        <p><a data-toggle="modal" data-target="#edit_redsocial_update{{$businesse->id}}" ><span class="la la-share"></span>Redes Sociales</a></li></p>


                                                        @isset($businesse->social->facebook_url)
                                                        <a href="{{$businesse->social->facebook_url}}" target="_blank" role="button" class="btn btn-sm btn-outline-info"  aria-haspopup="true"><li class="fab fa-facebook-f color-facebook"></li></a>
                                                        @endisset

                                                        @isset($businesse->social->youtube_url)
                                                        <a href="{{$businesse->social->youtube_url}}" target="_blank" role="button" class="btn btn-sm btn-outline-danger"  aria-haspopup="true"><li class="fab fa-youtube color-youtube"></li></a>
                                                        @endisset


                                                        @isset($businesse->social->instagram_url)
                                                        <a href="{{$businesse->social->instagram_url}}" target="_blank" role="button" class="btn btn-sm btn-outline-primary"  aria-haspopup="true"><li class="fab fa-instagram color-instagram"></li></a>
                                                        @endisset


                                                        @include('usuarios.empresa_atributes.edit_redsocial_modal')
                                                     </li>
                                                    <!--Ends social share-->
                                                    <li>
                                                        <p><span class="la la-phone"></span>{{$businesse->phone}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>{{$businesse->created_at}}</p>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </ul>
                                    </div><!-- End atbd listing meta -->
                                </div><!-- end .atbd_content_upper -->
                                <div class="atbd_listing_bottom_content">
                                    <div class="atbd_content_left">
                                        @foreach ($businesse->categories as $categor)
                                        @if($categor->status == 1)
                                        <div class="atbd_listing_category">
                                            <a href="{{route('rubro.show',$categor->id)}}"><span class="{{$categor->icon}}"></span>{{$categor->name}}</a>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                    <ul class="atbd_content_right">
                                        <li class="atbd_count"><span class="la la-eye"></span>{{$businesse->valorations->count()}}</li>
                                        <li class="atbd_save">
                                            <span class="la la-heart-o"></span>
                                        </li>
                                    </ul>
                                </div><!-- end .atbd_listing_bottom_content -->
                            </div><!-- ends: .atbd_listing_info -->
                        </div><!-- ends: .atbd_listing_info -->
                    </article>
                </div><!-- ends: .atbd_single_listing -->
            </div><!-- ends: .col-lg-4 -->

            @include('usuarios.empresa_atributes.business_addresses_modal')
            @include('usuarios.empresa_atributes.business_socials_modal')
            @include('usuarios.empresa_atributes.edit_imagen_modal')
            @include('usuarios.empresa_atributes.delete_modal')
           @endif
           @endforeach
        </div>
    </div>
</div><!-- ends: .tab-pane -->

