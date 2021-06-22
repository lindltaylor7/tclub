<div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="all-listings">
    <div class="container">

        <div class="row">
            @foreach ($businesses as $businesse)
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
                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                    </div><!-- ends: .atbd listing meta -->
                                    <div class="db_btn_area">
                                        <div class="dropup edit_listing">
                                            <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atributos</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_addresses_modal"><span class="la la-edit color-primary"></span>Agregar Dirección</a>
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_socials_modal"><span class="la la-edit color-primary"></span>Agregar Redes Sociales</a>
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_offers_modal{{$businesse->id}}"><span class="la la-edit color-primary"></span>Agregar Ofertas</a>
                                            </div>
                                        </div>
                                        <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#BusinessRemove{{$businesse->id}}">Delete</a>
                                    </div>
                                    <!--ends .db_btn_area-->
                                </div>
                            </div><!-- end .atbd_content_upper -->
                            <div class="atbd_listing_bottom_content">
                                <div class="listing-meta">
                                    <p><span>Plan Name:</span> Basic Plan</p>
                                    <p><span>Expiration:</span> February 13, 2020</p>
                                    <p><span>Listing Status:</span> Published</p>
                                </div>
                            </div><!-- end .atbd_listing_bottom_content -->
                        </div><!-- ends: .atbd_listing_info -->
                    </article>
                </div><!-- ends: .atbd_single_listing -->

            </div><!-- ends: .col-lg-4 -->
            @include('usuarios.empresa_atributes.edit_imagen_modal')
            @include('usuarios.empresa_atributes.delete_modal')
           @endforeach

        </div>
    </div>
</div><!-- ends: .tab-pane -->

