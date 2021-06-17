<div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="all-listings">
    <div class="container">
     
        <div class="row">
            @foreach ($businesses as $businesse)
            <div class="col-lg-4 col-sm-6">
                <div class="atbd_single_listing atbd_listing_card">
                    <article class="atbd_single_listing_wrapper ">
                        <figure class="atbd_listing_thumbnail_area">
                            <div class="atbd_listing_image">
                                <a href=""><img src="img/p1.jpg" alt="listing image"></a>
                            </div>
                            <figcaption class="atbd_thumbnail_overlay_content">
                                <div class="atbd_upper_badge">
                                    <span class="atbd_badge atbd_badge_featured">Featured</span>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="atbd_listing_info">
                            <div class="atbd_content_upper">
                                <div class="atbd_dashboard_tittle_metas">
                                    <h4 class="atbd_listing_title">
                                        <a href="">{{$businesse->name}}</a>
                                        <a href="">{{$businesse->id}}</a>
                                    </h4>
                                
                                @include('empresa.empresa_atributes.business_addresses_modal')
                                @include('empresa.empresa_atributes.business_images_modal')
                                @include('empresa.empresa_atributes.business_offers_modal')
                                @include('empresa.empresa_atributes.business_socials_modal')
                               
                                   
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
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_images_modal" ><span class="la la-edit color-primary"></span>Agregar Imagenes de Empresa</a>
                                                <a class="dropdown-item" href="" data-toggle="modal"  data-target="#business_offers_modal"><span class="la la-edit color-primary"></span>Agregar Ofertas</a>
                                            </div>
                                        </div>
                                        <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                                    </div>
                                    <!--ends .db_btn_area-->
                                </div>
                            </div><!-- end .atbd_content_upper -->
                            <div class="atbd_listing_bottom_content">
                                <div class="listing-meta">
                                    <p><span>Plan Name:</span> Basic Plan</p>
                                    <p><span>Expiration:</span> February 13, 2020</p>
                                    <p><span>Listing Status:</span> Published</p>
                                /<div>
                            </div><!-- end .atbd_listing_bottom_content -->
                        </div><!-- ends: .atbd_listing_info -->
                    </article>
                </div><!-- ends: .atbd_single_listing -->
               
            </div><!-- ends: .col-lg-4 -->   
           @endforeach
           
        </div>
    </div>
</div><!-- ends: .tab-pane -->

<!-- Modal -->
<div class="modal fade" id="modal-item-remove" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center p-top-40 p-bottom-50">
                <span class="la la-exclamation-circle color-warning"></span>
                <h1 class="display-3 m-bottom-10">Estas seguro?</h1>
                <p class="m-bottom-30">Deseas eliminar esta empresa?</p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary m-right-15" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Yes, Delete it!</button>
                </div>
            </div>
        </div>
    </div>
</div>

