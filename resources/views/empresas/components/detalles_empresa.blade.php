<section class="directory_listiing_detail_area single_area section-bg section-padding-strict">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="atbd_content_module atbd_listing_details">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-file-text-o"></span>Descripción</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <p>{{$unico->description}}</p>
                    </div>
                </div><!-- ends: .atbd_content_module --> 
                <div class="atbd_content_module atbd_offer_contents">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-file-text-o"></span>Ofertas</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div class="row">
                        @foreach($ofertas as $oferta)
                        @if ($oferta->status == 1)
                        <div class="col-lg-6 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="#">
                                                @foreach ($oferta->images as $image)
                                                    <img style="width: 318px; height: 200px;" src="{{asset('storage/'.$image->url)}}" alt="listing image">
                                                @endforeach
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <a href="#">{{$oferta->name}}</a>
                                            </h4>
                                            <div class="atbd_listing_meta">
                                                <span class="atbd_meta atbd_listing_price">S/.{{$oferta->price}}</span>
                                            </div>
                                            <div>
                                                <p>{{$oferta->description}}</p>
                                            </div>
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>Fecha Inicial: {{$oferta->start_date}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>Fecha Final: {{$oferta->end_date}}</p>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                        @endif
                        @endforeach
                    </div>
                    </div>
                </div><!-- ends: .atbd_content_module -->
                <div class="atbd_content_module atbd_listing_gallery">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-image"></span>Galería de Imágenes</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div class="gallery-wrapper">
                            <div class="gallery-images">
                                @foreach ($offers as $offer)
                                    <div class="single-image">
                                        @foreach ($offer->images as $image)
                                            <img style="width: 670px; height: 410px;" src="{{asset('storage/'.$image->url)}}" alt="listing image">
                                        @endforeach
                                    </div>
                                @endforeach
                            </div><!-- ends: .gallery-images -->
                            <div class="gallery-thumbs">
                                @foreach ($offers as $offer)
                                    <div class="single-thumb">
                                        @foreach ($offer->images as $image)
                                            <img style="width: 126px; height: 100px;" src="{{asset('storage/'.$image->url)}}" alt="listing image">
                                        @endforeach   
                                    </div>
                                @endforeach
                            </div><!-- ends: .gallery-thumbs -->
                        </div><!-- ends: .gallery-wrapper -->
                    </div>
                </div><!-- ends: .atbd_content_module -->
                
                
            </div>
            <div class="col-lg-4 mt-5 mt-lg-0">
                <div class="atbd_content_module atbd_contact_information_module">
                    <div class="atbd_content_module__tittle_area">
                        <div class="atbd_area_title">
                            <h4><span class="la la-headphones"></span>Información de Contacto</h4>
                        </div>
                    </div>
                    <div class="atbdb_content_module_contents">
                        <div class="atbd_contact_info">
                            <ul>
                                @foreach($unico->addresses as $direccion)
                                <li>
                                    <div class="atbd_info_title"><span class="la la-map-marker"></span>Dirección:</div>
                                    <div class="atbd_info">{{$direccion->street . " " . $direccion->number . " - " . $direccion->district . ", " . $direccion->city->name}}</div>
                                </li>
                                @endforeach
                                <li>
                                    <div class="atbd_info_title"><span class="la la-phone"></span>Teléfono:</div>
                                    <div class="atbd_info">{{$unico->phone}}</div>
                                </li>
                                <li>
                                    <div class="atbd_info_title"><span class="la la-envelope"></span>Correo:</div>
                                    <span class="atbd_info">{{$unico->user->email}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="atbd_director_social_wrap">
                            @if ($unico->social)
                            <a target="_blank" href="{{$unico->social->facebook_url}}"><span class="fab fa-facebook-f"></span></a>
                            <a target="_blank" href="{{$unico->social->instagram_url}}"><span class="fab fa-instagram"></span></a>
                            <a target="_blank" href="{{$unico->social->youtube_url}}"><span class="fab fa-youtube"></span></a>
                            @endif

                        </div>
                    </div>
                </div><!-- ends: .atbd_content_module -->
                <div class="widget atbd_widget widget-card">
                    <div class="atbd_widget_title">
                        <h4><span class="la la-bookmark"></span> Categorias</h4>
                    </div><!-- ends: /.atbd_widget_title -->
                    <div class="widget-body atbdp-widget-categories">
                        <ul class="atbdp_parent_category">
                            @foreach ($categorias as $categoria)
                            @if($categoria->status == 1)
                                <li>
                                    <a href="{{route('rubro.show',$categoria->id)}}"><span class="{{$categoria->icon}}"></span>{{$categoria->name}}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div><!-- ends: .atbdp -->
                </div><!-- ends: .widget -->
                <div class="widget atbd_widget widget-card">
                    <div class="atbd_widget_title">
                        <h4><span class="la la-list-alt"></span> Empresas Similares</h4>
                        <a href="{{route('empresa.index')}}">Ver todas</a>
                    </div><!-- ends: .atbd_widget_title -->
                    <div class="atbd_categorized_listings atbd_similar_listings">
                        <ul class="listings">
                            @foreach($empresas as $empresa)
                                @foreach ($empresa->categories as $categor)
                                    @if($categor->name == $cat->name && $empresa->name != $unico->name && $empresa->status == 1)
                                        <li>
                                            <div class="atbd_left_img">
                                                <a href=""><img src="{{asset('img/escuela.png')}}" alt="listing image"></a>
                                            </div>
                                            <div class="atbd_right_content">
                                                <div class="cate_title">
                                                    <h4><a href="{{route('empresa.show',$empresa->id)}}">{{$empresa->name}}</a></h4>
                                                </div>
                                                <p class="directory_tag">
                                                    <span class="{{$categor->icon}}" aria-hidden="true"></span>
                                                    <span>
                                                        <a href="{{route('rubro.show',$categor->id)}}">{{$categor->name}}</a>
                                                    </span>
                                                </p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div> <!-- ends .atbd_similar_listings -->
                </div><!-- ends: .widget -->
            </div>
        </div>
    </div>
</section><!-- ends: .directory_listiing_detail_area -->
