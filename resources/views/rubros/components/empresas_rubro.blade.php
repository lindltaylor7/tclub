<section class="listing-cards section-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Las Mejores Empresas del Perú</h2>
                    <p>Explora las mejores empresas en todas las ciudades del Perú</p>
                </div>
            </div>
            <div class="listing-cards-wrapper col-lg-12">
                <div class="row">
                    @foreach($empresas as $empresa)
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{asset('img/p1.jpg')}}" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{asset('img/author-thumb2.jpg')}}" alt="Author Image">
                                                <span class="custom-tooltip">{{$empresa->user->name}}</span>
                                            </a>
                                        </div>
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <a href="">{{$empresa->name}}</a>
                                            </h4>
                                            <div class="atbd_listing_meta">
                                                <span class="atbd_meta atbd_listing_rating">{{$empresa->valorations->avg('puntuation')}}<i class="la la-star"></i></span>
                                                <span class="atbd_meta atbd_badge_open">Abierto ahora</span>
                                            </div><!-- End atbd listing meta -->
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    @foreach($empresa->addresses as $direccion)
                                                    <li>
                                                        <p><span class="la la-map-marker"></span>{{$direccion->street . " " . $direccion->number . " - " . $direccion->district . ", " . $direccion->city->name}}</p>
                                                    </li>
                                                    @endforeach
                                                    <li>
                                                        <p><span class="la la-phone"></span>{{$empresa->phone}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>{{$empresa->created_at}}</p>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
                                        <div class="atbd_listing_bottom_content">
                                            <div class="atbd_content_left">
                                                @foreach ($empresa->categories as $categor)
                                                <div class="atbd_listing_category">
                                                    <a href=""><span class="la la-glass"></span>{{$categor->name}}</a>
                                                </div>
                                                @endforeach
                                            </div>
                                            <ul class="atbd_content_right">
                                                <li class="atbd_count"><span class="la la-eye"></span>{{$empresa->valorations->count()}}</li>
                                                <li class="atbd_save">
                                                    <span class="la la-heart-o"></span>
                                                </li>
                                            </ul>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                    @endforeach
                    <div class="col-lg-12 text-center m-top-20">
                        <a href="" class="btn btn-gradient btn-gradient-two">Ver Más</a>
                    </div>
                </div>
            </div><!-- ends: .listing-cards-wrapper -->
        </div>
    </div>
</section><!-- ends: .listing-cards -->