<section class="intro-wrapper bgimage overlay overlay--dark">
    <div class="bg_image_holder"><img src="{{asset('img/intro.jpg')}}" alt=""></div>
    @include('layout.main_menu')
    <div class="directory_content_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="search_title_area">
                        <h2 class="title">TRIAD CLUB</h2>
                        <p class="sub_title">Encuentra todas las empresas TOP del Perú</p>
                    </div><!-- ends: .search_title_area -->
                    <form action="/" class="search_form">
                        <div class="atbd_seach_fields_wrapper">
                            <div class="single_search_field search_query">
                                <input class="form-control search_fields" type="text" placeholder="Buscar...">
                            </div>
                            <div class="single_search_field search_category">
                                <select class="search_fields" id="at_biz_dir-category">
                                    <option value="#">Seleccione un Rubro</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="single_search_field search_location">
                                <select class="search_fields" id="at_biz_dir-location">
                                    <option value="#">Seleccione una Ciudad</option>
                                    @foreach ($ciudades as $ciudad)
                                        <option value="{{$ciudad->id}}">{{$ciudad->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="atbd_submit_btn">
                                <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Buscar</button>
                            </div>
                        </div>
                    </form><!-- ends: .search_form -->
                    <div class="directory_home_category_area">
                        <ul class="categories">
                            @foreach ($categorias as $cat)
                                <li>
                                    <a href="{{route('rubro.show',$cat->id)}}" value="{{$cat->id}}">
                                        <span class="color-success"><i class="{{$cat->icon}}"></i></span>
                                        {{$cat->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- ends: .directory_home_category_area -->
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </div><!-- ends: .directory_search_area -->
</section><!-- ends: .intro-wrapper -->

@include('layout.modals.modal_login')
@include('usuario.modal_registro')