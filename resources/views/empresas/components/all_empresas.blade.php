<section class="all-listing-wrapper section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="atbd_generic_header">
                    <div class="atbd_generic_header_title">
                        <h4>Todas las empresas</h4>
                        <p>Total de empresas encontradas: {{$empresas->count()}}</p>
                    </div><!-- ends: .atbd_generic_header_title -->
                    <div class="atbd_listing_action_btn btn-toolbar align-items-center" role="toolbar">
                        <!-- Orderby dropdown -->
                        <div class="dropdown">
                            <a class="action-btn dropdown-toggle" href="" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ordenar por <span class="caret"></span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                <a class="dropdown-item" href="">A to Z ( título )</a>
                                <a class="dropdown-item" href="">Z to A ( título )</a>
                                <a class="dropdown-item active" href="">Más recientes</a>
                                <a class="dropdown-item" href="">Más antiguos</a>
                            </div>
                        </div>
                    </div><!-- ends: .atbd_listing_action_btn -->
                </div><!-- ends: .atbd_generic_header -->
            </div><!-- ends: .col-lg-12 -->
            <div class="col-lg-12 listing-items">
                <div class="row">
                    <div class="col-lg-4 order-1 order-lg-0 mt-5 mt-lg-0">
                        <div class="listings-sidebar">
                            <div class="search-area default-ad-search">
                                <form action="{{route('mostrar')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input name="search" type="text" placeholder="Buscar..." class="form-control">
                                    </div><!-- ends: .form-group -->
                                    <div class="form-group">
                                        <label for="rubro">Seleccione rubro</label>
                                        <div class="select-basic">
                                            <select name="rubro" class="form-control ad_search_category">
                                                <option value="" selected="true" disabled="disabled">Seleccione un Rubro</option>
                                                @foreach ($categorias as $categoria)
                                                @if($categoria->status == 1)
                                                    <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- ends: .form-group -->
                                    <div class="form-group">
                                        <label for="ciudad">Seleccione ciudad</label>
                                        <div class="select-basic">
                                            <select name="ciudad" class="form-control ad_search_city">
                                                <option value="" selected="true" disabled="disabled">Seleccione una ciudad</option>
                                                @foreach ($ciudades as $ciudad)
                                                @if($ciudad->status == 1)
                                                    <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><!-- ends: .form-group -->
                                    <div class="check-btn">
                                        <div class="btn-checkbox active-color-secondary">
                                            <label>
                                                <input type="checkbox" value="1"><span class="color-success"><i class="la la-clock-o"></i> Abierto ahora</span>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="filter-checklist">
                                        <h5>Filtrar por Puntuación</h5>
                                        <div class="sort-rating">
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                                <label class="custom-control-label" for="customCheck7">
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">
                                                    <span class="active"><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                    <span><i class="la la-star"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div><!-- ends: .filter-checklist -->
                                    <button type="submit" href="" class="btn btn-gradient btn-gradient-two btn-block btn-icon icon-right m-top-40">Buscar ahora <span class="la la-long-arrow-right"></span></a>
                                </form><!-- ends: form -->
                            </div><!-- ends: .default-ad-search -->
                        </div>
                    </div><!-- ends: .col-lg-4 -->

                    <div class="col-lg-8 order-0 order-lg-1">
                        <div class="row">
                            @foreach ($empresas as $empresa)
                            @if($empresa->status == 1)
                                <div class="col-lg-12">
                                    <div class="atbd_single_listing atbd_listing_list">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="{{route('empresa.show',$empresa->id)}}">
                                                        @foreach ($empresa->images as $image)
                                                        <a href="{{route('empresa.show',$empresa->id)}}"><img style="width: 350px; height: 280px; object-fit: cover;" src="{{asset('storage/'.$image->url)}}" alt="listing image"></a>
                                                        @endforeach

                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="{{route('empresa.show',$empresa->id)}}">{{$empresa->name}}</a>
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
                                                                <a href="{{route('rubro.show',$categor->id)}}"><span class="{{$categor->icon}}"></span>{{$categor->name}}</a>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>{{$empresa->valorations->count()}}</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                        <li>
                                                            <div class="atbd_author atbd_author--thumb">
                                                                <a href="">

                                                                    @foreach ($empresa->user->images as $image)
                                                                    <img src="{{asset('storage/'.$image->url)}}" alt="Author Image" style="width: 40px ; height: 40px; object-fit: cover;">
                                                                    @endforeach

                                                                    <span class="custom-tooltip">{{$empresa->user->name}}</span>
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-lg-12 -->
                                @endif
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="navigation pagination d-flex justify-content-end" role="navigation">
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href=""><span class="la la-long-arrow-left"></span></a>
                                        <a class="page-numbers" href="">1</a>
                                        <span aria-current="page" class="page-numbers current">2</span>
                                        <a class="page-numbers" href="">3</a>
                                        <a class="next page-numbers" href=""><span class="la la-long-arrow-right"></span></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div><!-- ends: .col-lg-8 -->
                </div>
            </div><!-- ends: .listing-items -->
        </div>
    </div>
</section><!-- ends: .all-listing-wrapper -->
